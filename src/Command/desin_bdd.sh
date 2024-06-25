#! /usr/bin/env bash

# Be careful, all ORM definitions must be writtent on one line
# You can use this regex pattern to find all non compliant attributes : ^\s+#\[ORM.*[^\)\]]$

__version="20240602-0.3"
#
# Project directory
PROJECT_DIR=${1:-./}

# Options
ENABLE_EXTENSIONS_RELATIONS=false
ENABLE_INTERFACES_RELATIONS=false

# Define here your groups colors
# A group corresponds to a set of classes that extend the same class
custom_blue="DAE8FC"
custom_green="D5E8D4"
custom_cyan="E7D5D6"
GROUPS_COLORS=(${custom_green} ${custom_blue} ${custom_cyan} "lightpink")

[[ -s "$PROJECT_DIR/symfony.lock" ]] || {
  >&2 echo "Error: not a Symfony project directory."
  exit 1
}

echo "> Generating diagram..."

UML_FILE="${PROJECT_DIR}classes.puml"
PNG_FILE="${PROJECT_DIR}classes.png"

HEADER="$(cat << EOB
@startuml

!define table(x) entity x << (T, white) >>
!define primary_key(x) <b><&key> x</b>
!define column(x) <&media-record> x

skinparam backgroundcolor White
skinparam class {
  BackgroundColor GhostWhite
  ArrowColor Black
  BorderColor Gray
}
skinparam shadowing false
skinparam legend {
  backgroundColor #GhostWhite
  entrySeparator #GhostWhite
}
EOB
)"

FOOTER="@enduml"

declare -a RELATIONS

declare -A VISIBILITY_CHAR=(
    [private]="-"
    [protected]="#"
    [public]="+"
)

read_relation() {
  unset relation_data
  declare -gA relation_data
  IFS=',' read -a data <<< "$1"
  for info in "${data[@]}"; do
    [[ $info =~ ^[[:blank:]]?(.+):[[:blank:]](.+)$ ]] &&
      key="${BASH_REMATCH[1]}"
      value="${BASH_REMATCH[2]}"
      [[ $key == "targetEntity" ]] &&
        value="${value/::class}"
      relation_data[$key]="$value"
  done
  # for key in "${!relation_data[@]}"; do
  #   echo -n "${key}: ${relation_data[$key]} / "
  # done
  # echo
}

add_extend_relation() {
    local entity="$1"
    local extension="$2"
    if $ENABLE_EXTENSIONS_RELATIONS; then
        RELATIONS+=("${extension} <|-- ${entity}")
    fi
}

add_implement_relation() {
    local entity="$1"
    local interface="$2"
    if $ENABLE_INTERFACES_RELATIONS; then
        RELATIONS+=("${interface} <|.. ${entity}")
    fi
}

read_field() {
  unset field_data
  declare -gA field_data
  IFS=',' read -a data <<< "$1"
  for info in "${data[@]}"; do
    [[ $info =~ ^[[:blank:]]?(.+):[[:blank:]](.+)$ ]] && {
      key="${BASH_REMATCH[1]}"
      value="${BASH_REMATCH[2]}"
      [[ $key == "type" ]] &&
        value="${value//\'}"
      field_data[$key]="$value"
    }
  done
}

relation_already_exists() {
    local relation="$1"
    for item in "${RELATIONS[@]}"; do
        if [[ "$item" == "$relation" ]]; then
            return 0
        fi
    done
    return 1
}

declare -A GROUPS_EXTENSIONS

read_entity() {
  # Get entity name, fields and data types
  PRIMARY='^#\[ORM\\Id\]$'
  COLUMN='^#\[ORM\\Column\(?(.+)?\)\]$'
  FOREIGN12='^#\[ORM\\OneToMany\((.+)\)\]$'
  FOREIGN21='^#\[ORM\\ManyToOne\((.+)\)\]$'
  FOREIGN11='^#\[ORM\\OneToOne\((.+)\)\]$'
  FOREIGN22='^#\[ORM\\ManyToMany\((.+)\)\]$'
  CLASS='^class[[:blank:]]+([A-Za-z_][A-Za-z0-9_]*)([[:blank:]]+extends[[:blank:]]+([A-Za-z_][A-Za-z0-9_]*))?([[:blank:]]+implements[[:blank:]]+([A-Za-z_][A-Za-z0-9_]*(,[[:blank:]]*[A-Za-z_][A-Za-z0-9_]*)*))?[[:blank:]]*$'
  ABSTRACT_CLASS='^abstract class[[:blank:]]+([A-Za-z]*)([[:blank:]]+extends[[:blank:]]+([A-Za-z]*))?([[:blank:]]+implements[[:blank:]]+([A-Za-z]*(,[[:blank:]]*[A-Za-z]*)*))?'
  FIELD='^(private|protected|public)[[:blank:]](readonly)?[[:blank:]]?\??\\?([A-Za-z0-9]+)?[[:blank:]]?\$([A-Za-z0-9_-]+)'
  while read -r line; do

    # Simple class
    [[ $line =~ $CLASS ]] && {
      entity="${BASH_REMATCH[1]}"
      extension="${BASH_REMATCH[3]}"
      interface="${BASH_REMATCH[5]}"
      title="${entity}"

      ## Extension relation
      if [ ! -z "$extension" ]; then
        add_extend_relation $entity $extension

        title+="<? extends ${extension} >"

        # Check if extension is already associated to a color
        if [ ! -v "GROUPS_EXTENSIONS[$extension]" ]; then
            # Define color
            GROUPS_EXTENSIONS["$extension"]="${GROUPS_COLORS[0]}"
            # Remove used color
            GROUPS_COLORS=("${GROUPS_COLORS[@]:1}")
        fi

        # Get color
        title+=" #header:${GROUPS_EXTENSIONS[$extension]}"
      fi

      ## Interface relation
      if [ ! -z "$interface" ]; then
        add_implement_relation $entity $interface
      fi

      echo -e "\nclass ${title} {" >> "$UML_FILE"
      echo " → Processing $entity"
    }

    # Abstract class
    [[ $line =~ $ABSTRACT_CLASS ]] && {
      entity="${BASH_REMATCH[1]}"
      extension="${BASH_REMATCH[3]}"
      interface="${BASH_REMATCH[5]}"
      title="${entity}"

      ## Extension relation
      if [ ! -z "$extension" ]; then
        add_extend_relation $entity $extension
      fi

      ## Interface relation
      if [ ! -z "$interface" ]; then
        add_implement_relation $entity $interface
      fi

      # Check if entity is already associated to a color
      if [ ! -v "GROUPS_EXTENSIONS[$entity]" ]; then
          # Define color
          GROUPS_EXTENSIONS["$entity"]="${GROUPS_COLORS[0]}"
          # Remove used color
          GROUPS_COLORS=("${GROUPS_COLORS[@]:1}")
      fi

      # Get color
      if [ ! -z "${GROUPS_EXTENSIONS[$entity]}" ]; then
        title+=" #${GROUPS_EXTENSIONS[$entity]}"
      fi
      echo -e "\nabstract ${title} {" >> "$UML_FILE"
      echo " → Processing $entity"
    }

    #[ORM\OneToMany(targetEntity: Record::class, mappedBy: 'artist_id', orphanRemoval: true, cascade: ['persist', 'remove'])]
    #[ORM\Column(type: 'string', length: 255)]

    [[ $line =~ $PRIMARY ]] && primary=1
    [[ $line =~ $FOREIGN12 ]] && { foreign12=1; read_relation "${BASH_REMATCH[1]}"; }
    [[ $line =~ $FOREIGN21 ]] && { foreign21=1; read_relation "${BASH_REMATCH[1]}"; }
    [[ $line =~ $FOREIGN11 ]] && { foreign11=1; read_relation "${BASH_REMATCH[1]}"; }
    [[ $line =~ $FOREIGN22 ]] && { foreign22=1; read_relation "${BASH_REMATCH[1]}"; }

    [[ $line =~ $COLUMN ]] && read_field "${BASH_REMATCH[1]}"

    [[ $line =~ $FIELD ]] && {
      visibility="${BASH_REMATCH[1]}"
      if [[ ${#BASH_REMATCH[@]} -eq 5 ]]; then
        field="${BASH_REMATCH[4]}"
        datatype="${BASH_REMATCH[3]}"
      else
        field="${BASH_REMATCH[3]}"
        datatype="${BASH_REMATCH[2]}"
      fi

      [[ ${field_data[unique]} == true ]] &&
        unique="UNIQUE"
      [[ ${field_data[unique]} == true ]] ||
        unset unique

      [[ $field ]] || {
        field=$datatype
        datatype="${field_data[type]}"
      }

      [[ $datatype ]] ||
        datatype="${field_data[type]}"

      [[ $primary ]] && {
        echo "  primary_key( $field ) : $datatype" >> "$UML_FILE"
        unset primary
        continue
      }
      [[ $foreign12 ]] && {
        [[ $datatype == "Collection" ]] && {
          unset foreign12
          continue
        }
        target_entity="${relation_data[targetEntity]}"
        [[ $target_entity ]] || target_entity="$datatype"
        [[ $target_entity == "self" ]] && target_entity="$entity"

        # echo "  foreign_key( $field ) : $target_entity <<FK>>" >> "$UML_FILE"
        RELATIONS+=("${entity} \"1\" -- \"*\" ${target_entity}")
        unset foreign12
        continue
      }
      [[ $foreign21 ]] && {
        [[ $datatype == "Collection" ]] && {
          unset foreign21
          continue
        }
        target_entity=${relation_data[targetEntity]}
        [[ $target_entity ]] || target_entity="$datatype"
        [[ $target_entity == "self" ]] && target_entity="$entity"

        # echo "  foreign_key( $field ) : $target_entity <<FK>>" >> "$UML_FILE"
        RELATIONS+=("${entity} \"*\" -- \"1\" ${target_entity}")
        unset foreign21
        continue
      }
      [[ $foreign11 ]] && {
        [[ $datatype == "Collection" ]] && {
          unset foreign11
          continue
        }
        target_entity="${relation_data[targetEntity]}"
        [[ $target_entity == "" ]] && target_entity="$datatype"
        [[ $target_entity == "self" ]] && target_entity="$entity"

        # Check if inverse relation does not already exists (A 1--1 B == B 1--1 A)
        INVERSED_RELATION="${target_entity} \"1\" -- \"1\" ${entity}"
        if ! relation_already_exists "$INVERSED_RELATION"; then
            # echo "  foreign_key( $field ) : $target_entity <<FK>>" >> "$UML_FILE"
            RELATIONS+=("${entity} \"1\" -- \"1\" ${target_entity}")
        fi
        unset foreign11
        continue
      }
      [[ $foreign22 ]] && {
        [[ $datatype == "Collection" ]] && {
          unset foreign22
          continue
        }
        target_entity="${relation_data[targetEntity]}"
        [[ $target_entity == "" ]] && target_entity="$datatype"
        [[ $target_entity == "self" ]] && target_entity="$entity"

        # echo "  foreign_key( $field ) : $target_entity <<FK>>" >> "$UML_FILE"
        RELATIONS+=("${entity} \"*\" -- \"*\" ${target_entity}")
        unset foreign22
        continue
      }

      echo "  ${VISIBILITY_CHAR[$visibility]}$field : $datatype $unique" >> "$UML_FILE"

    }
  done < $1
  echo "}" >> "$UML_FILE"
}

echo "$HEADER" > "$UML_FILE"

# Get only all php files
for file in $(find "$PROJECT_DIR/src/Entity" -type f -name "*.php"); do
  read_entity "$file"
done

echo >> "$UML_FILE"

for relation in "${RELATIONS[@]}"; do
  echo "$relation" >> "$UML_FILE"
done


LEGEND="package Legend {\n"

# Add Groups legend
#  legend
#  |= |= Type |
#  |<back:#FF0000>   </back>| Type A class |
#  |<back:#00FF00>   </back>| Type B class |
#  |<back:blue>   </back>| Type C class |
#  endlegend
LEGEND+="  legend\n    <#GhostWhite,#GhostWhite>|= Color |= Group |"
for cle in "${!GROUPS_EXTENSIONS[@]}"
do
    LEGEND+="\n    |<#${GROUPS_EXTENSIONS[$cle]}>| ${cle} |"
done
LEGEND+="\n  end legend"

# Simple and abstract class legend
LEGEND+="
  class Class {
    -privateAttribute:type
    #protectedAttribute:type
    +publicAttribute:type
    -privateMethod()
    #protectedMethod()
    +publicMethod()
  }

  abstract Abstract {
    attribute:type
  }
"

LEGEND+="}"

LEGEND+="\n\nnote top of Legend
  This document complies with plantuml.com recommendations
  (See https://plantuml.com/en/class-diagram).
end note"


echo -e "\n$LEGEND" >> "$UML_FILE"

echo -e "\n$FOOTER" >> "$UML_FILE"

# Check whether plantuml executable is available.
which plantuml &> /dev/null
_puml=$?

[[ $_puml ]] && {
  echo "> Compiling..."
  plantuml "$UML_FILE" || {
    >&2 echo "An error occured."
    exit 1
  }
}

[[ $_puml ]] || {
  >&2 echo "Error: could not find 'plantuml' executable. No image generated."
  >&2 echo "Saved: ${UML_FILE}"
  exit 1
}

echo "Done."
echo "Saved ${PNG_FILE}"

# Display diagram if feh is available.
which feh &> /dev/null && feh --zoom 90 "$PNG_FILE"
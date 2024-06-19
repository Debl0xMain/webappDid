# Sequence Utilisateur:Consultation_Occasions

## Description

- Le client souhaite prendre connaissance des occasions que nous proposons sur le site. Il pourra les filtrer par marque et par permis requis pour la moto

## Flux D'éèvements :

- Condition :
    Les motos doivent etre rentre en base de données
    Le client doit selectionne une ou plusieur marques
    Le client doit selectionne un ou plusieur permis moto (125,a2,a)

- Resultats :
    La liste des Moto s'affiches avec leur description
    La page se met a jour sans s'actualisé
    Les photos des moto ssont bien charge

## Flot Nominal

    L'utilisateur clique sur "Occasions"
    Le systheme lui affiche la page avec la liste de toute les moto [1 vue]

    L'utilisateur selectionne sur une marque de moto
    Le systheme se met a jour est affiche les motos de cette marque [1 card]

    L'utilisateur selectionne une nouvelle marque
    Le systheme se met a jour est affiche les deux marque selectionne 

    L'utilisateur decoche les deux marque
    le systheme se met a jour est ré-affiche toutes la liste des moto disponible

    L'utilisateur selectionne un permis
    Le systheme se emt a jour est affiche les motos disponible pour ce permis

    L'utilisateur selectionne une marque et un permis
    Le systheme se emt a jour est affiche les motos de cette marque disponible pour ce permis

## Flot Alternatifs

    Aucun moto n'est en vente actuellement 
    Le systheme bloque le systheme de trie et affiche le message suivant 'Aucun Stock'

    Aucun moto d'une marque n'est en vente 
    Le systheme n'affichera pas la marque dans le systheme de trie

    Aucun moto n'est disponible pour ce permis
    Le systheme n'affichera pas le type de permis dans le systheme de trie



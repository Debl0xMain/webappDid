from PIL import Image
import os

input_folder = 'logos'

# Vérifie si le dossier logos existe
if not os.path.exists(input_folder):
    print("Le dossier 'logos' n'existe pas.")
    exit()

# Liste tous les fichiers dans le dossier logos
file_list = os.listdir(input_folder)

# Vérifie si le dossier est vide
if not file_list:
    print("Le dossier 'logos' est vide.")
    exit()

# Crée un dossier pour les images converties en WebP
output_folder = 'logos_webp'
os.makedirs(output_folder, exist_ok=True)

# Convertit chaque fichier PNG en WebP
for filename in file_list:
    if filename.endswith('.png'):
        try:
            # Ouvre le fichier PNG
            with Image.open(os.path.join(input_folder, filename)) as img:
                # Convertit en WebP et met le nom de fichier en minuscules
                img.save(os.path.join(output_folder, os.path.splitext(filename)[0].lower() + '.webp'), "WEBP")
                print(f"Le fichier '{filename}' a été converti en WebP avec succès.")
        except Exception as e:
            print(f"Erreur lors de la conversion du fichier '{filename}' en WebP : {e}")

print("La conversion est terminée.")

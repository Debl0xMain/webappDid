from PIL import Image
import os

input_folder = 'logos'

if not os.path.exists(input_folder):
    print("Le dossier 'logos' n'existe pas.")
    exit()

file_list = os.listdir(input_folder)

if not file_list:
    print("Le dossier 'logos' est vide.")
    exit()

output_folder = 'logos_webp'
os.makedirs(output_folder, exist_ok=True)


for filename in file_list:
    if filename.endswith('.jpeg'):
        try:
            with Image.open(os.path.join(input_folder, filename)) as img:
                img.save(os.path.join(output_folder, os.path.splitext(filename)[0].lower() + '.webp'), "WEBP")
                print(f"Le fichier '{filename}' a été converti en WebP avec succès.")
        except Exception as e:
            print(f"Erreur lors de la conversion du fichier '{filename}' en WebP : {e}")

print("La conversion est terminée.")

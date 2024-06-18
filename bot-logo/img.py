from PIL import Image
import os

input_folder = 'logos'
output_folder = 'processed_logos'
os.makedirs(output_folder, exist_ok=True)

for filename in os.listdir(input_folder):
    if filename.endswith('.jpeg'):
        img = Image.open(f'{input_folder}/{filename}')
        img = img.resize((100, 100), Image.ANTIALIAS)
        img = img.convert("RGBA")

        output_path = os.path.join(output_folder, f"{os.path.splitext(filename)[0]}.webp")
        img.save(output_path, "WEBP")

print("All images processed and saved in WebP format.")

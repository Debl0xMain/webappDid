import zipfile
import os

output_folder = 'processed_logos'

with zipfile.ZipFile('logos.zip', 'w') as zipf:
    for root, dirs, files in os.walk(output_folder):
        for file in files:
            zipf.write(os.path.join(root, file), arcname=file)

print("ZIP file created successfully.")

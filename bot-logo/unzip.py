import zipfile
import os

zip_file = 'logos.zip'
extract_folder = 'extracted_logos'

os.makedirs(extract_folder, exist_ok=True)

with zipfile.ZipFile(zip_file, 'r') as zip_ref:
    zip_ref.extractall(extract_folder)

print("ZIP file extracted successfully.")

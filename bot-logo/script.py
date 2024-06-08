import requests
from PIL import Image
from io import BytesIO
import os

brands = [
    "ACCESS", "AEON", "AERMACCHI", "APRILIA", "ARCTIC CAT", "ARIIC", "ASKOLL", "AVERSUS", 
    "BENELLI", "BETA", "BIMOTA", "BMW", "BOOM-TRIKES", "BRIXTON", "BSA", "BUELL", "BULLIT", 
    "BYE BIKE", "CAGIVA", "CAN-AM", "CF MOTO", "CITO", "COLOVE", "CONDOR", "CORVUS", "DAELIM", 
    "DAXARA", "DERBI", "DKW", "DUCATI", "E.F.O", "EASYCOOL", "ECCITY", "ECOOTER", "E-Fati", 
    "EFUN", "EGLI", "ELECTRIC MOTION", "EML", "ENERGICA", "E-SCOOTER", "ETRIX", "EXPLORER", 
    "FANTIC", "GARELLI", "GASGAS", "GILERA", "GRAF CARELLO", "HARLEY-DAVIDSON", "HONDA", "HOREX", 
    "HPU", "HUSABERG", "HUSQVARNA", "HUSQVARNA BICYCLES", "HVR", "HYOSUNG", "HYTRACK", "INDIAN", 
    "INTENSE", "ITALJET", "JAWA", "KAWASAKI", "KITO", "KL", "KOVE", "KRÄMER", "KTM", "KUMPAN", 
    "KYBURZ", "KYMCO", "LAMBRETTA", "LAVERDA", "LML", "LVNENG", "LYNX", "MALAGUTI", "MANGOSTEEN", 
    "MASH", "MATCHLESS", "MBK", "MIDLAND CHOPPERS", "MONDIAL", "MONNIER-HONDA", "MONTESA", 
    "MOTO GUZZI", "MOTO MORINI", "MOTOBI", "MOTRON", "MV AGUSTA", "NEXT", "NIU", "NORTON", "NSU", 
    "ODES", "ONLINE", "PEUGEOT", "PIAGGIO", "POLARIS", "PONY", "PUCH", "QUADRO", "RAY", "REWACO", 
    "RGNT", "RIEJU", "ROYAL ENFIELD", "SACHS", "SAKURA", "SEGWAY", "SHERCO", "SILENCE", "SKIDOO", 
    "SKYTEAM", "SMC (SM)", "SOLEX", "Stark", "SUNRA", "SUPER SOCO", "SUR-RON", "SUTER", "SUZUKI", 
    "SWM", "SYM", "TALARIA", "TARO", "TERROT", "TGB", "TISTO", "TM", "TOMOS", "TORROT", "TRIUMPH", 
    "TRMOTOR", "UGBEST", "URAL", "VANDERHALL", "VECTRIX", "VELOCETTE", "VENT", "VICTORY", "VMOTO", 
    "VOGE", "WALZ", "WALZWERK", "WOTTAN", "YAMAHA", "ZERO", "ZERO ENGINEERING", "ZONTES", "ZÜNDAPP"
]

os.makedirs('logos', exist_ok=True)

for brand in brands:
    try:
        response = requests.get(f"https://logo.clearbit.com/{brand.lower()}.com")
        if response.status_code == 200:
            img = Image.open(BytesIO(response.content))
            img.save(f'logos/{brand}.png')
        else:
            print(f"Logo not found for {brand}")
    except Exception as e:
        print(f"Could not download logo for {brand}: {e}")

<?php
namespace App\DataFixtures;

use App\Entity\Moto;
use App\Entity\User;
use App\Entity\Marque;
use App\Entity\Category;
use App\Entity\Produits;
use App\Entity\Subcategory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    
    public function load(ObjectManager $manager): void
    {
        // Categories
        $categories = [
            ['catName' => 'huile', 'pictureName' => 'huile.png'],
            ['catName' => 'Liquide Frein', 'pictureName' => 'Liquide.png'],
            ['catName' => 'Piece Moteur', 'pictureName' => 'Piece.png']
        ];

        foreach ($categories as $catData) {
            $category = new Category();
            $category->setCatName($catData['catName']);
            $category->setPictureName($catData['pictureName']);
            $manager->persist($category);

            $this->addReference('category_' . $catData['catName'], $category);
        }

        // Subcategories
        $subCategories = [
            ['subName' => 'huile', 'subPictureName' => 'huile.png', 'category' => 'huile'],
            ['subName' => 'Liquide frein', 'subPictureName' => 'Liquide.png', 'category' => 'Liquide Frein'],
            ['subName' => 'Echappement', 'subPictureName' => 'Piece.png', 'category' => 'Piece Moteur']
        ];

        foreach ($subCategories as $subData) {
            $subcategory = new Subcategory();
            $subcategory->setSubName($subData['subName']);
            $subcategory->setSubPictureName($subData['subPictureName']);
            $subcategory->setLien($this->getReference('category_' . $subData['category']));
            $manager->persist($subcategory);

            $this->addReference('subcategory_' . $subData['subName'], $subcategory);
        }

        // Produits
        $produits = [
            ['produitName' => 'huile', 'produitDesc' => 'huile qualite', 'produitCaract' => 'DOT approved', 'produitPrice' => '200.00', 'produitPicture' => 'huile.png', 'subcategory' => 'huile'],
            ['produitName' => 'Liquide frein', 'produitDesc' => 'bien efficasse', 'produitCaract' => 'CE certified', 'produitPrice' => '300.00', 'produitPicture' => 'Liquide.png', 'subcategory' => 'Liquide frein'],
            ['produitName' => 'Echappement', 'produitDesc' => 'Beau Bruit', 'produitCaract' => 'Waterproof', 'produitPrice' => '150.00', 'produitPicture' => 'Echappement.png', 'subcategory' => 'Echappement']
        ];

        foreach ($produits as $produitData) {
            $produit = new Produits();
            $produit->setProduitName($produitData['produitName']);
            $produit->setProduitDesc($produitData['produitDesc']);
            $produit->setProduitCaract($produitData['produitCaract']);
            $produit->setProduitPrice($produitData['produitPrice']);
            $produit->setProduitPicture($produitData['produitPicture']);
            $produit->setProduitRelation($this->getReference('subcategory_' . $produitData['subcategory']));
            $manager->persist($produit);
        }

        // Marques
        $marques = [
            ['Name' => 'Access', 'pictureName' => 'access.webp'],
            ['Name' => 'Aeon', 'pictureName' => 'aeon.webp'],
            ['Name' => 'Aermacchi', 'pictureName' => 'aermacchi.webp'],
            ['Name' => 'Aprilia', 'pictureName' => 'aprilia.webp'],
            ['Name' => 'Arctic Cat', 'pictureName' => 'arctic_cat.webp'],
            ['Name' => 'Ariic', 'pictureName' => 'ariic.webp'],
            ['Name' => 'Askoll', 'pictureName' => 'askoll.webp'],
            ['Name' => 'Aversus', 'pictureName' => 'aversus.webp'],
            ['Name' => 'Benelli', 'pictureName' => 'benelli.webp'],
            ['Name' => 'Beta', 'pictureName' => 'beta.webp'],
            ['Name' => 'Bimota', 'pictureName' => 'bimota.webp'],
            ['Name' => 'Bmw', 'pictureName' => 'bmw.webp'],
            ['Name' => 'Boom-Trikes', 'pictureName' => 'boom_trikes.webp'],
            ['Name' => 'Brixton', 'pictureName' => 'brixton.webp'],
            ['Name' => 'Bsa', 'pictureName' => 'bsa.webp'],
            ['Name' => 'Buell', 'pictureName' => 'buell.webp'],
            ['Name' => 'Bullit', 'pictureName' => 'bullit.webp'],
            ['Name' => 'Bye Bike', 'pictureName' => 'bye_bike.webp'],
            ['Name' => 'Cagiva', 'pictureName' => 'cagiva.webp'],
            ['Name' => 'Can-Am', 'pictureName' => 'can_am.webp'],
            ['Name' => 'Cf Moto', 'pictureName' => 'cf_moto.webp'],
            ['Name' => 'Cito', 'pictureName' => 'cito.webp'],
            ['Name' => 'Colove', 'pictureName' => 'colove.webp'],
            ['Name' => 'Condor', 'pictureName' => 'condor.webp'],
            ['Name' => 'Corvus', 'pictureName' => 'corvus.webp'],
            ['Name' => 'Daelim', 'pictureName' => 'daelim.webp'],
            ['Name' => 'Daxara', 'pictureName' => 'daxara.webp'],
            ['Name' => 'Derbi', 'pictureName' => 'derbi.webp'],
            ['Name' => 'Dkw', 'pictureName' => 'dkw.webp'],
            ['Name' => 'Ducati', 'pictureName' => 'ducati.webp'],
            ['Name' => 'E.F.O', 'pictureName' => 'e_f_o.webp'],
            ['Name' => 'Easycool', 'pictureName' => 'easycool.webp'],
            ['Name' => 'Eccity', 'pictureName' => 'eccity.webp'],
            ['Name' => 'Ecooter', 'pictureName' => 'ecooter.webp'],
            ['Name' => 'E-Fati', 'pictureName' => 'e_fati.webp'],
            ['Name' => 'Efun', 'pictureName' => 'efun.webp'],
            ['Name' => 'Egli', 'pictureName' => 'egli.webp'],
            ['Name' => 'Electric Motion', 'pictureName' => 'electric_motion.webp'],
            ['Name' => 'Eml', 'pictureName' => 'eml.webp'],
            ['Name' => 'Energica', 'pictureName' => 'energica.webp'],
            ['Name' => 'E-Scooter', 'pictureName' => 'e_scooter.webp'],
            ['Name' => 'Etrix', 'pictureName' => 'etrix.webp'],
            ['Name' => 'Explorer', 'pictureName' => 'explorer.webp'],
            ['Name' => 'Fantic', 'pictureName' => 'fantic.webp'],
            ['Name' => 'Garelli', 'pictureName' => 'garelli.webp'],
            ['Name' => 'Gasgas', 'pictureName' => 'gasgas.webp'],
            ['Name' => 'Gilera', 'pictureName' => 'gilera.webp'],
            ['Name' => 'Graf Carello', 'pictureName' => 'graf_carello.webp'],
            ['Name' => 'Harley-Davidson', 'pictureName' => 'harley_davidson.webp'],
            ['Name' => 'Honda', 'pictureName' => 'honda.webp'],
            ['Name' => 'Horex','pictureName' => 'horex.webp'],
            ['Name' => 'Hpu', 'pictureName' => 'hpu.webp'],
            ['Name' => 'Husaberg', 'pictureName' => 'husaberg.webp'],
            ['Name' => 'Husqvarna', 'pictureName' => 'husqvarna.webp'],
            ['Name' => 'Husqvarna Bicycles', 'pictureName' => 'husqvarna_bicycles.webp'],
            ['Name' => 'Hvr', 'pictureName' => 'hvr.webp'],
            ['Name' => 'Hyosung', 'pictureName' => 'hyosung.webp'],
            ['Name' => 'Hytrack', 'pictureName' => 'hytrack.webp'],
            ['Name' => 'Indian', 'pictureName' => 'indian.webp'],
            ['Name' => 'Intense', 'pictureName' => 'intense.webp'],
            ['Name' => 'Italjet', 'pictureName' => 'italjet.webp'],
            ['Name' => 'Jawa', 'pictureName' => 'jawa.webp'],
            ['Name' => 'Kawasaki', 'pictureName' => 'kawasaki.webp'],
            ['Name' => 'Kito', 'pictureName' => 'kito.webp'],
            ['Name' => 'Kl', 'pictureName' => 'kl.webp'],
            ['Name' => 'Kove', 'pictureName' => 'kove.webp'],
            ['Name' => 'Krämer', 'pictureName' => 'kramer.webp'],
            ['Name' => 'Ktm', 'pictureName' => 'ktm.webp'],
            ['Name' => 'Kumpan', 'pictureName' => 'kumpan.webp'],
            ['Name' => 'Kyburz', 'pictureName' => 'kyburz.webp'],
            ['Name' => 'Kymco', 'pictureName' => 'kymco.webp'],
            ['Name' => 'Lambretta', 'pictureName' => 'lambretta.webp'],
            ['Name' => 'Laverda', 'pictureName' => 'laverda.webp'],
            ['Name' => 'Lml', 'pictureName' => 'lml.webp'],
            ['Name' => 'Lvneng', 'pictureName' => 'lvneng.webp'],
            ['Name' => 'Lynx', 'pictureName' => 'lynx.webp'],
            ['Name' => 'Malaguti', 'pictureName' => 'malaguti.webp'],
            ['Name' => 'Mangosteen', 'pictureName' => 'mangosteen.webp'],
            ['Name' => 'Mash', 'pictureName' => 'mash.webp'],
            ['Name' => 'Matchless', 'pictureName' => 'matchless.webp'],
            ['Name' => 'Mbk', 'pictureName' => 'mbk.webp'],
            ['Name' => 'Midland Choppers', 'pictureName' => 'midland_choppers.webp'],
            ['Name' => 'Mondial', 'pictureName' => 'mondial.webp'],
            ['Name' => 'Monnier-Honda', 'pictureName' => 'monnier_honda.webp'],
            ['Name' => 'Montesa', 'pictureName' => 'montesa.webp'],
            ['Name' => 'Moto Guzzi', 'pictureName' => 'moto_guzzi.webp'],
            ['Name' => 'Moto Morini', 'pictureName' => 'moto_morini.webp'],
            ['Name' => 'Motobi', 'pictureName' => 'motobi.webp'],
            ['Name' => 'Motron', 'pictureName' => 'motron.webp'],
            ['Name' => 'Mv Agusta', 'pictureName' => 'mv_agusta.webp'],
            ['Name' => 'Next', 'pictureName' => 'next.webp'],
            ['Name' => 'Niu', 'pictureName' => 'niu.webp'],
            ['Name' => 'Norton', 'pictureName' => 'norton.webp'],
            ['Name' => 'Nsu', 'pictureName' => 'nsu.webp'],
            ['Name' => 'Odes', 'pictureName' => 'odes.webp'],
            ['Name' => 'Online', 'pictureName' => 'online.webp'],
            ['Name' => 'Peugeot', 'pictureName' => 'peugeot.webp'],
            ['Name' => 'Piaggio', 'pictureName' => 'piaggio.webp'],
            ['Name' => 'Polaris', 'pictureName' => 'polaris.webp'],
            ['Name' => 'Pony', 'pictureName' => 'pony.webp'],
            ['Name' => 'Puch', 'pictureName' => 'puch.webp'],
            ['Name' => 'Quadro', 'pictureName' => 'quadro.webp'],
            ['Name' => 'Ray', 'pictureName' => 'ray.webp'],
            ['Name' => 'Rewaco', 'pictureName' => 'rewaco.webp'],
            ['Name' => 'Rgnt', 'pictureName' => 'rgnt.webp'],
            ['Name' => 'Rieju', 'pictureName' => 'rieju.webp'],
            ['Name' => 'Royal Enfield', 'pictureName' => 'royal_enfield.webp'],
            ['Name' => 'Sachs', 'pictureName' => 'sachs.webp'],
            ['Name' => 'Sakura', 'pictureName' =>'sakura.webp'],
            ['Name' => 'Segway', 'pictureName' => 'segway.webp'],
            ['Name' => 'Sherco', 'pictureName' => 'sherco.webp'],
            ['Name' => 'Silence', 'pictureName' => 'silence.webp'],
            ['Name' => 'Skidoo', 'pictureName' => 'skidoo.webp'],
            ['Name' => 'Skyteam', 'pictureName' => 'skyteam.webp'],
            ['Name' => 'Smc (Sm)', 'pictureName' => 'smc.webp'],
            ['Name' => 'Solex', 'pictureName' => 'solex.webp'],
            ['Name' => 'Stark', 'pictureName' => 'stark.webp'],
            ['Name' => 'Sunra', 'pictureName' => 'sunra.webp'],
            ['Name' => 'Super Soco', 'pictureName' => 'super_soco.webp'],
            ['Name' => 'Sur-Ron', 'pictureName' => 'sur_ron.webp'],
            ['Name' => 'Suter', 'pictureName' => 'suter.webp'],
            ['Name' => 'Suzuki', 'pictureName' => 'suzuki.webp'],
            ['Name' => 'Swm', 'pictureName' => 'swm.webp'],
            ['Name' => 'Sym', 'pictureName' => 'sym.webp'],
            ['Name' => 'Talaria', 'pictureName' => 'talaria.webp'],
            ['Name' => 'Taro', 'pictureName' => 'taro.webp'],
            ['Name' => 'Terrot', 'pictureName' => 'terrot.webp'],
            ['Name' => 'Tgb', 'pictureName' => 'tgb.webp'],
            ['Name' => 'Tisto', 'pictureName' => 'tisto.webp'],
            ['Name' => 'Tm', 'pictureName' => 'tm.webp'],
            ['Name' => 'Tomos', 'pictureName' => 'tomos.webp'],
            ['Name' => 'Torrot', 'pictureName' => 'torrot.webp'],
            ['Name' => 'Triumph', 'pictureName' => 'triumph.webp'],
            ['Name' => 'Trmotor', 'pictureName' => 'trmotor.webp'],
            ['Name' => 'Ugbest', 'pictureName' => 'ugbest.webp'],
            ['Name' => 'Ural', 'pictureName' => 'ural.webp'],
            ['Name' => 'Vanderhall', 'pictureName' => 'vanderhall.webp'],
            ['Name' => 'Vectrix', 'pictureName' => 'vectrix.webp'],
            ['Name' => 'Velocette', 'pictureName' => 'velocette.webp'],
            ['Name' => 'Vent', 'pictureName' => 'vent.webp'],
            ['Name' => 'Victory', 'pictureName' => 'victory.webp'],
            ['Name' => 'Vmoto', 'pictureName' => 'vmoto.webp'],
            ['Name' => 'Voge', 'pictureName' => 'voge.webp'],
            ['Name' => 'Walz', 'pictureName' => 'walz.webp'],
            ['Name' => 'Walzwerk', 'pictureName' => 'walzwerk.webp'],
            ['Name' => 'Wottan', 'pictureName' => 'wottan.webp'],
            ['Name' => 'Yamaha', 'pictureName' => 'yamaha.webp'],
            ['Name' => 'Zero', 'pictureName' => 'zero.webp'],
            ['Name' => 'Zero Engineering', 'pictureName' => 'zero_engineering.webp'],
            ['Name' => 'Zontes', 'pictureName' => 'zontes.webp'],
            ['Name' => 'Zündapp', 'pictureName' => 'zundapp.webp']
        ];

        

        foreach ($marques as $marqueData) {
            $marque = new Marque();
            $marque->setName($marqueData['Name']);
            $marque->setPictureName($marqueData['pictureName']);
            $manager->persist($marque);

            $this->addReference('marque_' . $marqueData['Name'], $marque);
        }

        // Moto
        $motos = [
            ['motoName' => 'YZF-R1', 'motoYear' => 2011, 'motoDesc' => 'High-performance sport bike', 'motoPrice' => '15000.00', 'motoOption' => ['ABS', 'Traction Control'], 'marque' => 'Yamaha', 'motoPicture' => 'moto1.png', 'carousel' => ['moto1.png', 'moto2.png', 'moto3.png'], 'cylindre' => '1200cc', 'permis' => 'a2'],
            ['motoName' => 'YZF-R6', 'motoYear' => 2011, 'motoDesc' => 'High-performance sport bike', 'motoPrice' => '15000.00', 'motoOption' => ['ABS', 'Traction Control'], 'marque' => 'Yamaha', 'motoPicture' => 'moto1.png', 'carousel' => ['moto1.png', 'moto2.png', 'moto3.png'], 'cylindre' => '1200cc', 'permis' => 'a'],
            ['motoName' => 'CBR1000RR', 'motoYear' => 2015, 'motoDesc' => 'Powerful and agile', 'motoPrice' => '14000.00', 'motoOption' => ['Quick Shifter', 'ABS'], 'marque' => 'Honda', 'motoPicture' => 'moto2.png', 'carousel' => ['moto1.png', 'moto2.png', 'moto3.png'], 'cylindre' => '1200cc', 'permis' => '125'],
            ['motoName' => 'Ninja ZX-10R', 'motoYear' => 1999, 'motoDesc' => 'Track-focused', 'motoPrice' => '14500.00', 'motoOption' => ['Launch Control', 'Traction Control'], 'marque' => 'Kawasaki', 'motoPicture' => 'moto3.png', 'carousel' => ['moto1.png', 'moto2.png', 'moto3.png'], 'cylindre' => '1200cc', 'permis' => 'a']
        ];
        

        foreach ($motos as $motoData) {
            $moto = new Moto();
            $moto->setMotoName($motoData['motoName']);
            $moto->setMotoYear($motoData['motoYear']);
            $moto->setMotoDesc($motoData['motoDesc']);
            $moto->setMotoPrice($motoData['motoPrice']);
            $moto->setMotoOption($motoData['motoOption']);
            $moto->setMarque($this->getReference('marque_' . $motoData['marque']));
            $moto->setMotoPicture($motoData['motoPicture']);
            $moto->setCarousel($motoData['carousel']);
            $moto->setCylindre($motoData['cylindre']);
            $moto->setPermis($motoData['permis']);
            $manager->persist($moto);
        }

        // Users
        $users = [
            ['username' => 'admin', 'password' => 'adminpass', 'roles' => ['ROLE_ADMIN']],
            ['username' => 'user', 'password' => 'userpass', 'roles' => ['ROLE_USER']]
        ];

        foreach ($users as $userData) {
            $user = new User();
            $user->setUsername($userData['username']);
            $user->setRoles($userData['roles']);
            $user->setPassword($this->passwordHasher->hashPassword($user, $userData['password']));
            $manager->persist($user);
        }

        $manager->flush();
    }
}

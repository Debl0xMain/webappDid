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
            ['catName' => 'huile', 'pictureName' => 'huile.jpg'],
            ['catName' => 'Liquide Frein', 'pictureName' => 'Liquide.jpg'],
            ['catName' => 'Piece Moteur', 'pictureName' => 'Piece.jpg']
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
            ['subName' => 'huile', 'subPictureName' => 'huile.jpg', 'category' => 'huile'],
            ['subName' => 'Liquide frein', 'subPictureName' => 'Liquide.jpg', 'category' => 'Liquide Frein'],
            ['subName' => 'Echappement', 'subPictureName' => 'Piece.jpg', 'category' => 'Piece Moteur']
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
            ['produitName' => 'huile', 'produitDesc' => 'huile qualite', 'produitCaract' => 'DOT approved', 'produitPrice' => '200.00', 'produitPicture' => 'huile.jpg', 'subcategory' => 'huile'],
            ['produitName' => 'Liquide frein', 'produitDesc' => 'bien efficasse', 'produitCaract' => 'CE certified', 'produitPrice' => '300.00', 'produitPicture' => 'Liquide.jpg', 'subcategory' => 'Liquide frein'],
            ['produitName' => 'Echappement', 'produitDesc' => 'Beau Bruit', 'produitCaract' => 'Waterproof', 'produitPrice' => '150.00', 'produitPicture' => 'Echappement.jpg', 'subcategory' => 'Echappement']
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
            ['Name' => 'Yamaha', 'pictureName' => 'yamaha.webp'],
            ['Name' => 'Honda', 'pictureName' => 'honda.webp'],
            ['Name' => 'Kawasaki', 'pictureName' => 'kawasaki.webp']
        ];

        foreach ($marques as $marqueData) {
            $marque = new Marque();
            $marque->setName($marqueData['Name']);
            $marque->setPictureName($marqueData['pictureName']);
            $manager->persist($marque);

            $this->addReference('marque_' . $marqueData['Name'], $marque);
        }

        // Motos
        $motos = [
            ['motoName' => 'YZF-R1', 'motoYear' => 2011, 'motoDesc' => 'High-performance sport bike', 'motoPrice' => '15000.00', 'motoOption' => ['ABS', 'Traction Control'], 'marque' => 'Yamaha', 'motoPicture' => 'moto1.png','carousel'=>['moto1','moto2','moto3.png']],
            ['motoName' => 'YZF-R6', 'motoYear' => 2011, 'motoDesc' => 'High-performance sport bike', 'motoPrice' => '15000.00', 'motoOption' => ['ABS', 'Traction Control'], 'marque' => 'Yamaha', 'motoPicture' => 'moto1.png','carousel'=>['moto1','moto2','moto3.png']],
            ['motoName' => 'CBR1000RR', 'motoYear' => 2015, 'motoDesc' => 'Powerful and agile', 'motoPrice' => '14000.00', 'motoOption' => ['Quick Shifter', 'ABS'], 'marque' => 'Honda', 'motoPicture' => 'moto2.png','carousel'=>['moto1','moto2','moto3.png']],
            ['motoName' => 'Ninja ZX-10R', 'motoYear' => 1999, 'motoDesc' => 'Track-focused', 'motoPrice' => '14500.00', 'motoOption' => ['Launch Control', 'Traction Control'], 'marque' => 'Kawasaki', 'motoPicture' => 'moto3.png','carousel'=>['moto1','moto2','moto3.png']]
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

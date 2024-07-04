<?php

namespace App\Controller;

use App\Repository\MotoRepository;
use App\Repository\MarqueRepository;
use App\Repository\CategoryRepository;
use App\Repository\ProduitsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{
    private $motoRepository;
    private $CategoryRepository;
    private $MarquesRepository;
    private $produitRepository;

    public function __construct(CategoryRepository $CategoryRepository,MotoRepository $motoRepository,MarqueRepository $MarquesRepository,ProduitsRepository $produitRepository)
    {   
        $this->motoRepository = $motoRepository;
        $this->CategoryRepository = $CategoryRepository;
        $this->MarquesRepository = $MarquesRepository;
        $this->produitRepository = $produitRepository;
    }

    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('page/accueil.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/catalogue', name: 'catalogue')]
    public function catalogue(): Response
    {
        $categories = $this->CategoryRepository->findAll();
        return $this->render('page/catalogue.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/occasion', name: 'app_occasion')]
    public function occasion(): Response
    {
        $motos = $this->motoRepository->findAll();
        $marquesArray = [];
        $permisArray = [];

        foreach ($motos as $moto) {
            $marque = $moto->getMarque();
            if ($marque !== null) {
                $marqueId = $marque->getId();
                $marqueName = $marque->getName();
                
                $marqueExists = false;
                foreach ($marquesArray as $marqueData) {
                    if ($marqueData['name'] === $marqueName) {
                        $marqueExists = true;
                        break;
                    }
                }

                if (!$marqueExists) {
                    $marquesArray[] = ['id' => $marqueId, 'name' => $marqueName];
                }
            }
        }
        foreach ($motos as $moto) {
            $permis = $moto->getPermis();
            if ($permis !== null) {
                $permis = $moto->getPermis();
                
                $permisExists = false;
                foreach ($permisArray as $permisData) {
                    if ($permisData['name'] === $permis) {
                        $permisExists = true;
                        break;
                    }
                }

                if (!$permisExists) {
                    $permisArray[] = ['name' => $permis];
                }
            }
        }

        return $this->render('page/occasion.html.twig', [
            'motos' => $motos,
            "marques" => $marquesArray,
            "permis" => $permisArray
        ]);
    }

    #[Route('/occasion/{moto_id}', name: 'app_detail_occasion')]
    public function detail_occasion(int $moto_id): Response
    {
        $MotoFind = $this->motoRepository->findby(["id" => $moto_id]);

        return $this->render('page/ocassion_detail.html.twig', [
            'MotoFind' => $MotoFind,
        ]);
    }

    #[Route('/produits/{subcat}', name: 'app_produit_catalogue')]
    public function  produit_catalogue(int $subcat): Response
    {
        $ProduitFind = $this->produitRepository->findby(["produit_relation" => $subcat]);

        return $this->render('page/produits.html.twig', [
            'produits' => $ProduitFind,
        ]);
    }

}

<?php

namespace App\Controller;

use App\Repository\MotoRepository;
use App\Repository\MarqueRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('page/accueil.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/catalogue', name: 'catalogue')]
    public function catalogue(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();
        return $this->render('page/catalogue.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/occasion', name: 'app_occasion')]
    public function occasion(MotoRepository $motoRepository, MarqueRepository $MarquesRepository): Response
    {
        $motos = $motoRepository->findAll();
        $marquesArray = [];

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

        return $this->render('page/occasion.html.twig', [
            'motos' => $motos,
            "marques" => $marquesArray
        ]);
    }
}

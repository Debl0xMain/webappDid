<?php
namespace App\Controller;

use App\Repository\MotoRepository;
use App\Repository\NewletterRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FunctionController extends AbstractController
{
    private $newletterRepository;
    private $validator;
    private $motoRepository;

    public function __construct(NewletterRepository $newletterRepository, ValidatorInterface $validator,MotoRepository $motoRepository)
    {
        $this->newletterRepository = $newletterRepository;
        $this->validator = $validator;
        $this->motoRepository = $motoRepository;
    }

    #[Route('/add-email', name: 'add_email', methods: ['POST'])]
    public function addEmail(Request $request): Response
    {
        $email = $request->request->get('email');

        if ($email === null) {
            return new Response('Invalid email input.');
        }

        $emailConstraint = new Assert\Email();
        $errors = $this->validator->validate($email, $emailConstraint);

        if (count($errors) > 0) {
            return new Response('Invalid email format.');
        }

        $existingEmail = $this->newletterRepository->findByEmail($email);
        if ($existingEmail !== null) {
            return new Response('Email already exists.');
        }

        $this->newletterRepository->addMailToList($email);

        return new Response('Email added successfully!');
    }
    
    #[Route('/select_m', name: 'motos_par_marque', methods: ['POST'])]
    public function motosParMarque(Request $request): JsonResponse
    {
        $marqueIdsReceive = $request->getContent();
        $data = json_decode($marqueIdsReceive, true);
    
        if (!isset($data['ids']) || !is_array($data['ids']) || empty($data['ids']) && count($data['permis']) >= 1 ) {
            $idsPermis = $data['permis'];
    
            $motop = $this->motoRepository->findBy(['permis' => $idsPermis]);
            $returnArray = [];
            
            foreach ($motop as $moto) {
                $returnArray[] = [
                    'id' => $moto->getId(),
                    'motoName' => $moto->getMotoName(),
                    'motoYear' => $moto->getMotoYear(),
                    'motoDesc' => $moto->getMotoDesc(),
                    'motoPrice' => $moto->getMotoPrice(),
                    'motoOption' => $moto->getMotoOption(),
                    'marque' => ($moto->getMarque() ? $moto->getMarque()->getName() : null),
                    'motoPicture' => $moto->getMotoPicture(),
                    'motoCarousel' => $moto->getCarousel(),
                ];
            }
        
            return new JsonResponse($returnArray);
        }
        if (!isset($data['permis']) || !is_array($data['permis']) || empty($data['permis']) && count($data['ids']) >= 1) {
            
            $idsArray = $data['ids'];
    
            $motos = $this->motoRepository->findBy(['marque' => $idsArray]);
        
            $returnArray = [];
            
            foreach ($motos as $moto) {
                $returnArray[] = [
                    'id' => $moto->getId(),
                    'motoName' => $moto->getMotoName(),
                    'motoYear' => $moto->getMotoYear(),
                    'motoDesc' => $moto->getMotoDesc(),
                    'motoPrice' => $moto->getMotoPrice(),
                    'motoOption' => $moto->getMotoOption(),
                    'marque' => ($moto->getMarque() ? $moto->getMarque()->getName() : null),
                    'motoPicture' => $moto->getMotoPicture(),
                    'motoCarousel' => $moto->getCarousel(),
                ];
            }
        
            return new JsonResponse($returnArray);
        }
        else{
            $idsArray = $data['ids'];
            $idsPermis = $data['permis'];

            $motos = $this->motoRepository->findBy(['marque' => $idsArray,'permis' => $idsPermis]);
        
            $returnArray = [];
            
            foreach ($motos as $moto) {
                $returnArray[] = [
                    'id' => $moto->getId(),
                    'motoName' => $moto->getMotoName(),
                    'motoYear' => $moto->getMotoYear(),
                    'motoDesc' => $moto->getMotoDesc(),
                    'motoPrice' => $moto->getMotoPrice(),
                    'motoOption' => $moto->getMotoOption(),
                    'marque' => ($moto->getMarque() ? $moto->getMarque()->getName() : null),
                    'motoPicture' => $moto->getMotoPicture(),
                    'motoCarousel' => $moto->getCarousel(),
                    'permis' => $moto->getPermis(),
                ];
            }
    
            return new JsonResponse($returnArray);
        }
        
    }
    

    #[Route('/select_a', name: 'motos_all', methods: ['POST'])]
    public function motosAll(): JsonResponse
    {
        $motos = $this->motoRepository->findAll();
        $motosInfo = [];
        
        foreach ($motos as $moto) {
            $motoInfo = [
                'id' => $moto->getId(),
                'motoName' => $moto->getMotoName(),
                'motoYear' => $moto->getMotoYear(),
                'motoDesc' => $moto->getMotoDesc(),
                'motoPrice' => $moto->getMotoPrice(),
                'motoOption' => $moto->getMotoOption(),
                'marque' => ($moto->getMarque() ? $moto->getMarque()->getName() : null), // Si la marque existe, on récupère son nom
                'motoPicture' => $moto->getMotoPicture(),
            ];
        
            $motosInfo[] = $motoInfo;
        }
        
        return new JsonResponse($motosInfo);
    }

}

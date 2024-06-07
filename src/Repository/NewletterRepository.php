<?php

namespace App\Repository;

use App\Entity\Newletter;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Newletter>
 */
class NewletterRepository extends ServiceEntityRepository
{
    private $entityManager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Newletter::class);
        $this->entityManager = $entityManager;
    }

    public function addMailToList(string $email): void
    {
        $newletter = new Newletter();
        $newletter->setMailList($email);

        $this->entityManager->persist($newletter);
        $this->entityManager->flush();
    }
    public function findByEmail(string $email): ?Newletter
    {
        return $this->findOneBy(['mailList' => $email]);
    }
}

<?php


namespace App\Controller\Api;


use App\Adapter\CustomConnection;
use App\Entity\Category;
use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ObjectRepository;

class UserApiController
{
    private EntityManager $entityManager;
    private ObjectRepository $repository;

    public function __construct()
    {
        $this->entityManager = CustomConnection::getEntityManager();
        $this->repository = $this->entityManager->getRepository(User::class);
    }

    public function getAction(): void
    {
        foreach ($this->repository->findAll() as $user) {
            $data[] = [
                'id' => $user->getId(),
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                ];
        }
        echo json_encode($data);
    }
}
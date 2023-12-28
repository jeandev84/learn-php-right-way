<?php

declare(strict_types = 1);

namespace App\Services;

use App\Entity\Category;
use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Exception\NotSupported;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\ORM\TransactionRequiredException;

class CategoryService
{
    public function __construct(private readonly EntityManager $entityManager)
    {
    }

    public function create(string $name, User $user): Category
    {
        $category = new Category();

        $category->setUser($user);

        return $this->update($category, $name);
    }

    /**
     * @throws NotSupported
     */
    public function getPaginatedCategories(int $start, int $length): Paginator
    {
        $query = $this->entityManager
            ->getRepository(Category::class)
            ->createQueryBuilder('c')
            ->setFirstResult($start)
            ->setMaxResults($length);

        return new Paginator($query);
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     * @throws TransactionRequiredException
     */
    public function delete(int $id): void
    {
        $category = $this->entityManager->find(Category::class, $id);

        $this->entityManager->remove($category);
        $this->entityManager->flush();
    }

    /**
     * @throws OptimisticLockException
     * @throws TransactionRequiredException
     * @throws ORMException
     */
    public function getById(int $id): ?Category
    {
        return $this->entityManager->find(Category::class, $id);
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function update(Category $category, string $name): Category
    {
        $category->setName($name);

        $this->entityManager->persist($category);
        $this->entityManager->flush();

        return $category;
    }
}
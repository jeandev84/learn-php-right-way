<?php

namespace App\Repository;

use Framework\Database\ORM\EntityRepository;
use PDO;


class UserRepository extends EntityRepository
{
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, '', 'users');
    }


    public function findByEmail(string $email): mixed
    {
        return $this->findOneBy(compact('email'));
    }
}
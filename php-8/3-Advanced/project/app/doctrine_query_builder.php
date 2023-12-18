<?php

declare(strict_types=1);

use App\Entity\Invoice;
use App\Entity\InvoiceItem;
use App\Enums\InvoiceStatus;
use Doctrine\DBAL\Connection;
use Dotenv\Dotenv;
use Doctrine\DBAL\DriverManager;


require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$params = [
    'dbname'     => $_ENV['DB_DATABASE'],
    'user'       => $_ENV['DB_USER'],
    'password'   => $_ENV['DB_PASS'],
    'host'       => $_ENV['DB_HOST'],
    'driver'     => $_ENV['DB_DRIVER'] ?? 'pdo_mysql',
];

$entityManager = \Doctrine\ORM\EntityManager::create(
    $params,
    \Doctrine\ORM\Tools\Setup::createAttributeMetadataConfiguration([__DIR__.'/Entity'])
);

$queryBuilder = $entityManager->createQueryBuilder();

// DQL (Doctrine Query Language)
$query = $queryBuilder->select('i.createdAt', 'i.amount')
                      ->from(Invoice::class, 'i')
                      ->where('i.amount > :amount')
                      ->setParameter('amount', 100)
                      ->orderBy('i.createdAt', 'desc')
                      ->getQuery();

/*
echo $query->getDQL(), "\n";
SELECT i.createdAt, i.amount FROM App\Entity\Invoice i WHERE i.amount > :amount ORDER BY i.createdAt desc

# DQL Scratch
$queryDQL = $entityManager->createQuery(
'SELECT i.createdAt, i.amount FROM App\Entity\Invoice i WHERE i.amount > :amount ORDER BY i.createdAt desc'
);

$invoices = $queryDQL->getResult();

echo $query->getSQL(), "\n";
*/

$invoices = $query->getResult();





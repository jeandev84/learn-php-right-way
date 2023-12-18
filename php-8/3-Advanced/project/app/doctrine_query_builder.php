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

/*
# DQL Scratch
$queryDQL = $entityManager->createQuery(
    'SELECT i.createdAt, i.amount FROM App\Entity\Invoice i WHERE i.amount > :amount ORDER BY i.createdAt desc'
);

$invoices = $queryDQL->getResult();


// DQL (Doctrine Query Language)
$query = $queryBuilder->select('i.createdAt', 'i.amount')
                      ->from(Invoice::class, 'i')
                      ->where('i.amount > :amount')
                      ->setParameter('amount', 100)
                      ->orderBy('i.createdAt', 'desc')
                      ->getQuery();

echo $query->getDQL(), "\n";
SELECT i.createdAt, i.amount FROM App\Entity\Invoice i WHERE i.amount > :amount ORDER BY i.createdAt desc
echo $query->getSQL(), "\n";

* If selected only alias like there select('i') will be returned full result objects with properties
* If selected like there select('i.createdAt', 'i.amount') will be return full result as associative selected columns
$invoices = $query->getResult();


// DQL (Doctrine Query Language)
$query = $queryBuilder->select('i')
                      ->from(Invoice::class, 'i')
                      ->where('i.amount > :amount')
                      ->setParameter('amount', 100)
                      ->orderBy('i.createdAt', 'desc')
                      ->getQuery();


// Hydration DB <-> Entity Data Conversion
$invoices = $query->getResult();

// @var Invoice $invoice
foreach ($invoices as $invoice) {
    echo $invoice->getCreatedAt()->format('m/d/Y g:ia')
        . ', '. $invoice->getAmount()
        . ', ' . $invoice->getStatus()->toString(). PHP_EOL;
}


$invoices = $query->getArrayResult();
// dump($invoices);



// Use Expression Builder
$query = $queryBuilder->select('i')
                      ->from(Invoice::class, 'i')
                      ->where('i.amount > :amount')
                      ->andWhere('i.status = :status')
                      ->orWhere('createdAt >= :date')
                      ->setParameter('amount', 100)
                      ->setParameter('status', InvoiceStatus::Paid)
                      ->setParameter('date', '2023-12-17 23:13:53')
                      ->orderBy('i.createdAt', 'desc')
                      ->getQuery();

echo $query->getDQL() . PHP_EOL;
echo $query->getDQL() . PHP_EOL;
SELECT i
FROM App\Entity\Invoice i, App\Entity\Invoice i
WHERE (i.amount > :amount AND i.status = :status) OR createdAt >= :date
ORDER BY i.createdAt desc


$query = $queryBuilder->select('i')
                      ->from(Invoice::class, 'i')
                      ->where('i.amount > :amount')
                      ->andWhere('i.status = :status OR createdAt >= :date')
                      ->setParameter('amount', 100)
                      ->setParameter('status', InvoiceStatus::Paid)
                      ->setParameter('date', '2023-12-17 23:13:53')
                      ->orderBy('i.createdAt', 'desc')
                      ->getQuery();
*/

// Use Expression Builder
// WHERE amount > :amount AND (status = :status OR createdAt >= :date)
/*
$query = $queryBuilder->select('i')
                      ->from(Invoice::class, 'i')
                      ->where(
                          $queryBuilder->expr()->andX(
                              $queryBuilder->expr()->gt('i.amount', ':amount'), // i.amount > :amount (greater than)
                              $queryBuilder->expr()->orX(
                                  $queryBuilder->expr()->eq('i.status', ':status'), // i.status = :status (equal)
                                  $queryBuilder->expr()->gte('i.createdAt', ':date') // i.amount > :amount (greater than equal)
                              )
                          )
                      )
                      ->setParameter('amount', 100)
                      ->setParameter('status', InvoiceStatus::Paid->value)
                      ->setParameter('date', '2023-12-17 23:13:53')
                      ->orderBy('i.createdAt', 'desc')
                      ->getQuery();

echo $query->getDQL() . PHP_EOL;
SELECT i FROM App\Entity\Invoice i, App\Entity\Invoice i WHERE i.amount > :amount AND (i.status = :status OR i.createdAt >= :date) ORDER BY i.createdAt desc

$invoices = $query->getResult();

// @var Invoice $invoice
foreach ($invoices as $invoice) {
    echo $invoice->getCreatedAt()->format('m/d/Y g:ia')
        . ', '. $invoice->getAmount()
        . ', ' . $invoice->getStatus()->toString(). PHP_EOL;
}
*/


$query = $queryBuilder
                     // ->select('i', 'it.description')
                     ->select('i', 'it')
                     ->from(Invoice::class, 'i')
                     ->join('i.items', 'it')
                     ->where(
                        $queryBuilder->expr()->andX(
                            $queryBuilder->expr()->gt('i.amount', ':amount'), // i.amount > :amount (greater than)
                            $queryBuilder->expr()->orX(
                                $queryBuilder->expr()->eq('i.status', ':status'), // i.status = :status (equal)
                                $queryBuilder->expr()->gte('i.createdAt', ':date') // i.amount > :amount (greater than equal)
                            )
                        )
                    )
                    ->setParameter('amount', 100)
                    ->setParameter('status', InvoiceStatus::Paid->value)
                    ->setParameter('date', '2023-12-18 00:17:16')
                    ->orderBy('i.createdAt', 'desc')
                    ->getQuery();


# dd($query->getArrayResult());


$invoices = $query->getResult();


/** @var Invoice $invoice */
foreach ($invoices as $invoice) {
    echo $invoice->getCreatedAt()->format('m/d/Y g:ia')
        . ', '. $invoice->getAmount()
        . ', ' . $invoice->getStatus()->toString(). PHP_EOL;

    /** @var InvoiceItem $item */
    foreach ($invoice->getItems() as $item) {
        echo ' - '  . $item->getDescription()
             . ', ' . $item->getQuantity()
             . ', ' . $item->getUnitPrice() . PHP_EOL;
    }
}

/*
$connection = $entityManager->getConnection();
$entityManager->beginTransaction();
$entityManager->commit();
$entityManager->rollback();
$entityManager->transactional(function () {

});

$entityManager->wrapInTransaction(function () {

});
*/

$users = $entityManager->createNativeQuery('SELECT * FROM users')
                       ->getResult();
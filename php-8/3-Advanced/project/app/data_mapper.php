<?php

declare(strict_types=1);

use App\Enums\InvoiceStatus;
use Doctrine\DBAL\Connection;
use Dotenv\Dotenv;
use Doctrine\DBAL\DriverManager;


require __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$items = [
    ['Item 1', 1, 15],
    ['Item 2', 2, 7.5],
    ['Item 3', 4, 3.75],
];

$invoice = (new \App\Entity\Invoice())
           ->setAmount(45)
           ->setInvoiceNumber('1')
           ->setStatus(InvoiceStatus::Pending)
           ->setCreatedAt(new DateTime())
;

foreach ($items as [$description, $quantity, $unitPrice]) {
    $item = (new \App\Entity\InvoiceItem())
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setUnitPrice($unitPrice);

    $invoice->addItem($item);
}


$params = [
    'dbname'     => $_ENV['DB_DATABASE'],
    'user'       => $_ENV['DB_USER'],
    'password'   => $_ENV['DB_PASS'],
    'host'       => $_ENV['DB_HOST'],
    'driver'     => $_ENV['DB_DRIVER'] ?? 'pdo_mysql',
];

$conn = DriverManager::getConnection($params);

$em = \Doctrine\ORM\EntityManager::create(
    $conn,
    \Doctrine\ORM\Tools\Setup::createAttributeMetadataConfiguration([__DIR__.'/Entity'])
);
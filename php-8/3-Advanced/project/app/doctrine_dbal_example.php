<?php
# https://doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html#configuration
declare(strict_types=1);

use Doctrine\DBAL\Connection;
use Dotenv\Dotenv;
use Doctrine\DBAL\DriverManager;


require __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();



$connectionParams = [
    'dbname'     => $_ENV['DB_DATABASE'],
    'user'       => $_ENV['DB_USER'],
    'password'   => $_ENV['DB_PASS'],
    'host'       => $_ENV['DB_HOST'],
    'driver'     => $_ENV['DB_DRIVER'] ?? 'pdo_mysql',
];

$conn = DriverManager::getConnection($connectionParams);

/*
$result = $conn->executeQuery('SELECT * FROM invoices');
$invoices = $result->fetchAllAssociative();
dump($invoices);

$stmt   = $conn->prepare('SELECT * FROM invoices');
$result = $stmt->executeQuery();
$invoices = $result->fetchAllAssociative();
dump($invoices);


$stmt   = $conn->prepare('SELECT * FROM invoices WHERE id = :id');
$result = $stmt->executeQuery(['id' => 10]);
$invoice = $result->fetchAssociative();
dump($invoice);

$stmt   = $conn->prepare('SELECT * FROM invoices WHERE id = :id');
$stmt->bindValue(':id', 10);
$result = $stmt->executeQuery();
$invoice = $result->fetchAssociative();
dump($invoice);


$stmt = $conn->prepare('SELECT id, created_at FROM invoices WHERE created_at BETWEEN :from AND :to');

$from = '2022-01-01 00:00:00';
$to   = '2022-01-31 23:59:59';

$stmt->bindValue(':from', $from);
$stmt->bindValue(':to', $to);
$result = $stmt->executeQuery();
$invoices = $result->fetchAllAssociative();
dump($invoices);


$stmt = $conn->prepare('SELECT id, created_at FROM invoices WHERE created_at BETWEEN :from AND :to');

$from = new \DateTime('01/01/2022 00:00:00');
$to   = new \DateTime('01/31/2022 23:59:59');

$stmt->bindValue(':from', $from, 'datetime');
$stmt->bindValue(':to', $to, 'datetime');

$result = $stmt->executeQuery();

$invoices = $result->fetchAllAssociative();

dump($invoices);


$ids   = [1, 2, 3];
$binds = str_repeat('?', count($ids) - 1) . '?';

$result = $conn->executeQuery('SELECT id, created_at FROM invoices WHERE id IN (?)', [$ids], [Connection::PARAM_INT_ARRAY]);

$invoices = $result->fetchAllAssociative();

dump($invoices);

==========================================================
$conn->beginTransaction();
$conn->commit();
$conn->rollBack();

$conn->transactional(function () {

});


$ids   = [1, 2, 3];
$binds = str_repeat('?', count($ids) - 1) . '?';
$invoices = $conn->fetchAllAssociative('SELECT id, created_at FROM invoices WHERE id IN (?)', [$ids], [Connection::PARAM_INT_ARRAY]);

dump($invoices);


$builder = $conn->createQueryBuilder();

$invoices = $builder->select('id', 'amount')
                    ->from('invoices')
                    ->where('amount > ?')
                    ->setParameter(0, 6000)
                    ->fetchAllAssociative();


dump($invoices);


$builder = $conn->createQueryBuilder();

$sql = $builder->select('id', 'amount')
               ->from('invoices')
               ->join('', '', '', '')
               ->groupBy('id')
               ->having('id > 0')
               ->where('amount > ?')
               ->setParameter(0, 6000)
               ->getSQL();

dump($sql);
*/

$schema = $conn->createSchemaManager();

// dump($schema->listTableNames());
/*
dump(
    array_map(fn(\Doctrine\DBAL\Schema\Column $column) => $column->getName(), $schema->listTableColumns('invoices'))
);
*/
dump(array_keys($schema->listTableColumns('invoices')));

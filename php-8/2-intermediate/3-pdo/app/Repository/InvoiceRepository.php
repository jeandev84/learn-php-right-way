<?php

namespace App\Repository;

use Framework\Database\ORM\EntityRepository;
use PDO;

class InvoiceRepository extends EntityRepository
{
     public function __construct(PDO $pdo)
     {
         parent::__construct($pdo, '', 'invoices');
     }
}
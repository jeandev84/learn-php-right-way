<?php

namespace App\Models;

use App\Enums\InvoiceStatus;
use Framework\Database\ORM\Model;

class Invoice extends Model
{
    public function create(float $amount, int $userId)
    {
        $stmt = $this->db->prepare("INSERT INTO invoices (amount, user_id) VALUES (?, ?)");

        $stmt->execute([$amount, $userId]);

        return (int) $this->db->lastInsertId();
    }



    public function find(int $invoiceId): array
    {
        $stmt = $this->db->prepare(
       "SELECT invoices.id, amount, full_name
              FROM invoices
              INNER JOIN users ON user_id = users.id
              WHERE invoices.id = ?"
        );

        $stmt->execute([$invoiceId]);

        $invoice = $stmt->fetch();

        return $invoice ?: [];
    }


    public function all(InvoiceStatus $status): array
    {
         $stmt = $this->db->prepare(
             'SELECT id, invoice_number, amount, status 
                    FROM invoices
                    WHERE status = ?'
         );

         $stmt->execute([$status->value]);
         return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}
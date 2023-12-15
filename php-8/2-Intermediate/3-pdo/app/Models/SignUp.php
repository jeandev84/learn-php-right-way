<?php

namespace App\Models;

use Framework\Database\ORM\Model;

class SignUp extends Model
{

    public function __construct(
        protected User $userModel,
        protected Invoice $invoiceModel
    )
    {
        parent::__construct();
    }


    public function register(array $userInfo, array $invoiceInfo): int
    {
        try {
            $this->db->beginTransaction();

            $userId = $this->userModel->create($userInfo['email'], $userInfo['name']);
            $invoiceId = $this->invoiceModel->create($invoiceInfo['amount'], $userId);

            $this->db->commit();

        } catch (PDOException $e) {
            if ($this->db->inTransaction()) {
                $this->db->rollBack();
            }
            throw $e;
        }

        return $invoiceId;
    }
}
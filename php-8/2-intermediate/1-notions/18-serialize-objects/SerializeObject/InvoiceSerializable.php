<?php

namespace App\SerializeObject;

class InvoiceSerializable implements \Serializable
{
    public string $id;
    public float $amount;
    public string $description;
    public string $creditCardNumber;


    public function __construct()
    {
        $this->id = uniqid('invoice_');
    }

    public function serialize()
    {

    }

    public function unserialize(string $data)
    {

    }

    public function __serialize(): array
    {

    }

    public function __unserialize(array $data): void
    {

    }
}
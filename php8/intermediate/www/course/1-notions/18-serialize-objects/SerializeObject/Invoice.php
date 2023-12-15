<?php

namespace App\SerializeObject;

class Invoice
{
    public string $id;



    public function __construct(
        public float $amount,
        public string $description,
        public string $creditCardNumber
    )
    {
        $this->id = uniqid('invoice_');
    }


    /*
    public function __sleep(): array
    {
        // this method called before serialization
        // return value we went to serialize
        return ['id', 'amount'];
    }




    public function __wakeup(): void
    {
       // called after object is unserialized
    }
    */



    public function __serialize(): array
    {
        // return all properties we want to serialize
        return [
            'id' => $this->id,
            'amount' => $this->amount,
            'description' => $this->description,
            'creditCardNumber' => base64_encode($this->creditCardNumber),
            'foo' => 'bar'
        ];
    }




    public function __unserialize(array $data): void
    {
        # var_dump($data);
        $this->id = $data['id'];
        $this->amount = $data['amount'];
        $this->description = $data['description'];
        $this->creditCardNumber = base64_decode($data['creditCardNumber']);
    }
}
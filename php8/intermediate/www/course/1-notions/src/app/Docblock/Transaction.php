<?php
namespace App\Docblock;


class Transaction
{


     /** @var Customer  */
     private Customer $customer;


     /** @var float  */
     private float $amount;


     /**
      * @param Customer[] $arr
      *
      * @return void
     */
     public function foo(array $arr)
     {
          foreach ($arr as $obj) {
              $obj->name;
          }
     }


     /**
      * Some description
      *
      * @param Customer $customer
      * @param float $amount
      *
      * @throws \RuntimeException
      * @throws \InvalidArgumentException
      *
      * @return bool
     */
     public function process(Customer $customer, float $amount): bool
     {
         // process transaction

         // if failed, return false

         // otherwise return true
         return true;
     }
}
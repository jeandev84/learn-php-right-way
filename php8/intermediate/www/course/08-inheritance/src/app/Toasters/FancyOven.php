<?php
namespace App\Toasters;

use App\Inheritance\Toasters\ToasterPro;

class FancyOven
{

     public function __construct(private ToasterPro $toaster)
     {
     }

     public function fry() {
        // fry stuff
     }

     public function toast()
     {
         $this->toaster->toast();
     }


     public function toastBagel()
     {
         $this->toaster->toastBagel();
     }
}
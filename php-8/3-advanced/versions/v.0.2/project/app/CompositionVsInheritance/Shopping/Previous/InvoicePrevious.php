<?php

namespace App\CompositionVsInheritance\Shopping\Previous;

use App\CompositionVsInheritance\Shopping\SalesTaxCalculator;

class InvoicePrevious extends SalesTaxCalculator
{
    public function create(array $lineItems)
    {
         // Calculate sub total
         $lineItemsTotal = $this->calculateLineItemsTotal($lineItems);


         // Calculate sales tax
         $salesTax = $this->calculate($lineItemsTotal);

         $total = $lineItemsTotal + $salesTax;

         echo 'Sub Total: $' . $lineItemsTotal . PHP_EOL .
              'Sales Tax: $' . $salesTax . PHP_EOL .
              'Total: $' . $total . PHP_EOL;

         // ... Do Some Stuff ...//
    }


    /**
     * @param array $items
     *
     * @return float|int
    */
    public function calculateLineItemsTotal(array $items): float|int
    {
         return array_sum(
             array_map(
                 fn($item) => $item['unitPrice'] * $item['quantity'],
                 $items
             )
         );
    }



    /**
     * @param float|int $total
     *
     * @return float
     */
    public function calculate(float|int $total): float
    {
        return round($total * 7 / 100, 2);
    }
}
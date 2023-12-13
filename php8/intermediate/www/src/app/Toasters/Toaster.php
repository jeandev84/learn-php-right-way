<?php
namespace App\Toasters;

class Toaster
{
    protected array $slices = [];
    protected int $size     = 2;


    final public function addSlice(string $slice): void
    {
         if (count($this->slices) < $this->size) {
             $this->slices[] = $slice;
         }
    }



    public function toast(): void
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1). ': Toasting '. $slice . PHP_EOL;
        }
    }
}
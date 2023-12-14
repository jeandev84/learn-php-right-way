<?php

namespace App\Toasters;

use App\Inheritance\Toasters\Toaster;

class ToasterPro extends Toaster
{
    protected int $size = 4;




    public function toastBagel(): void
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1). ': Toasting '. $slice . ' with bagels option'. PHP_EOL;
        }
    }
}
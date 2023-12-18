<?php
declare(strict_types=1);

namespace App\Services\xDebug;

class Xdebug
{
     public function info(): void
     {
         xdebug_info();
     }
}
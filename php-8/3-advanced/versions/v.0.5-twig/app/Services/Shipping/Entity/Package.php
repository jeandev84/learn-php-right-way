<?php
declare(strict_types=1);

namespace App\Services\Shipping\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;

#[Entity]
class Package
{
     #[Column]
     public int $id;


     #[Column]
     public int $width;


     #[Column]
     public int $height;



     #[Column]
     public int $length;



     #[Column]
     public int $weight;


     // ... more properties

     // ... methods
}


$package1 = new Package();
$package1->width  = 4;
$package1->length = 8;
$package1->height = 3;
$package1->weight = 5;


$package2 = new Package();
$package2->width  = 4;
$package2->length = 8;
$package2->height = 3;
$package2->weight = 5;

persist($package1);
persist($package2);


dump($package1->id !== $package2->id);


$dim = new Dim();
$package1 = new Package();
$package1->width  = $dim->width;
$package1->length = $dim->length;
$package1->height = $dim->height;
$package1->weight = 5;


$package2 = new Package();
$package1->width  = $dim->width;
$package1->length = $dim->length;
$package1->height = $dim->height;
$package2->weight = 5;
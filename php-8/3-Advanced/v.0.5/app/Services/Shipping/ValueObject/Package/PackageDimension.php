<?php
declare(strict_types=1);

namespace App\Services\Shipping\ValueObject\Package;

class PackageDimension
{
     public function __construct(
         public readonly int $width,
         public readonly int $height,
         public readonly int $length
     )
     {
         match (true) {
             $this->width <= 0 || $width > 80 => throw new \InvalidArgumentException('Invalid package width'),
             $this->height <= 0 || $height > 70 => throw new \InvalidArgumentException('Invalid package height'),
             $this->length <= 0 || $height > 120 => throw new \InvalidArgumentException('Invalid package length'),
             default  => true
         };
     }



     public function increaseWith(int $with): self
     {
         # Don't do $this->with += $width; it will not work because readonly
         return new self($this->width + $with, $this->height, $this->length);
     }



     public function equalTo(PackageDimension $other): bool
     {
         return $this->width === $other->width
                && $this->height === $other->height
                && $this->length === $other->length;
     }
}
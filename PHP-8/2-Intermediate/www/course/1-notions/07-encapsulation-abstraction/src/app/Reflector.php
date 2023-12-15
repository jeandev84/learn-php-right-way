<?php

namespace App;

class Reflector
{
     protected $class;


     public function __construct($class)
     {
         $this->class = $class;
     }


     public function getPropertyValue(string $name): mixed
     {
         $reflectionProperty = new \ReflectionProperty($this->class, $name);
         $reflectionProperty->setAccessible(true);
         return $reflectionProperty->getValue($this->class);
     }




     public function setPropertyValue(string $name, $value): self
     {
         $reflectionProperty = new \ReflectionProperty($this->class, $name);
         $reflectionProperty->setAccessible(true);
         $reflectionProperty->setValue($this->class, $value);

         return $this;
     }
}
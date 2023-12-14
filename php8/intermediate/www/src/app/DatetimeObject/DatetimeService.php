<?php

namespace App\DatetimeObject;

class DatetimeService
{
      protected \DateTime $datetime;
      protected string $timezone = '';

      public function __construct(string $datetime = 'now')
      {
          $this->datetime = new \DateTimeZone($datetime);
      }


      public static function now(): static
      {
           return new static('now');
      }



      public static function create(string $datetime): static
      {
          return new static($datetime);
      }



      public function timezone(string $timezone): self
      {
          $this->datetime->setTimezone(new \DateTimeZone($timezone));

          return $this;
      }



      public function format(string $format): string
      {
          return $this->datetime->format($format);
      }

}
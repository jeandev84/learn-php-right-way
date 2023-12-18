<?php

namespace App\SerializeObject;

class Serializer
{
      protected array $cache = [];

      public function serialize(string $id, $data): void
      {
           $this->cache[$id] = serialize($data);
      }


      public function deserialize(string $id): mixed
      {
           if (empty($this->cache[$id])) {
                return false;
           }

           return unserialize($this->cache[$id]);
      }
}
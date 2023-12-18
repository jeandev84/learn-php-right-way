<?php
declare(strict_types=1);

namespace App\Models;

use Framework\Database\ORM\Model;
use Generator;

class Ticket extends Model
{
    /**
     * @return Generator
    */
    public function all(): Generator
     {
         $stmt = $this->db->query(
      'SELECT id, title, content
             FROM tickets'
         );

         /* return $stmt->fetchAll(); */

         return $this->fetchLazy($stmt);
     }
}
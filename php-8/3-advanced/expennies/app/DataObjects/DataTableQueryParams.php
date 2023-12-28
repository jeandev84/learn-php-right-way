<?php
declare(strict_types=1);

namespace App\DataObjects;

/**
 * DataTableQueryParams
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\DataObjects
*/
class DataTableQueryParams
{
    public function __construct(
        public readonly int $start,
        public readonly int $length,
        public readonly string $orderBy,
        public readonly string $orderDir,
        public readonly string $searchTerm,
        public readonly int $draw
    ) {
    }
}
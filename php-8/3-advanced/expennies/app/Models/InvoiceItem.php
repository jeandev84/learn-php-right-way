<?php
declare(strict_types=1);

namespace App\Models;

use App\Enums\InvoiceStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


/**
 * @property int $id
 * @property int $invoice_id
 * @property string $description
 * @property int $quantity
 * @property float $unit_price
*/
class InvoiceItem extends Model
{
      public $timestamps = false;


       /**
        * @return BelongsTo
      */
      public function invoice(): BelongsTo
      {
         return $this->belongsTo(Invoice::class);
      }
}
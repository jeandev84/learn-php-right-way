<?php
declare(strict_types=1);

namespace App\Models;

use App\Enums\InvoiceStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * @property int $id
 * @property string $invoice_number
 * @property float $amount
 * @property InvoiceStatus $status
 * @property Carbon $created_at
 * @property Carbon $due_date
*/
class Invoice extends Model
{
       # const UPDATED_AT = 'created_date';
       # const CREATED_AT = 'updated_date';

       # protected $table      = 'invoices';
       # public $timestamps    = false; disabled create column (created_at|updated_at)
       # protected $primaryKey = 'invoice_uuid';
       # public $incrementing  = false;
       # protected $keyType    = 'string';

       const UPDATED_AT = null;


       /**
        * @return HasMany
       */
       public function items(): HasMany
       {
           return $this->hasMany(InvoiceItem::class);
       }
}
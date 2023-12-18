<?php
declare(strict_types=1);

namespace App\Models;

use App\Enums\InvoiceStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
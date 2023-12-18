<?php
declare(strict_types=1);

namespace App\Models;

use App\Enums\InvoiceStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * @property int $id
 * @property string $invoice_number
 * @property float $amount
 * @property InvoiceStatus $status
 * @property Carbon $created_at
 * @property Carbon $due_date
 *
 * @property-read Collection $items
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

       // case values
       protected $casts = [
          'created_at' => 'datetime',
          'due_date'   => 'datetime',
          'status'     => InvoiceStatus::class
       ];

       /**
        * @return HasMany
       */
       public function items(): HasMany
       {
           return $this->hasMany(InvoiceItem::class);
       }


       ## It works like in doctrine events (pre/post persist ...)
       protected static function booted()
       {
            // I tell that before creating call this callback
            static::creating(function (Invoice $invoice) {
                if ($invoice->isClean('due_date')) {
                    $invoice->due_date = (new Carbon())->addDays(10);
                }
            });
       }



       public static function allPaid(): array
       {
           return self::query()
                       ->where('status', InvoiceStatus::Paid)
                       ->get()
                       ->map(
                           fn(Invoice $invoice) => [
                               'invoiceNumber' => $invoice->invoice_number,
                               'amount'        => $invoice->amount,
                               'status'        => $invoice->status->toString(),
                               'dueDate'       => $invoice->due_date->toDateTimeString(),
                           ]
                       )
                       ->toArray();
       }
}
<?php
declare(strict_types=1);

namespace App\PHP_8_1\Examples\Enum;

enum PaymentStatus
{
    case PAID;
    case VOID;
    case DECLINED;

    public function text(): string
    {
         return match($this) {
            self::PAID     => 'Paid',
            self::VOID     => 'Void',
            self::DECLINED => 'Declined'
         };
    }
}
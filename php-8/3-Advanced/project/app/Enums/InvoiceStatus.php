<?php
declare(strict_types=1);

namespace App\Enums;

// Read for BackedEnum interface php
use App\Enums\Contract\SomeInterface;
use App\Enums\Traits\InvoiceStatusHelper;


# Enum don't support:
// Constructors & Destructors
// Inheritance & Properties
// Cloning
// Magic Methods Except: __call, _callStatic, & __invoke
// Cannot Instantiation

# Enum supports:
// Public, Private & Protected Methods
// Static Methods & Constants
// Interfaces
// Traits (Without Properties)
// Enum Class Attributes : Attribute::TARGET_CLASS
// Enum Case Attributes  : Attribute::TARGET_CLASS_CONSTANT


enum InvoiceStatus: int implements SomeInterface
{
    use InvoiceStatusHelper;

    case Pending = 0;
    case Paid    = 1;
    case Void    = 2;
    case Failed  = 3;


    public function toString(): string
    {
        // var_dump($this);
        return match ($this) {
            self::Paid    =>  'Paid',
            self::Failed  =>  'Declined',
            self::Void    =>  'Void',
            default       =>  'Pending'
        };
    }



    public function color(): Color
    {
        // var_dump($this);
        return match ($this) {
            self::Paid    =>  Color::Green,
            self::Failed  =>  Color::Red,
            self::Void    =>  Color::Gray,
            default       =>  Color::Orange
        };
    }

}

/*
var_dump(
InvoiceStatus::Paid,
      gettype(InvoiceStatus::Paid),
      is_object(InvoiceStatus::Paid)
);

$status1 = InvoiceStatus::Paid;
$status2 = InvoiceStatus::Paid;

var_dump($status1 === $status2);
*/


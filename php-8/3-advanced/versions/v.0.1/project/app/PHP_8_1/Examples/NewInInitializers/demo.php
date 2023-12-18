<?php
declare(strict_types=1);

use App\PHP_8_1\Examples\NewInInitializers\Address;
use App\PHP_8_1\Examples\NewInInitializers\Customer;

# $customer = new Customer(new Address());
$customer = new Customer();

var_dump($customer->address);

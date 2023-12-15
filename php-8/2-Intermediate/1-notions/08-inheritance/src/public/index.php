<?php

require_once __DIR__.'/../vendor/autoload.php';


$toaster = new \App\Inheritance\Toasters\ToasterPro();

$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->toastBagel();


foo($toaster);

function foo(\App\Inheritance\Toasters\Toaster $toaster): void {
    $toaster->toast();
}

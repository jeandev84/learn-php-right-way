<?php

require_once __DIR__.'/../vendor/autoload.php';


$toaster = new \App\Toasters\ToasterPro();

$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->toastBagel();


foo($toaster);

function foo(\App\Toasters\Toaster $toaster): void {
    $toaster->toast();
}

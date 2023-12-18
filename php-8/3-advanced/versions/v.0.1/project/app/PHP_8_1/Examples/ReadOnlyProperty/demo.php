<?php

$address = new \App\PHP_8_1\Examples\ReadOnlyProperty\Address(
     '123 Main St',
      'New York',
     'NY',
'10011',
   'US'
);


echo $address->street . PHP_EOL;
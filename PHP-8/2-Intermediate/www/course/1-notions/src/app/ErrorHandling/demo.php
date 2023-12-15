<?php


# https://www.php.net/manual/en/language.errors.php7.php
set_exception_handler(function (Throwable $e) {
    dump($e->getMessage());
});

echo array_rand([], 1);

/*
set_error_handler(function (Error $error) {
    var_dump($error->getMessage());
});
*/


$invoice = new \App\ErrorHandling\Invoice(new \App\ErrorHandling\Customer());
$invoice->process(25);




/*
var_dump(process());


function foo(): bool {

   echo 'foo'. PHP_EOL;

   return false;
}


function process() {
    $invoice = new \App\ErrorHandling\InvoiceController(
        new \App\ErrorHandling\Customer([
            'foo' => 'bar'
        ])
    );

    try {
        $invoice->process(-25);
        return true;
    } catch (Exception $e) {
        echo $e->getMessage(). PHP_EOL;
        return foo();
    } finally {
        echo 'Finally block'. PHP_EOL;
        return -1;
    }
}

*/




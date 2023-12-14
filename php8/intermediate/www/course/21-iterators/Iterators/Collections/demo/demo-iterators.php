<?php

# https://www.php.net/manual/en/spl.iterators.php

/*
foreach (['a', 'b', 'c', 'd', 'e'] as $key => $value) {
    echo $key .' = '. $value . PHP_EOL;
}

// properties must be public
foreach (new \App\Iterators\Invoice(25) as $key => $value) {
    echo $key .' = '. $value . PHP_EOL;
}


Before implementation Iterator
$invoiceCollection = new \App\Iterators\InvoiceIterator([
    new \App\Iterators\Invoice(15),
    new \App\Iterators\Invoice(25),
    new \App\Iterators\Invoice(50),
]);

foreach ($invoiceCollection as $invoice) {
    dump($invoice);
    #echo $invoice->id . ' - '. $invoice->amount . PHP_EOL;
}


$invoiceCollection = new \App\Iterators\InvoiceIterator([
    new \App\Iterators\Invoice(15),
    new \App\Iterators\Invoice(25),
    new \App\Iterators\Invoice(50),
]);

foreach ($invoiceCollection as $invoice) {
    # dump($invoice);
    echo $invoice->id . ' - '. $invoice->amount . PHP_EOL;
}
*/


$invoiceCollection = new \App\Iterators\Invoices\InvoiceIteratorAggregate([
    new \App\Iterators\Invoices\Invoice(15),
    new \App\Iterators\Invoices\Invoice(25),
    new \App\Iterators\Invoices\Invoice(50),
]);

foreach ($invoiceCollection as $invoice) {
    # dump($invoice);
    echo $invoice->id . ' - '. $invoice->amount . PHP_EOL;
}

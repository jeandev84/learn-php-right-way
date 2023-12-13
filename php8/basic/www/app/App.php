<?php
declare(strict_types = 1);


/**
 * @param ...$data
 * @return void
*/
function prettyPrint(...$data): void {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}


/**
 * @param string $dirPath
 * @return array
*/
function getTransactionFiles(string $dirPath): array {
    $files = [];
    foreach (scandir($dirPath) as $file) {
        if (is_dir($file)) {
            continue;
        }
        $files[] = $dirPath . $file;
    }
    return $files;
}


/**
 * @param string $fileName
 * @return array
*/
function getTransactions(string $fileName): array {
    if (! file_exists($fileName)) {
        trigger_error('File "'. $fileName. '" does not exist.', E_USER_ERROR);
    }

    $file = fopen($fileName, 'r');

    fgetcsv($file);

    $transactions = [];

    while (($transaction = fgetcsv($file)) !== false) {
        $transactions[] = extractTransaction($transaction);
    }

    return $transactions;
}



function extractTransaction(array $transactionRow): array {

    [$date, $checkNumber, $description, $amount] = $transactionRow;

    $amount  = (float) str_replace(['$', ','], '', $amount);

    return [
       'date' => $date,
       'checkNumber' => $checkNumber,
       'description' => $description,
       'amount' => $amount,
    ];
}
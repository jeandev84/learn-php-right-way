<?php
declare(strict_types=1);


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
 * @param callable|null $transactionHandler
 * @return array
*/
function getTransactions(string $fileName, ?callable $transactionHandler = null): array {
    if (! file_exists($fileName)) {
        trigger_error('File "'. $fileName. '" does not exist.', E_USER_ERROR);
    }

    $file = fopen($fileName, 'r');

    fgetcsv($file);

    $transactions = [];

    while (($transaction = fgetcsv($file)) !== false) {

        if($transactionHandler !== null) {
            $transaction = $transactionHandler($transaction);
        }

        $transactions[] = $transaction;

        /* $transactions[] = extractTransaction($transaction); */
    }

    return $transactions;
}



/**
 * @param array $transactionRow
 * @return array
*/
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



/**
 * @param array $transactions
 *
 * @return int[]
*/
function calculateTotal(array $transactions): array {
     $totals = ['netTotal' => 0, 'totalIncome' => 0, 'totalExpense' => 0];

     foreach ($transactions as $transaction) {
         $totals['netTotal'] += $transaction['amount'];

         if ($transaction['amount'] >= 0) {
             $totals['totalIncome'] += $totals['amount'];
         } else {
             $totals['totalExpense'] += $transaction['amount'];
         }
     }

     return $totals;
}
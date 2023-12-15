<?php

/*
$from = new DateTime();
$to   = (new DateTime())->add(new DateInterval('P1M'));

echo $from->format('d/m/Y') . ' - ' . $to->format('d/m/Y') . PHP_EOL;

$from = new DateTime();
$to   = (clone $from)->add(new DateInterval('P1M'));

var_dump($from, $to);

echo $from->format('d/m/Y') . ' - ' . $to->format('d/m/Y') . PHP_EOL;



$from = new DateTime();
$to   = (clone $from)->add(new DateInterval('P1M'));

var_dump($from === $to);

echo $from->format('d/m/Y') . ' - ' . $to->format('d/m/Y') . PHP_EOL;
*/


$from = new DateTimeImmutable();
$to   = $from->add(new DateInterval('P1M'));

var_dump($from === $to);

# $to->add(new DateInterval('P1Y'));
echo $from->format('d/m/Y') . ' - ' . $to->format('d/m/Y') . PHP_EOL;
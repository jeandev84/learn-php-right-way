<?php

function prettyPrintArray(...$items): void {
     echo '<pre>';
     print_r($items);
     echo '</pre>';
}
<?php

/* BOOLEANS */

$isComplete = true;

// integers 0 -0 = false
// floats 0.0 -0.0
// '' = false
// '0' = false
// []  = false
// null = false

var_dump(is_bool($isComplete));

if($isComplete) {
    // do something
    echo 'success';
} else {
    // do something else
    echo 'fail';
}
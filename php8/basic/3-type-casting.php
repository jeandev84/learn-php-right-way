<?php

/* Data Types & Type Casting */

# 4 Scalar Types
    # bool       ( true / false )
    $completed = true;
    # int        ( 1, 2, 3, 4, 0, -5 (no decimal))
    $score     = 75;
    # float      ( 1.5, 0.1, 0.005, -15.8 )
    $price     = 0.99;
    # string     ("Gio", "Hello World")
    $greeting  = 'Hello Gio';

    // echo join('<br>', [$completed, $score, $price, $greeting]);
    // var_dump($completed);
    // echo gettype($completed);


# 4 Compound Types
    # array
    $companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
    print_r($companies);
    # object
    # callable
    # iterable

# 2 Special Types
    # resource
    # null
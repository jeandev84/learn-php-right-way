<?php

/** Functions */

foo();
bar();

function foo() {
    echo 'Foo';
    function bar() {
        echo 'Bar';
        function foo() {
            echo 'Foo 2';
        }
    }
}
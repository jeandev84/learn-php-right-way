<?php

/** @var \App\Inheritance\HTML\Form\Element\Field[] $fields */
$fields = [
    new \App\Inheritance\HTML\Form\Element\Text('textField'),
    new \App\Inheritance\HTML\Form\Element\Checkbox('checkboxField'),
    new \App\Inheritance\HTML\Form\Element\Radio('radioField'),
];

foreach ($fields as $field) {
    echo $field->render(), "<br>";
}
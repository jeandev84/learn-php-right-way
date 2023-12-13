<?php

/** @var \App\HTML\Form\Element\Field[] $fields */
$fields = [
    new \App\HTML\Form\Element\Text('textField'),
    new \App\HTML\Form\Element\Checkbox('checkboxField'),
    new \App\HTML\Form\Element\Radio('radioField'),
];

foreach ($fields as $field) {
    echo $field->render(), "<br>";
}
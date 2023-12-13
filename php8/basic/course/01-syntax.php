<?php
echo "Hello World";
print 'Hello world';
$firstName = 'Gio';
$age       = 30;
$x         = 10;
$y         = 5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <h1>
         <?= 'Hello World'?>
     </h1>
     <p>My first paragraph.</p>
     <?php
     // Comment
     echo '<p>'. $x . ', '. $y . '</p>';
     ?>
     <em><?= "Hello $firstName, Your age: $age"; ?></em>
</body>
</html>



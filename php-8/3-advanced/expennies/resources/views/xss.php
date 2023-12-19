<?php
function espace(string $str): string {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>
<h3>Hello <?= espace($userName) ?></h3>
<?php
$price = 60.09;
$vat = 10;

echo round($price * (($vat / 100) + 1), 2);
?>
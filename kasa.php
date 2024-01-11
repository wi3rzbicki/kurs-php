<?php 
$kwota = $_GET['kwota'];
$brutto= $_GET['b'];
@$reszta = $kwota - $brutto;
echo "reszta wynosi: ".$reszta;
?>
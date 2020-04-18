<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['numero'])){
        $n = $_GET['numero'];
        if ($n > 100){
            echo 'O número ['. $n . '] é maior que 100';
        } elseif ($n<100){
            echo 'O número ['. $n . '] é menor que 100';
        } else {
            echo 'O número ['. $n . '] é igual a 100';
        }
    } else {
        echo 'error: Usage = url?numero=x';
    }
?>


<?php 

try {
    $mysqli = new mysqli("localhost", "root", "", "todolist", 3306);
} catch (Exception $e) {
    die('Não consegui me conectar nessa bagaça!!!');
}


?>
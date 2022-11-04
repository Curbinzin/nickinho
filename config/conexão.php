<?php

$porta="localhost:3307";
$interBanco="conexao";
$usuario="root";
$senha="";

$conexao=new PDO("mysql:host=$porta;dbname=$interBanco","$usuario","$senha");

?>
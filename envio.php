<?php
$host = "localhost";
$db = "dados";
$user = "root";
$pass = "";

$con = mysqli_connect($host, $user, $pass, $db) or trigger_error(mysqli_error(),E_USER_ERROR); 

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$descricao = $_POST['descricao'];

$query = "INSERT INTO clientes (nome, telefone, email, descricao) VALUES ('{$nome}','{$telefone}','{$email}','{$descricao}')";  

$result = mysqli_query($con, $query);
?>



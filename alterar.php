<?php
$host = "localhost";
$db = "dados";
$user = "root";
$pass = "";

$con = mysqli_connect($host, $user, $pass, $db) or trigger_error(mysqli_error(),E_USER_ERROR); 

$id = $_POST['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$descricao = $_POST['descricao'];

$query = "UPDATE clientes SET nome = '$nome', telefone = '$telefone', email = '$email', descricao = '$descricao' WHERE id = '$id'";  

$result = mysqli_query($con, $query);
?>
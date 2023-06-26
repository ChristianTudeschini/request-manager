<?php
$resultado = 'Deu certo!!!';

$host = "localhost";
$db = "dados";
$user = "root";
$pass = "";

$con = mysqli_connect($host, $user, $pass, $db) or trigger_error(mysqli_error(),E_USER_ERROR); 

$id = $_POST['id'];

$query = "SELECT * FROM clientes WHERE id = ".$id;  

$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {    
    $abc = json_encode(mysqli_fetch_assoc($result));        
} else {
    echo "0 results";
}

echo $abc;
exit;
?>    
    
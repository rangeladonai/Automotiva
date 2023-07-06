<?php
$host = 'localhost';
$dbname = 'radajori';
$username = 'root';
$psswrd = '';

$mysqli = mysqli_connect($host,$username,$psswrd,$dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}else{
//    echo 'conectado';
}




// // LOGIN PARA DOCKER
// $host = 'db';
// $port = '3306';
// $dbname = 'radajori';
// $user = 'root';
// $password = 'root';

// $mysqli = new mysqli($host, $user, $password, $dbname, $port);

// if ($mysqli->connect_errno) {
// die('Erro na conexão: ' . $mysqli->connect_error);
// }
// // Definir o charset da conexão
// if (!$mysqli->set_charset("utf8mb4")) {
//     printf("Erro ao definir o conjunto de caracteres utf8mb4: %s\n", $mysqli->error);
// }

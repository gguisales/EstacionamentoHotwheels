<?php
$servername = "localhost";
$username = "seu_username";
$password = "sua_senha";
$dbname = "nome_do_banco_de_dados";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Conexão falhou: " . mysqli_connect_error());
}
?>

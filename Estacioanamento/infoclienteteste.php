<?php

$sql = "SELECT * FROM clientes";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "Nome: " . $row["nome"] . "<br>";
    echo "Endereço: " . $row["endereco"] . "<br>";
    echo "Tipo de vaga: " . $row["tipo_vaga"] . "<br><br>";
  }
} else {
  echo "Não há clientes cadastrados.";
}

mysqli_close($conn);
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "games";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexão feita com sucesso";
} catch(PDOException $e) {
  echo "Conexão falhada: " . $e->getMessage();
}
?>
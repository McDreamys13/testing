<?php
$hostname = "172.20.0.2";
$username = "root";
$password = "password";
$database = "Trucorp";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = $conn->query("SELECT * FROM users");

while($data = $result->fetch_assoc()) :
    echo "ID : " . $data['ID'] . '<br>';
    echo "Nama : " . $data['Nama'] . '<br>';
    echo "Alamat : " . $data['Alamat'] . '<br>';
    echo "Jabatan : " . $data['Jabatan'] . '<br>' . '<br>';
endwhile;

mysqli_close($conn);

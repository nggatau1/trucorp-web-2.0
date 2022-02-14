<?php
$hostname = "172.24.0.2";
$username = "root";
$password = "123";
$databse = "trucorp-db";

$conn = mysqli_connect($hostname, $username, $password, $databse);

if(!$conn){
    die("Connection Filed: ".mysqli_connect_error());
}

$res = $conn->query("SELECT * FROM User");

while($data = $res->fetch_assoc()):
    echo"ID: ". $data["ID"].'<br>';
    echo"Nama: ". $data["Nama"].'<br>';
    echo"Alamat: ". $data["Alamat"].'<br>';
    echo"Jabatan: ". $data["Jabatan"].'<br>';
    echo"<br>";
endwhile;

$count = $conn->query("SELECT count(*) as total from User");
$data = $count->fetch_assoc();
echo "Total User yang tersedia: ".$data['total'];

mysqli_close($conn);

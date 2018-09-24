<?php
session_start();

$dir = "uploads/";
$nama_file = $_FILES["filegambar"]["name"];
$nama_file_tmp = $_FILES["filegambar"]["tmp_name"];
$target_file = $dir.$nama_file;

if (move_uploaded_file($nama_file_tmp, $target_file)) {
	echo "Berhasil Upload";
	header("Location: halamanakhir.php");
}

$user = array(
	"hobby" => $_POST["hobby"],
	"filegambar" => $target_file
);

$_SESSION["user"] = $user;
?>

<?php
include "db_connect.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($nama)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=register.php'>";
}else
if (empty($email)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=register.php'>";
}else 
if(empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=register.php'>";
}else 
if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=register.php'>";
}else{
$register = mysql_query("INSERT INTO users (nama,email,username,password) values ('$nama','$email','$username','$password')");
if ($register){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=register.php'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=register.php'>";
}
}
?>
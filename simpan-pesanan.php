<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama          = $_POST['nama'];
$email = $_POST['email'];
$pesan       = $_POST['pesan'];

//query insert data ke dalam database
$query = "INSERT INTO pesanan (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($conn->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}
<?php

include('../koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM pesanan WHERE id = '$id'";

if ($conn->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
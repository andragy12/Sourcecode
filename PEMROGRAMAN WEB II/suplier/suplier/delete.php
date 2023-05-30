<?php
require 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_supplier_deri WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "data berhasil dihapus";
    } else {
        echo "error: " . $sql . "<br>" . $conn->error;
    }
}
header('Location: proces.php');
$conn->close();

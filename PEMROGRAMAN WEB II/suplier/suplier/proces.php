<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {
    $kode_suplier = $_POST['kode_supplier_deri'];
    $nama_suplier = $_POST['nama_suplier_deri'];
    $alamat = $_POST['alamat_supplier_deri'];
    $no_telp = $_POST['no_hp_supplier_deri'];

    $sql = "INSERT INTO tbl_supplier_deri (kode_supplier_deri,namasupplier_deri, alamat_supplier_deri,no_hp_supplier_deri) VALUES ('$kode_suplier','$nama_suplier','$alamat', '$no_hp') ";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $kode_supplier_deri = $_POST['kode_supplier_deri'];
    $nama_supplier_deri = $_POST['nama_suplier_deri'];
    $alamat_supplier_deri = $_POST['alamat_supplier_deri'];
    $no_hp_supplier_deri = $_POST['no_hp_supplier_deri'];

    $sql = "UPDATE tbl_supplier_deri SET 
    kode_supplier_deri = '$kode_supplier_deri',
    nama_supplier_deri = '$nama_supplier_deri',
    alamat_supplier_deri = '$alamat_supplier_deri',
    no_hp_supplier_deri = '$no_hp_supplier_deri' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$sql = "SELECT * FROM tbl_supplier_deri";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'><th>ID</th><th>kode</th><th>Nama</th><th>Alamat</th><th>No HP</th><th>Action</th>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['kode_supplier_deri'] . "</td><td>" . $row['nama_supplier_deri'] . "</td><td>" . $row['alamat_supplier_deri'] . "</td><td>" . $row['no_hp_supplier_deri'] . "</td><td><a href='ubah.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" . $row["id"] . "'>Hapus</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

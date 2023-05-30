<br>
<!-- FORM SUPLIER -->
<hr>
<h2>FORM SUPLIER</h2>
<form action="proces.php" method="post">
    <label for="kode">kode suplier:<br></label>
    <input type="text" name="kode_supplier_deri" id="kode" required><br><br>
    <label for="nama">nama anda :<br></label>
    <input type="text" name="nama_supplier_deri" id="nama" required><br><br>

    <label for="alamat">Alamat Lengkap : (Tulis selengkap-lengkapnya)<br></label>
    <textarea name="alamat_supplier_deri" id="alamat" rows="4" cols="50" required></textarea><br><br>
    <label for="no_hp_supplier_deri">Nomor Handphone my :<br></label>
    <input type="text" name="notelp_supplier_deri" id="no_hp" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
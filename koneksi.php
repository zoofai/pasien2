<?php 
$koneksi = new mysqli('localhost', 'root', '', 'annisa_xipplg2')
or die(mysqli_error($koneksi));


if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi ->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) values =  ('$idPasien', '$nmPasien', jk, alamat)


}
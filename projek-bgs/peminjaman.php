<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$dinas = mysqli_real_escape_string($koneksi, $_POST['dinas']);
$ktp = mysqli_real_escape_string($koneksi, $_POST['ktp']);
$telepon = mysqli_real_escape_string($koneksi, $_POST['telepon']);
$pinjaman = mysqli_real_escape_string($koneksi, $_POST['pinjaman']);
$rekening = mysqli_real_escape_string($koneksi, $_POST['rekening']);
$jangka_waktu = mysqli_real_escape_string($koneksi, $_POST['jangka_waktu']);
$realisasi = mysqli_real_escape_string($koneksi, $_POST['realisasi']);
$jatuh_tempo = mysqli_real_escape_string($koneksi, $_POST['jatuh_tempo']);
$angsuran = mysqli_real_escape_string($koneksi, $_POST['angsuran']);

$simpan = mysqli_query($koneksi, "INSERT INTO peminjaman(id,nama,alamat,dinas,ktp,telepon,pinjaman,rekening,jangka_waktu,realisasi,jatuh_tempo,angsuran) VALUES('','$nama','$alamat','$dinas','$ktp','$telepon','$pinjaman','$rekening','$jangka_waktu','$realisasi','$jatuh_tempo','$angsuran')");
// $sql = mysqli_query($GLOBALS['conn'],$query);

if ($simpan) {
    echo '<script>alert("Data Berhasil Disimpan !!!"); document.location="home_nusawungu.php";</script>';
} else {
    echo '<script>alert("Data Gagal Disimpan !!!"); document.location="home_nusawungu.php";</script>';
}

}
?>
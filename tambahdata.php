<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $query = "INSERT INTO mahasiswa (nama, nim) VALUES ('$nama', '$nim')";
  if (mysqli_query($koneksi, $query)) {
    echo 'Data berhasil ditambahkan!';
  } else {
    echo 'Gagal menambah data: ' . mysqli_error($koneksi);
  }
}
?>
<form method='POST'>
  Nama: <input type='text' name='nama'><br>
  NIM: <input type='text' name='nim'><br>
  <input type='submit' name='submit' value='Tambah'>
</form>


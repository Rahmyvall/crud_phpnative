<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

	$nis = mysqli_real_escape_string($db, $_GET['id']);

	// perintah query untuk menghapus data pada tabel is_siswa
	$query = mysqli_query($db, "DELETE FROM is_siswa WHERE nis='$nis'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location: index.php?alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=1');
	}
}

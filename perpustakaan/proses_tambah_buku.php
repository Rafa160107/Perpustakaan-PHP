<?php 
include 'koneksi.php';
$nama_buku = $_POST['nama_buku'];
$deskripsi = $_POST['deskripsi'];

$ekstensi =  array('png','jpg','jpeg','gif','JPG','webp');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:tambah_buku.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx =$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/foto_produk/'.''.$filename);
		mysqli_query($koneksi, "INSERT INTO buku VALUES(NULL,'$nama_buku','$deskripsi','$xx')");
		echo "<script>alert('Sukses menambahkan produk');window.location.href='buku.php';</script>";
	}else{
		echo "<script>alert('Gagal menambahkan produk');window.location.href='tambah_buku.php';</script>";
	}
}
?>
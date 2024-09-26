<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id_wisata = $_POST['id_wisata'];
$id_kategori = $_POST['id_kategori'];
$tempat_wisata = $_POST['tempat_wisata'];
$slug =  str_replace('+', '-', urlencode($tempat_wisata));
$tgl_publish = $_POST['tgl_publish'];
$tentang_wisata = $_POST['tentang_wisata'];
$gambar_wisata = $_FILES['gambar_wisata']['name'];


if ($_FILES['gambar_wisata']['name'] == '') {
    $namafile = $_POST['foto_lama'];
} else {
    // Jika Mengubah Gambar
    // ambil data file
    $namafile   = $_FILES['gambar_wisata']['name'];
    $namaSementara = $_FILES['gambar_wisata']['tmp_name'];
    //pindahkan file 
    $terupload = move_uploaded_file($namaSementara, '../assets/images/' . $namafile);
}

//Query Insert ke Database 
$ubah = mysqli_query($koneksi, "UPDATE wisata SET id_kategori='$id_kategori',tempat_wisata='$tempat_wisata',slug='$slug',
tgl_publish='$tgl_publish',tentang_wisata='$tentang_wisata',gambar_wisata='$namafile'
WHERE id_wisata='$id_wisata'");

//Jika query berhasil
if ($ubah) {
    echo "<script> 
			alert('Data Berhasil Di Update!');
			document.location.href = '../?page=wisata/index';
		</script>";

    //Jika query gagal


} else {
    echo "<script> 
    alert('Data Gagal Di Update!');
    document.location.href = '../?page=wisata/index'
    </script>";
}

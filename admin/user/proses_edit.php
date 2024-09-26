<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];



if ($_FILES['foto']['name'] == '') {
    $namafile = $_POST['foto_lama'];
} else {
    // Jika Mengubah Gambar
    // ambil data file
    $namafile   = $_FILES['foto']['name'];
    $namaSementara = $_FILES['foto']['tmp_name'];
    //pindahkan file 
    $terupload = move_uploaded_file($namaSementara, '../assets/images/' . $namafile);
}

//Query Insert ke Database 
$ubah = mysqli_query($koneksi, "UPDATE user SET username='$username',
password='$password',nama_lengkap='$nama_lengkap',foto='$namafile' WHERE id_user='$id_user'");

//Jika query berhasil
if ($ubah) {
    echo "<script> 
			alert('Data Berhasil Di Update!');
			document.location.href = '../?page=user/index';
		</script>";

    //Jika query gagal

} else {
    echo "<script> 
    alert('Data Gagal Di Update!');
    document.location.href = '../?page=user/index'
    </script>";
}

<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id_tim = $_POST['id_tim'];
$nama_tim = $_POST['nama_tim'];
$jabatan = $_POST['jabatan'];



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
$ubah = mysqli_query($koneksi, "UPDATE tim SET nama_tim='$nama_tim',
jabatan='$jabatan',foto='$namafile' WHERE id_tim='$id_tim'");

//Jika query berhasil
if ($ubah) {
    echo "<script> 
			alert('Data Berhasil Di Update!');
			document.location.href = '../?page=tim/index';
		</script>";

    //Jika query gagal

} else {
    echo "<script> 
    alert('Data Gagal Di Update!');
    document.location.href = '../?page=tim/index'
    </script>";
}

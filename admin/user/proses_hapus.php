<?php
// koneksi database
include '../koneksi.php';

// menangkap data nopesan yang di kirim dari url
$id_user = $_GET['id_user'];


// menghapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id_user'");

if ($hapus) {
    echo "<script> 
			alert('Data Berhasil Di Hapus!');
			document.location.href = '../?page=user/index';
		</script>";
    //Jika query gagal

} else {
    echo "<script> 
    alert('Data Gagal Di Hapus!');
    document.location.href = '../?page=user/index';
    </script>";
}

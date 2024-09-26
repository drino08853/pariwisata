<?php
// koneksi database
include '../koneksi.php';

// menangkap data nopesan yang di kirim dari url
$id_tim = $_GET['id_tim'];


// menghapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM tim WHERE id_tim='$id_tim'");

if ($hapus) {
    echo "<script> 
			alert('Data Berhasil Di Hapus!');
			document.location.href = '../?page=tim/index';
		</script>";
    //Jika query gagal

} else {
    echo "<script> 
    alert('Data Gagal Di Hapus!');
    document.location.href = '../?page=tim/index';
    </script>";
}

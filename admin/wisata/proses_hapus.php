<?php
// koneksi database
include '../koneksi.php';

// menangkap data nopesan yang di kirim dari url
$id_wisata = $_GET['id_wisata'];


// menghapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM wisata WHERE id_wisata='$id_wisata'");

if ($hapus) {
    echo "<script> 
			alert('Data Berhasil Di Hapus!');
			document.location.href = '../?page=wisata/index';
		</script>";
    //Jika query gagal

} else {
    echo "<script> 
    alert('Data Gagal Di Hapus!');
    document.location.href = '../?page=wisata/index';
    </script>";
}

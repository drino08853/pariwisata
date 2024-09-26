<?php
// koneksi database
include '../koneksi.php';

// menangkap data nopesan yang di kirim dari url
$id_armada = $_GET['id_armada'];


// menghapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM armada WHERE id_armada='$id_armada'");

if ($hapus) {
    echo "<script> 
			alert('Data Berhasil Di Hapus!');
			document.location.href = '../?page=armada/index';
		</script>";
    //Jika query gagal

} else {
    echo "<script> 
    alert('Data Gagal Di Hapus!');
    document.location.href = '../?page=armada/index';
    </script>";
}

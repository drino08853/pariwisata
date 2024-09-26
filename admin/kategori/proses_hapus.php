<?php
// koneksi database
include '../koneksi.php';

// menangkap data nopesan yang di kirim dari url
$id_kategori = $_GET['id_kategori'];


// menghapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$id_kategori'");

if ($hapus) {
    echo "<script> 
			alert('Data Berhasil DiHapus!');
			document.location.href = '../?page=kategori/index';
		</script>";
    //Jika query gagal

} else {
    echo "<script> 
    alert('Data Gagal DiHapus!');
    document.location.href = '../?page=kategori/index';
    </script>";
}

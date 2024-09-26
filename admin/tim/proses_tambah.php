<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama_tim = $_POST['nama_tim'];
$jabatan = $_POST['jabatan'];
$foto = $_FILES['foto']['name'];


//cek dulu jika ada gambar produk jalankan coding ini
if ($foto  != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $foto; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, '../assets/images/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
        // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
        $query = "INSERT INTO tim (nama_tim,jabatan,foto) VALUES ('$nama_tim','$jabatan','$nama_gambar_baru')";
        $result = mysqli_query($koneksi, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data Berhasil Di Simpan !');window.location='../?page=tim/index';</script>";
        }
    } else {
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
        echo "<script>alert('Ekstensi Gambar Yang Boleh Hanya jpg atau png.');window.location='../?page=tim/index';</script>";
    }
} else {
    $query = "INSERT INTO tim (nama_tim,jabatan,foto) VALUES ('$nama_tim','$jabatan', null)";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data Berhasil Ditambah !');window.location='../?page=tim/index';</script>";
    }
}

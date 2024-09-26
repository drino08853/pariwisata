<?php
include "../koneksi.php";

// Ambil data tanggal mulai dan sampai dari URL (GET parameter)
$mulai = isset($_GET['mulai']) ? $_GET['mulai'] : '';
$sampai = isset($_GET['sampai']) ? $_GET['sampai'] : '';

// Validasi input tanggal
if (!empty($mulai) && !empty($sampai)) {
    $laporan = mysqli_query($koneksi, "SELECT * FROM wisata
        JOIN kategori ON wisata.id_kategori = kategori.id_kategori
        WHERE tgl_publish BETWEEN '$mulai' AND '$sampai'");
} else {
    echo "Tanggal tidak valid.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Wisata</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <center>
        <h1>Laporan Wisata</h1>
    </center>
    <center>
        <p>Periode: <?= date('d-m-Y', strtotime($mulai)) ?> s/d <?= date('d-m-Y', strtotime($sampai)) ?></p>
    </center>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Tempat Wisata</th>
                <th>Nama Kategori</th>
                <th>Tanggal Publish</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($d = mysqli_fetch_array($laporan)) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><img src="../assets/images/<?= $d['gambar_wisata']; ?>" width="150px" height="100px" alt="Image Not Found"></td>
                    <td><?= $d['tempat_wisata']; ?></td>
                    <td><?= $d['nama_kategori']; ?></td>
                    <td><?= date('d-m-Y', strtotime($d['tgl_publish'])); ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <div class="signature" style="text-align: right; margin-right: 50px;">
        <p>Mengetahui,</p>
        <p>Padang, <?php echo date('d-m-Y'); ?></p>
        <div style=""></div>
        <br><br>
        <p>(HRD)</p>
    </div>




    <script>
        window.print()
    </script>
</body>

</html>
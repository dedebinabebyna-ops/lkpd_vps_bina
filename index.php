<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD: Manajemen Server VPS AWS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 30px;
            background-color: #f4f7f6;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 25px 35px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #232f3e;
            border-bottom: 3px solid #ff9900;
            padding-bottom: 10px;
        }
        h2 {
            color: #0073bb;
            margin-top: 25px;
        }
        .identitas {
            background-color: #eef3f7;
            padding: 15px 20px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
        .identitas table {
            width: 100%;
            border-collapse: collapse;
        }
        .identitas td {
            padding: 6px 4px;
        }
        .kartu-materi {
            border-left: 4px solid #ff9900;
            background-color: #fafafa;
            padding: 12px 18px;
            margin-bottom: 15px;
            border-radius: 0 6px 6px 0;
        }
        .kartu-materi h3 {
            margin: 0 0 6px 0;
            color: #232f3e;
        }
        .kartu-materi p {
            margin: 0;
        }
    </style>
</head>
<body>

<?php
// ==========================================
// ISI DATA IDENTITAS DI SINI (LANGSUNG DI KODE)
// ==========================================
$nama       = "Sabrina Keylandra";
$kelas      = "XI RPL 1";
$tanggal    = "19 November 2026";
$instruktur = "Bapak Asep Ullumudin";

// Judul Utama & Subjudul
$judul_lkpd   = "LKPD: Manajemen Server VPS AWS";
$fase_materi  = "Fase 1: Pengenalan Konsep VPS & Cloud";

// Data Pengertian Istilah Server & Cloud
$daftar_istilah = [
    [
        "istilah" => "Shared Hosting",
        "pengertian" => "Layanan hosting di mana beberapa website ditempatkan dalam satu server fisik yang sama dan berbagi sumber daya (CPU, RAM, disk space) secara bersama-sama. Biaya terjangkau, namun performa dapat terpengaruh oleh pengguna lain di server tersebut."
    ],
    [
        "istilah" => "Dedicated Server",
        "pengertian" => "Layanan penyewaan satu server fisik secara penuh yang hanya digunakan oleh satu pengguna atau organisasi. Memberikan performa maksimal, keamanan tinggi, serta kontrol penuh terhadap konfigurasi server tanpa berbagi sumber daya dengan pihak lain."
    ],
    [
        "istilah" => "Amazon Lightsail",
        "pengertian" => "Layanan VPS (Virtual Private Server) dari AWS yang dirancang untuk kemudahan penggunaan dengan paket harga tetap bulanan. Sangat cocok untuk pemula atau aplikasi skala kecil-menengah karena sudah mencakup komputasi, penyimpanan, dan jaringan dalam satu paket praktis."
    ],
    [
        "istilah" => "Amazon EC2 (Elastic Compute Cloud)",
        "pengertian" => "Layanan komputasi awan (cloud) dari AWS yang menyediakan server virtual dengan kapasitas yang dapat disesuaikan secara fleksibel (scalable). Menawarkan kontrol penuh atas sistem operasi, jaringan, serta spesifikasi hardware sesuai kebutuhan aplikasi skala kecil hingga enterprise."
    ]
];
?>

<div class="container">
    <h1><?php echo $judul_lkpd; ?></h1>

    <!-- Bagian Identitas (Diisi langsung dari variabel PHP di atas) -->
    <div class="identitas">
        <table>
            <tr>
                <td width="130"><strong>Nama</strong></td>
                <td>: <?php echo $nama; ?></td>
            </tr>
            <tr>
                <td><strong>Kelas</strong></td>
                <td>: <?php echo $kelas; ?></td>
            </tr>
            <tr>
                <td><strong>Tanggal</strong></td>
                <td>: <?php echo $tanggal; ?></td>
            </tr>
            <tr>
                <td><strong>Instruktur</strong></td>
                <td>: <?php echo $instruktur; ?></td>
            </tr>
        </table>
    </div>

    <!-- Bagian Fase 1 -->
    <h2><?php echo $fase_materi; ?></h2>

    <?php foreach ($daftar_istilah as $item): ?>
        <div class="kartu-materi">
            <h3><?php echo $item['istilah']; ?></h3>
            <p><?php echo $item['pengertian']; ?></p>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
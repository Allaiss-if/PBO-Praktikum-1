<?php
//echo"=== PROGRAM TRAKSAKSI WARUNG KLONTONG ===";
$namaPelanggan = "Akasasa";
$totalBelanja = 300000;
$persenDiskon = 0.20;
$member = true;

function hitungTotalBayar($belanja, $diskon) {
    $potonganHarga = $belanja * $diskon;
    return $belanja - $potonganHarga;
}


//Cek Member
if ($member == true) {
    $statusMember = 'Ya';
    $totalAkhir = hitungTotalBayar($totalBelanja, $persenDiskon);
    }else {
        $statusMember = 'Tidak';
        $totalAkhir = hitungTotalBayar($totalBelanja, 0);
}

$daftarBarang = ['Sapu injuk', 'Beras 1 Kg', 'Gayung Premium', 'Minyak Goreng'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kasir Sederhana</title>
    <style>
        body {
            font-family: Georgia, 'Times New Roman';
            line-height: 1.5;
            margin: 0px;
            justify-content: flex-start;
            align-items: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            padding-top: 40px;
            background-color: #000;
        }


        .nota {
            border-radius: 20px;
            padding: 20px;
            width: 100%;
            max-width: 400px;
            position: relative;
            background: #07182E;
            overflow: hidden;
        }

        .nota::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(180deg,
            #00b7ff, #ff30ff);
            animation: rotate 3s linear infinite;
            z-index: 1;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .nota > * {
            position: relative;
            z-index: 3;
        }

        .nota::after {
            content: "";
            position: absolute;
            inset: 5px;
            background:  #07182E;
            border-radius: 15px;
            z-index: 2;
        }

        h2, h3, p, ul {
            color: #ffffff;
        }
        
        .judul {
        text-align: center;
        margin-top: 0px;
        margin-bottom: 20px;
        width: 100%;
        }

        h3 {
            border-bottom: 2px dashed #ffffff;
            padding: 0px;
            margin-top: 0;
            text-align: center;
        }

        ul {
            padding-left: 30px;
        }
    </style>
</head>
<body>
    <h2 class="judul">PROGRAM TRAKSAKSI WARUNG KLONTONG</h2>
    <div class="nota">
        <h3>NOTA PEMBAYARAN</h3>
        <p><strong>Nama Pelanggan:</strong> <?php echo $namaPelanggan; ?></p>
        <p><strong>Status Member:</strong> <?php echo $statusMember; ?></p>
        
        <p><strong>Daftar Barang Belanjaan:</strong></p>
        <ul>
            <?php
            foreach ($daftarBarang as $index => $barang) {
                $nomor = $index + 1;
                echo "<li>{$nomor}. {$barang}</li>";
            }
            ?>
        </ul>
        
        <hr style="border-top: 1px dashed #000;">
        <p><strong>Total belanja awal:</strong> Rp <?php echo number_format($totalBelanja, 0, ',', '.'); ?></p>
        
        <?php if ($member): ?>
            <p><strong>Diskon Member:</strong> <?php echo ($persenDiskon * 100) . "%"; ?></p>
        <?php endif; ?>
        
        <p><strong>Total yang harus dibayar:</strong> Rp <?php echo number_format($totalAkhir, 0, ',', '.'); ?></p>
    </div>
</body>
</html>
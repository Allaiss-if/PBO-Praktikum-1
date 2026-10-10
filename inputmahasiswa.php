<?php
// Menyiapkan variabel
$nimInput = "";
$namaInput = "";
$fakultas = "";
$prodi = "";
$asal_sekolah = "";
$semester = "";
$hobi = "";


// Mengecek apakah form sudah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mengambil data dari form dan membersihkan spasi berbelebih
    $nimInput = trim($_POST["nimInput"]);
    $namaInput = trim($_POST["namaInput"]);
    $fakultas = trim($_POST["fakultas"]);
    $prodi = trim($_POST["prodi"]);
    $asal_sekolah = trim($_POST["asal_sekolah"]);
    $semester = $_POST["semester"];
    $hobi = trim($_POST["hobi"]);
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>

    <style>
        :root {
            --primary: #000000;
            --secondary: #ffffff;
            --shadow: 800px 8px 0px  var(--primary);
        }

        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Courier New', monospace;
        }

        body {
        background-color: var(--secondary);
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 600px;
            background-color: #74B9FF;
            padding: 40px 30px;
            border: 1px solid var(--primary);
            border-radius: 12px;
            position: relative;
        }

        .container::before {
            content:'';
            position: absolute;
            top: 10px;
            left: 10px;
            right: -10px;
            bottom: -10px;
            z-index: -1;
            border-radius: 12px;
            background-color: var(--primary);
        }

        h1 {
            text-align: center;
            color: var(--primary);
        }

        h2 {
            color: #023872;
            padding-bottom: 10px;
        }

        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 8px;
            color: color;
        }
        input,
        select {
            width: 100%;
            padding: 10px 15px;
            border: 2px solid var(--primary);
            background-color: var(--secondary);
            font-size: 16px;
            border-radius: 10px;
            outline: none;
            transition: all 0.3s;
            position: relative;
        }

        input:focus {
            box-shadow: 4px 4px 0px var(--primary);
        }
        .button {
            width: 100%;
            margin-top: 20px;
            border-radius: 10px;
            background: #FFD23F;
            color: #000;
            box-shadow: 5px 5px 0 0 #000;
            font-weight: 700;
            padding: 12px 24px;
            cursor: pointer;
            transition: all 0.1s ease;
        }


        .button:hover {
            transform: translate(-2px, -2px);
            box-shadow: 7px 7px 0 0 #000;
        }

        .hasil {
            margin-top: 30px;
            padding: 20px;
            background-color: #FF6B6B;
            border-radius: 25px;
            box-shadow: 7px 7px 0 0 #000;
        }

        .hasil h2 {
            margin-bottom: 10px;
        }

        .hasil p {
            display: grid;
            grid-template-columns: 130px 15px 1fr; 
            margin: 5px 0;
            align-items: start;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Input Data Mahasiswa</h1>

    <form method="POST">

        <label>NIM</label>
        <input 
        type="number" name="nimInput" required>
        <br>

        <label>Nama Mahasiswa</label>
        <input 
        type="text" name="namaInput" required
        pattern="[A-Za-z ]+" 
        title="Nama hanya boleh berisi huruf dan spasi">

        <label>Fakultas</label>
        <input 
        type="text" name="fakultas" required
        pattern="[A-Za-z ]+" 
        title="Fakultas hanya boleh berisi huruf dan spasi">

        <label>Program Studi</label>
        <input 
        type="text" name="prodi" required
        pattern="[A-Za-z ]+" 
        title="Prodi hanya boleh berisi huruf dan spasi">

        <label>Asal Sekolah</label>
        <input 
        type="text" name="asal_sekolah" required>

        <label>Semester</label>
        <select name="semester" required>
            <option value="">-- Pilih Semester --</option>
            <option value="1">Semester 1</option>
            <option value="2">Semester 2</option>
            <option value="3">Semester 3</option>
            <option value="4">Semester 4</option>
            <option value="5">Semester 5</option>
            <option value="6">Semester 6</option>
            <option value="7">Semester 7</option>
            <option value="8">Semester 8</option>
        </select>

        <label>Hobi</label>
        <input 
        type="text" name="hobi"
        pattern="[A-Za-z ]+" 
        title="Hobi hanya boleh berisi huruf dan spasi">

        <button class="button" type="submit">Simpan Data</button>

    </form>


    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>

    <div class="hasil">
        <h2>Data Mahasiswa</h2>

        <p>
            <strong>NIM</strong>
            <span>:</span>
            <span><?= htmlspecialchars($nimInput) ?></span>
        </p>

        <p>
            <strong>Nama</strong>
            <span>:</span>
            <span><?= htmlspecialchars($namaInput) ?></span>
        </p>

        <p>
            <strong>Fakultas</strong>
            <span>:</span>
            <span><?= htmlspecialchars($fakultas) ?></span>
        </p>

        <p>
            <strong>Program Studi</strong>
            <span>:</span>
            <span><?= htmlspecialchars($prodi) ?></span>
        </p>

        <p>
            <strong>Asal Sekolah</strong>
            <span>:</span>
            <span><?= htmlspecialchars($asal_sekolah) ?></span>
        </p>

        <p>
            <strong>Semester</strong>
            <span>:</span>
            <span><?= htmlspecialchars($semester) ?></span>
        </p>

        <p>
            <strong>Hobi</strong>
            <span>:</span>
            <span><?= htmlspecialchars($hobi) ?></span>
        </p>
    </div>

    <?php } ?>

</div>

</body>
</html>
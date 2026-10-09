<?php
require_once "auth.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Tambah Mahasiswa</h1>
        <p>Web Programming 1</p>
    </header>

    <nav id="main-navigation" class="top-nav">
        <a href="dashboard.php">Dashboard</a>
        <a href="index.php">Home / Biodata</a>
        <a href="layout.php">Layout Lab</a>
        <a href="data_mahasiswa.php">Data Mahasiswa</a>
        <a href="form_mahasiswa.php">Tambah Mahasiswa</a>
        <a href="logout.php">Logout</a>
    </nav>

    <main>
        <section>
            <h2>Form Mahasiswa</h2>
            <form action="proses_tambah.php" method="POST">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="program_studi">Program Studi</label>
                    <input type="text" id="program_studi" name="program_studi" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button type="submit">Simpan</button>
            </form>
        </section>
    </main>

    <footer>
        <p>Web Programming 1</p>
    </footer>
</body>

</html>
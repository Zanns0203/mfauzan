<?php
require_once "auth.php";
require_once "koneksi.php";

$sql = "SELECT id, nim, nama, program_studi, email
        FROM mahasiswa
        ORDER BY id ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Data Mahasiswa</h1>
        <p>Web Programming 1</p>
    </header>

    <nav id="main-navigation" class="top-nav">
        <a href="index.php">Biodata</a>
        <a href="layout.php">Layout Lab</a>
        <a href="data_mahasiswa.php">Data Mahasiswa</a>
    </nav>

    <main>
        <section>
            <h2>Daftar Mahasiswa</h2>

            <table class="data-table">
                <caption>Daftar Mahasiswa</caption>

                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nim']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['program_studi']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </section>
    </main>

    <footer>
        <p>Web Programming 1</p>
    </footer>

</body>

</html>
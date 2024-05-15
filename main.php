<?php
require 'function.php';
$mahasiswa = mysqli_query($conn, "SELECT*FROM malika");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tugas Uts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <h3>Crud sederhana</h3>
        <button class="btn btn-primary"><a style="text-decoration: none; color:white; "
                href="tambah.php">+tambah</a></button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nim</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat/Tanggal lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col">No.telp</th>
                <th scope="col">Agama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $rows): ?>
                <tr>
                    <td><?= $rows["nim"]; ?></td>
                    <td><?= $rows["nama"]; ?></td>
                    <td><?= $rows["tempat_lahir"]; ?></td>
                    <td><?= $rows["alamat"]; ?></td>
                    <td><?= $rows["email"]; ?></td>
                    <td><?= $rows["no_telp"]; ?></td>
                    <td><?= $rows["agama"]; ?></td>
                    <td><?= $rows["jenis_kl"]; ?></td>
                    <td><?= $rows["jurusan"]; ?></td>
                    <td><img src="img/<?= $rows["foto"]; ?>" alt="gambar" style="width: 70px; height: 40px;"></td>
                    <td><button type="button" class="btn btn-primary"><a style="text-decoration: none; color:white;"
                                href="ubah.php ? nim=<?= $rows["nim"] ?>"><strong>!</strong></a></button>
                        <button type="button" class="btn btn-danger"><a style="color: white; text-decoration:none;"
                                href="hapus.php ? nim=<?= $rows["nim"] ?>"
                                onclick="return confirm('Yakin?')"><strong>-</strong></a></button>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
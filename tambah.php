<?php
require 'function.php';
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {

        echo "<script>
        alert('Data berhasil di tambah');
        document.location.href='main.php'
        </script>";
    } else {
        echo "<script>
        alert('Data gagal di tambah');
        document.location.href='main.php'
        </script>";
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    h2 {
        text-align: center;
        justify-content: center;
        margin: 10px 10px;
    }
</style>

<body>
    <h2>Form Tambah Data</h2>

    <form style="width: 1000px; margin: 10px 10px 10px 10px;" class="row g-3" method="post"
        enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="nim" class="form-label">Nim</label>
            <input type="nim" name="nim" class="form-control" id="nim" autocomplete="off" required
                placeholder="Masukan nim">
        </div>
        <div class="col-md-6">
            <label for="nama" class="form-label">Nama</label>
            <input type="nama" name="nama" class="form-control" id="nama" autocomplete="off" required
                placeholder="Masukan nama">
        </div>
        <div class="col-md-6">
            <label for="tempat_lahir" class="form-label">Tempat tanggal lahir</label>
            <input type="tempat_lahir" name="tempat_lahir" class="form-control" id="tempat_lahir" autocomplete="off"
                required placeholder="Masukan tempat lahir">
        </div>
        <div class="col-md-6">
            <label for="alamat" class="form-label">alamat</label>
            <input type="alamat" name="alamat" class="form-control" id="alamat" autocomplete="off" required
                placeholder="Masukan alamat">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" autocomplete="off" required
                placeholder="Masukan email">
        </div>
        <div class="col-md-6">
            <label for="no_telp" class="form-label">No Telpon</label>
            <input type="numeric" name="no_telp" class="form-control" id="no_telp" autocomplete="off" required
                placeholder="masukan nomer telpon">
        </div>
        <div class="col-md-6">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" name="agama" class="form-control" id="agama" placeholder="agama" autocomplete="off">
        </div>
        <div class="col-md-4">
            <label for="jenis_kl" class="form-label">Jenis kelamin</label>
            <select id="jenis_kl" name="jenis_kl" class="form-select">

                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">perempuan</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select id="jurusan" class="form-select" aria-label="select example">
                <option value="Akuntan">Akutansi</option>
                <option value="Informatika">Informatika</option>
                <option value="Industri">Industri</option>
                <option value="Manajemen">Manajemen</option>
            </select>
        </div>
        <!-- <div class="col-md-6">
            <label for="foto" class="form-label">upload foto</label>
            <input type="text" name="foto" class="form-control" id="foto">
        </div> -->
        <div class="col-md-6">
            <label for="foto" class="form-label">Upload foto</label>
            <input class="form-control" name="foto" type="file" id="foto">
        </div>
        <div class="col-12">
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
            <button type="submit" name="cancel" id="cancel" class="btn btn-warning"><a href="main.php"
                    style="text-decoration:none; color:white;">Cancel</a>
            </button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
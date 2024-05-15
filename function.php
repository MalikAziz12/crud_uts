<?php
$conn = mysqli_connect("localhost", "root", "", "malik");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($rows = mysqli_fetch_assoc($result)) {
        $row[] = $rows;
    }
    return $row;
}

function hapus($nim)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM malika WHERE nim = $nim");
    return mysqli_affected_rows($conn);

}

function ubah($ubah)
{
    global $conn;
    $nim = htmlspecialchars($ubah["nim"]);
    $nama = htmlspecialchars($ubah["nama"]);
    $tempat_lahir = htmlspecialchars($ubah["tempat_lahir"]);
    $alamat = htmlspecialchars($ubah["alamat"]);
    $email = htmlspecialchars($ubah["email"]);
    $no_telp = htmlspecialchars($ubah["no_telp"]);
    $agama = htmlspecialchars($ubah["agama"]);
    $jenis_kl = htmlspecialchars($ubah["jenis_kl"]);
    $jurusan = htmlspecialchars($ubah["jurusan"]);

    $gambarlama = htmlspecialchars($ubah['gambarlama']);
    // cek apakah user ganti gambar
    if ($_FILES['foto']['error'] === 4) {
        $foto = $gambarlama;
    } else {
        $foto = upload();
    }


    $query = "UPDATE malika SET 
    nim = '$nim',
    nama = '$nama',
    tempat_lahir = '$tempat_lahir',
    alamat = '$alamat',
    email = '$email',
    no_telp = '$no_telp',
    agama = '$agama',
    jenis_kl = '$jenis_kl',
    jurusan = '$jurusan',
    foto = '$foto'

    WHERE nim = $nim ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // pengecekan gambar yang di uplload
    if ($error === 4) {
        echo "<script>
        alert('uplod gambar terlebih dahulu');
        </script>";

        return false;
    }

    // pengaplodan hanya gambar

    $eksentensiGambarValid = ['jpg', 'png', 'jpeg'];
    $eksentensiGambar = explode('.', $namaFile); //memcah string
    $eksentensiGambar = strtolower(end($eksentensiGambar)); //mengambil ekstensi

    if (!in_array($eksentensiGambar, $eksentensiGambarValid)) {
        echo "<script>
        alert('uplod gambar yang betul coi');
        </script>";
        return false;
    }

    //pengecekan ukuran file

    if ($ukuranFile > 1000000) {
        echo "<script>
        alert('uplod gambar terlebih besar');
        </script>";
        return false;
    }

    // generate nama file baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $eksentensiGambar;

    //pengplodan foto
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}

function tambah($add)
{
    global $conn;

    $nim = htmlspecialchars($add["nim"]);
    $nama = htmlspecialchars($add["nama"]);
    $tempat_lahir = htmlspecialchars($add["tempat_lahir"]);
    $alamat = htmlspecialchars($add["alamat"]);
    $email = htmlspecialchars($add["email"]);
    $no_telp = htmlspecialchars($add["no_telp"]);
    $agama = htmlspecialchars($add["agama"]);
    $jenis_kl = htmlspecialchars($add["jenis_kl"]);
    $jurusan = htmlspecialchars($add["jurusan"]);


    // cek gambar upload
    $foto = upload();
    if (!$foto) {
        return false;
    }

    $query = "INSERT INTO malika VALUES ('$nim','$nama','$tempat_lahir','$alamat','$email','$no_telp','$agama','$jenis_kl','$jurusan','$foto')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>
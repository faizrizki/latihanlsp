<?php
require 'koneksi.php';

$id = $_GET["id"];


$siswa = query( "SELECT * FROM siswa WHERE id = $id" )[0];


if( isset($_POST["submit"]) ) {
    
    
    if( !empty($_POST) ) {
        ubah($_POST);
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'tampildata.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'tampildata.php';
            </script>
        ";
    }   

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>ubahh data mahasiswa</h1>

    <form action="" method="post">
        
        <ul>
            <li>
                <label for="nis">Nis : </label>
                <input type="text" name="nis" id="nis" required
                value="<?= $siswa["nis"];?>" >
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required
                value="<?= $siswa["nama"];?>" >
            </li>
            <li>
                <label for="kelas">Kelas : </label>
                <input type="text" name="kelas" id="kelas"
                value="<?= $siswa["kelas"];?>" >
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required
                value="<?= $siswa["jurusan"];?>" >
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat" 
                value="<?= $siswa["alamat"];?>" >
            </li>
            <li>
                <button type="submit" name="submit">ubah data</button>
            </li>
        </ul>
    
    </form>

</body>
</html>
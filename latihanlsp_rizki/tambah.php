<?php
include 'koneksi.php';


$conn = mysqli_connect("localhost", "root", "", "db_latihanlsprizki");

if( isset($_POST["submit"]) ) {
    
if(!empty($_POST)) {
    tambah($_POST);
    echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'tampildata.php';
        </script>
    ";
} else{
    echo "
        <script>
            alert('data gagal ditambahkan');
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
    <h1>Tambah data</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nis">Nis : </label>
                <input type="text" name="nis" id="nis" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="kelas">Kelas : </label>
                <input type="text" name="kelas" id="kelas">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>
    
    </form>

</body>
</html>
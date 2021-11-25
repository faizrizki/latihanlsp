<?php
require 'koneksi.php';
$siswa = query("SELECT * FROM siswa");


?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<h1>Data Siswa</h1>

<a href="tambah.php"><button>tambah data</button></a>
<table border="2" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Alamat</th>
    </tr>
    <?php $i = 1 ?>
    <?php foreach( $siswa as $row ) : ?>   
        <tr>
            <td><?php echo $i ?></td>
            <td>
                <a href="edit.php?id=<?= $row["id"]; ?>">edit</a>
                <a href="hapus.php?id=<?= $row["id"]; ?> " onclick="return confirm('yakin?')">hapus</a>
            </td>
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["kelas"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            <td><?= $row["alamat"]; ?></td>   
        </tr>
        
        <?php $i++; ?>
    <?php  endforeach; ?>
</table>

</body>    
</body>
</html>
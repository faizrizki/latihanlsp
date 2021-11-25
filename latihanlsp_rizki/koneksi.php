<?php
$conn = mysqli_connect("localhost", "root", "", "db_latihanlsprizki");



function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $alamat = htmlspecialchars($data["alamat"]);


$query = "INSERT INTO siswa
VALUES
('', '$nis', '$nama', '$kelas', '$jurusan', '$alamat')
";
mysqli_query($conn, $query);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
}

 
function ubah($data) {
    global $conn;
    $id = $_GET["id"];
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $alamat = htmlspecialchars($data["alamat"]);


    $query = "UPDATE siswa SET
                nis = '$nis',
                nama =  '$nama',
                kelas = '$kelas',
                jurusan = '$jurusan',
                alamat = '$alamat'
            WHERE id = $id
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>
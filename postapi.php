<?php
// connect
include "connect.php";

//menambahkan variabel post
// $id = $_POST['id'];
// echo $id;
$nama_mahasiswa = isset($_POST['nama_mahasiswa']) ? $_POST['nama_mahasiswa'] : "";
echo $nama_mahasiswa;
$nim = isset($_POST['nim']) ? $_POST['nim'] : "";
echo $nim;
$jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : "";
echo $jurusan;

// tambah query
$sql = "INSERT INTO mahasiswa (nama_mahasiswa, nim, jurusan) VALUES ('".$nama_mahasiswa."', '".$nim."', '".$jurusan."')";
echo $sql;

// running query
$query = mysqli_query($connect, $sql);
if($query){
    $msg = "Simpan data berhasil";
}else{
    $msg = "Simpan data gagal";
}

$response = array(
    'status' => 'success',
    'msg' => $msg
);

echo json_encode($response);

// echo $msg
?>
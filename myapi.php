<?php
include "connect.php";

$sql = "SELECT * FROM mahasiswa";
$query = mysqli_query($connect, $sql);
while ($data = mysqli_fetch_array($query)){

    $item[] = array(
        'id' => $data['id'],
        'nama_mahasiswa' => $data['nama_mahasiswa'],
        'nim' => $data['nim'],
        'jurusan' => $data['jurusan'],
    );
}
$response = array(
    'status' => 'OK',
    'data' => $item
);

echo json_encode($response);


?>
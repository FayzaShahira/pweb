<?php
include 'connection.php';

$conn = getConnection();

$nama = $_GET["nama"];

try {
    $statement = $conn->prepare("SELECT * FROM detail_mahasiswa WHERE nama = :nama;");
    $statement -> bindParam(':nama', $nama);
    $statement -> execute();
    $statement -> setFetchMode(PDO::FETCH_OBJ);
    $result = $statement -> fetch();

    if($result){
        echo json_encode($result, JSON_PRETTY_PRINT);
    } else {
        http_response_code(404);
        $response ["messgae"] = "Informasi Tidak Ditemukan";
        echo json_encode($response, JSON_PRETTY_PRINT);
    }

} catch (PDOException $e) {
    echo $e;
}

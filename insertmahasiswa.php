<?php
include 'connection.php';

//INSERT INTO 'detail_mahasiswa' ('nim', 'nama', 'gender', 'tempat_lahir', 'hobi', 'agama', 'kelas', 'semester', 'jurusan', 'fakultas')
//VALUES ('fayza)

$conn = getConnection();

try{
    if($_POST){
        $nim = $_POST ["nim"];
        $nama = $_POST ["nama"];
        $gender = $_POST ["gender"];
        $tempat_lahir = $_POST ["tempat_lahir"];
        $hobi = $_POST ["hobi"];
        $agama = $_POST ["agama"];
        $kelas = $_POST ["kelas"];
        $semester = $_POST ["semester"];
        $jurusan = $_POST ["jurusan"];
        $fakultas = $_POST ["fakultas"];

       $statement = $conn->prepare("INSERT INTO `detail_mahasiswa`(`nim`, `nama`, `gender`, `tempat_lahir`, `hobi`, `agama`, `kelas`, `semester`, `jurusan`, `fakultas`) VALUES (:nim, :nama, :gender, :tempat_lahir, :hobi, :agama, :kelas, :semester, :jurusan, :fakultas)");

       $statement->bindParam(':nim', $nim);
       $statement->bindParam(':nama', $nama);
       $statement->bindParam(':gender', $gender);
       $statement->bindParam(':tempat_lahir', $tempat_lahir);
       $statement->bindParam(':hobi', $hobi);
       $statement->bindParam(':agama', $agama);
       $statement->bindParam(':kelas', $kelas);
       $statement->bindParam(':semester', $semester);
       $statement->bindParam(':jurusan', $jurusan);
       $statement->bindParam(':fakultas', $fakultas);

       $statement->execute();
       $response["message"] = "Data Berhasil Direcord";
    }
} catch (PDOException $e){
    $response["message"] = "error $e";
}
echo json_encode($response, JSON_PRETTY_PRINT);

<?php
// connection.php
function getConnection(): PDO
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mahasiswa";
    return new PDO("mysql:host=$servername;dbname=$database", $username, $password, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
}
//$servername = "localhost";
//$username = "root";
//$password = "";
//$database = "mahasiswa";

//try {
  //  $conn = new PDO ("mysql:host=$servername;dbname=$database", $username, $password);
    //$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected succesfully";
//} catch (PDOException $e) {
  //  echo "Connection failed: " . $e->getMessage();
//}
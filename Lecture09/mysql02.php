<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $server = "localhost";
    $user = "myuser";
    $password = "testphp";
    $db = "test";

    //membangun koneksi
    $conn = new mysqli($server,$user,$password,$db);
    if ($conn->connect_error) {
        die("koneksi gagal...");
    }

    $sql = "SELECT * FROM contact";
    $result = $conn->query($sql);

    if($result->num_rows>0) {
        while ($row = $result->fetch_assoc()) {
            echo "id: ".$row["id"]."<br>";
            echo "nama: ".$row["nama"]."<br>";
            echo "phone: ".$row["phone"]."<br>";
            echo "<br>";
        }
    } else {
        echo "tidak ada data";
    }    

    $conn->close();
?>

</body>
</html>

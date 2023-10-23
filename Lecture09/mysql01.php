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

    $sql = "INSERT INTO contact(nama,phone) VALUES ('Andi','081223344')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    }
    else {
        echo "Error: " .$sql ."<br>" . $conn->error;
    }

    $conn->close();
?>

</body>
</html>

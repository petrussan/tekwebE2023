<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $_SESSION["username"]="petrus";
    $_SESSION["status"]="login";
    echo "username and status are set in the session variable";
    
    $_SESSION["cart"][0]=100;
    $_SESSION["cart"]["Produk1"] = 10;
    $_SESSION["cart"]["Produk2"] = 20;
    
?>    
</body>
</html>

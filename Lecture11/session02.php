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
    echo "Variable session : <BR>";
    echo "username: ".$_SESSION["username"];
    echo "<BR>";
    echo "status: ". $_SESSION["status"];

    echo "<P>Cart[0]: ". $_SESSION["cart"][0];

    echo "<P>All session variable<BR>";
    print_r ($_SESSION);
?>    
</body>
</html>

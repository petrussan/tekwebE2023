<?php
    $key = "user";
    $name = "OnlineShop";
    setcookie("id","70001",time()+86400,"/");
    setcookie($key,$name,time()+86400,"/");

    //hapus cookie
    //setcookie($key,$name,time()-1);
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
   if (!isset($_COOKIE[$key])) {
     echo "There is no cookie yet"; 
   } else {
     echo "We have '".$key."' cookie<br>";
     echo "The value is: ". $_COOKIE[$key];
     echo "<P>Cookie List:<BR> ";
     foreach ($_COOKIE as $key=>$val) {
        echo $key . " is ".$val."<BR>";
     }

   }
?>    
</body>
</html>

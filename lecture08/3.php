<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<H1>Mulai Belajar PHP</H1>
<?php

  function testScope() {
    static $x = 10;
    echo "Nilai x: $x<br>";
    $x++;
  }

  testScope();
  testScope();
  testScope();
  testScope();

?>    
</body>
</html>

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
  $x = "Hello";
  $y = "PHP";

  function testScope() {
    global $x;
    echo "dalam function testScope x: ".$x;
  }


  testScope();

  echo "<P> after testScope()</P>";
  echo "Hello PHP!!!<br>";
  echo $x ." ".$y . "!!!<br>";
  print "Hello PHP!!!<br>";

?>    
</body>
</html>

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
  $x = 5;
  $y = 10;

  function testScope() {
    $GLOBALS['y'] = $GLOBALS['x']+$GLOBALS['y'];    
  }

  testScope();

  echo "Nilai y: $y";
?>    
</body>
</html>

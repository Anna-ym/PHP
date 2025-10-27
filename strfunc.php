<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a="anna";
    $b="ANNA";
    $c="Hello World";
    $d=" hi hello    ";
    echo strtoupper($a)."<br>";
    echo strtolower($b)."<br>";
    echo str_replace("World","Nandhana",$c)."<br>";
    echo strrev($c)."<br>";
    echo trim($d)."<br>";
    echo strlen($c,0,5);
    ?>
</body>
</html>
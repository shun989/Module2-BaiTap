<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input{
        height: 25px;
    }
</style>
<form action="" method="post">

        <input type="text" name="width" value="" placeholder="Chiều rộng:">
        <input type="text" name="height" value="" placeholder="Chiều dài:">
        <button type="submit" name="calculate">Calculate</button>

</form>
<body>
<?php
    include "Rectangle.php";
    if(isset($_POST["width"])) {$_POST["width"];}
    if(isset($_POST["height"])) {$_POST["height"];}
        $width = ($_POST["width"]);
        $height = ($_POST["height"]);

        $rectangle = new Rectangle($width, $height);
    echo "</br>";
    echo ("Your Rectangle" . $rectangle->display()) . "</br>";
    echo "Chu vi : " . $rectangle->getPerimeter() . "</br>";
    echo "Diện tích : " . $rectangle->getArea() ;

?>
</body>
</html>

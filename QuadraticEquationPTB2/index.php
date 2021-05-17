<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    input{
        width: 200px;
        height: 25px;
    }
</style>
<body>
<h2>Giải phương trình bậc 2.</h2>
<form action="" method="post">
    <input type="text" name="a" value="" placeholder="Nhap he so bac mot a :">
    <input type="text" name="b" value="" placeholder="Nhap he so bac hai b :">
    <input type="text" name="c" value="" placeholder="Nhap so tu do c :">
    <button type="submit" name="Solve">Solve</button>
</form>

<?php
        include "QuadraticEquation.php";
        if (isset($_POST["a"])) {$_POST["a"];}
        if (isset($_POST["b"])) {$_POST["b"];}
        if (isset($_POST["c"])) {$_POST["c"];}

        $a = ($_POST["a"]);
        $b = ($_POST["b"]);
        $c = ($_POST["c"]);

    $PTB2 = new QuadraticEquation($a, $b, $c);
    echo "</br>";
      echo $PTB2->display() . "</br>";
    $delta = $PTB2->getDiscriminant();
        if ($delta > 0){
            echo "Phương trình có 2 nghiệm : x1 = " . $PTB2->getRoot1() . " ; x2 = " . $PTB2->getRoot2();
        }elseif($delta == 0){
            echo "Phương trình có nghiệm kép : x1 = x2 = " . -$b / ($a * 2);
        }else{
            echo "Phương trình vô nghiệm.";
        }

?>

</body>
</html>

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
    .tinhtoan {
        width: 400px;
        height: 200px;
        border: chartreuse 3px solid;
        padding: 10px;
        margin: 0;
    }

    .tinhtoan input {
        width: 150px;
        height: 25px;
        margin: 10px;
    }

    button {
        width: 100px;
        height: 50px;
        margin-left: 150px;

    }

    form {
        width: 450px;
    }

    .tinhtoan select {
        height: 30px;
        margin-bottom: 15px;
    }
</style>
<body>
<h1 style="color: blue">Simple Calculator</h1>
<form action="" method="post">
    <fieldset>
        <legend>Calculator</legend>
        <div class="tinhtoan">
            <span>First operand:<input type="text" name="number1" value="0" placeholder="Nhập số:"></span></br>
            <span>Second operand:<input type="text" name="number2" value="0" placeholder="Nhập số:"></span></br>
            <span>Operator:<select>
                        <option>----Select----</option>
                        <option name="phepcong" value="">Addition(+)</option>
                        <option name="pheptru" value="">Subtraction(-)</option>
                        <option name="phepnhan" value="">Multiplication(x)</option>
                        <option name="phepchia" value="">Division(/)</option>
                              </select>
                </span></br>
            <button type="submit" name="calculate">Calculate</button>
        </div>
    </fieldset>
</form>

<?php
include "Calculate.php";
if (isset($_POST["number1"])) {
    $_POST["number1"];
}
if (isset($_POST["number2"])) {
    $_POST["number2"];
}

$number1 = ($_POST["number1"]);
$number2 = ($_POST["number2"]);
$phepcong = ($_POST["phepcong"]);
$peptru = ($_POST["pheptru"]);
$phepnhan = ($_POST["phepnhan"]);
$phepchia = ($_POST["phepchia"]);


$calculate = new Calculate($number1, $number2);

$phepcong = $calculate->getAddition();
echo $number1 . " + " . $number2 . " = " . $phepcong . "</br>";

$pheptru = $calculate->getSubtraction();
echo $number1 . " - " . $number2 . " = " . $pheptru . "</br>";

$phepnhan = $calculate->getMultiplication();
echo $number1 . " x " . $number2 . " = " . $phepnhan . "</br>";

$phepchia = $calculate->getDivision();
echo $number1 . " / " . $number2 . " = " . $phepchia;
//function Addition($number1, $number2, $phepcong)
//{
//    echo $number1 . " + " . $number2 . " = " . $phepcong;
//}
//
//function Subtraction($number1, $number2, $pheptru)
//{
//    echo $number1 . " + " . $number2 . " = " . $pheptru;
//}
//
//function Multiplication($number1, $number2, $phepnhan)
//{
//    echo $number1 . " + " . $number2 . " = " . $phepnhan;
//}
//
//function Division($number1, $number2, $phepchia)
//{
//    echo $number1 . " + " . $number2 . " = " . $phepchia;
//}
//
//Addition();
//Subtraction();
//Multiplication();
//Division();
//        if ($pheptru = $calculate->getSubtraction()){
//            echo $number1 . " - " . $number2 . " = " . $pheptru;
//            };
//        if ($phepnhan = $calculate->getMultiplication()){
//            echo $number1 . " x " . $number2 . " = " . $phepnhan;
//            };
//        if ($phepchia = $calculate->getDivision()){
//            echo $number1 . " / " . $number2 . " = " . $phepchia;
//            };
//    }


//    switch ($calculate) {
//        case "phepcong":
//            echo $number1 . " + " . $number2 . " = " . $calculate->getAddition();
//        break;
//
//        case "pheptru":
//            echo $number1 . " - " . $number2 . " = " . $calculate->getSubtraction();
//        break;
//
//        case "phepnhan":
//            echo $number1 . " x " . $number2 . " = " . $calculate->getMultiplication();
//        break;
//
//
//        case "phepchia":
//
//            if($number2 === 0 ) {
//                $exception = new Exception('Lỗi b = 0');
//                throw $exception;
//            }else{
//                echo $number1 . " / " . $number2 . " = " . $calculate->getDivision();
//
//            }
//
//
//            try {
//                return $number2;
//            }
//            catch (Exception $e) {
//                echo $e->getMessage();
//            }
//            break;
//    }


?>
</body>
</html>

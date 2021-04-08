<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 style="color: crimson">Read numbers into words </h1>
<form action="" method="post">
    <input type="number" name="number" placeholder="Nhập số cần đọc:" value="">
    <button type="submit" name="submit" value="Read">Read</button>
</form>

<?php
if(isset($_POST["number"])) {$_POST["number"];}
    function readOneNumber($number){
        $oneDigits = array("zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine");
       return $oneDigits[$number];
    }
echo readOneNumber($_POST["number"]) . "</br>";
//if(isset($_POST["number"])) {$_POST["number"];}
//echo readOneNumber($_POST["number"]);

    function readTwoNumber($number){
        $teens = array(10 => "ten",11=>"eleven",12=>"twelve",13=>"thirteen",14=>"fourteen",15=>"fifteen",16=>"sixteen",17=>"seventeen",18=>"eighteen",19=>"nineteen");
        $tys = array(2=>"twenty",3=>"thirty",4=>"fourty",5=>"fifty",6=>"sixty",7=>"seventy",8=>"eighty",9=>"ninety");
        if($number > 10 && $number < 20){
            return $teens[$number];
        }elseif ($number[1] === 0){
            return $tys[$number[0]];
        }else{
            return $tys[$number[0]] . readOneNumber($number[1]);
        }
    }
echo readTwoNumber($_POST["number"]) . "</br>";
//if(isset($_POST["number"])) {$_POST["number"];}
//echo readTwoNumber($_POST["number"]);


function readThreeNumber($number){
        if($number % 100 === 0 && $number != 0){
            return readOneNumber($number[0]). 'hundred';
        }elseif($number[1] === 0){
            return readOneNumber($number[0]). 'hundred ' . $number[2];
        }else{
            return readOneNumber($number[0]). 'hundred ' . readTwoNumber($number[1]) . readOneNumber($number[2]);
        }
    }
echo readThreeNumber($_POST["number"]);

//echo readThreeNumber($_POST["number"]);
//if(isset($_POST["number"])) {$_POST["number"];}
//echo readTwoNumber($_POST["number"]);
//echo readOneNumber($_POST["number"]);


?>
</body>
</html>

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
    .Check{
        height:200px; width:400px;
        margin:0;
        padding:10px;
        border:3px blue solid;
    }
    .Check input{
        padding: 5px; margin: 5px;
    }
</style>
<body>
<form action="" method="post">
    <div class="Check">
                <span>Inventment Amount<input type="number" name="money" value="" placeholder="0" </span></br>
                <span>Yearly Interest Rate<input type="text" name="rate" value="" placeholder="0" </span></br>
                <span>Number of Years <input type="number" name="year" value="" placeholder="0" </span></br>
                <button type="submit" name="calculate">Calculate</button>
<!--        <span>Inventment Amount<input type="number" name="money" id="money" value="" </span></br>-->
<!--        <span>Yearly Interest Rate<input type="number" name="rate" id="rate" value="" </span></br>-->
<!--        <span>Number of Years <input type="number" name="year" id="year" value="" </span></br>-->
<!--        <button type="button" onclick="Calculate()">Calculate</button>-->
    </div></br>
<!--    <p id="ketqua"> </p>-->
</form>
<?php
    if(isset($_POST["money"])) {$_POST["money"];}
    if(isset($_POST["rate"])) {$_POST["rate"];}
    if(isset($_POST["year"])) {$_POST["year"];}
    $calculate = ($_POST["money"]) * (($_POST["rate"])/100) * ($_POST["year"]);

        if(($_POST["money"]) > 0){
            echo "Tiền lãi " . ($_POST["year"]) . " năm là : " . $calculate . " VNĐ.";
        }else{
            echo "Số tiền phải lớn hơn 0!";
        }


?>
<!--<script>-->
<!---->
<!--    function Calculate(){-->
<!--        let m = document.getElementById('money').value;-->
<!--        let r = document.getElementById('rate').value;-->
<!--        let y = document.getElementById('year').value;-->
<!--        let laisuat = (m * r * y);-->
<!--        if(m > 0){-->
<!---->
<!--            document.getElementById('ketqua').innerHTML = 'Tiền lãi ' + y + ' năm là: '+ laisuat;-->
<!--            console.log(laisuat);-->
<!--        }else{-->
<!--            alert("Số tiền phải lớn hơn 0.")-->
<!--        }-->
<!--    }-->
<!---->
<!--</script>-->

</body>
</html>
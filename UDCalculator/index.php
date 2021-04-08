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
    .tinhtoan{
        width: 400px;
        height: 200px;
        border: chartreuse 3px solid;
        padding: 10px;
        margin: 0;
    }
    .tinhtoan input{
        width: 150px;
        height: 25px;
    }
</style>
<body>
<form action="" method="post">
    <div class="tinhtoan">
    <span>First operand:<input type="text" name="number1" value="" placeholder="Nhập số:"></span></br>
        <span>Operator:<select>
                            <option name="phepcong" value="">Addition(+)</option>
                            <option name="pheptru" value="">Subtraction(-)</option>
                            <option name="phepnhan" value="">Multiplication(x)</option>
                            <option name="phepchia" value="">Division(/)</option>
                      </select>
        </span></br>
        <span>Second operand:<input type="text" name="number2" value="" placeholder="Nhập số:"></span>
    </div>
</form>
</body>
</html>

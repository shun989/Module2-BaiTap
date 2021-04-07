<?php
if(isset($_POST["product"])) {$_POST["product"];}
if(isset($_POST["price"])) {$_POST["price"];}
if(isset($_POST["discount"])) {$_POST["discount"];}
$calculate = ($_POST["price"]) * ($_POST["discount"]/100) * 0.1;
echo "Discount Amount: Lượng chiết khấu " . $calculate .  " VNĐ.". "</br>";
echo "Discount Price: Giá sau khi đã được chiết khấu " . (($_POST["price"]) - $calculate) ." VNĐ.";






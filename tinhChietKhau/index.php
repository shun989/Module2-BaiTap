<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    .compute{
        margin: 0;
        padding: 10px;
        border: crimson 3px solid;
    }
    .compute input{
        height: 20px;
    }
</style>
<body>
<form action="display_discount.php" method="post">
    <feldset>Tinh chiet khau san pham.</feldset></br>
    <div class="compute">
        <span>Product Description:<input type="text" name="product" value="" placeholder="Mô tả của sản phẩm"></span>
        <span>List Price:<input type="text" name="price" value="" placeholder="Giá niêm yết của sản phẩm"></span>
        <span>Discount Percent:<input type="text" name="discount" value="" placeholder="Tỷ lệ chiết khấu (phần trăm)"></span>
        <button type="submit" name="calculate">Calculate Discount</button>
    </div>
</form>

</body>
</html>

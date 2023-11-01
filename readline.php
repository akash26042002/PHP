<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="" class="form-label">enter your first number</label>
    <input type="text" class="form-control" name="first">
    <label for="" class="form-label">enter your second number</label>
    <input type="text" class="form-control" name="second">
    <button class="btn btn-success" name="add">add</button>
    </form>
</body>
</html>

<?php
if(isset($_POST["add"]))
{
    $a=$_POST["first"];
    $b=$_POST["second"];
    $sum=$a+$b;
    echo "the sum is".$sum;
}
?>
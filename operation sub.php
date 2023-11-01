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
    <button class="btn btn-success" name="multiplication">multiplication</button>
    <button class="btn btn-success" name="div">div</button>
    <button class="btn btn-success" name="remainder">remainder</button>
    <button class="btn btn-success" name="sub">sub</button>
    </form>
</body>
</html>
<?php
 $a=$_POST["first"];
 $b=$_POST["second"];
if(isset($_POST["add"]))
{
    $sum=$a+$b;
echo "the sum is".$sum;
}
else if(isset($_POST["multiplication"]))
{
    $mul=$a*$b;
echo "the multiplication is ".$mul;
}
else if(isset($_POST["div"]))
{
    $d=$a/$b;
    echo "the div is". $d;
}
else if(isset($_POST["remainder"]))
{
$h=$a%$b; 
    echo "the remainder is". $h;
}
else if(isset($_POST["sub"]))
{
    $g=$a-$b;
    echo "the sub is".$g;
}
?>





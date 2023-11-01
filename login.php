<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action=""method="post">
   <label for=""class="form-label">username:</label>
   <input type="text"class="form-control"name="username">
   <label for=""class="form-label">password:</label>
   <input type="password"class="form-control"name="password">
   <button class=" btn btn-success "name="bt1">bt1</button>
</form>
</body>
</html>



<?php
$con=mysqli_connect("localhost","root","", "student");
if(!$con)
{
  die("connection failed".mysqli_connect_error());
}
else
{
  echo "connection success";
}
if(isset($_POST["bt1"]))
{
  $a=$_POST["username"];
  $b=$_POST["password"];
$in="insert into login(loginname,password) values('$a','$b')";
$ins=mysqli_query($con,$in);
$sel="select * from login";
$s=mysqli_query($con,$sel);
echo "<table border='1'>";
echo "<tr>";
echo "<th>USERNAME</th><th>PASSWORD</th></tr>";
while($row=mysqli_fetch_assoc($s))
{
  echo "<tr> <td>$row[loginname]</td>";
  echo "<td>$row[password]</td></tr>";
}
}
?>
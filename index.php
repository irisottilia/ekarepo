<!DOCTYPE html>
<html lang="fi">
<head>
<title>Suurin luku</title>
<style>
body 
{
font-family: Arial;
margin: 60px 0 0 120px;
color: navy;
}
h1 {
color: red;
}
p
{
font-family: Courier;
margin: 240px 0 0 0;
}
</style>
</head>
<body>
<?php include 'header.php';?>
<?php
$luku1 = 1;
$luku2 = 66;
$luku3 = 22;
echo "Luvuista $luku1, $luku2, $luku3, suurin on: ";
if ($luku1 >= $luku2 && $luku1 >= $luku3) {echo $luku1;}
else if ($luku2 >= $luku1 && $luku2 >= $luku3){echo $luku2;}
else {echo $luku3;}
?>  
<?php include 'footer.php';?>
</body>
</html>
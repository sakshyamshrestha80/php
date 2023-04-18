<?php
$n=$r=$o="";
if(isset($_GET["btnCheck"]))
{
$n=$x=$_GET["txtNumber"];
$r;
$out;
$rev=0;
while($x!=0)
{
$r=$x%10;
$rev=$rev*10+$r;
$x=floor($x/10);

}
$out="?php echo $rev; ?>";
$r=$out;
if($rev==$n)
{
    $o="palindrom";
}
else{
    $o="not palindrom";
}
}

?>

<html>
<head>
<title>Sum of digits</title>
</head>
<body>
<form action="palindrom.php" method="get">
Enter a Number<input type="text" name="txtNumber" value="<?php echo $n; ?>"><br>

<input type="submit" value="Check" name="btnCheck">
reverse number:<input type="text" name="txtSum1" value="<?php echo $r; ?>"><br>
palindrom or not:<input type="text" name="txtSum2" value="<?php echo $o; ?>"><br>
</form>
</body>
</html>
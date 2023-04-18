<?php
$n=$s="";
if(isset($_GET["btnSumDigit"]))
{
$n=$x=$_GET["txtNumber"];
$sum=0;
$r;
while($x>0)
{
$r=$x%10;
$sum=$sum+$r;
$x=floor($x/10);
}
$s=$sum;
}

?>

<html>
<head>
<title>Sum of digits</title>
</head>
<body>
<form action="sum_of_digits.php" method="get">
Enter a Number<input type="text" name="txtNumber" value="<?php echo $n; ?>"><br>

<input type="submit" value="Sum Digit" name="btnSumDigit">
Sum of Digit <input type="text" name="txtSum" value="<?php echo $s; ?>"><br>
</form>
</body>
</html>
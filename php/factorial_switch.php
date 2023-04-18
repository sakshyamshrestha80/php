<?php
$n="";
$fac="";
if(isset($_GET["btnFactorial"]))
{
$n=$_GET["txtNumber"];
$i;
$f=1;
for($i=1;$i<=$n;$i++)
{
$f=$f*$i;
}

$fac=$f;
}




?>



<html>
<head>
<title>Factorial of a given number</title>
</head>
<body>
<div class="container" style=" padding: 50px; margin:auto;
            width: 300px;
            background-color: rgba(219, 216, 217, 0.4);
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.5), 0 17px 50px 0 rgba(0,0,0,0.19);">
<form action="factorial_switch.php" method="get">
    <h1>Factorial of given number</h1>
Enter a Number<input type="text" name="txtNumber" value="<?php echo $n; ?>"><br><br>



<input type="submit" value="Factorial" name="btnFactorial"><br><br>
Factorial <input type="text" name="txtFactorial" value="<?php echo $fac; ?>"><br><br>
</form>
</div>
</body>
</html>
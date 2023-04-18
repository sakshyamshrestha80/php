<?php
$n1="";
$n2="";
$r="";
if(isset($_GET["btnCheck"]))
{
$n1=$_GET["txtNumber1"];
$n2=$_GET["txtNumber2"];

$r=pow($n1,$n2);

}

?>



<html>
<head>
<title>Square of number</title>
</head>
<body>
<div class="container" style=" padding: 50px; margin:auto;
            width: 300px;
            background-color: rgba(219, 216, 217, 0.4);
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.5), 0 17px 50px 0 rgba(0,0,0,0.19);">
<form action="Square.php" method="get">
    <h1>Square of number</h1>
Enter a Number<input type="text" name="txtNumber1" value="<?php echo $n1; ?>"><br><br>
Enter square value<input type="text" name="txtNumber2" value="<?php echo $n2; ?>"><br><br>


<input type="submit" value="Check" name="btnCheck"><br><br>
Result:<input type="text" name="txtCheck" value="<?php echo $r; ?>"><br>
</form>
</div>
</body>
</html>
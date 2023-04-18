

<?php
$n="";
$o="";
if(isset($_GET["btnClick"]))
{
$n=$_GET["txtNumber"];
 $i;
 $n1=0;
 $n2=1;


 echo $n1;
echo "<br>";
 echo $n2;
 echo "<br>";
for($i=2;$i<$n;++$i)
{
    $n3=$n1+$n2;
    echo $n3;
    echo "<br>";
    $n1=$n2;
    $n2=$n3;
}

}

?>



<html>
<head>
<title>fibonaci number</title>
</head>
<body>
<form action="fibonaci.php" method="get">
Enter the number how many terms you want to display<input type="text" name="txtNumber" value="<?php echo $n; ?>"><br>


<input type="submit" value="Click" name="btnClick"><br><br>
<!-- Output :<input type="text" name="txtClick" value="<?php echo $o; ?>"><br> -->
</form>
</body>
</html>
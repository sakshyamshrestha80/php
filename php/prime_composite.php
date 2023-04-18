<?php
$n="";
$r="";
if(isset($_GET["btnCheck"]))
{
$n=$_GET["txtNumber"];
$i;
$c=0;
for($i=2;$i<=$n/2;$i++)
{
    if($n%$i==0)
        $c++;
}
        if($c==0)
        {
            $r= "prime";
            
        }

    else{
        $r="composite";
    }
}

?>



<html>
<head>
<title>prime or composite</title>
</head>
<body>
<form action="prime_composite.php" method="get">
Enter a Number<input type="text" name="txtNumber" value="<?php echo $n; ?>"><br>


<input type="submit" value="Check" name="btnCheck"><br><br>
Prime or Composite? :<input type="text" name="txtCheck" value="<?php echo $r; ?>"><br>
</form>
</body>
</html>
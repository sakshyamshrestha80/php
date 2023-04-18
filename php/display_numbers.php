<?php
$n="";
$o="";
if(isset($_GET["btnClick"]))
{
$n=$_GET["txtNumber"];
 $i;
// while($i<=$n)
for($i=1;$i<=$n;$i++)
{
    // $i++;
    echo  $i;
    echo "<br>";
}

}

?>



<html>
<head>
<title>Display Numbers</title>
</head>
<body>
<div class="container" style=" padding: 50px; margin:auto;
            width: 300px;
            background-color: rgba(219, 216, 217, 0.4);
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.5), 0 17px 50px 0 rgba(0,0,0,0.19);">
<form action="display_numbers.php" method="get">
    <h1>Display the numbers</h1>
Enter the number how many terms you want to display<input type="text" name="txtNumber" value="<?php echo $n; ?>"><br>


<input type="submit" value="Click" name="btnClick"><br><br>
<!-- Output :<input type="text" name="txtClick" value="<?php echo $o; ?>"><br> -->
</form>
</div>
</body>
</html>
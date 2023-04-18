<?php
$v1="";
$v2="";
$v3="";
$r="";
if(isset($_GET["btnCheck"]))
{
    $v1=$_GET["txtv1"];
    $v2=$_GET["txtv2"];
    $v3=$_GET["txtv3"];
    $r=($v1*($v2/100)*$v3)/100;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple intrest</title>
</head>
<body>
<form action="simpleintrest.php" method="get">
        Enter amount <input type="text" id="txtv1" value="<?php echo $v1; ?>"><br><br>
        Enter rate<input type="text" id="txtv2" value="<?php echo $v2; ?>"><br><br>
        Enter time<input type="text" id="txtv3" value="<?php echo $v3; ?>"><br><br>

        <input type="submit" id="btnCheck" value="Check"><br><br>
        Simple Interest<input type="text" id="txtresult" value="<?php echo $r; ?>"><br>

    </form>
</body>
</html>
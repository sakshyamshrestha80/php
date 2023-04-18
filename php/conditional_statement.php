<!-- 
    if one condition
    if else -- the is two condition
    if else if --there is more than two condition

 -->

<?php
$v1="";
$v2="";
$s="";
if(isset($_GET["btnSmallest"]))
{
    $v1=$_GET["txtv1"];
    $v2=$_GET["txtv2"];

    if($v1<$v2)
    {
        $s=$v1;
    }
    else
    {
        $s=$v2;
    }

    // $s=$v1<$v2?$v1:$v2

}
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>smallest number</title>
 </head>
 <body>
 <div class="container" style=" padding: 50px; margin:auto;
            width: 300px;
            background-color: rgba(219, 216, 217, 0.4);
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.5), 0 17px 50px 0 rgba(0,0,0,0.19);">
     <form action="conditional_statement.php" method="get">
         <h1>Smallest number</h1>
     enter the first value <input type="text" name="txtv1" value="<?php echo $v1; ?>"><br><br>
     enter the second value <input type="text" name="txtv2" value="<?php echo $v2; ?>"><br><br>
     
     <input type="submit" value="smallest" name="btnSmallest"><br><br>
     
     smallest <input type="text" name="txtsmallest" value="<?php echo $s; ?>"><br>
     </form>
</div>
 </body>
 </html>
<?php
$v1="";
$v2="";
$v3="";
$l="";
if(isset($_GET["btnLargest"]))
{
    $v1=$_GET["txtv1"];
    $v2=$_GET["txtv2"];
    $v3=$_GET["txtv3"];

    if($v1>$v2 && $v1>$v3)
    {

        $l=$v1;
    }
    else if( $v2>$v1 && $v2>$v3)
    {
        $l=$v2;
    }
    else{
        $l=$v3;
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
            width: 400px;
            background-color: rgba(219, 216, 217, 0.4);
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.5), 0 17px 50px 0 rgba(0,0,0,0.19);">
     <form action="Display_largest_number.php" method=""get>
    <h1>Display the largest number</h1>
     enter the first value <input type="text" name="txtv1" value="<?php echo $v1; ?>"><br><br>
     enter the second value <input type="text" name="txtv2" value="<?php echo $v2; ?>"><br><br>
     enter the third value <input type="text" name="txtv3" value="<?php echo $v3; ?>"><br><br>
     
     <input type="submit" value="Largest" name="btnLargest"><br>
     
     Largest number <input type="text" name="txtlargest" value="<?php echo $l; ?>"><br>
     </form>
    </div>
 </body>
 </html>
<?php
$a="";
$r="";

if(isset($_GET["btnCalculate"]) )
{
    $r=$_GET["txtradius"];
    $a=3.14*$r*$r;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area</title>
   
</head>
<body>
  
        <div class="container" style=" padding: 50px; margin:auto;
            width: 300px;
            background-color: rgba(219, 216, 217, 0.4);
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.5), 0 17px 50px 0 rgba(0,0,0,0.19);">
                <form action="area_of_circle.php" method="get">
                    <h1>Area of circle</h1>
       
                <div class="radius"> 
                    Enter radius: <input type="text" name="txtradius" value="<?php echo $r; ?>"><br><br>
                </div>
                <input type="submit" name="btnCalculate" value="Calculate"><br><br>

                <div class="area">  
                Area: <input type="text" name="txtArea" value="<?php echo $a; ?>">
                </div>
                </form>
        </div>
  

    
    
</body>
</html>
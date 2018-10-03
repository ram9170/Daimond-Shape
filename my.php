<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style  type="text/css">
       body{ 
            text-align:center;
        }
    
    </style>
</head>
<body>
<?php  
    for($i=0; $i<=7; $i++)
    {
        for($j=0; $j<=$i; $j++)
        {
            echo "  *  ";
        }
        echo "<br>";
    }
    for($i=0; $i<=7; $i++)
    {
        for($j=7-$i; $j>=1; $j--)
        {
            echo "  *  ";
        }
        echo "<br>";
    }
?>
</body>
</html>
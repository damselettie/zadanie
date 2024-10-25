<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exec</title>
</head>
<body>
    <?php 
    $wyjscie = [];
    $return = 0;
    
    foreach($wyjscie as $item){
        if(strpos($item,'10.40.50.2')!==false){
            echo "dysk zmapowany";
        }
    }
 
    ?>
</body>
</html>
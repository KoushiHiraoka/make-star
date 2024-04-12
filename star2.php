<!DOCTYPE html>
<html>
    <head>
        <title> make star2</title>
    </head>
    <body>
        <?php
        
        $loop=0;
        $star=5;

        while($star-$loop>0){
            echo '⭐︎';
            $loop++;
            
            if($star-$loop==0){
                echo '<br>';
                $star--;
                $loop=0;
            }
        }
        
        
        ?>
    </body>
</html>
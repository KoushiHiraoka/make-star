<!DOCTYPE html>
<html>
    <head>
        <title> make star1 </title>
    </head>
    <body>
        <?php 
        
        for($loop=0; $loop<=4; $loop++){
            for($star=0; $star<=$loop; $star++){
                echo '⭐︎';
            }
            echo '<br/>';
        }

        ?>
    </body>
</html>
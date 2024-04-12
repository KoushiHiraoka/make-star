<!DOCTYPE html>
<html>
    <head>
        <title>make star4</title>
    </head>

    <body>
        <?php 

        $total = 5;

        for($loop = 1;$loop<=$total;$loop++){
            printStar($total,$loop);
        }

        function getStarNumber($base){
            $distance = abs($base - 3);
            if ($distance==2){
                return 0;
            }else if($distance==1){
                return 2;
            }else{
                return 4;
            }
        }

        function printStar($total,$loop){
            $i = 0;
            while($i<$total){
                
                if($i>=getStarNumber($loop)){
                    echo '⭐︎';
                }else{
                    echo '　';
                }
                $i++;
            }

                echo '<br/>';
        }
        ?>

    </body>


</html>
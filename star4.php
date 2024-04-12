<!DOCTYPE html>
<html>
    <head>
        <title>make star3</title>
    </head>

    <body>
        <?php 
        $count=1;

        for($mainloop=0;$mainloop<=4;$mainloop++){
            if($count%4==1){

                for($loop1=0;$loop1<=3;$loop1++){
                    echo '　';
                }
                for($loop2=0;$loop2<=4-$loop1;$loop2++){
                    echo '⭐︎';
                }
                echo '<br/>';
                $count++;
    
            }else if($count%2==0){
    
                for($loop1=0;$loop1<=1;$loop1++){
                    echo '　';
                }
                for($loop2=0;$loop2<=4-$loop1;$loop2++){
                    echo '⭐︎';
                }
                echo '<br/>';
                $count++;
    
            }else{
    
                for($loop2=0;$loop2<=4;$loop2++){
                    echo '⭐︎';
                }
                echo '<br/>';
                $count++;
    
            }
        }

        ?>
    </body>


</html>
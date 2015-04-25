<html>
    <body>
        
        <?php
            $num = mt_rand(1,4);
            echo "<br>",$num,"<br>";
            switch($num){
                case 1: $image_file = "/tutorials/php/images/IMAG0224.jpg";
                break;
                case 2: $image_file = "/tutorials/php/images/IMAG1056.jpg";
                break;
                case 3: $image_file = "/tutorials/php/images/IMAG0936.jpg";
                break;  
                case 4: $image_file = "/tutorials/php/images/IMAG0244.jpg";
                break;
            }
           
            echo "Random Image : ", "<img src=\"$image_file\" width=\"200\" height=\"200\"/>";
            
            
            
        ?>
        
    </body>
</html>


<html>
<body>
<?php

    $array = array(1,2,3);

    function sumAllArray($array) {
        
        $sum = 0;
        
        for($i = 0; $i < count($array); $i++) {

            $sum += $array[$i];
           
        }

        $sum -=10;
      
        
        if ($sum < 0) {
            echo "0";
            return 0;
           
        } else {
            echo $sum;
            return $sum;
            
        }

    }

sumAllArray($array);



?>
</body>
</html>
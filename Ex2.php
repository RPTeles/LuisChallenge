<html>
<body>

<?php
    
    $valores = array(1.23 , 3.21 , 4.7 , 8.9);
    
    function sumInt($array) {

        $total = 0;

        foreach($array as $valor) {
            
            $total +=floor($valor);

        }

        echo $total;
    }


    sumInt($valores);



?>

</body>
</html>
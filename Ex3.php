<html>
<body>
<?php

$value = 3;
$array = array(1.23, 3.21, 4.7);


echo count($array);
echo "<br>";

function sumArray($array,$value) {
    
    print_r ($array);
    echo "<br>";


    for($index = 0;$index < count($array);$index++) {

        $array[$index] += $value;
        
    }

    print_r ($array);
    echo "<br>";
    echo count($array);

}

sumArray($array,$value);




?>
</body>    
</html>
<html>
    <body>
        <?php 
        
        function checkString($str1, $str2) {
            
            $strt = strtolower($str1);
            $strt = preg_replace('/\p{P}/', '', $strt);
            $strArray = explode(" ", $strt);
            $strArrayLenght = count($strArray);

            $str2c = preg_replace('/\p{P}/', '', $str2);
            $str2c = strtolower($str2c);
            $str2cArray = explode(" ", $str2c);
            $str2cArrayLenght = count($str2cArray);

            $result = "no";
            
            
           
                        
            for ($i = 0; $i < $str2cArrayLenght; $i++) {
                    
                for ($i2 = 0; $i2 < $strArrayLenght; $i2++) {
                   
                    if($strArray[$i2] == $str2cArray[$i]) {

                        $result = "yes";
                
                    }

                }
                
            }
        


           
            
            


            echo $result."<br>";

            print_r ($strArray);
            echo "<br>";
            print_r ($str2cArray);

        }


        $string1 = "This, is a string de testes!";
        $string2 = "s this";

        checkString($string1, $string2);
        
        
        
        ?>

    </body>

</html>

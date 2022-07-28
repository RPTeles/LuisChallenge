<html>
    <body>
        <?php 
        
        function checkString($str1, $str2) {
            
            $strt = strtolower($str1);
            $strt = preg_replace('/\p{P}/', '', $strt);
            $strt = $strt . " ";
                        
            $check1 = $str2 . " ";
            //$check2 = " " . $str2;
            $check3 = " " . $str2 . " ";


          

            if (str_contains($strt, $str2)) {

                $result = "no";

               
                if (strpos($strt, $str2) == 0 && str_contains($strt, $check1)) {  //primeira palavra

                    $result = "yes";    

                } elseif (strpos($strt, $str2) >> 0 && str_contains($strt, $check3)) { //palavra no meio da frase

                    $result = "yes"; 

                } 

        

            } else {

                $result = "no";

            }  
            
            echo $result;

        }

        $string1 = "String de testes!";
        $string2 = "testes";

        checkString($string1, $string2);
        
        
        
        ?>

    </body>

</html>

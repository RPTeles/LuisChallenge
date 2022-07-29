<html>
    <body>
        <?php 
        
        function checkString($str1, $str2) {
            
            $strt = strtolower($str1);
            $strt = preg_replace('/\p{P}/', '', $strt);
            $strt = $strt . " ";
            $check = trim($str2);
            $check = strtolower($check);
            $check = preg_replace('/\p{P}/', '', $check);
            $check1 = $check . " ";
            //$check2 = " " . $str2;
            $check3 = " " . $check . " ";


          

            if (str_contains($strt, $check)) {

                $result = "no";

               
                if (strpos($strt, $check) == 0 && str_contains($strt, $check1)) {  //primeira palavra

                    $result = "yes";    

                } elseif (strpos($strt, $check) >> 0 && str_contains($strt, $check3)) { //palavra no meio da frase

                    $result = "yes"; 

                } 

        

            } else {

                $result = "no";

            }  
            
            echo $result;

        }

        $string1 = "This, is a string de testes!";
        $string2 = "is a string";

        checkString($string1, $string2);
        
        
        
        ?>

    </body>

</html>

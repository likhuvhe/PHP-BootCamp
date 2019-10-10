#!/usr/bin/php
<?php
    if ($argc == 2)
    {    
        function ft_split($string)
        {
           $arr = (explode(" ", $string));
           $i = 0;
           $new_arr = array();
           while ($i < count($arr)) {
               if ($arr[$i] != "")
                   $new_arr[] = $arr[$i];
               $i++;
           }
           return ($new_arr);
        }
        $epur = ft_split($argv[1]);
        $i = 0;
        while($i < count($epur))
        {
            echo "$epur[$i]";
            $i++;
            if ($i != count($epur))
                echo " ";
        }
        echo "\n";}

?>
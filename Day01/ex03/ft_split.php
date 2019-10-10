#!/usr/bin/php
<?php
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
    sort ($new_arr);
    return ($new_arr);
}
?>
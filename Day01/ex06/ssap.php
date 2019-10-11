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
    return ($new_arr);
}
$i = 1;
$results = array();
while ($argv[$i])
{
    $results =  array_merge($results, ft_split($argv[$i]));
    $i++;    
}
sort($results);
foreach ($results as $elem)
    echo "$elem\n";

?>
#!/usr/bin/php
<?php
function comp ($a, $b)
{
    $c = strtolower($a);
    $d = strtolower($b);
    return strcmp($c, $d);
}
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
$i = 0;
$numeric = array();
$och = array();
$alph = array();
while ($results[$i])
{
    if (is_numeric($results[$i]))
         $numeric[] = $results[$i];
    elseif (ctype_alpha($results[$i]))
        $alph[] = $results[$i];
    else
         $och[] = $results[$i];
    $i++;
}
sort ($och);
usort ($alph, "comp");
usort ($numeric, "comp");
$i = 0;
foreach ($alph as $ele)
        echo "$ele\n";
$i = 0;
foreach ($numeric as $elem)
        echo "$elem\n";
$i = 0;
foreach ($och as $elem)
    echo "$elem\n";

?>
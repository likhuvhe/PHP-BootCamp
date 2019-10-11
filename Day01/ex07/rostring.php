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
    $ros = ft_split($argv[1]);
    array_push($ros, $ros[0]);
    unset($ros[0]);
    foreach ($ros as $elem)
    {
        echo "$elem";
        if (strcmp(end($ros), $elem) != 0)
        echo " ";
    }
    if ($argc > 1)
        echo "\n";
?>
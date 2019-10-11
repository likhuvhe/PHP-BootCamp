#!/usr/bin/php
<?php
    if($argc != 4)
    {        
        echo "Incorrect Parameters\n";
        exit ();
    }
    $left = trim($argv[1]);
    $sign = trim($argv[2]);
    $right = trim($argv[3]);
    if ($sign == '+')
        echo ($left) + ($right)."\n";
    if ($sign == '-')
        echo ($left) - ($right)."\n";
    if ($sign == '*')
        echo ($left) * ($right)."\n";
    if ($sign == '/')
        echo ($left) / ($right)."\n";
    if ($sign == '%')
        echo ($left) % ($right)."\n";
?>
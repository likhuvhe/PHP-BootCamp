#!/usr/bin/php
<?php


    while(true)
    {
        echo "Enter a number:";
        fscanf(STDIN, "%s", $number); 
        if (feof(STDIN))
        {
            echo "^D\n";
            exit();
        }
        if (!(is_numeric($number)))
            echo "'$number'is not a number\n";
        elseif (($number % 2) == 0)
            echo "The number $number is even\n";
        else
            echo "The number $number is odd\n";      
    }
?>
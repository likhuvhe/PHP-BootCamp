#!/usr/bin/php
<?php
    if ($argc > 1)
    {
    date_default_timezone_set("Europe/Paris");
    $str = strtolower($argv[1]);
   
    if (preg_match("/lundi/", $str))
        $str = preg_replace("/lundi/", "monday", $str);
    if (preg_match("/mardi/", $str))
        $str = preg_replace("/mardi/", "tuesday", $str);
    if (preg_match("/mercredi/", $str))
        $str = preg_replace("/mercredi/", "wednesday", $str);
    if (preg_match("/jeudi/", $str))
        $str = preg_replace("/jeudi/", "thursday", $str);
    if (preg_match("/vendredi/", $str))
        $str = preg_replace("/vendredi/", "friday", $str);
    if (preg_match("/samedi/", $str))
        $str = preg_replace("/samedi/", "saturday", $str);
    if (preg_match("/dimanche/", $str))
        $str = preg_replace("/dimanche/", "sunday", $str);
    if (preg_match("/janvier/", $str))
        $str = preg_replace("/janvier/", "january", $str);
    if (preg_match("/février/", $str))
        $str = preg_replace("/février/", "february", $str);
    if (preg_match("/mars/", $str))
        $str = preg_replace("/mars/", "march", $str);
    if (preg_match("/avril/", $str))
        $str = preg_replace("/avril/", "april", $str);
    if (preg_match("/mai/", $str))
        $str = preg_replace("/mai/", "may", $str);
    if (preg_match("/juin/", $str))
        $str = preg_replace("/juin/", "june", $str);
    if (preg_match("/juillet/", $str))
        $str = preg_replace("/juillet/", "july", $str);
    if (preg_match("/août/", $str))
        $str = preg_replace("/août/", "august", $str);
    if (preg_match("/septembre/", $str))
        $str = preg_replace("/septembre/", "september", $str);
    if (preg_match("/octobre/", $str))
        $str = preg_replace("/octobre/", "october", $str);
    if (preg_match("/novembre/", $str))
        $str = preg_replace("/novembre/", "november", $str);
    if (preg_match("/décembre/", $str))
        $str = preg_replace("/décembre/", "december", $str);
    
    if ($time = strtotime("$str"))
        echo $time. "\n";
    else
        echo "Wrong Format\n";
    }
?>
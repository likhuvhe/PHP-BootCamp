<?php
    if ($_GET["action"])
    {
        if (($_GET["action"] == "set") && ($_GET["name"] != '' && ($_GET["value"] != '')))
            setcookie($_GET["name"], $_GET["value"], time()+ (200000 * 5));
        if ($_GET["action"] == "get")
            if ($_COOKIE[$_GET["name"]])
                echo $_COOKIE[$_GET["name"]]. "\n";
        if ($_GET["action"] == "del" && $_GET["name"] != '' && !$_GET["value"])
            setcookie($_GET["name"], $_GET["value"], time() - 360000);
    } 
    
?>

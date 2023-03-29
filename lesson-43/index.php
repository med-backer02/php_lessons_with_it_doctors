<?php
    $date = "14.06.2023";
    echo "день " . substr($date, 0, 2) . "<br>";
    echo "месяц " . substr($date, 3, 2) . "<br>";
    echo "год " . substr($date, 6) . "<br>";
    
    $str="hello";
    echo $str;
    $str="hi";
    echo "<br>" . $str;
    echo "<br>" . substr($date, strpos($date, "20"));
    $php = "Php это [b] интерпретируемый язык[/b]";
    $php = str_replace(["[b]","[/b]"],["<b>","</b>"],$php,$number);
    echo "<br>" . $php . "<br>";
    echo "замен было : " . $number . "<br>";
    $str = ".   hello.     ";
    echo trim($str, " hl");
?>
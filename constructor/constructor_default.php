<?php

class person
{
    public static $count=0;
     public function __construct()
     {
        self::$count++;
        echo self::$count;
     }


}

$ob =new person();
echo "<br>";
$ob =new person();
echo "<br>";









?>
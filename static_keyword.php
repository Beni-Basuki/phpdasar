<?php
 class singer{
     static $name = "beni";
     static function toSing(){
         echo self::$name;
     }
 }
 singer::toSing();
 ?>

<?php
 class  testme{
     public function __construct(){echo "2";}
     public function __destruct(){echo "2";}
 }
 $test = new testme();
 unset($test);
 ?>
<?php
 session_start();
 $name = "Beni";
 $_SESSION['name'] = $name;
 echo $_SESSION['name'];
 ?>
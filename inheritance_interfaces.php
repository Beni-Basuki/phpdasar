<?php
 interface imusician {
     public function play();
 }
  class guitarist implements imusician{
     public function play()
     {
         echo "playin a guitars";
     }
  }
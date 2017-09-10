// Code for handling last input value and current input value.
<?php

if(isset($_GET['num']))
   {         
      echo $_GET['temp'].$_GET['num'];
   }

else if(isset($_GET['Backspace']))
   {
      echo substr($_GET['input'],0,-1);
   }
   
elseif(isset ($_GET['Answer']))
   {
      echo $res;
   }



<?php

// Code when any number is pressed from the calculator
if(isset($_GET['num']))
   {         
      echo $_GET['temp'].$_GET['num'];
   }
// Code when any backspace is pressed from the calculator
else if(isset($_GET['Backspace']))
   {
      echo substr($_GET['input'],0,-1);
   }
 // Code when any = is pressed from the calculator  
elseif(isset ($_GET['Answer']))
   {
      echo $res;
   }


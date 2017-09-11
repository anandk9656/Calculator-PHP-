<?php
    // Cookies in calculator for storing input (4+9) and output (13) on system.
    if(isset($_GET['Answer']))
    {
        if(!empty($_GET['temp']))
            {
                eval('$res= ' . $_GET['temp'] . ';');
               
                // Set cookies if cookie is empty.
                if(empty($_COOKIE['history']))
                {
                    setcookie('history',$_GET['temp'].!empty($_GET['num'])."=".$res.",", time()+86400);
                }
                // concatenate the cookie is it is not empty.
                else
                {
                    setcookie('history',$_GET['temp'].!empty($_GET['num'])."=".$res.",".$_COOKIE['history'], time()+86400);
                }
           }
    }
    // Printing the last 10 history .
    if(isset($_COOKIE['history']))
    {
        foreach($_COOKIE as $value)
        {       
            $new = explode(",",$value);
        }
        
/** Uncomment below code for having full history. 
*        echo '<pre>';
*       echo "<h3> Total History </h3>";
*        print_r($new);
*       echo '</pre>';
**/
        echo "<h3> Last Ten History  </h3>";
        echo current($new);
        echo "<br>";
        
            for($i=0;$i<9;$i++)
              {
                // next is used to getting next value from array.
                echo next($new);
                echo "<br>";
              }
    } 

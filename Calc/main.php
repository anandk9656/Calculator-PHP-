<?php

    if(isset($_GET['Answer']))
    {
        if(!empty($_GET['temp']))
            {
                eval('$res= ' . $_GET['temp'] . ';');
               
                if(empty($_COOKIE['history']))
                {
                    setcookie('history',$_GET['temp'].!empty($_GET['num'])."=".$res.",", time()+86400);
                }
                else
                {
                    setcookie('history',$_GET['temp'].!empty($_GET['num'])."=".$res.",".$_COOKIE['history'], time()+86400);
                }
           }
    }
    
    if(isset($_COOKIE['history']))
    {
        foreach($_COOKIE as $value)
        {       
            $new = explode(",",$value);
        }
      //  echo '<pre>';
      //  echo "<h3> Total History </h3>";
      //  print_r($new);
      //  echo '</pre>';
//        echo "<h3> Last Ten History  </h3>";
//        echo current($new);
//        echo "<br>";
//        
//            for($i=0;$i<9;$i++)
//              {
//                echo next($new);
//                echo "<br>";
//              }
    } 
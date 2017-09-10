<?php
                    if(isset($_GET['num']))
                      {
                          $num = $_GET['num'];
                          $temp = $_GET['temp'];
                          echo $temp.$num;
                      }

                    if(isset($_GET['Answer']))
                     {
                         if(!empty($_GET['temp']))
                        {
                             eval('$res= ' . $_GET['temp'] . ';');
                             echo $res;
                        }
                    }
                    
                    if(isset($_GET['Backspace']))
                        {
                             if(!empty($_GET['input']))
                                {
                                     echo substr($_GET['input'],0,-1);
                                     $temp=substr($_GET['input'],0,-1);
                                }
                        }
                    if(isset($_GET['logout']))
                    {
                        sleep(1) ;
                        header("location: login.php");
                        
                    }
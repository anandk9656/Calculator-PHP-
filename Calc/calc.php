
<?php
     session_start();
        
    if( isset($_SESSION['name']) )
    {
      if( isset ($_GET['num']) || isset ($_GET['Answer']) || isset ($_GET['Backspace']) )
        { }
        elseif( isset ($_GET['logout']) )
        {   
             session_destroy();
             header("location: login.php");
        }
    }
    else
    {
        header("location: login.php");
    }
  // code showing Calculator   
?>
<!DOCTYPE HTML>
<html>
    <head>
      <meta charset="UTF-8">       
            <title> Calculator </title>           
                 <link href="calc.css" type="text/css" rel="stylesheet"> 
                 
        <script src="calc.js" type="text/javascript"></script>
        <script src="calc_ajax.js" type="text/javascript"></script>
                         <noscript>
                                Java script is not supported by your browser.
                        </noscript>
    </head>
        
<div class="wrap">
    <form action="calc.php" method="get" name="calculator">    
      <input type="submit" name="logout" value ="logout" id = "out">  
    <h1> <:-- Calculator :--> </h1>
    
<div class="display">
    
 <input type="text" name="input" id="display" value="<?php require_once'input.php'; ?>">
 
 <input type="hidden" name="temp" value="<?php require_once'hidden.php'; ?>">   
 
</div>   <br>
        <div class="menu">
                <input type="submit" name="num" value="1">
                <input type="submit" name="num" value="2">
                <input type="submit" name="num" value="3">
                <input type="submit" name="num" value="+">
                                 <br> <br>
                <input type="submit" name="num" value="4">
                <input type="submit" name="num" value="5">
                <input type="submit" name="num" value="6">
                <input type="submit" name="num" value="-">
                                 <br> <br>
                <input type="submit" name="num" value="7">
                <input type="submit" name="num" value="8">
                <input type="submit" name="num" value="9">
                <input type="submit" name="num" value="*">
                                 <br> <br>
                <input type="submit" name="Backspace" value="Bksp">
                <input type="submit" name="num" value="0">
                <input type="submit" name="Answer" value=" = ">
                <input type="submit" name="num" value="/">  
        </div>        
    </form>
    <button onclick="load()"> History </button> 
     <?php require_once 'main.php'; ?> 
    <?php require_once 'Cal_database.php'; ?>
  
</div>
        <p id="demo"></p>  
        
    </body>
</html>

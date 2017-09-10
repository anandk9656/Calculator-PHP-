// User Login page.
<?php 
    session_start();
    
    if(isset($_GET['U_Name'])&& isset($_GET['U_Pwd']))
    {
        $_SESSION['name'] = $_GET['U_Name'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> login page</title>
        <link href="front.css" type="text/css" rel="stylesheet"> 
    </head>
    <body>
        <h1> Welcome to Calculator Application  </h1>
        
        <form method="GET" action="login.php">
            <label id="nm1">  User_Name :- 
                <input type="text" name="U_Name" class ="inp"> </label>
            <br><br>
            <label id="nm">Password :- 
            <input type="password" name="U_Pwd" class="inp"> </label>
            <br><br>
            <input type="submit" name="login" value="login">
            <br> 
           
           <?php         
                if(isset($_GET['login']))
                {
                  if(!empty($_GET['U_Name'])&&!empty($_GET['U_Pwd']))
                    {
                        $chkname = $_GET['U_Name'];
                        $chkpwd = $_GET['U_Pwd']; 
                   
                    require_once 'config.php';
                  
                    $query = mysqli_query($conn,"select * from user_data where User_Name ='$chkname' and Password ='$chkpwd'");
                   
                    $res = mysqli_fetch_row($query);
                    
                    if($res) {
                        
                        header("location: calc.php");
                    }
                    else
                    {
                        echo "<span> Incorrect Username or password. </span>"."<br>";
                    }
                        $conn->close();
                    }
                 else 
                     {
                        echo"<span> Please enter valid details then login. </span>"."<br>";
                     }
                }
            ?>
             <a href="front.php"> Not SignUp !! click here </a>
        </form>     
    </body>
</html>

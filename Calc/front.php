<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Main Page </title>
         <link href="front.css" type="text/css" rel="stylesheet"> 
    </head>
    <body>
        <h1> Welcome to the Sign Up Page </h1>
        
        <form method="GET" action="front.php">
            
            <label id="name">User_Name :- 
            <input type="text" name="name" class="inp"> </label>
            <br><br>
            <label id="sht">ID :- 
             <input type="text" name="id" class="inp" >  </label> 
            <br><br> 
            Password :- 
            <input type="password" name="pwd"class="inp" >
            <br><br>
            <label id="eml">Email Id :-
            <input type="text" name="email" class="inp">  </label>
            <br><br>
            <label id="mbl">Mobile :- 
            <input type="text" name="ph" class="inp"> </label>
             <br>
            <input type="submit" name="reg" value="signup">
            <br>  
            
        <?php
            if(isset($_GET["login"]))
            {       
                header("location: login.php");
            }
            if(isset($_GET['reg']))
            {
                if(!empty($_GET['name'])&&!empty($_GET['pwd']))
                {
                    $User = $_GET['name'];
                    $pwd = $_GET['pwd'];
                    $eml = $_GET['email'];
                    $ph = $_GET['ph'];
                    $id = $_GET['id'];
                    
                require_once 'config.php';
                
    $query = "select User_Name from user_data where User_Name ='$User'";  
    
    $result = mysqli_query($conn,$query); 
    
    $tmp = mysqli_fetch_row($result);  
    
    if($tmp) {
       echo"<span> Sorry User Already Exist With This Name !!!! </span>"."<br>";
    }
    else {
        $sql = "INSERT INTO user_data (User_Name, User_Id, Password, Email, Mobile) VALUES ('$User', '$id', '$pwd', '$eml', '$ph')";
        
        if ($conn->query($sql) === TRUE) {
              echo "<span>Registration is successful</span>"."<br>";  
          }
         else {
                echo "Error: " . $sql . "<br>" . $conn->error;
           }    
		}
         $conn->close();
         
                }               
             else {
                  echo"<span> Please enter valid details then sign up. </span>"."<br>";
             }
        }
        ?>
             <a href ="login.php"> click to login </a>
        </form>
    </body>
</html>

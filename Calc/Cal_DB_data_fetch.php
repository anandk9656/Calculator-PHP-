<?php
session_start();
$name =$_SESSION['name'];
    require_once 'config.php';
    echo "<h3>Database History</h3>"."<br>";
    
    $sql = mysqli_query($conn, "SELECT input,output FROM cal_data INNER JOIN user_data on cal_data.User_Id = user_data.User_Id where user_data.User_Name = '$name'");
  
    while($row = mysqli_fetch_array($sql))
    {
        echo $row['input']." = ";
        echo $row['output']."<br>";
    }
    $conn->close();
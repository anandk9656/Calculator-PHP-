<?php

$name =$_SESSION['name'];

require_once 'config.php';

if(isset($_GET['Answer']))
{
    $tmp = $_GET['input'];
    
    eval('$res= ' . $_GET['input'] . ';');
        // Code for inserting calculation in table.
        $sql = "INSERT INTO cal_data (User_Id, input, output)  VALUES ((select User_Id from user_data where User_Name = '$name'),'$tmp','$res')";
        
        if ($conn->query($sql) === TRUE) 
          {
              echo "<h3> Inserted to database </h3>"."<br> <br>";    
               $last_id = $conn->insert_id;
          }
         else 
           {
                echo "Error: " . $sql . "<br>" . $conn->error;
           }         
}
$conn->close();

<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "bank";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
 
session_start();

$names = $_SESSION['sname'];
$sql = "SELECT * FROM customers where name = '$names'";

$result = $conn->query($sql);

if (isset($result->num_rows) && $result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    
    echo '<tr>   
               Welcome  <td>'.$row["name"].'</td> .<br>
               Your Current Balance  <td>'.$row["balance"].'</td>
                 <br>
          </tr>
          <br><br>';
      }
   }
   else
    echo "Error";
    
?>
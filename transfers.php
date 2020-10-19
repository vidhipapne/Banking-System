<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
.btns {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btns:hover {
  background-color: RoyalBlue;
}
</style>
</head>
<body>
     <button class="btns"><a href = "index.php"><i class="fa fa-home"></i></a></button>
    
</html>
<?php
echo "<br><br>";

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "bank";

$sender        = $_POST['sendername'];
$reciever      = $_POST['recievername'];
$senderAc      = $_POST['senderAc'];
$recieverAc    = $_POST['recieverAc'];
$amount        = $_POST['amount'];

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$sql = " insert into transfers (sender , senderAc , reciever ,    recieverAc , amount)
 values ('$sender' , $senderAc,'$reciever' , $recieverAc, $amount);";

 if ($conn->query($sql) === TRUE) {
        echo "New record created successfully ";
        echo "<br><br>";
     }
        else {
                echo "Error: " . $sql . "<br>" . $conn->error;
             }
echo "<br><br>";


     $que = "update customers set balance =  balance - $amount where name = '$sender'"; 
     if ($conn->query($que) === TRUE) {
        echo "Sender balance is updated";
        echo "<br><br>";
     }
        else {
                echo "Error: " . $que . "<br>" . $conn->error;
             }
    
  
 echo "<br><br>";

 
    $query =" UPDATE `customers` SET balance = balance + $amount WHERE name = '$reciever'";
     if ($conn->query($query) === TRUE) {
        echo "Reciever has got the money";
        echo "<br><br>";
     }
        else {
                echo "Error: " . $query . "<br>" . $conn->error;
             }
      
    
?>
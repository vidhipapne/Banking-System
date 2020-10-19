<!DOCTYPE html>
<html>
<?php 
 function runMyFunction(){
  echo 'Run hogaya';
 }
 
 ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
 background-color: #555;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white
}

div.content {
  margin-left:100px;
  padding: 8px 50px;
  height: 700px;
}

/*@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}*/
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: fixed;
  top: 50%;
  left: 50%;
  right:70%;
  transform: translate(-50%, -50%);*/
  z-index: 2;
  width: 80%;
  padding: 5px;
  text-align:left;
}
</style>
</head>
<body>

<div class="sidebar">
  <a class="active" href="#index.php">Home</a>
  <a href="index.php">Customers</a>
  <a href="tranfersm.html">Transfer</a>
</div>

<div class=" bg-text content">
  <h1><u>Online Banking System</u></h1>
  <h2><u> List of all customers</u> </h2>

<?php
session_start();
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "bank";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$sql = "SELECT * FROM customers";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {

    $id    = $row["cust_id"]; 
    $_SESSION['sname'] = $row["name"];


    echo '<tr> 
                 <td>'.$id.'</td> .
                 <td>
     <a href="name.php" >'.$row['name'].'</a>
                 </td>
                 <br>
          </tr>
          <br><br>';
      }
   }
   ?> 
</div>

</body>
</html> 


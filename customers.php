<!DOCTYPE html>
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
div.info{
  padding: 300px 300px;
  font-size: 25px;
  color:#555;
  
}
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
  <a href="transfer.html">Transfer</a>
</div>

<div class=" bg-text content">
  <h1><u>Online Banking System</u></h1>
  <h2><u> List of all customers</u> </h2>

<form  method="post">

  <label for="customers">Choose a customer:</label>
  <select name="custom">
<option value="">----Select----</option>
<option value="Shalini Sharma">Shalini Sharma</option>
<option value="Rajan Sharma">Rajan Sharma</option>
<option value="Diksha Tiwari">Diksha Tiwari</option>
<option value="Garima Sharma">Garima Sharma</option>
<option value="Rahul Goyal">Rahul Goyal</option>
<option value="Kartik Shah">Kartik Shah</option>
<option value="Shefali Singh">Shefali Singh</option>
<option value="Ashika Kulkarni">Ashika Kulkarni</option>
<option value="Rakesh Jain">Rakesh Jain</option>
<option value="Sahil Gupta">Sahil Gupta</option>
  </select>
 <br><br>
  <input type="submit" name ="submit">
</form>
</div>

<div class="info">
<center>
<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "bank";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

 if(isset($_POST["submit"])){

 $cus = $_POST["custom"];

 $sql = "SELECT * FROM customers where name = '$cus'";

$result = $conn->query($sql);

if (isset($result->num_rows) && $result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    
    echo '<tr>   
              <b> Welcome !!</b> <td><b>'.$row["name"].'</b></td> .<br>
              <b> Current Balance:</b>  <td><b>'.$row["balance"].'</b></td><br>
               <b>Your Account Number:</b>   <td><b>'.$row["account"].'</b></td><br>
               <b>Your Email Id: </b><td><b>'.$row['email'].'</b></td>
               <br>
          </tr>
          <br><br>';
      }
   }
   else
    echo "Error";
  }
?>
</center>
</div>
<br><br>
</body>
</html>



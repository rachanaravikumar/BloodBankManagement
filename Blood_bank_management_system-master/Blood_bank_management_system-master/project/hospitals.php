<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bloodbankmanagement";

// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<html>
    
    <head><style>
 .screen {
	padding: 20px 50px 50px 50px;
        margin: 70px 70px 50px 100px;
     background-color: ghostwhite;
     color:black;
     }
div
    {
        font-family: verdana;
     }
        .header {
    background-color: #F1F1F1;
    text-align: center;
    padding: 10px;
}
 
  h2{   
  font-size:30px;
  }
 h4{
  font-size:20px;
   }
ul {
   list-style-type: none;
 margin: 0;
  padding: 0;
   }
.button{
    size:20px;
    padding: 10px 10px;
    background-color:white;
    color:black;
    border-radius: 4px;
}
        .sub
        {
            background-color: forestgreen;
        }
        .back
        {
            background-color: dimgray;
        }
.button:hover {
    background-color:green;
    color:white;
}
table {
    display: table;
    border-style: none;
    border-spacing: 10px;
    border-color: black;
}
    th, td {
    padding: 15px;
}          
body 
{
  background-image: url("bg.jpg");
}
        input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

 </style>
 <title>Hospitals</title>
    </head>
    <body>
        <div class="screen" align="center">
            <div class="header">  
                <h2 align="center">Hospitals</h2></div>
           <?php
            $sql = "SELECT h_id, name, address, city, pho_no, bb_id, p_id FROM hospital";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Hospital ID</th><th>Hospital Name</th><th>Address</th><th>City</th><th>Phone</th><th>BB_ID</th><th>P_ID</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
           echo "<tr><td>".$row["h_id"]."</td><td>".$row["name"]."</td><td> ".$row["address"]."</td><td> ".$row["city"]."</td><td> ".$row["pho_no"]."</td><td> ".$row["bb_id"]."</td><td> ".$row["p_id"]."</td></tr>";   
    }
    echo "</table>";
} else {
    echo "0 results";
}
 ?>          
            
<form action = "patients.php" method="post">
<br>
<label for="hid">Enter Patient ID to view Patient Details:</label><br>
<input type="text" id="d_id" name="search" placeholder="Enter  P_ID"><br>
<button class="button sub">SUBMIT</button>
<br>
</form>
<br>
<form action = "dependent.php" method="post">
<br>
<label for="did">Enter Patient ID to view Dependent Details:</label><br>
<input type="text" id="d_id" name="search" placeholder="Enter P_ID"><br>
    <button class="button sub">SUBMIT</button>
<br>
</form>
<form action = "payment.php" method="post">
<br>
<label for="pid">Enter Patient ID to view Payment Details:</label><br>
<input type="text" id="p_id" name="search" placeholder="Enter P_ID"><br>
    <button class="button sub">SUBMIT</button>
<br>
</form>
    <br>        
   <br>         
<form>
    <button class="button back" formaction="bloodbanks.php">ENQUIRE BLOOD BANK</button>
	<button class="button back" formaction="home.html">BACK</button>
    </form>
	<br>
	<br>
        <h4 align="center"> Donate Blood, Save A Life.</h4> 
        </div>
        <br>
    </body>
</html>

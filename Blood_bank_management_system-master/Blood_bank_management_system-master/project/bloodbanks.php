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
 <title>Blood Banks</title>
    </head>
    <body>
        <div class="screen" align="center">
            <div class="header">  
                <h2 align="center">Blood Banks</h2></div>
           <?php
            $sql = "SELECT bb_id, bb_name, address, phone FROM blood_bank";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Blood Bank ID</th><th>Blood Bank Name</th><th>Address</th><th>Phone</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
           echo "<tr><td>".$row["bb_id"]."</td><td>".$row["bb_name"]."</td><td> ".$row["address"]."</td><td> ".$row["phone"]."</td></tr>";   
    }
    echo "</table>";
} else {
    echo "0 results";
}
 ?>
            
            
            
<form action = "donor.php" method="post">
<br>
<label for="did">Enter Blood Bank ID to view Donors:</label><br>
<input type="text" id="d_id" name="search" placeholder="Enter  BB_ID"><br>
<button class="button sub">SUBMIT</button>
<br>
</form>
   
<form action = "employee.php" method="post">
<br>
<label for="eid">Enter Blood Bank ID to view Employees:</label><br>
<input type="text" id="e_id" name="search" placeholder="Enter BB_ID"><br>
    <button class="button sub">SUBMIT</button>
<br>
</form>
<form action = "stock.php" method="post">
<br>
<label for="sid">Enter Blood Bank ID to view Stock:</label><br>
<input type="text" id="s_id" name="search" placeholder="Enter BB_ID"><br>
    <button class="button sub">SUBMIT</button>
<br>
</form>
    <br>        
   <br>         
<form>
	<button class="button back" formaction="home.html">BACK</button>
    </form>
	<br>
	<br>
        <h4 align="center"> Donate Blood, Save A Life.</h4> 
        </div>
        <br>
    </body>
</html>

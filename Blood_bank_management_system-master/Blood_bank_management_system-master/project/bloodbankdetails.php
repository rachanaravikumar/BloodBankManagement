<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bloodbankmanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<html>
    <head>
        <style>
  .screen {
	padding: 20px 50px 40px 50px;
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
   width: 600px;
   background-color: darkgray;
}
li a {
 display: block;
    color: #000;
  padding: 20px 40px;
    background-color: darkgray;
    text-decoration: none;
  font-size: 20px;
}
/* Change link color on hover */
li a:hover {
  background-color: darkgray;
   color: maroon;
} 
body 
{
  background-image: url("bg.jpg");
}
            .button{
    size:30px;
    padding: 10px 20px;
    background-color:white;
    color:black;
    border-radius: 4px;
}
        .back
        {
            background-color: dimgray;
        }
            .button:hover {
    background-color:green;
    color:white;
}
 </style>
 <title>Blood Bank Management System</title>
    </head>
    <body >
    <div class="screen" align="center">
            <div class="header">  
                <h2 align="center">Blood Bank Details</h2>
            </div>
        <div>
            <br>
       <ul>
             
               <li><a href="donor.php">View Donors</a></li>
              <br>
              <li><a href="employee.php">View employee details</a></li>
                <br>
                <li><a href="stock.php">View Stock</a></li>
              <br>
             <li><a href="criteria.php">Criteria form</a></li>
       </ul>
	<br>
        </div>
    <form>
	<button class="button back" formaction="bloodbanks.php">BACK</button>
    </form>
	<br>
	<br>
        <h4 align="center"> Donate Blood, Save A Life.</h4> 
        </div>
    </body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bloodbankmanagement";

// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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
    size:30px;
    padding: 10px 20px;
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
     
 </style>
 <title>Donor</title>
    </head>
    <body>
        <div class="screen" align="center">
            <div class="header">  
                <h2 align="center">Donor Details</h2>
            </div>
    
  <table>
		<tr>
		<th> Donor ID</th>
		<th> First name </th>
            <th> Middle name </th>
            <th> Last name </th>
            <th> DOB </th>
            <th> B_Group </th>
            <th> B_Type</th>
            <th> Age </th>
            <th> Address </th>
            <th> Ph_no </th>
            <th> BB_ID </th>
		</tr>
            <?php
            $get = $_POST['search'];
            if($get) {
                $show="SELECT * FROM donor where bb_id='$get'";
                $result=mysqli_query($conn,$show);
                while($rows=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo  "<td>";
                    echo $rows['d_id'];
                    echo  "</td>";
                    echo  "<td>";
                    echo $rows['fname'];
                    echo  "</td>";
                    echo  "<td>";
                    echo $rows['mname'];
                    echo  "</td>";
                    echo  "<td>";
                    echo $rows['lname'];
                    echo  "</td>";
                    echo  "<td>";
                    echo $rows['dob'];
                    echo  "</td>";
                    echo  "<td>";
                    echo $rows['b_group'];
                    echo  "</td>";
                    echo  "<td>";
                    echo $rows['b_type'];
                    echo  "</td>";
                    echo  "<td>";
                    echo $rows['age'];
                    echo  "</td>";
                    echo  "<td>";
                    echo $rows['address'];
                    echo  "</td>";
                    echo  "<td>";
                    echo $rows['ph_no'];
                    echo  "</td>";
                    echo  "<td>";
                    echo $rows['bb_id'];
                    echo  "</td>";
                    echo "</tr>";
                    echo"<br/>";
                }
            }
            else{
                echo "Nothing found";
            }
            ?>
            </table>
     
    <form>
	<button class="button back" formaction="bloodbanks.php">BACK</button>
            </form>
	<br>
	<br>
        <h4 align="center"> Donate Blood, Save A Life.</h4> 
        </div>
        <br>
    </body>
</html>

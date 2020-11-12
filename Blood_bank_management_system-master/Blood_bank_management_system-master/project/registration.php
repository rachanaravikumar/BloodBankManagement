<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bloodbankmanagement";
  error_reporting( error_reporting() & ~E_NOTICE );
// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $d_id = intval(test_input($_POST["d_id"]));
  $fname = test_input($_POST["fname"]);
  $mname = test_input($_POST["mname"]);
  $lname = test_input($_POST["lname"]);
  $dob = test_input($_POST["dob"]);
    $b_group = test_input($_POST["b_group"]);
    $b_type = test_input($_POST["b_type"]);
    $age = intval(test_input($_POST["age"]));
     $address = test_input($_POST["address"]);
    $ph_no = intval(test_input($_POST["ph_no"]));
    $bb_id= intval(test_input($_POST["bb_id"]));
    
if ($age > 16)
{
    
    $sql = "INSERT INTO donor values($d_id,'$fname','$mname','$lname','$dob','$b_group','$b_type',$age,'$address',$ph_no,$bb_id);";
    echo '<script type="text/javascript">alert("Eligible to be a Donor, proceed to criteria form.");</script>';
}
    
      else if($age < 16)
{
echo '<script type="text/javascript">alert("Not Eligible to be a Donor.");</script>';
}


if ($conn->query($sql) == TRUE) 
{
    echo "Successful!";
} else {
    
    echo "$conn->error";
}

    
}

    

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<html>
    <head>
    <style>
   .screen {
	padding: 20px 50px 200px 50px;
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
 <title>Registration</title>
    </head>
    <body>
        <div class="screen" align="center">
            <div class="header">  
                <h2 align="center">Registration Form</h2>
            </div>
            <br>
            <br>
                <div>
                <img src="bloodtypes.png" alt="Donate blood" width="600" height="600"align="right">
                <form align="left" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                    <label for="did">Donor ID:</label><br>
                    <input type="text" id="did" name="d_id" placeholder="Enter your ID"><br>
                 <label for="did">First name:</label><br>
                    <input type="text" id="fname" name="fname" placeholder="Enter your First Name "><br>
                <label for="did">Middle Name:</label><br>
                    <input type="text" id="mname" name="mname" placeholder="Enter your Middle Name"><br>
                <label for="did">Last Name:</label><br>
                    <input type="text" id="lname" name="lname" placeholder="Enter your Last Name"><br>
                <label for="did">Date of Birth:</label><br>
                    <input type="text" id="dob" name="dob" placeholder="Enter your DOB"><br>
                <label for="did">Blood Group:</label><br>
                    <input type="text" id="bg" name="b_group" placeholder="Enter your blood group">
                   
                    <br>
                <label for="did">Blood Type:</label><br>
                    <input type="text" id="bt" name="b_type" placeholder="Enter your blood type"><br>
                <label for="did">Age:</label>
              
                    <br>
                    <input type="text" id="age" name="age" placeholder="Enter your age"><br>
               <label for="did">Address:</label><br>
                    <input type="text" id="address" name="address" placeholder="Enter your address"><br>
                    <label for="did">Phone number:</label><br>
                    <input type="text" id="phno" name="ph_no" placeholder="Enter your phone number"><br>
                <label for="did">Blood Bank ID:</label><br>
                    <input type="text" id="bb_id" name="bb_id" placeholder="Enter BB_ID"><br>
                    <br>
                    <br>
            
                    
            <button class="button sub">SUBMIT</button>
            <button class="button back" formaction="criteria.php" >CRITERIA FORM</button>
             <button class="button back" formaction="home.html" >BACK</button>
            </form>
        </div>
        </div>
        <br>
    </body>
</html>
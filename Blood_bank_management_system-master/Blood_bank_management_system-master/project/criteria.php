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
  $age = intval(test_input($_POST["age"]));
  $pulse = intval(test_input($_POST["pulse"]));
  $bp = test_input($_POST["bp"]);
  $weight = intval(test_input($_POST["weight"]));
    $temp = intval(test_input($_POST["temp"]));

    
    $sql = "INSERT INTO criteria values($d_id,$age,$pulse,'$bp',$weight,$temp);";
    

 
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

 <title>Criteria</title>
    </head>
    <body>
        <div class="screen" align="center">
            <div class="header">  
                <h2 align="center">Criteria Form</h2>
            </div>
           
            <br>
            <br>
                <div>
                <img src="donatedblood.png" alt="Donate blood" width="550" height="550"align="right">
                 <form align="left" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">    
                 <label for="did">Donor ID:</label><br>
                    <input type="text" id="d_id" name="d_id" placeholder="Enter your ID"><br>
                <label for="did">Age:</label><br>
                    <input type="text" id="age" name="age" placeholder="Enter your age">
                 <br>
                <label for="did">Pulse:</label><br>
                    <input type="text" id="pulse" name="pulse" placeholder="Enter your pulse"><br>
                <label for="did">Blood Pressure:</label><br>
                    <input type="text" id="bp" name="bp" placeholder="Enter your blood pressure"><br>
                <label for="did">Weight:</label><br>
                    <input type="text" id="weight" name="weight" placeholder="Enter your weight in kgs">
                    
                      
                     <br>
                <label for="did">Temperature:</label>
                  
                     <br>
                    <input type="text" id="temp" name="temp" placeholder="Enter your temperature"><br>
                    <br>
                    <br>
                    
                      
            <button class="button sub" formaction=" " >SUBMIT</button>
             <button class="button back" formaction="home.html" >BACK</button>
            </form>
        </div>
        </div>
        <br>
     
    </body>
</html>

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
 <title>Patient Details</title>
    </head>
    <body >
    <div class="screen" align="center">
            <div class="header">  
                <h2 align="center">Patient Details</h2>
            </div>
        <div>
            <br>
       <ul>
             
               <li><a href="dependent.php">Dependents</a></li>
              <br>
              <li><a href="payment.php">Payments</a></li>
                <br>
       </ul>
	<br>
        </div>
    <form>
	<button class="button back" formaction="hospitaldetails.php">BACK</button>
    </form>
	<br>
	<br>
        <h4 align="center"> Donate Blood, Save A Life.</h4> 
        </div>
    </body>
</html>
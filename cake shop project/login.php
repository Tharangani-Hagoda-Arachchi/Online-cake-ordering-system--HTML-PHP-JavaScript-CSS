<?php
session_start();

if(isset($_POST["login"])){
$u=$_POST["us"];
$p=$_POST["pw"];
$conn= new mysqli("localhost","root","","cake");
if($conn->connect_error)
{
echo "failed".$conn->connect_error;
}
$sql=("SELECT CustomerName, password FROM reistration_information WHERE password=$p");
$result =$conn->query($sql);

if($result["CustomerName"]==$u && $result=["password"]==$p){
	header("location:Product and Services.html");
	
}
else{
	echo '<script> alert("enter correct emai and password")</script>';
	
}}?>

<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> login page</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div id="topbar">
<div id="topnav">
  <a id="active" href="#login">Log In</a>
  <a href="cake.html">Home</a>

  <a href="registration.php">Registration</a>
  
  </div>
</div>

<section> <div class="sideMenu"><div class="frmdiv">
<form name="login" id="login" action="login.php" method="POST"><br><br>
<h1 align="center"> LOG IN </h1>
<table align="center"cellpadding="10" cellspacing="12">
<tr> <td> <label>User Name</label></td>
<td> <input type="text" id="us" name="us"></td></tr>
<tr> <td> <label>Password</label></td>
<td> <input type="password" id="pw" name="pw"></td></tr><br>
<tr> <td> <input type="submit" id="login" name="login" value="LOGIN"></td>
<td> <input type="reset" id="reset" name="reset" value="RESET"></td></tr><br>
</table>
</form>
<form action="registration.php"><table align="center" cellpadding="8" cellspacing="10"><tr><td> <input type="submit" id="createacc" name="createacc" value="CREATE NEW ACCOUNT"></td></tr></table></form>
</div>
</div>
</section>

<footer >
        <div class="footer">
            <div class="row">
                <div class="col1">
                    <ul type="none">
                        <li>INFO</li><br>
                        <li><a href="about.html">About Us</a></li>
                       
                        <li><a href="https://translate.google.lk/">Sinhala & Tamil Translator</a></li>
                         
                    </ul>
                </div>
                <div class="col2">
                    <ul class="socialmedia" type="none">
                        <li>CONTACT US</li><br>
                        <li class="fb"><a  href="https://www.facebook.com/Jays-Art-103578618093586/" target="_blank">Facebook</a></li>
                        
                        <li class="in"><a href="https://instagram.com/jayani.senarathna.98?igshid=nur5j2cghh1l" target="_blank">Instagram</a></li>
                        
                    </ul>
                </div>
                <div class="col3">
                    <ul class="officeinfo" type="none">
                        <li>GALLE HEAD OFFICE</li><br>
                        <li>No 374, Samagi Road, Piyadigama,</li>
                        <li>Galle.</li>
                        <li class="ofi1"><strong>Email:</strong> jaysartcake@gmail.com</li>
                        <li class="ofi2"><strong>Hotline:</strong> +94 76 684 7435</li>
                        <li class="ofi3"><strong>Landline:</strong> +94 91 393 0888</li>
                    </ul>
                </div>
                
                <div class="col4" >
                    <ul type="none">
                        <li>Payments</li><br>
                        <li><img class="cards" src="creditcard.jfif" alt="Accepted Credit Cards" height="100px" width="200px"></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </footer>
	</body>
	</html>
	

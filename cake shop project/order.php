<?php
$con1= new mysqli("localhost","root","","cake");
if($con1->connect_error)
{
echo "failed".$con1->connect_error;
}


$sql1= "CREATE TABLE order_information( 
CustomerName VARCHAR(150),
Address VARCHAR(250),
Date DATE,
Type VARCHAR(150),
Code VARCHAR(10),
Amount FLOAT(2),
Telephone INT,
Email VARCHAR(50)


)";
$con1->query($sql1);
$con1->close();





if(isset($_POST["submit"])){
$a = $_POST["fn"];
$b = $_POST["address"];
$c = $_POST["contact"];
$d = $_POST["email"];
$e = $_POST["type"];
$f = $_POST["code"];
$g = $_POST["date"];
$h = $_POST["amount"];
$con2= new mysqli("localhost","root","","cake");
if($con2->connect_error)
{
echo "failed".$con2->connect_error;
}
$sql2="INSERT INTO order_information(CustomerName,Address,Date,Type,Code,Amount,Telephone,Email) VALUES('$a','$b','$g','$e','$f','$h','$c','$d')";
$result = mysqli_query($con2,$sql2);
		if(!$result)
		{
			die("NO query");
		}

		
		mysqli_close($con2);
}?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order page</title>
<link rel="stylesheet" type="text/css" href="order.css">
<script>
function validate()
{
var a=document.getElementById("fn").value;
var c=document.getElementById("address").value;
var d=document.getElementById("contact").value;
var e=document.getElementById("email").value;
var f=document.getElementById("code")value;
var g=document.getElementById("date").value;
var h=document.getElementById("type").value;
var i=document.getElementById("amount").value;
if(a==""){
alert("Please Enter Your name");
return false;
}


if(c==""){
alert("Please Enter Your Address");
return false;
}
if(d==""){
alert("Please Enter Your Phone number");
return false;
}
if (isNaN(d))
 {
 alert ("Enter a valid Pone number");
 return false;
 }
 if(e==""){
alert("Please Enter Your email");
return false;
}
 if (f==0)
 {
 alert ("Select order code");
 return false; 
 }
 if(g==""){
alert("Please Enter date");
return false;
}
 if(h == 0)
 {
 alert("select order type");
 return false;
 }
 if (i="")
 {
 alert ("Enter amount");
 return false;
 } 
}
</script>
</head>
<body>
<div id="topbar">
<div id="topnav">
  <a id="active" href="#login">Order</a>
  <a href="cake.html">Home</a>
  <a href="Product and Services.html">Product And Services</a>
  <a href="login.php">Log In</a>
  <a href="About.html">About Us</a>
  <a href="registration.php">Registration</a>
  </div>
</div>

<section> <div class="sideMenu"><div class="frmdiv">
<html>
<head>
</head>
<body>
<h1 align = "center"> Order </h1>
<form name = "order" action = "order.php" method = "POST">
<table align = "center"cellpadding="8" cellspacing="8">
<tr>
<td>Customer Name :</td>
<td><input type = "text" name = "fn" id = "fn"></td></tr>
<tr>
<td>Address :</td>
<td><textarea name = "address" id ="address" rows = "2" cols = "20" ></textarea ></td></tr>
<tr>
<td>Contact Number :</td>
<td><input type = "text" name = "contact" id = "contact"></td></tr>
<tr>
<td>Email :</td>
<td><input type = "email" name = "email" id = "email" ></td></tr>

<tr>
<td>Cake Type :</td>
<td><select name = "type" id = "type">
<option value="0">-select-</option>
<option value="1">Milk Chocalate Cake</option>
<option value="2">Vanila Buttercream Cake</option>
<option value="3">Strawberry Cake</option>
<option value="4">Cup Cake</option>
</select></td></tr>
<tr>
<td>Cake Code :</td>
<td><select name = "code" id = "code">
<option value="0">-select-</option>
<option value="1">C#001</option>
<option value="2">C#002</option>
<option value="3">C#003</option>
<option value="4">C#004</option>
<option value="5">C#005</option>
<option value="6">C#006</option>
<option value="7">C#007</option>
<option value="8">C#008</option>
<option value="9">C#009</option>
<option value="10">C#010</option>
<option value="11>C#011</option>
<option value="12">C#012</option>
<option value="13">C#013</option>
<option value="14">C#014</option>
<option value="15">C#015</option>
<option value="16">C#016</option>
<option value="17">C#017</option>
<option value="18">C#018</option>
<option value="19">C#019</option>
<option value="20">C#020</option>
<option value="21">C#021</option>
<option value="22">C#022</option>
<option value="23">C#023</option>
<option value="24">C#024</option>

</select></td></tr>
<tr>
<td>Amount :</td>
<td><input type = "text" name = "amount" id = "amount"></td></tr>
<tr>
<td>Date :</td>
<td><input type="date" name = "date" id = "date"></td></tr>

<tr>
<td><input type = "Submit" value="submit" name = "Submit" onclick="return validate();" ></td>
<td><input type = "Reset" name = "Reset"></td></tr>
</table>
</form>
</body>
</html>



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
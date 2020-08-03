<?php
include 'heading.php';
?>

<?php
$server = "localhost";
$dbUsername ="root";
$dbpasswd = "";
$dataBase = "kinsurance";
$conn = mysqli_connect($server, $dbUsername, $dbpasswd, $dataBase);
if (!$conn) {
die("connection to database failed!");

}
 ?> 
<!DOCTYPE HTML>
<html lang="en">
<head>
    <link rel="stylesheet" href="k-insure.css">
    <title>www.kinsurance.com</title>
</head>
<body>

<div class="Main-Page">
<div class="img-div">
  <h2>WELCOME TO KAMPALA INSURANCE LIMITED (U)<h2>

</div>
<div class="side-img-div">
<div class="robus">
<form action="login-SignIn.php" method="post">
<b>K</b>insurance Ltd <br><br>
LOGIN CLIENT <br>
<label >Username</label><br>
<input type="text" placeholder="enter username"><br>
<label >Password</label><br>
<input type="text" placeholder="Password">
<br><br>
<button name="login-btn">Login</button>
<br><br>
Don't have an Account?
<br>
<a href="signup.php">Signup</a>
</form>
</div>
<br>
<div class="robus">
  <img src="kinsure.jpg" alt="" class="bj">
</div>
</div>
</div>

<div class="bottom-div">
<div class="section-1">
<ul>
  <li class="s1">How to contact us</li>
  <li>Kampala Insurance Ltd</li>
  <li>Plot 13, URA Road</li>
  <li>Nakawa Division</li>
  <li>Kampala Uganda,</li>
  <li> -+256778082716</li>
  <li> -+256709964545</li>
</ul>
</div>



<div class="section-1">
<ul>
  <li class="s1">About Kampala Insuranc</li>
  <li><a href="">Our Missions</a></li>
  <li><a href="">Contac & Location</a></li>
  <li><a href="">Services</a></li>
  <li><a href="">Claims & Others</a></li>
</ul>
</div>

<div class="section-1">
<ul>
  <li class="s1">Resource Services</li>
  <li><a href="insure-form.php">Forms</a></li>
  <li><a href="guide.php">Guidelines</a></li>
  <li><a href="report.php">Reports</a></li>
  <li><a href="fund.php">Fundings</a></li>
   <li><a href="currency.php">Currency Insurance</a></li>
</ul>
</div>

<div class="section-1">
<ul>
  <li class="s1">Useful Links</li>
  <li><a href="">How do I fill a Claim</a></li>
  <li><a href="">Vehicle Insurance</a></li>
  <li><a href="">Hours & Plans</a></li>
  <li><a href="">General Insurance Products</a></li>
  <li><a href="">Money Insurance</a></li>
  <li><a href="">More</a></li>
</ul>
</div>

</div>
</body>
</html>
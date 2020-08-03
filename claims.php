<?php
include 'heading.php';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <link rel="stylesheet" href="k-insure.css">
    <title>www.kinsurance.com</title>
</head>
<body>
<h2>REPORT A CLAIMS:</h2>
<br>
<form action="claims.php" method="post">
<button type="submit" name="view-claimers">VIEW CLAIMERS</button>
</form>

<?php

if (isset($_POST['view-claimers'])) {
$server = "localhost";
$dbUsername ="root";
$dbpasswd = "";
$dataBase = "kinsurance";
$conn = mysqli_connect($server, $dbUsername, $dbpasswd, $dataBase);
echo '<table>
<tr>
<td class="tite">Client ID</td><td class="tite">Client Name</td><td class="tite">Client email</td>
</tr>';
if (!$conn) {
die("connection to database failed!");

}

if ($conn->connect_error) {
  die("Failed to connect!..".$conn->connection_error);
}
$sql = "SELECT u_id, fname, user_email FROM users";
$results = $conn->query($sql);

if ($results->num_rows > 0) {
    while ($row = $results-> fetch_assoc()) {
       echo"<tr><td>" .$row['u_id'] ."</td><td>" .$row['fname'] ."</td><td>" .$row['user_email'] ."</td></tr>";
      
    }
    echo"</table>";
     echo" <a href='claims.php'><button>CLOSE</button></a>";
}
else{
    echo"No Results form table!.";
}
}

?>
</table>
</form>
<br><br>

<table>
    <tr>
<td class="tite">STEPS</td>
<td class="tite">ACTIVITIES</td>
<td class="tite">INDICATIVE TIMELINES</td>
</tr>
<tr>
<td>
01
</td>
<td>
Claim intimation 
</td>
<td>
As per policy conditions
</td>
</tr>
<tr>
    <td>
        02
    </td>
    <td>
    Claim acknowledgement and acquisition of documents/contact with the claimant
    </td>
    <td>
Within 3 working days from intimation
    </td>
</tr>
<tr>
    <td>
        03
    </td>
    <td>
    Site visit/or appointment of assessor/adjusters
    </td>
    <td>
    -Within 3 working days of intimation of the claim.
    <br>
    – 5 working days for complex claims since they require approval by IRA.
    </td>
</tr>
<tr>
    <td>
        04
    </td>
    <td>
    Making settlement offer or communicating repudiation of claim
    </td>
    <td>
    -5 working days from receipt of final adjustment/investigation report or where no adjustment/investigation is required,
    date of receiving the final supporting documents.
    <b></b>
    -Discharge voucher to be submitted together with adjustment report.
    </td>
</tr>
</table>
 <br><br>

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
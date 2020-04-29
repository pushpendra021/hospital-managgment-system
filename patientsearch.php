<html>
<head>
<title>
Patient Search
</title>
<style>
body{margin:0px;padding:0px;}
img{
    width:100%;
    height:300px;
    opacity:0.7;
}

table {
  border-collapse: collapse;
  width:80%;
  padding:0px;
  margin:0 auto;
  
}

th {
  height: 50px;
  font-size:25px;
  background:blue;

}
tr{
    font-size:25px;
    text-align:center;
}
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  text-decoration: none;
  font-size: 25px;
  height:50px;
  background:blue;
  margin-left:5px;
}

</style>
</head>
<body>
<?php
include("ram.php");
if(isset($_POST['submitpatientdetail']))
{
    $contact=$_POST['search'];
    $apid=$_POST['search'];
    $patient=$_POST['search'];
    $emailid=$_POST['search'];
    $doctor=$_POST['search'];
    $payment=$_POST['search'];
    $dater=$_POST['search'];

    $query="select * from doctorapp where mobileno='$contact' or apid='$apid' or 
    patient='$patient' or emailid='$emailid' or doctor='$doctor' or payment='$payment' or dater='$dater'";
    $result=mysqli_query($conn,$query);
    echo "
    <div>
   
<img src='4.jpg'>
<div class='topnav'>
<a class='active' href='patientdetail.php'>Go Back</a>
    <table>
     <tr>
     <th>appointment id</th>
     <th>patient</th>
     <th>mobileno</th>
     <th>emailid</th>
     <th>doctor</th>
     <th>payment</th>
     <th>Date</th>
    
     </tr>";

    while($row=mysqli_fetch_array($result)){$apid=$row['apid'];
        $patient=$row['patient']; 
        $mobileno=$row['mobileno'];
        $emailid=$row['emailid'];
        $doctor=$row['doctor'];
        $payment=$row['payment'];
        $dater=$row['dater'];
        echo "<tr>
        <td>$apid</td>
        <td>$patient</td>
        <td>$mobileno</td>
        <td>$emailid</td>
        <td>$doctor</td>
        <td>$payment</td>
        <td>$dater</td>
        
    </tr>"; 
    }
echo "</table></div></div>";


}

?>
</body>
</html>

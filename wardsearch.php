<html>
<head>
<title>
Ward Search
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
include("wardphpcode.php");

if(isset($_POST['submitwarddetail']))
{
  $wardid=$_POST['wardsearch'];
  $patientname=$_POST['wardsearch'];
  $doctorname=$_POST['wardsearch'];
  $building=$_POST['wardsearch'];
  $floor=$_POST['wardsearch'];
  $roomno=$_POST['wardsearch'];
  $roomtype=$_POST['wardsearch'];
  $bedno=$_POST['wardsearch'];
  $price=$_POST['wardsearch'];
    $query="select * from addward where wardid='$wardid' or patientname='$patientname'
    or doctorname='$doctorname' or building='$building' or floor='$floor' or roomno='$roomno'
    or roomtype='$roomtype' or bedno='$bedno' or price='$price'";
    $result=mysqli_query($conn,$query);
    echo "
    <div>
   
<img src='4.jpg'>
<div class='topnav'>
<a class='active' href='warddetail.php'>Go Back</a>

    <table>
     <tr>
       <th>wardid</th>
        <th>patientname</th>
        <th>doctorname</th>
        <th>building</th>
        <th>floor</th>
        <th>roomno</th>
        <th>roomtype</th>
        <th>bedno</th>
        <th>price</th>
     </tr>";

    while($row=mysqli_fetch_array($result))
      {  $wardid=$row['wardid'];
        $patientname=$row['patientname']; 
        $doctorname=$row['doctorname'];
        $building=$row['building'];
        $floor=$row['floor'];
        $roomno=$row['roomno']; 
        $roomtype=$row['roomtype'];
        $bedno=$row['bedno'];
        $price=$row['price'];
        echo "<tr>
        <td>$wardid</td>
        <td>$patientname</td>
        <td>$doctorname</td>
        <td>$building</td>
        <td>$floor</td>
        <td>$roomno</td>
        <td>$roomtype</td>
        <td>$bedno</td>
        <td>$price</td>
      </tr>";
    }
  echo "</table></div></div>";


}

?>
</body>
</html>

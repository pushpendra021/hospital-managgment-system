<html>
<head>
<title>
bedallotmentsearch
</title>
<style>
body{margin:0px;padding:0px;}
img{
    width:100%;
    height:300px;
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
include("bedallotmentphpcode.php");

if(isset($_POST['submitbeddetail']))
{
  $allotmentid=$_POST['bedallotmentsearch'];
  $bedno=$_POST['bedallotmentsearch'];
  $patientname=$_POST['bedallotmentsearch'];
  $email=$_POST['bedallotmentsearch'];
  $contact=$_POST['bedallotmentsearch'];
  $dater=$_POST['bedallotmentsearch'];

 
    $query="select * from bedallotment where bedallid='$allotmentid' or patientname='$patientname'
    or bedno='$bedno' or email='$email' or contact='$contact' or dater='$dater'";
    $result=mysqli_query($conn,$query);
    echo "
    <div>
   
   <img src='404.jpg'>
   <br>
   <hr>
   <br>
   <div class='topnav'>
   <a class='active' href='bedallotmentdetail.php'>Go Back</a>

    <table>
     <tr>
       <th>Allotment Id</th>
       <th>Bed No</th>
        <th>Patient Name</th>
        <th>Email Id</th>
        <th>Contact No</th>
        <th>Allotment Date</th>
        
        
      </tr>";

     while($row=mysqli_fetch_array($result))
      {  $allotmentid=$row['bedallid'];
        $bedno=$row['bedno'];
        $patientname=$row['patientname']; 
        
        $email=$row['email'];
        $contact=$row['contact'];
        $dater=$row['dater'];
       
        echo "<tr>
        <td>$allotmentid</td>
        <td>$bedno</td>
        <td>$patientname</td>
        <td>$email</td>
        <td>$contact</td>
        <td>$dater</td>
       
       </tr>";
      }
    echo "</table></div></div>";


 }

 ?>
 </body>
</html>

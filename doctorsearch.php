<html>
<head>
<title>
Doctor Search
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
include("doctorphpcode.php");
if(isset($_POST['submitdoctordetail']))
{
    $doctorid=$_POST['search'];
    $contact=$_POST['search'];
    $department=$_POST['search'];
    

    $query="select * from doctoradd where contact='$contact' or drid='$doctorid' or dept='$department'";
    $result=mysqli_query($conn,$query);
    echo "
    <div>
   
<img src='4.jpg'>
<div class='topnav'>
<a class='active' href='patientdetail.php'>Go Back</a>
    <table>
     <tr>
     <th>Doctor id</th>
 <th>Fname</th>
 <th>Lname</th>
 <th>Email</th>
 <th>Address</th>
 <th>Contact</th>
 <th>Department</th>
     </tr>";

    while($row=mysqli_fetch_array($result)){$doctorid=$row['drid'];
        $fname=$row['fname']; 
        $lname=$row['lname'];
        $email=$row['email'];
        $address=$row['addresses'];
        $contact=$row['contact'];
        $department=$row['dept'];
        echo "<tr>
        <td>$doctorid</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$address</td>
        <td>$contact</td>
        <td>$department</td>
    </tr>"; 
    }
echo "</table></div></div>";


}

?>
</body>
</html>

<html>
<head>
<title>
odsearch
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
include ("odrest.php");
if(isset($_POST['submitoddetail']))
{
    $id=$_POST['search'];
    $contactno=$_POST['search'];
    $fname=$_POST['search'];
    $lname=$_POST['search'];
    $email=$_POST['search'];
    $bgroup=$_POST['search'];
    $donerpart=$_POST['search'];
    $query="select * from organsdoner where contact='$contactno' or 
    odid='$id' or fname='$fname' or lname='$lname' or email='$email' or 
    bloodgrp='$bgroup' or donerpart='$donerpart' ";
    $result=mysqli_query($conn,$query);
    echo "
    <div>
   
<img src='4.jpg'>
<div class='topnav'>
<a class='active' href='oddetail.php'>Go Back</a>
    <table>
     <tr>
     <th>id</th>
 <th>first name</th>
 <th>last name</th>
 <th>contact no</th>
 <th>email id</th>
 <th>blood grp</th>
 <th>$donerpart</th>
     </tr>";

     while($row=mysqli_fetch_array($result)){$id=$row['odid'];
        $fname=$row['fname'];
        $lname=$row['lname']; 
        $contactno=$row['contact'];
        $email=$row['email'];
        $bgroup=$row['bloodgrp'];
        $donerpart=$row['donerpart'];
        echo "<tr>
        <td>$id</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$contactno</td>
        <td>$email</td>
        <td>$bgroup</td>
        <td>$donerpart</td>
    </tr>";

    }
echo "</table></div></div>";


}




?>
</body>
</html>

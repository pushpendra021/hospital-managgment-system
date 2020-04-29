<html>
<head>
<title>
bdsearch
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
include ("bdrest.php");
if(isset($_POST['submitbddetail']))
{
    $contactno=$_POST['search'];
    $id=$_POST['search'];
    $fname=$_POST['search'];
    $lname=$_POST['search'];
    $email=$_POST['search'];
    $bgroup=$_POST['search'];
    $query="select * from blooddoner where contactno='$contactno' or id='$id' or fname='$fname' or lname='$lname' 
    or email='$email' or bloodg='$bgroup' ";
    $result=mysqli_query($conn,$query);
    echo "
    <div>
   
<img src='400.png'>
<br>
<hr>
<br>
<div class='topnav'>
<a class='active' href='bddetail.php'>Go Back</a>
    <table>
     <tr>
     <th>id</th>
 <th>first name</th>
 <th>last name</th>
 <th>contact no</th>
 <th>email id</th>
 <th>blood grp</th>
     </tr>";

     while($row=mysqli_fetch_array($result)){$id=$row['id'];
        $fname=$row['fname'];
        $lname=$row['lname']; 
        $contactno=$row['contactno'];
        $email=$row['email'];
        $bgroup=$row['bloodg'];
        echo "<tr>
        <td>$id</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$contactno</td>
        <td>$email</td>
        <td>$bgroup</td>
    </tr>";

    }
echo "</table></div></div>";


}




?>
</body>
</html>

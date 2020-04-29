<!DOCTYPE html>
<?php include("nursephpcode.php");
?>
<html>
<head>
    <title>Nurse details</title>
    <style>
   
    .karan{
        background:url('4.jpg');
        width:100%;
        height:300px;
    }
    .topnav {
  background-color:deepskyblue;
  width:60%;
  margin:0 auto;
  
}
.topnav form {
  background-color:deepskyblue;
  width:60%;
  margin:0 auto;
  
}
h2{
  padding:25px;
  text-align:center;
  color:white;
}

    .topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  text-decoration: none;
  font-size: 17px;
 padding: 14px 16px;
}




    .nav [type=submit] {
  float: left;
  width:100px;
  height:47px;
  padding: 10px;
  margin-left: 10px;
  border: none;
  font-size: 17px;
  font-family:bold;
  background:blue;
  

}

  
.nav [type=text] {
  float: left;
  width:200px;
  height:28px;
  padding: 10px;
  margin-left: 32%;
  border: none;
  font-size: 17px;
  font-family:bold;
  background:blue;


}
    
table {
  border-collapse: collapse;
  width:60%;
  padding:0px;
  margin:0 auto;
  margin-top:25px;
  
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
tr:hover{
    background:#4CAF50;
}

.topnav a.active {
  background:blue;
}


    </style>
</head>



<body>
<div class="karan"></div>
<br>
<br>
<div class="topnav">
<h2>Nurse Details</h2>
  <a class="active" href="hmsdbms.php">Go Back</a>
</div>

<div class="nav">
<form action="nursesearch.php" method="POST">
  <input type="text" name="search" placeholder="Enter Mobileno">
  <input type="submit" name="submitnursedetail" value="Submit">
  
  </form>
  </div>
</div>
<br>
<br>

<table>
 <tr>
 <th>Nurse id</th>
 <th>Fname</th>
 <th>Lname</th>
 <th>Email</th>
 <th>Address</th>
 <th>Contact</th>
 <th>Department</th>
 </tr>


 <?php  get_nurse_detail();
?>


</table>

</body>
</html>

<!DOCTYPE html>
<?php include("bdrest.php");
?>
<html>
<head>
    <title> Blood Doner Details or bddetails</title>
    <style>
   
    .karan{
        background:url('403.jpg');
        width:100%;
        height:300px;
    }
    .topnav {
  background-color:skyblue;
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
<h2>Doner Details</h2>
  <a class="active" href="bdregistration.php">Go Back</a>
</div>

<div class="nav">
<form action="bdsearch.php" method="POST">

  <input type="text" name="search" placeholder="Enter Mobileno">
  <input type="submit" name="submitbddetail" value="Submit">
  
  </form>
  </div>
</div>
<br>
<br>

<table>
 <tr>
 <th>id</th>
 <th>first name</th>
 <th>last name</th>
 <th>contact no</th>
 <th>email id</th>
 <th>blood grp</th>
 </tr>


 <?php  get_patient_detail();
?>


</table>

</body>
</html>

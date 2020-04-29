<!DOCTYPE html>
<?php include("wardphpcode.php");
?>
<html>
<head>
    <title>ward details</title>
    <style>
   
    .karan{
        background:url('20.png');
        width:99%;
        height:240px;
        margin:10px;
    }
    .topnav {
  background-color:#ccc;
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
  color:black;
  font-size:22px;
  font-weight:bold;
  font-family:verdana;
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
  width:80%;
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
    background:#ccc;
}

.topnav a.active {
  background:blue;
}


    </style>
</head>



<body>
<div class="karan"></div>
<br>
<div class="topnav">
<h2>Add Ward Details</h2>
  <a class="active" href="hmsdbms.php">Go Back</a>
</div>

<div class="nav">
<form action="wardsearch.php" method="POST">
  <input type="text" name="wardsearch" placeholder="Enter">
  <input type="submit" name="submitwarddetail" value="Submit">

  </form>
  </div>
<br>
<br>
<table>
 <tr>
 <th>Ward Id</th>
 <th>Patient Name</th>
 <th>Doctor Name</th>
 <th>Building</th>
 <th>Floor</th>
 <th>Room No</th>
 <th>Room Type</th>
 <th>Bed No</th>
 <th>Price</th>
 </tr>
 
 <?php  get_ward_detail();
?>


</table>

</body>
</html>

<!DOCTYPE html>
<?php include("bedallotmentphpcode.php");
?>
<html>
<head>
    <title>Bed Allotmenrdetail details</title>
    <style>
   
    .karan{
        background:url('405.jpg');
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
<h2>Bed Details</h2>
  <a class="active" href="hmsdbms.php">Go Back</a>
</div>

<div class="nav">
<form action="bedallotmentsearch.php" method="POST">
  <input type="text" name="bedallotmentsearch" placeholder="Enter">
  <button type="submit" name="submitbeddetail">SUBMIT</button>

  </form>
  </div>
<br>
<br>
<table>
 <tr>
 <th>Allotment Id</th>
 <th>Bed No</th>
 <th>Patient Name</th>
 <th>Email</th>
 <th>Contact</th>
 <th>Allotment Date</th>

 </tr>


 <?php  get_bed_detail();
?>
</table>

</body>
</html>

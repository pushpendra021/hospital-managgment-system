
<!DOCTYPE html>

<?php 
include ('bdrest.php');

?>


<html>
<head>
    <title>bdregistration</title>
    <style>
    body{
        margin:0px;
        padding:0px;
        font-family:sans-serif;
        background: url('i.png');
        background-size:100% 700px;
        background-repeat:no-repeat;

    }
    *{
        box-sizing: border-box;
    }
form{
    margin-top:10px;
    width:460px;
    height:564px;
    left:53.5%;
    top:50%;
   position:absolute;
   transform: translate(-50%,-50%);
   padding:10px 10px 80px 10px;
    text-align: center;
    border:2px groove brown;
    border-radius:30px;
    background-color:blue;
    color:white;
}

.id{
    width:47%;
    outline:none;
    font-family: sans-serif;
    text-align:center;
    font-size: 20px;
    padding:10px;
    font-weight: bold;
    border:2px solid dodgerblue;
    border-radius:15px;
    

}
.ramesh{
    padding: 10px;
    font-family: sans-serif;
    font-weight:bold;
    font-size: 22px;

}
a{
    width:28%;
    height:60px;
    border:1px solid black;
    border-radius: 5px;
    background:#ccc;
    font-family: sans-serif;
    font-size: 20px;
    outline:none;
    float:left;
    text-decoration:none;

  display: block;
  color: black;
  text-align: center;
 padding: 14px 16px;



}
a:focus{
    background:blue ;
    color:white;


}

.btn{
    width:28%;
    height:60px;
    border:1px solid black;
    border-radius: 5px;
    font-family: sans-serif;
    font-size: 25px;
    background:#ccc;
    color:black;
    outline:none;
    float:right;

}
.btn:focus{
    background:blue ;
    color:white;

}
ul li{
    list-style:none;
    text-decoration:none;
}
ul li a{
    list-style:none;
    text-decoration:none;
    width:200px;
    height:70px;
    float:right;
    margin:10px;
}


  </style>
</head>
<body>

<ul>

<li><a href="bddetail.php">Doner Details</a></li>
<li><a href="#">Home</a></li>

</ul>


  <form action="bdregistration.php" method="POST">
      <br>
      <h1>Doner Registration form</h1>
      <hr>
      <br>
      <div class="ramesh">
          First Name<input class="id" type="text" name="fname" placeholder="first name" required>

      </div>
      <div class="ramesh">
          Last Name<input class="id" type="text" name="lname" placeholder="last name" required>

      </div>
     
      <div class="ramesh">
      ContactNo<input class="id" type="number" name="contactnumber" placeholder="contact number" required>
      
            </div>
            <div class="ramesh">
          Email ID <input class="id" type="text" name="emailid" placeholder="Email Id" required>

      </div>

            <div class="ramesh">
          BloodGrp<input class="id" type="text" name="bgroup" placeholder="Blood group" required>

      </div>  
        <br>   
        <a href="hmsdbms.php">GO Back</a>

        <button type="submit" class="btn" name="bregistration">submit</button>
                    
                    
  </form> 
  
</body>
</html>

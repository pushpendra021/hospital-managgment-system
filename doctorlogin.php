<!DOCTYPE html>
<html>
<head>
    <title>doctor login</title>
    <style>
    body{
        margin:0px;
        padding:0px;
        font-family:sans-serif;
        background: url(1.jpg);
        background-size:100% 800px;
        background-repeat:no-repeat;

    }
    *{
        box-sizing: border-box;
    }
form{
    width:260px;
    height:450px;
    left:53.5%;
    top:50%;
   position:absolute;
   transform: translate(-50%,-50%);
   padding:10px 10px 80px 10px;
    text-align: center;
    border:2px solid black;
    border-radius:30px;
}
img{
    width:150px;
    height:210px;
    border-radius:50%;
    margin-left:30px;
    background: deepskyblue;
}

.id{
    width:82%;
    outline:none;
    font-family: sans-serif;
    font-size: 15px;
    padding:10px;
    font-weight: bold;
    border:2px solid dodgerblue;
    border-radius:15px;

}
.ramesh{
    padding: 10px;
}
.btn{
    width:50%;
    height:50px;
    border:3px solid black;
    border-radius: 20px;
    font-family: sans-serif;
    font-size: 15px;
    background:blue;
    outline:none;

}
.btn:focus{
    background: orangered;
}



  </style>
</head>
<body>

  <form action="doctorphpcode.php" method="POST">
      <img src="2.jpg">
      <br>
      User Name :<br>
      <div class="ramesh">
          <input class="id" type="text" name="username" placeholder="user name" required>

      </div>
      Password :
      <br>
      <div class="ramesh">
            
                <input class="id" type="password" name="password" placeholder="your password" required>
      
            </div>
           
                    <button type="submit" class="btn" name="doctorsubmitlogin">submit</button>
                    
  </form> 
  
  </script>
</body>
</html>
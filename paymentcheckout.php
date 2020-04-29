<!DOCTYPE html>
<html>
<head>
    <title>Payment checkout</title>
    <style>
    body{
        margin:0px;
        padding:0px;
        background:skyblue;
    }
    *{
        box-sizing: border-box;
    }
form{
    width:300px;
    height:250px;
    left:53.5%;
    top:50%;
   position:absolute;
   transform: translate(-50%,-50%);
   padding:10px 10px 80px 10px;
    text-align: center;
    border:5px solid red;
    border-radius:30px;
    background-color:black;
}


.id{
    width:92%;
    outline:none;
    font-family: sans-serif;
    font-size: 15px;
    padding:10px;
    font-weight: bold;
    border:2px solid dodgerblue;
    border-radius:15px;
    text-align:center;

}
.ramesh{
    padding: 10px;
}
.btn{
    width:70%;
    height:60px;
    border:3px solid black;
    border-radius: 20px;
    font-family: sans-serif;
    font-size: 15px;
    background:#ccc;
    outline:none;

}
.btn:hover{
    background: orangered;
}



  </style>
</head>
<body>

  <form action="paymentphpcode.php" method="POST">
      
      <div class="ramesh">
          <input class="id" type="text" name="mobileno" placeholder="enter search" required>

      </div>
      <br>
      <div class="ramesh">
    <select  class="id" name="payment"> 
        <option value="paid">paid</option>
        <option value="paylater">pay later</option>
        
    </select>
</div>            
<!-- <br>
<div class="ramesh">
             <input   class="id" type="text" name="dater" placeholder="Payment Update Date">
             </div>
             <br>
       -->
                    <button type="submit" class="btn" name="update"><h3>UPDATE<h3></button>
                    
  </form> 
  
  </div>
</body>
</html>
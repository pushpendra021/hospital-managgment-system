<!DOCTYPE html>
<html>
<head>
    <title>Add Appointment or Admin-Pannel</title>
    <style>
    body{

        margin:0px;
        padding:0px;
        font-family:sans-serif;
        background: url(1.jpg);
        background-size:800px 900px;
        background-repeat:no-repeat;

    
    }
    .o{
        background-color:blue;
        padding:15px;
        color:white;
    }

    form{
        width:500px;
        height:630px;
        border:2px groove red;
        position: absolute;
        left: 50%;
        top:50%;
        transform: translate(-50%,-50%);
        padding:10px 10px 80px 10px;
        text-align: center;
        border-radius: 20px;
        margin:10px;

    }
    
    .d{
        font-size:22px;
        font-family:sans-serif;
        font-weight: bold;
        padding:5px;
        
        border-radius: 4px;
 }
 .t{
    width:65%;
    outline:none;
    font-family: sans-serif;
    font-size: 22px;
    padding:10px;
    font-weight: bold;
    border:2px solid dodgerblue;
    border-radius:20px;
    text-align: center;
 }
 
.btn{
    width:42%;
    height:50px;
    border:3px solid dodgerblue;
    border-radius: 209px;
    margin:15px;
    outline:none;

}
.btn:focus{
    background: orangered;
}

    </style>
</head>
<body>
<img src="1.jpg">
    <form action="ram.php" method="POST">
        <h1 class="o">Add Appointment</h1>
        <hr>
        <br>
       
        <br>
        <div class="d">
                Patient
             <input class="t" type="text" name="patient" placeholder="Name of Patient" required>
             </div>
             <br>
             <div class="d">
                MobileNo
             <input class="t" type="number" name="mobileno" placeholder="mobile no" required>
             </div>
             <br>
            
      <div class="d">
      EmailId
          <input class="t" type="text" name="emailid" placeholder="EmailId" required>

      </div>
      <br>
            
             <div class="d">
    Dr.Name
    <select  class="t" name="doctor"> 
        <option value="Dr.Rajesh Kumar">Dr.Rajesh Kumar</option>
        <option value="Dr.Durgesh Singh">Dr.Durgesh Singh</option>
        <option value="Dr.Meera Sha">Dr.Meera Sha</option>
        <option value="Dr.Swati Mishra">Dr.Swati Mishra</option>
        <option value="Dr.Kalpna Kaur">Dr.Kalpna Kaur</option>
        <option value="Dr.Akhilesh Singh">Dr.Akhilesh Singh</option>
        
        <option value="other">Other</option>
    </select>
</div>            
<br>
             


             <div class="d">
    Payment
    <select  class="t" name="payment"> 
        <option value="paid">paid</option>
        <option value="pay later">pay later</option>
        
    </select>
</div>            
<br>
<div class="d">
             Date
             <input   class="t" type="text" name="dater" placeholder="allotmentdate">
             </div>
             <br>
                                   
             <button type="submit" class="btn" name="adminsubmit">Add Appointment</button>
    </form>
    
</body>
</html>



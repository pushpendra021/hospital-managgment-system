<!DOCTYPE html>
<html>
<head>
    <title>Bed Allotment</title>
    <style>
    body{
        background:url('36.jpg') no-repeat;
        background-size:100% 300px;
        
    }

    form{

        width:500px;
        height:500px;
        background-color:red;
        border:5px solid rgb(221, 181, 49);
        position: absolute;
        left: 50%;
        top:75%;
        transform: translate(-50%,-50%);
        padding:10px 10px 80px 10px;
        text-align: center;
        border-radius: 40px;
        margin:20px;

    }
    
    .d{
        font-size:22px;
        font-family:sans-serif;
        font-weight: bold;
        padding:5px;
        border-radius: 10px;
 }
 .t{
    width:65%;
    outline:none;
    font-family: sans-serif;
    font-size: 22px;
    padding:10px;
    font-weight: bold;
    border:2px solid dodgerblue;
    border-radius:50px;
    text-align: center;
 }
 
.btn{
    width:32%;
    height:50px;
    border:3px solid dodgerblue;
    border-radius: 10px;
    padding:15px;
    outline:none;
    font-size:20px;
    font-weight:bold;

}
.btn:hover{
    background: blue;
    color:white;
}

    </style>
</head>
<body>
    <form action="bedallotmentphpcode.php" method="POST">
        <h1>Add Bed Allotment</h1>
        <hr>
        <div class="d">
           Bed Number
        <input class="t" type="number" name="bedno" placeholder="Bed Number" required>
        </div>
        <br>
        <div class="d">
                Patient Name
             <input class="t" type="text" name="Patientname" placeholder="Name of Patient" required>
             </div>
             <br>

             <div class="d">
                Email Id : 
             <input class="t" type="text" name="email" placeholder="Email Id" required>
             </div>
             <br>


             <div class="d">
                Contact No
             <input class="t" type="number" name="contact" placeholder="Contact No" required>
             </div>
             <br>

             <div class="d">
             AlltmentDate
             <input   class="t" type="dater" name="dater" placeholder="Allotment Date" required>
             </div>
             <br>
                        
                             <button class="btn" type="submit" name="bedallotmentsubmit">SUBMIT</button> 
            
    </form>
    
</body>
</html>
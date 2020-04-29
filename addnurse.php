<!DOCTYPE html>
<html>
<head>
    <title>Add Nurse</title>
    <style>
    body{
        
        background:url('doctorimage/21.jpg') no-repeat;
    }

    form{
        width:420px;
        height:690px;
        background-color: white;
        box-shadow:5px 10px 15px rgba(12, 244, 4, 0.801);
        position: absolute;
        left: 50%;
        top:50%;
        transform: translate(-50%,-50%);
        padding:10px 10px 80px 10px;
        text-align: center;
        border-radius: 40px;
        margin:20px;

    }
    img{
        width:140px;
        height: 190px;
        border-radius: 50%;
        margin-left: 20px;
    margin-bottom: 20px;
        background-color:rgb(42, 8, 235);
    }
    .d{
        font-size:22px;
        font-family:sans-serif;
        font-weight: bold;
        padding:5px;
        background: white;
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
    width:35%;
    height:50px;
    border:2px solid black;
    border-radius:10px;
    margin:15px;
    outline:none;
    float:right;
    color:white;
    background:blue;
    font-size:22px;
    font-weight:bold;

}
.btn:focus{
    background:skyblue;
}

    </style>
</head>
<body>
    <form action="nursephpcode.php" method="POST">
        <img src="w.png">
        <h1>Add Nurse</h1>
        <hr>
        <br>
        <div class="d">
           Fname :
        <input class="t" type="text" name="fname" placeholder="First Name" required>
        </div>
        <div class="d">
           Lname :
        <input class="t" type="text" name="lname" placeholder="Last Name" required>
        </div>

        <div class="d">
                Email    :
             <input class="t" type="text" name="email" placeholder="Email id" required>
             </div>


                 <div class="d">
                        Address
                     <input class="t" type="address" name="address" placeholder="Address" required>
                     </div>

                     <div class="d">
                            contact
                         <input class="t" type="Number" name="contact" placeholder="Contact No" required>
                         </div>
                         <div class="d">
                            depart :
                         <input class="t" type="text" name="department" placeholder="Department Name" required>
                         </div>

                         
                             
                             <button class="btn" name="addsubmit" value="Add">SAVE</button>
    </form>
    
</body>
</html>
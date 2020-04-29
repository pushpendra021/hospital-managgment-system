<!DOCTYPE html>
<html>
<head>
    <title>Add Doctor</title>
    <style>
    body{
        padding:0px;
        margin:0px;
        background:url('doctorimage/13.jpg');
    }

    form{
        width:400px;
        height:610px;
        background:whitesmoke;
        box-shadow:5px 10px 15px rgb(18, 218, 191);
        position: absolute;
        left: 50%;
        top:50%;
        transform: translate(-50%,-50%);
        padding:10px 10px 80px 10px;
        text-align: center;
        border-radius: 40px;

    }
    img{
        width:150px;
        height: 210px;
        border-radius: 50%;
        margin-left: 20px;
    margin-bottom: 20px;
        background-color:deepskyblue;
    }
    .d{
        font-size:22px;
        font-family:sans-serif;
        font-weight: bold;
        padding:5px;
        background:whitesmoke;
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
    border-radius:10px;
    text-align: center;
 }
 
.btn{
    width:30%;
    height:50px;
    border:3px solid dodgerblue;
    border-radius: 7px;
    outline:none;

}
.btn:focus{
    background: blue;
}

    </style>
</head>
<body>
    <form action="doctorphpcode.php" method="POST">
        <img src="z.jpg">
        <div class="d">
           Fname
        <input class="t" type="text" name="fname" placeholder="First Name" required>
        </div>
        <div class="d">
           Lname
        <input class="t" type="text" name="lname" placeholder="Last Name" required>
        </div>

        <div class="d">
                Email
             <input class="t" type="text" name="email" placeholder="Email id" required>
             </div>

             

                 <div class="d">
                        Address
                     <input class="t" type="address" name="address" placeholder="Address" required>
                     </div>

                     <div class="d">
                            Contact
                         <input class="t" type="Number" name="contact" placeholder="Contact No" required>
                         </div>

                         <div class="d">
                                Dept  :
                             <input class="t" type="text" name="department" placeholder="Department Name" required>
                             </div>
                             
                             <button name="addsubmit" class="btn" value="login">Save</button>
    </form>
    
</body>
</html>
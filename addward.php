<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Add Ward</title>
    <style>
    body{
        background:url('33.jpg') no-repeat;
    }
         form{
            width:500px; 
            height:700px;
            box-shadow: 5px 10px 15px hsl(115, 91%, 50%);
            background:#cdd;
            position: absolute;
        left: 80%;
        top:50%;
        transform: translate(-50%,-50%);
        padding:10px 10px 80px 10px;
        margin-top:10px;
        text-align: center;
        border-radius: 40px;
        }


        .p{ 
            font-size:20px;
            font-family: sans-serif;
            font-weight:bold;
            margin:10px;
            padding:10px;
            width:55%;
            text-align:center;

        }
.karan{
   font-size:25px;
   font-family:sans-sarif;
   font-weight:bold; 
}

        .q{
            margin:10px;
            width:40%;
            height:50px;
            text-align:center;
            float:left;
            border-radius: 20px;
            
            }

            .q:hover{
                background:rgba(243, 13, 44, 0.432);
                border-radius: 30%;
            }

 .btn{
            width:40%;
            height:60px;
            text-align:center;
            float:right;
            border-radius: 20px;
            background:blue;
            color:white;
            font-size:24px;
            font-family:sans-serif;
            font-weight:bold;
            
     }

    .btn:hover{
                background:rgba(243, 13, 44, 0.9);
                border-radius: 30%;
            }


    </style>
    
    </style>
</head>
<body>

    <form action="wardphpcode.php" method="POST">
        <h1>Add Ward</h1>
        <hr>
        <div class="karan">
            Building
            <select  class="p" name="building"> 
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="Other">Other</option>
                </select>
        </div>
       <br> 
<div class="karan">
 Patientname
    <input  class="p" type="text" name="patientname" placeholder="Patient Name" required>
</div>
 <br>
 <div class="karan">
    DoctorApp
    <select  class="p" name="doctorname"> 
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
 <div class="karan">
Floor
<select  class="p" name="floor"> 
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="Other">Other</option>
    </select>
</div>
<br>

<div class="karan">
 RoomNo
    <input  class="p" type="Number" name="room" placeholder="Patint Room no" required>
</div>
<br>
<div class="karan">
RoomType
<input type="radio" name="roomtype" value="Normal">Normal
<input type="radio" name="roomtype" value="Medium">Medium
<input type="radio" name="roomtype" value="VIP">VIP
</div>
<br>
<div class="karan">
BedNo
<input  class="p" type="Number" name="bed" placeholder="Number Of Bed" required>
</div>
<br>
<div class="karan">
price
 <input  class="p" type="number" name="price" placeholder="Payment unit" required>
</div>

<button class="btn" name="submit" value="Add">SAVE</button>

 </form>   
</body>
</html>
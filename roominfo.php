<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Room information</title>
    <style>
    body{
        background:url('35.jpg') no-repeat;
        background-size:800px 750px;
    }
         form{
            width:500px; 
            height:300px;
            box-shadow: 5px 10px 15px rgb(61, 245, 245);
            position: absolute;
        left: 70%;
        top:50%;
        transform: translate(-50%,-50%);
        padding:10px 10px 80px 10px;
        margin-top:10px;
        text-align: center;
        border-radius: 40px;
        background:blue;
        color:white;
        }
        .p{ 
            font-size:25px;
            font-family: sans-serif;
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
            font-size:20px;
            font-family: sans-serif;
            font-weight: bold;
            padding:10px;
            width:40%;
            height:70px;
            text-align:center;
            float:right;
            border-radius: 7px;
            background:black;
            color:white;
            
            }

            .q:hover{
                background:rgb(218, 221, 31);
                border-radius: 10px;
                color:black;
            }
    </style>
    
    </style>
</head>
<body>
    <form>
        <h1>InPut</h1>
        <hr>
        <div class="karan">
            Building
            <select  class="p" name="Building"> 
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="Other">Other</option>
                </select>
            </div>
 <br>
<div class="karan">
 RoomNo
    <input  class="p" type="Number" name=" Room" placeholder="Patint Room no" required>
</div>
<br>
<div class="karan">
RoomType
<select  class="p" name="RoomType"> 
        <option value="Normal">Normal</option>
        <option value="Medium">Medium</option>
        <option value="VIP">VIP</option>
    </select>
</div>
      <br>

 <button class="q" value="login">SHOW DETAILS</button>


        
    </form>
    
</body>
</html>
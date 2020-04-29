<!DOCTYPE html>
<html>
<head>
    <title>Notice Admin</title>
    <style>
    body{

        margin:0px;
        padding:0px;
        font-family:sans-serif;
        background: url('23.jpg');
        background-size:2000px 800px;
        background-repeat:no-repeat;

    
    }
    .o{
        background-color:black;
        padding:15px;
        color:white;
    }

    form{
        width:500px;
        height:350px;
        border:5px groove darkblue;
        position: absolute;
        left: 50%;
        top:50%;
        transform: translate(-50%,-50%);
        padding:10px 10px 80px 10px;
        text-align: center;
        border-radius: 20px;
        margin:10px;

    }  
 
.btn{
    width:30%;
    height:50px;
    border:3px solid black;
    margin:1px;
    outline:none;
    text-align:center;
    float:right;
    margin-top:30px;
    font-size:20px;
    border-radius:5px;

}
.btn:focus{
    background:blue;
}
legend{
    color:white;
}
fieldset [placeholder=Your_Noticeboard]{
    width:350px;
    height:100px;
    font-family: sans-serif;
    font-size: 22px;
    font-weight:normal;
    text-align:center;
    border:2px solid black;
    color:black;
}
legend{
    background:black;
}


  </style>

</head>

<body>
<script type="text/javascript">
function x()
{
    alert("You want to add the message");
}
</script>


    <form action="noticephpcode.php" method="POST">
    
        <h1 class="o"> Add Notice </h1>
        <hr>
       <fieldset>
                <legend><h1>NOTICE BOARD</h1></legend>
                <input type="text" name="noticeboard" placeholder="Your_Noticeboard">
                </fieldset>

                                   
             <button onclick="x()" type="submit" class="btn" name="addnotice">submit</button>

    </form> 
</body>
</html>



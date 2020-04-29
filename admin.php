<!DOCTYPE html>
<html lang="en">
<head>
<title>dbms or Admin</title>
<style>

body{
    margin-top:5px;
    padding:0px;
    background:#ccc;
}

h1{
    font-size:40px;
    font-family:sans-serif;
    text-align: center;
    text-shadow: 0px 5px 10px tomato;
    background-color: black;
    color:white;

}

.nav{
    width:100%;
    height:80px;
    background:black;
}

ul{
    list-style:none;
    padding:0px;
    margin:0px;
    position: absolute;
}

ul li{
    float:left;
    margin:0px;
    padding:5px;
}

ul li a{
    width:200px;
    height:50px;
    color:white;
    display:block;
    text-decoration: none;
    font-size:25px;
    text-align:center;
    padding:15px;
    font-family:sans-serif;
    font-weight:bold;
    text-transform:capitalize;

            
}
a:hover{
    background:rgb(33, 209, 165);
}
ul li ul {
    background: tomato;
}
ul li ul li {
    float:none;
}
ul li ul{
    display:none;
}
ul li:hover ul{
    display:block;
    border-radius:7px;
}


#hospital{
    width:1510px;
    height:490px;
    
    background:url("doctorimage/3.jpg");
    animation-name:wap;
    animation-duration:50s;
    animation-timing-function:linear;
    animation-iteration-count: infinite;

 }


 @keyframes wap{
    6%{background:url("doctorimage/3.jpg"); background-repeat:repeat;}
    16%{background:url("doctorimage/2.jpg");  background-repeat:repeat;}
    26%{background:url("doctorimage/4.jpg");  background-repeat:repeat;}
    36%{background:url("doctorimage/5.jpg");  background-repeat:repeat;}
    46%{background:url("doctorimage/6.jpg");  background-repeat:repeat;}
    56%{background:url("doctorimage/7.jpg");  background-repeat:repeat;}
    66%{background:url("doctorimage/8.jpg");  background-repeat:repeat;}
    76%{background:url("doctorimage/9.jpg");  background-repeat:repeat;}
    86%{background:url("doctorimage/10.jpg");  background-repeat:repeat;}
    100%{background:url("doctorimage/1.jpg");  background-repeat:repeat;}
    
}

table{
    width:98%;
    margin:0 auto;
    border-collapse:collapse;
}


img{
    width:150px;
    height:210px;

    border-radius:50%;
    background: deepskyblue;
    margin-left:165px;
    
}
td{
    background:#fff;
}
h3{
    text-align:center;
}

.hitman{
    width:98%;
    height:750px;
    background:skyblue;
}

h2{
    color:white;
    font-size:20px;
    text-align:center;
    padding:0px;
}
nav{
    font-size:15px;
    text-align:center;

}

</style>
 
    </head>
<body>
        <h1><marquee behavior="alternate" scrollamount="30px">ADMIN SESSION.</marquee></h1>
    
<div class="nav">
    <ul>
            
    
            <li><a href="project.php">HOME</a> </li>
           
           
            <li><a href="#">DOCTOR</a>
            
                <ul>
                        <li><a href="doctorlogin.php">ADD DOCTOR </a></li>
                        <li><a href="nurselogin.php">ADD NURSE</a></li>
                        
                </ul>
            
            </li>
            <li><a href="#">PATIENT APPOINTMENT</a> 
            <ul>
                        <li><a href="login.php">ADD APPOINMENTA</a>
                        
            </ul>
            </li>
            <li><a href="#">NOTICE BOARD</a> 
            <ul>
                        <li><a href="noticelogin.php">ADD NOTICE</a></li>
                        
            </ul>
            
        </li>
            <li>
                <a href="#">DONERS</a>
                <ul>
                        <li><a href="bdregistration.php">BLOOD DONER</a></li>
                        <li><a href="odregistration.php">ORGANS DONER</a></li>        
                </ul>
            
       </li>
       <li>
                <a href="#">ROOM</a>
                <ul>
                        
                        <li><a href="wardlogin.php">ADD NEW WARD</a></li>
                        <li><a href="bedallotmentlogin.php">ADD BED ALLOTMENT</a></li>

                    
                            
                    </ul>
            
            </li>

           
</div>
<br>

<div id="hospital"></div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Project</title>

    <style>

  .hospital{
    width:1500px;
    height:630px;
    background:url("sk/a.jpg") no-repeat;
    margin:140px auto;
    animation-name:pk;
    animation-duration:15s;
    animation-iteration-count: infinite;
    padding:10px;
    margin-top:25px;
 }

@keyframes pk{
    10%{background:url("sk/a.jpg"); background-size:1500px 630px;}
    15%{background:url("sk/bb.jpg"); background-size:1500px 630px;}
    18%{background:url("sk/bbb.jpg"); background-size:1500px 630px;}
    22%{background:url("sk/ccc.jpg"); background-size:1500px 630px;}
    32%{background:url("sk/ddd.jpg"); background-size:1500px 630px;}
    38%{background:url("sk/eee.jpg"); background-size:1500px 630px;}
    45%{background:url("sk/fff.jpg"); background-size:1500px 630px;}
    50%{background:url("sk/ggg.jpg"); background-size:1500px 630px;}
    55%{background:url("sk/aa.jpg"); background-size:1500px 630px;}
    60%{background:url("sk/dd.jpg"); background-size:1500px 630px;}
    65%{background:url("sk/ee.jpg"); background-size:1500px 630px;}
    70%{background:url("sk/jj.jpg"); background-size:1500px 630px;}
    75%{background:url("sk/hh.webp"); background-size:1500px 630px;}
    80%{background:url("sk/ii.jpg"); background-size:1500px 630px;}
    90%{background:url("sk/e.jpg"); background-size:1500px 630px;}
    95%{background:url("sk/f.jpg"); background-size:1500px 630px;}
    100%{background:url("sk/kk.jpg"); background-size:1500px 630px;}
}
  
    

h1{
    font-size:40px;
    font-family:sans-serif;
    text-align: center;
    text-shadow: 0px 3px 8px red;
    background-color: #ccc;

}


.nav{
    
    background:hsl(253, 86%, 53%);
    padding:0px;
    margin:0px;
    border-radius:50%;
    
}

ul{
    list-style:none;
    padding:0px;
    margin:0 auto;
}

ul li{
    margin:0px;
    padding:5px;
}

ul li a{
    width:140px;
    height:50px;
    color:white;
    display:block;
    text-decoration: none;
    font-size:35px;
    text-align:center;
    padding:10px;
    font-family:sans-serif;
    font-weight:bold;
    text-transform:capitalize;
    border-radius:10px;
    background-color:#(20, 230, 83);
    margin-top:0px;
    margin-left:23%;
            
}
a:hover{
    background:tomato;
}
table{
    width:700px;
    height:400px;
    margin:0 auto;

}
.karan{
        background:url('pk.png');
        background-size: 350px 500px;
        background-repeat:no-repeat;
    height:500px;
    border-radius:50%;

    }

    
.pk{
    width:125px;
    height:225px;
    margin:0 auto;
    background:hsl(253, 86%, 53%);
    border:12px solid white;
    border-radius:50%;
}

.rk{
    width:50%;
    height:400px;
    margin:0 auto;
    border:12px solid white;
    border-radius:50%;
}


.hitman{
    width:100%;
    height:420px;
    background:skyblue;
}
h2{
    color:white;
    font-size:20px;
    margin-left:100px;
    padding:0px;
}
nav{
    font-size:15px;
    margin-left:100px;

}
.pp{
    font-size:20px;
    text-align:left;
    margin-left:100px;
    font-family:sans-serif;
    font-weight:bold;
    color:white;
}
.kk{
    font-size:20px;
    margin-right:100px;
    text-align:right;
    font-family:verdana;
    font-weight:bold;
    color:white;
}

.suraj{
    width:100%;
    height:200px;
    font-size:20px;
    font-family:verdana;
    font-weight:bold;
    background:skyblue;
}
.jj{
    font-size:20px;
    text-align:left;
    margin-left:100px;
    font-family:sans-serif;
    font-weight:bold;
    color:black;
}

    </style>


</head>
<body>
    <h1><marquee behavior="alternate" scrollamount="35px">HOSPITAL MANAGMENT SYSTEM</marquee></h1>
    
 <div class="hospital">
     <table>
         <tr>
             <td class="pk">
        
             <div class="nav">
              <ul>
                <li><a href="doctor.php">Doctor</a></li>
                <li><a href="hmsdbms.php">Patient</a></li>
                <li><a href="admin.php">Admin</a></li>
              </ul>
            </td>

                <td class="rk">

                        <div class="karan"></div>
                </td>
            </div>
            <tr>
     </table>
 </div> 
 <div class="hitman">
 <br>
 <h2>OPENNING HOURS</h2>
 <nav>Hospital Center</nav>
 <hr>
 <h3 class="pp">MONDAY-FRIDAY</h3>
 <h3 class="kk">3:00-23:30</h3>
 <hr>
 <h3 class="pp">SATURDAY</h3>
 <h3 class="kk">5:00-23:30</h3>
 <hr>
 <h3 class="pp">SUNDAY</h3>
 <h3 class="kk">6:30-23:30</h3>

 </div> 
 <div class="suraj">
 <hr>
 <h2 class="jj">HelpLine no.<br>
 8318616798</h2>
 <hr>
 <h2 class="jj">
 Emergency no<br>
 8350873726
 </h2>
 </div>

</body>
</html>
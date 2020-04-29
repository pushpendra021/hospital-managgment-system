<!DOCTYPE html>
<html lang="en">
<head>
<title>patient or doctor</title>
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
    background:blue;
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
    font-size:22px;
    text-align:center;
    padding:15px;
    font-family:sans-serif;
    font-weight:bold;
    text-transform:capitalize;

            
}
a:hover{
    background:black;
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
    margin-right:50px;
   margin-top:20px;
    text-align:right;
    font-family:verdana;
    font-weight:bold;
    color:white;
}



</style>
 
    </head>
<body>
        <h1><marquee behavior="alternate" scrollamount="30px">doctor related information.</marquee></h1>
    
<div class="nav">
    <ul>
            
    
         <li><a href="project.php">HOME</a> </li>
        
           
            <li><a href="#">DEPARTMENT</a>
            
                <ul>
                <li><a href="#">UROLOGY</a></li>
                <li><a href="#">PEDIATRICS</a></li>
                    
                <li><a href="#">PSYCHIATRICS</a></li>
                <li><a href="#">PLASTIC SURGERY</a></li>
                <li><a href="#">NEUROSURGERY</a></li>
                <li><a href="#">NEURORADIOLOGY</a></li>
                <li><a href="#">RADIOLOGIST</a></li>
                        
                <li><a href="#">CARDIOLOGIST</a></li>
                <li><a href="#">DENTIST</a></li>
                <li><a href="#">GYNECOLOGIST</a></li>
                <li><a href="#">ORTHOPEDIC SURGEON</a></li>
                <li><a href="#">ENT SPECIALIST</a></li>
                        
                    </ul>
            
            </li>
           
            <li>
                <a href="#">DOCTOR</a>
                <ul>
                        <li><a href="doctordetail.php">DOCTOR INFORMSTION</a></li>
                        <li><a href="nursedetail.php">NURSE INFORMATION</a></li>
                    
                            
                    </ul>
            
            </li>
            <li>
                <a href="#">DONERS DETAILS</a>
                <ul>
                        <li><a href="bddetail.php">BLOOD DONER'S DETAIL</a></li>
                        <li><a href="oddetail.php">ORGANS DONER DETAIL</a></li>
                    
                            
                    </ul>
            
            </li>

            <li><a href="patientdetail.php">APPOINTMENT PATIENT DETAILS</a> </li>
            <li><a href="noticedetail.php">NOTICE BOARD DETAILS</a> </li>

</div>
<br>

<div id="hospital"></div>
<br>
<br>
<br>
<table>
<tr>
<td> <img src="doctorimage/12.jpg">
<h3>Dr.Rajesh Kumar</h3>
<center>
<h3>ENT SPECIALIST</h3>
Lorem ipsum dolor sit amet,consectetur<br>
adipisicing elit. Recu nisi nostrum sunt cum,consequuntur.
</center>
</td>

<td> <img src="doctorimage/13.jpg">
<h3>Dr.Durgesh Singh</h3>
<center>
<h3>ORTHOPEDIC SURGEON</h3>
Lorem ipsum dolor sit amet,consectetur<br>
adipisicing elit. Recu nisi nostrum sunt cum,consequuntur.
</center>
</td>

<td> <img src="doctorimage/14.jpg">
<h3>Dr.Meera Sha</h3>
<center>
<h3>GYNECOLOGIST</h3>
Lorem ipsum dolor sit amet,consectetur<br>
adipisicing elit. Recu nisi nostrum sunt cum,consequuntur.
</center>
</td>
</tr>
<tr>
<td> <img src="doctorimage/15.jpg">
<h3>Dr.Swati Misra</h3>
<center>
<h3>DENTIST</h3>
Lorem ipsum dolor sit amet,consectetur<br>
adipisicing elit. Recu nisi nostrum sunt cum,consequuntur.
</center>
</td>


<td> <img src="doctorimage/16.jpg">
<h3>Dr.Kalpna Kaur</h3>
<center>
<h3>CARDIOLOGIST</h3>
Lorem ipsum dolor sit amet,consectetur<br>
adipisicing elit. Recu nisi nostrum sunt cum,consequuntur.
</center>
</td>

<td> <img src="doctorimage/17.jpg">
<h3>Dr.Akhilesh Singh</h3>
<center>
<h3>RADIOLOGIST</h3>
Lorem ipsum dolor sit amet,consectetur<br>
adipisicing elit. Recu nisi nostrum sunt cum,consequuntur.
</center>
</td>

</tr>
</table>
<br>
<br>
<div class="hitman">
 <br>
 <h2>MEETING TIME OF DOCTORS</h2>
 <nav>In hospital</nav>
 <hr>
 <h3 class="pp">Dr.Rajesh Kumar</h3>
 <h3 class="kk">3:00-5:00</h3>
 <hr>
 <h3 class="pp">Dr.Durgesh Singh</h3>
 <h3 class="kk">5:00-8:00</h3>
 <hr>
 <h3 class="pp">Dr.Meera Sha</h3>
 <h3 class="kk">8:00-13:00</h3>
 <hr>
 <h3 class="pp">Dr.Swati Mishra</h3>
 <h3 class="kk">13:00-17:00</h3>
 <hr>
 <h3 class="pp">Dr.Kalpna Kaur</h3>
 <h3 class="kk">17:00-21:00</h3>
 <hr>
 <h3 class="pp">Dr.Akhilesh Singh</h3>
 <h3 class="kk">21:00-23:30</h3>

 </div> 

</body>
</html>

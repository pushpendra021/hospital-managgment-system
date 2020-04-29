<?php 
$conn = mysqli_connect("localhost","root","","hdbms");
 if(isset($_POST['submitlogin']))
 {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from wardlogin where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        header("location:addward.php");
    }
    else
    {
        echo "<script>alert('Enter correct detail')</script>";
        echo "<script>window.open('wardlogin.php')</script>";
    }
}


if(isset($_POST['submit']))
{
    
    $building=$_POST['building']; 
    $patientname=$_POST['patientname'];
    $doctorname=$_POST['doctorname'];
    $floor=$_POST['floor'];
    $roomno=$_POST['room'];
    $roomtype=$_POST['roomtype'];
    $bedno=$_POST['bed'];
    $price=$_POST['price'];
    
    $query="INSERT INTO addward(building,patientname,doctorname,floor,roomno,roomtype,bedno,price) 
    VALUES ('".$building."','".$patientname."','".$doctorname."','".$floor."','".$roomno."','".$roomtype."','".$bedno."','".$price."')";
    $result=mysqli_query($conn,$query);
    if(!$result)
    {
        echo "<script>alert('Ward are not Registered');</script>";
       
    }
    else
       {
        
        //echo "<script>alert('thank you')</script>";
        
        header('location:addward.php');
        // echo "<script>window.open('admin-panel.php');</script>";
    } 


}


function get_ward_detail(){
    global $conn;
    $query="select * from addward";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){$wardid=$row['wardid'];
        $patientname=$row['patientname']; 
        $doctorname=$row['doctorname'];
        $building=$row['building'];
        $floor=$row['floor'];
        $roomno=$row['roomno']; 
        $roomtype=$row['roomtype'];
        $bedno=$row['bedno'];
        $price=$row['price'];
        echo "<tr>
        <td>$wardid</td>
        <td>$patientname</td>
        <td>$doctorname</td>
        <td>$building</td>
        <td>$floor</td>
        <td>$roomno</td>
        <td>$roomtype</td>
        <td>$bedno</td>
        <td>$price</td>
    </tr>";

    }
}


?>
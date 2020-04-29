<?php 
$conn = mysqli_connect("localhost","root","","hdbms");
 if(isset($_POST['doctorsubmitlogin']))
 {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from doctorlogin where userdoctor='$username' and passworddoctor='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        header("location:adddoctor.php");
    }
    else
    {
        echo "<script>alert('Enter correct detail')</script>";
        echo "<script>window.open('doctorlogin.php')</script>";
    }
}

if(isset($_POST['addsubmit']))
{
    
    $fname=$_POST['fname']; 
    $lname=$_POST['lname'];
    $email=$_POST['email']; 
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $department=$_POST['department'];
    $query="INSERT INTO doctoradd(fname,lname,email,addresses,contact,dept) VALUES
     ('".$fname."','".$lname."','".$email."','".$address."','".$contact."','".$department."')";
    $result=mysqli_query($conn,$query);
    if(!$result)
    {
        echo "<script>alert('You Want to Registered');</script>";
       
    }
    else
       {
        
        //echo "<script>alert('thank you')</script>";
        
        header('location:adddoctor.php');
        // echo "<script>window.open('admin-panel.php');</script>";
    } 


}

function get_doctor_detail(){
    global $conn;
    $query="select * from doctoradd";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){$doctorid=$row['drid'];
        $fname=$row['fname']; 
        $lname=$row['lname'];
        $email=$row['email'];
        $address=$row['addresses'];
        $contact=$row['contact'];
        $department=$row['dept'];
        echo "<tr>
        <td>$doctorid</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$address</td>
        <td>$contact</td>
        <td>$department</td>
    </tr>";

    }
}

?>

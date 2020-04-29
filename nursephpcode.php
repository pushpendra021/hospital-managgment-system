<?php 
$conn = mysqli_connect("localhost","root","","hdbms");
 if(isset($_POST['nursesubmitlogin']))
 {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from nurselogin where usernurse='$username' and passwordnurse='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        header("location:addnurse.php");
    }
    else
    {
        echo "<script>alert('Enter correct detail')</script>";
        echo "<script>window.open('nurselogin.php')</script>";
    }
}

if(isset($_POST['addsubmit']))
{
    
    $fname=$_POST['fname']; 
    $lname=$_POST['lname'];
    $email=$_POST['email']; 
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $depart=$_POST['department'];
    $query="INSERT INTO nurseadd(fname,lname,email,addresses,contact,dept) VALUES
     ('".$fname."','".$lname."','".$email."','".$address."','".$contact."','".$depart."')";
    $result=mysqli_query($conn,$query);
    if(!$result)
    {
        echo "<script>alert('You Want to Registered');</script>";
       
    }
    else
       {
        
        //echo "<script>alert('thank you')</script>";
        
        header('location:addnurse.php');
        // echo "<script>window.open('admin-panel.php');</script>";
    } 


}

function get_nurse_detail(){
    global $conn;
    $query="select * from nurseadd";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){$nurseid=$row['nrid'];
        $fname=$row['fname']; 
        $lname=$row['lname'];
        $email=$row['email'];
        $address=$row['addresses'];
        $contact=$row['contact'];
        $depart=$row['dept'];
        echo "<tr>
        <td>$nurseid</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$address</td>
        <td>$contact</td>
        <td>$depart</td>
    </tr>";

    }
}

?>


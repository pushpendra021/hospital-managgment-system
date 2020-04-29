<?php 

$conn = mysqli_connect("localhost","root","","hdbms");
 if(isset($_POST['submitlogin']))
 {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from login where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        header("location:admin-panel.php");
    }
    else
    {
        echo "<script>alert('ERROR')</script>";
        
        
    }
}

if(isset($_POST['update']))
{
    
     
    $mobileno=$_POST['mobileno'];
    $payment=$_POST['payment'];
    
  // $dater=$_POST['dater'];

    $query= "UPDATE doctorapp SET payment='$payment' WHERE mobileno='$mobileno'";
    $result=mysqli_query($conn,$query);
    if($result)
    header("location:update.php");
    

}
?>
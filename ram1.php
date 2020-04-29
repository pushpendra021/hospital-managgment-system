
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
        echo "<script>alert('Enter correct detail')</script>";
        echo "<script>window.open('login.php')</script>";
        
    }
}

?>
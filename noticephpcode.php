<?php 
$conn = mysqli_connect("localhost","root","","hdbms");
 if(isset($_POST['submitlogin']))
 {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from noticelogin where user='$username' and pass='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        header("location:noticeadmin.php");
    }
    else
    {
        echo "<script>alert('Enter correct detail')</script>";
        echo "<script>window.open('noticelogin.php')</script>";
    }
}


if(isset($_POST['addnotice']))
{
    $notice=$_POST['noticeboard']; 
   
    $query="INSERT INTO noticeadd(notice) VALUES ('".$notice."')";
   $result=mysqli_query($conn,$query);
    
   if(!$result)
   {
       echo "<script>alert('Notice not Registered');</script>";
      // header("location:admin-panel.php");
   }
   else
      {
      
          header("location:noticeadmin.php");
     // echo "<script>window.open('admin-panel.php');</script>";
   }


  
}
function get_notice_detail()
{
    global $conn;
    $query="select * from noticeadd";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result))
    
    {

        $notice_no=$row['noticeid'];
        $notice=$row['notice'];
        
        echo "<tr>
        <td>$notice_no</td>
        <td>$notice</td>
        
      </tr>";
    }

}

?>
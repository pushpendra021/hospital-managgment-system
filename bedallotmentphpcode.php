<?php 
$conn = mysqli_connect("localhost","root","","hdbms");
 if(isset($_POST['submitlogin']))
 {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from bedallotmentlogin where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        header("location:bedallotment.php");
    }
    else
    {
        echo "<script>alert('Enter correct detail')</script>";
        echo "<script>window.open('bedallotmentlogin.php')</script>";
    }
  }



 if(isset($_POST['bedallotmentsubmit']))
 {
    $bedno=$_POST['bedno']; 
    $patientname=$_POST['Patientname']; 
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $dater=$_POST['dater'];
   
   
    $query="INSERT INTO bedallotment(bedno,patientname,email,contact,dater) VALUES 
    ('".$bedno."','".$patientname."','".$email."','".$contact."','".$dater."')";
    $result=mysqli_query($conn,$query);
    if(!$result)
     {
        echo "<script>alert('Appointment not Registered');</script>";
       
      }
    else
    {
        
        //echo "<script>alert('thank you')</script>";
        
        header('location:bedallotment.php');
        // echo "<script>window.open('admin-panel.php');</script>";
    } 


 }
function get_bed_detail()
  {
     global $conn;
     $query="select * from bedallotment";
     $result=mysqli_query($conn,$query);
     while($row=mysqli_fetch_array($result))
     {$allotmentid=$row['bedallid'];
         $bedno=$row['bedno'];
         $patientname=$row['patientname']; 
        
         $email=$row['email'];
         $contact=$row['contact'];
         $dater=$row['dater'];
         echo "<tr>
         <td>$allotmentid</td>
         <td>$bedno</td>
         <td>$patientname</td>
         <td>$email</td>
         <td>$contact</td>
         <td>$dater</td>
         </tr>";

        } 
    }      



?>
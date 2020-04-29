<?php  
$conn = mysqli_connect("localhost","root","","hdbms");
 if(isset($_POST['submitlogin']))
 {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from login where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query) ;
    if(mysqli_num_rows($result)==1)
    {
        header("location:admin-panel.php"); 
    }
    else
    {
        echo "<script>alert('Enter correct detail')</script>";
        // echo "<script>window.open('login.php')</script>";
        $quer="insert into login(username,password) values('".$username."','".$password."')";
        $resul=mysqli_query($conn,$quer);
    }
}

if(isset($_POST['adminsubmit']))
{
    
    $patient=$_POST['patient']; 
    $mobileno=$_POST['mobileno'];
    $emailid=$_POST['emailid'];
    $doctor=$_POST['doctor'];
    $payment=$_POST['payment'];
    $dater=$_POST['dater'];
    $query="INSERT INTO doctorapp(patient,mobileno,emailid,doctor,payment,dater) 
    VALUES ('".$patient."','".$mobileno."','".$emailid."','".$doctor."','".$payment." ','".$dater."')";
    $result=mysqli_query($conn,$query);
    if(!$result)
    {
        echo "<script>alert('Appointment not Registered');</script>";
       
    }
    else
       {
        
        
        
        header('location:admin-panel.php');
       
    } 


}

function get_patient_detail(){
    global $conn;
    $query="select * from doctorapp";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){$apid=$row['apid'];
        $patient=$row['patient']; 
        $mobileno=$row['mobileno'];
        $emailid=$row['emailid'];
        $doctor=$row['doctor'];
        $payment=$row['payment'];
        $dater=$row['dater'];
        echo "<tr>
        <td>$apid</td>
        <td>$patient</td>
        <td>$mobileno</td>
        <td>$emailid</td>
        <td>$doctor</td>
        <td>$payment</td>
        <td>$dater</td>
        
    </tr>";

    }
}

?>


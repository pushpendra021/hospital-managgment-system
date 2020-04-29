<?php 
$conn = mysqli_connect("localhost","root","","hdbms");


if(isset($_POST['bregistration'])){
    $fname=$_POST['fname']; 
    $lname=$_POST['lname']; 
    $contactno=$_POST['contactnumber']; 
    $email=$_POST['emailid']; 
    $bloodg=$_POST['bgroup']; 
    
    $query="INSERT INTO blooddoner(fname,lname,contactno,email,bloodg) VALUES 
    ('".$fname."','".$lname."','".$contactno."','".$email."','".$bloodg."')";
    $result=mysqli_query($conn,$query);
    if($result){ 

        echo 'Successfully saved.';

    }
    else
    {
        echo 'There were errors while saving the data.';
    }
}


function get_patient_detail(){
    global $conn;
    $query="select * from blooddoner";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){ $id=$row['id'];
        $fname=$row['fname'];
        $lname=$row['lname']; 
        $contactno=$row['contactno'];
        $email=$row['email'];
        $bgroup=$row['bloodg'];
        echo "<tr>
        <td>$id</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$contactno</td>
        <td>$email</td>
        <td>$bgroup</td>
    </tr>";

    }
}


?>


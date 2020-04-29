<?php 
$conn = mysqli_connect("localhost","root","","hdbms");


if(isset($_POST['odregistration'])){
    $fname=$_POST['fname']; 
    $lname=$_POST['lname']; 
    $contactno=$_POST['contactnumber']; 
    $email=$_POST['emailid']; 
    $bloodg=$_POST['bgroup']; 
    $donerpart=$_POST['donerpart']; 
    
    $query="INSERT INTO organsdoner(fname,lname,contact,email,bloodgrp,donerpart) VALUES 
    ('".$fname."','".$lname."','".$contactno."','".$email."','".$bloodg."','".$donerpart."')";
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
    $query="select * from organsdoner";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)){ $id=$row['odid'];
        $fname=$row['fname'];
        $lname=$row['lname']; 
        $contactno=$row['contact'];
        $email=$row['email'];
        $bgroup=$row['bloodgrp'];
        $donerpart=$row['donerpart'];
        echo "<tr>
        <td>$id</td>
        <td>$fname</td>
        <td>$lname</td>
        <td>$contactno</td>
        <td>$email</td>
        <td>$bgroup</td>
        <td>$donerpart</td>
    </tr>";

    }
}


?>

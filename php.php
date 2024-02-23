<?php 

// fome data in variabel 
$firstname=$_POST['Firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$phonenumber=$_POST['number'];

$email=$_POST['Email'];
$password=$_POST['password'];

// connection with database 
$conn= new mysqli('localhost','root','','savedata');
if($conn->connect-error){

    die('connection failed:'.$conn->connect_error);
}
else{
    // resive information in database 
    
    $stmt=$conn->prepare("insert into logindata("firstname,lastname,gender,number,email,password")values(?,?,?,?,?,?)");

    $stmt->bind_param("sssssi",$firstname,$lastname,$gender,$phonenumber,$email,$password);
    $stmt->execute();
    echo " thats my  boy login ho gya bhai";
    $stmt->close();
    $conn->close();
}




?>
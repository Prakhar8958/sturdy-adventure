<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="value2";

$conn=mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if(!$conn){
    echo "Connection failed: ".mysqli_connect_error();
    exit;
}
$email=$_POST['email'];
$password=$_POST['password'];
$radio=$_POST['gender'];
$checkbox=$_POST['interest'];
$select=$_POST['city'];
$address=$_POST['address'];

$sql="INSERT INTO form2 (email ,password, gender,interest,city,address) VALUES ('$email','$password','$radio','$checkbox','$select','$address')";

$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error:".mysqli_error($conn);
    exit;
}

echo "registration successful";
mysqli_close($conn);
?>




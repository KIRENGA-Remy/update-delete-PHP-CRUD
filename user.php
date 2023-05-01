
<?php
include 'connection.php';
if(isset($_POST['submit'])){
$Fname= $_POST['fname'];
$Lname= $_POST['lname'];
$Email= $_POST['email'];
$Password= $_POST['password'];
$Gender= $_POST['gender'];

$sql = "INSERT INTO users(fname,lname,email,password,gender) VALUES ('$Fname','$Lname','$Email','$Password','$Gender')";

$result = $conn->query($sql);
if($result == true){
    echo 'New record created successfully.';
} else {
    echo 'Error: '.$sql.' <br> '.$conn->error;
}
$conn->close();
}
?>
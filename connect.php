<?php
$sno = $_POST['s.no'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//database connection
$conn = new mysqli_connect('localhost','root','','amit');
if($conn->connect_error){
    die('connection faild : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(s.no, name, email, subject, message)
    value(?,?,?,?,?)");
    $stmt->bind_program("issss",$s.no,$name,$email,$subject,$message);
    $stmt->execute();
    echo "message recieved...";
    $stmt->close();
    $conn->close();
}
?>
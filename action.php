<?php
$firstname = $_POST['firstname'];
$email  = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$cardname = $_POST['cardname'];
$cardnumber = $_POST['cardnumber'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];
$sameadr = $_POST['sameadr'];

$conn  = new mysqli('localhost' , 'root', '' ,'name of the database')
if($conn->connect_error){
    die('connection falied : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into order (firstname , email,address,city,state,zip,cardname,cardnumber,expmonth,expyear,sameadr) values(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssisiiis", $ firstname , email,address,city,state,zip,cardname,cardnumber,expmonth,expyear,sameadr);
    $stmt->execute();
    echo"Done";
    $stmt->close();
    $conn->close();
}

?>


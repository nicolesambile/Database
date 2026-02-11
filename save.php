<?php
require('./connection.php');

if(isset($_POST['save'])){
$fullname = $_POST ['FN'];
$birthday = $_POST ['BDAY'];
$address = $_POST ['ADDRESS'];
$email = $_POST ['EMAIL'];
$password = $_POST ['PASSWORD'];

$querryCreate = "INSERT INTO bsistbl1 VALUES ('$fullname', '$birthday', '$address', '$email', '$password')";
$sqlCreate = mysqli_query($connection, $querryCreate);

echo '<script>alert("Successfully Save!")</script>';

}

?>
<?php
require('./connection.php');

if(isset($_POST['save'])){
$firstname = $_POST ['FN'];
$middlename = $_POST ['MN'];
$lastname = $_POST ['LN'];

$querryCreate = "INSERT INTO bsistbl VALUES (null, '$firstname', '$middlename', '$lastname')";
$sqlCreate = mysqli_query ($connection, $querryCreate);

echo '<script>alert("Successfully Created!")</script>';

}

?>
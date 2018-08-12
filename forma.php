<?php

if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "AITH";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
$connect = mysqli_connect($hostname, $username, $password, $datbaseName);
$query = "INSERT INTO 'user'('name', 'email', 'phone') VALUES ('$name', '$email', '$phone')";

$result = mysqli_query($connect,$query);

if($result)
{
    echo 'Data Inserted';
}else{
    echo 'Data Not Inserted';
}

mysqli_free_result($result);
mysqli_close($connect);
}
?>

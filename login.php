<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "login_register";

$conn=mysqli_connect($servername, $username, $password, $database_name);
//check the connection
if(!$conn)
{
    
    die("Connection Failed:" . mysqli_error());
}

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql_query = "INSERT INTO user_login (email, password)
    VALUES ('$email','$password')";
    
    if(mysqli_query($conn, $sql_query))
    {
        echo "Logged In Successfully !";
    }
    else
    {
        echo "Error:" . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $location = $_POST['location'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $sql_query = "INSERT INTO registeration(Nameofstudent,dob,gender,locality,email,mobilenumber) VALUES ( ' $name','$dob', '$gender' , '$location', '$email','$number' )";

    if (mysqli_query($conn, $sql_query)) {
        echo "new entry inserted successfully";
    } else {
        echo "error " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
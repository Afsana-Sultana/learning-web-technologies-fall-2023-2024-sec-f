<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "personsdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    $sql = "SELECT * FROM persons WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo 'Email already taken';
    } else {
        echo 'Email available';
    }
}

$conn->close();
?>

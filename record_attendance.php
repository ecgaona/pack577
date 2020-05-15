<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pack577";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $scout_name = $_POST['scouts'];
    $sql = "INSERT INTO attendance (scout_name, signin_date, signin_time) VALUES ('$scout_name', CURRENT_DATE, CURRENT_TIME)";
    $conn->exec($sql);
    header("Location: signin.php?signup=success");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>

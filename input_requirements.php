<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pack577";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $den_name = $_POST['dens'];
    if ($den_name == "Lion") {$den_name = 1;}
    if ($den_name == "Tiger") {$den_name = 2;}
    if ($den_name == "Wolf") {$den_name = 3;}
    if ($den_name == "Bear") {$den_name = 4;}
    if ($den_name == "Webelos") {$den_name = 5;}
    if ($den_name == "AOL") {$den_name = 5;}
    $requirements = $_POST['requirements'];
    $sql = "INSERT INTO requirements (den_id, requirements, meeting_date) VALUES ($den_name, '$requirements', CURRENT_DATE)";
    $conn->exec($sql);
    header("Location: reports.php?signup=success");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>

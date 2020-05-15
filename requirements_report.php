<?php
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>";
echo "<div class='container'>";
echo "<h1>Requirements Report</h1>";
echo "<table class='table'>";
echo "<tr><th>Date</th><th>Den</th><th>Requirements</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}
echo "</div>";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pack577";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $stmt = $conn->prepare("SELECT requirements.meeting_date, dens.den_name, requirements.requirements  FROM requirements JOIN dens ON requirements.den_id = dens.den_id WHERE meeting_date <= '$date2' AND meeting_date >= '$date1'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

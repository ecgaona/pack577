<?php
	require 'dbconnect.php';

	if(isset($_POST['did'])) {
		$db = new dbconnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM scouts WHERE den_id = " . $_POST['did']);
		$stmt->execute();
		$scouts = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($scouts);
		$conn = null;
	}

	function loadDens() {
		$db = new dbconnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM dens");
		$stmt->execute();
		$dens = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$conn = null;
		return $dens;
	}

 ?>

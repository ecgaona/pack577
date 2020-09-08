<?php include("db.php"); ?>
<?php
    if(isset($_POST['d_id'])) {
        $sql = "SELECT * FROM scouts WHERE den_id=".mysqli_real_escape_string($con, $_POST['d_id']);
        $res = mysqli_query($con, $sql);
        if(mysqli_num_rows($res) > 0) {
            echo "<option value='' disabled=''>---Select Scout---</option>";
            while($row = mysqli_fetch_object($res)) {
                echo "<option value='".$row->scout."'>".$row->scout."</option>";
            }
        }
        $con->close();
    } 
    else {
        header('location: ./');
    }
?>
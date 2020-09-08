<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="scss/custom.min.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">
      <?php
        include("db.php");
        $den_id = $_POST['dens'];
        $date = $_POST['date'];
        // Converts den name to den id for data insert
        switch ($den_id) {
          case "Lion":
            $den_id = 1;
            break;
          case "Tiger":
            $den_id = 2;
            break;
          case "Wolf":
            $den_id = 3;
            break;
          case "Bear":
            $den_id = 4;
            break;
          case "Webelos":
            $den_id = 5;
            break;
          case "AOL":
            $den_id = 6;
            break;
          default:
            $den_id = 0;
        }
        $requirements = $con->real_escape_string($_POST['requirements']);
        $sql = "UPDATE attendance SET requirements = '$requirements' WHERE den = $den_id AND signin_date = '$date'";
        if ($con->query($sql) === TRUE) {
          echo "<div class='alert alert-success mt-4' role='alert'>";
          echo "Requirements recorded.";
          echo "</div>";
          $con->close();
          // Redirects back to Leader Menu after 2 seconds
          header("refresh:2;url=leader-menu.php");
        }
        else {
          echo "<div class='alert alert-danger mt-4' role='alert'>";
          echo "Error: " . $sql . "<br>" . $con->error;
          echo "</div>";
          $con->close();
        }
      ?>
    </div>
  </body>
</html>

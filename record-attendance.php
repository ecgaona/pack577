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
	    if(isset($_POST['submit'])) {
          $den = $_POST['den'];
          foreach ($_POST['scout'] as $name) {
            $sql = "INSERT INTO attendance (scout_name, den, signin_date, signin_time) VALUES('$name', '$den', CURRENT_DATE, CURRENT_TIME)";
              if ($con->query($sql) === TRUE) {
                echo "<div class='alert alert-success' role='alert'>";
                echo "<strong>" . $name . "</strong>" . " is now signed in.";
                echo "</div>";
              } 
              else {
                echo "<div class='alert alert-danger' role='alert'>";
                echo "Error: " . $sql . "<br>" . $con->error;
                echo "</div>";
              }
          }
        $con->close();
        header( "refresh:2;url=signin.php" );
 	    }
      ?>
    </div>
  </body>
</html>
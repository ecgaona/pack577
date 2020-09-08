<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pack 577 - Signin</title>

    <link href="scss/custom.min.css" rel="stylesheet">
    <link href="scss/signin.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="ajax.js"></script>
    
  </head>

  <body class="text-center">
    <form class="form-signin" action="record-attendance.php" method="post">
      <h1>Pack 577</h1>
      <img class="mb-4" src="images/logo.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="den" class="sr-only">Den:</label>
      <select class="form-control mb-3" name="den" id="den">
      <option value='' disabled="">---Select Den---</option>
        <?php
            include("db.php");
            $sql = "SELECT * FROM dens";
            $res = mysqli_query($con, $sql);
            if(mysqli_num_rows($res) > 0) {
                while($row = mysqli_fetch_object($res)) {
                echo "<option value='".$row->id."'>".$row->den."</option>";
                }
            }
            $con->close();
        ?>
      </select>
      <label for="scout" class="sr-only">Scout:</label>
      <select multiple class="form-control mb-3" name="scout[]" id="scout">
      <option disabled="">---Select Scout---</option>
      </select>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
    </form>
  </body>
</html>

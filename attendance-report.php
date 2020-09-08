<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pack 577 - Attendance Report</title>

    <link href="scss/custom.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
      <h1>Attendance Report</h1>
      <p>Type in text box below to filter search:</p>
      <input class="form-control" id="filter" type="text" placeholder="Search..."><br>
      <table class="table table-sm table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Den</th>
          <th>Date</th>
          <th>Time</th>
          <th>Requirements</th>
        </tr>
      </thead>
      <tbody id="report">
        <?php
          include('db.php');
          $date1 = $_POST['date1'];
          $date2 = $_POST['date2'];
          $sql = "SELECT attendance.scout_name, dens.den, attendance.signin_date, attendance.signin_time, attendance.requirements FROM attendance JOIN dens ON attendance.den = dens.id WHERE signin_date <= '$date2' AND signin_date >= '$date1' ORDER BY signin_date, dens.id";
          $res = mysqli_query($con, $sql);
          if(mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_object($res)) {
              echo "
                <tr>
                  <td>".$row->scout_name."</td>
                  <td>".$row->den."</td>
                  <td>".$row->signin_date."</td>
                  <td>".$row->signin_time."</td>
                  <td>".$row->requirements."</td>
                </tr>
              ";
            }
          }
        ?>
      </tbody>
    </table>
    <script>
      //Filter table results
      $(document).ready(function(){
        $("#filter").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#report tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>
    <button type="button" class="btn btn-primary" onclick="window.print()">Print</button>
    <button type="button" class="btn btn-warning" onclick="history.back()">Back</button>
    </div>
  </body>
</html>

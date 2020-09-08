<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="scss/custom.min.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
	  jQuery(function(){
		jQuery('.showSingle').click(function(){
		$('.targetDiv').not('#div' + $(this).attr('target')).hide();
		$('#div'+$(this).attr('target')).toggle();
		});
	  });
	</script>

    <title>Pack 577 - Leader Menu</title>
  </head>
  <body style="background-color: #f5f5f5;">
    <div class="container">
      <h1>Scout Leader Menu</h1>
      <button type="button" class="btn btn-primary showSingle" target="1">Enter Requirements</button>
      <button type="button" class="btn btn-warning showSingle" target="2">View Attendance/Requirements</button>
      <div id="div1" class="targetDiv mt-3" style="display:none;">
        <form method="post" action="input-requirements.php">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for"dens">Den:</label>
              <select class="form-control" id="dens" name="dens">
                <option selected="" disabled="">Select Den</option>
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
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="date">Meeting Date:</label>
			  <input type="date" class="form-control" id="date" name="date">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="requirements">Requirements:</label>
			   <textarea class="form-control" id="requirements" name="requirements" rows="3"></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div id="div2" class="targetDiv mt-3" style="display:none;">
        <form method="post" action="attendance-report.php">
          <div class="form-row">
            <div class="form-group col-md-4">
		      <label for="date1">Start Date:</label>
		      <input type="date" class="form-control" id="date1" name="date1">
		    </div>
          </div>
	      <div class="form-row">
	        <div class="form-group col-md-4">
		      <label for="date2">End Date:</label>
		      <input type="date" class="form-control" id="date2" name="date2">
		    </div>
	      </div>
          <button type="submit" class="btn btn-primary">Submit</button>
	    </form>
	  </div>
    </div>
  </body>
</html>

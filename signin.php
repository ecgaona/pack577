<!DOCTYPE html>
<html>
<head>
	<title>Pack 577 - Sign In</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="signin.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#dens").change(function(){
				var did = $("#dens").val();
				$.ajax({
					url: 'data.php',
					method: 'post',
					data: 'did=' + did
				}).done(function(scouts){
					scouts = JSON.parse(scouts);
					$('#scouts').empty();
					scouts.forEach(function(scout){
						$('#scouts').append('<option>' + scout.scout_name + '</option>')
					})
				})
			})
		})
	</script>
</head>
<body style="background-image: url('background.jpg'); background-repeat: no-repeat; background-size:cover;">
	<form class="form-signin" method="post" action="record_attendance.php">
	<h1 class="h3 mb-3 font-weight-normal text-center">Please Sign In</h1>
		<div class="form-group">
      <label for="dens">Den</label>
        <select class="form-control" id="dens" name="dens">
        	<option selected="" disabled="">Select Den</option>
          	<?php
          		require 'data.php';
          		$dens = loadDens();
          		foreach ($dens as $den) {
          			echo "<option id='".$den['den_id']."' value='".$den['den_id']."'>".$den['den_name']."</option>";
          		}
          	 ?>
        </select>
      </div>
        <div class="form-group">
          <label for="scouts">Scout</label>
          <select class="form-control" id="scouts" name="scouts">

          </select>
        </div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
    </form>
	</body>
</html>

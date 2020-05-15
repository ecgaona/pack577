<!DOCTYPE html>
<html>
<head>
	<title>Pack 577 - Sign In</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		jQuery(function(){
			jQuery('.showSingle').click(function(){
			$('.targetDiv').not('#div' + $(this).attr('target')).hide();
			$('#div'+$(this).attr('target')).toggle();
			});
		});
	</script>
</head>
<body style="background-image: url('background2.jpg'); background-repeat: no-repeat; background-size:cover; color:#FFFFFF;">
		<div class="container mt-3">
			<div>
				<button type="button" class="btn btn-primary showSingle" target="1">Enter Requirements</button>
				<button type="button" class="btn btn-warning showSingle" target="2">Pull Attendance</button>
				<button type="button" class="btn btn-primary showSingle" target="3">View Requirements</button>
			</div>
			<div id="div1" class="targetDiv" style="display:none;">
				<form method="post" action="input_requirements.php">
					<div class="form-row mt-3">
						<div class="form-group col-md-4">
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
					</div>
					<div class="form-row">
			      <div class="form-group col-md-4">
			        <label for="requirements">Requirements</label>
			        <textarea class="form-control" id="requirements" name="requirements" rows="3"></textarea>
			      </div>
					</div>
					<div class="form-row">
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>
		    </form>
			</div>
			<div id="div2" class="targetDiv" style="display:none;">
				<form method="post" action="attendance_report.php">
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="date1">Start Date</label>
							<input type="date" class="form-control" id="date1" name="date1">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="date2">End Date</label>
							<input type="date" class="form-control" id="date2" name="date2">
						</div>
					</div>
					<div class="form-row">
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>
				</form>
			</div>
			<div id="div3" class="targetDiv" style="display:none;">
				<form method="post" action="requirements_report.php">
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="date1">Start Date</label>
							<input type="date" class="form-control" id="date1" name="date1">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="date2">End Date</label>
							<input type="date" class="form-control" id="date2" name="date2">
						</div>
					</div>
					<div class="form-row">
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>

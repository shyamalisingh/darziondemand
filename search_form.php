<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Rent Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Optional theme -->
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js"></script>
	</head>
	<body>
	<!-- This is the top  navigation !-->
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">RentHome</a>
		</div>
		<ul class="nav navbar-nav">
		  <li><a href="index.php">Home</a></li>
		  <li class="active"><a href="#">search</a></li>
		  <li><a href="#">Page 2</a></li>
		  <li><a href="#">Page 3</a></li>
		</ul>
	  </div>
	</nav>
	<div class="container">
		<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8 panel panel-default">
					<legend class="panel-header"> Property post form</legend>
					<form class="form panel-content" method="POST" action="real_state_submit_demo.php">
						<div class="form-group">
							<label class="form-label">Flat Type <span class="glyphicon glyphicon-hand-down"></span></label>
								<select class="form-control" id="FlatType" name="FlatType">
									<option value="">Select</option>
									<option value="1BHK">1 BHK</option>
									<option value="2BHK">2 BHK</option>
									<option value="3BHK">3 BHK</option>
									<option value="4BHK">4 BHK</option>
								</select>
						</div>
						
						<div class="form-group">
							<label class="form-label">Flat Area<span class="glyphicon glyphicon-hand-down"></span></label>
							<input type="textfield" class="form-control" name="flat_area" placeholder="In sqft"></input>
						</div>
						
						<div class="form-group">
							<label class="form-label">Flat Price<span class="glyphicon glyphicon-hand-down"></span></label>
							<select class="form-control" id="MinPrice" name="MinPrice">
									<option value="">min</option>
									<option value="1BHK">15000</option>
									<option value="2BHK">20000</option>
									<option value="3BHK">30000</option>
									<option value="4BHK">40000</option>
								</select>
							<select class="form-control" id="MaxPrice" name="MaxPrice">
									<option value="">max</option>
									<option value="1BHK">50000</option>
									<option value="2BHK">60000</option>
									<option value="3BHK">70000</option>
									<option value="4BHK">80000</option>
								</select>
						</div>
						
						<div class="form-group">
							<label class="form-label">Posted By<span class="glyphicon glyphicon-hand-right"></span></label>
								<label>
									<input type="radio" name="postedby" value="owner" />
								owner
								</label>
								<label>
									<input type="radio" name="postedby" value="agent" />
								agent
								</label>
						</div>
						
						<div class="form-group">
							<label class="form-label">Amenities<span class="glyphicon glyphicon-hand-right"></span></label>
							<input type="checkbox" name="Amenities[]" value="sweaming_pool"> swimming pool
							<input type="checkbox" name="Amenities[]" value="parking">parking
							<input type="checkbox" name="Amenities[]" value="power_backup">power_backup
							<input type="checkbox" name="Amenities[]" value="club_house">club_house
						</div>
						
						<div class="form-group">
							<input type="submit" class="btn btn_submit" class="form-control"></input>
						</div>
					</form>
					
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 panel-default">
				<div class="panel-footer" style="text-align:center">
					<span class="glyphicon glyphicon-copyright-mark"></span> All rights reserved www.luckyakhi.com
				</div>	
			</div>
		</div>
	</body>
</html>
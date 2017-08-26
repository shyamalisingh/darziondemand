<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Designer At Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Optional theme -->
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/dropdown.css">
<!-- Latest compiled and minified JavaScript -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/dropdown.js"></script>
	</head>
	<body>
	<!-- This is the top  navigation !-->
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">Designer @ Home</a>
		</div>
		<ul class="nav navbar-nav">
		  <li class="active"><a href="#">Home</a></li>
		  <li><a href="search_form.php">About</a></li>
		  <li><a href="#">Services</a></li>
		  <li><a href="#">Contact</a></li>
		</ul>
	  </div>
	</nav>
	<div class="container">
		<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8 panel panel-default">
					<legend class="panel-header"> Property post form</legend>
					<form action="submit" method="get" enctype="application/x-www-form-urlencoded" name="request_form" target="request_form_submit.php" class="form-horizontal">
                     <div class="form-group row">
                        <label class="control-label col-sm-3" for="location">Location:</label>
                        <div class="col-sm-6">
                           <input type="text" class="form-control" id="location" placeholder="enter location" name="location"/>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-sm-3" for="name">Name:</label>
                        <div class="col-sm-6">
                           <input type="text" class="form-control" id="name" placeholder="enter name" name="name"/>
                        </div>
                     </div>
                     <div class="from-group row">
                        <label class="control-label col-sm-3" for="phoneNumber">Phone Number:</label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" id="phoneNumber" placeholder="enter phone number" name="phoneNumber"/>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="col-sm-3 control-label" for="workType">Type Of Work</label>
                        <div class="col-md-6">
                           <select id="dates-field2" class="multiselect-ui form-control" multiple="multiple">
                              <option value="cheese">fall-beading</option>
                              <option value="tomatoes">blouse-stitching</option>
                              <option value="mozarella">suite-stitching</option>
                              <option value="mushrooms">designer lehenga</option>
                              <option value="pepperoni">peticoat</option>
                              <option value="onions">baby-frock</option>
                           </select>
                        </div>
                     </div>
                     <div class="from-group row">
                        <label class="control-label col-sm-3" for="price">Price:</label>
                     </div>
                     <div class="from-group row">
                        <label class="col-sm-3 control-label" for="workType">Tailor Gender:</label>
                        <div class="col-md-6">
                           <label class="radio-inline"><input type="radio" name="optradio">Male</label>
                           <label class="radio-inline"><input type="radio" name="optradio">Female</label>
                        </div>
                     </div>
<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
				</div>
			</div>
        </div>
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
		 <script type="text/javascript">
         $(function() {
             $('.multiselect-ui').multiselect({
                 includeSelectAllOption: true
             });
         	
         });
		 </script>
>	</body>
</html>
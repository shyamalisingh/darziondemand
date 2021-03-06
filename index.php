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
      <link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
      <!-- Latest compiled and minified JavaScript -->
      <script src="js/jquery.min.js"></script>
      <script src="js/moment.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/dropdown.js"></script>
      <script src="js/bootstrap-datetimepicker.min.js"></script>
	 <script src="js/validator.min.js"></script> 
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
            
            <div class="col-md-8 panel panel-default">
               <legend class="panel-header">DarziOnDemand</legend>
               <form  method="POST" enctype="application/x-www-form-urlencoded" name="request_form" action="request_form_submit.php" class="form-horizontal">
                  <div class="form-group row">
                     <label class="control-label col-sm-3" for="location">Location:</label>
                     <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="location" placeholder="enter location" name="location" required />
						 <p class="help-block"></p>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="control-label col-sm-3" for="name">Name:</label>
                     <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="name" placeholder="enter name" name="name" required/>
						 <p class="help-block"></p>
                     </div>
                  </div>
				  <div class="from-group row">
                     <label class="control-label col-sm-3" for="email">Email:</label>
                     <div class="col-md-6 col-sm-6">
                        <input type="email" class="form-control" id="email" placeholder="enter email address" name="email"  required/>
						 <p class="help-block"></p>
                     </div>
                  </div>
				  <div class="from-group row"><br/></div>
                  <div class="from-group row">
                     <label class="control-label col-sm-3" for="phoneNumber">Phone Number:</label>
                     <div class="col-md-6 col-sm-9">
                        <input type="text" class="form-control" id="phoneNumber" placeholder="enter phone number" name="phoneNumber" required />
						 <p class="help-block"></p>
                     </div>
                  </div>
                  <div class="form-group row">&nbsp;</div>
                  <div class="form-group row">
                     <label class="col-sm-3 control-label" for="workType">Type Of Work</label>
                     <div class="col-md-6 col-sm-6">
                        <select id="dates-field2" class="multiselect-ui form-control" multiple="multiple" name="workType[]">
                           <option value="fall-beading">fall-beading</option>
                           <option value="blouse-stitching">blouse-stitching</option>
                           <option value="suite-stitching">suite-stitching</option>
                           <option value="designer-lehenga">designer lehenga</option>
                           <option value="peticoat">peticoat</option>
                           <option value="baby-frock">baby-frock</option>
                        </select>
						 <p class="help-block"></p>
                     </div>
                  </div>
                  <div class="from-group row">
                     <label class="control-label col-sm-3" for="price">Price:</label>
					 <div class="col-md-6 col-sm-6">
					 </div>
                  </div>
                  <div class="from-group row">
                     <label class="col-sm-3 control-label" for="workType">Tailor Gender:</label>
                     <div class="col-md-6 col-sm-6">
                        <label class="radio-inline"><input type="radio" name="optradio" >Male</label>
                        <label class="radio-inline"><input type="radio" name="optradio" >Female</label>
                     </div>
                  </div>
                  <div class="form-group row">
                     <label class="col-sm-3 control-label" for="schedule_dateTime">Time Schedule:</label>
                     <div class="col-md-6 col-sm-6">
                        <div class='input-group date' id='datetimepicker1'>
                           <input type='text' class="form-control" name="datetimepicker1" id="schedule_dateTime" required/>
                           <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar"></span>
                           </span>
						    
                        </div>
						<p class="help-block"></p>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-sm-3"></div>
                     <div class="col-md-6 col-sm-6">
                        <input type="submit" class="btn btn_submit" class="form-control"></input>
                     </div>
                  </div>
               </form>
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
	  $.fn.validator.setDefaults({
      trigger: 'change',
      success: function (e) {
        console.log(e.type, e.value, e.rule);
        $(this).closest('.form-group').removeClass('has-error').find('.help-block').empty();
      },
      error: function (e) {
        console.log(e.type, e.value, e.rule);
        $(this).closest('.form-group').addClass('has-error').find('.help-block').text(e.message);
      }
    });
         $(function() {
             $('.multiselect-ui').multiselect({
                 includeSelectAllOption: true
             });
         	$('#datetimepicker1').datetimepicker();
			 var $form = $('.container form'),
          $inputs = $form.find('input'),
          $submit = $form.find(':submit');

      $inputs.validator();

      $submit.click(function (e) {
        var validity = [];

        $inputs.each(function () {
          validity.push($(this).validator('isValid'));
        });

        if ($.inArray(false, validity) !== -1) {
          e.preventDefault();
          return false;
        }
      });
         });
         
      </script>
   </body>
</html>
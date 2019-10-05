<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style type="text/css">
	@media only screen and (max-width: 600px) { 
       .du_logod{}
	   .du_logod img{width: 100%}
	}
</style>
</head>
<body>
<div class="container">
<!-- <div class="row justify-content-center">
	<a href="index.php" class="du_logod"><img src="assets/images/Logo_big.png"></a>
</div> -->
<div class="row justify-content-center">
<div class="col-lg-6">
  <div class="card">
  	<a href="index.php" class="du_logod"><img src="assets/images/Logo_big.png"></a>
  	<div class="card-header">
	    Student Registration
	 </div>
  	<div class="card-body" id="output">
  		<h5 class="card-title bg-dark text-white text-center" style="padding: 8px;border-radius: 3px;">Sign Up From</h5>
  		<form method="post" action="" id="student_registration">
	  <div class="form-group">
	    <label for="registration_no">Registration No.</label>
	    <input type="text" class="form-control" onkeypress="return isNumberKey(event)" id="registration_no" placeholder="Enter Registration Number">
	    <div class="invalid-feedback" id="err_registion"> Registration Number must not be Empty! </div>
	  </div>
	  <div class="form-group">
	    <label for="program_name">Program Name</label>
	    <select class="form-control" id="program_name" style="cursor: pointer;">
	      <option value="" style="display: none;">Select your Program Name</option>
	      <option value="1">1</option>
        <option value="2">2</option>
	    </select>
	    <div class="invalid-feedback" id="err_program"> Program Field must not be Empty! </div>
	  </div>
	  <div class="form-group">
	    <label for="session">Session</label>
	    <select class="form-control" id="session" style="cursor: pointer;">
	      <option value="" style="display: none;">Select your Session</option>
	      <option value="1">1</option>
        <option value="2">2</option>
	    </select>
	    <div class="invalid-feedback" id="err_session"> Session Field must not be Empty! </div>
	  </div>
	  <button type="submit" class="btn btn-primary btn-block">Submit</button>
	</form>
  	</div>
  </div>
</div>
</div>
<!-- /.main-content -->
</div><!-- /.main-container -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- inline scripts related to this page -->
<script type="text/javascript">
	$(document).ready(function(){
       $('#student_registration').on('submit',(function(){
          var registrationno = $('#registration_no').val();
          var program_name   = $('#program_name').val();
          var session        = $('#session').val();

          if(registrationno == "" && program_name == "" && session == ""){
            $('#registration_no').addClass('is-invalid');
            $('#program_name').addClass('is-invalid');
            $('#session').addClass('is-invalid');

            $('#err_registion').css('display:block');
            $('#err_program').css('display:block');
            $('#err_session').css('display:block');
            return false;
          } else if(program_name == "" && session == ""){
            $('#program_name').addClass('is-invalid');
            $('#session').addClass('is-invalid');

            $('#err_program').css('display:block');
            $('#err_session').css('display:block');
            return false;
          } else if(registrationno == ""){
            $('#registration_no').addClass('is-invalid');
            $('#err_registion').css('display:block');
            return false;
          } else if(program_name == "" || program_name == 0){
            $('#program_name').addClass('is-invalid');
            $('#err_program').css('display:block');
            return false;
          } else if(session == "" || session == 0){
            $('#session').addClass('is-invalid');
            $('#err_session').css('display:block');
            return false;
          } else{

          	$.ajax({
                type:"POST",
                url:"registration_ajax.php",
                data: {registrationno:registrationno, program_name:program_name, session:session},
                cache: false,
                success: function(data){
                  $('#output').html(data);
                },
                error: function(err){
                	alert("Something went wrong!");
                }
          	});
          	return false;
          }

       }));
	});
</script>
<script type="text/javascript">
	function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
   // return true;
}
</script>
</body>
</html>
/////////////::::::::::::::::::::::::::::::::::::::::::::  From to Data get name[] (array) to ::::::::::::::::://///////////
<div id="output_ok"></div> <div id="summaryMileage"></div>
  <?php 
              $ysday = date("2019-08-14 00:00:00");
              $yeday = date("Y-m-d 23:59:00");
              echo $yesterday = $ysday.'='.$yeday;
              ?>
 <script type="text/javascript">
  $(document).ready(function() {

      var period = '<?php echo $yesterday; ?>';

      var datet  = period.split("=");
      startfrom  = datet[0];
      endto      = datet[1];


      var sfrom = new Date(startfrom);

      var from = sfrom.toJSON();
      //alert(from);
      var eto = new Date(endto);

      var to = eto.toJSON();

		$.ajax({
		  type: "GET",
		  url: "http://ip/api/devices/", // Using our resources.json file to serve results
		  headers: {
            "Authorization": "Basic " + btoa("<?php if(!empty($_SESSION['email'])){ echo $_SESSION['email']; } ?>:<?php if(!empty($_SESSION['password'])){ echo $_SESSION['password']; } ?>")
          },
		  success: function(data) {

	       //var total_distance_sum = 0;
	       //var total_distancesss;
	       var output = "<table id='datatabled' border='1'>";
               
			for (var j in data) {
        
			  var deviceId = data[j].id;

			  output += "<tr><td style='padding:3px;'>"+ data[j].id +"</td><td class='all_distances' style='padding:3px;'><input type='text' name='nameGoesHere["+ data[j].id +"]' id='total_dist"+ data[j].id +"' /></td>";
			  

              var JSONObject = {"deviceId":deviceId, "from":from, "to":to};

			  $.ajax({
				  type: "GET",
				  url: "http://ip/api/reports/trips/", 
				  headers: {
			        "Authorization": "Basic " + btoa("<?php if(!empty($_SESSION['email'])){ echo $_SESSION['email']; } ?>:<?php if(!empty($_SESSION['password'])){ echo $_SESSION['password']; } ?>")
			     },
			     data: JSONObject,
			     dataType: 'json',
				 success: function(results) {
				 	//alert(JSON.stringify(results));

                 var total_distance = 0;
			    for (var i = 0; i < results.length; i++) {
			    	var did = results[i].deviceId;
			        total_distance += results[i].distance << 0;
			        $('#total_dist'+did).val(total_distance);
			       }

                    
			       //alert(total_distance);
			        // total_distancesss = JSON.parse("[" + total_distance + "]");
			        // alert(total_distancesss);
				  },
			       error: function(err){
			          alert(JSON.stringify(err));
			       }
				});
			  
			 
			   output += "</tr>";
			   //total_distance_sum += dsfdsfsf << 0;
			}
			output += "</table>";

			$('#output_ok').html(output);

			   /*var total = 0;
				$(".all_distances").each(function() {
		         total += parseFloat($(this).text());
		      });

		     $("#total").html(total);*/
		  }
		});

        setTimeout(function(){

          //var dfdsfd = $("input[name=nameGoesHere]").val();
          
         //alert(dfdsfd);

         var total_distance_sum = 0;
         $('input[name^="nameGoesHere"]').each(function() {
			     var dsfdsfsck =  $(this).val();
			    total_distance_sum += dsfdsfsck << 0;
		 });
		// alert(total_distance_sum);
		$('#summaryMileage').html(total_distance_sum+" KM");

        }, 6000);
		 
		/* var TotalValue = 0;
		    $("#datatabled tr").each(function(){
		          TotalValue += parseFloat($(this).find('.all_distances').text());
		    });
		    alert(TotalValue);*/
	 });
    
 </script>
<!--- ::::::::::::::::::::: Id and Number validation with php ::::::::::::: ---------->
<?php 
 public function usersDevicesGet($id){

  $expr = '/^[1-9][0-9]*$/';
if (preg_match($expr, $id) && filter_var($id, FILTER_VALIDATE_INT)) {
  
  $id = mysqli_real_escape_string($this->db->link, $id);

  } else{
    echo '<div class="alert alert-danger">Something went worng!</div>';
  }
 }


?>
<!---------------   Input Field Onkeypress validateion only allow alphadet and numeric Digites ------------->
<input type='text' title='Password is Required' id='password' onkeypress='return /^[0-9a-zA-Z]+$/i.test(event.key)' placeholder='Enter Password'>

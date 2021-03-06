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


<!-------- From Validateion ------------>
  <form id="adminLoginFrom" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      
      <div id="email_error_msg"></div>
      <div id="email_err" class="form-group has-feedback">
        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div id="pass_error_msg"></div>
      <div id="pass_err" class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="row ligin_bottom_bta">
        <!-- /.col -->
        <div class="col-xs-8 col-xs-offset-2">
          <button type="submit" name="login_admin" class="btn btn-danger btn-block">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
      <div class="row ligin_bottom_bt">
        <div class="col-xs-12">
           <button type="submit" name="login_admin" class="btn btn-danger btn-block espacebottom">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
<script type="text/javascript">
  $(document).ready(function(){

    $('#adminLoginFrom').on('submit', (function(){

      var email = $('#email').val();
      var pass  = $('#password').val();

      if (email == "" && pass == "") {
        $('#email_err').addClass('has-error');
        $('#pass_err').addClass('has-error');
        $('#email_error_msg').html("<div class='text-red'>Email Field must not be Empty!</div>");
        $('#pass_error_msg').html("<div class='text-red'>Password Field must not be Empty!</div>");
        //alert("Field Must not be Empty!");
        return false;
      } else if (email == "") {
        $('#email_err').addClass('has-error');
        $('#email_error_msg').html("<div class='text-red'>Email Field must not be Empty!</div>");
        return false;
      } else if (pass == "") {
        $('#pass_err').addClass('has-error');
        $('#pass_error_msg').html("<div class='text-red'>Password Field must not be Empty!</div>");
        return false;
      }

    }));
  });
</script>
///////////////////::::::::::::::::::::::::::::::::::::  Most Protected From validation ::::::::::::::::::::::::::////////////////
/////:::::::::::: Start Html  code::::::::::::://///
<form id="useradd" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
              <div class="box-body">
                <div class="form-group" id="name_err">
                  <label for="user_name">Name <span class="text-red"> * </span></label>
                  <input type="text" title="Name Field is Required!" class="form-control" id="user_name" placeholder="Enter your Name.">
                  <div id="name_err_msg"></div>
                </div>

                <div class="form-group" id="email_err">
                  <label for="user_email">Email Address <span class="text-red"> * </span></label>
                  <input type="email" title="Email Field is Required!" class="form-control" id="user_email" placeholder="Enter email">
                  <div id="email_err_msg"></div>
                </div>
                <div class="form-group" id="mobile_err">
                  <label for="user_mobile"> Phone <span class="text-red"> * </span></label>
                  <input type="number" title="Phone Number is Required!" class="form-control" onkeypress="return isNumberKey(event)" id="user_mobile" placeholder="Enter Phone Number">
                  <div id="mobile_err_msg"></div>
                </div>
                <div class="form-group" id="address_err">
                  <label for="user_address"> Address <span class="text-red"> * </span></label>
                  <input type="text" title="Address Field is Required!" class="form-control" id="user_address" placeholder="Enter Address">
                  <div id="address_err_msg"></div>
                </div>
                <div class="form-group">
                  <label for="user_note">User Note</label>
                  <input type="text" class="form-control" id="user_note" placeholder="Enter Note">
                </div>
                <div class="form-group" id="pass_err">
                  <label for="user_password"> Password <span class="text-red"> * </span></label>
                  <input type="password" title="Password Field is Required!" class="form-control" id="user_password" placeholder="Password">
                  <div id="pass_err_msg"></div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-block"> Save </button>
              </div>
              </form>
//////::::::: end html code and start jquery code :::::::::////
<script type="text/javascript">
  $(document).ready(function(){
   // alert("ok");

    $('#useradd').on('submit', function(){

        var u_name      = $('#user_name').val();
        var u_email     = $('#user_email').val();
        var u_mobile    = $('#user_mobile').val();
        var u_address   = $('#user_address').val();
        var u_note      = $('#user_note').val();
        var u_password  = $('#user_password').val();

       // alert(u_name);
      
      if (u_name == "" && u_email == "" && u_mobile == "" && u_address == "" && u_password == "") {

          $('#name_err').addClass('has-error');
          $('#email_err').addClass('has-error');
          $('#mobile_err').addClass('has-error');
          $('#address_err').addClass('has-error');
          $('#pass_err').addClass('has-error');
          
          $('#name_err_msg').html("<div class='text-red'> Name Field must not be Empty!</div>");
          $('#email_err_msg').html("<div class='text-red'> Email must not be Empty!</div>");
          $('#mobile_err_msg').html("<div class='text-red'> Mobile Number must not be Empty!</div>");
          $('#address_err_msg').html("<div class='text-red'> Address must not be Empty!</div>");
          $('#pass_err_msg').html("<div class='text-red'> Password must not be Empty!</div>");
          return false;
      } else if(u_name == ""){

        $('#name_err').addClass('has-error');
        $('#name_err_msg').html("<div class='text-red'> Name Field must not be Empty!</div>");
         return false;
      }  else if(u_name.length > 50){

        $('#name_err').addClass('has-error');
        $('#name_err_msg').html("<div class='text-red'> Name is too long.!</div>");
        return false;
      } else if(u_email == ""){

        $('#email_err').addClass('has-error');
        $('#email_err_msg').html("<div class='text-red'> Email must not be Empty!</div>");
         return false;
      } else if(u_email.length > 50){

        $('#email_err').addClass('has-error');
        $('#email_err_msg').html("<div class='text-red'> Email is too long. !</div>");
         return false;
      }  else if(!isEmail(u_email)){

        $('#email_err').addClass('has-error');
        $('#email_err_msg').html("<div class='text-red'> Invalied Email Address!</div>");
        return false;
      } else if(u_mobile == ""){

        $('#mobile_err').addClass('has-error');
        $('#mobile_err_msg').html("<div class='text-red'> Mobile Number must not be Empty!</div>");
         return false;
      } else if(u_mobile.length > 15 || u_mobile.length < 11){

        $('#mobile_err').addClass('has-error');
        $('#mobile_err_msg').html("<div class='text-red'> Mobile Number Minimum 11 digit and Maximum 15 Digit!</div>");
         return false;
      } else if(u_address == ""){

        $('#address_err').addClass('has-error');
        $('#address_err_msg').html("<div class='text-red'> Address must not be Empty!</div>");
         return false;
      }  else if(u_address.length > 200){

        $('#address_err').addClass('has-error');
        $('#address_err_msg').html("<div class='text-red'> Address is too long!</div>");
         return false;
      } else if(u_password == ""){

        $('#pass_err').addClass('has-error');
        $('#pass_err_msg').html("<div class='text-red'> Password must not be Empty!</div>");
         return false;
      } else if(u_password.length > 32 || u_password.length < 6){

        $('#pass_err').addClass('has-error');
        $('#pass_err_msg').html("<div class='text-red'> Password must be between 6 and 32 Letter!</div>");
         return false;
      } else{
           
           $.ajax({
                type: "post",
                url: "ajax/user_add_operation.php",
                data: {u_name:u_name,u_email:u_email,u_mobile:u_mobile,u_address:u_address,u_note:u_note,u_password:u_password},
                success: function(data){
                  $('#output_msg').html(data);

                  setTimeout(function(){
                   window.location.href='users.php';
                  }, 6000);
                }
           });
           return false;
      }

    });

  });
</script>
<script type="text/javascript">
  function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
</script>
//////////:::::::: end jquery code and start user_add_operation.php  page code :::::::::////
<?php 
 include "classes/Mainclass.php";
 $man = new Mainclass();

$USERS_NAME     = $_POST['u_name'];
$USERS_EMAIL    = $_POST['u_email'];
$USERS_MOBILE   = $_POST['u_mobile'];
$USERS_ADDRESS  = $_POST['u_address'];
$USERS_NOTE     = $_POST['u_note'];
$USERS_PASSWORD = $_POST['u_password'];


  $USERS_PRIVET_KEY=md5(microtime().rand());
  
  
  //$key = md5(microtime().rand());

  if (empty($USERS_NAME) || empty($USERS_EMAIL) || empty($USERS_MOBILE) || empty($USERS_ADDRESS) || empty($USERS_PASSWORD)) {
	echo '<div class="alert alert-danger">Field must not be Empty!</div>';
  } else{
  
   $result = $man->create_user_account($USERS_PRIVET_KEY,$USERS_NAME,$USERS_EMAIL,$USERS_ADDRESS,$USERS_MOBILE,$USERS_NOTE,$USERS_PASSWORD);
}
?>
///// End ajax php and start create_user_account Method code :::::////
<?php 
class Mainclass{
	protected $db;
 	protected $fm;
	public function __construct(){

	 $this->db = new Database();
         $this->fm = new Format();
	}
	
public function create_user_account($USERS_PRIVET_KEY,$USERS_NAME,$USERS_EMAIL,$USERS_ADDRESS,$USERS_MOBILE,$USERS_NOTE,$USERS_PASSWORD){

	   $USERS_NAME    = $this->fm->validation($USERS_NAME);
	   $USERS_EMAIL   = $this->fm->validation($USERS_EMAIL);
	   $USERS_ADDRESS = $this->fm->validation($USERS_ADDRESS);
	   $USERS_MOBILE  = $this->fm->validation($USERS_MOBILE);
	   $USERS_NOTE    = $this->fm->validation($USERS_NOTE);

       $USERS_PRIVET_KEY = mysqli_real_escape_string($this->db->link, $USERS_PRIVET_KEY);
       $USERS_NAME       = mysqli_real_escape_string($this->db->link, $USERS_NAME);
       $USERS_EMAIL      = mysqli_real_escape_string($this->db->link, $USERS_EMAIL);
       $USERS_ADDRESS    = mysqli_real_escape_string($this->db->link, $USERS_ADDRESS);
       $USERS_MOBILE     = mysqli_real_escape_string($this->db->link, $USERS_MOBILE);
       $USERS_NOTE       = mysqli_real_escape_string($this->db->link, $USERS_NOTE);
       $USERS_PASSWORD   = mysqli_real_escape_string($this->db->link, $USERS_PASSWORD);

       $USERS_EMAIL = filter_var($USERS_EMAIL, FILTER_SANITIZE_EMAIL);

       if (!filter_var($USERS_EMAIL, FILTER_VALIDATE_EMAIL)) {

       echo '<div class="alert alert-danger" role="alert"> '.$USERS_EMAIL.' Invalid Email Address. </div>';
       } else{

       	$ckem = "SELECT * FROM USERS WHERE USERS_EMAIL = '$USERS_EMAIL'";
       	$ckresult = $this->db->select($ckem);
       	if ($ckresult != false) {
       	echo '<div class="alert alert-danger" role="alert"> '.$USERS_EMAIL.' Already Exists. </div>';
       	} else{
	 
       $sql = "INSERT INTO `USERS`(`USERS_PRIVET_KEY`, `USERS_NAME`, `USERS_EMAIL`, `USERS_ADDRESS`, `USERS_MOBILE`, `USERS_NOTE`,`USERS_PASSWORD`) VALUES ('$USERS_PRIVET_KEY','$USERS_NAME','$USERS_EMAIL','$USERS_ADDRESS','$USERS_MOBILE','$USERS_NOTE','$USERS_PASSWORD')";
       $insert = $this->db->insert($sql);

      if($insert > 0){

      $USERS_ID = mysqli_insert_id($this->db->link);

       $sqlsub = "INSERT INTO `SUB_USER`(`USERS_ID`, `SUB_USER_ID_REF`, `SUB_USER_FILLNAME`, `SUB_USER_MAIL`, `SUB_USER_MOBILE`, `SUB_USER_PASSWORD`) VALUES ($USERS_ID,$USERS_ID,'$USERS_NAME','$USERS_EMAIL','$USERS_MOBILE','$USERS_PASSWORD')";
        $insertsub = $this->db->insert($sqlsub);

        if($insertsub){
		echo '<div class="alert alert-success">User Added Successfuly!</div>';
		}else{

		echo '<div class="alert alert-danger">Something went wrong.!</div>';

		}
    } else{

		echo '<div class="alert alert-danger">Something went wrong.!</div>';

	}
   }
  } 
 } 
}
?>
////////////////////////:::::::::::::::::::: end php and jquery and ajax code From validation :::::::::::://///////

/////////////////:::::::::::::::::::::::::: Start Image height width validation php ::::::::::::::::::::::////////////
<?php
 function image_size_validation($image){
	    
	  $validation_check=false;
	  $image_info = getimagesize($image);
      $height_t= $image_info [0];
	  $width_t= $image_info [1];
  
     if(($height_t>45 && $height_t<55 ) && ($width_t>45 && $width_t<55) ){
        $validation_check=true;
     }
  
     return $validation_check;	    
	}
       $profile_image = $_FILES['image'];

        $sourcePath = $profile_image['tmp_name'];
        $name_img   = $profile_image['name'];

if($this->image_size_validation($sourcePath)){
			    
 echo "<span style='color:red;font-weight:bold;'>Image Size Should 150*150PX !</span>";
 echo "<script>setTimeout(function(){ window.location.href='sign_up.php'; }, 3000);</script>";  
}
//=======================

$data = getimagesize($sourcePath);
$width  = $data[0];
$height = $data[1];

if(($width<145 || $width>155)|| ($height<145 ||$height>155 )){
			    
     $msg = "<div class='alert alert-danger'>Image Size Should 150*150PX !</div>";
return $msg;
} 

?>

<?php 
// Integer Number.....
        $exam_id = preg_replace('/[^-a-zA-Z0-9_]/','', $_GET['examId']);
	$exam_id = preg_replace('/\D/', '', $_GET['examId']);
        $exam_id = htmlentities($exam_id);
        $exam_id = (int)$exam_id;
?>

<button type="button" class="btn btn-warning onclick_del_event" data-eventid="<?php echo $rows['id']; ?>"><i class="fa fa-trash"></i></button>

<script>
  $(document).ready(function(){
     $(document).on('click', '.onclick_del_event', (function() {
         var event_id = $(this).data('eventid');

          $.ajax({
                type: "post",
                url: "ajax/event_del_ajax.php",
                data: {event_id:event_id},
                success: function(del){
                  $('#message_data').html(del);
                },
                error: function(err){
                  alert(err);
                }
          });

     }));
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {

    $('#event_form').on('submit', function(e) {

      var event_name     = $('#event_name').val();
      var event_moto     = $('#event_moto').val();
      var event_date     = $('#event_date').val();
      var reg_start_date = $('#reg_start_date').val();
      var reg_end_date   = $('#reg_end_date').val();
      var event_type     = $('#event_type').val();
      var payment_type   = $('#payment_type').val();
      var payable_amount = $('#payable_amount').val();
      var program_segmentation = $('#program_segmentation').val();
      var event_facebook = $('#event_facebook').val();
      var event_twitter  = $('#event_twitter').val();
      var event_linkedin = $('#event_linkedin').val();
      var event_instagram= $('#event_instagram').val();
      var event_youtube  = $('#event_youtube').val();
      //var program_segmentation = ps.content.get();
      //var get_ps = textboxio.get( '.program_segmentation');
      //var program_segmentation = get_ps[0];
      var event_logo     = $('#event_logo').prop('files')[0];

      if (payment_type == "Payment") {
        if (payable_amount == "") {
          $('#err_payable_amount').addClass('has-error');
          $('#err_payable_amount_msg').html("<div class='text-red'> Payable Amount must not be Empty!</div>");
        }
      }
      
      if (event_name == "" && event_moto == "" && event_date == "" && reg_start_date == "" && reg_end_date == "" && event_type == "" && payment_type == "" && program_segmentation == "" && (document.getElementById("event_logo").files.length ==0)) {

        $('#err_event_name').addClass('has-error');
        $('#err_event_moto').addClass('has-error');
        $('#err_event_logo').addClass('has-error');
        $('#err_event_date').addClass('has-error');
        $('#err_reg_start_date').addClass('has-error');
        $('#err_reg_end_date').addClass('has-error');
        $('#err_event_type').addClass('has-error');
        $('#err_payment_type').addClass('has-error');
        $('#err_program_segmentation').addClass('has-error');
                  
        $('#err_event_name_msg').html("<div class='text-red'> Event Name Field must not be Empty!</div>");
        $('#err_event_moto_msg').html("<div class='text-red'> Event Moto Field must not be Empty!</div>");
        $('#err_event_logo_msg').html("<div class='text-red'> Event Logo must not be Empty! </div>");
        $('#err_event_date_msg').html("<div class='text-red'> Event Date Field must not be Empty!</div>");
        $('#err_reg_start_date_msg').html("<div class='text-red'> Registration Start Date must not be Empty! </div>");
        $('#err_reg_end_date_msg').html("<div class='text-red'> Registration End Date must not be Empty! </div>");
        $('#err_event_type_msg').html("<div class='text-red'> Event Type must not be Empty!</div>");
        $('#err_payment_type_msg').html("<div class='text-red'> Payment Type must not be Empty!</div>");        
        $('#err_msg_program_segmentation').html("<div class='text-red'> Program Segmentation must not be Empty!</div>");

          return false;
        } else if(event_name == "") {

        $('#err_event_name').addClass('has-error');
        $('#err_event_name_msg').html("<div class='text-red'> Event Name Field must not be Empty!</div>");
          return false;

        } else if(event_moto == "") {

        $('#err_event_moto').addClass('has-error');
        $('#err_event_moto_msg').html("<div class='text-red'> Event Moto Field must not be Empty!</div>");
        
        return false;
        } else if(document.getElementById("event_logo").files.length ==0) {

         $('#err_event_logo').addClass('has-error');
         $('#err_event_logo_msg').html("<div class='text-red'> Event Logo must not be Empty! </div>");
         
         return false;
       } else if(program_segmentation == "") {

        $('#err_program_segmentation').addClass('has-error');
        $('#err_msg_program_segmentation').html("<div class='text-red'> Program Segmentation must not be Empty!</div>");
        
        return false;
        } else if(event_date == "") {

         $('#err_event_date').addClass('has-error');
         $('#err_event_date_msg').html("<div class='text-red'> Event Date Field must not be Empty!</div>");

         return false;
       }  else if(reg_start_date == "") {

         $('#err_reg_start_date').addClass('has-error');
         $('#err_reg_start_date_msg').html("<div class='text-red'> Registration Start Date must not be Empty! </div>");
         return false;
       }  else if(reg_end_date == "") {
        
         $('#err_reg_end_date').addClass('has-error');
         $('#err_reg_end_date_msg').html("<div class='text-red'> Registration End Date must not be Empty! </div>");
         
         return false;
       }   else if(event_type == "") {
        
         $('#err_event_type').addClass('has-error');
         $('#err_event_type_msg').html("<div class='text-red'> Event Type must not be Empty!</div>");
         
         return false;
       }  else if(payment_type == "") {
        
         $('#err_payment_type').addClass('has-error');
         $('#err_payment_type_msg').html("<div class='text-red'> Payment Type must not be Empty!</div>");
         
         return false;
       } else {

            var form_data = new FormData();

            form_data.append('event_name', event_name);
            form_data.append('event_moto', event_moto);
            form_data.append('event_date', event_date);
            form_data.append('reg_start_date', reg_start_date);
            form_data.append('reg_end_date', reg_end_date);
            form_data.append('payable_amount', payable_amount);
            form_data.append('event_logo', event_logo);
            form_data.append('event_type', event_type);
            form_data.append('payment_type', payment_type);
            form_data.append('program_segmentation', program_segmentation);
            form_data.append('event_facebook', event_facebook);
            form_data.append('event_twitter', event_twitter);
            form_data.append('event_linkedin', event_linkedin);
            form_data.append('event_instagram', event_instagram);
            form_data.append('event_youtube', event_youtube);

            //alert(program_segmentation);

             e.preventDefault();
            $.ajax({
               type: "post",
               url: "ajax/event_add_ajax.php",
               data: form_data,
               processData: false,
               cache: false,
               contentType: false,
               success: function(event_data){
                $('#event_message').html(event_data);
               }
            });
            return false;
       }

    });
  });
</script>

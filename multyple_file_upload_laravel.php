<?php 

//     $new_file_upload_path='fleet/profile/'.$id.'/';
            
               /* if (!is_dir($new_file_upload_path)) {
                mkdir($new_file_upload_path, 0777, true);
                }*/

               /* if (!file_exists($new_file_upload_path)) {
                    mkdir($new_file_upload_path, 0777, true);
                  } */

                  /*else{
                    
                    array_map('unlink', glob($new_file_upload_path."*"));
                
                   }*/

if(!isset($_SESSION))
    { 
     @session_start();
    }

$url="";
if(isset($_COOKIE["LANGUAGE"])) {
    $url = 'demo/text/menu_'.$_COOKIE["LANGUAGE"].'.json'; // path to your JSON file

}else{
  $url = 'demo/text/menu_bn.json'; // path to your JSON file
}
  
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data);

//echo $_COOKIE["LANGUAGE"];
?>
<!--controller Part start -->

 public function index(Request $request)
    {  
       
      
      $this->validate($request, [
                'agent_first_name'       => 'required|max:55',
                'agent_last_name'        => 'required|max:55',
                'agent_image'            => 'mimes:jpeg,bmp,png,gif,jpg|max:5242880',
                'agent_email'            => 'required|email|max:55',
                'agent_mobile'           => 'required|min:11',
                'agent_phone_number'     => 'required|unique:fleets,mobile',
                'agent_present_address'  => 'required|max:255',
                'agent_permanent_address'=> 'required|max:255',
                'agent_area'             => 'required',
                'agent_documents'        => 'required',
                'agent_password'         => 'required|between:6,255',
                'privacy_policy_agent'   => 'required',
            ]);

       try {
            
            //$user = new User;
            //$user = $request->all();
            $data = array();

            if($request->has('agent_first_name') && $request->has('agent_last_name') ){

                $data['name'] = $request->agent_first_name." ".$request->agent_last_name;
            }

            if($request->hasFile('agent_image')){
                $data['logo'] = $request->agent_image->store('fleet/profile');  
            }

            if($request->has('agent_email')){

                $data['email']  = $request->agent_email;
            }

            if($request->has('agent_phone_number')){

                $data['mobile'] = $request->agent_phone_number;
            }

            if($request->has('agent_present_address')){

                $data['present_address'] = $request->agent_present_address;
            }

            if($request->has('agent_permanent_address')){

                $data['permanent_address'] = $request->agent_permanent_address;
            }

            if($request->has('agent_area')){

                $data['area_id'] = $request->agent_area;
            }

            if($request->has('agent_password')){

                $data['password'] = bcrypt($request->agent_password);
            }
           
          //$idf =  DB::table('fleets')->insertGetId($data);
            $fleet = Fleet::create($data);
            //return response()->json(['message' => 'Driver Registration Successfully!']);

           //DB::table('districts')->where('id', $request->agent_area)->update(['status'=>1]);

        if($request->hasFile('agent_documents')){

            $files = $request->file('agent_documents');

            /*$funame = "";
            $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
          
            for($i = 0; $i < 8; $i++)
            {
             $random_int = mt_rand();
             $funame .= $charset[$random_int % strlen($charset)];
            }*/

            $new_file_upload_path='fleet/profile/'.$fleet->id.'/';
            
                if (!is_dir($new_file_upload_path)) {
                mkdir($new_file_upload_path, 0777, true);
                }
                
                 
                foreach ($files as $file) {
                     $fileName = $file->getClientOriginalName();
                     $extension = $file->getClientOriginalExtension();
                     $storeName = $fileName. '.' . $extension;
                     // Store the file in the disk 
                     $file->move($new_file_upload_path, $storeName);
                 }

                 //$request->agent_documents->store('fleet/profile');  
            }

            $request->session()->flash('alert-success', 'Agent Registration Successfully!');
            return Redirect('/');
        }

        catch (Exception  $e) {
           //  return response()->json(['error' => trans('api.user.user_not_found')], 500);
			 
                   return response()->json(['status' => 'failure','error' => $e->getMessage()]);


	   }

    }
<!--controller part End -->


<!-- HTML form mulityple files-->
<div class="tab-pane" id="B" style="padding-top:10px;">
              <form role="form" name="myFormRider" id="myFormRider" method="post" action="{{ url('/rider-regitration') }}" class="contact-form">
             {{ csrf_field() }}
            <div class="clearfix"></div>
            <div class="form-group">
              <span style="color:#8F020E;font-size: 18px;font-weight: bold;"> {{ $errors->first('rider_first_name',':message') }} </span>
              <label class="sr-only" for="rider_first_name">Passenger First Name</label>
              <input type="text" class="form-control" id="rider_first_name" name="rider_first_name" placeholder="Passenger First Name">
            </div>
             <div class="clearfix"></div>
            <div class="form-group">
              <span style="color:#8F020E;font-size: 18px;font-weight: bold;"> {{ $errors->first('rider_last_name',':message') }} </span>
              <label class="sr-only" for="rider_last_name">Passenger Last Name</label>
              <input type="text" class="form-control" id="rider_last_name" name="rider_last_name" placeholder="Passenger Last Name">
            </div>
             <div class="clearfix"></div>
        <div class="form-group">
             <span style="color:#8F020E;font-size: 18px;font-weight: bold;"> {{ $errors->first('rider_email',':message') }} </span>
          <label class="sr-only" for="rider_email"></label>
          <input type="text" class="form-control" id="rider_email" name="rider_email" placeholder="Passenger Email address">
        </div>
            <div class="clearfix"></div>
            <div class="form-group">
            <input type="hidden" name="rider_phone_number" id="rider_phone_number" value="">
              <span style="color:#8F020E;font-size: 18px;font-weight: bold;"> {{ $errors->first('rider_mobile',':message') }} </span>
              <label class="sr-only" for="rider_phone">Contact No(+88)</label>
              <input type="number" onChange="return updatePhoneNumberRider();" class="form-control" onkeypress="return isNumberKey(event)" id="rider_phone" name="rider_mobile" placeholder="Contact No(01900000111)">
            </div>
         <div class="clearfix"></div>
            <div class="form-group">
              <span style="color:#8F020E;font-size: 18px;font-weight: bold;"> {{ $errors->first('rider_password',':message') }} </span>
             <input type="password" class="form-control" id="rider_password" name="rider_password" placeholder="Password"/>
            </div>
          <div class="form-group">
            <input type="password" class="form-control" id="rider_confirm_password" name="rider_confirm_password"  placeholder="Confirm Password"/>
          </div>
          <div class="clearfix"></div>
            <div class="form-check">
            	<label class="container_checkbox"> I agree with this <a href="{{ url('/privacy-policy') }}">Terms & Conditions</a>
				  <input type="checkbox" name="privacy_policy_rider" id="privacy_policy_rider">
				  <span class="checkmark_box"></span>
				</label>
            </div>
            <div class="clearfix"></div>
            <input id="rider_submit_button" name="submit" type="submit" class="btn btn-lg btn-info" value="<?php echo $characters[0]->SUBMIT; ?>">
          </form>
              </div>
              <div class="tab-pane" id="C" style="padding-top:10px;">
                <!-- This div is a Agent Registration Form Start -->
              <form role="form" name="myFormAgent" id="myFormAgent" method="post" action="{{ url('/agent-regitration') }}" class="contact-form" enctype="multipart/form-data">
             {{ csrf_field() }}
            <div class="clearfix"></div>
            <div class="form-group">
              <span style="color:#8F020E;font-size: 18px;font-weight: bold;"> {{ $errors->first('agent_first_name',':message') }} </span>
              <label class="sr-only" for="agent_first_name">First Name</label>
              <input type="text" class="form-control" id="agent_first_name" name="agent_first_name" placeholder="Agent First Name">
            </div>
             <div class="clearfix"></div>
            <div class="form-group">
              <span style="color:#8F020E;font-size: 18px;font-weight: bold;"> {{ $errors->first('agent_last_name',':message') }} </span>
              <label class="sr-only" for="agent_last_name">Last Name</label>
              <input type="text" class="form-control" id="agent_last_name" name="agent_last_name" placeholder="Agent Last Name">
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <p style="font-size: 18px;color: white;font-weight: bold;padding: 0;margin: 0;">Agent Image</p>
              <span style="color:#8F020E;font-size: 18px;font-weight: bold;">{{
                $errors->first('agent_image',':message') }}</span>
                <label class="sr-only" for="agent_image">Agent Image</label>
                <input type="file" class="form-control" id="agent_image" name="agent_image" accept="image/*">
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
             <span style="color:#8F020E;font-size: 18px;font-weight: bold;"> {{ $errors->first('agent_phone_number',':message') }} </span>
            <input type="hidden" name="agent_phone_number" id="agent_phone_number" value="">
              <span style="color:#8F020E;font-size: 18px;font-weight: bold;"> {{ $errors->first('agent_mobile',':message') }} </span>
              <label class="sr-only" for="agent_phone">Contact No(+88)</label>
              <input type="number" class="form-control" onkeypress="return isNumberKey(event)" id="agent_phone" onChange="return updatePhoneNumberAgent();" name="agent_mobile" placeholder="Contact No(01900000111)">
            </div>
            <div class="clearfix"></div>
          <div class="form-group">
              <span style="color:#8F020E;font-size: 18px;font-weight: bold;"> {{ $errors->first('agent_email',':message') }} </span>
        <label class="sr-only" for="agent_email"></label>
        <input type="text" class="form-control" id="agent_email" name="agent_email" placeholder="Email address">
        </div>
         <div class="clearfix"></div>
            <div class="form-group">
              <span style="color:#8F020E;font-size: 18px;font-weight: bold;"> {{ $errors->first('agent_present_address',':message') }} </span>
              <label class="sr-only" for="agent_present_address">Present Address</label>
              <input type="text" class="form-control" id="agent_present_address" name="agent_present_address" placeholder="Present Address">
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <span style="color:#8F020E;font-size: 18px;font-weight: bold;"> {{ $errors->first('agent_permanent_address',':message') }} </span>
              <label class="sr-only" for="agent_permanent_address">Permanent Address</label>
              <input type="text" class="form-control" id="agent_permanent_address" name="agent_permanent_address" placeholder="Permanent Address">
            </div>
          <div class="clearfix"></div>
           <div class="form-group">
            <span style="color:#8F020E;font-size: 18px;font-weight: bold;">
              {{ $errors->first('agent_area',':message') }}
            </span>
            <label class="sr-only" for="agent_area">Service Type</label>
            <select class="form-control" name="agent_area" id="agent_area">
              <option value="0" selected="" style="display: none;">Select Your Service Area</option>
                 <?php 
              $agent_services_a = DB::table('districts')->get();
              ?>
               @foreach($agent_services_a as $agent_services)
                <option value="{{ $agent_services->id }}">{{ $agent_services->name }}</option>
                   @endforeach
            </select>
          </div>
           <div class="clearfix"></div>
           <div class="form-group">
            <p style="font-size: 18px;color: white;font-weight: bold;padding: 0;margin: 0;">Agent Document (s)</p>
              <span style="color:#8F020E;font-size: 18px;font-weight: bold;">{{
                $errors->first('agent_documents',':message') }}</span>
                <label class="sr-only" for="agent_documents">Agent Document</label>
                <input type="file" class="form-control" id="agent_documents" name="agent_documents[]" multiple="" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf, image/*">
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <span style="color:#8F020E;font-size: 18px;font-weight: bold;"> {{ $errors->first('agent_password',':message') }} </span>
             <input type="password" class="form-control" id="agent_password" name="agent_password" placeholder="Password"/>
            </div>
          <div class="form-group">
            <input type="password" class="form-control" id="agent_confirm_password" name="agent_confirm_password"  placeholder="Confirm Password"/>
          </div>
          <div class="clearfix"></div>
            <div class="form-check">
            	<label class="container_checkbox"> I agree with this <a href="{{ url('/privacy-policy') }}">Terms & Conditions</a>
				  <input type="checkbox" name="privacy_policy_agent" id="privacy_policy_agent">
				  <span class="checkmark_box"></span>
				</label>
            </div>
            <div class="clearfix"></div>
            <input id="agent_submit_button" name="submit" type="submit" class="btn btn-lg btn-info" value="{{ $characters[0]->SUBMIT }}">
          </form>
         <!--  End Agent Restistration Form  -->
<!-- html form end-->



<!-- Show All File with laravel and php -->



<div class="table-responsive">
            <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                    <tr>
                        <th>Agent @lang('admin.id')</th>
                        <th>Documents File Name</th>
                        <th>@lang('admin.action')</th>
                    </tr>
                </thead>
                <tbody>
                   
                  
                       
                       <?php

                        $directory = public_path().'/fleet/profile/'.$fleet->id;

                        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
			
                        $count_=0;
                        while($it->valid()) { ?>
                            <tr>
                           <?php
                            if (!$it->isDot() AND $count_!=0) {
                             ?>
                             <td>{{ $fleet->id }}</td>
                              <td>
                             <?php
                                echo  $it->getSubPathName();
                                //echo  $it->key();
                               ?>
                               </td>
                               <td><a target="_blank" href="<?php echo '/fleet/profile/'.$fleet->id.'/'.$it->getSubPathName(); ?>" class="btn btn-danger">Download</a></td>
                           </tr>
                                <?php
                            }
                       $count_++;
                            $it->next();
                        }

                        ?>

                   
                   
                </tbody>
                <tfoot>
                    <tr>
                        <th>Agent @lang('admin.id')</th>
                        <th>Documents Files Name</th>
                        <th>@lang('admin.action')</th>
                    </tr>
                </tfoot>
            </table>
          </div>
		  <!--show end -->
		  <style>
		  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: blue;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #027FFF;
}
		  </style>
		  
		  
		  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-home"></i></button>
		  
		  
		  
		  <!-- Jquery and JavaScript -->
		  <script>
		   function validateEmail(email) {
			  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			  return re.test(email);
			}
			
			function topFunction() {
			  /*document.body.scrollTop = 0;
			  document.documentElement.scrollTop = 0;*/
			  $("html, body").animate({scrollTop: 0});
			}
			
			 function validation_IMAGE(text){
          switch(text){
                case 'gif': case 'jpg': case 'png': case 'JPG': case 'PNG': case 'jpeg': case 'JPEG':
               return true;
             
           default:
                    
                    return false;
                  
            }
         
         }
		 
		   function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
		
		function change_language(ext){
 //alert(ext);
setCookie("LANGUAGE", ext, 20);
  location.reload();
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

</script>
<script>
   $(document).ready(function(){
            
      $("#myFormDriver").on('submit',(function() {

       var driver_first_name        = $("#driver_first_name").val();
       var driver_last_name         = $("#driver_last_name").val();
       var driver_phone             = $("#driver_phone").val();
       var driver_present_address   = $("#driver_present_address").val();
       var driver_permanent_address = $("#driver_permanent_address").val();
       var driver_password          = $("#driver_password").val();
       var driver_confirm_password  = $("#driver_confirm_password").val();
       var nid_number               = $("#nid_number").val();
       var driver_license           = $("#driver_license").val();
       var car_licance              = $("#car_licance").val();
       var car_model                = $("#car_model").val();
       var service_type             = $("#service_type").val();
       var agent_name               = $("#agent_name").val();
       var privacy_policy_driver = document.getElementById("privacy_policy_driver").checked;

       if (driver_first_name == "" || driver_last_name == "" || driver_phone == "" || driver_password == "" || driver_present_address == "" || driver_permanent_address == "" || driver_confirm_password == "") {
        alert("Field must not be Empty!");
        return false;
       }else if(driver_password != driver_confirm_password){
        alert("Password and Confirmation doesn't match!");
        return false;
       }else if(nid_number == ""){
         alert("NID Number must not be Empty!");
        return false;
       }else if(driver_license ==""){
        alert("Driver License must not be Empty!");
        return false;
       }else if(car_licance == ""){
         alert("Service License must not be Empty!");
        return false;
       }else if(car_model == ""){
         alert("Service Model must not be Empty!");
        return false;
       }else if(service_type == "" || service_type == 0){
         alert("Services Type must not be Empty!");
        return false;
       }else if(agent_name == "" || agent_name == 0){
         alert("Agent Name must not be Empty!");
        return false;
       }else if(privacy_policy_driver == false){
          alert("Privacy & Policy Checkbox field must not be Empty!");
        return false;
       }else{ return true; }

        }));

      //Driver Phone number Field with cuntry code add ..
    $("#driver_phone").change(function(){

      var mobile = Number($(this).val());
      var bd_phone = "+880";
      var total = bd_phone.concat(mobile)
      $("#driver_phone_number").val(total);
     });

  function updatePhoneNumber(val)
  {
      $("#driver_phone").val(val);
      $("#driver_phone").trigger('change');
  }

      //Rider Form Validation with JQuery
      $("#myFormRider").on('submit',(function() {

       var rider_first_name        = $("#rider_first_name").val();
       var rider_last_name         = $("#rider_last_name").val();
       var rider_phone             = $("#rider_phone").val();
       var rider_password          = $("#rider_password").val();
       var rider_confirm_password  = $("#rider_confirm_password").val();
       var privacy_policy_rider = document.getElementById("privacy_policy_rider").checked;

       if (rider_first_name == "" || rider_last_name == "" || rider_phone == "" || rider_password == "" || rider_confirm_password == "") {
        alert("Field must not be Empty!");
        return false;
       }else if(rider_password != rider_confirm_password){
        alert("Password and Confirmation doesn't match!");
        return false;
       }else if(privacy_policy_rider == false){
          alert("Privacy & Policy Checkbox field must not be Empty!");
        return false;
       }else{ return true; }

        }));
      //Rider Phone number Field with cuntry code add ..

      $("#rider_phone").change(function(){
    
        var rider_mobile = Number($(this).val());
        var bd_phone = "+880";
        var rider_total = bd_phone.concat(rider_mobile)
        $("#rider_phone_number").val(rider_total);
     });



  function updatePhoneNumberRider(val)
  {
      $("#rider_phone").val(val);
      $("#rider_phone").trigger('change');
  }

    //Agent Registration From Validation .....

   $("#myFormAgent").on('submit',(function() {

       var agent_first_name        = $("#agent_first_name").val();
       var agent_last_name         = $("#agent_last_name").val();
       var agent_image_check       = $("#agent_image").val();
       var agent_image             = $('#agent_image').prop('files')[0];
       var agent_phone             = $("#agent_phone").val();
       var agent_email             = $("#agent_email").val();
       var agent_present_address   = $("#agent_present_address").val();
       var agent_permanent_address = $("#agent_permanent_address").val();
       var agent_area              = $("#agent_area").val();
       var agent_documents         = $("#agent_documents").val();
       var agent_password          = $("#agent_password").val();
       var agent_confirm_password  = $("#agent_confirm_password").val();
       var privacy_policy_agent = document.getElementById("privacy_policy_agent").checked;

       
       

       if (agent_first_name == "" || agent_last_name == "" || agent_phone == "" || agent_email == "" || agent_password == "" || agent_present_address == "" || agent_permanent_address == "" || agent_confirm_password == "") {
        alert("Field must not be Empty!");
        return false;
       } else if (agent_image_check == "") {
        alert("Agent Image Fienld Must Not be Empty!"); 
        return false;
      }else if(validation_IMAGE(agent_image)){
         alert("Choose Only Image"); 
         return false;
      } else if(agent_documents == ""){
        alert("Agent Documents Fienld Must Not be Empty!"); 
        return false;
      } else if ($("#agent_documents")[0].files.length > 4){
         alert("You can only upload a maximum of 4 files");
         return false;
      } else if(agent_password != agent_confirm_password){
        alert("Password and Confirmation doesn't match!");
        return false;
       }else if(agent_area == "" || agent_area == 0){
        alert("Agent Area Field not be Empty!");
        return false;
       }else if(privacy_policy_agent == false){
          alert("Privacy & Policy Checkbox field must not be Empty!");
        return false;
       }else{ return true; }

      }));

      //Driver Phone number Field with cuntry code add ..
    $("#agent_phone").change(function(){

      var agent_mobile = Number($(this).val());
      var bd_phone = "+880";
      var agent_total = bd_phone.concat(agent_mobile)
      $("#agent_phone_number").val(agent_total);
     });

  function updatePhoneNumberAgent(val)
  {
      $("#agent_phone").val(val);
      $("#agent_phone").trigger('change');
  }
    //Agent Form Work End .....

      });
		  
		  </script>
		  <!-- End -->
<!-- Image file exstis Checking -->
<img class="img-circle" src="<?php
                  if(empty($rows['USER_PROFILE_IMAGE'])){
                     echo 'dist/img/avatar5.png';
                  } else{
                      $user_image = '../user_app/'.$rows['USER_PROFILE_IMAGE'];
                      if(file_exists($user_image)){
                          echo $user_image;
                      } else{
                         echo 'dist/img/avatar5.png';
                      }
                  }
                   
                  
                  ?>" width="70" height="auto"/>		      

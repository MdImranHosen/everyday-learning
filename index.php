<!--
Name: MD Imran Hosen 
Phone: 01983912645
Dhaka, Bangladesh
www.github.com/MdImranHosen
-->
<?php
/* text details or many line text or Worlds but show 200 word and more option if big contents with php */

// strip tags to avoid breaking any html
$string = strip_tags($string);
if (strlen($string) > 500) {

    // truncate string
    $stringCut = substr($string, 0, 500);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href="/this/story">Read More</a>';
}
echo $string;

?>

////////////////////////////  When use admin panel or Anator use Text Editor box  insert fields.
But show result  with html tag this problem solveing use php ///////////

<?php
 Example Data  $tab_faq->site_content_details;
 
 echo htmlspecialchars_decode(stripslashes($tab_faq->site_content_details));
?>

//////// Image Upload with php laravel framework ..........//// mulityple

   <form enctype="multipart/form-data"/>

 <div class="form-group col-md-6">
      <input type="file" name="attached_file" id="attached_file" class="form-control" 
       accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, text/plain, application/pdf, image/*">
    </div>
<!-- controller in code -->
try {

           $data = array();
           $data['myride_name']    = $request->myride_name;
           $data['myride_email']   = $request->myride_email;
           $data['myride_subject'] = $request->myride_subject;
           $data['myride_mobile']  = $request->myride_mobile;
           $data['myride_message'] = $request->myride_message;

           // Start mail send...
              /*Mail::send('email.mail',
			    [
			        'name' => $request->get('myride_name'),
			        'email' => $request->get('myride_email'),
			        'message' => $request->get('myride_message')
			    ], function($message)
			    {
			        $message->from($request->get('myride_email'));
			        $message->to('imranhossen5912@gmail.com')->subject($request->get('myride_subject'));
			    });
			    $response = [
			        'status' => 'success',
			        'msg' => 'Mail sent successfully',
			    ];
			    return response()->json([$response], 200);*/
			
           //End mail send...

           
            //DB::table('contact_us')->insertGetId($data);
            $contact = Contact_us::create($data);

            if($request->hasFile('attached_file')){

                $new_file_upload_path='contact_files/'.$contact->id.'/';
            
                if (!is_dir($new_file_upload_path)) {    // Direcatory checking 
                mkdir($new_file_upload_path, 0777, true);
                }

                $request->attached_file->store($new_file_upload_path);  
            }

            $request->session()->flash('alert-success', 'Message Send Successfully!');
            return Redirect('/contact');
        }

        catch (Exception  $e) {
             
                   return response()->json(['status' => 'failure','error' => $e->getMessage()]);


       } 

<!-- End controller -->

<?php

               $new_dirn ='contact_files/'.$contactus->id;

               if (is_dir($new_dirn)) {
                 //echo '<script>alert("ok")</script>';
                 if ($files = glob($new_dirn."/*")){                   ////////////////////////Files Checking\\\\\\\\\\\\\\\\\\\\
                 $profile_img=$files[0];
                 echo '<a href="../../'.$profile_img.'" target="_blank" class="btn btn-danger">File Download</a>';
                }
               }

              ?>
ffempag 
and audio recorder
and message send
with javascript
coppertechbd.com  ///  30-4-2019
codignater framework

////////////////////////////HTML DOWNLOAD ///////////////
<a href=" uri" download >Download</a>

/////////////////////////////////FIRST TIME PHONE NUMBER API USE AND LEARNING ////////
  //step 1, get data, you can get these value from your database or any user submitted form.No need to urlencode here. Because it will send the data using POST method//
            


            //step 2, sendfunction//
$to = "+8801983912645";
$token = "xxxxxxxxxxxxxxxxxxxx";
$message = rawurlencode("Hi Your myride promocode: ");

$url = "http://domain.com/api.php";


$data= array(
'to'=>"$to",
'message'=>"$message",
'token'=>"$token"
); // Add parameters in key value
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
$smsresult = curl_exec($ch);

            //sendsms end//

// Today I first Ask Post https://stackoverflow.com 
//Navbar scrolling to fixed top fine working but when browser reloading  time mouse scrolling navbar fixed not working ?

// 26-6-2019  php Learning
<?php
$str = 'This is an encoded string';
echo base64_encode($str);
?>
output:  VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==

Use : www.site.com/index.php?action=<?php echo base64_encode($id); ?>

Get:  action   <?php 
  $id = base64_decode($_GET["action"]);
?>
<?php
//////////////////////////// Database to data table to skip one row data find keyword with laravel ///////////
  /* SELECT * FROM Customers
               WHERE NOT Country='Germany'; */

           $serviceDataal = ServiceType::orderBy('sort_order')->get();  
               //$serviceData = ServiceType::whereNotIn('name', 'Bike')->get();

			   
			   			   $index=0;
			    foreach($serviceDataal as $key => $value) {
               // echo $value->id . ", " . $value->name . "<br>";
            	if($value->name=='Bike'){
            	
            		unset($serviceDataal[$index]);

            	}
            $index+=1;
              }
			   
                return $serviceDataal;
?>

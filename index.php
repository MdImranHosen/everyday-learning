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

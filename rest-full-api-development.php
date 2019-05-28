// POSTMAN APP USE 
// https://www.getpostman.com
// install and api development

// https://reqres.in/

<?php
/**
 *  user_api_manage mantence..
 */
class user_api_manage extends Mainclass
{

	
	public function registrationAllData($data){
	    
        $USER_FULL_NAME = $data['USER_FULL_NAME'];
        $USER_EMAIL     = $data['USER_EMAIL'];
        $USER_MOBILE    = $data['USER_MOBILE'];
        $USER_PASSWORD  = $data['USER_PASSWORD'];
        
        $USER_FULL_NAME = mysqli_real_escape_string($this->db->link, $USER_FULL_NAME);
        $USER_EMAIL     = mysqli_real_escape_string($this->db->link, $USER_EMAIL);
        $USER_MOBILE    = mysqli_real_escape_string($this->db->link, $USER_MOBILE);
        $USER_PASSWORD  = mysqli_real_escape_string($this->db->link, $USER_PASSWORD);
        $USER_EMAIL     = filter_var($USER_EMAIL, FILTER_SANITIZE_EMAIL);

        
        $checkEmil = "SELECT USER_EMAIL FROM USER WHERE USER_EMAIL = '$USER_EMAIL' LIMIT 1";
        $mailcheck = $this->db->select($checkEmil);
        
        $checkMobile = "SELECT USER_MOBILE FROM USER WHERE USER_MOBILE = '$USER_MOBILE' LIMIT 1";
        $mobileCheck = $this->db->select($checkMobile);
        
        
         if (!filter_var($USER_EMAIL, FILTER_VALIDATE_EMAIL) !== false) {
             
     	  $alldata = "Invalied Email";
     	   
        }else if ($mailcheck != false) {
              
	      $alldata = "This Email Already Exist";
	      
         }elseif ($mobileCheck != false) {
             
	      $alldata = "This Mobile Number Already Exist";
	      
         }else{
             
             
            $reg_insert_query="INSERT INTO `USER`(`USER_FULL_NAME`, `USER_EMAIL`,`USER_MOBILE`,`USER_PASSWORD`) VALUES ('$USER_FULL_NAME','$USER_EMAIL','$USER_MOBILE','$USER_PASSWORD')";
		     $result = $this->db->insert($reg_insert_query);
		     if($result){
		         $alldata = "Success";
		     }
		  
         }
         
          $post_data = array(
              'response' => array(
                'result' => $alldata
              )
            );
            
            echo json_encode($post_data)."\n";
         
         
	    
	}
	
	public function getLoginData($data){
	    
        $USER_MOBILE    = $data['USER_MOBILE'];
        $USER_PASSWORD  = $data['USER_PASSWORD'];
        
        $USER_MOBILE    = mysqli_real_escape_string($this->db->link, $USER_MOBILE);
        $USER_PASSWORD  = mysqli_real_escape_string($this->db->link, $USER_PASSWORD);
        
        
        $checkMobile = "SELECT * FROM USER WHERE USER_MOBILE = '$USER_MOBILE' AND USER_PASSWORD = '$USER_PASSWORD'";
        $mobileCheck = $this->db->select($checkMobile);
        
        
         if ($mobileCheck != true) {
             
	      $userError = "Incorrect Username or Password";
	      
	      $post_data = array(
              'response' => array(
                'error' => $userError
              )
            );
            
           //echo json_encode($post_data)."\n";
	      
         }else{
             $value = $mobileCheck->fetch_assoc();
             
             $USER_FULL_NAME = $value['USER_FULL_NAME'];
             $USER_EMAIL     = $value['USER_EMAIL'];
             
            $post_data = array(
              'response' => array(
                'USER_FULL_NAME' => $USER_FULL_NAME,
                'USER_EMAIL'     => $USER_EMAIL,
                'USER_MOBILE'    => $USER_MOBILE,
                'USER_PASSWORD'  => $USER_PASSWORD
              )
            );
            
		  
         }
         
          echo json_encode($post_data)."\n";
	    
	}
	
}

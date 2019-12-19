<?php
 echo htmlspecialchars_decode(stripslashes($ksy->value));
?>
<?php 

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

Use:  <?php echo $characters[0]->MY_RIDE_APPS; ?>
Set:
<?php


if(isset($_COOKIE["LANGUAGE"]) AND $_COOKIE["LANGUAGE"]=="en") {

  ?>
        <a href="#" onclick="change_language('bn')"><i class="fa fa-globe" aria-hidden="true"></i> BAN</a>

  
  <?php
  
}else{

?>
        <a href="#" onclick="change_language('en')"><i class="fa fa-globe" aria-hidden="true"></i> ENG</a>


<?php
}
?>

<script type="text/javascript">
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

///////////  demo/text/menu_bn.json  //////////////////////

[
	{
		"HOME": "হোম",
		"GOAL": "উদ্দেশ্য",
		"SERVICES": "সেবা সমূহ",
		"INNOVATION_CORNER": "নবপ্রবর্তিত বস্তু",
		"DOWNLOAD": "ডাউনলোড",
		"AGENT_LOGIN": "এজেন্ট লগইন",
		"CONTACT_US": "যোগাযোগ",
		"ENJOY_RIDING":"প্রিমিয়াম ক্লাস রাইডিং সেবা উপভোগ করুন",
		"ENJOY_RIDING_BODY":"আরামের সঙ্গে ভ্রমণ করুন। বোতামে চাপ দিয়ে আপনি আপনার গন্তব্যে পৌঁছে যাবেন।",
		"SIGN_UP_NOW":"এখনই সাইন-আপ করুন!",
		"DRIVER":"ড্রাইভার",
		"RIDER":"ইউজার",
		"PASSENGER":"যাত্রী",
		"AGENT":"এজেন্ট",
		"SUBMIT":"সাবমিট"
	},	
	{
		"MY_RIDE_APPS": "My Ride Apps",
		"NEWS": "বার্তা",
		"FAQ": "প্রায়শই জিজ্ঞাসিত প্রশ্নাবলী",
		"Present_Services": "বর্তমান সেবা",
		"Upcoming_Services": "আসন্ন সেবা",
		"Driver_Training":"ড্রাইভার প্রশিক্ষণ",
		"Offers":"অফার",
		"Rider_App":"আরোহীর এপস",
		"Passengers_App":"যাত্রীর জন্য এপস",
		"Driver_App":"চালকের জন্য এপস",
		"HELP":"হেল্প",
		"ABOUT_US":"আমাদের সম্পর্কে",
		"Privacy_Policy":"প্রাইভেসি এন্ড  পলিসি"
	}
]

//////////////////// demo/text/menu_en.json  ///////////////////////////

[
	{
		"HOME": "HOME",
		"GOAL": "GOAL",
		"SERVICES": "SERVICES",
		"INNOVATION_CORNER": "INNOVATION CORNER",
		"DOWNLOAD": "DOWNLOAD",
		"AGENT_LOGIN": "AGENT LOGIN",
		"CONTACT_US": "CONTACT US",
		"ENJOY_RIDING":"Enjoy premium class Riding service",
		"ENJOY_RIDING_BODY":"Travel with comfort. With one tab of button, you'll be on your way to your destination.",
		"SIGN_UP_NOW":"SIGN UP NOW",
		"DRIVER":"Driver",
		"RIDER":"Rider",
		"PASSENGER":"Passenger",
		"AGENT":"Agent",
		"SUBMIT":"Submit"
	},	
	{
		"MY_RIDE_APPS": "My Ride Apps",
		"NEWS": "News",
		"FAQ": "FAQ",
		"Present_Services": "Present Services",
		"Upcoming_Services": "Upcoming Services",
		"Driver_Training":"Driver Training",
		"Offers":"Offers",
		"Rider_App":"Rider App",
		"Passengers_App":"App for Passenger",
		"Driver_App":"App for Driver",
		"HELP":"Help",
		"ABOUT_US":"About Us",
		"Privacy_Policy":"Privacy Policy"
	}
]


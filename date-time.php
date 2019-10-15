// IOS 8601 datetime formated to normal format 

<script>
  var datei = new Date("2019-09-04T18:37:18.000+0000");
         var datebir = datei.toJSON().slice(0,10).split("-").reverse().join("-");
         var timebir = datei.toJSON().slice(11,19);
	    // alert(datebir + " " + timebir);
	    var lastUpdatetime;
	    if(datei != ''){
         lastUpdatetime = datebir + " " + timebir;
	    } else{
	     lastUpdatetime = "00-00-0000 00:00:00"; //d-m-Y H:i:s
	    }
	$("#output").html(lastUpdatetime); 
</script>



<?php
/* *********************************** Date Different day count month count and years ********** */

    $exe = $admin->checkDateByMonth();

    while($row = $exe->fetch_assoc()) {
          $ac_date = $row['CREATE_DATE'];
          $dateEle = explode(' ', $ac_date);
          $date1   = $dateEle[0];
          $date2   = date("Y-m-d");
          /*$diff    = abs(strtotime($date2) - strtotime($date1));
          $years   = floor($diff / (365*60*60*24));
          $months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
          $days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
          echo $years." Years, ".$months." months, ".$days." days<br>";*/

     //printf("%d years, %d months, %d days \n", $years, $months, $days);
          $dateOne = new DateTime($date1);
          $dateTwo = new DateTime($date2);
          $interval = $dateOne->diff($dateTwo);
          echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 

          // shows the total amount of days (not divided into years, months and days like above)
          echo "<br> difference " . $interval->days . " days <br>";

  }

////////::::::::::::::::::: Date Start date to current date :::::::::::://///////
	 $st   = date("2019-10-01");
	 $cdte = date('Y-m-d');

	 $expire = strtotime($st);
	 $today  = strtotime($cdte);

	 if($today >= $expire){
	    echo "expired";
	 } else {
	    echo "Validate";
	 }

?>

////////////////::::::::::::::::::::::::::::::::::::: Two date between diffrent Hours get :::::::::::::::::::///////////
<script type="text/javascript">
	$(document).ready(function(){
		var date1 = "2019-07-16";
		var date2 = "2019-09-16";
		var dateOne = new Date(date1);
		var dateTwo = new Date(date2);

       var hours = Math.abs(dateTwo - dateOne) / 36e5;

  	   alert(hours);
	});
</script>

////::::::::::::::::::::::::::::::::::::::::::: Day add with Date :::::::::::::::::::::::://////
<?php
    $date = "2019-08-07";
    echo date('Y-m-d', strtotime($date. ' + 99 days'));
?>
//////::::::::::::::::::::::::::::::::::::::::::: Month add to fixed date :::::::::::::::::://////
<?php 
//echo date("Y-m-d", strtotime("+1 month")); 
$dsfd = "2019-09-01";
echo date("Y-m-d", strtotime($dsfd, "+1 month"));
?>

//////////////////////////////////////  IOS 8601 DATE TIME FORMATE /////////////////////////// JSON AND JAVASCRIPT ////////

<!DOCTYPE html>
<html>
<head>
	<title>Deal with Date in JSON</title>
	<script type="text/javascript">
		window.onload = function(){
          var jsonString = '{"fname":"Imran", "lname":"Hosen", "dob":827712000000}'; // Json Srting
          var jsObject = JSON.parse(jsonString); // Json String to convert javascript object..
          jsObject.dob = new Date(jsObject.dob); 
          //var birthday = jsObject.dob.toJSON();  // ios 8601 date format
         var birthday = jsObject.dob.toJSON().slice(0,10).split("-").reverse().join(".");   // used / . - join(" in ") show like 25.03.1996
         // alert(birthday);  //  25/03/1996

          var datec = new Date(827712000000);  // 827712000000   millisecond  
         // alert(datec);  //  Mon Mar 25 1996 06:00:00 GMT+0600 (Bangladesh Standard Time)
          var birthday_ios = datec.toJSON();  // ios 8601 date format
         // alert(birthday_ios); // 1996-03-25T00:00:00.000Z


          document.getElementById("result").innerHTML = jsObject.fname + " " + jsObject.lname + " was born " + birthday;
		};
	</script>
</head>
<body>
   <div id="result"></div>
</body>
</html>
//////::::::::::::::::::::::::::::::::::::Today Date Time get ::::::::::::::::::::::::::::::::////////////////
<?php 
  $startday = date('Y-m-d 00:00:00');
  $endday   = date('Y-m-d H:i:s');
  echo $todayt = $startday.'='.$endday;
  ?>
///:::::::::::::::::::::::::::::::::: Yester Day Start and end Time Get ::::::::::::::::::::::::::::///////////
<?php 
  $ysday = date("Y-m-d 00:00:00", time() - 60 * 60 * 24);
  $yeday = date("Y-m-d 23:59:00", time() - 60 * 60 * 24);
  echo $yesterday = $ysday.'='.$yeday;
  ?>
///:::::::::::::::::::::::::::::::::: This Week Start and end Date Time Get ::::::::::::::::::::::::::::///////////
<?php 
        $signupdate = date("Y-m-d H:i:s");
	$signupweek = date("W",strtotime($signupdate));
	$year=date("Y",strtotime($signupdate));
	$currentweek = date("W");

	for($i=$signupweek;$i<=$currentweek;$i++) {
	    $result_this_week=getWeek($i,$year);
	  echo  $this_week = $result_this_week["start"]."=".$result_this_week["end"];

	}

	function getWeek($week, $year) {
	  $dto = new DateTime();
	  $result_this_week["start"] = $dto->setISODate($year, $week, 0)->format("Y-m-d H:i:s");
	  $result_this_week["end"] = $dto->setISODate($year, $week, 6)->format("Y-m-d H:i:s");
	  return $result_this_week;
	} ?>
////////////////////////////////////jsvascript explode like php /////////////////// and date ios formate ///////////
<script> 

/*var dateobj = new Date('<?php #echo date("Y-m-d H:i:s"); ?>'); 
 // alert(dateobj);

var B = dateobj.toJSON(); 
alert(B);*/


//Loading the variable
/*var mystr = '0000000020C90037:TEMP:data';

//Splitting it with : as the separator
var myarr = mystr.split(":");

//Then read the values from the array where 0 is the first
//Since we skipped the first element in the array, we start at 1
var myvar = myarr[1] + ":" + myarr[2];

// Show the resulting value
console.log(myvar);
// 'TEMP:data'*/
</script> 

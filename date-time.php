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

?>

////::::::::::::::::::::::::::::::::::::::::::: Day add with Date :::::::::::::::::::::::://////
<?php
    $date = "2019-08-07";
    echo date('Y-m-d', strtotime($date. ' + 99 days'));
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

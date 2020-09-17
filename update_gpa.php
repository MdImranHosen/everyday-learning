<?php 
 $conn = new mysqli("localhost","root","","hons_2nd_2017_18");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

$sql = "SELECT * FROM hr_1st_year_19_info_improve";  /*WHERE reg = '18118000694'*/
$result = $conn->query($sql);
if ($result) {
	$i = 1;
	while ($row = $result->fetch_assoc()) {
	  $reg = $row['reg'];
	  $name = $row['name'];
      

	  $sqlp = "SELECT * FROM hr_1st_year_2017_18_marks_update WHERE reg = '$reg'";
	  $resultp = $conn->query($sqlp);
	  if ($resultp) {
	  	$lgpa = 0;
	  	$tgpa = 0;
	  	$tcredit = 0;
	  	$absc = 0;
	  	
	  	 while ($rows = $resultp->fetch_assoc()) {

	  	 	$gpa = $rows['gpa'];
	  	 	$credit = $rows['credit'];
	  	 	$lgrade = $rows['lgrade'];
	  	 	$registration = $rows['reg'];


           if (!empty($gpa) && preg_match('/^[0-9]+(\\.[0-9]+)?$/', $gpa)) {
            $lgpa += $gpa*$credit;	  	 	
	  	 	$tgpa += $gpa;
           }
	  	 	
           if ($lgrade == 'Abs' || $lgrade == 'abs') {
           	$absc += 1;
           } elseif($lgrade == 'NW' || $lgrade == 'W') {
           	$absc += 1;
           }

	  	   $tcredit += $credit;
            
	  	 }
	  	 if ($absc != 0) {
	  	 	
	  	 	echo $lgpa." Total g ".$tgpa." T C".$tcredit."<br>";
		  	
		  	 echo "Reg: ".$registration." Gpa: Abs  :".$i."<hr>";

            $sqle = "UPDATE hr_1st_year_2017_18_info_up SET ugpa = 'Abs', earncredit = '$tgpa', tcredit = '$tcredit', eps = '$lgpa' WHERE reg = '$registration'";
		  	 $resulte = $conn->query($sqle);	
		  	 
	  	 } else{
	  	 	echo $lgpa." Total g ".$tgpa." T C".$tcredit."<br>";

		  	 $lgpas = $lgpa / $tcredit;
		  	 $t = sprintf ("%.2f", $lgpas);

		  	 echo "Reg: ".$registration."   Finel ".$t."  No".$i."<hr>";

		  	 $sqleeee = "UPDATE hr_1st_year_2017_18_info_up SET ugpa = '$t', earncredit = '$tgpa', tcredit = '$tcredit', eps = '$lgpa' WHERE reg = '$registration'";
		  	 $resultuuuu3 = $conn->query($sqleeee);	  	
	  	 }

	  	 $i++;
         

	  }
	}
}


?>

<?php 
//PHP code to solve Tower of Hanoi problem. 
  
// Recursive Function to solve Tower of Hanoi 
function towerOfHanoi($n, $from_rod, $to_rod, $aux_rod) { 
      
    if ($n === 1) {
    echo ("<center>Move disk 1 from rod $from_rod to rod $to_rod </center><br>"); 
    return; 
    }  
      
    towerOfHanoi($n-1, $from_rod, $aux_rod, $to_rod); 
    echo ("<center> Move disk $n from rod $from_rod to rod $to_rod </center><br>"); 
    towerOfHanoi($n-1, $aux_rod, $to_rod, $from_rod); 
   
} 
  
// Driver code 
  
// number of disks 
if (isset($_POST['submit'])) {
	$n = $_POST['number_of_disks'];
	//$n = 3; 
   if (empty($n) || $n==1) {
   	 $msg = "<div style='color:red;'>Field is Required!</div>";
   } else{
     // A, B and C are names of rods 
     towerOfHanoi($n, 'A', 'C', 'B'); 
   }

}

   
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Tower of Hanoi</title>
</head>
<body>
<center>
	<form method="post" action="">
		<input type="number" placeholder="Type Number of Disks" style="padding: 10px;width: 40%;font-size: 20px;text-align: center;" required="" name="number_of_disks"><br><br>

    <input type="submit" style="padding: 10px;width: 40%;font-size: 20px;cursor: pointer;background-color: blue;border: 2px solid #ddd;border-radius: 5px;color: white;font-weight: bold;" name="submit">
	</form>
	
</center>
 <center>
 	<?php if (!empty($msg)) {
 		echo $msg;
 	} ?>
 </center>
</body>
</html>

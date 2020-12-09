<?php  
 $connect = mysqli_connect("localhost", "root", "", "test_db");

if (isset($_POST['submit'])) {

  $roll_number = 0;

  if (isset($_POST['roll'])) {
    $roll_number = $_POST['roll'];
    $roll_number = (int)$roll_number;
  }

$sql = "SELECT * FROM tbl_name WHERE roll = 0 ORDER BY id ASC";
$result = mysqli_query($connect, $sql);
if ($result) {
  $imran = '';
  $roll = 0;
  $i = 1;
  while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $name = $row['name'];
    $croll = $row['roll'];
    $roll = 0;

    if (empty($croll) || $croll == 0) {
        
        $sql1 = "SELECT max(roll) AS mx_roll FROM tbl_name";
        $result1 = mysqli_query($connect, $sql1);
        if ($result1) {
          while ($row1 = $result1->fetch_assoc()) {
          $roll = 0;

          if (($i == 1) && ($roll_number != 0)) {
            $roll = $roll_number;
            $i++;
          } else {
            $roll1 = $row1['mx_roll'];
            $roll = (int)$roll1;
          }
          
          $roll +=1;
          }

        }

      $sqlup = "UPDATE tbl_name SET roll = '$roll' WHERE roll != '$roll' AND id = '$id'";
      $result2 = mysqli_query($connect, $sqlup);
    }

  }
  
}
}
   // UPDATE `tbl_name` SET `roll`=0
?>
<!DOCTYPE html>
<html>
<head>
  <title> Roll Generate </title>
</head>
<body>
 <form action="" method="post">   
  <?php 
   $sql5 = "SELECT max(roll) AS mx_roll FROM tbl_name";
   $result6 = mysqli_query($connect, $sql5);
   if ($result6) {
    while ($row8 = $result6->fetch_assoc()) {
     echo $roll_n = $row8['mx_roll'];
      if ($roll_n == 0) { 
  ?>
   <input type="number" name="roll" required="" placeholder="Enter Start Roll">
  <?php } } } ?>
   <input type="submit" value="Roll Generate" name="submit">
 </form>
</body>
</html>

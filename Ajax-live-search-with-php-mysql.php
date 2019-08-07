<?php  

  /// Ajax live search start search.php page 

  define('HOST','127.0.0.1');
  define('USER','root');
  define('PASS','');
  define('DB','demo_db');

ini_set("include_path", '../php/DB/mysqli.php' . ini_get("include_path") );

 
 $con = mysqli_connect(HOST,USER,PASS,DB);

class Mainclass{
	
	 public function getTransitionSearchData($sdata){
      $sql = "SELECT demo_table.*, demo_table_tow.name, demo_table_tow.id as uid FROM demo_table INNER JOIN demo_table_tow ON demo_table_tow.id = demo_table.USER_ID WHERE demo_table.STATUS = 1 AND demo_table_tow.name LIKE '%$sdata%' OR demo_table.TRANSITION_ID LIKE '%$sdata%' OR demo_table.PAID_AMOUNT LIKE '%$sdata%' OR demo_table.PAID_FOR_DAYS LIKE '%$sdata%' OR demo_table.PER_MONTH_PAYABLE_AMOUNT LIKE '%$sdata%' OR demo_table.DESCRIPTION LIKE '%$sdata%' OR demo_table.PAID_BY LIKE '%$sdata%' ORDER BY demo_table.ID DESC";
        $result = mysqli_query($con, $sql);
   return $result;
 }

  public function getAllTransitionData(){
  $sql = "SELECT demo_table.*, demo_table_tow.id as uid, demo_table_tow.name  FROM demo_table INNER JOIN demo_table_tow ON demo_table_tow.id = demo_table.USER_ID WHERE demo_table.STATUS = 1 ORDER BY demo_table.id DESC";
  $result = $this->db->select($sql);
  return $result;
 }
}
 // this file work this page under......
$admin = new Mainclass();

 
if(isset($_GET['q'])){

      $sdata = $_GET['q'];

      $sresult = $admin->getTransitionSearchData($sdata);
        
      if ($sresult) {
          while ($rowd = $sresult->fetch_assoc()) {

                    $TRANSITION_ID = $rowd['TRANSITION_ID'];
                    $name          = $rowd['name'];
                    $PAID_BY       = $rowd['PAID_BY'];
                    $DESCRIPTION   = $rowd['DESCRIPTION'];
                    $PAID_AMOUNT   = $rowd['PAID_AMOUNT'];
                    $PAID_FOR_DAYS = $rowd['PAID_FOR_DAYS'];
                    $PER_MONTH_PAm = $rowd['PER_MONTH_PAYABLE_AMOUNT'];
                    $DATE_TIME     = $rowd['DATE_TIME'];
                    $uid           = $rowd['uid'];

                    echo "<tr><td><a href='history.php?uId=".$uid."'>".$name."</a></td><td>".$PAID_BY."</td><td>".$TRANSITION_ID."</td><td>".$DESCRIPTION."</td><td>".$PAID_AMOUNT."</td><td>".$PAID_FOR_DAYS."</td><td>".$PER_MONTH_PAm."</td><td>".$DATE_TIME."</td></tr>";

                    
          }
      }
}
/// Ajax live search End search.php page 
 
?>
 <!--  Start home.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Ajax Live Search</title>
</head>
<body>
 <input type="text" class="form-control input-lg" name="search" id="search" placeholder=" Search Now " onkeyup="showResult(this.value)">



 <table class="table table-striped">
              	<thead>
              		<tr>
              			<th>User Name</th>
              			<th>Paid By</th>
              			<th>Transition ID</th>
              			<th>Description</th>
              			<th>Paid Amount</th>
              			<th>Paid For Days</th>
              			<th>Pay amount /month</th>
              			<th>Date Time</th>
              		</tr>
              	</thead>
              	<tbody id="livesearch">
                  <?php
                  $rows = $admin->getAllTransitionData();
                  if ($rows) {
                    while ($rowd = $rows->fetch_assoc()) {
                  ?>
              		<tr>
              			<td><a href="transition-history.php?uId=<?php echo $rowd['uid']; ?>"><?php echo $rowd['name']; ?></a></td>
              			<td><?php echo $rowd['PAID_BY']; ?></td>
              			<td><?php echo $rowd['TRANSITION_ID']; ?></td>
              			<td><?php echo $rowd['DESCRIPTION']; ?></td>
              			<td><?php echo $rowd['PAID_AMOUNT']; ?></td>
              			<td><?php echo $rowd['PAID_FOR_DAYS']; ?></td>
              			<td><?php echo $rowd['PER_MONTH_PAYABLE_AMOUNT']; ?></td>
              			<td><?php echo $rowd['DATE_TIME']; ?></td>
              		</tr>
                  <?php } } ?>
              	</tbody>
              </table>
</body>
</html>

<script>
function showResult(str) {
	
 /* if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }*/

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","search.php?q="+str,true);
  xmlhttp.send();
}

</script>

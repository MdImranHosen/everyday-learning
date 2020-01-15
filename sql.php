<?php
///::::::::::::::::: Mysql two table as tableOne in tableTwo s tbl_tid foreign key and primary key ::::::::::::///////////
CREATE TABLE tableOne
(
  tbl_oid  int NOT NULL AUTO_INCREMENT,
  tbl_tid int NOT NULL,
  PRIMARY KEY (tbl_oid, tbl_tid),
  FOREIGN KEY(tbl_tid) REFERENCES tableTwo(tbl_tid)
);


SHOW CREATE TABLE vendors_category;

////::::::::::::: Database table data type Enum get data :::::php mysqli and ajax ::::::::::: way ////::::::::::::||\\\\\\\
?>
<div class="form-group has-feedback">
          <label class="control-label col-sm-2" for="event_type"> Event Type <span style="color:red;font-size: 20px;">*</span></label>
          <div class="col-sm-10"><div id="event_type_id"></div></div>
        </div> 

script type="text/javascript">
  $(document).ready(function() {
      $.ajax({
            url: "ajax/event_type_ajax.php",
            success: function(event_type_d) {
              $('#event_type_id').html(event_type_d);
            }
      });
  });
</script>
<?php
//-----------ajax file: ajax/event_type_ajax.php ------------
if (class_exists('EventClass')) {
	$event = new EventClass();

	if (method_exists($event, 'eventTypeGet')) {
		$msg = $event->eventTypeGet();
   }
}

?>
<?php
//------------- class php EventClass.php ------------
public function eventTypeGet() {

    $column_name = 'event_type';

    $selectd = "<select class='form-control' id='".$column_name."' name='".$column_name."'>";

    $result = mysqli_query($this->db->link, "SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS
       WHERE TABLE_NAME = 'event_list' AND COLUMN_NAME = 'event_type'");
    $row = $result->fetch_array();
    $enumList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE'])-6))));

    foreach($enumList as $value){
       $selectd .= "<option value='".$value."'>".$value."</option>";
    }  

    $selectd .= "</select>";
       
   echo $selectd;
  }


////////////::::::::::::::::::::end enum  type get type :::::::::::::\\\\\\\\\\\\\\\
?>

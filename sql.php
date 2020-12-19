<?php
///::::::::::::::::: Mysql two table as tableOne in tableTwo s tbl_tid foreign key and primary key ::::::::::::///////////
$sql = "CREATE TABLE tableOne
(
  tbl_oid  int NOT NULL AUTO_INCREMENT,
  tbl_tid int NOT NULL,
  PRIMARY KEY (tbl_oid, tbl_tid),
  FOREIGN KEY(tbl_tid) REFERENCES tableTwo(tbl_tid)
)";


"SHOW CREATE TABLE vendors_category";



"Aggregate Functions

These functions operate on the multiset of values of a column of
a relation, and return a value
avg:
average value
min:
minimum value
max:
maximum value
sum:
sum of values
count:
number of values
";

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

/////////:::::::::::::::::::::::::: duplicate check roll ::::::::::::::::::\\\\\\\\\\\\
SELECT `REGISTERED_STUDENTS_EXAM_ROLL`, COUNT(`REGISTERED_STUDENTS_EXAM_ROLL`) FROM registered_students GROUP BY `REGISTERED_STUDENTS_EXAM_ROLL` HAVING COUNT(`REGISTERED_STUDENTS_EXAM_ROLL`) > 1


////////////::::::::::::::::::::end enum  type get type :::::::::::::\\\\\\\\\\\\\\\

SELECT `hr_fourth_year_final_2018_paper_marks`.* FROM `hr_fourth_year_final_2018_paper_marks` JOIN temp_roll  on temp_roll.du_reg=hr_fourth_year_final_2018_paper_marks.reg 



SELECT * FROM `hr_fourth_year_final_2017_paper_marks` JOIN hr_fourth_year_final_2018_paper_marks_improve ON hr_fourth_year_final_2018_paper_marks_improve.reg=hr_fourth_year_final_2017_paper_marks.reg WHERE hr_fourth_year_final_2017_paper_marks.papercode=hr_fourth_year_final_2018_paper_marks_improve.papercode



UPDATE `hr_fourth_year_final_2017_paper_marks`  JOIN hr_fourth_year_final_2018_paper_marks_improve ON hr_fourth_year_final_2018_paper_marks_improve.reg=hr_fourth_year_final_2017_paper_marks.reg SET `hr_fourth_year_final_2017_paper_marks`.`tmark`=(),`hr_fourth_year_final_2017_paper_marks`.`lg`=(),`hr_fourth_year_final_2017_paper_marks`.`gpa`=(),`hr_fourth_year_final_2017_paper_marks`.`creadit`=() WHERE hr_fourth_year_final_2017_paper_marks.papercode=hr_fourth_year_final_2018_paper_marks_improve.papercode



UPDATE `hr_fourth_year_final_2017_paper_marks`  JOIN hr_fourth_year_final_2018_paper_marks_improve ON hr_fourth_year_final_2018_paper_marks_improve.reg=hr_fourth_year_final_2017_paper_marks.reg SET `hr_fourth_year_final_2017_paper_marks`.`tmark`=(case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`tmark` else hr_fourth_year_final_2018_paper_marks_improve.tmark end),`hr_fourth_year_final_2017_paper_marks`.`lg`=(case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`lg` else hr_fourth_year_final_2018_paper_marks_improve.lg end),`hr_fourth_year_final_2017_paper_marks`.`gpa`=(case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`gpa` else hr_fourth_year_final_2018_paper_marks_improve.gpa end),`hr_fourth_year_final_2017_paper_marks`.`creadit`=(case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`creadit` else hr_fourth_year_final_2018_paper_marks_improve.creadit end) WHERE hr_fourth_year_final_2017_paper_marks.papercode=hr_fourth_year_final_2018_paper_marks_improve.papercode
//Update count subquery
UPDATE `registered_students` SET `registered_students`.`sub_count`= (SELECT COUNT(selected_courses.SELECTED_COURSES_ID) FROM selected_courses WHERE selected_courses.REGISTERED_STUDENTS_ID = registered_students.REGISTERED_STUDENTS_ID GROUP BY selected_courses.REGISTERED_STUDENTS_ID) WHERE registered_students.REGISTERED_EXAM_ID = 3
?>

<?php 
 set_time_limit(0);
$mysqli = new mysqli("localhost","root","","db_du7");
// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: ". $mysqli->connect_error;
  exit();
}

$seql = "SELECT hr_fourth_year_final_2017_paper_marks.* FROM `hr_fourth_year_final_2017_paper_marks` JOIN hr_fourth_year_final_2018_paper_marks_improve ON hr_fourth_year_final_2018_paper_marks_improve.reg=hr_fourth_year_final_2017_paper_marks.reg WHERE hr_fourth_year_final_2017_paper_marks.papercode=hr_fourth_year_final_2018_paper_marks_improve.papercode";
$result = $mysqli->query($seql);
if ($result) {
	while ($rows = $result->fetch_assoc()) {
		$ID = $rows['ID'];
		$cid = $rows['cid'];
		$sid = $rows['sid'];
		$reg = $rows['reg'];
		$roll = $rows['roll'];
		$papercode = $rows['papercode'];
		$tmark = $rows['tmark'];
		$lg = $rows['lg'];
		$gpa = $rows['gpa'];
		$creadit = $rows['creadit'];

		if ($lg ) {
			# code...
		}



		$sql = "UPDATE `hr_fourth_year_final_2017_paper_marks` JOIN hr_fourth_year_final_2018_paper_marks_improve ON hr_fourth_year_final_2018_paper_marks_improve.reg=hr_fourth_year_final_2017_paper_marks.reg
		   SET `hr_fourth_year_final_2017_paper_marks`.`tmark` = (case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`tmark`
		   else hr_fourth_year_final_2018_paper_marks_improve.tmark end),
		   `hr_fourth_year_final_2017_paper_marks`.`lg` = (case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`lg`
		   else (case when (hr_fourth_year_final_2017_paper_marks.gpa > 3.25) then 'B+' else hr_fourth_year_final_2018_paper_marks_improve.lg end ) end),
		   `hr_fourth_year_final_2017_paper_marks`.`gpa`=(case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`gpa` else 
		   (case when (hr_fourth_year_final_2017_paper_marks.gpa > 3.25) then 'B+' else hr_fourth_year_final_2018_paper_marks_improve.gpa end ) end),
		   `hr_fourth_year_final_2017_paper_marks`.`creadit`=(case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`creadit` 
		   else hr_fourth_year_final_2018_paper_marks_improve.creadit end)
		    WHERE hr_fourth_year_final_2017_paper_marks.papercode=hr_fourth_year_final_2018_paper_marks_improve.papercode";		    



SELECT * FROM `hr_fourth_year_final_2017_paper_marks` JOIN hr_fourth_year_final_2018_paper_marks ON hr_fourth_year_final_2018_paper_marks.reg=hr_fourth_year_final_2017_paper_marks.reg WHERE hr_fourth_year_final_2017_paper_marks.papercode=hr_fourth_year_final_2018_paper_marks.papercode




UPDATE `hr_fourth_year_final_2017_paper_marks_muk` JOIN hr_fourth_year_final_2018_paper_marks_muk ON hr_fourth_year_final_2018_paper_marks_muk.reg = hr_fourth_year_final_2017_paper_marks_muk.reg SET `hr_fourth_year_final_2017_paper_marks_muk`.`tmark` = (case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`tmark` else hr_fourth_year_final_2018_paper_marks_muk.tmark end),`hr_fourth_year_final_2017_paper_marks_muk`.`lg`= (case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`lg` else hr_fourth_year_final_2018_paper_marks_muk.lg end),`hr_fourth_year_final_2017_paper_marks_muk`.`gpa`= (case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`gpa` else hr_fourth_year_final_2018_paper_marks_muk.gpa end),`hr_fourth_year_final_2017_paper_marks_muk`.`creadit`=(case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`creadit` else hr_fourth_year_final_2018_paper_marks_muk.creadit end) WHERE hr_fourth_year_final_2017_paper_marks_muk.papercode=hr_fourth_year_final_2018_paper_marks_muk.papercode



       UPDATE `hr_fourth_year_final_2017_paper_marks_muk` JOIN hr_fourth_year_final_2018_paper_marks_muk ON hr_fourth_year_final_2018_paper_marks_muk.reg=hr_fourth_year_final_2017_paper_marks_muk.reg
		   SET `hr_fourth_year_final_2017_paper_marks_muk`.`tmark` = (case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`tmark`
		   else hr_fourth_year_final_2018_paper_marks_muk.tmark end),
		   `hr_fourth_year_final_2017_paper_marks_muk`.`lg` = (case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`lg`
		   else (case when (hr_fourth_year_final_2017_paper_marks_muk.lg = 'F' AND hr_fourth_year_final_2018_paper_marks_muk.gpa > '3.25') then 'B+' else hr_fourth_year_final_2018_paper_marks_muk.lg end) end),
		   `hr_fourth_year_final_2017_paper_marks_muk`.`gpa` = (case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`gpa`
		    else (case when (hr_fourth_year_final_2017_paper_marks_muk.lg = 'F' AND hr_fourth_year_final_2018_paper_marks_muk.gpa > '3.25') then '3.25' else hr_fourth_year_final_2018_paper_marks_muk.gpa end) end),
		   `hr_fourth_year_final_2017_paper_marks_muk`.`creadit`=(case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`creadit` 
		   else hr_fourth_year_final_2018_paper_marks_muk.creadit end)
		    WHERE hr_fourth_year_final_2017_paper_marks_muk.papercode=hr_fourth_year_final_2018_paper_marks_muk.papercode



 SELECT (case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark` > hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`tmark` else hr_fourth_year_final_2018_paper_marks_muk.tmark end) AS tmark, (case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`lg`
   else (case when (hr_fourth_year_final_2017_paper_marks_muk.lg = 'F' AND hr_fourth_year_final_2018_paper_marks_muk.gpa > 3.25) then 'B+' else hr_fourth_year_final_2018_paper_marks_muk.lg end ) end) AS lg, (case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`gpa` else 
   (case when (hr_fourth_year_final_2017_paper_marks_muk.lg = 'F' AND hr_fourth_year_final_2018_paper_marks_muk.gpa > 3.25) then 3.25 else hr_fourth_year_final_2018_paper_marks_muk.gpa end ) end) AS gpa, (case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`creadit` 
   else hr_fourth_year_final_2018_paper_marks_muk.creadit end) AS creadit FROM hr_fourth_year_final_2017_paper_marks_muk JOIN hr_fourth_year_final_2018_paper_marks_muk ON hr_fourth_year_final_2018_paper_marks_muk.reg = hr_fourth_year_final_2017_paper_marks_muk.reg 
    WHERE hr_fourth_year_final_2017_paper_marks_muk.papercode = hr_fourth_year_final_2018_paper_marks_muk.papercode



        $upsql = $mysqli->query($sql);
	}
}

/* $sql = "UPDATE `hr_fourth_year_final_2017_paper_marks` JOIN hr_fourth_year_final_2018_paper_marks_improve ON hr_fourth_year_final_2018_paper_marks_improve.reg=hr_fourth_year_final_2017_paper_marks.reg SET `hr_fourth_year_final_2017_paper_marks`.`tmark`=(case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`tmark` else hr_fourth_year_final_2018_paper_marks_improve.tmark end),`hr_fourth_year_final_2017_paper_marks`.`lg`=(case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`lg` else hr_fourth_year_final_2018_paper_marks_improve.lg end),`hr_fourth_year_final_2017_paper_marks`.`gpa`=(case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`gpa` else hr_fourth_year_final_2018_paper_marks_improve.gpa end),`hr_fourth_year_final_2017_paper_marks`.`creadit`=(case when (`hr_fourth_year_final_2017_paper_marks`.`tmark`> hr_fourth_year_final_2018_paper_marks_improve.tmark) then `hr_fourth_year_final_2017_paper_marks`.`creadit` else hr_fourth_year_final_2018_paper_marks_improve.creadit end) WHERE hr_fourth_year_final_2017_paper_marks.papercode=hr_fourth_year_final_2018_paper_marks_improve.papercode";
 $upsql = $mysqli->query($sql);*/

      UPDATE `hr_fourth_year_final_2017_paper_marks_muk` JOIN hr_fourth_year_final_2018_paper_marks_muk ON hr_fourth_year_final_2018_paper_marks_muk.reg=hr_fourth_year_final_2017_paper_marks_muk.reg
	   SET `hr_fourth_year_final_2017_paper_marks_muk`.`tmark` = (case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`tmark`
	   else hr_fourth_year_final_2018_paper_marks_muk.tmark end),
	   `hr_fourth_year_final_2017_paper_marks_muk`.`lg` = (case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`lg`
	   else (case when (hr_fourth_year_final_2017_paper_marks_muk.lg = 'F' AND hr_fourth_year_final_2018_paper_marks_muk.gpa > '3.25') then 'B+' else hr_fourth_year_final_2018_paper_marks_muk.lg end) end),
	   `hr_fourth_year_final_2017_paper_marks_muk`.`gpa` = (case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`gpa`
	    else (case when (hr_fourth_year_final_2017_paper_marks_muk.lg = 'F' AND hr_fourth_year_final_2018_paper_marks_muk.gpa > '3.25') then '3.25' else (case when (hr_fourth_year_final_2017_paper_marks_muk.lg = 'B+') then '3.25' else hr_fourth_year_final_2018_paper_marks_muk.gpa end) end) end),
	   `hr_fourth_year_final_2017_paper_marks_muk`.`creadit` = (case when (`hr_fourth_year_final_2017_paper_marks_muk`.`tmark`> hr_fourth_year_final_2018_paper_marks_muk.tmark) then `hr_fourth_year_final_2017_paper_marks_muk`.`creadit` 
	   else hr_fourth_year_final_2018_paper_marks_muk.creadit end)
	    WHERE hr_fourth_year_final_2017_paper_marks_muk.papercode=hr_fourth_year_final_2018_paper_marks_muk.papercode

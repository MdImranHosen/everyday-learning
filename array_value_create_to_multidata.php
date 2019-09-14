<?php
  $chartSql = "SELECT *, COUNT(EXAM_DETAIL_GIVEN_ANS) AS RIGHT_ANS_OK FROM `OES_EXAM_VIEW` WHERE
 `REGISTERED_STUDENT_ID`='$REGISTERED_STUDENT_ID' AND `REGISTERED_EXAM_ID`='$EXAM_ID' AND EXAM_DETAIL_GIVEN_ANS = ANSWER GROUP BY
 REGISTERED_CHAPTER_NAME ORDER BY REGISTERED_CHAPTER_NAME ASC";
  
  $result_chart = mysqli_query($con,$chartSql);
	
	if ($result_chart->num_rows > 0) {
										   
	 
	  $allchartdata = array();
	  $chaptercount = array();
	  foreach($result_chart as $valueschap)
	  {
	    $allchartdata[] = $valueschap['REGISTERED_CHAPTER_NAME']; 
	    
	    $chaptercount[] = $valueschap['RIGHT_ANS_OK'];
	    $examName       = $valueschap['REGISTERED_EXAM_NAME'];
	  }
	  
	  $arrayvc = array_values($allchartdata);
	  $rsfds = '"'.implode('", "', $arrayvc);
	  
	  $chcount = array_values($chaptercount);
	  $chaptercounts = implode(", ", $chcount);
     
 }
  ?>

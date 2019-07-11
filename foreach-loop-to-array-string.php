  <?php
   $users_all = DB::table('users')->get();
   //$items = array();
   $items = '';
   foreach ($users_all as $key => $value) {
   
   //$phone['result'][] = array($value->mobile);
    $items .= $value->mobile.',';
    
   }
   ?>
   <?php
   //print_r($items);
   echo $items;

  ?>

<!-- Chart Use and foreach with group by count and chart value show --> 
<link rel="stylesheet" type="text/css" href="../assets/css/Bootstap.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/css/mdb.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/js/query.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/js/mdb.min.js"></script>

<canvas id="barChart"></canvas>
  <?php 

  $chartSql = "SELECT COUNT(REGISTERED_CHAPTER_ID) as chapcount, REGISTERED_CHAPTER_NAME, REGISTERED_EXAM_NAME FROM OES_EXAM_VIEW WHERE REGISTERED_EXAM_ID = '$EXAM_ID' GROUP BY  REGISTERED_CHAPTER_NAME ORDER BY REGISTERED_CHAPTER_NAME ASC";
  
  $result_chart = mysqli_query($con,$chartSql);
	
	if ($result_chart->num_rows > 0) {
										   
	 
	  $allchartdata = array();
	  $chaptercount = array();
	  foreach($result_chart as $valueschap)
	  {
	    $allchartdata[] = $valueschap['REGISTERED_CHAPTER_NAME']; 
	    
	    $chaptercount[] = $valueschap['chapcount'];
	    $examName       = $valueschap['REGISTERED_EXAM_NAME'];
	  }
	  
	  $arrayvc = array_values($allchartdata);
	  $rsfds = '"'.implode('", "', $arrayvc);
	  
	  $chcount = array_values($chaptercount);
	  $chaptercounts = implode(", ", $chcount);
     
    
  ?>
	   <script>
  //bar
  var ctxB = document.getElementById("barChart").getContext('2d');
  var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
      labels: [<?php  echo $rsfds.'"'; ?>],
      datasets: [{
        label: '<?php echo $examName; ?>',
        data: [<?php echo $chaptercounts; ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });

</script>
<?php  } ?>

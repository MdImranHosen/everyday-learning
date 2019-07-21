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

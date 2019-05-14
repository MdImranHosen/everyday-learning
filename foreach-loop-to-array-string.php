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

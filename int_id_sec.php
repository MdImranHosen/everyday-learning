<?php
$hall_id = $this->fm->validation($hall_id);
      $hall_id = mysqli_real_escape_string($this->db->link, $hall_id);
      $hall_id = preg_replace('/[^-a-zA-Z0-9_]/','', $hall_id);
      $hall_id = preg_replace('/\D/', '', $hall_id);
      $hall_id = htmlentities($hall_id);
      $hall_id = (int)$hall_id;

<?php
/* text details or many line text or Worlds but show 200 word and more option if big contents with php */

// strip tags to avoid breaking any html
$string = strip_tags($string);
if (strlen($string) > 500) {

    // truncate string
    $stringCut = substr($string, 0, 500);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '... <a href="/this/story">Read More</a>';
}
echo $string;

?>

////////////////////////////  When use admin panel or Anator use Text Editor box  insert fields.
But show result  with html tag this problem solveing use php ///////////

<?php
 Example Data  $tab_faq->site_content_details;
 
 echo htmlspecialchars_decode(stripslashes($tab_faq->site_content_details));
?>


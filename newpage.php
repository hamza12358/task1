<?php




$fname =  $_POST['fname'] . '<br>';
  $lname =  $_POST['lname'] . '<br>';
  $email =  $_POST['email'] . '<br>';
  $mnumber =  $_POST['mnumber'] . '<br>';
   $number =  $_POST['requirno'] . '<br>';
  


for ($counts = 1 ; $counts <= $number ; $counts++){
	echo "form no " .$counts . '<br>'. $fname . '<br>' . $lname . '<br>' . $email . '<br>' . $mnumber  . '<br>';

}
?>


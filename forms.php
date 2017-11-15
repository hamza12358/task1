
<?php

$number =  $_POST['number'];

  $form =  '<form method = "post" action = "newpage.php">';
 
for ($count = 1 ; $count <= $number ; $count++){
    echo "form no " . $count . '<br>' . $form .  'first name :<input type = "text" name = "fname">' . '<br>' . 'last name:<input type = "text" name = "lname">'  . '<br>' . 'Email :<input type = "text" name = "email">'. '<br>' . 'Mobile no : <input type = "text" name = "mnumber">' . '<br>' . '<br>'.'<br>' ;
	
}
echo "<input type = 'hidden' value = '$number' name='requirno'>";
echo "<input type = 'submit' value = 'submit'>";
 
 
?>


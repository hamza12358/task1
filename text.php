<?php
function hit_count(){
	
if(isset($_POST['number'])){
	$number = $_POST['number'] ;
	
	if(!empty($number)){
		if($number <= 5){
			header('Location:forms.php ');
			
		}else{
			echo "please enter number form 1 to 5";
		}
	}else{
		echo "please enter the number";
	}
}
}
hit_count();
?>
<?php

for ($count = 1 ; $count <= $number ; $count++){
    echo "form no " . $count . '<br>';
}


?>

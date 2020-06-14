<?php

if(isset($_POST['tipo'])){
	if($_POST['tipo']==1){
		include("slider1.php");
		?>

				

		<?php
	}elseif ($_POST['tipo']==2) {
		?>


		
		<?php
	}
	elseif ($_POST['tipo']==3) {
		?>

				
		
		<?php
	}
	elseif ($_POST['tipo']==4) {
		?>

		
		
		<?php
	}
	elseif ($_POST['tipo']==5) {
		?>

		
		
		<?php
	}
}else{
	echo "<h1>No ha selecionado el tipo</h1>";
}

?>
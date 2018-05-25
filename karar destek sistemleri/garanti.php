<?php 
require_once 'baglan.php';
$veriler=$db->prepare("SELECT * from kurulus ");
	$veriler->execute();	

	while($verilercek=$veriler->fetch(PDO::FETCH_ASSOC)) {
	
		if (isset($_POST['Pazara_Yakinlik1'])) {
			$topla1=($_POST['Pazara_Yakinlik1']);
			//print_r($topla);

		}


			echo("<br>");
			$tops=array_sum($verilercek);
			echo $islem1=($tops*$topla1);
				echo("<br>");
					echo("<br>");
					echo("<pre>");
					print_r($verilercek);
					echo("<pre"); 
					echo("<br>");
					echo("<hr>");
		



			# code...
		
	}










	





 ?>

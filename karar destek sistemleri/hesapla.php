
<!DOCTYPE html>
<html>
<head>
	<title>Sonuç</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<div class="jumbotron" style="background-color:#3c42ae;color: white"><p class="display-1">Kuruluş Yeri Kararı<br> Sonuç Listesi</p> 

		










<?php 
require_once 'baglan.php';
$veriler=$db->prepare("SELECT * from kurulus ");
	$veriler->execute();	

	while($verilercek=$veriler->fetch(PDO::FETCH_ASSOC)) {
	
		if (isset($_POST['Pazara_Yakinlik1'])) {
			$topla1=($_POST['Pazara_Yakinlik1']);?>
			

<div style="color:white">
	<?php 

			echo("<br>");
			$tops=array_sum($verilercek);?>
		<div style="font-size: 30px;"> <?php echo $islem1=($tops*$topla1);?></div>
				<?php echo("<br>");
					echo("<br>");
					echo("<pre>");?>
				<div style="color: white;font-size: 15px"><?php  	print_r($verilercek);?> </div>
				<?php	echo("<pre"); 
					echo("<br>");
					echo("<hr>");
		



			# code...
		}
	}?></div>










	





 ?>
 	</div>
 	</div>
 </body>
</html>





	


<?php 
error_reporting(0);
require_once 'baglan.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

	<title>Kurulus Yeri</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">



	<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}
table#t01 th {
    background-color: #696969;
    color: white;
}
</style>
<div style="background-color:#3c42ae">
<style type="text/css">
	
	#div1{
		display: none;
	}
</style>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
		$(document).ready(function(){

			$("#kayit_ekle").click(function(){
				
				$("#div1").show();
				
			});


		})
	</script>

</head>
<body>
	
	<div class="container">
		<br>

		<h1 style="color:white;font-size: 50px ">İşletmelerde Kuruluş Yeri Kararı</h1>
		<br>
		<br>
		<center>
		<button id="kayit_ekle" class="btn btn-outline-light ">KAYIT EKLE</button></center>
		<br>
		<br>
	
  <!-- Content here -->

	
	
	</div>
	
	<br>
	<div  id="div1" align="center">

	<form action="islem.php" method="POST" >
		<label style="color: white;">KAYIT EKLEME</label>



	
	
		<input type="text" name="Il" placeholder="il adı giriniz : ">
		<input type="number" name="Pazara_Yakinlik" placeholder="Pazara yakınlık degeri giriniz : ">
		<input type="number" name="Altyapi" placeholder="Altyapı degeri giriniz : ">
		<input type="number" name="Ulasim" placeholder="Ulaşım degeri giriniz : ">
		<input type="number" name="Isgucu" placeholder="İşgücü degeri giriniz : ">
		<input type="number" name="Tesvik_Edici_Faktorler" placeholder="Tesvik edici faktör degeri giriniz : ">

	  <button type="submit"  name="crud" class="btn btn-secondary">Formu Gönder</button>
	</form>
	</div>
	<br>
	<div align="center" >
	<form method="POST" action="hesapla.php">
		<label style="color: white;">Sonuç Hesaplama</label>


	
	
		
		<input type="number" step="0.01" name="Pazara_Yakinlik1" placeholder="Pazara yakınlık puanı giriniz : ">
		<input type="number" step="0.01" name="Altyapi1" placeholder="Altyapı puanı giriniz : ">
		<input type="number" step="0.01" name="Ulasim1" placeholder="Ulaşım puanı giriniz : ">
		<input type="number" step="0.01" name="Isgucu1" placeholder="İşgücü puanı giriniz : ">
		<input type="number" step="0.01" name="Tesvik_Edici_Faktorler1" placeholder="Tesvik edici faktör puanı giriniz : ">

	  <button type="submit"  name="crud" class="btn btn-secondary">Formu Gönder</button>
	</form>
	</div>
	<br>




		<?php 
	if ($_GET['durum']=="ok") {
		echo "İşlem Başarılı";

		# code...
	}elseif ($_GET['durum']=="no") {
		echo("islem basarısız");
	 	
	 } 




	?>


	<hr>
	<h2></h2>
	<hr>


	<?php 
	

	 ?>

	 <div class="table-responsive">  


	 <table style="width: 60%" border="1"  id="t01" align="center">
	 	<tr>
	 		
	 		<th>İl</th>
	 		
	 		<th>Pazara Yakınlık</th>
	 		

	 		<th>Altyapı</th>
	 		

	 		<th>Ulaşım</th>
	 	

	 		<th>İşgücü</th>
	 		

	 		<th>Teşvik Edici Faktörler</th>
	 		
	
	 		
	 		<th width="50">Sonuç</th>
	 		<th width="50">İşlemler</th>
	 		
	 	</tr>


	 	<?php 



	 	$bilgilerimsor=$db->prepare("SELECT * from kurulus");
	$bilgilerimsor->execute();	

	$say=0;


	while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) {$say++?>









	 	<tr>
	 		
	 		
			<td><?php echo($bilgilerimcek['Il']) ?></td>
				
	 		<td><?php echo($bilgilerimcek['Pazara_Yakinlik']) ?></td>
	 			
	 		<td><?php echo($bilgilerimcek['Altyapi']) ?></td>
	 		
	 		<td><?php echo($bilgilerimcek['Ulasim']) ?></td>
	 			
	 		<td><?php echo($bilgilerimcek['Isgucu']) ?></td>
	 			
	 		<td><?php echo($bilgilerimcek['Tesvik_Edici_Faktorler']) ?></td>
	 		
	 		
	 		<td></td>
	 		

	 		<td align="center"><a href=""><button class="btn btn-info">Sil</button></a></td>
	 		


	 	</tr>

	 	<?php } ?>
	 	
	 </table>
	 </div>






	 <?php 


	  ?>
	


</body>

</html>
</div>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Veritabanı Pdo Duzenleme işlemleri</h1>
	<br>
	<hr>
	<?php 
 
	if ($_GET['durum']=="ok") {
		echo "islem basarılı";

		# code...
	}elseif ($_GET['durum']=="no") {
		echo("islem basarısız");
	 	
	 } 




	?>

	<?php

	$bilgilerimsor=$db->prepare("SELECT * from kurulus where bilgilerim_id=:id");
	$bilgilerimsor->execute(array(
		'id'>= $_GET['bilgilerim_id']
	));	
	$bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC) ;
 
	 ?>



	<hr>
	<br>

	<form action="islem.php" method="POST">
	  <input type="text" required="" name="bilgilerim_ad" value="<?php echo($bilgilerimcek['bilgilerim_ad']) ?> ">
	  <input type="text" required="" name="bilgilerim_soyad" placeholder="Soyadınızı Giriniz ">
	  <input type="email" required="" name="bilgilerim_mail" placeholder="Email Giriniz ">
	  <input type="text" required="" name="bilgilerim_yas" placeholder="Yas Giriniz ">
	  <button type="submit"  name="crud">Formu Gönder</button>
	</form>

	<hr>

	<hr>


</body>
</html>

<?php 
try {


	$db=new PDO("mysql:host=localhost;dbname=kurulusy;charset=utf8",'root','');
	//echo("veritabanı baglantısı basarılı");
} catch(PDOException $e) {
	echo 'Baglantı kurulamadı: '.$e->getMessage();



}



 ?>
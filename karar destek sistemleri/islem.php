<?php 

require_once 'baglan.php';

if (isset($_POST['crud'])) {
	
	$kaydet=$db->prepare("INSERT into kurulus set
		il=:Il,
		Pazara_Yakinlik=:Pazara_Yakinlik,
		Altyapi=:Altyapi,
		Ulasim=:Ulasim,
		Isgucu=:Isgucu,
		Tesvik_Edici_Faktorler=:Tesvik_Edici_Faktorler



		");

	$insert=$kaydet->execute(array(
		'Il' => $_POST['Il'],
		'Pazara_Yakinlik' => $_POST['Pazara_Yakinlik'],
		'Altyapi' => $_POST['Altyapi'],
		'Ulasim' => $_POST['Ulasim'],
		'Isgucu' => $_POST['Isgucu'],
		'Tesvik_Edici_Faktorler' => $_POST['Tesvik_Edici_Faktorler']
	));



	if ($insert) {
		header("Location:index.php?durum=ok");
		exit;

		# code...
	}else {
		header("Location:index.php?durum=no");
		exit;
	}
}
if ($_GET['bilgilerimsil']=="ok") {
	

	$sil=$db->prepare("DELETE from kurulus where bilgilerim_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['bilgilerim_id']
	));

	if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:index.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:index.php?durum=no");
		exit;
	}


}


 ?>
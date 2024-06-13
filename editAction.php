<?php

try	{
	$db = new PDO('mysql:host=localhost:3307;dbname=veritabani','veritabani_user','veritabani123');
	
if (isset($_POST['update'])) {

	$id = $_POST['id'];
	$adi = $_POST['Adi'];
	$soyadi =  $_POST['Soyadi'];
	$sinif =(int) $_POST['Sinif'];
	$sube =  $_POST['Sube'];	
	$no =(int) $_POST['Numara'];
	$yas =(int)  $_POST['Yas'];	
	

	if (empty($adi) || empty($soyadi) || empty($sinif) || empty($no)|| empty($sube)) {
		if (empty($adi)) {
			echo "<font color='red'>Ad Boş Geçilemez.</font><br/>";
		}
		
		if (empty($soyadi)) {
			echo "<font color='red'>Soyadı Boş Geçilemez.</font><br/>";
		}
		
		if (empty($sinif)) {
			echo "<font color='red'>Sınıf Boş Geçilemez.</font><br/>";
		}
		if (empty($sube)) {
			echo "<font color='red'>Şube Boş Geçilemez.</font><br/>";
		}
		if (empty($no)) {
			echo "<font color='red'>Numara Boş Geçilemez.</font><br/>";
		}
		

	} else {
		$db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = "UPDATE ogrenciler  SET Adi='$adi', Soyadi='$soyadi', Sinif= $sinif, Sube='$sube',Numara= $no, Yas= $yas WHERE ID=$id"  ;
		$db->exec($result);
		
	
	echo "<p><font color='green'>Başarılı!</p>";
	echo "<a href='index.php'>Anasayfa'ya Git</a>";
	}
}
}
catch (PDOException $hata)
{
	die("Bağlantı Kurulamadı:".$hata->getMessage());
}

?>

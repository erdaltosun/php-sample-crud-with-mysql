<html>
<head>
	<title>Ekle</title>
</head>

<body>
<?php

try	{
	$db = new PDO('mysql:host=localhost:3307;dbname=veritabani','veritabani_user','veritabani123');
	

if (isset($_POST['submit']) && !empty($_POST['submit']))  {

	//echo "Bağlantı başarılı";
	
	$adi = $_POST['Adi'];
	$soyadi=  $_POST['Soyadi'];
	$sinif = (int)$_POST['Sinif'];
	$sube = $_POST['Sube'];
	$no = (int) $_POST['Numara'];
	$yas =(int) $_POST['Yas'];

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
		
		echo "<br/><a href='javascript:self.history.back();'>Geri</a>";
	} else { 
		$db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = "INSERT INTO ogrenciler (Adi, Soyadi, Sinif,Sube,Numara,Yas) VALUES ('$adi', '$soyadi', $sinif, '$sube', $no, $yas)";
		$db->exec($result);
	
		echo "<p><font color='green'>Başarılı!</p>";
		echo "<a href='index.php'>Anasayfa'ya Git</a>";
	
	}
}
else{
	echo "veri gelmedi";

}
}
catch (PDOException $hata)
{
	die("Bağlantı Kurulamadı:".$hata->getMessage());
}

?>
</body>
</html>

<?php

$id = $_GET['id'];

try	{
	$db = new PDO('mysql:host=localhost:3307;dbname=veritabani','veritabani_user','veritabani123');
    $sql = "SELECT * FROM ogrenciler WHERE ID = $id";
	$sonuc=$db->query($sql);
if($sonuc->rowCount()>0)
{
	foreach($sonuc as $ogr){
	$adi = $ogr['Adi'];
	$soyadi= $ogr['Soyadi'];
	$sinif = $ogr['Sinif'];
	$sube= $ogr['Sube'];
	$no = $ogr['Numara'];
	$yas = $ogr['Yas'];
	}
}


}
catch (PDOException $hata)
{
	die("Bağlantı Kurulamadı:".$hata->getMessage());
}

?>
<html>
<head>	
	<title>Düzenle</title>
</head>

<body>
    <h2>Düzenle</h2>
    <p>
	    <a href="index.php">Anasayfa</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table style="border:none;">
			<tr> 
				<td>Adı</td>
				<td><input type="text" name="Adi" value="<?php echo $adi; ?>"></td>
			</tr>
			<tr> 
				<td>Soyadı</td>
				<td><input type="text" name="Soyadi" value="<?php echo $soyadi; ?>"></td>
			</tr>
			<tr> 
				<td>Sınıf</td>
				<td><input type="text" name="Sinif" value="<?php echo $sinif; ?>"></td>
			</tr>
			<tr> 
				<td>Şube</td>
				<td><input type="text" name="Sube" value="<?php echo $sube; ?>"></td>
			</tr>
			<tr> 
				<td>No</td>
				<td><input type="text" name="Numara" value="<?php echo $no; ?>"></td>
			</tr>
			<tr> 
				<td>Yaş</td>
				<td><input type="text" name="Yas" value="<?php echo $yas; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Güncelle"></td>
			</tr>
		</table>
	</form>
</body>
</html>

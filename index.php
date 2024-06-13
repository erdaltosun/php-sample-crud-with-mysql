<html>
<head>	
	<title>Anasayfa</title>
</head>

<body>
	<h2>Anasayfa</h2>
	<p>
		<a href="add.php">Yeni Ekle</a>

	</p>

	<table width='80%' style="border:none">
		<tr style="background-color#dddddd">
			<td><strong>id</strong></td>
			<td><strong>Adı</strong></td>
			<td><strong>Soyadı</strong></td>
			<td><strong>Sınıf</strong></td>
			<td><strong>Şube</strong></td>
			<td><strong>No</strong></td>
			<td><strong>Yaş</strong></td>
			<td><strong>Silme</strong></td>
		
		</tr>
	
<?php
	try	{
		$db = new PDO('mysql:host=localhost:3307;dbname=veritabani','veritabani_user','veritabani123');
	//echo "Bağlantı başarılı";

	$result = "SELECT * FROM ogrenciler ORDER BY ID DESC";
	$sonuc=$db->query($result);

    foreach($sonuc as $res){
		echo "<tr>";
		echo "<td>".$res['ID']."</td>";
		echo "<td>".$res['Adi']."</td>";
		echo "<td>".$res['Soyadi']."</td>";	
		echo "<td>".$res['Sinif']."</td>";
		echo "<td>".$res['Sube']."</td>";	
		echo "<td>".$res['Numara']."</td>";
		echo "<td>".$res['Yas']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[ID]\">Edit</a> | 
		<a href=\"delete.php?id=$res[ID]\" onClick=\"return confirm('Silmek İstediğinizden Emin misiniz?')\">Sil</a></td>";
	}
$sonuc->closeCursor();

}
catch (PDOException $hata)
{
	die("Bağlantı Kurulamadı:".$hata->getMessage());
}
	?>
	</table>
	
</body>
</html>

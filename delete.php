<?php
$id = $_GET['id'];

try	{
	$db = new PDO('mysql:host=localhost:3307;dbname=veritabani','veritabani_user','veritabani123');
	
    $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result = "DELETE FROM ogrenciler   WHERE ID=$id"  ;
    $db->exec($result);

    header("Location:index.php");

}
catch (PDOException $hata)
{
	die("Bağlantı Kurulamadı:".$hata->getMessage());
}

?>

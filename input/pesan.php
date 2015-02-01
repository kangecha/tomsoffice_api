<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include 'config.php';
$conn = mysql_connect($dbhost,$dbuser,$dbpass); 
$pilihdatabase = mysql_select_db($dbname, $conn) or die ("GAGAL");
if( $_REQUEST["nama"] )
{

	$id_barang = htmlspecialchars($_REQUEST['id_barang']);
	$jumlah = htmlspecialchars($_REQUEST['jumlah']);
	$nama = htmlspecialchars($_REQUEST['nama']);
	$hp = htmlspecialchars($_REQUEST['hp']);
	$bbm = htmlspecialchars($_REQUEST['bbm']);
	$alamat = htmlspecialchars($_REQUEST['alamat']);
	
	$sql = mysql_query("INSERT INTO pesan_apps(id_products, jumlah, nama, hp, bbm, alamat) VALUES ('$id_barang', '$jumlah', '$nama', '$hp', '$bbm', '$alamat')");
	if($sql){
	echo "sukses";
	}else{
	echo "gagal";
	}
}else{
echo "Tidak Ada Data";
}
?>
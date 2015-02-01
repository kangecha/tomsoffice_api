<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include 'config.php';
$conn = mysql_connect($dbhost,$dbuser,$dbpass); 
$pilihdatabase = mysql_select_db($dbname, $conn) or die ("GAGAL");
if( $_REQUEST["nama"] )
{

	$nama = htmlspecialchars($_REQUEST['nama']);
	$hp= htmlspecialchars($_REQUEST['hp']);
	$norek = htmlspecialchars($_REQUEST['norek']);
	$bank= htmlspecialchars($_REQUEST['bank']);
	$bank_tujuan= htmlspecialchars($_REQUEST['bank_tujuan']);
	$products= htmlspecialchars($_REQUEST['products']);
	$jumlah= htmlspecialchars($_REQUEST['jumlah']);
	$catatan= htmlspecialchars($_REQUEST['catatan']);
	
	$sql = mysql_query("INSERT INTO konfirmasi_apps(nama, hp, norek, bank, bank_tujuan, products, jumlah, catatan) VALUES ('$nama', '$hp', '$norek', '$bank', '$bank_tujuan', '$products', '$jumlah', '$catatan')");
	
	if($sql){
	echo "sukses";
	}else{
	echo "gagal";
	}
}else{
echo "Tidak Ada Data";
}
?>
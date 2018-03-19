<?php 
	require('../../../../php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
	$err = array();
	$err['cagname'] = NULL;

	if(count($_POST) > 0){
		$namecag = $_POST['namecag'];
		mysql_query("INSERT INTO category(`name_cag`) VALUES('$namecag')");
		header("Location:../../../../index.php?id=quynt0808@gmail.com&manage=cag-list&page=1");
	}
?>
<?php
	if(isset($_GET['yes'])){
		$b_n = $_GET['yes'];
		echo $b_n;
	}else{
		$b_n = '';
		echo "<p>1</p>";
	}
	$query = mysql_query("UPDATE bill set state = 'đã duyệt' where bill_num = $b_n");
	//$r = mysql_fetch_array($query);

?>
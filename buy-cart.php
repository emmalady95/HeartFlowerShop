<?php 
	require('php/connect-db.php');
	@session_start();
	mysql_query("SET NAMES 'utf8'");
	if(isset($_SESSION['customer'])){
		//echo "1";
		$email = $_SESSION['customer'];
		//echo $email;
		$fullname = $_POST['fullname'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$size = $_POST['size'];
		$color = $_POST['color'];
	
		$s = mysql_query("SELECT CURRENT_DATE()");
		$d = mysql_fetch_array($s);
		$date = $d[0];
		
		$query4 = mysql_query("SELECT SUM(quantity * unit_price) from cart c,cartdetail cd where email = '$email' and (c.id = cd.id)");
		$r = mysql_fetch_array($query4);
		$sum = $r[0];
		//echo $sum;
		$query = mysql_query("INSERT INTO bill(`email`,`fullname`,`address`,`phone`,`sum_money`,`date`) VALUES('$email','$fullname','$address',$phone,$sum,'$date')");
		//echo "INSERT INTO bill(`email`,`fullname`,`address`,`phone`,`sum_money`,`date`) VALUES('$email','$fullname','$address',$phone,$sum,'$date')";
		if($query){
			$size = $_POST['size'];
			//echo $size;
			$query2 = mysql_query("SELECT key_id,c.id,email,cod_prod,quantity,unit_price,create_date from cart c, cartdetail cd where (c.id = cd.id) and (email = '$email')");
			$m = mysql_query("SELECT max(bill_num) FROM bill");
			$r1 = mysql_fetch_array($m);
			$max = $r1[0];
			//echo $max;		
			while($row = mysql_fetch_array($query2)){
				$cod = $row['cod_prod'];
				//echo $cod;
				$price = $row['unit_price'];
				$quanlity = $row['quantity'];
				$id = $row['id'];
				$key_id = $row['key_id'];
				//echo $id;
				//$total= $quanlity * $price;
				//echo $total;
				mysql_query("INSERT INTO billdetail(`bill_num`,`cod_prod`,`quantity`,`size`,`color`,`unit_price`) VALUES($max, '$cod',$quanlity,'$size','$color',$price)");
				mysql_query("DELETE FROM cartdetail WHERE id = $id and cod_prod = '$cod'");
				//echo "DELETE FROM cartdetail WHERE (key_id = $key_id) and (id = $id) and (cod_pod = '$cod')";
				//echo "INSERT INTO billdetail(`bill_num`,`cod_prod`,`quantity`,`size`,`color`,`unit_price`) VALUES($max, '$cod',$quanlity,$size,'$color',$price)";

			}
		}
	}
	header("Location:cart.php");
	
?>
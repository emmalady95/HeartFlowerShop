<?php
	require('php/connect-db.php');
	mysql_query("SET NAMES 'utf8'");
?>

	<?php 
		if(isset($_GET['id'])){
			$m= $_GET['id'];
		}else{
			$m ='';
		}
		if(isset($_GET['yes'])){
			$y= $_GET['yes'];
			include('bill/yes.php');
		}else{
			$y ='';
		}
		if(isset($_GET['manage'])&&($_GET['manage'])!=''){
			$man= $_GET['manage'];
		}else{
			$man ='';
		}
		if(isset($_GET['page'])){
			$pag = $_GET['page'];
			//echo $pag;
		}
		else{
			$pag = 1;
		}
		switch($man){

			// *************************** CATEGORY ******************************
			case "cag-list":{
				include('category/category.php');
				break;
			}
			case "update-category":{
				include('category/update-category.php');
				break;
			}

			case "search-cag-list":{
				include('category/search-cag.php');
				break;
			}
			// *************************** CATEGORY DETAIL ******************************
			case "cag-detail-list":{
				//Sum of record in one page
				$size2 = 20;
				$start2 = ($pag - 1 ) * $size2 + 1;
				if($start2 >= 1){
					$start2 = $start2 - 1;
				}
				//$sql = "SELECT * FROM product limit $start, $size";
				$result2 = mysql_query("SELECT * FROM categorydetail ORDER BY id_detail DESC limit $start2, $size2");
				//echo $sql;
				include('category-detail/category-detail.php'); 
				break; 
			}

			case "update-cag-detail":{
				include('category-detail/update-category-detail.php');
				break;
			}
			case "search-cag-detail":{
				include('category-detail/search-cag-detail.php');
				break;
			}
			// *************************** PRODUCT ******************************
			case "product-list":{
				//Sum of record in one page
				$size = 10;
				$start = ($pag - 1 ) * $size + 1;
				if($start >= 1){
					$start = $start - 1;
				}
				//$sql = "SELECT * FROM product limit $start, $size";
				$result = mysql_query("SELECT * FROM product ORDER BY id DESC limit $start, $size");
				//echo $sql;
				include('product/product.php'); 
				break; 
			}

			case "add-product":{
				include('product/add-product.php');
				break;
			}

			case "update-product":{
				include('product/update-product.php');
				break;
			}

			case "product-detail-list":{
				//Sum of record in one page
				$size6 = 10;
				$start6 = ($pag - 1 ) * $size6 + 1;
				if($start6 >= 1){
					$start6 = $start6 - 1;
				}
				//$sql = "SELECT * FROM product limit $start, $size";
				$result6 = mysql_query("SELECT * FROM productdetail ORDER BY id_prod DESC limit $start6, $size6");
				//echo $sql;
				include('product/product-detail.php');
				break; 
			}

			case "update-prod-detail":{
				include('product/update-prod-detail.php');
				break;
			}

			case "search-product":{
				include('product/search-product.php');
				break;
			}
			case "search-product-detail":{
				include('product/search-product-detail.php');
				break;
			}
			// *************************** ACCOUNT ******************************
			case "account-customer-list":{
				////Sum of record in one page
				$size3 = 20;
				$start3 = ($pag - 1 ) * $size3 + 1;
				if($start3 >= 1){
					$start3 = $start3 - 1;
				}
				//$sql = "SELECT * FROM product limit $start, $size";
				$result3 = mysql_query("SELECT * FROM account WHERE role = 'customer' ORDER BY fullname ASC limit $start3, $size3");
				//echo $sql;
				include('account/account-customer-list.php'); 
				break; 
			}
			case "account-customer-detail":{
				include('account/account-customer-detail.php');
				break;
			}

			case "account-vip-list":{
				////Sum of record in one page
				$size3 = 20;
				$start3 = ($pag - 1 ) * $size3 + 1;
				if($start3 >= 1){
					$start3 = $start3 - 1;
				}
				//$sql = "SELECT * FROM product limit $start, $size";
				$result3 = mysql_query("SELECT * FROM account WHERE role = 'VIP' ORDER BY fullname ASC limit $start3, $size3");
				//echo $sql;
				include('account/account-vip-list.php'); 
				break; 
			}

			case "account-vip-detail":{
				include('account/account-vip-detail.php');
				break;
			}

			case "account-admin-list":{
				////Sum of record in one page
				$size4 = 20;
				$start4 = ($pag - 1 ) * $size4 + 1;
				if($start4 >= 1){
					$start4 = $start4 - 1;
				}
				//$sql = "SELECT * FROM product limit $start, $size";
				$result4 = mysql_query("SELECT * FROM account WHERE role = 'admin' ORDER BY fullname ASC limit $start4, $size4");

				$result5 = mysql_query("SELECT * FROM account WHERE role = 'administrator' ORDER BY fullname ASC limit $start4, $size4");

				//echo $sql;
				include('account/account-admin-list.php'); 
				break; 
			}

			case "account-admin-detail":{
				include('account/account-admin-detail.php');
				break;
			}

			case "add-account-admin":{
				include('account/add-account-admin.php');
				break;
			}
			// *************************** BILL ******************************
			case "customer-bill-wait":{
				////Sum of record in one page
				$size4 = 20;
				$start4 = ($pag - 1 ) * $size4 + 1;
				if($start4 >= 1){
					$start4 = $start4 - 1;
				}
				//$sql = "SELECT * FROM product limit $start, $size";
				$result4 = mysql_query("SELECT * FROM bill where state = 'chưa duyệt' ORDER BY bill_num DESC limit $start4, $size4");
				//echo $sql;
				include('bill/customer-bill.php'); 
				break; 
			}
			case "customer-bill-detail":{
				include('bill/customer-bill-detail.php'); 
				break; 
			}


			// *************************** CART ******************************
			default:
				include('home/home.php');
		}
	?>
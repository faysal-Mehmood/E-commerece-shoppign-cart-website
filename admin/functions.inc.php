<?php
function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}

function productSoldQtyByProductId($con,$pid){
	$sql="select sum(order_detail.qty) as qty from order_detail,`order` where `order`.id=order_detail.order_id and order_detail.product_id=$pid and `order`.order_status!=4";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
	return $row['qty'];
}


function cancelShipRocketOrder($token,$ship_order_id){
	$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://apiv2.shiprocket.in/v1/external/orders/cancel",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
   CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\n  \"ids\": [".$ship_order_id."]\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization: Bearer $token"
  ),
));
	$response = curl_exec($curl);
	curl_close($curl);
}


function isAdmin(){
	if(!isset($_SESSION['ADMIN_LOGIN'])){
	?>
		<script>
		window.location.href='login.php';
		</script>
		<?php
	}
	if($_SESSION['ADMIN_ROLE']==1){
		?>
		<script>
		window.location.href='product.php';
		</script>
		<?php
	}
}
?>
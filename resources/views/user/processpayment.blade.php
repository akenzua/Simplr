<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body{

	}
	.loader{
		border:16px solid #f3f3f3;
		border-radius: 50%;
		border-top: 16px solid #d79500;
		width: 120px;
		height: 120px;
		-webkit-animation: spin 2s linear infinite;
		animation: spin 2s linear infinite;
		margin-left: 45%;
	}
	@-webkit-keyframes spin{
		0% {-webkit-transform: rotate(0deg);}
		100% {-webkit-transform: rotate(360deg);}
	}
	@keyframes spin{
		0% {-webkit-transform: rotate(0deg);}
		100% {-webkit-transform: rotate(360deg);}
	}
	.login{
		margin: 0;
		margin-top: 100px;
	}
	body{
		background: #2b3137;
	}
	.login h2{
		color: white;
		 font-family: 'Open Sans', sans-serif;
		 font-size: 50px;
		 text-align: center;
	}
	</style>
</head>
<body>


<?php 


define("MERCHANTID", "2547916");
define("SERVICETYPEID", "4430731");
define("APIKEY", "1946");
define("CHECKSTATUSURL", "http://www.remitademo.net/remita/ecomm");
define("GATEWAYURL", "http://www.remitademo.net/remita/ecomm/init.reg");
define("PATH", 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));

$amount = $_POST["amt"];
$timesammp=DATE("dmyHis");		
$orderID = $timesammp;
$payerName = $_POST["payerName"];
$payerEmail = $_POST["payerEmail"];
$payerPhone = $_POST["payerPhone"];
$responseurl =  "http://localhost:8000/home/receipt";
$concatString = MERCHANTID . SERVICETYPEID . $orderID . $amount . $responseurl . APIKEY;
$hash = hash('sha512', $concatString);
$paymenttype = $_POST["paymenttype"];
?>
<div class="login">
<h2>You will be redirected to Remita in few seconds.......</h2><br>
<div class="loader"></div>
</div>




<form action="<?php echo GATEWAYURL; ?>" id="remita_form" name="remita_form" method="POST">
<input id="merchantId" name="merchantId" value="<?php echo MERCHANTID; ?>" type="hidden"/>
<input id="serviceTypeId" name="serviceTypeId" value="<?php echo SERVICETYPEID; ?>" type="hidden"/>
<input id="amt" name="amt" value="<?php echo $amount; ?>" type="hidden"/>
<input id="responseurl" name="responseurl" value="<?php echo $responseurl; ?>" type="hidden"/>
<input id="hash" name="hash" value="<?php echo $hash; ?>" type="hidden"/>
<input id="payerName" name="payerName" value="<?php echo $payerName; ?>" type="hidden"/>
<input id="paymenttype" name="paymenttype" value="<?php echo $paymenttype; ?>" type="hidden"/>
<input id="payerEmail" name="payerEmail" value="<?php echo $payerEmail; ?>" type="hidden"/>
<input id="payerPhone" name="payerPhone" value="<?php echo $payerPhone; ?>" type="hidden"/>
<input id="orderId" name="orderId" value="<?php echo $orderID; ?>" type="hidden"/>
</form>
<script type="text/javascript">document.getElementById("remita_form").submit();</script>
</body>
</html>
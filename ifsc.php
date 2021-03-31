<?php
if(isset($_POST['ifsc'])){
	$ifsc=$_POST['ifsc'];
	$json=@file_get_contents('https://ifsc.razorpay.com/'.$ifsc);
	$arr=json_decode($json);
	if(isset($arr->BRANCH)){
		echo "Branch:-".$arr->BRANCH."<br/>";
		echo "Address:-".$arr->ADDRESS."<br/>";
		echo "City:-".$arr->CITY."<br/>";
		echo "State:-".$arr->STATE."<br/>";
		echo "Bank:-".$arr->BANK."<br/>";
	}else{
		echo "Invalid IFSC Code";
	}
}
?>
<form method="post">
	<input type="textbox" name="ifsc" id="ifsc"/>
	<input type="Submit" name="submit"/>
</form>
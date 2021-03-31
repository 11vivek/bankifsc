<div id="result"></div>
<form method="post">
	<input type="textbox" name="ifsc" id="ifsc"/>
	<input type="button" name="submit" onclick="getIFSC()" value="Submit"/>
</form>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
function getIFSC(){
	var ifsc=jQuery('#ifsc').val();
	jQuery.ajax({
		url:'ifsc_get.php',
		data:'ifsc='+ifsc,
		type:'post',
		success:function(result){
			jQuery("#result").html(result);
		}
	});
}
</script>
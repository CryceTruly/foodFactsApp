$(document).ready(function(){
   

	$('#food').keyup(function(){
		var order=$('#food').val();



if(order!=''){
	
$.post('check.php',{food:order},function(data){

$('#result').html(data);

});


	}else{
	$('#result').text('go on search your favourite food');
}
			
		

	});
});
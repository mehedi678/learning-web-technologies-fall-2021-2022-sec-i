"use strict"


$('#submit').click(function(){
	$('#name').val();
	$('#email').val();
	$('#gender').val();
	$('#dd').val();
	$('#mm').val();	
	$('#yyy').val();
	$('ssc').val();
	$('#hsc').val();
	$('#bsc').val();
	$('#msc').val();

	if($('#name').val()== || $('#email').val()=="" || $('#gender').val()=="" || $('#dd').val()=="" || $('#mm').val()=="" || $('#yyy').val()=="" || $('ssc').val()=="" || $('#hsc').val()=="" || $('#bsc').val()=="" || $('#msc').val()==""){

			alert("Please Fill the empty Field");
	}
});

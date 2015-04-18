// JavaScript Document

jQuery(function() {

	 $("#createUser").submit(function(event) {
	 	event.preventDefault();
		var userdata = $(this).serialize();
	
		
		$.ajax({
			type:'POST',
			url: 'php/createuser.php',
			data:userdata,
			success: function (data) {
				
				 console.log("got this back "+data); 
			}
		});
		
		// I learned something today -- $.ajax sucks , php cant read it , its better to use 
		// $.post wich is a shorthand ajax function WTF!
		//*/
		/*
		$.post ("php/createuser.php",userdata, function (data) {
		console.log("got this back "+data);
		});*/
	 });
});
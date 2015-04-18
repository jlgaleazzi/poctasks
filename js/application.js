// JavaScript Document

jQuery(function() {
	 // check if user is logged in
	 // if not create login modal window
	 // if user is logged in proceed to page  
	 $("#loginForm").submit(function(event) {
		 event.preventDefault();
		 var formData = $ (this).serialize();
		$.ajax({
			type:"POST",
			url:"php/login.php",
			data:formData,
			cache: false,
			contentType: false,
			processData: false,
			success: function(data) {
				
				// put results somewhere :
				console.log("got this results back "+data);
				// load admin page
				//$("#contentarea").load("admin/createuser.php");
				}
			});
	
	 });
	 
	  $("#createuser").click(function(event) {
		  $("#contentarea").load("admin/createuser.html");
		  console.log ("should have loaded createuser");
	  });
	 
 });

$(document).ready(function () 

{//views
	
  $("#addview").click(function() {
   $("#add").fadeIn();
   $("#update").fadeOut();
   $("#view").fadeOut();
   $("#delete").fadeOut();
  
});


$("#updateview").click(function() {
   $("#update").fadeIn();
   $("#add").fadeOut();
   $("#view").fadeOut();
      $("#delete").fadeOut();
     
    
});

$("#viewview").click(function() {
   $("#view").fadeIn();
   $("#add").fadeOut();  
   $("#update").fadeOut();
    $("#delete").fadeOut();
     

});

	 });
	  //inserting into database  
	  
	  
	  
	
	  
	  
	  
	   

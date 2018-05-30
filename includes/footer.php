
<footer style= "position: absolute;
  bottom: 0;
  width: 100%;
  height: 20px;
  background-color:#171717;" >
<p>
<span style="text-align:center; font-style: italic">Payroll Systems&copy; 2017&nbsp;<a href="home.php" >Kings Investiments Ltd</a> </span>
</p>
</footer>	


<!--<script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src ="datepicker/js/bootstrap-datepicker.js"></script>
<script  type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

<script src="editable/dist/jquery-editable-select.js"></script>
<script src="js/CollapsibleLists.js"></script>


<script>
$(document).ready(function(){
	//texts only
    $('.text').bind('keyup blur',function(){ 
    var james = $(this);
    james.val(james.val().replace(/[^a-zA-Z ]/g,'') ); }
);		 

 $('.text2').bind('keyup blur',function(){ 
    var james = $(this);
    james.val(james.val().replace(/[^a-zA-Z0-9 ]/g,'') ); }
);		 
	
});

//numbers only
$(document).ready(function(){
	//texts only
    $('.text').bind('keyup blur',function(){ 
    var james = $(this);
    james.val(james.val().replace(/[^a-zA-Z ]/g,'') ); }
);		 

 $('.text2').bind('keyup blur',function(){ 
    var james = $(this);
    james.val(james.val().replace(/[^a-zA-Z0-9 ]/g,'') ); }
);		 

});
//numbers only
	
	function Numb(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>


<?php require'classes/class.process.php';require_once('classes/class.vars.php');require_once('classes/class.post.php');
if(isset($_POST['term'])&&!empty($_POST['term'])){
	$search_term=$_POST['term'];$tbl='stock';$options='item_id LIKE "%'.$search_term.'%" OR cat_name LIKE "%'.$search_term.'%"';
	$process=new Process(); $res=$process->getData($tbl,$options);?><div id="scroll" style="overflow:auto;height:480px; ">
	<table class="table table-striped"><tr><th>Item Code</th><th>Group</th><th>Unit</th><th>Quantity</th><th>Supplier</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><input type="hidden" name="" class=""/><?php echo $values['item_id'];?></td>
		<td><?php echo $values['cat_name'];?></td><td><?php echo $values['unit'];?></td>
		<td><?php echo $values['quantity'];?></td><td><?php echo $values['supplier'];?></td>
		</tr>
		<?php }?></table></div>
	 <?php }
elseif(isset($_POST['term_within'])&&!empty($_POST['term_within'])){
	$search_term=$_POST['term_within'];$tbl='general_info';$options='location_name LIKE "%'.$search_term.'%" OR item_name LIKE "%'.$search_term.'%"';
	$process=new Process(); $res=$process->getData($tbl,$options);?><div id="scroll" style="overflow:auto;height:480px; ">
	<table class="table table-striped"><tr><th>L_Name</th><th>Item_taken</th><th>Quantity</th><th>Issued To</th><th>Issue Date</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><input type="hidden" name="hid" class="hid"/><a href="#" class="more_with" data-id="<?php echo $values['location_name'];?>" ><?php echo $values['location_name'];?>	</a>	</td>
		<td><?php echo $values['item_name'];?></td><td><?php echo $values['quantity'];?></td><td><?php echo $values['supervisor_name'];?></td><td><?php echo $values['date'];?></td>
		</tr>
		<?php }?></table><script> $('.more_with').click(function(){var loc_with=$(this).attr('data-id');$.ajax({type:'post',url:'ajax.php',data:'loc_with='+loc_with,success:function(r){
			$('#items_ass').html(r);
		}
	});
	
}); </script>	</div>
	 <?php }
  elseif(isset($_POST['term_up'])&&!empty($_POST['term_up'])){
	$search_term=$_POST['term_up'];$tbl='upcountry';$options='loc_name LIKE "%'.$search_term.'%" OR it_name LIKE "%'.$search_term.'%"';
	$process=new Process(); $res=$process->getData($tbl,$options);?><div id="scroll" style="overflow:auto;height:480px; ">
	<table class="table table-striped"><tr><th>L_Name</th><th>Item_taken</th><th>Quantity</th><th>Issued To</th><th>District</th><th>Transport_type</th> <th>Vehicle No:</th><th>Issue Date</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><input type="hidden" name="hid" class="hid"/><a href="#" class="more_up" data-id="<?php echo $values['loc_name'];?>" ><?php echo $values['loc_name'];?>	</a>	</td>
		<td><?php echo $values['it_name'];?></td><td><?php echo $values['quantity'];?></td><td><?php echo $values['superv'];?></td><td><?php echo $values['district'];?></td><td><?php echo $values['trans_type'];?>	
		</td><td><?php echo $values['licence_no'];?></td><td><?php echo $values['p_date'];?></td>
		</tr>
		<?php }?></table> <script>  $('.more_up').click(function(){var loc_up=$(this).attr('data-id');
		$.ajax({type:'post',url:'ajax.php',data:'loc_up='+loc_up,success:function(r){
			$('#items_ass1').html(r);}});});  </script>  </div>
		<script></script>
	 <?php }elseif(isset($_POST['post_id'])){$tbl='general_info'; $options='ORDER BY gen_id DESC';$all=new Process();$res=$all->getAllData($tbl,$options);?>
	 	<h2><?php $tle = Titles::getVars(); foreach($tle as $v){$x=$v['edit']; }echo "<h4>Manage  Items Within!</h4>";?></h2>
	 	<div id="scroll" style="overflow:auto;height:500px; ">
	 	<table class="table table-hover"><tr style="background-color:#DBC59E;"><th>Location Name</th><th>Item Name</th><th>Quantity</th><th>Unit</th><th>supervisor</th><th>Issue Date</th><th>Edit</th><th>Delete</th></tr>
	     <tr><div id="edit_form"></div></tr>
	<?php   
	 foreach($res as $values){?>
		<tr><td><?php echo $values['location_name'];?></td><td><?php echo $values['item_name']; ?></td>
			<td><?php echo $values['quantity']; ?></td><td><?php echo $values['unit']; ?></td><td><?php echo $values['supervisor_name']; ?></td><td><?php echo $values['date']; ?></td>
			<td><a href="#" class="edit_row" data-id="<?php echo $values['gen_id'] ?>">   <button> <span class="glyphicon glyphicon-pencil" id="edit_row"></span></button></a></td>
			<td><a href="#" class="delete_row" data-id="<?php echo $values['gen_id'] ?>"><button><span class="glyphicon glyphicon-trash" id="delete_row"></span></button></a></td>
		</tr>
	</tr><script>$(document).ready(function(){$('.edit_row').click(function(){var edit_id=$(this).attr('data-id');
$('#edit_pop_up').show(); $.ajax({ type:'post',url:'ajax.php',data:'edit_id='+edit_id,success:function(resp){ $('#edit_form').html(resp); }}); }); $('.delete_row').click(function(){var del_id=$(this).attr('data-id');   var post_id=$(this).attr('data-id');
  $.ajax({type:'post',url:'classes/class.post.php',data:'del_id='+del_id,success:function(resp){}}); $.ajax({type:'post',url:'ajax.php',data:'post_id='+post_id,success:function(response){$('#right').html(response);}});
});});</script>
		<?php }?></table>
		
		<?php } elseif(isset($_POST['edit_id'])){$tbl='general_info';$option='gen_id = '.$_POST['edit_id'].''; $update=new Process();$get=$update->getData($tbl,$option);?>
		<div id="edit_pop_up" style="display:">
		<form method="post" action="classes/class.post.php">
		<table id="editable"><?php foreach($get as $values){?>
		<tr><td><input type="text" id="ref" name="locw" value=" <?php echo $values['location_name'];?>" /></td><td><input type="text"  name="itemw" value="<?php echo $values['item_name']; ?>" /></td>
		<td><input type="text"  name="quantw" value="<?php echo $values['quantity'];?>" /></td><td><input type="text"  name="unitw" value="<?php echo $values['unit']; ?>" /></td><td><button type="button" id="done" data-id="1" name="done">update</button></td></tr>
		<tr>
			<input type="hidden" id="hidden" name="updated_id" value="<?php echo $_POST['edit_id'] ?>" data-id="<?php echo $_POST['edit_id'] ?>" /></td><td><input type="text"  name="supervw" value="<?php echo $values['supervisor_name']; ?>" /></td><td><input type="text"  name="datew" value="<?php echo $values['date'];?>" /><td>
		</tr> <?php }?></table></form>
		
		<script>$(document).ready(function(){			 $('#done').click(function(e){
	 	var updated=$('form').serialize();   var locw=$('input#ref').val(); var post_id=$(this).attr('data-id');
			$.ajax({type:'post',url:'classes/class.post.php',data:'updated='+updated + '&locw='+locw,success:function(resp){ }}); 
			$.ajax({type:'post',url:'ajax.php',data:'post_id='+post_id,success:function(resp){$('#right').html(resp);}});
		
		});
		
		});
		
		</script>
		</div>
	
		 <?php }elseif(isset($_POST['post_id1'])){$tbl='upcountry'; $options='ORDER BY up_id DESC';$all=new Process();$res=$all->getAllData($tbl,$options);?>
	 	<h2><?php $tle = Titles::getVars(); foreach($tle as $v){ echo "<h4>Manage Upcountry items!</h4>";}?></h2>
	 	<div id="scroll" style="overflow:auto;height:500px; ">
	 	<table class="table table-hover"><tr style="background-color:#DBC59E;"><th>LName</th><th>Item Name</th><th>Quantity</th><th>issued t0</th><th>District</th><th>Transport_type</th><th>Licence_no</th><th>Issue</th><th>Edit</th><th>Delete</th></tr>
	     <tr><div id="edit_form"></div></tr>
	<?php   
	 foreach($res as $values){?>
		<tr><td><?php echo $values['loc_name'];?></td><td><?php echo $values['it_name']; ?></td>
			<td><?php echo $values['quantity']; ?></td><td><?php echo $values['superv']; ?></td>
			<td><?php echo $values['district']; ?></td><td><?php echo $values['trans_type']; ?></td>
			<td><?php echo $values['licence_no']; ?></td><td><?php echo $values['p_date']; ?></td>
			<td><a href="#" class="edit_row1" data-id="<?php echo $values['up_id'] ?>">   <button> <span class="glyphicon glyphicon-pencil" id="edit_row"></span></button></a></td>
			<td><a href="#" class="delete_row1" data-id="<?php echo $values['up_id'] ?>"><button><span class="glyphicon glyphicon-trash" id="delete_row"></span></button></a></td>
		</tr>
	</tr><script> $(document).ready(function(){$('.edit_row1').click(function(){var edit_id1=$(this).attr('data-id'); 
$('#edit_pop_up').show(); $.ajax({ type:'post',url:'ajax.php',data:'edit_id1='+edit_id1,success:function(resp){ $('#edit_form').html(resp); }}); }); $('.delete_row1').click(function(){var del_id1=$(this).attr('data-id');   var post_id1=$(this).attr('data-id');
  $.ajax({type:'post',url:'classes/class.post.php',data:'del_id1='+del_id1,success:function(resp){}}); $.ajax({type:'post',url:'ajax.php',data:'post_id1='+post_id1,success:function(response){$('#right').html(response);}});
});});</script>
		<?php }?></table>
		
		<?php } elseif(isset($_POST['edit_id1'])){$tbl='upcountry';$option='up_id = '.$_POST['edit_id1'].''; $update=new Process();$get=$update->getData($tbl,$option);?>
		<div id="edit_pop_up" style="display:">
		<form method="post" action="classes/class.post.php">
		<table id="editable"><?php foreach($get as $values){?>
		<tr><td><input type="text"id="ref1" name="locu" value=" <?php echo $values['loc_name'];?>" /></td><td><input type="text"  name="itemu" value="<?php echo $values['it_name']; ?>" /></td>
		<td><input type="text"  name="quantu" value="<?php echo $values['quantity'];?>" /></td><td><input type="text"  name="unitu" value="<?php echo $values['unit'];?>" /></td><td><button type="button" class="done" data-id="1" name="done">update</button></td> </tr>
		<tr><td><input type="text"  name="supervu" value="<?php echo $values['superv'];?>" /></td>	<td><input type="text"  name="distu" value="<?php echo $values['district'];?>" /></td><td><input type="text"  name="transu" value="<?php echo $values['trans_type'];?>" />
				<td><input type="text"  name="plateu" value="<?php echo $values['licence_no'];?>" /></td><td><input type="text"  name="dateu" value="<?php echo $values['p_date'];?>" />
			
			<input type="hidden" id="hidden" name="updated_id1" value="<?php echo $_POST['edit_id1'] ?>" data-id="<?php echo $_POST['edit_id1'] ?>" /></td>
		</tr> <?php }?></table></form><script>$(document).ready(function(e){$('.done').click(function(e){var updated1=$('form').serialize();     var locu=$('input#ref1').val(); var post_id1=$(this).attr('data-id');$.ajax({type:'post',url:'classes/class.post.php',data:'updated1='+updated1 +'&locu='+locu,success:function(resp){}}); $.ajax({type:'post',url:'ajax.php',data:'post_id1='+post_id1,success:function(resp){$('#right').html(resp);}});});});</script>
		</div>	
		 <?php }elseif(isset($_POST['post_id2'])){$tbl='stock'; $options='ORDER BY stock_id DESC';$all=new Process();$res=$all->getAllData($tbl,$options);?>
	 	<h2><?php $tle = Titles::getVars(); foreach($tle as $v){ $v['edit_var'];}echo "<h4>Manage Stock!</h4>";?></h2>
	 	<div id="scroll" style="overflow:auto;height:500px; ">
	 	<table class="table table-hover"><tr style="background-color:#DBC59E;"><th>Item Name</th><th>Category</th><th>Unit</th><th>Quantity</th><th>Supplier</th><th>Date</th><th>Edit</th><th>Delete</th></tr>
	     <tr><div id="edit_form"></div></tr>
	<?php   
	 foreach($res as $values){?>
		<tr><td><?php echo $values['item_id'];?></td><td><?php echo $values['cat_name']; ?></td>
			<td><?php echo $values['unit']; ?></td><td><?php echo $values['quantity']; ?></td>
			<td><?php echo $values['supplier']; ?></td><td><?php echo $values['date']; ?></td>
			
			<td><a href="#" class="edit_row2" data-id="<?php echo $values['stock_id'] ?>">   <button> <span class="glyphicon glyphicon-pencil" id="edit_row"></span></button></a></td>
			<td><a href="#" class="delete_row2" data-id="<?php echo $values['stock_id'] ?>"><button><span class="glyphicon glyphicon-trash" id="delete_row"></span></button></a></td>
		</tr>
	</tr><script> $(document).ready(function(){$('.edit_row2').click(function(){var edit_id2=$(this).attr('data-id'); 
      $('#edit_pop_up').show(); 
   $.ajax({ type:'post',url:'ajax.php',data:'edit_id2='+edit_id2,success:function(resp){ $('#edit_form').html(resp); }}); });  
   $('.delete_row2').click(function(){var del_id2=$(this).attr('data-id');   var post_id2=$(this).attr('data-id');
   $.ajax({type:'post',url:'classes/class.post.php',data:'del_id2='+del_id2,success:function(resp){}}); $.ajax({type:'post',url:'ajax.php',data:'post_id2='+post_id2,success:function(response){$('#right').html(response);}});
});});</script>

		<?php }?></table>
		<?php } elseif(isset($_POST['edit_id2'])){$tbl='stock';$option='stock_id = '.$_POST['edit_id2'].''; $update=new Process();$get=$update->getData($tbl,$option);?>
		<div id="edit_pop_up" style="display:">
		<form method="post" action="classes/class.post.php">
		<table id="editable"><?php foreach($get as $values){?>
		<tr><td><input type="text" id="ref2" name="itemss" value=" <?php echo $values['item_id'];?>" /></td><td><input type="text"  name="categorys" value="<?php echo $values['cat_name']; ?>" /></td>
		<td><input type="text"  name="units" value="<?php echo $values['unit'];?>" /></td><td><input type="text"  name="quantitys" value="<?php echo $values['quantity'];?>" /></td><td><button type="button" class="done" data-id="1" name="done">update</button></td></tr>
		<tr>	<td><input type="text"  name="suppliers" value="<?php echo $values['supplier'];?>" /></td><td><input type="text"  name="date" value="<?php echo $values['date'];?>" />
			<input type="hidden" id="hidden" name="updated_id2" value="<?php echo $_POST['edit_id2'] ?>" data-id="<?php echo $_POST['edit_id2'] ?>" /></td>
		</tr> <?php }?></table></form><script>$(document).ready(function(e){$('.done').click(function(e){var updated2=$('form').serialize();     var itemss=$('input#ref2').val(); var post_id2=$(this).attr('data-id');$.ajax({type:'post',url:'classes/class.post.php',data:'updated2='+updated2 +'&itemss='+itemss,success:function(resp){}}); $.ajax({type:'post',url:'ajax.php',data:'post_id2='+post_id2,success:function(resp){$('#right').html(resp);}});});});</script>
		</div>
		<?php }elseif(isset($_POST['name'])){$tbl='general_info'; $options='location_name LIKE "%'.$_POST['name'].'%"';$obj=new Process; $get=$obj->getData($tbl,$options); ?>
	   	<h4><?php foreach($get as $value){$t=0;$names=$value['location_name'];} echo $names;?></h4>
	    <table class="table table-bordered"><tr><th>Item Name</th><th>Quantity</th><th>Issue Date</th></tr>
	   	<?php foreach($get as $value){?>
	    <tr><td><?php echo $value['item_name']; ?></td><td><?php echo $value['quantity']; ?></td>
	   			<td><?php echo $value['date']; ?></td></tr>
	   <?php }?></table>
	   
	   <?php }elseif(isset($_POST['more'])){?>
		<div id="scroll" style="overflow: auto; height:480px; ">
	<table class="table table-condensed"><tr><th>Item Code</th><th>Group</th><th>Unit</th><th>Quantity</th><th>Supplier</th></tr>
	   <?php  $tbl = "stock"; $options='ORDER BY stock_id DESC'; $data = new Process();$info = $data->getAllData($tbl,$options);//var_dump($info);
	foreach($info as $values){?>
		<tr><td><input type="hidden" name="" class=""/><?php echo $values['item_id'];?></td>
		<td><?php echo $values['cat_name'];?></td><td><?php echo $values['unit'];?></td>
		<td><?php echo $values['quantity'];?></td><td><?php echo $values['supplier'];?></td>
		</tr>
		<?php }?></table>
	</div>
	<?php }elseif(isset($_POST['more_up'])){?>
		<div id="scroll" style="overflow: auto; height:480px; ">
	<table class="table table-condensed"><tr><th>L_Name</th><th>Item_taken</th><th>Quantity</th><th>Issued To</th><th>District</th><th>Transport_type</th> <th>Vehicle No:</th>   <th>Issue Date</th></tr>
	   <?php  $tbl = "upcountry"; $options='ORDER BY up_id DESC'; $data = new Process();$info = $data->getAllData($tbl,$options);//var_dump($info);
	foreach($info as $values){?>
		<tr><td><input type="hidden" name="hid" class="hid"/><a href="#" class="more_up" data-id="<?php echo $values['loc_name'];?>" ><?php echo $values['loc_name'];?>	</a></td>
		<td><?php echo $values['it_name'];?></td><td><?php echo $values['quantity'];?></td><td><?php echo $values['superv'];?></td><td><?php echo $values['district'];?></td><td><?php echo $values['trans_type'];?>	
		</td><td><?php echo $values['licence_no'];?></td><td><?php echo $values['p_date'];?></td>
		</tr>
		<?php }?></table>
		<script>  $('.more_up').click(function(){var loc_up=$(this).attr('data-id');
		$.ajax({type:'post',url:'ajax.php',data:'loc_up='+loc_up,success:function(r){
			$('#items_ass1').html(r);}});});  </script>
	</div>
	
	
	<?php }elseif(isset($_POST['more_within'])){?>
		<div id="scroll" style="overflow: auto; height:480px; ">
	<table class="table table-condensed"><tr><th>L_Name</th><th>Item_taken</th><th>Quantity</th><th>Issued To</th><th>Issue Date</th></tr>
	   <?php  $tbl = "general_info"; $options='ORDER BY gen_id DESC'; $data = new Process();$info = $data->getAllData($tbl,$options);//var_dump($info);
	foreach($info as $values){?>
		<tr><td><input type="hidden" name="hid"  class="hid"/><a href="#" class="more_with" data-id="<?php echo $values['location_name'];?>" ><?php echo $values['location_name'];?>	</a></td>
		<td><?php echo $values['item_name'];?></td><td><?php echo $values['quantity'];?></td><td><?php echo $values['supervisor_name'];?></td><td><?php echo $values['date'];?></td>
		</tr>
		<?php }?></table><script> $('.more_with').click(function(){var loc_with=$(this).attr('data-id');$.ajax({type:'post',url:'ajax.php',data:'loc_with='+loc_with,success:function(r){
			$('#items_ass').html(r);
		}
	});
	
}); </script>	
	</div>
	
	  <?php }elseif(isset($_POST['loc_up'])){?>
	  <div>
	<div id="close" style="float:right; margin-top: 12px;" >
			<button class="cls"><span  class="glyphicon glyphicon-remove" style="font-size: 15px;"></span></button>
		</div>
		<div id="head"><h5><strong><?php echo $_POST['loc_up'] ?></strong> &nbsp;&nbsp; Items!</h5></div><br />
	<div id="scroll" style="overflow: auto; height:480px; ">
	<table class="table table-condensed"><tr><th>Item_taken</th><th>Quantity</th><th>Status</th><th>Issued To</th><th>District</th><th>Transport_type</th> <th>Vehicle No:</th>   <th>Issue Date</th></tr>
	   <?php  $tbl = "upcountry"; $options='loc_name LIKE "%'.$_POST['loc_up'].'%"'; $data = new Process();$info = $data->getData($tbl,$options);//var_dump($info);
	foreach($info as $values){?>
		<tr>
		<td><?php echo $values['it_name'];?></td><td><?php echo $values['quantity'];?></td><td><?php echo $values['item_status'];?></td><td><?php echo $values['superv'];?></td><td><?php echo $values['district'];?></td><td><?php echo $values['trans_type'];?>	
		</td><td><?php echo $values['licence_no'];?></td><td><?php echo $values['p_date'];?></td>
		</tr>
		<?php }?></table></div></div>
		
		 <?php }elseif(isset($_POST['loc_with'])){?>
	  	<div>
	<div id="close" style="float:right; margin-top: 12px;" >
			<button class="cls"><span  class="glyphicon glyphicon-remove" style="font-size: 15px;"></span></button>
		</div>
		<div id="head"><h5><strong><?php echo $_POST['loc_with'] ?></strong> &nbsp;&nbsp; Items!</h5></div><br />
			<div id="scroll" style="overflow: auto; height:480px; ">
	<table class="table table-condensed"><tr><th>Item_taken</th><th>Quantity</th><th>Status</th><th>Issue To</th><th>Issue Date</th></tr>
	   <?php  $tbl = "general_info"; $options='location_name LIKE "%'.$_POST['loc_with'].'%"'; $data = new Process();$info = $data->getData($tbl,$options);//var_dump($info);
	foreach($info as $values){?>
		<tr>
		<td><?php echo $values['item_name'];?></td><td><?php echo $values['quantity'];?></td><td><?php echo $values['item_status'];?></td>	<td><?php echo $values['supervisor_name'];?></td>	
		<td><?php echo $values['date'];?></td>
		</tr>
		<?php }?></table></div></div>
		
		
		<?php }elseif(isset($_POST['action'])&&!empty($_POST['item'])){
			$tbl1='barcodes';$tbl2='items';$tbl3='stock';
		$options='barcodes INNER JOIN stock ON (stock.stock_id=barcodes.stock_id) WHERE barcodes.serial LIKE "%'.$_POST['item'].'%"';
		$serial_data=new Process();$inform=$serial_data->getExtras($options);
		 ?>
		<div id="scroll" style="overflow: auto; height:400px;">
		<table class="table table-bordered">
		<tr><th>Item Code</th><th>Description</th><th>serial</th><th>Post date</th></tr>
		<?php foreach ($inform as $values){
		?> <tr>
			<td><?php echo $values['item_id'];?></td><td><?php echo $values['cat_name'];?></td>
			<td><?php echo $values['serial'];?></td><td><?php echo $values['warrant'];?></td>
			</tr>
		<?php }?></table></div>
		<?php }elseif(isset($_POST['action'])&&!empty($_POST['itemss'])){
			$tbl1='barcodes';$tbl2='items';$tbl3='general_info';
		$options='barcodes INNER JOIN general_info ON (general_info.gen_id=barcodes.gen_id) WHERE barcodes.serial LIKE "%'.$_POST['itemss'].'%"';
		$serial_data=new Process();$inform=$serial_data->getExtras($options);
		?>
		<div id="scroll" style="overflow: auto; height:400px; ">
		<table class="table table-bordered">
		<tr><th>Item Code</th><th>Location</th><th>serial</th><th>Issued date</th></tr>
		<?php foreach ($inform as $values){
		?> <tr>
			<td><?php echo $values['item_name'];?></td>
			<td><?php echo $values['location_name'];?></td><td><?php echo $values['serial'];?></td>
			<td><?php echo $values['date'];?></td></tr>
		<?php }?>
		<?php }elseif(isset($_POST['action'])&&!empty($_POST['items'])){
			$tbl1='barcodes';$tbl2='items';$tbl3='upcountry';
		$options='barcodes INNER JOIN upcountry ON (upcountry.up_id=barcodes.up_id) WHERE barcodes.serial LIKE "%'.$_POST['items'].'%"';
		$serial_data=new Process();$inform=$serial_data->getExtras($options);
		 ?>
		 <div id="scroll" style="overflow: auto; height:400px; ">
		<table class="table table-bordered">
		<tr><th>Item Code</th><th>Location</th><th>serial</th><th>Issued date</th></tr>
		<?php foreach ($inform as $values){
		?> <tr>
			<td><?php echo $values['it_name'];?></td><td><?php echo $values['loc_name'];?></td>
			<td><?php echo $values['serial'];?></td><td><?php echo $values['p_date'];?></td>
			</tr>
		<?php }?></table></div>
		<?php }?>
		<script>
		
	$('.cls').click(function(){$('.modal').hide();});
	$('.clss').click(function(){
		$('.mod').hide();
	});
		</script>

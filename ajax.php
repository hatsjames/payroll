<?php require'classes/class.process.php';
if(isset($_POST['post'])&&!empty($_POST['post'])){
	$search_term=$_POST['term'];$tbl='tbl_memo'; 

$op="tbl_memo INNER JOIN tbl_cashier ON tbl_memo.c_id=tbl_cashier.c_id";

	$process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:480px; ">
	<h4>KINGS</h4> 
	<div id="search1" style="">
		<input type="text" name="cashier" id="cm" placeholder="look for employee names">
	</div>
	<div id="m1">
	<table class="table table-condensed"><tr style="background-color:#FF851B "><th>Cashier</th><th>Location</th><th>Reason</th><th>Debit</th><th>Date</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><input type="hidden" class="names" value="<?php echo $values['c_id'];?>" /><a href="#" class="cn" data-id="<?php echo $values['c_id'];?>" style="color: black;" ><?php echo $values['c_name'];?></a></td>
		<td><?php echo $values['l_name'];?></td><td><?php echo $values['reason'];?></td>
		<td><?php echo number_format($values['amount']);?></td><td><?php echo $values['m_date'];?></td>
		
		</tr>
		<?php }?></table> </div>   <script> $(document).ready(function(){
			
			$('.update').click(function(){
				var id=$(this).attr('data-id');
				var update=$(this).attr('data-id');
				$.ajax({type:'post',url:'ajax.php',data:'id='+id +'&update='+update,success:function(data){
					$('#scroll').html(data);
				}});
			});
			
			$('.cn').click(function(){
				var idx=$(this).attr('data-id');
				//alert(idx);
				$.ajax({type:'post',url:'ajax.php',data:'idx='+idx,success:function(data){
					$('#right').html(data);
				}});
			});
			
				$('#cm').on('keyup',function(){
		                       var mitem=$(this).val();
		$.ajax({
			type:'post',
			url:'ajax.php',
			data:'mitem='+mitem,
			success:function(resp){
				$('#m1').html(resp);
			}
			
		});
			
		});
	
		});</script></div>
	 
		<?php }
				
		elseif(isset($_POST['cash'])){
	$OPT="payroll INNER JOIN tbl_cashier ON payroll.c_id=tbl_cashier.c_id ";
	   $data=new Process();$info=$data->getExtras($OPT);	 
?><h4>Cashier's PayRol&nbsp;&nbsp;<div id="" style="float:right">
	<a href="includes/downl.php"  id="export1" data-id=""  class="btn btn-default">Export</a>
	<a href=""  id="appr" data-id="1"  class="btn btn-default">Approve</a></div></h4> 
	   <div id="search10" style="float: left">
		<input type="text" name="cashier" id="cp" placeholder="look for employee names"  >
	</div>
	<div id="scroll" style="height:480px; ">
	<div id="payspace">
	<table class="table table-bordered"><tr><th>ledger:&nbsp;&nbsp;<?php echo $vl;  ?></th></tr></table>
	<table class="table table-bordered" style="border-color:solid black"><tr><th>Particulars</th><th>salary</th><th>Penalities</th><th>shortages</th><th>advance</th><th>installments</th><th>Net Amount</th></tr>
	
	<?php    foreach($info as $values){ ?>
		<tr> 
		<td><?php echo $values['c_name'];?></td>
		<td><?php echo number_format( $values['p_salary']);?></td>
	    <td><?php echo number_format($values['memo']);?></td>
	    <td><?php echo number_format($values['shortage']);?></td>
	    <td><?php echo number_format($values['advance']);?></td>
	    <td><?php echo number_format($values['loan']);?></td>
	    <td><?php echo number_format($values['balance']);?></td>
		</tr>
		<?php }?>
		</table> </div></div>
		<script> $(document).ready(function(){$('#appr').click(function(){
			var py=$(this).attr('data-id');
			
			 $.ajax({
			    type:'post',
		        url:'classes/post.php',
			    data:'py='+py,
				success:function(resp){		
				//$('#right').html(resp);
				}
			});
			
			});	
			
		$('#cp').on('keyup',function(){
		var pitem=$(this).val();
		$.ajax({
			type:'post',
			url:'ajax.php',
			data:'pitem='+pitem,
			success:function(resp){
				$('#payspace').html(resp);
			}
			
		});
			
		});
			
		});</script></div>
		<?php }	
			
			elseif(isset($_POST['sup'])){
	$OPT="payroll INNER JOIN supervisor ON payroll.s_id=supervisor.s_id ";
	   $data=new Process();$info=$data->getExtras($OPT);	 
?><h4>Supervisor's PayRol&nbsp;&nbsp;
	<div id="" style="float:right">
	<a href="includes/downl1.php"  id="export1" data-id="1"  class="btn btn-default">Export</a>
	<a href=""  id="appr1" data-id="2"  class="btn btn-success">Approve</a>
	</div>
</div></h4>
<div id="search9" style="float: left">
		<input type="text" name="supervisor" id="supp" placeholder="look for employee names"   >
	</div><div id="scroll" style="height:480px; ">
	<div id="payspace1">
	<table class="table table-bordered"><tr><th>ledger:&nbsp;&nbsp;<?php echo $vl;  ?></th></tr></table>
	<table class="table table-bordered" style="border-color:solid black"><tr><th>Particulars</th><th>salary</th><th>Penalities</th><th>shortages</th><th>advance</th><th>installments</th><th>Net Amount</th></tr>
	
	<?php    foreach($info as $values){ ?>
		<tr> 
		<td><?php echo $values['s_name'];?></td>
		<td><?php echo number_format( $values['p_salary']);?></td>
	    <td><?php echo number_format($values['memo']);?></td>
	    <td><?php echo number_format($values['shortage']);?></td>
	    <td><?php echo number_format($values['advance']);?></td>
	    <td><?php echo number_format($values['loan']);?></td>
	    <td><?php echo number_format($values['balance']);?></td>
		</tr>
		<?php }?>
	
		</table> </div> </div>
			<script> 
			
			$(document).ready(function(){
				
				$('#appr1').click(function(){
					
			         var py1=$(this).attr('data-id');
			$.ajax({
			    type:'post',url:'classes/post.php',data:'py1='+py1,
				success:function(){	
				}
			});
			
			
		});	
		
			$('#supp').on('keyup',function(){
		var pitem1=$(this).val();
		$.ajax({
			type:'post',
			url:'ajax.php',
			data:'pitem1='+pitem1,
			success:function(resp){
				$('#payspace1').html(resp);
			}
			
		});
			
		});
		
		});</script>
		</div>
		<?php }	
	elseif(isset($_POST['idx'])){
	$id=$_POST['idx'];   $options='c_id='.$_POST['idx'].'';  
	$OPT="tbl_memo INNER JOIN updates ON tbl_memo.c_id=updates.c_id WHERE tbl_memo.c_id=".$_POST['idx']."";
	   $data=new Process();$info=$data->getExtras($OPT);	 
?><h4> <?php $x=new Process();$tblx='tbl_cashier';$optx='c_id='.$_POST['idx'].'';  $h=$x->getData($tblx,$optx); foreach($h as $v){$vl=$v['c_name'];}  ?>&nbsp;&nbsp;</h4>

	<table class="table table-bordered"><tr><th>ledger:&nbsp;&nbsp;<?php echo $vl;  ?></th></tr></table>
	<div id="scroll" style="overflow:auto;height:480px; ">
	<table class="table table-bordered" style="border-color:solid black"><tr><th>Date</th><th>Particulars</th><th>Debit</th><th>Salary</th><th>Balance</th><th>T.Debit</th><th>Credit</th></tr>
	<?php    foreach($info as $values){ ?>
		<tr> 
		<td><?php echo $values['m_date'];?></td>
		<td><?php echo $values['flags'];?></td>
	    <td><?php echo number_format($values['amount']);?></td><?php $optx="SELECT shortage" ?>
		</tr>
		 
		<?php }?>
		</table>
		<table class="table table-bordered"><tr> <td></td> <td><strong>&nbsp;Closing Balance</strong></td><td></td>   <td><?php echo $values['salary'];?></td> <td><?php echo $values['balance'];?></td> <td><?php echo $values['t_amount'];?></td></tr>
		</table> </div>
		
		
		<?php }
	
	elseif(isset($_POST['postx'])&&!empty($_POST['postx'])){
		
	$search_term=$_POST['term'];$tbl='tbl_memo'; 
    $op="tbl_memo INNER JOIN supervisor ON tbl_memo.s_id=supervisor.s_id  INNER JOIN tbl_location ON tbl_memo.l_id=tbl_location.l_id";

	$process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:480px; ">
	<h4>KINGS </h4><div id="search2">
		<input type="text" name="supervisor" id="cs" placeholder="look for employee names"  >
	</div>
	<div id="m2">
	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Supervisor</th><th>Location</th><th>Reason</th><th>Debit</th><th>Date</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><input type="hidden" class="names" value="<?php echo $values['s_id'];?>" /><a href="#" class="cn" data-id="<?php echo $values['s_id'];?>" style="color: black;" ><?php echo $values['s_name'];?></a></td>
		<td><?php echo $values['l_name'];?></td><td><?php echo $values['reason'];?></td>
		<td><?php echo number_format($values['amount']);?></td><td><?php echo $values['m_date'];?></td>
		</tr>
		<?php }?></table>    <script> $(document).ready(function(){
		$('.cn').click(function(){
				var idy=$(this).attr('data-id');
			//alert(idy);
				$.ajax({type:'post',url:'ajax.php',data:'idy='+idy,success:function(data){
					$('#right').html(data);
				}});
			});
			
			
				$('#cs').on('keyup',function(){
		var mitem1=$(this).val();
		$.ajax({
			type:'post',
			url:'ajax.php',
			data:'mitem1='+mitem1,
			success:function(resp){
				$('#m2').html(resp);
			}
			
		});
			
		});
			
		});</script></div></div>
		
		
		<?php }	
	
	elseif(isset($_POST['idy'])){
	$id=$_POST['idy'];   $options='s_id='.$_POST['idy'].'';  
	$OPT="tbl_memo INNER JOIN updates ON tbl_memo.s_id=updates.s_id WHERE tbl_memo.s_id=".$_POST['idy']."";
	   $data=new Process();$info=$data->getExtras($OPT);	 
?><h4> <?php $x=new Process();$tblx='supervisor';$optx='s_id='.$_POST['idy'].'';  $h=$x->getData($tblx,$optx); foreach($h as $v){$vl=$v['s_name'];}  ?>&nbsp;&nbsp;</h4>

	<table class="table table-bordered"><tr><th>ledger:&nbsp;&nbsp;<?php echo $vl;  ?></th></tr></table>
	<div id="scroll" style="overflow:auto;height:480px; ">
	<table class="table table-bordered" style="border-color:solid black"><tr><th>Date</th><th>Particulars</th><th>Debit</th><th>Salary</th><th>Balance</th><th>T.Debit</th><th>Credit</th></tr>
	<?php    foreach($info as $values){ ?>
		<tr> 
		<td><?php echo $values['m_date'];?></td>
		<td><?php echo $values['flags'];?></td>
	    <td><?php echo number_format($values['amount']);?></td>
		</tr>
		<?php }?>
		</table>
		
		<table class="table table-bordered"><tr> <td></td> <td><strong>&nbsp;Closing Balance</strong></td><td></td>   <td><?php echo $values['salary'];?></td> <td><?php echo $values['balance'];?></td> <td><?php echo $values['t_amount'];?></td></tr>
		</table> </div>
	
		<?php }
	
	elseif(isset($_POST['postls'])&&!empty($_POST['postls'])){
			$search_term=$_POST['term'];$tbl='tbl_memo'; 
    $op="tbl_loan INNER JOIN supervisor ON tbl_loan.s_id=supervisor.s_id";

	$process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:480px; ">
	<h4>KINGS </h4><div id="search3" >
		<input type="text" name="supervisor" id="sl" placeholder="look for employee names"  >
	</div>
	<div id="l">
	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Supervisor</th><th>Reason</th><th>Amount</th><th>Amount in bits</th><th>Balance</th><th>Date</th><th>Status</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="ls" data-id="<?php echo $values['s_id'];?>" style="color: black;" ><?php echo $values['s_name'];?></a></td>
		<td><?php echo $values['reason'];?></td><td><?php echo number_format($values['l_amount']);?></td>
		<td><?php echo number_format($values['l_install']);?></td>
		<td><?php echo number_format($values['l_bal']);?></td><td><?php echo $values['l_date'];?></td>
		
		<td> <input type="hidden" class="li" value="<?php echo $values['l_install']?>" />
			<button  class="active btn-default x" data-id="<?php echo $values['s_id'] ?>"value="<?php echo $values['l_status']?>";><?php $v=$values['l_status'];if($v=='Cleared')
				{echo'<span style="color:red">'.$v.'</span>';}elseif($v=='Active')
				{echo'<span style="color:green">'.$v.'</span>';} elseif($v=='Updated')
				{echo'<span style="color:blue">'.$v.'</span>';}  ?></button></td>
		
		
		</tr>
		<?php }?></table>    <script> $(document).ready(function(){
		$('.ls').click(function(){
				var idls=$(this).attr('data-id');
			//alert(idy);
				$.ajax({type:'post',url:'ajax.php',data:'idls='+idls,success:function(data){
					$('#right').html(data);
				}});
			});
			
			///javascripttttttttttttttttttt
			
			$('.active').click(function(){
				var activate2=$(this).attr('data-id');
				var value=$('.li').val();
				$.ajax({
					type:'post',
					url:'classes/post.php',
					data:'activate2='+activate2 +'&value='+value,
					success:function(){
					}
				});
				
			});
			
			
			
				$('#sl').on('keyup',function(){
		var litem=$(this).val();
		$.ajax({
			type:'post',
			url:'ajax.php',
			data:'litem='+litem,
			success:function(resp){
				$('#l').html(resp);
			}
			
		});
			
		});
		
		
		$('.x').hover(function(){
			
	 	                      var value=$(this).val();
	 	                      
	 	if((value == 'Updated')||(value == 'Cleared')){
	 		$(this).attr("disabled","disabled");
				
				}else{
					
					$(this).removeAttr("disabled");
				}
      
    });
		
		
		
		
		});
	
	 
	
	
		</script></div></div>
		
		<?php }
	
	elseif(isset($_POST['postlc'])&&!empty($_POST['postlc'])){
			$search_term=$_POST['term'];$tbl='tbl_memo'; 
    $op="tbl_loan INNER JOIN tbl_cashier ON tbl_loan.c_id=tbl_cashier.c_id";

	$process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:480px; ">
	<h4>KINGS </h4><div id="search4" >
		<input type="text" name="cashier" id="cl" placeholder="look for employee names"  >
	</div>
	<div id="l1">
	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Cashier</th><th>Reason</th><th>Amount</th><th>Amount in bits</th><th>Balance</th><th>Date</th><th>Status</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="lc" data-id="<?php echo $values['c_id'];?>" style="color: black;" ><?php echo $values['c_name'];?></a></td>
		<td><?php echo $values['reason'];?></td><td><?php echo number_format($values['l_amount']);?></td>
		<td><?php echo number_format($values['l_install']);?></td><td><?php echo number_format($values['l_bal']);?></td>
		<td><?php echo $values['l_date'];?></td>
		</td><td> <input type="hidden" class="li" value="<?php echo $values['l_install']?>" />
			
			
			
			
			<button class="active btn-default x" data-id="<?php echo $values['c_id'] ?>" value="<?php echo $values['l_status']?>";><?php $v=$values['l_status'];if($v=='Cleared')
				
				{echo'<span style="color:red">'.$v.'</span>';}elseif($v=='Active')
				
				{echo'<span style="color:green">'.$v.'</span>';} elseif($v=='Updated')
				
				{echo'<span style="color:blue">'.$v.'</span>';}  ?>  </button></td>
				
				
				
				
		</tr>
		<?php }?></table>    <script> $(document).ready(function(){
		$('.lc').click(function(){
				var idlc=$(this).attr('data-id');
			//alert(idy);
				$.ajax({type:'post',url:'ajax.php',data:'idlc='+idlc,success:function(data){
					$('#right').html(data);
				}});
			});
			
			///javascripttttttttttttttttttt
			
			$('.active').click(function(){
				var activate1=$(this).attr('data-id');
				var value=$('.li').val();
				$.ajax({
					type:'post',
					url:'classes/post.php',
					data:'activate1='+activate1 +'&value='+value,
					success:function(){
					}
				});
				
			});
				
				$('#cl').on('keyup',function(){
		var litem1=$(this).val();
		$.ajax({
			type:'post',
			url:'ajax.php',
			data:'litem1='+litem1,
			success:function(resp){
				$('#l1').html(resp);
			}
			
		});
			
		});
				
				
				
		$('.x').hover(function(){
	 	var value=$(this).val();
	 	if((value == 'Updated')||(value == 'Cleared')){
	 		$(this).attr("disabled","disabled");
				
				}else{
					
					$(this).removeAttr("disabled");
				}
      
    });		
				
				
		});</script></div></div>
		<!--shortages-->
	<?php }
	elseif(isset($_POST['postss'])&&!empty($_POST['postss'])){	
    $op="shortages INNER JOIN supervisor ON shortages.s_id=supervisor.s_id INNER JOIN tbl_location ON shortages.loc_id=tbl_location.l_id";
    $process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:480px; ">
	<h4>KINGS </h4><div id="search5" >
		<input type="text" name="supervisor" id="ss" placeholder="look for employee names"  >
	</div>
	<div id="shv">
	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Supervisor</th><th>Location</th><th>Reason</th><th>Amount</th><th>Date</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="sh1" data-id="<?php echo $values['s_id'];?>" style="color: black;" ><?php echo $values['s_name'];?></a></td>
		<td><?php echo $values['l_name'];?><td><?php echo $values['reason'];?></td><td><?php echo number_format($values['s_amount']);?></td>
		<td><?php echo $values['s_date'];?></td>
		</tr>
		<?php }?></table>    <script> $(document).ready(function(){
		   
		   $('.sh1').click(function(){
				var idsh1=$(this).attr('data-id');
			//alert(idy);
				$.ajax({type:'post',url:'ajax.php',data:'idsh1='+idsh1,success:function(data){
					$('#right').html(data);
				}});
			});
			
		
				$('#ss').on('keyup',function(){
		var sitem=$(this).val();
		$.ajax({
			type:'post',
			url:'ajax.php',
			data:'sitem='+sitem,
			success:function(resp){
				$('#shv').html(resp);
			}
			
		});
			
		});
					
		});</script></div></div>
		
		<?php }
	elseif(isset($_POST['postsc'])&&!empty($_POST['postsc'])){
    $op="shortages INNER JOIN tbl_cashier ON shortages.c_id=tbl_cashier.c_id INNER JOIN tbl_location ON tbl_cashier.l_id=tbl_location.l_id";
	$process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:480px; ">
	<h4>KINGS </h4><div id="search6" >
		<input type="text" name="cashier" id="cs" placeholder="look for employee names">
	</div>
	<div id="shv1">
	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Cashier</th><th>Location</th><th>Reason</th><th>Amount</th><th>Date</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="sh2" data-id="<?php echo $values['c_id'];?>" style="color: black;" ><?php echo $values['c_name'];?></a></td>
		<td><?php echo $values['l_name'];?><td><?php echo $values['reason'];?></td><td><?php echo number_format($values['s_amount']);?></td>
		<td><?php echo $values['s_date'];?></td>
		</tr>
		<?php }?></table>    <script> $(document).ready(function(){
		$('.sh2').click(function(){
				var idsh2=$(this).attr('data-id');
			//alert(idy);
				$.ajax({type:'post',url:'ajax.php',data:'idsh2='+idsh2,success:function(data){
					$('#right').html(data);
				}});
			});
			
				
				$('#cs').on('keyup',function(){
		var sitem1=$(this).val();
		$.ajax({
			type:'post',
			url:'ajax.php',
			data:'sitem1='+sitem1,
			success:function(resp){
				$('#shv1').html(resp);
			}
			
		});
			
		});
			
		});</script></div></div>
			<?php }
	elseif(isset($_POST['postac'])&&!empty($_POST['postac'])){
			$search_term=$_POST['term'];$tbl='tbl_memo'; 
    $op="advance INNER JOIN  tbl_cashier ON advance.c_id=tbl_cashier.c_id";
	$process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:480px; ">
	<h4>KINGS </h4><div id="search7" >
		<input type="text" name="cashier" id="ca" placeholder="look for employee names">
	</div>
	<div id="av" > 
	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Cashier</th><th>Reason</th><th>Amount</th><th>Amount in bits</th><th>Balance</th><th>Date</th><th>Status</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="ac1" data-id="<?php echo $values['c_id'];?>" style="color: black;" ><?php echo $values['c_name'];?></a></td>
		<td><?php echo $values['reason'];?></td><td><?php echo number_format($values['a_amount']);?></td>
		<td><?php echo number_format($values['a_install']);?></td><td><?php echo number_format($values['a_bal']);?></td><td><?php echo $values['a_date'];?></td>
		
		<td> <input type="hidden" class="ai" value="<?php echo $values['a_install']?>" />
			
			
			<button  class="active btn-default x " data-id="<?php echo $values['c_id'] ?>" value="<?php echo $values['a_status']?>"; >
				
				<?php $v=$values['a_status'];if($v=='Cleared')
				{echo'<span style="color:red">'.$v.'</span>';}elseif($v=='Active')
				             {echo'<span style="color:green">'.$v.'</span>';}elseif($v=='Updated')
				                             {echo'<span style="color:blue">'.$v.'</span>';}  ?>
				
				</button></td>
		
		</tr>
		<?php }?></table>    <script> $(document).ready(function(){
		
		$('.ac1').click(function(){
				var idac=$(this).attr('data-id');
			//alert(idy);
				$.ajax({type:'post',url:'ajax.php',data:'idac='+idac,success:function(data){
					$('#right').html(data);
				}});
			});
			
			
			
			///javascripttttttttttttttttttt
			
			$('.active').click(function(){
				var activate3=$(this).attr('data-id');
				var value=$('.ai').val();
				$.ajax({
					type:'post',
					url:'classes/post.php',
					data:'activate3='+activate3 +'&value='+value,
					success:function(){
					}
				});
				
			});
			
				
				$('#ca').on('keyup',function(){
		var aitem=$(this).val();
		$.ajax({
			type:'post',
			url:'ajax.php',
			data:'aitem='+aitem,
			success:function(resp){
				$('#av').html(resp);
			}
			
		});
			
		});
			
			
			
			$('.x').hover(function(){
	 	var value=$(this).val();
	 	if((value == 'Updated')||(value == 'Cleared')){
	 		$(this).attr("disabled","disabled");
				
				}else{
					
					$(this).removeAttr("disabled");
				}
      
    });
			
		});</script></div></div>
	
		<?php }
	                     elseif(isset($_POST['postas'])&&!empty($_POST['postas'])){
			$search_term=$_POST['term'];$tbl='tbl_memo'; 
    $op="advance INNER JOIN supervisor ON advance.s_id=supervisor.s_id";
  $process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:480px; ">
	<h4>KINGS </h4><div id="search8" >
		<input type="text" name="supervisor" id="sa" placeholder="look for employee names"   >
	</div>
	<div id="av1">
	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Supervisor</th><th>Reason</th><th>Amount</th><th>Amount in bits</th><th>Balance</th><th>Date</th><th>Status</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="as2" data-id="<?php echo $values['s_id'];?>" style="color: black;" ><?php echo $values['s_name'];?></a></td>
		<td><?php echo $values['reason'];?></td><td><?php echo number_format($values['a_amount']);?></td>
		<td><?php echo number_format($values['a_install']);?></td><td><?php echo number_format($values['a_bal']);?></td><td><?php echo $values['a_date'];?></td>
		
		<td> <input type="hidden" class="ai" value="<?php echo $values['a_install']?>" />
			<button class="active btn-default x" data-id="<?php echo $values['s_id'] ?>" value="<?php echo $values['a_status']?>";><?php $v=$values['a_status'];if($v=='Cleared')
				{echo'<span style="color:red">'.$v.'</span>';}elseif($v=='Active')
				{echo'<span style="color:green">'.$v.'</span>';} elseif($v=='Updated')
				{echo'<span style="color:blue">'.$v.'</span>';}  ?></button></td>
		
		</tr>
		<?php }?></table>    <script> $(document).ready(function(){
		$('.as2').click(function(){
				var idas=$(this).attr('data-id');
			//alert(idy);
				$.ajax({type:'post',url:'ajax.php',data:'idas='+idas,success:function(data){
					$('#right').html(data);
				}});
			});
			
			
			
			///javascripttttttttttttttttttt
			
			$('.active').click(function(){
				var activate3=$(this).attr('data-id');
				var value=$('.ai').val();
				$.ajax({
					type:'post',
					url:'classes/post.php',
					data:'activate4='+activate4 +'&value='+value,
					success:function(){
					}
				});
				
			});
				
				
		$('#sa').on('keyup',function(){
		var aitem1=$(this).val();
		$.ajax({
			type:'post',
			url:'ajax.php',
			data:'aitem1='+aitem1,
			success:function(resp){
				$('#av1').html(resp);
			}
			
		});
			
		});
			$('.x').hover(function(){
	 	var value=$(this).val();
	 	if((value == 'Updated')||(value == 'Cleared')){
	 		$(this).attr("disabled","disabled");
				
				}else{
					
					$(this).removeAttr("disabled");
				}
      
    });
		});</script></div></div>
		<?php }		
	elseif(isset($_POST['idsh1'])){
	   $options='s_id='.$_POST['idsh1'].'';  
	$OPT="shortages INNER JOIN updates ON shortages.s_id=updates.s_id WHERE shortages.s_id=".$_POST['idsh1']."";
	   $data=new Process();$info=$data->getExtras($OPT);	 
?><h4> <?php $x=new Process();$tblx='supervisor';$optx='s_id='.$_POST['idsh1'].'';  $h=$x->getData($tblx,$optx); foreach($h as $v){$vl=$v['s_name'];}  ?>&nbsp;&nbsp;</h4>
	<div id="scroll" style="overflow:auto;height:480px; ">
	<table class="table table-bordered"><tr><th>ledger:&nbsp;&nbsp;<?php echo $vl;  ?></th></tr></table>
	<table class="table table-bordered" style="border-color:solid black"><tr><th>Date</th><th>Particulars</th><th>Debit</th><th>Salary</th><th>Balance</th><th>T.Debit</th><th>Credit</th></tr>
	<?php    foreach($info as $values){ ?>
		<tr> 
		<td><?php echo $values['s_date'];?></td>
		<td><?php echo $values['reason'];?></td>
	    <td><?php echo number_format($values['s_amount']);?></td>
		</tr>
		<?php }?>
		</table>
		<table class="table table-bordered"><tr> <td></td> <td><strong>&nbsp;Closing Balance</strong></td><td></td>   <td><?php echo number_format($values['salary']);?></td> <td><?php echo number_format($values['balance']);?></td> <td><?php echo number_format($values['t_amount']);?></td></tr>
		</table> </div>>
		
	<?php }	
	elseif(isset($_POST['idsh2'])){
	   $options='c_id='.$_POST['idsh2'].'';  
	$OPT="shortages INNER JOIN updates ON shortages.c_id=updates.c_id WHERE shortages.c_id=".$_POST['idsh2']."";
	   $data=new Process();$info=$data->getExtras($OPT);	 
?><h4> <?php $x=new Process();$tblx='tbl_cashier';$optx='c_id='.$_POST['idsh2'].'';  $h=$x->getData($tblx,$optx); foreach($h as $v){$vl=$v['c_name'];}  ?>&nbsp;&nbsp;</h4>
	<div id="scroll" style="overflow:auto;height:480px; ">
	<table class="table table-bordered"><tr><th>ledger:&nbsp;&nbsp;<?php echo $vl;  ?></th></tr></table>
	<table class="table table-bordered" style="border-color:solid black"><tr><th>Date</th><th>Particulars</th><th>Debit</th><th>Salary</th><th>Balance</th><th>T.Debit</th><th>Credit</th></tr>
	<?php    foreach($info as $values){ ?>
		<tr> 
		<td><?php echo $values['s_date'];?></td>
		<td><?php echo $values['reason'];?></td>
	    <td><?php echo number_format($values['s_amount']);?></td>
		</tr>
		<?php }?>
		</table>
		<table class="table table-bordered"><tr> <td></td> <td><strong>&nbsp;Closing Balance</strong></td><td></td>   <td><?php echo number_format($values['salary']);?></td> <td><?php echo number_format($values['balance']);?></td> <td><?php echo number_format($values['t_amount']);?></td></tr>
		</table> </div>
		<?php }		
	elseif(isset($_POST['idas'])){
	   $options='s_id='.$_POST['idas'].'';  
	$OPT="advance INNER JOIN updates ON advance.s_id=updates.s_id WHERE advance.s_id=".$_POST['idas']."";
	   $data=new Process();$info=$data->getExtras($OPT);	 
?><h4> <?php $x=new Process();$tblx='supervisor';$optx='s_id='.$_POST['idas'].'';  $h=$x->getData($tblx,$optx); foreach($h as $v){$vl=$v['s_name'];}  ?>&nbsp;&nbsp;</h4>
	<div id="scroll" style="overflow:auto;height:480px; ">
	<table class="table table-bordered"><tr><th>ledger:&nbsp;&nbsp;<?php echo $vl;  ?></th></tr></table>
	<table class="table table-bordered" style="border-color:solid black"><tr><th>Date</th><th>Particulars</th><th>Debit</th><th>Salary</th><th>Balance</th><th>T.Debit</th><th>Credit</th></tr>
	<?php    foreach($info as $values){ ?>
		<tr> 
		<td><?php echo $values['a_date'];?></td>
		<td><?php echo $values['reason'];?></td>
	    <td><?php echo number_format($values['a_amount']);?></td>
		</tr>
		<?php }?>
		</table>
		<table class="table table-bordered"><tr> <td></td> <td><strong>&nbsp;Closing Balance</strong></td><td></td>   <td><?php echo number_format($values['salary']);?></td> <td><?php echo number_format($values['balance']);?></td> <td><?php echo number_format($values['t_amount']);?></td></tr>
		</table> </div>
	<?php }		
	elseif(isset($_POST['idac'])){
	   $options='c_id='.$_POST['idac'].'';  
	$OPT="advance INNER JOIN updates ON advance.c_id=updates.c_id WHERE advance.c_id=".$_POST['idac']."";
	   $data=new Process();$info=$data->getExtras($OPT);	 
?><h4> <?php $x=new Process();$tblx='tbl_cashier';$optx='c_id='.$_POST['idac'].'';  $h=$x->getData($tblx,$optx); foreach($h as $v){$vl=$v['c_name'];}  ?>&nbsp;&nbsp;</h4>
	<div id="scroll" style="overflow:auto;height:480px; ">
	<table class="table table-bordered"><tr><th>ledger:&nbsp;&nbsp;<?php echo $vl;  ?></th></tr></table>
	<table class="table table-bordered" style="border-color:solid black"><tr><th>Date</th><th>Particulars</th><th>Debit</th><th>Salary</th><th>Balance</th><th>T.Debit</th><th>Credit</th></tr>
	<?php    foreach($info as $values){ ?>
		<tr> 
		<td><?php echo $values['a_date'];?></td>
		<td><?php echo $values['reason'];?></td>
	    <td><?php echo number_format($values['a_amount']);?></td>
		</tr>
		<?php }?>
		</table>
		<table class="table table-bordered"><tr> <td></td> <td><strong>&nbsp;Closing Balance</strong></td><td></td>   <td><?php echo number_format($values['salary']);?></td> <td><?php echo number_format($values['balance']);?></td> <td><?php echo number_format($values['t_amount']);?></td></tr>
		</table> </div>	
		
			<?php }		
	elseif(isset($_POST['idlc'])){
	   $options='c_id='.$_POST['idlc'].'';  
	$OPT="tbl_loan INNER JOIN updates ON tbl_loan.c_id=updates.c_id WHERE tbl_loan.c_id=".$_POST['idlc']."";
	   $data=new Process();$info=$data->getExtras($OPT);	 
?><h4> <?php $x=new Process();$tblx='tbl_cashier';$optx='c_id='.$_POST['idlc'].'';  $h=$x->getData($tblx,$optx); foreach($h as $v){$vl=$v['c_name'];}  ?>&nbsp;&nbsp;</h4>
	<div id="scroll" style="overflow:auto;height:480px; ">
	<table class="table table-bordered"><tr><th>ledger:&nbsp;&nbsp;<?php echo $vl;  ?></th></tr></table>
	<table class="table table-bordered" style="border-color:solid black"><tr><th>Date</th><th>Particulars</th><th>Debit</th><th>Balary</th><th>Balance</th><th>T.Debit</th><th>Credit</th></tr>
	<?php    foreach($info as $values){ ?>
		<tr> 
		<td><?php echo $values['l_date'];?></td>
		<td><?php echo $values['reason'];?></td>
	    <td><?php echo number_format($values['l_amount']);?></td>
		</tr>
		<?php }?>
	</table>
		</table>
		<table class="table table-bordered"><tr> <td></td> <td><strong>&nbsp;Closing Balance</strong></td><td></td>   <td><?php echo number_format($values['salary']);?></td> <td><?php echo number_format($values['balance']);?></td> <td><?php echo number_format($values['t_amount']);?></td></tr>
		</table> </div>
			<?php }		
	elseif(isset($_POST['idls'])){
	   $options='c_id='.$_POST['idls'].'';  
	$OPT="tbl_loan INNER JOIN updates ON tbl_loan.s_id=updates.s_id WHERE tbl_loan.s_id=".$_POST['idls']."";
	   $data=new Process();$info=$data->getExtras($OPT);	 
?><h4> <?php $x=new Process();$tblx='supervisor';$optx='s_id='.$_POST['idls'].'';  $h=$x->getData($tblx,$optx); foreach($h as $v){$vl=$v['s_name'];}  ?>&nbsp;&nbsp;</h4>
	<div id="scroll" style="overflow:auto;height:480px; ">
	<table class="table table-bordered"><tr><th>ledger:&nbsp;&nbsp;<?php echo $vl;  ?></th></tr></table>
	<table class="table table-bordered" style="border-color:solid black"><tr><th>Date</th><th>Particulars</th><th>Debit</th><th>Salary</th><th>Balance</th><th>T.Debit</th><th>Credit</th></tr>
	<?php    foreach($info as $values){ ?>
		<tr> 
		<td><?php echo $values['l_date'];?></td>
		<td><?php echo $values['reason'];?></td>
	    <td><?php echo number_format($values['l_amount']);?></td>
		</tr>
		<?php }?>
		</table>
		<table class="table table-bordered"><tr> <td></td> <td><strong>&nbsp;Closing Balance</strong></td><td></td>   <td><?php echo number_format($values['salary']);?></td> <td><?php echo number_format($values['balance']);?></td> <td><?php echo number_format($values['t_amount']);?></td></tr>
		</table> </div>	
		<?php } ?>
		
		<?php if(isset($_POST['update_id_c'])){ $tbl="tbl_cashier"; $c_id=$_POST['update_id_c']; $opt_c="c_id=".$c_id.""; $get_s=new Process; $v=$get_s->getData($tbl,$opt_c);
               	foreach($v as $s){ $salar=$s['salary'];$name=$s['c_name'];}
	 ?><div id="update" style=" ">
		 <h4> Edit cashier salary</h4><br /><br />
		<div>
			<form method="post" action="classes/post.php" >
			 <label>Cashier_Name&nbsp;&nbsp;:</label><input type="text" name="cname"  class="text" value="<?php echo $name; ?>" /> <br /><br />
			 <label>Salary&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="camount" value="<?php echo $salar;  ?>"  /> <br /><br />
			 <input type="hidden" name="cash_id" value="<?php echo $c_id ?>" />
			 <button type="submit" name="salary_update1">Submit</button>
			</form>
		</div>
		
	</div>
<?php } ?>
<?php if(isset($_POST['update_id_c1'])){ $tbl="tbl_cashier"; $c_id=$_POST['update_id_c1']; $opt_c="c_id=".$c_id.""; $get_s=new Process; $v=$get_s->getData($tbl,$opt_c);
               	foreach($v as $s){ $salar=$s['salary'];$name=$s['name'];}
	 ?><div id="update" style=" ">
		 <h4> Edit cashier location</h4><br /><br />
		<div>
			<form method="post" action="classes/post.php" >
			  <label>Cashier_Name&nbsp;&nbsp;:</label><input type="text" name="cname"  class="text" value="<?php echo $c_name; ?>" /> <br /><br />
			  
			   <label>Location_Name:</label><select name="lname" ><?php $tbl="tbl_location"; $get=new Process; $d=$get->getAllData($tbl); 
                            foreach( $d as $v){
             	echo"<option value=".$v['l_id'].">".$v['l_name']."</option>";
             }	?></select> <br /><br />
			  <label>Supervisor_Name&nbsp;&nbsp;:</label><select name="sname" ><?php $tbl="supervisor"; $get=new Process; $d=$get->getAllData($tbl); 
              foreach( $d as $v){
             	echo"<option value=".$v['s_id'].">".$v['s_name']."</option>";
             }?></select> <br /><br />
			 
			  <input type="hidden" name="cash_id" value="<?php echo $c_id ?>" />
			 <button type="submit" name="cash_update">Submit</button>
			</form>
		</div>
		</div>
	
<?php } ?>
	<?php if(isset($_POST['update_id_s'])){ $tbl="supervisor"; $s_id=$_POST['update_id_s']; $opt_s="s_id=".$s_id.""; $get_s=new Process; $v=$get_s->getData($tbl,$opt_s);
               	foreach($v as $s){ $salar=$s['s_salary'];$name=$s['s_name'];}
	 ?><div id="update" style=" ">
		 <h4> Edit supervisor_salary</h4><br /><br />
		<div>
			 <form method="post" action="classes/post.php">
			 <label>Supervisor_Name&nbsp;&nbsp;:</label><input type="text" name="sname" value="<?php  echo $name ?>"  class="text" /> <br /><br />
			 <label>S_Salary&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="samount" value="<?php  echo $salar ?>"   /> <br /><br />
			 <input type="hidden" name="sup_id" value="<?php echo $s_id ?>" />
			 <button type="submit" name="salary_update2">Submit</button>
		     </form>
		</div>	
	</div>
<?php } ?>			
	<?php if(isset($_POST['update_id_s1'])){ $tbl="supervisor"; $s_id=$_POST['update_id_s1']; $opt_c="s_id=".$s_id.""; $get_s=new Process; $v=$get_s->getData($tbl,$opt_c);
               	foreach($v as $s){$name=$s['s_name'];}
	 ?><div id="update" style=" ">
		 <h4> Edit  supervisor locations</h4><br /><br />
		<div>
			<form method="post" action="classes/post.php" >
			     <label>Supervisor_Name&nbsp;&nbsp;:</label><input type="text" name="sname"  class="text" value="<?php echo $s_name; ?>" /> <br /><br />
			     <label>Location_Name:</label><select name="lname" ><?php $tbl="tbl_location"; $get=new Process; $d=$get->getAllData($tbl); 
             foreach( $d as $v){
             	echo"<option value=".$v['l_id'].">".$v['l_name']."</option>";
             }	?></select> <br /><br />
			  <input type="hidden" name="sup_id" value="<?php echo $s_id ?>" />
			 <button type="submit" name="sup_update">Submit</button>
			</form>
		</div>
		
	</div>
	
	<!-- employeeeeeeeeeeeeeeesssssssssssssssssss -->
	
	
	<?php }
	elseif(isset($_POST['postem1'])){
    $op="tbl_cashier";
	$process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:480px; ">
	<h4>KINGS </h4><div id="search6" >
		<input type="text" name="cashier" id="csm" placeholder="look for employee names">
	</div>
	<div id="em1">
	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Code</th><th>Names</th><th>Joining Date</th>
		<?php foreach($res as $values){?>
		<tr><td><?php echo $values['ccode'].$values['c_id'];?></td><td><a href="#" class="cdet" data-id="<?php echo $values['c_id'];?>" style="color: black;" ><?php echo $values['c_name'];?></a></td>
		<td><?php echo $values['c_date'];?></td>
		
		</tr>
		<?php }?></table>    <script> $(document).ready(function(){
		$('.cdet').click(function(){
				var cdetail=$(this).attr('data-id');
			//alert(idy);
				$.ajax({type:'post',url:'ajax.php',data:'cdetail='+cdetail,success:function(data){
					$('#right').html(data);
				}});
			});
			
			
			$('#csm').on('keyup',function(){
		var employee1=$(this).val();
		$.ajax({
			type:'post',
			url:'ajax.php',
			data:'employee1='+employee1,
			success:function(resp){
				$('#em1').html(resp);
			}
			
		});
			
		});
			});</script></div></div>
			
	<?php }
	elseif(isset($_POST['postem2'])){
    $op="supervisor";
	$process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:480px; ">
	<h4>KINGS </h4><div id="search6" >
		<input type="text" name="cashier" id="ssm" placeholder="look for employee names">
	</div>
	<div id="em2">
	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Code</th><th>Names</th><th>Joining Date</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><?php echo $values['scode'].$values['s_id'];?></td><td><a href="#" class="sdet" data-id="<?php echo $values['s_id'];?>" style="color: black;" ><?php echo $values['s_name'];?></a></td>
		<td><?php echo $values['s_date'];?></td>
		</tr>
		<?php }?></table>    <script> $(document).ready(function(){
		$('.sdet').click(function(){
				var sdetail=$(this).attr('data-id');
			//alert(idy);
				$.ajax({type:'post',url:'ajax.php',data:'sdetail='+sdetail,success:function(data){
					$('#right').html(data);
				}});
			});
			
			$('#ssm').on('keyup',function(){
		var employee2=$(this).val();
		$.ajax({
			type:'post',
			url:'ajax.php',
			data:'employee2='+employee2,
			success:function(resp){
				$('#em2').html(resp);
			}
			
		});
			
		});
			});</script></div></div>

<?php } ?>	<!--searches and stuff-->
   
	<?php if(isset($_POST['mitem'])){$search_term=$_POST['term'];$tbl='tbl_memo'; 
                $op="tbl_memo INNER JOIN tbl_cashier ON tbl_memo.c_id=tbl_cashier.c_id WHERE c_name LIKE '%".$_POST['mitem']."%'";
	$process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:480px; ">
               <table class="table table-condensed"><tr style="background-color:#FF851B"><th>Cashier</th><th>Location</th><th>reason</th><th>Debit</th><th>date</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><input type="hidden" class="names" value="<?php echo $values['c_id'];?>" /><a href="#" class="cn" data-id="<?php echo $values['c_id'];?>" style="color: black;" ><?php echo $values['c_name'];?></a></td>
		<td><?php echo $values['l_name'];?></td><td><?php echo $values['reason'];?></td>
		<td><?php echo number_format($values['amount']);?></td><td><?php echo $values['m_date'];?></td>
		
		</tr>
		<?php }?></table></div>

<?php } ?>	
   
   
   <?php if(isset($_POST['mitem1'])){ $tbl="tbl_memo"; 
     $op="tbl_memo INNER JOIN supervisor ON tbl_memo.s_id=supervisor.s_id  INNER JOIN tbl_location ON tbl_memo.l_id=tbl_location.l_id WHERE s_name LIKE '%".$_POST['mitem1']."%'";

	$process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:480px; ">
	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Supervisor</th><th>Location</th><th>reason</th><th>Debit</th><th>date</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><input type="hidden" class="names" value="<?php echo $values['s_id'];?>" /><a href="#" class="cn" data-id="<?php echo $values['s_id'];?>" style="color: black;" ><?php echo $values['s_name'];?></a></td>
		<td><?php echo $values['l_name'];?></td><td><?php echo $values['reason'];?></td>
		<td><?php echo number_format($values['amount']);?></td><td><?php echo $values['m_date'];?></td>
		</tr>
		<?php }?></table> </div>
<?php } ?>	

   <?php if(isset($_POST['pitem'])){ $tbl="payroll"; 
               $OPT="payroll INNER JOIN tbl_cashier ON payroll.c_id=tbl_cashier.c_id WHERE c_name LIKE '%".$_POST['pitem']."%'";
	   $data=new Process();$info=$data->getExtras($OPT);?><div id="scroll" style="height:480px; ">	 
	<table class="table table-bordered"><tr><th>ledger:&nbsp;&nbsp;<?php echo $vl;  ?></th></tr></table>
	<table class="table table-bordered" style="border-color:solid black"><tr><th>Particulars</th><th>salary</th><th>Penalities</th><th>shortages</th><th>advance</th><th>installments</th><th>Net Amount</th></tr>
	
	<?php    foreach($info as $values){ ?>
		<tr> 
		<td><?php echo $values['c_name'];?></td>
		<td><?php echo number_format($values['p_salary']);?></td>
	    <td><?php echo number_format($values['memo']);?></td>
	    <td><?php echo number_format($values['shortage']);?></td>
	    <td><?php echo number_format($values['advance']);?></td>
	    <td><?php echo number_format($values['loan']);?></td>
	    <td><?php echo number_format($values['balance']);?></td>
		</tr>
		<?php }?>
		</table> </div>
<?php } ?>	

   <?php if(isset($_POST['pitem1'])){ $tbl="payroll"; 
               	$OPT="payroll INNER JOIN supervisor ON payroll.s_id=supervisor.s_id WHERE s_name LIKE '%".$_POST['pitem1']."%'";
	   $data=new Process();$info=$data->getExtras($OPT);	?> <div id="scroll" style="height:480px; ">

	<table class="table table-bordered"><tr><th>ledger:&nbsp;&nbsp;<?php echo $vl;  ?></th></tr></table>
	<table class="table table-bordered" style="border-color:solid black"><tr><th>Particulars</th><th>salary</th><th>Penalities</th><th>shortages</th><th>advance</th><th>installments</th><th>Net Amount</th></tr>
	
	<?php    foreach($info as $values){ ?>
		<tr> 
		<td><?php echo $values['s_name'];?></td>
		<td><?php echo number_format($values['p_salary']);?></td>
	    <td><?php echo number_format($values['memo']);?></td>
	    <td><?php echo number_format($values['shortage']);?></td>
	    <td><?php echo number_format($values['advance']);?></td>
	    <td><?php echo number_format($values['loan']);?></td>
	    <td><?php echo number_format($values['balance']);?></td>
		</tr>
		<?php }?>
		</table> </div>
<?php } ?> 
   <?php if(isset($_POST['litem'])){ $tbl="tbl_loan"; 
               		$search_term=$_POST['term'];$tbl='tbl_memo'; 
    $op="tbl_loan INNER JOIN tbl_cashier ON tbl_loan.c_id=tbl_cashier.c_id WHERE c_name LIKE '%".$_POST['litem']."%'";
    $process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="height:480px; ">
	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Cashier</th><th>Reason</th><th>Amount</th><th>Amount in bits</th><th>Balance</th><th>Date</th><th>Status</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="lc" data-id="<?php echo $values['c_id'];?>" style="color: black;" ><?php echo $values['c_name'];?></a></td>
		<td><?php echo $values['reason'];?></td><td><?php echo number_format($values['l_amount']);?></td>
		<td><?php echo number_format($values['l_install']);?></td><td><?php echo number_format($values['l_bal']);?></td><td><?php echo $values['l_date'];?></td>
		</td><td> <input type="hidden" class="li" value="<?php echo $values['l_install']?>" />
			<button class="active btn-default" data-id="<?php echo $values['c_id'] ?>"><?php $v=$values['status'];if($v=='Cleared')
				{echo'<span style="color:red">'.$v.'</span>';}elseif($v=='Active')
				{echo'<span style="color:green">'.$v.'</span>';} elseif($v=='Updated')
				{echo'<span style="color:blue">'.$v.'</span>';}  ?>  </button></td>
		</tr>
		<?php }?></table></div>
<?php } ?>	
<?php if(isset($_POST['litem1'])){ $tbl="tbl_loan"; 
    $search_term=$_POST['term'];$tbl='tbl_memo'; 
    $op="tbl_loan INNER JOIN supervisor ON tbl_loan.s_id=supervisor.s_id WHERE s_name LIKE '%".$_POST['litem1']."%'";
	$process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style=";height:480px; ">

	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Supervisor</th><th>Reason</th><th>Amount</th><th>Amount in bits</th><th>Balance</th><th>Date</th><th>Status</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="ls" data-id="<?php echo $values['s_id'];?>" style="color: black;" ><?php echo $values['s_name'];?></a></td>
		<td><?php echo $values['reason'];?></td><td><?php echo number_format($values['l_amount']);?></td>
		<td><?php echo number_format($values['l_install']);?></td><td><?php echo number_format($values['l_bal']);?></td><td><?php echo $values['l_date'];?></td>
		
		<td> <input type="hidden" class="li" value="<?php echo $values['l_install']?>" />
			<button class="active btn-default" data-id="<?php echo $values['s_id'] ?>"><?php $v=$values['status'];if($v=='Cleared')
				{echo'<span style="color:red">'.$v.'</span>';}elseif($v=='Active')
				{echo'<span style="color:green">'.$v.'</span>';} elseif($v=='Updated')
				{echo'<span style="color:blue">'.$v.'</span>';}  ?></button></td>
		</tr>
		<?php }?></table> </div>
<?php } ?>	

   
   <?php if(isset($_POST['aitem'])){ $tbl="advance"; 
               	$search_term=$_POST['term'];$tbl='tbl_memo'; 
    $op="advance INNER JOIN  tbl_cashier ON advance.c_id=tbl_cashier.c_id WHERE c_name LIKE '%".$_POST['aitem']."%'";
	$process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style=";height:480px; ">
	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Cashier</th><th>Reason</th><th>Amount</th><th>Amount in bits</th><th>Balance</th><th>Date</th><th>Status</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="ac1" data-id="<?php echo $values['c_id'];?>" style="color: black;" ><?php echo $values['c_name'];?></a></td>
		<td><?php echo $values['reason'];?></td><td><?php echo number_format($values['a_amount']);?></td>
		<td><?php echo number_format($values['a_install']);?></td><td><?php echo number_format($values['a_bal']);?></td><td><?php echo $values['a_date'];?></td>
		
		<td> <input type="hidden" class="ai" value="<?php echo $values['a_install']?>" />
			<button class="active btn-default " data-id="<?php echo $values['c_id'] ?>">
				<?php $v=$values['status'];if($v=='Cleared')
				{echo'<span style="color:red">'.$v.'</span>';}elseif($v=='Active')
				{echo'<span style="color:green">'.$v.'</span>';} elseif($v=='Updated')
				{echo'<span style="color:blue">'.$v.'</span>';}  ?>
				</button></td>
		
		</tr>
		<?php }?></table></div>
<?php } ?>	
                <?php if(isset($_POST['aitem1'])){ $tbl="advance"; 
             $search_term=$_POST['term'];$tbl='tbl_memo';
    $op="advance INNER JOIN supervisor ON advance.s_id=supervisor.s_id WHERE s_name LIKE '%".$_POST['aitem1']."%'";
  $process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style=";height:480px; ">
	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Supervisor</th><th>Reason</th><th>Amount</th><th>Amount in bits</th><th>Balance</th><th>Date</th><th>Status</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="as2" data-id="<?php echo $values['s_id'];?>" style="color: black;" ><?php echo $values['s_name'];?></a></td>
		<td><?php echo $values['reason'];?></td><td><?php echo number_format($values['a_amount']);?></td>
		<td><?php echo number_format($values['a_install']);?></td><td><?php echo number_format($values['a_bal']);?></td><td><?php echo $values['a_date'];?></td>
		
		<td> <input type="hidden" class="ai" value="<?php echo $values['a_install']?>" />
			<button class="active btn-default" data-id="<?php echo $values['s_id'] ?>"><?php $v=$values['status'];if($v=='Cleared')
				{echo'<span style="color:red">'.$v.'</span>';}elseif($v=='Active')
				{echo'<span style="color:green">'.$v.'</span>';} elseif($v=='Updated')
				{echo'<span style="color:blue">'.$v.'</span>';}  ?></button></td>
		
		</tr>
		<?php }?></table></div>
<?php } ?>	

   <?php if(isset($_POST['sitem'])){ $tbl="shortage"; 
               	 $op="shortages INNER JOIN tbl_cashier ON shortages.c_id=tbl_cashier.c_id INNER JOIN tbl_location ON tbl_cashier.l_id=tbl_location.l_id WHERE c_name LIKE '%".$_POST['sitem']."%'";
	$process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="height:480px; ">
  <table class="table table-condensed"><tr style="background-color:#FF851B"><th>Cashier</th><th>Location</th><th>Reason</th><th>Amount</th><th>Date</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr>
		<td><a href="#" class="sh2" data-id="<?php echo $values['c_id'];?>" style="color: black;" ><?php echo $values['c_name'];?></a></td>
		<td><?php echo $values['l_name'];?><td><?php echo $values['reason'];?></td><td><?php echo number_format($values['s_amount']);?></td>
		<td><?php echo $values['s_date'];?></td>
		</tr>
		<?php }?></table></div>
 <?php } ?>	
 
   <?php if(isset($_POST['sitem1'])){ $tbl="shortage"; 
      $op="shortages INNER JOIN supervisor ON shortages.s_id=supervisor.s_id INNER JOIN tbl_location ON shortages.loc_id=tbl_location.l_id WHERE s_name LIKE '%".$_POST['sitem1']."%'";
    $process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="height:480px; ">
	<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Supervisor</th><th>Location</th><th>Reason</th><th>Amount</th><th>Date</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="sh1" data-id="<?php echo $values['s_id'];?>" style="color: black;" ><?php echo $values['s_name'];?></a></td>
		<td><?php echo $values['l_name'];?><td><?php echo $values['reason'];?></td><td><?php echo number_format($values['s_amount']);?></td>
		<td><?php echo $values['s_date'];?></td>
		</tr>
		<?php }?></table> </div>
   <?php } ?>	
   
			

				

		

		
	
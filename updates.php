<?php include('includes/header.php'); include('classes/class.process.php');
include('classes/class.session.php'); session_start();
 $id=$_SESSION['user_id'];$user_name=$_SESSION['user'];
$new_session=new Session($id,$user_name);$new_session->get_session();?>

<div id="container">
<div class="container">
    <div class="row" style="width: 300px; float: left; position: absolute">
        <div class="col-sm-9 col-md-9">
        	<div style="text-align: center"><span><strong>Menus</strong></span></div>
            <div class="panel-group" id="accordion">
               
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"   data-parent="#accordion"  href="#collapseOne"><span class="glyphicon glyphicon-user">
                            </span>&nbsp;Employees</a>
                        </h4>
                    </div>       
               <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        </span><a href="#" id="emp1" data-id="18">Cashiers</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <a href="#"id="emp2" data-id="22">Supervisors</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <a href="#"id="emp3" data-id="21">Others</a>
                                    </td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                 </div>
          
           
            
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseM"><span class="glyphicon glyphicon-send">
                            </span>&nbsp;Memos</a>
                        </h4>
                    </div>
                   
                    <div id="collapseM" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        </span><a href="#" id="list" data-id="1">Cashiers</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <a href="#"id="list2" data-id="2">Supervisors</a>
                                    </td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                    
                    
                </div>
               
                
                 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseS"><span class="glyphicon glyphicon-send">
                            </span>&nbsp;Shortages</a>
                        </h4>
                    </div>
                   
                    <div id="collapseS" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        </span><a href="#" id="s_c" data-id="3">Cashiers</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <a href="#"id="s_s" data-id="4">Supervisors</a>
                                    </td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                    </div>
          
                 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseA"><span class="glyphicon glyphicon-send">
                            </span>&nbsp;Advances</a>
                        </h4>
                    </div>
                   
                    <div id="collapseA" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        </span><a href="#" id="a_c" data-id="5">Cashiers</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <a href="#"id="a_s" data-id="6">Supervisors</a>
                                    </td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                    
                    
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseL"><span class="glyphicon glyphicon-send">
                            </span>&nbsp;Loans</a>
                        </h4>
                </div>
                   
                    <div id="collapseL" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        </span><a href="#" id="lo_c" data-id="7">Cashiers</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <a href="#"id="lo_s" data-id="8">Supervisors</a>
                                    </td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                    
                    
                </div>
               
                
               <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion" href="#" id="super" data-id="1"><span class="glyphicon glyphicon-user">
                            </span>&nbsp;Add Supervisor</a>
                        </h4>
                    </div>
                    
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion" href="#" id="loc" data-id="1"><span class="glyphicon glyphicon-send">
                            </span>&nbsp;Add Location</a>
                        </h4>
                    </div>
                    
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion" href="#" id="cash" data-id="1"><span class="glyphicon glyphicon-user">
                            </span>&nbsp;Add Cashier</a>
                        </h4>
                    </div>
                    
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion" href="#" id="user" data-id="1"><span class="glyphicon glyphicon-user">
                            </span>&nbsp;Register User</a>
                        </h4>
                    </div>
                    
                </div>
                
                
                 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-parent="#accordion" href="updates.php" id="cash" data-id="1"><span class="glyphicon glyphicon-cog">
                            </span>&nbsp;Manage</a>
                        </h4>
                    </div>
                    
                </div>
                <br />
	 		<a href="home.php" class="btn btn-default"><span  class="glyphicon glyphicon-refresh" style="font-size: 15px;"></span></a>
	
		 <br />
               
                <br />
               <div id="out" style="float:"><a href="logout.php" style=""><span class="glyphicon glyphicon-log-out"></span> Log out!</a></div>  
            </div>
        </div>
       
    </div>
</div>

<div id="right" style=" float: right;">
<div id="content"> 	
		 <div class="dropdown" style="margin-left: -20px;">	
		<ul class="nav nav-pills" style="background-color:">
			<li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 18px;color:black;" ><input type="button" id="meme" value="Salary"/><span class="caret"></span></a>
            <ul class="dropdown-menu">
            	<li><a id="ms_c"  href="#">Cashier</a></li>
            	<li><a id="ms_s"  href="#">Supervisor</a></li>	
            </ul>
			</li> 
			
		<li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 18px;color:black;" ><input type="button" id="meme" value="Memos"/><span class="caret"></span></a>
            <ul class="dropdown-menu">
            	<li><a id="mm_c"  href="#">Cashier</a></li>
            	<li><a id="mm_s"  href="#">Supervisor</a></li>	
            </ul>
			</li> 
			
			<li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"   id="advance"    style="font-size: 18px;color:black;" > <input type="button" id="meme" value="Shortages"/></a>
			
	        <ul class="dropdown-menu">
            	<li><a id="msh_c"  href="#">Cashier</a></li>
            	<li><a id="msh_s"  href="#">Supervisor</a></li>	
            </ul>
            </li> 
			<li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"   id="loan"      style="font-size: 18px;color:black;" > <input type="button" id="meme" value="Loans"/></a>
            <ul class="dropdown-menu">
            	<li><a id="ml_c"  href="#">Cashier</a></li>
            	<li><a id="ml_s"  href="#">Supervisor</a></li>	
            </ul>
			</li> 
		
		    
			<li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"   id="payroll"      style="font-size: 18px;color:black;" > <input type="button" id="meme" value="Advance"/></a>
             <ul class="dropdown-menu">
            	<li><a id="ma_c" data-id="1"  href="#">Cashier</a></li>
            	<li><a id="ma_s" data-id="2"  href="#">Supervisor</a></li>	
            </ul>
			</li> 
		 
		</ul>
	
	</div>	 
  
	<div id="salary1"  style="display: none">
	
		<div><?php
			$tbl='tbl_cashier'; $options='ORDER BY c_id DESC';$all=new Process();$res=$all->getAllData($tbl,$options);?>
	 	<h2><?php  echo "<h4>Manage cashier salary</h4>";?></h2>
	 	<div id="scroll" style="overflow:auto;height:450px; ">
	 	<table class="table table-hover"><tr style="background-color:#FF851B"><th>Name</th><th>Location</th><th>Supervisor</th><th>Salary</th><th>Edit</th><th>Delete</th></tr>
	     <tr><div id="edit_formx"></div></tr>
	<?php   
	 foreach($res as $values){?>
		<tr><td><?php echo $values['c_name'];?></td><td><?php echo $values['l_name']; ?></td>
			<td><?php echo $values['s_name']; ?></td><td><?php echo $values['salary']; ?></td>
			<td><a href="#" class="edit_r" data-id="<?php echo $values['c_id'] ?>">   <button> <span class="glyphicon glyphicon-pencil" id="edit_row"></span></button></a></td>
			<td><a href="file.erase.php?delete_row_s1=<?php echo $values['c_id'];?>" class="delete_row" data-id="<?php echo $values['c_id'] ?>"><button><span class="glyphicon glyphicon-trash" id="delete_row"></span></button></a></td>
		</tr>
	</tr>
		<?php }?></table>
		</div>
	</div>
	
	</div>
	
	<div id="salary2" style="display: none">
	
		<div><?php
			$tbl1='supervisor'; $options1='ORDER BY s_id DESC';
			$all1=new Process();$res1=$all1->getAllData($tbl1,$options1);?>
	 	<h2><?php echo "<h4>Manage supervisor salary</h4>";?></h2>
	 	<div id="scroll" style="overflow:auto;height:450px; ">
	 	<table class="table table-hover"><tr style="background-color:#FF851B"><th>Supervisor</th><th>Salary</th><th>Edit</th><th>Delete</th></tr>
	     <tr><div id="edit_formx"></div></tr>
	<?php   
	 foreach($res1 as $values){?>
		<tr><td><?php echo $values['s_name'];?></td><td><?php echo $values['s_salary']; ?></td>
			<td><a href="#" class="edit_r2" data-id="<?php echo $values['s_id'] ?>">   <button> <span class="glyphicon glyphicon-pencil" id="edit_row"></span></button></a></td>
			<td><a href="file.erase.php?delete_row_s2=<?php echo $values['s_id'];?>" class="delete_row" data-id="<?php echo $values['s_id'] ?>"><button><span class="glyphicon glyphicon-trash" id="delete_row"></span></button></a></td>
		</tr>
	</tr>
		<?php }?></table>
		</div>
	</div>
	</div>

	<div id="memo2" style="display: none">
		
		<div><?php
			 $op="tbl_memo INNER JOIN supervisor ON tbl_memo.s_id=supervisor.s_id  INNER JOIN tbl_location ON tbl_memo.l_id=tbl_location.l_id";
$process=new Process(); $res=$process->getExtras($op);?>
	 	
	 	<h2><?php echo "<h4>Manage supervisor penalties</h4>";?></h2>
	 	<div id="scroll" style="overflow:auto;height:450px; ">
	 	<table class="table table-hover"><tr style="background-color:#FF851B"><th>Supervisor</th><th>Location</th><th>Reason</th><th>Debit</th><th>Date</th><th>Delete</th></tr>
	     <tr><div id="edit_formx"></div></tr>
	<?php   
	 foreach($res as $values){?>
		<tr><td><input type="hidden" class="names" value="<?php echo $values['s_id'];?>" /><a href="#" class="cn" data-id="<?php echo $values['s_id'];?>" style="color: black;" ><?php echo $values['s_name'];?></a></td>
		<td><?php echo $values['l_name'];?></td><td><?php echo $values['reason'];?></td>
		<td><?php echo $values['amount'];?></td><td><?php echo $values['m_date'];?></td>
		
			<td><a href="file.erase.php?delete_row_m2=<?php echo $values['m_id'];?>&amp;sup_id_m=<?php echo $values['s_id']; ?>  "
				class="delete_row_m2" data-id="<?php echo $values['s_id'] ?>"><button><span class="glyphicon glyphicon-trash" id="delete_row"></span></button></a></td>
		</tr>
	</tr>
		<?php }?></table>
		</div>
	</div>
	</div>
	
<div id="memo1" style="display: none">
		
		<div><?php
			 $op="tbl_memo INNER JOIN tbl_cashier ON tbl_memo.c_id=tbl_cashier.c_id  INNER JOIN tbl_location ON tbl_memo.l_id=tbl_location.l_id";
$process=new Process(); $res=$process->getExtras($op);?>
	 	
	 	<h2><?php  echo "<h4>Manage Cashier penalties!</h4>";?></h2>
	 	<div id="scroll" style="overflow:auto;height:450px; ">
	 	<table class="table table-hover"><tr style="background-color:#FF851B"><th>Cashier</th><th>Location</th><th>Reason</th><th>Debit</th><th>Date</th><th>Delete</th></tr>
	     <tr><div id="edit_formx"></div></tr>
	<?php   
	 foreach($res as $values){?>
		<tr><td><input type="hidden" class="names" value="<?php echo $values['c_id'];?>" /><a href="#" class="cn" data-id="<?php echo $values['c_id'];?>" style="color: black;" ><?php echo $values['c_name'];?></a></td>
		<td><?php echo $values['l_name'];?></td><td><?php echo $values['reason'];?></td>
		<td><?php echo $values['amount'];?></td><td><?php echo $values['m_date'];?></td>
			<td><a href="file.erase.php?delete_row_m1=<?php echo $values['m_id'] ?>&amp;cash_id_m=<?php echo $values['c_id']; ?> " 
				class="delete_row_m1" data-id="<?php echo $values['c_id'] ?>"><button><span class="glyphicon glyphicon-trash" id="delete_row"></span></button></a></td>
		</tr>
	</tr>
		<?php }?></table>
		</div>
	</div>

	</div>
	
	<div id="shortage1"  style="display: none">
		<div>
			<?php 
	  $op="shortages INNER JOIN tbl_cashier ON shortages.c_id=tbl_cashier.c_id";
	  $process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:450px; ">
	 <h4>Manage Cashier shortages</h4>
	 <table class="table table-condensed"><tr style="background-color:#FF851B"><th>Cashier</th><th>Location</th><th>Reason</th><th>Amount</th><th>Date</th><th>Delete</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="ls" data-id="<?php echo $values['c_id'];?>" style="color: black;" ><?php echo $values['c_name'];?></a></td>
		<td><?php echo $values['l_name'];?></td><td><?php echo $values['reason'];?></td>
		<td><?php echo $values['s_amount'];?></td><td><?php echo $values['s_date'];?></td>	
		<td><a href="file.erase.php?delete_row_sh1=<?php echo $values['sh_id'] ?>&cash_id_sh=<?php echo $values['c_id']; ?>  "
		 class="delete_row_sh1" data-id="<?php echo $values['c_id'] ?>"><button><span class="glyphicon glyphicon-trash" id="delete_row"></span></button></a></td>
		</tr>
	
		<?php }?></table> 
	</div>
		</div>
		
		
		</div>
	
		<div id="shortage2"  style="display: none">
		
		<div>
			<?php 
	  $op="shortages INNER JOIN supervisor ON shortages.s_id=supervisor.s_id";
	  $process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:450px; ">
	 <h4>Manage supervisor shortages</h4>
	 <table class="table table-condensed"><tr style="background-color:#FF851B"><th>Supervisor</th><th>Location</th><th>Reason</th><th>Amount</th><th>Date</th><th>Delete</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="ls" data-id="<?php echo $values['s_id'];?>" style="color: black;" ><?php echo $values['s_name'];?></a></td>
		<td><?php echo $values['l_name'];?></td><td><?php echo $values['reason'];?></td>
		<td><?php echo $values['s_amount'];?></td><td><?php echo $values['s_date'];?></td>	
		<td><a href="file.erase.php?delete_row_sh2=<?php echo $values['sh_id'] ?>&sup_id_sh=<?php echo $values['s_id']; ?> " class="delete_row_sh2" data-id="<?php echo $values['s_id'] ?>"><button><span class="glyphicon glyphicon-trash" id="delete_row"></span></button></a></td>
		</tr>
	
		<?php }?></table>  
	  </div>
		</div>
		
	</div>
	<div id="loaa1"  style="display: none">
		<h4> Manage cashier loan</h4><br />
		<div>
			<?php 
	  $op="tbl_loan INNER JOIN tbl_cashier ON tbl_loan.c_id=tbl_cashier.c_id";
	  $process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:450px; ">
	 
	 <table class="table table-condensed"><tr style="background-color:#FF851B"><th>Cashier</th><th>Reason</th><th>Amount</th><th>Installment</th><th>Date</th><th>Delete</th></tr>
	   <?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="ls" data-id="<?php echo $values['c_id'];?>" style="color: black;" ><?php echo $values['c_name'];?></a></td>
		<td><?php echo $values['reason'];?></td><td><?php echo $values['l_amount'];?></td>
		<td><?php echo $values['l_install'];?></td><td><?php echo $values['l_date'];?></td>	
		<td><a href="file.erase.php?delete_row_l1=<?php echo $values['ln_id'] ?>&cash_id_l=<?php echo $values['c_id']; ?>  " class="delete_row_l1" data-id="<?php echo $values['c_id'] ?>"><button><span class="glyphicon glyphicon-trash" id="delete_row"></span></button></a></td>
		</tr>

		<?php }?></table> 
	</div>
		</div>
		
		
	</div>
	<div id="loaa2"  style="display: none">
		<h4>  Manage supervisor loan</h4><br />
		<div>
			<?php 
	  $op1="tbl_loan INNER JOIN supervisor ON tbl_loan.s_id=supervisor.s_id";
	  $process=new Process(); $res=$process->getExtras($op1);?><div id="scroll" style="overflow:auto;height:450px; ">
	
	 <table class="table table-condensed"><tr style="background-color:#FF851B"><th>Supervisor</th><th>Reason</th><th>Amount</th><th>Install</th><th>Date</th><th>Delete</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="ls" data-id="<?php echo $values['s_id'];?>" style="color: black;" ><?php echo $values['s_name'];?></a></td>
		<td><?php echo $values['reason'];?></td><td><?php echo $values['l_amount'];?></td>
		<td><?php echo $values['l_install'];?></td><td><?php echo $values['l_date'];?></td>	
		<td><a href="file.erase.php?delete_row_l2=<?php echo $values['ln_id'] ?>&sup_id_l=<?php echo $values['s_id']; ?>  " class="delete_row_l2" data-id="<?php echo $values['s_id'] ?>"><button><span class="glyphicon glyphicon-trash" id="delete_row"></span></button></a></td>
		</tr>
	<?php }?></table> 
</div>
		</div>
		
	</div>
	
	<div id="advaa1" style="display:none;"   >
	<h4> Manage cashier advance</h4><br />
		<div>
			<?php 
	  $op="advance INNER JOIN tbl_cashier ON advance.c_id=tbl_cashier.c_id";
	  $process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:450px; ">
	 <table class="table table-condensed"><tr style="background-color:#FF851B"><th>Cashier</th><th>Reason</th><th>Amount</th><th>Installment</th><th>Date</th><th>Delete</th></tr>
	<?php    
	
	               foreach($res as $values){ ?>
		<tr><td><a href="#" class="ls" data-id="<?php echo $values['c_id'];?>" style="color: black;" ><?php echo $values['c_name'];?></a></td>
		<td><?php echo $values['reason'];?></td><td><?php echo $values['a_amount'];?></td>
		<td><?php echo $values['a_install'];?></td><td><?php echo $values['a_date'];?></td>	
		<td><a href="file.erase.php?delete_row_a1=<?php echo $values['a_id'] ?>&cash_id_a=<?php echo $values['c_id']; ?>  "  class="delete_row_a1" data-id="<?php echo $values['c_id'] ?>"><button><span class="glyphicon glyphicon-trash" id="delete_row"></span></button></a></td>
		</tr>
		<?php }?></table> 
	</div></div>
		
	</div>
	
	<div id="advaa2" style="display:none;">
		<h4>  Manage supervisor advance</h4><br />
		<div>
			<?php 
	   $op="advance INNER JOIN supervisor ON advance.s_id=supervisor.s_id";
	  $process=new Process(); $res=$process->getExtras($op);?><div id="scroll" style="overflow:auto;height:450px; ">

<table class="table table-condensed"><tr style="background-color:#FF851B"><th>Supervisor</th><th>Reason</th><th>Amount</th><th>Installment</th><th>Date</th><th>Delete</th></tr>
	<?php    foreach($res as $values){ ?>
		<tr><td><a href="#" class="ls" data-id="<?php echo $values['s_id'];?>" style="color: black;" ><?php echo $values['s_name'];?></a></td>
		<td><?php echo $values['reason'];?></td><td><?php echo $values['a_amount'];?></td>
		<td><?php echo $values['a_install'];?></td><td><?php echo $values['a_date'];?></td>	
		<td><a href="file.erase.php?delete_row_a2=<?php echo $values['a_id'] ?>&sup_id_a=<?php echo $values['s_id']; ?>  "  class="delete_row_a2" data-id="<?php echo $values['s_id'] ?>"><button><span class="glyphicon glyphicon-trash" id="delete_row"></span></button></a></td>
		</tr>
		<?php }?></table> 
	</div>
		</div>
		
	</div>

	<div id="cashiers" style="display:none;">
		<h4>Add Cashiers</h4><br /><br />
		<div>
			<form method="post" action="classes/post.php" >
			<label>Cashier_Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="cname"  class="text" /> <br /><br />
             <label>Location_Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><select name="lname" ><?php $tbl="tbl_location"; $get=new Process; $d=$get->getAllData($tbl); 
             foreach( $d as $v){
             	echo"<option value=".$v['l_id'].">".$v['l_name']."</option>";
             }	?></select> <br /><br />
			 <label>Supervisor_Name&nbsp;&nbsp;:</label><select name="sname" ><?php $tbl1="supervisor"; $get1=new Process; $d1=$get1->getAllData($tbl1); 
             foreach( $d1 as $v1){
             	echo"<option value=".$v1['s_id'].">".$v1['s_name']."</option>";
             }	?></select> <br /><br />
			 <label>
			 	Salary&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="samount"onkeypress="return Numb(event); " /> <br /><br />
			 <label>Allowances&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="allow" onkeypress="return Numb(event); " /> <br /><br />
			
			<button type="submit" name="fcash">Submit</button>
			</form>
		</div>
	</div>
	
	<div id="supervisors" style="display:none;">
		<h4> Add Supervisors</h4><br /><br />
		<div>
			<form method="post" action="classes/post.php" >
		    <label>Supervisor_Name&nbsp;&nbsp;:</label><input type="text" name="sname"  class="text" /> <br /><br />
			<label>S_Salary&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="samount"onkeypress="return Numb(event); "  /> <br /><br />
			<label>Allowances&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="allow"onkeypress="return Numb(event); "  /> <br /><br />
			<label>Incentives&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="incent" onkeypress="return Numb(event); " /> <br /><br />
			
			
			<button type="submit" name="fsup">Submit</button>
			</form>
		</div>
	</div>
	<div id="locations" style="display:none;">
		<h4> Add Locations</h4><br /><br />
		<div >
			<form method="post" action="classes/post.php" >
			<label>Location_Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="lname" class="text" /> <br /><br />
			<label>Supervisor_Name&nbsp;&nbsp;:</label><select name="sname" > <?php      $tbl2="supervisor"; $get2=new Process; $d2=$get2->getAllData($tbl2); 
             foreach( $d2 as $v2){
             	echo"<option value=".$v2['s_id'].">".$v2['s_name']."</option>";
             }	?>
			 </select> <br /><br />
			
			<button type="submit" name="floc">Submit</button>
			</form>
		</div>
	</div>
	
	
	<div id="reg" style="display:none;">
		<h4> Register User</h4><br /><br />
		<div>
			<form method="post" action="classes/post.php" >
		    <label>UserName&nbsp;&nbsp;:</label><input type="text" name="username"  class="text" /> <br /><br />
			<label>PassWord&nbsp;&nbsp;:</label><input type="password" name="password"  /> <br /><br />
			<button type="submit" name="register">Submit</button>
			</form>
		</div></div>
	
</div>	
	</div>
</div>
<?php include('includes/footer.php');?>

<script>
	$(document).ready(function(){
		
		$('.edit_r').click(function(){   
		var update_id_c=$(this).attr('data-id');
		
		 $.ajax({
		type:'post',
		url:'ajax.php',
		data:'update_id_c='+update_id_c,
		success:function(resp){
			$('#right').html(resp);
		}
	});});
		
		$('.edit_r2').click(function(){   
		var update_id_s=$(this).attr('data-id');
		
		 $.ajax({
		type:'post',
		url:'ajax.php',
		data:'update_id_s='+update_id_s,
		success:function(resp){
			$('#right').html(resp);
		}
	});});
		
		
	$('#p_c').click(function() {
		var cash=$(this).attr('data-id');
		$.ajax({
			type:'post',
			url:'ajax.php',
			data:'cash='+cash,
			success:function(re){
				          $('#right').html(re)
			}
		});		
	});
	
	$('#p_s').click(function(){
		var sup=$(this).attr('data-id');
		$.ajax({
			type:'post',
			url:'ajax.php',
			data:'sup='+sup,
			success:function(re){
				           $('#right').html(re)
			}
		});		
	});
			
	$(".cd").change(function() {
		var data=$(this).val();
		//alert(data);
		$.ajax({
			type:'post',url:'ajax.php',data:'data='+data,success:function(resp){
				$('#cl').val(resp);
			}
		});
		    });
   
    $(".sn").on('change',function(){
		$(this).after('<div id="loader"><img src="img/loading.gif" alt="loading subcategory" /></div>');
		$.get('drops.php?sub_cat=' + $(this).val(), function(data) {
			$("#ln").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });
    
   // $('#ln').change(function(){
   // var hh=$(this).val(); alert(hh);
    //});
    
		$('.datex').datepicker({
		   format: "yyyy/mm/dd",
	});
		
		$('#list').click(function(){
			var post=$(this).attr('data-id');
			$.ajax({
				type:'post',
				url:'ajax.php',
				data:'post='+post,
				success:function(data){
					$('#right').html(data);
				}
			});
		});
		
			$('#list2').click(function(){
			var postx=$(this).attr('data-id');
			$.ajax({
				type:'post',
				url:'ajax.php',
				data:'postx='+postx,
				success:function(data){
					$('#right').html(data);
				}
			});
		});
		
		$('#lo_c').click(function(){
			var postlc=$(this).attr('data-id');
			$.ajax({
				type:'post',
				url:'ajax.php',
				data:'postlc='+postlc,
				success:function(data){
					$('#right').html(data);
				}
			});
		});
		$('#lo_s').click(function(){
			var postls=$(this).attr('data-id');
			$.ajax({
				type:'post',
				url:'ajax.php',
				data:'postls='+postls,
				success:function(data){
					$('#right').html(data);
				}
			});
		});
		$('#s_s').click(function(){
			var postss=$(this).attr('data-id');
			$.ajax({
				type:'post',
				url:'ajax.php',
				data:'postss='+postss,
				success:function(data){
					$('#right').html(data);
				}
			});
		});
		$('#s_c').click(function(){
			var postsc=$(this).attr('data-id');
			$.ajax({
				type:'post',
				url:'ajax.php',
				data:'postsc='+postsc,
				success:function(data){
					$('#right').html(data);
				}
			});
		});
		$('#a_c').click(function(){
			var postac=$(this).attr('data-id');
			$.ajax({
				type:'post',
				url:'ajax.php',
				data:'postac='+postac,
				success:function(data){
					$('#right').html(data);
				}
			});
		});
		$('#a_s').click(function(){
			var postas=$(this).attr('data-id');
			$.ajax({
				type:'post',
				url:'ajax.php',
				data:'postas='+postas,
				success:function(data){
					$('#right').html(data);
				}
			});
		});
		
	
		$('#cash').click(function(){
			//var post=$(this).attr('data-id');
			$('#memo1').hide();	
			$('#locations').hide();	
			$('#memo2').hide();
			$('#supervisors').hide();	
				$('#shortage1').hide();	
				$('#shortage2').hide();
				
				$('#cashiers').show();	
				$('#advaa2').hide();		
			     $('#advaa1').hide();
			     $('#loaa1').hide();
		         $('#loaa2').hide();	
		         $('#salary1').hide();
		         $('#salary2').hide();
		          $('#reg').hide();
			
		});
		
		
		$('#loc').click(function(){
			///var post=$(this).attr('data-id');
			$('#locations').show();
		$('#memo1').hide();	
			
			$('#memo2').hide();
			$('#supervisors').hide();	
				$('#shortage1').hide();	
				$('#shortage2').hide();
				//$('#locations').hide();	
				$('#cashiers').hide();	
				$('#advaa2').hide();		
			     $('#advaa1').hide();
			     $('#loaa1').hide();
		         $('#loaa2').hide();	
		         $('#salary1').hide();
		         $('#salary2').hide();	
		          $('#reg').hide();
			
		});
		
		
		$('#user').click(function(){
			//var post=$(this).attr('data-id');
			$('#reg').show();
			
		    $('#locations').hide();
		    $('#memo1').hide();	
			
			   $('#memo2').hide();
			   $('#supervisors').hide();	
				$('#shortage1').hide();	
				$('#shortage2').hide();
				//$('#locations').hide();	
				$('#cashiers').hide();	
				$('#advaa2').hide();		
			     $('#advaa1').hide();
			     $('#loaa1').hide();
		         $('#loaa2').hide();	
		         $('#salary1').hide();
		         $('#salary2').hide();	
		});
		
		
		
		
		
		
		
		$('#super').click(function(){
			///var post=$(this).attr('data-id');
			$('#supervisors').show();	
			$('#memo1').hide();	
			
			$('#memo2').hide();
				$('#shortage1').hide();	
				$('#shortage2').hide();
				$('#locations').hide();	
				$('#cashiers').hide();	
				$('#advaa2').hide();		
			     $('#advaa1').hide();
			     $('#loaa1').hide();
		         $('#loaa2').hide();	
		         $('#salary1').hide();
		         $('#salary2').hide();
		         $('#reg').hide();
		});
		
		
		$('#c').click(function(){
			$('#memo1').show();	
			$('#memo2').hide();
				$('#locations').hide();
				$('#locations').hide();
				$('#supervisors').hide();	
				$('#cashiers').hide();
				$('#adv').hide();$('#lo').hide();
				$('#adv2').hide();		
			     $('#lo2').hide();
			     $('#sh').hide();
		$('#sh2').hide();	
		
		}	
		);
		$('#s').click(function(){
			$('#memo2').show();	
			$('#memo1').hide();	
			$('#locations').hide();
			$('#adv').hide();$('#adv2').hide();		
			$('#lo').hide();$('#lo2').hide();
			$('#supervisors').hide();	
				$('#locations').hide();	$('#cashiers').hide();	
				$('#sh').hide; //$('#reg').hide();
		$('#sh2').hide();	
		}	
		);
	
	$('#l_c').click(function(){
		$('#lo').show();	
		$('#lo2').hide();
			$('#memo2').hide();	
			$('#adv').hide();	
			$('#memo1').hide();		
			$('#adv2').hide();	
			$('#locations').hide();	
			$('#sh').hide();	
			$('#supervisors').hide();		
			$('#sh2').hide();	
				$('#locations').hide();	
				$('#cashiers').hide();		
		}	
		);
		
		$('#l_s').click(function(){
		$('#lo2').show();$('#lo').hide();	
			$('#memo2').hide();	$('#adv').hide();	
			$('#memo1').hide();	$('#adv2').hide();	
			$('#locations').hide();$('#sh').hide();	
			$('#supervisors').hide();$('#sh2').hide();		
		        $('#locations').hide();	$('#cashiers').hide();		
		}	
		);
	
	$('#ad_c').click(function(){
		$('#adv').show();	
		$('#lo').hide();
		  $('#adv2').hide();	
		  $('#lo2').hide();	
			$('#memo1').hide();	$('#sh').hide();	
			$('#locations').hide();$('#sh2').hide();
			$('#memo2').hide();		
			$('#supervisors').hide();	
				$('#locations').hide();	$('#cashiers').hide();		
		}	
		);
		
		
		$('#ad_s').click(function(){
		$('#adv2').show();	
		$('#adv').hide();	
		$('#lo').hide();$('#lo2').hide();	
			$('#memo2').hide();	
			$('#sh').hide();	
			$('#memo1').hide();	
			$('#sh2').hide();	
			$('#locations').hide();
			$('#supervisors').hide();	
				$('#locations').hide();	$('#cashiers').hide();		
		}	
		);
		
	$('#sh_c').click(function(){
		$('#sh').show();
		$('#sh2').hide();
		$('#adv').hide();	
		$('#adv2').hide();
		$('#lo').hide();	
		$('#lo2').hide();	
			$('#memo2').hide();	
			$('#memo1').hide();	
			$('#locations').hide();
			$('#supervisors').hide();	
				$('#locations').hide();	
				$('#cashiers').hide();
				
						
		}	
		);
		
	$('#sh_s').click(function(){
		$('#sh2').show();
		$('#sh').hide();
		$('#adv').hide();	
		$('#adv2').hide();	
		$('#lo').hide();	
		$('#lo2').hide();	
			$('#memo2').hide();	
			$('#memo1').hide();	
			$('#locations').hide();
			$('#supervisors').hide();	
				$('#locations').hide();	
				$('#cashiers').hide();	
			
		}	
		);
	
	//////startttttttttttttt
	
	$('#ms_c').click(function(){
		$('#salary1').show();
		$('#salary2').hide();
		$('#advaa1').hide();
		$('#advaa2').hide();
		$('#loaa1').hide();
		$('#loaa2').hide();
		$('#shortage1').hide();
		$('#shortage').hide();
		$('#sh2').hide();
		$('#sh').hide();
		$('#adv').hide();	
		$('#adv2').hide();	
		$('#lo').hide();	
		$('#lo2').hide();	
			$('#memo2').hide();	
			$('#memo1').hide();	
			$('#locations').hide();
			$('#supervisors').hide();	
				$('#locations').hide();	$('#cashiers').hide();	
			
		}	
		);
	

	$('#ms_s').click(function(){
		$('#salary2').show();
		$('#salary1').hide();
		$('#advaa1').hide();
		$('#advaa2').hide();
		$('#loaa1').hide();
		$('#loaa2').hide();
		$('#shortage1').hide();
		$('#shortage').hide();
		$('#sh2').hide();
		$('#sh').hide();
		$('#adv').hide();	
		$('#adv2').hide();	
		$('#lo').hide();	
		$('#lo2').hide();	
			$('#memo2').hide();	
			$('#memo1').hide();	
			$('#locations').hide();
			$('#supervisors').hide();	
				$('#locations').hide();
					$('#cashiers').hide();	
			
		}	
		);
		
		
	$('#mm_c').click(function(){
		$('#memo1').show();	
		$('#salary2').hide();
		$('#salary1').hide();
		$('#advaa1').hide();
		$('#advaa2').hide();
		$('#loaa1').hide();
		$('#loaa2').hide();
		$('#shortage1').hide();
		$('#shortage2').hide();
		$('#sh2').hide();
		$('#sh').hide();
		$('#adv').hide();	
		$('#adv2').hide();	
		$('#lo').hide();	
		$('#lo2').hide();	
			$('#memo2').hide();	
			//$('#memo1').hide();	
			$('#locations').hide();
			$('#supervisors').hide();	
	  $('#locations').hide();	$('#cashiers').hide();	
			
		}	
		);
	
	$('#mm_s').click(function(){
		$('#memo2').show();	
		 $('#shortage1').hide();
		$('#shortage2').hide();
		$('#salary2').hide();
		$('#salary1').hide();
		$('#advaa1').hide();
		$('#advaa2').hide();
		$('#loaa1').hide();
		$('#loaa2').hide();
		$('#sh2').hide();
		$('#sh').hide();
		$('#adv').hide();	
		$('#adv2').hide();	
		$('#lo').hide();	
		$('#lo2').hide();	
			//$('#memo2').hide();	
			$('#memo1').hide();	
			$('#locations').hide();
			$('#supervisors').hide();	
				$('#locations').hide();	$('#cashiers').hide();	
			
		}	
		);
	
	$('#msh_c').click(function(){
		
		$('#shortage1').show();
		$('#shortage2').hide();
		$('#salary2').hide();
		$('#salary1').hide();
		
		$('#advaa1').hide();
		$('#advaa2').hide();
		$('#loaa1').hide();
		$('#loaa2').hide();
		$('#sh2').hide();
		$('#sh').hide();
		$('#adv').hide();	
		$('#adv2').hide();	
		$('#lo').hide();	
		$('#lo2').hide();	
			$('#memo2').hide();	
			$('#memo1').hide();	
			$('#locations').hide();
			$('#supervisors').hide();	
				$('#locations').hide();	$('#cashiers').hide();	
			
		}	
		);
	
	
	
	
	$('#msh_s').click(function(){
		$('#shortage2').show();
		$('#shortage1').hide();
		$('#salary2').hide();
		$('#salary1').hide();
			$('#advaa1').hide();
		$('#advaa2').hide();
		$('#loaa1').hide();
		$('#loaa2').hide();
		$('#sh2').hide();
		$('#sh').hide();
		$('#adv').hide();	
		$('#adv2').hide();	
		$('#lo').hide();	
		$('#lo2').hide();	
			$('#memo2').hide();	
			$('#memo1').hide();	
			$('#locations').hide();
			$('#supervisors').hide();	
				$('#locations').hide();	$('#cashiers').hide();	
			
		}	
		);
	
	
	
	
	$('#ml_c').click(function(){
		$('#loaa1').show();
		$('#loaa2').hide();
		$('#shortage2').hide();
		$('#shortage1').hide();
		$('#salary2').hide();
		$('#salary1').hide();
			$('#advaa1').hide();
		$('#advaa2').hide();
		$('#sh2').show();
		$('#sh').hide();
		$('#adv').hide();	
		$('#adv2').hide();	
		$('#lo').hide();	
		$('#lo2').hide();	
			$('#memo2').hide();	
			$('#memo1').hide();	
			$('#locations').hide();
			$('#supervisors').hide();	
				$('#locations').hide();	$('#cashiers').hide();	
			
		}	
		);
	
	
	$('#ml_s').click(function(){
		$('#loaa1').hide();
		$('#loaa2').show();
		$('#shortage2').hide();
		$('#shortage1').hide();
		$('#salary2').hide();
		$('#salary1').hide();
		$('#advaa1').hide();
		$('#advaa2').hide();
		$('#sh2').hide();
		$('#sh').hide();
		$('#adv').hide();	
		$('#adv2').hide();	
		$('#lo').hide();	
		$('#lo2').hide();	
			$('#memo2').hide();	
			$('#memo1').hide();	
			$('#locations').hide();
			$('#supervisors').hide();	
				$('#locations').hide();
				$('#cashiers').hide();	
			
		}	
		);
		
		
	$('#ma_c').click(function(){
		$('#advaa1').show();
		$('#advaa2').hide();
		$('#loaa1').hide();
		$('#loaa2').hide();
		
		$('#shortage2').hide();
		$('#shortage1').hide();
		$('#salary2').hide();
		$('#salary1').hide();
		
		$('#sh2').hide();
		$('#sh').hide();
		$('#adv').hide();	
		$('#adv2').hide();	
		$('#lo').hide();	
		$('#lo2').hide();	
			$('#memo2').hide();	
			$('#memo1').hide();	
			$('#locations').hide();
			$('#supervisors').hide();	
				$('#locations').hide();
				$('#cashiers').hide();	
			
		}	
		);
	
	$('#ma_s').click(function(){
		
		$('#advaa1').hide();
		$('#advaa2').show();
		$('#loaa1').hide();
		$('#loaa2').hide();
		
		$('#shortage2').hide();
		$('#shortage1').hide();
		$('#salary2').hide();
		$('#salary1').hide();
		
		$('#sh2').hide();
		$('#sh').hide();
		$('#adv').hide();	
		$('#adv2').hide();	
		$('#lo').hide();	
		$('#lo2').hide();	
			$('#memo2').hide();	
			$('#memo1').hide();	
			$('#locations').hide();
			$('#supervisors').hide();	
				$('#locations').hide();
				$('#cashiers').hide();	
			
		}	
		);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	});
</script>

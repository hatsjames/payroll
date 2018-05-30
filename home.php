<?php include('includes/header.php'); session_start(); include('classes/class.process.php');include('classes/class.session.php');
$id=$_SESSION['user_id'];$user_name=$_SESSION['user'];
 $new_session=new Session($id,$user_name);$new_session->get_session();
?>
<script type="text/javascript" src="php-wrapper/fusioncharts.theme.ocean.js"></script>
<script type="text/javascript" src="php-wrapper/fusioncharts.js"></script>
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
               <!--
                
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
               -->
                
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
	
		 <div class="dropdown">	
		<ul class="nav nav-pills" style="background-color:">
			<li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 18px;color:black;" ><input type="button" id="meme" value="Issue MeMo"/><span class="caret"></span></a>
            <ul class="dropdown-menu">
            	<li><a id="c"  href="#">Cashier</a></li>
            	<li><a id="s"  href="#">Supervisor</a></li>	
            </ul>
			</li> 
			
		<li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 18px;color:black;" ><input type="button" id="meme" value="Issue Shortage"/><span class="caret"></span></a>
            <ul class="dropdown-menu">
            	<li><a id="sh_c"  href="#">Cashier</a></li>
            	<li><a id="sh_s"  href="#">Supervisor</a></li>	
            </ul>
			</li> 
			
			<li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"   id="advance"    style="font-size: 18px;color:black;" > <input type="button" id="meme" value="Issue Advance"/></a>
			
	        <ul class="dropdown-menu">
            	<li><a id="ad_c"  href="#">Cashier</a></li>
            	<li><a id="ad_s"  href="#">Supervisor</a></li>	
            </ul>
            </li> 
			<li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"   id="loan"      style="font-size: 18px;color:black;" > <input type="button" id="meme" value="Issue Loan"/></a>
            <ul class="dropdown-menu">
            	<li><a id="l_c"  href="#">Cashier</a></li>
            	<li><a id="l_s"  href="#">Supervisor</a></li>	
            </ul>
			</li> 
		
		    
			<li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"   id="payroll"      style="font-size: 18px;color:black;" > <input type="button" id="meme" value="Payroll"/></a>
             <ul class="dropdown-menu">
            	<li><a id="p_c" data-id="1"  href="#">Cashier</a></li>
            	<li><a id="p_s" data-id="2"  href="#">Supervisor</a></li>	
            </ul>
			</li>    
		</ul>
	
	</div>	 
  
	<div id="chart" style="padding-top: 40px;">
<?php include("includes/chart.php"); ?>
   </div>
	<div id="memo1"  style="display: none">
		<h4> Issue to cashier</h4><br />
		<div>
			<form method="post" action="classes/post.php" >
			<label>Cashier_Name&nbsp;&nbsp;:</label><select class="cd" style="width: 250px;" name="cname"  >
				
				
				<?php $tblc="tbl_cashier"; $getc=new Process; $dc=$getc->getAllData($tblc); 
             echo"<option></option>";
             foreach( $dc as $vc){
             	
             	echo"<option  data-id=".$vc['c_id']."  value=".$vc['c_id'].">".$vc['c_name']."</option>";
             }	?></select> <br /><br />
			<label>Location_Name:</label><select name="lname" style="width: 250px;" class="lc" >
			</select> <br /><br />
			<label>M_Reason&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><select name="rname"  ><option>Late coming</option>
				<option>Late coming</option>
				<option>Misbehaviour</option>
				<option>Disrespect</option>
				<option>Loss of Deleted Receipt</option>
				<option>Loss of Paid Receipt</option>
				<option>No Daily Report</option>
				<option>Misuse of fuel</option>
				<option>Reimbursment Of Company Money</option>
				<option>Shortage</option>
				 </select><br /><br />
			<label>M_Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="mamount" style="width: 250px;"  onkeypress="return Numb(event); "  /> <br /><br />
			<label>Date of issue&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" readonly="readonly" class="datex" name="datex" style="width: 250px;"  /> <br />
			<input type="hidden" value="memo" name="memo" />
			<button type="submit" name="submit_cash">Submit</button>
			</form>
		</div>
	</div>
	<div id="memo2" style="display: none">
		<h4> Issue to supervisor</h4><br />
		<div>
			<form method="post" action="classes/post.php" >
			<label>Supervisor_Name&nbsp;&nbsp;:</label><select name="sname"  style="width: 250px;" class="sn"  >
				<?php $tbl9="supervisor"; $get9=new Process; $d9=$get9->getAllData($tbl9); 
             foreach( $d9 as $v9){
             	echo"<option  value=".$v9['s_id'].">".$v9['s_name']."</option>";
             }	?>
				
			</select> <br /><br 
			<label>Location_Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;
			<select name="lname" style="width: 250px;" class="ln" >
			</select> <br /><br />
			<label>M_Reason&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><select name="rname"  ><option>Late coming</option>
				<option>Late coming</option>
				<option>Misbehaviour</option>
				<option>Disrespect</option>
				<option>Loss of Deleted Receipt</option>
				<option>Loss of Paid Receipt</option>
				<option>No Daily Report</option>
				<option>Misuse of fuel</option>
				<option>Reimbursment Of Company Money</option>
				<option>Shortage</option>
				 </select><br /><br />
			<label>M_Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" style="width: 250px;"   onkeypress="return Numb(event);"    name="mamount"  /> <br /><br />
			<label>Date of issue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" readonly="readonly" style="width: 250px;"   class="datex" name="datex"  /> <br />
			<input type="hidden" value="memo" name="memo" />
			<button type="submit" name="submit_sup">Submit</button>
			</form>
		</div>
	</div>




<!--

		<h4> Test it</h4><br />
		<div>
			<form method="post" action="classes/post.php" >
			<label>Name&nbsp;&nbsp;:</label><select name="sname"  style="width: 250px;" class="sn"  >
				<?php $tbl9="supervisor"; $get9=new Process; $d9=$get9->getAllData($tbl9); 
             foreach( $d9 as $v9){
             	echo"<option  value=".$v9['s_id'].">".$v9['s_name']."</option>";
             }	?>
				
			</select> <br /><br 
			<label>Location_Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="lname" style="width: 250px;" class="ln" />
			
			
			<label>M_Amount</label><input type="text" style="width: 250px;"   name="mamount"  /> <br /><br />
			<
			<button type="submit" name="test">Submit</button>
			</form>
		</div>
>

-->



	<div id="sh" style="display: none">
		<h4> Issue to cashier</h4><br />
		<div>
			<form method="post" action="classes/post.php" >
			<label>Cashier_Name&nbsp;&nbsp;:</label><select class="cd" style="width: 250px;"    name="cname"  ><?php $tbl8="tbl_cashier"; $get8=new Process; $d8=$get8->getAllData($tbl8); 
             foreach( $d8 as $v8){
             	echo"<option  data-id=".$v8['c_id']."  value=".$v8['c_id'].">".$v8['c_name']."</option>";
             }	?></select> <br /><br />
			<label>Location_Name:</label><select name="lname" style="width: 250px;" class="lc" >
			</select> <br /><br />
			<input type="hidden" name="rname" value="shortage"  />
				 
			<label>M_Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" style="width: 250px;" onkeypress="return Numb(event); "    name="mamount"  /> <br /><br />
			<label>Date of issue&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" readonly="readonly" style="width: 250px;"     class="datex" name="datex"  /> <br />

			<button type="submit" name="submit_cash_sh">Submit</button>
			</form>
		</div>
	</div>
	

	<div id="sh2" style="display: none">
		<h4> Issue to supervisor</h4><br />
		<div>
			<form method="post" action="classes/post.php" >
			<label>Supervisor_Name&nbsp;&nbsp;:</label><select name="sname" style="width: 250px;"    class="sn"  >
				<?php $tbl7="supervisor"; $get7=new Process; $d7=$get7->getAllData($tbl7); 
             foreach( $d7 as $v7){
             	echo"<option  value=".$v7['s_id'].">".$v7['s_name']."</option>";
             }	?>
				
			</select> <br /><br 
			<label>Location_Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="lname" style="width: 250px;" class="ln" >
			</select> <br /><br />
			<input type="hidden" name="rname" value="shortage"  />
			<label>M_Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="mamount" style="width: 250px;" onkeypress="return Numb(event); "     /> <br /><br />
			<label>Date of issue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" readonly="readonly" class="datex" name="datex" style="width: 250px;"     /> <br />
		
			<button type="submit" name="submit_sup_sh">Submit</button>
			</form>
		</div>
	</div>
	
	
	
	<div id="adv"  style="display: none">
		<h4> Issue advance to cashier</h4><br />
		<div>
			<form method="post" action="classes/post.php" >
			<label>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				:</label><select name="cname" style="width: 250px;"     ><?php $tbl6="tbl_cashier"; $get6=new Process; $d6=$get6->getAllData($tbl6); 
             foreach( $d6 as $v6){
             	echo"<option value=".$v6['c_id'].">".$v6['c_name']."</option>";
             }	?></select> <br /><br /><input type="hidden" name="rname" value="advance"  />
			<label>Advance_Amount&nbsp;:</label><input type="text" name="mamount"  style="width: 250px;" onkeypress="return Numb(event); "   /> <br /><br />
				<label>Installments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="i_amount" style="width: 250px;" onkeypress="return Numb(event); "    /> <br /><br />
			
			<label>Date of issue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" readonly="readonly" class="datex" name="datex" style="width: 250px;"    /> <br />
			
			<button type="submit" name="submit_advance_cash">Submit</button>
			</form>
		</div>
	</div>
	
	<div id="lo"  style="display: none                                                                                                                                     ">
		<h4> Issue loan to cashier</h4><br />
		<div>
			<form method="post" action="classes/post.php" >
			<label>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><select style="width: 250px;"  name="cname"  >
				<?php $tbl5="tbl_cashier";$get5=new Process; $d5=$get5->getAllData($tbl5); 
             foreach( $d5 as $v5){
             	echo"<option value=".$v5['c_id'].">".$v5['c_name']."</option>";
             }	?></select> <br /><br /><input type="hidden" name="rname" value="loan"style="width: 250px;"  />
			<label>Loan_Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="mamount"  style="width: 250px;"  onkeypress="return Numb(event); " /> <br /><br />
		    <label>Installments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" style="width: 250px;"  name="i_amount"style="width: 250px;" onkeypress="return Numb(event); "     /> <br /><br />
			<label>Date of issue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
			<input style="width: 250px;"  type="text"   name="datex"   class="datex"   /> <br />
		       
		       
			<button type="submit" name="submit_loan_cash">Submit</button>
			</form>
		</div>
	</div>                 
	
	<div id="lo2"  style="display: none">
		<h4> Issue loan to supervisor
			</h4><br />
		<div>
		  <form method="post" action="classes/post.php" >
			<label>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><select name="sname" style="width: 250px;" ><?php $tbl4="supervisor"; $get4=new Process; $d4=$get4->getAllData($tbl4); 
             foreach( $d4 as $v4){
             	echo"<option value=".$v4['s_id'].">".$v4['s_name']."</option>";
             }	?></select> <br /><br /><input type="hidden" name="rname" value="loan"  />
			<label>Loan_Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="mamount" style="width: 250px;"  onkeypress="return Numb(event); "   /> <br /><br />
			
			<label>Installments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="i_amount"  onkeypress="return Numb(event); "    style="width: 250px;" /> <br /><br />
			
			<label>Date of issue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
				</label><input type="text"  class="datex" name="datex" style="width: 250px;" /> <br />
			
			<button type="submit" name="submit_loan_sup">Submit</button>
			</form>
		</div>
	</div>
	


		<div id="adv2"  style="display:none">
		<h4> Issue advance to supervisor</h4><br />
		<div>
			<form method="post" action="classes/post.php" >
			 <label>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><select name="sname " style="width: 250px;"     >
				<?php $tbl3="supervisor"; $get3=new Process; $d3=$get3->getAllData($tbl3); 
               foreach( $d3 as $v3){
             	echo"<option value=".$v3['s_id'].">".$v3['s_name']."</option>";
             }	?></select> <br /><br /><input type="hidden" name="rname" value="advance" style="width: 250px;"/>
			    <label>Advance_Amount&nbsp;:</label><input type="text" name="mamount" style="width: 250px;"  onkeypress="return Numb(event); " /> <br /><br />
				<label>Installments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
				<input type="text" name="i_amount"  style="width: 250px;" onkeypress="return Numb(event); "   /> <br /><br />
			    <label>Date of issue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
			    <input type="text" readonly="readonly" class="datex" name="date" style="width: 250px;"/> <br />
			<button type="submit" name="submit_advance_sup">Submit</button>
			</form>
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

<script type="text/javascript">
	$(document).ready(function(){
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
	$('#p_s').click(function() {
		var sup=$(this).attr('data-id');$.ajax({
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
   
   
    $(".cd").on('change',function(){
		$(this).after('<div id="loader"><img src="img/loading.gif" alt="loading subcategory" /></div>');
		$.get('drops.php?sub_cat1=' + $(this).val(), function(data) {
			$(".lc").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });
   
   
   
   
   
    $(".sn").on('change',function(){
		$(this).after('<div id="loader"><img src="img/loading.gif" alt="loading subcategory" /></div>');
		$.get('drops.php?sub_cat=' + $(this).val(), function(data) {
			$(".ln").html(data);
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
		
		$('#emp1').click(function(){
			var postem1=$(this).attr('data-id');
			$.ajax({
				type:'post',
				url:'ajax.php',
				data:'postem1='+postem1,
				success:function(data){
					$('#right').html(data);
				}
			});
		});
		
		
	$('#emp2').click(function(){
			var postem2=$(this).attr('data-id');
			$.ajax({
				type:'post',
				url:'ajax.php',
				data:'postem2='+postem2,
				success:function(data){
					$('#right').html(data);
				}
			});
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
			$('#cashiers').show();
			$('#locations').hide();	
			$('#memo2').hide();	
			$('#adv').hide();	
			$('#lo').hide();
			$('#locations').hide();	
			$('#memo1').hide();
			$('#supervisors').hide();
			$('#adv2').hide();		
			     $('#lo2').hide();
			     $('#sh').hide();
		$('#sh2').hide();	$('#chart').hide();
			
		});
		
		
		$('#user').click(function(){
			//var post=$(this).attr('data-id');
			$('#reg').show();
			$('#cashiers').hide();
			$('#locations').hide();	
			$('#memo2').hide();	
			$('#adv').hide();	
			$('#lo').hide();
			$('#locations').hide();	
			$('#memo1').hide();
			$('#supervisors').hide();
			$('#adv2').hide();		
			     $('#lo2').hide();
			     $('#sh').hide();
		$('#sh2').hide();	$('#chart').hide();
		});
		
		
		
		
		
		
		
		
		
		
		
		
		$('#loc').click(function(){
			///var post=$(this).attr('data-id');
			$('#locations').show();
			$('#supervisors').hide();	
			$('#memo1').hide();	
			
			$('#memo2').hide();
				$('#adv').hide();	
				$('#lo').hide();
				$('#cashiers').hide();	
				$('#adv2').hide();		
			     $('#lo2').hide();
			     $('#sh').hide();
		$('#sh2').hide();	$('#chart').hide();
			
		});
		
		$('#super').click(function(){
			///var post=$(this).attr('data-id');
			$('#supervisors').show();	
			$('#memo1').hide();	
			$('#locations').hide();	
			$('#memo2').hide();
				$('#adv').hide();	
				$('#lo').hide();
				$('#locations').hide();	
				$('#cashiers').hide();	
				$('#adv2').hide();		
			     $('#lo2').hide();
			     $('#sh').hide();
		$('#sh2').hide();	$('#chart').hide();
			
		});
		
		
		$('#c').click(function(){
			$('#memo1').css("display", "inline-block");	
			$('#memo2').hide();
				$('#locations').hide();
				$('#locations').hide();
				$('#supervisors').hide();	
				$('#cashiers').hide();
				$('#adv').hide();$('#lo').hide();
				$('#adv2').hide();		
			     $('#lo2').hide();
			     $('#sh').hide();
		$('#sh2').hide();	$('#chart').hide();
		}	
		);
		$('#s').click(function(){
			$('#memo2').show();	
			$('#memo1').hide();	
			$('#locations').hide();
			$('#adv').hide();$('#adv2').hide();		
			$('#lo').hide();$('#lo2').hide();
			$('#supervisors').hide();	
				$('#locations').hide();	$('#cashiers').hide();	$('#chart').hide();
				$('#sh').hide
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
				$('#cashiers').hide();	$('#chart').hide();	
		}	
		);
		
		$('#l_s').click(function(){
		$('#lo2').show();$('#lo').hide();	
			$('#memo2').hide();	$('#adv').hide();	
			$('#memo1').hide();	$('#adv2').hide();	
			$('#locations').hide();$('#sh').hide();	
			$('#supervisors').hide();$('#sh2').hide();		
		        $('#locations').hide();	$('#cashiers').hide();	$('#chart').hide();	
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
				$('#locations').hide();	$('#cashiers').hide();	$('#chart').hide();	
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
				$('#locations').hide();	$('#cashiers').hide();		$('#chart').hide();
		}	
		);
		
		
	
	
	$('#sh_c').click(function(){
		$('#sh').show();
		$('#sh2').hide();
		$('#adv').hide();	
		$('#adv2').hide();
		$('#lo').hide();	$('#lo2').hide();	
			$('#memo2').hide();	
			$('#memo1').hide();	
			$('#locations').hide();
			$('#supervisors').hide();	
				$('#locations').hide();	$('#cashiers').hide();$('#chart').hide();
				
						
		}	
		);
		
	$('#sh_s').click(function(){
		$('#sh2').show();
		$('#chart').hide();
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
	
	});
	
//numbers only
	
</script>
</body>
</html>

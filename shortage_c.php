<?php include('includes/header.php'); include('classes/class.process.php');?>

<div id="sh" style="display: ">
		<h4> Issue to cashier</h4><br />
		<div>
			<form method="post" action="classes/post.php" >
			<label>Cashier_Name&nbsp;&nbsp;:</label><select class="cd" style="width: 250px;"    name="cname"  > <option>7</option>
            </select> <br /><br />
			<label>Location_Name:</label><select name="lname" style="width: 250px;" class="lc" ><option>eeee</option>
			</select> <br /><br />
			<input type="hidden" name="rname" value="shortage"  />
			<label>M_Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" style="width: 250px;"     name="mamount"  /> <br /><br />
			<label>Date of issue&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" readonly="readonly" style="width: 250px;"     class="datex" name="datex"  /> <br />

			<button type="submit" name="submit_cash_sh">Submit</button>
			</form>
		</div>
	</div>
<?php include('includes/footer.php');?>
<!DOCTYPE >
<html>
	<style>
		.container{
			position:relative;
		}
		.col-centered{
			margin-top: 200px;
		}
		
	</style>
	<body>
	<?php include('includes/header.php');?>
<div class="container" >
	<div class="row">
		
	</div>
	
<div class="row">
	<div class="col-md-8 col-centered  col-md-offset-3">
	<form class="form-horizontal" method="post" action="classes/post.php" >
		<div class="form-group"> <label class="col-sm-2 form-label"> Username</label>
			<div class="input-group col-sm-4"><span class="input-group-addon"><span class="glyphicon  glyphicon-user"></span></span>
			<input class="form-control" type="text" name="username" width="200px" />
			</div>
			</div> 
	        <div class="form-group"> <label class="col-sm-2 form-label"> Password</label>
			<div class="input-group col-sm-4"><span class="input-group-addon"><span class="glyphicon  glyphicon-lock"></span></span>
			<input class="form-control" type="password" name="password" width="200px" />
			</div>
			</div>
			
		<div> <button type="submit" id="" class="btn btn-default" name="login">Login</button></div>
	</form>

	</div>
</div>
</div>
<?php include('includes/footer.php'); ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap-3.3.6/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap-3.3.6/css/bootstrap.min.css">
	<script src="Bootstrap-3.3.6/js/jquery.min.js"></script>
	<script src="Bootstrap-3.3.6/js/jquery.js"></script>
</head>
<body style="background:url(foto/walpaper.png);background-size:200% 200%;">
<div class="container">
		<div class="row" style="margin-top:150px;">
			<div class="col-md-offset-4 col-md-4">
				<form action="aksi.php?op=in" method="POST">
					<div class="form-group">
						<center><img src="foto/login.png" height="160px;"></center>
					</div>
					
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</div>
							<input type="text" name="username" class="form-control" placeholder="Username" autofocus autocomplete="off" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
							</div>
							<input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
						</div>
					</div>
					<div class="form-group">
						<input type="checkbox" class="showpass"> <font color="white">Show Password</font>
						<script type="text/javascript">
						$(function(){
							$(".showpass").click(function(){
								if ($("[name=password]").attr("type")=="password") {
									$("[name=password]").attr("type","text");
								}else{
									$("[name=password]").attr("type","password");
								};
							});
						});
						</script>
					</div>
					<div class="form-group">
						<input style="width:100%;" type="submit" name="login" class="btn btn-primary" value="LOGIN">
					</div>	
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	$(function() {
		$('[data-toggle="tooltip"]').tooltip();
	})
	$(function(){
		$('[data-toggle="popover"]').popover();
	})
	</script>
</body>
</html>
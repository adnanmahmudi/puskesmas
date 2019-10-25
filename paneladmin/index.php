<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Login Page </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >
   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="cek_login.php" method="post" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Login User
                </p>
                <input type="text" autofocus required name="user" placeholder="Username" class="form-control" />
                <input type="password" required name="pass" placeholder="Password" class="form-control" />
				<input type="submit" name="login" value="Login" class="btn btn-info"/>
				<input type="reset" name="reset" value="Reset" class="btn btn-danger"/>
            </form>
        </div>
    </div>
</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="js/jquery-2.0.3.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="///code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<link rel="stylesheet" type="text/css" href="bootstrap.mim.css">
<script language=javascript type="text/javascript">

$(function unir() {

$('#login-form-link').click(function(e) {
	$("#login-form").delay(100).fadeIn(100);
	 $("#register-form").fadeOut(100);
	$('#register-form-link').removeClass('active');
	$(this).addClass('active');
	e.preventDefault();
});
$('#register-form-link').click(function(e) {
	$("#register-form").delay(100).fadeIn(100);
	 $("#login-form").fadeOut(100);
	$('#login-form-link').removeClass('active');
	$(this).addClass('active');
	e.preventDefault();
});

});
</script>


    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Iniciar sesión</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Regístrate ahora</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Recordarme</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Iniciar sesión">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="www.google.com" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form"  method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Nombre completo" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Usuario" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="8" class="form-control" placeholder="Contraseña">
									</div>
								
                                    
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Crear cuenta">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
    
		</div>
	</div>
    </form>
        <?php  
        include("registrar.php");
        ?>
    
</body>
</html>
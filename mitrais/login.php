<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
<head>
<title>Login Page</title>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card"style="border-radius:0;margin-top:10%;">
                            <div class="card-body" style="background-color:rgba(0,0,0,.03);">
							<img class="logo logo-dark logo-wide" width='30%' alt="Logo" src="https://mk0mitraissited2cion.kinstacdn.com/wp-content/themes/mitrais-theme/assets/img/mitrais-logo-purple.png">
								<p></p>
                                <form action="api/Action.php?action=login" id="form_id" method="POST">

                                  
                                    <div class="form-group">
                                         <div class="cols-sm-10">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="FirstName" id="FirstName" placeholder="First Name" required/>
                                            </div>
                                        </div>
                                    </div>
									
                                    <div class="form-group">
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <input type="email" maxlength="70" class="form-control" name="Email" id="Email" placeholder="Email" required />
                                            </div>
                                        </div>
                                    </div>
									
                                    <div class="login-register">
									    
                                           <input type="submit" id="login" value="Login" class="btn btn-dark btn-lg btn-block login-button" style="background-color:purple;">
                                    </div>
									<p> </p>
                               
								<footer style="background-color:purple;color:#fff;margin-left:-20;margin-right:-20;margin-bottom:-36;" class="card-header">
									<div class="footer-copyright text-center py-3">© 2019 Copyright:
									<a href=""> danarwidoseno</a>
									</div>
									</footer>
								</form>
                            </div>

                        </div>
						
                    </div>
					
                </div>
				
</div>

<script type="text/javascript">

</script>
</body>
</html>
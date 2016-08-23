<?php
   ob_start();
   session_start();
?>
	<html lang="en">

	<head>
		<title>----</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
		
		<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
        <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="animate.min.css">
        <script src="https://cdn.firebase.com/js/client/2.4.2/firebase.js"></script>
        
        <script>
            new WOW().init();
        </script>
		
	</head>

	<body>
		<div class="header">
			<h2>Transfer Tool</h2>
			<button type="button" class="btn btn-primary btn-lg log-in" data-toggle="modal" data-target="#myModal"> Log in </button>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
						<h4 class="modal-title" id="myModalLabel">Enter Username and Password</h4> </div>
					<div class="modal-body">
						<div class="container form-signin">
						<?php
								$msg = '';

								if (isset($_POST['login']) && !empty($_POST['username']) 
								   && !empty($_POST['password'])) {

								   if ($_POST['username'] == 'user' && 
									  $_POST['password'] == 'pass') {
									  $_SESSION['valid'] = true;
									  $_SESSION['timeout'] = time();
									  $_SESSION['username'] = 'user';

									  header("Location:content.php");
								   }
								}
							 ?>
						</div>
						<div class="container">
							<form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
								User Name: <input type="text" class="form-control" name="username" required>
								</br>
								Password: <input type="password" class="form-control" name="password" required>
								
								<button class="btn btn-lg btn-success btn-block" type="submit" name="login">Login</button>
							</form>
						</div>
					</div>
					<div class="modal-footer">

					</div>
				</div>
			</div>
		</div>
		
		<div class="apps">
         <div class="item animated bounceInDown">
            <a href="apk/SmartSwitch.apk">
            <div class="circle" id="samsung"></div>
            </a>
            <p>Samsung Smart Switch Mobile</p>
            </div>
            <div class="item animated bounceInRight">
            <a href="apk/HTCTransferTool.apk">
            <div class="circle" id="htc"></div>
            </a>
            <p>HTC Transfer Tool</p>
            </div>
            <div class="item animated bounceInLeft">
            <a href="apk/MoveToIOS.apk">
            <div class="circle" id="ios"></div>
            </a>
            <p>Move to IOS</p>
            </div>
            <div class="item animated bounceInRight">
            <a href="apk/XperiaTransferTool.apk">
            <div class="circle" id="xperia"></div>
            </a>
            <p>Xperia Transfer Mobile</p>
            </div>
            <div class="item animated bounceInUp">
            <a href="apk/PhoneClone.apk">
            <div class="circle" id="phone-clone"></div>
            </a>
            <p>Phone Clone</p>
            </div>
        </div>
	</body>

	</html>
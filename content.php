<?php 
	session_start();

	if(!isset($_SESSION['username']) || $_SESSION['username'] != 'user'){
		header('Location: index.php');
	}
    function samsung(){
       if(isset($_FILES['samsung'])){
          $errors= array();
          $file_name = $_FILES['samsung']['name'];
          $file_size = $_FILES['samsung']['size'];
          $file_tmp = $_FILES['samsung']['tmp_name'];
          $file_type = $_FILES['samsung']['type'];
          $file_ext=strtolower(end(explode('.',$_FILES['samsung']['name'])));
          $expensions= array("apk");

          if(in_array($file_ext,$expensions)=== false){
             $errors[]="extension not allowed, please choose an APK file.";
          }

          if(empty($errors)==true) {
              if($file_size != 0){
                move_uploaded_file($file_tmp,'apk/SmartSwitch.apk');
              }
          }else{
             print_r($errors);
          }
       }
    }
    function htc(){
       if(isset($_FILES['htc'])){
          $errors= array();
          $file_name = $_FILES['htc']['name'];
          $file_size = $_FILES['htc']['size'];
          $file_tmp = $_FILES['htc']['tmp_name'];
          $file_type = $_FILES['htc']['type'];
          $file_ext=strtolower(end(explode('.',$_FILES['htc']['name'])));
          $expensions= array("apk");

          if(in_array($file_ext,$expensions)=== false){
             $errors[]="extension not allowed, please choose an APK file.";
          }

          if(empty($errors)==true) {
              if($file_size != 0){
                move_uploaded_file($file_tmp,'apk/HTCTransferTool.apk');

              }
          }else{
             print_r($errors);
          }
       }
    }
    function ios(){
       if(isset($_FILES['ios'])){
          $errors= array();
          $file_name = $_FILES['ios']['name'];
          $file_size = $_FILES['ios']['size'];
          $file_tmp = $_FILES['ios']['tmp_name'];
          $file_type = $_FILES['ios']['type'];
          $file_ext=strtolower(end(explode('.',$_FILES['ios']['name'])));
          $expensions= array("apk");

          if(in_array($file_ext,$expensions)=== false){
             $errors[]="extension not allowed, please choose an APK file.";
          }

          if(empty($errors)==true) {
              if($file_size != 0){
                move_uploaded_file($file_tmp,'apk/MoveToIOS.apk');

              }
          }else{
             print_r($errors);
          }
       }
    }
    function xperia(){
       if(isset($_FILES['xperia'])){
          $errors= array();
          $file_name = $_FILES['xperia']['name'];
          $file_size = $_FILES['xperia']['size'];
          $file_tmp = $_FILES['xperia']['tmp_name'];
          $file_type = $_FILES['xperia']['type'];
          $file_ext=strtolower(end(explode('.',$_FILES['xperia']['name'])));
          $expensions= array("apk");

          if(in_array($file_ext,$expensions)=== false){
             $errors[]="extension not allowed, please choose an APK file.";
          }

          if(empty($errors)==true) {
              if($file_size != 0){
                move_uploaded_file($file_tmp,'apk/XperiaTransferTool.apk');

              }
          }else{
             print_r($errors);
          }
       }
    }
    function phone(){
       if(isset($_FILES['phone'])){
          $errors= array();
          $file_name = $_FILES['phone']['name'];
          $file_size = $_FILES['phone']['size'];
          $file_tmp = $_FILES['phone']['tmp_name'];
          $file_type = $_FILES['phone']['type'];
          $file_ext=strtolower(end(explode('.',$_FILES['phone']['name'])));
          $expensions= array("apk");

          if(in_array($file_ext,$expensions)=== false){
             $errors[]="extension not allowed, please choose an APK file.";
          }

          if(empty($errors)==true) {
              if($file_size != 0){
                move_uploaded_file($file_tmp,'apk/PhoneClone.apk');

              }
          }else{
             print_r($errors);
          }
       }
    }
?>
<html>
    <head>
        
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
		
		<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
        <link rel="stylesheet" href="animate.min.css">
        
        <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
		<link rel="stylesheet" href="content-style.css">
	<style>
		
	</style>
	</head>
    <body>
    <div class="container">
	<div class="card">

		<div class="card-block">
			<div class="title">
			<h4 class="card-title">SmartSwitch</h4>
			<img class="image" src="images/samsung-card.png" alt="Card image cap">
			<hr>
			</div>
			<div class="form">
				<form action="<?php samsung() ?>" method="POST" enctype="multipart/form-data">
					<div class="row">
						<input type="file" name="samsung" class="file" />
						<input type="submit" class="submit btn-primary" /> </div>
				</form>
			</div>
		</div>
	</div>
	<div class="card">
	
		<div class="card-block">
			<div class="title">
			<h4 class="card-title">HTC Transfer Tool</h4>
			<img class="image" src="images/htc-card.png" alt="Card image cap">
			<hr>
			</div>
			<div class="form">
				<form action="<?php htc()?>" method="POST" enctype="multipart/form-data">
					<input type="file" name="htc" class="file " />
					<input type="submit" class="submit btn-primary" /> </form>
			</div>
		</div>
	</div>
	<div class="card">

		<div class="card-block">
			<div class="title">
			<h4 class="card-title">Move to IOS</h4>
			<img class="image" src="images/ios-card.png" alt="Card image cap">
			<hr>
			</div>
			<div class="form">
				<form action="<?php ios()?>" method="POST" enctype="multipart/form-data">
					<input type="file" name="ios" class="file" />
					<input type="submit" class="submit btn-primary" /> </form>
			</div>
		</div>
	</div>
	<div class="card">

		<div class="card-block">
			<div class="title">
			<h4 class="card-title">Xperia Transfer Tool</h4>
			<img class="image" src="images/xperia-card.png" alt="Card image cap">
			<hr>
			</div>
			<div class="form">
				<form action="<?php xperia() ?>" method="POST" enctype="multipart/form-data">
					<input type="file" name="xperia" class="file" />
					<input type="submit" class="submit btn-primary" /> </form>
			</div>
		</div>
	</div>
	<div class="card">

		<div class="card-block">
			<div class="title">
			<h4 class="card-title">SmartSwitch</h4>
			<img class="image" src="images/phone-clone-card.jpg-c200" alt="Card image cap">
			<hr>
			</div>
			<div class="form">
				<form action="<?php phone()?>" method="POST" enctype="multipart/form-data">
					<input type="file" name="phone" class="file" />
					<input type="submit" class="submit btn-primary" /> </form>
			</div>
		</div>
	</div>
        <form method="post" action="logout.php" id="logout">
			<input type="submit" value="Logout" class="btn-danger btn-lg" style="position: absolute; left: 50%; transform: translateX(-50%); margin-top: 20px;">
		</form>
   </div>
    </body>
</html>

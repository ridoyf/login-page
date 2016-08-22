<?php
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
        
    </head>
    <body>
        <div id="samsung">
            <div class="upload">

                <h2>SmartSwitch</h2>
                <form action = "<?php samsung() ?>" method = "POST" enctype = "multipart/form-data">
                    <input type = "file" name = "samsung" />
                    <input type = "submit"/>			
                </form>
            </div>
        </div>
        
        <div id="htc">
            <div class="upload">

                <h2>HTC Transfer Tool</h2>
                <form action = "<?php htc()?>" method = "POST" enctype = "multipart/form-data">
                    <input type = "file" name = "htc" />
                    <input type = "submit"/>			
                </form>
            </div>
        </div>
        <div id="ios">
            <div class="upload">

                <h2>Move to IOS</h2>
                <form action = "<?php ios()?>" method = "POST" enctype = "multipart/form-data">
                    <input type = "file" name = "ios" />
                    <input type = "submit"/>			
                </form>
            </div>
        </div>
        <div id="xperia">
            <div class="upload">

                <h2>Xperia Transfer Tool</h2>
                <form action = "<?php xperia() ?>" method = "POST" enctype = "multipart/form-data">
                    <input type = "file" name = "xperia" />
                    <input type = "submit"/>			
                </form>
            </div>
        </div>
        <div id="phone">
            <div class="upload">

                <h2>Phone Clone</h2>
                <form action = "<?php phone()?>" method = "POST" enctype = "multipart/form-data">
                    <input type = "file" name = "phone" />
                    <input type = "submit"/>			
                </form>
            </div>
        </div>
        
        <form method="post" action="logout.php">
    <input type="submit" value="Logout">
</form>
    </body>
</html>
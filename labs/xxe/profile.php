<?php

session_start();

if($_SESSION['islogin'] != 1){
    header("Location: login.php");
    die();
}

$blind = 1;
$msg = " ";
$user = "";
$email = "";
$role ="";
$output ="";

if( isset( $_FILES[ 'upload' ] ) ) {

    $target_dir  = __DIR__ . "/files/";
    $target_file = basename( $_FILES[ 'upload' ][ 'name' ] );
    $target_ext  = substr( $target_file, strrpos( $target_file, '.' ) + 1);
    $target_path = $target_dir . $target_file;

    $allowed = array('xml');

    if( !in_array($target_ext, $allowed) ){
        
        $msg .= "Not allowd Extension, try XML file.";

    }else{
        if(!file_exists($target_path)){
            if( !move_uploaded_file( $_FILES[ 'upload' ][ 'tmp_name' ], $target_path ) ) {
            // No
                $msg .= 'Your file was not accepted.';
            }
            else {
                // Yes!
                $msg = "";
                // libxml_disable_entity_loader(true);
                if( $blind == 0 ){
                	$myfile = fopen($target_path, "r");
	                $content = fread($myfile, filesize($target_path));
	                $xm = $content;
					$dom = new DOMDocument();
					@$dom->loadXML($xm, LIBXML_NOENT | LIBXML_DTDLOAD);
					$userInfo = @simplexml_import_dom($dom);
					$user = @$userInfo->user;
					$email = @$userInfo->email;
					$role = @$userInfo->role;
					$output = "<p>User Name: $user</p><p>Email: $email</p><p>Role: $role</p>";
				}else{
					$myfile = fopen($target_path, "r");
	                $content = fread($myfile, filesize($target_path));
	                $xm = $content;
					$dom = new DOMDocument();
					try{
						@$dom->loadXML($xm, LIBXML_NOENT | LIBXML_DTDLOAD);
					}catch (Exception $e){
						echo "There is error in: ". $e->getMessage() . '\n';
					}
					$userInfo = @simplexml_import_dom($dom);
					$output = "User Sucessfully Added.";
				}
				unlink($target_path);
            }
        }else{
            $msg .= "File already exists.";
        }
    }
}
?>

<html>
  <head>
    <title>Books Library</title>
    <link rel="stylesheet" type="text/css" href="../style/css.css">
  </head>
  <body id="bodyId">
    <div class="header">
      <a href="index.php" class="logo">Books Library</a>
      <div class="header-right">
        <a href="index.php">Home</a>
        <a class="active" href="profile.php">Profile</a>
        <a href="login.php">Login</a>
      </div>
    </div>

    <div class="container">
        <form class="form-block" method="post" enctype="multipart/form-data">
            <input type="file" name="upload">
            <input type="submit" value="upload">
        </form>
        <pre>
        	<?php 
        	if($msg != "")
        		echo htmlentities($msg);
        	else{
        		echo $output;
        	}
        	?>
        </pre>
    </div>
  </body>
</html>
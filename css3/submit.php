<?php
	session_start();
	
	if( !empty($_GET['state'])) {
		
		//echo $_GET['state'];
		
		echo '<script type="text/javascript">
					window.location = "index.php";
				</script>';
		exit; 
	}
	
	$userId = $facebook -> getUser();
	
	$pesan = "Please Login ..!!";
	
	
	if($userId) {
		try {
			$token 			= $facebook -> getAccessToken();
			$friend 		= $_POST['friend'];
			$message 		= $_POST['message'];
			
			//$result = $facebook -> api('/'.$friend.'/feed'.$message,'POST');
			$result = $facebook->api(
										'/'.$friend.'/feed/',
										'POST',
										array(
											'access_token' => $token, 
											'message' => $message
										)
									);

			
			$pesan = "Success Post Message<br><br><a href='index.php'>Post new status</a>";
		}
		catch(FacebookApiException $e) {
			$login_url 	= $facebook -> getLoginUrl();
			$pesan 		= makeLogin($login_url, "Oppps, Something Happen.<br>Please Relogin.<br>&nbsp;<br>System Message : ".$e -> getMessage()."<br><br><a href='index.php'>Post new status</a>");
		} 
	}
	else {
		$login_url 	= $facebook -> getLoginUrl();
			$pesan 		= makeLogin($login_url, "Oppps, Something Happen.<br>Please Relogin.");
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Syntax Menu | VAM Property</title>
<link href="css3/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
	<img src="css3/images/logo.png">
</center>
<hr>

<center><?php echo $pesan; ?></center>

</body>
</html>
<?php
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

			
            $pesan = "Success Post Message<br><br><a href='redirect.php'>Post new status</a>";
        }
        catch(FacebookApiException $e) {
            $login_url 	= $facebook -> getLoginUrl();
            $pesan 		= makeLogin($login_url, "Oppps, Something Happen.<br>Please Relogin.<br>&nbsp;<br>System Message : ".$e -> getMessage()."<br><br><a href='/vamform2/redirect.php'>Post new status</a>");
        } 
    }
    else {
        $login_url 	= $facebook -> getLoginUrl();
        $pesan 		= makeLogin($login_url, "Oppps, Something Happen.<br>Please Relogin.");
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Syntax menu | VAM Property</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <link rel="apple-touch-icon" href="mobi/images/icon57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="mobi/images/icon72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="mobi/images/icon114.png" />
		
    <link rel="stylesheet"  href="mobi/css/jquery.mobile-1.0.css" />

    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>

    <script src="mobi/js/mobiscroll-1.5.3.js" type="text/javascript"></script>
    <link href="mobi/css/mobiscroll-1.5.3.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
        body {
            font-family: arial, verdana, sans-serif;
            font-size: 12px;
        }
        .dww img {
            width: 30px;
            height: 30px;
            margin: 5px 10px;
        }
        #wid50 {    
            float: left;
            font-size: 14px;
            height: 30px;
            margin-top: 10px;
            width: 130px;
        }
    </style>
</head>
<body>
    <div data-role="page" data-theme="b" id="jqm-home">
        <div data-role="header" data-theme="a">
            <h1><a href="http://vamproperty.com"><img src="mobi/images/logo.png" width="174" height="23" alt="VAM Property"></a></h1>
        </div>
		
        <div data-role="content" data-theme="d">
            <center>
            <?php echo $pesan?>
            <br>
            </center>
        </div>
    </div>
</body>
</html>
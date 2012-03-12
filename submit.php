<?php
    session_start();
	
    /// Detect device.
    if( !isset( $_SESSION['device'] ) ) {
		
        echo '<script type="text/javascript">
                window.location = "index.php";
            </script>';
        exit;
		
    }
	
    if( strcmp( "iphone", $_SESSION['device'] ) == 0 ) {
        include_once ("mobi/function.php");
    }
    else {
        include_once ("css3/function.php");
    }
	
    require_once 'facebook/facebook.php';
	
    $friends = array(); 
	
    $appId 		= '113681738755139';
    $appSecret 	= '330a55af4ed90a823d58b4d92009d2c0';
	
    $facebook = new Facebook(array(
        'appId'  => $appId,
        'secret' => $appSecret,
    ));
	
    $userId = $facebook -> getUser();
	
    $params = array(
        'scope' => 'publish_stream,offline_access,user_groups,user_events,manage_pages,read_s
		tream,email'
    );
	
	
    if( !empty($_GET['state'])) {
		
        //echo $_GET['state'];
		
        echo '<script type="text/javascript">
                window.location = "index.php";
            </script>';
        exit; 
    }
	
    if( strcmp( "iphone", $_SESSION['device'] ) == 0 ) {
        include_once ("mobi/submit.php");
    }
    else {
        include_once ("css3/submit.php");
    }
	
?>
<?php
    session_start();
	
    /// Detect device.
    include_once ("Mobile_Detect.php");
    $detect = new Mobile_Detect();
	
    if ($detect->isMobile()) {
	    if( $detect -> isIphone() ) {
		    $_SESSION['device'] = 'iphone';
	    }
	    else {
		    $_SESSION['device'] = 'other';
	    }
	}
    else{
	    $_SESSION['device'] ='other';
    }
	
    // Read Device Session.
    if( strcmp( "iphone", $_SESSION['device'] ) == 0 ) {
	    //echo "iphone";
        require_once ("mobi/function.php");
    }
    else {
        //echo "other";
        require_once ("css3/function.php");
    }
	
    require_once 'facebook/facebook.php';
	
    $friends = array(); 
	
    $appId = '113681738755139';
    $appSecret = '330a55af4ed90a823d58b4d92009d2c0';
	
    $facebook = new Facebook(array(
        'appId'  => $appId,
        'secret' => $appSecret,
    ));
	
    $userId = $facebook -> getUser();
	
    $params = array(
        // Get Additional Permission
        'scope' => 'publish_stream,offline_access,user_groups,user_events,manage_pa
        ges,read_stream,email'
    );
	
	
    if( !empty($_GET['state'])) {
		
        //echo $_GET['state'];
        echo '<script type="text/javascript">
                window.location = "index.php";
            </script>';
        exit; 
    }
	
    if( strcmp( "iphone", $_SESSION['device'] ) == 0 ) {
        require_once ("mobi/index.php");
    }
    else{
        require_once ("css3/index.php");
    }
	
?>
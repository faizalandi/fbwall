<?php
	function makeLogin( $loginUrl = "", $status = 'Hello Stranger...., Please Login To Use This Apps.<br>Click on "Connect with Facebook" button' ) {
		
		$tmp = 	'
					<center>
						<a class="btn" href="'.$loginUrl.'"><img src="css3/images/fbconnect.png" width="160" height="35" alt="Connect your Facebook"></a>
						<div id="status">'.$status.'</div>
					</center>
				';
		return $tmp;
	}
	
	function buildFriendSelection( $arrayFriends = NULL, $myID = NULL ) {
	
		$list .= '<option value="me">"My Wall"</option>';
		
		//array_multisort($arrayFriends);
		
		foreach( $arrayFriends['data'] as $friend ) {
			$list .= '<option value="'.$friend['id'].'">'.$friend["name"].'</option>';
		}
		
		$tmp = 	'
					<div id="wrap">
						<div id="name">Post to Wall </div> 
						<div id="box">
							<select id="friendList" name="friend">
								'.$list.'
							</select>
						</div> 
					</div>
					<div id="clr"></div>
					
				';
		
		return $tmp;
	}
	
?>
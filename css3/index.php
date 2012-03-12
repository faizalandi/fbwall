<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Syntax Menu | VAM Property</title>
<link href="css3/css/style.css" rel="stylesheet" type="text/css" />
<link href="css3/css/mobiscroll-1.5.3.min.css" rel="stylesheet" type="text/css" />
</head>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="css3/js/jquery.meio.mask.js" type="text/javascript"></script>
<script src="css3/js/mobiscroll-1.5.3.min.js" type="text/javascript"></script>

	<script >
	  (function($){
		// call setMask function on the document.ready event
			$(function(){
				$('input:text').setMask();
				$.mask.masks.msk = {mask: '999'}
			}
		);
	  })(jQuery);
	</script>
	<script>
	<!--
		(function($) {
			$.mask.masks.msk = {mask: '999.999.9999'};
			$.mask.masks.msk2 = {mask: '999.999.9999'};
			$.mask.masks.msk3 = {mask : '19/39/9999' };
		})(jQuery);
	// -->
	</script>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
				Created by Andi Irwandi Langgara
				Irwandi@OurBlueCode.com
			*/
			
			/////////////////////////////////////////////////////
			// GLOBALS
			var cat = "";
			var sub = "";
			
			$('#duedate').scroller();
			$('#assignment').click(function(){
				$('#duedateDiv').show();
			});
			
			function makePreview() {
				var syntax = "";
				var assi = "";
				
				var prop = '';
				if( $('#property').val() != '' || $('#punit').val() != '' ) {
					prop = $('#property').val().toUpperCase()  + " - " + $('#punit').val().toUpperCase() + " ";
				}
				
				if(cat == "Assignment") {
					assi = ": "+$('#duedate').val()+" ";
				}
				else {
					// The Dirty Way
					$('#duedateDiv').hide();
				}
				
				syntax = cat + sub + " " + assi + prop + $('#cpn').val() + " " + $('#fname').val() + " " + $('#lname').val() + ", CEL : " + $('#pnumber').val() + " " + $('#phonetype').val() + " " + $('#opnumber').val() + " " + "Re : " + $('#comment').val() + " -" + $('#initial').val().toUpperCase();
				
				syntax = syntax.replace("&amp;", "&");
				
				$("#fullsyntax").val(syntax);
				//$("#fullsyntax").val(cat + " " + sub + " " + prop + $('#cpn').val() + " " + $('#fname').val() + " " + $('#lname').val() + ", CEL : " + $('#pnumber').val() + " " + $('#phonetype').val() + " " + $('#opnumber').val() + " " + "Re : " + $('#comment').val() + " -" + $('#initial').val().toUpperCase() );
			}
			
			$("#selectall").click(function(){
				$("#fullsyntax").select();
			});
			
			$(".picker").click(function(){
				var tmp = "";
				var tmpp = "";
				tmp = $(this).closest("ul").closest("li").find("a").html();
				
				//alert(tmp);
				
				var isi = "";
				isi = $(this).html();
				// alert( isi );
				$(".current > a").html(tmp+" | "+isi);
				
				/////////////////////////////////////////////////////
				// Checking level 2 or 3
				tmpp = $(this).closest(".level").attr('id');
				
				if( tmpp == "lvl1" ) {
					cat = isi;
					sub = "";
				}
				else {
					cat = tmp;
					sub = " " + isi;
				}
				
				/////////////////////////////////////////////////////
				$(".master").css("visibility","hidden");
				
				/////////////////////////////////////////////////////
				// Push To Preview
				
				makePreview();
			});
			
			$('#duedate').change(function () {
				makePreview();
			});
			
			$('#property').keyup(function () {
				makePreview();
			});
			
			$('#punit').keyup(function () {
				makePreview();
			});
			
			$('#cpn').keyup(function () {
				makePreview();
			});
			
			$('#fname').keyup(function () {
				makePreview();
			});
			
			$('#lname').keyup(function () {
				makePreview();
			});
			
			$('#pnumber').keyup(function () {
				makePreview();
			});
			
			$('#phonetype').change(function () {
				makePreview();
			});
			
			$('#opnumber').keyup(function () {
				makePreview();
			});
			
			$('#comment').keyup(function () {
				makePreview();
			});
			
			$('#initial').keyup(function () {
				makePreview();
			});
			
			$("#nav").hover(function(){
				$(".master").css("visibility","");
			});
			
			$('#duedateDiv').hide();
		});
	</script>
<body>
<center>
	<img src="css3/images/logo.png">
</center>
<hr>

 <?php
	if($userId) {
			// Error Trapping ?
			try {
				$token 			= $facebook -> getAccessToken();
				$friends 		= $facebook -> api('/me/friends?fields=id,name&limit=10000&access_token='.$token,'GET');
				$me 			= $facebook -> api('/me?fields=id&access_token='.$token,'GET');
?>
<form id="postSomething" action="submit.php" method="post">
	<div id="tengah">
		<?php echo buildFriendSelection($friends, $me['id']); ?>
		<div id="wrap">
			<div id="name" style="padding-top:17px;">Categories</div>
			<div id="box">
				<ul id="nav" style="width:330px;">
				<li class="current"><a href="#" style="text-align:center;">Show Categories</a>
					<ul class="master">
						<li id="arrow" class="masterTree"><a href="#" id="general">General Posting</a>
							<ul class="level" id="lvl1">
								<li><a href="#" class="picker">Immediate Attention</a></li>
								<li><a href="#" class="picker">Correction Required</a></li>
								<li><a href="#" class="picker">Action Required</a></li>
								<li><a href="#" class="picker" id="assignment">Assignment</a></li>
								<li><a href="#" class="picker">Question</a></li>
								<li><a href="#" class="picker">Follow Up</a></li>
								<li><a href="#" class="picker">Scheduled</a></li>
								<li><a href="#" class="picker">Suggestion</a></li>
								<li><a href="#" class="picker">Answering Service</a></li>
								<li><a href="#" class="picker">Solicitation</a></li>
								<li><a href="#" class="picker">FYI</a></li>
								<li><a href="#" class="picker">Translation</a></li>
								<li><a href="#" class="picker">Additional Note</a></li>
								<li><a href="#" class="picker">Task Request</a></li>
								<li><a href="#" class="picker">Solution</a></li>
								<li><a href="#" class="picker">Update</a></li>
								<li id="arrow"><a href="#">Task Sent</a>
									<ul class="level" id="lvl2">							
										<li><a href="#" class="picker">(Accepted)</a></li>
										<li><a href="#" class="picker">(Declined)</a></li>
										<li><a href="#" class="picker">(In Progress)</a></li>
										<li><a href="#" class="picker">(Completed)</a></li>
										<li><a href="#" class="picker">(Not Started)</a></li>
										<li><a href="#" class="picker">(Waiting On Someone Else)</a></li>
										<li><a href="#" class="picker">(Deferred)</a></li>
									</ul>
								</li>
								<li><a href="#" class="picker">Extension Request</a></li>
								<li id="arrow"><a href="#">Reminder</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(1st)</a></li>
										<li><a href="#" class="picker">(2nd)</a></li>
										<li><a href="#" class="picker">(Final)</a></li>
									</ul>
								</li>
								<li><a href="#" class="picker">Approved</a></li>
								<li><a href="#" class="picker">Rejected</a></li>
							</ul>
						</li>
						<!-- Stop General Posting  -->
						<li id="arrow"><a href="#">Operation</a>
							<ul class="level" id="lvl1">
								<li id="arrow"><a href="#">Defective & Error</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(System)</a></li>
										<li><a href="#" class="picker">(Software)</a></li>
										<li><a href="#" class="picker">(Hardware)</a></li>
										<li><a href="#" class="picker">(Fixture)</a></li>
									</ul>
								</li>
								<li id="arrow"><a href="#">Maintenance & Upkeep</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Stationary)</a></li>
										<li><a href="#" class="picker">(Part)</a></li>
									</ul>
								</li>
								<li id="arrow"><a href="#">MEMO</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Effective Immediately)</a></li>
										<li><a href="#" class="picker">(Policy & Procedure)</a></li>
										<li><a href="#" class="picker">(Announcement)</a></li>
									</ul>
								</li>
								<li id="arrow"><a href="#">Revise & Upgrade</a>
									<ul class="level" id="lvl2">							
										<li><a href="#" class="picker">(Policy)</a></li>
										<li><a href="#" class="picker">(Procedure)</a></li>
										<li><a href="#" class="picker">(System)</a></li>
										<li><a href="#" class="picker">(Software)</a></li>
										<li><a href="#" class="picker">(Hardware)</a></li>
										<li><a href="#" class="picker">(Fixture)</a></li>
										<li><a href="#" class="picker">(Policy)</a></li>
									</ul>
								</li>
								<li id="arrow"><a href="#">Setup & Addition</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Account)</a></li>
										<li><a href="#" class="picker">(System)</a></li>
										<li><a href="#" class="picker">(User)</a></li>
										<li><a href="#" class="picker">(Station)</a></li>
										<li><a href="#" class="picker">(Hardware)</a></li>
										<li><a href="#" class="picker">(Software)</a></li>
										<li><a href="#" class="picker">(Equipment & Fixture)</a></li>
									</ul>
								</li>
								<li id="arrow"><a href="#">Training & Meeting</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Procedure)</a></li>
										<li><a href="#" class="picker">(System)</a></li>
										<li><a href="#" class="picker">(Software)</a></li>
										<li><a href="#" class="picker">(Hardware)</a></li>
										<li><a href="#" class="picker">(Fixture)</a></li>
									</ul>
								</li>
								<li><a href="#" class="picker">Warning & Penalty</a></li>
							</ul>
						</li>
						
						<li id="arrow"><a href="#">Account Processing</a>
							<ul class="level" id="lvl1">
								<li><a href="#" class="picker">PAST DUE</a></li>
								<li><a href="#" class="picker">Account Deficit</a></li>
								<li><a href="#" class="picker">OVER BUDGET</a></li>
								<li><a href="#" class="picker">WASTEFUL</a></li>
								<li><a href="#" class="picker">PENALTY</a></li>
								<li id="arrow"><a href="#">Response</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(3-Days)</a></li>
										<li><a href="#" class="picker">(Delinquent)</a></li>
										<li><a href="#" class="picker">(Eviction)</a></li>
										<li><a href="#" class="picker">(Fee & Charge)</a></li>
									</ul>
								</li>		
								<li id="arrow"><a href="#">Inquiry</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(General)</a></li>
										<li><a href="#" class="picker">(Contact Inf)</a></li>
										<li><a href="#" class="picker">(Fees)</option>
										<li><a href="#" class="picker">(Move-out & Charges)</a></li>
										<li><a href="#" class="picker">(Report)</a></li>
									</ul>
								</li>		
								<li><a href="#" class="picker">PROCESSED: (WO#) invoice PAID & check MAILED</a></li>
								<li><a href="#" class="picker">Justified</a></li>
								<li><a href="#" class="picker">IMPOST BUDGET</a></li>
							</ul>
						</li>
						<!-- STOP Account Processing -->
						<li id="arrow"><a href="#">Declare Issue</a>
							<ul class="level" id="lvl1">
								<li id="arrow"><a href="#">Claiming</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(URGENT)</a></li>
										<li><a href="#" class="picker">(48HOURS)</a></li>
										<li><a href="#" class="picker">(Due Process)</a></li>
										<li><a href="#" class="picker">(Attentive)</a></li>
										<li><a href="#" class="picker">(Accounting)</a></li>
									</ul>
								</li>
								<li id="arrow"><a href="#">Defending</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(URGENT)</a></li>
										<li><a href="#" class="picker">(48HOURS)</a></li>
										<li><a href="#" class="picker">(Due Process)</a></li>
										<li><a href="#" class="picker">(Attentive)</a></li>
										<li><a href="#" class="picker">(Accounting)</a></li>
									</ul>
								</li>
								<li><a href="#">Petition(30-Days & 3-Days Notice)</a></li>
								<li id="arrow"><a href="#">CORRESPONDENCE</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Phone Call)</a></li>
										<li><a href="#" class="picker">(Email)</a></li>
										<li><a href="#" class="picker">(Letter)</a></li>
										<li><a href="#" class="picker">(Memo)</a></li>
										<li><a href="#" class="picker">(Policy)</a></li>
										<li><a href="#" class="picker">(Regulation)</a></li>
									</ul>
								</li>		
								<li><a href="#" class="picker">MOVE OUT</a></li>
								<li><a href="#" class="picker">MOVE IN</a></li>
								<li><a href="#" class="picker">EVICTION</a></li>
								<li><a href="#" class="picker">ACCEPTED</a></li>
								<li id="arrow"><a href="#">Response</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Claiming)</a></li>
										<li><a href="#" class="picker">(Defending)</a></li>
									</ul>
								</li>		
								<li id="arrow"><a href="#">OFFICIAL COMMUNICATION</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Letter)</a></li>
										<li><a href="#" class="picker">(Fax)</a></li>
										<li><a href="#" class="picker">(Email)</a></li>
									</ul>
								</li>		
								<li id="arrow"><a href="#">Follow Up</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Phone Call)</a></li>
										<li><a href="#" class="picker">(SMS)</a></li>
										<li><a href="#" class="picker">(Email)</a></li>
									</ul>
								</li>		
								<li id="arrow"><a href="#">Pending Compliance</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Vacate Report)</a></li>
										<li><a href="#" class="picker">(BOD Meeting)</a></li>
									</ul>
								</li>		
								<li id="arrow"><a href="#">FINAL NOTICE</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Letter)</a></li>
										<li><a href="#" class="picker">(Fax)</a></li>
										<li><a href="#" class="picker">(Email)</a></li>
									</ul>
								</li>		
								<li id="arrow"><a href="#">FIELD INSPECTION</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Pending QC)</a></li>
										<li><a href="#" class="picker">(QC Passed)</a></li>
										<li><a href="#" class="picker">(QC Failed)</a></li>
										<li><a href="#" class="picker">(QC on Hold)</a></li>
									</ul>
								</li>
								<li><a href="#" class="picker">Penalty Enforced</a></li>
								<li><a href="#" class="picker">Case Closed</a></li>
							</ul>
						</li>
						<!-- STOP Declare Issue -->
						<li id="arrow"><a href="#">Maintenance & WOs</a>
							<ul class="level" id="lvl1">
								<li><a href="#" class="picker">URGENT</a></li>
								<li><a href="#" class="picker">48 Hours</a></li>
								<li><a href="#" class="picker">Routine</a></li>
								<li><a href="#" class="picker">Route</a></li>
								<li><a href="#" class="picker">Return Service</a></li>
								<li><a href="#" class="picker">Warranty WO</a></li>
								<li id="arrow"><a href="#">ACCEPTED</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(00-Classify)</a></li>
										<li><a href="#" class="picker">3.1-Verify)</a></li>
										<li><a href="#" class="picker">(3.2-Pending Approval)</a></li>
										<li><a href="#" class="picker">(3.3-Assign Vendor)</a></li>
										<li><a href="#" class="picker">(3.4 Pending QC)</a></li>
									</ul>
								</li>			
								<li id="arrow"><a href="#">Follow Up</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Vendor)</a></li>
										<li><a href="#" class="picker">(Tenant)</a></li>
									</ul>
								</li>	
							</ul>
						</li>
						<!-- Maintenance WOs -->
						<li id="arrow"><a href="#">Customer Care & Services</a>
							<ul class="level" id="lvl1">
								<li id="arrow"><a href="#">Customer Service</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Owner)</a></li>
										<li><a href="#" class="picker">(Vendor)</a></li>
									</ul>
								</li>		
								<li id="arrow"><a href="#">Interruption</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Tenant)</a></li>
										<li><a href="#" class="picker">(Staff)</a></li>
									</ul>
								</li>		
							</ul>
						</li>
						<li id="arrow"><a href="#">Marketing</a>
							<ul class="level" id="lvl1">
								<li><a href="#" class="picker">Marketing Strategy</a></li>
								<li id="arrow"><a href="#">Response</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Rental)</a></li>
										<li><a href="#" class="picker">(Leasing)</a></li>
										<li><a href="#" class="picker">(Contract)</a></li>
										<li><a href="#" class="picker">(Sale)</a></li>
										<li><a href="#" class="picker">(Contract)</a></li>
										<li><a href="#" class="picker">(Marketing)</a></li>
										<li><a href="#" class="picker">(Promotion)</a></li>
										<li><a href="#" class="picker">(Advertisement)</a></li>
										<li><a href="#" class="picker">(Referral)</a></li>
									</ul>
								</li>			
							</ul>
						</li>
						<li id="arrow"><a href="#">Transition Improvement (TI)</a>
							<ul class="level" id="lvl1">
								<li id="arrow"><a href="#">Justification</a>
									<ul class="level" id="lvl2">
										<li><a href="#" class="picker">(Financial)</a></li>
										<li><a href="#" class="picker">(Value)</a></li>
										<li><a href="#" class="picker">(Image)</a></li>
										<li><a href="#" class="picker">(Preventative & Protection)</a></li>
										<li><a href="#" class="picker">(Enforcement & Regulation)</a></li>
										<li><a href="#" class="picker">(Accessibility)</a></li>
										<li><a href="#" class="picker">(Amenity & Luxury)</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
			</div> 
		</div>
		<div id="clr"></div>
		
		<div id="duedateDiv">
			<div id="wrap">
				<div id="name">Due Date</div> 
				<div id="box"><input type="text" style="text-transform: uppercase;" maxlength="10" size="10" id="duedate" name="duedate" placeholder="mm/dd/yyyy" alt="msk3">
				</div> 
			</div>
			<div id="clr"></div> 
		</div>
		
		<div id="wrap">
			<div id="name">Property</div>
			<div id="box"><input type="text" style="text-transform: uppercase;" maxlength="6" size="2" id="property" name="property">
				Unit <input type="text" style="display:inline;" maxlength="15" size="6" id="punit" name="punit">
			</div> 
		</div>
		<div id="clr"></div>

		<div id="wrap">
			<div id="name">Company</div>
			<div id="box"><input type="text" name="cpn" class="click" id="cpn" size="35" maxlength="40" style="width:330px;"/></div>
		</div>
		<div id="clr"></div>

		<div id="wrap">
			<div id="name">First Name</div>
			<div id="box"><input type="text" style="width:330px;" maxlength="40" size="35" id="fname" name="first_name"></div>
		</div>
		<div id="clr"></div>

		<div id="wrap">
			<div id="name">Last Name</div>
			<div id="box"><input type="text" style="width:330px;" maxlength="40" size="35" id="lname" name="last_name"></div>
		</div>
		<div id="clr"></div>

		<div id="wrap">
			<div id="name">Phone Number</div>
			<div id="box">
				Cell&nbsp;:&nbsp;<input type="text" maxlength="40" size="35" id="pnumber" name="pnumber" placeholder="###.###.####" alt="msk2">
				<div style="padding-top:5px;">
					<select style="width: 105px" name="phonetyp3" id="phonetype">
						<option value="">Phone type</option>	
						<option value="HOM">Home</option>
						<option value="WRK">Work</option>
						<option value="OTH">Other</option>
					</select>&nbsp;
					<input type="text" alt="msk" size="22" id="opnumber" name="other phone" placeholder="###.###.####" alt="msk">
				</div>
			</div>
		</div>
		<div id="clr"></div>

		<div id="wrap">
			<div id="name">Comment</div>
			<div id="box"><textarea style="width:330px;" value="Re:" id="comment" name="comment" rows="4" cols="50"></textarea></div>
		</div>
		<div id="clr"></div>

		<div id="wrap">
			<div id="name">Your Initial</div>
			<div id="box"><input type="text" style="text-transform: uppercase;" maxlength="3" size="6" id="initial" name="initial"></div>
		</div>
		<div id="clr"></div>

		<div id="wrap">
			<div id="name">This is how your status will look</div>
			<div id="box"><textarea id="fullsyntax" name="message" rows="4" cols="50" style="width:330px;"></textarea>
			<br><input id="selectall" type="button" value="Select All " onclick="SelectAll('fullsyntax');">&nbsp;and then press command/control + C to copy to wall 
			</div>
		</div>
		<div id="clr">&nbsp;</div>
		<center>
			<input value="Post on Wall" type="submit">
			<button id="resetbtn" type="reset" value="Reload Window" onclick="window.location.reload()" >Clear form</button>
		</center>
	</div>
</form>
<?php
			}
			catch(FacebookApiException $e) {
				$login_url 	= $facebook -> getLoginUrl($params);
				$error 		= "Oppps, Something Happen.<br>Please Relogin.<br>&nbsp;<br>System Message : ".$e -> getMessage();
				
				echo makeLogin($login_url, $error);
			}  
		} 
		else {
			$login_url = $facebook -> getLoginUrl($params);
			echo makeLogin($login_url);
		}
?>
</body>

</html>
<?php
/*
 * Rewrite By Andi Irwandi Langgara.
 * add mobile detection code.
 * using http://code.google.com/p/php-mobile-detect/
 *
 * */
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <title>Syntax menu | VAM Property</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <link rel="apple-touch-icon" href="mobi/images/icon57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/icon72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/icon114.png" />
		
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
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
    <script src="mobi/js/jquery.meio.mask.js" type="text/javascript"></script>
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
        <script><!--
            (function($) {
                $.mask.masks.msk = {mask: '999.999.9999'};
                $.mask.masks.msk2 = {mask: '999.999.9999'};
                $.mask.masks.msk3 = {mask : '19/39/9999' };
            })(jQuery);
    // --></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var cat = "";
            var sub = "";
                /*
                $("#initial").mask("aa",{placeholder:""});
                $("#pnumber").mask("999.999.9999999",{placeholder:""});
                $("#opnumber").mask("999.999.99999999",{placeholder:""});
                */
				
                $('#duedate').scroller({ preset: 'date'
                    , onSelect: function(valueText, inst) {
                    // validate range here
                    sub = valueText;
                    previewTextArea();
                    }
                });
				
                $("#syntaxcat").change(function(){
                    hideAll();
                    var v =  $("#syntaxcat").val();
                    $("#" + v + "hide").show();
                });
				
                <?php
                    for($i = 1; $i <= 33; $i++) {
                        $tmp = '';
                            switch($i) {
                                case 1 :
                                    $tmp = 	"
                                                var values = '';
                                                values = $(this).val();
												
                                                cat = values;
                                                sub = '';	
                                                if(values == 'Task Sent(') $('#9hide').show();
                                                else if( values == 'Assignment') {
                                                    sub = sub + ': ';
                                                    $('#34hide').show();
                                                }
                                                else if( values == 'Reminder(') $('#10hide').show();
                                                else previewTextArea();
                                            ";
                                    break;
                                case 2 :
                                    $tmp = 	"
                                                var values = '';
                                                values = values = $(this).val();
												
                                                cat = values;
                                                sub = '';	
                                                if(values == 'Defective & Error(') $('#11hide').show();
                                                else if( values == 'Maintenance & Upkeep(') $('#12hide').show();
                                                else if( values == 'MEMO(') $('#13hide').show();
                                                else if( values == 'Revise & Upgrade(') $('#14hide').show();
                                                else if( values == 'Setup & Addition(') $('#15hide').show();
                                                else if( values == 'Training & Meeting(') $('#16hide').show();
                                                else previewTextArea();
                                            ";
                                    break;
                                case 3 :
                                        $tmp = 	"
                                            var values = '';
                                            values = values = $(this).val();
												
                                            cat = values;
                                            sub = '';
                                            if(values == 'Response(') $('#17hide').show();
                                            else if( values == 'Inquiry(') $('#18hide').show();
                                            else previewTextArea();
                                        ";
                                    break;
                                case 4 :
                                    $tmp = 	"
                                            var values = '';
                                            values = values = $(this).val();
												
                                            cat = values;
                                            sub = '';
                                            if(values == 'Claiming(') $('#19hide').show();
                                            else if( values == 'Defending(') $('#20hide').show();
                                            else if( values == 'CORRESPONDENCE(') $('#21hide').show();
                                            else if( values == 'Response(') $('#22hide').show();
                                            else if( values == 'OFFICIAL COMMUNICATION(') $('#23hide').show();
                                            else if( values == 'Follow Up(') $('#24hide').show();
                                            else if( values == 'Pending Compliance(') $('#25hide').show();
                                            else if( values == 'FINAL NOTICE(') $('#26hide').show();
                                            else if( values == 'FIELD INSPECTION(') $('#27hide').show();
                                            else previewTextArea();
                                    ";
                                    break;
                                case 5 :
                                        $tmp = 	"
                                            var values = '';
                                            values = values = $(this).val();
													
                                            cat = values;
                                            sub = '';
                                            if(values == 'ACCEPTED(') $('#28hide').show();
                                            else if( values == 'Follow Up(') $('#29hide').show();
                                            else previewTextArea();
                                        ";
                                    break;
                                case 6 :
                                        $tmp = 	"
                                            var values = '';
                                            values = values = $(this).val();
												
                                            cat = values;
                                            sub = '';
                                            if(values == 'Customer Service(') $('#30hide').show();
                                            else if( values == 'Interruption(') $('#31hide').show();
                                            else previewTextArea();
                                        ";
                                    break;
                                case 7 :
                                        $tmp = 	"
                                            var values = '';
                                            values = values = $(this).val();
												
                                            cat = values;
                                            sub = '';
                                            if(values == 'Response(') $('#32hide').show();
                                            else previewTextArea();
                                        ";
                                    break;
                                case 8 :
                                        $tmp = 	"
                                            var values = '';
                                            values = values = $(this).val();
												
                                            cat = values;
                                            sub = '';
                                            if(values == 'Response(') $('#33hide').show();
                                            else previewTextArea();
                                        ";
                                    break;
                                default :
                                        // Categori.
                                        // Sub
                                        $tmp = 	"
                                            var values = '';
                                            values = $(this).val();
                                            values = removeLastChar(values) + ' ) ';
                                            sub = values;
											
                                            previewTextArea();
                                        ";
                                    break;
                            }
							
                            echo '$("#syn_'.$i.'").change(function(){
                                '.(($i<9)?("
                                            hideSubCat();
                                            "):("")).'
                            '.$tmp.'
							
                            });
					
                    ';
                    }
                ?>
				
                $("#selectall").click(function(){
                    $("#fullsyntax").select();
                });
				
                $("#fullsyntax").focus(function(){
                    $("#fullsyntax").select();
                });
				
                function removeLastChar(str) {
                    if(str.length > 0) {
                        var tmp = "";
						
                        tmp = str.substring( 0,( str.length ) );
						
                        return tmp;
                    }
                    else {
                        return "";
                    }
                }
				
                function removeFirstChar(str) {
                    if(str.length > 0) {
                        var tmp = "";
						
                        tmp = str.substring( 1, str.length );
						
                        return tmp;
                    }
                    else {
                        return "";
                    }
                }
				
                function previewTextArea() {
                    $("#fullsyntax").val("");
					
                    // Task Sent(:   UNIT - ROOM Company First Name Last name,   
                    // CEL 123.123 OTH 841.011.00 Re: My Comment -AL
					
                    var prop = '';
                    if( $('#property').val() != '' || $('#punit').val() != '' ) {
                        prop = $('#property').val()  + " - " + $('#punit').val() + " ";
                    }
					
                    //$('#phnum').val($('#pnumber').val().split('').reverse().join(''));
                    //$('#phnum').formatCurrency({ symbol: '', digitGroupSymbol: '.', roundToDecimalPlace:0 });
					
                    //$('#otnum').val($('#opnumber').val().split('').reverse().join(''));
                    //$('#otnum').formatCurrency({ symbol: '', digitGroupSymbol: '.', roundToDecimalPlace:0 });
					
                    $("#fullsyntax").val(cat + " " + sub + " " + prop + $('#cpn').val() + " " + $('#fname').val() + " " + $('#lname').val() + ", CEL : " + $('#pnumber').val() + " " + $('#phonetype').val() + " " + $('#opnumber').val() + " " + "Re : " + $('#comment').val() + " -" + $('#initial').val().toUpperCase() );
                }
				
                function hideAll() {
                    $("#1hide").hide(); 
                    $("#2hide").hide(); 
                    $("#3hide").hide(); 
                    $("#4hide").hide(); 
                    $("#5hide").hide(); 
                    $("#6hide").hide(); 
                    $("#7hide").hide(); 
                    $("#8hide").hide(); 
                    $("#9hide").hide(); 
                    hideSubCat();
                }
				
                function hideSubCat() {
                    $("#9hide").hide(); 
                    $("#10hide").hide(); 
                    $("#11hide").hide(); 
                    $("#12hide").hide(); 
                    $("#13hide").hide(); 
                    $("#14hide").hide(); 
                    $("#15hide").hide(); 
                    $("#16hide").hide(); 
                    $("#17hide").hide(); 
                    $("#18hide").hide(); 
                    $("#19hide").hide(); 
                    $("#20hide").hide(); 
                    $("#21hide").hide(); 
                    $("#22hide").hide(); 
                    $("#23hide").hide(); 
                    $("#24hide").hide(); 
                    $("#25hide").hide(); 
                    $("#26hide").hide(); 
                    $("#27hide").hide(); 
                    $("#28hide").hide(); 
                    $("#29hide").hide(); 
                    $("#30hide").hide(); 
                    $("#31hide").hide(); 
                    $("#32hide").hide(); 
                    $("#33hide").hide(); 
                    $("#34hide").hide(); 
                }
				
                $('#property').keyup(function () {
                    previewTextArea();
                });
				
                $('#punit').keyup(function () {
                    previewTextArea();
                });
				
                $('#cpn').keyup(function () {
                    previewTextArea();
                });
				
                $('#fname').keyup(function () {
                    previewTextArea();
                });
				
                $('#lname').keyup(function () {
                    previewTextArea();
                });
				
                $('#pnumber').keyup(function () {
                    previewTextArea();
                });
				
                $('#phonetype').change(function () {
                    previewTextArea();
                });
				
                $('#opnumber').keyup(function () {
                    previewTextArea();
                });
				
                $('#comment').keyup(function () {
                    previewTextArea();
                });
				
                $('#initial').keyup(function () {
                    previewTextArea();
                });
				
                // init
                hideAll();
				
            });		
        </script>
</head>
<body>
    <div data-role="page" data-theme="b" id="jqm-home">
        <div data-role="header" data-theme="a">
            <h1><a href="http://vamproperty.com"><img src="mobi/images/logo.png" width="140" alt="VAM Property"></a></h1>
        </div>
		
        <div data-role="content" data-theme="d">
            <?php
                if($userId) {
                        // Error Trapping ?
                        try {
                            $token 			= $facebook -> getAccessToken();
                            $friends 		= $facebook -> api('/me/friends?fields=id,name&limit=10000&access_token='.$token,'GET');
                            $me 			= $facebook -> api('/me?fields=id&access_token='.$token,'GET');
            ?>
            <div style="width:100%; margin:0 auto; ">
            <form id="postSomething" action="submit.php" method="post">
                <div data-role="fieldcontain" id="choosesyntax">
				
                    <?php
                        echo buildFriendSelectionMobile($friends, $me['id']);
                    ?>
				
                    <div id='wid50'>Syntax selection</div>
                    <select data-native-menu="false" id="syntaxcat" name="syntax">
                        <option value=""></option>
                        <option value="1">General Posting</option>
                            <option value="Immediate Attention" disabled="disabled">&nbsp;&nbsp;&nbsp;Immediate Attention</option>
                            <option value="Correction Required" disabled="disabled">&nbsp;&nbsp;&nbsp;Correction Required</option>
                            <option value="Action Required" disabled="disabled">&nbsp;&nbsp;&nbsp;Action Required</option>
                            <option value="Assignment" disabled="disabled">&nbsp;&nbsp;&nbsp;Assignment</option>
                            <option value="Question" disabled="disabled">&nbsp;&nbsp;&nbsp;Question</option>
                            <option value="Follow Up" disabled="disabled">&nbsp;&nbsp;&nbsp;Follow Up</option>
                            <option value="Scheduled" disabled="disabled">&nbsp;&nbsp;&nbsp;Scheduled</option>
                            <option value="Suggestion" disabled="disabled">&nbsp;&nbsp;&nbsp;Suggestion</option>
                            <option value="Answering Service" disabled="disabled">&nbsp;&nbsp;&nbsp;Answering Service</option>
                            <option value="Solicitation" disabled="disabled">&nbsp;&nbsp;&nbsp;Solicitation</option>
                            <option value="FYI" disabled="disabled">&nbsp;&nbsp;&nbsp;FYI</option>
                            <option value="Translation" disabled="disabled">&nbsp;&nbsp;&nbsp;Translation</option>
                            <option value="Additional Note" disabled="disabled">&nbsp;&nbsp;&nbsp;Additional Note</option>
                            <option value="Task Request" disabled="disabled">&nbsp;&nbsp;&nbsp;Task Request</option>
                            <option value="Solution" disabled="disabled">&nbsp;&nbsp;&nbsp;Solution</option>
                            <option value="Update" disabled="disabled">&nbsp;&nbsp;&nbsp;Update</option>
                            <option value="Task Sent "disabled="disabled">&nbsp;&nbsp;&nbsp;Task Sent</option>
                            <option value="Extension Request"disabled="disabled">&nbsp;&nbsp;&nbsp;Extension Request</option>
                            <option value="Reminder "disabled="disabled">&nbsp;&nbsp;&nbsp;Reminder</option>
                            <option value="Approved" disabled="disabled">&nbsp;&nbsp;&nbsp;Approved</option>
                            <option value="Rejected" disabled="disabled">&nbsp;&nbsp;&nbsp;Rejected</option>
                        <option value="2">Operation</option>
                            <option value="Defective & Error(" disabled="disabled">&nbsp;&nbsp;&nbsp;Defective &amp; Error</option>
                            <option value="Maintenance & Upkeep(" disabled="disabled">&nbsp;&nbsp;&nbsp;Maintenance &amp; Upkeep</option>
                            <option value="MEMO(" disabled="disabled">&nbsp;&nbsp;&nbsp;MEMO</option>
                            <option value="Revise & Upgrade(" disabled="disabled">&nbsp;&nbsp;&nbsp;Revise &amp; Upgrade</option>
                            <option value="Setup & Addition(" disabled="disabled">&nbsp;&nbsp;&nbsp;Setup &amp; Addition</option>
                            <option value="Training & Meeting(" disabled="disabled">&nbsp;&nbsp;&nbsp;Training &amp; Meeting</option>
                            <option value="Warning &amp; Penalty" disabled="disabled">&nbsp;&nbsp;&nbsp;Warning &amp; Penalty</option>
                        <option value="3">Account Processing</option>
                            <option value="PAST DUE" disabled="disabled">&nbsp;&nbsp;&nbsp;PAST DUE</option>
                            <option value="Account Deficit" disabled="disabled">&nbsp;&nbsp;&nbsp;Account Deficit</option>
                            <option value="OVER BUDGET" disabled="disabled">&nbsp;&nbsp;&nbsp;OVER BUDGET</option>
                            <option value="WASTEFUL" disabled="disabled">&nbsp;&nbsp;&nbsp;WASTEFUL</option>
                            <option value="PENALTY:" disabled="disabled">&nbsp;&nbsp;&nbsp;PENALTY</option>
                            <option value="Response(" disabled="disabled">&nbsp;&nbsp;&nbsp;Response</option>
                            <option value="Inquiry(" disabled="disabled">&nbsp;&nbsp;&nbsp;Inquiry</option>
                            <option value="PROCESSED: WO#) invoice PAID &amp; check MAILED" disabled="disabled">&nbsp;&nbsp;&nbsp;PROCESSED: (WO#) invoice PAID &amp; check MAILED</option>
                            <option value="Justified" disabled="disabled">&nbsp;&nbsp;&nbsp;Justified</option>
                            <option value="IMPOST BUDGET" disabled="disabled">&nbsp;&nbsp;&nbsp;IMPOST BUDGET</option>
                        <option value="4">Declared Issues</option>
                            <option value="Claiming(" disabled="disabled">&nbsp;&nbsp;&nbsp;Claiming</option>
                            <option value="Defending(" disabled="disabled">&nbsp;&nbsp;&nbsp;Defending</option>
                            <option value="Petition(30-Days & 3-Days Notice)" disabled="disabled">&nbsp;&nbsp;&nbsp;Petition(30-Days & 3-Days Notice)</option>
                            <option value="CORRESPONDENCE(" disabled="disabled">&nbsp;&nbsp;&nbsp;CORRESPONDENCE</option>
                            <option value="MOVE OUT" disabled="disabled">&nbsp;&nbsp;&nbsp;MOVE OUT</option>
                            <option value="MOVE IN" disabled="disabled">&nbsp;&nbsp;&nbsp;MOVE IN</option>
                            <option value="EVICTION" disabled="disabled">&nbsp;&nbsp;&nbsp;EVICTION</option>
                            <option value="ACCEPTED:(Outlook file location) – [DI Number]" disabled="disabled">&nbsp;&nbsp;&nbsp;ACCEPTED</option>
                            <option value="Response(" disabled="disabled">&nbsp;&nbsp;&nbsp;Response</option>
                            <option value="OFFICIAL COMMUNICATION(" disabled="disabled">&nbsp;&nbsp;&nbsp;OFFICIAL COMMUNICATION</option>
                            <option value="Follow Up(" disabled="disabled">&nbsp;&nbsp;&nbsp;Follow Up</option>
                            <option value="Pending Compliance(" disabled="disabled">&nbsp;&nbsp;&nbsp;Pending Compliance</option>
                            <option value="FINAL NOTICE(" disabled="disabled">&nbsp;&nbsp;&nbsp;FINAL NOTICE</option>
                            <option value="FIELD INSPECTION(" disabled="disabled">&nbsp;&nbsp;&nbsp;FIELD INSPECTION</option>
                            <option value="Penalty Enforced" disabled="disabled">&nbsp;&nbsp;&nbsp;Penalty Enforced</option>
                            <option value="Case Closed: (Outlook file location) [file name]" disabled="disabled">&nbsp;&nbsp;&nbsp;Case Closed</option>
                        <option value="5">Maintenance &amp; WOs</option>
                            <option value="URGENT" disabled="disabled">&nbsp;&nbsp;&nbsp;URGENT</option>
                            <option value="48 Hours" disabled="disabled">&nbsp;&nbsp;&nbsp;48 Hours</option>
                            <option value="Routine" disabled="disabled">&nbsp;&nbsp;&nbsp;Routine</option>
                            <option value="Route" disabled="disabled">&nbsp;&nbsp;&nbsp;Route</option>
                            <option value="Return Service" disabled="disabled">&nbsp;&nbsp;&nbsp;Return Service</option>
                            <option value="Warranty WO" disabled="disabled">&nbsp;&nbsp;&nbsp;Warranty WO</option>
                            <option value="ACCEPTED(" disabled="disabled">&nbsp;&nbsp;&nbsp;ACCEPTED</option>
                            <option value="Follow Up(" disabled="disabled">&nbsp;&nbsp;&nbsp;Follow Up</option>
                        <option value="6">Customer Care &amp; Services</option>
                            <option value="Customer Service(" disabled="disabled">&nbsp;&nbsp;&nbsp;Customer Service</option>
                            <option value="Interruption(" disabled="disabled">&nbsp;&nbsp;&nbsp;Interruption</option>
                        <option value="7">Marketing</option>
                            <option value="Marketing Strategy" disabled="disabled">&nbsp;&nbsp;&nbsp;Marketing Strategy</option>
                            <option value="Response(" disabled="disabled">&nbsp;&nbsp;&nbsp;Response</option>
                        <option value="8">Transition Improvement (TI)</option>
                            <option value="Justification(" disabled="disabled">&nbsp;&nbsp;&nbsp;Justification</option>
                    </select>
                </div>
                <!------------------------------------------------>
                <div id="1hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>Category</div>
                            <select data-native-menu="false" id="syn_1" name="syn_1">
                                <option value=""></option>
                                <option value="Immediate Attention">Immediate Attention</option>
                                <option value="Correction Required">Correction Required</option>
                                <option value="Action Required">Action Required</option>
                                <option value="Assignment">Assignment</option>
                                <option value="Question">Question</option>
                                <option value="Follow Up">Follow Up</option>
                                <option value="Scheduled">Scheduled</option>
                                <option value="Suggestion">Suggestion</option>
                                <option value="Answering Service">Answering Service</option>
                                <option value="Solicitation">Solicitation</option>
                                <option value="FYI">FYI</option>
                                <option value="Translation">Translation</option>
                                <option value="Additional Note">Additional Note</option>
                                <option value="Task Request">Task Request</option>
                                <option value="Solution">Solution</option>
                                <option value="Update">Update</option>
                                <option value="Task Sent(">Task Sent</option>
                                <option value="Accepted" disabled="disabled">&nbsp;&nbsp;&nbsp;(Accepted)</option>
                                <option value="Declined" disabled="disabled">&nbsp;&nbsp;&nbsp;(Declined)</option>
                                <option value="In Progress" disabled="disabled">&nbsp;&nbsp;&nbsp;(In Progress)</option>
                                <option value="Completed" disabled="disabled">&nbsp;&nbsp;&nbsp;(Completed)</option>
                                <option value="Not Started" disabled="disabled">&nbsp;&nbsp;&nbsp;(Not Started)</option>
                                <option value="Waiting On Someone Else" disabled="disabled">&nbsp;&nbsp;&nbsp;(Waiting On Someone Else)</option>
                                <option value="Deferred" disabled="disabled">&nbsp;&nbsp;&nbsp;(Deferred)</option>
                                <option value="Extension Request">Extension Request</option>
                                <option value="Reminder(">Reminder</option>
                                <option value="Reminder(1st):" disabled="disabled">&nbsp;&nbsp;&nbsp;(1st)</option>
                                <option value="Reminder(2nd):" disabled="disabled">&nbsp;&nbsp;&nbsp;(2nd)</option>
                                <option value="Reminder(Final):" disabled="disabled">&nbsp;&nbsp;&nbsp;(Final)</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                            </select>
                    </div>
                </div>
                <div id="2hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>Category</div>
                        <select data-native-menu="false" id="syn_2" name="syn_2">
                            <option value=""></option>
                            <option value="Defective & Error(">Defective &amp; Error</option>
                            <option value="Defective &amp; Error(System)" disabled="disabled">&nbsp;&nbsp;&nbsp;(System)</option>
                            <option value="Defective &amp; Error(Software)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Software)</option>
                            <option value="Defective &amp; Error(Hardware)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Hardware)</option>
                            <option value="Defective &amp; Error(Fixture)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Fixture)</option>
                            <option value="Maintenance & Upkeep(">Maintenance &amp; Upkeep</option>
                            <option value="Maintenance &amp; Upkeep(Stationary)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Stationary)</option>
                            <option value="Maintenance &amp; Upkeep(Part)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Part)</option>
                            <option value="MEMO(">MEMO</option>
                            <option value="MEMO(Effective Immediately)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Effective Immediately)</option>
                            <option value="MEMO(Policy &amp; Procedure)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Policy &amp; Procedure)</option>
                            <option value="MEMO(Announcement)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Announcement)</option>
                            <option value="Revise & Upgrade(">Revise &amp; Upgrade</option>
                            <option value="Revise &amp; Upgrade(Policy)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Policy)</option>
                            <option value="Revise &amp; Upgrade(Procedure)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Procedure)</option>
                            <option value="Revise &amp; Upgrade(System)" disabled="disabled">&nbsp;&nbsp;&nbsp;(System)</option>
                            <option value="Revise &amp; Upgrade(Software)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Software)</option>
                            <option value="Revise &amp; Upgrade(Hardware)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Hardware)</option>
                            <option value="Revise &amp; Upgrade(Fixture)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Fixture)</option>
                            <option value="Revise &amp; Upgrade(Policy)"disabled="disabled">&nbsp;&nbsp;&nbsp;(Policy)</option>
                            <option value="Setup & Addition(">Setup &amp; Addition</option>
                            <option value="Setup &amp; Addition(Account)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Account)</option>
                            <option value="Setup &amp; Addition(System)" disabled="disabled">&nbsp;&nbsp;&nbsp;(System)</option>
                            <option value="Setup &amp; Addition(User)" disabled="disabled">&nbsp;&nbsp;&nbsp;(User)</option>
                            <option value="Setup &amp; Addition(Station)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Station)</option>
                            <option value="Setup &amp; Addition(Hardware)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Hardware)</option>
                            <option value="Setup &amp; Addition(Software)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Software)</option>
                            <option value="Setup &amp; Addition(Equipment &amp; Fixture)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Equipment &amp; Fixture)</option>
                            <option value="Training & Meeting(">Training &amp; Meeting</option>
                            <option value="Training &amp; Meeting(Procedure)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Procedure)</option>
                            <option value="Training &amp; Meeting(System)" disabled="disabled">&nbsp;&nbsp;&nbsp;(System)</option>
                            <option value="Training &amp; Meeting(Software)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Software)</option>
                            <option value="Training &amp; Meeting(Hardware)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Hardware)</option>
                            <option value="Training &amp; Meeting(Fixture)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Fixture)</option>
                            <option value="Warning &amp; Penalty">Warning &amp; Penalty</option>
                        </select>
                    </div>
                </div>
                <div id="3hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>Category</div>
                        <select data-native-menu="false" id="syn_3" name="syn_3">
                            <option value=""></option>
                            <option value="PAST DUE">PAST DUE</option>
                            <option value="Account Deficit">Account Deficit</option>
                            <option value="OVER BUDGET">OVER BUDGET</option>
                            <option value="WASTEFUL">WASTEFUL</option>
                            <option value="PENALTY:">PENALTY</option>
                            <option value="Response(">Response</option>
                            <option value="Response(3-Days)" disabled="disabled">&nbsp;&nbsp;&nbsp;(3-Days)</option>
                            <option value="Response(Delinquent)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Delinquent)</option>
                            <option value="Response(Eviction)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Eviction)</option>
                            <option value="Response(Fee &amp; Charge)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Fee &amp; Charge)</option>
                            <option value="Inquiry(">Inquiry</option>
                            <option value="Inquiry(General)" disabled="disabled">&nbsp;&nbsp;&nbsp;(General)</option>
                            <option value="Inquiry(Contact Inf)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Contact Inf)</option>
                            <option value="Inquiry(Fees)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Fees)</option>
                            <option value="Inquiry(Move-out &amp; Charges)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Move-out &amp; Charges)</option>
                            <option value="Inquiry(Report)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Report)</option>
                            <option value="PROCESSED: WO#) invoice PAID &amp; check MAILED">PROCESSED: (WO#) invoice PAID &amp; check MAILED</option>
                            <option value="Justified">Justified</option>
                            <option value="IMPOST BUDGET">IMPOST BUDGET</option>
                        </select>
                    </div>
                </div>
                <div id="4hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>Category</div>
                        <select data-native-menu="false" id="syn_4" name="syn_4">
                            <option value=""></option>
                            <option value="Claiming(">Claiming</option>
                            <option value="Claiming(URGENT)" disabled="disabled">&nbsp;&nbsp;&nbsp;(URGENT)</option>
                            <option value="Claiming(48HOURS)" disabled="disabled">&nbsp;&nbsp;&nbsp;(48HOURS)</option>
                            <option value="Claiming(Due Process)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Due Process)</option>
                            <option value="Claiming(Attentive)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Attentive)</option>
                            <option value="Claiming(Accounting)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Accounting)</option>
                            <option value="Defending(">Defending</option>
                            <option value="Defending(URGENT)" disabled="disabled">&nbsp;&nbsp;&nbsp;(URGENT)</option>
                            <option value="Defending(48HOURS)" disabled="disabled">&nbsp;&nbsp;&nbsp;(48HOURS)</option>
                            <option value="Defending(Due Process)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Due Process)</option>
                            <option value="Defending(Attentive)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Attentive)</option>
                            <option value="Defending(Accounting)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Accounting)</option>
                            <option value="Petition(30-Days & 3-Days Notice)">Petition(30-Days & 3-Days Notice)</option>
                            <option value="CORRESPONDENCE(">CORRESPONDENCE</option>
                            <option value="CORRESPONDENCE(Phone Call)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Phone Call)</option>
                            <option value="CORRESPONDENCE(Email)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Email)</option>
                            <option value="CORRESPONDENCE(Letter)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Letter)</option>
                            <option value="CORRESPONDENCE(Memo)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Memo)</option>
                            <option value="CORRESPONDENCE(Policy)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Policy)</option>
                            <option value="CORRESPONDENCE(Regulation)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Regulation)</option>
                            <option value="MOVE OUT">MOVE OUT</option>
                            <option value="MOVE IN">MOVE IN</option>
                            <option value="EVICTION">EVICTION</option>
                            <option value="ACCEPTED:(Outlook file location) – [DI Number]">ACCEPTED</option>
                            <option value="Response(">Response</option>
                            <option value="Response(Claiming)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Claiming)</option>
                            <option value="Response(Defending)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Defending)</option>
                            <option value="OFFICIAL COMMUNICATION(">OFFICIAL COMMUNICATION</option>
                            <option value="OFFICIAL COMMUNICATION(Letter)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Letter)</option>
                            <option value="OFFICIAL COMMUNICATION(Fax)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Fax)</option>
                            <option value="OFFICIAL COMMUNICATION(Email)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Email)</option>
                            <option value="Follow Up(">Follow Up</option>
                            <option value="Follow Up(Phone Call)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Phone Call)</option>
                            <option value="Follow Up(SMS)" disabled="disabled">&nbsp;&nbsp;&nbsp;(SMS)</option>
                            <option value="Follow Up(Email)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Email)</option>
                            <option value="Pending Compliance(">Pending Compliance</option>
                            <option value="Pending Compliance(Vacate Report)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Vacate Report)</option>
                            <option value="Pending Compliance(BOD Meeting)" disabled="disabled">&nbsp;&nbsp;&nbsp;(BOD Meeting)</option>
                            <option value="FINAL NOTICE(">FINAL NOTICE</option>
                            <option value="FINAL NOTICE(Letter)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Letter)</option>
                            <option value="FINAL NOTICE(Fax)"disabled="disabled">&nbsp;&nbsp;&nbsp;(Fax)</option>
                            <option value="FINAL NOTICE(Email)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Email)</option>
                            <option value="FIELD INSPECTION(">FIELD INSPECTION</option>
                            <option value="FIELD INSPECTION(Pending QC)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Pending QC)</option>
                            <option value="FIELD INSPECTION(QC Passed)" disabled="disabled">&nbsp;&nbsp;&nbsp;(QC Passed)</option>
                            <option value="FIELD INSPECTION(QC Failed)" disabled="disabled">&nbsp;&nbsp;&nbsp;(QC Failed)</option>
                            <option value="FIELD INSPECTION(QC on Hold)" disabled="disabled">&nbsp;&nbsp;&nbsp;(QC on Hold)</option>
                            <option value="Penalty Enforced">Penalty Enforced</option>
                            <option value="Case Closed: (Outlook file location) [file name]">Case Closed</option>
                        </select>
                    </div>
                </div>
                <div id="5hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>Category</div>
                        <select data-native-menu="false" id="syn_5" name="syn_5">
                            <option value=""></option>
                            <option value="URGENT">URGENT</option>
                            <option value="48 Hours">48 Hours</option>
                            <option value="Routine">Routine</option>
                            <option value="Route">Route</option>
                            <option value="Return Service">Return Service</option>
                            <option value="Warranty WO">Warranty WO</option>
                            <option value="ACCEPTED(">ACCEPTED</option>
                            <option value="ACCEPTED(00-Classify):WorkOrder Number" disabled="disabled">&nbsp;&nbsp;&nbsp;(00-Classify)</option>
                            <option value="ACCEPTED(3.1-Verify):WorkOrder Number" disabled="disabled">&nbsp;&nbsp;&nbsp;3.1-Verify)</option>
                            <option value="ACCEPTED(3.2-Pending Approval):WorkOrder Number" disabled="disabled">&nbsp;&nbsp;&nbsp;(3.2-Pending Approval)</option>
                            <option value="ACCEPTED(3.3-Assign Vendor):WorkOrder Number" disabled="disabled">&nbsp;&nbsp;&nbsp;(3.3-Assign Vendor)</option>
                            <option value="ACCEPTED(3.2-Pending Approval):WorkOrder Number" disabled="disabled">&nbsp;&nbsp;&nbsp;(3.4 Pending QC)</option>
                            <option value="Follow Up(">Follow Up</option>
                            <option value="Follow Up(Vendor)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Vendor)</option>
                            <option value="Follow Up(Tenant)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Tenant)</option>
                        </select>
                    </div>
                </div>
                <div id="6hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>Category</div>
                        <select data-native-menu="false" id="syn_6" name="syn_6">
                            <option value=""></option>
                            <option value="Customer Service(">Customer Service</option>
                            <option value="Customer Service(Owner)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Owner)</option>
                            <option value="Customer Service(Vendor)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Vendor)</option>
                            <option value="Interruption(">Interruption</option>
                            <option value="Interruption(Tenant)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Tenant)</option>
                            <option value="Interruption(Staff)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Staff)</option>
                        </select>
                    </div>
                </div>
                <div id="7hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>Category</div>
                        <select data-native-menu="false" id="syn_7" name="syn_7">
                            <option value=""></option>
                            <option value="Marketing Strategy">Marketing Strategy</option>
                            <option value="Response(">Response</option>
                            <option value="Response(Rental)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Rental)</option>
                            <option value="Response(Leasing)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Leasing)</option>
                            <option value="Response(Contract)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Contract)</option>
                            <option value="Response(Sale)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Sale)</option>
                            <option value="Response(Contract)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Contract)</option>
                            <option value="Response(Marketing)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Marketing)</option>
                            <option value="Response(Promotion)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Promotion)</option>
                            <option value="Response(Advertisement)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Advertisement)</option>
                            <option value="Response(Referral)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Referral)</option>
                        </select>
                    </div>
                </div>
                <div id="8hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>Category</div>
                        <select data-native-menu="false" id="syn_8" name="syn_8">
                            <option value=""></option>
                            <option value="Justification(">Justification</option>
                            <option value="Justification(Financial)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Financial)</option>
                            <option value="Justification(Value)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Value)</option>
                            <option value="Justification(Image)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Image)</option>
                            <option value="Justification(Preventative &amp; Protection)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Preventative &amp; Protection)</option>
                            <option value="Justification(Enforcement &amp; Regulation)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Enforcement &amp; Regulation)</option>
                            <option value="Justification(Accessibility)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Accessibility)</option>
                            <option value="Justification(Amenity &amp; Luxury):" disabled="disabled">&nbsp;&nbsp;&nbsp;(Amenity &amp; Luxury)</option>
                        </select>
                    </div>
                </div>
                <div id="9hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_9" name="syn_9">
                            <option value=""></option>
                            <option value="Accepted">(Accepted)</option>
                            <option value="Declined">(Declined)</option>
                            <option value="In Progress">(In Progress)</option>
                            <option value="Completed">(Completed)</option>
                            <option value="Not Started">(Not Started)</option>
                            <option value="Waiting On Someone Else">(Waiting On Someone Else)</option>
                            <option value="Deferred">(Deferred)</option>
                        </select>
                    </div>
                </div>
                <div id="10hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_10" name="syn_10">
                            <option value=""></option>
                            <option value="1st">(1st)</option>
                            <option value="2nd">(2nd)</option>
                            <option value="Final">(Final)</option>
                        </select>
                    </div>
                </div>
                <div id="11hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_11" name="syn_11">
                            <option value=""></option>
                            <option value="System">(System)</option>
                            <option value="Software">(Software)</option>
                            <option value="Hardware">(Hardware)</option>
                            <option value="Fixture">(Fixture)</option>
                        </select>
                    </div>
                </div>
                <div id="12hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_12" name="syn_12">
                            <option value=""></option>
                            <option value="Stationary">(Stationary)</option>
                            <option value="Part">(Part)</option>
                        </select>
                    </div>
                </div>
                <div id="13hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_13" name="syn_13">
                            <option value=""></option>
                            <option value="Effective Immediately">(Effective Immediately)</option>
                            <option value="Policy &amp; Procedure">(Policy &amp; Procedure)</option>
                            <option value="Announcement">(Announcement)</option>
                        </select>
                    </div>
                </div>
                <div id="14hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_14" name="syn_14">
                            <option value=""></option>
                            <option value="Policy">(Policy)</option>
                            <option value="Procedure">(Procedure)</option>
                            <option value="System">System)</option>
                            <option value="Software">(Software)</option>
                            <option value="Hardware">(Hardware)</option>
                            <option value="Fixture">(Fixture)</option>
                            <option value="Policy">(Policy)</option>
                        </select>
                    </div>
                </div>
                <div id="15hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_15" name="syn_15">
                            <option value=""></option>
                            <option value="(Account)">(Account)</option>
                            <option value="(System)">(System)</option>
                            <option value="(User)">(User)</option>
                            <option value="(Station)">(Station)</option>
                            <option value="(Hardware)">(Hardware)</option>
                            <option value="(Software)">(Software)</option>
                            <option value="(Equipment &amp; Fixture)">(Equipment &amp; Fixture)</option>
                        </select>
                    </div>
                </div>
                <div id="16hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_16" name="syn_16">
                            <option value=""></option>
                            <option value="Procedure">(Procedure)</option>
                            <option value="System">(System)</option>
                            <option value="Software">(Software)</option>
                            <option value="Hardware">(Hardware)</option>
                            <option value="Fixture">(Fixture)</option>
                        </select>
                    </div>
                </div>
                <div id="17hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_17" name="syn_17">
                            <option value=""></option>
                            <option value="3-Days">(3-Days)</option>
                            <option value="Delinquent">(Delinquent)</option>
                            <option value="Eviction">(Eviction)</option>
                            <option value="Fee &amp; Charge">(Fee &amp; Charge)</option>
                        </select>
                    </div>
                </div>
                <div id="18hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_18" name="syn_18">
                            <option value=""></option>
                            <option value="General">(General)</option>
                            <option value="Contact Inf">(Contact Inf)</option>
                            <option value="Fees">(Fees)</option>
                            <option value="Move-out &amp; Charges">(Move-out &amp; Charges)</option>
                            <option value="Report">(Report)</option>
                        </select>
                    </div>
                </div>
                <div id="19hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_19" name="syn_19">
                            <option value=""></option>
                            <option value="URGENT">(URGENT)</option>
                            <option value="48HOURS">(48HOURS)</option>
                            <option value="Due Process">(Due Process)</option>
                            <option value="Attentive">(Attentive)</option>
                            <option value="Accounting">(Accounting)</option>
                        </select>
                    </div>
                </div>
                <div id="20hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_20" name="syn_20">
                            <option value=""></option>
                            <option value="URGENT">(URGENT)</option>
                            <option value="48HOURS">(48HOURS)</option>
                            <option value="Due Process">(Due Process)</option>
                            <option value="Attentive">(Attentive)</option>
                            <option value="Accounting">(Accounting)</option>
                        </select>
                    </div>
                </div>
                <div id="21hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_21" name="syn_21">
                            <option value=""></option>
                            <option value="Phone Call">(Phone Call)</option>
                            <option value="Email">(Email)</option>
                            <option value="Letter">(Letter)</option>
                            <option value="Memo">(Memo)</option>
                            <option value="Policy">(Policy)</option>
                            <option value="Regulation">(Regulation)</option>
                        </select>
                    </div>
                </div>
                <div id="22hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_22" name="syn_22">
                            <option value=""></option>
                            <option value="Claiming">(Claiming)</option>
                            <option value="Defending">(Defending)</option>
                        </select>
                    </div>
                </div>
                <div id="23hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_23" name="syn_23">
                            <option value=""></option>
                            <option value="Letter">(Letter)</option>
                            <option value="Fax">(Fax)</option>
                            <option value="Email">(Email)</option>
                        </select>
                    </div>
                </div>
                <div id="24hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_24" name="syn_24">
                            <option value=""></option>
                            <option value="Phone Call">(Phone Call)</option>
                            <option value="SMS">(SMS)</option>
                            <option value="Email">(Email)</option>
                        </select>
                    </div>
                </div>
                <div id="25hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_25" name="syn_25">
                            <option value=""></option>
                            <option value="Vacate Report">(Vacate Report)</option>
                            <option value="BOD Meeting">(BOD Meeting)</option>
                        </select>
                    </div>
                </div>
                <div id="26hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_26" name="syn_26">
                            <option value=""></option>
                            <option value="Letter">(Letter)</option>
                            <option value="Fax">(Fax)</option>
                            <option value="Email">(Email)</option>
                        </select>
                    </div>
                </div>
                <div id="27hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_27" name="syn_27">
                            <option value=""></option>
                            <option value="Pending QC">(Pending QC)</option>
                            <option value="QC Passed">(QC Passed)</option>
                            <option value="QC Failed">(QC Failed)</option>
                            <option value="QC on Hold">(QC on Hold)</option>
                        </select>
                    </div>
                </div>
                <div id="28hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_28" name="syn_28">
                            <option value=""></option>
                            <option value="(00-Classify):WorkOrder Number">(00-Classify)</option>
                            <option value="(3.1-Verify):WorkOrder Number">(3.1-Verify)</option>
                            <option value="(3.2-Pending Approval):WorkOrder Number">(3.2-Pending Approval)</option>
                            <option value="(3.3-Assign Vendor):WorkOrder Number">(3.3-Assign Vendor)</option>
                            <option value="(3.2-Pending Approval):WorkOrder Number">(3.4 Pending QC)</option>
                        </select>
                    </div>
                </div>
                <div id="29hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_29" name="syn_29">
                            <option value=""></option>
                            <option value="Vendor">(Vendor)</option>
                            <option value="Tenant">(Tenant)</option>
                        </select>
                    </div>
                </div>
                <div id="30hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_30" name="syn_30">
                            <option value=""></option>
                            <option value="Owner">(Owner)</option>
                            <option value="Vendor">(Vendor)</option>
                        </select>
                    </div>
                </div>
                <div id="31hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_31" name="syn_31">
                            <option value=""></option>
                            <option value="Tenant">(Tenant)</option>
                            <option value="Staff">(Staff)</option>
                        </select>
                    </div>
                </div>
                <div id="32hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_32" name="syn_32">
                            <option value=""></option>
                            <option value="Rental">(Rental)</option>
                            <option value="Leasing">(Leasing)</option>
                            <option value="Contract">(Contract)</option>
                            <option value="Sale">(Sale)</option>
                            <option value="Contract">(Contract)</option>
                            <option value="Marketing">(Marketing)</option>
                            <option value="Promotion">(Promotion)</option>
                            <option value="Advertisement">(Advertisement)</option>
                            <option value="Referral">(Referral)</option>
                        </select>
                    </div>
                </div>
                <div id="33hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>SubCategory</div>
                        <select data-native-menu="false" id="syn_33" name="syn_33">
                            <option value=""></option>
                            <option value="Justification(Financial)">(Financial)</option>
                            <option value="Value">(Value)</option>
                            <option value="Image">(Image)</option>
                            <option value="Preventative &amp; Protection">(Preventative &amp; Protection)</option>
                            <option value="Enforcement &amp; Regulation">(Enforcement &amp; Regulation)</option>
                            <option value="Accessibility">(Accessibility)</option>
                            <option value="Amenity &amp; Luxury">(Amenity &amp; Luxury)</option>
                        </select>
                    </div>
                </div>
                <div id="34hide" style="display:none;">
                    <div data-role="fieldcontain">
                        <div id='wid50'>Assignment due date</div>
                        <input type="text" maxlength="32" size="16" id="duedate" name="duedate"/>
                    </div>
                </div>
				
                <!-- OTHER -->
				
                <div data-role="fieldcontain">
                <div id='wid50'>Property</div>
                    <input type="text" name="property" class="click" id="property" size="2" maxlength="6" style="text-transform: uppercase; display:inline"/>
                    &nbsp;&nbsp;Unit&nbsp;<input type="text" name="punit" class="click" id="punit" size="6" maxlength="15" style="display:inline;" />
                </div>
				
                <div data-role="fieldcontain">
                <div id='wid50'>Company</div>
                    <input type="text" name="cpn" class="click" id="cpn" size="35" maxlength="40" style="width:95%;"/>
                </div>

                <div data-role="fieldcontain">
                <div id='wid50'>First Name</div>
                    <input type="text" name="first name" id="fname" size="35" maxlength="40" style="width:95%;"/>
                </div>

                <div data-role="fieldcontain">
                <div id='wid50'>Last Name</div>
                    <input type="text" name="last name" id="lname" size="35" maxlength="40" style="width:95%;"/>
                </div>

                <div data-role="fieldcontain">
                    <div id='wid50'>Phone Number</div>
                    Cell&nbsp;<input type="text" name="phonenumber" class="pnumber" id="pnumber" size="20" maxlength="25" tabindex="1" placeholder="###.###.####" alt="msk2" value="CEL"/>
                </div>
				
                <div data-role="fieldcontain">
                    <div id='wid50'>&nbsp;</div>
                        <select id="phonetype" data-native-menu="false" name="phonetyp3" style="width:60px">
                            <option value="">Phone type</option>
                            <option value="HOM">Home</option>
                            <option value="WRK">Work</option>
                            <option value="OTH">Other</option>
                        </select>
						
                </div>
                <div data-role="fieldcontain">
                    <input type="text" name="other phone" class="opnumber" id="opnumber" size="20" maxlength="20" tabindex="1" placeholder="###.###.####" alt="msk" />
                </div>
				
                <div data-role="fieldcontain">
                <div id='wid50'>Comment</div>
                    <textarea cols="50" rows="6" name="comment" id="comment" value="Re:" style="width:95%;"></textarea>
                </div>

                <div data-role="fieldcontain">
                <div id='wid50'>Your Initial</div>
                    <input type="text" name="initial" class="click" id="initial" size="6" maxlength="6" style="text-transform: uppercase;"/>
                </div>

                <div data-role="fieldcontain">
                    <div id='wid50'>This is how your status will look</div>
                    <textarea cols="50" rows="6" name="message" id="fullsyntax" style="width:95%;"></textarea>
					
                </div>
                <div style="text-align:center;">Please review your status<br>and copy to your Facebook wall when it has finished.</div>
                <center>
                    <div style="width:200px;">
                        <input type="button" value="Select All" id="selectall">
                        <input type="submit" value="Post on Wall" style="background-color:green;"/>
                        <button id="resetbtn" type="reset" value="Reload Window" onclick="window.location.reload()" data-ajax="false" style="background-color:red;">Clear form</button>
                     </div>
                </center>
                <!--
                <div data-role="fieldcontain">
                    <div style="text-align:center;">Please review your status, and copy to your Facebook wall when it has finished.</div>
                </div>
                <div data-role="fieldcontain">
                        <div style="width:200px; padding-left:31%;  ">
                            <input type="button" value="Select All" id="selectall">
                        </div>
                </div>
				
                <div data-role="fieldcontain">
                    <div style="text-align:center;">and then press command/control + C to copy to wall</div>
                </div>
                <div data-role="fieldcontain">
                        <div style="width:410px; padding-left:15%; ">
                            <div style="float:left; width:200px;">
                                <input type="submit" value="Post on Wall"/>
                            </div>
                            <div style="float:right; width:200px;">
                                <button id="resetbtn" type="reset" value="Reload Window" onclick="window.location.reload()" data-ajax="false">Clear form</button>
                            </div>
                        </div>
                </div>
                -->
                    <input id="phnum" name="phnum" type="hidden" value="">
                    <input id="otnum" name="otnum" type="hidden" value="">
                <div data-role="fieldcontain">
                    <br>&nbsp;
                    <br>&nbsp;
                </div>
            </form>
            </div>
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
			
        </div>
		
    </div>
</body>
</html>
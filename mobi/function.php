<?php
    function makeLogin( $loginUrl = "", $status = 'Hello Stranger...., Please Login To Use This Apps.<br>Click on "Connect with Facebook" button' ) {
		
        $tmp = 	'
		            <center>                        <a class="btn" href="'.$loginUrl.'"><img src="mobi/images/fbconnect.png" width="160" height="35" alt="Connect your Facebook"></a>
                        <div id="status">'.$status.'</div>
		            </center>
				';
        return $tmp;
    }
	
    function buildProfile( $arrayUser = NULL ) {
        echo "buildProfile not Finish Yet";
    }
	
    function buildFriendSelectionMobile( $arrayFriends = NULL, $myID = NULL ) {
	
        $list .= '<option value="me">"My Wall"</option>';
		
        //array_multisort($arrayFriends);
		
        foreach( $arrayFriends['data'] as $friend ) {
            $list .= '<option value="'.$friend['id'].'">'.$friend["name"].'</option>';
        }
		
        $tmp = 	'
                    <div data-role="fieldcontain">
                        <div id="wid50">Post to Wall</div>
                            <select id="friendList" name="friend" data-native-menu="false">
                                '.$list.'
                            </select>
                    </div>                ';
		
        return $tmp;
    }
	
	
    function buildFriendSelection( $arrayFriends = NULL, $myID = NULL ) {
	
        $list .= '<option value="me">"My Wall"</option>';
		
        //array_multisort($arrayFriends);
		
        foreach( $arrayFriends['data'] as $friend ) {
            $list .= '<option value="'.$friend['id'].'">'.$friend["name"].'</option>';
        }
		
        $tmp = 	'
                    <div id="postto" class="blu_10">
                        <div class="blu_3">Post to Wall </div>
                        <div class="blu_4">
                            <select id="friendList" name="friend">
                                '.$list.'
                            </select>                        </div>
					</div>
                ';
		
        return $tmp;
    }
	
    // Master Cat.
    function buildMasterCategori() {
        return '
                <div id="choosesyntax" class="blu_10">
                    <div class="blu_3">Syntax selection</div>
                    <div class="blu_4">
                        <select id="syntaxcat" name="syntax">
                            <option value=""></option>
                            <option value="1">General Posting</option>
                                <option value="Immediate Attention" disabled="disabled">&nbsp;&nbsp;&nbsp;Immediate Attention</option>
                                <option value="Correction Required" disabled="disabled">&nbsp;&nbsp;&nbsp;Correction Required</option>
                                <option value="Action Required" disabled="disabled">&nbsp;&nbsp;&nbsp;Action Required</option>
                                <option value="Assignment"disabled="disabled">&nbsp;&nbsp;&nbsp;Assignment</option>
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
                            <option value="3">Account Processing</option>
                            <option value="4">Declared Issues</option>
                            <option value="5">Maintenance &amp; WOs</option>

                            <option value="6">Customer Care &amp; Services</option>
                            <option value="7">Marketing</option>
                            <option value="8">Transition Improvement (TI)</option>
                    </select>
                    </div>
                </div>

                ';
    }
	
    // Sub Cat General Posting
    function select() {
        return 	'            <div id="1hide" style="display:hidden;" class="blu_10">            <div class="blu_3">Category</div>
            <div class="blu_6">
                <div class="blu_5">
                <select id="syn_1" name="syn_1">
                    <option value=""></option>
                    <option value="Immediate Attention">Immediate Attention</option>                    <option value="Correction Required">Correction Required</option>
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
                    <option value="Additional Note">Additional Note</option>                    <option value="Task Request">Task Request</option>
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
                    <option value="Reminder(Final):" disabled="disabled">&nbsp;&nbsp;&nbsp;(Final)</option>                    <option value="Approved">Approved</option>
                    <option value="Rejected">Rejected</option>
                </select>
                </div>
            </div>
        </div>
        <div class="blu_10" id="2hide" style="display:hidden;">
            <div class="blu_3">Category</div>
            <div class="blu_4">
              <select id="syn_2" name="syn_2" >
                <option  value=""></option>
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
          <div class="blu_10" id="3hide" style="display:hidden;">
            <div class="blu_3">Category</div>
            <div class="blu_4">
              <select id="syn_3" name="syn_3" >
                <option  value=""></option>
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
          <div class="blu_10" id="4hide" style="display:hidden;">
            <div class="blu_3">Category</div>
            <div class="blu_4">
              <select id="syn_4" name="syn_4" >
                <option  value=""></option>
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
          <div class="blu_10" id="5hide" style="display:hidden;">
            <div class="blu_3">Category</div>
            <div class="blu_4">
              <select id="syn_5" name="syn_5"  >
                <option  value=""></option>
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
          <div class="blu_10" id="6hide" style="display:hidden;">
            <div class="blu_3">Category</div>
            <div class="blu_4">
              <select id="syn_6" name="syn_6"  >
                <option  value=""></option>
                <option value="Customer Service(">Customer Service</option>
                <option value="Customer Service(Owner)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Owner)</option>
                <option value="Customer Service(Vendor)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Vendor)</option>
                <option value="Interruption(">Interruption</option>
                <option value="Interruption(Tenant)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Tenant)</option>
                <option value="Interruption(Staff)" disabled="disabled">&nbsp;&nbsp;&nbsp;(Staff)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="7hide" style="display:hidden;">
            <div class="blu_3">Category</div>
            <div class="blu_4">
              <select id="syn_7" name="syn_7"  >
                <option  value=""></option>
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
          <div class="blu_10" id="8hide" style="display:hidden;">
            <div class="blu_3">Category</div>
            <div class="blu_4">
              <select id="syn_8" name="syn_8"  >
                <option  value=""></option>
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
          <div class="blu_10" id="9hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_9" name="syn_9" multiple>
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
          <div class="blu_10" id="10hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_10" name="syn_10" multiple>
                <option value="1st">(1st)</option>
                <option value="2nd">(2nd)</option>
                <option value="Final">(Final)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="11hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_11" name="syn_11" multiple>
                <option  value=""></option>
                <option value="System">(System)</option>
                <option value="Software">(Software)</option>
                <option value="Hardware">(Hardware)</option>
                <option value="Fixture">(Fixture)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="12hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_12" name="syn_12" multiple>
                <option value="Stationary">(Stationary)</option>
                <option value="Part">(Part)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="13hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_13" name="syn_13" multiple>
                <option value="Effective Immediately">(Effective Immediately)</option>
                <option value="Policy &amp; Procedure">(Policy &amp; Procedure)</option>
                <option value="Announcement">(Announcement)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="14hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_14" name="syn_14" multiple>
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
          <div class="blu_10" id="15hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_15" name="syn_15" multiple>
                <option value="(Account)" >(Account)</option>
                <option value="(System)" >(System)</option>
                <option value="(User)" >(User)</option>
                <option value="(Station)" >(Station)</option>
                <option value="(Hardware)" >(Hardware)</option>
                <option value="(Software)" >(Software)</option>
                <option value="(Equipment &amp; Fixture)" >(Equipment &amp; Fixture)</option>
				
              </select>
            </div>
          </div>
          <div class="blu_10" id="16hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_16" name="syn_16" multiple>
                <option value="Procedure">(Procedure)</option>
                <option value="System">(System)</option>
                <option value="Software">(Software)</option>
                <option value="Hardware">(Hardware)</option>
                <option value="Fixture">(Fixture)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="17hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_17" name="syn_17" multiple>
                <option value="3-Days">(3-Days)</option>
                <option value="Delinquent">(Delinquent)</option>
                <option value="Eviction">(Eviction)</option>
                <option value="Fee &amp; Charge">(Fee &amp; Charge)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="18hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_18" name="syn_18" multiple>
                <option value="General">(General)</option>
                <option value="Contact Inf">(Contact Inf)</option>
                <option value="Fees">(Fees)</option>
                <option value="Move-out &amp; Charges">(Move-out &amp; Charges)</option>
                <option value="Report">(Report)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="19hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_19" name="syn_19" multiple>
                <option value="URGENT">(URGENT)</option>
                <option value="48HOURS">(48HOURS)</option>
                <option value="Due Process">(Due Process)</option>
                <option value="Attentive">(Attentive)</option>
                <option value="Accounting">(Accounting)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="20hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_20" name="syn_20" multiple>
                <option value="URGENT">(URGENT)</option>
                <option value="48HOURS">(48HOURS)</option>
                <option value="Due Process">(Due Process)</option>
                <option value="Attentive">(Attentive)</option>
                <option value="Accounting">(Accounting)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="21hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_21" name="syn_21" multiple>
                <option value="Phone Call">(Phone Call)</option>
                <option value="Email">(Email)</option>
                <option value="Letter">(Letter)</option>
                <option value="Memo">(Memo)</option>
                <option value="Policy">(Policy)</option>
                <option value="Regulation">(Regulation)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="22hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_22" name="syn_22" multiple>
                <option value="Claiming">(Claiming)</option>
                <option value="Defending">(Defending)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="23hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_23" name="syn_23" multiple>
                <option value="Letter">(Letter)</option>
                <option value="Fax">(Fax)</option>
                <option value="Email">(Email)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="24hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_24" name="syn_24" multiple>
                <option value="Phone Call">(Phone Call)</option>
                <option value="SMS">(SMS)</option>
                <option value="Email">(Email)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="25hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_25" name="syn_25" multiple>
                <option value="Vacate Report">(Vacate Report)</option>
                <option value="BOD Meeting">(BOD Meeting)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="26hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_26" name="syn_26" multiple>
                <option value="Letter">(Letter)</option>
                <option value="Fax">(Fax)</option>
                <option value="Email">(Email)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="27hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_27" name="syn_27" multiple>
                <option value="Pending QC">(Pending QC)</option>
                <option value="QC Passed">(QC Passed)</option>
                <option value="QC Failed">(QC Failed)</option>
                <option value="QC on Hold">(QC on Hold)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="28hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_28" name="syn_28" multiple>
                <option value="(00-Classify):WorkOrder Number" >(00-Classify)</option>
                <option value="(3.1-Verify):WorkOrder Number" >(3.1-Verify)</option>
                <option value="(3.2-Pending Approval):WorkOrder Number" >(3.2-Pending Approval)</option>
                <option value="(3.3-Assign Vendor):WorkOrder Number" >(3.3-Assign Vendor)</option>
                <option value="(3.2-Pending Approval):WorkOrder Number" >(3.4 Pending QC)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="29hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_29" name="syn_29" multiple>
                <option value="Vendor">(Vendor)</option>
                <option value="Tenant">(Tenant)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="30hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_30" name="syn_30" multiple>
                <option value="Owner">(Owner)</option>
                <option value="Vendor">(Vendor)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="31hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_31" name="syn_31" multiple>
                <option value="Tenant">(Tenant)</option>
                <option value="Staff">(Staff)</option>
              </select>
            </div>
          </div>
          <div class="blu_10" id="32hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_32" name="syn_32" multiple>
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
          <div class="blu_10" id="33hide" style="display:hidden;">
            <div class="blu_3">Subcategory</div>
            <div class="blu_4">
              <select id="syn_33" name="syn_33" multiple>
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
          <div class="blu_10" id="34hide" style="display:hidden;">
            <div class="blu_3">Assignment due date</div>
            <div class="blu_4">
              <input type="text" maxlength="32" size="16" id="duedate" name="duedate"/>
            </div>
          </div>
				';
	}

	// iOS 
	function mobileSelect() {
		
		return 	'
				<div id="choosesyntax" class="blu_10">
				<div class="blu_3">Syntax selection</div>
				<div class="blu_4">
				
					<a tabindex="0" href="#category" class="fg-button fg-button-icon-right ui-widget ui-state-default ui-corner-all" id="hierarchy"><span class="ui-icon ui-icon-triangle-1-s"></span>Please Select</a>
					<div id="news-items" class="hide">
						<ul>
							<li><a href="#">General Posting</a>
							<ul>
								<li><a href="#">Immediate Attention</a></li>
								<li><a href="#">Correction Required</a></li>
								<li><a href="#">Action Required</a></li>
								<li><a href="#">Assignment</a></li>
								<li><a href="#">Question</a></li>
								<li><a href="#">Follow Up</a></li>
								<li><a href="#">Scheduled</a></li>
								<li><a href="#">Suggestion</a></li>
								<li><a href="#">Answering Service</a></li>
								<li><a href="#">Solicitation</a></li>
								<li><a href="#">FYI</a></li>
								<li><a href="#">Translation</a></li>
								<li><a href="#">Additional Note</a></li>
								<li><a href="#">Task Request</a></li>
								<li><a href="#">Solution</a></li>
								<li><a href="#">Update</a></li>
								<li><a href="#">Task Sent</a></li>
								<li><a href="#">Extension Request</a></li>
								<li><a href="#">Reminder</a></li>

								<li><a href="#">Approved</a></li>
								<li><a href="#">Rejected</a></li>
							</ul>
							</li>
							
							<li>Immediate Attention</li>
								<li>Correction Required</li>
								<li>Action Required</li>
								<li>Assignment</li>
								<li>Question</li>
								<li>Follow Up</li>
								<li>Scheduled</li>
								<li>Suggestion</li>
								<li>Answering Service</li>
								<li>Solicitation</li>
								<li>FYI</li>
								<li>Translation</li>
								<li>Additional Note</li>
								<li>Task Request</li>
								<li>Solution</li>
								<li>Update</li>
								<li>Task Sent</li>
								<li>Extension Request</li>
								<li>Reminder</li>

								<li>Approved</li>
								<li>Rejected</li>
							</li>
							<li><a href="#">Account Processing</a></li>
							<li><a href="#">Declared Issues</a></li>
							<li><a href="#">Maintenance &amp; WOs</a></li>
							<li><a href="#">Customer Care &amp; Services</a></li>
							<li><a href="#">Marketing</a></li>
							<li><a href="#">Transition Improvement (TI)</a></li>
						</ul>
						
					</div>
					
					</div>
				</div>
				';
	}
	
	function others() {
		return 	'
		<div id="prop" class="blu_10">
            <div class="blu_3">Property</div>
            <div class="blu_4">
              <div class="blu_1 prefix after_0">
                <input type="text" name="property" class="click" id="property" size="2" maxlength="6" style="text-transform: uppercase;" />
              </div>
              <div style="width: 37px;" class="blu_1 prefix suffix">Unit</div>
              <div class="blu_2 prefix">
                <input type="text" name="punit" class="click" id="punit" size="6" maxlength="15" />
              </div>
            </div>
          </div>
          <div id="company" class="blu_10">
            <div class="blu_3">Company</div>
            <div class="blu_4">
              <input type="text" name="cpn" class="click" id="cpn" size="35" maxlength="40" />
            </div>
          </div>
          <div id="firstname" class="blu_10">
            <div class="blu_3">First Name</div>
            <div class="blu_4">
              <input type="text" name="first name" id="fname" size="35" maxlength="40" />
            </div>
          </div>
          <div id="lastname" class="blu_10">
            <div class="blu_3">Last Name</div>
            <div class="blu_4">
              <input type="text" name="last name" id="lname" size="35" maxlength="40" />
            </div>
          </div>
          <div id="phonenumber" class="blu_10">
            <div class="blu_3">Phone Number</div>
            <div class="blu_4">
              <div id="phone-oth-wrap">
                <span>Cell&nbsp;&nbsp;&nbsp;</span>
                <input type="text" name="phonenumber" class="pnumber" id="pnumber" size="20" alt="mks2" maxlength="25" value=""/>
              </div>
              <div id="phone-type-wrap" style="margin-top:10px;">
                <select id="phonetype" name="phonetyp3" style="width: 105px">
                	<option value="" >Phone type</option>	
                  <option value="HOM" >Home</option>
                  <option value="WRK">Work</option>
                  <option value="OTH">Other</option>
                </select>
                <input type="text" name="other phone" class="opnumber" id="opnumber" alt="msk3" size="20" maxlength="20" />
              </div>
            </div>
          </div>
          <div id="phonenumber" class="blu_10">
            <div class="blu_3">Comment</div>
            <div class="blu_4">
              <textarea cols="35" rows="4" name="comment" id="comment" value="Re:"></textarea>
            </div>
          </div>
          <div id="yourinitial" class="blu_10">
            <div class="blu_3">Your Initial</div>
            <div class="blu_4">
              <input type="text" name="initial"  class="click" id="initial" size="6" maxlength="6" style="text-transform: uppercase;"/>
            </div>
          </div>
          <div id="preview" class="blu_10">
            <div class="blu_3">This is how your status will look</div>
            <div class="blu_4">
              <textarea cols="35" rows="4" name="message" id="fullsyntax"></textarea>
              <div id="desc-inputno" class="desc-input hide">Please review your status, and copy to your Facebook wall when it has finished.</div>
              <div class="selectllbtn">
                <input type="button"  value="Select All " id="selectall">
                and then press command/control + C to copy to wall </div>
            </div>
          </div>
          <div id="submitsyntax" class="blu_10">
            <div class="blu_3">&nbsp;</div>
            <div class="blu_4  mb1">
              <input type="submit" value="Post on Wall"/>
              <button id="resetbtn" type="reset" value="Reload Window"
onclick="window.location.reload()" data-ajax="false">Clear form</button>
            </div>
          </div>
				';
	}
?>
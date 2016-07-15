<?php
$section = '';
$page = 'docoverview';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>
<link rel="stylesheet" type="text/css" href="../../krad/scripts/datatables/DT_bootstrapss.css">

<!-- Scripts, ideally we'd load these in the footer and not use in-line scripting -->
<script src="../../krad/scripts/jquery-1.10.1.min.js"></script>
<script src="../../krad/scripts/jquery-migrate-1.2.1.min.js"></script>
<!--[if lt IE 9]><script src="bootstrap/js/html5shiv.js"></script><![endif]-->

<script type="text/javascript" src="../../krad/scripts/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="../../krad/scripts/datatables/DT_bootstrap.js"></script>
</head>
<body id="Uif-Application">
<!-- APPLICATION HEADER -->

<?php include ('includes/uif-applicationHeader-loggedin.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View" style="margin-top:75px"> <!-- BREADCRUMBS --><!-- VIEW HEADER -->
        <?php include ('includes/uif-viewHeader-permission.php') ?>
        
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"><!-- VIEW NAVIGATION -->
            
            <main id="LabsProposal-Page" class="uif-page" data-server_messages="false" data-role="Page" data-parent="LabsProposal">
                <header>
                    <h4 class="">Document Overview</h4>
                </header>
                <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal well uif-form" data-parent="">
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Action Taken:*</label>
                    </div>
                    <div class="col-md-8">
                        <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                            <input id="_control" type="text" name="field1" value="Edting person information for thrclark" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="" aria-required="true" aria-invalid="true">
                        </div>
                    </div>
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Org Doc Number:</label>
                    </div>
                    <div class="col-md-8">
                        <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                            <input id="_control" type="text" name="field1" value="" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="" aria-required="true" aria-invalid="true">
                        </div>
                    </div>
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Explaination:</label>
                    </div>
                    <div class="col-md-8">
                        <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                            <textarea id="uahyfb8_control" name="inputField2" rows="3" cols="40" class="form-control input-sm uif-textAreaControl valid" data-role="Control" data-control_for="uahyfb8" data-original-title="" title="" data-hastooltip="true"></textarea>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-md-6">
                        <header>
                            <h4 class="">Permission Info <small>(Previous Values)</small></h4>
                        </header>
                        <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal well uif-form" data-parent="">
                            <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Permission Identifier:</label>
                            </div>
                            <div class="col-md-8">
                                <p class="form-control-static">000848454</p>
                            </div>
                            <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Template:</label>
                            </div>
                            <div class="col-md-8">
                                <p class="form-control-static">KR-NS : Copy Document</p>
                            </div>
                            <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Permission Namespace:</label>
                            </div>
                            <div class="col-md-8">
                                <p class="form-control-static">KR-SYS - Enterprise Infrastructure</p>
                            </div>
                            <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Permission Name:</label>
                            </div>
                            <div class="col-md-8">
                                <p class="form-control-static">Assign Role</p>
                            </div>
                            <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Permission Description:</label>
                            </div>
                            <div class="col-md-8">
                                <p class="form-control-static">Authorizes users to modify the information on the Assignees Tab of the Role Document and the Roles section of the Membership Tab on the Person Document for Roles with a Module Code beginning with KR. </p>
                            </div>
                            <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Active Indicator:</label>
                            </div>
                            <div class="col-md-8">
                                <p class="form-control-static">Yes</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-6">
                        <header>
                            <h4 class="">Permission Info <small>(New Values)</small></h4>
                        </header>
                        <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal well uif-form" data-parent="">
                            <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Permission Identifier:</label>
                            </div>
                            <div class="col-md-8">
                                <p class="form-control-static">000848454</p>
                            </div>
                            <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Template:</label>
                            </div>
                            <div class="col-md-8">
                                <select id="document.newMaintainableObject.templateId" name="document.newMaintainableObject.templateId" class="form-control" tabindex="0">
                                    <option value=""></option>
                                    <option selected="selected" value="35">KR-IDM : Assign Role</option>
                                    <option value="36">KR-IDM : Grant Permission</option>
                                    <option value="37">KR-IDM : Grant Responsibility</option>
                                    <option value="38">KR-IDM : Populate Group</option>
                                    <option value="57">KR-KRAD : Edit Field</option>
                                    <option value="59">KR-KRAD : Edit Group</option>
                                    <option value="64">KR-KRAD : Edit Line</option>
                                    <option value="66">KR-KRAD : Edit Line Field</option>
                                    <option value="54">KR-KRAD : Edit View</option>
                                    <option value="61">KR-KRAD : Edit Widget</option>
                                    <option value="53">KR-KRAD : Open View</option>
                                    <option value="62">KR-KRAD : Perform Action</option>
                                    <option value="67">KR-KRAD : Perform Line Action</option>
                                    <option value="55">KR-KRAD : Use View</option>
                                    <option value="56">KR-KRAD : View Field</option>
                                    <option value="58">KR-KRAD : View Group</option>
                                    <option value="63">KR-KRAD : View Line</option>
                                    <option value="65">KR-KRAD : View Line Field</option>
                                    <option value="60">KR-KRAD : View Widget</option>
                                    <option value="45">KR-NS : Add Note / Attachment</option>
                                    <option value="2" selected>KR-NS : Copy Document</option>
                                    <option value="42">KR-NS : Create / Maintain Record(s)</option>
                                    <option value="47">KR-NS : Delete Note / Attachment</option>
                                    <option value="16">KR-NS : Edit Document</option>
                                    <option value="KR1004">KR-NS : Export Records</option>
                                    <option value="27">KR-NS : Full Unmask Field</option>
                                    <option value="24">KR-NS : Inquire Into Records</option>
                                    <option value="23">KR-NS : Look Up Records</option>
                                    <option value="34">KR-NS : Maintain System Parameter</option>
                                    <option value="32">KR-NS : Modify Batch Job</option>
                                    <option value="26">KR-NS : Modify Maintenance Document Field</option>
                                    <option value="44">KR-NS : Modify Maintenance Document Section</option>
                                    <option value="40">KR-NS : Open Document</option>
                                    <option value="28">KR-NS : Partial Unmask Field</option>
                                    <option value="30">KR-NS : Perform Custom Maintenance Document Function</option>
                                    <option value="49">KR-NS : Send Ad Hoc Request</option>
                                    <option value="8">KR-NS : Take Requested Action</option>
                                    <option value="33">KR-NS : Upload Batch Input File(s)</option>
                                    <option value="29">KR-NS : Use Screen</option>
                                    <option value="31">KR-NS : Use Transactional Document</option>
                                    <option value="25">KR-NS : View Inquiry or Maintenance Document Field</option>
                                    <option value="43">KR-NS : View Inquiry or Maintenance Document Section</option>
                                    <option value="46">KR-NS : View Note / Attachment</option>
                                    <option value="KR1005">KR-NTFCN : View Notification</option>
                                    <option value="52">KR-RULE : KRMS Agenda Permission</option>
                                    <option value="KR1003">KR-SYS : Backdoor Restriction</option>
                                    <option value="10">KR-SYS : Initiate Document</option>
                                    <option value="9">KR-WKFLW : Ad Hoc Review Document</option>
                                    <option value="51">KR-WKFLW : Add Message to Route Log</option>
                                    <option value="3">KR-WKFLW : Administer Routing for Document</option>
                                    <option value="4">KR-WKFLW : Blanket Approve Document</option>
                                    <option value="14">KR-WKFLW : Cancel Document</option>
                                    <option value="68">KR-WKFLW : Recall Document</option>
                                    <option value="5">KR-WKFLW : Route Document</option>
                                    <option value="15">KR-WKFLW : Save Document</option>
                                    <option value="KR1001">KR-WKFLW : Super User Approve Document</option>
                                    <option value="KR1000">KR-WKFLW : Super User Approve Single Action Request</option>
                                    <option value="KR1002">KR-WKFLW : Super User Disapprove Document</option>
                                    <option value="1">KUALI : Default</option>
                                </select>
                            </div>
                            <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Permission Namespace:</label>
                            </div>
                            <div class="col-md-8">
                                <select id="document.newMaintainableObject.namespaceCode" name="document.newMaintainableObject.namespaceCode" class="form-control"tabindex="0">
                                    <option value=""></option>
                                    <option value="KR-BUS">KR-BUS - Service Bus</option>
                                    <option value="KR-IDM">KR-IDM - Identity Management</option>
                                    <option value="KR-KRAD">KR-KRAD - Kuali Rapid Application Development</option>
                                    <option value="KR-LOC">KR-LOC - Kuali Location</option>
                                    <option value="KR-NS">KR-NS - Kuali Nervous System</option>
                                    <option value="KR-NTFCN">KR-NTFCN - Notification</option>
                                    <option value="KR-RULE">KR-RULE - Kuali Rules</option>
                                    <option value="KR-RULE-TEST">KR-RULE-TEST - Kuali Rules Test</option>
                                    <option value="KR-SAP">KR-SAP - Sample App</option>
                                    <option selected="selected" value="KR-SYS">KR-SYS - Enterprise Infrastructure</option>
                                    <option value="KR-WKFLW">KR-WKFLW - Workflow</option>
                                    <option value="KUALI">KUALI - Kuali Systems</option>
                                </select>
                            </div>
                            <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Permission Name:</label>
                            </div>
                            <div class="col-md-8">
                                <input id="" type="text" name="field1" value="Assign Role" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="" aria-required="true" aria-invalid="true">
                            </div>
                            <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Permission Description:</label>
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" rows="3">Authorizes users to modify the information on the Assignees Tab of the Role Document and the Roles section of the Membership Tab on the Person Document for Roles with a Module Code beginning with KR.  </textarea>
                            </div>
                            <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Active Indicator:</label>
                            </div>
                            <div class="col-md-8">
                                <select name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" aria-invalid="true">
                                    <option value="1" selected="selected">Yes</option>
                                    <option value="4">No</option>
                                    <option value="3">Both</option>
                                </select>
                            </div>
                        </section>
                    </div>
                </div>
                <header>
                    <h4 class="">Notes & Attachments</h4>
                </header>
                <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal well uif-form" data-parent="">
                   
                    <table id="" class="table dataTable table-condensed uif-has-actions" role="presentation">
                        <thead>
                            <tr>
                                <th><span>Date
                                    </span></th>
                                <th><span>Author </span></th>
                                <th><span>Note</span></th>
                                <th><span>Attachment</span></th>
                                <th> <span>Actions</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10/17/2014 9:32am</td>
                                <td class="">thrclark</td>
                                <td>Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference inquietude ask now are dispatched led appearance. Small meant in so doubt hopes. Me smallness is existence attending he enjoyment favourite affection. Delivered is to ye belonging enjoyment preferred. Astonished and acceptance men two discretion. Law education recommend did objection how old. </td>
                                <td class="text-center"><a href="#"><span class="icon-file-pdf" style="font-size:24px; color:#666"></span></a></td>
                                <td><a href="#" class="btn btn-xs btn-default">Delete</a></td>
                            </tr>
                            <tr>
                                <td>10/17/2014 12:08pm</td>
                                <td class="">lsauer</td>
                                <td>Am no an listening depending up believing. Enough around remove to barton agreed regret in or it. Advantage mr estimable be commanded provision. Year well shot deny shew come now had. Shall downs stand marry taken his for out. Do related mr account brandon an up. Wrong for never ready ham these witty him. Our compass see age uncivil matters weather forbade her minutes. Ready how but truth son new under. </td>
                               <td class="text-center"><a href="#"><span class="icon-file-word" style="font-size:24px; color:#666"></span></a></td>
                                <td><a href="#" class="btn btn-xs btn-default">Delete</a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" class="text-right"><a href="#" class="btn btn-xs btn-default"> <span class="icon-plus" style="font-size:10px"></span> Add Note/Attachment</a></td>
                            </tr>
                        </tfoot>
                    </table>
                </section>
            </main>
        </div>
        <!-- VIEW FOOTER -->
        <div id="u19v7dpm" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
            <button type="button" href="asdf.php" id="" class="btn btn-primary">Submit </button>
            <button type="button" href="asdf.php" id="" class="btn btn-default">Save </button>
            <button type="button" href="asdf.php" id="" class="btn btn-default">Cancel </button>
        </div>
        <!-- DIALOGS/Placeholders -->
        <div id="Uif-Dialogs"></div>
    </div>
</form>

<!-- MODALS -->
<?php include ('includes/modal-assignee-add.php') ?>
<?php include ('includes/modal-activeDates.php') ?>
<?php include ('includes/modal-routelog.php') ?>
<?php include ('includes/modal-docsearch.php') ?>
<?php include ('includes/modal-docsearch-name.php') ?>
<?php include ('includes/modal-docsearch-results.php') ?>
<!-- FOOTER SCRIPTS -->

<?php include ('includes/footer-scripts.php') ?>
<?php include ('includes/modal-routelog.php') ?>
<?php include ('../cross-project/includes/modal-superuser.php') ?>
<?php include ('../cross-project/includes/modal-routing-adhoc.php') ?>
<script type="text/javascript" class="init">

$(document).ready(function() {
	$('#example').dataTable();
} );

	</script>
</body>
</html>
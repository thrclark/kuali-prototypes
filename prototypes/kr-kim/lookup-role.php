<?php
$section = '';
$page = '';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>

<!-- Scripts, ideally we'd load these in the footer and not use in-line scripting -->
<script src="../../krad/scripts/jquery-1.10.1.min.js"></script>
<script src="../../krad/scripts/jquery-migrate-1.2.1.min.js"></script>
<!--[if lt IE 9]><script src="bootstrap/js/html5shiv.js"></script><![endif]-->

<script type="text/javascript" src="../../krad/scripts/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="../../krad/scripts/datatables/DT_bootstrap.js"></script>
<style type="text/css">
@media (min-width:979px) {
.sidebar:not(:first-child) {
	border-left: 1px solid #ddd;
	padding-left: 10px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	min-height:500px;
}
}

legend { color:#999}
</style>
</head>
<body id="Uif-Application">

<!-- APPLICATION HEADER -->

<?php include ('includes/uif-applicationHeader-loggedin.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View" style="margin-top:75px"> <!-- BREADCRUMBS --><!-- VIEW HEADER --> 
        
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"><!-- VIEW NAVIGATION -->
            
            <main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left:;">
                <header class="clearfix uif-header-contentWrapper" style="margin-bottom:0px">
                    <div class="uif-header-inner" style="margin-bottom:0px">
                        <h2 class="uif-headerText"> <span class="uif-headerText-span"> Role Lookup </span> </h2>
                        <p>Enter any known search criteria:</p>
                        <div class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                            <button class="btn btn-default btn-xs"> <span aria-hidden="true" class="icon-plus"></span> Create New Role</button>
                        </div>
                    </div>
                </header>
                <div class="form-horizontal" role="form">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="well uif-form">
                                <section class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset>
                                                <legend class="col-md-11">Role</legend>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Role Name: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Role ID: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Role Type: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <select name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" aria-invalid="true">
                                                                <option selected="selected" value=""></option>
                                                                <option value="2">KR-IDM:Derived Role: Principal</option>
                                                                <option value="17">KR-NS:Campus</option>
                                                                <option value="45">KR-NS:Derived Role: Permission (Edit Document)</option>
                                                                <option value="60">KR-NS:Derived Role: Permission (Open Document)</option>
                                                                <option value="66">KR-SYS:Derived Role: Permission (Initiate Document)</option>
                                                                <option value="42">KR-WKFLW:Derived Role: Action Request</option>
                                                                <option value="76">KR-WKFLW:Derived Role: Permission (Route Document)</option>
                                                                <option value="43">KR-WKFLW:Derived Role: Route Log</option>
                                                                <option value="1">KUALI:Default</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Role Namespace: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <select name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" aria-invalid="true">
                                                                <option selected="selected" value=""></option>
                                                                <option value="KR-BUS">KR-BUS - Service Bus</option>
                                                                <option value="KR-IDM">KR-IDM - Identity Management</option>
                                                                <option value="KR-KRAD">KR-KRAD - Kuali Rapid Application Development</option>
                                                                <option value="KR-LOC">KR-LOC - Kuali Location</option>
                                                                <option value="KR-NS">KR-NS - Kuali Nervous System</option>
                                                                <option value="KR-NTFCN">KR-NTFCN - Notification</option>
                                                                <option value="KR-RULE">KR-RULE - Kuali Rules</option>
                                                                <option value="KR-RULE-TEST">KR-RULE-TEST - Kuali Rules Test</option>
                                                                <option value="KR-SAP">KR-SAP - Sample App</option>
                                                                <option value="KR-SYS">KR-SYS - Enterprise Infrastructure</option>
                                                                <option value="KR-WKFLW">KR-WKFLW - Workflow</option>
                                                                <option value="KUALI">KUALI - Kuali Systems</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Active?: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <select name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" aria-invalid="true">
                                                                <option selected="selected" value=""></option>
                                                                <option value="1" selected="selected">Yes</option>
                                                                <option value="4">No</option>
                                                                <option value="3">Both</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <legend class="col-md-11">Permissions</legend>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Permission Namespace: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <select name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" aria-invalid="true">
                                                                <option selected="selected" value=""></option>
                                                                <option value="KR-BUS">KR-BUS - Service Bus</option>
                                                                <option value="KR-IDM">KR-IDM - Identity Management</option>
                                                                <option value="KR-KRAD">KR-KRAD - Kuali Rapid Application Development</option>
                                                                <option value="KR-LOC">KR-LOC - Kuali Location</option>
                                                                <option value="KR-NS">KR-NS - Kuali Nervous System</option>
                                                                <option value="KR-NTFCN">KR-NTFCN - Notification</option>
                                                                <option value="KR-RULE">KR-RULE - Kuali Rules</option>
                                                                <option value="KR-RULE-TEST">KR-RULE-TEST - Kuali Rules Test</option>
                                                                <option value="KR-SAP">KR-SAP - Sample App</option>
                                                                <option value="KR-SYS">KR-SYS - Enterprise Infrastructure</option>
                                                                <option value="KR-WKFLW">KR-WKFLW - Workflow</option>
                                                                <option value="KUALI">KUALI - Kuali Systems</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Permission Name: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Permission Template Namespace: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <select name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" aria-invalid="true">
                                                                <option selected="selected" value=""></option>
                                                                <option value="KR-BUS">KR-BUS - Service Bus</option>
                                                                <option value="KR-IDM">KR-IDM - Identity Management</option>
                                                                <option value="KR-KRAD">KR-KRAD - Kuali Rapid Application Development</option>
                                                                <option value="KR-LOC">KR-LOC - Kuali Location</option>
                                                                <option value="KR-NS">KR-NS - Kuali Nervous System</option>
                                                                <option value="KR-NTFCN">KR-NTFCN - Notification</option>
                                                                <option value="KR-RULE">KR-RULE - Kuali Rules</option>
                                                                <option value="KR-RULE-TEST">KR-RULE-TEST - Kuali Rules Test</option>
                                                                <option value="KR-SAP">KR-SAP - Sample App</option>
                                                                <option value="KR-SYS">KR-SYS - Enterprise Infrastructure</option>
                                                                <option value="KR-WKFLW">KR-WKFLW - Workflow</option>
                                                                <option value="KUALI">KUALI - Kuali Systems</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Permission Template Name: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <legend class="col-md-11">Membership</legend>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Member Principal Name: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Group Namespace: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <select name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" aria-invalid="true">
                                                                <option selected="selected" value=""></option>
                                                                <option value="KR-BUS">KR-BUS - Service Bus</option>
                                                                <option value="KR-IDM">KR-IDM - Identity Management</option>
                                                                <option value="KR-KRAD">KR-KRAD - Kuali Rapid Application Development</option>
                                                                <option value="KR-LOC">KR-LOC - Kuali Location</option>
                                                                <option value="KR-NS">KR-NS - Kuali Nervous System</option>
                                                                <option value="KR-NTFCN">KR-NTFCN - Notification</option>
                                                                <option value="KR-RULE">KR-RULE - Kuali Rules</option>
                                                                <option value="KR-RULE-TEST">KR-RULE-TEST - Kuali Rules Test</option>
                                                                <option value="KR-SAP">KR-SAP - Sample App</option>
                                                                <option value="KR-SYS">KR-SYS - Enterprise Infrastructure</option>
                                                                <option value="KR-WKFLW">KR-WKFLW - Workflow</option>
                                                                <option value="KUALI">KUALI - Kuali Systems</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Member Group Name: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Role Namespace: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Member Role Name: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset>
                                                <legend class="col-md-11">Responsibility</legend>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Responsibility Namespace: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <select name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" aria-invalid="true">
                                                                <option selected="selected" value=""></option>
                                                                <option value="KR-BUS">KR-BUS - Service Bus</option>
                                                                <option value="KR-IDM">KR-IDM - Identity Management</option>
                                                                <option value="KR-KRAD">KR-KRAD - Kuali Rapid Application Development</option>
                                                                <option value="KR-LOC">KR-LOC - Kuali Location</option>
                                                                <option value="KR-NS">KR-NS - Kuali Nervous System</option>
                                                                <option value="KR-NTFCN">KR-NTFCN - Notification</option>
                                                                <option value="KR-RULE">KR-RULE - Kuali Rules</option>
                                                                <option value="KR-RULE-TEST">KR-RULE-TEST - Kuali Rules Test</option>
                                                                <option value="KR-SAP">KR-SAP - Sample App</option>
                                                                <option value="KR-SYS">KR-SYS - Enterprise Infrastructure</option>
                                                                <option value="KR-WKFLW">KR-WKFLW - Workflow</option>
                                                                <option value="KUALI">KUALI - Kuali Systems</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Responsibility Name: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Responsibility Template Namespace: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <select name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" aria-invalid="true">
                                                                <option selected="selected" value=""></option>
                                                                <option value="KR-BUS">KR-BUS - Service Bus</option>
                                                                <option value="KR-IDM">KR-IDM - Identity Management</option>
                                                                <option value="KR-KRAD">KR-KRAD - Kuali Rapid Application Development</option>
                                                                <option value="KR-LOC">KR-LOC - Kuali Location</option>
                                                                <option value="KR-NS">KR-NS - Kuali Nervous System</option>
                                                                <option value="KR-NTFCN">KR-NTFCN - Notification</option>
                                                                <option value="KR-RULE">KR-RULE - Kuali Rules</option>
                                                                <option value="KR-RULE-TEST">KR-RULE-TEST - Kuali Rules Test</option>
                                                                <option value="KR-SAP">KR-SAP - Sample App</option>
                                                                <option value="KR-SYS">KR-SYS - Enterprise Infrastructure</option>
                                                                <option value="KR-WKFLW">KR-WKFLW - Workflow</option>
                                                                <option value="KUALI">KUALI - Kuali Systems</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 uif-cssGridLabelCol">
                                                        <label for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Responsibility Template Name: </label>
                                                    </div>
                                                    <div class="col-md-6 asdf">
                                                        <div class="uif-inputField">
                                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </section>
                                <div class="text-center uif-form-buttonbar"> <a href="lookup-role-results.php" class="btn btn-primary uif-action" data-role="Action" data-toggle="" data-target="" data-submit_data="" data-dismiss=""> Search </a> <a href="#" class="btn btn-default uif-action" data-role="Action" data-toggle="" data-target="" data-submit_data="" data-dismiss=""> Clear </a> <a href="#" class="btn btn-default uif-action" data-role="Action" data-toggle="" data-target="" data-submit_data="" data-dismiss=""> Cancel </a> </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- VIEW FOOTER --> 
        
        <!-- DIALOGS/Placeholders -->
        <div id="Uif-Dialogs"></div>
    </div>
</form>

<!-- MODALS --><!-- FOOTER SCRIPTS --> 

<script type="text/javascript" src="../../themes/bootstrap/scripts/bootstrap.js"></script> 
<script type="text/javascript" src="../../plugins/scrollto/jquery.scrollTo-1.4.6.js"></script> 
<script type="text/javascript" src="../../plugins/jqform/jquery.form-3.31.0.js"></script> 
<script type="text/javascript" src="../../plugins/globalize/globalize.js"></script> 
<script type="text/javascript" src="../../plugins/menu/krad.navigationMenu.js"></script> 
<script type="text/javascript" src="../../plugins/menu/krad.tabMenu.js"></script> 
<!--<script type="text/javascript" src="../../plugins/jgrowl/jquery.jgrowl.js"></script> --> 
<script type="text/javascript" src="../../plugins/textpopout/krad.textareaPopout.js"></script> 
<script type="text/javascript" src="../../plugins/cookie/jquery.cookie.js"></script> 
<script type="text/javascript" src="../../plugins/watermark/jquery.watermark.js"></script> 
<script type="text/javascript" src="../../plugins/countdown/jquery.countdown.js"></script> 
<!--<script type="text/javascript" src="../../plugins/blockUI/jquery.blockUI.js"></script> --> 
<script type="text/javascript" src="../../plugins/color/jquery.color.js"></script> 
<script type="text/javascript" src="../../plugins/json/jquery.json-2.2.js"></script> 
<script type="text/javascript" src="../../plugins/datatables/jquery.dataTables.rowGrouping.js"></script> 
<script type="text/javascript" src="../../plugins/datatables/TableTools.js"></script> 
<script type="text/javascript" src="../../plugins/datatables/ZeroClipboard.js"></script> 
<script type="text/javascript" src="../../plugins/fancybox/jquery.fancybox.js"></script> 
<script type="text/javascript" src="../../plugins/fancybox/jquery.fancybox.pack.js"></script> 
<script type="text/javascript" src="../../plugins/prettify/prettify.js"></script> 
<script type="text/javascript" src="../../plugins/easydrag/jquery.easydrag.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.variables.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.response.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.actions.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.dirty.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.lookup.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.message.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.url.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.validate.js"></script> 
<script type="text/javascript" src="../../plugins/easing/jquery.easing-1.3.pack.js"></script> 
<script type="text/javascript" src="../../themes/kboot/scripts/less-1.5.0.min.js"></script> 
<script type="text/javascript" src="../../themes/kboot/scripts/global.functions.js"></script> 

<!-- MiniColors --> 
<script src="../../plugins/jquery-minicolors-master/jquery.minicolors.js"></script> 
</body>
</html>
<?php
$section = '';
$page = 'actionlist';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kuali :: Fluid Application Header</title>
<meta name="viewport" content="width=device-width, user-scalable=no">
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>

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
                <header class="clearfix uif-header-contentWrapper">
                    <div class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                        <h2 class="uif-headerText"><span class="uif-headerText-span" style="margin-bottom:14px"> Search Results <small style="color:#666">for 'Role Type = KR-NS:Derived Role: Permission (Edit Document)' and <a href="#" class="refineSearch"> 2 more criteria</a></small></span></h2>
                        <p> <a href="lookup-role.php"> New Search</a> | <a href="#" class="refineSearch"> Refine Search </a></p>
                    </div>
                </header>
                <div class="form-horizontal" role="form" style="display:none">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="well well-sm uif-form">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <h4 style="margin-top:0px"> Refine Search</h4>
                                    </div>
                                    <div class="col-md-6 text-right"><a href="#" class="hideRefine" style="text-decoration:none"><span style="font-size: 16px; color: #999; text-decoration: none" class="icon-cancel-circle"></span></a></div>
                                </div>
                                <hr>
                                <section class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix" data-parent="">
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
                                                                <option value=""></option>
                                                                <option value="2">KR-IDM:Derived Role: Principal</option>
                                                                <option value="17">KR-NS:Campus</option>
                                                                <option value="45" selected="selected">KR-NS:Derived Role: Permission (Edit Document)</option>
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
                                                                <option value=""></option>
                                                                <option value="KR-BUS">KR-BUS - Service Bus</option>
                                                                <option value="KR-IDM">KR-IDM - Identity Management</option>
                                                                <option value="KR-KRAD">KR-KRAD - Kuali Rapid Application Development</option>
                                                                <option value="KR-LOC" selected="selected">KR-LOC - Kuali Location</option>
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
                         
                            <div class="well well-sm text-center uif-form-buttonbar"> <a href="#" class="btn btn-primary uif-action" data-role="" data-toggle="" data-target="" data-submit_data="" data-dismiss=""> Refine Search </a> <a class="btn btn-default" href="#">Clear</a> </div>
                        </div>   </div>
                    </div>
                </div>
                <table class="table table-condensed table-smaller-text table-bordered" id="example" data-mode="stack">
                    <thead>
                        <tr>
                            <th> <span>Role Type Name</span></th>
                            <th> <span>Namespace</span></th>
                            <th> <span>Role Name</span></th>
                            <th> <span>Description</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uif-featured"><a href="#">Rice Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">EDO CANDIDATE</a></td>
                            <td><a href="#">DossierID<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">EDO<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">EDO REVIEWER</a></td>
                            <td><a href="#">Reviewer Role<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">EDO<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">EDO GUEST</a></td>
                            <td><a href="#">DossierID<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">EDO<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">EDO CANDIDATE DELEGATE</a></td>
                            <td><a href="#">Candidate Delegate Role<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">EDO<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">EDO ADMINISTRATOR</a></td>
                            <td><a href="#">Administrator<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">EDO<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">EDO COMMITTEE CHAIR</a></td>
                            <td><a href="#">Review Committee Chair Role<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">EDO<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">EDO SUPERUSER</a></td>
                            <td><a href="#">SuperUser Role<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">EDO<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">EDO CHAIR DELEGATE</a></td>
                            <td><a href="#">Committee Chair Delegate Role<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">EDO<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">FAR DELEGATE</a></td>
                            <td><a href="#">Delegate Role<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">FAR<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">WorkflowBlanketApproverRuleChangeRole</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Client Application Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Admin</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">FAR<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Department Admin</a></td>
                            <td><a href="#">FAR Department Role<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">FAR<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Payment Detail Full ID Viewers</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PDP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Multi Organization Invoicer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-AR<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Reviewer Omit Initiator</a></td>
                            <td><a href="#">Exclude Single Actor Separation Of Duties<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-VND<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Moving Reimbursement Reviewer</a></td>
                            <td><a href="#">Campus<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">User Reviewer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Payment Reason Reviewer</a></td>
                            <td><a href="#">Payment Reason<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Sensitive Related Document Initiator Or
                                Reviewer</a></td>
                            <td><a href="#">Derived Role: Purchasing&nbsp;Document<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>A role that derives the users who
                                initiated or received a workflow action request for a sensitive KFS-PURAP
                                document.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Active Faculty or Staff</a></td>
                            <td><a href="#">Derived Role: Employee<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>A role that uses the Affiliation
                                Type and Employee Status on a Principal record to determine if a user is an
                                active faculty or staff employee. These users can initiate some KFS-PURAP
                                documents and inquire into certain KFS screens.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Active Employee &amp; Financial System User</a></td>
                            <td><a href="#">Derived Role: Employee<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>A role that uses the Employee
                                Status (A,L or P) along with the presence of the KFS-SYS User role to
                                determine that a given Principal represents an employee with KFS access.
                                These users are allowed to be fiscal Officers on Accounts.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Active Professional Employee</a></td>
                            <td><a href="#">Derived Role: Employee<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>A role that uses the Employee
                                Status (A,L or P) and Employee Type (P) to determine that a given Principal
                                represents a professional staff employee. These users are allowed to be
                                Account Supervisors or Account Managers on Accounts.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Active Professional Employee &amp; Financial
                                System User</a></td>
                            <td><a href="#">Derived Role: Employee<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>A role that uses the Employee
                                Status (A,L or P) and Employee Type (P), along with the presence of the
                                KFS-SYS User role to determine that a given Principal represents a
                                professional staff employee with KFS access. These users are allowed to be
                                fiscal Officers on Accounts.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Technical Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>A technical administrator that is
                                specific to the KFS system. This role has no inherent permissions or
                                responsibilities.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Access Proposal Person Institutional Salaries</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Access Proposal Person Institutional
                                Salaries</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Accounts Payable Processor</a></td>
                            <td><a href="#">Payment Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Accounts Payable users who can
                                initiate Payment Requests and Credit Memo documents. They also have several
                                permissions related to processing these document types and receive workflow
                                action requests for them.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Add Address Book</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Add Address Book</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">OSP Maintainer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Additional maintenance permissions
                                needed by OSP Administrators</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Address Book Maintainer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Address Book Maintainer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Payee ACH Accounts Administrator</a></td>
                            <td><a href="#">Payee ACH Account<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PDP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Administration staff who can view
                                and update Payee ACH Account records and the legacy history of a certain ACH
                                Transaction Type.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">All Unit Administrators</a></td>
                            <td><a href="#">Derived Role: All Award Unit Administrators<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>All Award Unit Administrators</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">All Unit Administrators</a></td>
                            <td><a href="#">Derived Role: All Institutional Proposal Unit Administrators<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>All Institutional Proposal Unit
                                Administrators</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">All Past Approvers</a></td>
                            <td><a href="#">Derived Role: All Past Approvers<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>All Past Approvers</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">All Unit Administrators</a></td>
                            <td><a href="#">Derived Role: All Proposal Unit Administrators<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>All Proposal Unit Administrators</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Regional Budget Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>An optional role created to receive
                                action requests for Budget Adjustment documents at the Organization route
                                Node. Intended to receive only requests associated with regional campus
                                charts and organizations.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-BC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>An optional role created to receive
                                action requests for Budget Adjustment documents at the Organization route
                                Node. Intended to receive only requests associated with regional campus
                                charts and organizations.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">University Administration Budget Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>An optional role created to receive
                                action requests for Budget Adjustment documents at the Organization Route
                                Node. Intended to receive requests for the top level chart and organization
                                (thus receiving all Budget Adjustment documents).</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Accounting Reviewer</a></td>
                            <td><a href="#">Organization: Always Hierarchical, Document Type &amp; Accounting<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>An optional role that allows users
                                to receive workflow action requests for documents of a specified type that
                                contain accounts belonging to a specified chart and organization (including
                                the organization hierarchy) and within a certain dollar amount or involving a
                                specified override code.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Organization Reviewer</a></td>
                            <td><a href="#">Organization: Always Hierarchical &amp; Document Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>An optional role that allows users
                                to receive workflow action requests for documents of a specified type that
                                include a specified chart and organization (including the organization
                                hierarchy).,</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Anatomical Substances Notification</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Anatomical Substances Notification</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Anatomical Substances Notification</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Anatomical Substances Notification
                                Unit Based role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Application Administrator</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Application Administrator</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">approver</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>approver</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">SR-E-Initiator-2-SOC</a></td>
                            <td><a href="#">Document Type (Permission)<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">SIS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Authorizes the initiation of the SIS
                                schedule of classes mass update document</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">SY-CAR-E-Initiator-1</a></td>
                            <td><a href="#">Document Type (Permission)<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">SIS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Authorizes the initiation of the
                                SIS.SY.CAR.NewCourseDocument and SIS.SY.CAR.CourseChangeDocument</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Award Budget Administrator</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AB<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Award Budget Administrator - the
                                role grants permissions to manage any award budget at OSP level</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Award Budget Aggregator</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AB<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Award Budget Aggregator - the role
                                grants permissions to create and maintain award budget at department level</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Award Budget Approver</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AB<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Award Budget Approver - the role
                                grants permissions to edit and approve award budget</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Award Budget Modifier</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AB<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Award Budget Modifier - the role
                                grants permissions to modify or view award budget at departmental level</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Award Budget Viewer</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AB<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Award Budget Viewer - the role
                                grants permissions to view award budget at departmental level</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Investigators</a></td>
                            <td><a href="#">Derived Role: Award Investigators<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Award Investigator Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Award Modifier</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Award Modifier</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Award Unassigned</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Award Unassigned</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Award Viewer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Award Viewer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Accounts Receivable Lockbox Manager</a></td>
                            <td><a href="#">Organization<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Central Accounts Receivable staff
                                that receive workflow action requests for Cash Control and Lockbox documents.
                                They can also use the Electronic Fund Transfer screen and claim those funds
                                using a Cash Control document.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Budget Reviewer</a></td>
                            <td><a href="#">Chart<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Central administration users
                                charged with reviewing Purchase Order documents that exceed an account's
                                sufficient funds balance.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Asset Processor</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Central Capital Assets staff
                                capable of applying asset payments, using KFS-CAB and adding negative
                                payments. This role contains permissions to modify restricted asset fields
                                and to override the defined capitalization threshold.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Asset Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Central Capital Assets staff
                                capable of taking restricted actions on Assets, including retiring or
                                transferring non-moveable assets.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Contracts &amp; Grants Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Central contract and grant staff
                                that have special permissions related to Effort Certification. They can
                                override the edit that prevents transferring salary for an open effort
                                reporting period and receive workflow action requests for Effort
                                Certification Recreates.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Contracts &amp; Grants Processor</a></td>
                            <td><a href="#">Contracts &amp; Grants Responsibility<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Central contract and grant staff
                                that receive workflow action requests for transactions involving grant
                                accounts. They can view Research Risk information on Proposal documents,
                                establish cost share sub-accounts and modify the object codes on Salary Expense
                                Transfer documents.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Treasury Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Central electronic payment claim
                                users who can also update bank codes.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">COI Administrator</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-COIDISCLOSURE<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>COI Administrator</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">COI Reporter</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-COIDISCLOSURE<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>COI Reporter</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">COI Reviewer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-COIDISCLOSURE<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>COI Reviewer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Committee Administrator</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-COMMITTEE<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Committee Administrator</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Contact Person</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Contact Person</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Contract Manager</a></td>
                            <td><a href="#">Contract Manager<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Contract Managers review and
                                approve Purchase Order documents. A Purchase Order is assigned to a given
                                Contract Manager for their review and approval.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Create Proposal Log</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Create Proposal Log</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Create Temporary Proposal Log</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Create Temporary Proposal Log</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">DP CRM Data Manager</a></td>
                            <td><a href="#">Derived Role: Data Manager<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">DP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Data Provisioning CRM Data Manager
                                Derived Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">DP Data Manager</a></td>
                            <td><a href="#">Derived Role: DP Data Manager<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">DP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Data Provisioning Data Manager
                                Derived Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Chart Manager</a></td>
                            <td><a href="#">Chart<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Defines users responsible for
                                managing the chart data for a given Chart of Accounts code. They may initiate
                                Global Object Code and Organization Reversion maintenance documents and
                                modify the Campus and Organization Plant Chart Code and Account on Organization
                                documents.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Delete Proposal</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Delete Proposal Permission</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Barcode Inventory Processor</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-CAM<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Departmental users who can initiate
                                the barcode upload process.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Departments Awards Viewer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Departments Awards Viewer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Unit Administrator</a></td>
                            <td><a href="#">Derived Role - Unit Administrator<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Derived role based on Unit</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Negotiation Unit Administrator</a></td>
                            <td><a href="#">Derived Role: Negotiation Unit Administrator<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">NEGOTIATION<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Derived Role for Negotiation:Unit
                                Administrator type code 7 or 8</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">PDAttachmentEditor</a></td>
                            <td><a href="#">Derived Role - PDAttachmentEditor<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Derived role from attachment editor
                                on proposal development</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">PDNoteEditor</a></td>
                            <td><a href="#">Derived Role - PDNoteEditor<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Derived role from note editor on
                                proposal development</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Proposal Log PI</a></td>
                            <td><a href="#">Derived Role - Proposal Log PI<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Derived role from PI on Proposal Log</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">PostPDSubmitEditor</a></td>
                            <td><a href="#">Derived Role - PostPDSubmitEditor<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Derived role from post submit editor
                                on proposal development</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Unit Aggregator</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>DO NOT USE!!!!!</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">KEM Fiscal Officer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Fiscal Officer KEMID</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">FOUNDATION RELATIONS CONTACT</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>FOUNDATION RELATIONS CONTACT</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Funding Source Monitor</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Funding Source Monitor</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Grants Maintainer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Grants Maintainer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">COI Maintainer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-COIDISCLOSURE<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Grants the ability to maintain all
                                sorts of COI-related artifacts</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Maintain COI Questionnaire</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-COIDISCLOSURE<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Grants the ability to maintain COI
                                questionnaires.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Maintain IACUC Questionnaire</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Grants the ability to maintain IACUC
                                questionnaires.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Maintain IRB Questionnaire</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-QUESTIONNAIRE<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Grants the ability to maintain irb
                                questionnaires.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Maintain Proposal Questionnaire</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-QUESTIONNAIRE<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Grants the ability to maintain
                                proposal questionnaires.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Maintain Questionnaire</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-QUESTIONNAIRE<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Grants the ability to maintain
                                questionnaire.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Help Desk</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Help Desk</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Help Desk Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Help Desk users who can modify
                                person and role records</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Human Embryonic Notification</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Human Embryonic Notification</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Human Embryonic Notification</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Human Embryonic Notification</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IACUC Administrator</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IACUC Administrator</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IACUC Online Reviewer</a></td>
                            <td><a href="#">Derived Role: IACUC Online Reviewer<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IACUC Online Reviewer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IACUC Protocol Aggregator</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IACUC Protocol Aggregator</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IACUC Protocol Creator</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IACUC Protocol Creator</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IACUC Protocol Deleter</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IACUC Protocol Deleter</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IACUCWorkflowApprover</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IACUC Protocol document workflow
                                approver</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IACUC Protocol Unassigned</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IACUC Protocol Unassigned - no
                                permissions</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IACUC Protocol Viewer</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IACUC Protocol Viewer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IACUC Reviewer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IACUC Reviewer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Source Document Router</a></td>
                            <td><a href="#">Derived Role: Purchasing&nbsp;Document<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Identifies the user who routed the
                                source document (Requisition) for a KFS-PURAP document.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Organization Reversion Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-COA<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Identifies users who are not chart
                                managers but require access to Organization Reversion.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Blanket Approver</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Identifies users who are not
                                members of the KFS-SYS Manager role but require blanket approval authority.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Investigators</a></td>
                            <td><a href="#">Derived Role: Institutional Proposal Investigators<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Institutional Proposal Investigator
                                Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IRB Intake</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Intake role for Protocols submitted
                                to IRB</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Intellectual Property Notification</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Intellectual Property Notification</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Intellectual Property Notification</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Intellectual Property Notification
                                Unit Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">International Collaboration Notification</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>International Collaboration
                                Notification</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">International Collaboration Notification</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>International Collaboration
                                Notification</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IRB Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IRB Administrator</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IRBApprover</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IRB Approver</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IRB Maintainer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IRB Maintainer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IRB Reviewer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IRB Reviewer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IRB Member</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IU IRB Member Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Unit Administrator Advanced</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IU IRB Privileged Unit Administrator
                                Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">HSO Staff</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IU IRB Staff Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Unit Administrator</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IU IRB Unit Administrator Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Study Manager / Correspondent</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IU Miscellaneous Non-Protocol
                                Personnel Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">ORC Other Advanced</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IU ORC Other Advanced Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">ORC Other</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IU ORC Other Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IUF ACCOUNTING ROLE</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IUF Accounting</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IUF ADMIN ROLE</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IUF Admin</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IUF ADMIN SIGNERS ROLE</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IUF Admin Signers</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IUF DIRECTOR OF ACCOUNTING ROLE</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IUF Director of Accounting</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IUF DONOR RELATIONS INITIATORS ROLE</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IUF Donor Relations Initiators</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IUF INVESTMENT ACCOUNTING ROLE</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IUF Investment Accounting</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IUF KEM EXCEPTION ROLE</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IUF KEM Exception</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IUF KEM PARAMETERS ROLE</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IUF KEM Parameters</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IUF KEM REPORTS ROLE</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IUF KEM Reports</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IUF KEM USER ROLE</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IUF KEM User</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IUF KEM USER SUPERVISOR ROLE</a></td>
                            <td><a href="#">Derived Role - IUFKEM User Supervisor<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>IUF KEM User Supervisor</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">KC Superuser</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>KC Superuser role for administration
                                access</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">KC System Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>KC System Administrator role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Award Budget Maintainer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AB<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Maintain Award Budget - the role
                                grants permissions to modify and submit award budget at departmental level</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Institutional Proposal Maintainer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Maintain Institutional Proposals</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Intellectual Property Review Maintainer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Maintain Intellectual Property
                                Review</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Maintain Unit</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Maintain Unit</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Modify All Dev Proposals</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Modify All Dev Proposals</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Modify all IACUC Protocols</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Modify all IACUC Protocols</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Modify all Protocols</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Modify all Protocols</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Modify IACUC Protocols</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Modify IACUC Protocols</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Modify Organizations</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Modify Organizations</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Modify Proposal Log</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Modify Proposal Log</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Modify Sponsor Template</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Modify Sponsor Template</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Time And Money Modifier</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-T<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Modify Time And Money Document</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Client Application Rice Data Manager</a></td>
                            <td><a href="#">Namespace Role<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Namespace routing role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">KEM Note Maintainer Role</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Note Maintainer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">OSP Approver</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Office of Sponsored Projects
                                Approver</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IRB Online Reviewer</a></td>
                            <td><a href="#">Derived Role: IRB Online Reviewer<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Online Reviewers</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">OSP Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-ADM<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>OSP Administrator</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">OSP Viewer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>OSP Viewer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Compliance Staff</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Permission Group for Compliance</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">KEM Manager-Primary</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Primary manager KEMID</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">KEM Supervisor-Primary</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Primary Supervisor KEMID</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Aggregator</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Proposal Aggregator</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Budget Creator</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Proposal Budget Creator</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">COI</a></td>
                            <td><a href="#">Derived Role - COI<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Proposal Co-Investigator</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Proposal Creator</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Proposal Creator</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">CustomReviewer</a></td>
                            <td><a href="#">Derived Role - KeyPerson<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Proposal Custom Reviewer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">DepartmentReviewer</a></td>
                            <td><a href="#">Derived Role - KeyPerson<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Proposal Departmental Reviewer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Investigators</a></td>
                            <td><a href="#">Derived Role: Investigators<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Proposal Development Investigators
                                Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">KP</a></td>
                            <td><a href="#">Derived Role - KeyPerson<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Proposal Key Persons</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Narrative Writer</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Proposal Narrative Writer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Proposal Submission</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-ADM<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Proposal Submission</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Viewer</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Proposal Viewer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Protocol Aggregator</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Protocol Aggregator</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Protocol Creator</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Protocol Creator</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Protocol Deleter</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Protocol Deleter</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Protocol Unassigned</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Protocol Unassigned - no permissions</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Protocol Viewer</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Protocol Viewer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Asset Retirement Reviewer</a></td>
                            <td><a href="#">Campus<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-CAM<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Purchasing staff that review Asset
                                Retirement documents.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Disbursement Voucher Purchase Order Vendor
                                Reviewer</a></td>
                            <td><a href="#">Campus<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Purchasing staff that review
                                Disbursement Vouchers using Purcher Order Vendors.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Tax Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Represents a central tax area that
                                receives workflow action requests for DVs, Payment Requests, and POs
                                involving payments to non-resident aliens or employees. They can also edit
                                the Tax tabs on the DV and Payment Request documents.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Exception Resolver</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KHR<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Resolves documents which go into
                                exception routing</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Disbursement Voucher Separation&nbsp;Of Duties Reviewer</a></td>
                            <td><a href="#">Exclude Payee Separation&nbsp;of Duties<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Reviewers for Disbursement Voucher
                                where the Payee has approved the document.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Award Notice Recipient</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for additional recipients of
                                Award Notice Notifications</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">CRM Maintainer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">DP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for Data Provisioning CRM
                                Maintenance</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">DM Maintainer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">DP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for Data Provisioning Data
                                Manager Maintenance</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">DS Maintainer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">DP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for Data Provisioning Data
                                Steward Maintenance</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">DP Core Entity Maintainer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">DP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for Data Provisioning Entity
                                Maintenance</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">EIG Admin Role</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">DP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for EIG Admins to modify Data
                                Provisioning data</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IUF Scholarship Reimbursement Initiators</a></td>
                            <td><a href="#">Document Type (Permission)<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for initiating IUF Scholarship
                                Reimbursements</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Maintain Sponsor Hierarchy</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for maintaing sponsor hierarchy
                                data.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Modify Training</a></td>
                            <td><a href="#">View Edit Mode<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for maintaining training and
                                person training</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Run Award Reports</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for run award report</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Run Committee Reports</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for run committee report</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Run Dev Budget Reports</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for run development budget
                                report</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Run Dev Proposal Reports</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for run development proposal
                                report</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Run Global Reports</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for run global report</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Maintain Custom Reports</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for run maintain custom report</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Run Person Reports</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for run person report</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Run Protocol Reports</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for run protocol report</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Run Rolodex Reports</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for run rolodex report</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Run Sponsor Reports</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for run sponsor report</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Run Unit Reports</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for run unit report</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Run User Reports</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for run user report</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">TREA.CAM Maintainer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for TREA CAM Mapping
                                Maintenance</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Global Delegate Users</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-COA<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role for users authorized to create
                                global delegate docs. It is assumed this role will exist temporarily.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">RASD Reporting Staff</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role granting read-only access to KC
                                Reporting Team members</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Award Attachments Maintainer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role grants permission to add, view
                                or delete any Attachment in an Award</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Award Attachments Viewer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role grants permission to view any
                                Attachment in an Award</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Role Maintenance</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role Maintenance</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Active IACUC Committee Member on Protocol</a></td>
                            <td><a href="#">Derived Role: Active IACUC Committee Member on Protocol<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role members are derived from active
                                committee members on protocol.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Active IACUC Committee Member on Scheduled
                                Date</a></td>
                            <td><a href="#">Derived Role: Active IACUC Committee Member on Scheduled Date<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role members are derived from active
                                committee members on scheduled date.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Active Committee Member On Iacuc Protocol</a></td>
                            <td><a href="#">Derived Role: Active Committee Member On Iacuc Protocol<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role members are derived from active
                                committee members on the protocol.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Active Committee Member On Protocol</a></td>
                            <td><a href="#">Derived Role: Active Committee Member On Protocol<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role members are derived from active
                                committee members on the protocol.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Active Committee Member</a></td>
                            <td><a href="#">Derived Role: Active Committee Member<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role members are derived from active
                                committee members on the systems current date.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Active IACUC Committee Member</a></td>
                            <td><a href="#">Derived Role: Active IACUC Committee Member<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role members are derived from active
                                committee members.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Coi Disclosure Reviewer</a></td>
                            <td><a href="#">Derived Role: Coi Disclosure Reviewer<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-COIDISCLOSURE<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role members are derived from
                                reviewers assigned to a coi disclosure.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Active Committee Member On Scheduled Date</a></td>
                            <td><a href="#">Derived Role: Active Committee Member on Scheduled Date<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role members are derived from the
                                active committee members on a particular schedule date.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Active Committee Member On Scheduled Date</a></td>
                            <td><a href="#">Derived Role: Active Committee Member on Scheduled Date<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-COMMITTEE<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role members are derived from the
                                active committee members on a particular schedule date.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">COI Approver</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-COIDISCLOSURE<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role similar to COI Reviewer with
                                some added limited admin functionality</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">GroupBlanketApproverRole</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role that allows members to blanket
                                approve group changes.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">ParameterLookupRole</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role that allows members to use the
                                Parameter Lookup Screen.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Capital Asset Year End Document Reviewer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role that receives action requests
                                for Year End document types YEGE and YEDI that use a capital object code.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Maintain Award Report Tracking</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Role to maintain award report
                                tracking records.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">KEM Manager-Secondary</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Secondary Manager KEMID</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">KEM Supervisor-Secondary</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">IUF-ENDOW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Secondary Supervisor KEMID</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">CTC Staff Basic</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Setting up CTC Submit to Sponsor
                                Permission</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Space Notification</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Space Notification</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Sponsor Maintainer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Sponsor Maintainer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Subaward Requisitioner Review Approver</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SUBAWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Subaward requisitioner review
                                approver Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Requisitioner</a></td>
                            <td><a href="#">Derived Role: Requisitioner<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SUBAWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Subaward Requisitioner Role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Technical Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">DP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Technical Administrator for Data
                                Provisioning.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Template Viewer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-AWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Template Viewer</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">User</a></td>
                            <td><a href="#">Financial System User<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The basic role that grants users
                                access to KFS. It gives users the ability to initiate most documents and use
                                inquiries and search screens. Users are qualified by namespace, chart and
                                organization. If these fields are not defined the chart and organization are
                                inherited from the Department ID on the users' Principal record.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Affiliate</a></td>
                            <td><a href="#">Financial System Affiliate<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The basic role which grants
                                university affiliates access to KFS. It gives users the ability to initiate
                                most documents and use inquiries and search screens. Users are qualified by
                                namespace, chart and organization; chart and organization must be specified
                                for membership in the role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Faculty</a></td>
                            <td><a href="#">Derived Role: Protocol Affiliate Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Faculty Affiliate role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Faculty</a></td>
                            <td><a href="#">Derived Role: Protocol Affiliate Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Faculty Affiliate role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Negotiation Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-NEGOTIATION<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Negotiation Administrator role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">COI</a></td>
                            <td><a href="#">Derived Role: Negotiation Investigators<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-NEGOTIATION<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Negotiation Co-Investigator role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Negotiation Creator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-NEGOTIATION<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Negotiation Creator role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Investigators</a></td>
                            <td><a href="#">Derived Role: Negotiation Investigators<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-NEGOTIATION<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Negotiation Investigators role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">KP</a></td>
                            <td><a href="#">Derived Role: Negotiation Investigators<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-NEGOTIATION<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Negotiation Key Person role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">PI</a></td>
                            <td><a href="#">Derived Role - PI<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Negotiation Principal
                                Investigator role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">PI</a></td>
                            <td><a href="#">Derived Role: Negotiation Investigators<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-NEGOTIATION<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Negotiation Principle
                                Investigator role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Negotiator</a></td>
                            <td><a href="#">Derived Role: Negotiation Negotiator<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-NEGOTIATION<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Negotiator role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Non-Faculty</a></td>
                            <td><a href="#">Derived Role: Protocol Affiliate Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Non-Faculty Affiliate role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Non-Faculty</a></td>
                            <td><a href="#">Derived Role: Protocol Affiliate Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Non-Faculty Affiliate role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Organization Correspondent</a></td>
                            <td><a href="#">Derived Role: IRB Correspondent<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Organization Correspondent role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Affiliate</a></td>
                            <td><a href="#">Derived Role: Protocol Affiliate Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Affiliate role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Affiliate</a></td>
                            <td><a href="#">Derived Role: Protocol Affiliate Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Affiliate role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">COI</a></td>
                            <td><a href="#">Derived Role: Protocol Personnel<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Co-Investigator role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">COI</a></td>
                            <td><a href="#">Derived Role: Protocol Personnel<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Co-Investigator role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">CA</a></td>
                            <td><a href="#">Derived Role: Protocol Personnel<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Correspondent
                                Administrator role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">CA</a></td>
                            <td><a href="#">Derived Role: Protocol Personnel<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Correspondent
                                Administrator role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">CRC</a></td>
                            <td><a href="#">Derived Role: Protocol Personnel<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Correspondent CRC role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">CRC</a></td>
                            <td><a href="#">Derived Role: Protocol Personnel<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Correspondent CRC role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Faculty Supervisor</a></td>
                            <td><a href="#">Derived Role: Protocol Affiliate Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Faculty Supervisor
                                role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Faculty Supervisor</a></td>
                            <td><a href="#">Derived Role: Protocol Affiliate Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Faculty Supervisor
                                role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">PI</a></td>
                            <td><a href="#">Derived Role: Protocol Personnel<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Principal Investigator
                                role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">PI</a></td>
                            <td><a href="#">Derived Role: Protocol Personnel<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Principal Investigator
                                role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Student Investigator</a></td>
                            <td><a href="#">Derived Role: Protocol Affiliate Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Student Investigator
                                role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">SP</a></td>
                            <td><a href="#">Derived Role: Protocol Personnel<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Study Personnel role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">SP</a></td>
                            <td><a href="#">Derived Role: Protocol Personnel<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Study Personnel role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Student Investigator</a></td>
                            <td><a href="#">Derived Role: Protocol Affiliate Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Protocol Sutdent Investigator
                                role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Limited Affiliate</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The role defines basic permissions
                                common to other affiliate roles.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Purchasing Accounts Payable Affiliate</a></td>
                            <td><a href="#">Purchasing Accounts Payable Affiliate<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The role which grants university
                                affiliates access to KFS Purchasing/Accounts Payable. It gives users the
                                ability to initiate some documents and use inquiries and search screens.
                                Users are qualified by namespace, chart and organization; chart and organization
                                must be specified for membership in the role.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Modify Subaward</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SUBAWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Subaward Create/Modify role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Unit Correspondent</a></td>
                            <td><a href="#">Derived Role: IRB Correspondent<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>The Unit Correspondent role</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">COI Staff</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This is the group to assign
                                appropriate KC permissiosns for the COI staff</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">CTC Staff</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This is the KC permissions role for
                                Clinical Trials Staff</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">BL GS Staff</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This is the permissions group for
                                all Bloomington GS Staff</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">EHS Staff</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This is the role to assign
                                appropriate KC Permissions to EHS Staff</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Financial Reporting Staff</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This is the role to assign KC
                                Permissions to the Financial Reporting Staff</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IACUC Staff</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This is the Role to assign KC
                                permissions to the IACUC staff</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Technical Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role can take superuser
                                actions and blanket approve RICE documents as well as being able to modify
                                and assign permissions, responsibilities and roles belonging to the KR
                                namespaces.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">IN GS Staff</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role contains the users for the
                                Indianapolis Grant Services Staff.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Contracts &amp; Grants Project Director</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role defines the list of users
                                that may be selected as Project Directors on the Proposal or Award document.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Account Supervisor</a></td>
                            <td><a href="#">Derived Role: Account<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                the Account Supervisor field on the Account. Account Supervisors receive
                                workflow action requests for Asset and Asset Retirement Global documents.,</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Fiscal Officer</a></td>
                            <td><a href="#">Derived Role: Account<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                the Fiscal Officer field on the Account. Fiscal Officers receive workflow
                                action requests for most transactional documents and have edit permissions
                                that allow them to change accounting lines involving their accounts.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Initiator or Reviewer</a></td>
                            <td><a href="#">Derived Role: Route Log<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                the initiator and action request recipients listed within the route log of a
                                given document.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Initiator</a></td>
                            <td><a href="#">Derived Role: Route Log<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                the initiator listed within the route log of a given document.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">University Chart Manager</a></td>
                            <td><a href="#">Derived Role: Chart<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                the KFS Chart table. It is used to determine the Chart Manager of the top
                                level Chart in the organization hierarchy. This role receives workflow action
                                requests for Chart documents and has the ability to edit the organization and
                                campus Plant Chart and Account fields on the Organization document.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Organization Manager</a></td>
                            <td><a href="#">Derived Role: Organization<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                the Organization Manager field on the Organization.</td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#">Fiscal Officer Primary Delegate</a></td>
                            <td><a href="#">Derived Role: Account<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                the Primary delegates defined in the Account Delegate table in KFS.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Fiscal Officer Secondary Delegate</a></td>
                            <td><a href="#">Derived Role: Account<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                the Secondary delegates defined in the Account Delegate table in KFS.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Router</a></td>
                            <td><a href="#">Derived Role: Route Log<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                the user who took the Complete action on a given document.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">User</a></td>
                            <td><a href="#">Derived Role: Principal<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KUALI<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                the users in the Principal table. This role gives users high-level
                                permissions to interact with RICE documents and to login to KUALI.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Acknowledge Request Recipient</a></td>
                            <td><a href="#">Derived Role: Action Request<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                users with an acknowledge action request in the route log of a given
                                document.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Non-Ad Hoc Approve Request Recipient</a></td>
                            <td><a href="#">Derived Role: Action Request<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                users with an Approval action request (that was not generated via the ad-hoc
                                recipients tab) in the route log of a given document.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Complete Request Recipient</a></td>
                            <td><a href="#">Derived Role: Action Request<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                users with an complete action request in the route log of a given document.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">FYI Request Recipient</a></td>
                            <td><a href="#">Derived Role: Action Request<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                users with an FYI action request in the route log of a given document.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Approve Request Recipient</a></td>
                            <td><a href="#">Derived Role: Action Request<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                users with that have received an action request for a given document.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Document Editor</a></td>
                            <td><a href="#">Derived Role: Permission&nbsp;(Edit
                                Document)<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-NS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                users with the Edit Document permission for a given document type.,</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Document Initiator</a></td>
                            <td><a href="#">Derived Role: Permission&nbsp;(Initiate
                                Document)<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                users with the Initiate Document permission for a given document type.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Document Opener</a></td>
                            <td><a href="#">Derived Role: Permission&nbsp;(Open
                                Document)<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-NS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                users with the Open Document permission for a given document type.,</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Document Router</a></td>
                            <td><a href="#">Derived Role: Permission&nbsp;(Route
                                Document)<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives its members from
                                users with the Route Document permission for a given document type.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Payment Request Hold / Cancel Initiator</a></td>
                            <td><a href="#">Derived Role: Payment Request Hold / Cancel Initiator<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role derives users who placed
                                a Payment Request or Credit Memo on hold or canceled it in order to determine
                                who can remove those actions.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">IACUC ProtocolApprover</a></td>
                            <td><a href="#">IRBApprover-Nested<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IACUC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role exists primarily to grant
                                implicit Cancel permission to IACUC Protocol Aggregators and Admins</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">ProtocolApprover</a></td>
                            <td><a href="#">IRBApprover-Nested<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PROTOCOL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role exists primarily to grant
                                implicit Cancel permission to Protocol Aggregators and Admins</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Potentially Sensitive Document User</a></td>
                            <td><a href="#">Sensitive Document Indicator<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role houses other roles and
                                indicates which of those can view KFS-PURAP documents that have been
                                identified as potentially sensitive.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Award Project Director</a></td>
                            <td><a href="#">Derived Role: Account<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role is derived from the
                                accounts appearing on an Effort Certification document. KFS finds the most
                                recent award associated with each account and routes workflow action requests
                                to the Project Director's associated with the accounts on the Effort Certification
                                document.,</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Batch Job Modifier</a></td>
                            <td><a href="#">Derived Role: Permission&nbsp;(Modify
                                Batch Job)<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role is derived from users
                                with the Modify Batch Job permission. They are able to use the Schedule
                                lookup.,</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">HSO Grants Viewer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role is to contain HSO Staff
                                who need view rights to Grants Proposal Data</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Kuali Rules Management System Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-RULE<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role maintains KRMS agendas and
                                rules.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Plant Fund Accountant</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role manages the plant fund
                                functions associated with KFS-CAM and has special permissions related to
                                assets in support of these functions. It can also edit the Organization and
                                Campus Plant Chart and Account fields on the Organization document.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Vendor Supplier Diversity Reviewer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-VND<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role receives workflow action
                                request for vendor document if supplier diversity change</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Reviewer</a></td>
                            <td><a href="#">Vendor Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-VND<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role receives workflow action
                                requests for the Vendor document.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role represents a collection
                                of all the KC module manager roles and has permission to initiate simple
                                maintenance documents.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role represents a collection
                                of all the KFS module manager roles and has permission to modify parameters
                                and assign roles and permissions for all KFS namespaces.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Operations</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role represents a very select
                                central processing function allowed to run KFS batch jobs, initiate GLCP and
                                LLCP documents and upload Enterprise Feed and Procurement Card files.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Purchasing Processor</a></td>
                            <td><a href="#">Campus<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role represents central or
                                campus Purchasing staff. They have additional permissions for and receive
                                action requests for most Purchasing document types as well as receiving
                                action requests for Disbursement Vouchers paying PO Type Vendors.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">System User</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role represents the KFS System
                                User, that is the user ID the system uses when it takes programmed actions
                                (such as auto-initiating or approving documents such as the PCDO and PO).</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">System User</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KR-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>This role represents the KR System
                                User, that is the user ID RICE uses when it takes programmed actions.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">unassigned</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Unassigned role - no permissions</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Unit Aggregator</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Unit Aggregator on Proposal</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Space Notification</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Unit Role for Space Notification</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Unit Viewer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-WKFLW<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Unit Viewer on Proposal</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Processor</a></td>
                            <td><a href="#">Derived Role: Accounts Receivable Organization<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-AR<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users associated with KFS AR
                                processing organizations. They can initiate Application and Cash control
                                documents and add new records to the Organization Options and Organization
                                Accounting Defaults tables.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Customer Contact</a></td>
                            <td><a href="#">Customer<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PDP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users associated with PDP customers
                                that can use the Payment File Batch Upload screen and have basic PDP inquiry
                                access.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Invoice Recurrence Creator</a></td>
                            <td><a href="#">Derived Role: Invoice Recurrence<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-AR<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users authorized to create Invoice
                                Recurrence documents.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Document Editor</a></td>
                            <td><a href="#">Derived Role: Budget Construction Document<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-BC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users authorized to edit Budget
                                Construction Documents.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Document Editor</a></td>
                            <td><a href="#">Derived Role: Instructional Effort Reporting Document<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-IER<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users authorized to edit
                                Instructional Effort Reporting Documents.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Cash Receipt Initiator</a></td>
                            <td><a href="#">Derived Role: Cash Receipt Initiator<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users authorized to initiate Cash
                                Receipt documents. This role exists to exclude Cash Managers from being able
                                to initiate Cash Receipt documents. You do not need to add explicit members
                                to this role to accomplish this exclusion.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Interdepartmental Billing Processor</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-GL<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users authorized to use the
                                Collector Upload screen.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Service Bill Processor</a></td>
                            <td><a href="#">Account<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users authorized to use the Service
                                Billing document and enter specified accounts on the &quot;Income&quot; side
                                of the document.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Batch File Viewers</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users authorized to view batch files</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Supporting Documentation Viewer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users authorized to view DV OnBase
                                images</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Sensitive Data Viewer</a></td>
                            <td><a href="#">Sensitive Data<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users authorized to view KFS-PURAP
                                documents identified with a specific Sensitive Data Code.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">AP Supporting Documentation Viewer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users authorized to view onbase
                                attachments on AP documents</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Cash Manager</a></td>
                            <td><a href="#">Campus<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users authorized to work the Cash
                                Management Document and verify Cash Receipt documents for a given campus.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Asset Borrower</a></td>
                            <td><a href="#">Derived Role: Asset Document<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-CAM<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users borrowing assets on the
                                Equipment Loan/Return document.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Reporting Code User</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-COA<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users capable of maintaining
                                reporting codes.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Workflow Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users capable of taking superuser
                                action on KFS documents and blanket approving RICE documents.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Biller</a></td>
                            <td><a href="#">Derived Role: Accounts Receivable Organization<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-AR<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users identified as part of an AR
                                billing organization. They have access to the basic functions of the KFS AR
                                module such as creating invoices or customers.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-AR<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users that manage the KFS AR
                                module. They receive Accounts Receivable transactional and maintenance
                                documents for approval.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Accounts Receivable Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users that manage the KFS-AR module.
                                This role has no inherent permissions or responsibilities.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Manager</a></td>
                            <td><a href="#">Campus<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-CAM<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users that manage the KFS-CAM
                                module. They can initiate Barcode Inventory Error documents and have access
                                to take restricted actions on assets and modify fields on the asset document
                                that other users do not.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Financial Processing Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users that manage the KFS-FP module.
                                This role has no inherent permissions or responsibilities.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Purchasing Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users that manage the KFS-PURAP
                                module. This role can take the resend action on Purchase Order documents.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Disbursement Voucher Initiators</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who are authorized to initiate
                                disbursement voucher (DV) documents</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Non-Check Disbursement Bank Modifiers</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who are authorized to modify
                                the bank code on Non-Check Disbursement Documents</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Cost Share Sub-Account Type Maintainer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-COA<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who are not Contract and
                                Grant Processors but need to&nbsp;
                                create sub-accounts of type code CS (cost share).</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Users</a></td>
                            <td><a href="#">Users<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PDP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can access basic PDP
                                functions</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Requisition Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can administer the
                                workflow of REQS documents.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PDP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can cancel or hold
                                payments reset locked format processes and view unmasked bank routing and
                                account numbers in PDP.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Payment Cancel Users</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PDP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can cancel payments in PDP</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">CG Account Default Processor</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-COA<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can create CG Account
                                Default documents</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Salary Transfer Object Code Editor</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-LD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can edit object codes on
                                accounting lines in the Salary Expense Transfer document.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Cash Drawer Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can edit the contents of a
                                cash drawer</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Processor</a></td>
                            <td><a href="#">Organization: Optionally Hierarchical<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-CAM<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can initiate CAM
                                transactional and maintenance documents, create new records using the asset
                                document, maintain asset locations and modify accounting lines on invoice
                                documents.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Commerce Simple Maintenance Maintainers</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-CMRC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can initiate Commerce
                                module simple maintenance documents</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Credit Card Receipt Processor</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can initiate Credit Card
                                Receipt documents</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Simple Maintenance Document User</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can initiate Financial
                                System simple maintenance documents.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">SACR Users</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-COA<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can initiate Sub-Account
                                Reviewer (SACR) documents</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Cash Receipt Multiple Campus Users</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can route CRs to multiple
                                campus Cash Managers</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Processor</a></td>
                            <td><a href="#">Campus<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PDP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can set payments for
                                immediate pay and use the Format Checks/ACH screen in PDP.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">AP Super Approvers</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can take single action
                                requests on AP docs</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Disbursement Voucher Workflow Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can take super user action
                                on DV documents</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Processor</a></td>
                            <td><a href="#">Account Organization Hierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-BC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can use the Organization
                                Salary Setting, import/export payrate and unlock options on the Budget
                                Construction Document.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Payment Detail Full Viewers</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PDP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can view fully unmasked
                                Bank Account numbers and Payee ID numbers</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Payment Detail Limited Bank Viewers</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PDP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can view fully unmasked
                                Bank Routing Numbers and partially unmasked Bank Account numbers in Payment
                                Detail</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Other Action List Viewers</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can view other users
                                action lists.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Payment Detail ID Viewers</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PDP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who can view unmasked Payee ID
                                fields in Payment Detail</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Exception Reviewer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who handle KFS documents which
                                have routed to exception.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Processor</a></td>
                            <td><a href="#">Course Organization Hierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-IER<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who have Instructional Effort
                                Reporting Document access based on current document level, and document
                                unlock options.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Closed Account Users</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-COA<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who have permission to edit
                                closed accounts</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Document Viewer</a></td>
                            <td><a href="#">Derived Role: Budget Construction Document<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-BC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who have view-only access to
                                Budget Construction Documents.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Document Viewer</a></td>
                            <td><a href="#">Derived Role: Instructional Effort Reporting Document<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-IER<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who have view-only access to
                                Instructional Effort Reporting Documents.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Content Reviewer</a></td>
                            <td><a href="#">Organization<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who receive incomplete
                                Requisition documents for completion for a given Chart and Organization.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Invoice Recurrence Instance Reviewer</a></td>
                            <td><a href="#">Organization<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-AR<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who receive Invoice and
                                Invoice Recurrence documents for approval.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Separation of Duties Reviewer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who receive Requisitions
                                requiring separation of duties approvals.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Accounts Payable Reject Researcher</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who receive workflow action
                                requests for Accounts Payable documents to research problems.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Invoice Document Indexer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who receive workflow action
                                requests for Accounts Payable Invoice file documents to populate the indexed
                                fields.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Accounts Payable Document Reviewer</a></td>
                            <td><a href="#">Derived Role: Accounts Payable Document Reviewer<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who receive workflow action
                                requests for Accounts Payable transactional documents.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Disbursement Manager</a></td>
                            <td><a href="#">Campus<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who receive workflow action
                                requests for Disbursement Vouchers based on the campus code associated with
                                the initiator of the document.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Travel Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who receive workflow action
                                requests for Disbursement Vouchers for travel payment reasons and can edit
                                the accounting line and Non-Employee Travel Expense or Pre-Paid Travel
                                Expenses tabs.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Disbursement Method Reviewer</a></td>
                            <td><a href="#">Payment Method<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who receive workflow action
                                requests for Disbursement Vouchers with specified payment methods and can
                                edit the accounting lines and Wire Transfer and Foreign Draft tabs.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Sub-Fund Reviewer</a></td>
                            <td><a href="#">Sub-Fund &amp; Document Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who receive workflow action
                                requests for documents that include accounts belonging to particular
                                sub-funds groups.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Commodity Reviewer</a></td>
                            <td><a href="#">Commodity &amp; Document Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who receive workflow action
                                requests for Purchasing transactional documents that contain a specific
                                commodity code and campus combination.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Journal Voucher User</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who require access to the
                                Journal Voucher.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Labor Journal Voucher User</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-LD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who require access to the
                                Labor Journal Voucher.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Sub-Account Reviewer</a></td>
                            <td><a href="#">Sub-Account &amp; Document Type<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-PURAP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users who wish to receive workflow
                                action requests for KFS-PURAP documents that involve a specific account
                                number and sub-account number.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Tax Identification Number User</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users with a need to view unmasked
                                Tax ID numbers. They can also modify the tax number associated with AR
                                customer records and PURAP vendor records.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Effort Certification Administrator</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-EC<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users with access to super user
                                disapprove ECD documents</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Accounts Payable Manager</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users with manager-level access to
                                Accounts Payable documents. This includes the ability to hold or cancel (or
                                remove those states) from Payment Request and Credit Memo documents.</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Wire Transfer Tab Users</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-FP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Users with permission to view and
                                edit fields on the wire transfer tab of the Disbursement Voucher</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">View all IACUC Protocols</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-UNT<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>View all IACUC Protocols</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Institutional Proposal Viewer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>View Institutional Proposals</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">View Institutionally Maintained Salaries</a></td>
                            <td><a href="#">Unit<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-PD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>View Institutionally Maintained
                                Salaries</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">View Proposal Log</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-IP<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>View Proposal Log</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">View Subaward</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-SUBAWARD<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>View Subawards role</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Time And Money Viewer</a></td>
                            <td><a href="#">UnitHierarchy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KC-T<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>View Time And Money Document</td>
                        </tr> <tr>
                            <td class="uif-featured"><a href="#">Workstudy Reviewer</a></td>
                            <td><a href="#">Default<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td><a href="etetet">KFS-SYS<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>Workstudy Reviewer Role</td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
        <!-- VIEW FOOTER --> 
        
        <!-- DIALOGS/Placeholders -->
        <div id="Uif-Dialogs"></div>
    </div>
</form>

<!-- MODALS -->


<!-- FOOTER SCRIPTS --> 

<script type="text/javascript" src="../../plugins/jquery/jquery-1.8.3.js"></script> 
<script type="text/javascript" src="../../krad/scripts/jquery-migrate-1.2.1.min.js"></script> 
<script type="text/javascript" src="../../krad/scripts/datatables/jquery.dataTables.js"></script> 
<script type="text/javascript" src="../../krad/scripts/datatables/DT_bootstrap.js"></script> 
<script type="text/javascript" src="../../themes/bootstrap/scripts/bootstrap.js"></script> 
<script type="text/javascript" src="../../plugins/datatables/TableTools.js"></script> 
<script type="text/javascript" src="../../plugins/easing/jquery.easing-1.3.pack.js"></script> 
<script type="text/javascript" src="../../themes/kboot/scripts/less-1.5.0.min.js"></script> 
<script type="text/javascript" src="../../themes/kboot/scripts/global.functions.js"></script> 
<script type="text/javascript" src="../../plugins/tablesaw-master/dist/tablesaw.js"></script> 

<script>
$( ".refineSearch" ).click(function() {
  $( ".form-horizontal" ).slideToggle ( "slow" );
});


$( ".hideRefine" ).click(function() {
  $( ".form-horizontal" ).slideUp ( "slow" );
});






</script>
</body>
</html>
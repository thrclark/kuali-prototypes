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
                        <h2 class="uif-headerText"><span class="uif-headerText-span" style="margin-bottom:14px"> Search Results <small style="color:#666">for 'Template Namespace = KR-KRAD'</small></span></h2>
                        <p> <a href="lookup-permission.php"> New Search</a> | <a href="#" class="refineSearch"> Refine Search </a></p>
                    </div>
                </header>
                <div class="form-horizontal" role="form" style="">
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
                                <section class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Template Namespace: </label>
                                    </div>
                                    <div class="col-md-3">
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
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Template Name: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Permission Namespace: </label>
                                    </div>
                                    <div class="col-md-3">
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
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Permission Name: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                         <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Role Namespace: </label>
                                    </div>
                                    <div class="col-md-3">
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
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Role Name: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Principal Name: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                       
                                    
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Group Namespace: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                       
                                    
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Group Name: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                       
                                    
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Attribute Value: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                       
                                    
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Template Id: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                     
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Active: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                          <select name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" aria-invalid="true">
                                                <option value="1" selected="selected">Yes</option>
                                                <option value="4">No</option>
                                                <option value="3">Both</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                </section>
                        
                            <div class="well well-sm text-center uif-form-buttonbar"> <a href="#" class="btn btn-primary uif-action" data-role="" data-toggle="" data-target="" data-submit_data="" data-dismiss=""> Refine Search </a> <a class="btn btn-default" href="#">Clear</a> </div>
                        </div>    </div>
                    </div>
                </div>

                <style type="text/css">
#example tr { cursor:pointer}
</style>
                <table class="table table-condensed table-smaller-text table-bordered" id="example" data-mode="stack">
                 
    <thead>
        <tr>
            <th><span>Actions</span></th>
            <th> <span>Template Namespace</span></th>
            <th><span> Template Name</span></th>
            <th> <span>Permission Namespace</span></th>
            <th> <span>Permission Name</span></th>
            <th> <span>Permission Detail Values</span></th>
            <th> <span>Granted to Roles</span></th>
        </tr>
    </thead>
    <tbody>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Use Screen </td>
            <td> KR-WKFLW </td>
            <td> Use Document Operation Screen </td>
            <td>Action Class:org.kuali.rice.kew.documentoperation.web.DocumentOperatio...</td>
            <td>KR-SYS Technical Administrator,&nbsp;KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Use Screen </td>
            <td> KR-BUS </td>
            <td> Use Java Security Management Screen </td>
            <td>Action Class:org.kuali.rice.ksb.security.admin.web.JavaSecurityManagem...</td>
            <td>KR-SYS Technical Administrator,&nbsp;KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Use Screen </td>
            <td> KR-BUS </td>
            <td> Use Message Queue Screen </td>
            <td>Action Class:org.kuali.rice.ksb.messaging.web.MessageQueueAction</td>
            <td>KR-SYS Technical Administrator,&nbsp;KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Use Screen </td>
            <td> KR-BUS </td>
            <td> Use Service Registry Screen </td>
            <td>Action Class:org.kuali.rice.ksb.messaging.web.ServiceRegistryAction</td>
            <td>KR-SYS Technical Administrator,&nbsp;KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Use Screen </td>
            <td> KR-BUS </td>
            <td> Use Thread Pool Screen </td>
            <td>Action Class:org.kuali.rice.ksb.messaging.web.ThreadPoolAction</td>
            <td>KR-SYS Technical Administrator,&nbsp;KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Use Screen </td>
            <td> KR-BUS </td>
            <td> Use Quartz Queue Screen </td>
            <td>Action Class:org.kuali.rice.ksb.messaging.web.QuartzQueueAction</td>
            <td>KR-SYS Technical Administrator,&nbsp;KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-WKFLW </td>
            <td> Ad Hoc Review Document </td>
            <td> KR-SYS </td>
            <td> Ad Hoc Review RICE Document </td>
            <td>Document Type Name:RiceDocument</td>
            <td>KUALI User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-WKFLW </td>
            <td> Administer Routing for Document </td>
            <td> KR-SYS </td>
            <td> Administer Routing RICE Document </td>
            <td>Document Type Name:RiceDocument</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-WKFLW </td>
            <td> Blanket Approve Document </td>
            <td> KR-SYS </td>
            <td> Blanket Approve RICE Document </td>
            <td>Document Type Name:RiceDocument</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-SYS </td>
            <td> Initiate Document </td>
            <td> KR-SYS </td>
            <td> Initiate RICE Document </td>
            <td>Document Type Name:RiceDocument</td>
            <td>KUALI User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-IDM </td>
            <td> Assign Role </td>
            <td> KR-SYS </td>
            <td> Assign Role </td>
            <td>Namespace Code:KR*</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-IDM </td>
            <td> Grant Permission </td>
            <td> KR-SYS </td>
            <td> Grant Permission </td>
            <td>Namespace Code:KR*</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-IDM </td>
            <td> Grant Responsibility </td>
            <td> KR-SYS </td>
            <td> Grant Responsibility </td>
            <td>Namespace Code:KR*</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-IDM </td>
            <td> Populate Group </td>
            <td> KR-SYS </td>
            <td> Populate Group </td>
            <td>Namespace Code:KR*</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Copy Document </td>
            <td> KR-SYS </td>
            <td> Copy RICE Document </td>
            <td>Document Type Name:RiceDocument</td>
            <td>KUALI User,&nbsp;KR-SYS Document Initiator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Inquire Into Records </td>
            <td> KR-SYS </td>
            <td> Inquire Into RICE Records </td>
            <td>Namespace Code:KR*</td>
            <td>KUALI User,&nbsp;KUALI User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Look Up Records </td>
            <td> KR-SYS </td>
            <td> Look Up RICE Records </td>
            <td>Namespace Code:KR*</td>
            <td>KUALI User,&nbsp;KUALI User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Maintain System Parameter </td>
            <td> KR-SYS </td>
            <td> Maintain System Parameter </td>
            <td>Namespace Code:KR*</td>
            <td>KR-SYS Technical Administrator,&nbsp;KUALI User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Modify Batch Job </td>
            <td> KR-SYS </td>
            <td> Modify Batch Job </td>
            <td>Namespace Code:KR*</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Open Document </td>
            <td> KR-SYS </td>
            <td> Open RICE Document </td>
            <td>Document Type Name:RiceDocument</td>
            <td>KUALI User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Use Screen </td>
            <td> KR-SYS </td>
            <td> Use all RICE Screen </td>
            <td>Namespace Code:KR*</td>
            <td>KUALI User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-WKFLW </td>
            <td> Cancel Document </td>
            <td> KUALI </td>
            <td> Cancel Document </td>
            <td>Document Type Name:KualiDocument, Route Node Name:PreRoute</td>
            <td>KR-NS Document Editor,&nbsp;KR-WKFLW Initiator or Reviewer </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-WKFLW </td>
            <td> Route Document </td>
            <td> KUALI </td>
            <td> Route Document </td>
            <td>Document Type Name:KualiDocument</td>
            <td>KR-NS Document Editor </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Take Requested Action </td>
            <td> KUALI </td>
            <td> Take Requested Approve Action </td>
            <td>Action Request Code:A</td>
            <td>KR-WKFLW Approve Request Recipient </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Take Requested Action </td>
            <td> KUALI </td>
            <td> Take Requested FYI Action </td>
            <td>Action Request Code:F</td>
            <td>KR-WKFLW FYI Request Recipient </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Take Requested Action </td>
            <td> KUALI </td>
            <td> Take Requested Acknowledge Action </td>
            <td>Action Request Code:K</td>
            <td>KR-WKFLW Acknowledge Request Recipient </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KUALI </td>
            <td> Default </td>
            <td> KUALI </td>
            <td> Log In Kuali Portal </td>
            <td>&nbsp;</td>
            <td>KUALI User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Edit Document </td>
            <td> KUALI </td>
            <td> Edit Kuali ENROUTE Document Route Status Code R </td>
            <td>Document Type Name:KualiDocument, Route Status Code:R</td>
            <td>KR-WKFLW Approve Request Recipient,&nbsp;KR-WKFLW Non-Ad Hoc Approve Request Recipient,&nbsp;KR-WKFLW Complete Request Recipient </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Full Unmask Field </td>
            <td> KR-SYS </td>
            <td> Full Unmask Tax Identification Number Payee ACH Document </td>
            <td>Component:KimPrincipalImpl, Property Name:password</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Add Note / Attachment </td>
            <td> KUALI </td>
            <td> Add Note / Attachment Kuali Document </td>
            <td>Document Type Name:KualiDocument</td>
            <td>KR-WKFLW Initiator or Reviewer </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> View Note / Attachment </td>
            <td> KUALI </td>
            <td> View Note / Attachment Kuali Document </td>
            <td>Document Type Name:KualiDocument</td>
            <td>KR-NS Document Opener </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Delete Note / Attachment </td>
            <td> KR-SYS </td>
            <td> Delete Note / Attachment Kuali Document </td>
            <td>Document Type Name:RiceDocument, Created By Self Only:false</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Use Screen </td>
            <td> KR-WKFLW </td>
            <td> Use Screen XML Ingester Screen </td>
            <td>Namespace Code:KR-WKFLW, Action Class:org.kuali.rice.core.web.impex.In...</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KUALI </td>
            <td> Default </td>
            <td> KR-NS </td>
            <td> Administer Pessimistic Locking </td>
            <td>&nbsp;</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-WKFLW </td>
            <td> Save Document </td>
            <td> KR-SYS </td>
            <td> Save RICE Document </td>
            <td>Document Type Name:RiceDocument</td>
            <td>KR-WKFLW Initiator,&nbsp;KR-SYS System User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KUALI </td>
            <td> Default </td>
            <td> KR-WKFLW </td>
            <td> View Other Action List </td>
            <td>&nbsp;</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KUALI </td>
            <td> Default </td>
            <td> KR-WKFLW </td>
            <td> Unrestricted Document Search </td>
            <td>&nbsp;</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Full Unmask Field </td>
            <td> KR-SYS </td>
            <td> Full Unmask Tax Identification Number Person Document </td>
            <td>Component:IdentityManagementPersonDocument, Property Name:taxId</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KUALI </td>
            <td> Default </td>
            <td> KR-IDM </td>
            <td> Modify Entity </td>
            <td>&nbsp;</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Send Ad Hoc Request </td>
            <td> KR-SYS </td>
            <td> Send FYI Request Kuali Document </td>
            <td>Document Type Name:KualiDocument, Action Request Code:F</td>
            <td>KR-NS Document Opener </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Send Ad Hoc Request </td>
            <td> KR-SYS </td>
            <td> Send Acknowledge Request Kuali Document </td>
            <td>Document Type Name:KualiDocument, Action Request Code:K</td>
            <td>KR-NS Document Opener </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Send Ad Hoc Request </td>
            <td> KR-SYS </td>
            <td> Send Approve Request Kuali Document </td>
            <td>Document Type Name:KualiDocument, Action Request Code:A</td>
            <td>KR-NS Document Editor,&nbsp;KR-WKFLW Approve Request Recipient </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KUALI </td>
            <td> Default </td>
            <td> KR-IDM </td>
            <td> Override Entity Privacy Preferences </td>
            <td>&nbsp;</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Look Up Records </td>
            <td> KR-WKFLW </td>
            <td> Look Up Rule Template </td>
            <td>Component:RuleTemplate, Namespace Code:KR-WKFLW</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Look Up Records </td>
            <td> KR-WKFLW </td>
            <td> Look Up Stylesheet </td>
            <td>Component:EDocLiteStyle, Namespace Code:KR-WKFLW</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Look Up Records </td>
            <td> KR-WKFLW </td>
            <td> Look Up eDocLite </td>
            <td>Component:EDocLiteDefinition, Namespace Code:KR-WKFLW</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Look Up Records </td>
            <td> KR-WKFLW </td>
            <td> Look Up Rule Attribute </td>
            <td>Component:RuleAttribute, Namespace Code:KR-WKFLW</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Look Up Records </td>
            <td> KR-NS </td>
            <td> Look Up Parameter Component </td>
            <td>Component:ParameterDetailType, Namespace Code:KR-NS</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Look Up Records </td>
            <td> KR-NS </td>
            <td> Look Up Namespace </td>
            <td>Component:ParameterNamespace, Namespace Code:KR-NS</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Look Up Records </td>
            <td> KR-NS </td>
            <td> Look Up Parameter Type </td>
            <td>Component:ParameterType, Namespace Code:KR-NS</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Inquire Into Records </td>
            <td> KR-WKFLW </td>
            <td> Inquire Into Rule Template </td>
            <td>Namespace Code:KR-WKFLW, Component:RuleTemplate</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Inquire Into Records </td>
            <td> KR-WKFLW </td>
            <td> Inquire Into Stylesheet </td>
            <td>Namespace Code:KR-WKFLW, Component:EDocLiteStyle</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Inquire Into Records </td>
            <td> KR-WKFLW </td>
            <td> Inquire Into eDocLite </td>
            <td>Namespace Code:KR-WKFLW, Component:EDocLiteDefinition</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Inquire Into Records </td>
            <td> KR-WKFLW </td>
            <td> Inquire Into Rule Attribute </td>
            <td>Namespace Code:KR-WKFLW, Component:RuleAttribute</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Inquire Into Records </td>
            <td> KR-NS </td>
            <td> Inquire Into Pessimistic </td>
            <td>Component:PessimisticLock, Namespace Code:KR-NS</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Inquire Into Records </td>
            <td> KR-NS </td>
            <td> Inquire Into Parameter Component </td>
            <td>Component:ParameterDetailType, Namespace Code:KR-NS</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Inquire Into Records </td>
            <td> KR-NS </td>
            <td> Inquire Into Namespace </td>
            <td>Component:ParameterNamespace, Namespace Code:KR-NS</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Inquire Into Records </td>
            <td> KR-NS </td>
            <td> Inquire Into Parameter Type </td>
            <td>Component:ParameterType, Namespace Code:KR-NS</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-IDM </td>
            <td> Populate Group </td>
            <td> KR-SYS </td>
            <td> Populate Group KUALI Namespace </td>
            <td>Namespace Code:KUALI</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-IDM </td>
            <td> Assign Role </td>
            <td> KR-SYS </td>
            <td> Assign Role KUALI Namespace </td>
            <td>Namespace Code:KUALI</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-IDM </td>
            <td> Grant Permission </td>
            <td> KR-SYS </td>
            <td> Grant Permission KUALI Namespace </td>
            <td>Namespace Code:KUALI</td>
            <td>KR-SYS Technical Administrator,&nbsp;KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-IDM </td>
            <td> Grant Responsibility </td>
            <td> KR-SYS </td>
            <td> Grant Responsibility KUALI Namespace </td>
            <td>Namespace Code:KUALI</td>
            <td></td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Use Screen </td>
            <td> KR-BUS </td>
            <td> Use Configuration Viewer Screen </td>
            <td>Action Class:org.kuali.rice.ksb.messaging.web.ConfigViewerAction</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-WKFLW </td>
            <td> Add Message to Route Log </td>
            <td> KUALI </td>
            <td> Add Message to Route Log </td>
            <td>Document Type Name:KualiDocument</td>
            <td></td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Use Screen </td>
            <td> KR-SYS </td>
            <td> Use Cache Adminstration Screen </td>
            <td>Action Class:org.kuali.rice.core.web.cache.CacheAdminController</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-RULE </td>
            <td> KRMS Agenda Permission </td>
            <td> KR-RULE-TEST </td>
            <td> Maintain KRMS Agenda </td>
            <td>&nbsp;</td>
            <td>KR-RULE Kuali Rules Management System Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Create / Maintain Record(s) </td>
            <td> KR-NS </td>
            <td> Create Term Maintenance Document </td>
            <td>Document Type Name:TermMaintenanceDocument</td>
            <td>KR-RULE Kuali Rules Management System Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Create / Maintain Record(s) </td>
            <td> KR-NS </td>
            <td> Create Context Maintenance Document </td>
            <td>Document Type Name:ContextMaintenanceDocument</td>
            <td>KR-RULE Kuali Rules Management System Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Create / Maintain Record(s) </td>
            <td> KR-NS </td>
            <td> Create TermSpecification Maintenance Document </td>
            <td>Document Type Name:TermSpecificationMaintenanceDocument</td>
            <td>KR-RULE Kuali Rules Management System Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-WKFLW </td>
            <td> Recall Document </td>
            <td> KR-WKFLW </td>
            <td> Recall Document </td>
            <td>Document Type Name:RiceDocument</td>
            <td>KR-WKFLW Initiator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Send Ad Hoc Request </td>
            <td> KR-SYS </td>
            <td> Send Complete Request Kuali Document </td>
            <td>Document Type Name:KualiDocument, Action Request Code:C</td>
            <td>KR-NS Document Opener </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Take Requested Action </td>
            <td> KUALI </td>
            <td> Take Requested Complete Action </td>
            <td>Action Request Code:C</td>
            <td>KR-WKFLW Complete Request Recipient </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Edit Document </td>
            <td> KUALI </td>
            <td> Edit Kuali ENROUTE Document Route Status Code I </td>
            <td>Document Type Name:KualiDocument, Route Status Code:I</td>
            <td>KR-WKFLW Initiator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Edit Document </td>
            <td> KUALI </td>
            <td> Edit Kuali ENROUTE Document Route Status Code S </td>
            <td>Document Type Name:KualiDocument, Route Status Code:S</td>
            <td>KR-WKFLW Initiator,&nbsp;KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Export Records </td>
            <td> KR-NS </td>
            <td> Export Any Record </td>
            <td>Namespace Code:*</td>
            <td>KUALI User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-KRAD </td>
            <td> View Group </td>
            <td> KR-SAP </td>
            <td> View Kitchen Sink Group </td>
            <td>View Id:UifCompView*, Group Id:UifCompView-SecureGroupView</td>
            <td>KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> View Note / Attachment </td>
            <td> KR-SAP </td>
            <td> View Note / Attachment Travel Document </td>
            <td>Document Type Name:TravelDocument</td>
            <td>KR-SAP Sample App Users </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> View Note / Attachment </td>
            <td> KR-SAP </td>
            <td> View Note / Attachment Travel Document Attachment </td>
            <td>Document Type Name:TravelDocument, Attachment Type Code:OTH</td>
            <td></td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-KRAD </td>
            <td> View Group </td>
            <td> KR-SAP </td>
            <td> View Kitchen Sink Page </td>
            <td>View Id:UifCompView*, Group Id:UifCompView-Page9</td>
            <td>KR-SAP Sample App Users </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-KRAD </td>
            <td> Edit Group </td>
            <td> KR-SAP </td>
            <td> Edit Kitchen Sink Group </td>
            <td>View Id:UifCompView*, Group Id:UifCompView-SecureGroupEdit</td>
            <td>KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-KRAD </td>
            <td> View Field </td>
            <td> KR-SAP </td>
            <td> View Kitchen Sink Field </td>
            <td>View Id:UifCompView*, Property Name:field6</td>
            <td>KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-KRAD </td>
            <td> Edit Field </td>
            <td> KR-SAP </td>
            <td> Edit Kitchen Sink Field </td>
            <td>View Id:UifCompView*, Property Name:field7</td>
            <td>KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-KRAD </td>
            <td> View Field </td>
            <td> KR-SAP </td>
            <td> View Kitchen Sink Field Group </td>
            <td>View Id:UifCompView*, Field Id:UifCompView-SecureFieldGroup1</td>
            <td>KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-KRAD </td>
            <td> Edit Field </td>
            <td> KR-SAP </td>
            <td> Edit Kitchen Sink Field Group </td>
            <td>View Id:UifCompView*, Field Id:UifCompView-SecureFieldGroup2</td>
            <td>KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-KRAD </td>
            <td> Perform Action </td>
            <td> KR-SAP </td>
            <td> Perform Kitchen Sink Action </td>
            <td>View Id:UifCompView*, Action Event:save</td>
            <td>KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-KRAD </td>
            <td> View Widget </td>
            <td> KR-SAP </td>
            <td> View Kitchen Sink Widget </td>
            <td>View Id:UifCompView*, Widget Id:UifCompView-SecureWidget</td>
            <td>KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-KRAD </td>
            <td> View Line </td>
            <td> KR-SAP </td>
            <td> View Kitchen Sink Line </td>
            <td>&nbsp;</td>
            <td>KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-KRAD </td>
            <td> Edit Line </td>
            <td> KR-SAP </td>
            <td> Edit Kitchen Sink Line </td>
            <td>&nbsp;</td>
            <td>KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-KRAD </td>
            <td> View Line Field </td>
            <td> KR-SAP </td>
            <td> View Kitchen Sink Line Field </td>
            <td>View Id:UifCompView*, Collection Name:list3, Property Name:field2</td>
            <td>KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-KRAD </td>
            <td> Edit Line Field </td>
            <td> KR-SAP </td>
            <td> Edit Kitchen Sink Line Field </td>
            <td>View Id:UifCompView*, Collection Name:list3, Property Name:field3</td>
            <td>KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-KRAD </td>
            <td> Perform Line Action </td>
            <td> KR-SAP </td>
            <td> Perform Kitchen Sink Line Action </td>
            <td>View Id:UifCompView*, Collection Name:list4, Action Event:delete</td>
            <td>KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-WKFLW </td>
            <td> Ad Hoc Review Document </td>
            <td> KR-SAP </td>
            <td> Ad Hoc Review Travel Document </td>
            <td>Document Type Name:TravelDocument</td>
            <td>KUALI User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-WKFLW </td>
            <td> Administer Routing for Document </td>
            <td> KR-SAP </td>
            <td> Administer Routing Travel Document </td>
            <td>Document Type Name:TravelDocument</td>
            <td>KR-SYS Technical Administrator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-WKFLW </td>
            <td> Blanket Approve Document </td>
            <td> KR-SAP </td>
            <td> Blanket Approve Travel Document </td>
            <td>Document Type Name:TravelDocument</td>
            <td>KR-SYS Technical Administrator,&nbsp;KR-SAP Sample App Admin </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-SYS </td>
            <td> Initiate Document </td>
            <td> KR-SAP </td>
            <td> Initiate Travel Document </td>
            <td>Document Type Name:TravelDocument</td>
            <td>KUALI User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Copy Document </td>
            <td> KR-SAP </td>
            <td> Copy Travel Document </td>
            <td>Document Type Name:TravelDocument</td>
            <td>KUALI User,&nbsp;KR-SYS Document Initiator </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Inquire Into Records </td>
            <td> KR-SAP </td>
            <td> Inquire Into Travel Records </td>
            <td>Namespace Code:KR*</td>
            <td>KUALI User,&nbsp;KUALI User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Look Up Records </td>
            <td> KR-SAP </td>
            <td> Look Up Travel Records </td>
            <td>Namespace Code:KR*</td>
            <td>KUALI User,&nbsp;KUALI User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Open Document </td>
            <td> KR-SAP </td>
            <td> Open Travel Document </td>
            <td>Document Type Name:TravelDocument</td>
            <td>KUALI User </td>
        </tr>
        <tr> <td><a href="#">edit</a> <a href="#">copy</a></td>
            <td> KR-NS </td>
            <td> Use Screen </td>
            <td> KR-SAP </td>
            <td> Use all Travel Screen </td>
            <td>Namespace Code:KR*</td>
            <td>KUALI User </td>
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



<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
/* The easiest way to add popovers to your HTML prototypes
   ========================================================================== */

$('.popover-markup > .trigger').popover({
    html : true,
    title: function() {
      return $(this).parent().find('.head').html();
    },
    content: function() {
      return $(this).parent().find('.content').html();
    },
    container: 'body',
    placement: 'bottom'
});

});//]]>  

</script> 
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$('[data-toggle="popover"]').popover();

$('body').on('click', function (e) {
    $('[data-toggle="popover"]').each(function () {
        //the 'is' for buttons that trigger popups
        //the 'has' for icons within a button that triggers a popup
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
    });
});
});//]]>  

</script>  
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
<?php
$page = 'basics';
$section = 'basics-proposalDetails';
?>
<!DOCTYPE HTML>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex,nofollow"/>
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include('includes/styles.php') ?>
<style>
.form-horizontal{max-width:50%;}
.date-group .col-md-3{min-width:10em; margin-right:1em;}
label{white-space: nowrap;}
</style>
</head>

<body id="Uif-Application">
<?php include('includes/uif-applicationHeader.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View">
    <!-- BREADCRUMBS --> 
    <!-- VIEW HEADER --> 
    
    <!-- // VIEW HEADER  --> 
    <!-- VIEW CONTENT -->
    <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid">
        <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="">
            <div class="uif-header-inner">
                <h2 id="" class="uif-headerText"> <span class="uif-headerText-span">Create Proposal</span> </h2>
                <div id="" class="uif-verticalBoxGroup uif-header-lowerGroup" data-parent="LabsProposal-Page">
                    <div id="u1ndzhxa" class="text-muted uif-boxLayoutVerticalItem clearfix" data-parent="">
                        <p>* Indicates required fields</p>
                    </div>
                </div>
            </div>
            <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Proposal Type: *</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                            <option value="1" selected="selected">New</option>
                            <option value="4">Continuation</option>
                            <option value="3">Renewal</option>
                            <option value="2">Resubmission</option>
                            <option value="5">Revision</option>
                            <option value="6">Task Order</option>
                        </select>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Lead Unit: *</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                            <option value="000001">000001 - University</option>
                            <option value="BL-IIDC">BL-IIDC - IND INST ON DISABILITY/COMMNTY</option>
                            <option value="IN-CARD" selected="selected">IN-CARD - CARDIOLOGY</option>
                            <option value="IN-CARR">IN-CARR - CARDIOLOGY RECHARGE CTR</option>
                        </select>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Activity Type: *</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                            <option value="1" selected="selected">Research</option>
                            <option value="4">Clinical Trial</option>
                            <option value="9">Construction</option>
                            <option value="7">Fellowship - Post-Doctoral</option>
                            <option value="6">Fellowship - Pre-Doctoral</option>
                            <option value="2">Instruction</option>
                            <option value="3">Public Service</option>
                            <option value="8">Student Services</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Project Dates: *</label>
                </div>
                <div class="col-md-8 date-group">
                    <div id="u8abdmj" class="uif-fieldGroup" data-parent="u1rttg6l" data-label="Field Group" data-group="u1fjua60">
                        <fieldset aria-labelledby="u8abdmj_label" id="u8abdmj_fieldset">
                            <legend style="display: none">Field Group</legend>
                            <div id="u1fjua60" class="row multi-columns-row row multi-columns-row uif-cssGridGroup" data-parent="u8abdmj">
                                <div class="col-md-3">
                                    <div id="urvbzg" class="uif-inputField" data-parent="u1fjua60" data-role="InputField">
                                        <div class="input-group">
                                            <input id="urvbzg_control" type="text" name="inputField1" value="" size="10" class="form-control input-sm form-control input-sm form-control input-sm uif-dateControl hasDatepicker" data-role="Control" data-control_for="urvbzg">
                                            <div class="input-group-btn"> <a class="btn btn-default icon-calendar ui-datepicker-trigger" alt="..." title="..."></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <p id="u15sznn1" class="form-control-static  uif-message ">to</p>
                                </div>
                                <div class="col-md-3">
                                    <div id="urvc16" class="uif-inputField" data-parent="u1fjua60" data-role="InputField">
                                        <div class="input-group">
                                            <input id="urvc16_control" type="text" name="inputField1" value="" size="10" class="form-control input-sm form-control input-sm form-control input-sm uif-dateControl hasDatepicker" data-role="Control" data-control_for="urvc16">
                                            <div class="input-group-btn"> <a class="btn btn-default icon-calendar ui-datepicker-trigger" alt="..." title="..."></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Project Title: *</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <textarea id="uahyfb8_control" name="inputField2" rows="3" cols="40" class="form-control input-sm uif-textAreaControl valid" data-role="Control" data-control_for="uahyfb8" data-original-title="" title="" data-hastooltip="true"></textarea>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="3_label" for="3_control" class="clearfix clearfix uif-label displayWith-3 md-float-right uif-labelBlock" data-label_for="3"> Sponsor: *</label>
                </div>
                <div class="col-md-8">
                    <div id="3" class="uif-inputField" data-parent="" data-role="InputField" data-label="Field 2">
                        <div class="input-group">
                            <input id="uk9itqu_control" type="text" name="inputField1" value="" size="30" class="form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                            <div class="input-group-btn">
                                <button id="" class="btn btn-default uif-action icon-search" data-onclick="" data-role="Action" data-focusid="" data-submit_data=""> </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <hr>
                    <a href="prop-basics-details.php" class="btn btn-primary"> Save and Continue</a> <a href="index.php" class="btn btn-default"> Cancel</a> </div>
            </section>
        </main>
    </div>
</form>
<?php include ('includes/footer-scripts.php') ?>
<?php include('includes/modals-global-propdev.php') ?>
</body>
</html>
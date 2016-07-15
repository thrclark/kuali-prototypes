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
<?php include('includes/styles.php') ?>
<link rel="stylesheet" href="../../themes/kboot/stylesheets/bootstrap-select.css" />
<link rel="stylesheet" href="../../themes/kboot/stylesheets/bootstrap-multiselect.css" />
</head>
<body id="Uif-Application">
<?php include('includes/uif-applicationHeader.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View">
    <?php include('includes/uif-viewHeader-pd-bs.php') ?>
    <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid">
        <?php include('includes/uif-navigation-proposal-bs.php') ?>
        <input name="script" type="hidden" data-role="dataScript" data-for="LabsProposal" value="var dataComponent = jQuery('#LabsProposal');dataComponent.data('req_indicator',&quot;*&quot;);dataComponent.data('action_defaults',{&quot;focusOnIdAfterSubmit&quot;:&quot;SELF&quot;,&quot;loadingMessage&quot;:&quot;Loading...&quot;,&quot;clearDirtyOnAction&quot;:false,&quot;dirtyOnAction&quot;:false,&quot;validate&quot;:false,&quot;performDirtyValidation&quot;:false,&quot;ajaxSubmit&quot;:true,&quot;disableBlocking&quot;:false,&quot;onClick&quot;:&quot;actionInvokeHandler(this);&quot;,&quot;submit_data&quot;:{},&quot;focusId&quot;:&quot;SELF&quot;});dataComponent.data('field_validation_defaults',{&quot;displayMessages&quot;:true,&quot;useTooltip&quot;:true,&quot;messagingEnabled&quot;:true,&quot;hasOwnMessages&quot;:false,&quot;showIcons&quot;:false,&quot;errors&quot;:[],&quot;warnings&quot;:[],&quot;info&quot;:[],&quot;serverErrors&quot;:[],&quot;serverWarnings&quot;:[],&quot;serverInfo&quot;:[]});dataComponent.data('group_validation_defaults',{&quot;summarize&quot;:true,&quot;displayMessages&quot;:true,&quot;closeable&quot;:true,&quot;collapseFieldMessages&quot;:true,&quot;showPageSummaryHeader&quot;:true,&quot;displayLabel&quot;:true,&quot;displayHeaderSummary&quot;:true,&quot;hasOwnMessages&quot;:false,&quot;pageLevel&quot;:false,&quot;forceShow&quot;:false,&quot;isTableCollection&quot;:false,&quot;order&quot;:[],&quot;sections&quot;:[],&quot;errors&quot;:[],&quot;warnings&quot;:[],&quot;info&quot;:[],&quot;serverErrors&quot;:[],&quot;serverWarnings&quot;:[],&quot;serverInfo&quot;:[]});" />
        <input name="script" type="hidden" data-role="script" data-for="LabsProposal" value="jQuery(document).ready(function(e) {jQuery.extend(jQuery.validator.messages, {
required: 'Required',
minExclusive: 'Value must be greater than {0}',
maxInclusive: 'Value cannot be greater than {0}',
minLengthConditional: 'Must be at least {0} characters',
maxLengthConditional: 'Must be at most {0} characters'});});if (actionDefaults == undefined) {
        actionDefaults = jQuery(&quot;[data-role='View']&quot;).data(kradVariables.ACTION_DEFAULTS);
        }" />
        <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
            <div class="uif-header-inner">
                <h2 id="" class="uif-headerText"> <span class="uif-headerText-span">Proposal Details</span> </h2>
                <div id="" class="uif-verticalBoxGroup uif-header-lowerGroup" data-parent="LabsProposal-Page">
                    <div id="u1ndzhxa" class="text-muted uif-boxLayoutVerticalItem clearfix" data-parent="">
                        <p><span class="uif-requiredMessage">*</span> Indicates required fields</p>
                    </div>
                </div>
            </div>
            <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Proposal Type: <span class="uif-requiredMessage">*</span></label>
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
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Lead Unit: <span class="uif-requiredMessage">*</span></label>
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
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Activity Type: <span class="uif-requiredMessage">*</span></label>
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
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Project Dates: <span class="uif-requiredMessage">*</span></label>
                </div>
                <div class="col-md-8">
                    <div id="u8abdmj" class="uif-fieldGroup" data-parent="u1rttg6l" data-label="Field Group" data-group="u1fjua60">
                        <fieldset aria-labelledby="u8abdmj_label" id="u8abdmj_fieldset">
                            <legend style="display: none">Project dates</legend>
                            <div id="u1fjua60" class="row multi-columns-row row multi-columns-row uif-cssGridGroup" data-parent="u8abdmj">
                                <div class="col-md-3">
                                    <div id="uahyfb8" class="uif-inputField uif-boxLayoutVerticalItem pull-left clearfix" data-parent="Demo-DatePicker-Example1" data-role="InputField" data-label="Date Field">
                                        <div class="input-group">
                                            <input id='uahyfb8_control' type="text" name="inputField1" value="" size="10" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uahyfb8" placeholder="mm/dd/yyyy">
                                            <input name="script" type="hidden" data-role="script" value="createDatePicker('uahyfb8_control', {showOn:&quot;button&quot;,buttonImageOnly:true,showAnim:&quot;slideDown&quot;,showButtonPanel:true,changeMonth:true,changeYear:true,buttonImage:&quot;http://env14.rice.kuali.org/themes/kboot/images/cal.gif&quot;}, false);" />
                                            <div class="input-group-btn"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <p id="u15sznn1" class="form-control-static text-center uif-message "> to </p>
                                </div>
                                <div class="col-md-3">
                                    <div id="urvc16" class="uif-inputField uif-boxLayoutVerticalItem pull-left clearfix" data-parent="Demo-DatePicker-Example1" data-role="InputField" data-label="Date Field">
                                        <div class="input-group">
                                            <input id='urvc16_control' type="text" name="inputField1" value="" size="10" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="urvc16" placeholder="mm/dd/yyyy">
                                            <input name="script" type="hidden" data-role="script" value="createDatePicker('urvc16_control', {showOn:&quot;button&quot;,buttonImageOnly:true,showAnim:&quot;slideDown&quot;,showButtonPanel:true,changeMonth:true,changeYear:true,buttonImage:&quot;http://env14.rice.kuali.org/themes/kboot/images/cal.gif&quot;}, false);" />
                                            <div class="input-group-btn"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Project Title: <span class="uif-requiredMessage">*</span></label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <textarea id="uahyfb8_control" name="inputField2" rows="3" cols="40" class="form-control input-sm uif-textAreaControl valid" data-role="Control" data-control_for="uahyfb8" data-original-title="" title="" data-hastooltip="true"></textarea>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="3_label" for="3_control" class="clearfix clearfix uif-label displayWith-3 md-float-right uif-labelBlock" data-label_for="3"> Sponsor: <span class="uif-requiredMessage">*</span></label>
                </div>
                <div class="col-md-8">
                    <div id="uk9itqaa" class="uif-inputField" data-parent="" data-role="InputField" data-label="Field 1">
                        <div class="input-group">
                            <input id="uk9itqaa_control" type="text" name="inputField1" value="" size="30" class="form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                            <div class="input-group-btn">
                                <button id="uk9itqaa_button" class="uif-actionLink btn btn-default uif-action icon-search" tabindex="0" data-toggle="modal" data-target="#modal-find-sponsor"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="3_label" for="3_control" class="clearfix clearfix uif-label displayWith-3 md-float-right uif-labelBlock" data-label_for="3"> Prime Sponsor:</label>
                </div>
                <div class="col-md-8">
                    <div id="uk9itqu" class="uif-inputField" data-parent="" data-role="InputField" data-label="Field 2">
                        <div class="input-group">
                            <input id="uk9itqu_control" type="text" name="inputField1" value="" size="30" class="form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                            <div class="input-group-btn">
                                <button id="uk9itqu_button" class="uif-actionLink btn btn-default uif-action icon-search" tabindex="0" data-toggle="modal" data-target="#modal-find-sponsor"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="uk9itrp_label" for="uk9itrp_control" class="clearfix clearfix uif-label displayWith-3 md-float-right uif-labelBlock" data-label_for="uk9itrp">Keywords: <span class="uif-requiredMessage">*</span></label>
                </div>
                <div class="col-md-10">
                    <div id="uk9itrp" class="uif-inputField uif-boxLayoutVerticalItem pull-left clearfix" data-has_messages="true" data-parent="u1rttg5q" data-role="InputField" data-label="Bootstrap select">
                        <select multiple="multiple" id="uk9itrp_control" name="multiSelectField2" size="4" class="form-control input-sm uif-multiSelectControl selectpicker required" data-live-search="true" data-control_for="uk9itrp" data-role="Control" style="display: none;" aria-required="true">
                            <optgroup label="group 1">
                            <option value="sub1_1">sub1_1</option>
                            <option value="sub1_2">sub1_2</option>
                            <option value="sub1_3">sub1_3</option>
                            </optgroup>
                            <optgroup label="group 2">
                            <option value="sub2_1">sub2_1</option>
                            <option value="sub2_2">sub2_2</option>
                            <option value="sub2_3">sub2_3</option>
                            <option value="sub2_4">sub2_4</option>
                            <option value="sub2_5">sub2_5</option>
                            <option value="sub2_6">sub2_6</option>
                            <option value="sub2_7">sub2_7</option>
                            <option value="sub2_8">sub2_8</option>
                            <option value="sub2_9">sub2_9</option>
                            <option value="sub2_10">sub2_10</option>
                            <option value="sub2_11">sub2_11</option>
                            <option value="sub2_12">sub2_12</option>
                            <option value="sub2_13">sub2_13</option>
                            <option value="sub2_14">sub2_14</option>
                            <option value="sub2_15">sub2_15</option>
                            <option value="sub2_16">sub2_16</option>
                            <option value="sub2_17">sub2_17</option>
                            <option value="sub2_18">sub2_18</option>
                            <option value="sub2_19">sub2_19</option>
                            <option value="sub2_20">sub2_20</option>
                            <option value="sub2_21">sub2_21</option>
                            <option value="sub2_22">sub2_22</option>
                            </optgroup>
                            <optgroup label="group 3">
                            <option value="sub3_1">sub3_1</option>
                            <option value="sub3_2">sub3_2</option>
                            <option value="sub3_3">sub3_3</option>
                            <option value="sub3_4">sub3_4</option>
                            <option value="sub3_5">sub3_5</option>
                            <option value="sub3_6">sub3_6</option>
                            <option value="sub3_7">sub3_7</option>
                            </optgroup>
                            <optgroup label="group 4">
                            <option value="sub4_1">sub4_1</option>
                            <option value="sub4_2">sub4_2</option>
                            <option value="sub4_3">sub4_3</option>
                            <option value="sub4_4">sub4_4</option>
                            <option value="sub4_5">sub4_5</option>
                            <option value="sub4_6">sub4_6</option>
                            <option value="sub4_7">sub4_7</option>
                            <option value="sub4_8">sub4_8</option>
                            <option value="sub4_9">sub4_9</option>
                            <option value="sub4_10">sub4_10</option>
                            <option value="sub4_11">sub4_11</option>
                            <option value="sub4_12">sub4_12</option>
                            <option value="sub4_13">sub4_13</option>
                            <option value="sub4_14">sub4_14</option>
                            <option value="sub4_15">sub4_15</option>
                            <option value="sub4_16">sub4_16</option>
                            <option value="sub4_17">sub4_17</option>
                            <option value="sub4_18">sub4_18</option>
                            <option value="sub4_19">sub4_19</option>
                            <option value="sub4_20">sub4_20</option>
                            <option value="sub4_21">sub4_21</option>
                            <option value="sub4_22">sub4_22</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
        <div class="global-navigate btn-group">
            <button type="button" href="prop-basics-s2s.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
        </div>       <!--        
        <div class=" global-actions btn-group dropup">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Document Actions <span class="caret"></span> </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Submit Document</a></li>
                <li><a href="#" data-toggle="modal" data-target="#canceldoc"> Cancel Document </a> </li>
                <li class="divider"></li>
                <li><a href="#">Save Document</a></li>
                <li><a href="#">Close Document</a></li>
            </ul>
        </div>-->
        <div class="global-actions btn-group">
            <button type="button" id="" class="btn btn-default">Save</button>
            <button type="button" id="" class="btn btn-default">Close</button>
            <button type="button" id="" class="btn btn-default" data-toggle="modal" data-target="#globalaction-submit">Submit</button>
            <button type="button" id="" class="btn btn-default" data-toggle="modal" data-target="#globalaction-cancel">Cancel</button>
        </div>
    </div>
</form>
<?php include ('includes/footer-scripts.php') ?>
<?php include('includes/modals-global-propdev.php') ?>
<?php include('includes/modals-prop/basics-details-sponsor.php') ?>
<?php include('includes/modals-prop/basics-details-sponsor-addressbook.php') ?>
<?php include('includes/modals-prop/basics-details-sponsor-addressbook-sc.php') ?>
<?php include('includes/modals-prop/basics-details-sponsor-results.php') ?>
<?php include ('includes/modals-prop/find-sponsor-addressbook-results1.php') ?>
<script>
//    jQuery('#indeterminate1').prop("indeterminate", true);
    // jQuery('.multiselect').multiselect({ enableFiltering: true });
</script>
</body>
</html>
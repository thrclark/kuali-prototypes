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
    <?php include('includes/uif-viewHeader-pd.php') ?>
    <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid">
        <?php include('includes/uif-navigation-proposal.php') ?>
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
        
        
        <div class="alert alert-info fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <p class="lead">View Only</p> <p>This document is currently set to 'view only'. <a href="prop-basics-details.php" class="">Activate Edit Mode</a> </p> 
    </div>
    
    
            <div class="uif-header-inner">
                <h2 id="" class="uif-headerText"> <span class="uif-headerText-span">Proposal Details</span> </h2>
                <div id="" class="uif-verticalBoxGroup uif-header-lowerGroup" data-parent="LabsProposal-Page">
                    <div id="" class="text-muted uif-boxLayoutVerticalItem clearfix" data-parent="">
                        <p><span class="uif-requiredMessage">*</span> Indicates required fields</p>
                    </div>
                </div>
            </div>
            <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Proposal Type: <span class="uif-requiredMessage">*</span></label>
                </div>
                <div class="col-md-8">
                     <p class="form-control-static">Renewal</p>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Lead Unit: <span class="uif-requiredMessage">*</span></label>
                </div>
                <div class="col-md-8">
                   <p class="form-control-static">000001 - University</p>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Activity Type: <span class="uif-requiredMessage">*</span></label>
                </div>
                <div class="col-md-8">
                     <p class="form-control-static">Construction</p>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Project Dates: <span class="uif-requiredMessage">*</span></label>
                </div>
                <div class="col-md-8">
                
                
                    <p class="form-control-static">10/21/2014 to 10/21/2017</p>
                    
                    
                    
                    
                    
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Project Title: <span class="uif-requiredMessage">*</span></label>
                </div>
                <div class="col-md-8">
                     <p class="form-control-static">Field Research to identify the differences between African and European swallows</p>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="3_label" for="3_control" class="clearfix clearfix uif-label displayWith-3 md-float-right uif-labelBlock" data-label_for="3"> Sponsor: <span class="uif-requiredMessage">*</span></label>
                </div>
                <div class="col-md-8">
                      <p class="form-control-static">000500 NSF</p>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="3_label" for="3_control" class="clearfix clearfix uif-label displayWith-3 md-float-right uif-labelBlock" data-label_for="3"> Prime Sponsor:</label>
                </div>
                <div class="col-md-8">
                     <p class="form-control-static"></p>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="uk9itrp_label" for="uk9itrp_control" class="clearfix clearfix uif-label displayWith-3 md-float-right uif-labelBlock" data-label_for="uk9itrp">Keywords: <span class="uif-requiredMessage">*</span></label>
                </div>
                <div class="col-md-10">
                      <p class="form-control-static">Birds, Africa, Europe</p>
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
        </div>--> <div class="global-actions btn-group">

                <button type="button" id="" class="btn btn-default">Save</button>
                <button type="button" id="" class="btn btn-default">Close</button>
                <button type="button" id="" class="btn btn-default" data-toggle="modal" data-target="#globalaction-submit">Submit</button>
                <button type="button" id="" class="btn btn-default" data-toggle="modal" data-target="#globalaction-cancel">Cancel</button>

            </div>
            
    <?php include ('../cross-project/includes/build-footer.php'); ?>
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
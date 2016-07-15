<?php
$page = 'docinfo';
$section = '';
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
        <main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left: 250px;">
            <header class="clearfix uif-header-contentWrapper">
                <div id="u148pgf0" class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                    <h2 class="uif-headerText"><span class="uif-headerText-span">Document Overview </span></h2>
                </div>
                <div id="uw4ggjs" class="uif-verticalBoxGroup uif-header-lowerGroup" data-parent="LabsProposal-Page">
                    <div id="u1ndzhxa" class="text-muted uif-boxLayoutVerticalItem clearfix" data-parent="uw4ggjs">
                        <p>* Indicates required fields</p>
                    </div>
                </div>
            </header>
            <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Action Being Taken:<span class="uif-requiredMessage">*</span></label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="u11k8c13_control" type="text" name="field1" value="Edting role information for Superuser" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="u11k8c13" aria-required="true" aria-invalid="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Org Doc Number:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="u11k8c13_control" type="text" name="field1" value="" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="u11k8c13" aria-required="true" aria-invalid="true">
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
        </main>
    </div>
    <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
        <div class="global-navigate btn-group">
            <button type="button" href="prop-basics-s2s.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
        </div>
       <!--        
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
<?php
$page = 'non-personnel';
$section = '';
?>
<!DOCTYPE HTML>
<html lang=en>
<head>
<meta charset=UTF-8>
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>
    <link rel="stylesheet" href="../../themes/kboot/stylesheets/bootstrap-select.css" />
    <link rel="stylesheet" href="../../themes/kboot/stylesheets/bootstrap-multiselect.css" />
</head>
<body id="Uif-Application">
<!-- APPLICATION HEADER -->
<?php include('includes/uif-applicationHeader.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method=post accept-charset=UTF-8>
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role=View ><!-- BREADCRUMBS --> 
        <!-- VIEW HEADER -->
        <?php include('includes/uif-viewHeader-budget.php') ?>

        <input name="script" type="hidden" data-role="dataScript" data-for="LabsProposal" value="var dataComponent = jQuery('#LabsProposal');dataComponent.data('req_indicator',&quot;*&quot;);dataComponent.data('action_defaults',{&quot;focusOnIdAfterSubmit&quot;:&quot;SELF&quot;,&quot;loadingMessage&quot;:&quot;Loading...&quot;,&quot;clearDirtyOnAction&quot;:false,&quot;dirtyOnAction&quot;:false,&quot;validate&quot;:false,&quot;performDirtyValidation&quot;:false,&quot;ajaxSubmit&quot;:true,&quot;disableBlocking&quot;:false,&quot;onClick&quot;:&quot;actionInvokeHandler(this);&quot;,&quot;submit_data&quot;:{},&quot;focusId&quot;:&quot;SELF&quot;});dataComponent.data('field_validation_defaults',{&quot;displayMessages&quot;:true,&quot;useTooltip&quot;:true,&quot;messagingEnabled&quot;:true,&quot;hasOwnMessages&quot;:false,&quot;showIcons&quot;:false,&quot;errors&quot;:[],&quot;warnings&quot;:[],&quot;info&quot;:[],&quot;serverErrors&quot;:[],&quot;serverWarnings&quot;:[],&quot;serverInfo&quot;:[]});dataComponent.data('group_validation_defaults',{&quot;summarize&quot;:true,&quot;displayMessages&quot;:true,&quot;closeable&quot;:true,&quot;collapseFieldMessages&quot;:true,&quot;showPageSummaryHeader&quot;:true,&quot;displayLabel&quot;:true,&quot;displayHeaderSummary&quot;:true,&quot;hasOwnMessages&quot;:false,&quot;pageLevel&quot;:false,&quot;forceShow&quot;:false,&quot;isTableCollection&quot;:false,&quot;order&quot;:[],&quot;sections&quot;:[],&quot;errors&quot;:[],&quot;warnings&quot;:[],&quot;info&quot;:[],&quot;serverErrors&quot;:[],&quot;serverWarnings&quot;:[],&quot;serverInfo&quot;:[]});" /><input name="script" type="hidden" data-role="script" data-for="LabsProposal" value="jQuery(document).ready(function(e) {jQuery.extend(jQuery.validator.messages, {
required: 'Required',
minExclusive: 'Value must be greater than {0}',
maxInclusive: 'Value cannot be greater than {0}',
minLengthConditional: 'Must be at least {0} characters',
maxLengthConditional: 'Must be at most {0} characters'});});if (actionDefaults == undefined) {
        actionDefaults = jQuery(&quot;[data-role='View']&quot;).data(kradVariables.ACTION_DEFAULTS);
        }" />

        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid"><!-- VIEW NAVIGATION -->
            <?php include ('includes/uif-navigation-budget.php') ?>
               
   <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
<div class="uif-header-inner">
                    <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Non-Personnel Costs </span> </h2>
                    <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                       
                        
                    </div>
                </div>
             
                <p id="u1iaxrzf" class="uif-message uif-boxLayoutVerticalItem clearfix">Add and configure non-personnel items for this budget period.</p>
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li class="active"><a href="#p1" data-toggle="tab">Period 1 </a></li>
                    <li><a href="#p2" data-toggle="tab" class="tabWarning" >Period 2</a></li>
                    <li><a href="#p3" data-toggle="tab" class="tabWarning">Period 3</a></li>
                    <li><a href="#p4" data-toggle="tab" class="tabWarning">Period 4</a></li>
                    <li><a href="#p5" data-toggle="tab" class="tabWarning">Period 5</a></li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane active" id="p1">
                        <header class="clearfix uif-header-contentWrapper">
                            <div id="u148pgf0" class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="">Period 1 <small>(1/12/14 - 1/11/15)</small></h3>
                                    </div>
                                    <div class="col-md-6 uif-pagetools btn-group">
                                        <button type="button" class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#modal-budget-add-non-personnel">Assign Non-Personnel...</button>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <section class="clearfix">
                            <div>
                                <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable" id="Demo-LightTableGroup1_lightTable" aria-describedby="Demo-LightTableGroup1_lightTable_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Field 1: : activate to sort column "><label id="urh9zx8" class="uif-label">Item</label></th>
                                            <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="Field 2: : activate to sort column ">Start</th>
                                            <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="Field 3: : activate to sort column ">End</th>
                                            <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="Field 4: : activate to sort column ascending">Quantity</th>
                                            <th class=""  role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="Field 4: : activate to sort column ">Total Base Cost</th>
                                            <th class=""  role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" aria-label="Field 4: : activate to sort column ">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="active">
                                            <th colspan="6"> <span class="uif-headerText pull-left" >Equipment</span> </th>
                                        </tr>
                                        <tr>
                                            <td>Microscope</td>
                                            <td><span data-edit-type="input">01/01/14</span></td>
                                            <td><span data-edit-type="input">12/31/14</span></td>
                                            <td class="text-right">1</td>
                                            <td>$100.00</td>
                                            <td><div class="dropdown dropdown-large"> <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-edit-assigned-non-personnel-01">Details</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a> </div></td>
                                        </tr>
                                        <tr class="active">
                                            <th colspan="6"><span class="uif-headerText pull-left" >Travel</span></th>
                                        </tr>
                                        <tr class="active">
                                            <th colspan="6">
                                                <span class="uif-headerText pull-left" >Participant Support</span>
                                                <div class="inline-edit pull-right form-inline">
                                                    Number of participants: 
                                                    <input type="num" size="1" class="form-control input-xs" id="part_support_num_parts" value="3" style="padding: 1px 6px" />
                                                    <button type="button" class="btn btn-xs btn-default">Update</button>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>Microscope</td>
                                            <td><span data-edit-type="input">01/01/14</span></td>
                                            <td><span data-edit-type="input">12/31/14</span></td>
                                            <td class="text-right">1</td>
                                            <td>$100.00</td>
                                            <td><div class="dropdown dropdown-large"> <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-edit-assigned-non-personnel-01">Details</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a> </div></td>
                                        </tr>
                                        <tr class="active">
                                            <th colspan="6"><span class="uif-headerText pull-left" >Other</span></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane" id="p2"></div>
                    <div class="tab-pane" id="p3"></div>
                    <div class="tab-pane" id="p4"></div>
                    <div class="tab-pane" id="p5"></div>
                </div>
            </main>
        </div>
        <!-- VIEW FOOTER -->
        
        <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
           
                <div class="global-navigate btn-group">
                    <button type="button" href="bud-personnelCosts-persPeriod.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
                    <button type="button" id="save-continue"  data-toggle="modal" data-target="#save-modal"   class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
                </div>  <div class="global-actions btn-group">            

<button type="button" class="btn btn-default">Complete Budget</button>
         
            <button type="button" id="" class="btn btn-default">Save</button>
            <button type="button" id="" class="btn btn-default">Close</button>
            
            
           
            
            
        </div>
        
           
        </div>
        <!--    <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;"> <div class="global-actions"> <a id="" class="btn btn-default uif-secondaryActionButton uif-boxLayoutHorizontalItem">Save </a> <a id="" class="btn btn-default uif-secondaryActionButton uif-boxLayoutHorizontalItem">Reload </a> <a id="ufuknl9" class="btn btn-default uif-secondaryActionButton uif-boxLayoutHorizontalItem">Complete Budget </a> </div>--> 
        <!--           <div class="global-navigate"> <a href="bud-personnelCosts-persPeriod.php" id="ufuknm4" class="btn btn-default uif-primaryActionButton uif-boxLayoutHorizontalItem"><span class="icon-chevron-left"></span> Back</a>--> 
        <!--            <a href="#" id="save-modal-button" class="btn btn-primary uif-primaryActionButton uif-boxLayoutHorizontalItem" data-toggle="modal" data-target="#save-modal">Continue <span class="icon-chevron-right"></span></a></div>--> 
        <!--        </div>--> 
        <!-- DIALOGS/Placeholders --></div>
</form>
<?php include ('includes/footer-scripts.php') ?>
<?php include ('includes/modals-global-budget.php') ?>
<!-- MODAL  budget edit non-personnel item -->
<?php include ('includes/modals-budget/edit-non-personnel-01.php') ?>
<!-- MODAL  budget add non-personnel item -->
<?php include ('includes/modals-budget/add-non-personnel.php') ?>
<script>

		(function($){


$(".tabWarning").click(function(e){

  alert("[MODAL WINDOW] --- You are about to enter costs in a later period. Doing so will prevent you from using the generate all periods function to auto-calculate later periods. Do you wish to continue? {{ CANCEL (button)  | CONTINUE (button) }} ---[MODAL WINDOW]");
return false;

});
}(jQuery))

</script>
<div class="modal fade" id="save-modal" tabindex=-1 role=dialog aria-labelledby=myModalLabel aria-hidden=true>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type=button class="close" data-dismiss=modal aria-hidden=true>&times;</button>
                <h4 class="modal-title" id="myModalLabel">Generate All Periods?</h4>
            </div>
            <div class="modal-body">
                <p>Would you like to use the generate all periods functionality to auto-calculate later periods based on period 1 data? Please note that this action can only be taken once.</p>
            </div>
            <div class="modal-footer"><a href="bud-summary.php?generate=no" class="btn btn-default">No</a> <a href="bud-subawards.php?generate=yes" class="btn btn-primary">Yes Generate All Periods</a></div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Details &amp; Rates</h4>
            </div>
            <div class="modal-body">
                <ul id="rateDetails" class="nav nav-tabs" data-tabs="tabs">
                    <li class="active"><a href="#general" data-toggle="tab">General</a></li>
                    <li><a href="#rates" data-toggle="tab">Rates</a></li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane active" id="general">
                        <h4>Details</h4>
                        <div class="form-horizontal uif-cssGridGroup" role="form">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Budget Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option value="1">Senior Personnel</option>
                                        <option value="2">Trainee/Participant Costs - Other</option>
                                        <option value="3">Materials </option>
                                        <option value="4">Human Subjects</option>
                                        <option value="5">Vertebrate Animals</option>
                                        <option value="6">Publication Costs/Documentation/Dissemenation</option>
                                        <option value="7">Travel - Domestic</option>
                                        <option value="8">Alteration and Renovations</option>
                                        <option value="9">Inpatient Care Costs</option>
                                        <option value="10">Duplicating</option>
                                        <option value="11">Postage</option>
                                        <option value="12">Telephone, Fax</option>
                                        <option value="13" selected="selected">Equipment Rental</option>
                                        <option value="14">Service Agreement(s)</option>
                                        <option value="15">Communications/Marketing</option>
                                        <option value="16">Software</option>
                                        <option value="17">Computer Time</option>
                                        <option value="18">Meeting Costs</option>
                                        <option value="19">Other Operating Expenses</option>
                                        <option value="20">Equipment</option>
                                        <option value="21">Professional Services/Consultant</option>
                                        <option value="22">Subcontracts</option>
                                        <option value="23">Travel - Foreign</option>
                                        <option value="25">Postdoctoral</option>
                                        <option value="26">Other Professionals</option>
                                        <option value="27">Graduate Students</option>
                                        <option value="28">Undergraduate Students</option>
                                        <option value="29">Project Support Staff</option>
                                        <option value="30">Other Personnel</option>
                                        <option value="31">Trainee/Participant Costs - Travel</option>
                                        <option value="32">Trainee/Participant Costs - Stipends</option>
                                        <option value="33">Outpatient costs</option>
                                        <option value="34">Calculated Costs</option>
                                        <option value="35">Trainee/Participant Costs - Tuition</option>
                                        <option value="36">Trainee/Participant Costs - Subsistence</option>
                                        <option value="37">Proposal Hierarchy Sub-Projects</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Unrecovered F&amp;A</label>
                                <div class="col-sm-9">
                                    <p class="form-control-static">0.00</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Cost Sharing</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" placeholder="$0.00">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Justification</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">
                                            Apply Inflation </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">
                                            Submit Cost Sharing </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">
                                            On Campus </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="rates">
                        <h4>Rates</h4>
                        <table class="table table-condensed">
                            <tbody>
                                <tr>
                                    <th > Class </th>
                                    <th > Type </th>
                                    <th > Rate Cost </th>
                                    <th > Rate Cost Sharing </th>
                                    <th > Apply Rate? </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#rateDetails').tab();
    });
</script></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Apply to Later Periods</button>
            </div>
        </div>
    </div>
</div>
<!-- end Modal --> 


</body>
</html>
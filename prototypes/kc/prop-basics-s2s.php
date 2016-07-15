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
</head>

<body id="Uif-Application">
<?php include('includes/uif-applicationHeader.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View">
    <!-- BREADCRUMBS --> 
    <!-- VIEW HEADER -->
    
    <?php include('includes/uif-viewHeader-pd.php') ?>
    <!-- // VIEW HEADER  --> 
    <!-- VIEW CONTENT -->
    <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid"> 
        <!-- VIEW NAVIGATION -->
        <?php include('includes/uif-navigation-proposal.php') ?>
        <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
            <div class="uif-header-inner">
                <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> S2S Opportunity Search </span> </h2>
                <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"> Remove Opportunity <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="prop-basics-s2s-empty.php">Remove &amp; Leave Empty</a></li>
                        <li><a href="#">Remove &amp; Add New</a></li>
                    </ul>
                </div>
            </div> <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li class="active"><a href="#opportunity" data-toggle="tab">Opportunity</a></li>
                    <li><a href="#forms" data-toggle="tab">Forms</a></li>
                    <li><a href="#subdetails" data-toggle="tab">Submission Details</a></li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane active uif-cssGridGroup" id="opportunity">
                        <h3 class="uif-headerText"> Opportunity</h3>
                        <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Opportunity ID</label>
                        </div>
                        <div class="col-md-8">
                            <p class="form-control-static">PA-13-302</p>
                        </div>
                        <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Opportunity Title </label>
                        </div>
                        <div class="col-md-8">
                            <p class="form-control-static">Parent R01</p>
                        </div>
                        <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Submission Type</label>
                        </div>
                        <div class="col-md-8">
                            <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required valid" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true">
                                    <option value="B">Decrease Award</option>
                                    <option value="BD">Decrease Award &amp; Decrease Duration</option>
                                    <option value="BC">Decrease Award &amp; Increase Duration</option>
                                    <option value="D">Decrease Duration</option>
                                    <option value="A">Increase Award</option>
                                    <option value="AD">Increase Award &amp; Decrease Duration</option>
                                    <option value="AC">Increase Award &amp; Increase Duration</option>
                                    <option value="C">Increase Duration</option>
                                    <option value="OTHER">Other...</option>
                                </select>
                            </div>
                        </div>
                        <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Revision Type</label>
                        </div>
                        <div class="col-md-8">
                            <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required valid" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true">
                                    <option value="2">Application</option>
                                    <option value="1">Preapplication</option>
                                    <option value="3">Change/Corrected Application</option>
                                </select>
                            </div>
                        </div>
                        <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Prev Grants.gov tracking ID</label>
                        </div>
                        <div class="col-md-8">
                            <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                            </div>
                        </div>
                        <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Agency Routing Identifier</label>
                        </div>
                        <div class="col-md-8">
                            <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                            </div>
                        </div>
                        <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">CFDA Number</label>
                        </div>
                        <div class="col-md-8">
                            <p class="form-control-static">00.000</p>
                        </div>
                        <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Competition Id</label>
                        </div>
                        <div class="col-md-8">
                            <p class="form-control-static">NEWRRFORM</p>
                        </div>
                        <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Opening Date</label>
                        </div>
                        <div class="col-md-8">
                            <p class="form-control-static">12/15/2014 5:00 PM</p>
                        </div>
                        <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Closing Date</label>
                        </div>
                        <div class="col-md-8">
                            <p class="form-control-static">12/15/2018 5:00 PM</p>
                        </div>
                        <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Instruction Page</label>
                        </div>
                        <div class="col-md-8">
                            <p class="form-control-static"><a href="#">View Page</a></p>
                        </div>
                        <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Schema URL </label>
                        </div>
                        <div class="col-md-8">
                            <p class="form-control-static"><a href="#">View Schema</a></p>
                        </div>
                        <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> S2S Provider</label>
                        </div>
                        <div class="col-md-8">
                            <p class="form-control-static"><a href="#">grants.gov</a></p>
                        </div>
                    </div>
                    <div class="tab-pane" id="forms">
                        <h3 class="uif-headerText"> Forms</h3>
                        <table class="table table-condensed table-hover">
                            <tbody>
                                <tr>
                                    <th>Form Name</th>
                                    <th>Mandatory</th>
                                    <th> <div class="dropdown"> <a class="dropdown-toggle " data-toggle="dropdown" href="#" title="Check the box next to each additional form you want to be included in this proposal.">Include</a>
                                            <ul class="dropdown-menu" style="  text-align:left;">
                                                <li><a href="#">Select All</a></li>
                                                <li><a href="#">Select None</a></li>
                                            </ul>
                                        </div>
                                    </th>
                                    <th>Description</th>
                                    <th> <div class="dropdown"> <a class="dropdown-toggle " data-toggle="dropdown" href="#" title="Check the box next to each form you want to be included in a single PDF printout.">Select</a>
                                            <ul class="dropdown-menu" style="  text-align:left; left:-80px">
                                                <li><a href="#">Select All</a></li>
                                                <li><a href="#">Select None</a></li>
                                            </ul>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <td> RR_SF424_1_2-V1.2 </td>
                                    <td> Yes </td>
                                    <td> Yes </td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint" checked="checked" disabled=""></td>
                                </tr>
                                <tr>
                                    <td> Attachments-V1.1 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="18" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_Budget-V1.1 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="23" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_Budget10-V1.1 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="28" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_FedNonFedBudget-V1.1 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="33" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_FedNonFedBudget10-V1.1 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="38" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_FedNonFed_SubawardBudget-V1.2 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="43" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_FedNonFedSubawardBudget10_10-V1.2 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="48" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_FedNonFed_SubawardBudget10_30-V1.2 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="53" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_FedNonFed_SubawardBudget30-V1.2 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="58" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_KeyPerson-V1.1 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="63" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_KeyPersonExpanded_1_2-V1.2 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="68" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_OtherProjectInfo_1_3-V1.3 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="73" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_PersonalData_1_2-V1.2 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="78" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_SubawardBudget-V1.2 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="83" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_SubawardBudget10_10-V1.2 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="88" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_SubawardBudget10_30-V1.2 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="93" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td> RR_SubawardBudget30-V1.2 </td>
                                    <td> No </td>
                                    <td><input type="checkbox" tabindex="98" title="Include"></td>
                                    <td> Available </td>
                                    <td><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[0].selectToPrint" value="on">-->
                                        
                                        <input type="checkbox" tabindex="15" title="selectToPrint"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td align="center"><!--  <input type="checkbox" name="document.developmentProposalList[0].s2sOpportunity.s2sOppForms[17].selectToPrint" value="on">-->
                                        
                                        <button class="btn btn-default btn-xs">Create PDF</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="subdetails">
                        <h3 class="uif-headerText"> Submission Details</h3>
                        <div class="alert alert-info fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <p>Submission details will be available here after the proposal is submitted.</p>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>
            </section>
        </main>
    </div>
    <!-- VIEW FOOTER                  

-->
    <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;"> 
        <div class="global-navigate btn-group">
                <button type="button" href="prop-basics-details.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
                <button type="button" href="prop-basics-deliveryinfo.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
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

</body>
</html>
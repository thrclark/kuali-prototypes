<?php
$page = 'summary';
$section = '';
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
                <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Summary </span> </h2>
                <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> </div>
            </div>
            <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                <div id="u87qj8l" class="well uif-boxLayoutVerticalItem clearfix" role="progressbar" aria-valuetext="Current step:Save" aria-valuemax="5" aria-valuemin="0" aria-valuenow="1">
                    <div class="progress-details">
                        <div style="width: 33.3%;" class="uif-step complete"> <span class="sr-only">Step completed:</span> Saved </div>
                        <div style="width: 33.3%;" class="uif-step active"> <span class="sr-only">Current step:</span> Routing </div>
                        <div style="width: 33.3%;" class="uif-step"> <span class="sr-only">Unfinished step:</span> Approve </div>
                    </div>
                    <div class="progress">
                        <div style="width: 33.3%;" class="progress-bar progress-bar-success"></div>
                        <div style="width: 33.3%;" class="progress-bar progress-bar-info"></div>
                        <div style="width: 33.3%;" class="progress-bar progress-bar-empty"></div>
                    </div>
                </div>
            </section>
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li class="active"><a href="#tab0" data-toggle="tab" class="" title="">Reviewer's Notes</a></li>
                <li class=""><a href="#tab1" data-toggle="tab" class="" title="">Proposal Summary</a></li>
                <li class=""><a href="#tab2" data-toggle="tab" class="" title="">Personnel</a></li>
                <li class=""><a href="#tab3" data-toggle="tab" class="" title="">Credit Allocation</a></li>
                <li class=""><a href="#tab4" data-toggle="tab" class="" title="">Questionnaire</a></li>
                <li class=""><a href="#tab5" data-toggle="tab" class="" title="">Supplimental Info</a></li>
            </ul>
            <div id="my-tab-content" class="tab-content">
                <div class="tab-pane active" id="tab0">
                    <div class="uif-header-inner">
                        <h4 id="" class="uif-headerText"> <span class="uif-headerText-span">Reviewer's Notes </span> </h4>
                        <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-add-personnel1"><span aria-hidden="true" class="icon-plus"></span> Add Note</button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-condensed">
                        <tbody>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Person</th>
                                <th scope="col">Comment</th>
                            </tr>
                            <tr>
                                <td>03/22/2013</td>
                                <td style="white-space:nowrap">Oscar Peterson</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed lorem in risus ornare semper vitae sit amet mauris. Nam imperdiet sollicitudin odio vel convallis. Nullam non malesuada nisl. Nulla tempor fermentum ornare. Fusce sollicitudin lobortis arcu ut malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lacinia interdum eleifend. Cras nec hendrerit nulla. Nulla facilisi. In lectus arcu, consectetur vitae auctor in, condimentum at libero. Quisque hendrerit, velit in posuere ullamcorper, ligula nisi tincidunt eros, vel porta nunc ligula at eros. Duis facilisis nunc a lacus lobortis vestibulum. Suspendisse at quam tortor, ac pulvinar augue. </td>
                            </tr>
                            <tr>
                                <td>03/21/2013 </td>
                                <td>Horace Silver</td>
                                <td> Quisque hendrerit, velit in posuere ullamcorper, ligula nisi tincidunt eros, vel porta nunc ligula at eros. Duis facilisis nunc a lacus lobortis vestibulum. </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="tab1">
                    <h4>Proposal Summary</h4>
                    <table class="table table-condensed">
                        <tbody>
                            <tr>
                                <th class="col-md-3">Title</th>
                                <td>My Proposal Title</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Principal Investigator</th>
                                <td>Ward Cleaver</td>
                            </tr>
                            <tr>
                                <th>Lead Unit</th>
                                <td>BL-IIDC - IND INST ON DISABILITY/COMMNTY</td>
                            </tr>
                            <tr>
                                <th>Activity Type</th>
                                <td>Public Service &nbsp;</td>
                            </tr>
                            <tr>
                                <th>Proposal Number</th>
                                <td>1346432</td>
                            </tr>
                            <tr>
                                <th>Project Start Date</th>
                                <td>12/18/2013 &nbsp;</td>
                            </tr>
                            <tr>
                                <th>Project End Date</th>
                                <td>12/26/2013</td>
                            </tr>
                            <tr>
                                <th>Include Subaward(s)?</th>
                                <td>No</td>
                            </tr>
                            <tr>
                                <th>Sponsor</th>
                                <td>NSF</td>
                            </tr>
                            <tr>
                                <th>Sponsor Deadline Date</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Sponsor Deadline Type</th>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="tab2">
                    <h4> Personnel</h4>
                    <table class="table table-condensed">
                        <tbody>
                            <tr>
                                <th class="col-md-3">Key Person </th>
                                <th>Role</th>
                                <th>Unit</th>
                                <th>Proposal Person Certification</th>
                            </tr>
                            <tr>
                                <td class="col-md-3">Ward Cleaver</td>
                                <td>Principal Investigator &nbsp;</td>
                                <td>IND INST ON DISABILITY/COMMNTY&nbsp;</td>
                                <td>incomplete <a href="prop.keypersonnel.certify.html" target="_blank">(view)</a></td>
                            </tr>
                            <tr>
                                <td>Edward Haskell</td>
                                <td>Co-Investigator&nbsp;</td>
                                <td>University</td>
                                <td>incomplete <a href="prop.keypersonnel.certify.html" target="_blank">(view)</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="tab3">
                    <h4>Credit Allocation</h4>
                    <table class="table table-condensed credit-allocation">
                        <tbody>
                            <tr>
                                <th width="20.0%">&nbsp;</th>
                                <th width="20.0%">Recognition</th>
                                <th width="20.0%">Responsibility</th>
                                <th width="20.0%">Space</th>
                                <th width="20.0%">Financial</th>
                            </tr>
                            <tr class="active">
                                <td><strong> Edward H Haskell </strong></td>
                                <td><strong> 0.00 </strong></td>
                                <td><strong> 0.00 </strong></td>
                                <td><strong> 0.00 </strong></td>
                                <td><strong> 0.00 </strong></td>
                            </tr>
                            <tr>
                                <td class="text-muted">BL-IIDC - IND INST ON DISABILITY/COMMNTY</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                            </tr>
                            <tr>
                                <td class="text-muted">000001 - University</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                            </tr>
                            <tr>
                                <td>Unit Total:</td>
                                <td><strong>0.00</strong></td>
                                <td><strong>0.00</strong></td>
                                <td><strong>0.00</strong></td>
                                <td><strong>0.00</strong></td>
                            </tr>
                            <tr class="active">
                                <td><strong> Ward Cleaver </strong></td>
                                <td><strong> 0.00 </strong></td>
                                <td><strong> 0.00 </strong></td>
                                <td><strong> 0.00 </strong></td>
                                <td><strong> 0.00 </strong></td>
                            </tr>
                            <tr>
                                <td class="text-muted">000001 - University</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                            </tr>
                            <tr>
                                <td>Unit Total:</td>
                                <td><strong>0.00</strong></td>
                                <td><strong>0.00</strong></td>
                                <td><strong>0.00</strong></td>
                                <td><strong>0.00</strong></td>
                            </tr>
                            <!-- <tr class="active" >
            <td ><strong>June Cleaver </strong></td>
            <td><strong>
              <input type="text" tabindex="323" value="0.00" title="Credit">
              </strong></td>
            <td><strong>
              <input type="text" tabindex="324" value="0.00" title="Credit">
              </strong></td>
            <td><strong>
              <input type="text" tabindex="325" value="0.00" title="Credit">
              </strong></td>
            <td><strong>
              <input type="text" tabindex="326" value="0.00" title="Credit">
              </strong></td>
          </tr>
          <tr>
            <td class="text-muted" >000001 - University</td>
            <td><input type="text" tabindex="327" value="0.00" title="Credit"></td>
            <td><input type="text" tabindex="328" value="0.00" title="Credit"></td>
            <td><input type="text" tabindex="329" value="0.00" title="Credit"></td>
            <td><input type="text" tabindex="330" value="0.00" title="Credit"></td>
          </tr> -->
                            <tr>
                                <td>Unit Total:</td>
                                <td><strong>0.00</strong></td>
                                <td><strong>0.00</strong></td>
                                <td><strong>0.00</strong></td>
                                <td><strong>0.00</strong></td>
                            </tr>
                            <!-- tr>
            <td colspan="5" >Totals</td>
          </tr> -->
                            <tr class="active">
                                <td><strong>Investigator Total: </strong></td>
                                <td><strong>0.00</strong></td>
                                <td><strong>0.00</strong></td>
                                <td><strong>0.00</strong></td>
                                <td><strong>0.00</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="tab4">
                    <h4>Questionnaire</h4>
                    <section id="" class="uif-disclosure uif-boxLayoutVerticalItem clearfix" data-parent="">
                        <header id="" class="uif-sectionHeader" data-header_for="">
                            <h3 class="uif-headerText panel-heading"> <a data-role="disclosureLink" data-linkfor="u4e3n2o_disclosureContent" href="#" id="u4e3n2o_toggle" data-open="true" data-widgetid="" data-speed="500" data-ajax="false"><span class="uif-headerText-span"><span id="u4e3n2o_toggle_exp" class="icon-caret-down" style="display: inline;"></span><span style="display: none;" id="u4e3n2o_toggle_col" class="icon-caret-right"></span> Grants.gov S2S <small class="text-muted">(Incomplete)</small></span></a> </h3>
                        </header>
                        <div id="u4e3n2o_disclosureContent" data-role="disclosureContent" data-open="true" class="uif-disclosureContent">
                            <div id="question1" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
                                <label id="question1_label" for="question1_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question1"> Does this application reflect a change in principal investigator/program director from that indicated on a previous application? </label>
                                <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField"> <span class="label label-info">Yes</span> </div>
                            </div>
                            <div id="question1a" class="uif-inputField clearfix uif-subquestion-block question1a content" data-parent="" data-role="InputField" data-label="Field" style="display:block">
                                <div style=" padding-left:15px">
                                    <label id="question1_label" for="question1_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question1"> Does this program director own a pair of hiking boots and clean socks? </label>
                                    <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField"> <span class="label label-info">No</span> </div>
                                </div>
                            </div>
                            <div id="question2" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
                                <label id="question2_label" for="question2_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question2"> Does this application reflect a change in grantee institution from that indicated on a previous application? </label>
                                <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField"> <span class="label label-info">Yes</span> </div>
                            </div>
                            <div id="question3" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
                                <label id="question3_label" for="question3_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question3"> Is this a Renewal Application? </label>
                                <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField"> <span class="label label-info">Yes</span> </div>
                            </div>
                            <div id="question4" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
                                <label id="question4_label" for="question4_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question4"> Check "No" if no inventions were conceived or reduced to practice during the course of work under this project. Check "Yes" if any inventions were conceived or reduced to practice during the previous period of support.</label>
                                <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField"> <span class="label label-info">Yes</span> </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane" id="tab5">
                    <h4>Supplimental Information</h4>
                    <table class="table table-condensed">
                        <tbody>
                            <tr>
                                <th class="col-md-3">Label</th>
                                <td>Item</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Label</th>
                                <td>Item</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Label</th>
                                <td>Item</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Label</th>
                                <td>Item</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Label</th>
                                <td>Item</td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Label</th>
                                <td>Item</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
        <div class="global-navigate btn-group">
            <button type="button" href="prop-budget.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
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
        </div>-->
        
        <div class="global-actions btn-group">
            <button type="button" id="" class="btn btn-primary">Approve</button>
            <button type="button" id="" class="btn btn-default" data-toggle="modal" data-target="#modal-add-comments">Reject</button>
 
        </div>
    </div>
</form>
<?php include ('includes/footer-scripts.php') ?>
<?php include('includes/modals-global-propdev.php') ?>
<?php include('includes/modals-prop/comments-add.php') ?>
</body>
</html>
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
                <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Sponsor &amp; Program Information </span> </h2>
                <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> </div>
            </div>
            <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" data-label_for="">Sponsor Deadline:</label>
                </div>
                <div class="col-md-8">
                    <div id="u8abdmj" class="uif-fieldGroup" data-parent="u1rttg6l" data-label="Field Group" data-group="u1fjua60">
                        <fieldset aria-labelledby="u8abdmj_label" id="u8abdmj_fieldset">
                            <legend style="display: none">Field Group</legend>
                            <div id="u1fjua60" class="row multi-columns-row row multi-columns-row uif-cssGridGroup" data-parent="u8abdmj">
                                <div class="col-md-3">
                                    <div id="urvbzg" class="uif-inputField" data-parent="u1fjua60" data-role="InputField">
                                        <div class="input-group">
                                            <input id="urvbzg_control" type="text" name="inputField1" value="" size="10" class="form-control input-sm form-control input-sm form-control input-sm uif-dateControl hasDatepicker valid" data-role="Control" data-control_for="urvbzg" placeholder="mm/dd/yyyy">
                                            <div class="input-group-btn"> <a class="btn btn-default icon-calendar ui-datepicker-trigger" alt="..." title="..."></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <p id="u15sznn1" class="form-control-static text-center uif-message "> at </p>
                                </div>
                                <div class="col-md-3">
                                    <div id="urvc16" class="uif-inputField" data-parent="u1fjua60" data-role="InputField">
                                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true" placeholder="hh:mm">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" data-label_for="">Sponsor Deadline Type:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                            <option></option>
                            <option value="1">Federal Solicitation</option>
                            <option value="6">Non-Federal Solicitation</option>
                            <option value="2">Unsolicited</option>
                            <option value="3">Verbal Request for Proposal</option>
                            <option value="4">SBIR Solicitation</option>
                            <option value="5">STTR Solicitation</option>
                            <option value="7">Internal</option>
                        </select>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" data-label_for="">Notice of Opportunity:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                            <option></option>
                            <option value="Postmark">Postmark</option>
                            <option value="Receipt">Receipt</option>
                            <option value="Target Date">Target Date</option>
                        </select>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" data-label_for="">Opportunity ID:</label>
                </div>
                <div class="col-md-8">
                    <p class="form-control-static">PA-13-302</p>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" data-label_for="">CFDA Number:</label>
                </div>
                <div class="col-md-8">
                    <p class="form-control-static">10.001</p>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" data-label_for="">Subawards:</label>
                </div>
                <div class="col-md-4">
                    <div id="u1pkrz9v" class="checkbox uif-inputField" data-parent="u1rttg6l" data-role="InputField" data-label="Field">
                        <input type="hidden" name="_inputField1" value="on">
                        <input type="checkbox" id="u1pkrz9v_control" name="inputField1" class="uif-checkboxControl required" data-role="Control" data-control_for="u1pkrz9v" aria-required="true">
                        <label onclick="handleCheckboxLabelClick('u1pkrz9v_control',event); return false;" for="u1pkrz9v_control"> Yes, this proposal includes subaward(s):</label>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" data-label_for="">Sponsor Proposal ID:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" data-label_for="">NSF Science Code:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                            <option></option>
                            <option value="P">Biology - Life Sciences: B02</option>
                            <option value="R">Biology - Physical Sciences: B01</option>
                            <option value="T">Chemistry - Physical Sciences: B02</option>
                        </select>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" data-label_for="">Anticipated Award Type:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                            <option></option>
                            <option value="P">Grant</option>
                            <option value="R">Contract</option>
                            <option value="T">Fellowship</option>
                        </select>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" data-label_for="">Opportunity Title:</label>
                </div>
                <div class="col-md-8">
                    <p class="form-control-static">How is education supposed to make me feel smarter? Besides, every time I learn something new, it pushes some old stuff out of my brain. </p>
                </div>
            </section>
        </main>
    </div>
    <!-- VIEW FOOTER                  

-->
    <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;"> 
        
        <div class="global-navigate btn-group">
            <button type="button" href="prop-basics-deliveryinfo.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
            <button type="button" href="prop-basics-orgloc.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
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
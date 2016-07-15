<?php
$section = '';
$page = 'routinginfo';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>

<!--<link href="../css/kradSampleApp.css" rel="stylesheet" type="text/css"/><link href="../css/labsProposal.css" rel="stylesheet" type="text/css"/>  -->
</head>
<body id="Uif-Application">
<!-- APPLICATION HEADER -->

<?php include ('includes/uif-applicationHeader-loggedin.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View" style="margin-top:75px"> <!-- BREADCRUMBS --><!-- VIEW HEADER -->
        <?php include ('includes/uif-viewHeader-person.php') ?>
        
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"><!-- VIEW NAVIGATION -->
            
            <?php include ('includes/uif-navigation-person.php') ?>
            <main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left: 250px;">
                <header class="clearfix uif-header-contentWrapper">
                    <div class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                        <h2 class="uif-headerText"><span class="uif-headerText-span">Routing Information </span></h2>
                    </div>
                    <div id="uw4ggjs" class="uif-verticalBoxGroup uif-header-lowerGroup" data-parent="LabsProposal-Page">
                        <div id="u1ndzhxa" class="text-muted uif-boxLayoutVerticalItem clearfix" data-parent="uw4ggjs">
                            <p>* Indicates required fields</p>
                        </div>
                    </div>
                </header>
                <div id="u14jg6xp" class="uif-cssGridGroup uif-boxLayoutVerticalItem clearfix" data-parent="LabsProposal-Page">
                    <div class="row ">
                        <div class="col-md-3 uif-cssGridLabelCol">
                            <label id="u11k8c13_label" for="u11k8c13_control" class="uif-label displayWith-u11k8c13" data-label_for="u11k8c13"> Description* </label>
                        </div>
                        <div class="col-md-9">
                            <div id="u11k8c13" class="uif-inputField" data-parent="u14jg6xp" data-role="InputField" data-label="Proposal Type">
                                <input id="u11k8c13_control" type="text" name="field1" value="Edting person information for Thomas Clark" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="u11k8c13" aria-required="true" aria-invalid="true">
                                <div id="u11k8c13_errors" class="uif-validationMessages" data-messages_for="u11k8c13" style="display: none;">
                                    <div class="uif-clientMessageItems uif-clientErrorDiv">
                                        <ul>
                                            <li class="uif-errorMessageItem-field"><img class="uif-validationImage" src="../krad/images/validation/error.png" alt="Error"> Required</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-3 uif-cssGridLabelCol">
                            <label id="u11k8c13_label" for="u11k8c13_control" class="uif-label displayWith-u11k8c13" data-label_for="u11k8c13"> Org Doc Number </label>
                        </div>
                        <div class="col-md-9">
                            <div id="u11k8c13" class="uif-inputField" data-parent="u14jg6xp" data-role="InputField" data-label="Proposal Type">
                                <input id="u11k8c13_control" type="text" name="field1" value="" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="u11k8c13" aria-required="true" aria-invalid="true">
                                <div id="u11k8c13_errors" class="uif-validationMessages" data-messages_for="u11k8c13" style="display: none;">
                                    <div class="uif-clientMessageItems uif-clientErrorDiv">
                                        <ul>
                                            <li class="uif-errorMessageItem-field"><img class="uif-validationImage" src="../krad/images/validation/error.png" alt="Error"> Required</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-3 uif-cssGridLabelCol">
                            <label id="u11k8c13_label" for="u11k8c13_control" class="uif-label displayWith-u11k8c13" data-label_for="u11k8c13"> Explaination </label>
                        </div>
                        <div class="col-md-9">
                            <div id="u11k8c13" class="uif-inputField" data-parent="u14jg6xp" data-role="InputField" data-label="Proposal Type">
                                <textarea class="form-control" rows="4"></textarea>
                                <div id="u11k8c13_errors" class="uif-validationMessages" data-messages_for="u11k8c13" style="display: none;">
                                    <div class="uif-clientMessageItems uif-clientErrorDiv">
                                        <ul>
                                            <li class="uif-errorMessageItem-field"><img class="uif-validationImage" src="../krad/images/validation/error.png" alt="Error"> Required</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- VIEW FOOTER -->
        <div id="u19v7dpm" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
            <div class="global-navigate btn-group">
                <button type="button" href="asdf.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
            </div>
            <div class=" global-actions btn-group dropup">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Document Actions <span class="caret"></span> </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Submit Document</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#canceldoc"> Cancel Document </a> </li>
                    <li class="divider"></li>
                    <li><a href="#">Save Document</a></li>
                    <li><a href="#">Close Document</a></li>
                </ul>
            </div>
        </div>
        <!-- DIALOGS/Placeholders -->
        <div id="Uif-Dialogs"></div>
    </div>
    <span id="formInfo">
    <input type="hidden" name="viewId" value="LabsProposal">
    <input type="hidden" name="formKey" value="2e468a13-a495-44cc-acd7-aac6b2ed97a0">
    <input type="hidden" name="requestedFormKey" value="2e468a13-a495-44cc-acd7-aac6b2ed97a0">
    <input type="hidden" name="sessionId" value="CAFCAB4387CB97D8567359A8C37D7712">
    <input type="hidden" name="flowKey" value="">
    <input type="hidden" name="view.applyDirtyCheck" value="true">
    <input type="hidden" name="dirtyForm" value="false">
    <input type="hidden" name="renderedInLightBox" value="false">
    <input type="hidden" name="view.singlePageView" value="true">
    <input type="hidden" name="view.disableBrowserCache" value="true">
    </span><span id="formComplete"></span>
</form>

<!-- MODALS -->
<?php include ('includes/modal-routelog.php') ?>
<?php include ('includes/modal-actionlist.php') ?>
<?php include ('includes/modal-actionlist-prefs.php') ?>
<?php include ('includes/modal-docsearch.php') ?>
<?php include ('includes/modal-docsearch-name.php') ?>
<?php include ('includes/modal-docsearch-results.php') ?>
<?php include ('../cross-project/includes/modal-superuser.php') ?>
<?php include ('../cross-project/includes/modal-routing-adhoc.php') ?>
<!-- FOOTER SCRIPTS -->

<?php include ('includes/footer-scripts.php') ?>
</body>
</html>
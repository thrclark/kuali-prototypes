<?php
$section = '';
$page = 'routing';
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
                <div class="uif-header-inner">
                    <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Ad Hoc Routing </span> </h2>
           
                </div>
                <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Person</h3>
                            <table id="u569ish_line0" class="table table-condensed uif-has-actions" role="presentation">
                                <thead>
                                    <tr>
                                        <th scope="row">Action Requested</th>
                                        <th>Person</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Approve</td>
                                        <td>jgiles</td>
                                        <td class=""><a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Approve</td>
                                        <td>tpetty</td>
                                        <td class=""><a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Approve</td>
                                        <td>frastaire</td>
                                        <td class=""><a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Approve</td>
                                        <td>jcoltrane</td>
                                        <td class=""><a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-xs btn-default pull-right"> <span class="icon-plus" style="font-size:10px"></span> Add New</a> </div>
                     <div class="col-md-6 uif-has-separator">
                            <h3>Group</h3>
                            <table id="u569ish_line0" class="table table-condensed uif-has-actions" role="presentation">
                                <thead>
                                    <tr>
                                        <th scope="row">Action Requested</th>
                                        <th>Namespace Code</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="">Approve</td>
                                        <td class="">Kuali</td>
                                        <td class="">TK-SUPERVISORS</td>
                                        <td class=""><a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                    </tr>
                                    <tr>
                                        <td class="">Approve</td>
                                        <td class="">Kuali</td>
                                        <td class="">TK-MAINTENANCE</td>
                                        <td class=""><a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-xs btn-default pull-right"> <span class="icon-plus" style="font-size:10px"></span> Add New</a> </div>
                    </div>
                </section>
            </main>
        </div>
        <!-- VIEW FOOTER -->
        <div id="u19v7dpm" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
            <div class="global-navigate btn-group">
                <button type="button" href="asdf.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
            </div> <div class=" global-actions btn-group dropup">
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
<!-- FOOTER SCRIPTS -->

<?php include ('includes/footer-scripts.php') ?>
</body>
</html>
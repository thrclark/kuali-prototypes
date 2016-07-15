<?php
$page = 'subawards';
$section = '';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kuali :: Fluid Application Header</title>

<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>
</head>
<body id="Uif-Application">
<!-- APPLICATION HEADER -->
<?php include('includes/uif-applicationHeader.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View"> <!-- BREADCRUMBS --> 
        <!-- VIEW HEADER --> 
        <!-- VIEW HEADER -->
        <?php include('includes/uif-viewHeader-budget.php') ?>
        <!-- // VIEW HEADER  --> 
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid"> 
            <!-- VIEW NAVIGATION -->
            <?php include ('includes/uif-navigation-budget.php') ?>
            <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
                <div class="uif-header-inner">
                    <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Subawards </span> </h2>
                    <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> <a href="#" class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#modal-add-subaward"><span aria-hidden="true" class="icon-plus"></span> Add Subaward</a> </div>
                </div>
                <p class="uif-cssGridGroup uif-boxLayoutVerticalItem clearfix">Upload a pre-formatted budget document for a subawardee organization or enter details manually.</p>
                <section>
                    <table class="pad5 table table-condensed table-bordered uif-has-actions">
                        <thead>
                            <tr>
                                <th>Organization Name</th>
                                <th>File Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>General Atomics Company</td>
                                <td>uploaded-budget-1_33-v3.pdf</td>
                                <td><div class="dropdown dropdown-large"> <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-edit-subaward">Details</a> <a href="#" class="btn btn-default btn-xs uif-delete" data-toggle="true "><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a> </div></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </main>
        </div>
        <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
            <div class="global-navigate btn-group">
                <button type="button" href="bud-personnelCosts-persPeriod.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
                <button type="button" href="bud-cost-sharing.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
            </div>
            <div class="global-actions btn-group">
                <button type="button" class="btn btn-default">Complete Budget</button>
                <button type="button" id="" class="btn btn-default">Save</button>
                <button type="button" id="" class="btn btn-default">Close</button>
            </div>
        </div>
        
        <!-- DIALOGS/Placeholders --> 
    </div>
</form>
<?php include ('includes/footer-scripts.php') ?>
<?php include ('includes/modals-global-budget.php') ?>
<!-- different results for casual user -->
<?php

$currentPage =  $_SERVER['QUERY_STRING'] ;//echo $currentPage;

if ($currentPage == "generate=no") {

?>
<!-- Note that screens such as cost-sharing, unrecovered F&A, and modular will display messages indicating that no data entry is required, if that is the case. --> 
<script>





	(function($){

alert(" --Periods were not generated on the non personnel page --> Note that screens such as cost-sharing, unrecovered F&A, and modular will display messages indicating that no data entry is required, if that is the case.")
	
		
 }(jQuery))
</script>
<?php } else { ?>
<!-- -->
<?php } ?>

<!-- MODAL add subaward -->
<?php include('includes/modals-budget/add-subaward.php') ?>
<?php include ('includes/modals-budget/edit-subaward.php') ?>
</body>
</html>

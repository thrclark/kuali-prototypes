<?php
$page = 'basics';
$section = 'basics-proposalDetails';
$pageTitle = 'My Disclosures';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <title>
        <?php echo $pageTitle ?>
    </title>
    <!-- GLOBAL STYLES -->
    <?php include('includes/styles.php') ?>
</head>
<body id="Uif-Application">
    <?php include('includes/uif-applicationHeader.php') ?>
    <!-- VIEW -->
    <div class="clearfix uif-formView" data-role="View">
        <!-- BREADCRUMBS -->
        <!-- VIEW HEADER -->
        <?php include('includes/coi-uif-viewHeader-template.php') ?>
        <!-- // VIEW HEADER  -->
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-view-pContentWrapper container-fluid">
            <main class="uif-page bottom-buffer" data-server_messages="false" data-role="Page" data-parent="">
                <div class="uif-header-inner">
                    <h2 class="uif-headerText">
                        <span class="uif-headerText-span">

                            <?php echo $pageTitle ?>
                        </span>
                    </h2>
                    <div class="well">
                        <h3 class="pull-left">
                            Annual Disclosures
                        </h3>
                        <div class="pull-right">
                            <a class="btn btn-default btn-xs" href="coi-screening-questions.php">
                                <span aria-hidden="true" class="icon-plus">
                                </span>
                                Add Annual Disclosure
                            </a>
                        </div>
                        <!--
                        <div class="pull-right" style="padding:2px 10px 0 0;">
                            <span class="badge alert alert-warning alert-review">
                                &nbsp; 
                            </span>
                            Review Required
                        </div>
                        -->
                        <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable bg-white">
                            <thead>
                                <tr>
                                    <th>
                                        Disposition
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Date Certified
                                    </th>
                                    <th>
                                        Date Approved
                                    </th>
                                    <th>
                                        Last Updated
                                    </th>
                                    <th>
                                        Expiration Date
                                    </th>
                                    <th>
                                        Review Required
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="warning">
                                    <td>
                                        No Conflict Exists
                                    </td>
                                    <td>
                                        Approved
                                    </td>
                                    <td>
                                        06/01/2013
                                    </td>
                                    <td>
                                        06/05/2013
                                    </td>
                                    <td>
                                        06/05/2013
                                    </td>
                                    <td>
                                        07/05/2014
                                    </td>
                                    <td>
                                        <span class=" icon-checkmark">
                                            <span class="sr-only">
                                                review reqired
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <a class="btn btn-default btn-xs" href="#">
                                            Review &amp; Update 
                                        </a>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                More Actions 
                                                <span class="caret">

                                                </span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#disclosure-history" class="">
                                                        View Notifications 
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        No Conflict Exists
                                    </td>
                                    <td>
                                        Approved
                                    </td>
                                    <td>
                                        06/01/2012
                                    </td>
                                    <td>
                                        06/09/2012
                                    </td>
                                    <td>
                                        06/09/2012
                                    </td>
                                    <td>
                                        07/05/2014
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <a class="btn btn-default btn-xs" href="#">
                                            Review &amp; Update 
                                        </a>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                More Actions 
                                                <span class="caret">

                                                </span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#disclosure-history" class="">
                                                        View Notifications 
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="well">
                        <h3 class="pull-left">
                            Event Disclosures
                        </h3>

                        <div class="pull-right">
                            <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-add-manual-disclosure">
                                <span aria-hidden="true" class="icon-plus">
                                </span>
                                Add Manual Disclosure
                            </button>
                        </div>
                        
                        <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable bg-white">
                            <thead>
                                <tr>
                                    <th>
                                        Disposition
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Event Type
                                    </th>
                                    <th>
                                        Project ID
                                    </th>
                                    <th>
                                        Date Certified
                                    </th>
                                    <th>
                                        Date Approved
                                    </th>
                                    <th>
                                        Last Updated
                                    </th>
                                    <th>
                                        Review Required
                                    </th>
                                    <th>
                                        <span class="sr-only">
                                            Actions 
                                        </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="warning">
                                    <td>
                                        
                                    </td>
                                    <td>
                                        In Progress
                                    </td>
                                    <td>
                                        Manual Proposal
                                    </td>
                                    <td>
                                        23590
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        <span class=" icon-checkmark">
                                            <span class="sr-only">
                                                review reqired
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <a class="btn btn-default btn-xs" href="#">
                                            Initiate 
                                        </a>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                More Actions 
                                                <span class="caret">

                                                </span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li>
                                                    <a href="#" class="">
                                                        Review &amp; Update 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#disclosure-history" class="">
                                                        View Notifications 
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        No Conflict Exists
                                    </td>
                                    <td>
                                        Approved
                                    </td>
                                    <td>
                                        Manual Proposal
                                    </td>
                                    <td>
                                        21099
                                    </td>
                                    <td>
                                        01/04/2014
                                    </td>
                                    <td>
                                        01/05/2014
                                    </td>
                                    <td>
                                        01/05/2014
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-disabled btn-xs" href="#">
                                            Initiate 
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                More Actions 
                                                <span class="caret">

                                                </span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li>
                                                    <a href="#" class="">
                                                        Review &amp; Update 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#disclosure-history" class="">
                                                        View Notifications
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="well">
                        <h3 class="pull-left">
                            Travel Disclosures
                        </h3>
                        
                        <div class="pull-right">
                            <a class="btn btn-default btn-xs" href="coi-screening-questions-event.php">
                                <span aria-hidden="true" class="icon-plus">
                                </span>
                                Add Travel Disclosure
                            </a>
                        </div>
                        
                        <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable bg-white">
                            <thead>
                                <tr>
                                    <th>
                                        Disposition
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Event Title
                                    </th>
                                    <th>
                                        Travel Dates
                                    </th>
                                    <th>
                                        Date Certified
                                    </th>
                                    <th>
                                        Date Approved
                                    </th>
                                    <th>
                                        Last Updated
                                    </th>
                                    <th>
                                        Review Required
                                    </th>
                                    <th>
                                        <span class="sr-only">
                                            Actions 
                                        </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>

                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-disabled btn-xs" href="#">
                                            Review &amp; Update 
                                        </button>
                                        <button type="button" class="btn btn-disabled btn-xs" href="#" data-toggle="modal" data-target="#disclosure-history">
                                            View Notifications
                                        </button>                                      
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </main>
        </div>
        <div class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
        </div>
    </div>
    <?php include('includes/footer-scripts.php') ?>

<!-- MODAL INCLUDES -->
<?php include ('includes/modals-coi/disclosure-history.php') ?>
<?php include ('includes/modals-coi/add-manual-disclosure.php') ?>

</body>
</html>
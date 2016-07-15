<?php
    $page = 'disclosure-list';
    $section = 'disclosures';
    $pageTitle = 'Disclosures';
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
        <form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
            <!-- VIEW -->
            <div class="clearfix uif-formView" data-role="View">
                <!-- BREADCRUMBS -->
                <!-- VIEW HEADER -->
                <?php include('includes/coi-uif-viewHeader-template.php') ?>
                <!-- // VIEW HEADER  -->
                <!-- VIEW CONTENT -->
                <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid">
                    <!-- VIEW NAVIGATION -->
                    <?php include('includes/coi-uif-navigation-template.php') ?>
                    <main class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
                        <div class="uif-header-inner">
                            <h2 class="uif-headerText">
                                <span class="uif-headerText-span">
                                <?php echo $pageTitle ?>
                                </span>
                            </h2>
                            <div class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                            </div>
                        </div>
                        <div class="row multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix">
                            <div class=" col-md-6">
                                <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                    <label id="u7fmyb1_label" for="u7fmyb1_control" class="clearfix uif-label uif-labelBlock">
                                    Disclosure Types: 
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <div class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                        <select id="u7fmyb1_control" class="form-control input-sm form-control input-sm uif-dropdownControl required valid">
                                            <option value="All Disclosures" selected="">
                                                All Disclosures 
                                            </option>
                                            <option value="Annual Disclosures">
                                                Annual Disclosures 
                                            </option>
                                            <option value="Event Disclosures">
                                                Event Disclosures 
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                    <label for="u144_input" class="clearfix uif-label uif-labelBlock">
                                    Quick Views: 
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <div class="uif-inputField">
                                        <select id="u144_input" class="form-control input-sm form-control input-sm uif-dropdownControl required valid">
                                            <option value="All Disclosures" selected="">
                                                All Disclosures 
                                            </option>
                                            <option value="Disclosures - Negative Screening - No FEs">
                                                Disclosures - Negative Screening - No FEs 
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                    <label for="u126_input" class="clearfix uif-label uif-labelBlock">
                                    Status: 
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <div class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                        <select id="u126_input" class="form-control input-sm form-control input-sm uif-dropdownControl required valid">
                                            <option value="All" selected="">
                                                All 
                                            </option>
                                            <option value="Submitted for Review">
                                                Submitted for Review 
                                            </option>
                                            <option value="Returned to Reporter">
                                                Returned to Reporter 
                                            </option>
                                            <option value="Routed to COI Office">
                                                Routed to COI Office 
                                            </option>
                                            <option value="Approved">
                                                Approved 
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                    <label for="u131_input" class="clearfix uif-label uif-labelBlock">
                                    Project Starting Date: 
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <div class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                        <select id="u131_input" class="form-control input-sm form-control input-sm uif-dropdownControl required valid">
                                            <option value="All" selected="">
                                                All 
                                            </option>
                                            <option value="Last 90 days">
                                                Last 90 days 
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                    <label for="u182_input" class="clearfix uif-label uif-labelBlock">
                                    Submit Date 
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <div class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                        <select id="u182_input" class="form-control input-sm form-control input-sm uif-dropdownControl required valid">
                                            <option value="All" selected="">
                                                All 
                                            </option>
                                            <option value="Last 90 days">
                                                Last 90 days 
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-clear-left col-md-4 uif-cssGridLabelCol">

                                </div>
                                <div class="col-md-8">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                                    
                                </div>
                                <div class="col-md-8">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-clear-left col-md-4 uif-cssGridLabelCol">

                                </div>
                                <div class="col-md-8">
                                    <div class="uif-toolbar">
                                    <button id="attachments_coi_add" class="btn btn-default btn-starter launch-modal" data-modal-page="#"><i class="icon icon-search"></i> Lookup Disclosure</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="well">
                            <div class="pull-right col-md-12">

                                <div class="col-md-2 pull-right ">
                                    <span class="badge alert alert-warning alert-review">
                                    &nbsp; 
                                    </span>
                                    Review Required 
                                </div>
                            </div>
                            <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable bg-white">
                                <thead>
                                    <tr>
                                        <th>
                                            Type 
                                        </th>
                                        <th>
                                            Number 
                                        </th>
                                        <th>
                                            Disposition
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Start Date 
                                        </th>
                                        <th>
                                            Submitted By
                                        </th>
                                        <th>Submit Date</th>
                                        <th>Approval Date</th>
                                        <th>Last Updated</th>
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
                                            Annual
                                        </td>
                                        <td>
                                            0001
                                        </td>
                                        <td>
                                            In Progress
                                        </td>
                                        <td>
                                            Submitted for Review
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            J. Handy
                                        </td>
                                        <td>06/17/2014</td>
                                        <td> </td>
                                        <td>
                                            06/17/2014
                                        </td>
                                        <td>
                                            <a href="coi-admin-disclosure-review-project.php" class="btn btn-default btn-xs">
                                            Review 
                                            </a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"> More Actions <span class="caret"> </span> </button> 
                                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <li> <a href="#" data-toggle="modal" data-target="#disclosure-history" class="">View Summary &amp; History </a> </li>
                                                    <li> <a href="#" data-toggle="modal" data-target="#modular-summary" class=""> Add Reviewers </a> </li>
                                                    <li> <a href="#" data-toggle="modal" data-target="#modular-summary" class=""> Return to Reporter</a> </li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modular-summary" class="" style="color:#ccc">Route to Coi Office</a></li>
                                                    <li> <a href="#" data-toggle="modal" data-target="#modular-summary" class="">Deactivate</a> </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Annual
                                        </td>
                                        <td>
                                            0004
                                        </td>
                                        <td>
                                            No Conflict Exists
                                        </td>
                                        <td>
                                            Approved
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            L.Lloyd
                                        </td>
                                        <td>04/01/2014</td>
                                        <td>06/01/2014</td>
                                        <td>
                                            06/01/2014
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-default btn-xs">
                                            Review 
                                            </a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"> More Actions <span class="caret"> </span> </button> 
                                                <ul class="dropdown-menu dropdown-menu-right " role="menu">
                                                    <li> <a href="#" data-toggle="modal" data-target="#disclosure-history" class="">View Summary &amp; History </a> </li>
                                                    <li> <a href="#" data-toggle="modal" data-target="#modular-summary" class=""> Add Reviewers </a> </li>
                                                    <li> <a href="#" data-toggle="modal" data-target="#modular-summary" class=""> Return to Reporter</a> </li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modular-summary" class="" style="color:#ccc">Route to Coi Office</a></li>
                                                    <li> <a href="#" data-toggle="modal" data-target="#modular-summary" class="">Deactivate</a> </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Event
                                        </td>
                                        <td>
                                            0002
                                        </td>
                                        <td>
                                            No Conflict Exists
                                        </td>
                                        <td>
                                            Approved
                                        </td>
                                        <td>04/01/2014</td>
                                        <td>
                                            K. Lazarus
                                        </td>
                                        <td>04/01/2014</td>
                                        <td>06/01/2014</td>
                                        <td>
                                            06/01/2014
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-default btn-xs">
                                            Review 
                                            </a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"> More Actions <span class="caret"> </span> </button> 
                                                <ul class="dropdown-menu dropdown-menu-right " role="menu">
                                                    <li> <a href="#" data-toggle="modal" data-target="#disclosure-history" class="">View Summary &amp; History </a> </li>
                                                    <li> <a href="#" data-toggle="modal" data-target="#modular-summary" class=""> Add Reviewers </a> </li>
                                                    <li> <a href="#" data-toggle="modal" data-target="#modular-summary" class=""> Return to Reporter</a> </li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modular-summary" class="" style="color:#ccc">Route to Coi Office</a></li>
                                                    <li> <a href="#" data-toggle="modal" data-target="#modular-summary" class="">Deactivate</a> </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Event
                                        </td>
                                        <td>
                                            0002
                                        </td>
                                        <td>
                                            No Conflict Exists
                                        </td>
                                        <td>
                                            Approved
                                        </td>
                                        <td>04/01/2014</td>
                                        <td>
                                            B. Hu
                                        </td>
                                        <td>04/01/2014</td>
                                        <td>06/01/2014</td>
                                        <td>
                                            06/01/2014
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-default btn-xs">
                                            Review 
                                            </a>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"> More Actions <span class="caret"> </span> </button> 
                                                <ul class="dropdown-menu dropdown-menu-right " role="menu">
                                                    <li> <a href="#" data-toggle="modal" data-target="#disclosure-history" class="">View Summary &amp; History </a> </li>
                                                    <li> <a href="#" data-toggle="modal" data-target="#modular-summary" class=""> Add Reviewers </a> </li>
                                                    <li> <a href="#" data-toggle="modal" data-target="#modular-summary" class=""> Return to Reporter</a> </li>
                                                    <li><a href="#" data-toggle="modal" data-target="#modular-summary" class="" style="color:#ccc">Route to Coi Office</a></li>
                                                    <li> <a href="#" data-toggle="modal" data-target="#modular-summary" class="">Deactivate</a> </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </main>
                </div>
            </div>
            <div class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
                
            </div>
        </form>
        <?php include('includes/coi-footer-scripts.php') ?>

<!-- MODAL INCLUDES -->
<?php include ('includes/modals-coi/disclosure-history.php') ?>

</body>
</html>
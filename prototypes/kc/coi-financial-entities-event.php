<?php
$page = 'questions';
$section = 'questions';
$pageTitle = 'Financial Entities';
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
    <?php include('includes/styles.php') ?>    <style type="text/css">
    select{
        min-width:130px;
    }
    </style>
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
                <main class="uif-page bottom-buffer" data-server_messages="false" data-role="Page" data-parent="">
                    <div class="uif-header-inner">
                        <h2 class="uif-headerText">
                            <span class="uif-headerText-span">

                                <?php echo $pageTitle ?>
                            </span>
                        </h2>
                        <div class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                        </div>
                    </div>
                    <div id="u87qj8l" class="well uif-boxLayoutVerticalItem clearfix" role="progressbar" aria-valuetext="Current step:Save" aria-valuemax="5" aria-valuemin="0" aria-valuenow="1">
                        <div class="progress-details">
                            <div style="width: 25.0%;" class="uif-step complete">
                                <span class="sr-only">
                                    Step completed:
                                </span>
                                Questionnaire
                            </div>
                            <div style="width: 25.0%;" class="uif-step active">
                                <span class="sr-only">
                                    Current step:
                                </span>
                                Financial Entities
                            </div>
                            <div style="width: 25.0%;" class="uif-step">
                                <span class="sr-only">
                                    Unfinished step:
                                </span>
                                Relationships
                            </div>
                            <div style="width: 25.0%;" class="uif-step">
                                <span class="sr-only">
                                    Unfinished step:
                                </span>
                                Certification
                            </div>
                        </div>
                        <div class="progress">
                            <div style="width: 25.0%;" class="progress-bar progress-bar-success">
                            </div>
                            <div style="width: 25.0%;" class="progress-bar progress-bar-info">
                            </div>
                            <div style="width: 25.0%;" class="progress-bar progress-bar-empty">
                            </div>
                            <div style="width: 25.0%;" class="progress-bar progress-bar-empty">
                            </div>
                        </div>
                    </div>
                    <p>
                        <strong>The following are your current Financial Entities and your relationships with them. Review each Financial Entity,
                            update as needed, and click Continue.</strong>
                        </p>
                        <div class="well">
                            <h3>
                                Financial Entities
                            </h3>
                            <button type="button" class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#modal-add-new">
                                <span aria-hidden="true" class="icon-plus">

                                    <!-- empty -->
                                </span>
                                Add Financial Entity
                            </button>
                            <div class="pull-right" style="padding:2px 10px 0 0;">
                                <label>
                                    <input type="checkbox" checked>
                                    Show Inactive 
                                </label>
                            </div>
                            <table id="Demo-LightTableGroup1_lightTable" class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable bg-white" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" role="columnheader" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                        Field 1: : activate to sort column descending">
                                        ID
                                    </th>
                                    <th class="sorting" role="columnheader" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                    Field 1: : activate to sort column descending">
                                    Name
                                </th>
                                <th class="sorting" role="columnheader" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                Field 1: : activate to sort column descending">
                                Status
                            </th>
                            <th class="sorting" role="columnheader" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                            Field 1: : activate to sort column descending">
                            Relationships with Financial Entity
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
                            001
                        </td>
                        <td>
                            Johnson &amp; Johnson
                        </td>
                        <td>
                            Active
                        </td>
                        <td>
                            Self - Ownership Interest 
                            <a href="#">
                                (details)
                            </a>
                        </td>
                        <td>
                            <span class="icon-checkmark"></span>
                        </td>
                        <td>
                            <a class="btn btn-default btn-xs" href="#">
                                Update 
                            </a>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    More Actions 
                                    <span class="caret">

                                    </span>
                                </button>
                                <ul class="dropdown-menu tex-left " role="menu">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#financial-entity-history" class="">
                                            View Summary &amp; History
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#modular-summary" class="">
                                            Mark as Reviewed 
                                        </a>
                                    </li>
                                    <li style="padding-top:10px; border-top:1px dotted #ccc;">
                                        <a href="#" data-toggle="modal" data-target="#modular-summary" class="">
                                            Deactivate 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            002
                        </td>
                        <td>
                            GlaxoSmithKline
                        </td>
                        <td>
                            Inactive
                        </td>
                        <td>
                        </td>
                        <td>
                            <!-- -->
                        </td>
                        <td>
                            <a class="btn btn-default btn-xs" href="#">
                                Update 
                            </a>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    More Actions 
                                    <span class="caret">

                                    </span>
                                </button>
                                <ul class="dropdown-menu tex-left " role="menu">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#financial-entity-history" class="">
                                            View Summary &amp; History
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#modular-summary" class="">
                                            Mark as Reviewed 
                                        </a>
                                    </li>
                                    <li style="padding-top:10px; border-top:1px dotted #ccc;">
                                        <a href="#" data-toggle="modal" data-target="#modular-summary" class="">
                                            Deactivate 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="warning">
                        <td>
                            003
                        </td>
                        <td>
                            Pfizer
                        </td>
                        <td>
                            Active
                        </td>
                        <td>
                            Spouse - Ownership Interest 
                            <a href="#">
                                (details)
                            </a>
                        </td>
                        <td>
                            <span class="icon-checkmark"></span>
                        </td>
                        <td>
                            <a class="btn btn-default btn-xs" href="#">
                                Update 
                            </a>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    More Actions 
                                    <span class="caret">

                                    </span>
                                </button>
                                <ul class="dropdown-menu tex-left " role="menu">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#financial-entity-history" class="">
                                            View Summary &amp; History 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#modular-summary" class="">
                                            Mark as Reviewed 
                                        </a>
                                    </li>
                                    <li style="padding-top:10px; border-top:1px dotted #ccc;">
                                        <a href="#" data-toggle="modal" data-target="#modular-summary" class="">
                                            Deactivate
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>
<div class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
    <div class="global-actions btn-group">
        <button type="button" href="coi-my-disclosures.php" class="btn btn-default">Cancel</button>
    </div>
    <div class="global-navigate btn-group">
        <button type="button" href="coi-screening-questions-event.php" class="btn btn-default">
            <span class="icon-chevron-left">

            </span>
            Back
        </button>
        <button type="button" href="coi-relationships-event.php" id="save-continue" class="btn btn-primary">
            Continue 
            <span class="icon-chevron-right">

            </span>
        </button>
    </div>
</div>
</div>
</form>
<?php include('includes/coi-footer-scripts.php') ?>
<!-- MODAL INCLUDES -->
<?php include ('includes/modals-coi/attachment-reporter-fe.php') ?>

<div class="modal fade bs-example-modal-lg" id="modal-add-new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    New Financial Entity
                </h4>
            </div>
            <div class="modal-body">
                <!-- -->
                <div class="col-md-12 form-group">

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label data-label_for="sponsorcode" class="col-sm-2 " for="sponsorcode">
                                Sponsor Code:
                            </label>

                            <div class="col-sm-5 input-group">
                                <input type="text" data-hastooltip="true" class="form-control input-sm form-control input-sm uif-textControl valid " value="" name="sponsorcode">
                                <div class="input-group-btn">
                                    <button id="" class="btn btn-default uif-action icon-search" data-onclick="" data-role="Action" data-focusid="" data-submit_data=""> </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <p>
                                * Indicates Required Field 
                            </p>
                            <div class="col-md-6">
                                <label data-label_for="entityName" for="entityName" class="col-sm-4 control-label">
                                    Entity Name: * 
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" data-hastooltip="true" class="form-control input-sm form-control input-sm uif-textControl valid " value="" name="entityName">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label data-label_for="status1" for="status1" class="col-sm-6 control-label">
                                    Status: * 
                                </label>
                                <div class="col-md-6">
                                    <select class="input-sm" id="status1" name="status1">
                                        <option selected="selected" value="">
                                            Select
                                        </option>
                                        <option value="Active">
                                            Active
                                        </option>
                                        <option value="Inactive">
                                            Inactive
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label data-label_for="website1" class="col-sm-4 control-label" for="website1">
                                    Type: * 
                                </label>
                                <div class="col-md-8">
                                    <select class="input-sm" id="status1" name="status1">
                                        <option selected="selected" value="">
                                            Select
                                        </option>
                                        <option value="Active">
                                            Small Business
                                        </option>
                                        <option value="Inactive">
                                            For-Profit Organization
                                        </option>
                                        <option value="Inactive">
                                            Etc
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label data-label_for="status2" for="status2" class="col-sm-6 control-label">
                                    Public / Private: * 
                                </label>
                                <div class="col-md-6">
                                    <select class="input-sm" id="status2" name="status2">
                                        <option selected="selected" value="">
                                            Select
                                        </option>
                                        <option value="Public">
                                            Public
                                        </option>
                                        <option value="Private">
                                            Private 
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label data-label_for="textArea1" class="col-sm-5 " for="textArea1">
                                Does this entity sponsor any of your research? * 
                            </label>

                            <label>

                                <input type="radio" id="coi-uahyfb8_control_0-1" name="inputField3" value="1" data-role="Control" data-control_for="uahyfb8">
                                Yes 
                            </label>

                            <label>

                                <input type="radio" id="coi-uahyfb8_control_1-1" name="inputField3" value="2" data-role="Control" data-control_for="uahyfb8">
                                No 
                            </label>
                        </div>
                        <div class="form-group">
                            <label data-label_for="textArea1" class="col-sm-12" for="textArea1">
                                Describe the entity's area of business and your relationship to it: * 
                            </label>
                            <div class="clearfix col-md-10">
                                <textarea data-hastooltip="true" class="form-control input-sm uif-textAreaControl valid" cols="100" rows="3" name="textArea1" id="textArea1">
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label data-label_for="textArea1" class="col-sm-12" for="textArea1">
                                Additional questions may be added in this format. 
                            </label>
                            <div class="clearfix col-md-10">
                                <textarea data-hastooltip="true" class="form-control input-sm uif-textAreaControl valid" cols="100" rows="3" name="textArea1" id="textArea1">
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="attachments" class="control-label">
                                Attachments: 
                            </label>

                            <div class="uif-toolbar">
                            <button id="attachments_coi_add" class="btn btn-default btn-starter launch-modal" data-modal-page="#"><i class="icon icon-plus"></i> Add Entry</button>
                            </div>
                        </div>
                        <a class="btn btn-primary pull-right" id="next-step" type="button" data-dismiss="modal" data-toggle="modal" href="#modal-matrix">
                            Continue 
                            <span class="icon-chevron-right">

                            </span>

                        </a>
                    </form>
                </div>
                <!-- -->
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-lg" id="modal-matrix" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title">
                    Financial Entity Relationship Details
                </h4>
            </div>
            <div class="modal-body">
                <iframe src="coi-modal-iframe-matrix.php" style="width:780px;height:440px; border:none; margin:1em 0 0 60px; ;">
                </iframe>
                <a style="margin:1em 0 ;" class="btn btn-primary pull-right" id="next-step" type="button" data-dismiss="modal">
                    Continue 
                    <span class="icon-chevron-right">

                    </span>

                </a>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- MODAL INCLUDES -->
<?php include ('includes/modals-coi/financial-entity-history.php') ?>

</body>
</html>
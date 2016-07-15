<?php
$page = 'disclosure-review-project';
$section = 'disclosures';
$pageTitle = 'Disclosure Review';
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
                    <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        $('#tabs').tab();
                    }
                    );
                    </script>
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active">
                            <a href="#review-project" data-toggle="tab">
                                Review by Project 
                            </a>
                        </li>
                        <li>
                            <a href="#review-financial-entity" data-toggle="tab">
                                Review by Financial Entity 
                            </a>
                        </li>
                    </ul>
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane active" id="review-project">
                            <div class="uif-header-inner">
                                <h3 class="uif-headerText">
                                    <span class="uif-headerText-span">
                                        Review by Project 
                                    </span>
                                </h3>
                            </div>
                            <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable bg-white">
                                <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Title
                                        </th>
                                        <th>
                                            Type
                                        </th>
                                        <th>
                                            Role
                                        </th>
                                        <th>
                                            Sponsor
                                        </th>
                                        <th>
                                            Relationship
                                        </th>
                                        <th>
                                            Disposition
                                        </th>
                                        <th style="text-align:left">
                                            Comments
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#summary" class="">
                                                249246 
                                            </a>
                                        </td>
                                        <td>
                                            Thurman Experiment
                                        </td>
                                        <td>
                                            Research
                                        </td>
                                        <td>
                                            PI
                                        </td>
                                        <td>
                                            NIH
                                        </td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#reviewer-relationships" class="">
                                                Potential Relationships 
                                            </a>
                                        </td>
                                        <td>
                                            No Conflict Exists
                                        </td>
                                        <td>
                                            Comments
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="active">
                                        <td colspan="8">
                                            <div class="pull-right">
                                                <a class="btn btn-default btn-xs" href="#">
                                                    View Project Summary 
                                                </a>
                                                <a class="btn btn-default btn-xs" href="#">
                                                    Project-Level Approve
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                                <div class="panel panel-default">
                                    <header class="uif-sectionHeader">
                                        <h3 class="uif-headerText panel-heading">
                                            <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-4" data-open="false" class="uif-headerText-span">

                                                <span class="icon-caret-down">
                                                </span>

                                                <span class="icon-caret-right">
                                                </span>
                                                Disclosure Notes &amp; Attachments 
                                            </a>
                                        </h3>
                                    </header>
                                    <div id="collapse-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="uif-toolbar">
                                                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-attachment-admin">
                                                    <span aria-hidden="true" class="icon-plus">
                                                    </span>
                                                    Add Entry
                                                </button>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                                <div class="panel panel-default">
                                    <header class="uif-sectionHeader">
                                        <h3 class="uif-headerText panel-heading">
                                            <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-0" data-open="false" class="uif-headerText-span">

                                                <span class="icon-caret-down">

                                                </span>

                                                <span class="icon-caret-right">

                                                </span>
                                                Screening Questionnaire (Complete)
                                            </a>
                                        </h3>
                                    </header>
                                    <div id="collapse-0" class="panel-collapse collapse">
                                        <div class="uif-pagetools" id="radio_label1">                                       
                                                <p>
                                                    From any for-profit organization, did you receive in the last 12 months, or do you expect to receive in the next 12 months, salary, 
                                                    director's fees, consulting payments, honoraria, royalties; or other payments for patents, copyrights or other intellectual property; 
                                                    or other direct payments exceeding $5,000? 
                                                    <a href="#">
                                                        (More Information...)
                                                    </a> 
                                                </p>
                                                <span class="uif-tooltip">
                                                     <label>  <input type="radio" id="uahyfb8_control_0" name="inputField1" value="1" class="uif-verticalRadioControl" data-role="Control" data-control_for="uahyfb8"> 
                                                   
                                                        Yes
                                                    </label>
                                                </span>
                                                <span class="uif-tooltip">
                                                      <label><input type="radio" id="uahyfb8_control_1" name="inputField1" value="2" class="uif-verticalRadioControl" data-role="Control" data-control_for="uahyfb8"> 
                                                 
                                                        No
                                                    </label>
                                                </span>
                                            </fieldset>
                                        </div>
                                        <div class="uif-pagetools" id="radio_label1">                                       
                                                <p>
                                                    From any privately held organization, do you have stock, stock options, or other equity interest of any value?
                                                    <a href="#">
                                                        (More Information...)
                                                    </a> 
                                                </p>
                                                <span class="uif-tooltip">
                                                     <label>  <input type="radio" id="uahyfb8_control_0" name="inputField1" value="1" class="uif-verticalRadioControl" data-role="Control" data-control_for="uahyfb8"> 
                                                   
                                                        Yes
                                                    </label>
                                                </span>
                                                <span class="uif-tooltip">
                                                      <label><input type="radio" id="uahyfb8_control_1" name="inputField1" value="2" class="uif-verticalRadioControl" data-role="Control" data-control_for="uahyfb8"> 
                                                 
                                                        No
                                                    </label>
                                                </span>
                                            </fieldset>
                                        </div>
                                        <div class="uif-pagetools" id="radio_label1">                                       
                                                <p>
                                                    Some publicly traded stock must be disclosed, but only in specific circumstances. Do you own stock, which in aggregate exceeds $5,000, 
                                                    in a company that provides funds to this institution in support of your Institutional Responsibilities (e.g. teaching, research, committee, 
                                                    or other administrative responsibilities)? When aggregating, please consider stock, stock options, warrants and other existing or contingent 
                                                    ownership interests in the publicly held company. Do not consider investments where you do not directly influence investment decisions, 
                                                    such as mutual funds and retirement accounts.
                                                    <a href="#">
                                                        (More Information...)
                                                    </a> 
                                                </p>
                                                <span class="uif-tooltip">
                                                     <label>  <input type="radio" id="uahyfb8_control_0" name="inputField1" value="1" class="uif-verticalRadioControl" data-role="Control" data-control_for="uahyfb8"> 
                                                   
                                                        Yes
                                                    </label>
                                                </span>
                                                <span class="uif-tooltip">
                                                      <label><input type="radio" id="uahyfb8_control_1" name="inputField1" value="2" class="uif-verticalRadioControl" data-role="Control" data-control_for="uahyfb8"> 
                                                 
                                                        No
                                                    </label>
                                                </span>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                                <div class="panel panel-default">
                                    <header class="uif-sectionHeader">
                                        <h3 class="uif-headerText panel-heading">
                                            <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" data-open="false" class="uif-headerText-span">

                                                <span class="icon-caret-down">

                                                </span>

                                                <span class="icon-caret-right">

                                                </span>
                                                Other Questionnaires 
                                            </a>
                                        </h3>
                                    </header>
                                    <div id="collapse-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                                <div class="panel panel-default">
                                    <header class="uif-sectionHeader">
                                        <h3 class="uif-headerText panel-heading">
                                            <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-3" data-open="false" class="uif-headerText-span">

                                                <span class="icon-caret-down">

                                                </span>

                                                <span class="icon-caret-right">

                                                </span>
                                                Disclosure Notifications 
                                            </a>
                                        </h3>
                                    </header>
                                    <div id="collapse-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            This section should use the Notification table from current KC.
                                       </div>
                                    </div>
                                </div>
                            </section>
                            <!--
                            <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                                <div class="panel panel-default">
                                    <header class="uif-sectionHeader">
                                        <h3 class="uif-headerText panel-heading">
                                            <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-5" data-open="false" class="uif-headerText-span">

                                                <span class="icon-caret-down">

                                                </span>

                                                <span class="icon-caret-right">

                                                </span>
                                                Submission Details 
                                            </a>
                                        </h3>
                                    </header>
                                    <div id="collapse-5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </section>
                            -->
                        </div>
                        <!--  Review by Financial Entity -->
                        <div class="tab-pane" id="review-financial-entity">
                            <div class="uif-header-inner">
                                <h3 class="uif-headerText">
                                    <span class="uif-headerText-span">
                                        Review by Financial Entity 
                                    </span>
                                </h3>
                            </div>
                            <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable bg-white">
                                <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Business Description
                                        </th>
                                        <th>
                                            Relationship Description
                                        </th>
                                        <th style="text-align:left">
                                            Disposition
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            0001
                                        </td>
                                        <td>
                                            Acme Pharmaceutical
                                        </td>
                                        <td>
                                            Active
                                        </td>
                                        <td>
                                            Pharma. I use their products in my studies.
                                        </td>
                                        <td>
                                            Self - Ownership Interest
                                        </td>
                                        <td>
                                            No Conflicts Exist
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="active">
                                        <td colspan="6">
                                            <div class="pull-right">
                                                <a class="btn btn-default btn-xs" href="#">
                                                    View History 
                                                </a>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                        More Actions 
                                                        <span class="caret">

                                                        </span>
                                                    </button>
                                                    <ul class="dropdown-menu tex-left " role="menu">
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#modular-summary" class="">
                                                                Option 1 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#modular-summary" class="">
                                                                Option 2 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#modular-summary" class="">
                                                                Option 3 
                                                            </a>
                                                        </li>
                                                        <li style="padding-top:10px; border-top:1px dotted #ccc;">
                                                            <a href="#" data-toggle="modal" data-target="#modular-summary" class="">
                                                                Deactivate 
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                                <div class="panel panel-default">
                                    <header class="uif-sectionHeader">
                                        <h3 class="uif-headerText panel-heading">
                                            <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-4" data-open="false" class="uif-headerText-span">

                                                <span class="icon-caret-down">
                                                </span>

                                                <span class="icon-caret-right">
                                                </span>
                                                Disclosure Notes &amp; Attachments 
                                            </a>
                                        </h3>
                                    </header>
                                    <div id="collapse-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="uif-toolbar">
                                            <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-attachment-admin">
                                                <span aria-hidden="true" class="icon-plus">
                                                </span>
                                                Add Entry
                                            </button>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                                <div class="panel panel-default">
                                    <header class="uif-sectionHeader">
                                        <h3 class="uif-headerText panel-heading">
                                            <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-6" data-open="false" class="uif-headerText-span">

                                                <span class="icon-caret-down">

                                                </span>

                                                <span class="icon-caret-right">

                                                </span>
                                                Screening Questionnaire 
                                            </a>
                                        </h3>
                                    </header>
                                    <div id="collapse-6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                                <div class="panel panel-default">
                                    <header class="uif-sectionHeader">
                                        <h3 class="uif-headerText panel-heading">
                                            <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-7" data-open="false" class="uif-headerText-span">

                                                <span class="icon-caret-down">

                                                </span>

                                                <span class="icon-caret-right">

                                                </span>
                                                Other Questionnaires 
                                            </a>
                                        </h3>
                                    </header>
                                    <div id="collapse-7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                                <div class="panel panel-default">
                                    <header class="uif-sectionHeader">
                                        <h3 class="uif-headerText panel-heading">
                                            <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-8" data-open="false" class="uif-headerText-span">

                                                <span class="icon-caret-down">

                                                </span>

                                                <span class="icon-caret-right">

                                                </span>
                                                Disclosure Notifications 
                                            </a>
                                        </h3>
                                    </header>
                                    <div id="collapse-8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            This section should use the Notification table from current KC.                                       
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!--
                            <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                                <div class="panel panel-default">
                                    <header class="uif-sectionHeader">
                                        <h3 class="uif-headerText panel-heading">
                                            <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-10" data-open="false" class="uif-headerText-span">

                                                <span class="icon-caret-down">

                                                </span>

                                                <span class="icon-caret-right">

                                                </span>
                                                Submission Details 
                                            </a>
                                        </h3>
                                    </header>
                                    <div id="collapse-10" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </section>
                            -->
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
            <div class="global-actions btn-group">
                <button type="button" href="coi-admin-disclosure-list.php" class="btn btn-default">Cancel</button>
            </div>
            <div class="global-actions btn-group">
                <button type="button" href="coi-admin-disclosure-list.php" class="btn btn-primary">Save &amp; Close</button>
            </div>
        </div>
    </form>
    <?php include('includes/coi-footer-scripts.php') ?>
    
<!-- MODAL INCLUDES -->
<?php include ('includes/modals-coi/reviewer-relationships.php') ?>
<?php include ('includes/modals-budget/summary.php') ?>
<?php include ('includes/modals-coi/attachment-admin.php') ?>

</body>
</html>
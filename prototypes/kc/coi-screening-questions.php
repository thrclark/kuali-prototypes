<?php
$page = 'questions';
$section = 'questions';
$pageTitle = 'Questionnaire';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8"> <meta name="robots" content="noindex,nofollow" /> 
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
                            <div style="width: 25.0%;" class="uif-step active">
                                <span class="sr-only">
                                    Current step:
                                </span>
                                Questionnaire 
                            </div>
                            <div style="width: 25.0%;" class="uif-step">
                                <span class="sr-only">
                                    Unfinished step:
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
                            <div style="width: 25.0%;" class="progress-bar progress-bar-info">
                            </div>
                            <div style="width: 25.0%;" class="progress-bar progress-bar-empty">
                            </div>
                            <div style="width: 25.0%;" class="progress-bar progress-bar-empty">
                            </div>
                            <div style="width: 25.0%;" class="progress-bar progress-bar-empty">
                            </div>
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
                            <a href="#questionnaires" data-toggle="tab">
                                Questionnaires
                            </a>
                        </li>
                        <li>
                            <a href="#training" data-toggle="tab">
                                Training
                            </a>
                        </li>
                        <li>
                            <a href="#contact" data-toggle="tab">
                                Contact Information
                            </a>
                        </li>
                    </ul>
                        <div id="my-tab-content" class="tab-content">
                        <!--  Questionnaires -->
                        <div class="tab-pane active" id="questionnaires">
                                <div class="uif-header-inner">
                                    <h3 class="uif-headerText">
                                        <span class="uif-headerText-span">
                                            Questionnaires 
                                        </span>
                                    </h3>
                                </div>
                                <p>
                                    <strong>The following questionnaire(s) help determine if you have any Significant Financial Interests.</strong> 
                                        <a href="#">
                                            (What are Significant Financial Interests?)
                                        </a> 
                                </p>    
                                <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                                    <div class="panel panel-default">
                                        <header class="uif-sectionHeader">
                                            <h3 class="uif-headerText panel-heading">
                                                <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-0" data-open="false" class="uif-headerText-span">

                                                    <span class="icon-caret-down">

                                                    </span>

                                                    <span class="icon-caret-right">

                                                    </span>
                                                    Screening Questionnaire (Incomplete)
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
                                                <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" data-open="false" class="uif-headerText-span">

                                                    <span class="icon-caret-down">

                                                    </span>

                                                    <span class="icon-caret-right">

                                                    </span>
                                                    Other Questionnaires 
                                                </a>
                                            </h3>
                                        </header>
                                        <div id="collapse-1" class="panel-collapse collapse">
                                        </div>
                                    </div>
                                </section>
                        </div>
                        <!--  Training -->
                        <div class="tab-pane" id="training">
                            <div class="uif-header-inner">
                                <h3 class="uif-headerText">
                                    <span class="uif-headerText-span">
                                        Required Training Modules 
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
                                            Status
                                        </th>
                                        <th>
                                            Completion Date
                                        </th>
                                        <th>
                                            Expiration Date
                                        </th>
                                        <th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            003 
                                        </td>
                                        <td>
                                            COI Basics
                                        </td>
                                        <td>
                                            Complete
                                        </td>
                                        <td>
                                            06/07/2014
                                        </td>
                                        <td>
                                            06/07/2016
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            005 
                                        </td>
                                        <td>
                                            COI Training for Adjunct Faculty
                                        </td>
                                        <td>
                                            Not Complete
                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <a href="#">Go To Training Web Site</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--  Contact Information -->
                        <div class="tab-pane" id="contact">
                            <div class="uif-header-inner">
                                <h3 class="uif-headerText">
                                    <span class="uif-headerText-span">
                                        Contact Information 
                                    </span>
                                </h3>
                            </div>
                            <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                                <div class="col-md-2">
                                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Reporter Name:</label>
                                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Username:</label>
                                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Department:</label>
                                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Phone:</label>
                                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Faculty:</label>
                                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Email:</label>
                                </div>
                                <div class="col-md-8">
                                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">Jack Handy</div>
                                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">jhandy</div>
                                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">430: Biochemistry</div>
                                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">480-867-5309</div>
                                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">Yes</div>
                                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label=""><a href="#">jhandy@college.edu</a></div>
                                </div>
                            </section>
                            <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                                <div class="panel panel-default">
                                    <header class="uif-sectionHeader">
                                        <h3 class="uif-headerText panel-heading">
                                            <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" data-open="false" class="uif-headerText-span">

                                                <span class="icon-caret-down">

                                                </span>

                                                <span class="icon-caret-right">

                                                </span>
                                                Unit Details
                                            </a>
                                        </h3>
                                    </header>
                                    <div id="collapse-1" class="panel-collapse collapse">
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </main>
            </div>
            <div class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
                <div class="global-actions btn-group">
                    <button type="button" href="coi-my-disclosures.php" class="btn btn-default">Cancel</button>
                </div>
                <div class="global-navigate btn-group">
                    <button type="button" id="save-continue" href="coi-financial-entities.php" class="btn btn-primary">
                        Continue 
                        <span class="icon-chevron-right">
                        </span>
                    </button>
                </div>
                <div class=" global-actions btn-group dropup">
                </div>
            </div>
             </div>
        </form>
        <?php include('includes/footer-scripts.php') ?>
        <!-- MODAL INCLUDES -->
        <?php // include ('includes/modal-.php') ?>
    </body>
    </html>

<?php
$page = 'training';
$section = 'training';
$pageTitle = 'Training';
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
                        <div class="well">
                            <h3 class="pull-left">
                                CITI Training
                            </h3>

                            <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable bg-white">
                                <thead>
                                    <tr>
                                        <th>
                                            Reporter Name
                                        </th>
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
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Jack Handy 
                                        </td>
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
                                            Jack Handy 
                                        </td>
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
                                            <a href="#">Send e-mail reminder</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="well">
                            <h3 class="pull-left">
                                Training for PHS Funding
                            </h3>
                            <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable bg-white">
                                <thead>
                                    <tr>
                                        <th>
                                            Reporter Name
                                        </th>
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
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                           Sally Hansen 
                                        </td>
                                        <td>
                                           133
                                        </td>
                                        <td>
                                           PHS Funding and COI
                                        </td>
                                        <td>
                                            Not Complete
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            <a href="#">Send e-mail reminder</a>
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
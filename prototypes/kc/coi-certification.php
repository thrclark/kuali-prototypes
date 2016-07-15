<?php
$page = 'questions';
$section = 'questions';
$pageTitle = 'Certification';
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
                <main class="uif-page" data-server_messages="false" data-role="Page" data-parent="">
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
                            <div style="width: 25.0%;" class="uif-step complete">
                                <span class="sr-only">
                                    Current step: 
                                </span>
                                Financial Entities
                            </div>
                            <div style="width: 25.0%;" class="uif-step complete">
                                <span class="sr-only">
                                    Step completed: 
                                </span>
                                Relationships
                            </div>
                            <div style="width: 25.0%;" class="uif-step active">
                                <span class="sr-only">
                                    Unfinished step: 
                                </span>
                                Certification
                            </div>
                        </div>
                        <div class="progress">
                            <div style="width: 25.0%;" class="progress-bar progress-bar-success">
                            </div>
                            <div style="width: 25.0%;" class="progress-bar progress-bar-success">
                            </div>
                            <div style="width: 25.0%;" class="progress-bar progress-bar-success">
                            </div>
                            <div style="width: 25.0%;" class="progress-bar progress-bar-info">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3>
                            Notes &amp; Attachments
                        </h3>
                        <div>
                            <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-attachment-reporter">
                                <span aria-hidden="true" class="icon-plus">
                                </span>
                                Add Entry
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3>
                            Certification
                        </h3>
                        <div>                        
                            <p>
                                In accordance with the University's policy on Disclosure of Financial Interests and Management of Conflict of Interest Related to Sponsored Projects, 
                                the Principal Investigator and all other Investigators who share responsibility for the design, conduct, or reporting of sponsored projects must disclose 
                                their personal SIGNIFICANT FINANCIAL INTERESTS in any non-profit foundation or for-profit company that might benefit from the predictable results of 
                                those proposed projects.
                            </p>
                            <p>
                            In addition, when the work to be performed under the proposed research project and the results of the proposed 
                            research project would reasonably appear to affect the Investigator's SIGNIFICANT FINANCIAL INTEREST, the interest is regarded as being related 
                            to the proposed research project and must be reported.
                            </p>
                            <p>
                            For the purposes of this disclosure, SIGNIFICANT FINANCIAL INTEREST is considered to include:
                            </p>
                            <p>
                                <ul>
                                <li>Income (Includes salary, stock dividends and/or interest earned, consulting fees, royalty payments and honoraria from a single business entity exceeding $10,000).</li>
                                <li>Position with a single business entity (Includes director, employee, founder, manager, officer, partner, trustee, or advisory board member).</li>
                                <li>Investment Ownership or Controlling Interest of more than 5% of the voting stock in a single business entity.</li>
                                <li>Interest in Intellectual Property Rights belonging to a single business entity (Includes patents, copyrights or other license rights).</li>
                                </ul>
                            </p>
                            <label>
                            <input type="checkbox" checked>
                                I acknowledge that it is my responsibility to disclose any new SIGNIFICANT FINANCIAL INTERESTS obtained during the term of this disclosure. 
                                I certify that this is a complete disclosure of all my financial interests related to the projects therein. 
                            </label>                            
                        </div>
                    </div>
                </main>
            </div>
            <div class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
                <div class="global-actions btn-group">
                    <button type="button" href="coi-my-disclosures.php" class="btn btn-default">Cancel</button>
                </div>
                <div class="global-navigate btn-group">
                    <button type="button" href="coi-relationships.php" class="btn btn-default">
                        <span class="icon-chevron-left">

                        </span>
                        Back
                    </button>
                </div>
                <div class="global-actions btn-group">
                    <button type="button" href="coi-my-disclosures.php" class="btn btn-primary">Submit Disclosure</button>
                </div>
            </div>
        </div>
    </form>
    <?php include('includes/footer-scripts.php') ?>

<!-- MODAL INCLUDES -->
<?php include ('includes/modals-coi/attachment-reporter.php') ?>

</body>
</html>
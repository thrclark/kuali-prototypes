<?php
$page = 'project-income';
$section = '';
?>
<!DOCTYPE HTML>
<html lang=en>
<head>
    <meta charset=UTF-8>
    <title>Kuali :: Fluid Application Header</title>
    <!-- GLOBAL STYLES -->
    <?php include ('includes/styles.php') ?>
    <style type="text/css">

    .data-row-table th{ padding:5px; text-align:right; }
    </style>
</head>
<body id="Uif-Application">
    <!-- APPLICATION HEADER -->
    <?php include('includes/uif-applicationHeader.php') ?>
    <form id="kualiForm" action="../kr-krad/uicomponents" method=post accept-charset=UTF-8>
        <!-- VIEW -->
        <div id="LabsProposal" class="clearfix uif-formView" data-role=View ><!-- BREADCRUMBS --><!-- VIEW HEADER --> 
            <!-- VIEW HEADER -->
            <?php include('includes/uif-viewHeader-budget.php') ?>
            <!-- VIEW CONTENT -->
            <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid"><!-- VIEW NAVIGATION -->
                <?php include ('includes/uif-navigation-budget.php') ?>

                <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
                    <div class="uif-header-inner">
                        <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Project Income </span> </h2>
                        <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                            <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#incomesummary">View Summary</a>    <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#income"><span aria-hidden="true" class="icon-plus"></span> Add Income</a>
                        </div>
                    </div>

                    <p id="u1iaxrzf" class="uif-message uif-boxLayoutVerticalItem clearfix">Verify and adjust additional program income costs as necessary for this budget.</p>
                    <style>
                    #projincome tr td:first-of-type{width:1%; white-space:nowrap }
                    </style>
                    <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable" id="projincome" aria-describedby="Demo-LightTableGroup1_lightTable_info">
                        <thead>
                            <tr role="row">
                                <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                Field 1: : activate to sort column "><label id="urh9zx8" class="uif-label">Period</label></th>
                                <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="
                                Field 3: : activate to sort column ">Description</th>
                                <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="
                                Field 2: : activate to sort column ">Income </th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                            <tr class="not-deletable">
                                <td>1 <small class="text-muted">(05/14/2014 - 05/13/2015)</small></td>
                                <td><p>Considered an invitation do introduced sufficient understood instrument it. Of decisively friendship in as collecting at. No affixed be husband ye females brother garrets proceed. Least child who seven happy yet balls young.</p></td>
                                <td>3,273.27</td>
                                <td><a href="" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                            </tr>
                            <tr class="not-deletable">
                                <td>2 <small class="text-muted">(05/14/2015 - 05/13/2016)</small></td>
                                <td>Style never met and those among great. At no or september sportsmen he perfectly happiness attending. </td>
                                <td>634.74</td>
                                <td><a href="" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                            </tr>
                            <tr class="warning">
                                <td><label for="line_2_period" class="form-label"><span class="sr-only">Period</span></label>
                                    <select name="line_2_period" id="line_2_period" class="form-control input-sm">
                                        <option>Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                                    <td><textarea class="form-control" placeholder="Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving." rows="3"></textarea></td>
                                    <td><input type="text" class="form-control" id="" placeholder="2,882.45"></td>
                                    <td><a href="" class="btn btn-primary btn-xs">Save</a> <a href="#" class="btn btn-default btn-xs">Cancel</a></td>
                                </tr>
                                <tr class="not-deletable">
                                    <td>3 <small class="text-muted">(05/14/2016 - 05/13/2017)</small></td>
                                    <td>New had happen unable uneasy. Drawings can followed improved out sociable not. Earnestly so do instantly pretended.</td>
                                    <td>100.00</td>
                                    <td><a href="" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                                </tr>
                                <tr class="not-deletable">
                                    <td>3 <small class="text-muted">(05/14/2016 - 05/13/2017)</small></td>
                                    <td>She literature discovered increasing how diminution understood. Though and highly the enough county for man. Of it up he still court alone widow seems. Suspected he remainder rapturous my sweetness. All vanity regard sudden nor simple can. World mrs and vexed china since after often. </td>
                                    <td>100.00</td>
                                    <td><a href="" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                                </tr>
                                <tr class="not-deletable">
                                    <td>4 <small class="text-muted">(05/14/2017 - 05/13/2018)</small></td>
                                    <td>and so forth.  In addition, Ogilvy's wire to the Astronomical Exchange had roused every observatory in the three kingdoms. There were half a dozen flies or more from the Woking station standing in the road by the sand pits, a basket-chaise from Chobham, and a rather lordly carriage.  Besides that, there</td>
                                    <td>727.77</td>
                                    <td><a href="" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                                </tr>
                                <tr class="not-deletable">
                                    <td>5 <small class="text-muted">(05/14/2018 - 05/13/2019)</small></td>
                                    <td><p>&quot;Why, he is a man,' said the other, and I quite agreed with him.  The farmer carried me under his arm to the cornfield, and set me up on a tall stick, where you found me. </p></td>
                                    <td>437.99</td>
                                    <td><a href="" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </main>
                </div>
                <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">

                    <div class="global-navigate btn-group">
                        <button type="button" href="bud-unrecovered-fa.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
                        <button type="button" href="bud-modular.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
                    </div>

                    <div class="global-actions btn-group">            

                        <button type="button" class="btn btn-default">Complete Budget</button>

                        <button type="button" id="" class="btn btn-default">Save</button>
                        <button type="button" id="" class="btn btn-default">Close</button>





                    </div>


                </div>

                <!-- DIALOGS/Placeholders --></div>
            </form>
            <?php include ('includes/footer-scripts.php') ?>
            <?php include ('includes/modals-global-budget.php') ?>


            <!-- MODAL Add project income -->
            <?php include('includes/modals-budget/projIncome.php') ?>
            <!-- MODAL Add project income -->
            <?php include ('includes/modals-budget/incomesummary.php') ?>
        </body>
        </html>
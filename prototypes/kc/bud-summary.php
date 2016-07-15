<?php
$page = 'summary';
$section = '';
?>

<!DOCTYPE HTML>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex,nofollow" />
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>
<style>
.text-normal{font-weight:normal;}
</style>
</head>

<body id="Uif-Application">
<!-- APPLICATION HEADER -->
<?php include('includes/uif-applicationHeader.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View"> <!-- BREADCRUMBS --> 
        <!-- VIEW HEADER -->
        <?php include('includes/uif-viewHeader-budget.php') ?>
        <!-- // VIEW HEADER  --> 
        
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid"> 
            <!-- VIEW NAVIGATION -->
            
            <?php include ('includes/uif-navigation-budget.php') ?>
            <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
                <div class="uif-header-inner">
                    <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Budget Summary </span> </h2>
                    <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                        <div class="btn-group" id="more-columns">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle"><span class="icon-arrow-left text-muted" >Previous 5 Periods</button>
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" style=" color:#0077CC">Next 5 Periods <span class="icon-arrow-right" ></span></button>
                        </div>
                        
                        <!-- export -->
                        <div class="btn-group" id="export-pdf-excel">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"> Export <span class="caret"></span></button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#"  data-toggle="modal" data-target="#copyNew" class=""><span aria-hidden="true" class="icon-file-excel"></span>Excel</a></li>
                                <li><a href="#"><span aria-hidden="true" class="icon-file-pdf"></span>Pdf</a></li>
                            </ul>
                        </div>
                        <!-- // export  --> 
                        
                    </div>
                </div>
                <table class="table table-condensed table-bordered">
                    <tbody>
                        <tr>
                            <th>&nbsp;</th>
                            <th class="text-center">P1 <span class="text-normal text-muted clearfix">(1/12/14 - 1/11/15)</span><span class="sr-only">Period 1</span></th>
                            <th class="text-center">P2 <span class="text-normal text-muted clearfix">(1/12/15 - 1/11/16)</span><span class="sr-only">Period 2</span></th>
                            <th class="text-center">P3 <span class="text-normal text-muted clearfix">(1/12/16 - 1/11/17)</span><span class="sr-only">Period 3</span></th>
                            <th class="text-center">P4 <span class="text-normal text-muted clearfix">(1/12/17 - 1/11/18)</span><span class="sr-only">Period 4</span></th>
                            <th class="text-center">P5 <span class="text-normal text-muted clearfix">(1/12/19 - 1/11/20)</span><span class="sr-only">Period 5</span> </th>
                            <th class="text-center">Totals <span class="sr-only">Period totals</span></th>
                        </tr>
                        <tr class="active">
                            <td colspan="7" style=" border-bottom-width: 3px;
"><span class="lead">Personnel</span></td>
                        </tr>
                        <tr class="active">
                            <td ><strong>Salary</strong></td>
                            <td class="text-right active" ><strong>$194,279.00</strong></td>
                            <td class="text-right active" ><strong>$194,279.00</strong></td>
                            <td class="text-right active" ><strong>$194,279.00</strong></td>
                            <td class="text-right active" ><strong>$194,279.00</strong></td>
                            <td class="text-right active" ><strong>$194,279.00</strong></td>
                            <td class="text-right active" ><strong>$971,395.00</strong></td>
                        </tr>
                        <tr class="">
                            <td ><a href="#"> <span aria-hidden="true" class="icon-chevron-down"></span> Faculty Salaries Non-Tenured - On</a></td>
                            <td class="text-right active" >$156,934.00</td>
                            <td class="text-right active" >$156,934.00</td>
                            <td class="text-right active" >$156,934.00</td>
                            <td class="text-right active" >$156,934.00</td>
                            <td class="text-right active" >$156,934.00</td>
                            <td class="text-right active" >$784,670.00</td>
                        </tr>
                        <tr class="">
                            <td style="padding-left:22px">Andrew Sulsar</td>
                            <td class="text-right text-muted">$100,000.00</td>
                            <td class="text-right text-muted">$100,000.00</td>
                            <td class="text-right text-muted">$100,000.00</td>
                            <td class="text-right text-muted">$100,000.00</td>
                            <td class="text-right text-muted">$100,000.00</td>
                            <td class="text-right text-muted">$500,000.00</td>
                        </tr>
                        <tr class="">
                            <td style="padding-left:22px">Alan Jones</td>
                            <td class="text-right text-muted">$56,934.00</td>
                            <td class="text-right text-muted">$56,934.00</td>
                            <td class="text-right text-muted">$56,934.00</td>
                            <td class="text-right text-muted">$56,934.00</td>
                            <td class="text-right text-muted">$56,934.00</td>
                            <td class="text-right text-muted">$284,670.00</td>
                        </tr>
                        <tr class="">
                            <td><a href="#"> <span aria-hidden="true" class="icon-chevron-down"></span> Administrative Staff - On</a></td>
                            <td class="text-right active">$37,345.00</td>
                            <td class="text-right active">$37,345.00</td>
                            <td class="text-right active">$37,345.00</td>
                            <td class="text-right active">$37,345.00</td>
                            <td class="text-right active">$37,345.00</td>
                            <td class="text-right active">$186,725.00</td>
                        </tr>
                        <tr class="">
                            <td style="padding-left:22px">Data Entry Assistant</td>
                            <td class="text-right text-muted">$37,345.00</td>
                            <td class="text-right text-muted">$37,345.00</td>
                            <td class="text-right text-muted">$37,345.00</td>
                            <td class="text-right text-muted">$37,345.00</td>
                            <td class="text-right text-muted">$37,345.00</td>
                            <td class="text-right text-muted">$186,725.00</td>
                        </tr>
                        <tr class="active">
                            <td ><strong>Fringe</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                        </tr>
                        <tr class="">
                            <td><a href="#"> <span aria-hidden="true" class="icon-chevron-down"></span> Faculty Salaries Non-Tenured - On</a></td>
                            <td class="text-right active">$0.00</td>
                            <td class="text-right active">$0.00</td>
                            <td class="text-right active">$0.00</td>
                            <td class="text-right active">$0.00</td>
                            <td class="text-right active">$0.00</td>
                            <td class="text-right active">$0.00</td>
                        </tr>
                        <tr class="">
                            <td style="padding-left:22px">Andrew Sulsar</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                        </tr>
                        <tr class="">
                            <td style="padding-left:22px">Alan Jones</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                        </tr>
                        <tr class="">
                            <td><a href="#"> <span aria-hidden="true" class="icon-chevron-down"></span> Administrative Staff - On</a></td>
                            <td class="text-right active">$0.00</td>
                            <td class="text-right active">$0.00</td>
                            <td class="text-right active">$0.00</td>
                            <td class="text-right active">$0.00</td>
                            <td class="text-right active">$0.00</td>
                            <td class="text-right active">$0.00</td>
                        </tr>
                        <tr class="">
                            <td style="padding-left:22px">Data Entry Assistant</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                            <td class="text-right text-muted">$0.00</td>
                        </tr>
                        <tr class="active">
                            <td ><strong>Calculated Direct Costs</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                        </tr>
                        <tr class="">
                            <td>Personnel Subtotal</td>
                            <td class="text-right"><strong>$222,563.00</strong></td>
                            <td class="text-right"><strong>$222,563.00</strong></td>
                            <td class="text-right"><strong>$222,563.00</strong></td>
                            <td class="text-right"><strong>$222,563.00</strong></td>
                            <td class="text-right"><strong>$222,563.00</strong></td>
                            <td class="text-right"><strong>$837,456</strong></td>
                        </tr>
                        <tr class="active">
                            <td colspan="7" style=" border-bottom-width: 3px;
"><span class="lead">Non-personnel</span></td>
                        </tr>
                        <tr class="">
                            <td><a href="#"><span aria-hidden="true" class="icon-chevron-right"></span> Equipment</a></td>
                            <td class="text-right active">$38,546</td>
                            <td class="text-right active">$38,546</td>
                            <td class="text-right active">$38,546</td>
                            <td class="text-right active">$38,546</td>
                            <td class="text-right active">$38,546</td>
                            <td class="text-right active">$219,348</td>
                        </tr>
                        <tr class="active">
                            <td ><strong>Calculated Direct Costs</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                            <td class="text-right active" ><strong>$0.00</strong></td>
                        </tr>
                        <tr class="">
                            <td>Nonpersonnel Subtotal</td>
                            <td class="text-right"><strong>$38,546</strong></td>
                            <td class="text-right"><strong>$38,546</strong></td>
                            <td class="text-right"><strong>$38,546</strong></td>
                            <td class="text-right"><strong>$38,546</strong></td>
                            <td class="text-right"><strong>$38,546</strong></td>
                            <td class="text-right"><strong>$219,348</strong></td>
                        </tr>
                        <tr class="active">
                            <td colspan="7" style=" border-bottom-width: 3px;
"><span class="lead">Totals</span></td>
                        </tr>
                        <tr>
                            <td>Total Direct Cost</td>
                            <td class="text-right">$723,454</td>
                            <td class="text-right">$723,454</td>
                            <td class="text-right">$723,454</td>
                            <td class="text-right">$723,454</td>
                            <td class="text-right">$723,454</td>
                            <td class="text-right">$496,432</td>
                        </tr>
                        <tr>
                            <td>Total F&amp;A Costs</td>
                            <td class="text-right">$34,537</td>
                            <td class="text-right">$34,537</td>
                            <td class="text-right">$34,537</td>
                            <td class="text-right">$34,537</td>
                            <td class="text-right">$34,537</td>
                            <td class="text-right">$154,578</td>
                        </tr>
                        <!-- tr>
        <td colspan="5" >Totals</td>
      </tr> -->
                        <tr class="active">
                            <td><strong>Total Costs</strong></td>
                            <td class="text-right"><strong>$238,546</strong></td>
                            <td class="text-right"><strong>$238,546</strong></td>
                            <td class="text-right"><strong>$238,546</strong></td>
                            <td class="text-right"><strong>$238,546</strong></td>
                            <td class="text-right"><strong>$238,546</strong></td>
                            <td class="text-right"><strong>$2,219,348</strong></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <!-- // I noticed that the Budget Versions > Action> Budget Summary “white box” view shows the “generate periods” option – I don’t think that function should be an option on this “quick view” of the summary. -- ***//  tr>
                        <td></td>
                        <td class="text-center ">
                            <button class="btn btn-default btn-xs">Generate Periods <br> from Period 1</button>
                        </td>
                        <td colspan="5"></td>
                    </tr -->
                    </tfoot>
                </table>
            </main>
        </div>
        <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
            <div class="global-navigate btn-group">
                <button type="button" href="bud-notes.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
            </div>
             <div class="global-actions btn-group">
                <button type="button" class="btn btn-primary">Complete Budget</button>
                <button type="button" id="" class="btn btn-default">Save</button>
                <button type="button" id="" class="btn btn-default">Close</button>
            </div>
        </div>
        
        <!-- DIALOGS/Placeholders --> </div>
</form>
<?php include ('includes/footer-scripts.php') ?>
<?php include ('includes/modals-global-budget.php') ?>
</body>
</html>
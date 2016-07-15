<?php
$page = 'modular';
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
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View">
    <!-- BREADCRUMBS --> 
    <!-- VIEW HEADER --> 
    <!-- VIEW HEADER -->
    <?php include('includes/uif-viewHeader-budget.php') ?>
    <!-- VIEW CONTENT -->
    <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid"> 
        <!-- VIEW NAVIGATION -->
        <?php include ('includes/uif-navigation-budget.php') ?>
        <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
            <div class="uif-header-inner">
                <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Modular </span> </h2>
                <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> </div>
            </div>
            <p id="u1iaxrzf" class="uif-message uif-boxLayoutVerticalItem clearfix"> Review the modular summary below for your NIH proposal submission. </p>
            
            <!--TABS -->
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li class="active"><a href="#p1" data-toggle="tab">Period 1 </a></li>
                <li class=""><a href="#p2" data-toggle="tab">Period 2</a></li>
                <li><a href="#p3" data-toggle="tab">Period 3</a></li>
                <li><a href="#p4" data-toggle="tab">Period 4</a></li>
                <li><a href="#p5" data-toggle="tab">Period 5</a></li>
                <li><a href="#allperiods" data-toggle="tab">View All</a></li>
            </ul>
            <div id="my-tab-content" class="tab-content"> 
                
                <!-- period content -->
                <div class="tab-pane active" id="p1">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="uif-headerText"> Period 1 <small>(1/12/14 - 1/11/15)</small></h3>
                        </div>
                        <div class="col-md-6 uif-pagetools btn-group">
                            <button type="button" class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#modularoverview">Overview (Period 1)</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="uif-headerText"> <span class="uif-headerText-span"> F&amp;A </span> </h4>
                                </div>
                                <div class="col-md-6 uif-pagetools btn-group">
                                    <button type="button" class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target=""><span aria-hidden="true" class="icon-plus"></span> Add Rate</button>
                                </div>
                            </div>
                            <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable" id="costsharing" aria-describedby="Demo-LightTableGroup1_lightTable_info">
                                <thead>
                                    <tr role="row">
                                        <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
 Field 1: : activate to sort column "><label id="urh9zx8" class="uif-label">F&amp;A Rate Type</label></th>
                                        <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="
 Field 3: : activate to sort column ">F&amp;A Rate</th>
                                        <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" aria-label="
 Field 2: : activate to sort column ">F&amp;A Base</th>
                                        <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="
 Field 2: : activate to sort column ">Funds Requested</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                    <tr>
                                        <td>MTDC</td>
                                        <td class="text-right">5.00</td>
                                        <td class="text-right">2000.00</td>
                                        <td class="text-right">100.00</td>
                                        <td><a href="" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>TDC</td>
                                        <td class="text-right">5.00</td>
                                        <td class="text-right">2000.00</td>
                                        <td class="text-right">100.00</td>
                                        <td><a href="" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                                    </tr>
                                    <tr class="warning">
                                        <td><label for="line_2_period" class="form-label"><span class="sr-only">Rate Type</span></label>
                                            <select name="line_2_period" id="line_2_period" class="form-control input-sm">
                                                <option value="MTDC - AWARD" selected="selected">MTDC - AWARD</option>
                                                <option value="MTDC">MTDC</option>
                                                <option value="TDC">TDC</option>
                                                <option value="S&amp;W">S&amp;W</option>
                                                <option value="Fund with Transaction Fee (FUNSN)">Fund with Transaction Fee (FUNSN)</option>
                                            </select></td>
                                        <td class="text-right"><input type="text" class="form-control text-right" id="input2" value="5.00"></td>
                                        <td class="text-right"><input type="text" class="form-control text-right" id="input" value="2000.00"></td>
                                        <td class="text-right">100.00</td>
                                        <td><a href="" class="btn btn-primary btn-xs">Save</a> <a href="#" class="btn btn-default btn-xs">Cancel</a></td>
                                    </tr>
                                    <tr>
                                        <td>S&amp;W</td>
                                        <td class="text-right">5.00</td>
                                        <td class="text-right">2000.00</td>
                                        <td class="text-right">100.00</td>
                                        <td><a href="" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="active">
                                        <td colspan="3" class="text-right"><strong>Total</strong></td>
                                        <td class="text-right"><strong> 400.00</strong></td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <a href="#" class="btn btn-xs btn-default pull-right">Recalculate</a> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4> Direct Cost</h4>
                            <table class="table table-condensed table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Direct Cost Less Consortium F&amp;A</td>
                                        <td><label for="period_p1_s1"><span class="sr-only">Direct Cost Less Consortium F&amp;A</span></label>
                                            <input type="text" class="input-sm text-right" value="2000.00"></td>
                                    </tr>
                                    <tr>
                                        <td> Consortium F&A </td>
                                        <td><label for="period_p1_s2"><span class="sr-only"> Consortium F&A </span></label>
                                            <input type="text" class="input-sm text-right" value="4000.00"></td>
                                    </tr>
                                    <tr class="active">
                                        <td class="text-right"><strong>Total</strong></td>
                                        <td class="text-right"><strong>6000.00</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-xs btn-default pull-right">Recalculate</a> </div>
                    </div>
                    
                    <!-- // sections --> 
                </div>
                <div class="tab-pane" id="p5">
                    <section class="uif-disclosure uif-boxLayoutVerticalItem clearfix">
                        <header class="uif-sectionHeader"> </header>
                    </section>
                    <section class="uif-disclosure uif-boxLayoutVerticalItem clearfix">
                        <header class="uif-sectionHeader"> </header>
                    </section>
                    <section class="uif-disclosure uif-boxLayoutVerticalItem clearfix">
                        <header class="uif-sectionHeader"> </header>
                    </section>
                </div>
            </div>
            <!--//END TABS--> 
        </main>
    </div>
    <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
        <div class="global-navigate btn-group">
            <button type="button" href="bud-income.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
            <button type="button" href="bud-summary.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
        </div>  <div class="global-actions btn-group">            

<button type="button" class="btn btn-default">Complete Budget</button>
         
            <button type="button" id="" class="btn btn-default">Save</button>
            <button type="button" id="" class="btn btn-default">Close</button>
            
            
           
            
            
        </div>
        
        
        <!-- DIALOGS/Placeholders --> 
    </div>
    </form>
<?php include ('includes/footer-scripts.php') ?>
<?php include ('includes/modals-global-budget.php') ?>


<!-- MODAL modular summary -->
<?php include ('includes/modals-budget/modularoverview.php') ?>

<!--casual user -->
<?php
$currentPage =  $_SERVER['QUERY_STRING'] ;
if ($currentPage == "modular-budget=yes&amp;detail=yes") {
?>
<!--  casual user view --> 
<script>
(function($){
	
 $('body').on('click','#save-continue', function(e) {

   document.location.href='bud-summary.php?modular-budget=yes&amp;detail=yes'; 

});  
  	  
}(jQuery))	
</script>
<?php } ?>

<!--casual user -->
<?php
$currentPage =  $_SERVER['QUERY_STRING'] ;
if ($currentPage == "modular-budget=yes&amp;summary=yes") {
?>
<!--  casual user view --> 
<script>
(function($){
	
 $('body').on('click','#save-continue', function(e) {

   document.location.href='bud-summary.php?modular-budget=yes&amp;summary=yes'; 

});  
  	  
}(jQuery))	
</script>
<?php } ?>
</body>
</html>

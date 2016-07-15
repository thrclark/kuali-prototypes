<?php
$section = 'institute';
$page = 'costsharing';
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
        <div id="LabsProposal" class="clearfix uif-formView" data-role="View"> <!-- BREADCRUMBS --> 
        <!-- VIEW HEADER --> 
        <!-- VIEW HEADER -->
        <?php include('includes/uif-viewHeader-budget.php') ?>
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid"> 
                <!-- VIEW NAVIGATION -->
                <?php include ('includes/uif-navigation-budget.php') ?>
                  
   <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
<div class="uif-header-inner">
                    <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Cost Sharing </span> </h2>
                    <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                      <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#cssummary">View Summary</a> <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-costshare"><span aria-hidden="true" class="icon-plus"></span> Add Cost Sharing</a>
                        
                    </div>
                </div>
             
                <p id="u1iaxrzf" class="uif-message uif-boxLayoutVerticalItem clearfix"> Assign and distribute any additional unallocated expenses to stakeholders, institutions, or other individuals. </p>
                <style>
				#costsharing tr td:first-of-type{width:1%; white-space:nowrap }
				</style>
                <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable" id="costsharing" aria-describedby="Demo-LightTableGroup1_lightTable_info">
                        <thead>
                        <tr role="row">
                                <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
 Field 1: : activate to sort column "><label id="urh9zx8" class="uif-label">Period</label></th>
                                <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="
 Field 3: : activate to sort column ">Percentage</th>
                                <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" aria-label="
 Field 2: : activate to sort column ">Source Account</th>
                                <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="
 Field 2: : activate to sort column ">Amount </th>
                                <th>&nbsp;</th>
                            </tr>
                    </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <tr>
                                <td>1 <small class="text-muted">(05/14/2014 - 05/13/2015)</small></td>
                                <td class="text-right">0.25</td>
                                <td>0002375</td>
                                <td class="text-right">3,273.27</td>
                                <td><a href="" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                            </tr>
                        <tr>
                                <td>2 <small class="text-muted">(05/14/2015 - 05/13/2016)</small></td>
                                <td class="text-right">0.25</td>
                                <td>0007237</td>
                                <td class="text-right">634.74</td>
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
                                <td class="text-right"><input type="text" class="form-control text-right" id="input2" value="0.50"></td>
                                <td><input type="text" class="form-control" id="input" value="0002364"></td>
                                <td class="text-right"><input type="text" class="form-control text-right" id="" value="2,882.45"></td>
                                <td><a href="" class="btn btn-primary btn-xs">Save</a> <a href="#" class="btn btn-default btn-xs">Cancel</a></td>
                            </tr>
                        <tr>
                                <td>3 <small class="text-muted">(05/14/2016 - 05/13/2017)</small></td>
                                <td class="text-right">1.50</td>
                                <td>0005537</td>
                                <td class="text-right">100.00</td>
                                <td><a href="" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                            </tr>
                        <tr>
                                <td>3 <small class="text-muted">(05/14/2016 - 05/13/2017)</small></td>
                                <td class="text-right">0.25</td>
                                <td>0008485</td>
                                <td class="text-right">100.00</td>
                                <td><a href="" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                            </tr>
                        <tr>
                                <td>4 <small class="text-muted">(05/14/2017 - 05/13/2018)</small></td>
                                <td class="text-right">1.50</td>
                                <td>0005656</td>
                                <td class="text-right">727.77</td>
                                <td><a href="" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                            </tr>
                        <tr>
                                <td>5 <small class="text-muted">(05/14/2018 - 05/13/2019)</small></td>
                                <td class="text-right">0.25</td>
                                <td>0002825</td>
                                <td class="text-right">437.99</td>
                                <td><a href="" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                            </tr>
                    </tbody>
                        <tfoot>
                        <tr class="active">
                                <td colspan="3" class="text-right">Total Allocated</td>
                                <td class="text-right"><strong> 8,156.22</strong></td>
                                <td>&nbsp;</td>
                            </tr>
                        <tr class="active">
                                <td colspan="3" class="text-right">Total Unallocated</td>
                                <td class="text-right"><strong>0.00</strong></td>
                                <td>&nbsp;</td>
                            </tr>
                    </tfoot>
                    </table>
                <div class="pull-right">
                        <button class="btn btn-default btn-xs">Reset to Default</button>
                        <button class="btn btn-default btn-xs">Recalculate</button>
                    </div>
                </section>
            </main>
            </div>
            
            
            
            
            
            
            
            
  <div id="u19v7dpm" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal2" style="position:fixed; left: 0; bottom: 0px;">
  <div class="global-navigate btn-group">
                        <button type="button" href="bud-subawards.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
                        <button type="button" href="bud-unrecovered-fa.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
                    </div>  <div class="global-actions btn-group">            

<button type="button" class="btn btn-default">Complete Budget</button>
         
            <button type="button" id="" class="btn btn-default">Save</button>
            <button type="button" id="" class="btn btn-default">Close</button>
            
            
           
            
            
        </div>
        
</div>



        <!-- //different buttons for casual user --> 
        <!-- DIALOGS/Placeholders --> 
    </div>
        </form>
<?php include ('includes/footer-scripts.php') ?>
<?php include ('includes/modals-global-budget.php') ?>

<!-- casual user -->
<?php
$currentPage =  $_SERVER['QUERY_STRING'] ;
if ($currentPage == "modular-budget=no&amp;summary=yes") {
?>
<script>

(function($){
	
		
 $('body').on('click','#save-continue', function(e) {
	  e.preventDefault();
	  
	 
  document.location.href='bud-summary.php?modular-budget=no&amp;summary=yes';

  });  
  	  
}(jQuery))	
</script>
<?php } ?>

<!-- casual user -->
<?php
$currentPage =  $_SERVER['QUERY_STRING'] ;
if ($currentPage == "modular-budget=yes&amp;summary=yes") {
?>
<script>

(function($){
	
		
 $('body').on('click','#save-continue', function(e) {
	  e.preventDefault();
	  
	 
  document.location.href='bud-modular.php?modular-budget=yes&amp;summary=yes';

  });  
  	  
}(jQuery))	
</script>
<?php } ?>


<!-- MODAL budget cost sharing-->
<?php include ('includes/modals-budget/costsharing.php') ?>

<!-- MODAL budget cost sharing summary-->
<?php include ('includes/modals-budget/cssummary.php') ?>
</body>
</html>

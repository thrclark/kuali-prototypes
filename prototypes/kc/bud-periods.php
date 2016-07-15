<?php
$page = 'periods-and-totals';
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
                    <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Periods &amp; Totals </span> </h2>
                    <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                        <div>
                            <button class="btn btn-default btn-sm">Recalculate with changes</button>
                            <button class="btn btn-default btn-sm">Reset to period defaults</button>
                        </div>
                        
                    </div>
                </div>
                
                <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable">
                    <thead>
                        <tr>
                            <th>Start</th>
                            <th>End</th>
                            <th>Months</th>
                            <th>Total</th>
                            <th>Direct</th>
                            <th>F&amp;A</th>
                            <th>Unrecovered F&amp;A</th>
                            <th>Cost Sharing</th>
                            <th>Cost Limits</th>
                            <th>Direct Limits</th>
                            <th><span class="sr-only">Actions</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>02/01/2014</td>
                            <td>01/31/2015</td>
                            <td class="text-right">12.0</td>
                            <td class="text-right">$148,000</td>
                            <td class="text-right">$100,000</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td>02/01/2014</td>
                            <td>01/31/2015</td>
                            <td class="text-right">12.0</td>
                            <td class="text-right">$148,000</td>
                            <td class="text-right">$100,000</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr class="warning">
                            <td><div id="urvbzg" class="uif-inputField" data-parent="u1fjua60" data-role="InputField">
                                        <div class="input-group">
                                            <input id="urvbzg_control" type="text" name="inputField1" value="" size="10" class="form-control input-sm form-control input-sm form-control input-sm uif-dateControl hasDatepicker valid" data-role="Control" data-control_for="urvbzg">
                                            <div class="input-group-btn"> <a class="btn btn-default icon-calendar ui-datepicker-trigger" alt="..." title="..."></a></div>
                                        </div>
                                    </div></td>
                            <td><div id="urvbzg" class="uif-inputField" data-parent="u1fjua60" data-role="InputField">
                                        <div class="input-group">
                                            <input id="urvbzg_control" type="text" name="inputField1" value="" size="10" class="form-control input-sm form-control input-sm form-control input-sm uif-dateControl hasDatepicker valid" data-role="Control" data-control_for="urvbzg">
                                            <div class="input-group-btn"> <a class="btn btn-default icon-calendar ui-datepicker-trigger" alt="..." title="..."></a></div>
                                        </div>
                                    </div></td>
                            <td class="text-right"><input type="text" class="form-control text-right" value="12.0"></td>
                            <td class="text-right"><input type="text" class="form-control text-right" value="$148,000"></td>
                            <td class="text-right"><input type="text" class="form-control text-right" value="$100,000"></td>
                            <td class="text-right"><input type="text" class="form-control text-right" value="$0"></td>
                            <td class="text-right"><input type="text" class="form-control text-right" value="$0"></td>
                            <td class="text-right"><input type="text" class="form-control text-right" value="$0"></td>
                            <td class="text-right"><input type="text" class="form-control text-right" value="$0"></td>
                            <td class="text-right"><input type="text" class="form-control text-right" value="$0"></td>
                            <td><a href="#" class="btn btn-primary btn-xs">Save</a> <a href="#" class="btn btn-default btn-xs">Cancel</a></td>
                        </tr>
                        <tr>
                            <td>02/01/2014</td>
                            <td>01/31/2015</td>
                            <td class="text-right">12.0</td>
                            <td class="text-right">$148,000</td>
                            <td class="text-right">$100,000</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td>02/01/2014</td>
                            <td>01/31/2015</td>
                            <td class="text-right">12.0</td>
                            <td class="text-right">$148,000</td>
                            <td class="text-right">$100,000</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td class="text-right">$0</td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="active">
                            <td colspan="2" class="text-right">Totals</td>
                            <td class="text-right"><strong>60</strong></td>
                            <td class="text-right"><strong>$740,000</strong></td>
                            <td class="text-right"><strong>$500,000</strong></td>
                            <td class="text-right"><strong>$0</strong></td>
                            <td class="text-right"><strong>$0</strong></td>
                            <td class="text-right"><strong>$0</strong></td>
                            <td class="text-right"><strong>$0</strong></td>
                            <td class="text-right"><strong>$0</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                    </tfoot>
                </table>
            </main>
        </div>
        
        <!-- VIEW FOOTER -->
        
        <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
      
                <div class="global-navigate btn-group">
                    <button type="button" href="bud-summary2.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
                    <button type="button" href="bud-rates.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
                </div>  <div class="global-actions btn-group">            

<button type="button" class="btn btn-default">Complete Budget</button>
         
            <button type="button" id="" class="btn btn-default">Save</button>
            <button type="button" id="" class="btn btn-default">Close</button>
            
            
           
            
            
        </div>
        
           
        </div>
        
        <!-- DIALOGS/Placeholders --> </div>
    </form>
<?php include ('includes/footer-scripts.php') ?>
<?php include ('includes/modals-global-budget.php') ?>

<!-- different actions for casual user -->
<?php
$currentPage =  $_SERVER['QUERY_STRING'] ;
if ($currentPage == "modular-budget=no&amp;summary=yes") {
?>

<!-- CASUAL USER LOGIC --> 
<script>
/*

If a user selects summary budget and modular = no, then:

*/
(function($){
	
		




 $('body').on('click','#save-continue', function(e) {
	  e.preventDefault();
	  
	 

	
	
	
if  (($("input.unrecovered").val() != "") && ($("input.cost-sharing").val() != "")){
 document.location.href='bud-cost-sharing.php?modular-budget=no&amp;summary=yes';
} else if ($("input.unrecovered").val() != "") {
 document.location.href='bud-unrecovered-fa.php?modular-budget=no&amp;summary=yes';
} else if  ($("input.cost-sharing").val() != ""){
 document.location.href='bud-cost-sharing.php?modular-budget=no&amp;summary=yes';
}
else {
   document.location.href='bud-summary.php?modular-budget=no&amp;summary=yes'
} 
	

    


});  
  	  
}(jQuery))	
</script> 
<!-- // CASUAL USER LOGIC -->

<?php } ?>
<?php
$currentPage =  $_SERVER['QUERY_STRING'] ;
if ($currentPage == "modular-budget=yes&amp;summary=yes") {
?>
<script>

(function($){
	
		
 $('body').on('click','#save-continue', function(e) {
	  e.preventDefault();
	  
	 

	
	
	
if  (($("input.unrecovered").val() != "") && ($("input.cost-sharing").val() != "")){
 document.location.href='bud-cost-sharing.php?modular-budget=yes&amp;summary=yes';
} else if ($("input.unrecovered").val() != "") {
document.location.href='bud-unrecovered-fa.php?modular-budget=yes&amp;summary=yes';
} else if  ($("input.cost-sharing").val() != ""){
document.location.href='bud-cost-sharing.php?modular-budget=yes&amp;summary=yes';
}
else {
   document.location.href='bud-modular.php?modular-budget=yes&amp;summary=yes';
} 
	  
	  


  });  
  	  
}(jQuery))	
</script>
<?php } ?>
</div>
<!-- //different buttons for casual user --> 
</body>
</html>
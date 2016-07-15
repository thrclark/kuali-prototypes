<?php
$section = 'personnel';
$page = 'personnel-costs';
?>
<!DOCTYPE HTML>
<html lang=en>
<head>
<meta charset=UTF-8>
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>
<style>
.dropdown-large {
 position:;
}
.dropdown-menu-large {
	margin-left: 16px;
	margin-right: 16px;
	padding: 20px 0px;
}
.dropdown-menu-large > li > ul {
	padding: 0;
	margin: 0;
}
.dropdown-menu-large > li > ul > li {
	list-style: none;
}
.dropdown-menu-large > li > ul > li > a {
	display: block;
	padding: 3px 20px;
	clear: both;
	font-weight: normal;
	line-height: 1.428571429;
	color: #333333;
	white-space: normal;
}
.dropdown-menu-large > li ul > li > a:hover, .dropdown-menu-large > li ul > li > a:focus {
	text-decoration: none;
	color: #262626;
	background-color: #f5f5f5;
}
.dropdown-menu-large .disabled > a, .dropdown-menu-large .disabled > a:hover, .dropdown-menu-large .disabled > a:focus {
	color: #999999;
}
.dropdown-menu-large .disabled > a:hover, .dropdown-menu-large .disabled > a:focus {
	text-decoration: none;
	background-color: transparent;
	background-image: none;
 filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
	cursor: not-allowed;
}
.dropdown-menu-large .dropdown-header {
	color: #428bca;
	font-size: 18px;
}



.hilite  {
    -webkit-animation: target-fade 8s 1;
    -moz-animation: target-fade 8s 1;
}

@-webkit-keyframes target-fade {
    0% { background-color:#FFC; }
    100% { background-color:#fff; }
}
@-moz-keyframes target-fade {
    0% { background-color:#FFC; }
     100% { background-color:#fff; }
}



@media (max-width: 768px) {
.dropdown-menu-large {
	margin-left: 0;
	margin-right: 0;
}
.dropdown-menu-large > li {
	margin-bottom: 30px;
}
.dropdown-menu-large > li:last-child {
	margin-bottom: 0;
}
.dropdown-menu-large .dropdown-header {
	padding: 3px 15px !important;
}
}
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
	 		<!-- // VIEW HEADER -->
	 <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid"><!-- VIEW NAVIGATION -->
            <?php include ('includes/uif-navigation-budget.php') ?>
               
   <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
<div class="uif-header-inner">
                    <h2 id="" class="uif-headerText"> <span class="uif-headerText-span">  Project Personnel </span> </h2>
                    <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                       <a href="#" class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#modal-add-personnel1"><span aria-hidden="true" class="icon-plus"></span> Add Personnel</a> 
                        
                    </div>
                </div>
				
<p id="u1iaxrzf" class="uif-message uif-boxLayoutVerticalItem clearfix">Personnel added to the proposal are shown below. Review, configure, and add additional personnel to the budget.</p>
           

                <!-- User feedback messaging -->
                <div class="alert alert-success">
                    <i class="icon icon-checkmark"></i> Additional personnel were successfully added!
                    
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                </div>
                <!-- // -->

                <table class="table table-condensed uif-has-actions uif-lightTable dataTable" id="Demo-LightTableGroup1_lightTable" aria-describedby="Demo-LightTableGroup1_lightTable_info">
                    <thead>
                        <tr role="row">
                            <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
 Field 1: : activate to sort column "><label id="urh9zx8" class="uif-label">Person</label></th>
                            <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="
 Field 2: : activate to sort column ">Job Code</th>
                            <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="
 Field 3: : activate to sort column ">Appointment Type</th>
                            <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="
 Field 4: : activate to sort column ascending">Base Salary</th>
                            <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="
 Field 4: : activate to sort column "></th>
                    </tr></thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <tr class="not-deletable active">
                            <td colspan="5"><strong class="pull-left">From Proposal Development</strong> <a href="#" class="btn btn-default btn-xs pull-right" data-toggle="">Sync from Proposal </a></td>
                        </tr>
                        <tr class="not-deletable">
                            <td>Ward Cleaver <small class="text-muted">(PI)</small></td>
                            <td>Associate Provost <small class="text-muted">(AA014)</small></td>
                            <td>12 month</td>
                            <td class="text-right">$247,457</td>
                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-edit-personnel-01">Details</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr class="not-deletable">
                            <td>John Coltrane <small class="text-muted">(Co-PI)</small></td>
                            <td>Dean/Faculty <small class="text-muted">(AA042)</small></td>
                            <td>12 month</td>
                            <td class="text-right">$163,771</td>
                            <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-edit-personnel-02">Details</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr class="not-deletable active">
                            <td colspan="5"><strong class="pull-left">Additional Personnel</strong></td>
                        </tr>
                        <tr class="hilite">
                            <td>Oliver Elgin <small class="text-muted">(Research Assistant)</small></td>
                            <td>Dean/Faculty <small class="text-muted">(AA042)</small></td>
                            <td>Summer</td>
                            <td class="text-right">$73,734</td>
                            <td class="not-deletable"><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-edit-personnel-02">Details</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr class="hilite">
                            <td>Darren Devaney <small class="text-muted">(Research Assistant)</small></td>
                            <td>Dean/Faculty <small class="text-muted">(AA042)</small></td>
                            <td>9 Month</td>
                            <td class="text-right">$82,832</td>
                            <td class="not-deletable"><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-edit-personnel-02">Details</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr class="hilite">
                            <td>Emory Eagle <small class="text-muted">(Research Assistant)</small></td>
                            <td>Associate Provost <small class="text-muted">(AA014)</small></td>
                            <td>Temporary</td>
                            <td class="text-right">$42,777</td>
                            <td class="not-deletable"><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-edit-personnel-02">Details</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>

                        
                        
                    </tbody>
                </table>
              <!--  <a href="#" class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#modal-add-personnel"><span aria-hidden="true" class="icon-plus"></span> Add More People</a>-->
               
                </main>
        </div>


    <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
      
            <div class="global-navigate btn-group">
                <button type="button" href="bud-rates.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
                    <button type="button" href="bud-personnelCosts-persPeriod.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
                </div>  <div class="global-actions btn-group">            

<button type="button" class="btn btn-default">Complete Budget</button>
         
            <button type="button" id="" class="btn btn-default">Save</button>
            <button type="button" id="" class="btn btn-default">Close</button>
            
            
           
            
            
        </div>
        
        
    </div>

        <!-- DIALOGS/Placeholders --></div>
    
</form>
<?php include ('includes/footer-scripts.php') ?>
<?php include ('includes/modals-global-budget.php') ?>

<!-- MODAL edit personnel's -->
<?php include ('includes/modals-budget/edit-personnel-01.php') ?>
<?php include ('includes/modals-budget/edit-personnel-02.php') ?>

  <!-- MODAL ADD PERSONNEL -->
<?php include ('includes/modals-budget/add-personnel.php') ?>
<?php include ('includes/modals-budget/add-personnel1.php') ?>
<?php include('includes/modals-budget/add-personnel1-results.php') ?>
<?php include('includes/modals-budget/add-personnel1-results-tbn.php') ?>
    


</body>
</html>
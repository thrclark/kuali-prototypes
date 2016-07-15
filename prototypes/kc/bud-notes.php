<?php
$page = 'notes';
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

#budget-notes-area{width:100%; min-height:355px; margin-bottom: 1em;;}
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
                    <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Budget Notes </span> </h2>
                    <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                       
                        
                    </div>
                </div>
               
                <section>              
                    <div class="row">
                        <div class="col-md-12">
                            <p>This area contains a consolidated list of justification notes that have been added to items in your budget. The last user to add a justification
                                is listed above the text box. To bring in the latest updates, click <strong>Consolidate Expense Justifications</strong>.</p>
                        </div> 
                    </div>
                    <div class="row">                        
                        <div class="col-md-12 clearfix">
                            <div class="col-md-3 pull-right text-right"><strong>Last updated:</strong> 01/22/2014</div>                   
                            <div class="col-md-3 pull-right text-right"><strong>Updated by:</strong>  mdiaz  </div>
                            <label for="budget-notes-area" class=""><strong>Notes</strong></label><br>
                                <textarea id="budget-notes-area"  class="form-control input">This microscope is essential to performing the research.</textarea> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-default btn-xs pull-right">Consolidate Expense Justifications</button>
                        </div>
                    </div>               
                </section>
            </main>
        </div>


        <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
      
                <div class="global-navigate btn-group">
                    <button type="button" href="bud-modular.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
                    <button type="button" href="bud-summary.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
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
</body>
</html>
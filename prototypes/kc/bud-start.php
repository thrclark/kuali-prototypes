<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex,nofollow" />
<title>Kuali :: Fluid Application Header</title>

<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>
<style>
.topMargin1em {
	margin-top: 1em;
}
.shake {
	animation-name: shake;
	-webkit-animation-name: shake;
	animation-duration: .99s;
	-webkit-animation-duration: .99s;
	-webkit-animation-timing-function: ease-in;
	-webkit-animation-timing-function: ease-out;
	-webkit-animation-iteration-count: 1s;
	-webkit-animation-timing-function: linear;
	visibility: visible !important;
	color: red;
	;
}
 @keyframes shake {
 0%, 100% {
 -webkit-transform:translate(2px, 1px) rotate(0deg);
-ms-transform:translateX(0);
transform:translateX(0)
}
10%, 30%, 50%, 70%, 90% {
-webkit-transform:translate(2px, -11px) rotate(0deg);
-ms-transform:translateX(-10px);
transform:translateX(-10px)
}
20%, 40%, 60%, 80% {
-webkit-transform:translate(2px, 11px) rotate(0deg);
-ms-transform:translateX(10px);
transform:translateX(10px)
}
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
                    <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Detailed or Summary Budget </span> </h2>
                    <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> </div>
                </div>
                
                <!--    
                <div class="pull-right"> <a href="#"> <span class="icon-compass"></span> Guide Me</a></div>
      =          --> 
                <!-- -->
                <div class="uif-verticalBoxGroup uif-header-lowerGroup">
                    <div class="uif-boxLayoutVerticalItem clearfix">
                        <p> <b>Would you like to create a detailed budget or enter a summary only?</b> </p>
                    </div>
                </div>
                </header>
                <div class="uif-cssGridGroup uif-boxLayoutVerticalItem clearfix well active"> 
                    <!-- <div class="row">
					<div class="col-md-3">
						<a class="btn btn-default" id="start-detail-budget" href="#">Start a detailed budget</a> 
					</div>
					<div class="col-md-3">
						<a class="btn btn-default" id="start-summary-budget" href="#">Start a summary-only budget</a> 
					</div>
				</div> -->
                    
                    <div class="row">
                        <p>
                            <label for="radio-start-detail-budget">
                                <input type="radio" name="radio-start-budget" value="detail" id="radio-start-detail-budget">
                                Start a detailed budget</label>
                        </p>
                        <p>
                            <label for="radio-start-summary-budget">
                                <input type="radio" name="radio-start-budget" value="summary" id="radio-start-summary-budget">
                                Start a summary budget</label>
                        </p>
                    </div>
                    <div class="uif-boxLayoutVerticalItem ">
                        <p class="topMargin1em"> Will this be a modular budget?
                            <label>
                                <input type="radio" name="radio-modular-budget" value="modular" id="radio-modular-budget_yes">
                                Yes</label>
                            <label>
                                <input type="radio" name="radio-modular-budget" value="periods" id="radio-modular-budget_no">
                                No</label>
                        </p>
                    </div>
                </div>
                
                <!-- --> 
            </main>
        </div>
        <!-- VIEW FOOTER <button type="button"  id="complete"  data-toggle="modal" data-target="#modal-budget-complete" class="btn btn-default">Complete Budget</button>-->
        <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
            <div class="global-actions"> <a id="" class="btn btn-default uif-secondaryActionButton uif-boxLayoutHorizontalItem">Save </a> <a id="" class="btn btn-default uif-secondaryActionButton uif-boxLayoutHorizontalItem">Reload </a> <a id="ufuknl9" class="btn btn-default uif-secondaryActionButton uif-boxLayoutHorizontalItem"   data-toggle="modal" data-target="#modal-budget-complete">Complete Budget </a> </div>
            
            <!-- <a href="bud-summary2.php" id="ufuknm4" class="btn btn-default uif-primaryActionButton uif-boxLayoutHorizontalItem"><span class="icon-chevron-left"></span> Back</a> --> 
            <a href="bud-rates.php" id="ufuknm4" class="btn btn-primary uif-primaryActionButton uif-boxLayoutHorizontalItem">Continue <span class="icon-chevron-right"></span></a> </div>
        
        <!-- DIALOGS/Placeholders --> 
    </div>
    </form>
<?php include ('includes/footer-scripts.php') ?>
<?php include ('includes/modals-global-budget.php') ?>
<script>

//replacing the "Final 1"

		(function($){
  			/* $('.uif-headerText-span:contains(": Final 1")').html(function(i, h) {
 			 return h.replace(/: Final 1/g, '');
				});
*/        

			
	 $("#ufuknm4").click(function (e) {	
	  e.preventDefault();		
	
	/*
	
If a user selects summary budget and modular = yes, then:
User should land on the periods and totals page.
Upon Continue <span class="icon-chevron-right"></span>, if cost sharing and or unrecovered F&A has been entered, user should be taken to those pages to enter data
--> Upon Continue <span class="icon-chevron-right"></span>, user should be taken to the modular page to review the pre-synced information and adjust as needed.
Upon Continue <span class="icon-chevron-right"></span>, user should be taken to the summary page to review

	*/
	
	
		if ($("#radio-start-summary-budget").is(":checked") & $("#radio-modular-budget_yes").is(":checked") ){
			document.location.href='bud-periods.php?modular-budget=yes&amp;summary=yes';
			}
			
			
			
/*
If a user selects summary budget and modular = no, then:
	User should land on the periods and totals page.
	Upon Continue <span class="icon-chevron-right"></span>, if cost sharing and or unrecovered F&A has been entered, user should be taken to those pages to enter data. Upon Continue <span class="icon-chevron-right"></span>, user should be taken to the summary page to review.
	If no cost sharing or unrecovered F&A has been entered, user should be taken directly to the summary page to review.
		*/
		
		
		
		else if ($("#radio-start-summary-budget").is(":checked") & $("#radio-modular-budget_no").is(":checked") ){
			document.location.href='bud-periods.php?modular-budget=no&amp;summary=yes';
			}
		
		
		
		
		
		
		
		//NO modular 
		/*
		
	If a user selects detailed budget and modular = no, then:
User should land on the Project Personnel page. 

Upon Continue <span class="icon-chevron-right"></span>, user is taken to the Assign Personnel to Periods page. 
Note: if user attempts to navigate to a period other than period 1, the following warning will display: “You are about to enter costs in a later period. Doing so will prevent you from using the generate all periods function to auto-calculate later periods. Do you wish to continue

Upon Continue <span class="icon-chevron-right"></span>, user is taken to the Non-Personnel Page to enter data.  Note: if user attempts to navigate to a period other than period 1, the following warning will display: “You are about to enter costs in a later period. Doing so will prevent you from using the generate all periods function to auto-calculate later periods. Do you wish to continue?”
Upon Continue <span class="icon-chevron-right"></span>, the following message should display: “Would you like to use the generate all periods functionality to auto-calculate later periods based on period 1 data? Please note that this action can only be taken once.”

If yes, periods are generated. Upon Continue <span class="icon-chevron-right"></span>, user is taken to subawards tab to continue with any additional budget data entry.
If no, out year data is not generated. Upon Continue <span class="icon-chevron-right"></span>, user is taken to subawards tab to continue with any additional budget data entry.
Note that screens such as cost-sharing, unrecovered F&A, and modular will display messages indicating that no data entry is required, if that is the case.

			
			*/
		
		
		
		
		
			else if ($("#radio-start-detail-budget").is(":checked") & $("#radio-modular-budget_no").is(":checked") ){
			document.location.href='bud-personnelCosts-projPersonnel1.php?modular-budget=no&amp;detail=yes';
			}
		
			
	
		
		// YES MODULAR
		
		/*
		If a user selects detailed budget and modular = yes, then same process as above, but when user arrives at modular screen, values will be populated based on detailed budget entry (“pre-synced”).
If user returns to a budget version in progress, the landing page will differ based on whether the user had indicated at the time of version creation whether he was doing detailed or summary budget. If detailed, user will land on the summary screen and can navigate around from there. If summary budget, user will land on the periods and totals screen.

		
		*/
			
		
		else if ($("#radio-start-detail-budget").is(":checked") & $("#radio-modular-budget_yes").is(":checked") ){
			document.location.href='bud-personnelCosts-projPersonnel1.php?modular-budget=yes&amp;detail=yes';
			}
		
	
		
		
		
		else{
			
			
				$(".topMargin1em").addClass("shake").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
				$(this).removeClass("shake");
				});
			
			}
		
		
		
		
		
  });

$(".tabWarning").click(function(e){

  alert("[MODAL WINDOW] --- You are about to enter costs in a later period. Doing so will prevent you from using the generate all periods function to auto-calculate later periods. Do you wish to continue? {{ CANCEL (button)  | CONTINUE (button) }} ---[MODAL WINDOW]");
return false;

});
}(jQuery))

</script> 

</body>
</html>

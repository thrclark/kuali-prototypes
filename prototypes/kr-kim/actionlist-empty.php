<?php
$section = '';
$page = 'actionlist';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kuali :: Fluid Application Header</title>
<meta name="viewport" content="width=device-width, user-scalable=no">
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>
</head>
<body id="Uif-Application">
<!-- APPLICATION HEADER -->
<?php include ('includes/uif-applicationHeader-loggedin.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View" style="margin-top:75px"> 
        <!-- BREADCRUMBS --><!-- VIEW HEADER --><!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"><!-- VIEW NAVIGATION -->
            <main id="LabsProposal-Page" class="uif-page" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left:;">
                <header>
                    <div class="row">
                        <div class="col-xs-6">
                            <h2 class="uif-headerText"><span class="uif-headerText-span"> Action List </span></h2>
                        </div>
                        <div class="col-xs-6 text-right" style="padding-top:20px"> <a class="uif-actionLink" tabindex="0" data-role="Action" data-toggle="modal" data-target="#actionlist-prefs" data-submit_data="" data-dismiss="modal"> <span aria-hidden="true" class="icon-cog" style="color:#999"></span> Preferences</a></div>
                    </div>
                </header>
                <ul id="tabs1" class="nav nav-tabs" data-tabs="tabs" role="tablist">
                    <li class="active" role="tab" aria-controls="actions-current"><a href="#actions-current" data-toggle="tab">Action Requests</a></li>
                    <li role="tab" aria-controls="actions-completed"><a href="#actions-completed" data-toggle="tab">Completed Actions</a></li>
                </ul>
                <div id="my-tab-content1" class="tab-content clearfix">
                    <div class="tab-pane active" id="actions-current" role="tabpanel">
                        <h4>Action Requests</h4>
                        <div class="well">
                            <p class="lead">Your list is empty.</p>
                            <p>When you recieve action requests, they will appear here.</p>
                        </div>
                    </div>
                    <div class="tab-pane" id="actions-completed" role="tabpanel">
                        <h4> Completed Actions</h4>
                        <div class="well">
                            <p class="lead">Your list is empty.</p>
                            <p>When you complete action requests, they will appear here.</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- VIEW FOOTER -->
</form>
<!-- MODALS -->
<?php include ('includes/modal-actionlist-prefs.php') ?>
<?php include ('includes/modal-routelog.php') ?>
<?php include ('includes/modal-login.php') ?>
<?php include ('includes/modal-actionlist-details.php') ?>

<!-- FOOTER SCRIPTS --> 

<script type="text/javascript" src="../../plugins/jquery/jquery-1.8.3.js"></script> 
<script type="text/javascript" src="../../krad/scripts/jquery-migrate-1.2.1.min.js"></script> 
<script type="text/javascript" src="../../krad/scripts/datatables/jquery.dataTables.js"></script> 
<script type="text/javascript" src="../../krad/scripts/datatables/DT_bootstrap.js"></script> 
<script type="text/javascript" src="../../themes/bootstrap/scripts/bootstrap.js"></script> 
<script type="text/javascript" src="../../plugins/datatables/TableTools.js"></script> 
<script type="text/javascript" src="../../plugins/easing/jquery.easing-1.3.pack.js"></script> 
<script type="text/javascript" src="../../themes/kboot/scripts/less-1.5.0.min.js"></script> 
<script type="text/javascript" src="../../themes/kboot/scripts/global.functions.js"></script> 
<script type="text/javascript" src="../../plugins/tablesaw-master/dist/tablesaw.js"></script> 
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
/* The easiest way to add popovers to your HTML prototypes
   ========================================================================== */

$('.popover-markup > .trigger').popover({
    html : true,
    title: function() {
      return $(this).parent().find('.head').html();
    },
    content: function() {
      return $(this).parent().find('.content').html();
    },
    container: 'body',
    placement: 'bottom'
});

});//]]>  

</script> 
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$('[data-toggle="popover"]').popover();

$('body').on('click', function (e) {
    $('[data-toggle="popover"]').each(function () {
        //the 'is' for buttons that trigger popups
        //the 'has' for icons within a button that triggers a popup
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
    });
});
});//]]>  

</script> 
<script type="text/javascript" class="init">

$(document).ready(function() {
	$('table.uif-actionlist-current, table.uif-actionlist-completed').dataTable();
} );

	</script>
</body>
</html>
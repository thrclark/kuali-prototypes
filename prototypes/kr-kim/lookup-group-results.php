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
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View" style="margin-top:75px"> <!-- BREADCRUMBS --><!-- VIEW HEADER --> 
        
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"><!-- VIEW NAVIGATION -->
            
            <main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left:;">
                <header class="clearfix uif-header-contentWrapper">
                    <div class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                        <h2 class="uif-headerText"><span class="uif-headerText-span" style="margin-bottom:14px"> Search Results <small style="color:#666">for 'Group Type= Default'</small></span></h2>
                        <p> <a href="lookup-group.php"> New Search</a> | <a href="#" class="refineSearch"> Refine Search </a></p>
                    </div>
                </header>
                <div class="form-horizontal" role="form" style=" display:none">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="well well-sm uif-form">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <h4 style="margin-top:0px"> Refine Search</h4>
                                    </div>
                                    <div class="col-md-6 text-right"><a href="#" class="hideRefine" style="text-decoration:none"><span style="font-size: 16px; color: #999; text-decoration: none" class="icon-cancel-circle"></span></a></div>
                                </div>
                                <hr>
                                <section class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix" data-parent="">
                                   <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Group ID: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Group Namespace: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <select name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" aria-invalid="true">
                                                <option selected="selected" value=""></option>
                                                <option value="KR-BUS">KR-BUS - Service Bus</option>
                                                <option value="KR-IDM">KR-IDM - Identity Management</option>
                                                <option value="KR-KRAD">KR-KRAD - Kuali Rapid Application Development</option>
                                                <option value="KR-LOC">KR-LOC - Kuali Location</option>
                                                <option value="KR-NS">KR-NS - Kuali Nervous System</option>
                                                <option value="KR-NTFCN">KR-NTFCN - Notification</option>
                                                <option value="KR-RULE">KR-RULE - Kuali Rules</option>
                                                <option value="KR-RULE-TEST">KR-RULE-TEST - Kuali Rules Test</option>
                                                <option value="KR-SAP">KR-SAP - Sample App</option>
                                                <option value="KR-SYS">KR-SYS - Enterprise Infrastructure</option>
                                                <option value="KR-WKFLW">KR-WKFLW - Workflow</option>
                                                <option value="KUALI">KUALI - Kuali Systems</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Group Name: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Group Description: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Type: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="Default" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Active: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <select name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" aria-invalid="true">
                                                <option value="1" selected="selected">Yes</option>
                                                <option value="4">No</option>
                                                <option value="3">Both</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Principal Name: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                </section>
                        
                            <div class="well well-sm text-center uif-form-buttonbar"> <a href="#" class="btn btn-primary uif-action" data-role="" data-toggle="" data-target="" data-submit_data="" data-dismiss=""> Refine Search </a> <a class="btn btn-default" href="#">Clear</a> </div>
                        </div>    </div>
                    </div>
                </div>

                <style type="text/css">
#example tr { cursor:pointer}
</style>
                <table class="table table-condensed table-smaller-text table-bordered" id="example" data-mode="stack">
                   <thead>
        <tr>
            <th><span href="#"> Group Name</span></th>
            <th><span href="#"> Group Type </span></th>
            <th><span href="#"> Group Namespace</span></th>
            <th><span href="#"> Group Description</span></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">Kuali Administrators</a></td>
            <td>Default</td>
            <td>KUALI</td>
            <td>Kuali Administrators</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">Kuali Developers</a></td>
            <td>Default</td>
            <td>KUALI</td>
            <td>Kuali Developers</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">Group2</a></td>
            <td>Default</td>
            <td>KUALI</td>
            <td>Group2</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">Kuali Identity Managers</a></td>
            <td>Default</td>
            <td>KUALI</td>
            <td>Kuali Identity Managers</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">ChickenRecipeMasters</a></td>
            <td>Default</td>
            <td>KR-WKFLW</td>
            <td>The masters of chicken recipes.  These people know it all!</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">Group0</a></td>
            <td>Default</td>
            <td>KUALI</td>
            <td>Group0</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">RecipeMasters</a></td>
            <td>Default</td>
            <td>KR-WKFLW</td>
            <td>The masters of recipe making.  These people know it all!</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">Group1</a></td>
            <td>Default</td>
            <td>KUALI</td>
            <td>Group1</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">TestGroup2</a></td>
            <td>Default</td>
            <td>KUALI</td>
            <td>Test group 2 for KEN testing.</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">RiceTeam</a></td>
            <td>Default</td>
            <td>KUALI</td>
            <td>A test workgroup for KEN.</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">WorkflowAdmin</a></td>
            <td>Default</td>
            <td>KR-WKFLW</td>
            <td>WorkflowAdmin</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">MagazineManagers</a></td>
            <td>Default</td>
            <td>KR-WKFLW</td>
            <td>The managers of the magazine system.</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">eDoc.Example1.IUPUI.Workgroup</a></td>
            <td>Default</td>
            <td>KUALI</td>
            <td title="Edoclite Documentation workgroup for example edoclite named eDoc.Example1">Edoclite Documentation workgroup for example edoclite named eDoc.Examp...</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">eDoc.Example1.IUB.Workgroup</a></td>
            <td>Default</td>
            <td>KUALI</td>
            <td title="Edoclite Documentation workgroup for example edoclite named eDoc.Example1">Edoclite Documentation workgroup for example edoclite named eDoc.Examp...</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">eDoc.Example1.defaultExceptions</a></td>
            <td>Default</td>
            <td>KUALI</td>
            <td>edoclite documentation uses this. Do not change or delete.</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">TestGroup1</a></td>
            <td>Default</td>
            <td>KUALI</td>
            <td>Test group 1 for KEN testing.</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">eDoc.Example1.SuperUsers</a></td>
            <td>Default</td>
            <td>KUALI</td>
            <td>edoclite documentation uses this. Do not change or delete.</td>
        </tr>
        <tr>
            <td class="uif-featured"><a href="kim-group.php">NotificationAdmin</a></td>
            <td>Default</td>
            <td>KR-WKFLW</td>
            <td>Notification system admin group for automation.</td>
        </tr>
    </tbody>
                </table>
            </main>
        </div>
        <!-- VIEW FOOTER --> 
        
        <!-- DIALOGS/Placeholders -->
        <div id="Uif-Dialogs"></div>
    </div>
</form>

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
<script>
$( ".refineSearch" ).click(function() {
  $( ".form-horizontal" ).slideToggle ( "slow" );
});


$( ".hideRefine" ).click(function() {
  $( ".form-horizontal" ).slideUp ( "slow" );
});






</script>
</body>
</html>
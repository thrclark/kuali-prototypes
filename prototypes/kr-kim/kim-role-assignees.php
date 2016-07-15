<?php
$section = '';
$page = 'role-assignees';
?>

<!DOCTYPE HTML>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>
<style type="text/css">
.container.uif-viewHeader-contentWrapper .uif-viewHeader, .uif-actionBar {
	margin-left: -8px;
}
.uif-actionBar {
	font-size: 13px;
	padding-bottom: 8px;
	padding-left: 0px;
	padding-top: 6px;
	background: white;
	margin-top: 0px;
}
.dl-horizontal dd {
	margin-left: 180px;
	clear: inherit;
}

table.dataTable th.sorting_asc, table.dataTable th.sorting { background-image:none}
</style>
<!--<link href="../css/kradSampleApp.css" rel="stylesheet" type="text/css"/>
   <link href="../css/labsProposal.css" rel="stylesheet" type="text/css"/>  -->

<link rel="stylesheet" type="text/css" href="../../krad/scripts/datatables/DT_bootstrapss.css">

<!-- Scripts, ideally we'd load these in the footer and not use in-line scripting -->
<script src="../../krad/scripts/jquery-1.10.1.min.js"></script>
<script src="../../krad/scripts/jquery-migrate-1.2.1.min.js"></script>
<!--[if lt IE 9]><script src="bootstrap/js/html5shiv.js"></script><![endif]-->

<script type="text/javascript" src="../../krad/scripts/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="../../krad/scripts/datatables/DT_bootstrap.js"></script>
</head>

<body id="Uif-Application">
<!-- APPLICATION HEADER -->

<?php include ('includes/uif-applicationHeader-loggedin.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View" style="margin-top:65px">
    <!-- BREADCRUMBS --> 
    <!-- VIEW HEADER -->
    <?php include ('includes/uif-viewHeader-role.php') ?>
    
    <!-- VIEW CONTENT -->
    <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"> 
        <!-- VIEW NAVIGATION -->
        <?php include ('includes/uif-navigation-role.php') ?>
        <main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left: 250px;">
            <header class="clearfix uif-header-contentWrapper">
                <div class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                    <h2 class="uif-headerText"> <span class="uif-headerText-span"> Assignees </span> <a href="#" class="btn btn-default btn-xs pull-right" tabindex="0" data-role="Action" data-toggle="modal" data-target="#modal-assignee-add"><span aria-hidden="true" class="icon-plus"></span> Add Assignee</a> </h2>
                </div>
            </header>
            <div class="" style="margin-top:15px;">
                <p class="">Viewing 7347 items. </p>
                <hr>
                <table class="table table-condensed table-smaller-text table-hover uif-has-actions" id="example">
                    <thead>
                        <tr>
                            <th> <a href="#" tabindex="1000005" title="Member Type Code"> Type Code </a></th>
                            <th> <a href="#" tabindex="1000006" title="Member Identifier"> Member Identifier </a></th>
                            <th> <a href="#" tabindex="1000007" title="Member Namespace"> Namespace Cd </a></th>
                            <th> <a href="#" tabindex="1000008" title="Member Name"> Name </a></th>
                            <th> <a href="#" tabindex="1000009" title="Member Full Name"> Full Name </a></th>
                            <th> <a href="#" tabindex="1000010" title="Active From Date"> Active Date Range </a></th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#" name="101246"></a> Principal </td>
                            <td> 0001788591 </td>
                            <td></td>
                            <td>nllyvndyn</td>
                            <td><a href="#">Nelly Vandyne</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101367"></a> Principal </td>
                            <td> 0002330744 </td>
                            <td></td>
                            <td>ngncspr</td>
                            <td><a href="#">Ngan Casper</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101279"></a> Principal </td>
                            <td> 0000573533 </td>
                            <td></td>
                            <td>rosmriyrb</td>
                            <td><a href="#">Rosamaria Yarborough</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101225"></a> Principal </td>
                            <td> 0000728857 </td>
                            <td></td>
                            <td>lwrnccrrls</td>
                            <td><a href="#">Lawrence Carrales</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101253"></a> Principal </td>
                            <td> 0001797194 </td>
                            <td></td>
                            <td>isrlpursr</td>
                            <td><a href="#">Israel Purser</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101228"></a> Principal </td>
                            <td> 0001489536 </td>
                            <td></td>
                            <td>llnprrino</td>
                            <td><a href="#">Allan Parrino</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101300"></a> Principal </td>
                            <td> 0001117471 </td>
                            <td></td>
                            <td>klicmbr</td>
                            <td><a href="#">Kali Cambre</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101372"></a> Principal </td>
                            <td> 0002100521 </td>
                            <td></td>
                            <td>hilymirbito</td>
                            <td><a href="#">Hailey Mirabito</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101303"></a> Principal </td>
                            <td> 0001268242 </td>
                            <td></td>
                            <td>rthkimzy</td>
                            <td><a href="#">Aretha Kimzey</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101324"></a> Principal </td>
                            <td> 0000880632 </td>
                            <td></td>
                            <td>roslyntousnt</td>
                            <td><a href="#">Roslyn Tousant</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101273"></a> Principal </td>
                            <td> 0000925068 </td>
                            <td></td>
                            <td>cllisbir</td>
                            <td><a href="#">Clelia Sabir</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="211433"></a> Principal </td>
                            <td> 0003487240 </td>
                            <td></td>
                            <td>bvldz</td>
                            <td><a href="#">Abe Valadez</a></td>
                            <td>&nbsp;</td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="193611"></a> Principal </td>
                            <td> 0002205549 </td>
                            <td></td>
                            <td>mistyvrs</td>
                            <td><a href="#">Misty Evers</a></td>
                            <td>&nbsp;</td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101236"></a> Principal </td>
                            <td> 0000623217 </td>
                            <td></td>
                            <td>rchlldls</td>
                            <td><a href="#">Rachell Dales</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101333"></a> Principal </td>
                            <td> 0002907392 </td>
                            <td></td>
                            <td>ilnfridly</td>
                            <td><a href="#">Ilene Fridley</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101356"></a> Principal </td>
                            <td> 0000223391 </td>
                            <td></td>
                            <td>sbinbritnbch</td>
                            <td><a href="#">Sabine Breitenbach</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101344"></a> Principal </td>
                            <td> 0003125924 </td>
                            <td></td>
                            <td>mrigordy</td>
                            <td><a href="#">Meri Gordy</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101237"></a> Principal </td>
                            <td> 0001346055 </td>
                            <td></td>
                            <td>mirbrod</td>
                            <td><a href="#">Maira Broad</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101247"></a> Principal </td>
                            <td> 0000435078 </td>
                            <td></td>
                            <td>kristinthom</td>
                            <td><a href="#">Kristina Thom</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101246" id="101246"></a> Principal </td>
                            <td> 0001788591 </td>
                            <td></td>
                            <td>rudolftrcy</td>
                            <td><a href="#">Rudolf Tracy</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101367" id="101367"></a> Principal </td>
                            <td> 0002330744 </td>
                            <td></td>
                            <td>ilnstffns</td>
                            <td><a href="#">Ailene Steffens</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101279" id="101279"></a> Principal </td>
                            <td> 0000573533 </td>
                            <td></td>
                            <td>drciclyn</td>
                            <td><a href="#">Darci Clyne</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101225" id="101225"></a> Principal </td>
                            <td> 0000728857 </td>
                            <td></td>
                            <td>trsrdny</td>
                            <td><a href="#">Treasa Radney</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101253" id="101253"></a> Principal </td>
                            <td> 0001797194 </td>
                            <td></td>
                            <td>prlkrft</td>
                            <td><a href="#">Pearl Kraft</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101228" id="101228"></a> Principal </td>
                            <td> 0001489536 </td>
                            <td></td>
                            <td>rnttorsillo</td>
                            <td><a href="#">Renata Torsiello</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101300" id="101300"></a> Principal </td>
                            <td> 0001117471 </td>
                            <td></td>
                            <td>rtcourtny</td>
                            <td><a href="#">Art Courtney</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101372" id="101372"></a> Principal </td>
                            <td> 0002100521 </td>
                            <td></td>
                            <td>kindrmilby</td>
                            <td><a href="#">Kindra Milby</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101303" id="101303"></a> Principal </td>
                            <td> 0001268242 </td>
                            <td></td>
                            <td>dnithocut</td>
                            <td><a href="#">Denita Hocutt</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101324" id="101324"></a> Principal </td>
                            <td> 0000880632 </td>
                            <td></td>
                            <td>frminstvs</td>
                            <td><a href="#">Fermina Esteves</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101273" id="101273"></a> Principal </td>
                            <td> 0000925068 </td>
                            <td></td>
                            <td>shwnlintz</td>
                            <td><a href="#">Shawnee Lintz</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="211433" id="211433"></a> Principal </td>
                            <td> 0003487240 </td>
                            <td></td>
                            <td>lisdrnnn</td>
                            <td><a href="#">Elisa Drennen</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="193611" id="193611"></a> Principal </td>
                            <td> 0002205549 </td>
                            <td></td>
                            <td>shmkschblr</td>
                            <td><a href="#">Shemeka Schebler</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101236" id="101236"></a> Principal </td>
                            <td> 0000623217 </td>
                            <td></td>
                            <td>chnllrligh</td>
                            <td><a href="#">Chanell Raleigh</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101333" id="101333"></a> Principal </td>
                            <td> 0002907392 </td>
                            <td></td>
                            <td>ludivindrydn</td>
                            <td><a href="#">Ludivina Dryden</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101356" id="101356"></a> Principal </td>
                            <td> 0000223391 </td>
                            <td></td>
                            <td>nllilfytt</td>
                            <td><a href="#">Nellie Lafayette</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101344" id="101344"></a> Principal </td>
                            <td> 0003125924 </td>
                            <td></td>
                            <td>hrminilchr</td>
                            <td><a href="#">Herminia Lacher</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101237" id="101237"></a> Principal </td>
                            <td> 0001346055 </td>
                            <td></td>
                            <td>indnhm</td>
                            <td><a href="#">Ian Denham</a></td>
                            <td>08/20/2012 - 08/20/2014 </td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" name="101247" id="101247"></a> Principal </td>
                            <td> 0000435078 </td>
                            <td></td>
                            <td>blvtovy</td>
                            <td><a href="#">Belva Tovey</a></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                        </tr>
                    </tbody>
                </table>
                <p>&nbsp;</p>
                <p> 
                    <!--td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}--> 
                </p>
                <p>&nbsp;</p>
            </div>
        </main>
    </div>
    <!-- VIEW FOOTER -->
    <div id="u19v7dpm" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
        <div class="global-navigate btn-group">
            <button type="button" href="asdf.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
            <button type="button" href="asdf.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
        </div>
        <div class=" global-actions btn-group dropup">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Document Actions <span class="caret"></span> </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Submit Document</a></li>
                <li><a href="#" data-toggle="modal" data-target="#canceldoc"> Cancel Document </a> </li>
                <li class="divider"></li>
                <li><a href="#">Save Document</a></li>
                <li><a href="#">Close Document</a></li>
            </ul>
        </div>
    </div>
</form>

<!-- FOOTER SCRIPTS --> 

<script type="text/javascript" src="../../themes/bootstrap/scripts/bootstrap.js"></script> 
<script type="text/javascript" src="../../plugins/scrollto/jquery.scrollTo-1.4.6.js"></script> 
<script type="text/javascript" src="../../plugins/jqform/jquery.form-3.31.0.js"></script> 
<script type="text/javascript" src="../../plugins/globalize/globalize.js"></script> 
<script type="text/javascript" src="../../plugins/menu/krad.navigationMenu.js"></script> 
<script type="text/javascript" src="../../plugins/menu/krad.tabMenu.js"></script> 
<!--<script type="text/javascript" src="../../plugins/jgrowl/jquery.jgrowl.js"></script> --> 
<script type="text/javascript" src="../../plugins/textpopout/krad.textareaPopout.js"></script> 
<script type="text/javascript" src="../../plugins/cookie/jquery.cookie.js"></script> 
<script type="text/javascript" src="../../plugins/watermark/jquery.watermark.js"></script> 
<script type="text/javascript" src="../../plugins/countdown/jquery.countdown.js"></script> 
<!--<script type="text/javascript" src="../../plugins/blockUI/jquery.blockUI.js"></script> --> 
<script type="text/javascript" src="../../plugins/color/jquery.color.js"></script> 
<script type="text/javascript" src="../../plugins/json/jquery.json-2.2.js"></script> 
<script type="text/javascript" src="../../plugins/datatables/jquery.dataTables.rowGrouping.js"></script> 
<script type="text/javascript" src="../../plugins/datatables/TableTools.js"></script> 
<script type="text/javascript" src="../../plugins/datatables/ZeroClipboard.js"></script> 
<script type="text/javascript" src="../../plugins/fancybox/jquery.fancybox.js"></script> 
<script type="text/javascript" src="../../plugins/fancybox/jquery.fancybox.pack.js"></script> 
<script type="text/javascript" src="../../plugins/prettify/prettify.js"></script> 
<script type="text/javascript" src="../../plugins/easydrag/jquery.easydrag.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.variables.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.response.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.actions.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.dirty.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.lookup.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.message.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.url.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.validate.js"></script> 
<script type="text/javascript" src="../../plugins/easing/jquery.easing-1.3.pack.js"></script> 
<script type="text/javascript" src="../../themes/kboot/scripts/less-1.5.0.min.js"></script> 
<script type="text/javascript" src="../../themes/kboot/scripts/global.functions.js"></script> 

<!-- MiniColors --> 
<script src="../../plugins/jquery-minicolors-master/jquery.minicolors.js"></script> 
<?php include ('includes/modal-routelog.php') ?>
<?php include ('includes/modal-assignee-add.php') ?>
<?php include ('includes/modal-assignee-add-lookupPers.php') ?>
<?php include ('includes/modal-activeDates.php') ?>
<?php include ('includes/modal-assignee-edit-lookupPers.php') ?>
</body>
</html>
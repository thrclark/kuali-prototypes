<?php
$section = '';
$page = 'docoverview';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>
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
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View" style="margin-top:75px"> <!-- BREADCRUMBS --><!-- VIEW HEADER -->
        <?php include ('includes/uif-viewHeader-group.php') ?>
        
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"><!-- VIEW NAVIGATION -->
            
            <main id="LabsProposal-Page" class="uif-page" data-server_messages="false" data-role="Page" data-parent="LabsProposal">
                <header>
                    <h4 class="">Document Overview</h4>
                </header>
                <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal well uif-form" data-parent="">
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Action Taken:*</label>
                    </div>
                    <div class="col-md-8">
                        <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                            <input id="u11k8c13_control" type="text" name="field1" value="Edting person information for thrclark" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="u11k8c13" aria-required="true" aria-invalid="true">
                        </div>
                    </div>
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Org Doc Number:</label>
                    </div>
                    <div class="col-md-8">
                        <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                            <input id="u11k8c13_control" type="text" name="field1" value="" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="u11k8c13" aria-required="true" aria-invalid="true">
                        </div>
                    </div>
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Explaination:</label>
                    </div>
                    <div class="col-md-8">
                        <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                            <textarea id="uahyfb8_control" name="inputField2" rows="3" cols="40" class="form-control input-sm uif-textAreaControl valid" data-role="Control" data-control_for="uahyfb8" data-original-title="" title="" data-hastooltip="true"></textarea>
                        </div>
                    </div>
                </section>
                <header>
                    <h4 class="">Group Overview</h4>
                </header>
                <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal well uif-form" data-parent="">
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Group ID:</label>
                    </div>
                    <div class="col-md-8">
                        <p class="form-control-static">000288244</p>
                    </div>
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Group Namespace:</label>
                    </div>
                    <div class="col-md-8">
                        <p class="form-control-static">KUALI - Kuali Systems</p>
                    </div>
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Group Name:</label>
                    </div>
                    <div class="col-md-8">
                        <p class="form-control-static">Kuali Developers</p>
                    </div>
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Group Description:</label>
                    </div>
                    <div class="col-md-8">
                        <input id="u11k8c13_control" type="text" name="field1" value="Kuali Developers" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="u11k8c13" aria-required="true" aria-invalid="true">
                    </div>
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Type Name:</label>
                    </div>
                    <div class="col-md-8">
                        <p class="form-control-static">Default <span class="icon-search"></span></p>
                    </div>
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Active:</label>
                    </div>
                    <div class="col-md-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="" checked>
                                Yes </label>
                        </div>
                    </div>
                </section>
                <header>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="">Assignees</h4>
                        </div>
                        <div class="col-md-6 text-right"><a href="#" class="btn btn-default btn-xs pull-right" tabindex="0" data-role="Action" data-toggle="modal" data-target="#modal-assignee-add"><span aria-hidden="true" class="icon-plus"></span> Add Assignee</a></div>
                    </div>
                </header>
                <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal well uif-form" data-parent="">
                    <table class="table table-condensed table-smaller-text uif-has-actions" id="example" >
                        <thead>
                            <tr>
                                <th> <span> Type Code </span></th>
                                <th> <span> Member Identifier </span></th>
                                <th> <span> Namespace Cd </span></th>
                                <th> <span> Name </span></th>
                                <th> <span> Full Name </span></th>
                                <th> <span> Active Date Range </span></th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Principal </td>
                                <td> 0001788591 </td>
                                <td></td>
                                <td>nllyvndyn</td>
                                <td><a href="#">Nelly Vandyne <span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0002330744 </td>
                                <td></td>
                                <td>ngncspr</td>
                                <td><a href="#">Ngan Casper<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0000573533 </td>
                                <td></td>
                                <td>rosmriyrb</td>
                                <td><a href="#">Rosamaria Yarborough<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0000728857 </td>
                                <td></td>
                                <td>lwrnccrrls</td>
                                <td><a href="#">Lawrence Carrales<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0001797194 </td>
                                <td></td>
                                <td>isrlpursr</td>
                                <td><a href="#">Israel Purser<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0001489536 </td>
                                <td></td>
                                <td>llnprrino</td>
                                <td><a href="#">Allan Parrino<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0001117471 </td>
                                <td></td>
                                <td>klicmbr</td>
                                <td><a href="#">Kali Cambre<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0002100521 </td>
                                <td></td>
                                <td>hilymirbito</td>
                                <td><a href="#">Hailey Mirabito<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0001268242 </td>
                                <td></td>
                                <td>rthkimzy</td>
                                <td><a href="#">Aretha Kimzey<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0000880632 </td>
                                <td></td>
                                <td>roslyntousnt</td>
                                <td><a href="#">Roslyn Tousant<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0000925068 </td>
                                <td></td>
                                <td>cllisbir</td>
                                <td><a href="#">Clelia Sabir<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0003487240 </td>
                                <td></td>
                                <td>bvldz</td>
                                <td><a href="#">Abe Valadez<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>&nbsp;</td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0002205549 </td>
                                <td></td>
                                <td>mistyvrs</td>
                                <td><a href="#">Misty Evers<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>&nbsp;</td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0000623217 </td>
                                <td></td>
                                <td>rchlldls</td>
                                <td><a href="#">Rachell Dales<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0002907392 </td>
                                <td></td>
                                <td>ilnfridly</td>
                                <td><a href="#">Ilene Fridley<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0000223391 </td>
                                <td></td>
                                <td>sbinbritnbch</td>
                                <td><a href="#">Sabine Breitenbach<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0003125924 </td>
                                <td></td>
                                <td>mrigordy</td>
                                <td><a href="#">Meri Gordy<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0001346055 </td>
                                <td></td>
                                <td>mirbrod</td>
                                <td><a href="#">Maira Broad<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0000435078 </td>
                                <td></td>
                                <td>kristinthom</td>
                                <td><a href="#">Kristina Thom<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0001788591 </td>
                                <td></td>
                                <td>rudolftrcy</td>
                                <td><a href="#">Rudolf Tracy<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0002330744 </td>
                                <td></td>
                                <td>ilnstffns</td>
                                <td><a href="#">Ailene Steffens<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0000573533 </td>
                                <td></td>
                                <td>drciclyn</td>
                                <td><a href="#">Darci Clyne<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0000728857 </td>
                                <td></td>
                                <td>trsrdny</td>
                                <td><a href="#">Treasa Radney<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0001797194 </td>
                                <td></td>
                                <td>prlkrft</td>
                                <td><a href="#">Pearl Kraft<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0001489536 </td>
                                <td></td>
                                <td>rnttorsillo</td>
                                <td><a href="#">Renata Torsiello<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0001117471 </td>
                                <td></td>
                                <td>rtcourtny</td>
                                <td><a href="#">Art Courtney<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0002100521 </td>
                                <td></td>
                                <td>kindrmilby</td>
                                <td><a href="#">Kindra Milby<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0001268242 </td>
                                <td></td>
                                <td>dnithocut</td>
                                <td><a href="#">Denita Hocutt<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0000880632 </td>
                                <td></td>
                                <td>frminstvs</td>
                                <td><a href="#">Fermina Esteves<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0000925068 </td>
                                <td></td>
                                <td>shwnlintz</td>
                                <td><a href="#">Shawnee Lintz<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0003487240 </td>
                                <td></td>
                                <td>lisdrnnn</td>
                                <td><a href="#">Elisa Drennen<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0002205549 </td>
                                <td></td>
                                <td>shmkschblr</td>
                                <td><a href="#">Shemeka Schebler<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0000623217 </td>
                                <td></td>
                                <td>chnllrligh</td>
                                <td><a href="#">Chanell Raleigh<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0002907392 </td>
                                <td></td>
                                <td>ludivindrydn</td>
                                <td><a href="#">Ludivina Dryden<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0000223391 </td>
                                <td></td>
                                <td>nllilfytt</td>
                                <td><a href="#">Nellie Lafayette<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0003125924 </td>
                                <td></td>
                                <td>hrminilchr</td>
                                <td><a href="#">Herminia Lacher<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0001346055 </td>
                                <td></td>
                                <td>indnhm</td>
                                <td><a href="#">Ian Denham<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td> Principal </td>
                                <td> 0000435078 </td>
                                <td></td>
                                <td>blvtovy</td>
                                <td><a href="#">Belva Tovey<span class="icon-info uif-inquiryLink"></span> </a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </main>
        </div>
        <!-- VIEW FOOTER -->
        <div id="u19v7dpm" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
            <button type="button" href="asdf.php" id="" class="btn btn-primary">Submit </button>
            <button type="button" href="asdf.php" id="" class="btn btn-default">Save </button>
            <button type="button" href="asdf.php" id="" class="btn btn-default">Cancel </button>
        </div>
        <!-- DIALOGS/Placeholders -->
        <div id="Uif-Dialogs"></div>
    </div>
</form>

<!-- MODALS -->
<?php include ('includes/modal-assignee-add.php') ?>
<?php include ('includes/modal-activeDates.php') ?>
<?php include ('includes/modal-routelog.php') ?>
<?php include ('includes/modal-docsearch.php') ?>
<?php include ('includes/modal-docsearch-name.php') ?>
<?php include ('includes/modal-docsearch-results.php') ?>
<!-- FOOTER SCRIPTS -->

<?php include ('includes/footer-scripts.php') ?>
<?php include ('includes/modal-routelog.php') ?>
<?php include ('../cross-project/includes/modal-superuser.php') ?>
<?php include ('../cross-project/includes/modal-routing-adhoc.php') ?>
<script type="text/javascript" class="init">

$(document).ready(function() {
	$('#example').dataTable();
} );

	</script>
</body>
</html>
<?php
$section = '';
$page = 'role-permissions';
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
table.dataTable th.sorting_asc, table.dataTable th.sorting {
	background-image: none
}
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
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View" style="margin-top:75px">
    <!-- BREADCRUMBS --> 
    <!-- VIEW HEADER -->
    <?php include ('includes/uif-viewHeader-role.php') ?>
    
    <!-- VIEW CONTENT -->
    <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"> 
        <!-- VIEW NAVIGATION -->
        <?php include ('includes/uif-navigation-role.php') ?>
        <main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left: 250px;">
            <div class="uif-header-inner">
                <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Permissions </span> </h2>
                <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> <a href="#" class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#modal-add-subaward"><span aria-hidden="true" class="icon-plus"></span> Add Permissions</a> </div>
            </div>
            
            
            
            <div class="alert alert-success">
                    <i class="icon icon-checkmark"></i> You've succesfully added Permission ID #0001263 (Review CTRL ElectronicPayment)
                    
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                </div>
            <div class="" style="margin-top:15px;">
                <p class="">Viewing 49 items. </p>
                <hr>
                <table class="table table-condensed table-smaller-text table-hover uif-has-actions uif-forcewrap" id="example">
                    <thead>
                        <tr>
                            <th><a href="#">Namespace</a></th>
                            <th><a href="#">Identifier</a></th>
                            <th><a href="#">Name</a></th>
                            <th><a href="#">Detail Values</a></th>
                            <th><a href="#">Active</a></th>
                            <th rowspan="1" colspan="1" scope="col">Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hilite">
                            <td> EDO - eDossier </td>
                            <td> 10619 </td>
                            <td> Assign Role </td>
                            <td> namespaceCode=EDO </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10620 </td>
                            <td> Initiate Role Document </td>
                            <td> documentTypeName=IdentityManagementDocument </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10621 </td>
                            <td> Grant Permission </td>
                            <td> namespaceCode=EDO </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10622 </td>
                            <td> Login Permission </td>
                            <td></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10628 </td>
                            <td> Use all screens </td>
                            <td> namespaceCode=EDO </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10629 </td>
                            <td> Use Edossier Candidate Screen </td>
                            <td> actionClass=org.kuali.kpme.edo.dossier.web.EdoDossierHomeAction,  namespaceCode=EDO </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10630 </td>
                            <td> Use Edossier Reviewer Screen </td>
                            <td> actionClass=org.kuali.kpme.edo.candidate.web.EdoCandidateListAction,  namespaceCode=EDO </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10631 </td>
                            <td> Use Edossier Admin Screen </td>
                            <td> actionClass=org.kuali.kpme.edo.admin.web.EdoGenAdminAction,  namespaceCode=EDO </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10787 </td>
                            <td> Super User Approve TenureProcessDocument </td>
                            <td> documentTypeName=TenureProcessDocument </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10788 </td>
                            <td> Super User Approve PromotionProcessDocument </td>
                            <td> documentTypeName=PromotionProcessDocument </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10789 </td>
                            <td> Look Up EdoPromotionAndTenureReport </td>
                            <td> componentName=EdoPromotionAndTenureReport,  namespaceCode=EDO </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> KR-SYS - Enterprise Infrastructure </td>
                            <td> 10728 </td>
                            <td> Initiate Document - IdentityManagementRoleDocument </td>
                            <td> documentTypeName=IdentityManagementRoleDocument </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> KR-SYS - Enterprise Infrastructure </td>
                            <td> 10729 </td>
                            <td> Initiate Document - IdentityManagementPersonDocument </td>
                            <td> documentTypeName=IdentityManagementPersonDocument </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10743 </td>
                            <td> Assign Guest </td>
                            <td></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10730 </td>
                            <td> View Vote Record Level 1 </td>
                            <td> edoReviewLevel=1 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10731 </td>
                            <td> View Vote Record Level 2 </td>
                            <td> edoReviewLevel=2 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10732 </td>
                            <td> View Vote Record Level 3 </td>
                            <td> edoReviewLevel=3 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10733 </td>
                            <td> View Vote Record Level 4 </td>
                            <td> edoReviewLevel=4 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10734 </td>
                            <td> View Vote Record Level 5 </td>
                            <td> edoReviewLevel=5 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10735 </td>
                            <td> Edit Vote Record Level 1 </td>
                            <td> edoReviewLevel=1 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10736 </td>
                            <td> Edit Vote Record Level 2 </td>
                            <td> edoReviewLevel=2 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10737 </td>
                            <td> Edit Vote Record Level 3 </td>
                            <td> edoReviewLevel=3 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10738 </td>
                            <td> Edit Vote Record Level 4 </td>
                            <td> edoReviewLevel=4 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10739 </td>
                            <td> Edit Vote Record Level 5 </td>
                            <td> edoReviewLevel=5 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10751 </td>
                            <td> Edit Vote Record Level 6 </td>
                            <td> edoReviewLevel=6 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10752 </td>
                            <td> Edit Vote Record Level 7 </td>
                            <td> edoReviewLevel=7 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10740 </td>
                            <td> Submit Dossier </td>
                            <td></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10741 </td>
                            <td> Edit Dossier </td>
                            <td></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10744 </td>
                            <td> Upload Review Letter Level 1 </td>
                            <td> edoReviewLevel=1 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10745 </td>
                            <td> Upload Review Letter Level 2 </td>
                            <td> edoReviewLevel=2 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10746 </td>
                            <td> Upload Review Letter Level 3 </td>
                            <td> edoReviewLevel=3 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10747 </td>
                            <td> Upload Review Letter Level 4 </td>
                            <td> edoReviewLevel=4 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10748 </td>
                            <td> Upload Review Letter Level 5 </td>
                            <td> edoReviewLevel=5 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10755 </td>
                            <td> Upload Review Letter Level 6 </td>
                            <td> edoReviewLevel=6 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10749 </td>
                            <td> Cancel Tenure </td>
                            <td> documentTypeName=TenureProcessDocument,  routeStatusCode=R </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10750 </td>
                            <td> Cancel Promotion </td>
                            <td> documentTypeName=PromotionProcessDocument,  routeStatusCode=R </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10622 </td>
                            <td> Login Permission </td>
                            <td></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10753 </td>
                            <td> View Vote Record Level 6 </td>
                            <td> edoReviewLevel=6 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10754 </td>
                            <td> View Vote Record Level 7 </td>
                            <td> edoReviewLevel=7 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10757 </td>
                            <td> View Vote Record Level 8 </td>
                            <td> edoReviewLevel=8 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10756 </td>
                            <td> Edit Vote Record Level 8 </td>
                            <td> edoReviewLevel=8 </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10759 </td>
                            <td> Recall Dossier </td>
                            <td></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10758 </td>
                            <td> Send Dossier Back </td>
                            <td></td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10762 </td>
                            <td> Upload External Letter-BLCRIN </td>
                            <td> edoDepartmentId=BL-CRIN </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10763 </td>
                            <td> Upload External Letter-BLISTE </td>
                            <td> edoDepartmentId=BL-ISTE </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10764 </td>
                            <td> Upload External Letter-BLLGED </td>
                            <td> edoDepartmentId=BL-LGED </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10765 </td>
                            <td> Upload External Letter-BLELPS </td>
                            <td> edoDepartmentId=BL-ELPS </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10766 </td>
                            <td> Upload External Letter-BLTHTR </td>
                            <td> edoDepartmentId=BL-THTR </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                            <td> EDO - eDossier </td>
                            <td> 10767 </td>
                            <td> Upload External Letter-BLFINS </td>
                            <td> edoDepartmentId=BL-FINS </td>
                            <td></td>
                            <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr>
                    </tbody>
                </table>
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
</body>
</html>
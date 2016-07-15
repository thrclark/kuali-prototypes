<?php
$section = '';
$page = 'role-docoverview';
?>

<!DOCTYPE HTML>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>

<!--<link href="../css/kradSampleApp.css" rel="stylesheet" type="text/css"/>
   <link href="../css/labsProposal.css" rel="stylesheet" type="text/css"/>  -->

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
     
        <main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left:;">
            <header class="clearfix uif-header-contentWrapper">
                <div class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                    <h2 class="uif-headerText"><span class="uif-headerText-span">Document Overview </span></h2>
                </div>
                <div class="uif-verticalBoxGroup uif-header-lowerGroup" data-parent="LabsProposal-Page">
                    <div id="u1ndzhxa" class="text-muted uif-boxLayoutVerticalItem clearfix" data-parent="uw4ggjs">
                        <p>* Indicates required fields</p>
                    </div>
                </div>
            </header>
            <section class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Action Taken:*</label>
                </div>
                <div class="col-md-8">
                    <div class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input type="text" name="field1" value="Edting role information for Superuser" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="u11k8c13" aria-required="true" aria-invalid="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Org Doc Number:</label>
                </div>
                <div class="col-md-8">
                    <div class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input type="text" name="field1" value="" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="u11k8c13" aria-required="true" aria-invalid="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Explaination:</label>
                </div>
                <div class="col-md-8">
                    <div class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <textarea id="uahyfb8_control" name="inputField2" rows="3" cols="40" class="form-control input-sm uif-textAreaControl valid" data-role="Control" data-control_for="uahyfb8" data-original-title="" title="" data-hastooltip="true"></textarea>
                    </div>
                </div>
            </section>
            
            
            
            
            <header class="clearfix uif-header-contentWrapper">
                <div class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                    <h2 class="uif-headerText"> <span class="uif-headerText-span"> Role Overview </span> </h2>
                </div>
                
            </header>
            
            <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Role:</label>
                </div>
                <div class="col-md-8">
                    <p class="form-control-static">00016235</p>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Type Name:</label>
                </div>
                <div class="col-md-8">
                    <p class="form-control-static">SuperUser Role</p>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Namespace:</label>
                </div>
                <div class="col-md-8">
                    <p class="form-control-static">EDO - eDossier</p>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Role Name:</label>
                </div>
                   <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="u11k8c13_control" type="text" name="field1" value="EDO_SUPERUSER" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="u11k8c13" aria-required="true" aria-invalid="true">
                    </div>
                </div>
                
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Description:</label>
                </div>
                   <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                       <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Active:</label>
                </div>
                <div class="col-md-8">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            Yes </label>
                    </div>
                </div>
                
                
                
            </section>
            
            <div class="uif-header-inner">
                <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Permissions </span> </h2>
                <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> <a href="#" class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#modal-add-subaward"><span aria-hidden="true" class="icon-plus"></span> Add Permissions</a> </div>
            </div>
            <div class="" style="margin-top:15px;">
                <p class="">Viewing 49 items. </p>
                <hr>
                <div id="example_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row"><div class="col-md-6 col-sm-6 col-xs-6"><div id="example_length" class="dataTables_length"><label><select size="1" name="example_length" aria-controls="example"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-md-6 col-sm-6 col-xs-6"><div class="dataTables_filter" id="example_filter"><label><input type="text" class="form-control input-sm" placeholder="filter" aria-controls="example"></label></div></div></div><table class="table table-condensed table-smaller-text table-hover uif-has-actions uif-forcewrap dataTable" id="example" aria-describedby="example_info">
                    <thead>
                        <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Namespace: activate to sort column descending" style="width: 124px;"><a href="#">Namespace</a></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Identifier: activate to sort column ascending" style="width: 55px;"><a href="#">Identifier</a></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 197px;"><a href="#">Name</a></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Detail Values: activate to sort column ascending" style="width: 334px;"><a href="#">Detail Values</a></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Active: activate to sort column ascending" style="width: 40px;"><a href="#">Active</a></th><th rowspan="1" colspan="1" scope="col" class="sorting" role="columnheader" tabindex="0" aria-controls="example" aria-label="Actions : activate to sort column ascending" style="width: 65px;">Actions </th></tr>
                    </thead>
                    
                <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                            <td class=" sorting_1"> EDO - eDossier </td>
                            <td class=" "> 10619 </td>
                            <td class=" "> Assign Role </td>
                            <td class=" "> namespaceCode=EDO </td>
                            <td class=" "></td>
                            <td class=" "><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr><tr class="even">
                            <td class=" sorting_1"> EDO - eDossier </td>
                            <td class=" "> 10620 </td>
                            <td class=" "> Initiate Role Document </td>
                            <td class=" "> documentTypeName=IdentityManagementDocument </td>
                            <td class=" "></td>
                            <td class=" "><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr><tr class="odd">
                            <td class=" sorting_1"> EDO - eDossier </td>
                            <td class=" "> 10621 </td>
                            <td class=" "> Grant Permission </td>
                            <td class=" "> namespaceCode=EDO </td>
                            <td class=" "></td>
                            <td class=" "><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr><tr class="even">
                            <td class=" sorting_1"> EDO - eDossier </td>
                            <td class=" "> 10622 </td>
                            <td class=" "> Login Permission </td>
                            <td class=" "></td>
                            <td class=" "></td>
                            <td class=" "><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr><tr class="odd">
                            <td class=" sorting_1"> EDO - eDossier </td>
                            <td class=" "> 10628 </td>
                            <td class=" "> Use all screens </td>
                            <td class=" "> namespaceCode=EDO </td>
                            <td class=" "></td>
                            <td class=" "><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr><tr class="even">
                            <td class=" sorting_1"> EDO - eDossier </td>
                            <td class=" "> 10629 </td>
                            <td class=" "> Use Edossier Candidate Screen </td>
                            <td class=" "> actionClass=org.kuali.kpme.edo.dossier.web.EdoDossierHomeAction,  namespaceCode=EDO </td>
                            <td class=" "></td>
                            <td class=" "><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr><tr class="odd">
                            <td class=" sorting_1"> EDO - eDossier </td>
                            <td class=" "> 10630 </td>
                            <td class=" "> Use Edossier Reviewer Screen </td>
                            <td class=" "> actionClass=org.kuali.kpme.edo.candidate.web.EdoCandidateListAction,  namespaceCode=EDO </td>
                            <td class=" "></td>
                            <td class=" "><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr><tr class="even">
                            <td class=" sorting_1"> EDO - eDossier </td>
                            <td class=" "> 10631 </td>
                            <td class=" "> Use Edossier Admin Screen </td>
                            <td class=" "> actionClass=org.kuali.kpme.edo.admin.web.EdoGenAdminAction,  namespaceCode=EDO </td>
                            <td class=" "></td>
                            <td class=" "><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr><tr class="odd">
                            <td class=" sorting_1"> EDO - eDossier </td>
                            <td class=" "> 10787 </td>
                            <td class=" "> Super User Approve TenureProcessDocument </td>
                            <td class=" "> documentTypeName=TenureProcessDocument </td>
                            <td class=" "></td>
                            <td class=" "><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr><tr class="even">
                            <td class=" sorting_1"> EDO - eDossier </td>
                            <td class=" "> 10788 </td>
                            <td class=" "> Super User Approve PromotionProcessDocument </td>
                            <td class=" "> documentTypeName=PromotionProcessDocument </td>
                            <td class=" "></td>
                            <td class=" "><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                        </tr></tbody></table><div class="row"><div class="col-md-6 col-sm-6 col-xs-6"><div class="dataTables_info" id="example_info">Showing 1 to 10 of 49 entries</div></div><div class="col-md-6 col-sm-6 col-xs-6"><div class="dataTables_paginate paging_bootstrap pagination"><ul class="pagination pagination-sm"><li class="prev disabled"><a href="#"><span aria-hidden="true" class="icon-angle-left"></span></a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#"><span aria-hidden="true" class="icon-angle-right"></span> </a></li></ul></div></div></div></div>
                <p>&nbsp;</p>
            </div>
            
        </main>
    </div>
    <!-- VIEW FOOTER -->
    <div id="u19v7dpm" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
        <div class="global-navigate btn-group">
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
<?php include ('includes/footer-scripts.php') ?>
<?php include ('includes/modal-routelog.php') ?>


<?php include ('../cross-project/includes/modal-superuser.php') ?>
<?php include ('../cross-project/includes/modal-routing-adhoc.php') ?>


</body>
</html>
<?php
$section = 'asdf';
$page = 'memberships';
?>

<!DOCTYPE HTML>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>

</head>

<body id="Uif-Application">
<!-- APPLICATION HEADER -->

<?php include ('includes/uif-applicationHeader-loggedin.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View" style="margin-top:65px">
    <!-- BREADCRUMBS --> 
    <!-- VIEW HEADER -->
    <?php include ('includes/uif-viewHeader-person.php') ?>
    
    <!-- VIEW CONTENT -->
    <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"> 
        <!-- VIEW NAVIGATION -->
        <?php include ('includes/uif-navigation-person.php') ?>
        <main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left: 250px;">
            <div class="uif-header-inner">
                <div class="uif-header-inner">
                    <h3 id="" class="uif-headerText"> <span class="uif-headerText-span"> Memberships </span> </h3>
                    <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> <a href="#" class="btn btn-xs btn-default" data-toggle="modal" data-target="#modal-membership-apply">Import Settings from Another Person</a> </div>
                </div>
            </div>
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li class="active"><a href="#groups" data-toggle="tab">Groups</a></li>
                <li><a href="#roles" data-toggle="tab">Roles</a></li>
                <li><a href="#delegations" data-toggle="tab">Delegations</a></li>
                <li><a href="#permissions" data-toggle="tab">Inherited Permissions</a></li>
            </ul>
            <div id="my-tab-content" class="tab-content">
                <div class="tab-pane active" id="groups">
                    <div class="uif-header-inner">
                        <h4 id="" class="uif-headerText"> <span class="uif-headerText-span"> Groups </span> </h4>
                    </div>
                    <table id="" class="table dataTable table-condensed uif-has-actions" role="presentation">
                        <thead>
                            <tr>
                                <th><span>Group</span></th>
                                <th><span>Namespace Code</span></th>
                                <th><span>Name</span></th>
                                <th><span>Type</span></th>
                                <th><span>Role Memberships</span></th>
                                <th><span> Active Date Range</span></th>
                                <th> <span>Actions</span> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ADS:BL-FMOP-DPE_TEST</td>
                                <td class="">ADS</td>
                                <td class="">BL-BUDU-DLOAD</td>
                                <td class="">Default</td>
                                <td><div class="popover-markup"> <a href="#" class="trigger" data-original-title="" title=""> View <span class="icon-info uif-inquiryLink"></span></a>
                                        <div class="content hidden">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th> Role Name</th>
                                                        <th>Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>User</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Approve Request Recipient</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Initiator</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Initiator or Reviewer</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Technical Administrator</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td>ADS:AC_MEETINGHOSTS</td>
                                <td class="">ADS</td>
                                <td class="">BL-FMOP-DATA-REView </td>
                                <td class="">Default</td>
                                <td><div class="popover-markup"> <a href="#" class="trigger" data-original-title="" title=""> View <span class="icon-info uif-inquiryLink"></span></a>
                                        <div class="content hidden">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th> Role Name</th>
                                                        <th>Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>User</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Approve Request Recipient</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Initiator</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Initiator or Reviewer</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Technical Administrator</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td>ADS:BL-FMOP-DATA-REView </td>
                                <td class="">ADS</td>
                                <td class="">BL-FMOP-DPE_ADMIN</td>
                                <td class="">Default</td>
                                <td><div class="popover-markup"> <a href="#" class="trigger" data-original-title="" title=""> View <span class="icon-info uif-inquiryLink"></span></a>
                                        <div class="content hidden">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th> Role Name</th>
                                                        <th>Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>User</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Approve Request Recipient</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Initiator</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Initiator or Reviewer</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Technical Administrator</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td>ADS:BL-MUS</td>
                                <td class="">ADS</td>
                                <td class="">BL-FMOP-EPIC-AP-UNT</td>
                                <td class="">Default</td>
                                <td><div class="popover-markup"> <a href="#" class="trigger" data-original-title="" title=""> View <span class="icon-info uif-inquiryLink"></span></a>
                                        <div class="content hidden">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th> Role Name</th>
                                                        <th>Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>User</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Approve Request Recipient</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Initiator</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Initiator or Reviewer</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Technical Administrator</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="">&nbsp;</td>
                                <td class="">&nbsp;</td>
                                <td class="">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td>ADS:BL-UITS-EBS-FS-KFS-FUNC</td>
                                <td class="">ADS</td>
                                <td class="">BL-FMOP-IDBILL-TEST</td>
                                <td class="">Default</td>
                                <td><div class="popover-markup"> <a href="#" class="trigger" data-original-title="" title=""> View <span class="icon-info uif-inquiryLink"></span></a>
                                        <div class="content hidden">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <th> Role Name</th>
                                                        <th>Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>User</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Approve Request Recipient</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Initiator</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Initiator or Reviewer</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Technical Administrator</td>
                                                        <td><a href="#">View </a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div></td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7" class="text-right"><a href="#" class="btn btn-xs btn-default"> <span class="icon-plus" style="font-size:10px"></span> Add Group</a></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="tab-pane" id="roles">
                    <div class="uif-header-inner">
                        <h4 id="" class="uif-headerText"> <span class="uif-headerText-span"> Roles </span> </h4>
                    </div>
                    <table id="u569ish_line0" class="table dataTable table-condensed uif-has-actions" role="presentation">
                        <thead>
                            <tr>
                                <th><span>Role</span></th>
                                <th><span>Namespace Code</span></th>
                                <th><span>Name</span></th>
                                <th><span>Type</span></th>
                                <th><span>Role Hierarchy</span></th>
                                <th><span> Active Date Range</span></th>
                                <th> <span>Actions</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10237</td>
                                <td class="">KFS-LD</td>
                                <td class="">Labor Journal Voucher User</td>
                                <td class="">Default</td>
                                <td>&nbsp;</td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td>10238</td>
                                <td class="">KFS-FP</td>
                                <td class="">Journal Voucher User</td>
                                <td class="">Default</td>
                                <td>&nbsp;</td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td>10196</td>
                                <td class="">KFS-SYS</td>
                                <td class="">Operations</td>
                                <td class="">Default</td>
                                <td><div class="popover-markup"><a href="#" class="trigger" data-original-title="" title=""> View <span class="icon-info uif-inquiryLink"></span></a>
                                        <div class="content hidden">
                                            <div class="tree well">
                                                <ul>
                                                    <li class="parent_li" style="
    padding-left: 0px;
"> <span><span class="icon-file4"></span> KFS-SYS User</span>
                                                        <ul>
                                                            <li class="parent_li"> <span><span class="icon-file4"></span> KFS-SYS Maintenance</span>
                                                                <ul>
                                                                    <li> <span><span class="icon-file4"></span> <strong>KFS-SYS Operations</strong></span> </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div></td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td>10239</td>
                                <td class="">KFS-SYS</td>
                                <td class="">Simple Maintenance Document User</td>
                                <td class="">Default</td>
                                <td>&nbsp;</td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td>10226</td>
                                <td class="">KFS-SYS</td>
                                <td class="">Commerce Simple Maintenance Maintainers</td>
                                <td class="">Default</td>
                                <td>&nbsp;</td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td>10257</td>
                                <td class="">KFS-COA</td>
                                <td class="">Organization Reversion Manager</td>
                                <td class="">Default</td>
                                <td class="">&nbsp;</td>
                                <td></td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                            <tr>
                                <td>10246</td>
                                <td class="">KFS-SYS</td>
                                <td class="">User</td>
                                <td class="">Default</td>
                                <td class="">&nbsp;</td>
                                <td>08/20/2012 - 08/20/2014 </td>
                                <td><a href="#" class="btn btn-default btn-xs data-role="Action" data-toggle="modal" data-target="#modal-activeDates"">Edit Active Dates</a></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7" class="text-right"><a href="#" class="btn btn-xs btn-default"> <span class="icon-plus" style="font-size:10px"></span> Add Role</a></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="tab-pane" id="delegations">
                    <div class="uif-header-inner">
                        <h4 id="" class="uif-headerText"> <span class="uif-headerText-span"> Delegations </span> </h4>
                    </div>
                    <table id="u569ish_line0" class="table table-condensed uif-has-actions" role="presentation">
                        <thead>
                            <tr>
                                <th>Role Member</th>
                                <th>Active From</th>
                                <th>Active To</th>
                                <th>Delegation Type Code</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" class="text-right"><a href="#" class="btn btn-xs btn-default"> <span class="icon-plus" style="font-size:10px"></span>Add Delegate</a></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="tab-pane" id="permissions">
                    <div class="uif-header-inner">
                        <h4 id="" class="uif-headerText"> <span class="uif-headerText-span"> Inherited Permissions </span> </h4>
                        As a member of currently selected roles and groups, this person inherits the following permissions: </div>
                    <table class="table table-condensed" role="presentation">
                        <thead>
                            <tr>
                                <th> Template Namespace</th>
                                <th> Template Name</th>
                                <th> Permission Namespace</th>
                                <th> Permission Name</th>
                                <th> Granted to Roles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>KR-WKFLW</td>
                                <td>Ad Hoc Review Document</td>
                                <td>KR-SYS</td>
                                <td>Ad Hoc Review RICE Document</td>
                                <td><!-- Please don't change formatting of this logic:iterate block --> 
                                    <a href="#"  title="with Role Role=1 ">KUALI User <span class="icon-info uif-inquiryLink"></span></a></td>
                            </tr>
                            <tr>
                                <td>KR-WKFLW</td>
                                <td>Administer Routing for Document</td>
                                <td>KR-SYS</td>
                                <td>Administer Routing RICE Document</td>
                                <td><!-- Please don't change formatting of this logic:iterate block --> 
                                    <a href="#"  title="with Role Role=63 ">KR-SYS Technical Administrator <span class="icon-info uif-inquiryLink"></span></a></td>
                            </tr>
                            <tr>
                                <td>KR-WKFLW</td>
                                <td>Blanket Approve Document</td>
                                <td>KR-SYS</td>
                                <td>Blanket Approve RICE Document</td>
                                <td><!-- Please don't change formatting of this logic:iterate block --> 
                                    <a href="#"  title="with Role Role=63 ">KR-SYS Technical Administrator <span class="icon-info uif-inquiryLink"></span></a></td>
                            </tr>
                            <tr>
                                <td>KR-SYS</td>
                                <td>Initiate Document</td>
                                <td>KR-SYS</td>
                                <td>Initiate RICE Document</td>
                                <td><!-- Please don't change formatting of this logic:iterate block --> 
                                    <a href="#"  title="with Role Role=1 ">KUALI User <span class="icon-info uif-inquiryLink"></span></a></td>
                            </tr>
                            <tr>
                                <td>KR-IDM</td>
                                <td>Assign Role</td>
                                <td>KR-SYS</td>
                                <td>Assign Role</td>
                                <td><!-- Please don't change formatting of this logic:iterate block --> 
                                    <a href="#"  title="with Role Role=63 ">KR-SYS Technical Administrator <span class="icon-info uif-inquiryLink"></span></a></td>
                            </tr>
                            <tr>
                                <td>KR-IDM</td>
                                <td>Grant Permission</td>
                                <td>KR-SYS</td>
                                <td>Grant Permission</td>
                                <td><!-- Please don't change formatting of this logic:iterate block --> 
                                    <a href="#"  title="with Role Role=63 ">KR-SYS Technical Administrator <span class="icon-info uif-inquiryLink"></span></a></td>
                            </tr>
                            <tr>
                                <td>KR-IDM</td>
                                <td>Grant Responsibility</td>
                                <td>KR-SYS</td>
                                <td>Grant Responsibility</td>
                                <td><!-- Please don't change formatting of this logic:iterate block --> 
                                    <a href="#"  title="with Role Role=63 ">KR-SYS Technical Administrator <span class="icon-info uif-inquiryLink"></span></a></td>
                            </tr>
                            <tr>
                                <td>KR-IDM</td>
                                <td>Populate Group</td>
                                <td>KR-SYS</td>
                                <td>Populate Group</td>
                                <td><!-- Please don't change formatting of this logic:iterate block --> 
                                    <a href="#"  title="with Role Role=63 ">KR-SYS Technical Administrator <span class="icon-info uif-inquiryLink"></span></a></td>
                            </tr>
                            <tr>
                                <td>KR-NS</td>
                                <td>Copy Document</td>
                                <td>KR-SYS</td>
                                <td>Copy RICE Document</td>
                                <td><!-- Please don't change formatting of this logic:iterate block --> 
                                    <a href="#"  title="with Role Role=1 ">KUALI User</a><br>
                                    <a href="#"  title="with Role Role=95 ">KR-SYS Document Initiator <span class="icon-info uif-inquiryLink"></span></a></td>
                            </tr>
                            <tr>
                                <td>KR-NS</td>
                                <td>Inquire Into Records</td>
                                <td>KR-SYS</td>
                                <td>Inquire Into RICE Records</td>
                                <td><!-- Please don't change formatting of this logic:iterate block --> 
                                    <a href="#"  title="with Role Role=1 ">KUALI User</a><br>
                                    <a href="#"  title="with Role Role=1 ">KUALI User <span class="icon-info uif-inquiryLink"></span></a></td>
                            </tr>
                            <tr>
                                <td>KR-NS</td>
                                <td>Look Up Records</td>
                                <td>KR-SYS</td>
                                <td>Look Up RICE Records</td>
                                <td><!-- Please don't change formatting of this logic:iterate block --> 
                                    <a href="#"  title="with Role Role=1 ">KUALI User</a><br>
                                    <a href="#"  title="with Role Role=1 ">KUALI User <span class="icon-info uif-inquiryLink"></span></a></td>
                            </tr>
                            <tr>
                                <td>KR-NS</td>
                                <td>Maintain System Parameter</td>
                                <td>KR-SYS</td>
                                <td>Maintain System Parameter</td>
                                <td><!-- Please don't change formatting of this logic:iterate block --> 
                                    <a href="#"  title="with Role Role=63 ">KR-SYS Technical Administrator</a><br>
                                    <a href="#"  title="with Role Role=1 ">KUALI User <span class="icon-info uif-inquiryLink"></span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
<?php include ('includes/modal-routelog.php') ?>
<?php include ('includes/modal-role-qualify.php') ?>
<?php include ('../cross-project/includes/modal-superuser.php') ?>
<?php include ('../cross-project/includes/modal-routing-adhoc.php') ?>
<?php include ('includes/modal-membership-apply.php') ?>
<?php include ('includes/modal-membership-apply-results.php') ?>
<?php include ('includes/modal-membership-apply-confirm.php') ?>
<?php include ('includes/modal-activeDates.php') ?>
</body>
</html>
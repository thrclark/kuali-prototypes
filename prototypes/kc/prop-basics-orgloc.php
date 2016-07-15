<?php
$page = 'basics';
$section = 'basics-proposalDetails';
?>
<!DOCTYPE HTML>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex,nofollow"/>
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include('includes/styles.php') ?>
</head>

<body id="Uif-Application">
<?php include('includes/uif-applicationHeader.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View">
    <!-- BREADCRUMBS --> 
    <!-- VIEW HEADER -->
    
    <?php include('includes/uif-viewHeader-pd.php') ?>
    <!-- // VIEW HEADER  --> 
    <!-- VIEW CONTENT -->
    <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid"> 
        <!-- VIEW NAVIGATION -->
        <?php include('includes/uif-navigation-proposal.php') ?>
        <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
            <div class="uif-header-inner">
                <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Organization &amp; Location </span> </h2>
                <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> </div>
            </div>
            <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li class="active"><a href="#apporg" data-toggle="tab">Applicant Organization</a></li>
                    <li><a href="#perforg" data-toggle="tab">Performing Organization</a></li>
                    <li><a href="#perfsites" data-toggle="tab">Performance Site Locations</a></li>
                    <li><a href="#otherorgs" data-toggle="tab">Other Organizations</a></li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane active" id="apporg">
                        <header class="clearfix uif-header-contentWrapper">
                            <div id="u148pgf0" class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Applicant Organization</h3>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <table id="u123wtkc" class="table table-condensed" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="uksv7j7" for="u1x5davg_control" class="uif-label displayWith-u1x5davg uif-labelBlock" data-label_for="u1x5davg"> Organization Name </label></th>
                                    <td class="uif-gridLayoutCell"><div id="u1x5davg" class="uif-field" data-label="Organization Name">Massachusetts Institute of Technology </div></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="ufy6kbo" for="u1x5dawb_control" class="uif-label displayWith-u1x5dawb uif-labelBlock" data-label_for="u1x5dawb"> Address Line 1 </label></th>
                                    <td class="uif-gridLayoutCell"><div id="u1x5dawb" class="uif-field" data-label="Address Line 1"> 77 Massachusetts Ave</div></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="ub3hx45" for="u1x5dax6_control" class="uif-label displayWith-u1x5dax6 uif-labelBlock" data-label_for="u1x5dax6"> Address Line 2 </label></th>
                                    <td class="uif-gridLayoutCell"><div id="u1x5dax6" class="uif-field" data-label="Address Line 2"> </div></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="u68t9wm" for="u1x5day1_control" class="uif-label displayWith-u1x5day1 uif-labelBlock" data-label_for="u1x5day1"> Address Line 3 </label></th>
                                    <td class="uif-gridLayoutCell"><div id="u1x5day1" class="uif-field" data-label="Address Line 3"> </div></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="u1e4mp3" for="u1x5dayw_control" class="uif-label displayWith-u1x5dayw uif-labelBlock" data-label_for="u1x5dayw"> City </label></th>
                                    <td class="uif-gridLayoutCell"><div id="u1x5dayw" class="uif-field" data-label="City"> Cambridge</div></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="u1vkk1go" for="u1x5dazr_control" class="uif-label displayWith-u1x5dazr uif-labelBlock" data-label_for="u1x5dazr"> State </label></th>
                                    <td class="uif-gridLayoutCell"><div id="u1x5dazr" class="uif-field" data-label="State"> MA</div></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="u1qpve95" for="u1x5db0m_control" class="uif-label uif-labelBlock" data-label_for="u1x5db0m"> Postal Code </label></th>
                                    <td class="uif-gridLayoutCell"><div id="u1x5db0m" class="uif-field" data-label="Postal Code"> 02139</div></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="" for="" class="uif-label uif-labelBlock" data-label_for=""> Congressional Districts </label></th>
                                    <td class="uif-gridLayoutCell"><div id="" class="uif-field" data-label="Postal Code"><a href="#">Add</a></div></td>
                                </tr>
                            </tbody>
                        </table>
            
                       
                        
                    </div>
                    <div class="tab-pane" id="perforg">
                        <header class="clearfix uif-header-contentWrapper">
                            <div id="u148pgf0" class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Performing Organization</h3>
                                    </div>
                                    <div class="col-md-6 uif-pagetools"> <a href="" class="btn btn-default btn-xs pull-right"> <span class="icon-random"></span> Change Organization</a> </div>
                                </div>
                            </div>
                        </header>
                       <table id="u123wtkc" class="table table-condensed" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="uksv7j7" for="u1x5davg_control" class="uif-label displayWith-u1x5davg uif-labelBlock" data-label_for="u1x5davg"> Organization Name </label></th>
                                    <td class="uif-gridLayoutCell"><div id="u1x5davg" class="uif-field" data-label="Organization Name">Massachusetts Institute of Technology </div></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="ufy6kbo" for="u1x5dawb_control" class="uif-label displayWith-u1x5dawb uif-labelBlock" data-label_for="u1x5dawb"> Address Line 1 </label></th>
                                    <td class="uif-gridLayoutCell"><div id="u1x5dawb" class="uif-field" data-label="Address Line 1"> 77 Massachusetts Ave</div></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="ub3hx45" for="u1x5dax6_control" class="uif-label displayWith-u1x5dax6 uif-labelBlock" data-label_for="u1x5dax6"> Address Line 2 </label></th>
                                    <td class="uif-gridLayoutCell"><div id="u1x5dax6" class="uif-field" data-label="Address Line 2"> </div></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="u68t9wm" for="u1x5day1_control" class="uif-label displayWith-u1x5day1 uif-labelBlock" data-label_for="u1x5day1"> Address Line 3 </label></th>
                                    <td class="uif-gridLayoutCell"><div id="u1x5day1" class="uif-field" data-label="Address Line 3"> </div></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="u1e4mp3" for="u1x5dayw_control" class="uif-label displayWith-u1x5dayw uif-labelBlock" data-label_for="u1x5dayw"> City </label></th>
                                    <td class="uif-gridLayoutCell"><div id="u1x5dayw" class="uif-field" data-label="City"> Cambridge</div></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="u1vkk1go" for="u1x5dazr_control" class="uif-label displayWith-u1x5dazr uif-labelBlock" data-label_for="u1x5dazr"> State </label></th>
                                    <td class="uif-gridLayoutCell"><div id="u1x5dazr" class="uif-field" data-label="State"> MA</div></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="u1qpve95" for="u1x5db0m_control" class="uif-label uif-labelBlock" data-label_for="u1x5db0m"> Postal Code </label></th>
                                    <td class="uif-gridLayoutCell"><div id="u1x5db0m" class="uif-field" data-label="Postal Code"> 02139</div></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="col-md-3"> <label id="" for="" class="uif-label uif-labelBlock" data-label_for=""> Congressional Districts </label></th>
                                    <td class="uif-gridLayoutCell"><div id="" class="uif-field" data-label="Postal Code"><a href="#">Add</a></div></td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="tab-pane" id="perfsites">
                        <header class="clearfix uif-header-contentWrapper">
                            <div id="u148pgf0" class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Performance Sites</h3>
                                    </div>
                                    <div class="col-md-6 uif-pagetools"> <a href="" class="btn btn-default btn-xs pull-right"> <span aria-hidden="true" class="icon-plus"></span>Add Site</a> </div>
                                </div>
                            </div>
                        </header>
                        <table class="table table-condensed uif-has-actions">
                            <thead>
                                <tr>
                                    <th>Address</th>
                                    <th>Congressional Districts</th>
                                    <th><span class="">Delete</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><address>
                                        <strong> Cal Tech Jet Propulsion Lab  Search   Direct Inquiry  Submit</strong> <br>
                                        NASA Resident Office, MS 180-801 <br>
                                        4800 Oak Grove Drive <br>
                                        Pasadena,  CA  91109-8099
                                        </address></td>
                                    <td><div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                            <div class="btn-group">
                                                <button type="button" class="multiselect dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown" title="None selected">None selected <b class="caret"></b></button>
                                                <ul class="multiselect-container dropdown-menu">
                                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                                        <input class="form-control multiselect-search" type="text" placeholder="Search">
                                                    </div>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-001</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-002</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-003</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-004</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-005</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-006</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-007</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-008</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-009</label>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div></td>
                                    <td><div class="dropdown dropdown-large"><a href="#" class="btn btn-default btn-xs uif-delete" data-toggle="true "><span aria-hidden="true" class="icon-trash"></span><span class="sr-only">Delete</span></a> </div></td>
                                </tr>
                                <tr>
                                    <td><address>
                                        <strong>U.S. Department of Transportation - Federal Aviation Agency</strong><br>
                                        Office of Research and Technology Applications, ACL-1A <br>
                                        FAA Technical Center, Building 270 <br>
                                        Atlantic City International Airport <br>
                                        Atlantic City,  NJ  08405
                                        </address></td>
                                    <td><div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                            <div class="btn-group">
                                                <button type="button" class="multiselect dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown" title="None selected">None selected <b class="caret"></b></button>
                                                <ul class="multiselect-container dropdown-menu">
                                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                                        <input class="form-control multiselect-search" type="text" placeholder="Search">
                                                    </div>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-001</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-002</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-003</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-004</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-005</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-006</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-007</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-008</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-009</label>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div></td>
                                    <td><div class="dropdown dropdown-large"><a href="#" class="btn btn-default btn-xs uif-delete" data-toggle="true "><span aria-hidden="true" class="icon-trash"></span><span class="sr-only">Delete</span></a> </div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="otherorgs">
                        <header class="clearfix uif-header-contentWrapper">
                            <div id="u148pgf0" class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Other Organizations</h3>
                                    </div>
                                    <div class="col-md-6 uif-pagetools"> <a href="" class="btn btn-default btn-xs pull-right"> <span aria-hidden="true" class="icon-plus"></span>Add Organization</a> </div>
                                </div>
                            </div>
                        </header>
                        <table class="table table-condensed uif-has-actions">
                            <thead>
                                <tr>
                                    <th>Address</th>
                                    <th>Congressional Districts</th>
                                    <th><span class="">Delete</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><address>
                                        <strong>University of Southern California</strong><br>
                                        4676 Admiralty Way Marina Del Rosa CA
                                        </address></td>
                                    <td><div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                            <div class="btn-group">
                                                <button type="button" class="multiselect dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown" title="None selected">None selected <b class="caret"></b></button>
                                                <ul class="multiselect-container dropdown-menu">
                                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                                        <input class="form-control multiselect-search" type="text" placeholder="Search">
                                                    </div>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-001</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-002</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-003</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-004</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-005</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-006</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-007</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-008</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-009</label>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div></td>
                                    <td><div class="dropdown dropdown-large"><a href="#" class="btn btn-default btn-xs uif-delete" data-toggle="true "><span aria-hidden="true" class="icon-trash"></span><span class="sr-only">Delete</span></a> </div></td>
                                </tr>
                                <tr>
                                    <td><address>
                                        <strong> Dynamic Objects Language Labs Inc </strong><br>
                                        9 Bartlett St #334 Andover, MA
                                        </address></td>
                                    <td><div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                            <div class="btn-group">
                                                <button type="button" class="multiselect dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown" title="None selected">None selected <b class="caret"></b></button>
                                                <ul class="multiselect-container dropdown-menu">
                                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                                                        <input class="form-control multiselect-search" type="text" placeholder="Search">
                                                    </div>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-001</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-002</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-003</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-004</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-005</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-006</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-007</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-008</label>
                                                        </a></li>
                                                    <li><a href="javascript:void(0);">
                                                        <label class="checkbox">
                                                            <input type="checkbox" name="multiselect" value="">
                                                            MA-009</label>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div></td>
                                    <td><div class="dropdown dropdown-large"><a href="#" class="btn btn-default btn-xs uif-delete" data-toggle="true "><span aria-hidden="true" class="icon-trash"></span><span class="sr-only">Delete</span></a> </div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>
            </section>
        </main>
    </div>
    <!-- VIEW FOOTER                  

-->
    <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
        <div class="global-navigate btn-group">
            <button type="button" href="prop-basics-sponsorprog.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
            <button type="button" href="prop-personnel-start.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
        </div>
       <!--        
        <div class=" global-actions btn-group dropup">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Document Actions <span class="caret"></span> </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Submit Document</a></li>
                <li><a href="#" data-toggle="modal" data-target="#canceldoc"> Cancel Document </a> </li>
                <li class="divider"></li>
                <li><a href="#">Save Document</a></li>
                <li><a href="#">Close Document</a></li>
            </ul>
        </div>--> <div class="global-actions btn-group">

                <button type="button" id="" class="btn btn-default">Save</button>
                <button type="button" id="" class="btn btn-default">Close</button>
                <button type="button" id="" class="btn btn-default" data-toggle="modal" data-target="#globalaction-submit">Submit</button>
                <button type="button" id="" class="btn btn-default" data-toggle="modal" data-target="#globalaction-cancel">Cancel</button>

            </div>
    </div>
</form>
<?php include ('includes/footer-scripts.php') ?>
<?php include('includes/modals-global-propdev.php') ?>
</body>
</html>
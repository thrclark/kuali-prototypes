<?php
$section = '';
$page = 'contactinfo';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kuali :: Fluid Application Header</title>
<?php include ('includes/styles.php') ?>
<!--<link href="../css/kradSampleApp.css" rel="stylesheet" type="text/css"/><link href="../css/labsProposal.css" rel="stylesheet" type="text/css"/>  -->
</head>
<body id="Uif-Application">
<!-- APPLICATION HEADER -->
<?php include ('includes/uif-applicationHeader-loggedin.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View" style="margin-top:75px">
    <!-- BREADCRUMBS --><!-- VIEW HEADER -->
    <?php include ('includes/uif-viewHeader-person.php') ?>
    <!-- VIEW CONTENT -->
    <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container">
    <!-- VIEW NAVIGATION -->
    <?php include ('includes/uif-navigation-person.php') ?>
    <main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left: 250px;">
        <div id="content">
            <div class="uif-header-inner">
                <h2 id="" class="uif-headerText"><span class="uif-headerText-span"> Contact Info &amp; Privacy</span></h2>
            </div>
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                <li class="active"><a href="#names" data-toggle="tab">Names</a></li>
                <li><a href="#addresses" data-toggle="tab">Addresses</a></li>
                <li><a href="#phone" data-toggle="tab">Phone Numbers</a></li>
                <li><a href="#email" data-toggle="tab">Email Addresses</a></li>
                <li><a href="#privacy" data-toggle="tab">Privacy Settings</a></li>
            </ul>
            <div id="my-tab-content" class="tab-content">
                <div class="tab-pane active" id="names">
                    <div class="uif-header-inner">
                        <h3 id="" class="uif-headerText"><span class="uif-headerText-span"> Names </span></h3>
                        <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""><a href="#" class="btn btn-xs btn-default toggler" data-prod-cat="1"><span class="icon-plus" style="font-size:10px"></span> Add New</a></div>
                    </div>

                    <table id="u569ish_line0" class="table table-condensed uif-has-actions" role="presentation">
                        <thead>
                            <tr>
                                <th scope="row">Name Code</th>
                                <th>Prefix</th>
                                <th>First</th>
                                <th>Middle</th>
                                <th>Last</th>
                                <th>Suffix</th>
                                <th>Default</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cat1 warning" style="display:none">
                                <td scope="row"><select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required valid" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true">
                                        <option value="" selected="selected"></option>
                                        <option value="OTH">Other</option>
                                        <option value="PRFR">Preferred</option>
                                        <option value="PRM" selected="selected">Primary</option>
                                    </select></td>
                                <td class=""><select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required valid" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true">
                                        <option value="" selected="selected"></option>
                                        <option value="Ms">Ms</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Dr">Dr</option>
                                    </select></td>
                                <td class=""><input id="u11k8c13_control" type="text" name="field1" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="u11k8c13" aria-required="true" aria-invalid="true"></td>
                                <td class=""><input id="u11k8c13_control" type="text" name="field1" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="u11k8c13" aria-required="true" aria-invalid="true"></td>
                                <td class=""><input id="u11k8c13_control" type="text" name="field1" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="u11k8c13" aria-required="true" aria-invalid="true"></td>
                                <td class=""><select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required valid" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true">
                                        <option value="" selected="selected"></option>
                                        <option value="Jr">Jr</option>
                                        <option value="Sr">Sr</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Md">Md</option>
                                    </select></td>
                                <td class=""><label>
                                        <input type="checkbox" value="">
                                        <span class="sr-only">Default</span> </label></td>
                                <td class=""><label>
                                        <input type="checkbox" value="">
                                        <span class="sr-only">Active</span> </label></td>
                                <td class="test"><a href="#" class="btn btn-xs btn-primary toggler" data-prod-cat="1">Save</a> <a href="#" class="btn btn-xs btn-default">Cancel</a> <br></td>
                            </tr>
                            <tr>
                                <td scope="row">Primary</td>
                                <td class="">Mr.</td>
                                <td class="">Tom</td>
                                <td class="">Bob</td>
                                <td class="">Clark</td>
                                <td class="">&nbsp;</td>
                                <td class="">&nbsp;</td>
                                <td class=""><span aria-hidden="true" class="icon-ok" style="color:green"></span></td>
                                <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                            </tr>
                            <tr>
                                <td scope="row">Preferred</td>
                                <td class="">Mr.</td>
                                <td class="">Tommy</td>
                                <td class="">Bobby</td>
                                <td class="">Clarkie</td>
                                <td class="">Jr.</td>
                                <td class="">&nbsp;</td>
                                <td class=""><span aria-hidden="true" class="icon-ok" style="color:green"></span></td>
                                <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                            </tr>
                            <tr>
                                <td scope="row">Preferred</td>
                                <td class="">Dr.</td>
                                <td class="">Thomas</td>
                                <td class="">Robert</td>
                                <td class="">Clark</td>
                                <td class="">&nbsp;</td>
                                <td class=""><span aria-hidden="true" class="icon-ok" style="color:green"></span></td>
                                <td class=""><span aria-hidden="true" class="icon-ok" style="color:green"></span></td>
                                <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="addresses">
                    <div class="uif-header-inner">
                        <h3 id="" class="uif-headerText"><span class="uif-headerText-span"> Addresses </span></h3>
                        <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""><a href="#" class="btn btn-xs btn-default"><span class="icon-plus" style="font-size:10px"></span> Add New</a></div>
                    </div>
                    <table id="u569ish_line0" class="table table-condensed uif-has-actions" role="presentation">
                        <thead>
                            <tr>
                                <th scope="row">Type</th>
                                <th>Line1</th>
                                <th>Line2</th>
                                <th>Line3</th>
                                <th>City</th>
                                <th>State</th>
                                <th>ZIP</th>
                                <th>Country</th>
                                <th>Default</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Home</td>
                                <td class="">7236 Chesnut Ave</td>
                                <td class="">&nbsp;</td>
                                <td class="">&nbsp;</td>
                                <td class="">Bedford</td>
                                <td class="">IN </td>
                                <td class="">47553</td>
                                <td class="">USA</td>
                                <td class=""></td>
                                <td class=""><span aria-hidden="true" class="icon-ok" style="color:green"></span></td>
                                <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                            </tr>
                            <tr>
                                <td>Home</td>
                                <td class="">663 12th Street</td>
                                <td class="">&nbsp;</td>
                                <td class="">&nbsp;</td>
                                <td class="">Hughson</td>
                                <td class="">CA</td>
                                <td class="">95326</td>
                                <td class="">USA</td>
                                <td class=""></td>
                                <td class=""></td>
                                <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                            </tr>
                            <tr>
                                <td>Work</td>
                                <td class="">123 Walnut St</td>
                                <td class="">Building E23-16</td>
                                <td class="">&nbsp;</td>
                                <td class="">Bloomington</td>
                                <td class="">IN </td>
                                <td class="">47401</td>
                                <td class="">USA</td>
                                <td class=""><span aria-hidden="true" class="icon-ok" style="color:green"></span></td>
                                <td class=""><span aria-hidden="true" class="icon-ok" style="color:green"></span></td>
                                <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="phone">
                    <div class="uif-header-inner">
                        <h3 id="" class="uif-headerText"><span class="uif-headerText-span"> Phone Numbers </span></h3>
                        <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""><a href="#" class="btn btn-xs btn-default"><span class="icon-plus" style="font-size:10px"></span> Add New</a></div>
                    </div>
                    <table id="u569ish_line0" class="table table-condensed uif-has-actions" role="presentation">
                        <thead>
                            <tr>
                                <th scope="row">Type</th>
                                <th>Number</th>
                                <th>Extension</th>
                                <th>Country</th>
                                <th>Default</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Home</td>
                                <td class="">812-364-3456</td>
                                <td class="">&nbsp;</td>
                                <td class="">USA</td>
                                <td class=""></td>
                                <td class=""><span aria-hidden="true" class="icon-ok" style="color:green"></span></td>
                                <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                            </tr>
                            <tr>
                                <td scope="row">Mobile</td>
                                <td class="">812-375-2763</td>
                                <td class="">&nbsp;</td>
                                <td class="">USA</td>
                                <td class=""></td>
                                <td class=""><span aria-hidden="true" class="icon-ok" style="color:green"></span></td>
                                <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                            </tr>
                            <tr>
                                <td scope="row">Work</td>
                                <td class="">812-377-4545</td>
                                <td class="">3754</td>
                                <td class="">USA</td>
                                <td class=""><span aria-hidden="true" class="icon-ok" style="color:green"></span></td>
                                <td class=""><span aria-hidden="true" class="icon-ok" style="color:green"></span></td>
                                <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="email">
                    <div class="uif-header-inner">
                        <h3 id="" class="uif-headerText"><span class="uif-headerText-span"> Email Addresses </span></h3>
                        <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""><a href="#" class="btn btn-xs btn-default"><span class="icon-plus" style="font-size:10px"></span> Add New</a></div>
                    </div>
                    <table id="u569ish_line0" class="table table-condensed uif-has-actions" role="presentation">
                        <thead>
                            <tr>
                                <th scope="row">Type</th>
                                <th>Email</th>
                                <th>Default</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="">Home</td>
                                <td class=""><a href="mailto:">thrclark@home.net</a></td>
                                <td class="">&nbsp;</td>
                                <td class=""><span aria-hidden="true" class="icon-ok" style="color:green"></span></td>
                                <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                            </tr>
                            <tr>
                                <td class="">Work</td>
                                <td class=""><a href="mailto:">thrclark@indiana.edu</a></td>
                                <td class="">&nbsp;</td>
                                <td class=""><span aria-hidden="true" class="icon-ok" style="color:green"></span></td>
                                <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="privacy">
                    <div class="uif-header-inner">
                        <h3 id="" class="uif-headerText"><span class="uif-headerText-span"> Privacy Settings </span></h3>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            Suppress Name</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            Suppress Personal</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            Suppress Phone</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            Suppress Address</label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            Suppress Email</label>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script></div>
    </main>
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
<?php include ('includes/footer-scripts.php') ?>
<script>
jQuery(document).ready(function($){
    $(".toggler").click(function(e){
        e.preventDefault();
        $('.cat'+$(this).attr('data-prod-cat')).toggle();
    });
});
</script>
<?php include ('includes/modal-routelog.php') ?>
<?php include ('../cross-project/includes/modal-superuser.php') ?>
<?php include ('../cross-project/includes/modal-routing-adhoc.php') ?>
</body>
</html>
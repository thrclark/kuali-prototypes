<?php
$page = '';
$section = '';
?>
<!DOCTYPE HTML>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex,nofollow"/>
<title>Kuali :: Fluid Application Header</title>
<?php include('includes/styles.php') ?>
<link rel="stylesheet" href="../../themes/kboot/stylesheets/bootstrap-select.css" />
<link rel="stylesheet" href="../../themes/kboot/stylesheets/bootstrap-multiselect.css" />
</head>
<body id="Uif-Application">
<?php include('includes/uif-applicationHeader.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div  class="clearfix uif-formView" data-role="View"> 
        <!-- BREADCRUMBS --> 
        <!-- VIEW HEADER -->
        
        <?php include('includes/uif-viewHeader-template.php') ?>
        <!-- // VIEW HEADER  --> 
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"> 
            <!-- VIEW NAVIGATION -->
            
            <main  class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" >
                <section  class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" >
                    <div class="uif-header-inner">
                        <h2  class="uif-headerText"> <span class="uif-headerText-span"> Template - Standard Form</span> </h2>
                        <div  class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" > </div>
                    </div>
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label  class="clearfix clearfix uif-label md-float-right uif-labelBlock">Text Input:</label>
                    </div>
                    <div class="col-md-8">
                        <div  class="uif-inputField"  data-role="InputField" >
                            <input  type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_data-original-title="" title="" data-hastooltip="true">
                        </div>
                    </div>
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label  class="clearfix clearfix uif-label md-float-right uif-labelBlock">Small Input:</label>
                    </div>
                    <div class="col-md-2">
                        <div  class="uif-inputField"  data-role="InputField" >
                            <input  type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_data-original-title="" title="" data-hastooltip="true">
                        </div>
                    </div>
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label  class="clearfix clearfix uif-label md-float-right uif-labelBlock">Dropdown:</label>
                    </div>
                    <div class="col-md-8">
                        <div  class="uif-inputField"  data-role="InputField" >
                            <select  name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required valid" data-role="Control" data-control_aria-required="true" data-original-title="" title="" data-hastooltip="true">
                                <option value="2">value</option>
                                <option value="1">value</option>
                            </select>
                        </div>
                    </div>
                    <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                        <label  class="clearfix clearfix uif-label md-float-right uif-labelBlock">Text Area:</label>
                    </div>
                    <div class="col-md-8">
                        <div  class="uif-inputField"  data-role="InputField" >
                            <textarea  name="inputField2" rows="3" cols="40" class="form-control input-sm uif-textAreaControl valid" data-role="Control" data-control_for="uahyfb8" data-original-title="" title="" data-hastooltip="true"></textarea>
                        </div>
                    </div>
                </section>
                <hr>
                <section>
                    <div class="uif-header-inner">
                        <h2  class="uif-headerText"> <span class="uif-headerText-span"> Template - Collection </span> </h2>
                        <div  class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" > <a href="#" class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#modal-add-subaward"><span aria-hidden="true" class="icon-plus"></span> Add Item</a> </div>
                    </div>
                    <table class="pad5 table table-condensed table-bordered uif-has-actions">
                        <thead>
                            <tr>
                                <th>Label 1</th>
                                <th>Label 2</th>
                                <th>Label 3</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Value</td>
                                <td>Value</td>
                                <td>Value</td>
                                <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete" data-toggle="true "> <span aria-hidden="true" class="icon-trash"><span class="sr-only">Delete</span></span></a></td>
                            </tr>
                            <tr>
                                <td>Value</td>
                                <td>Value</td>
                                <td>Value</td>
                                <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete" data-toggle="true "> <span aria-hidden="true" class="icon-trash"><span class="sr-only">Delete</span></span></a></td>
                            </tr>
                            <tr>
                                <td>Value</td>
                                <td>Value</td>
                                <td>Value</td>
                                <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete" data-toggle="true "> <span aria-hidden="true" class="icon-trash"><span class="sr-only">Delete</span></span></a></td>
                            </tr>
                            <tr>
                                <td>Value</td>
                                <td>Value</td>
                                <td>Value</td>
                                <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete" data-toggle="true "> <span aria-hidden="true" class="icon-trash"><span class="sr-only">Delete</span></span></a></td>
                            </tr>
                            <tr>
                                <td>Value</td>
                                <td>Value</td>
                                <td>Value</td>
                                <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete" data-toggle="true "> <span aria-hidden="true" class="icon-trash"><span class="sr-only">Delete</span></span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </main>
        </div>
        <!-- VIEW FOOTER                  

-->
        <div  class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
            <div class="global-navigate btn-group">
                <button type="button" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
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
            <?php include('../cross-project/includes/build-footer.php') ?>
        </div>
    </div>
</form>
<?php include('../kc/includes/footer-scripts.php') ?>
<?php include ('includes/modal-login.php') ?>
</body>
</html>
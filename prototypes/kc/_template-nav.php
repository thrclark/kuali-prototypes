<?php
$page = 'basics';
$section = 'basics-proposalDetails';
?>
<!DOCTYPE HTML>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex,nofollow"/>
<title>Kuali Application</title>
<!-- GLOBAL STYLES -->
<?php include('includes/styles.php') ?>
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
    <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid"> 
        <!-- VIEW NAVIGATION -->
        <?php include('includes/uif-navigation-template.php') ?>
        <main  class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
            <div class="uif-header-inner">
                <h2  class="uif-headerText"> <span class="uif-headerText-span"> Template - Standard Form</span> </h2>
                <div  class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> </div>
            </div>
            <section  class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label  for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Text Input:</label>
                </div>
                <div class="col-md-8">
                    <div  class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input  type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label  for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Small Input:</label>
                </div>
                <div class="col-md-2">
                    <div  class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input  type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label  for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Dropdown:</label>
                </div>
                <div class="col-md-8">
                    <div  class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <select  name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required valid" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true">
                            <option></option>
                            <option value="2">value</option>
                            <option value="1">value</option>
                        </select>
                    </div>
                </div>
                <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                    <label  for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Text Area:</label>
                </div>
                <div class="col-md-8">
                    <div  class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <textarea  name="inputField2" rows="3" cols="40" class="form-control input-sm uif-textAreaControl valid" data-role="Control" data-control_for="uahyfb8" data-original-title="" title="" data-hastooltip="true"></textarea>
                    </div>
                </div>
            </section>
            
            
            
            <hr>
            
            
            
            <div class="uif-header-inner">
                    <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Template - Collection </span> </h2>
                    <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> <a href="#" class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#modal-add-subaward"><span aria-hidden="true" class="icon-plus"></span> Add Item</a> </div>
                </div>
                
                
                
                <section>
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
                            </tr> <tr>
                                <td>Value</td>
                                <td>Value</td>
                                <td>Value</td>
                                <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete" data-toggle="true "> <span aria-hidden="true" class="icon-trash"><span class="sr-only">Delete</span></span></a></td>
                            </tr> <tr>
                                <td>Value</td>
                                <td>Value</td>
                                <td>Value</td>
                                <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete" data-toggle="true "> <span aria-hidden="true" class="icon-trash"><span class="sr-only">Delete</span></span></a></td>
                            </tr> <tr>
                                <td>Value</td>
                                <td>Value</td>
                                <td>Value</td>
                                <td><a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete" data-toggle="true "> <span aria-hidden="true" class="icon-trash"><span class="sr-only">Delete</span></span></a></td>
                            </tr> <tr>
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
            <button type="button" href="#"  class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
            <button type="button" href="#" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
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

<!-- MODAL INCLUDES -->
<?php include ('includes/modal-.php') ?>
<?php include ('includes/modal-.php') ?>
<?php include ('includes/modal-.php') ?>
</body>
</html>
<?php
$section = '';
$page = 'role-responsibilities';
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
        <?php include ('includes/uif-navigation-role.php') ?>
        <main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left: 250px;">
           
           
           
           
           <div class="uif-header-inner">
                    <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Responsibilities </span> </h2>
                    <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                        <button type="button" class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#modal-add-personnel1"><span aria-hidden="true" class="icon-plus"></span> Add Responsibility</button>
                        
                    </div>
                </div>
                
                
                
       
            <table id="u569ish_line0" class="table table-condensed uif-has-actions" role="presentation">
                <tbody>
                    <tr>
                        <th> Namespace</th>
                        <th> Identifier</th>
                        <th> Name</th>
                        <th> Detail Values</th>
                        <th>Active</th>
                        <th>Responsibility Action</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td scope="row">KR-SAP - Sample App</td>
                        <td>KRSAP10000</td>
                        <td>Review Travel Authorization Document</td>
                        <td>Document Type Name:TravelAuthorizationDocument, Route Node Name:TravelApproval, Required:N, Action Details At Role Member Level:N</td>
                        <td>yes</td>
                        <td class=""><div class="dropdown dropdown-large"><a href="#" class="" data-toggle="dropdown">View </a>
                                <div class="dropdown-menu row" style="min-width:300px; padding:15px">
                                    <div class="form-horizontal uif-cssGridGroup" role="form">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-6 control-label">Name</label>
                                            <div class="col-sm-6">
                                                <p class="form-control-static">All</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-6 control-label">Action Type Code</label>
                                            <div class="col-sm-6">
                                                <select class="form-control">
                                                    <option value=""></option>
                                                    <option value="A" selected>APPROVE</option>
                                                    <option value="F">FYI</option>
                                                    <option value="K">ACKNOWLEDGE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-6 control-label">Action Policy Code</label>
                                            <div class="col-sm-6">
                                                <select class="form-control">
                                                    <option value=""></option>
                                                    <option value="A" selected>First</option>
                                                    <option value="F">All</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-6 control-label">Priority Number</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="" placeholder="" value="1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-6 col-sm-6">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">
                                                        Force Action </label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <div class="col-sm-offset-6 col-sm-6">
                                                <a href="#" class="btn btn-primary">Save</a> 
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                </div>
                           </div></td>
                        <td class="">  <a href="#" class="btn btn-xs btn-default">Edit</a>     <a href="#" class="btn btn-xs btn-default"><span class="icon-trash"></span></a> </td>
                    </tr>
                   
                </tbody>
            </table>
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
<?php include ('includes/footer-scripts.php') ?>
<?php include ('includes/modal-routelog.php') ?>
</body>
</html>
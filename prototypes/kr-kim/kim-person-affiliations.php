<?php
$section = '';
$page = 'affiliations';
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
    <div id="" class="clearfix uif-formView" data-role="View" style="margin-top:75px">
    <!-- BREADCRUMBS --> 
    <!-- VIEW HEADER -->
    <?php include ('includes/uif-viewHeader-person.php') ?>
    
    <!-- VIEW CONTENT -->
    <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"> 
        <!-- VIEW NAVIGATION -->
        <?php include ('includes/uif-navigation-person.php') ?>
        <main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left: 250px;">
            <div class="uif-header-inner">
                <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Affiliations </span> </h2>
                <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> <a href="#" class="btn btn-default btn-xs pull-right"data-role="Action" data-toggle="modal" data-target="#affiliate-add" data-submit_data="" data-dismiss="modal"><span aria-hidden="true" class="icon-plus"></span> Add Affiliation</a> </div>
            </div>
            <table id="u569ish_line0" class="table table-condensed uif-has-actions" role="presentation">
                <thead>
                    <tr>
                        <th scope="row">Type</th>
                        <th>Campus</th>
                        <th>Default</th>
                        <th>Additional Info</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Student</td>
                        <td class="">CO - Columbus</td>
                        <td class=""><span aria-hidden="true" class="icon-ok" style="color:green"></span></td>
                        <td class="">&nbsp;</td>
                        <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                    </tr>
                    <tr>
                        <td>Student</td>
                        <td class="">BL - Bloomington</td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                    </tr>
                    <tr>
                        <td>Staff</td>
                        <td class="">BL - Bloomington</td>
                        <td class=""></td>
                        <td class=""><a href="#" class="" data-role="Action" data-toggle="modal" data-target="#affiliate-emp" data-submit_data="" data-dismiss="modal"> Employment Info</a> </td>
                        <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                    </tr>
                    
                     <tr>
                        <td>Faculty</td>
                        <td class="">CO - Columbus</td>
                        <td class=""></td>
                        <td class=""><a href="#" class="" data-role="Action" data-toggle="modal" data-target="#affiliate-emp" data-submit_data="" data-dismiss="modal"> Employment Info</a></td>
                        <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                    </tr>
                    <tr>
                        <td>Affiliate</td>
                        <td class="">CO - Columbus</td>
                        <td class=""></td>
                        <td class=""><a href="#" class="" data-role="Action" data-toggle="modal" data-target="#affiliate-aff" data-submit_data="" data-dismiss="modal"> Affiliate Info</a></td>
                        <td class=""> <a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
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
        </div> <div class=" global-actions btn-group dropup">
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
<?php include ('includes/modal-affiliate-add.php') ?>
<?php include ('includes/modal-affiliate-emp.php') ?>
<?php include ('includes/modal-affiliate-aff.php') ?>
<?php include ('includes/modal-routelog.php') ?>
<?php include ('../cross-project/includes/modal-superuser.php') ?>
<?php include ('../cross-project/includes/modal-routing-adhoc.php') ?>

<?php include ('includes/footer-scripts.php') ?>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>
</body>
</html>
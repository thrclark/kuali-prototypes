<?php
$section = 'keyPersonnel';
$page = 'keyPersonnel-creditAllocation';
?>
<!DOCTYPE HTML>
<html lang=en>
<head>
<meta charset=UTF-8>
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>
<style>
.dropdown-large {
 position:;
}
.dropdown-menu-large {
	margin-left: 16px;
	margin-right: 16px;
	padding: 20px 0px;
}
.dropdown-menu-large > li > ul {
	padding: 0;
	margin: 0;
}
.dropdown-menu-large > li > ul > li {
	list-style: none;
}
.dropdown-menu-large > li > ul > li > a {
	display: block;
	padding: 3px 20px;
	clear: both;
	font-weight: normal;
	line-height: 1.428571429;
	color: #333333;
	white-space: normal;
}
.dropdown-menu-large > li ul > li > a:hover, .dropdown-menu-large > li ul > li > a:focus {
	text-decoration: none;
	color: #262626;
	background-color: #f5f5f5;
}
.dropdown-menu-large .disabled > a, .dropdown-menu-large .disabled > a:hover, .dropdown-menu-large .disabled > a:focus {
	color: #999999;
}
.dropdown-menu-large .disabled > a:hover, .dropdown-menu-large .disabled > a:focus {
	text-decoration: none;
	background-color: transparent;
	background-image: none;
 filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
	cursor: not-allowed;
}
.dropdown-menu-large .dropdown-header {
	color: #428bca;
	font-size: 18px;
}
 @media (max-width: 768px) {
.dropdown-menu-large {
	margin-left: 0;
	margin-right: 0;
}
.dropdown-menu-large > li {
	margin-bottom: 30px;
}
.dropdown-menu-large > li:last-child {
	margin-bottom: 0;
}
.dropdown-menu-large .dropdown-header {
	padding: 3px 15px !important;
}
}
</style>
</head>
<body id="Uif-Application">
<!-- APPLICATION HEADER -->
<?php include('includes/uif-applicationHeader.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method=post accept-charset=UTF-8>
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role=View ><!-- BREADCRUMBS --><!-- VIEW HEADER --> 
        <!-- VIEW HEADER -->
        <?php include('includes/uif-viewHeader-pd.php') ?>
        <!-- // VIEW HEADER --> 
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid"><!-- VIEW NAVIGATION -->
            <?php include ('includes/uif-navigation-proposal.php') ?>
            <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
                <div class="uif-header-inner">
                    <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Credit Allocation </span> </h2>
                    <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                        <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-add-personnel1"><span aria-hidden="true" class="icon-refresh2"></span>Refresh</button>
                    </div>
                </div>
                <table class="table table-condensed credit-allocation table-bordered">
                    <thead>
                        <tr>
                            <th width="20%">&nbsp;</th>
                            <th width="20%">Recognition</th>
                            <th width="20%">Responsibility</th>
                            <th width="20%">Space</th>
                            <th width="20%">Financial</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="active">
                            <td><strong> Edward H Haskell </strong></td>
                            <td><strong>
                                <input type="text" tabindex="301" value="0.00" title="Credit" class="text-right">
                                </strong></td>
                            <td><strong>
                                <input type="text" tabindex="302" value="0.00" title="Credit" class="text-right">
                                </strong></td>
                            <td><strong>
                                <input type="text" tabindex="303" value="0.00" title="Credit" class="text-right">
                                </strong></td>
                            <td><strong>
                                <input type="text" tabindex="304" value="0.00" title="Credit" class="text-right">
                                </strong></td>
                        </tr>
                        <tr>
                            <td >BL-IIDC - IND INST ON DISABILITY/COMMNTY</td>
                            <td><input type="text" tabindex="305" value="0.00" title="Credit" class="text-right"></td>
                            <td><input type="text" tabindex="306" value="0.00" title="Credit" class="text-right"></td>
                            <td><input type="text" tabindex="307" value="0.00" title="Credit" class="text-right"></td>
                            <td><input type="text" tabindex="308" value="0.00" title="Credit" class="text-right"></td>
                        </tr>
                        <tr>
                            <td >000001 - University</td>
                            <td><input type="text" tabindex="309" value="0.00" title="Credit" class="text-right"></td>
                            <td><input type="text" tabindex="310" value="0.00" title="Credit" class="text-right"></td>
                            <td><input type="text" tabindex="311" value="0.00" title="Credit" class="text-right"></td>
                            <td><input type="text" tabindex="312" value="0.00" title="Credit" class="text-right"></td>
                        </tr>
                        <tr>
                            <td><strong>Unit Total:</strong></td>
                            <td class="text-right"><strong>0.00</strong></td>
                            <td class="text-right"><strong>0.00</strong></td>
                            <td class="text-right"><strong>0.00</strong></td>
                            <td class="text-right"><strong>0.00</strong></td>
                        </tr>
                        <tr class="active">
                            <td><strong> Ward Cleaver </strong></td>
                            <td><strong>
                                <input type="text" tabindex="314" value="0.00" title="Credit" class="text-right">
                                </strong></td>
                            <td><strong>
                                <input type="text" tabindex="315" value="0.00" title="Credit" class="text-right">
                                </strong></td>
                            <td><strong>
                                <input type="text" tabindex="316" value="0.00" title="Credit" class="text-right">
                                </strong></td>
                            <td><strong>
                                <input type="text" tabindex="317" value="0.00" title="Credit" class="text-right">
                                </strong></td>
                        </tr>
                        <tr>
                            <td >000001 - University</td>
                            <td><input type="text" tabindex="318" value="0.00" title="Credit" class="text-right"></td>
                            <td><input type="text" tabindex="319" value="0.00" title="Credit" class="text-right"></td>
                            <td><input type="text" tabindex="320" value="0.00" title="Credit" class="text-right"></td>
                            <td><input type="text" tabindex="321" value="0.00" title="Credit" class="text-right"></td>
                        </tr>
                        <tr>
                            <td><strong>Unit Total:</strong></td>
                            <td class="text-right"><strong>0.00</strong></td>
                            <td class="text-right"><strong>0.00</strong></td>
                            <td class="text-right"><strong>0.00</strong></td>
                            <td class="text-right"><strong>0.00</strong></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="active">
                            <td><strong>Investigator Total: </strong></td>
                            <td class="text-right"><strong>0.00</strong></td>
                            <td class="text-right"><strong>0.00</strong></td>
                            <td class="text-right"><strong>0.00</strong></td>
                            <td class="text-right"><strong>0.00</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </main>
        </div>
        <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;"> <div class="global-navigate btn-group">
                <button type="button" href="prop-personnel-start.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
                <button type="button" href="prop-compliance.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
            </div>       <!--        
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
        
        <!-- DIALOGS/Placeholders --></div>
</form>
<?php include ('includes/footer-scripts.php') ?>
<?php include('includes/modals-global-propdev.php') ?>
<?php
$currentPage =  $_SERVER['QUERY_STRING'] ;
if ($currentPage == "modular-budget=no&amp;detail=yes") {
    ?>
<!--  casual user view --> 
<script>
        (function($){

            $('body').on('click','#save-continue', function(e) {

                document.location.href='bud-personnelCosts-persPeriod.php?modular-budget=no&amp;detail=yes';

            });

        }(jQuery))
    </script>
<?php } ?>
<?php
$currentPage =  $_SERVER['QUERY_STRING'] ;
if ($currentPage == "modular-budget=yes&amp;detail=yes") {
    ?>
<!--  casual user view --> 
<script>
        (function($){

            $('body').on('click','#save-continue', function(e) {

                document.location.href='bud-personnelCosts-persPeriod.php?modular-budget=yes&amp;detail=yes';

            });

        }(jQuery))
    </script>
<?php } ?>


</body>
</html>
<?php
$section = '';
$page = 'actionlist';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kuali :: Fluid Application Header</title>
<meta name="viewport" content="width=device-width, user-scalable=no">
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>
</head>
<body id="Uif-Application">

<!-- APPLICATION HEADER -->

<?php include ('includes/uif-applicationHeader-loggedin.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View" style="margin-top:75px"> <!-- BREADCRUMBS --><!-- VIEW HEADER --> 
        
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"><!-- VIEW NAVIGATION -->
            
            <main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left:;">
                <header class="clearfix uif-header-contentWrapper">
                    <div class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                        <h2 class="uif-headerText"><span class="uif-headerText-span" style="margin-bottom:14px"> Search Results <small style="color:#666">for 'Principal Name = thrclark' and <a href="#" class="refineSearch"> 2 more criteria</a></small></span></h2>
                        <p> <a href="lookup-person.php"> New Search</a> | <a href="#" class="refineSearch"> Refine Search </a></p>
                    </div>
                </header>
                <div class="form-horizontal" role="form" style=" display:none">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="well well-sm uif-form">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <h4 style="margin-top:0px"> Refine Search</h4>
                                    </div>
                                    <div class="col-md-6 text-right"><a href="#" class="hideRefine" style="text-decoration:none"><span style="font-size: 16px; color: #999; text-decoration: none" class="icon-cancel-circle"></span></a></div>
                                </div>
                                <hr>
                                <section class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix" data-parent="">
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Principal Name: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="thrclark" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Principal ID: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Entity ID: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">First Name: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Middle Name: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Last Name: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="Clark" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Email Address: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Phone Number: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Employee ID: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Campus Code: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Primary Department Code: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Employee Status Code: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Employee Type Code: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <input type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control">
                                        </div>
                                    </div>
                                    <div class="col-md-3 uif-cssGridLabelCol">
                                        <label for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Active: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="uif-inputField">
                                            <select name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" aria-invalid="true">
                                                <option value="1" selected="selected">Yes</option>
                                                <option value="4">No</option>
                                                <option value="3">Both</option>
                                            </select>
                                        </div>
                                    </div>
                                </section>
                        
                            <div class="well well-sm text-center uif-form-buttonbar"> <a href="#" class="btn btn-primary uif-action" data-role="" data-toggle="" data-target="" data-submit_data="" data-dismiss=""> Refine Search </a> <a class="btn btn-default" href="#">Clear</a> </div>
                        </div>    </div>
                    </div>
                </div>

                <style type="text/css">
#example tr { cursor:pointer}
</style>
                <table class="table table-condensed table-smaller-text table-bordered" id="example" data-mode="stack">
                    <thead>
                        <tr>
                            <th><span> Principal ID</span></th>
                            <th><span> Principal Name</span></th>
                            <th><span> Name</span></th>
                            <th><span> Entity ID</span></th>
                            <th><span> Campus Code</span></th>
                            <th><span> Primary Department Code</span></th>
                            <th><span> Employee ID</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> admin </a></td>
                            <td> admin </td>
                            <td> admin, admin </td>
                            <td> 1100 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0002733</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> admin1 </a></td>
                            <td> admin1 </td>
                            <td> One, Admin </td>
                            <td> 1125 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0002345</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> admin2 </a></td>
                            <td> admin2 </td>
                            <td> Two, Admin </td>
                            <td> 1126 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0004956</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> dev1 </a></td>
                            <td> dev1 </td>
                            <td> One, Developer </td>
                            <td> 1129 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0003212</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> dev2 </a></td>
                            <td> dev2 </td>
                            <td> Two, Developer </td>
                            <td> 1130 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0009456</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> director </a></td>
                            <td> director </td>
                            <td> director, director </td>
                            <td> 1135 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0009567</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> doug </a></td>
                            <td> doug </td>
                            <td> Neidermeyer, Doug </td>
                            <td> 1121 </td>
                            <td>KO-Kokomo</td>
                            <td>&nbsp;</td>
                            <td>0008324</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> earl </a></td>
                            <td> earl </td>
                            <td> Employee, Earl </td>
                            <td> 1116 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0008865</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> edna </a></td>
                            <td> edna </td>
                            <td> Employee, Edna </td>
                            <td> 1114 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0003343</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> employee </a></td>
                            <td> employee </td>
                            <td> employee, employee </td>
                            <td> 1137 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0002724</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> eric </a></td>
                            <td> eric </td>
                            <td> Employee, Eric </td>
                            <td> 1115 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0002726</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> erin </a></td>
                            <td> erin </td>
                            <td> Employee, Erin </td>
                            <td> 1117 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0002733</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> fran </a></td>
                            <td> fran </td>
                            <td> fran, fran </td>
                            <td> 1119 </td>
                            <td>KO-Kokomo</td>
                            <td>&nbsp;</td>
                            <td>0002345</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> frank </a></td>
                            <td> frank </td>
                            <td> frank, frank </td>
                            <td> 1120 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0004956</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> fred </a></td>
                            <td> fred </td>
                            <td> fred, fred </td>
                            <td> 1118 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0003212</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> guest </a></td>
                            <td> guest </td>
                            <td>&nbsp;</td>
                            <td> KR1000 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0009456</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> idm1 </a></td>
                            <td> idm1 </td>
                            <td> Manager One, Identity </td>
                            <td> 1122 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0009567</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> idm2 </a></td>
                            <td> idm2 </td>
                            <td> Manager Two, Identity </td>
                            <td> 1123 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0008324</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> idm3 </a></td>
                            <td> idm3 </td>
                            <td> Manager Three, Identity </td>
                            <td> 1124 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0008865</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> 1 </a></td>
                            <td> kr </td>
                            <td> KR </td>
                            <td> 1 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0003343</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> kuluser </a></td>
                            <td> kuluser </td>
                            <td> KULUSER, KULUSER </td>
                            <td> 1136 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0002724</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> newaccountuser </a></td>
                            <td> newacctusr </td>
                            <td> newAccountUser, newAccountUser </td>
                            <td> 1133 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0002726</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> notsys </a></td>
                            <td> notsys </td>
                            <td> System, Notification </td>
                            <td> 1131 </td>
                            <td>KO-Kokomo</td>
                            <td>&nbsp;</td>
                            <td>0002733</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> notsysadm </a></td>
                            <td> notsysadm </td>
                            <td> System Admin, Notification </td>
                            <td> 1132 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0002345</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> quickstart </a></td>
                            <td> quickstart </td>
                            <td> quickstart, quickstart </td>
                            <td> 1109 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0004956</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> supervisor </a></td>
                            <td> supervisr </td>
                            <td> supervisor, supervisor </td>
                            <td> 1134 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0003212</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> test1 </a></td>
                            <td> test1 </td>
                            <td> One, Tester </td>
                            <td> 1127 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0002733</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> test2 </a></td>
                            <td> test2 </td>
                            <td> Two, Tester </td>
                            <td> 1128 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0002345</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> testadmin1 </a></td>
                            <td> testadmin1 </td>
                            <td> Admin 1, Test </td>
                            <td> 1101 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0002733</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> testadmin2 </a></td>
                            <td> testadmin2 </td>
                            <td> Admin 2, Test </td>
                            <td> 1102 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0002345</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> testuser1 </a></td>
                            <td> testuser1 </td>
                            <td> User 1, Test </td>
                            <td> 1103 </td>
                            <td>KO-Kokomo</td>
                            <td>&nbsp;</td>
                            <td>0004956</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> testuser2 </a></td>
                            <td> testuser2 </td>
                            <td> User 2, Test </td>
                            <td> 1104 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0003212</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> testuser3 </a></td>
                            <td> testuser3 </td>
                            <td> User 3, Test </td>
                            <td> 1105 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0009456</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> testuser4 </a></td>
                            <td> testuser4 </td>
                            <td> User 4, Test </td>
                            <td> 1106 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0009567</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> testuser5 </a></td>
                            <td> testuser5 </td>
                            <td> User 5, Test </td>
                            <td> 1107 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0008324</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> testuser6 </a></td>
                            <td> testuser6 </td>
                            <td> User 6, Test </td>
                            <td> 1108 </td>
                            <td>BL-Bloomington</td>
                            <td>&nbsp;</td>
                            <td>0008865</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> user1 </a></td>
                            <td> user1 </td>
                            <td> One, User </td>
                            <td> 1110 </td>
                            <td>KO-Kokomo</td>
                            <td>&nbsp;</td>
                            <td>0003343</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> user2 </a></td>
                            <td> user2 </td>
                            <td> Two, User </td>
                            <td> 1111 </td>
                            <td>KO-Kokomo</td>
                            <td>&nbsp;</td>
                            <td>0002724</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> user3 </a></td>
                            <td> user3 </td>
                            <td> Three, User </td>
                            <td> 1112 </td>
                            <td>KO-Kokomo</td>
                            <td>&nbsp;</td>
                            <td>0002726</td>
                        </tr>
                        <tr >
                            <td class="uif-featured"><a href="kim-person-docoverview.php"> user4 </a></td>
                            <td> user4 </td>
                            <td> user4, user4 </td>
                            <td> 1113 </td>
                            <td>KO-Kokomo</td>
                            <td>&nbsp;</td>
                            <td>0002834</td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
        <!-- VIEW FOOTER --> 
        
        <!-- DIALOGS/Placeholders -->
        <div id="Uif-Dialogs"></div>
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
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$('[data-toggle="popover"]').popover();

$('body').on('click', function (e) {
    $('[data-toggle="popover"]').each(function () {
        //the 'is' for buttons that trigger popups
        //the 'has' for icons within a button that triggers a popup
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
    });
});
});//]]>  

</script>  
<script>
$( ".refineSearch" ).click(function() {
  $( ".form-horizontal" ).slideToggle ( "slow" );
});


$( ".hideRefine" ).click(function() {
  $( ".form-horizontal" ).slideUp ( "slow" );
});






</script>
</body>
</html>
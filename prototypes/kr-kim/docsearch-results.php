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



<style>
/*prevents labels from overlapping sorting icons*/

table.dataTable th span {
	white-space: nowrap;
	display: block;
	padding-right: 20px
}
/*hides extra labels that the tablesaw plugin is drawing in popups - (need a better way to fix this)*/
.popover-content b.tablesaw-cell-label {
	display: none
}
 @media (min-width: 1200px) {
.input-group .form-control {
	width: 327px;
	margin-bottom: 0;
}
}
 @media all and (max-width: 1199px) and (min-width: 520px) {
.input-group .form-control {
	width: 260px;
	margin-bottom: 0;
}
}

</style>
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
</head>
<body id="Uif-Application">
<!-- APPLICATION HEADER -->
<?php include ('includes/uif-applicationHeader-loggedin.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View" style="margin-top:65px"> 
        <!-- BREADCRUMBS --><!-- VIEW HEADER --><!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"><!-- VIEW NAVIGATION -->
            <main id="LabsProposal-Page" class="uif-page" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left:;">
                <header class="clearfix uif-header-contentWrapper">
                    <div class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                        <h2 class="uif-headerText"><span class="uif-headerText-span" style="margin-bottom:14px"> Search Results <small style="color:#666">for 'DocType = Exemption Type Maintenance Document' and <a href="#" class="refineSearch"> 2 more criteria</a></small></span></h2>
                        <p> <a href="docsearch.php"> New Search</a> | <a href="#" class="refineSearch"> Refine Search </a></p>
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
                                    <div class="col-md-6 text-right"><a href="#" class="hideRefine" style="text-decoration:none" ><span style="font-size: 16px; color: #999; text-decoration: none" class="icon-cancel-circle"></span></a></div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="docID" class="col-md-2 control-label">Document ID</label>
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" placeholder="" id="docID">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tags" class="col-md-2 control-label">Document Type</label>
                                    <div class="col-md-7">
                                        <div class="uif-form-control input-group"> <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span> <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                                            <input type="text" class="form-control ui-autocomplete-input" id="tags" name="test-username-2" value="Exemption Type Maintenance Document" style="background-image:none" required autocomplete="off">
                                            <div class="input-group-btn"> 
                                                <!-- Lookups, datepickers, etc. --> 
                                                <a href="#" data-role="Action" data-toggle="modal" data-target="#lookup" data-submit_data="" data-dismiss="modal" class="uif-actionLink btn btn-default uif-action icon-search"></a> 
                                                <!-- // --> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="initiator" class="col-md-2 control-label">Initiator</label>
                                    <div class="col-md-7">
                                        <div class="uif-form-control input-group">
                                            <input type="text" class="form-control" id="initiator" name="test-username-2" value="" style="background-image:none" required>
                                            <div class="input-group-btn"> 
                                                <!-- Lookups, datepickers, etc. --> 
                                                <a href="#" data-role="Action" data-toggle="modal" data-target="#lookup" data-submit_data="" data-dismiss="modal" class="uif-actionLink btn btn-default uif-action icon-search"></a> 
                                                <!-- // --> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Created Date</label>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4">
                                                <input type="text" class="form-control" value="09/21/2014" placeholder="mm/dd/yyyy">
                                                <small>from</small> </div>
                                            <div class="col-xs-4 col-sm-4">
                                                <input type="text" class="form-control" value="09/28/2014" placeholder="mm/dd/yyyy">
                                                <small>to</small> </div>
                                        </div>
                                    </div>
                                </div>
                        
                            <div class="well well-sm text-center uif-form-buttonbar"> <a href="docsearch-results.php" class="btn btn-primary uif-action" data-role="" data-toggle="" data-target="" data-submit_data="" data-dismiss=""> Refine Search </a> <a class="btn btn-default" href="#">Clear</a> </div>
                        </div>    </div>
                    </div>
                </div>
                <table class="table table-condensed table-bordered uif-actionlist-current uif-has-actions" data-mode="stack">
                    <thead>
                        <tr>
                            <th> <span>Doc Id</span></th>
                            <th> <span>Doc Type</span></th>
                            <th> <span>Title</span></th>
                            <th> <span>Status</span></th>
                            <th> <span>Initiator</span></th>
                            <th> <span>Date Created</span></th>
                            <th> <span>Route Log</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947134</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0002773673</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Obrien, Irene<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:56 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947131</a></td>
                            <td>Payee ACH Account</td>
                            <td>Edit PayeeACHAccount - DD-BZ-lissmart</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Parker, Mae<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:53 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947130</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#7664, ECON-E  201, IUBLA, UGRD, Pub &amp; Envir Aff Undergraduate, Management BSPA</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Morales, Cameron<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:52 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947129</a></td>
                            <td>Travel Trip Reimbursement</td>
                            <td>Traveler: ANWAR, SOHEL   UnivID: 0002017251 Chart: IN Org: ENGT Account: 1295500</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Hines, Yolanda<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:49 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947128</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#6010, BUS-F  260, IUNWA, UGRD, Business &amp; Econ Undergraduate, Business Admin BSB</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Figueroa, Claire<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:49 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947127</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0000387435</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Cain, Teresa<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:42 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947125</a></td>
                            <td>Endowment Cash Increase</td>
                            <td>Endowment Cash Increase - Net Pooled Fund Purchases</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Poole, Arthur<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:41 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947126</a></td>
                            <td>Endowment Cash Decrease</td>
                            <td>Endowment Cash Decrease - Net Pooled Fund Sales at Book</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Silva, Sabrina<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:41 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947124</a></td>
                            <td>Endowment Cash Increase</td>
                            <td>Endowment Cash Increase - Net Pooled Fund Purchases</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Sharp, Bessie<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:41 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947123</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0002236353</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Jefferson, Woodrow<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:40 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947122</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0002891080</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Pierce, Melanie<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:36 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947121</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#1826, BUS-A  201, IUSEA, UGRD, Business Undergraduate, Pre-Business BSB</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Lucas, Kate<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:35 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947120</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#16360, COLL-C  105, IUBLA, UGRD, University Div Pre-A&amp;S Gl&amp;Intl, Near Eastern Lang &amp; Cult BA</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Armstrong, Shannon<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:33 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947119</a></td>
                            <td>Graduate Admissions Application</td>
                            <td>Graduate Admissions Application - Kabamalan, Lori IU001514202 IUINA-SHRS5</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Ramirez, Noah<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:33 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947118</a></td>
                            <td>SIS SR Add Course Document</td>
                            <td>Add Class#12883, ASCS-Q  299, IUBLA, UGRD, Arts &amp; Sciences Undergraduate, Economics BA</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Cooper, Jimmy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:32 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947116</a></td>
                            <td>Endowment Asset Increase</td>
                            <td>Endowment Asset Increase - Increase Cash Sweep Investments</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Perkins, Patsy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:29 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947115</a></td>
                            <td>Endowment Asset Decrease</td>
                            <td>Endowment Asset Decrease - Decrease Cash Sweep Investments</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Brock, Neal<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:29 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947114</a></td>
                            <td>Endowment Asset Increase</td>
                            <td>Endowment Asset Increase - Increase Cash Sweep Investments</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Zimmerman, Carmen<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:29 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947113</a></td>
                            <td>Endowment Asset Increase</td>
                            <td>Endowment Asset Increase - Increase Cash Sweep Investments</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Herrera, Vickie<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:28 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947112</a></td>
                            <td>Payee ACH Account</td>
                            <td>New PayeeACHAccount - DD-BZ-camybrad</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Guzman, Gina<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:27 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947111</a></td>
                            <td>Graduate Admissions Application</td>
                            <td>Graduate Admissions Application - Rosado, Andrea IU001513703 IUINA-MED7</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Ortiz, Kristina<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:25 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947110</a></td>
                            <td>Travel Trip Authorization</td>
                            <td>Traveler: MENDELSON, DANIELLE N   UnivID: 0001704953 Chart: BL Org: ADMS Account: 1021000</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Castro, Angel<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:21 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947109</a></td>
                            <td>Graduate Admissions Application</td>
                            <td>Graduate Admissions Application - Okoye, Ijeoma N IU001517175 IUINA-MED7</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Mcbride, Terrance<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:21 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947108</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#29754, PSY-B  303, IUINA, UGRD, Science Undergraduate, Psychology BS</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Rios, Hannah<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:19 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947107</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0003175320</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Arnold, Mark<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:15 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947106</a></td>
                            <td>Notification</td>
                            <td>Protocol 1409211838 Submitted to IRB</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Richards, Tabitha<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:09 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947105</a></td>
                            <td>Notification</td>
                            <td>Protocol 1409211838 Submitted to IRB</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Brown, Ryan<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:09 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947104</a></td>
                            <td>SIS SR Add Course Document</td>
                            <td>Add Class#38085, GER-E  121, IUBLA, UGRD, Informatics Undergraduate, Computer Science BS</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Fisher, Johanna<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:08 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947103</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#19567, CSCI-B  401, IUBLA, UGRD, Informatics Undergraduate, Computer Science BS</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Walters, Velma<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:08 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947102</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#5684, PSY-P  101, IUNWA, UGRD, Arts &amp; Sciences Undergraduate, Computer Info Systems BS</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Foster, Leland<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:05 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947099</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#4217, ENG-W  131, IUSBA, UGRD, Lib Arts &amp; Sci Undergraduate, Pre-Dentistry</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Hammond, Rhonda<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:02 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947098</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#3262, CHEM-C  125, IUSBA, UGRD, Lib Arts &amp; Sci Undergraduate, Pre-Dentistry</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Bennett, Mandy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:02 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947097</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#3246, CHEM-C  105, IUSBA, UGRD, Lib Arts &amp; Sci Undergraduate, Pre-Dentistry</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Sims, Tammy<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:02 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947096</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0002668702</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Cruz, Virgil<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:02 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947094</a></td>
                            <td>Endowment Cash Decrease</td>
                            <td>Endowment Cash Decrease - BENCCFEES-8</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Graham, Dewey<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:02 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947095</a></td>
                            <td>Endowment Cash Increase</td>
                            <td>Endowment Cash Increase - BENCASH</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Price, Olive<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:02 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947092</a></td>
                            <td>Endowment Cash Increase</td>
                            <td>Endowment Cash Increase - BENCC</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Gregory, Belinda<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:02 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947093</a></td>
                            <td>Endowment Cash Increase</td>
                            <td>Endowment Cash Increase - BENCC</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Sullivan, Lester<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:02 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947091</a></td>
                            <td>Endowment Cash Decrease</td>
                            <td>Endowment Cash Decrease - BENCCFEES</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Hopkins, Ann<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:02 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947090</a></td>
                            <td>Endowment Cash Increase</td>
                            <td>Endowment Cash Increase - BENCASH</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Washington, Sam<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:02 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947089</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0002474590</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Wood, Kristi<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:00 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947088</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0002640316</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Farmer, Fernando<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:00 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947087</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0002630957</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Brooks, Angela<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 11:00 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947084</a></td>
                            <td>Payee ACH Account</td>
                            <td>New PayeeACHAccount - DD-BZ-sj202</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Hicks, Darin<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:53 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947083</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#20599, BUS-D  301, IUCOA, UGRD, Business Undergraduate, Finance BS Prep</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Lloyd, Alonzo<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:53 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947080</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0002355598</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Sanders, Crystal<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:50 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947078</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0002666658</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Martin, Raul<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:48 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947073</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0003327885</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Ryan, Clifford<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:44 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947072</a></td>
                            <td>SIS SR Add Course Document</td>
                            <td>Add Class#12563, SPEA-V  369, IUBLA, UGRD, University Div Pre-Media Schoo, Journalism BAJ</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">King, Roderick<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:43 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947071</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#33240, POLS-Y  405, IUBLA, UGRD, University Div Pre-Media Schoo, Journalism BAJ</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Dixon, Eric<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:43 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947070</a></td>
                            <td>SIS SR Add Course Document</td>
                            <td>Add Class#36247, SPH-W  147, IUBLA, UGRD, University Div Pre-CollArts&amp;Sc, Geological Sciences BA</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Maxwell, Archie<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:43 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947069</a></td>
                            <td>SIS SA Student Activities Organization Re Registration Document</td>
                            <td>SIS SA Student Activities Organization Re Registration Document - SIS SA Student Activities Organization R</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Carr, Florence<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:42 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947068</a></td>
                            <td>SIS SR Add Course Document</td>
                            <td>Add Class#6827, BUS-A  100, IUBLA, UGRD, University Div Pre-Business, Business BSB</td>
                            <td>DISAPPROVED</td>
                            <td ><a href="sxsxsx">Ortega, Alejandro<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:40 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947067</a></td>
                            <td>Graduate Admissions Application</td>
                            <td>Graduate Admissions Application - Aton, Eleanor T IU001512967 IUINA-NURS5</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Douglas, Beulah<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:40 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947066</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0002009542</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Houston, Jackie<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:40 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947065</a></td>
                            <td>KC Protocol</td>
                            <td>PI: Hansen, Michele J; Lead Unit: IN-UCOL; Protocol No: 1409227881; Protocol Type: Exempt; Submission Type: null</td>
                            <td>SAVED</td>
                            <td ><a href="sxsxsx">Osborne, Latoya<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:40 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947064</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0002843603</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Patton, Rodney<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:39 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947063</a></td>
                            <td>Graduate Admissions Application</td>
                            <td>Graduate Admissions Application - Padmanaban, V IU001508385 IUBLA-BUS5</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Yates, Leslie<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:38 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947060</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#32345, COLL-C  104, IUBLA, UGRD, Business Undergraduate, Finance BSB</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Banks, Rosalie<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:36 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947061</a></td>
                            <td>SIS SR Add Course Document</td>
                            <td>Add Class#16271, COLL-C  103, IUBLA, UGRD, Business Undergraduate, Finance BSB</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Vega, Juana<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:36 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947059</a></td>
                            <td>Rule Maintenance Document Type Document</td>
                            <td>Copy RuleBaseValues - CREATE 1912440-AITC FOR W/G#97</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Ross, Arlene<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:34 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947058</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0002910566</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Fuller, Erma<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:34 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947057</a></td>
                            <td>Rule Maintenance Document Type Document</td>
                            <td>Copy RuleBaseValues - CREATE 1912440-VMWAS FOR W/G #67</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Brewer, Otis<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:34 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947056</a></td>
                            <td>Rule Maintenance Document Type Document</td>
                            <td>Copy RuleBaseValues - CREATE 1912470-VMWAS FOR W/G #67</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Garcia, Joanna<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:32 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947055</a></td>
                            <td>(OVPRA) Office of the VP for Research Admin 2014-2015</td>
                            <td>Routing Document Type 'OVPRA.FinancialConflictDisclosure.2014'</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Fernandez, Kathleen<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:32 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947054</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0003225484</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Mack, Rebecca<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:32 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947053</a></td>
                            <td>Rule Maintenance Document Type Document</td>
                            <td>Copy RuleBaseValues - CREATE 6010109-PRACQ FOR W/G #31</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Pratt, Roxanne<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:32 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947052</a></td>
                            <td>Rule Maintenance Document Type Document</td>
                            <td>Copy RuleBaseValues - CREATE 6610115-PRACQ FOR WG #31</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Robbins, Dustin<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:31 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947051</a></td>
                            <td>Group</td>
                            <td>Group - UPDATE W/G</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Cox, Jessie<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:27 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947050</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#1526, PHIL-P  150, IUSEA, UGRD, Arts &amp; Letters Undergraduate, Pre-Philosophy BA</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Gray, Erik<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:26 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947049</a></td>
                            <td>Rule Maintenance Document Type Document</td>
                            <td>Copy RuleBaseValues - CREATE 2312400-PRACQ FOR W/G #31</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Allen, Michele<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:26 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947048</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0003234705</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Wagner, Frederick<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:25 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947047</a></td>
                            <td>SIS SR Add Course Document</td>
                            <td>Add Class#15319, EDUC-P  248, IUBLA, UGRD, University Div Pre-Education, Elem Education:TIP BSED (REPA)</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Curtis, Rufus<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:25 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947045</a></td>
                            <td>Rule Maintenance Document Type Document</td>
                            <td>Edit RuleBaseValues - UPDATE TO W/G #62</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Holt, Rafael<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:24 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947046</a></td>
                            <td>Travel Trip Authorization</td>
                            <td>Traveler: GARDNER, JASON   UnivID: 0003441224 Chart: IN Org: ATHL Account: 6091503</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Warner, Dianne<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:24 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947044</a></td>
                            <td>Rule Maintenance Document Type Document</td>
                            <td>Edit RuleBaseValues - UPDATE TO WG #123</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Washington, Sam<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:23 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947042</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0001912042</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Wood, Kristi<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:22 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947041</a></td>
                            <td>Travel Trip Authorization</td>
                            <td>Traveler: VAN DER LAAN, SARAH P   UnivID: 0002459594 Chart: BL Org: CMLT Account: 2225490</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Farmer, Fernando<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:22 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947040</a></td>
                            <td>SIS SR Add Course Document</td>
                            <td>Add Class#33021, HPSC-X  200, IUBLA, UGRD, University Div Pre-CollArts&amp;Sc, Geological Sciences BA</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Brooks, Angela<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:22 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947034</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#8868, SPH-I  197, IUBLA, UGRD, Arts &amp; Sciences Undergraduate, SPHS: Audiology&amp;Hearing Sci BS</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Hicks, Darin<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:21 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947033</a></td>
                            <td>Rule Maintenance Document Type Document</td>
                            <td>Copy RuleBaseValues - CREATE 1912455-SP11K FOR WG #158</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Lloyd, Alonzo<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:20 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947032</a></td>
                            <td>SIS SR Add Course Document</td>
                            <td>Add Class#16497, AFRI-L  100, IUBLA, UGRD, University Div Pre-CollArts&amp;Sc, Economics/Mathematics BA</td>
                            <td>DISAPPROVED</td>
                            <td ><a href="sxsxsx">Sanders, Crystal<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:20 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947031</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0002856395</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Washington, Sam<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:20 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947030</a></td>
                            <td>Rule Maintenance Document Type Document</td>
                            <td>Copy RuleBaseValues - CREATE 2312430-CTLTL FOR W/G #158</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Wood, Kristi<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:19 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947029</a></td>
                            <td>SIS SR Add Course Document</td>
                            <td>Add Class#18425, AFRI-L  400, IUBLA, UGRD, University Div Pre-CollArts&amp;Sc, Economics/Mathematics BA</td>
                            <td>DISAPPROVED</td>
                            <td ><a href="sxsxsx">Farmer, Fernando<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:19 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947028</a></td>
                            <td>Rule Maintenance Document Type Document</td>
                            <td>Copy RuleBaseValues - CREATE 2312430-SP11E FOR W/G #158</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Brooks, Angela<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:18 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947027</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#7676, ECON-E  361, IUBLA, UGRD, University Div Pre-CollArts&amp;Sc, Economics/Mathematics BA</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Hicks, Darin<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:18 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947026</a></td>
                            <td>Rule Maintenance Document Type Document</td>
                            <td>Copy RuleBaseValues - CREATE 2312482-SP11S FOR WG #158</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Lloyd, Alonzo<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:17 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947025</a></td>
                            <td>Rule Maintenance Document Type Document</td>
                            <td>Copy RuleBaseValues - CREATE 6010117-CFCLR FOR W/G #99</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Sanders, Crystal<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:16 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947024</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0001777549</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Martin, Raul<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:16 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947023</a></td>
                            <td>UGS-PhDCommencementApplication</td>
                            <td>Routing Document Type 'UGS-PhDCommencement.ParentDoctype'</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Ryan, Clifford<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:14 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947022</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#6070, SWK-S  141, IUNWA, UGRD, Arts &amp; Sciences Undergraduate, General Studies BGS</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">King, Roderick<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:14 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947021</a></td>
                            <td>Rule Maintenance Document Type Document</td>
                            <td>Copy RuleBaseValues - CREATE 1912440-QAV FOR W/G #173</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Dixon, Eric<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:14 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947020</a></td>
                            <td>EPTO Calendar</td>
                            <td>August,2014 Empl Name: Joseph Witten Network ID: wittenj Dept: SE-ATHL</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Maxwell, Archie<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:13 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947019</a></td>
                            <td>SIS SR Add Course Document</td>
                            <td>Add Class#35579, CJUS-P  306, IUBLA, UGRD, Arts &amp; Sciences Undergraduate, Biology BA</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Carr, Florence<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:12 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947018</a></td>
                            <td>SIS SR Drop Course Document</td>
                            <td>Drop Class#6817, BIOL-S  318, IUBLA, UGRD, Arts &amp; Sciences Undergraduate, Biology BA</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Ortega, Alejandro<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:12 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947016</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0003099354</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Pratt, Roxanne<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:10 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947015</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0002681358</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Robbins, Dustin<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:10 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947014</a></td>
                            <td>Graduate Admissions Application</td>
                            <td>Graduate Admissions Application - Michael, Logan IU001517024 IUBLA-OPT7</td>
                            <td>ENROUTE</td>
                            <td ><a href="sxsxsx">Cox, Jessie<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:09 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                        <tr>
                            <td class="uif-featured"><a href="#" target="_blank" title="">31947013</a></td>
                            <td>MissedPunchDocument</td>
                            <td>MissedPunchDocument - Missed Punch: 0001977403</td>
                            <td>FINAL</td>
                            <td ><a href="sxsxsx">Gray, Erik<span class="icon-info uif-inquiryLink"></span></a></td>
                            <td>09/22/2014 10:08 PM</td>
                            <td><a href="#" target="_blank" title="">View</a></td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </div>
    <!-- VIEW FOOTER -->
</form>
<!-- MODALS -->
<?php include ('includes/modal-actionlist-prefs.php') ?>
<?php include ('includes/modal-routelog.php') ?>
<?php include ('includes/modal-login.php') ?>
<?php include ('includes/modal-actionlist-details.php') ?>

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
<script type='text/javascript'>
    //<![CDATA[ 
    $(window).load(function() {
        /* The easiest way to add popovers to your HTML prototypes
           ========================================================================== */

        $('.popover-markup > .trigger').popover({
            html: true,
            title: function() {
                return $(this).parent().find('.head').html();
            },
            content: function() {
                return $(this).parent().find('.content').html();
            },
            container: 'body',
            placement: 'bottom'
        });

    }); //]]>
</script>
<script>
    $(".refineSearch").click(function() {
        $(".form-horizontal").slideToggle("slow");
    });


    $(".hideRefine").click(function() {
        $(".form-horizontal").slideUp("slow");
    });
</script>



<script type="text/javascript" class="init">
    $(document).ready(function() {
        $('table.uif-actionlist-current, table.uif-actionlist-completed').dataTable();
    });
</script>
</body>
</html>
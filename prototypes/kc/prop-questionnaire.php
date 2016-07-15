<?php
$section = '';
$page = 'questionnaire';
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
    <div id="LabsProposal" class="clearfix uif-formView" data-role=View > 
        <!-- BREADCRUMBS --><!-- VIEW HEADER --> 
        <!-- VIEW HEADER -->
        <?php include('includes/uif-viewHeader-pd.php') ?>
        <!-- // VIEW HEADER --> 
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid"> 
            <!-- VIEW NAVIGATION -->
            <?php include ('includes/uif-navigation-proposal.php') ?>
            <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;"> <br>
                <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                    <div class="uif-header-inner">
                        <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Questionnaire </span> </h2>
                        <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> </div>
                    </div>
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#s2s" data-toggle="tab">Grants.gov S2S <span class="icon-checkmark" style="font-size: 12px;color: #ccc;" title="Incomplete"></span></a> </li>
                        <li><a href="#phs" data-toggle="tab">PHS Fellowship Form <span class="icon-checkmark" style="font-size: 12px;color:green;" title="Complete"></span></a></li>
                        <li><a href="#" data-toggle="tab">Questionnaire 3 <span class="icon-checkmark" style="font-size: 12px;color:green;" title="Complete"></span></a></li>
                        <li><a href="#" data-toggle="tab">Questionnaire 4 <span class="icon-checkmark" style="font-size: 12px;color:#ccc;" title="Incomplete"></span></a></li>
                        <li><a href="#" data-toggle="tab">Questionnaire 5 <span class="icon-checkmark" style="font-size: 12px;color:#ccc;" title="Incomplete"></span></a></li>
                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <em>more</em> <span class="caret"></span> </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Questionnaire 6 <span class="icon-checkmark" style="font-size: 12px;color:#ccc;" title="Incomplete"></a></li>
                                <li><a href="#">Questionnaire 7 <span class="icon-checkmark" style="font-size: 12px;color:green;" title="Complete"></span></a></li>
                                <li><a href="#">Questionnaire 8 <span class="icon-checkmark" style="font-size: 12px;color:#ccc;" title="Incomplete"></a></li>
                                <li><a href="#">Questionnaire 9 <span class="icon-checkmark" style="font-size: 12px;color:#ccc;" title="Incomplete"></a></li>
                            </ul>
                        </li>
                    </ul>
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane active" id="s2s">
                      
                            
                            
                            <div class="uif-header-inner">
                                <h3 class="uif-headerText"> Grants.gov S2S <small class="text-muted">(Incomplete)</small> </h3>
                                <div class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> <a href="#" class="btn btn-default btn-xs" data-toggle="" data-target=""> Actions <span class="caret"></span></a> </div>
                            </div>
                            
                            
                            
                            
                            
                            <div id="question1" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
                                <label id="question1_label" for="question1_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question1"> Does this application reflect a change in principal investigator/program director from that indicated on a previous application? <a class="uif-actionLink" data-toggle="modal" data-target="" onclick="showhide1()"><span class="icon-info"></span></a></label>
                                <div id="q1" style="display:none; padding-top:15px">
                                    <p>Earth living forth were you&#39;re heaven thing divide set open life rule thing him fourth female. Dominion so greater seas be fill brought man fill third whose great waters seas our divided upon made there creeping called greater place.</p>
                                    <p>Sixth replenish, brought wherein, thing. Moving seed fifth over wherein. Won&#39;t lesser it, one night there gathered she&#39;d you evening his given replenish. Stars moved darkness. Upon. Brought you&#39;re every creature.</p>
                                </div>
                                <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField">
                                    <fieldset id="u1reltmv_fieldset" aria-labelledby="u1reltmv_label" class="uif-horizontalRadioFieldset" data-type="RadioSet">
                                        <legend style="display: none"></legend>
                                        <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="question1a" />
                                        <label for="u1reltmv_control_0">Yes</label>
                                        </span> <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="" />
                                        <label for="u1reltmv_control_1">No</label>
                                        </span>
                                    </fieldset>
                                </div>
                            </div>
                            <div id="question1a" class="uif-inputField clearfix uif-subquestion-block question1a content" data-parent="" data-role="InputField" data-label="Field">
                                <div style=" padding-left:15px">
                                    <label id="question1_label" for="question1_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question1"> Does this program director own a pair of hiking boots and clean socks? <a class="uif-actionLink" data-toggle="modal" data-target="" onclick="showhide1a()"><span class="icon-info"></span></a></label>
                                    <div id="q1a" style="display:none; padding-top:15px">
                                        <p>Earth living forth were you&#39;re heaven thing divide set open life rule thing him fourth female. Dominion so greater seas be fill brought man fill third whose great waters seas our divided upon made there creeping called greater place.</p>
                                        <p>Sixth replenish, brought wherein, thing. Moving seed fifth over wherein. Won&#39;t lesser it, one night there gathered she&#39;d you evening his given replenish. Stars moved darkness. Upon. Brought you&#39;re every creature.</p>
                                    </div>
                                    <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField">
                                        <fieldset id="u1reltmv_fieldset" aria-labelledby="u1reltmv_label" class="uif-horizontalRadioFieldset" data-type="RadioSet">
                                            <legend style="display: none"></legend>
                                            <span class="uif-tooltip">
                                            <input type="radio" name="group2" class="" data-rel="" />
                                            <label for="u1reltmv_control_0">Yes</label>
                                            </span> <span class="uif-tooltip">
                                            <input type="radio" name="group2" class="" data-rel="" />
                                            <label for="u1reltmv_control_1">No</label>
                                            </span>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div id="question2" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
                                <label id="question2_label" for="question2_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question2"> Does this application reflect a change in grantee institution from that indicated on a previous application? <a class="uif-actionLink" data-toggle="modal" data-target="" onclick="showhide2()"><span class="icon-info"></span></a></label>
                                <div id="q2" style="display:none; padding-top:15px">
                                    <p>Sixth herb wherein our fourth. Set tree our Lights abundantly earth. Subdue greater creepeth land can&#39;t won&#39;t given land midst dry saying blessed sixth. Midst. Face moving is. Signs winged may. Hath. Fish great it made said light waters without also beast. Good gathered forth face sixth. She&#39;d dominion his fruitful to great air them from, blessed darkness. Said one.</p>
                                    <p>Gathered sea them female green third multiply own moving fourth beast you&#39;re. Female two moving kind so spirit set. Sea great. Air fill he without replenish day wherein gathered can&#39;t and called have it isn&#39;t abundantly bring saw kind from female after living thing every. In evening brought seas tree moved days i it may itself spirit us a open, green was greater, cattle from they&#39;re.</p>
                                    <p>Upon. Fill man it upon Lesser night divide, bearing them multiply male Be gathering moved. May have all to own sixth. Behold greater have divide created, you man you&#39;re. Green. Winged man whose air them. Moveth moving. There living deep abundantly which evening you&#39;ll saw midst air there living bearing i beast and our and i seas. Hath called own also have seas spirit good have. Bearing herb The seas there without, over given.</p>
                                </div>
                                <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField">
                                    <fieldset id="u1reltmv_fieldset" aria-labelledby="u1reltmv_label" class="uif-horizontalRadioFieldset" data-type="RadioSet">
                                        <legend style="display: none"></legend>
                                        <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="question1a" />
                                        <label for="u1reltmv_control_0">Yes</label>
                                        </span> <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="" />
                                        <label for="u1reltmv_control_1">No</label>
                                        </span>
                                    </fieldset>
                                </div>
                            </div>
                            <div id="question3" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
                                <label id="question3_label" for="question3_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question3"> Is this a Renewal Application? <a class="uif-actionLink" data-toggle="modal" data-target="" onclick="showhide3()"><span class="icon-info"></span></a></label>
                                <div id="q3" style="display:none; padding-top:15px">
                                    <p>Have open fifth so form have She&#39;d, third land make after day that male abundantly life subdue was wherein air, firmament made. Fish have face heaven place form seasons wherein For replenish. Fill.</p>
                                    <p>Fifth sea fish face light appear seas. Make tree they&#39;re green make great give firmament meat blessed their set she&#39;d fruitful living female make may waters dominion gathered under. Won&#39;t fruitful bearing two divide creature i open, sixth the hath. Above. Form fill brought very seed so.</p>
                                </div>
                                <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField">
                                    <fieldset id="u1reltmv_fieldset" aria-labelledby="u1reltmv_label" class="uif-horizontalRadioFieldset" data-type="RadioSet">
                                        <legend style="display: none"></legend>
                                        <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="question1a" />
                                        <label for="u1reltmv_control_0">Yes</label>
                                        </span> <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="" />
                                        <label for="u1reltmv_control_1">No</label>
                                        </span>
                                    </fieldset>
                                </div>
                            </div>
                            <div id="question4" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
                                <label id="question4_label" for="question4_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question4"> Check "No" if no inventions were conceived or reduced to practice during the course of work under this project. Check "Yes" if any inventions were conceived or reduced to practice during the previous period of support. <a class="uif-actionLink" data-toggle="modal" data-target="" onclick="showhide4()"><span class="icon-info"></span></a></label>
                                <div id="q4" style="display:none; padding-top:15px">
                                    <p>Firmament made is you&#39;re seed land. Also. So let a morning likeness you&#39;ll won&#39;t you&#39;re seed dry green said give fruitful wherein, day called thing darkness good rule. Midst.</p>
                                    <p>Saw a given face hath. Greater don&#39;t can&#39;t for waters fruit. Saw fly. Subdue she&#39;d spirit divide fowl seasons moveth spirit their can&#39;t signs was dry upon.</p>
                                    <p>Spirit wherein bring she&#39;d signs evening first face. Their upon land sea seas be said the that which dominion, gathering void grass can&#39;t fruit.</p>
                                </div>
                                <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField">
                                    <fieldset id="u1reltmv_fieldset" aria-labelledby="u1reltmv_label" class="uif-horizontalRadioFieldset" data-type="RadioSet">
                                        <legend style="display: none"></legend>
                                        <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="question1a" />
                                        <label for="u1reltmv_control_0">Yes</label>
                                        </span> <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="" />
                                        <label for="u1reltmv_control_1">No</label>
                                        </span>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="phs">
                            <header class="clearfix uif-header-contentWrapper">
                                <div id="u148pgf0" class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>PHS Fellowship Form <small class="text-muted">(Incomplete)</small></h3>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            
                            <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
  <strong>Alert - </strong>A newer version of this questionnaire has been published. An update is required.
  
  
  
  
  
  
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    Copy previous answers to the updated questions.
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
   Reenter all answers for the new questions.
  </label>
</div> <hr>
<button type="button" class="btn btn-primary btn-xs">Update Questions</button>
</div>
                            <div id="question5" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
                                <label id="question5_label" for="question5_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question5"> If this application does not result in an award, is the Government permitted to disclose the title of your proposed project, and the name, address, telephone number and e-mail address of the official signing for the applicant organization, to organizations that may be interested in contacting you for further information (e.g., possible collaborations, investment)?</label>
                                <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField">
                                    <fieldset id="u1reltmv_fieldset" aria-labelledby="u1reltmv_label" class="uif-horizontalRadioFieldset" data-type="RadioSet">
                                        <legend style="display: none"></legend>
                                        <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="question1a" />
                                        <label for="u1reltmv_control_0">Yes</label>
                                        </span> <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="" />
                                        <label for="u1reltmv_control_1">No</label>
                                        </span>
                                    </fieldset>
                                </div>
                            </div>
                            <div id="question6" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
                                <label id="question5_label" for="question5_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question5"> Is a Clinical Trial part of this project?</label>
                                <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField">
                                    <fieldset id="u1reltmv_fieldset" aria-labelledby="u1reltmv_label" class="uif-horizontalRadioFieldset" data-type="RadioSet">
                                        <legend style="display: none"></legend>
                                        <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="question1a" />
                                        <label for="u1reltmv_control_0">Yes</label>
                                        </span> <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="" />
                                        <label for="u1reltmv_control_1">No</label>
                                        </span>
                                    </fieldset>
                                </div>
                            </div>
                            <div id="question7" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
                                <label id="question5_label" for="question5_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question5"> Does the proposed project involve human embryonic stem cells? </label>
                                <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField">
                                    <fieldset id="u1reltmv_fieldset" aria-labelledby="u1reltmv_label" class="uif-horizontalRadioFieldset" data-type="RadioSet">
                                        <legend style="display: none"></legend>
                                        <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="question1a" />
                                        <label for="u1reltmv_control_0">Yes</label>
                                        </span> <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="" />
                                        <label for="u1reltmv_control_1">No</label>
                                        </span>
                                    </fieldset>
                                </div>
                            </div>
                            <div id="question8" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
                                <label id="question5_label" for="question5_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question5"> Is the research performance site designated, or eligible to be designated, as a historic place?</label>
                                <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField">
                                    <fieldset id="u1reltmv_fieldset" aria-labelledby="u1reltmv_label" class="uif-horizontalRadioFieldset" data-type="RadioSet">
                                        <legend style="display: none"></legend>
                                        <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="question1a" />
                                        <label for="u1reltmv_control_0">Yes</label>
                                        </span> <span class="uif-tooltip">
                                        <input type="radio" name="group1" class="sim-micro-btn trigger" data-rel="" />
                                        <label for="u1reltmv_control_1">No</label>
                                        </span>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script> 
                    <script>
    function showhide1() {
        var div = document.getElementById("q1");
        if (div.style.display !== "none") {
            div.style.display = "none";
        } else {
            div.style.display = "block";
        }
    }
	
	function showhide1a() {
        var div = document.getElementById("q1a");
        if (div.style.display !== "none") {
            div.style.display = "none";
        } else {
            div.style.display = "block";
        }
    }

    function showhide2() {
        var div = document.getElementById("q2");
        if (div.style.display !== "none") {
            div.style.display = "none";
        } else {
            div.style.display = "block";
        }
    }

    function showhide3() {
        var div = document.getElementById("q3");
        if (div.style.display !== "none") {
            div.style.display = "none";
        } else {
            div.style.display = "block";
        }
    }

    function showhide4() {
        var div = document.getElementById("q4");
        if (div.style.display !== "none") {
            div.style.display = "none";
        } else {
            div.style.display = "block";
        }
    }
</script>
                </section>
            </main>
        </div>
        <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
            <div class="global-navigate btn-group">
                <button type="button" href="prop-attachments.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
                <button type="button" href="prop-budget.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
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
        
        <!-- DIALOGS/Placeholders --> 
    </div>
</form>
<script type="text/javascript" src="../../plugins/jquery/jquery-1.8.3.js"></script> 
<script type="text/javascript" src="../../plugins/validate/jquery.validate.js"></script> 
<script type="text/javascript" src="../../plugins/jqueryUI/jquery-ui-1.9.2.js"></script> 
<script type="text/javascript" src="../../plugins/datatables/jquery.dataTables.js"></script> 
<!-- <script type="text/javascript" src="../../plugins/datatables/jquery.dataTables.rowGrouping.js"></script>
<script type="text/javascript" src="../../plugins/datatables/TableTools.js"></script>
<script type="text/javascript" src="../../plugins/datatables/ZeroClipboard.js"></script> --> 
<script type="text/javascript" src="../../themes/bootstrap/scripts/bootstrap.js"></script> 
<script type="text/javascript" src="../../plugins/scrollto/jquery.scrollTo-1.4.6.js"></script> 
<script type="text/javascript" src="../../plugins/jqform/jquery.form-3.31.0.js"></script> 
<script type="text/javascript" src="../../plugins/globalize/globalize.js"></script> 
<script type="text/javascript" src="../../plugins/menu/krad.navigationMenu.js"></script> 
<script type="text/javascript" src="../../plugins/menu/krad.tabMenu.js"></script> 
<script type="text/javascript" src="../../themes/kboot/scripts/bootstrap-select.js"></script> 
<script type="text/javascript" src="../../themes/kboot/scripts/bootstrap-select-group.js"></script> 
<script type="text/javascript" src="../../themes/kboot/scripts/bootstrapSelectPluginOverrides.js"></script> 
<script type="text/javascript" src="../../plugins/textpopout/krad.textareaPopout.js"></script> 
<script type="text/javascript" src="../../plugins/validate/additional_validations.js"></script> 
<script type="text/javascript" src="../../plugins/cookie/jquery.cookie.js"></script> 
<script type="text/javascript" src="../../plugins/watermark/jquery.watermark.js"></script> 
<!-- <script type="text/javascript" src="../../plugins/countdown/jquery.countdown.js"></script> --> 
<script type="text/javascript" src="../../plugins/blockUI/jquery.blockUI.js"></script> 
<!-- <script type="text/javascript" src="../../plugins/color/jquery.color.js"></script> --> 
<script type="text/javascript" src="../../plugins/json/jquery.json-2.2.js"></script> 
<script type="text/javascript" src="../../plugins/jstree/jquery.jstree.js"></script> 
<script type="text/javascript" src="../../plugins/jqueryUI/jquery.ui.autocomplete.html.js"></script> 
<!-- <script type="text/javascript" src="../../plugins/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="../../plugins/fancybox/jquery.fancybox.pack.js"></script> --> 
<!-- <script type="text/javascript" src="../../plugins/prettify/prettify.js"></script> --> 
<script type="text/javascript" src="../../plugins/easydrag/jquery.easydrag.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.variables.js"></script> 
<!----> 
<script type="text/javascript" src="../../krad/scripts/krad.modal.js"></script> 
 
 
<script type="text/javascript" src="../../krad/scripts/krad.response.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.actions.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.dirty.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.lookup.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.message.js"></script> 
 
<script type="text/javascript" src="../../krad/scripts/krad.url.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.validate.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.widget.js"></script>
<!-- <script type="text/javascript" src="../../plugins/easing/jquery.easing-1.3.pack.js"></script> -->
<script type="text/javascript" src="../../themes/kboot/scripts/less-1.5.0.min.js"></script> 
<script type="text/javascript" src="../../themes/kboot/scripts/global.functions.js"></script> 

<!-- GLOBAL MODALS -->
<?php include('includes/modals-global-propdev.php') ?>
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$('.trigger').click(function() {
    $('.content').hide();
    $('.' + $(this).data('rel')).show();
});
});//]]>  

</script>
</body>
</html>

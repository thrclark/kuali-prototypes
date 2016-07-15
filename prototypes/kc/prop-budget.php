<?php
    $page = 'budgets';
    $section = 'budgets';
    ?><!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex,nofollow" />
        <title>Kuali :: Fluid Application Header</title>
        <!-- GLOBAL STYLES --><?php include ('includes/styles.php') ?>
    </head>
    <body id="Uif-Application">
        <!-- APPLICATION HEADER --><?php include('includes/uif-applicationHeader.php') ?>
        <form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
            <!-- VIEW -->
            <div id="LabsProposal" class="clearfix uif-formView" data-role="View">
            <!-- BREADCRUMBS --><?php include ('includes/uif-viewHeader-pd.php') ?><!-- // VIEW HEADER  --><!-- VIEW CONTENT -->
            <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid">
                <!-- VIEW NAVIGATION --><?php include ('includes/uif-navigation-proposal.php') ?>
                <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
                    <div class="uif-header-inner">
                        <h2 id="" class="uif-headerText"><span class="uif-headerText-span"> Budgets </span></h2>
                        <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""><a href="" data-toggle="modal" data-target="#createNew" class="btn btn-default btn-xs pull-right"> <span aria-hidden="true" class="icon-plus"></span> Create New</a></div>
                    </div>
                    <p class="pull-left ">The following budgets are linked to this proposal.</p>
                    <section id="u11ymttz_line0" class="uif-gridSubSection" data-parent="u10i8ym5_line0">
                        <!-- BUDGET VERSIONS -->
                        <table class="table table-condensed table-bordered uif-has-actions clearfix">
                            <tbody>
                                <tr>
                                    <th>Submit</th>
                                    <th scope="row">Name</th>
                                    <th class="uif-gridLayoutCell">Direct Cost</th>
                                    <th class="uif-gridLayoutCell">F&amp;A</th>
                                    <th class="uif-gridLayoutCell">Total</th>
                                    <th class="uif-gridLayoutCell">Start</th>
                                    <th class="uif-gridLayoutCell">End</th>
                                    <th class="uif-gridLayoutCell">Status</th>
                                    <th class="uif-gridLayoutCell">Comments</th>
                                    <th class="uif-gridLayoutCell"><span class="sr-only">Actions</span></th>
                                </tr>
                                <tr>
                                    <td scope="row"><label aria-label="Test Budget"><input type="radio" value="radio1" name="version-list" id="radio-version-1"> </label></td>
                                    <td scope="row"><a href="" data-toggle="modal" data-target="#switchdoc" class="versions">Test Budget</a> <small>(for submission)</small></td>
                                    <td class="">22,835.00</td>
                                    <td class="">6,170.00</td>
                                    <td class="">29,005.00</td>
                                    <td class="">02/22/12</td>
                                    <td class="">03/23/13</td>
                                    <td class="">Complete</td>
                                    <td class="">Smiling hence besides emoted the the a patted far daintily in nutria far instead salient some harsh much nudged guinea hey raging sensationally due where revealed one.</td>
                                    <td class="">
                                        <!-- Single button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a id="uotglr8" class="uif-actionLink" data-toggle="modal" data-target="#summary"><span aria-hidden="true" class="icon-eye-open"></span> View Summary</a></li>
                                                <li><a href="" data-toggle="modal" data-target="#copyNew" class=""><span aria-hidden="true" class="icon-copy"></span> Copy</a></li>
                                                <li><a href="#"><span aria-hidden="true" class="icon-print"></span> Print</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><span aria-hidden="true" class="icon-ok"></span> Submit with Proposal</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="success">
                                    <td scope="row"><label aria-label="Final 1"><input type="radio" value="radio2" name="version-list" id="radio-version-2" checked> </label></td>
                                    <td scope="row"><a href="" data-toggle="modal" data-target="#switchdoc" class="versions">Final 1</a> <small>(for submission)</small></td>
                                    <td class="">22,835.00</td>
                                    <td class="">6,170.00</td>
                                    <td class="">29,005.00</td>
                                    <td class="">02/22/12</td>
                                    <td class="">03/23/13</td>
                                    <td class="">Complete</td>
                                    <td class="">Excepting rebelliously yikes a wanton more dropped snapped grimaced much oh stark overheard spoiled jeepers far far far scooped smirked stiffly one some seal up other forward.</td>
                                    <td class="">
                                        <!-- Single button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a id="uotglr8" class="uif-actionLink" data-toggle="modal" data-target="#summary"><span aria-hidden="true" class="icon-eye-open"></span> View Summary</a></li>
                                                <li><a href="" data-toggle="modal" data-target="#copyNew" class=""><span aria-hidden="true" class="icon-copy"></span> Copy</a></li>
                                                <li><a href="#"><span aria-hidden="true" class="icon-print"></span> Print</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><span aria-hidden="true" class="icon-ok"></span> Submit with Proposal</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row"><label aria-label="Sandbox 2"><input type="radio" value="radio3" name="version-list" id="radio-version-3"> </label></td>
                                    <td scope="row"><a href="" data-toggle="modal" data-target="#switchdoc" class="versions">Sandbox 2</a> <small>(for submission)</small></td>
                                    <td class="">22,835.00</td>
                                    <td class="">6,170.00</td>
                                    <td class="">29,005.00</td>
                                    <td class="">02/22/12</td>
                                    <td class="">03/23/13</td>
                                    <td class="">Incomplete</td>
                                    <td class="">Merrily in ruthlessly disagreed histrionic coasted like the after cowered some staunchly near versus solicitously the dachshund darn humorously thanks goldfinch magnificent rapidly however in coward foretold.</td>
                                    <td class="">
                                        <!-- Single button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a id="uotglr8" class="uif-actionLink" data-toggle="modal" data-target="#summary"><span aria-hidden="true" class="icon-eye-open"></span> View Summary</a></li>
                                                <li><a href="" data-toggle="modal" data-target="#copyNew" class=""><span aria-hidden="true" class="icon-copy"></span> Copy</a></li>
                                                <li><a href="#"><span aria-hidden="true" class="icon-print"></span> Print</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><span aria-hidden="true" class="icon-ok"></span> Submit with Proposal</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row"><label aria-label="Modified Budget"><input type="radio" value="radio4" name="version-list" id="radio-version-4"> </label></td>
                                    <td scope="row"><a href="" data-toggle="modal" data-target="#switchdoc" class="versions">Modified Budget</a> <small>(for submission)</small></td>
                                    <td class="">22,835.00</td>
                                    <td class="">6,170.00</td>
                                    <td class="">29,005.00</td>
                                    <td class="">02/22/12</td>
                                    <td class="">03/23/13</td>
                                    <td class="">Complete</td>
                                    <td class="">Until blessed however therefore well crud much that when more at that jeez far some sped knelt improper purred glaring untiring crud mislaid beside darn thus.</td>
                                    <td class="">
                                        <!-- Single button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a id="uotglr8" class="uif-actionLink" data-toggle="modal" data-target="#summary"><span aria-hidden="true" class="icon-eye-open"></span> View Summary</a></li>
                                                <li><a href="" data-toggle="modal" data-target="#copyNew" class=""><span aria-hidden="true" class="icon-copy"></span> Copy</a></li>
                                                <li><a href="#"><span aria-hidden="true" class="icon-print"></span> Print</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><span aria-hidden="true" class="icon-ok"></span> Submit with Proposal</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row"><label aria-label="NONE"><input type="radio" value="radio" name="version-list" id="radio-version-5"> </label></td>
                                    <td scope="row" colspan="9" class="versions">NONE <small>(for submission)</small></td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- //BUDGET VERSIONS --><!-- Modal -->
                        <div class="modal fade" id="copyNew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Copy this Budget Version</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Parent Proposal</label>
                                                <div class="col-sm-9">
                                                    <p class="form-control-static">#23533</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-3 control-label">Budget Name</label>
                                                <div class="col-sm-9"><input type=" text" class="form-control" id="" placeholder=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button><button type="button" class="btn btn-primary " data-toggle="">Copy</button></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Modal --><!-- Modal -->
                        <div class="modal fade" id="openBudget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Open Budget Version</h4>
                                    </div>
                                    <div class="modal-body">You are about to leave this document to work on a budget document.</div>
                                    <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button><a href="budget-periods.php" class="btn btn-primary " data-toggle=""> Open Budget </a></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Modal -->
                    </section>
                    <!-- // radio --><!-- Modal -->
                    <div class="modal fade" id="copyNew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Copy this Budget Version</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-3 control-label">Parent Proposal</label>
                                            <div class="col-sm-9">
                                                <p class="form-control-static">#23533</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-sm-3 control-label">Budget Name</label>
                                            <div class="col-sm-9"><input type=" text" class="form-control" id="" placeholder=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button><button type="button" class="btn btn-primary " data-toggle="">Copy</button></div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal --><!-- Modal -->
                    <div class="modal fade" id="openBudget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Open Budget Version</h4>
                                </div>
                                <div class="modal-body">You are about to leave this document to work on a budget document.</div>
                                <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button><a href="budget-periods.php" class="btn btn-primary " data-toggle=""> Open Budget </a></div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal --></section>
                </main>
            </div>
            <!-- VIEW FOOTER -->
            <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
                <div class="global-navigate btn-group"><button type="button" href="prop-questionnaire.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button><button type="button" href="prop-supplimental.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button></div>
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
                    </div>-->
                <div class="global-actions btn-group"><button type="button" id="" class="btn btn-default">Save</button><button type="button" id="" class="btn btn-default">Close</button><button type="button" id="" class="btn btn-default" data-toggle="modal" data-target="#globalaction-submit">Submit</button><button type="button" id="" class="btn btn-default" data-toggle="modal" data-target="#globalaction-cancel">Cancel</button></div>
            </div>
        </form>
        <!-- scripts --><script type="text/javascript" src="../../plugins/jquery/jquery-1.8.3.js"></script><script type="text/javascript" src="../../plugins/validate/jquery.validate.js"></script><script type="text/javascript" src="../../plugins/jqueryUI/jquery-ui-1.9.2.js"></script><script type="text/javascript" src="../../plugins/datatables/jquery.dataTables.js"></script><script type="text/javascript" src="../../themes/bootstrap/scripts/bootstrap.js"></script><script type="text/javascript" src="../../plugins/scrollto/jquery.scrollTo-1.4.6.js"></script><script type="text/javascript" src="../../plugins/jqform/jquery.form-3.31.0.js"></script><script type="text/javascript" src="../../plugins/globalize/globalize.js"></script><script type="text/javascript" src="../../plugins/menu/krad.navigationMenu.js"></script><script type="text/javascript" src="../../plugins/menu/krad.tabMenu.js"></script><!--
            <script type="text/javascript" src="../../plugins/jgrowl/jquery.jgrowl.js"></script>
            --><script type="text/javascript" src="../../plugins/textpopout/krad.textareaPopout.js"></script><script type="text/javascript" src="../../plugins/validate/additional_validations.js"></script><script type="text/javascript" src="../../plugins/cookie/jquery.cookie.js"></script><script type="text/javascript" src="../../plugins/watermark/jquery.watermark.js"></script><script type="text/javascript" src="../../plugins/countdown/jquery.countdown.js"></script><script type="text/javascript" src="../../plugins/blockUI/jquery.blockUI.js"></script><script type="text/javascript" src="../../plugins/color/jquery.color.js"></script><script type="text/javascript" src="../../plugins/json/jquery.json-2.2.js"></script><script type="text/javascript" src="../../plugins/datatables/jquery.dataTables.rowGrouping.js"></script><script type="text/javascript" src="../../plugins/datatables/TableTools.js"></script><script type="text/javascript" src="../../plugins/datatables/ZeroClipboard.js"></script><!-- <script type="text/javascript" src="../../plugins/jstree/jquery.jstree.js"></script>
            <script type="text/javascript" src="../../plugins/jqueryUI/jquery.ui.autocomplete.html.js"></script> --- --> 
        <script type="text/javascript" src="../../plugins/fancybox/jquery.fancybox.js"></script> 
        <script type="text/javascript" src="../../plugins/fancybox/jquery.fancybox.pack.js"></script> 
        <script type="text/javascript" src="../../plugins/prettify/prettify.js"></script> 
        <script type="text/javascript" src="../../plugins/easydrag/jquery.easydrag.js"></script> 
        <script type="text/javascript" src="../../krad/scripts/krad.variables.js"></script> 
        <!--
            <script type="text/javascript" src="../../krad/scripts/krad.response.js"></script><script type="text/javascript" src="../../krad/scripts/krad.actions.js"></script><script type="text/javascript" src="../../krad/scripts/krad.dirty.js"></script><script type="text/javascript" src="../../krad/scripts/krad.lookup.js"></script><script type="text/javascript" src="../../krad/scripts/krad.message.js"></script>--><script type="text/javascript" src="../../krad/scripts/krad.url.js"></script><script type="text/javascript" src="../../krad/scripts/krad.validate.js"></script><script type="text/javascript" src="../../plugins/easing/jquery.easing-1.3.pack.js"></script><script type="text/javascript" src="../../themes/kboot/scripts/less-1.5.0.min.js"></script><script type="text/javascript" src="../scripts/kradSampleApp.js"></script><script type="text/javascript">
            //    setGrowlDefaults({position:"top-right",sticky:false,life:7000});setBlockUIDefaults({fadeIn:400,fadeOut:800,centerX:true,centerY:true,blockingImage:"../krad/images/loading.gif"}, 'navigation');setBlockUIDefaults({fadeIn:400,fadeOut:800,centerX:true,centerY:true,blockingImage:"../krad/images/loader.gif"}, 'refresh');setConfigParam("kradImageLocation","../krad/images/");setConfigParam("kradUrl","../kr-krad");setConfigParam("applicationUrl","http://localhost:8080/krad-dev");setConfigParam("scriptCleanup","true");
        </script><script type="text/javascript" src="../../themes/kboot/scripts/global.functions.js"></script>
        <style type="text/css">
            small{display:none;}
            .success small { display:inline;}
        </style>
        <script>
            (function($){
                var $radioButtons = $('input[type="radio"]');
                $radioButtons.click(function() {
                 $("tr").removeClass("success");
                  $(this).parent().parent().parent().addClass("success");
                });
            }(jQuery))
        </script><!-- // end scripts --><?php include('includes/modals-global-propdev.php') ?><!-- MODAL  budget summary --><?php include('includes/modals-budget/summary.php') ?><!-- end Modal --><!-- MODAL BUDGET VERSIONS --><?php include('includes/modals-prop/toolbar-switch.php') ?><?php include('includes/modals-budget/versions.php') ?><!-- MODAL BUDGET CREATE --><?php include('includes/modals-budget/createnew.php') ?>
    </body>
</html>
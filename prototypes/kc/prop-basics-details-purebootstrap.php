<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow"/>
    <title>Kuali :: Fluid Application Header</title>
    <link href="../../plugins/jqueryUI/jquery-ui-1.9.2.css" rel="stylesheet" type="text/css"/>
    <link href="../../themes/kboot/stylesheets/kboot.less" rel="stylesheet/less" type="text/css"/>
    <link href="../../plugins/menu/tabs.css" rel="stylesheet" type="text/css"/>
    <link href="../../plugins/jgrowl/jquery.jgrowl.css" rel="stylesheet" type="text/css"/>
    <link href="../../plugins/textpopout/popoutTextarea.css" rel="stylesheet" type="text/css"/>
    <link href="../../plugins/datatables/TableTools.css" rel="stylesheet" type="text/css"/>
    <link href="../../plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <link href="../../plugins/prettify/prettify.css" rel="stylesheet" type="text/css"/>
    
    <link href="../../themes/kboot/stylesheets/bootstrap-select.css" rel="stylesheet" />
    <link href="../../themes/kboot/stylesheets/bootstrap-multiselect.css" rel="stylesheet" />
    <style type="text/css">
        .uif-proposal-return-button {
            text-align: left;
            float: left;
            margin: 16px 0 16px 13px;
            width: 50%;
        }
        .uif-menuNavigationGroup.sidebar-collapsed .uif-proposal-return-button {
            position: absolute;
            left: -9999em;
        }
        td input[type="text"], td .uif-textAreaControl{ width:100%;}

        .alert-review{padding:1px 5px;border1px solid #e8e892;margin-right:3px;}
        .bg-white {
            background-color: #fff;
        }
        .uif-has-actions td:last-of-type, .uif-has-actions th:last-of-type li{text-align: left;}
        .bottom-buffer{margin-bottom:5em;}
        a[data-role="disclosureLink"]  .icon-caret-right{display:none;}
        a[data-role="disclosureLink"].collapsed .icon-caret-down {display:none;}
        a[data-role="disclosureLink"].collapsed .icon-caret-right{display:inline; }
        section.uif-disclosure .uif-headerText .uif-headerText-span [class*="icon-caret-"]{margin-right:5px;padding:6px 5px 10px 12px;}
        .modal-content #Uif-BreadcrumbWrapper { margin-bottom:15px}
        .uif-question-block {
            border-bottom: 1px solid #eeeeee;
            margin-bottom: 15px;
        }
        .uif-subquestion-block {
            display: none;
            margin-left: 50px;
            border-left: 1px solid #eeeeee;
            border-bottom: 1px solid #eeeeee;
            margin-bottom: 15px;
        }
        .kc-data-override {
            position: absolute;
            right: -15px;
            top: 7px;
        }
    </style>
</head>
<body id="Uif-Application">
<header id="Uif-ApplicationHeader-Wrapper" data-sticky="true" class="uif-sticky">
    <div class="uif-applicationHeader">
        <div class="container">
            <nav class="navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-reorder"></span></button>
                    <a class="navbar-brand" href="#">
                        <div class="logoBrand">
                            <h1><span class="sr-only">Kuali Coeus</span><img src="img/logo-kc.png" alt="Kuali Coeus" class="uif-image"></h1>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse uif-listGroup">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown uif-panel">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Researcher</a>
                            <ul class="dropdown-menu uif-panel-menu row">
                                <li class="col-sm-4">
                                    <h4 class="dropdown-header">Proposals</h4>
                                    <ul>
                                        <li> <a href="prop-start.php" title="Create Proposal">Create Proposal</a> </li>
                                        <li> <a href="#" title="Proposals Enroute">Proposals Enroute</a> </li>
                                        <li> <a href="#" title="All My Proposals">All My Proposals</a> </li>
                                        <li> <a href="#" title="Create Proposal For Grants.gov Opportunity">Create Proposal For Grants.gov Opportunity</a> </li>
                                        <li class="divider"></li>
                                    </ul>
                                    <h4 class="dropdown-header">Awards</h4>
                                    <ul>
                                        <li><a href="#">Awards in Progress</a></li>
                                        <li> <a href="#" title="All my Awards">All my Awards</a> </li>
                                        <li class="divider"></li>
                                    </ul>
                                    <h4 class="dropdown-header">Negotiations</h4>
                                    <ul>
                                        <li><a href="#">All my Negotiations</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-4">
                                    <h4 class="dropdown-header">Conflict of Interest</h4>
                                    <ul class="chan">
                                     <li> <a href="/krad-dev/prototypes/kc/coi-my-disclosures.php" title="My Disclosures">All My Disclosures</a> </li>
                                        <li><a href="/krad-dev/prototypes/kc/coi-screening-questions.php" title="Screeing Questions">Screening Questionnaire</a></li>
                                        <li><a href="/krad-dev/prototypes/kc/coi-financial-entities.php" title="Create New Financial Entity" >Financial Entities</a></li>
                                        <li><a href="/krad-dev/prototypes/kc/coi-certification.php" title="Certifications">Certification</a></li>
                                        <li><a href="/krad-dev/prototypes/kc/coi-relationships.php" title="Event Variations">Relationships (Event variation)</a></li>
                                        <li><a href="/krad-dev/prototypes/kc/coi-admin-disclosure-list.php" title="Admin, disclosure list">Admin -Disclosure List</a></li>
                                        <li><a href="/krad-dev/prototypes/kc/coi-admin-disclosure-review-project.php"  title="Admin, disclosure list by project">Admin - Disclosure Review by Project</a></li>
                                        <li><a href="/krad-dev/prototypes/kc/coi-admin-disclosure-review-financial-entity.php"  title="Admin, disclosure by financial entity">Admin - Disclosure Review by Financial Entity</a></li> 
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-4">
                                    <h4 class="dropdown-header">Quicklinks</h4>
                                    <ul class="chan">
                                        <li> <a href="#" title="Kc Pessimistic Lock">Kc Pessimistic Lock</a> </li>
                                        <li> <a href="#" title="Grants.gov Opportunity Lookup">Grants.gov Opportunity Lookup</a> </li>
                                        <li> <a href="#" title="Reporting">Reporting</a> </li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown uif-panel"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Unit</a>
                            <ul class="dropdown-menu uif-panel-menu row">
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown uif-panel"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Central Admin</a>
                            <ul class="dropdown-menu uif-panel-menu row">
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown uif-panel"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Maintenance</a>
                            <ul class="dropdown-menu uif-panel-menu row">
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown uif-panel"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">System Admin</a>
                            <ul class="dropdown-menu uif-panel-menu row">
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <h4 class="dropdown-header">Header</h4>
                                    <ul>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li><a href="#">Navigate</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <nav class="navbar navbar-default toolbar" role="navigation" style="min-height:inherit; z-index:0">
            <div class="container" >
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="docsearch.php" class="" data-toggle="">Doc Search</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Action List <span class="badge badge-danger" style="">12</span></a>
                            <ul class="dropdown-menu uif-listLayout">
                                <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action">DocID 8345; Complete</a></li>
                                <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action">DocID 6234; Complete</a></li>
                                <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action">DocID 2346, FYI</a></li>
                                <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action">DocID 9935; Complete</a></li>
                                <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action">DocID 2364, FYI</a></li>
                                <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action">DocID 2341, FYI</a></li>
                                <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action">DocID 2155; Complete</a></li>
                                <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action">DocID 2211; Complete</a></li>
                                <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action">DocID 3457, FYI</a></li>
                                <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action">DocID 3373; Complete</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="actionlist.php" class="uif-actionLink" tabindex="0" data-role="" data-toggle="" data-target="" data-submit_data="">View Full List</a></li>
                            </ul>
                        </li>
                        <li class="uif-backdoor-login">
                            <form class="navbar-form navbar-right" role="search" >
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Backdoor User">
                                    <span class="input-group-btn"><button class="btn btn-default" type="button">Login</button></span>
                                </div>
                            </form>
                        </li>
                        <li><a class="uif-actionLink" tabindex="0" data-role="Action" data-toggle="modal" data-target="#login" data-submit_data="" data-dismiss="modal">Logout: thrclark</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View">
        <header class="container uif-viewHeader-contentWrapper">
            <div class="uif-viewHeader col-md-12" data-header_for="LabsProposal">
                <div class="col-md-9">
                    <h1 class="uif-headerText">
                        <span class="uif-viewHeader-areaTitle">Proposal Development</span><br />
                        <span class="uif-headerText-span">Proposal: #23533</span>
                        <span class="uif-supportTitle-wrapper uif-viewHeader-supportTitle">PI:&nbsp; Edward Haskell</span>
                    </h1>
                </div>
                <div class="col-md-3">
                    <div class="uif-verticalBoxGroup" data-parent="LabsProposal">
                        <dl style="margin-bottom: 0;">
                            <dt style="text-align: right">Doc Nbr:</dt>
                            <dd>2743</dd>
                            <dt style="text-align: right">S2S Connected:</dt>
                            <dd><span class="label label-success">Yes</span></dd>
                            <dt style="text-align: right">Status:</dt>
                            <dd>In Progress</dd>
                            <dt style="text-align: right">Budget:</dt>
                            <dd><a href="#" data-toggle="modal" data-target="#switchdoc">Final 1</a></dd>
                            <dt>
                                <a href="#" class="dropdown-toggle pull-right" data-toggle="dropdown" style="font-weight: 100; font-style: italic;">Show more...</a>
                                <section class="dropdown-menu uif-gridGroup">
                                    <h4 class="uif-headerText">Document Info</h4>
                                    <table class="table table-condensed uif-table-fixed" role="presentation">
                                        <tbody>
                                            <tr>
                                                <th scope="row"><label for="u1hmj9zj_span" class="uif-label displayWith-u1qpse12" data-label_for="u1qpse12">Doc Nbr</label></th>
                                                <td class="uif-gridLayoutCell"><div class="uif-messageField" data-label="Doc Nbr">
                                                        <p class="uif-message">2743</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <label for="u91iqlm" class="uif-label displayWith-upf4ga4" data-label_for="upf4ga4">Initiator</label></th>
                                                <td class="uif-gridLayoutCell"><div class="uif-linkField" data-label="Initiator"> <a href="#" target="_self" class="uif-link">thrclark</a> </div></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <label for="u1b4jcel_span" class="uif-label displayWith-u1qpse2s" data-label_for="u1qpse2s">Status</label></th>
                                                <td class="uif-gridLayoutCell"><div class="uif-messageField" data-label="Status">
                                                        <p class="uif-message">In Progress</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <label for="u17vjdm4_span" class="uif-label displayWith-u1qpse3n" data-label_for="u1qpse3n">PI</label></th>
                                                <td class="uif-gridLayoutCell"><div class="uif-messageField" data-label="PI">
                                                        <p class="uif-message">Ken Graves</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <label for="u14mjetn_span" class="uif-label displayWith-u1qpse4i" data-label_for="u1qpse4i">Created</label></th>
                                                <td class="uif-gridLayoutCell"><div class="uif-messageField" data-label="Created">
                                                        <p class="uif-message">04:27pm 07/09/2013</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <label for="u11djg16_span" class="uif-label displayWith-u1qpse5d" data-label_for="u1qpse5d">Updated</label></th>
                                                <td class="uif-gridLayoutCell"><div class="uif-messageField" data-label="Updated">
                                                        <p class="uif-message">12:22pm 07/12/2013</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <label for="uy4jh8p_span" class="uif-label displayWith-u1qpse68" data-label_for="u1qpse68">Proposal Nbr</label></th>
                                                <td class="uif-gridLayoutCell"><div class="uif-messageField" data-label="Proposal Nbr">
                                                        <p class="uif-message">#23533</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <label for="uuvjig8_span" class="uif-label displayWith-u1qpse73" data-label_for="u1qpse73">Sponsor Name</label></th>
                                                <td class="uif-gridLayoutCell"><div class="uif-messageField" data-label="Sponsor Name">
                                                        <p class="uif-message">NIH</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <label for="uuvjig8_span" class="uif-label displayWith-u1qpse73" data-label_for="u1qpse73">Budget Versions</label></th>
                                                <td class="uif-gridLayoutCell"><div class="uif-messageField" data-label="Sponsor Name">
                                                        <ul class="uif-optionList" data-role="Control" data-control_for="ud9tgcp">
                                                            <li class="uif-optionList-item"> <span data-key="1"><a href="#">Test Budget</a></span> </li>
                                                            <li class="uif-optionList-item"> <span data-key="2"><a href="#"><strong>Final 1</strong></a></span> </li>
                                                            <li class="uif-optionList-item"> <span data-key="3"><a href="#">Sandbox 2</a></span> </li>
                                                            <li class="uif-optionList-item"> <span data-key="3"><a href="#">Modified Budget</a></span> </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </section>
                            </dt>
                            <dd></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="uif-actionBar uif-header-lowerGroup col-md-12">
                <ul>
                    <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;toggleAuditMode&quot;}" data-toggle="modal" data-target="#modal-data-validation"> <span class="icon-ok" style="color:#090"></span>Data Validation (on) </a> </li>
                    <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;print&quot;}" data-toggle="modal" data-target="#modal-print"><span class="icon-print"></span>Print</a> </li>
                    <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;copy&quot;}" data-toggle="modal" data-target="#modal-copy"><span class="icon-copy"></span>Copy</a> </li>
                    <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;medusa&quot;}" data-toggle="modal" data-target="#modal-medusa"><span class="icon-tasks"></span>Medusa</a> </li>
                    <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;showHierarchy&quot;}" data-toggle="modal" data-target="#modal-hierarchy"><span class="icon-list-ol"></span>Hierarchy</a> </li>
                    <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;access&quot;}" data-toggle="modal" data-target="#modal-access"><span class="icon-lock"></span>Access</a> </li>
                    <li><a href="#" class="uif-actionLink" data-toggle="modal" data-target="#modal-budget-versions"><span class="icon-money"></span>Budget Versions</a></li>
                    <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;access&quot;}" data-toggle="modal" data-target="#modal-superuser"><span class="icon-lightning"></span>Super User</a> </li>
                    <li><a href="#" class="uif-actionLink" tabindex="0" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;access&quot;}" data-toggle="modal" data-target="#modal-dataoverrides"><span class="icon-pencil2"></span>Data Overrides</a> </li>
                    <li class="uif-page-help"> <a  class="dropdown-toggle" data-toggle="dropdown"><span class="icon-question-sign"><span class="sr-only">help</span></span><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Basics</a></li>
                            <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Key Personnel</a></li>
                            <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Compliance</a></li>
                            <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Attachments</a></li>
                            <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Questionnaire</a></li>
                            <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Budget Versions</a></li>
                            <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Supplimental Information</a></li>
                            <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Summary</a></li>
                            <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Glossary of Terms</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container" style="padding-bottom: 50px;">
            <nav id="Uif-Navigation">
                <div id="Uif-NavigationMenu" class="col-md-3">
                    <!-- <div class="sidebar-collapse">
                        <span class="icon-angle-left"></span>
                    </div> -->
                    <ul class="nav nav-list" style="background: #f2f2f2">
                        <li><a class="uif-navigationActionLink" href="prop-docinfo.php"><span class="icon-file7"></span><span class="uif-innerText">Doc Info</span></a></li>
                        <li class="open active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-file-alt"></span><span id="u242f54" class="uif-innerText">Basics</span><span class="arrow icon-angle-right"></span></a>
                            <ul class="submenu uif-listLayout">
                                <li><a class="uif-actionLink" href="prop-basics-details.php">Proposal Details</a></li>
                                <li><a class="uif-actionLink" href="prop-basics-s2s.php">S2S Opportunity Search</a></li>
                                <li><a class="uif-actionLink" href="prop-basics-deliveryinfo.php">Delivery Info</a></li>
                                <li><a class="uif-actionLink" href="prop-basics-sponsorprog.php">Sponsor &amp; Program Information</a></li>
                                <li><a class="uif-actionLink" href="prop-basics-orgloc.php">Organization &amp; Location</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-user3"></span><span id="u1sp7yfb" class="uif-innerText">Key Personnel</span><span class="arrow icon-angle-right"></span></a>
                            <ul class="submenu uif-listLayout">
                                <li><a class="uif-actionLink" href="prop-personnel-start.php">Personnel</a></li>
                                <li><a class="uif-actionLink"href="prop-personnel-credit.php">Credit Allocation</a></li>
                            </ul>
                        </li>
                        <li><a class="uif-navigationActionLink" href="prop-compliance.php"><span class="icon-ok"></span><span class="uif-innerText">Compliance</span></a></li>
                        <li><a class="uif-navigationActionLink" href="prop-attachments.php"><span class="icon-paper-clip"></span><span class="uif-innerText">Attachments</span></a></li>
                        <li><a class="uif-navigationActionLink" href="prop-questionnaire.php"><span class="icon-question2"></span><span class="uif-innerText">Questionnaire</span></a></li>
                        <li><a class="uif-navigationActionLink" href="prop-budget.php"><span class="icon-money"></span><span class="uif-innerText">Budgets</span></a></li>
                        <li><a class="uif-navigationActionLink" href="prop-supplimental.php"><span class="icon-bell2"></span><span class="uif-innerText">Supplemental Information</span></a</li>
                        <li><a class="uif-navigationActionLink" href="prop-summary.php"><span class="icon-signout"></span><span class="uif-innerText">Summary/Submit</span></a></li>
                    </ul>
                </div>
            </nav>
            <input name="script" type="hidden" data-role="dataScript" data-for="LabsProposal" value="var dataComponent = jQuery('#LabsProposal');dataComponent.data('req_indicator',&quot;*&quot;);dataComponent.data('action_defaults',{&quot;focusOnIdAfterSubmit&quot;:&quot;SELF&quot;,&quot;loadingMessage&quot;:&quot;Loading...&quot;,&quot;clearDirtyOnAction&quot;:false,&quot;dirtyOnAction&quot;:false,&quot;validate&quot;:false,&quot;performDirtyValidation&quot;:false,&quot;ajaxSubmit&quot;:true,&quot;disableBlocking&quot;:false,&quot;onClick&quot;:&quot;actionInvokeHandler(this);&quot;,&quot;submit_data&quot;:{},&quot;focusId&quot;:&quot;SELF&quot;});dataComponent.data('field_validation_defaults',{&quot;displayMessages&quot;:true,&quot;useTooltip&quot;:true,&quot;messagingEnabled&quot;:true,&quot;hasOwnMessages&quot;:false,&quot;showIcons&quot;:false,&quot;errors&quot;:[],&quot;warnings&quot;:[],&quot;info&quot;:[],&quot;serverErrors&quot;:[],&quot;serverWarnings&quot;:[],&quot;serverInfo&quot;:[]});dataComponent.data('group_validation_defaults',{&quot;summarize&quot;:true,&quot;displayMessages&quot;:true,&quot;closeable&quot;:true,&quot;collapseFieldMessages&quot;:true,&quot;showPageSummaryHeader&quot;:true,&quot;displayLabel&quot;:true,&quot;displayHeaderSummary&quot;:true,&quot;hasOwnMessages&quot;:false,&quot;pageLevel&quot;:false,&quot;forceShow&quot;:false,&quot;isTableCollection&quot;:false,&quot;order&quot;:[],&quot;sections&quot;:[],&quot;errors&quot;:[],&quot;warnings&quot;:[],&quot;info&quot;:[],&quot;serverErrors&quot;:[],&quot;serverWarnings&quot;:[],&quot;serverInfo&quot;:[]});" />
            <input name="script" type="hidden" data-role="script" data-for="LabsProposal" value="jQuery(document).ready(function(e) {jQuery.extend(jQuery.validator.messages, {
    required: 'Required',
    minExclusive: 'Value must be greater than {0}',
    maxInclusive: 'Value cannot be greater than {0}',
    minLengthConditional: 'Must be at least {0} characters',
    maxLengthConditional: 'Must be at most {0} characters'});});if (actionDefaults == undefined) {
            actionDefaults = jQuery(&quot;[data-role='View']&quot;).data(kradVariables.ACTION_DEFAULTS);
            }" />
            <!-- <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;"> -->
            <main id="" class="uif-page col-md-9" data-server_messages="false" data-role="Page" data-parent="">
                <div class="uif-header-inner col-md-12">
                    <h2 id="" class="uif-headerText"><span class="uif-headerText-span">Proposal Details</span></h2>
                    <div id="" class="uif-verticalBoxGroup uif-header-lowerGroup" data-parent="LabsProposal-Page">
                        <div id="u1ndzhxa" class="text-muted uif-boxLayoutVerticalItem clearfix" data-parent="">
                            <p><span class="uif-requiredMessage">*</span> Indicates required fields</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                        <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Proposal Type: <span class="uif-requiredMessage">*</span></label>
                        </div>
                        <div class="col-md-8">
                            <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                                    <option value="1" selected="selected">New</option>
                                    <option value="4">Continuation</option>
                                    <option value="3">Renewal</option>
                                    <option value="2">Resubmission</option>
                                    <option value="5">Revision</option>
                                    <option value="6">Task Order</option>
                                </select>
                            </div>
                        </div>
                        <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Lead Unit: <span class="uif-requiredMessage">*</span></label>
                        </div>
                        <div class="col-md-8">
                            <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                                    <option value="000001">000001 - University</option>
                                    <option value="BL-IIDC">BL-IIDC - IND INST ON DISABILITY/COMMNTY</option>
                                    <option value="IN-CARD" selected="selected">IN-CARD - CARDIOLOGY</option>
                                    <option value="IN-CARR">IN-CARR - CARDIOLOGY RECHARGE CTR</option>
                                </select>
                            </div>
                        </div>
                        <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Activity Type: <span class="uif-requiredMessage">*</span></label>
                        </div>
                        <div class="col-md-8">
                            <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                                    <option value="1" selected="selected">Research</option>
                                    <option value="4">Clinical Trial</option>
                                    <option value="9">Construction</option>
                                    <option value="7">Fellowship - Post-Doctoral</option>
                                    <option value="6">Fellowship - Pre-Doctoral</option>
                                    <option value="2">Instruction</option>
                                    <option value="3">Public Service</option>
                                    <option value="8">Student Services</option>
                                    <option value="5">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Project Dates: <span class="uif-requiredMessage">*</span></label>
                        </div>
                        <div class="col-md-8">
                            <div id="u8abdmj" class="uif-fieldGroup" data-parent="u1rttg6l" data-label="Field Group" data-group="u1fjua60">
                                <fieldset aria-labelledby="u8abdmj_label" id="u8abdmj_fieldset">
                                    <legend style="display: none">Project dates</legend>
                                    <div id="u1fjua60" class="row multi-columns-row row multi-columns-row uif-cssGridGroup" data-parent="u8abdmj">
                                        <div class="col-md-3">
                                            <div id="uahyfb8" class="uif-inputField uif-boxLayoutVerticalItem pull-left clearfix" data-parent="Demo-DatePicker-Example1" data-role="InputField" data-label="Date Field">
                                                <div class="input-group">
                                                    <input id='uahyfb8_control' type="text" name="inputField1" value="" size="10" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uahyfb8" placeholder="mm/dd/yyyy">
                                                    <input name="script" type="hidden" data-role="script" value="createDatePicker('uahyfb8_control', {showOn:&quot;button&quot;,buttonImageOnly:true,showAnim:&quot;slideDown&quot;,showButtonPanel:true,changeMonth:true,changeYear:true,buttonImage:&quot;http://env14.rice.kuali.org/themes/kboot/images/cal.gif&quot;}, false);" />
                                                    <div class="input-group-btn"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <p id="u15sznn1" class="form-control-static text-center uif-message "> to </p>
                                        </div>
                                        <div class="col-md-3">
                                            <div id="urvc16" class="uif-inputField uif-boxLayoutVerticalItem pull-left clearfix" data-parent="Demo-DatePicker-Example1" data-role="InputField" data-label="Date Field">
                                                <div class="input-group">
                                                    <input id='urvc16_control' type="text" name="inputField1" value="" size="10" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="urvc16" placeholder="mm/dd/yyyy">
                                                    <input name="script" type="hidden" data-role="script" value="createDatePicker('urvc16_control', {showOn:&quot;button&quot;,buttonImageOnly:true,showAnim:&quot;slideDown&quot;,showButtonPanel:true,changeMonth:true,changeYear:true,buttonImage:&quot;http://env14.rice.kuali.org/themes/kboot/images/cal.gif&quot;}, false);" />
                                                    <div class="input-group-btn"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                            <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for=""> Project Title: <span class="uif-requiredMessage">*</span></label>
                        </div>
                        <div class="col-md-8">
                            <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                <textarea id="uahyfb8_control" name="inputField2" rows="3" cols="40" class="form-control input-sm uif-textAreaControl valid" data-role="Control" data-control_for="uahyfb8" data-original-title="" title="" data-hastooltip="true"></textarea>
                            </div>
                        </div>
                        <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                            <label id="3_label" for="3_control" class="clearfix clearfix uif-label displayWith-3 md-float-right uif-labelBlock" data-label_for="3"> Sponsor: <span class="uif-requiredMessage">*</span></label>
                        </div>
                        <div class="col-md-8">
                            <div id="uk9itqaa" class="uif-inputField" data-parent="" data-role="InputField" data-label="Field 1">
                                <div class="input-group">
                                    <input id="uk9itqaa_control" type="text" name="inputField1" value="" size="30" class="form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                                    <div class="input-group-btn">
                                        <button id="uk9itqaa_button" class="uif-actionLink btn btn-default uif-action icon-search" tabindex="0" data-toggle="modal" data-target="#modal-find-sponsor"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                            <label id="3_label" for="3_control" class="clearfix clearfix uif-label displayWith-3 md-float-right uif-labelBlock" data-label_for="3"> Prime Sponsor:</label>
                        </div>
                        <div class="col-md-8">
                            <div id="uk9itqu" class="uif-inputField" data-parent="" data-role="InputField" data-label="Field 2">
                                <div class="input-group">
                                    <input id="uk9itqu_control" type="text" name="inputField1" value="" size="30" class="form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                                    <div class="input-group-btn">
                                        <button id="uk9itqu_button" class="uif-actionLink btn btn-default uif-action icon-search" tabindex="0" data-toggle="modal" data-target="#modal-find-sponsor"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                            <label id="uk9itrp_label" for="uk9itrp_control" class="clearfix clearfix uif-label displayWith-3 md-float-right uif-labelBlock" data-label_for="uk9itrp">Keywords: <span class="uif-requiredMessage">*</span></label>
                        </div>
                        <div class="col-md-10">
                            <div id="uk9itrp" class="uif-inputField uif-boxLayoutVerticalItem pull-left clearfix" data-has_messages="true" data-parent="u1rttg5q" data-role="InputField" data-label="Bootstrap select">
                                <select multiple="multiple" id="uk9itrp_control" name="multiSelectField2" size="4" class="form-control input-sm uif-multiSelectControl selectpicker required" data-live-search="true" data-control_for="uk9itrp" data-role="Control" style="display: none;" aria-required="true">
                                    <optgroup label="group 1">
                                        <option value="sub1_1">sub1_1</option>
                                        <option value="sub1_2">sub1_2</option>
                                        <option value="sub1_3">sub1_3</option>
                                    </optgroup>
                                    <optgroup label="group 2">
                                        <option value="sub2_1">sub2_1</option>
                                        <option value="sub2_2">sub2_2</option>
                                        <option value="sub2_3">sub2_3</option>
                                        <option value="sub2_4">sub2_4</option>
                                        <option value="sub2_5">sub2_5</option>
                                        <option value="sub2_6">sub2_6</option>
                                        <option value="sub2_7">sub2_7</option>
                                        <option value="sub2_8">sub2_8</option>
                                        <option value="sub2_9">sub2_9</option>
                                        <option value="sub2_10">sub2_10</option>
                                        <option value="sub2_11">sub2_11</option>
                                        <option value="sub2_12">sub2_12</option>
                                        <option value="sub2_13">sub2_13</option>
                                        <option value="sub2_14">sub2_14</option>
                                        <option value="sub2_15">sub2_15</option>
                                        <option value="sub2_16">sub2_16</option>
                                        <option value="sub2_17">sub2_17</option>
                                        <option value="sub2_18">sub2_18</option>
                                        <option value="sub2_19">sub2_19</option>
                                        <option value="sub2_20">sub2_20</option>
                                        <option value="sub2_21">sub2_21</option>
                                        <option value="sub2_22">sub2_22</option>
                                    </optgroup>
                                    <optgroup label="group 3">
                                        <option value="sub3_1">sub3_1</option>
                                        <option value="sub3_2">sub3_2</option>
                                        <option value="sub3_3">sub3_3</option>
                                        <option value="sub3_4">sub3_4</option>
                                        <option value="sub3_5">sub3_5</option>
                                        <option value="sub3_6">sub3_6</option>
                                        <option value="sub3_7">sub3_7</option>
                                    </optgroup>
                                    <optgroup label="group 4">
                                        <option value="sub4_1">sub4_1</option>
                                        <option value="sub4_2">sub4_2</option>
                                        <option value="sub4_3">sub4_3</option>
                                        <option value="sub4_4">sub4_4</option>
                                        <option value="sub4_5">sub4_5</option>
                                        <option value="sub4_6">sub4_6</option>
                                        <option value="sub4_7">sub4_7</option>
                                        <option value="sub4_8">sub4_8</option>
                                        <option value="sub4_9">sub4_9</option>
                                        <option value="sub4_10">sub4_10</option>
                                        <option value="sub4_11">sub4_11</option>
                                        <option value="sub4_12">sub4_12</option>
                                        <option value="sub4_13">sub4_13</option>
                                        <option value="sub4_14">sub4_14</option>
                                        <option value="sub4_15">sub4_15</option>
                                        <option value="sub4_16">sub4_16</option>
                                        <option value="sub4_17">sub4_17</option>
                                        <option value="sub4_18">sub4_18</option>
                                        <option value="sub4_19">sub4_19</option>
                                        <option value="sub4_20">sub4_20</option>
                                        <option value="sub4_21">sub4_21</option>
                                        <option value="sub4_22">sub4_22</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
        </div>
        <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
            <div class="col-md-6 col-md-offset-3">
                <div class="global-navigate btn-group">
                    <button type="button" href="prop-basics-s2s.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
                </div>
                <div class="global-actions btn-group">
                    <button type="button" id="" class="btn btn-default">Save</button>
                    <button type="button" id="" class="btn btn-default">Close</button>
                    <button type="button" id="" class="btn btn-default" data-toggle="modal" data-target="#globalaction-submit">Submit</button>
                    <button type="button" id="" class="btn btn-default" data-toggle="modal" data-target="#globalaction-cancel">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- GLOBAL MODALS -->
<style>
    .dataTables_filter, .dataTables_length { display: none }
</style>

<div id="modal-data-validation" class="modal fade in" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close pull-right" data-dismiss="modal"><span class="sr-only">Close dialog</span> ×</button>
                <button type="button" class="btn btn-success btn-sm toggle-on-off pull-right" style="margin-right: 16px;">Turn off</button>
                <h4 class="modal-title" id="myModalLabel">Data Validation</h4>
            </div>
            <div class="modal-body uif-cssGridGroup clearfix">
                <table class="table table-condensed table-hover table-smaller-text datatable" id="dataValidation">
                    <thead>
                        <tr>
                            <th><a href="#">Area</a></th>
                            <th><a href="#">Section</a></th>
                            <th><a href="#">Description</a></th>
                            <th><a href="#">Severity</a></th>
                            <th><a href="#">Action</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Basics</td>
                            <td>Proposal Details</td>
                            <td>Activity Type must be specified</td>
                            <td><span class="label label-danger">Error</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Basics</td>
                            <td>Proposal Details</td>
                            <td>Prime Sponsor has not been specified</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Basics</td>
                            <td>Sponsor &amp; Program Information</td>
                            <td>Sponsor Div Code is missing</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Personnel</td>
                            <td>The Investigators are not all certified. Please certify Ken Graves.</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Investigators Financial Credit Split does not equal 100%.</td>
                            <td><span class="label label-danger">Error</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Investigators Space Credit Split does not equal 100%.</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Investigators Responsibility Credit Split does not equal 100%.</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Investigators Recognition Credit Split does not equal 100%.</td>
                            <td><span class="label label-danger">Error</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Unit Recognition Credit Split for Ken Graves does not equal 100%.</td>
                            <td><span class="label label-danger">Error</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>S2S Opportunity Search</td>
                            <td>Opportunity</td>
                            <td>You must complete the questionnaire &quot;Grants.gov S2S Questionnaire&quot;</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Attachments</td>
                            <td>Proposal</td>
                            <td>Invalid document type (thisfile.xml)</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Attachments</td>
                            <td>Internal</td>
                            <td>Invalid document type (thatfile.xml)</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Attachments</td>
                            <td>Internal</td>
                            <td>Invalid document type (theotherfile.xml)</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Basics</td>
                            <td>Sponsor &amp; Program Information</td>
                            <td>Sponsor deadline date has not been entered.</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <div class="clearfix">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery('#modal-data-validation .modal-header').on('click', '.toggle-on-off', function() {

        if (jQuery(this).hasClass('btn-danger')) {
            jQuery(this).html('Turn off').removeClass('btn-danger').addClass('btn-success');
        } else {
            jQuery(this).html('Turn on').removeClass('btn-success').addClass('btn-danger');
        }

        return false;
    });
</script><!-- Modal -->

<div class="modal fade" id="modal-dataoverrides" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Data Overrides</h4>
            </div>
            <div class="modal-body">
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li class="active"><a href="#red" data-toggle="tab">Override</a></li>
                    <li><a href="#orange" data-toggle="tab">History</a></li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane active" id="red">
                        <div class="uif-header-inner">
                            <h4 id="" class="uif-headerText"> <span class="uif-headerText-span"> Create Override </span> </h4>
                        </div>
                        <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                           
                           
                           
                           
                           
                              <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" data-label_for="">Field to Edit:</label>
                            </div>
                           
                           
                           
                           
                           
                            <div class="col-md-8">
                                <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                    <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                                        <option></option>
                                        <option value="7">Actvity Type</option>
                                        <option value="7">Sponsor Deadline Date</option>
                                        <option value="7">Sponsor Deadline Type</option>
                                        <option value="7">Mailing Address</option>
                                        <option value="7">Notice of Opportunity</option>
                                        <option value="7">Opportunity ID</option>
                                        <option value="7">Opportunity Title</option>
                                        <option value="7">Proposal Type</option>
                                        <option value="7">Project Title</option>
                                       
                                    </select>
                                </div>
                            </div>
                            <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" data-label_for="">Current Value:</label>
                            </div>
                            <div class="col-md-8">
                                <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                    <p class="form-control-static">Research</p>
                                </div>
                            </div>
                            <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" data-label_for="">New Value:</label>
                            </div>
                            <div class="col-md-8">
                                <div id="uk9itqaa" class="uif-inputField" data-parent="" data-role="InputField" data-label="Field 1">
                                    <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                            <option value="0"></option> <option value="1">Research</option>
                            <option value="4">Clinical Trial</option>
                            <option value="9">Construction</option>
                            <option value="7">Fellowship - Post-Doctoral</option>
                            <option value="6">Fellowship - Pre-Doctoral</option>
                            <option value="2">Instruction</option>
                            <option value="3">Public Service</option>
                            <option value="8">Student Services</option>
                            <option value="5">Other</option>
                        </select>
                                </div>
                            </div>
                            <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                                <label id="" for="" class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" data-label_for="">Comment:</label>
                            </div>
                            <div class="col-md-8">
                                <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                    <textarea id="uahyfb8_control" name="inputField2" rows="3" cols="40" class="form-control input-sm uif-textAreaControl valid" data-role="Control" data-control_for="uahyfb8" data-original-title="" title="" data-hastooltip="true"></textarea>
                                </div>
                            </div>
                            
                            
                            
                            
                             <div class="col-md-12 text-center">
                               
                               
                               <hr />
                               
                               
                           <a href="" class="btn btn-primary">    Create Override</a>
                               
                               
                               
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                        </section>
                    </div>
                    <div class="tab-pane" id="orange">
                        <div class="uif-header-inner">
                            <h4 id="" class="uif-headerText"> <span class="uif-headerText-span"> Override History </span> </h4>
                        </div>
                        <table class="table table-condensed table-smaller-text table-hover" id="example">
                            <thead>
                                <tr>
                                    <th> Date</th>
                                    <th>Field</th>
                                    <th> Old </th>
                                    <th> New</th>
                                    <th>Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>07/14/2014</td>
                                    <td>Sponsor Deadline Type</td>
                                    <td>Federal Solicitation</td>
                                    <td>Unsolicited</td>
                                    <td>Lose away off why half led have near bed. At engage simple father of period others except.</td>
                                </tr>
                                <tr>
                                    <td>07/14/2014</td>
                                    <td>Proposal Type</td>
                                    <td>New</td>
                                    <td>Renewal</td>
                                    <td>Allow miles wound place the leave had. To sitting subject no improve studied limited. </td>
                                </tr>
                                <tr>
                                    <td>07/14/2014</td>
                                    <td>Activity Type</td>
                                    <td>Public Service </td>
                                    <td>Student Services</td>
                                    <td>Travelling alteration impression six all uncommonly. Chamber hearing inhabit joy highest private ask him our believe.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            
            
            
        </div>
    </div>
</div>

<!-- end Modal --> <div id="modal-print" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
     <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h4 class="modal-title" id="myModalLabel">Print</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
            <div class="panel-group" id="acc">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#acc" href="#acc_grants_content"><span aria-hidden="true" class="icon-caret-right"></span> Grants.gov (0)</a></h4>
                    </div>
                    <div id="acc_grants_content" class="panel-collapse collapse">
                        <div class="panel-body">
                            
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#acc" href="#acc_sponsor_content"><span aria-hidden="true" class="icon-caret-right"></span> Sponsor form packages (12)</a></h4>
                    </div>
                    <div id="acc_sponsor_content" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table table-condensed table-hover">
                                <tr>
                                    <th><input type="checkbox" id="select_all" name="select_all" class="checkbox-check-all" data-parent="table" /></th>
                                    <th>Attachment</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="att_s2s_001" name="att_s2s_001" class="checkbox" /></td>
                                    <td><label for="att_s2s_001">Generic Printing Forms (Coeus 4.x)</label></td>
                                    <td>Cover page</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="att_s2s_002" name="att_s2s_002" class="checkbox" /></td>
                                    <td><label for="att_s2s_002">Generic Printing Forms (Coeus 4.x)</label></td>
                                    <td>Budget Summary Period 1</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="att_s2s_003" name="att_s2s_003" class="checkbox" /></td>
                                    <td><label for="att_s2s_003">Generic Printing Forms (Coeus 4.x)</label></td>
                                    <td>Budget Summary Period 2</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="att_s2s_004" name="att_s2s_004" class="checkbox" /></td>
                                    <td><label for="att_s2s_004">Generic Printing Forms (Coeus 4.x)</label></td>
                                    <td>Budget Summary Period 3</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="att_s2s_005" name="att_s2s_005" class="checkbox" /></td>
                                    <td><label for="att_s2s_005">Generic Printing Forms (Coeus 4.x)</label></td>
                                    <td>Budget Summary Period 4</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="att_s2s_006" name="att_s2s_006" class="checkbox" /></td>
                                    <td><label for="att_s2s_006">Generic Printing Forms (Coeus 4.x)</label></td>
                                    <td>Budget Summary Period 5</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="att_s2s_007" name="att_s2s_007" class="checkbox" /></td>
                                    <td><label for="att_s2s_007">Generic Printing Forms (Coeus 4.x)</label></td>
                                    <td>Budget Summary Total</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="att_s2s_008" name="att_s2s_008" class="checkbox" /></td>
                                    <td><label for="att_s2s_008">NIH 398 package (Coeus 4.0)</label></td>
                                    <td>Facepage</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="att_s2s_009" name="att_s2s_009" class="checkbox" /></td>
                                    <td><label for="att_s2s_009">NIH 398 package (Coeus 4.0)</label></td>
                                    <td>Facepage continued</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="att_s2s_010" name="att_s2s_010" class="checkbox" /></td>
                                    <td><label for="att_s2s_010">NIH 398 package (Coeus 4.0)</label></td>
                                    <td>Page 2-Performance Sites Key Personnel</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="att_s2s_011" name="att_s2s_011" class="checkbox" /></td>
                                    <td><label for="att_s2s_011">NIH 398 package (Coeus 4.0)</label></td>
                                    <td>Additional Sites</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" id="att_s2s_012" name="att_s2s_012" class="checkbox" /></td>
                                    <td><label for="att_s2s_012">NIH 398 package (Coeus 4.0)</label></td>
                                    <td>Key Personnel report</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#acc" href="#acc_report_content"><span aria-hidden="true" class="icon-caret-right"></span> Reports</a></h4>
                    </div>
                    <div id="acc_report_content" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table table-condensed table-borderless">
                                <tr>
                                    <td width="150">Current Report</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control input-sm" name="report_person" id="report_person" />
                                            <span class="input-group-btn">
                                                <a href="#" class="icon-search launch-modal" data-modal-page="lookup-sponsor-detailspage.php" data-modal-height="500"></a>
                                            </span>
                                        </div>
                                    </td>
                                    <td><button type="button" class="btn btn-default btn-xs">Generate report</button></td>
                                </tr>
                                <tr>
                                    <td>Pending Report</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="text" class="form-control input-sm" name="pending_report" id="pending_report" />
                                            <span class="input-group-btn">
                                                <a href="#" class="icon-search launch-modal" data-modal-page="lookup-sponsor-detailspage.php" data-modal-height="500"></a>
                                            </span>
                                        </div>
                                    </td>
                                    <td><button type="button" class="btn btn-default btn-xs">Generate report</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <div class="clearfix">
                <button type="button" class="btn btn-primary pull-left">Print selected</button>
                <button type="button" class="btn btn-link pull-left" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
</div><div id="modal-copy" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
     <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h4 class="modal-title" id="myModalLabel">Copy</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
                <fieldset>
                    <legend class="off-screen">Copy document</legend>
                    <div class="form-group clearfix">
                        <label class="control-label col-sm-3 col-xs-3" for="proposal">Proposal</label>
                        <div class="col-sm-9 col-xs-9">
                            <input type="text" id="attachments" placeholder="" class="form-control input-sm disabled" value="Yes" disabled="disabled" />
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <label class="control-label col-sm-3 col-xs-3 required" for="budget"> Budget?</label>
                        <div class="col-sm-9 col-xs-9">
                            <select name="select" id="budget" class="form-control input-sm" title="Budget" required>
                                <option value="" selected="selected">all versions</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <label class="control-label col-sm-3 col-xs-3 required" for="lead-unit"> Lead Unit <span class="req">*</span></label>
                        <div class="col-sm-9 col-xs-9">
                            <select name="lead-unit" id="lead-unit" style="" class="form-control input-sm" title="* Lead Unit" required>
                                <option value="">Select</option>
                                <option value="000001">000001 - University</option>
                                <option value="BL-IIDC">BL-IIDC - IND INST ON DISABILITY/COMMNTY</option>
                                <option value="IN-CARD">IN-CARD - CARDIOLOGY</option>
                                <option value="IN-CARR">IN-CARR - CARDIOLOGY RECHARGE CTR</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <label class="control-label col-sm-3 col-xs-3" for="attachments1">Attachments</label>
                        <div class="col-sm-9 col-xs-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Yes, include attachments </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <label class="control-label col-sm-3 col-xs-3" for="questionaires">Questionnaires</label>
                        <div class="col-sm-9 col-xs-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Yes, include questionnaires </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <div class="clearfix">
                    <a class="btn btn-primary pull-left">Copy</a>
                    <button type="button" class="btn btn-link pull-left" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div><div id="modal-medusa" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Medusa</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
                <form class="form-horizontal" method="get" action="">
                    <fieldset>
                        <legend style="display:none">Medusa</legend>
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#proposal_award" data-toggle="tab">Proposal > Award</a></li>
                            <li><a href="#award_proposal" data-toggle="tab">Award > Proposal</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane in active" id="proposal_award">
                                <ul class="medusa-tree">
                                    <li><i class="icon icon-folder-open"></i> Institutional Proposal 00000018
                                        <ul>
                                            <li><i class="icon icon-file"></i> Development Proposal 1</li>
                                            <li><i class="icon icon-folder-open"></i> <a href="#" class="show-more-content" data-show-more-content="prop_award_award_details">Award 0000026-00001</a>
                                                <div class="off-screen" id="prop_award_award_details">
                                                    <fieldset>
                                                        <legend>Summary</legend>
                                                        <div class="form-group clearfix">
                                                            <label for="award_id" class="control-label col-sm-4 col-xs-4">Award ID:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="award_id">00000026-000001</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="sponsor_award_id" class="control-label col-sm-4 col-xs-4">Sponsor Award ID:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="sponsor_award_id"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="account_id" class="control-label col-sm-4 col-xs-4">Account ID:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="account_id"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="award_status" class="control-label col-sm-4 col-xs-4">Award Status:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="award_status">Active</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="title" class="control-label col-sm-4 col-xs-4">Title:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="title">Kaci Master Test Project for Medusa</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="award_type" class="control-label col-sm-4 col-xs-4">Award Type:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="award_type">Grant</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="activity_type" class="control-label col-sm-4 col-xs-4">Activity Type:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="activity_type">Research</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="account_type" class="control-label col-sm-4 col-xs-4">Account Type:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="account_type"></span>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>Dates &amp; Amounts</legend>
                                                        <div class="form-group clearfix">
                                                            <label for="sponsor" class="control-label col-sm-4 col-xs-4">Sponsor:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="sponsor">00500 NSF</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="project_start_date" class="control-label col-sm-4 col-xs-4">Project Start Date:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="project_start_date">09/01/2013</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="project_end_date" class="control-label col-sm-4 col-xs-4">Project End Date:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="project_end_date">08/31/2016</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="anticipated_cumulative" class="control-label col-sm-4 col-xs-4">Anticipated Cumulative:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="anticipated_cumulative">$444,000.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="obligation_start_date" class="control-label col-sm-4 col-xs-4">Obligation Start Date:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="obligation_start_date">09/01/2013</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="obligation_end_date" class="control-label col-sm-4 col-xs-4">Obligation End Date:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="obligation_end_date">08/31/2016</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="obligated_cumulative" class="control-label col-sm-4 col-xs-4">Obligation Cumulative:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="obligated_cumulative">$148,000.00</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>Award Details Recorded</legend>
                                                        <div class="form-group clearfix">
                                                            <label for="approved_subaward" class="control-label col-sm-4 col-xs-4">Approved Subaward:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="approved_subaward">No</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="approved_equipment" class="control-label col-sm-4 col-xs-4">Approved Equipment:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="approved_equipment">No</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="approved_foreign_travel" class="control-label col-sm-4 col-xs-4">Approved Foreign Travel:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="approved_foreign_travel">No</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="fa" class="control-label col-sm-4 col-xs-4">F&amp;A:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="fa">No</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="payment_schedule" class="control-label col-sm-4 col-xs-4">Payment Schedule:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="payment_schedule">No</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="sponsor_funding_transferred" class="control-label col-sm-4 col-xs-4">Sponsor Funding Transferred:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="sponsor_funding_transferred">No</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="cost_share" class="control-label col-sm-4 col-xs-4">Cost Sharing:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="cost_share">No</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>Investigators</legend>
                                                        <div class="form-group clearfix">
                                                            <label for="investigator" class="control-label col-sm-4 col-xs-4">Investigator(s):</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="investigator">Edward Haskell (PI)</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix">
                                                            <label for="units" class="control-label col-sm-4 col-xs-4">Units:</label>
                                                            <div class="col-sm-8 col-xs-8">
                                                                <span id="units">000001 : University<br />IN-CARD : Cardiology (Lead Unit)<br />000001 : University</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <ul>
                                                    <li><i class="icon icon-file"></i> Protocol 1307000021</li>
                                                    <li><i class="icon icon-file"></i> Subaward 1</li>
                                                </ul>
                                            </li>
                                            <li><i class="icon icon-file"></i> Negotiation 1</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane" id="award_proposal">
                                <ul class="medusa-tree">
                                    <li><i class="icon icon-folder-open"></i> Award 00000026-00001
                                        <ul>
                                            <li><i class="icon icon-file"></i> Institutional Proposal 00000018
                                                <ul>
                                                    <li><i class="icon icon-file"></i> Protocol 1307000021</li>
                                                    <li><i class="icon icon-file"></i> Negotiation 1</li>
                                                </ul>
                                            </li>
                                            <li><i class="icon icon-folder-open"></i> Protocol 1307000021</li>
                                            <li><i class="icon icon-file"></i> Subaward 1</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <div class="clearfix">
                    <a href="#" class="btn btn-primary pull-left">Save</a> 
                    <a href="#" class="btn btn-link pull-left" data-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div><div id="modal-hierarchy" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h4 class="modal-title" id="myModalLabel">Hierarchy</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
                <p>You are currently viewing Proposal # 18 (Document # 3464), which is currently unlinked to a proposal hierarchy.</p>
                <fieldset>
                    <legend class="off-screen">Hierarchy</legend>
                    <div class="form-group clearfix">
                        <label class="control-label col-sm-3 col-xs-3" for="proposal">Link Child Proposal</label>
                        <div class="col-sm-9 col-xs-9">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <label class="control-label col-sm-3 col-xs-3 required" for="budget">Link Budget Type</label>
                        <div class="col-sm-9 col-xs-9">
                            <select name="newHierarchyBudgetTypeCode" tabindex="3" onchange="" onblur="" id="newHierarchyBudgetTypeCode" style="" class="form-control" title="Hierarchy Budget Type">
                                <option value="B" selected="selected">Sub-Budget</option>
                                <option value="P">Sub-Project</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <div class="clearfix">
                    <a class="various btn btn-primary pull-left" href="#">Link to Hierarchy</a>
                    <a class="various btn btn-default pull-left" href="#" data-dismiss="modal">Create Hierarchy</a>
                    <button type="button" class="btn btn-link pull-left" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div><div id="modal-access" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Access</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
               <div class="uif-header-inner">
                <h4 id="" class="uif-headerText"> <span class="uif-headerText-span"> User Access </span> </h4>
                <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                    <div class="btn-group"> <a href="#" class="btn btn-default btn-xs" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-add"><span aria-hidden="true" class="icon-plus"></span> Add User</a> </div>
                </div>
            </div>
                <table class="table table-condensed uif-has-actions">
                <thead>
                    <tr>
                        <th scope="col">User</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Coltrane</td>
                        <td> Viewer<br>
                            View Institutionally Maintained Salaries<br></td>
                        <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                    </tr>
                  
                    <tr>
                        <td>Edward H Haskell</td>
                        <td> Viewer<br>
                            Aggregator<br>
                            View Institutional Salaries<br></td>
                        <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                    </tr>
                    <tr>
                        <td>June Cleaver</td>
                        <td> Viewer<br></td>
                        <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                    </tr>
                    <tr>
                        <td>Ward Cleaver</td>
                        <td> Viewer<br></td>
                        <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="modal-footer">
                <div class="clearfix">
           
                    <a class="btn btn-default"href="#" data-dismiss="modal">Close</a>
                </div>
            </div> 
        </div>    
    </div>
</div><div id="modal-access-add" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Access</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
            
            
            
            
            <div class="uif-header-inner">
                <h4 id="" class="uif-headerText"> <span class="uif-headerText-span">Find User </span> </h4>
               
            </div>
            
            
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">KcPerson Id:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Last Name:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">First Name:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">User Name:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Email:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Phone:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Home Unit:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
              
                
        
              
            </div>
         <div class="modal-footer">
                <div class="clearfix">
           
                <a class="btn btn-primary" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-results">Search</a> <a class="btn btn-default pull-left" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-access-results" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Access: Add User: Search Results</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
                <table class="table table-condensed table-hover table-smaller-text" id="example">
                    <thead>
                        <tr>
                            <th></th>
                            <th><a href="#">KcPerson Id</a></th>
                            <th><a href="#">Name</a></th>
                            <th><a href="#">Email</a></th>
                            <th><a href="#">Phone</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a class=" btn btn-primary btn-xs" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-added">Select</a></td>
                            <td><a href="#" target="_blank" title="KC Person KcPerson Id=10000000018 ">10000000018</a></td>
                            <td>Wai Whitis</td>
                            <td>aihitis@yourschool.edu</td>
                            <td>123-123-1234</td>
                        </tr>
                        <tr>
                            <td><a class=" btn btn-primary btn-xs" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-added">Select</a></td>
                            <td><a href="#" target="_blank" title="KC Person KcPerson Id=10000000101 ">10000000101</a></td>
                            <td>Adell Manzi</td>
                            <td>dellanzi@yourschool.edu</td>
                            <td>123-123-1234</td>
                        </tr>
                        <tr>
                            <td><a class=" btn btn-primary btn-xs" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-added">Select</a></td>
                            <td><a href="#" target="_blank" title="KC Person KcPerson Id=10000000081 ">10000000081</a></td>
                            <td>Angelina Swilley</td>
                            <td>ngeliwilley@yourschool.edu</td>
                            <td>123-123-1234</td>
                        </tr>
                        <tr>
                            <td><a class=" btn btn-primary btn-xs" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-added">Select</a></td>
                            <td><a href="#" target="_blank" title="KC Person KcPerson Id=10000000104 ">10000000104</a></td>
                            <td>Susy Bates</td>
                            <td>usates@yourschool.edu</td>
                            <td>123-123-1234</td>
                        </tr>
                        <tr>
                            <td><a class=" btn btn-primary btn-xs" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-added">Select</a></td>
                            <td><a href="#" target="_blank" title="KC Person KcPerson Id=10000000106 ">10000000106</a></td>
                            <td>Latanya Shields</td>
                            <td>atanhields@yourschool.edu</td>
                            <td>123-123-1234</td>
                        </tr>
                        <tr>
                            <td><a class=" btn btn-primary btn-xs" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-added">Select</a></td>
                            <td><a href="#" target="_blank" title="KC Person KcPerson Id=10000000102 ">10000000102</a></td>
                            <td>Rasheeda Vanorden</td>
                            <td>asheednorden@yourschool.edu</td>
                            <td>123-123-1234</td>
                        </tr>
                        <tr>
                            <td><a class=" btn btn-primary btn-xs" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-added">Select</a></td>
                            <td><a href="#" target="_blank" title="KC Person KcPerson Id=10000000107 ">10000000107</a></td>
                            <td>Neal Harten</td>
                            <td>alarten@yourschool.edu</td>
                            <td>123-123-1234</td>
                        </tr>
                        <tr>
                            <td><a class=" btn btn-primary btn-xs" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-added">Select</a></td>
                            <td><a href="#" target="_blank" title="KC Person KcPerson Id=10000000109 ">10000000109</a></td>
                            <td>Janiece Harbour</td>
                            <td>aniarbour@yourschool.edu</td>
                            <td>123-123-1234</td>
                        </tr>
                        <tr>
                            <td><a class=" btn btn-primary btn-xs" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-added">Select</a></td>
                            <td><a href="#" target="_blank" title="KC Person KcPerson Id=10000000063 ">10000000063</a></td>
                            <td>Khalilah Schack</td>
                            <td>alichack@yourschool.edu</td>
                            <td>123-123-1234</td>
                        </tr>
                        <tr>
                            <td><a class=" btn btn-primary btn-xs" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-added">Select</a></td>
                            <td><a href="#" target="_blank" title="KC Person KcPerson Id=10000000108 ">10000000108</a></td>
                            <td>Santo Alderson</td>
                            <td>anterson@yourschool.edu</td>
                            <td>123-123-1234</td>
                        </tr>
                        <tr>
                            <td><a class=" btn btn-primary btn-xs" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-added">Select</a></td>
                            <td><a href="#" target="_blank" title="KC Person KcPerson Id=10000000062 ">10000000062</a></td>
                            <td>Vernie Diehl</td>
                            <td>niiehl@yourschool.edu</td>
                            <td>123-123-1234</td>
                        </tr>
                        <tr>
                            <td><a class=" btn btn-primary btn-xs" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-added">Select</a></td>
                            <td><a href="#" target="_blank" title="KC Person KcPerson Id=10000000103 ">10000000103</a></td>
                            <td>Jonelle Obryant</td>
                            <td>nellbryant@yourschool.edu</td>
                            <td>123-123-1234</td>
                        </tr>
                        <tr>
                            <td><a class=" btn btn-primary btn-xs" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-added">Select</a></td>
                            <td><a href="#" target="_blank" title="KC Person KcPerson Id=10000000061 ">10000000061</a></td>
                            <td>Wilford Suder</td>
                            <td>ilfordude@yourschool.edu</td>
                            <td>123-123-1234</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <div class="clearfix">
                    <a class="btn btn-default pull-left" href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-add">Refine Search</a>
                    <a class="btn btn-link" href="#" data-dismiss="modal">Cancel</a>
                </div>
            </div> 
        </div>    
    </div>
</div><div id="modal-access-added" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Access</h4>
            </div>
     
            
            
            
            <div class="modal-body uif-cssGridGroup">
               <div class="uif-header-inner">
                <h4 id="" class="uif-headerText"> <span class="uif-headerText-span"> User Access </span> </h4>
                <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                    <div class="btn-group"> <a href="#" class="btn btn-default btn-xs" data-dismiss="modal" data-toggle="modal" data-target="#modal-access-add"><span aria-hidden="true" class="icon-plus"></span> Add User</a> </div>
                </div>
            </div> <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Ray Brown</strong> has been added. You may now add roles to Ray Brown.
                </div>
                <table class="table table-condensed uif-has-actions">
                <thead>
                    <tr>
                        <th scope="col">User</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                
                <tr class="warning">
                        <td>Ray Brown</td>
                        <td><label>
                                <input type="checkbox" value="">
                                Viewer</label><br>
                            <label>
                                <input type="checkbox" value="">
                                Budget Creator </label><br>
                            <label>
                                <input type="checkbox" value="">
                                Narrative Writer</label><br>
                            <label>
                                <input type="checkbox" value="">
                                Aggregator</label><br>
                            <label>
                                <input type="checkbox" value="">
                                Approver</label><br>
                            <label>
                                <input type="checkbox" value="">
                                Access Proposal Person Institutional Salaries</label><br>
                            <label>
                                <input type="checkbox" value="">
                                View Institutionally Maintained Salaries</label><br>
                            <label>
                                <input type="checkbox" value="">
                                Delete Proposal</label><br></td>
                        <td><a href="#" class="btn btn-primary btn-xs">Save</a> <a href="#" class="btn btn-default btn-xs" data-toggle="">Cancel</a></td>
                    </tr>
                    
                    <tr>
                        <td>John Coltrane</td>
                        <td> Viewer<br>
                            View Institutionally Maintained Salaries<br></td>
                        <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                    </tr>
                    
                    <tr>
                        <td>Edward H Haskell</td>
                        <td> Viewer<br>
                            Aggregator<br>
                            View Institutional Salaries<br></td>
                        <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                    </tr>
                    <tr>
                        <td>June Cleaver</td>
                        <td> Viewer<br></td>
                        <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                    </tr>
                    <tr>
                        <td>Ward Cleaver</td>
                        <td> Viewer<br></td>
                        <td><a href="#" class="btn btn-default btn-xs">Edit</a> <a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                    </tr>
                </tbody>
            </table>
            </div>
            
            
            
            
            
            
            <div class="modal-footer">
                <div class="clearfix">
           
                    <a class="btn btn-default" href="#" data-dismiss="modal">Close</a>
                </div>
            </div> 
        </div>    
    </div>
</div><div class="modal fade" id="switchdoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Open Version</h4>
            </div>
            <div class="modal-body">
                <p>You are about to open a budget document attached to this proposal document. Are you sure you want to do this?</p>
                <label style="font-weight:normal"><input type="checkbox"> Don't ask me this again </label>
            </div>
            <div class="modal-footer">
                <a href="bud-summary.php" class="btn btn-primary">Open Budget Document</a>
                <a href="" class="btn btn-link" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div><div class="modal fade" id="globalaction-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Submit Document </h4>
            </div>
            <div class="modal-body">
                <p>You are about to submit this proposal document for approval. </p>
                <p>Are you sure you want to do this?</p>
            </div>
            <div class="modal-footer"> <a href="#" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#submit-errors" >Submit for Approval</a> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a> </div>
        </div>
    </div>
</div>
<div class="modal fade" id="globalaction-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Submit Document </h4>
            </div>
            <div class="modal-body">
                <p>You are about to submit this proposal document for approval. </p>
                <p>Are you sure you want to do this?</p>
            </div>
            <div class="modal-footer"> <a href="#" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#submit-errors" >Submit for Approval</a> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a> </div>
        </div>
    </div>
</div>
<style>
    .dataTables_filter, .dataTables_length { display: none }
</style>

<div id="submit-errors" class="modal fade in" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
               
                <h4 class="modal-title" id="myModalLabel">Submit Document - Errors</h4>
            </div>
            <div class="modal-body uif-cssGridGroup clearfix">
            
            
            
            <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Errors!</strong> This document contains errors that must be corrected before submission. Please review and correct all errors.
</div>


                
            
                <table class="table table-condensed table-hover table-smaller-text datatable" id="dataValidation">
                    <thead>
                        <tr>
                            <th><a href="#">Area</a></th>
                            <th><a href="#">Section</a></th>
                            <th><a href="#">Description</a></th>
                            <th><a href="#">Severity</a></th>
                            <th><a href="#">Action</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Basics</td>
                            <td>Proposal Details</td>
                            <td>Activity Type must be specified</td>
                            <td><span class="label label-danger">Error</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Basics</td>
                            <td>Proposal Details</td>
                            <td>Prime Sponsor has not been specified</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Basics</td>
                            <td>Sponsor &amp; Program Information</td>
                            <td>Sponsor Div Code is missing</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Personnel</td>
                            <td>The Investigators are not all certified. Please certify Ken Graves.</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Investigators Financial Credit Split does not equal 100%.</td>
                            <td><span class="label label-danger">Error</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Investigators Space Credit Split does not equal 100%.</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Investigators Responsibility Credit Split does not equal 100%.</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Investigators Recognition Credit Split does not equal 100%.</td>
                            <td><span class="label label-danger">Error</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Unit Recognition Credit Split for Ken Graves does not equal 100%.</td>
                            <td><span class="label label-danger">Error</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>S2S Opportunity Search</td>
                            <td>Opportunity</td>
                            <td>You must complete the questionnaire &quot;Grants.gov S2S Questionnaire&quot;</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Attachments</td>
                            <td>Proposal</td>
                            <td>Invalid document type (thisfile.xml)</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Attachments</td>
                            <td>Internal</td>
                            <td>Invalid document type (thatfile.xml)</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Attachments</td>
                            <td>Internal</td>
                            <td>Invalid document type (theotherfile.xml)</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Basics</td>
                            <td>Sponsor &amp; Program Information</td>
                            <td>Sponsor deadline date has not been entered.</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <div class="clearfix">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery('#modal-data-validation .modal-header').on('click', '.toggle-on-off', function() {

        if (jQuery(this).hasClass('btn-danger')) {
            jQuery(this).html('Turn off').removeClass('btn-danger').addClass('btn-success');
        } else {
            jQuery(this).html('Turn on').removeClass('btn-success').addClass('btn-danger');
        }

        return false;
    });
</script><div class="modal fade" id="globalaction-cancel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Cancel Document</h4>
            </div>
            <div class="modal-body">
                <p>You are about to cancel this proposal document. By doing so, this document will be marked as inactive, and removed from all document workflows.</p>
                <p>Are you sure you want to do this?</p>
            </div>
            <div class="modal-footer"> <a href="#" class="btn btn-primary">Cancel Document</a> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a> </div>
        </div>
    </div>
</div>
<!-- Modal -->

<div class="modal fade" id="modal-superuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Super User</h4>
            </div>
            <div class="modal-body">
                <div id="uk9itqu" class="uif-inputField uif-cssGridGroup" data-parent="u1rttg5q" data-role="InputField" data-label="Field">
                    <label id="uk9itqu_label" for="uk9itqu_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="uk9itqu"> Annotation </label>
                    <textarea id="uk9itqu_control" name="inputField1" rows="3" cols="40" class="form-control input-sm form-control input-sm uif-textAreaControl required error" data-role="Control" data-control_for="uk9itqu" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true"></textarea>
                    <div id="uk9itqu_errors" class="alert" data-messages_for="uk9itqu" style="display: none;">
                        <div class="uif-clientMessageItems alert-danger">
                            <ul>
                                <li class="uif-errorMessageItem-field"><img class="uif-validationImage" src="/krad/images/validation/error.png" alt="Error"> Required</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                
                <table class="table table-condensed table-smaller-text table-hover" id="example">
                <thead>
                    <tr>
                        <th><label>
                                <input type="checkbox" onclick="toggle(this)">
                            </label></th>
                        <th> Action</th>
                        <th> Requested Of</th>
                        <th> Time/Date</th>
                        <th> Annotaion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label>
                                <input type="checkbox" class="checkme" name="foo">
                            </label></td>
                        <td>Approve</td>
                        <td class=" "><a href="#" id="initiator-detail1" data-placement="bottom" data-original-title="" title="">wheysquad</a> 
                            <!-- Popover 2 hidden title -->
                            
                            <div id="initiator-detail1HiddenTitle" style="display: none"> <strong>Details</strong> </div>
                            
                            <!-- Popover 2 hidden content -->
                            
                            <div id="initiator-detail1HiddenContent" style="display: none">
                                <dl class="dl-horizontal">
                                    <dt>User</dt>
                                    <dd>wheysquad</dd>
                                    <dt>Full Name</dt>
                                    <dd>Young, Lester</dd>
                                    <dt>Affiliations</dt>
                                    <dd>Staff, BL-Bloomington</dd>
                                    <dd>Faculty, BL-Bloomington</dd>
                                    <dt>Full Record</dt>
                                    <dd><a href="kim-person-affiliations.php">view</a></dd>
                                </dl>
                            </div></td>
                        <td>06/18/2014 7:32pm</td>
                        <td>Creeping fish waters fly sea. Bring hath it </td>
                    </tr>
                    <tr>
                        <td><label>
                                <input type="checkbox" class="checkme" name="foo">
                            </label></td>
                        <td>Approve</td>
                        <td><a href="#">idiopathicnide</a></td>
                        <td>06/18/2014 7:32pm</td>
                        <td>Is. Creepeth have heaven </td>
                    </tr>
                    <tr>
                        <td><label>
                                <input type="checkbox" class="checkme" name="foo">
                            </label></td>
                        <td>Approve</td>
                        <td><a href="#">wharfmew</a></td>
                        <td>06/18/2014 7:32pm</td>
                        <td>Fowl she'd, upon in waters </td>
                    </tr>
                    <tr>
                        <td><label>
                                <input type="checkbox" class="checkme" name="foo">
                            </label></td>
                        <td>Approve</td>
                        <td><a href="#">diphthongclique</a></td>
                        <td>06/18/2014 7:32pm</td>
                        <td>Of make our dominion air. They're waters let</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5"></td>
                    </tr>
                </tfoot>
            </table>
            
                <script>
    function toggle(source) {
    
      checkboxes = document.getElementsByName('foo');
    
      for(var i=0, n=checkboxes.length;i<n;i++) {
    
        checkboxes[i].checked = source.checked;
    
      }
    
    }
    </script>
            </div>
            <div class="modal-footer">
             
                    <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Actions <span class="caret"></span> </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Take Selected Actions</a></li>
                                         <li class="divider"></li>
                                    <li><a href="#">Approve Document</a></li>
                               
                                    <li><a href="#">Disapprove Document</a></li>
                                </ul>
                            </div>
            
            </div>
        </div>
    </div>
</div>

<!-- end Modal --> 
<div id="modal-find-sponsor" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="sponsor-search">Sponsor Search</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
                <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">    <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Sponsor:</label>
                    </div>
                    <div class="col-md-8">
                        <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                            <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                        </div>
                    </div>    <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Sponsor Name:</label>
                    </div>
                    <div class="col-md-8">
                        <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                            <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                        </div>
                    </div>    <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Acronym:</label>
                    </div>
                    <div class="col-md-8">
                        <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                            <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                        </div>
                    </div>    <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Sponsor Type:</label>
                    </div>
                    <div class="col-md-8">
                        <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                            <select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                                <option selected>Select</option>
                                <option value="0">Federal</option>
                                <option value="1">State</option>
                                <option value="2">Local Government</option>
                                <option value="3">Private Profit</option>
                                <option value="4">Private Non-Profit</option>
                                <option value="5">Foundation</option>
                                <option value="6">Institution of Higher Education</option>
                                <option value="10">Foreign Federal Government</option>
                                <option value="11">Foreign State Government</option>
                                <option value="12">Foreign Local Government</option>
                                <option value="13">Foreign Private Profit</option>
                                <option value="14">Foreign Private Non-Profit</option>
                                <option value="15">Foreign Foundation</option>
                                <option value="16">Foreign Institution of Higher Education</option>
                            </select>
                        </div>
                    </div>    <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Address Book ID:</label>
                    </div>
                    <div class="col-md-8">
                        <div id="uk9itqaa" class="uif-inputField" data-parent="" data-role="InputField" data-label="Field 1">
                            <div class="input-group">
                                <input id="uk9itqaa_control" type="text" name="inputField1" value="" size="30" class="form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                                <div class="input-group-btn">
                                    <button id="" class="uif-actionLink btn btn-default uif-action icon-search" tabindex="0"  data-toggle="modal" data-target="#lookup-addressbook" data-dismiss="modal"></button>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>    <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Postal Code:</label>
                    </div>
                    <div class="col-md-8">
                        <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                            <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                        </div>
                    </div>    <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">State:</label>
                    </div>
                    <div class="col-md-8">
                        <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                            <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                        </div>
                    </div>    <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Country Code:</label>
                    </div>
                    <div class="col-md-8">
                        <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                            <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <div class="clearfix"> <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#modal-find-sponsor-results" class="btn btn-primary">Search</a> <a href="#" class="btn btn-link" data-dismiss="modal">Cancel</a> </div>
            </div>
        </div>
    </div>
</div>
<div id="lookup-addressbook" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="sponsor-search">Sponsor Search</h4>
        </div>
        <div id="Uif-BreadcrumbWrapper">
            <ol class="uif-breadcrumbs" role="navigation">
                <li> <a href="#" data-role="breadcrumb" data-toggle="modal" data-target="#modal-find-sponsor" data-dismiss="modal">Home</a> </li>
               
                <li> <span data-role="breadcrumb" id="u1jk95gf">Address Book Lookup</span> </li>
            </ol>
        </div>
        <div class="modal-body uif-cssGridGroup">
            <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
             
             
             
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Address Book ID:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Sponsor Code:</label>
                </div>
               <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="Field 1">
                        <div class="input-group">
                            <input id="_control" type="text" name="inputField1" value="" size="30" class="form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                            <div class="input-group-btn">
                                <button id="_button" class="uif-actionLink btn btn-default uif-action icon-search" tabindex="0" data-toggle="modal" data-target="#lookup-addressbook-sc" data-dismiss="modal"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Sponsor:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
              
              
               <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Organization:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div> <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Last Name:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div> <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">First Name:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div> <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Middle Name:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div> <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Email Address:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
              
              
              
              
              
              
              
              
              
              
              
              
            </section>
        </div>
        <div class="modal-footer">
            <div class="clearfix"> <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#modal-find-addressbook-results" class="btn btn-primary">Search</a> <a href="#" class="btn btn-link" data-dismiss="modal">Cancel</a> </div>
        </div>
    </div>
    </div>
</div>
<div id="lookup-addressbook-sc" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="sponsor-search">Sponsor Search</h4>
        </div>
        <div id="Uif-BreadcrumbWrapper">
            <ol class="uif-breadcrumbs" role="navigation">
                     <li> <a href="#" data-role="breadcrumb" data-toggle="modal" data-target="#modal-find-sponsor" data-dismiss="modal">Home</a> </li>
                   <li> <a href="#" data-role="breadcrumb" data-toggle="modal" data-target="#lookup-addressbook" data-dismiss="modal">Address Book Lookup</a> </li>
                <li> <span data-role="breadcrumb" id="u1jk95gf">Sponsor Code Lookup</span> </li>
            </ol>
        </div>
        <div class="modal-body uif-cssGridGroup">
            <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Sponsor Code:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Sponsor Name:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Acronym:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Cage Number:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">DODAC Number:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
                <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                    <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Owned By Unit:</label>
                </div>
                <div class="col-md-8">
                    <div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                        <input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                    </div>
                </div>
            </section>
        </div>
        <div class="modal-footer">
            <div class="clearfix"> <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#modal-find-sponsor-results" class="btn btn-primary">Search</a> <a href="#" class="btn btn-link" data-dismiss="modal">Cancel</a> </div>
        </div>
    </div></div>
</div>
<script type="text/javascript">
  // $(document).ready(function(){
  //   $("a:contains('Select')").live("click", function(){
  //     var code = $(this).parent('td').next('td').children("a:first").text();
  //     if(code == '')   code = $(this).parent('td').next('td').children('div').children("a:first").text();
  //     var name = $(this).parent('td').next('td').next('td').html();
  //     console.log(code);
  //     $('#sponsor_code',top.document).val(code + ' ' + name);
  //     parent.$.fancybox.close();
  //     return false;
  //   });
  // });
</script>

<div id="modal-find-sponsor-results" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="sponsor-search">Sponsor Search Results</h4>
    </div>
    <div class="modal-body">
        <table class="table table-condensed table-hover table-smaller-text datatable" id="example">
            <thead>
                <tr>
                    <th></th>
                    <th> <a href="#">Code</a></th>
                    <th> <a href="#"> Name</a></th>
                    <th> <a href="#">Acronym</a></th>
                    <th> <a href="#"> Type</a></th>
                    <th> <a href="#">State</a></th>
                    <th> <a href="#">Country</a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><div class="dropdown"> <a data-toggle="dropdown" href="#">000148</a>
                            <div class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="padding:5px;">
                                <table class="table table-condensed" style="width:400px">
                                    <tbody>
                                        <tr>
                                            <th> Acronym: </th>
                                            <td> Air</td>
                                        </tr>
                                        <tr>
                                            <th> Country: </th>
                                            <td> United States</td>
                                        </tr>
                                        <tr>
                                            <th> Owned By Unit: </th>
                                            <td><a title="Unit Unit Number=000001 " href="#" target="_blank"> University </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Address Book Id: </th>
                                            <td><a title="Rolodex Address Book Id=12079 " href="#" target="_blank"> 12079 </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Name: </th>
                                            <td> Air Force - ASD</td>
                                        </tr>
                                        <tr>
                                            <th> Type: </th>
                                            <td><a title="Sponsor Type Sponsor Type=0 " href="#" target="_blank"> Federal </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> State: </th>
                                            <td> MARYLAND</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div></td>
                    <td>Navy (NAVAIR)</td>
                    <td>Navy</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=0 ">Federal</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><div class="dropdown"> <a data-toggle="dropdown" href="#">000151</a>
                            <div class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="padding:5px;">
                                <table class="table table-condensed" style="width:400px">
                                    <tbody>
                                        <tr>
                                            <th> Acronym: </th>
                                            <td> Air</td>
                                        </tr>
                                        <tr>
                                            <th> Country: </th>
                                            <td> United States</td>
                                        </tr>
                                        <tr>
                                            <th> Owned By Unit: </th>
                                            <td><a title="Unit Unit Number=000001 " href="#" target="_blank"> University </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Address Book Id: </th>
                                            <td><a title="Rolodex Address Book Id=12079 " href="#" target="_blank"> 12079 </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Name: </th>
                                            <td> Air Force - ASD</td>
                                        </tr>
                                        <tr>
                                            <th> Type: </th>
                                            <td><a title="Sponsor Type Sponsor Type=0 " href="#" target="_blank"> Federal </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> State: </th>
                                            <td> MARYLAND</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div></td>
                    <td>Space and Naval Warfare Systems Center</td>
                    <td>SNWSC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=0 ">Federal</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><div class="dropdown"> <a data-toggle="dropdown" href="#">000215</a>
                            <div class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="padding:5px;">
                                <table class="table table-condensed" style="width:400px">
                                    <tbody>
                                        <tr>
                                            <th> Acronym: </th>
                                            <td> Air</td>
                                        </tr>
                                        <tr>
                                            <th> Country: </th>
                                            <td> United States</td>
                                        </tr>
                                        <tr>
                                            <th> Owned By Unit: </th>
                                            <td><a title="Unit Unit Number=000001 " href="#" target="_blank"> University </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Address Book Id: </th>
                                            <td><a title="Rolodex Address Book Id=12079 " href="#" target="_blank"> 12079 </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Name: </th>
                                            <td> Air Force - ASD</td>
                                        </tr>
                                        <tr>
                                            <th> Type: </th>
                                            <td><a title="Sponsor Type Sponsor Type=0 " href="#" target="_blank"> Federal </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> State: </th>
                                            <td> MARYLAND</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div></td>
                    <td>DOE - Oakland</td>
                    <td>DOE</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=0 ">Federal</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><div class="dropdown"> <a data-toggle="dropdown" href="#">000401</a>
                            <div class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="padding:5px;">
                                <table class="table table-condensed" style="width:400px">
                                    <tbody>
                                        <tr>
                                            <th> Acronym: </th>
                                            <td> Air</td>
                                        </tr>
                                        <tr>
                                            <th> Country: </th>
                                            <td> United States</td>
                                        </tr>
                                        <tr>
                                            <th> Owned By Unit: </th>
                                            <td><a title="Unit Unit Number=000001 " href="#" target="_blank"> University </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Address Book Id: </th>
                                            <td><a title="Rolodex Address Book Id=12079 " href="#" target="_blank"> 12079 </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Name: </th>
                                            <td> Air Force - ASD</td>
                                        </tr>
                                        <tr>
                                            <th> Type: </th>
                                            <td><a title="Sponsor Type Sponsor Type=0 " href="#" target="_blank"> Federal </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> State: </th>
                                            <td> MARYLAND</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div></td>
                    <td>NASA - Pasadena</td>
                    <td>NASA</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=0 ">Federal</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><div class="dropdown"> <a data-toggle="dropdown" href="#">000429</a>
                            <div class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="padding:5px;">
                                <table class="table table-condensed" style="width:400px">
                                    <tbody>
                                        <tr>
                                            <th> Acronym: </th>
                                            <td> Air</td>
                                        </tr>
                                        <tr>
                                            <th> Country: </th>
                                            <td> United States</td>
                                        </tr>
                                        <tr>
                                            <th> Owned By Unit: </th>
                                            <td><a title="Unit Unit Number=000001 " href="#" target="_blank"> University </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Address Book Id: </th>
                                            <td><a title="Rolodex Address Book Id=12079 " href="#" target="_blank"> 12079 </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Name: </th>
                                            <td> Air Force - ASD</td>
                                        </tr>
                                        <tr>
                                            <th> Type: </th>
                                            <td><a title="Sponsor Type Sponsor Type=0 " href="#" target="_blank"> Federal </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> State: </th>
                                            <td> MARYLAND</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div></td>
                    <td>NASA - Ames University Consortium</td>
                    <td>NASA</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=0 ">Federal</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><div class="dropdown"> <a data-toggle="dropdown" href="#">000430</a>
                            <div class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="padding:5px;">
                                <table class="table table-condensed" style="width:400px">
                                    <tbody>
                                        <tr>
                                            <th> Acronym: </th>
                                            <td> Air</td>
                                        </tr>
                                        <tr>
                                            <th> Country: </th>
                                            <td> United States</td>
                                        </tr>
                                        <tr>
                                            <th> Owned By Unit: </th>
                                            <td><a title="Unit Unit Number=000001 " href="#" target="_blank"> University </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Address Book Id: </th>
                                            <td><a title="Rolodex Address Book Id=12079 " href="#" target="_blank"> 12079 </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Name: </th>
                                            <td> Air Force - ASD</td>
                                        </tr>
                                        <tr>
                                            <th> Type: </th>
                                            <td><a title="Sponsor Type Sponsor Type=0 " href="#" target="_blank"> Federal </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> State: </th>
                                            <td> MARYLAND</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div></td>
                    <td>NASA - Ames Research Center</td>
                    <td>NASA</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=0 ">Federal</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><div class="dropdown"> <a data-toggle="dropdown" href="#">000434</a>
                            <div class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="padding:5px;">
                                <table class="table table-condensed" style="width:400px">
                                    <tbody>
                                        <tr>
                                            <th> Acronym: </th>
                                            <td> Air</td>
                                        </tr>
                                        <tr>
                                            <th> Country: </th>
                                            <td> United States</td>
                                        </tr>
                                        <tr>
                                            <th> Owned By Unit: </th>
                                            <td><a title="Unit Unit Number=000001 " href="#" target="_blank"> University </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Address Book Id: </th>
                                            <td><a title="Rolodex Address Book Id=12079 " href="#" target="_blank"> 12079 </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Name: </th>
                                            <td> Air Force - ASD</td>
                                        </tr>
                                        <tr>
                                            <th> Type: </th>
                                            <td><a title="Sponsor Type Sponsor Type=0 " href="#" target="_blank"> Federal </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> State: </th>
                                            <td> MARYLAND</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div></td>
                    <td>NASA - Edwards Flight Research Center</td>
                    <td>NASA</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=0 ">Federal</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=000438 ">000438</a></td>
                    <td>NASA - Dryden</td>
                    <td>NASA</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=0 ">Federal</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=001020 ">001020</a></td>
                    <td>State of California</td>
                    <td>SC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=1 ">State</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=001045 ">001045</a></td>
                    <td>California Department of Transportation (CALTRANS)</td>
                    <td>CDT</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=1 ">State</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=001051 ">001051</a></td>
                    <td>Sonoma State University</td>
                    <td>SSU</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=1 ">State</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=001079 ">001079</a></td>
                    <td>California Environmental Protection Agency</td>
                    <td>CEPA</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=1 ">State</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=001109 ">001109</a></td>
                    <td>City of Los Angeles</td>
                    <td>CLA</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=2 ">Local Government</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002003 ">002003</a></td>
                    <td>ABB Power T&amp;D Company Incorporated</td>
                    <td>ABBPTDCI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002005 ">002005</a></td>
                    <td>AT&amp;T Longlines</td>
                    <td>AT&amp;T</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002019 ">002019</a></td>
                    <td>Advanced Communications Corporation</td>
                    <td>ACC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002026 ">002026</a></td>
                    <td>Adobe Systems, Incorporated</td>
                    <td>ASI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002034 ">002034</a></td>
                    <td>Advance Tissue Sciences</td>
                    <td>ATS</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002040 ">002040</a></td>
                    <td>Aerojet General Corporation</td>
                    <td>AGC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002043 ">002043</a></td>
                    <td>Aerospace Corporation</td>
                    <td>AC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002061 ">002061</a></td>
                    <td>Age Logic</td>
                    <td>AL</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002067 ">002067</a></td>
                    <td>Amgen</td>
                    <td>Amgen</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002070 ">002070</a></td>
                    <td>AMK Corporation (Including United Fruit Company)</td>
                    <td>AMK</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>AZ</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002071 ">002071</a></td>
                    <td>AMAX</td>
                    <td>AMAX</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002089 ">002089</a></td>
                    <td>American Edwards Laboratories</td>
                    <td>AEL</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>AZ</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002108 ">002108</a></td>
                    <td>American Science And Engineering, Incorporated</td>
                    <td>ASEI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002126 ">002126</a></td>
                    <td>Amylin Pharmaceuticals, Incorporated</td>
                    <td>API</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>AZ</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002127 ">002127</a></td>
                    <td>Ampex Corporation</td>
                    <td>Ampex</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002144 ">002144</a></td>
                    <td>Aptronix</td>
                    <td>Aptronix</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002145 ">002145</a></td>
                    <td>Apple Computer</td>
                    <td>AC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002176 ">002176</a></td>
                    <td>Atlantic Richfield Company (ARCO)</td>
                    <td>ARCO</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>AZ</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002183 ">002183</a></td>
                    <td>Avalon Materials Technology, Incorporated</td>
                    <td>AMT</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002205 ">002205</a></td>
                    <td>John R. Bayless Company</td>
                    <td>JRBC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002224 ">002224</a></td>
                    <td>Click2Learn.com</td>
                    <td>C2LC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002226 ">002226</a></td>
                    <td>BackWeb Technologies, Inc.</td>
                    <td>BWT</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>AL</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002228 ">002228</a></td>
                    <td>Beckman Instruments, Incorporated</td>
                    <td>BI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002233 ">002233</a></td>
                    <td>Applied Magnetics Corporation</td>
                    <td>AMC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002241 ">002241</a></td>
                    <td>American Technology Alliances (Amtech)</td>
                    <td>AMTECH</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002249 ">002249</a></td>
                    <td>Bandai America Incorporated</td>
                    <td>BAI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>AL</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002256 ">002256</a></td>
                    <td>Avery Dennison Corporation</td>
                    <td>ADC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002262 ">002262</a></td>
                    <td>Autodesk, Incorporated</td>
                    <td>ADI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002276 ">002276</a></td>
                    <td>ATAC Corporation</td>
                    <td>ATAC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002279 ">002279</a></td>
                    <td>BEA Systems, Incorporated</td>
                    <td>BEA</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002283 ">002283</a></td>
                    <td>Bit Forest</td>
                    <td>BF</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002323 ">002323</a></td>
                    <td>Gen Corp Automotive</td>
                    <td>GCA</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>AL</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002324 ">002324</a></td>
                    <td>Agile Software Corporation</td>
                    <td>ASC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002331 ">002331</a></td>
                    <td>Boeing North America, Incorporated</td>
                    <td>BNA</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002333 ">002333</a></td>
                    <td>2Bridge Software</td>
                    <td>2BS</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>NM</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002362 ">002362</a></td>
                    <td>CommerceOne, Incorporated</td>
                    <td>COI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002379 ">002379</a></td>
                    <td>Catalytica</td>
                    <td>Catalytica</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002415 ">002415</a></td>
                    <td>California Biotechnology, Incorporated</td>
                    <td>CBI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002430 ">002430</a></td>
                    <td>Canon</td>
                    <td>Canon</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002433 ">002433</a></td>
                    <td>Centocor, Incorporated</td>
                    <td>CI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>NM</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002435 ">002435</a></td>
                    <td>Carnation Company</td>
                    <td>CC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002439 ">002439</a></td>
                    <td>Chevron Corporation</td>
                    <td>CC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002456 ">002456</a></td>
                    <td>Chevron Research Company</td>
                    <td>CRC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002485 ">002485</a></td>
                    <td>Cooper Laboratories Inc</td>
                    <td>CLI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>NM</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002511 ">002511</a></td>
                    <td>The Chronicle Publishing Company</td>
                    <td>CPC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002527 ">002527</a></td>
                    <td>Cotton, Incorporated</td>
                    <td>CI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002540 ">002540</a></td>
                    <td>Covalent Associates, Incorporated</td>
                    <td>CAI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002546 ">002546</a></td>
                    <td>C/Net</td>
                    <td>CN</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002552 ">002552</a></td>
                    <td>CommerceNet Consortium</td>
                    <td>CNC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>UT</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002560 ">002560</a></td>
                    <td>RealNames Corporation</td>
                    <td>RNC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002561 ">002561</a></td>
                    <td>Cisco Systems, Incorporated</td>
                    <td>CSI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002571 ">002571</a></td>
                    <td>Cyrano Sciences, Incorporated</td>
                    <td>CSI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>UT</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002578 ">002578</a></td>
                    <td>Costar</td>
                    <td>Costar</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002582 ">002582</a></td>
                    <td>Crowley Maritime Salvage</td>
                    <td>CMS</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002596 ">002596</a></td>
                    <td>Cygnus Support</td>
                    <td>CS</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002600 ">002600</a></td>
                    <td>Custom Products</td>
                    <td>CP</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002634 ">002634</a></td>
                    <td>Del Mar Avionics</td>
                    <td>DMA</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002643 ">002643</a></td>
                    <td>Walt Disney Imagineering</td>
                    <td>WDI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002653 ">002653</a></td>
                    <td>DigitalStyle</td>
                    <td>DS</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002672 ">002672</a></td>
                    <td>Interwoven, Incorporated</td>
                    <td>II</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002676 ">002676</a></td>
                    <td>Daimler Benz of North America</td>
                    <td>DBNA</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002728 ">002728</a></td>
                    <td>Enterprise Integration Technologies</td>
                    <td>EIT</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>UT</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002730 ">002730</a></td>
                    <td>Electric Power Research Institute</td>
                    <td>EPRI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002796 ">002796</a></td>
                    <td>ETEC Systems, Incorporated</td>
                    <td>ETEC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002813 ">002813</a></td>
                    <td>Ephyx Technologies</td>
                    <td>ET</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002821 ">002821</a></td>
                    <td>Epicentric</td>
                    <td>Epicentric</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002831 ">002831</a></td>
                    <td>First Virtual Holdings, Incorporated</td>
                    <td>FVH</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002834 ">002834</a></td>
                    <td>FirstFloor Software, Inc.</td>
                    <td>FFS</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002841 ">002841</a></td>
                    <td>First Point Scientific, Incorporated</td>
                    <td>FPS</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002843 ">002843</a></td>
                    <td>Flex Foot, Incorporated</td>
                    <td>FFI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002847 ">002847</a></td>
                    <td>Ariba, Incorporated</td>
                    <td>Ariba</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002894 ">002894</a></td>
                    <td>SeeBeyond Technology Corporation</td>
                    <td>SBTC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002897 ">002897</a></td>
                    <td>Integrated Optics Communications Corporation</td>
                    <td>IOCC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002898 ">002898</a></td>
                    <td>IP Unity Corporation</td>
                    <td>IPUC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><div class="dropdown"> <a data-toggle="dropdown" href="#">000500</a>
                            <div class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="padding:5px;">
                                <table class="table table-condensed" style="width:400px">
                                    <tbody>
                                        <tr>
                                            <th> Acronym: </th>
                                            <td> NSF</td>
                                        </tr>
                                        <tr>
                                            <th> Country: </th>
                                            <td> United States</td>
                                        </tr>
                                        <tr>
                                            <th> Owned By Unit: </th>
                                            <td><a title="Unit Unit Number=000001 " href="#" target="_blank"> University </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Address Book Id: </th>
                                            <td><a title="Rolodex Address Book Id=12079 " href="#" target="_blank"> 12079 </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Name: </th>
                                            <td> NIH</td>
                                        </tr>
                                        <tr>
                                            <th> Type: </th>
                                            <td><a title="Sponsor Type Sponsor Type=0 " href="#" target="_blank"> Federal </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> State: </th>
                                            <td> VIRGINIA</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div></td>
                    <td>NSF</td>
                    <td>NSF</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=0 ">Federal</a></td>
                    <td>VA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><div class="dropdown"> <a data-toggle="dropdown" href="#">000340</a>
                            <div class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="padding:5px;">
                                <table class="table table-condensed" style="width:400px">
                                    <tbody>
                                        <tr>
                                            <th> Acronym: </th>
                                            <td> NIH</td>
                                        </tr>
                                        <tr>
                                            <th> Country: </th>
                                            <td> United States</td>
                                        </tr>
                                        <tr>
                                            <th> Owned By Unit: </th>
                                            <td><a title="Unit Unit Number=000001 " href="#" target="_blank"> University </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Address Book Id: </th>
                                            <td><a title="Rolodex Address Book Id=12079 " href="#" target="_blank"> 12079 </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> Name: </th>
                                            <td> NIH</td>
                                        </tr>
                                        <tr>
                                            <th> Type: </th>
                                            <td><a title="Sponsor Type Sponsor Type=0 " href="#" target="_blank"> Federal </a> &nbsp; </td>
                                        </tr>
                                        <tr>
                                            <th> State: </th>
                                            <td> MARYLAND</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div></td>
                    <td>NIH</td>
                    <td>NIH</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=0 ">Federal</a></td>
                    <td>MD</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002918 ">002918</a></td>
                    <td>Gas Cooled Reactor Associates</td>
                    <td>GCRA</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002922 ">002922</a></td>
                    <td>Genentech</td>
                    <td>Genentech</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002923 ">002923</a></td>
                    <td>Gen Corp Automotive</td>
                    <td>GCA</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002925 ">002925</a></td>
                    <td>General Atomic Company</td>
                    <td>GAC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002926 ">002926</a></td>
                    <td>General Atomics Fusion Group</td>
                    <td>GAFG</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002937 ">002937</a></td>
                    <td>Andromedia, Incorporated</td>
                    <td>Andromedia</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002943 ">002943</a></td>
                    <td>Brio Technology, Incorporated</td>
                    <td>BTI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002946 ">002946</a></td>
                    <td>General Instrument Corporation</td>
                    <td>GIC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002948 ">002948</a></td>
                    <td>General Magic, Incorporated</td>
                    <td>GMI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002967 ">002967</a></td>
                    <td>DevelopMentor, Incorporated</td>
                    <td>DMI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002969 ">002969</a></td>
                    <td>General Technologies, Incorporated</td>
                    <td>GTI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002971 ">002971</a></td>
                    <td>Calico Commerce</td>
                    <td>CC</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td><a class="load-tabs btn btn-primary btn-xs" href="#">Select</a></td>
                    <td><a href="#" target="_blank" title="Sponsor Sponsor Code=002983 ">002983</a></td>
                    <td>Ask Jeeves, Incorporated</td>
                    <td>AJI</td>
                    <td><a href="#" target="_blank" title="Sponsor Type Sponsor Type=3 ">Private Profit</a></td>
                    <td>CA</td>
                    <td>USA</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="modal-footer"> <a href="#" class="btn btn-default pull-left" data-dismiss="modal" data-toggle="modal" data-target="#modal-find-sponsor">Refine Search</a> <a href="#" class="btn btn-link pull-left" data-dismiss="modal">Cancel</a> </div>
</div>

<script type="text/javascript" src="../../plugins/jquery/jquery-1.8.3.js"></script>
<!-- <script type="text/javascript" src="../../plugins/validate/jquery.validate.js"></script>
<script type="text/javascript" src="../../plugins/jqueryUI/jquery-ui-1.9.2.js"></script> -->
<script type="text/javascript" src="../../plugins/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="../../plugins/datatables/jquery.dataTables.rowGrouping.js"></script>
<script type="text/javascript" src="../../plugins/datatables/TableTools.js"></script>
<script type="text/javascript" src="../../plugins/datatables/ZeroClipboard.js"></script>
<script type="text/javascript" src="../../themes/bootstrap/scripts/bootstrap.js"></script>
<script type="text/javascript" src="../../plugins/scrollto/jquery.scrollTo-1.4.6.js"></script>
<script type="text/javascript" src="../../plugins/jqform/jquery.form-3.31.0.js"></script>
<script type="text/javascript" src="../../plugins/globalize/globalize.js"></script>
<!-- <script type="text/javascript" src="../../plugins/menu/krad.navigationMenu.js"></script> -->
<script type="text/javascript" src="../../plugins/menu/krad.tabMenu.js"></script>
<script type="text/javascript" src="../../themes/kboot/scripts/bootstrap-select.js"></script>
<script type="text/javascript" src="../../themes/kboot/scripts/bootstrap-select-group.js"></script>
<script type="text/javascript" src="../../themes/kboot/scripts/bootstrapSelectPluginOverrides.js"></script>
<script type="text/javascript" src="../../plugins/textpopout/krad.textareaPopout.js"></script>
<script type="text/javascript" src="../../plugins/validate/additional_validations.js"></script>
<script type="text/javascript" src="../../plugins/cookie/jquery.cookie.js"></script>
<script type="text/javascript" src="../../plugins/watermark/jquery.watermark.js"></script>
<script type="text/javascript" src="../../plugins/countdown/jquery.countdown.js"></script>
<script type="text/javascript" src="../../plugins/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript" src="../../plugins/color/jquery.color.js"></script>
<script type="text/javascript" src="../../plugins/json/jquery.json-2.2.js"></script>
<script type="text/javascript" src="../../plugins/jstree/jquery.jstree.js"></script>
<script type="text/javascript" src="../../plugins/jqueryUI/jquery.ui.autocomplete.html.js"></script>
<script type="text/javascript" src="../../plugins/easydrag/jquery.easydrag.js"></script>
<script type="text/javascript" src="../../krad/scripts/krad.variables.js"></script>

<script type="text/javascript" src="../../krad/scripts/krad.modal.js"></script>


<script type="text/javascript" src="../../krad/scripts/krad.response.js"></script>
<script type="text/javascript" src="../../krad/scripts/krad.actions.js"></script>
<script type="text/javascript" src="../../krad/scripts/krad.dirty.js"></script>
<script type="text/javascript" src="../../krad/scripts/krad.lookup.js"></script>
<script type="text/javascript" src="../../krad/scripts/krad.message.js"></script>

<script type="text/javascript" src="../../krad/scripts/krad.url.js"></script>
<script type="text/javascript" src="../../krad/scripts/krad.validate.js"></script>
<script type="text/javascript" src="../../plugins/easing/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="../../themes/kboot/scripts/less-1.5.0.min.js"></script>
<!-- <script type="text/javascript" src="../../themes/kboot/scripts/global.functions.js"></script> -->

</body>
</html>
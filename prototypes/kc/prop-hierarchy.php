<?php
$page = 'hierarchy';
$section = '';
?>
<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <title>
      Kuali :: Fluid Application Header
    </title>
    <!-- GLOBAL STYLES -->
    <?php include ('includes/styles.php') ?>
    <style type="text/css">
      #u569ish_line0  td:nth-child(2){
    min-width:160px;
  }
  small{
    display:none;
  }
  .showMe small {
    display:inline;
  }
  main{margin-bottom:7em;}
  
  #link1,#link2{display:none;}
  </style>
  </head>
  <body id="Uif-Application">
    <!-- APPLICATION HEADER -->
    <?php include('includes/uif-applicationHeader.php') ?>
    <form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
      <!-- VIEW -->
      <div id="LabsProposal" class="clearfix uif-formView" data-role="View">
        <!-- BREADCRUMBS -->
        <!-- VIEW HEADER -->
        <!-- VIEW HEADER -->
        <?php include ('includes/uif-viewHeader-pd.php') ?>
        <!-- // VIEW HEADER  -->
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid">
          <!-- VIEW NAVIGATION -->
          <?php include ('includes/uif-navigation-proposal.php') ?>
          <main class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
            <div class="uif-header-inner">
              <h2 class="uif-headerText">
                <span class="uif-headerText-span">
                  Hierarchy 
                </span>
              </h2>
            </div>
            <div class="uif-gridSubSection">
              <!-- BUDGET Hierarchy -->
              <fieldset class="clearfix">
                <legend class="sr-only">
                  Hierarchy
                </legend>
                <div class="form-group clearfix">
                  <label for="link-child" class=" col-md-2 uif-label uif-labelBlock" data-label_for="">
                    Link Child Proposal: 
                  </label>
                  <div class="col-sm-6">
                    <input type="text" name="link-child" id="link-child" class="form-control input-sm uif-textControl required error" placeholder="">
                  </div>
                </div>
                <div class="form-group clearfix">
                  <label for="link-budget" class="col-md-2  uif-label  uif-labelBlock" data-label_for="">
                    Link Budget Type: 
                  </label>
                  <div class="col-sm-6 ">
                    <select name="newHierarchyBudgetTypeCode" tabindex="3" onchange="" onblur="" id="link-budget" style="" class="form-control input-sm uif-textControl" title="Hierarchy Budget Type">
                      <option value="B" selected="selected">
                        Sub-Budget
                      </option>
                      <option value="P">
                        Sub-Project
                      </option>
                    </select>
                  </div>
                </div>
              </fieldset>
              <div class="clearfix pull-right">
                <a class="btn btn-default btn-xs pull-left" href="#" id="link-hierarchy">
                  Link to Hierarchy 
                </a>
                
                <a class="btn btn-default  btn-xs pull-left" href="#" id="create-hierarchy">
                  Create Hierarchy 
                </a>
              </div>
              <!-- tabs -->
              
              <!-- div id="link1">
              
              <div class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                <ul id="tabs1" class="nav nav-tabs" data-tabs="tabs1">
                  <li class="active">
                    <a href="#parent-1" data-toggle="tab">
                      Parent (Proposal # 31) 
                    </a>
                  </li>
                  <li>
                    <a href="#child-1" data-toggle="tab">
                      Child (Proposal # 14) 
                    </a>
                  </li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                  <div class="tab-pane active" id="parent-1">
                    <div class="uif-header-inner">
                      <h3 class="uif-headerText">
                        <span class="uif-headerText-span">
                          Parent (Proposal # 31) 
                        </span>
                      </h3>
                      <h4>
                        Proposal Summary - Not synced
                      </h4>
                      <div class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                        <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#income">
                          
                          <span aria-hidden="true" class="icon-unlink">
                            
                          </span>
                          Unlink Hierarchy 
                        </a>
                      </div>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-6" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Overview 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-6" class="panel-collapse collapse">
                            <div class="panel-body">
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th>
                                      Proposal Number:
                                    </th>
                                    <td class="text-left">
                                      31&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Status:
                                    </th>
                                    <td class="text-left">
                                      In Progress&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Project Start Date:
                                    </th>
                                    <td class="text-left">
                                      2014-08-01&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Proposal Type:
                                    </th>
                                    <td class="text-left">
                                      New&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Project End Date:
                                    </th>
                                    <td class="text-left">
                                      2016-08-01&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Narrative:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Lead Unit:
                                    </th>
                                    <td class="text-left">
                                      PEDIATRICS&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Budget:
                                    </th>
                                    <td class="text-left">
                                      Unset&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Activity Type:
                                    </th>
                                    <td class="text-left">
                                      Research&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Project Title:
                                    </th>
                                    <td class="text-left">
                                      Broken bones in kids funny?&nbsp;
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-7" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Sponsor &amp; Program Information 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-7" class="panel-collapse collapse">
                            <div class="panel-body">
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Deadline Date:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                    <th class="text-right">
                                      Notice of Opportunity:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Deadline Type:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                    <th class="text-right">
                                      CDFA Number:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Name:
                                    </th>
                                    <td class="text-left">
                                      Office of Education (Non-OSP Use)&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Opportunity ID:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Prime Sponsor ID:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                    <th class="text-right">
                                      Sponsor Proposal ID:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      NSF Science Code:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                    <th class="text-right">
                                      Sub-Award(s) Included:
                                    </th>
                                    <td class="text-left">
                                      false&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Div Code:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                    <th class="text-right">
                                      Sponsor Program Code:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Opportunity Title:
                                    </th>
                                    <td colspan="3" class="text-left">
                                      &nbsp;
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-8" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Investigator/Units 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-8" class="panel-collapse collapse">
                            <div class="panel-body">
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-right">
                                      Principal Investigator:
                                    </th>
                                    <td class="text-left">
                                      ANGELICA FLAHERTY&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Unit(s):
                                    </th>
                                    <td class="text-left">
                                      PEDIATRICS (Lead Unit) 000001 : University
                                      <br>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Investigator:
                                    </th>
                                    <td class="text-left">
                                      IRB AdminCardiology
                                    </td>
                                    <th class="text-right">
                                      Unit(s):
                                    </th>
                                    <td class="text-left">
                                      IN-CARD : CARDIOLOGY
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Investigator:
                                    </th>
                                    <td class="text-left">
                                      CONCETTA BERNAL
                                    </td>
                                    <th class="text-right">
                                      Unit(s):
                                    </th>
                                    <td class="text-left">
                                      000001 : University
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-4" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Budget Summary 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-4" class="panel-collapse collapse">
                            <div class="panel-body">
                              <h4>
                                Hierarchy Budget
                              </h4>
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-right">
                                      Proposal Number:
                                    </th>
                                    <td>
                                      31
                                    </td>
                                    <th class="text-right">
                                      Budget Status:
                                    </th>
                                    <td>
                                      2
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Version Number:
                                    </th>
                                    <td>
                                      1
                                    </td>
                                    <th class="text-right">
                                      Final:
                                    </th>
                                    <td>
                                      false
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Budget Start Date:
                                    </th>
                                    <td>
                                      2014-08-01
                                    </td>
                                    <th class="text-right">
                                      Budget End date:
                                    </th>
                                    <td>
                                      2016-08-01
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Total Cost:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                    <th class="text-right">
                                      Total Cost Limit:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Total Direct Cost:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                    <th class="text-right">
                                      Total F&amp;A Cost:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Unrecovered F&amp;A:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                    <th class="text-right">
                                      Cost Sharing:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      F&amp;A Rate Type:
                                    </th>
                                    <td>
                                      1
                                    </td>
                                    <th class="text-right">
                                      Unrecovered F&amp;A Rate Type:
                                    </th>
                                    <td>
                                      1
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Comments:
                                    </th>
                                    <td colspan="3">
                                      &nbsp;
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-center">
                                      Budget Category
                                    </th>
                                    <th class="text-center">
                                      <div>
                                        Period 1
                                        <br>
                                        <span class="fineprint">
                                          08/01/2014 -
                                          <br>
                                          07/31/2015 
                                        </span>
                                      </div>
                                    </th>
                                    <th class="text-center">
                                      <div>
                                        Period 2
                                        <br>
                                        <span class="fineprint">
                                          08/01/2015 -
                                          <br>
                                          07/31/2016 
                                        </span>
                                      </div>
                                    </th>
                                    <th class="text-center">
                                      Period 3
                                      <br>
                                      <span class="fineprint">
                                        08/01/2016 -
                                        <br>
                                        08/01/2016 
                                      </span>
                                    </th>
                                    <th class="text-center">
                                      Total
                                    </th>
                                  </tr>
                                  <tr>
                                    <th colspan="5" class="active">
                                      Personnel
                                    </th>
                                  </tr>
                                  <tr>
                                    <td>
                                      Salary
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Fringe
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Calculated Personnel Direct Costs
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        Personnel Subtotal 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00 
                                        </i>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th colspan="5" class="active">
                                      Non-personnel
                                    </th>
                                    <tr>
                                      <td>
                                        Calculated Non-personnel Direct Costs
                                      </td>
                                      <td>
                                        <div class="text-right">
                                          0.00&nbsp;
                                        </div>
                                      </td>
                                      <td>
                                        <div class="text-right">
                                          0.00&nbsp;
                                        </div>
                                      </td>
                                      <td>
                                        <div class="text-right">
                                          0.00&nbsp;
                                        </div>
                                      </td>
                                      <td class="text-right">
                                        <div class="text-right">
                                          <strong>
                                            0.00&nbsp; 
                                          </strong>
                                        </div>
                                      </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        Non-Personnel Subtotal 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00 
                                        </i>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th colspan="5" class="active">
                                      Totals
                                    </th>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        TOTAL DIRECT COSTS 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        TOTAL F&amp;A COSTS 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          &nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          &nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          &nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr class="active">
                                    <td>
                                      <strong>
                                        TOTAL COSTS 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                  <div class="tab-pane" id="child-1">
                    <div class="uif-header-inner">
                      <h3 class="uif-headerText">
                        <span class="uif-headerText-span">
                          Child (Proposal # 14) 
                        </span>
                      </h3>
                      <h4>
                        Synced
                      </h4>
                      <div class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                        <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#income">
                          
                          <span aria-hidden="true" class="icon-unlink">
                            
                          </span>
                          Unlink Hierarchy 
                        </a>
                      </div>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-10" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Overview 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-10" class="panel-collapse collapse">
                            <div class="panel-body">
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th>
                                      Proposal Number:
                                    </th>
                                    <td class="text-left">
                                      31&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Status:
                                    </th>
                                    <td class="text-left">
                                      In Progress&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Project Start Date:
                                    </th>
                                    <td class="text-left">
                                      2014-08-01&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Proposal Type:
                                    </th>
                                    <td class="text-left">
                                      New&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Project End Date:
                                    </th>
                                    <td class="text-left">
                                      2016-08-01&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Narrative:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Lead Unit:
                                    </th>
                                    <td class="text-left">
                                      PEDIATRICS&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Budget:
                                    </th>
                                    <td class="text-left">
                                      Unset&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Activity Type:
                                    </th>
                                    <td class="text-left">
                                      Research&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Project Title:
                                    </th>
                                    <td class="text-left">
                                      Broken bones in kids funny?&nbsp;
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-11" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Sponsor &amp; Program Information 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-11" class="panel-collapse collapse">
                            <div class="panel-body">
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Deadline Date:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                    <th class="text-right">
                                      Notice of Opportunity:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Deadline Type:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                    <th class="text-right">
                                      CDFA Number:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Name:
                                    </th>
                                    <td class="text-left">
                                      Office of Education (Non-OSP Use)&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Opportunity ID:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Prime Sponsor ID:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                    <th class="text-right">
                                      Sponsor Proposal ID:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      NSF Science Code:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                    <th class="text-right">
                                      Sub-Award(s) Included:
                                    </th>
                                    <td class="text-left">
                                      false&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Div Code:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                    <th class="text-right">
                                      Sponsor Program Code:
                                    </th>
                                    <td class="text-left">
                                      &nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Opportunity Title:
                                    </th>
                                    <td colspan="3" class="text-left">
                                      &nbsp;
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-12" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Investigator/Units 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-12" class="panel-collapse collapse">
                            <div class="panel-body">
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-right">
                                      Principal Investigator:
                                    </th>
                                    <td class="text-left">
                                      ANGELICA FLAHERTY&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Unit(s):
                                    </th>
                                    <td class="text-left">
                                      PEDIATRICS (Lead Unit) 000001 : University
                                      <br>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Investigator:
                                    </th>
                                    <td class="text-left">
                                      IRB AdminCardiology
                                    </td>
                                    <th class="text-right">
                                      Unit(s):
                                    </th>
                                    <td class="text-left">
                                      IN-CARD : CARDIOLOGY
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Investigator:
                                    </th>
                                    <td class="text-left">
                                      CONCETTA BERNAL
                                    </td>
                                    <th class="text-right">
                                      Unit(s):
                                    </th>
                                    <td class="text-left">
                                      000001 : University
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-13" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Budget Summary 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-13" class="panel-collapse collapse">
                            <div class="panel-body">
                              <h4>
                                TDC - synced
                              </h4>
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-right">
                                      Proposal Number:
                                    </th>
                                    <td>
                                      31
                                    </td>
                                    <th class="text-right">
                                      Budget Status:
                                    </th>
                                    <td>
                                      2
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Version Number:
                                    </th>
                                    <td>
                                      1
                                    </td>
                                    <th class="text-right">
                                      Final:
                                    </th>
                                    <td>
                                      false
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Budget Start Date:
                                    </th>
                                    <td>
                                      2014-08-01
                                    </td>
                                    <th class="text-right">
                                      Budget End date:
                                    </th>
                                    <td>
                                      2016-08-01
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Total Cost:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                    <th class="text-right">
                                      Total Cost Limit:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Total Direct Cost:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                    <th class="text-right">
                                      Total F&amp;A Cost:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Unrecovered F&amp;A:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                    <th class="text-right">
                                      Cost Sharing:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      F&amp;A Rate Type:
                                    </th>
                                    <td>
                                      1
                                    </td>
                                    <th class="text-right">
                                      Unrecovered F&amp;A Rate Type:
                                    </th>
                                    <td>
                                      1
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Comments:
                                    </th>
                                    <td colspan="3">
                                      &nbsp;
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-center">
                                      Budget Category
                                    </th>
                                    <th class="text-center">
                                      <div>
                                        Period 1
                                        <br>
                                        <span class="fineprint">
                                          08/01/2014 -
                                          <br>
                                          07/31/2015 
                                        </span>
                                      </div>
                                    </th>
                                    <th class="text-center">
                                      <div>
                                        Period 2
                                        <br>
                                        <span class="fineprint">
                                          08/01/2015 -
                                          <br>
                                          07/31/2016 
                                        </span>
                                      </div>
                                    </th>
                                    <th class="text-center">
                                      Period 3
                                      <br>
                                      <span class="fineprint">
                                        08/01/2016 -
                                        <br>
                                        08/01/2016 
                                      </span>
                                    </th>
                                    <th class="text-center">
                                      Total
                                    </th>
                                  </tr>
                                  <tr>
                                    <th colspan="5" class="active">
                                      Personnel
                                    </th>
                                  </tr>
                                  <tr>
                                    <td>
                                      Salary
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Fringe
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Calculated Personnel Direct Costs
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        Personnel Subtotal 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00 
                                        </i>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th colspan="5" class="active">
                                      Non-personnel
                                    </th>
                                    <tr>
                                      <td>
                                        Calculated Non-personnel Direct Costs
                                      </td>
                                      <td>
                                        <div class="text-right">
                                          0.00&nbsp;
                                        </div>
                                      </td>
                                      <td>
                                        <div class="text-right">
                                          0.00&nbsp;
                                        </div>
                                      </td>
                                      <td>
                                        <div class="text-right">
                                          0.00&nbsp;
                                        </div>
                                      </td>
                                      <td class="text-right">
                                        <div class="text-right">
                                          <strong>
                                            0.00&nbsp; 
                                          </strong>
                                        </div>
                                      </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        Non-Personnel Subtotal 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00 
                                        </i>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th colspan="5" class="active">
                                      Totals
                                    </th>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        TOTAL DIRECT COSTS 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        TOTAL F&amp;A COSTS 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          &nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          &nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          &nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr class="active">
                                    <td>
                                      <strong>
                                        TOTAL COSTS 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
                <script type="text/javascript">
                  
                  jQuery(document).ready(function ($) {
                    $('#tabs').tab();
                  }
                                        );
                </script>
              </div>
             </div -->
              <div id="link2">
              
           
               
                  <div id="parent-2">
                    <div class="uif-header-inner">
                      <h3 class="uif-headerText">
                        <span class="uif-headerText-span">
                          Parent (Proposal # 31) 
                        </span>
                      </h3>
                      <h4>
                        Proposal Summary - Not synced
                      </h4>
                      <div class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                        <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#income">
                          
                          <span aria-hidden="true" class="icon-unlink">
                            
                          </span>
                          Unlink Hierarchy 
                        </a>
                      </div>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-6" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Overview 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-6" class="panel-collapse collapse">
                            <div class="panel-body">
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th>
                                      Proposal Number:
                                    </th>
                                    <td class="text-left">
                                      31&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Status:
                                    </th>
                                    <td class="text-left">
                                      In Progress&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Project Start Date:
                                    </th>
                                    <td class="text-left">
                                      2014-08-01&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Proposal Type:
                                    </th>
                                    <td class="text-left">
                                      New&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Project End Date:
                                    </th>
                                    <td class="text-left">
                                      2016-08-01&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Narrative:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Lead Unit:
                                    </th>
                                    <td class="text-left">
                                      PEDIATRICS&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Budget:
                                    </th>
                                    <td class="text-left">
                                      Unset&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Activity Type:
                                    </th>
                                    <td class="text-left">
                                      Research&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Project Title:
                                    </th>
                                    <td class="text-left">
                                      Broken bones in kids funny?&nbsp;
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-7" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Sponsor &amp; Program Information 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-7" class="panel-collapse collapse">
                            <div class="panel-body">
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Deadline Date:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                    <th class="text-right">
                                      Notice of Opportunity:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Deadline Type:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                    <th class="text-right">
                                      CDFA Number:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Name:
                                    </th>
                                    <td class="text-left">
                                      Office of Education (Non-OSP Use)&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Opportunity ID:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Prime Sponsor ID:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                    <th class="text-right">
                                      Sponsor Proposal ID:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      NSF Science Code:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                    <th class="text-right">
                                      Sub-Award(s) Included:
                                    </th>
                                    <td class="text-left">
                                      false&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Div Code:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                    <th class="text-right">
                                      Sponsor Program Code:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Opportunity Title:
                                    </th>
                                    <td colspan="3" class="text-left">&nbsp;
                                      
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-8" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Investigator/Units 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-8" class="panel-collapse collapse">
                            <div class="panel-body">
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-right">
                                      Principal Investigator:
                                    </th>
                                    <td class="text-left">
                                      ANGELICA FLAHERTY&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Unit(s):
                                    </th>
                                    <td class="text-left">
                                      PEDIATRICS (Lead Unit) 000001 : University
                                      <br>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Investigator:
                                    </th>
                                    <td class="text-left">
                                      IRB AdminCardiology
                                    </td>
                                    <th class="text-right">
                                      Unit(s):
                                    </th>
                                    <td class="text-left">
                                      IN-CARD : CARDIOLOGY
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Investigator:
                                    </th>
                                    <td class="text-left">
                                      CONCETTA BERNAL
                                    </td>
                                    <th class="text-right">
                                      Unit(s):
                                    </th>
                                    <td class="text-left">
                                      000001 : University
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-4" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Budget Summary 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-4" class="panel-collapse collapse">
                            <div class="panel-body">
                              <h4>
                                Hierarchy Budget
                              </h4>
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-right">
                                      Proposal Number:
                                    </th>
                                    <td>
                                      31
                                    </td>
                                    <th class="text-right">
                                      Budget Status:
                                    </th>
                                    <td>
                                      2
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Version Number:
                                    </th>
                                    <td>
                                      1
                                    </td>
                                    <th class="text-right">
                                      Final:
                                    </th>
                                    <td>
                                      false
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Budget Start Date:
                                    </th>
                                    <td>
                                      2014-08-01
                                    </td>
                                    <th class="text-right">
                                      Budget End date:
                                    </th>
                                    <td>
                                      2016-08-01
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Total Cost:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                    <th class="text-right">
                                      Total Cost Limit:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Total Direct Cost:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                    <th class="text-right">
                                      Total F&amp;A Cost:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Unrecovered F&amp;A:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                    <th class="text-right">
                                      Cost Sharing:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      F&amp;A Rate Type:
                                    </th>
                                    <td>
                                      1
                                    </td>
                                    <th class="text-right">
                                      Unrecovered F&amp;A Rate Type:
                                    </th>
                                    <td>
                                      1
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Comments:
                                    </th>
                                    <td colspan="3">&nbsp;
                                      
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-center">
                                      Budget Category
                                    </th>
                                    <th class="text-center">
                                      <div>
                                        Period 1
                                        <br>
                                        <span class="fineprint">
                                          08/01/2014 -
                                          <br>
                                          07/31/2015 
                                        </span>
                                      </div>
                                    </th>
                                    <th class="text-center">
                                      <div>
                                        Period 2
                                        <br>
                                        <span class="fineprint">
                                          08/01/2015 -
                                          <br>
                                          07/31/2016 
                                        </span>
                                      </div>
                                    </th>
                                    <th class="text-center">
                                      Period 3
                                      <br>
                                      <span class="fineprint">
                                        08/01/2016 -
                                        <br>
                                        08/01/2016 
                                      </span>
                                    </th>
                                    <th class="text-center">
                                      Total
                                    </th>
                                  </tr>
                                  <tr>
                                    <th colspan="5" class="active">
                                      Personnel
                                    </th>
                                  </tr>
                                  <tr>
                                    <td>
                                      Salary
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Fringe
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Calculated Personnel Direct Costs
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        Personnel Subtotal 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00 
                                        </i>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th colspan="5" class="active">
                                      Non-personnel
                                    </th>
                                    <tr>
                                      <td>
                                        Calculated Non-personnel Direct Costs
                                      </td>
                                      <td>
                                        <div class="text-right">
                                          0.00&nbsp;
                                        </div>
                                      </td>
                                      <td>
                                        <div class="text-right">
                                          0.00&nbsp;
                                        </div>
                                      </td>
                                      <td>
                                        <div class="text-right">
                                          0.00&nbsp;
                                        </div>
                                      </td>
                                      <td class="text-right">
                                        <div class="text-right">
                                          <strong>
                                            0.00&nbsp; 
                                          </strong>
                                        </div>
                                      </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        Non-Personnel Subtotal 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00 
                                        </i>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th colspan="5" class="active">
                                      Totals
                                    </th>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        TOTAL DIRECT COSTS 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        TOTAL F&amp;A COSTS 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          &nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          &nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          &nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr class="active">
                                    <td>
                                      <strong>
                                        TOTAL COSTS 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                  <div id="child-2">
                    <div class="uif-header-inner">
                      <h3 class="uif-headerText">
                        <span class="uif-headerText-span">
                          Child (Proposal # 14) 
                        </span>
                      </h3>
                      <h4>
                        Synced
                      </h4>
                      <div class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                        <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#income">
                          
                          <span aria-hidden="true" class="icon-unlink">
                            
                          </span>
                          Unlink Hierarchy 
                        </a>
                      </div>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-10" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Overview 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-10" class="panel-collapse collapse">
                            <div class="panel-body">
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th>
                                      Proposal Number:
                                    </th>
                                    <td class="text-left">
                                      31&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Status:
                                    </th>
                                    <td class="text-left">
                                      In Progress&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Project Start Date:
                                    </th>
                                    <td class="text-left">
                                      2014-08-01&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Proposal Type:
                                    </th>
                                    <td class="text-left">
                                      New&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Project End Date:
                                    </th>
                                    <td class="text-left">
                                      2016-08-01&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Narrative:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Lead Unit:
                                    </th>
                                    <td class="text-left">
                                      PEDIATRICS&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Budget:
                                    </th>
                                    <td class="text-left">
                                      Unset&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Activity Type:
                                    </th>
                                    <td class="text-left">
                                      Research&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Project Title:
                                    </th>
                                    <td class="text-left">
                                      Broken bones in kids funny?&nbsp;
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-11" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Sponsor &amp; Program Information 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-11" class="panel-collapse collapse">
                            <div class="panel-body">
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Deadline Date:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                    <th class="text-right">
                                      Notice of Opportunity:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Deadline Type:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                    <th class="text-right">
                                      CDFA Number:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Name:
                                    </th>
                                    <td class="text-left">
                                      Office of Education (Non-OSP Use)&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Opportunity ID:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Prime Sponsor ID:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                    <th class="text-right">
                                      Sponsor Proposal ID:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      NSF Science Code:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                    <th class="text-right">
                                      Sub-Award(s) Included:
                                    </th>
                                    <td class="text-left">
                                      false&nbsp;
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Sponsor Div Code:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                    <th class="text-right">
                                      Sponsor Program Code:
                                    </th>
                                    <td class="text-left">&nbsp;
                                      
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Opportunity Title:
                                    </th>
                                    <td colspan="3" class="text-left">&nbsp;
                                      
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-12" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Investigator/Units 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-12" class="panel-collapse collapse">
                            <div class="panel-body">
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-right">
                                      Principal Investigator:
                                    </th>
                                    <td class="text-left">
                                      ANGELICA FLAHERTY&nbsp;
                                    </td>
                                    <th class="text-right">
                                      Unit(s):
                                    </th>
                                    <td class="text-left">
                                      PEDIATRICS (Lead Unit) 000001 : University
                                      <br>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Investigator:
                                    </th>
                                    <td class="text-left">
                                      IRB AdminCardiology
                                    </td>
                                    <th class="text-right">
                                      Unit(s):
                                    </th>
                                    <td class="text-left">
                                      IN-CARD : CARDIOLOGY
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Investigator:
                                    </th>
                                    <td class="text-left">
                                      CONCETTA BERNAL
                                    </td>
                                    <th class="text-right">
                                      Unit(s):
                                    </th>
                                    <td class="text-left">
                                      000001 : University
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                      <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
                        <div class="panel panel-default">
                          <header class="uif-sectionHeader">
                            <h3 class="uif-headerText panel-heading">
                              <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-13" data-open="false" class="uif-headerText-span">
                                
                                <span class="icon-caret-down">
                                  
                                </span>
                                
                                <span class="icon-caret-right">
                                  
                                </span>
                                Budget Summary 
                              </a>
                            </h3>
                          </header>
                          <div id="collapse-13" class="panel-collapse collapse">
                            <div class="panel-body">
                              <h4>
                                TDC - synced
                              </h4>
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-right">
                                      Proposal Number:
                                    </th>
                                    <td>
                                      31
                                    </td>
                                    <th class="text-right">
                                      Budget Status:
                                    </th>
                                    <td>
                                      2
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Version Number:
                                    </th>
                                    <td>
                                      1
                                    </td>
                                    <th class="text-right">
                                      Final:
                                    </th>
                                    <td>
                                      false
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Budget Start Date:
                                    </th>
                                    <td>
                                      2014-08-01
                                    </td>
                                    <th class="text-right">
                                      Budget End date:
                                    </th>
                                    <td>
                                      2016-08-01
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Total Cost:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                    <th class="text-right">
                                      Total Cost Limit:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Total Direct Cost:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                    <th class="text-right">
                                      Total F&amp;A Cost:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Unrecovered F&amp;A:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                    <th class="text-right">
                                      Cost Sharing:
                                    </th>
                                    <td>
                                      0.00
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      F&amp;A Rate Type:
                                    </th>
                                    <td>
                                      1
                                    </td>
                                    <th class="text-right">
                                      Unrecovered F&amp;A Rate Type:
                                    </th>
                                    <td>
                                      1
                                    </td>
                                  </tr>
                                  <tr>
                                    <th class="text-right">
                                      Comments:
                                    </th>
                                    <td colspan="3">&nbsp;
                                      
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <table class="table table-condensed table-bordered" role="grid">
                                <tbody>
                                  <tr>
                                    <th class="text-center">
                                      Budget Category
                                    </th>
                                    <th class="text-center">
                                      <div>
                                        Period 1
                                        <br>
                                        <span class="fineprint">
                                          08/01/2014 -
                                          <br>
                                          07/31/2015 
                                        </span>
                                      </div>
                                    </th>
                                    <th class="text-center">
                                      <div>
                                        Period 2
                                        <br>
                                        <span class="fineprint">
                                          08/01/2015 -
                                          <br>
                                          07/31/2016 
                                        </span>
                                      </div>
                                    </th>
                                    <th class="text-center">
                                      Period 3
                                      <br>
                                      <span class="fineprint">
                                        08/01/2016 -
                                        <br>
                                        08/01/2016 
                                      </span>
                                    </th>
                                    <th class="text-center">
                                      Total
                                    </th>
                                  </tr>
                                  <tr>
                                    <th colspan="5" class="active">
                                      Personnel
                                    </th>
                                  </tr>
                                  <tr>
                                    <td>
                                      Salary
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Fringe
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Calculated Personnel Direct Costs
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        0.00&nbsp;
                                      </div>
                                    </td>
                                    <td class="text-right">
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        Personnel Subtotal 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00 
                                        </i>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th colspan="5" class="active">
                                      Non-personnel
                                    </th>
                                    <tr>
                                      <td>
                                        Calculated Non-personnel Direct Costs
                                      </td>
                                      <td>
                                        <div class="text-right">
                                          0.00&nbsp;
                                        </div>
                                      </td>
                                      <td>
                                        <div class="text-right">
                                          0.00&nbsp;
                                        </div>
                                      </td>
                                      <td>
                                        <div class="text-right">
                                          0.00&nbsp;
                                        </div>
                                      </td>
                                      <td class="text-right">
                                        <div class="text-right">
                                          <strong>
                                            0.00&nbsp; 
                                          </strong>
                                        </div>
                                      </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        Non-Personnel Subtotal 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00&nbsp; 
                                        </i>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <i>
                                          0.00 
                                        </i>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th colspan="5" class="active">
                                      Totals
                                    </th>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        TOTAL DIRECT COSTS 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <strong>
                                        TOTAL F&amp;A COSTS 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          &nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          &nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          &nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr class="active">
                                    <td>
                                      <strong>
                                        TOTAL COSTS 
                                      </strong>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00&nbsp; 
                                        </strong>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="text-right">
                                        <strong>
                                          0.00 
                                        </strong>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
               
            
             </div>
             
             
              <!-- //tabs -->
              <!-- //BUDGET Hierarchy  -->
              <!-- Modal -->
              <!-- div class="modal fade" id="copyNew" tabindex="-1" role="dialog"  aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
&times;
</button>
<h4 class="modal-title">
Copy this Budget Version
</h4>
</div>
<div class="modal-body">
<div class="form-horizontal" role="form">
<div class="form-group">
<span class="col-sm-3 control-label">
Parent Proposal
</span>
<div class="col-sm-9">
<p class="form-control-static">
#23533
</p>
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-3 control-label">
Budget Name
</label>
<div class="col-sm-9">
<input type="text" class="form-control" placeholder="" id="inputPassword3">
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
Cancel
</button>
<button type="button" class="btn btn-primary " data-toggle="">
Copy
</button>
</div>
</div>
</div>
</div -->
              <!-- /Modal -->
              <!-- Modal -->
              <!-- div class="modal fade" id="openBudget" tabindex="-1" role="dialog"  aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
&times;
</button>
<h4 class="modal-title">
Open Budget Version
</h4>
</div>
<div class="modal-body">
You are about to leave this document to work on a budget document.
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
Cancel
</button>
<a href="budget-periods.php" class="btn btn-primary " data-toggle="">
Open Budget 
</a>
</div>
</div>
</div>
</div -->
              <!-- /Modal -->
            </div>
            <!-- // radio -->
            <!-- Modal -->
            <div class="modal fade" id="copyNew" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                    <h4 class="modal-title">
                      Copy this Budget Version
                    </h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-horizontal" role="form">
                      <div class="form-group">
                        <span class="col-sm-3 control-label">
                          Parent Proposal 
                        </span>
                        <div class="col-sm-9">
                          <p class="form-control-static">
                            #23533
                          </p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="budget-name" class="col-sm-3 control-label">
                          Budget Name 
                        </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" placeholder="" id="budget-name">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                      Cancel
                    </button>
                    <button type="button" class="btn btn-primary " data-toggle="">
                      Copy
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Modal -->
            <!-- Modal -->
            <div class="modal fade" id="openBudget" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                    <h4 class="modal-title">
                      Open Budget Version
                    </h4>
                  </div>
                  <div class="modal-body">
                    You are about to leave this document to work on a budget document.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                      Cancel
                    </button>
                    <a href="budget-periods.php" class="btn btn-primary " data-toggle="">
                      Open Budget 
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Modal -->
          </main>
        </div>
        <!-- VIEW FOOTER -->
        <div class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
          <div class="global-navigate btn-group">
            <a href="prop-questionnaire.php" class="btn btn-default">
              
              <span class="icon-chevron-left">
                
              </span>
              Back 
            </a>
            
            <a href="prop-supplimental.php" id="save-continue" class="btn btn-primary">
              Continue 
              <span class="icon-chevron-right">
                
              </span>
              
            </a>
          </div>
          <!--        
<div class=" global-actions btn-group dropup">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
Document Actions 
<span class="caret">
</span>

</button>
<ul class="dropdown-menu" role="menu">
<li>
<a href="#">
Submit Document
</a>
</li>
<li>
<a href="#" data-toggle="modal" data-target="#canceldoc">
Cancel Document 
</a>

</li>
<li class="divider">
</li>
<li>
<a href="#">
Save Document
</a>
</li>
<li>
<a href="#">
Close Document
</a>
</li>
</ul>
</div>
-->
          <div class="global-actions btn-group">
            <button type="button" class="btn btn-default">
              Save
            </button>
            <button type="button" class="btn btn-default">
              Close
            </button>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#globalaction-submit">
              Submit
            </button>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#globalaction-cancel">
              Cancel
            </button>
          </div>
        </div>
      </div>
    </form>
    <!-- scripts -->
    <script type="text/javascript" src="../../plugins/jquery/jquery-1.8.3.js">
    </script>
    <script type="text/javascript" src="../../plugins/validate/jquery.validate.js">
    </script>
    <script type="text/javascript" src="../../plugins/jqueryUI/jquery-ui-1.9.2.js">
    </script>
    <script type="text/javascript" src="../../plugins/datatables/jquery.dataTables.js">
    </script>
    <script type="text/javascript" src="../../themes/bootstrap/scripts/bootstrap.js">
    </script>
    <script type="text/javascript" src="../../plugins/scrollto/jquery.scrollTo-1.4.6.js">
    </script>
    <script type="text/javascript" src="../../plugins/jqform/jquery.form-3.31.0.js">
    </script>
    <script type="text/javascript" src="../../plugins/globalize/globalize.js">
    </script>
    <script type="text/javascript" src="../../plugins/menu/krad.navigationMenu.js">
    </script>
    <script type="text/javascript" src="../../plugins/menu/krad.tabMenu.js">
    </script>
    <!--

<script type="text/javascript" src="../../plugins/jgrowl/jquery.jgrowl.js">
</script>
-->
    <script type="text/javascript" src="../../plugins/textpopout/krad.textareaPopout.js">
    </script>
    <script type="text/javascript" src="../../plugins/validate/additional_validations.js">
    </script>
    <script type="text/javascript" src="../../plugins/cookie/jquery.cookie.js">
    </script>
    <script type="text/javascript" src="../../plugins/watermark/jquery.watermark.js">
    </script>
    <script type="text/javascript" src="../../plugins/countdown/jquery.countdown.js">
    </script>
    <script type="text/javascript" src="../../plugins/blockUI/jquery.blockUI.js">
    </script>
    <script type="text/javascript" src="../../plugins/color/jquery.color.js">
    </script>
    <script type="text/javascript" src="../../plugins/json/jquery.json-2.2.js">
    </script>
    <script type="text/javascript" src="../../plugins/datatables/jquery.dataTables.rowGrouping.js">
    </script>
    <script type="text/javascript" src="../../plugins/datatables/TableTools.js">
    </script>
    <script type="text/javascript" src="../../plugins/datatables/ZeroClipboard.js">
    </script>
    <!-- 
<script type="text/javascript" src="../../plugins/jstree/jquery.jstree.js">
</script>
<script type="text/javascript" src="../../plugins/jqueryUI/jquery.ui.autocomplete.html.js">
</script>
-->
    <script type="text/javascript" src="../../plugins/fancybox/jquery.fancybox.js">
    </script>
    <script type="text/javascript" src="../../plugins/fancybox/jquery.fancybox.pack.js">
    </script>
    <script type="text/javascript" src="../../plugins/prettify/prettify.js">
    </script>
    <script type="text/javascript" src="../../plugins/easydrag/jquery.easydrag.js">
    </script>
    <script type="text/javascript" src="../../krad/scripts/krad.variables.js">
    </script>
    
    <!--


<script type="text/javascript" src="../../krad/scripts/krad.response.js">
</script>
<script type="text/javascript" src="../../krad/scripts/krad.actions.js">
</script>
<script type="text/javascript" src="../../krad/scripts/krad.dirty.js">
</script>
<script type="text/javascript" src="../../krad/scripts/krad.lookup.js">
</script>
<script type="text/javascript" src="../../krad/scripts/krad.message.js">
</script>
-->
    
    <script type="text/javascript" src="../../krad/scripts/krad.url.js">
    </script>
    <script type="text/javascript" src="../../krad/scripts/krad.validate.js">
    </script>
    <script type="text/javascript" src="../../krad/scripts/krad.widget.js">
    </script>
    <script type="text/javascript" src="../../plugins/easing/jquery.easing-1.3.pack.js">
    </script>
    <script type="text/javascript" src="../../themes/kboot/scripts/less-1.5.0.min.js">
    </script>
    <script type="text/javascript" src="../scripts/kradSampleApp.js">
    </script>
    <script type="text/javascript">
      
      //    setGrowlDefaults({position:"top-right",sticky:false,life:7000});setBlockUIDefaults({fadeIn:400,fadeOut:800,centerX:true,centerY:true,blockingImage:"../krad/images/loading.gif"}, 'navigation');setBlockUIDefaults({fadeIn:400,fadeOut:800,centerX:true,centerY:true,blockingImage:"../krad/images/loader.gif"}, 'refresh');setConfigParam("kradImageLocation","../krad/images/");setConfigParam("kradUrl","../kr-krad");setConfigParam("applicationUrl","http://localhost:8080/krad-dev");setConfigParam("scriptCleanup","true");
    </script>
    <script type="text/javascript" src="../../themes/kboot/scripts/global.functions.js">
    </script>
    <script>
      
      
      
      (function($){
        var $radioButtons = $('#u569ish_line0  input[type="radio"]');
        $radioButtons.click(function() {
          $radioButtons.each(function() {
            $(this).parent().toggleClass("success", this.checked);
          }
                            );
          $("#u569ish_line0  td").removeClass("showMe");
          $(".success").next().addClass("showMe");
          
          
        }
                           );
      
      //link-hierarchy
    $("#link-hierarchy").click(function() {  $("#link2").hide(); $("#link1").fadeToggle( "slow", "linear" ); });
    $("#create-hierarchy").click(function() {  $("#link1").hide(); $("#link2").fadeToggle( "slow", "linear" ); });     
      
      }
       (jQuery))
    </script>
    <!-- // end scripts -->
    <?php include('includes/modals-global-propdev.php') ?>
    <!-- MODAL  budget summary -->
    <?php include('includes/modals-budget/summary.php') ?>
    <!-- end Modal -->
    <!-- MODAL BUDGET VERSIONS -->
    <?php include('includes/modals-prop/toolbar-switch.php') ?>
    <?php include('includes/modals-budget/versions.php')
?>
    <!-- MODAL BUDGET CREATE -->
    <?php include('includes/modals-budget/createnew.php') ?>
  </body>
</html>
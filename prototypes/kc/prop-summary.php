<?php 
$page = 'summary';
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
    <?php include('includes/styles.php') ?>
    <style type"text/css">
      main{
    margin-bottom:7em;
  }
  #link1{
    margin-top:3em;
  }
  </style>
  </head>
  <body id="Uif-Application">
    <?php include('includes/uif-applicationHeader.php') ?>
    <form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
      <div id="LabsProposal" class="clearfix uif-formView" data-role="View">
        <?php include('includes/uif-viewHeader-pd.php') ?>
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid">
          <?php include('includes/uif-navigation-proposal.php') ?>
          <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
            <div class="uif-header-inner">
              <h2 id="" class="uif-headerText">
                <span class="uif-headerText-span">
                  Summary 
                </span>
              </h2>
              <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
              </div>
            </div>
            <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
              <div id="u87qj8l" class="well uif-boxLayoutVerticalItem clearfix" role="progressbar" aria-valuetext="Current step:Save" aria-valuemax="5" aria-valuemin="0" aria-valuenow="1">
                <div class="progress-details">
                  <div style="width: 33.3%;" class="uif-step active">
                    <span class="sr-only">
                      Current step: 
                    </span>
                    Saved
                  </div>
                  <div style="width: 33.3%;" class="uif-step">
                    <span class="sr-only">
                      Unfinished step: 
                    </span>
                    Routing
                  </div>
                  <div style="width: 33.3%;" class="uif-step">
                    <span class="sr-only">
                      Unfinished step: 
                    </span>
                    Approved
                  </div>
                </div>
                <div class="progress">
                  <div style="width: 33.3%;" class="progress-bar progress-bar-info">
                  </div>
                  <div style="width: 33.3%;" class="progress-bar progress-bar-empty">
                  </div>
                  <div style="width: 33.3%;" class="progress-bar progress-bar-empty">
                  </div>
                </div>
              </div>
            </section>
            <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
              <li class="active">
                <a href="#tab1" data-toggle="tab" class="" title="">
                  Proposal Summary 
                </a>
              </li>
              <li class="">
                <a href="#tab2" data-toggle="tab" class="" title="">
                  Personnel 
                </a>
              </li>
              <li class="">
                <a href="#tab3" data-toggle="tab" class="" title="">
                  Credit Allocation 
                </a>
              </li>
              <li class="">
                <a href="#tab4" data-toggle="tab" class="" title="">
                  Questionnaire 
                </a>
              </li>
              <li class="">
                <a href="#tab5" data-toggle="tab" class="" title="">
                  Supplimental Info 
                </a>
              </li>
              <li class="">
                <a href="#tab6" data-toggle="tab" class="" title="">
                  Hierarchy 
                </a>
              </li>
              <li class="">
                <a href="#tab7" data-toggle="tab" class="" title="">
                  Budget Summary 
                </a>
              </li>
            </ul>
            <div id="my-tab-content" class="tab-content">
              <div class="tab-pane active" id="tab1">
                <h3>
                  Proposal Summary
                </h3>
                <table class="table table-condensed">
                  <tbody>
                    <tr>
                      <th class="col-md-3">
                        Title
                      </th>
                      <td>
                        My Proposal Title
                      </td>
                    </tr>
                    <tr>
                      <th class="col-md-3">
                        Principal Investigator
                      </th>
                      <td>
                        Ward Cleaver
                      </td>
                    </tr>
                    <tr>
                      <th>
                        Lead Unit
                      </th>
                      <td>
                        BL-IIDC - IND INST ON DISABILITY/COMMNTY
                      </td>
                    </tr>
                    <tr>
                      <th>
                        Activity Type
                      </th>
                      <td>
                        Public Service &nbsp;
                      </td>
                    </tr>
                    <tr>
                      <th>
                        Proposal Number
                      </th>
                      <td>
                        1346432
                      </td>
                    </tr>
                    <tr>
                      <th>
                        Project Start Date
                      </th>
                      <td>
                        12/18/2013 &nbsp;
                      </td>
                    </tr>
                    <tr>
                      <th>
                        Project End Date
                      </th>
                      <td>
                        12/26/2013
                      </td>
                    </tr>
                    <tr>
                      <th>
                        Include Subaward(s)?
                      </th>
                      <td>
                        No
                      </td>
                    </tr>
                    <tr>
                      <th>
                        Sponsor
                      </th>
                      <td>
                        NSF
                      </td>
                    </tr>
                    <tr>
                      <th>
                        Sponsor Deadline Date
                      </th>
                      <td>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        Sponsor Deadline Type
                      </th>
                      <td>
                        &nbsp;
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="tab2">
                <div class="row">
                  <div class="col-md-6">
                    <h3>
                      Personnel
                    </h3>
                  </div>
                  <div class="col-md-6">
                    <a class="btn btn-default btn-xs pull-right uif-pagetools" href="">
                      View/Print All Certifications 
                    </a>
                  </div>
                </div>
                <table class="table table-condensed">
                  <tbody>
                    <tr>
                      <th class="col-md-3">
                        Key Person
                      </th>
                      <th>
                        Role
                      </th>
                      <th>
                        Unit
                      </th>
                      <th>
                        Proposal Person Certification
                      </th>
                    </tr>
                    <tr>
                      <td class="col-md-3">
                        Ward Cleaver
                      </td>
                      <td>
                        Principal Investigator &nbsp;
                      </td>
                      <td>
                        IND INST ON DISABILITY/COMMNTY&nbsp;
                      </td>
                      <td>
                        incomplete 
                        <a href="prop.keypersonnel.certify.html" target="_blank">
                          (view) 
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Edward Haskell
                      </td>
                      <td>
                        Co-Investigator&nbsp;
                      </td>
                      <td>
                        University
                      </td>
                      <td>
                        incomplete 
                        <a href="prop.keypersonnel.certify.html" target="_blank">
                          (view) 
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="tab3">
                <h3>
                  Credit Allocation
                </h3>
                <table class="table table-condensed credit-allocation">
                  <tbody>
                    <tr>
                      <th width="20.0%">
                        &nbsp;
                      </th>
                      <th width="20.0%">
                        Recognition
                      </th>
                      <th width="20.0%">
                        Responsibility
                      </th>
                      <th width="20.0%">
                        Space
                      </th>
                      <th width="20.0%">
                        Financial
                      </th>
                    </tr>
                    <tr class="active">
                      <td>
                        <strong>
                          Edward H Haskell 
                        </strong>
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-muted">
                        BL-IIDC - IND INST ON DISABILITY/COMMNTY
                      </td>
                      <td>
                        0.00
                      </td>
                      <td>
                        0.00
                      </td>
                      <td>
                        0.00
                      </td>
                      <td>
                        0.00
                      </td>
                    </tr>
                    <tr>
                      <td class="text-muted">
                        000001 - University
                      </td>
                      <td>
                        0.00
                      </td>
                      <td>
                        0.00
                      </td>
                      <td>
                        0.00
                      </td>
                      <td>
                        0.00
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Unit Total:
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                    </tr>
                    <tr class="active">
                      <td>
                        <strong>
                          Ward Cleaver 
                        </strong>
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-muted">
                        000001 - University
                      </td>
                      <td>
                        0.00
                      </td>
                      <td>
                        0.00
                      </td>
                      <td>
                        0.00
                      </td>
                      <td>
                        0.00
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Unit Total:
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                      <td>
                        <strong>
                          0.00 
                        </strong>
                      </td>
                    </tr>
                    <!-- 
<tr class="active" >
<td >
<strong>
June Cleaver 
</strong>
</td>
<td>
<strong>
<input type="text" tabindex="323" value="0.00" title="Credit">
</strong>
</td>
<td>
<strong>
<input type="text" tabindex="324" value="0.00" title="Credit">
</strong>
</td>
<td>
<strong>
<input type="text" tabindex="325" value="0.00" title="Credit">
</strong>
</td>
<td>
<strong>
<input type="text" tabindex="326" value="0.00" title="Credit">
</strong>
</td>
</tr>
<tr>
<td class="text-muted" >
000001 - University
</td>
<td>
<input type="text" tabindex="327" value="0.00" title="Credit">
</td>
<td>
<input type="text" tabindex="328" value="0.00" title="Credit">
</td>
<td>
<input type="text" tabindex="329" value="0.00" title="Credit">
</td>
<td>
<input type="text" tabindex="330" value="0.00" title="Credit">
</td>
</tr>
-->
  <tr>
    <td>
      Unit Total:
    </td>
    <td>
      <strong>
        0.00 
      </strong>
    </td>
    <td>
      <strong>
        0.00 
      </strong>
    </td>
    <td>
      <strong>
        0.00 
      </strong>
    </td>
    <td>
      <strong>
        0.00 
      </strong>
    </td>
  </tr>
  <!-- tr>
<td colspan="5" >
Totals
</td>
</tr>
-->
  <tr class="active">
    <td>
      <strong>
        Investigator Total: 
      </strong>
    </td>
    <td>
      <strong>
        0.00 
      </strong>
    </td>
    <td>
      <strong>
        0.00 
      </strong>
    </td>
    <td>
      <strong>
        0.00 
      </strong>
    </td>
    <td>
      <strong>
        0.00 
      </strong>
    </td>
  </tr>
  </tbody>
  </table>
  </div>
  <div class="tab-pane" id="tab4">
    <h3>
      Questionnaire
    </h3>
    <section id="" class="uif-disclosure uif-boxLayoutVerticalItem clearfix" data-parent="">
      <header id="" class="uif-sectionHeader" data-header_for="">
        <h3 class="uif-headerText panel-heading">
          <a data-role="disclosureLink" data-linkfor="u4e3n2o_disclosureContent" href="#" id="u4e3n2o_toggle" data-open="true" data-widgetid="" data-speed="500" data-ajax="false">
            
            <span class="uif-headerText-span">
              
              <span id="u4e3n2o_toggle_exp" class="icon-caret-down" style="display: inline;">
                
              </span>
              
              <span style="display: none;" id="u4e3n2o_toggle_col" class="icon-caret-right">
                
              </span>
              Grants.gov S2S 
              <small class="text-muted">
                (Incomplete) 
              </small>
              
            </span>
            
          </a>
        </h3>
      </header>
      <div id="u4e3n2o_disclosureContent" data-role="disclosureContent" data-open="true" class="uif-disclosureContent">
        <div id="question1" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
          <label id="question1_label" for="question1_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question1">
            Does this application reflect a change in principal investigator/program director from that indicated on a previous application? 
          </label>
          <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField">
            <span class="label label-info">
              Yes 
            </span>
          </div>
        </div>
        <div id="question1a" class="uif-inputField clearfix uif-subquestion-block question1a content" data-parent="" data-role="InputField" data-label="Field" style="display:block">
          <div style=" padding-left:15px">
            <label id="question1_label" for="question1_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question1">
              Does this program director own a pair of hiking boots and clean socks? 
            </label>
            <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField">
              <span class="label label-info">
                No 
              </span>
            </div>
          </div>
        </div>
        <div id="question2" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
          <label id="question2_label" for="question2_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question2">
            Does this application reflect a change in grantee institution from that indicated on a previous application? 
          </label>
          <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField">
            <span class="label label-info">
              Yes 
            </span>
          </div>
        </div>
        <div id="question3" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
          <label id="question3_label" for="question3_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question3">
            Is this a Renewal Application? 
          </label>
          <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField">
            <span class="label label-info">
              Yes 
            </span>
          </div>
        </div>
        <div id="question4" class="uif-inputField clearfix uif-question-block" data-parent="" data-role="InputField" data-label="Field">
          <label id="question4_label" for="question4_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="question4">
            Check "No" if no inventions were conceived or reduced to practice during the course of work under this project. Check "Yes" if any inventions were conceived or reduced to practice during the previous period of support. 
          </label>
          <div id="u1reltmv" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="Demo-RadioControl-Example4" data-role="InputField">
            <span class="label label-info">
              Yes 
            </span>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="tab-pane" id="tab5">
    <h3>
      Supplimental Information
    </h3>
    <table class="table table-condensed">
      <tbody>
        <tr>
          <th class="col-md-3">
            Label
          </th>
          <td>
            Item
          </td>
        </tr>
        <tr>
          <th class="col-md-3">
            Label
          </th>
          <td>
            Item
          </td>
        </tr>
        <tr>
          <th class="col-md-3">
            Label
          </th>
          <td>
            Item
          </td>
        </tr>
        <tr>
          <th class="col-md-3">
            Label
          </th>
          <td>
            Item
          </td>
        </tr>
        <tr>
          <th class="col-md-3">
            Label
          </th>
          <td>
            Item
          </td>
        </tr>
        <tr>
          <th class="col-md-3">
            Label
          </th>
          <td>
            Item
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tab-pane" id="tab6">
    <h3>
      Hierarchy
    </h3>
    <div id="link1">
      <div id="parent-2">
        <div class="uif-header-inner">
          <h4 class="uif-headerText">
            <span class="uif-headerText-span" href="#">
              Parent (Proposal # 31) 
            </span>
          </h4>
          <a href="#">
            View Document 
          </a>
          <div class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
            <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="">
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
                    Sponsor &amp;Program Information 
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
      <div id="child-2" class="col-md-offset-1">
        <div class="uif-header-inner">
          <h4 class="uif-headerText">
            <span class="uif-headerText-span">
              Child (Proposal # 14) 
            </span>
          </h4>
          <a href="#">
            View Document 
          </a>
          <div class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
            <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="">
              Synced to Parent 
            </a>
            
            <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="">
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
                    Sponsor &amp;Program Information 
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
      <div id="child-3" class="col-md-offset-1">
        <div class="uif-header-inner">
          <h4 class="uif-headerText">
            <span class="uif-headerText-span" href="#">
              Child (Proposal # 15) 
            </span>
          </h4>
          <a href="#">
            View Document 
          </a>
          <div class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
            <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="">
              
              <span class="icon-warning">
                
                <!-- -->
              </span>
              Sync to Parent 
            </a>
            
            <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="">
              Link Hierarchy 
            </a>
          </div>
          <section class="panel-group uif-disclosure uif-boxLayoutVerticalItem ">
            <div class="panel panel-default">
              <header class="uif-sectionHeader">
                <h3 class="uif-headerText panel-heading">
                  <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-20" data-open="false" class="uif-headerText-span">
                    
                    <span class="icon-caret-down">
                      
                    </span>
                    
                    <span class="icon-caret-right">
                      
                    </span>
                    Overview 
                  </a>
                </h3>
              </header>
              <div id="collapse-20" class="panel-collapse collapse">
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
                  <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-21" data-open="false" class="uif-headerText-span">
                    
                    <span class="icon-caret-down">
                      
                    </span>
                    
                    <span class="icon-caret-right">
                      
                    </span>
                    Sponsor &amp;Program Information 
                  </a>
                </h3>
              </header>
              <div id="collapse-21" class="panel-collapse collapse">
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
                  <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-22" data-open="false" class="uif-headerText-span">
                    
                    <span class="icon-caret-down">
                      
                    </span>
                    
                    <span class="icon-caret-right">
                      
                    </span>
                    Investigator/Units 
                  </a>
                </h3>
              </header>
              <div id="collapse-22" class="panel-collapse collapse">
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
                  <a data-role="disclosureLink" data-toggle="collapse" data-parent="#accordion" href="#collapse-23" data-open="false" class="uif-headerText-span">
                    
                    <span class="icon-caret-down">
                      
                    </span>
                    
                    <span class="icon-caret-right">
                      
                    </span>
                    Budget Summary 
                  </a>
                </h3>
              </header>
              <div id="collapse-23" class="panel-collapse collapse">
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
  </div>
  <div class="tab-pane" id="tab7">
    <h3>
      Budget Summary
    </h3>
    <div class="pull-right">
      <div class="btn-group" id="more-columns">
        <button type="button" class="btn btn-default btn-xs dropdown-toggle">
          <span class="icon-arrow-left text-muted">
            Previous 5 Periods
          </button>
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" style=" color:#0077CC">
            Next 5 Periods 
            <span class="icon-arrow-right">
            </span>
          </button>
        </div>
        <!-- export -->
        <div class="btn-group" id="export-pdf-excel">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
            Export 
            <span class="caret">
            </span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li>
              <a href="#" data-toggle="modal" data-target="#copyNew" class="">
                <span aria-hidden="true" class="icon-file-excel">
                </span>
                Excel
              </a>
            </li>
            <li>
              <a href="#">
                <span aria-hidden="true" class="icon-file-pdf">
                </span>
                Pdf
              </a>
            </li>
          </ul>
        </div>
        <!-- // export  -->
      </div>
      <table class="table table-condensed table-bordered">
        <tbody>
          <tr>
            <th>
              &nbsp;
            </th>
            <th class="text-center">
              P1 
              <span class="text-normal text-muted clearfix">
                (1/12/14 - 1/11/15)
              </span>
              <span class="sr-only">
                Period 1
              </span>
            </th>
            <th class="text-center">
              P2 
              <span class="text-normal text-muted clearfix">
                (1/12/15 - 1/11/16)
              </span>
              <span class="sr-only">
                Period 2
              </span>
            </th>
            <th class="text-center">
              P3 
              <span class="text-normal text-muted clearfix">
                (1/12/16 - 1/11/17)
              </span>
              <span class="sr-only">
                Period 3
              </span>
            </th>
            <th class="text-center">
              P4 
              <span class="text-normal text-muted clearfix">
                (1/12/17 - 1/11/18)
              </span>
              <span class="sr-only">
                Period 4
              </span>
            </th>
            <th class="text-center">
              P5 
              <span class="text-normal text-muted clearfix">
                (1/12/19 - 1/11/20)
              </span>
              <span class="sr-only">
                Period 5
              </span>
            </th>
            <th class="text-center">
              Totals 
              <span class="sr-only">
                Period totals
              </span>
            </th>
          </tr>
          <tr class="active">
            <td colspan="7" style=" border-bottom-width: 3px;
">
  <span class="lead">
    Personnel
  </span>
            </td>
          </tr>
          <tr class="active">
            <td>
              <strong>
                Salary
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $194,279.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $194,279.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $194,279.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $194,279.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $194,279.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $971,395.00
              </strong>
            </td>
          </tr>
          <tr class="">
            <td>
              <a href="#">
                
                <span aria-hidden="true" class="icon-chevron-down">
                </span>
                Faculty Salaries Non-Tenured - On
              </a>
            </td>
            <td class="text-right active">
              $156,934.00
            </td>
            <td class="text-right active">
              $156,934.00
            </td>
            <td class="text-right active">
              $156,934.00
            </td>
            <td class="text-right active">
              $156,934.00
            </td>
            <td class="text-right active">
              $156,934.00
            </td>
            <td class="text-right active">
              $784,670.00
            </td>
          </tr>
          <tr class="">
            <td style="padding-left:22px">
              Andrew Sulsar
            </td>
            <td class="text-right text-muted">
              $100,000.00
            </td>
            <td class="text-right text-muted">
              $100,000.00
            </td>
            <td class="text-right text-muted">
              $100,000.00
            </td>
            <td class="text-right text-muted">
              $100,000.00
            </td>
            <td class="text-right text-muted">
              $100,000.00
            </td>
            <td class="text-right text-muted">
              $500,000.00
            </td>
          </tr>
          <tr class="">
            <td style="padding-left:22px">
              Alan Jones
            </td>
            <td class="text-right text-muted">
              $56,934.00
            </td>
            <td class="text-right text-muted">
              $56,934.00
            </td>
            <td class="text-right text-muted">
              $56,934.00
            </td>
            <td class="text-right text-muted">
              $56,934.00
            </td>
            <td class="text-right text-muted">
              $56,934.00
            </td>
            <td class="text-right text-muted">
              $284,670.00
            </td>
          </tr>
          <tr class="">
            <td>
              <a href="#">
                
                <span aria-hidden="true" class="icon-chevron-down">
                </span>
                Administrative Staff - On
              </a>
            </td>
            <td class="text-right active">
              $37,345.00
            </td>
            <td class="text-right active">
              $37,345.00
            </td>
            <td class="text-right active">
              $37,345.00
            </td>
            <td class="text-right active">
              $37,345.00
            </td>
            <td class="text-right active">
              $37,345.00
            </td>
            <td class="text-right active">
              $186,725.00
            </td>
          </tr>
          <tr class="">
            <td style="padding-left:22px">
              Data Entry Assistant
            </td>
            <td class="text-right text-muted">
              $37,345.00
            </td>
            <td class="text-right text-muted">
              $37,345.00
            </td>
            <td class="text-right text-muted">
              $37,345.00
            </td>
            <td class="text-right text-muted">
              $37,345.00
            </td>
            <td class="text-right text-muted">
              $37,345.00
            </td>
            <td class="text-right text-muted">
              $186,725.00
            </td>
          </tr>
          <tr class="active">
            <td>
              <strong>
                Fringe
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
          </tr>
          <tr class="">
            <td>
              <a href="#">
                
                <span aria-hidden="true" class="icon-chevron-down">
                </span>
                Faculty Salaries Non-Tenured - On
              </a>
            </td>
            <td class="text-right active">
              $0.00
            </td>
            <td class="text-right active">
              $0.00
            </td>
            <td class="text-right active">
              $0.00
            </td>
            <td class="text-right active">
              $0.00
            </td>
            <td class="text-right active">
              $0.00
            </td>
            <td class="text-right active">
              $0.00
            </td>
          </tr>
          <tr class="">
            <td style="padding-left:22px">
              Andrew Sulsar
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
          </tr>
          <tr class="">
            <td style="padding-left:22px">
              Alan Jones
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
          </tr>
          <tr class="">
            <td>
              <a href="#">
                
                <span aria-hidden="true" class="icon-chevron-down">
                </span>
                Administrative Staff - On
              </a>
            </td>
            <td class="text-right active">
              $0.00
            </td>
            <td class="text-right active">
              $0.00
            </td>
            <td class="text-right active">
              $0.00
            </td>
            <td class="text-right active">
              $0.00
            </td>
            <td class="text-right active">
              $0.00
            </td>
            <td class="text-right active">
              $0.00
            </td>
          </tr>
          <tr class="">
            <td style="padding-left:22px">
              Data Entry Assistant
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
            <td class="text-right text-muted">
              $0.00
            </td>
          </tr>
          <tr class="active">
            <td>
              <strong>
                Calculated Direct Costs
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
          </tr>
          <tr class="">
            <td>
              Personnel Subtotal
            </td>
            <td class="text-right">
              <strong>
                $222,563.00
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $222,563.00
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $222,563.00
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $222,563.00
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $222,563.00
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $837,456
              </strong>
            </td>
          </tr>
          <tr class="active">
            <td colspan="7" style=" border-bottom-width: 3px;
">
  <span class="lead">
    Non-personnel
  </span>
            </td>
          </tr>
          <tr class="">
            <td>
              <a href="#">
                <span aria-hidden="true" class="icon-chevron-right">
                </span>
                Equipment
              </a>
            </td>
            <td class="text-right active">
              $38,546
            </td>
            <td class="text-right active">
              $38,546
            </td>
            <td class="text-right active">
              $38,546
            </td>
            <td class="text-right active">
              $38,546
            </td>
            <td class="text-right active">
              $38,546
            </td>
            <td class="text-right active">
              $219,348
            </td>
          </tr>
          <tr class="active">
            <td>
              <strong>
                Calculated Direct Costs
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
            <td class="text-right active">
              <strong>
                $0.00
              </strong>
            </td>
          </tr>
          <tr class="">
            <td>
              Nonpersonnel Subtotal
            </td>
            <td class="text-right">
              <strong>
                $38,546
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $38,546
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $38,546
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $38,546
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $38,546
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $219,348
              </strong>
            </td>
          </tr>
          <tr class="active">
            <td colspan="7" style=" border-bottom-width: 3px;
">
  <span class="lead">
    Totals
  </span>
            </td>
          </tr>
          <tr>
            <td>
              Total Direct Cost
            </td>
            <td class="text-right">
              $723,454
            </td>
            <td class="text-right">
              $723,454
            </td>
            <td class="text-right">
              $723,454
            </td>
            <td class="text-right">
              $723,454
            </td>
            <td class="text-right">
              $723,454
            </td>
            <td class="text-right">
              $496,432
            </td>
          </tr>
          <tr>
            <td>
              Total F&amp;A Costs
            </td>
            <td class="text-right">
              $34,537
            </td>
            <td class="text-right">
              $34,537
            </td>
            <td class="text-right">
              $34,537
            </td>
            <td class="text-right">
              $34,537
            </td>
            <td class="text-right">
              $34,537
            </td>
            <td class="text-right">
              $154,578
            </td>
          </tr>
          <!-- tr>
<td colspan="5" >
Totals
</td>
</tr>
-->
          <tr class="active">
            <td>
              <strong>
                Total Costs
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $238,546
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $238,546
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $238,546
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $238,546
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $238,546
              </strong>
            </td>
            <td class="text-right">
              <strong>
                $2,219,348
              </strong>
            </td>
          </tr>
        </tbody>
        <tfoot>
          <!-- // I noticed that the Budget Versions >
Action>
Budget Summary “white box” view shows the “generate periods” option – I don’t think that function should be an option on this “quick view” of the summary. -- ***//  tr>
<td>
</td>
<td class="text-center ">
<button class="btn btn-default btn-xs">
Generate Periods
<br>
from Period 1
</button>
</td>
<td colspan="5">
</td>
</tr -->
          
        </tfoot>
        
      </table>
      
    </div>
    
  </div>
  
  </main>
  
  </div>
  
  <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed;left: 0;bottom: 0px;">
    
    <div class="global-navigate btn-group">
      
      <button type="button" href="prop-budget.php" id="" class="btn btn-default">
        
        <span class="icon-chevron-left">
          
        </span>
        Back 
      </button>
      
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
      <button type="button" class="btn btn-primary">
        Submit
      </button>
      <button type="button" class="btn btn-default">
        Cancel
      </button>
      <button type="button" class="btn btn-default">
        Save
      </button>
      <button type="button" class="btn btn-default">
        Close
      </button>
    </div>
  </div>
  </form>
  <?php include ('includes/footer-scripts.php') ?>
  <?php include('includes/modals-global-propdev.php') ?>
  <script>
    // link hierarchy button from the modal opens the hierarchy tab automatically. 
    $(function($){
      var hash=location.hash , hashPieces=hash.split('?') , activeTab=$('[href=' + hashPieces[0] + ']');
      activeTab && activeTab.tab('show');
    }(jQuery))
  </script>
  </body>
  </html>
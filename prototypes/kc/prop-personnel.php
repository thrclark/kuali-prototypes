<?php
$section = 'keyPersonnel';
$page = 'keyPersonnel-personnel';
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
        
        /* row ordering */
        .icon-arrow-down{padding-right:5px;}
        [class^="icon-"]:hover{text-decoration:none;}
         tr:first-child .icon-arrow-up,
       tr:last-child .icon-arrow-down{color:#ccc; cursor: none;}
           
        
        
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
    <?php include('includes/uif-viewHeader-pd.php') ?>
    <!-- // VIEW HEADER -->
    <!-- VIEW CONTENT -->
    <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid">
      <!-- VIEW NAVIGATION -->
      <?php include ('includes/uif-navigation-proposal.php') ?>
      <main class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
        <div class="uif-header-inner">
          <h2 class="uif-headerText">
            <span class="uif-headerText-span">
              Project Personnel 
            </span>
          </h2>
          <div class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-add-personnel1">
                <span aria-hidden="true" class="icon-plus">
                  
                </span>
                Add Personnel
              </button>
              <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#sendcert">
                Send Certification Request
              </button>
            </div>
          </div>
        </div>
        <p id="u1iaxrzf" class="uif-message uif-boxLayoutVerticalItem clearfix">
          Add key personnel to this proposal.
        </p>
        <table class="table table-condensed uif-has-actions uif-lightTable dataTable" id="Demo-LightTableGroup1_lightTable" aria-describedby="Demo-LightTableGroup1_lightTable_info">
          <thead>
            <tr role="row">
              <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Field 1: : activate to sort column ">
                <label id="urh9zx8" class="uif-label">
                  Person 
                </label>
              </th>
              <th class="" role="columnheader" tabindex="0" aria-controls="Demo-LightTableGroup1_lightTable" rowspan="1" colspan="1" aria-label="Field 2: : activate to sort column ">
                Proposal Role
              </th>
              <th>
                Certified
              </th>
              <th>
              </th>
            </tr>
          </thead>
          <tbody role="alert" aria-live="polite" aria-relevant="all">
            <tr>
              <td>
                Ward Cleaver
              </td>
              <td>
                <a class="icon-arrow-up" title="move up">
                  
                  <span class="sr-only">
                    move up 
                  </span>
                  
                </a>
                
                <a class="icon-arrow-down" title="move down">
                  
                </a>
                
                <span class="sr-only">
                  move down 
                </span>
                
              </a>
            Principal Investigator
          </td>
        <td>
          yes
        </td>
        <td>
          <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-edit-personnel-01">
            Details 
          </a>
          
          <a href="#" class="btn btn-default btn-xs" data-toggle="">
            
            <span class="sr-only">
              Delete 
            </span>
            
            <span aria-hidden="true" class="icon-trash">
              
            </span>
            
          </a>
        </td>
      </tr>
      <tr>
        <td>
          John Coltrane
        </td>
        <td>
          <a class="icon-arrow-up" title="move up">
            
            <span class="sr-only">
              move up 
            </span>
            
          </a>
          
          <a class="icon-arrow-down" title="move down">
            
            <span class="sr-only">
              move down 
            </span>
            
          </a>
          Key Person
        </td>
        <td>
          no
        </td>
        <td>
          <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-edit-personnel-02">
            Details 
          </a>
          
          <a href="#" class="btn btn-default btn-xs" data-toggle="">
            
            <span class="sr-only">
              Delete 
            </span>
            
            <span aria-hidden="true" class="icon-trash">
              
            </span>
            
          </a>
        </td>
      </tr>
      <tr>
        <td>
          Buddy Guy
        </td>
        <td>
          <a class="icon-arrow-up" title="move up">
            
            <span class="sr-only">
              move up 
            </span>
            
          </a>
          
          <a class="icon-arrow-down" title="move down">
            
            <span class="sr-only">
              move down 
            </span>
            
          </a>
          Co-Investigator
        </td>
        <td>
          no
        </td>
        <td>
          <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-edit-personnel-02">
            Details 
          </a>
          
          <a href="#" class="btn btn-default btn-xs" data-toggle="">
            
            <span class="sr-only">
              Delete 
            </span>
            
            <span aria-hidden="true" class="icon-trash">
              
            </span>
            
          </a>
        </td>
      </tr>
      <tr>
        <td>
          Bill Withers
        </td>
        <td>
          <a class="icon-arrow-up" title="move up">
            
            <span class="sr-only">
              move up 
            </span>
            
          </a>
          
          <a class="icon-arrow-down" title="move down">
            
            <span class="sr-only">
              move down 
            </span>
            
          </a>
          Co-Investigator
        </td>
        <td>
          no
        </td>
        <td>
          <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-edit-personnel-02">
            Details 
          </a>
          
          <a href="#" class="btn btn-default btn-xs" data-toggle="">
            
            <span class="sr-only">
              Delete 
            </span>
            
            <span aria-hidden="true" class="icon-trash">
              
            </span>
            
          </a>
        </td>
      </tr>
      <tr>
        <td>
          Louis Prima
        </td>
        <td>
          <a class="icon-arrow-up" title="move up">
            
            <span class="sr-only">
              move up 
            </span>
            
          </a>
          
          <a class="icon-arrow-down" title="move down">
            
            <span class="sr-only">
              move down 
            </span>
            
          </a>
          Co-Investigator
        </td>
        <td>
          no
        </td>
        <td>
          <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-edit-personnel-02">
            Details 
          </a>
          
          <a href="#" class="btn btn-default btn-xs" data-toggle="">
            
            <span class="sr-only">
              Delete 
            </span>
            
            <span aria-hidden="true" class="icon-trash">
              
            </span>
            
          </a>
        </td>
      </tr>
    </tbody>
  </table>
</main>
</div>
<div class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
  <div class="global-navigate btn-group">
    <button type="button" href="prop-basics-orgloc.php" class="btn btn-default">
      <span class="icon-chevron-left">
        
      </span>
      Back
    </button>
    <button type="button" href="prop-personnel-credit.php" id="save-continue" class="btn btn-primary">
      Continue 
      <span class="icon-chevron-right">
        
      </span>
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
<!-- DIALOGS/Placeholders -->
</div>
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

<!-- MODAL edit personnel's -->
<?php include('includes/modals-prop/personnel-edit.php') ?>
<!-- MODAL ADD PERSONNEL -->
<?php include('includes/modals-prop/personnel-edit-cert.php') ?>
<?php include('includes/modals-prop/personnel-add.php') ?>
<?php include('includes/modals-prop/personnel-add-results.php') ?>
<?php include('includes/modals-prop/personnel-add-role.php') ?>
<script>
(function($){
            
            // table row ordering
    $(".icon-arrow-up,.icon-arrow-down,.top,.bottom").click(function(){
        var row = $(this).parents("tr:first");
        if ($(this).is(".icon-arrow-up")) {
            row.insertBefore(row.prev());
        } else if ($(this).is(".icon-arrow-down")) {
            row.insertAfter(row.next());
        } else {
            row.insertAfter($("table tr:last"));
        }
    });	
}(jQuery))
</script>
</body>
</html>
<?php
$section = '';
$page = 'superuser';
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
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View" style="margin-top:75px">
    <!-- BREADCRUMBS --> 
    <!-- VIEW HEADER -->
    <?php include ('includes/uif-viewHeader-role.php') ?>
    
    <!-- VIEW CONTENT -->
    <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"> 
        <!-- VIEW NAVIGATION -->
        <?php include ('includes/uif-navigation-role.php') ?>
        <main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left: 250px;">
            <div class="uif-header-inner">
                <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Superuser Actions </span> </h2>
            </div>
            
            
   



<div id="uk9itqu" class="uif-inputField uif-cssGridGroup" data-parent="u1rttg5q" data-role="InputField" data-label="Field">
<label id="uk9itqu_label" for="uk9itqu_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="uk9itqu"> Annotation </label>
<textarea id="uk9itqu_control" name="inputField1" rows="3" cols="40" class="form-control input-sm form-control input-sm uif-textAreaControl required error" data-role="Control" data-control_for="uk9itqu" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true"></textarea>
<div id="uk9itqu_errors" class="alert" data-messages_for="uk9itqu" style="display: none;"><div class="uif-clientMessageItems alert-danger"><ul><li class="uif-errorMessageItem-field"><img class="uif-validationImage" src="/krad/images/validation/error.png" alt="Error">  Required</li></ul></div></div></div>



            <table class="table table-condensed table-smaller-text table-hover" id="example">
                <thead>
                    <tr>
                        <th><label>
                                <input type="checkbox" onClick="toggle(this)" />
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
                        <td colspan="5"><div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"> Actions <span class="caret"></span> </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Take Selected Actions</a></li>
                                         <li class="divider"></li>
                                    <li><a href="#">Approve Document</a></li>
                               
                                    <li><a href="#">Disapprove Document</a></li>
                                </ul>
                            </div></td>
                    </tr>
                </tfoot>
            </table>
            
            
        </main>
    </div>
    <!-- VIEW FOOTER -->
    <div id="u19v7dpm" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
        <div class="global-navigate btn-group">
            <button type="button" href="asdf.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
            <button type="button" href="asdf.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
        </div>
        <div class=" global-actions btn-group dropup">
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
<?php include ('includes/footer-scripts.php') ?>
<script type='text/javascript'>
    //<![CDATA[ 
    $(function () {
        $(function () {

            // Enabling Popover Example 1 - HTML (content and title from html tags of element)
            $("[data-toggle=popover]").popover();

            // Enabling Popover Example 2 - JS (hidden content and title capturing)
            $("#initiator-detail1").popover({
                html: true,
                content: function () {
                    return $('#initiator-detail1HiddenContent').html();
                },
                title: function () {
                    return $('#initiator-detail1HiddenTitle').html();
                }
            });
        });
    }); //]]>
</script> 
	<script>
    function toggle(source) {
    
      checkboxes = document.getElementsByName('foo');
    
      for(var i=0, n=checkboxes.length;i<n;i++) {
    
        checkboxes[i].checked = source.checked;
    
      }
    
    }
    </script>
<?php include ('includes/modal-routelog.php') ?>
<?php include ('includes/modal-role-qualify.php') ?>
</body>
</html>
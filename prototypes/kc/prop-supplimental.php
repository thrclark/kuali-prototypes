<?php
$page = 'supplimentalInfo';
$section = 'supplimentalInfo-pageone';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex,nofollow" />
	<title>Kuali :: Fluid Application Header</title>

<!-- GLOBAL STYLES -->
<?php include('includes/styles.php') ?>
</head>
<body id="Uif-Application">
<?php include('includes/uif-applicationHeader.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
<!-- VIEW -->
	<div id="LabsProposal" class="clearfix uif-formView" data-role="View">
<!-- BREADCRUMBS -->
<!-- VIEW HEADER -->
<?php include('includes/uif-viewHeader-pd.php') ?>
<!-- // VIEW HEADER  -->
<!-- VIEW CONTENT -->
		<div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid">
<!-- VIEW NAVIGATION -->
<?php include('includes/uif-navigation-proposal.php') ?>
			<main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;"> 
			<div class="uif-header-inner">
				<h2 id="" class="uif-headerText">
					<span class="uif-headerText-span"> Supplemental Information</span> 
				</h2>
				<div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
				</div>
			</div>
			<section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
				<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
					<li class="active"><a href="#page1" data-toggle="tab">Page l</a></li>
					<li><a href="#page2" data-toggle="tab">Page 2</a></li>
				</ul>
				<div id="my-tab-content" class="tab-content">
					<div class="tab-pane active" id="page1">
						<header class="clearfix uif-header-contentWrapper">
							<div id="u148pgf0" class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
								<div class="row">
									<div class="col-md-6">
										<h3>
											Page 1 
										</h3>
									</div>
								</div>
							</div>
						</header>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-8">
							<div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
								<input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
							</div>
						</div>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-8">
							<div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
								<input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
							</div>
						</div>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-4">
							<div id="u1pkrz9v" class="checkbox uif-inputField" data-parent="u1rttg6l" data-role="InputField" data-label="Field">
								<input type="hidden" name="_inputField1" value="on">
								<input type="checkbox" id="u1pkrz9v_control" name="inputField1" class="uif-checkboxControl required" data-role="Control" data-control_for="u1pkrz9v" aria-required="true">
								<label onclick="handleCheckboxLabelClick('u1pkrz9v_control',event); return false;" for="u1pkrz9v_control"> This is checked.</label> 
							</div>
						</div>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-8">
							<div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
								<input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
							</div>
						</div>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-4">
							<div id="u1pkrz9v" class="checkbox uif-inputField" data-parent="u1rttg6l" data-role="InputField" data-label="Field">
								<input type="hidden" name="_inputField1" value="on">
								<input type="checkbox" id="u1pkrz9v_control" name="inputField1" class="uif-checkboxControl required" data-role="Control" data-control_for="u1pkrz9v" aria-required="true">
								<label onclick="handleCheckboxLabelClick('u1pkrz9v_control',event); return false;" for="u1pkrz9v_control"> This is checked.</label> 
							</div>
						</div>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-8">
							<div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
								<select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
									<option value="1" selected="selected">Option1</option>
									<option value="4">Option2</option>
									<option value="3">Option3</option>
									<option value="2">Option4</option>
									<option value="5">Option5</option>
									<option value="6">Option6</option>
								</select>
							</div>
						</div>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-8">
							<div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
								<select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
									<option value="1" selected="selected">Option1</option>
									<option value="4">Option2</option>
									<option value="3">Option3</option>
									<option value="2">Option4</option>
									<option value="5">Option5</option>
									<option value="6">Option6</option>
								</select>
							</div>
						</div>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-8">
							<div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
								<select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
									<option value="1" selected="selected">Option1</option>
									<option value="4">Option2</option>
									<option value="3">Option3</option>
									<option value="2">Option4</option>
									<option value="5">Option5</option>
									<option value="6">Option6</option>
								</select>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="page2">
						<header class="clearfix uif-header-contentWrapper">
							<div id="u148pgf0" class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
								<div class="row">
									<div class="col-md-6">
										<h3>
											Page 2
										</h3>
									</div>
								</div>
							</div>
						</header>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-8">
							<div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
								<input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
							</div>
						</div>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-8">
							<div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
								<input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
							</div>
						</div>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-4">
							<div id="u1pkrz9v" class="checkbox uif-inputField" data-parent="u1rttg6l" data-role="InputField" data-label="Field">
								<input type="hidden" name="_inputField1" value="on">
								<input type="checkbox" id="u1pkrz9v_control" name="inputField1" class="uif-checkboxControl required" data-role="Control" data-control_for="u1pkrz9v" aria-required="true">
								<label onclick="handleCheckboxLabelClick('u1pkrz9v_control',event); return false;" for="u1pkrz9v_control"> This is checked.</label> 
							</div>
						</div>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-8">
							<div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
								<input id="" type="text" name="inputField1" value="" size="30" class="form-control input-sm form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
							</div>
						</div>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-4">
							<div id="u1pkrz9v" class="checkbox uif-inputField" data-parent="u1rttg6l" data-role="InputField" data-label="Field">
								<input type="hidden" name="_inputField1" value="on">
								<input type="checkbox" id="u1pkrz9v_control" name="inputField1" class="uif-checkboxControl required" data-role="Control" data-control_for="u1pkrz9v" aria-required="true">
								<label onclick="handleCheckboxLabelClick('u1pkrz9v_control',event); return false;" for="u1pkrz9v_control"> This is checked.</label> 
							</div>
						</div>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-8">
							<div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
								<select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
									<option value="1" selected="selected">Option1</option>
									<option value="4">Option2</option>
									<option value="3">Option3</option>
									<option value="2">Option4</option>
									<option value="5">Option5</option>
									<option value="6">Option6</option>
								</select>
							</div>
						</div>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-8">
							<div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
								<select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
									<option value="1" selected="selected">Option1</option>
									<option value="4">Option2</option>
									<option value="3">Option3</option>
									<option value="2">Option4</option>
									<option value="5">Option5</option>
									<option value="6">Option6</option>
								</select>
							</div>
						</div>
						<div class="md-clear-left col-md-2 uif-cssGridLabelCol">
							<label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Label: </label> 
						</div>
						<div class="col-md-8">
							<div id="" class="uif-inputField" data-parent="" data-role="InputField" data-label="">
								<select id="" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
									<option value="1" selected="selected">Option1</option>
									<option value="4">Option2</option>
									<option value="3">Option3</option>
									<option value="2">Option4</option>
									<option value="5">Option5</option>
									<option value="6">Option6</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
				</script>
			</section>
			</main> 
		</div>

<!-- VIEW FOOTER                  

-->
    <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;"> <div class="global-navigate btn-group">
                <button type="button" href="prop-budget.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
                <button type="button" href="prop-basics-supp2.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
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
</form>

<?php include ('includes/footer-scripts.php') ?>
<?php include('includes/modals-global-propdev.php') ?>
</body>
</html>

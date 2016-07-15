<?php
$section = 'asdf';
$page = 'asdf';
?>
<!DOCTYPE HTML>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>
</head>

<body id="Uif-Application">
<!-- APPLICATION HEADER -->
<?php include('includes/uif-applicationHeader.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
	<!-- VIEW -->
	<div id="LabsProposal" class="clearfix uif-formView" data-role="View"> <!-- BREADCRUMBS --> 
		<!-- VIEW HEADER -->
		<header class="container uif-viewHeader-contentWrapper">
			<div id="ueqbqhn" class="uif-viewHeader" data-header_for="LabsProposal">
				<h1 class="uif-headerText">
					<p id="u1p8pc9q" class="uif-viewHeader-areaTitle"> &lt;Area Title&gt; </p>
					<span class="uif-headerText-span"> UIF-Header Text</span> <span class="uif-supportTitle-wrapper">
					<div id="u1hgnm9q" class="uif-viewHeader-supportTitle" data-parent="ueqbqhn">&lt;Support Title&gt;<em></em> </div>
					</span> </h1>
				<div id="LabsProposal-DocInfo" class="uif-verticalBoxGroup uif-header-rightGroup uif-documentInfo" data-parent="LabsProposal">
					<div id="u1f206jn" class="uif-messageField uif-boxLayoutVerticalItem clearfix" data-label="Doc Nbr">
						<label id="uj8x9wj" for="uauh5yk_span" class="uif-label" data-label_for="u1f206jn"> DocInfo: </label>
						<p id="uauh5yk" class="uif-message"> Some Value </p>
					</div>
					<div id="u1f206ki" class="uif-messageField uif-boxLayoutVerticalItem clearfix" data-label="Initiator">
						<label id="ujre4xu" for="u7lh763_span" class="uif-label" data-label_for="u1f206ki"> DocInfo: </label>
						<p id="u7lh763" class="uif-message"> Some Value </p>
					</div>
					<div id="u1f206ld" class="uif-messageField uif-boxLayoutVerticalItem clearfix" data-label="Status">
						<label id="uk9uzz5" for="u4ch8dm_span" class="uif-label" data-label_for="u1f206ld"> DocInfo: </label>
						<p id="u4ch8dm" class="uif-message"> <a href="#">Linked Value </a></p>
					</div>
					<div id="LabsProposal-MoreDocInfo" class="dropdown uif-boxLayoutVerticalItem clearfix"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> more info... </a>
						<section id="uhlixhs" class="dropdown-menu uif-gridGroup">
							<h4 class="uif-headerText"> Document Info </h4>
							<table id="u98wduy" class="table table-condensed uif-table-fixed" role="presentation">
								<tbody>
									<tr>
										<th scope="row">DocInfo</th>
										<td class="uif-gridLayoutCell"><div id="u1qpse12" class="uif-messageField" data-label="Doc Nbr">
												<p id="u1hmj9zj" class="uif-message"> Some Value</p>
											</div></td>
									</tr>
									<tr>
										<th scope="row">DocInfo</th>
										<td class="uif-gridLayoutCell"><div id="upf4ga4" class="uif-linkField" data-label="Initiator"><span class="uif-message">Some Value</span></div></td>
									</tr>
									<tr>
										<th scope="row">DocInfo</th>
										<td class="uif-gridLayoutCell"><div id="u1qpse2s" class="uif-messageField" data-label="Status">
												<p id="u1b4jcel" class="uif-message">Some Value</p>
											</div></td>
									</tr>
									<tr>
										<th scope="row">DocInfo</th>
										<td class="uif-gridLayoutCell"><div id="u1qpse3n" class="uif-messageField" data-label="PI">
												<p id="u17vjdm4" class="uif-message"><a href="#">Linked Value</a></p>
											</div></td>
									</tr>
									<tr>
										<th scope="row">DocInfo</th>
										<td class="uif-gridLayoutCell"><div id="u1qpse4i" class="uif-messageField" data-label="Created"><span class="uif-message">Some Value</span></div></td>
									</tr>
									<tr>
										<th scope="row">DocInfo</th>
										<td class="uif-gridLayoutCell"><div id="u1qpse5d" class="uif-messageField" data-label="Updated">
												<p id="u11djg16" class="uif-message">Some Value</p>
											</div></td>
									</tr>
								</tbody>
							</table>
						</section>
					</div>
				</div>
			</div>
			<div id="LabsProposal-DocActionBar" class="uif-actionBar uif-header-lowerGroup">
				<ul>
					<li> <a id="uotglns" class="uif-actionLink" tabindex="0" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;print&quot;}"><span class="icon-print"></span>Action</a> </li>
					<li> <a id="uotglon" class="uif-actionLink" tabindex="0" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;copy&quot;}"><span class="icon-copy"></span>Action</a> </li>
					<li> <a id="uotglpi" class="uif-actionLink" tabindex="0" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;medusa&quot;}"><span class="icon-tasks"></span>Action</a> </li>
					<li> <a id="uotglqd" class="uif-actionLink" tabindex="0" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;showHierarchy&quot;}"><span class="icon-list-ol"></span>Action</a> </li>
				</ul>
			</div>
		</header>
		<!-- VIEW CONTENT -->
		<div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"> 
			<!-- VIEW NAVIGATION -->
			<nav id="Uif-Navigation" style="position:absolute; display:none">
				<div id="LabsProposal-Menu" class="uif-menuNavigationGroup">
					<div class="sidebar-collapse"> <span class="icon-angle-left"></span> </div>
					<!-- NAVIGATION -->
					<ul class="nav nav-list">
						<li> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="icon-file-alt"></span> <span id="u242f54" class="uif-innerText"> Navigate </span> <span class="arrow icon-angle-right"></span> </a>
							<ul class="submenu uif-listLayout">
								<li> <a id="ua6f4k" class="uif-actionLink" href="prop-basics-details.html"> Navigate</a> </li>
								<li> <a id="ua6f5f" class="uif-actionLink" tabindex="0" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;refresh&quot;}"> Navigate </a> </li>
								<li> <a id="ua6f6a" class="uif-actionLink" tabindex="0"  data-role="Action"> Navigate </a> </li>
								<li> <a id="ua6f75" class="uif-actionLink" tabindex="0"  data-role="Action"> Navigate </a> </li>
								<li> <a id="ua6f80" class="uif-actionLink" tabindex="0"  data-role="Action"> Navigate </a> </li>
							</ul>
						</li>
						<li> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="icon-user3"></span> <span id="u1sp7yfb" class="uif-innerText">Navigate </span> <span class="arrow icon-angle-right"></span> </a>
							<ul class="submenu uif-listLayout">
								<li> <a id="u3s0ej9" class="uif-actionLink" tabindex="0"  data-role="Action"> Navigate </a> </li>
								<li> <a id="u3s0ek4" class="uif-actionLink" tabindex="0"  data-role="Action"> Navigate </a> </li>
								<li> <a id="u3s0ekz" class="uif-actionLink" tabindex="0"  data-role="Action"> Navigate </a> </li>
								<li> <a id="u3s0elu" class="uif-actionLink" tabindex="0"  data-role="Action"> Navigate </a> </li>
								<li> <a id="u3s0emp" class="uif-actionLink" tabindex="0"  data-role="Action"> Navigate </a> </li>
							</ul>
						</li>
						<li> <a id="u79gehe" class="uif-navigationActionLink" ><span class="icon-ok"></span><span class="uif-innerText">Navigate</span></a> </li>
						<li> <a id="u79gei9" class="uif-navigationActionLink" ><span class="icon-paper-clip"></span><span class="uif-innerText">Navigate</span></a> </li>
						<li> <a id="u79gej4" class="uif-navigationActionLink" ><span class="icon-question2"></span><span class="uif-innerText">Navigate</span></a> </li>
						<li> <a id="u79gej4" class="uif-navigationActionLink" href="prop-budget.html"><span class="icon-money"></span><span class="uif-innerText">Navigate</span></a> </li>
						<li> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="icon-bell2"></span> <span id="umhfcyq" class="uif-innerText"> Navigate </span> <span class="arrow icon-angle-right"></span> </a>
							<ul class="submenu uif-listLayout">
								<li> <a id="ul96bkq" class="uif-actionLink" tabindex="0"  data-role="Action"> Navigate </a> </li>
								<li> <a id="ul96bll" class="uif-actionLink" tabindex="0"  data-role="Action"> Navigate </a> </li>
							</ul>
						</li>
						<li> <a id="u79gelp" class="uif-navigationActionLink" ><span class="icon-signout"></span><span class="uif-innerText">Navigate</span></a> </li>
					</ul>
				</div>
			</nav>
			
			<main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal" style="margin-left: 250px;">
<header class="clearfix uif-header-contentWrapper">
					<div id="u148pgf0" class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
						<h2 class="uif-headerText"> <span class="uif-headerText-span"> Page Header </span> </h2>
					</div>
					<div id="uw4ggjs" class="uif-verticalBoxGroup uif-header-lowerGroup" data-parent="LabsProposal-Page">
						<div id="u1ndzhxa" class="text-muted uif-boxLayoutVerticalItem clearfix" data-parent="uw4ggjs">
							<p>* Indicates required fields</p>
						</div>
					</div>
				</header>
				<div id="u14jg6xp" class="uif-cssGridGroup uif-boxLayoutVerticalItem clearfix" data-parent="LabsProposal-Page">
					
					
					
					
					
					<div class="row">
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Email address</label>
							<p class="help-block">Example block-level help text here.</p>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>
					</div>
				
					
						
					<div class="row">
						<div class="form-group col-md-2">
							<label for="exampleInputEmail1">Email address</label>
						
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>
					</div>
				
						<div class="row">
						<div class="form-group col-md-4">
							<label for="exampleInputEmail1">Email address</label>
						
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>
					</div>
					
					
						<div class="row">
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Email address</label>
						
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>
					</div>
					
					
						<div class="row">
						<div class="form-group col-md-8">
							<label for="exampleInputEmail1">Email address</label>
						
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>
					</div>
					
					
						<div class="row">
						<div class="form-group col-md-12">
							<label for="exampleInputEmail1">Email address</label>
						
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>
					</div>
					
					
					
					<!--	
					
					
					<div class="row ">
					
					
						<div class="col-md-3 uif-cssGridLabelCol">
							<label id="u11k8c13_label" for="u11k8c13_control" class="uif-label displayWith-u11k8c13" data-label_for="u11k8c13"> Proposal Type: </label>
							
							<p id="uov7p8r_instructional" class="uif-instructionalMessage">
Instructions for this field </p>
						</div>
						
						
						
						<div class="col-md-9">
							<div id="u11k8c13" class="uif-inputField" data-parent="u14jg6xp" data-role="InputField" data-label="Proposal Type">
								<input id="u11k8c13_control" type="text" name="field1" value="" size="30" class="form-control input-sm uif-textControl required error" data-role="Control" data-control_for="u11k8c13" aria-required="true" aria-invalid="true">
								<div id="u11k8c13_errors" class="uif-validationMessages" data-messages_for="u11k8c13" style="display: none;">
									<div class="uif-clientMessageItems uif-clientErrorDiv">
										<ul>
											<li class="uif-errorMessageItem-field"><img class="uif-validationImage" src="../krad/images/validation/error.png" alt="Error"> Required</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					--> 
					
				</div>
			</main>
		</div>
		<!-- VIEW FOOTER -->
		<div id="u19v7dpm" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
			<button id="ufuknl9" class="btn btn-default uif-secondaryActionButton uif-boxLayoutHorizontalItem" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;save&quot;}"> Save </button>
			<button id="ufuknm4" class="btn btn-primary uif-primaryActionButton uif-boxLayoutHorizontalItem" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;saveContinue&quot;}"> Save and Continue </button>
		</div>
		<!-- DIALOGS/Placeholders -->
		<div id="Uif-Dialogs"> </div>
	</div>
	<span id="formInfo">
	<input type="hidden" name="viewId" value="LabsProposal">
	<input type="hidden" name="formKey" value="2e468a13-a495-44cc-acd7-aac6b2ed97a0">
	<input type="hidden" name="requestedFormKey" value="2e468a13-a495-44cc-acd7-aac6b2ed97a0">
	<input type="hidden" name="sessionId" value="CAFCAB4387CB97D8567359A8C37D7712">
	<input type="hidden" name="flowKey" value="">
	<input type="hidden" name="view.applyDirtyCheck" value="true">
	<input type="hidden" name="dirtyForm" value="false">
	<input type="hidden" name="renderedInLightBox" value="false">
	<input type="hidden" name="view.singlePageView" value="true">
	<input type="hidden" name="view.disableBrowserCache" value="true">
	</span> <span id="formComplete"></span>
	<div class="jquerybubblepopup jquerybubblepopup-kr-error-cs" style="margin: 0px 0px 0px 395.5px; opacity: 0; top: 227px; left: 542px; position: absolute; display: none;" id="jquerybubblepopup-1393862100-0" data-for="u11k8c13_control">
		<table>
			<tbody>
				<tr>
					<td class="jquerybubblepopup-top-left" style="background-image:url(../../plugins/tooltip/jquerybubblepopup-theme/kr-error-cs/top-left.png);"></td>
					<td class="jquerybubblepopup-top-middle" style="background-image:url(../../plugins/tooltip/jquerybubblepopup-theme/kr-error-cs/top-middle.png);"></td>
					<td class="jquerybubblepopup-top-right" style="background-image:url(../../plugins/tooltip/jquerybubblepopup-theme/kr-error-cs/top-right.png);"></td>
				</tr>
				<tr>
					<td class="jquerybubblepopup-middle-left" style="background-image:url(../../plugins/tooltip/jquerybubblepopup-theme/kr-error-cs/middle-left.png);"></td>
					<td class="jquerybubblepopup-innerHtml"><div class="uif-clientMessageItems uif-clientErrorDiv">
							<ul>
								<li class="uif-errorMessageItem-field"><img class="uif-validationImage" src="../krad/images/validation/error.png" alt="Error"> Required</li>
							</ul>
						</div></td>
					<td class="jquerybubblepopup-middle-right" style="background-image:url(../../plugins/tooltip/jquerybubblepopup-theme/kr-error-cs/middle-right.png);"></td>
				</tr>
				<tr>
					<td class="jquerybubblepopup-bottom-left" style="background-image:url(../../plugins/tooltip/jquerybubblepopup-theme/kr-error-cs/bottom-left.png);"></td>
					<td class="jquerybubblepopup-bottom-middle" style="background-image: url(../../plugins/tooltip/jquerybubblepopup-theme/kr-error-cs/bottom-middle.png); text-align: left;"><img src="../../plugins/tooltip/jquerybubblepopup-theme/kr-error-cs/tail-bottom.png" alt="" class="jquerybubblepopup-tail"></td>
					<td class="jquerybubblepopup-bottom-right" style="background-image:url(../../plugins/tooltip/jquerybubblepopup-theme/kr-error-cs/bottom-right.png);"></td>
				</tr>
			</tbody>
		</table>
	</div>
</form>

<?php include ('includes/footer-scripts.php') ?>



</body>
</html>
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
			<nav id="Uif-Navigation" style="position:absolute;">
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
					<div class="row ">
						<div class="col-md-3 uif-cssGridLabelCol">
							<label id="u11k8c13_label" for="u11k8c13_control" class="uif-label displayWith-u11k8c13" data-label_for="u11k8c13"> Proposal Type: </label>
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
					<div class="row ">
						<div class="col-md-3 uif-cssGridLabelCol">
							<label id="u11k8c1y_label" for="u11k8c1y_control" class="uif-label displayWith-u11k8c1y" data-label_for="u11k8c1y"> Project Title: </label>
						</div>
						<div class="col-md-9">
							<div id="u11k8c1y" class="uif-inputField" data-parent="u14jg6xp" data-role="InputField" data-label="Project Title">
								<textarea id="u11k8c1y_control" name="field2" rows="3" cols="40" class="form-control input-sm uif-mediumTextAreaControl has-helper required" data-role="Control" data-control_for="u11k8c1y" aria-required="true"></textarea>
								<div class="uif-helperText" style="overflow: hidden; display: none;"> Give this proposal a title. Be detailed but concise. </div>
							</div>
						</div>
					</div>
					<div class="row ">
						<div class="col-md-3 uif-cssGridLabelCol">
							<label id="u1javsi1_label" for="u1javsi1_fieldset" class="uif-label displayWith-u1javsi1" data-label_for="u1javsi1"> Project Dates: </label>
						</div>
						<div class="col-md-9">
							<div id="u1javsi1" class="uif-fieldGroup" data-parent="u14jg6xp" data-label="Project Dates" data-group="u18wn9hi">
								<fieldset aria-labelledby="u1javsi1_label" id="u1javsi1_fieldset">
									<legend style="display: none">Project Dates</legend>
									<div id="u18wn9hi" class="uif-cssGridGroup" data-parent="u1javsi1">
										<div class="row ">
											<div class="col-md-6">
												<div id="uec5xzy" class="uif-inputField" data-parent="u18wn9hi" data-role="InputField">
													<div class="input-group">
														<input id="uec5xzy_control" type="text" name="field4" value="" size="10" class="form-control input-sm uif-dateControl hasDatepicker" data-role="Control" data-control_for="uec5xzy" placeholder="mm/dd/yyyy ">
														<span class="input-group-msg">
														<p id="u21vmor" class="uif-message"> to </p>
														</span> </div>
												</div>
											</div>
											<div class="col-md-6">
												<div id="uec5y0t" class="uif-inputField" data-parent="u18wn9hi" data-role="InputField">
													<input id="uec5y0t_control" type="text" name="field5" value="" size="10" class="form-control input-sm uif-dateControl hasDatepicker" data-role="Control" data-control_for="uec5y0t" placeholder="mm/dd/yyyy ">
												</div>
											</div>
										</div>
									</div>
								</fieldset>
							</div>
						</div>
					</div>
					<div class="row ">
						<div class="col-md-3 uif-cssGridLabelCol">
							<label id="u11k8c3o_label" for="u11k8c3o_control" class="uif-label displayWith-u11k8c3o" data-label_for="u11k8c3o"> Proposal Indicator: </label>
						</div>
						<div class="col-md-9">
							<div id="u11k8c3o" class="uif-inputField" data-parent="u14jg6xp" data-role="InputField" data-label="Proposal Indicator">
								<input type="hidden" name="_bField1" value="on">
								<input type="checkbox" id="u11k8c3o_control" name="bField1" class="uif-checkboxControl" data-role="Control" data-control_for="u11k8c3o">
							</div>
						</div>
					</div>
					<div class="row ">
						<div class="col-md-3 uif-cssGridLabelCol">
							<label id="u11k8c4j_label" for="u11k8c4j_control" class="uif-label displayWith-u11k8c4j" data-label_for="u11k8c4j"> Award ID: </label>
						</div>
						<div class="col-md-9">
							<div id="u11k8c4j" class="uif-inputField" data-parent="u14jg6xp" data-role="InputField" data-label="Award ID">
								<div class="input-group">
									<input id="u11k8c4j_control" type="text" name="field3" value="" size="30" class="form-control input-sm uif-textControl has-helper" data-role="Control" data-control_for="u11k8c4j">
									<div class="uif-helperText" style="overflow: hidden; display: none;"> Enter the award ID for this proposal. </div>
									<span class="input-group-btn"> <a id="u11k8c4j_quickfinder_act" class="uif-actionLink icon-search" tabindex="0" data-onclick="createLightBoxPost(&quot;u11k8c4j_quickfinder_act&quot;,{autoSize:true,openEffect:&quot;fade&quot;,closeEffect:&quot;fade&quot;,openSpeed:200,closeSpeed:200,helpers:{overlay:{css:{cursor:'arrow'},closeClick:false}},type:&quot;iframe&quot;},true);" data-role="Action" data-focusid="NEXT_INPUT:u11k8c4j_quickfinder_act" data-submit_data="{&quot;actionParameters[conversionFields]&quot;:&quot;number:field3&quot;,&quot;actionParameters[viewName]&quot;:&quot;LabsProposal-Lookup&quot;,&quot;methodToCall&quot;:&quot;performLookup&quot;,&quot;actionParameters[quickfinderId]&quot;:&quot;u11k8c4j_quickfinder&quot;,&quot;actionParameters[multipleValuesSelect]&quot;:&quot;false&quot;,&quot;actionParameters[hideCriteriaOnSearch]&quot;:&quot;true&quot;,&quot;actionParameters[dataObjectClassName]&quot;:&quot;org.kuali.rice.krad.demo.travel.dataobject.TravelAccount&quot;,&quot;actionParameters[baseLookupUrl]&quot;:&quot;../kr-krad/lookup&quot;}"></a> </span> </div>
							</div>
						</div>
					</div>
					<div class="row ">
						<div class="col-md-3 uif-cssGridLabelCol">
							<label id="u11k8c5e_label" for="u11k8c5e_control" class="uif-label displayWith-u11k8c5e" data-label_for="u11k8c5e"> Keywords: </label>
						</div>
						<div class="col-md-9">
							<div id="u11k8c5e" class="uif-inputField" data-parent="u14jg6xp" data-role="InputField" data-label="Keywords">
								<select id="u11k8c5e_control" name="field4" size="1" class="form-control input-sm uif-dropdownControl" data-role="Control" data-control_for="u11k8c5e">
									<option value="B">Biology</option>
									<option value="C">Chemistry</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div id="LabsProposal-StackedSection" class="uif-stackedCollectionSection uif-boxLayoutVerticalItem clearfix" data-parent="LabsProposal-Page">
					<header class="clearfix uif-header-contentWrapper">
						<div id="uwsl2gn" class="uif-sectionHeader" data-header_for="LabsProposal-StackedSection"> </div>
					</header>
					<section id="u6so34i_line0" class="uif-collectionItem uif-boxCollectionItem" data-parent="LabsProposal-StackedSection">
						<header id="u1usv3hd_line0" class="uif-header" data-header_for="u6so34i_line0">
							<h4 class="uif-headerText"> <a data-role="disclosureLink" data-linkfor="u6so34i_line0_disclosureContent" href="#" id="u6so34i_line0_toggle" data-open="true" data-widgetid="u1g50jh7_line0" data-speed="500" data-ajax="false"><span class="uif-headerText-span"><span id="u6so34i_line0_toggle_exp" class="icon-caret-down"></span><span style="display:none;" id="u6so34i_line0_toggle_col" class="icon-caret-right"></span> Line A </span></a> </h4>
							<div id="ubrhaw8_line0" class="uif-verticalBoxGroup uif-header-rightGroup" data-parent="u6so34i_line0">
								<button id="LabsProposal-StackedSection_del_line0" class="btn btn-default btn-sm uif-smallActionButton uif-boxLayoutVerticalItem clearfix icon-close" data-onclick="writeCurrentPageToSession(this);actionInvokeHandler(this);" data-dirtyonaction="true" data-ajaxreturntype="update-component" data-refreshid="LabsProposal-StackedSection" data-role="Action" data-loadingmessage="Deleting Line..." data-submit_data="{&quot;methodToCall&quot;:&quot;deleteLine&quot;,&quot;actionParameters[selectedCollectionPath]&quot;:&quot;list4&quot;,&quot;actionParameters[selectedCollectionId]&quot;:&quot;LabsProposal-StackedSection&quot;,&quot;actionParameters[selectedLineIndex]&quot;:&quot;0&quot;}" data-jumptoid="LabsProposal-StackedSection"> </button>
							</div>
						</header>
						<div id="u6so34i_line0_disclosureContent" data-role="disclosureContent" data-open="true" class="uif-disclosureContent">
							<div id="upl0vws_line0" class="uif-fieldGroup" data-parent="u6so34i_line0" data-group="u9n4ft5_line0">
								<fieldset aria-labelledby="upl0vws_line0_label" id="upl0vws_line0_fieldset">
									<legend style="display: none"></legend>
									<div id="u10i8ym5_line0" class="uif-tabGroup" data-parent="u9n4ft5_line0" data-type="Uif-TabGroup">
										<div id="u10i8ym5_line0_tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
											<ul id="u10i8ym5_line0_tabList" class="nav nav-tabs" role="tablist">
												<li data-tabfor="u11ymts9_line0" role="tab" tabindex="0" aria-controls="u11ymts9_line0_tab" aria-labelledby="ui-id-1" class="active" aria-selected="true"> <a href="#u11ymts9_line0_tab" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">Details</a> </li>
												<li data-tabfor="u11ymtt4_line0" role="tab" tabindex="-1" aria-controls="u11ymtt4_line0_tab" aria-labelledby="ui-id-2" aria-selected="false"> <a href="#u11ymtt4_line0_tab" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">Organization</a> </li>
												<li data-tabfor="u11ymttz_line0" role="tab" tabindex="-1" aria-controls="u11ymttz_line0_tab" aria-labelledby="ui-id-3" aria-selected="false"> <a href="#u11ymttz_line0_tab" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3">Education</a> </li>
												<li data-tabfor="u11ymtuu_line0" role="tab" tabindex="-1" aria-controls="u11ymtuu_line0_tab" aria-labelledby="ui-id-4" aria-selected="false"> <a href="#u11ymtuu_line0_tab" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-4">Degrees</a> </li>
											</ul>
											<div data-tabwrapperfor="u11ymts9_line0" data-type="TabWrapper" id="u11ymts9_line0_tab" aria-labelledby="ui-id-1" role="tabpanel" aria-expanded="true" aria-hidden="false">
												<div id="u11ymts9_line0" class="uif-cssGridGroup" data-parent="u10i8ym5_line0">
													<div class="row ">
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uzcuu63_line0_label" for="uzcuu63_line0_control" class="uif-label displayWith-uzcuu63_line0" data-label_for="uzcuu63_line0"> Field 1: </label>
														</div>
														<div class="col-md-4">
															<div id="uzcuu63_line0" class="uif-inputField" data-parent="u11ymts9_line0" data-role="InputField" data-label="Field 1">
																<div class="input-group">
																	<input id="uzcuu63_line0_control" type="text" name="list4[0].field1" value="A" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uzcuu63_line0">
																	<span class="input-group-btn"><a id="expand_btn_uzcuu63_line0_control" title="Expand" class="icon-edit-sign"></a></span> </div>
															</div>
														</div>
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uzcuu6y_line0_label" for="uzcuu6y_line0_control" class="uif-label displayWith-uzcuu6y_line0" data-label_for="uzcuu6y_line0"> Field 2: </label>
														</div>
														<div class="col-md-4">
															<div id="uzcuu6y_line0" class="uif-inputField" data-parent="u11ymts9_line0" data-role="InputField" data-label="Field 2">
																<input id="uzcuu6y_line0_control" type="text" name="list4[0].field2" value="B" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uzcuu6y_line0">
															</div>
														</div>
													</div>
													<div class="row ">
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uzcuu7t_line0_label" for="uzcuu7t_line0_control" class="uif-label displayWith-uzcuu7t_line0" data-label_for="uzcuu7t_line0"> Field 3: </label>
														</div>
														<div class="col-md-4">
															<div id="uzcuu7t_line0" class="uif-inputField" data-parent="u11ymts9_line0" data-role="InputField" data-label="Field 3">
																<input id="uzcuu7t_line0_control" type="text" name="list4[0].field3" value="C" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uzcuu7t_line0">
															</div>
														</div>
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uzcuu8o_line0_label" for="uzcuu8o_line0_control" class="uif-label displayWith-uzcuu8o_line0" data-label_for="uzcuu8o_line0"> Field 4: </label>
														</div>
														<div class="col-md-4">
															<div id="uzcuu8o_line0" class="uif-inputField" data-parent="u11ymts9_line0" data-role="InputField" data-label="Field 4">
																<input id="uzcuu8o_line0_control" type="text" name="list4[0].field4" value="D" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uzcuu8o_line0">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div data-tabwrapperfor="u11ymtt4_line0" data-type="TabWrapper" id="u11ymtt4_line0_tab" aria-labelledby="ui-id-2" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
												<div id="u11ymtt4_line0" class="uif-cssGridGroup" data-parent="u10i8ym5_line0">
													<div class="row ">
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="u5mzxmk_line0_label" for="u5mzxmk_line0_control" class="uif-label displayWith-u5mzxmk_line0" data-label_for="u5mzxmk_line0"> Field 1: </label>
														</div>
														<div class="col-md-4">
															<div id="u5mzxmk_line0" class="uif-inputField" data-parent="u11ymtt4_line0" data-role="InputField" data-label="Field 1">
																<input id="u5mzxmk_line0_control" type="text" name="list4[0].field1" value="A" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="u5mzxmk_line0">
															</div>
														</div>
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="u5mzxnf_line0_label" for="u5mzxnf_line0_control" class="uif-label displayWith-u5mzxnf_line0" data-label_for="u5mzxnf_line0"> Field 2: </label>
														</div>
														<div class="col-md-4">
															<div id="u5mzxnf_line0" class="uif-inputField" data-parent="u11ymtt4_line0" data-role="InputField" data-label="Field 2">
																<input id="u5mzxnf_line0_control" type="text" name="list4[0].field2" value="B" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="u5mzxnf_line0">
															</div>
														</div>
													</div>
													<div class="row ">
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="u5mzxoa_line0_label" for="u5mzxoa_line0_control" class="uif-label displayWith-u5mzxoa_line0" data-label_for="u5mzxoa_line0"> Field 3: </label>
														</div>
														<div class="col-md-4">
															<div id="u5mzxoa_line0" class="uif-inputField" data-parent="u11ymtt4_line0" data-role="InputField" data-label="Field 3">
																<input id="u5mzxoa_line0_control" type="text" name="list4[0].field3" value="C" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="u5mzxoa_line0">
															</div>
														</div>
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="u5mzxp5_line0_label" for="u5mzxp5_line0_control" class="uif-label displayWith-u5mzxp5_line0" data-label_for="u5mzxp5_line0"> Field 4: </label>
														</div>
														<div class="col-md-4">
															<div id="u5mzxp5_line0" class="uif-inputField" data-parent="u11ymtt4_line0" data-role="InputField" data-label="Field 4">
																<input id="u5mzxp5_line0_control" type="text" name="list4[0].field4" value="D" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="u5mzxp5_line0">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div data-tabwrapperfor="u11ymttz_line0" data-type="TabWrapper" id="u11ymttz_line0_tab" aria-labelledby="ui-id-3" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
												<section id="u11ymttz_line0" class="uif-gridSubSection" data-parent="u10i8ym5_line0">
													<header id="u1cnha8c_line0" class="uif-subSectionHeader" data-header_for="u11ymttz_line0">
														<h4 class="uif-headerText"> <span class="uif-headerText-span"> Education </span> </h4>
													</header>
													<table id="u569ish_line0" class="table table-condensed" role="presentation">
														<tbody>
															<tr>
																<th scope="row" class="col-md-3"> <label id="u92n5b_line0" for="uyxm4xj_line0_control" class="uif-label displayWith-uyxm4xj_line0" data-label_for="uyxm4xj_line0"> Field 1 </label></th>
																<td class="uif-gridLayoutCell"><div id="uyxm4xj_line0" class="uif-field" data-label="Field 1"> A </div></td>
															</tr>
															<tr>
																<th scope="row" class="col-md-3"> <label id="urji6m_line0" for="uyxm4ye_line0_control" class="uif-label displayWith-uyxm4ye_line0" data-label_for="uyxm4ye_line0"> Field 2 </label></th>
																<td class="uif-gridLayoutCell"><div id="uyxm4ye_line0" class="uif-field" data-label="Field 2"> B </div></td>
															</tr>
															<tr>
																<th scope="row" class="col-md-3"> <label id="u1a0d7x_line0" for="uyxm4z9_line0_control" class="uif-label displayWith-uyxm4z9_line0" data-label_for="uyxm4z9_line0"> Field 3 </label></th>
																<td class="uif-gridLayoutCell"><div id="uyxm4z9_line0" class="uif-field" data-label="Field 3"> C </div></td>
															</tr>
															<tr>
																<th scope="row" class="col-md-3"> <label id="u1sh898_line0" for="uyxm504_line0_control" class="uif-label displayWith-uyxm504_line0" data-label_for="uyxm504_line0"> Field 4 </label></th>
																<td class="uif-gridLayoutCell"><div id="uyxm504_line0" class="uif-field" data-label="Field 4"> D </div></td>
															</tr>
														</tbody>
													</table>
												</section>
											</div>
											<div data-tabwrapperfor="u11ymtuu_line0" data-type="TabWrapper" id="u11ymtuu_line0_tab" aria-labelledby="ui-id-4" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
												<div id="u11ymtuu_line0" class="uif-cssGridGroup" data-parent="u10i8ym5_line0">
													<div class="row ">
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uh8e6im_line0_label" for="uh8e6im_line0_control" class="uif-label displayWith-uh8e6im_line0" data-label_for="uh8e6im_line0"> Field 1: </label>
														</div>
														<div class="col-md-4">
															<div id="uh8e6im_line0" class="uif-inputField" data-parent="u11ymtuu_line0" data-role="InputField" data-label="Field 1">
																<input id="uh8e6im_line0_control" type="text" name="list4[0].field1" value="A" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uh8e6im_line0">
															</div>
														</div>
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uh8e6jh_line0_label" for="uh8e6jh_line0_control" class="uif-label displayWith-uh8e6jh_line0" data-label_for="uh8e6jh_line0"> Field 2: </label>
														</div>
														<div class="col-md-4">
															<div id="uh8e6jh_line0" class="uif-inputField" data-parent="u11ymtuu_line0" data-role="InputField" data-label="Field 2">
																<input id="uh8e6jh_line0_control" type="text" name="list4[0].field2" value="B" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uh8e6jh_line0">
															</div>
														</div>
													</div>
													<div class="row ">
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uh8e6kc_line0_label" for="uh8e6kc_line0_control" class="uif-label displayWith-uh8e6kc_line0" data-label_for="uh8e6kc_line0"> Field 3: </label>
														</div>
														<div class="col-md-4">
															<div id="uh8e6kc_line0" class="uif-inputField" data-parent="u11ymtuu_line0" data-role="InputField" data-label="Field 3">
																<input id="uh8e6kc_line0_control" type="text" name="list4[0].field3" value="C" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uh8e6kc_line0">
															</div>
														</div>
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uh8e6l7_line0_label" for="uh8e6l7_line0_control" class="uif-label displayWith-uh8e6l7_line0" data-label_for="uh8e6l7_line0"> Field 4: </label>
														</div>
														<div class="col-md-4">
															<div id="uh8e6l7_line0" class="uif-inputField" data-parent="u11ymtuu_line0" data-role="InputField" data-label="Field 4">
																<input id="uh8e6l7_line0_control" type="text" name="list4[0].field4" value="D" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uh8e6l7_line0">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</fieldset>
							</div>
						</div>
					</section>
					<section id="u6so34i_line1" class="uif-collectionItem uif-boxCollectionItem" data-parent="LabsProposal-StackedSection">
						<header id="u1usv3hd_line1" class="uif-header" data-header_for="u6so34i_line1">
							<h4 class="uif-headerText"> <a data-role="disclosureLink" data-linkfor="u6so34i_line1_disclosureContent" href="#" id="u6so34i_line1_toggle" data-open="true" data-widgetid="u1g50jh7_line1" data-speed="500" data-ajax="false"><span class="uif-headerText-span"><span id="u6so34i_line1_toggle_exp" class="icon-caret-down"></span><span style="display:none;" id="u6so34i_line1_toggle_col" class="icon-caret-right"></span> Line 1 </span></a> </h4>
							<div id="ubrhaw8_line1" class="uif-verticalBoxGroup uif-header-rightGroup" data-parent="u6so34i_line1">
								<button id="LabsProposal-StackedSection_del_line1" class="btn btn-default btn-sm uif-smallActionButton uif-boxLayoutVerticalItem clearfix icon-close" data-onclick="writeCurrentPageToSession(this);actionInvokeHandler(this);" data-dirtyonaction="true" data-ajaxreturntype="update-component" data-refreshid="LabsProposal-StackedSection" data-role="Action" data-loadingmessage="Deleting Line..." data-submit_data="{&quot;methodToCall&quot;:&quot;deleteLine&quot;,&quot;actionParameters[selectedCollectionPath]&quot;:&quot;list4&quot;,&quot;actionParameters[selectedCollectionId]&quot;:&quot;LabsProposal-StackedSection&quot;,&quot;actionParameters[selectedLineIndex]&quot;:&quot;1&quot;}" data-jumptoid="LabsProposal-StackedSection"> </button>
							</div>
						</header>
						<div id="u6so34i_line1_disclosureContent" data-role="disclosureContent" data-open="true" class="uif-disclosureContent">
							<div id="upl0vws_line1" class="uif-fieldGroup" data-parent="u6so34i_line1" data-group="u9n4ft5_line1">
								<fieldset aria-labelledby="upl0vws_line1_label" id="upl0vws_line1_fieldset">
									<legend style="display: none"></legend>
									<div id="u10i8ym5_line1" class="uif-tabGroup" data-parent="u9n4ft5_line1" data-type="Uif-TabGroup">
										<div id="u10i8ym5_line1_tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
											<ul id="u10i8ym5_line1_tabList" class="nav nav-tabs" role="tablist">
												<li data-tabfor="u11ymts9_line1" role="tab" tabindex="0" aria-controls="u11ymts9_line1_tab" aria-labelledby="ui-id-5" class="active" aria-selected="true"> <a href="#u11ymts9_line1_tab" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-5">Details</a> </li>
												<li data-tabfor="u11ymtt4_line1" role="tab" tabindex="-1" aria-controls="u11ymtt4_line1_tab" aria-labelledby="ui-id-6" aria-selected="false"> <a href="#u11ymtt4_line1_tab" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-6">Organization</a> </li>
												<li data-tabfor="u11ymttz_line1" role="tab" tabindex="-1" aria-controls="u11ymttz_line1_tab" aria-labelledby="ui-id-7" aria-selected="false"> <a href="#u11ymttz_line1_tab" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-7">Education</a> </li>
												<li data-tabfor="u11ymtuu_line1" role="tab" tabindex="-1" aria-controls="u11ymtuu_line1_tab" aria-labelledby="ui-id-8" aria-selected="false"> <a href="#u11ymtuu_line1_tab" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-8">Degrees</a> </li>
											</ul>
											<div data-tabwrapperfor="u11ymts9_line1" data-type="TabWrapper" id="u11ymts9_line1_tab" aria-labelledby="ui-id-5" role="tabpanel" aria-expanded="true" aria-hidden="false">
												<div id="u11ymts9_line1" class="uif-cssGridGroup" data-parent="u10i8ym5_line1">
													<div class="row ">
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uzcuu63_line1_label" for="uzcuu63_line1_control" class="uif-label displayWith-uzcuu63_line1" data-label_for="uzcuu63_line1"> Field 1: </label>
														</div>
														<div class="col-md-4">
															<div id="uzcuu63_line1" class="uif-inputField" data-parent="u11ymts9_line1" data-role="InputField" data-label="Field 1">
																<div class="input-group">
																	<input id="uzcuu63_line1_control" type="text" name="list4[1].field1" value="1" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uzcuu63_line1">
																	<span class="input-group-btn"><a id="expand_btn_uzcuu63_line1_control" title="Expand" class="icon-edit-sign"></a></span> </div>
															</div>
														</div>
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uzcuu6y_line1_label" for="uzcuu6y_line1_control" class="uif-label displayWith-uzcuu6y_line1" data-label_for="uzcuu6y_line1"> Field 2: </label>
														</div>
														<div class="col-md-4">
															<div id="uzcuu6y_line1" class="uif-inputField" data-parent="u11ymts9_line1" data-role="InputField" data-label="Field 2">
																<input id="uzcuu6y_line1_control" type="text" name="list4[1].field2" value="2" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uzcuu6y_line1">
															</div>
														</div>
													</div>
													<div class="row ">
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uzcuu7t_line1_label" for="uzcuu7t_line1_control" class="uif-label displayWith-uzcuu7t_line1" data-label_for="uzcuu7t_line1"> Field 3: </label>
														</div>
														<div class="col-md-4">
															<div id="uzcuu7t_line1" class="uif-inputField" data-parent="u11ymts9_line1" data-role="InputField" data-label="Field 3">
																<input id="uzcuu7t_line1_control" type="text" name="list4[1].field3" value="3" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uzcuu7t_line1">
															</div>
														</div>
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uzcuu8o_line1_label" for="uzcuu8o_line1_control" class="uif-label displayWith-uzcuu8o_line1" data-label_for="uzcuu8o_line1"> Field 4: </label>
														</div>
														<div class="col-md-4">
															<div id="uzcuu8o_line1" class="uif-inputField" data-parent="u11ymts9_line1" data-role="InputField" data-label="Field 4">
																<input id="uzcuu8o_line1_control" type="text" name="list4[1].field4" value="4" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uzcuu8o_line1">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div data-tabwrapperfor="u11ymtt4_line1" data-type="TabWrapper" id="u11ymtt4_line1_tab" aria-labelledby="ui-id-6" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
												<div id="u11ymtt4_line1" class="uif-cssGridGroup" data-parent="u10i8ym5_line1">
													<div class="row ">
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="u5mzxmk_line1_label" for="u5mzxmk_line1_control" class="uif-label displayWith-u5mzxmk_line1" data-label_for="u5mzxmk_line1"> Field 1: </label>
														</div>
														<div class="col-md-4">
															<div id="u5mzxmk_line1" class="uif-inputField" data-parent="u11ymtt4_line1" data-role="InputField" data-label="Field 1">
																<input id="u5mzxmk_line1_control" type="text" name="list4[1].field1" value="1" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="u5mzxmk_line1">
															</div>
														</div>
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="u5mzxnf_line1_label" for="u5mzxnf_line1_control" class="uif-label displayWith-u5mzxnf_line1" data-label_for="u5mzxnf_line1"> Field 2: </label>
														</div>
														<div class="col-md-4">
															<div id="u5mzxnf_line1" class="uif-inputField" data-parent="u11ymtt4_line1" data-role="InputField" data-label="Field 2">
																<input id="u5mzxnf_line1_control" type="text" name="list4[1].field2" value="2" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="u5mzxnf_line1">
															</div>
														</div>
													</div>
													<div class="row ">
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="u5mzxoa_line1_label" for="u5mzxoa_line1_control" class="uif-label displayWith-u5mzxoa_line1" data-label_for="u5mzxoa_line1"> Field 3: </label>
														</div>
														<div class="col-md-4">
															<div id="u5mzxoa_line1" class="uif-inputField" data-parent="u11ymtt4_line1" data-role="InputField" data-label="Field 3">
																<input id="u5mzxoa_line1_control" type="text" name="list4[1].field3" value="3" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="u5mzxoa_line1">
															</div>
														</div>
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="u5mzxp5_line1_label" for="u5mzxp5_line1_control" class="uif-label displayWith-u5mzxp5_line1" data-label_for="u5mzxp5_line1"> Field 4: </label>
														</div>
														<div class="col-md-4">
															<div id="u5mzxp5_line1" class="uif-inputField" data-parent="u11ymtt4_line1" data-role="InputField" data-label="Field 4">
																<input id="u5mzxp5_line1_control" type="text" name="list4[1].field4" value="4" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="u5mzxp5_line1">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div data-tabwrapperfor="u11ymttz_line1" data-type="TabWrapper" id="u11ymttz_line1_tab" aria-labelledby="ui-id-7" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
												<section id="u11ymttz_line1" class="uif-gridSubSection" data-parent="u10i8ym5_line1">
													<header id="u1cnha8c_line1" class="uif-subSectionHeader" data-header_for="u11ymttz_line1">
														<h4 class="uif-headerText"> <span class="uif-headerText-span"> Education </span> </h4>
													</header>
													<table id="u569ish_line1" class="table table-condensed" role="presentation">
														<tbody>
															<tr>
																<th scope="row" class="col-md-3"> <label id="u92n5b_line1" for="uyxm4xj_line1_control" class="uif-label displayWith-uyxm4xj_line1" data-label_for="uyxm4xj_line1"> Field 1 </label></th>
																<td class="uif-gridLayoutCell"><div id="uyxm4xj_line1" class="uif-field" data-label="Field 1"> 1 </div></td>
															</tr>
															<tr>
																<th scope="row" class="col-md-3"> <label id="urji6m_line1" for="uyxm4ye_line1_control" class="uif-label displayWith-uyxm4ye_line1" data-label_for="uyxm4ye_line1"> Field 2 </label></th>
																<td class="uif-gridLayoutCell"><div id="uyxm4ye_line1" class="uif-field" data-label="Field 2"> 2 </div></td>
															</tr>
															<tr>
																<th scope="row" class="col-md-3"> <label id="u1a0d7x_line1" for="uyxm4z9_line1_control" class="uif-label displayWith-uyxm4z9_line1" data-label_for="uyxm4z9_line1"> Field 3 </label></th>
																<td class="uif-gridLayoutCell"><div id="uyxm4z9_line1" class="uif-field" data-label="Field 3"> 3 </div></td>
															</tr>
															<tr>
																<th scope="row" class="col-md-3"> <label id="u1sh898_line1" for="uyxm504_line1_control" class="uif-label displayWith-uyxm504_line1" data-label_for="uyxm504_line1"> Field 4 </label></th>
																<td class="uif-gridLayoutCell"><div id="uyxm504_line1" class="uif-field" data-label="Field 4"> 4 </div></td>
															</tr>
														</tbody>
													</table>
												</section>
											</div>
											<div data-tabwrapperfor="u11ymtuu_line1" data-type="TabWrapper" id="u11ymtuu_line1_tab" aria-labelledby="ui-id-8" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
												<div id="u11ymtuu_line1" class="uif-cssGridGroup" data-parent="u10i8ym5_line1">
													<div class="row ">
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uh8e6im_line1_label" for="uh8e6im_line1_control" class="uif-label displayWith-uh8e6im_line1" data-label_for="uh8e6im_line1"> Field 1: </label>
														</div>
														<div class="col-md-4">
															<div id="uh8e6im_line1" class="uif-inputField" data-parent="u11ymtuu_line1" data-role="InputField" data-label="Field 1">
																<input id="uh8e6im_line1_control" type="text" name="list4[1].field1" value="1" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uh8e6im_line1">
															</div>
														</div>
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uh8e6jh_line1_label" for="uh8e6jh_line1_control" class="uif-label displayWith-uh8e6jh_line1" data-label_for="uh8e6jh_line1"> Field 2: </label>
														</div>
														<div class="col-md-4">
															<div id="uh8e6jh_line1" class="uif-inputField" data-parent="u11ymtuu_line1" data-role="InputField" data-label="Field 2">
																<input id="uh8e6jh_line1_control" type="text" name="list4[1].field2" value="2" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uh8e6jh_line1">
															</div>
														</div>
													</div>
													<div class="row ">
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uh8e6kc_line1_label" for="uh8e6kc_line1_control" class="uif-label displayWith-uh8e6kc_line1" data-label_for="uh8e6kc_line1"> Field 3: </label>
														</div>
														<div class="col-md-4">
															<div id="uh8e6kc_line1" class="uif-inputField" data-parent="u11ymtuu_line1" data-role="InputField" data-label="Field 3">
																<input id="uh8e6kc_line1_control" type="text" name="list4[1].field3" value="3" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uh8e6kc_line1">
															</div>
														</div>
														<div class="col-md-2 uif-cssGridLabelCol">
															<label id="uh8e6l7_line1_label" for="uh8e6l7_line1_control" class="uif-label displayWith-uh8e6l7_line1" data-label_for="uh8e6l7_line1"> Field 4: </label>
														</div>
														<div class="col-md-4">
															<div id="uh8e6l7_line1" class="uif-inputField" data-parent="u11ymtuu_line1" data-role="InputField" data-label="Field 4">
																<input id="uh8e6l7_line1_control" type="text" name="list4[1].field4" value="4" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="uh8e6l7_line1">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</fieldset>
							</div>
						</div>
					</section>
				</div>
				<div id="LabsProposal-Dialogs" class="uif-cssGridGroup uif-boxLayoutVerticalItem clearfix" data-parent="LabsProposal-Page">
					<div class="row ">
						<div class="col-md-12"> <a id="u15ogfoc" class="uif-actionLink" tabindex="0" data-onclick="showLightboxComponent('LabsProposal-wizard',{},true);" data-role="Action"> Wizard </a> </div>
					</div>
				</div>
				<div id="LabsProposal-Tabs2" class="uif-tabSection uif-boxLayoutVerticalItem clearfix" data-parent="LabsProposal-Page" data-type="Uif-TabGroup">
					<div id="LabsProposal-Tabs2_tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
						<ul id="LabsProposal-Tabs2_tabList" class="nav nav-tabs" role="tablist">
							<li data-tabfor="u1ww3h2y" role="tab" tabindex="0" aria-controls="u1ww3h2y_tab" aria-labelledby="ui-id-9" class="active" aria-selected="true"> <a href="#u1ww3h2y_tab" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-9">Buttons 1</a> </li>
							<li data-tabfor="u1ww3h3t" role="tab" tabindex="-1" aria-controls="u1ww3h3t_tab" aria-labelledby="ui-id-10" aria-selected="false"> <a href="#u1ww3h3t_tab" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-10">Buttons 2</a> </li>
						</ul>
						<div data-tabwrapperfor="u1ww3h2y" data-type="TabWrapper" id="u1ww3h2y_tab" aria-labelledby="ui-id-9" role="tabpanel" aria-expanded="true" aria-hidden="false">
							<section id="u1ww3h2y" class="uif-boxSection" data-parent="LabsProposal-Tabs2">
								<header id="u1hv4qnt" class="uif-sectionHeader" data-header_for="u1ww3h2y">
									<h3 class="uif-headerText"> <span class="uif-headerText-span"> Buttons 1 </span> </h3>
								</header>
								<button id="u5j8ml9" class="btn btn-primary btn-lg uif-largeActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Primary Large </button>
								<button id="u5j8mm4" class="btn btn-default btn-lg uif-largeActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Secondary Large </button>
								<button id="u5j8mmz" class="btn btn-primary uif-primaryActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Primary </button>
								<button id="u5j8mnu" class="btn btn-default uif-secondaryActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Secondary </button>
								<button id="u5j8mop" class="btn btn-primary btn-sm uif-smallActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Primary Small </button>
								<button id="u5j8mpk" class="btn btn-default btn-sm uif-smallActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Secondary Small </button>
								<button id="u5j8mqf" class="btn btn-primary btn-xs uif-miniActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Primary Mini </button>
								<button id="u5j8mra" class="btn btn-default btn-xs uif-miniActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Secondary Mini </button>
							</section>
						</div>
						<div data-tabwrapperfor="u1ww3h3t" data-type="TabWrapper" id="u1ww3h3t_tab" aria-labelledby="ui-id-10" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
							<section id="u1ww3h3t" class="uif-boxSection" data-parent="LabsProposal-Tabs2">
								<header id="unz0pve" class="uif-sectionHeader" data-header_for="u1ww3h3t">
									<h3 class="uif-headerText"> <span class="uif-headerText-span"> Buttons 2 </span> </h3>
								</header>
								<button id="u1auhs0u" class="btn btn-primary btn-lg uif-largeActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Primary Large </button>
								<button id="u1auhs1p" class="btn btn-default btn-lg uif-largeActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Secondary Large </button>
								<button id="u1auhs2k" class="btn btn-primary uif-primaryActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Primary </button>
								<button id="u1auhs3f" class="btn btn-default uif-secondaryActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Secondary </button>
								<button id="u1auhs4a" class="btn btn-primary btn-sm uif-smallActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Primary Small </button>
								<button id="u1auhs55" class="btn btn-default btn-sm uif-smallActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Secondary Small </button>
								<button id="u1auhs60" class="btn btn-primary btn-xs uif-miniActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Primary Mini </button>
								<button id="u1auhs6v" class="btn btn-default btn-xs uif-miniActionButton uif-boxLayoutVerticalItem clearfix" data-onclick="alert('button clicked');" data-role="Action"> <span class="icon-plus"></span>Secondary Mini </button>
							</section>
						</div>
					</div>
				</div>
				<section id="LabsProposal-AddList" class="uif-listCollectionSubSection uif-boxLayoutVerticalItem clearfix col-md-2" data-parent="LabsProposal-Page">
					<header id="ue5d22i" class="uif-subSectionHeader" data-header_for="LabsProposal-AddList">
						<h4 class="uif-headerText"> <span class="uif-headerText-span"> Congressional Districts </span> </h4>
					</header>
					<ul id="u12g7akc">
						<li>
							<div id="uldh5w5_line0" class="uif-boxSection" data-parent="LabsProposal-AddList">
								<div id="u1or0tt7_line0" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="uldh5w5_line0" data-role="InputField">
									<div class="input-group">
										<input id="u1or0tt7_line0_control" type="text" name="list2[0].field1" value="A" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="u1or0tt7_line0">
										<span class="input-group-btn">
										<button id="LabsProposal-AddList_del_line0" class="btn btn-default btn-sm uif-smallActionButton" data-onclick="writeCurrentPageToSession(this);actionInvokeHandler(this);" data-dirtyonaction="true" data-ajaxreturntype="update-component" data-refreshid="LabsProposal-AddList" data-role="Action" data-loadingmessage="Deleting Line..." data-submit_data="{&quot;methodToCall&quot;:&quot;deleteLine&quot;,&quot;actionParameters[selectedCollectionPath]&quot;:&quot;list2&quot;,&quot;actionParameters[selectedCollectionId]&quot;:&quot;LabsProposal-AddList&quot;,&quot;actionParameters[selectedLineIndex]&quot;:&quot;0&quot;}" data-jumptoid="LabsProposal-AddList"> delete </button>
										</span> </div>
								</div>
							</div>
						</li>
						<li>
							<div id="uldh5w5_line1" class="uif-boxSection" data-parent="LabsProposal-AddList">
								<div id="u1or0tt7_line1" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="uldh5w5_line1" data-role="InputField">
									<div class="input-group">
										<input id="u1or0tt7_line1_control" type="text" name="list2[1].field1" value="1" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="u1or0tt7_line1">
										<span class="input-group-btn">
										<button id="LabsProposal-AddList_del_line1" class="btn btn-default btn-sm uif-smallActionButton" data-onclick="writeCurrentPageToSession(this);actionInvokeHandler(this);" data-dirtyonaction="true" data-ajaxreturntype="update-component" data-refreshid="LabsProposal-AddList" data-role="Action" data-loadingmessage="Deleting Line..." data-submit_data="{&quot;methodToCall&quot;:&quot;deleteLine&quot;,&quot;actionParameters[selectedCollectionPath]&quot;:&quot;list2&quot;,&quot;actionParameters[selectedCollectionId]&quot;:&quot;LabsProposal-AddList&quot;,&quot;actionParameters[selectedLineIndex]&quot;:&quot;1&quot;}" data-jumptoid="LabsProposal-AddList"> delete </button>
										</span> </div>
								</div>
							</div>
						</li>
						<li>
							<div id="uldh5w5_line2" class="uif-boxSection" data-parent="LabsProposal-AddList">
								<div id="u1or0tt7_line2" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="uldh5w5_line2" data-role="InputField">
									<div class="input-group">
										<input id="u1or0tt7_line2_control" type="text" name="list2[2].field1" value="W" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="u1or0tt7_line2">
										<span class="input-group-btn">
										<button id="LabsProposal-AddList_del_line2" class="btn btn-default btn-sm uif-smallActionButton" data-onclick="writeCurrentPageToSession(this);actionInvokeHandler(this);" data-dirtyonaction="true" data-ajaxreturntype="update-component" data-refreshid="LabsProposal-AddList" data-role="Action" data-loadingmessage="Deleting Line..." data-submit_data="{&quot;methodToCall&quot;:&quot;deleteLine&quot;,&quot;actionParameters[selectedCollectionPath]&quot;:&quot;list2&quot;,&quot;actionParameters[selectedCollectionId]&quot;:&quot;LabsProposal-AddList&quot;,&quot;actionParameters[selectedLineIndex]&quot;:&quot;2&quot;}" data-jumptoid="LabsProposal-AddList"> delete </button>
										</span> </div>
								</div>
							</div>
						</li>
						<li>
							<div id="uldh5w5_line3" class="uif-boxSection" data-parent="LabsProposal-AddList">
								<div id="u1or0tt7_line3" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="uldh5w5_line3" data-role="InputField">
									<div class="input-group">
										<input id="u1or0tt7_line3_control" type="text" name="list2[3].field1" value="a" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="u1or0tt7_line3">
										<span class="input-group-btn">
										<button id="LabsProposal-AddList_del_line3" class="btn btn-default btn-sm uif-smallActionButton" data-onclick="writeCurrentPageToSession(this);actionInvokeHandler(this);" data-dirtyonaction="true" data-ajaxreturntype="update-component" data-refreshid="LabsProposal-AddList" data-role="Action" data-loadingmessage="Deleting Line..." data-submit_data="{&quot;methodToCall&quot;:&quot;deleteLine&quot;,&quot;actionParameters[selectedCollectionPath]&quot;:&quot;list2&quot;,&quot;actionParameters[selectedCollectionId]&quot;:&quot;LabsProposal-AddList&quot;,&quot;actionParameters[selectedLineIndex]&quot;:&quot;3&quot;}" data-jumptoid="LabsProposal-AddList"> delete </button>
										</span> </div>
								</div>
							</div>
						</li>
						<li>
							<div id="uldh5w5_line4" class="uif-boxSection" data-parent="LabsProposal-AddList">
								<div id="u1or0tt7_line4" class="uif-inputField uif-boxLayoutVerticalItem clearfix" data-parent="uldh5w5_line4" data-role="InputField">
									<div class="input-group">
										<input id="u1or0tt7_line4_control" type="text" name="list2[4].field1" value="a" size="30" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="u1or0tt7_line4">
										<span class="input-group-btn">
										<button id="LabsProposal-AddList_del_line4" class="btn btn-default btn-sm uif-smallActionButton" data-onclick="writeCurrentPageToSession(this);actionInvokeHandler(this);" data-dirtyonaction="true" data-ajaxreturntype="update-component" data-refreshid="LabsProposal-AddList" data-role="Action" data-loadingmessage="Deleting Line..." data-submit_data="{&quot;methodToCall&quot;:&quot;deleteLine&quot;,&quot;actionParameters[selectedCollectionPath]&quot;:&quot;list2&quot;,&quot;actionParameters[selectedCollectionId]&quot;:&quot;LabsProposal-AddList&quot;,&quot;actionParameters[selectedLineIndex]&quot;:&quot;4&quot;}" data-jumptoid="LabsProposal-AddList"> delete </button>
										</span> </div>
								</div>
							</div>
						</li>
					</ul>
					<button id="LabsProposal-AddList_add" class="btn btn-primary btn-sm uif-smallActionButton" data-onclick="writeCurrentPageToSession(this, 'last');actionInvokeHandler(this);" data-ajaxreturntype="update-component" data-refreshid="LabsProposal-AddList" data-role="Action" data-submit_data="{&quot;methodToCall&quot;:&quot;addBlankLine&quot;,&quot;actionParameters[selectedCollectionPath]&quot;:&quot;list2&quot;,&quot;actionParameters[actionEvent]&quot;:&quot;addBlankLine&quot;,&quot;actionParameters[selectedCollectionId]&quot;:&quot;LabsProposal-AddList&quot;}"> Add Line </button>
				</section>
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



<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
	<div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a>
		<div class="ui-datepicker-title">
			<select class="ui-datepicker-month" data-handler="selectMonth" data-event="change">
				<option value="0">Jan</option>
				<option value="1">Feb</option>
				<option value="2" selected="selected">Mar</option>
				<option value="3">Apr</option>
				<option value="4">May</option>
				<option value="5">Jun</option>
				<option value="6">Jul</option>
				<option value="7">Aug</option>
				<option value="8">Sep</option>
				<option value="9">Oct</option>
				<option value="10">Nov</option>
				<option value="11">Dec</option>
			</select>
			<select class="ui-datepicker-year" data-handler="selectYear" data-event="change">
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014" selected="selected">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>
			</select>
		</div>
	</div>
	<table class="ui-datepicker-calendar">
		<thead>
			<tr>
				<th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th>
				<th><span title="Monday">Mo</span></th>
				<th><span title="Tuesday">Tu</span></th>
				<th><span title="Wednesday">We</span></th>
				<th><span title="Thursday">Th</span></th>
				<th><span title="Friday">Fr</span></th>
				<th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
				<td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
				<td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
				<td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
				<td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
				<td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
				<td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">1</a></td>
			</tr>
			<tr>
				<td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">2</a></td>
				<td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">3</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">4</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">5</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">6</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">7</a></td>
				<td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">8</a></td>
			</tr>
			<tr>
				<td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">9</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">10</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">11</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">12</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">13</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">14</a></td>
				<td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">15</a></td>
			</tr>
			<tr>
				<td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">16</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">17</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">18</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">19</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">20</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">21</a></td>
				<td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">22</a></td>
			</tr>
			<tr>
				<td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">23</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">24</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">25</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">26</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">27</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">28</a></td>
				<td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">29</a></td>
			</tr>
			<tr>
				<td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">30</a></td>
				<td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2014"><a class="ui-state-default" href="#">31</a></td>
				<td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
				<td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
				<td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
				<td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
				<td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
			</tr>
		</tbody>
	</table>
	<div class="ui-datepicker-buttonpane ui-widget-content">
		<button type="button" class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all" data-handler="today" data-event="click">Today</button>
		<button type="button" class="ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all" data-handler="hide" data-event="click">Done</button>
	</div>
</div>
</body>
</html>
<?php
$page = 'questions';
$section = 'questions';
$pageTitle = 'Relationships';
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8"> <meta name="robots" content="noindex,nofollow" /> 
		<title>
<?php echo $pageTitle ?>
		</title>
<!-- GLOBAL STYLES -->
<?php include('includes/styles.php') ?>
	</head>
	<body id="Uif-Application">
<?php include('includes/uif-applicationHeader.php') ?>
		<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
<!-- VIEW -->
			<div class="clearfix uif-formView" data-role="View">
<!-- BREADCRUMBS -->
<!-- VIEW HEADER -->
<?php include('includes/coi-uif-viewHeader-template.php') ?>
<!-- // VIEW HEADER  -->
<!-- VIEW CONTENT -->
				<div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid">
					<main class="uif-page" data-server_messages="false" data-role="Page" data-parent="">
						<div class="uif-header-inner">
							<h2 class="uif-headerText">
								<span class="uif-headerText-span">
<?php echo $pageTitle ?>
								</span>
							</h2>
							<div class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
							</div>
						</div>
						<div id="u87qj8l" class="well uif-boxLayoutVerticalItem clearfix" role="progressbar" aria-valuetext="Current step:Save" aria-valuemax="5" aria-valuemin="0" aria-valuenow="1">
							<div class="progress-details">
								<div style="width: 25.0%;" class="uif-step complete">
									<span class="sr-only">
										Step completed:
									</span>
									Questionnaire 
								</div>
								<div style="width: 25.0%;" class="uif-step complete">
									<span class="sr-only">
										Step completed:
									</span>
									Financial Entities 
								</div>
								<div style="width: 25.0%;" class="uif-step active">
									<span class="sr-only">
										Current step:
									</span>
									Relationships 
								</div>
								<div style="width: 25.0%;" class="uif-step">
									<span class="sr-only">
										Unfinished step:
									</span>
									Certification 
								</div>
							</div>
							<div class="progress">
								<div style="width: 25.0%;" class="progress-bar progress-bar-success">
								</div>
								<div style="width: 25.0%;" class="progress-bar progress-bar-success">
								</div>
								<div style="width: 25.0%;" class="progress-bar progress-bar-info">
								</div>
								<div style="width: 25.0%;" class="progress-bar progress-bar-empty">
								</div>
							</div>
						</div>
						<p>
							<strong>Click Update to indicate Financial Entity relationships.</strong>
						</p>
						<div class="well">
							<table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable bg-white">
								<thead>
									<tr>
										<th>
											Event Title 
										</th>
										<th>
											Entity Name
										</th>
										<th>
											Destination
										</th>
										<th>
											Travel Sponsor 
										</th>
										<th>
											Amount Received
										</th>
										<th>
											Purpose of Travel
										</th>
										<th>
											Dates
										</th>
										<th>
											<span class="sr-only">
												Actions 
											</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr class="warning">
										<td>
											Toronto Bioscience Conference
										</td>
										<td>
											University of Toronto
										</td>
										<td>
											Toronto
										</td>
										<td>
											Pfizer
										</td>
										<td>
											$5,000
										</td>
										<td>
											Consult at conference
										</td>
										<td>
											08/03/2014 - 08/10/2014 
										</td>
										<td>
											<a class="btn btn-default btn-xs" href="#" data-toggle="modal" data-target="#relationships-event">
												Update 
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</main>
				</div>
				<div class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
					<div class="global-navigate btn-group">
						<button type="button" class="btn btn-default">
							<span class="icon-chevron-left">
							</span>
							Back 
						</button>
						<button type="button" id="save-continue" class="btn btn-primary">
							Continue 
							<span class="icon-chevron-right">
							</span>
						</button>
					</div>
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
				</div>
			</div>
		</form>
<?php include('includes/footer-scripts.php') ?>
<!-- MODAL INCLUDES -->
<?php include ('includes/modals-coi/relationships-event.php') ?>
	</body>
</html>

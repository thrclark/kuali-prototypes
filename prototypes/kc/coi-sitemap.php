<?php
$page = 'sitemap';
$section = 'sitemap';
$pageTitle = 'Sitemap';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex,nofollow" />
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
			<?php include('includes/uif-viewHeader-template.php') ?>
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
						<div class="well">
							<ul>
								<li><a href="coi-my-disclosures.php">My Disclosures</a></li>
								<li><a href="coi-screening-questions.php">Screening Questionnaire</a></li>
								<li><a href="coi-financial-entities.php">Financial Entities</a></li>
								<li><a href="coi-relationships.php">Relationships</a></li>
								<li><a href="coi-relationships-event.php">Relationships (Triggered event variation: table is automatically populated)</a></li>
								<li><a href="coi-relationships-travel.php">Relationships (Travel or manual event variation, before adding: no table displayed)</a></li>
								<li><a href="coi-relationships-travel-added.php">Relationships (Travel or manual event variation, after adding: table is populated with user-entered data)</a></li>
								<li><a href="coi-certification.php">Certification</a></li>
								<li><a href="coi-admin-disclosure-list.php">Admin - Disclosure List</a></li>
								<li><a href="coi-admin-disclosure-review-project.php">Admin - Disclosure Review by Project</a></li>
								<li><a href="coi-admin-disclosure-review-financial-entity.php">Admin - Disclosure Review by Financial Entity</a></li>
								<li><a href="coi-reviewer-disclosure-review-project.php">Reviewer - Disclosure Review by Project</a></li>
								<li><a href="coi-reviewer-disclosure-review-financial-entity.php">Reviewer - Disclosure Review by Financial Entity</a></li>
								<li><a href="coi-admin-training.php">Admin - Training</a></li>
							</ul>
						</div>
					</div>
				</main> 
			</div>
			<div class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
				<button type="button" class="btn btn-disabled"> Disabled button </button>
				<button type="button" class="btn btn-default"> Default button </button>
				<button type="button" class="btn btn-primary"> Primary button </button>
			</div>
		</form>

		<?php include('includes/footer-scripts.php') ?>
		<!-- MODAL INCLUDES -->
		<?php // include ('includes/modal-.php') ?>
	</body>
	</html>

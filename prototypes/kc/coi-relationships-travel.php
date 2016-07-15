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
							<strong>Enter the details of your travel.</strong>
						</p>
						
						<a class="btn btn-default btn-xs" href="#" data-toggle="modal" data-target="#add-travel">
							<span aria-hidden="true" class="icon-plus">
							</span>
							Add Travel 
						</a>

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

<div id="add-travel" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Add Travel</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
                <div class="form-horizontal" role="form"> 
                    <div class="row ">
                        <div class="col-md-12">                  
                            
                            <div class="form-group">
                                <label for="inputEmail3" class="col-md-3 control-label">Event ID</label>
                                <div class="col-md-6">
                                	<input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-md-3 control-label">Event Title</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-md-3 control-label">Entity Name</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-md-3 control-label">Destination</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-md-3 control-label">Travel Sponsor</label>
                                <div class="col-md-6">
                                    <select class="input-sm" id="status1" name="status1">
                                        <option selected="selected" value="select">
                                            select
                                        </option>
                                        <option value="Pfizer">
                                            Pfizer
                                        </option>
                                        <option value="Johnson &amp; Johnson">
                                            Johnson &amp; Johnson
                                        </option>
                                        <option value="Other">
                                            Other
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-md-3 control-label">Amount Received</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-md-3 control-label">Purpose of Travel</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="inputEmail3" class="col-md-3 control-label">Dates:</label>
                                <div class="col-md-9">
                                    <div class="col-md-4">
                                        <div id="urvbzg" class="uif-inputField" data-parent="u1fjua60" data-role="InputField">
                                            <div class="input-group">
                                                <input id="urvbzg_control" type="text" name="inputField1" value="" size="10" class="form-control input-sm form-control input-sm form-control input-sm uif-dateControl hasDatepicker" data-role="Control" data-control_for="urvbzg">
                                                <div class="input-group-btn"> <a class="btn btn-default icon-calendar ui-datepicker-trigger" alt="..." title="..."></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <p id="u15sznn1" class="form-control-static text-center uif-message "> to </p>
                                    </div>
                                    <div class="col-md-4">
                                        <div id="urvc16" class="uif-inputField" data-parent="u1fjua60" data-role="InputField">
                                            <div class="input-group">
                                                <input id="urvc16_control" type="text" name="inputField1" value="" size="10" class="form-control input-sm form-control input-sm form-control input-sm uif-dateControl hasDatepicker" data-role="Control" data-control_for="urvc16">
                                                <div class="input-group-btn"> <a class="btn btn-default icon-calendar ui-datepicker-trigger" alt="..." title="..."></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                                                                   
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="clearfix">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<div id="modal-hierarchy" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
  		<div class="modal-content">
     		<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h4 class="modal-title" id="myModalLabel">Hierarchy</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
				<p>You are currently viewing Proposal # 18 (Document # 3464), which is currently unlinked to a proposal hierarchy.</p>
				<fieldset>
					<legend class="off-screen">Hierarchy</legend>
					<div class="form-group clearfix">
						<label class="control-label col-sm-3 col-xs-3" for="proposal">Link Child Proposal</label>
						<div class="col-sm-9 col-xs-9">
							<input type="text" class="form-control" placeholder="">
						</div>
					</div>
					<div class="form-group clearfix">
						<label class="control-label col-sm-3 col-xs-3 required" for="budget">Link Budget Type</label>
						<div class="col-sm-9 col-xs-9">
							<select name="newHierarchyBudgetTypeCode" tabindex="3" onchange="" onblur="" id="newHierarchyBudgetTypeCode" style="" class="form-control" title="Hierarchy Budget Type">
								<option value="B" selected="selected">Sub-Budget</option>
								<option value="P">Sub-Project</option>
							</select>
						</div>
					</div>
				</fieldset>
			</div>
			<div class="modal-footer">
				<div class="clearfix">
					<a class="various btn btn-primary pull-left" href="../kc/prop-summary.php#tab6">Link to Hierarchy</a>
					<a class="various btn btn-default pull-left" href="../kc/prop-summary.php#tab6">Create Hierarchy</a>
					<button type="button" class="btn btn-link pull-left" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>
</div>
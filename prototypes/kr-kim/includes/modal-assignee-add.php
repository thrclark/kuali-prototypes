<style>
.optionsRole, .optionsGroup, .optionsPrincipal, .dateRange {
	display: none
}
</style>

<div id="modal-assignee-add" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="sponsor-search">Add Assignee</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
                <section  class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                    <div class="uif-header-inner">
                        <h4  class="uif-headerText"> <span class="uif-headerText-span"> Search Criteria </span> </h4>
                    </div>
                    <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                        <label  for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Type:</label>
                    </div>
                    <div class="col-md-8">
                        <div  class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                            <select id="assigneeType" name="inputField1" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" data-control_for="" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                                <option selected="" value="none">Select</option>
                                <option id="principal" value="principal">Principal</option>
                                <option id="group"value="group">Group</option>
                                <option id="role" value="role">Role</option>
                            </select>
                        </div>
                    </div>
                    <div class="md-clear-left col-md-3 uif-cssGridLabelCol optionsPrincipal">
                        <label  for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Principal Name:</label>
                    </div>
                    <div class="col-md-8 optionsPrincipal">
                        <input class="form-control" type="text">
                    </div>
                    <div class="md-clear-left col-md-3 uif-cssGridLabelCol optionsGroup">
                        <label  for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Group Name:</label>
                    </div>
                    <div class="col-md-8 optionsGroup">
                        <div  class="uif-inputField" data-parent="" data-role="InputField" data-label="Field 1">
                            <div class="input-group">
                                <input  type="text" name="inputField1" value="" size="30" class="form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                                <div class="input-group-btn">
                                    <button  class="uif-actionLink btn btn-default uif-action icon-search" tabindex="0" data-toggle="modal" data-target="#modal-assignee-add-lookupPers" data-dismiss="modal"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md-clear-left col-md-3 uif-cssGridLabelCol optionsGroup">
                        <label  for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Group Namespace:</label>
                    </div>
                    <div class="col-md-8 optionsGroup">
                        <div  class="uif-inputField" data-parent="" data-role="InputField" data-label="Field 1">
                            <div class="input-group">
                                <input type="text" name="inputField1" value="" size="30" class="form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                                <div class="input-group-btn">
                                    <button  class="uif-actionLink btn btn-default uif-action icon-search" tabindex="0" data-toggle="modal" data-target="#modal-assignee-add-lookupPers" data-dismiss="modal"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md-clear-left col-md-3 uif-cssGridLabelCol optionsRole">
                        <label  for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Role Name:</label>
                    </div>
                    <div class="col-md-8 optionsRole">
                        <div  class="uif-inputField" data-parent="" data-role="InputField" data-label="Field 1">
                            <div class="input-group">
                                <input type="text" name="inputField1" value="" size="30" class="form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                                <div class="input-group-btn">
                                    <button  class="uif-actionLink btn btn-default uif-action icon-search" tabindex="0" data-toggle="modal" data-target="#modal-assignee-add-lookupPers" data-dismiss="modal"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md-clear-left col-md-3 uif-cssGridLabelCol optionsRole">
                        <label  for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Role Namespace:</label>
                    </div>
                    <div class="col-md-8 optionsRole">
                        <div  class="uif-inputField" data-parent="" data-role="InputField" data-label="Field 1">
                            <div class="input-group">
                                <input type="text" name="inputField1" value="" size="30" class="form-control input-sm uif-textControl valid" data-role="Control" data-control_for="" data-original-title="" title="" data-hastooltip="true">
                                <div class="input-group-btn">
                                    <button  class="uif-actionLink btn btn-default uif-action icon-search" tabindex="0" data-toggle="modal" data-target="#modal-assignee-add-lookupPers" data-dismiss="modal"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md-clear-left col-md-3 uif-cssGridLabelCol dateRange">
                        <label  for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Active Dates:</label>
                    </div>
                    <div class="col-md-8 dateRange">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4">
                                <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                                <small>from</small> </div>
                            <div class="col-xs-4 col-sm-4">
                                <input type="text" class="form-control" placeholder="mm/dd/yyyy">
                                <small>to</small> </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <div class="clearfix"> <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#modal-find-sponsor-results" class="btn btn-primary">Search</a> <a href="#" class="btn btn-link" data-dismiss="modal">Cancel</a> </div>
            </div>
        </div>
    </div>
</div>
<script>

    (function($){
   

    $('select#assigneeType').on('change', function() {

        if ( $(this).filter(':selected') == 'principal' || $(this).val() == 'principal' ) {
            $('.optionsPrincipal').show();
			$('.dateRange').show();
        } else {
            $('.optionsPrincipal').hide();
		
        }
		
  		if ( $(this).filter(':selected') == 'group' || $(this).val() == 'group' ) {
            $('.optionsGroup').show();
			$('.dateRange').show();
        } else {
            $('.optionsGroup').hide();
	
        }

        if ( $(this).filter(':selected') == 'role' || $(this).val() == 'role' ) {
            $('.optionsRole').show();
			$('.dateRange').show();
        } else {
            $('.optionsRole').hide();
		
        }
		
		
		
		        if ( $(this).filter(':selected') == 'none' || $(this).val() == 'none' ) {
           
            $('.optionsRole, .optionsGroup, .optionsPrincipal, .dateRange').hide();
		
        }
		
		
		

    });
    
        }(jQuery))

</script> 

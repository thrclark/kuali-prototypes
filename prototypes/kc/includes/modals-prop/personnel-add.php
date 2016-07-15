
<div id="modal-add-personnel1" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Add Personnel</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
                <div class="form-horizontal" role="form"> 
                    <div class="row ">
                        <div class="col-md-12"> 
                            
                            <!--  Employee Search-->
                            
                           <h4> Personnel Search</h4>
                           <hr />
                            
                            <div class="form-group">
                                <label for="inputEmail3" class="col-md-3 control-label">Personnel Type</label>
                                <div class="col-md-6">
                                    <select name="privileges" id="personType" class="form-control" >
                                        <option id="" value="">select</option>
                                        <option id="emp" value="emp">Employee</option>
                                        <option id="nonemp" value="nonemp">Non-Employee</option>
                                       
                                    </select>
                                </div>
                            </div>
                            <div class="form-group employee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">KcPerson Id</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group employee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">Last Name</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group employee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">First Name</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group employee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">User Name</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group employee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">Email Address</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group employee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">Office Phone</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group employee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">Active</label>
                                <div class="col-md-6">
                                    <select class="form-control">
                                        <option value="">select</option>
                                        <option value="">select</option>
                                        <option value="">select</option>
                                        <option value="">select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group employee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">Home Unit</label>
                                <div class="col-md-6">
                                    <select class="form-control">
                                        <option value="">select</option>
                                        <option value="">select</option>
                                        <option value="">select</option>
                                        <option value="">select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group employee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">Campus Code</label>
                                <div class="col-md-6">
                                    <select class="form-control">
                                        <option value="">select</option>
                                        <option value="">select</option>
                                        <option value="">select</option>
                                        <option value="">select</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!--  Non Employee Search-->
                            
                            <div class="form-group nonemployee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">Address Book Id</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group nonemployee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">Sponsor</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group nonemployee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">Organization</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group nonemployee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">Owned By Unit</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group nonemployee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">Sponsor Address Flag</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group nonemployee" style="display:none;">
                                <label for="inputEmail3" class="col-md-3 control-label">Title</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                            </div>
                            
                   
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="clearfix">
                    <a href="#" style="display:none;" data-dismiss="modal" class="btn btn-primary nonemployee" data-toggle="modal" data-target="#modal-add-personnel1-results">Search</a>
                <a href="#" style="display:none;" data-dismiss="modal" class="btn btn-primary employee" data-toggle="modal" data-target="#modal-add-personnel1-results">Search</a>
                <a href="#" class="btn btn-link" data-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- //  MODAL ADD PERSONNEL --> 

<script>
//script doesn't work in global.functions :(
    (function($){
   

    $('select#personType').on('change', function() {

        if ( $(this).filter(':selected') == 'emp' || $(this).val() == 'emp' ) {
            $('.employee').show();
        } else {
            $('.employee').hide();
        }
		
  		if ( $(this).filter(':selected') == 'emp1' || $(this).val() == 'emp1' ) {
            $('.employee1').show();
        } else {
            $('.employee1').hide();
        }

        if ( $(this).filter(':selected') == 'nonemp' || $(this).val() == 'nonemp' ) {
            $('.nonemployee').show();
        } else {
            $('.nonemployee').hide();
        }

    });
    
        }(jQuery))

</script>

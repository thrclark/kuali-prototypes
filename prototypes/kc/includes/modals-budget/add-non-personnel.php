<div class="modal fade" id="modal-budget-add-non-personnel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Add Assigned Non-Personnel</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="scategory" class="form-label col-sm-2">Category:</label>
                                <div class="col-sm-10">
                                    <select id="scategory" name="category" class="form-control input-sm">
                                        <option>- Select -</option>
                                        <option value="equipment">Equipment</option>
                                        <option value="travel">Travel</option>
                                        <option value="participant_support">Participant Support</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="form-group" id="category_participant_support" aria-hidden="true">
                                <label for="num_participants" class="form-label col-sm-2">Number of participants:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control input-sm" />
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label for="object-code" class="form-label col-sm-2">Object code name:</label>
                                <div class="col-sm-8">
                                    <select id="object-code" name="object-code" class="form-control input-sm">
                                        <option>- Select -</option>
                                        <option>Equipment</option>
                                        <option>Equipment Rental</option>
                                        <option>Fabricated Equipment</option>
                                        <option>Reactor Use</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default icon-search"><span class="sr-only">Lookup</span></button>
                                        <button type="button" class="btn btn-default icon-book"><span class="sr-only">Data dictionary</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="base-cost" class="form-label col-sm-2">Total Base Cost:</label>
                                <div class="col-sm-10">
                                    <input type="text" id="base-cost" name="base-cost" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quantity" class="form-label col-sm-2">Quantity:</label>
                                <div class="col-sm-10">
                                    <input type="text" id="quantity" name="quantity" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label col-sm-2">Description:</label>
                                <div class="col-sm-10">
                                    <input type="text" id="description" name="description" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="clearfix">
                    <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Add Non-Personnel item</button>
                    <button type="button" class="btn btn-link pull-left" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // jQuery(function() {
    //     jQuery('#category_participant_support').hide();

    //     jQuery('#scategory').on('change', function() {
    //         sel = jQuery(this).find('option:selected').text();
    //         console.log(sel);
            
    //         if (sel == "Participant Support") {
    //             jQuery('#category_participant_support').show().attr('aria-hidden', 'false');
    //         } else {
    //             jQuery('#category_participant_support').hide().attr('aria-hidden', 'true');
    //         }
    //     });
    // });
</script>
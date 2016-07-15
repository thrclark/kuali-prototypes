<div class="modal fade" id="modal-edit-assigned-non-personnel-01" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Edit Assigned Non-Personnel</h4>
            </div>
            <div class="modal-body">
                <p class="lead">Microscope</p>
                <hr>
                <ul class="nav nav-tabs" id="personnel-tabs-1">
                    <li class="active"><a href="#tab-details" data-toggle="tab">Details</a></li>
                    <li><a href="#tab-cost-sharing" data-toggle="tab">Cost Sharing</a></li>
                    <li><a href="#tab-rates" data-toggle="tab">Rates</a></li>
                    <li><a href="#tab-formulated-cost" data-toggle="tab">Formulated Cost Detail</a></li>
                </ul>
                <div class="tab-content" style="padding: 16px;">
                    <div class="tab-pane active" id="tab-details">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="start_date_label" class="form-label col-sm-2">Start date:</label>
                                        <div class="col-sm-10">
                                            <div id="start_date" class="uif-inputField" data-parent="Demo-DatePicker-Example1" data-role="InputField" data-label="Date Field">
                                                <div class="input-group">
                                                    <input id="start_date_control" type="text" name="inputField1" value="" size="10" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="start_date" placeholder="mm/dd/yyyy"> <input name="script" type="hidden" data-role="script" value="createDatePicker('start_date_control', {showOn:&quot;button&quot;,buttonImageOnly:true,showAnim:&quot;slideDown&quot;,showButtonPanel:true,changeMonth:true,changeYear:true,buttonImage:&quot;http://env14.rice.kuali.org/themes/kboot/images/cal.gif&quot;}, false);" />
                                                    <div class="input-group-btn"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="end_date_label" class="form-label col-sm-2">End date:</label>
                                        <div class="col-sm-10">
                                            <div id="end_date" class="uif-inputField" data-parent="Demo-DatePicker-Example1" data-role="InputField" data-label="Date Field">
                                                <div class="input-group">
                                                    <input id="end_date_control" type="text" name="inputField1" value="" size="10" class="form-control input-sm uif-textControl" data-role="Control" data-control_for="end_date" placeholder="mm/dd/yyyy"> <input name="script" type="hidden" data-role="script" value="createDatePicker('end_date_control', {showOn:&quot;button&quot;,buttonImageOnly:true,showAnim:&quot;slideDown&quot;,showButtonPanel:true,changeMonth:true,changeYear:true,buttonImage:&quot;http://env14.rice.kuali.org/themes/kboot/images/cal.gif&quot;}, false);" />
                                                    <div class="input-group-btn"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="category" class="form-label col-sm-2">Category:</label>
                                        <div class="col-sm-10">
                                            <select id="category" name="category" class="form-control">
                                                <option>- Select -</option>
                                                <option selected="selected">Equipment</option>
                                                <option>Travel</option>
                                                <option>Participant Support</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="object-code" class="form-label col-sm-2">Object code name:</label>
                                        <div class="col-sm-8">
                                            <select id="object-code" name="object-code&quot;" class="form-control">
                                                <option>- Select -</option>
                                                <option selected="selected">Equipment</option>
                                                <option>Equipment Rental</option>
                                                <option>Fabricated Equipment</option>
                                                <option>Reactor Use</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="btn-group"><button type="button" class="btn btn-default icon-search"><span class="sr-only">Lookup</span></button><button type="button" class="btn btn-default icon-book"><span class="sr-only">Data dictionary</span></button></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="base-cost" class="form-label col-sm-2">Total Base Cost:</label>
                                        <div class="col-sm-10"><input type="text" id="base-cost" name="base-cost" class="form-control" value="100.00"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity" class="form-label col-sm-2">Quantity:</label>
                                        <div class="col-sm-10"><input type="text" id="quantity" name="quantity" class="form-control" value="1"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="form-label col-sm-2">Description:</label>
                                        <div class="col-sm-10"><input type="text" id="description" name="description" class="form-control" value="Lorem ipsum dolar isset amet sit."></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10"><label for="inflation" class="form-label"> <input type="checkbox" id="inflation" name="inflation" value="1"> Apply inflation </label></div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10"><label for="submit-cc" class="form-label"> <input type="checkbox" id="submit-cc" name="submit-cc" value="1"> Submit cost sharing </label></div>
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10"><label for="on-campus" class="form-label"> <input type="checkbox" id="on-campus" name="on-campus" value="1"> On campus </label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-cost-sharing">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label for="cost-sharing" class="form-label col-sm-2">Cost Sharing:</label>
                                        <div class="col-sm-10"><input type="text" id="cost-sharing" name="cost-sharing" class="form-control" placeholder="$0.00"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="unrecovered-fa" class="form-label col-sm-2">Unrecovered F&amp;A:</label>
                                        <div class="col-sm-10"><input type="text" id="unrecovered-fa" name="unrecovered-fa" class="form-control" disabled></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="justification" class="form-label col-sm-2">Justification:</label>
                                        <div class="col-sm-10"><input type="text" id="justification" name="justification" class="form-control" placeholder="$0.00"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-rates">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Class</th>
                                            <th>Type</th>
                                            <th>Rate Cost</th>
                                            <th>Rate Cost Sharing</th>
                                            <th>Apply Rate?</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-formulated-cost">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Formulated Type</th>
                                            <th>Unit Cost</th>
                                            <th>Count</th>
                                            <th>Frequency</th>
                                            <th>Calculated Expenses</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select>
                                                    <option value="volvo">Select</option>
                                                    <option value="X-Ray">X-Ray</option>
                                                    <option value="overnight">Overnight Stay</option>
                                                </select>
                                            </td>
                                            <td><input type="text" placeholder="0.0" name="unit-cost" class="text-right" /></td>
                                            <td><input type="text" placeholder="0.0" name="unit-count" class="text-right" /></td>
                                            <td><input type="text" placeholder="0" name="frequency" class="text-right" /></td>
                                            <td><input type="text" placeholder="0.0" name="calculated-expenses" class="text-right" /></td>
                                            <td><a href="#" class="btn btn-default btn-xs"><span class="sr-only">Add</span><span class="icon icon-plus " style="font-size:9px;"></span></a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select>
                                                    <option value="X-Ray" selected>X-Ray</option>
                                                    <option value="overnight">Overnight Stay</option>
                                                </select>
                                            </td>
                                            <td><input type="text" value="3120.00" name="unit-cost" class="text-right" /></td>
                                            <td><input type="text" value="1" name="unit-count" class="text-right" /></td>
                                            <td><input type="text" value="1" name="frequency" class="text-right" /></td>
                                            <td><input type="text" value="3120.00" name="calculated-expenses" class="text-right" /></td>
                                            <td><a href="#" class="btn btn-default btn-xs" data-toggle=""><span class="sr-only">Delete</span> <span aria-hidden="true" class="icon-trash"></span></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="clearfix"><button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Save Changes</button><button type="button" class="btn btn-default pull-left" data-dismiss="modal">Save and Apply to Other Periods</button><button type="button" class="btn btn-default pull-left" data-dismiss="modal">Sync to Period Cost Direct Limit</button><button type="button" class="btn btn-default pull-left" data-dismiss="modal">Sync to Period Cost Limit</button><button type="button" class="btn btn-link pull-left" data-dismiss="modal">Cancel</button></div>
            </div>
        </div>
    </div>
</div>
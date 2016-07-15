
<div id="modal-edit-compliance" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Edit Compliance Protocol</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
                <div class="form-horizontal" role="form"> 
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="personType" class="col-md-3 control-label">Type:</label>
                                <div class="col-md-6">
                                    <select name="privileges" id="personType" class="form-control">
                                        <option>- Please select -</option>
                                        <option value="Human Subjects" selected>Human Subjects</option>
                                        <option value="Animal Usage">Animal Usage</option>
                                        <option value="Recombinant DNA">Recombinant DNA</option>
                                        <option value="Radioactive Isotopes">Radioactive Isotopes</option>
                                        <option value="Biohazard Materials">Biohazard Materials</option>
                                        <option value="International Programs">International Programs</option>
                                        <option value="Space Change">Space Change</option>
                                        <option value="TLO Review - No conflict (A)">TLO Review - No conflict (A)</option>
                                        <option value="TLO review - Reviewed, no conflict (B1)">TLO review - Reviewed, no conflict (B1)</option>
                                        <option value="TLO Review - Potential Conflict (B2)">TLO Review - Potential Conflict (B2)</option>
                                        <option value="TLO PR-Previously Reviewed">TLO PR-Previously Reviewed</option>
                                        <option value="Foundation Relations">Foundation Relations</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="approvalstatus" class="col-md-3 control-label">Approval status:</label>
                                <div class="col-md-6">
                                    <select name="approvalstatus" id="approvalstatus" class="form-control">
                                        <option>- Please select -</option>
                                        <option value="Approved" selected>Approved</option>
                                        <option value="Exempt">Exempt</option>
                                        <option value="Link to IACUC">Link to IACUC</option>
                                        <option value="Link to IRB">Link to IRB</option>
                                        <option value="Not yet applied">Not yet applied</option>
                                        <option value="Pending">Pending</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="protocolnumber" class="col-md-3 control-label">Protocol number:</label>
                                <div class="col-md-6">
                                    <input type="text" id="protocolnumber" name="protocolnumber" value="1124621">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="appdate" class="col-md-3 control-label">Application date:</label>
                                <div class="col-md-6">
                                    <input type="text" id="appdate" name="appdate" value="05/15/2014">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="apprdate" class="col-md-3 control-label">Approval date:</label>
                                <div class="col-md-6">
                                    <input type="text" id="apprdate" name="apprdate" value="05/15/2014">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="expdate" class="col-md-3 control-label">Expiration date:</label>
                                <div class="col-md-6">
                                    <input type="text" id="expdate" name="expdate" value="12/31/2014">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exemption" class="col-md-3 control-label">Exemption:</label>
                                <div class="col-md-6">
                                    <select name="exemption" id="exemption" class="form-control" multiple>
                                        <option>- Please select -</option>
                                        <option selected>E1</option>
                                        <option selected>E2</option>
                                        <option>E3</option>
                                        <option>E4</option>
                                        <option selected>E5</option>
                                        <option>E6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comments" class="col-md-3 control-label">Comments:</label>
                                <div class="col-md-6">
                                    <textarea id="comments" name="comments" class="form-control">This is just a test. Yay.</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="clearfix">
                    <a href="prop-compliance-1.php" class="btn btn-primary pull-left">Save changes</a>
                    <a href="" class="btn btn-link pull-left" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- //  MODAL EDIT PERSONNEL -->

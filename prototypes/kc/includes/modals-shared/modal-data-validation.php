<style>
    .dataTables_filter, .dataTables_length { display: none }
</style>

<div id="modal-data-validation" class="modal fade in" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close pull-right" data-dismiss="modal"><span class="sr-only">Close dialog</span> ×</button>
                <button type="button" class="btn btn-success btn-sm toggle-on-off pull-right" style="margin-right: 16px;">Turn off</button>
                <h4 class="modal-title" id="myModalLabel">Data Validation</h4>
            </div>
            <div class="modal-body uif-cssGridGroup clearfix">
                <table class="table table-condensed table-hover table-smaller-text datatable" id="dataValidation">
                    <thead>
                        <tr>
                            <th><a href="#">Area</a></th>
                            <th><a href="#">Section</a></th>
                            <th><a href="#">Description</a></th>
                            <th><a href="#">Severity</a></th>
                            <th><a href="#">Action</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Basics</td>
                            <td>Proposal Details</td>
                            <td>Activity Type must be specified</td>
                            <td><span class="label label-danger">Error</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Basics</td>
                            <td>Proposal Details</td>
                            <td>Prime Sponsor has not been specified</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Basics</td>
                            <td>Sponsor &amp; Program Information</td>
                            <td>Sponsor Div Code is missing</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Personnel</td>
                            <td>The Investigators are not all certified. Please certify Ken Graves.</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Investigators Financial Credit Split does not equal 100%.</td>
                            <td><span class="label label-danger">Error</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Investigators Space Credit Split does not equal 100%.</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Investigators Responsibility Credit Split does not equal 100%.</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Investigators Recognition Credit Split does not equal 100%.</td>
                            <td><span class="label label-danger">Error</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Key Personnel</td>
                            <td>Credit Allocation</td>
                            <td>The Unit Recognition Credit Split for Ken Graves does not equal 100%.</td>
                            <td><span class="label label-danger">Error</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>S2S Opportunity Search</td>
                            <td>Opportunity</td>
                            <td>You must complete the questionnaire &quot;Grants.gov S2S Questionnaire&quot;</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Attachments</td>
                            <td>Proposal</td>
                            <td>Invalid document type (thisfile.xml)</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Attachments</td>
                            <td>Internal</td>
                            <td>Invalid document type (thatfile.xml)</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Attachments</td>
                            <td>Internal</td>
                            <td>Invalid document type (theotherfile.xml)</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                        <tr>
                            <td>Basics</td>
                            <td>Sponsor &amp; Program Information</td>
                            <td>Sponsor deadline date has not been entered.</td>
                            <td><span class="label label-warning">Warning</span></td>
                            <td><a href="#">Fix It</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <div class="clearfix">
                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery('#modal-data-validation .modal-header').on('click', '.toggle-on-off', function() {

        if (jQuery(this).hasClass('btn-danger')) {
            jQuery(this).html('Turn off').removeClass('btn-danger').addClass('btn-success');
        } else {
            jQuery(this).html('Turn on').removeClass('btn-success').addClass('btn-danger');
        }

        return false;
    });
</script>
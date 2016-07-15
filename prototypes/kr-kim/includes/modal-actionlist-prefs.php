<!-- Modal -->


<div class="modal fade" id="actionlist-prefs" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" > Action List Preferences</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
                <ul id="tabs2" class="nav nav-tabs" data-tabs="tabs" role="tablist">
                    <li class="active" role="tab" aria-controls="general" ><a href="#general" data-toggle="tab">General</a></li>
                    <li role="tab" aria-controls="notifications"><a href="#notifications" data-toggle="tab">Notifications</a></li>
                </ul>
                <div id="my-tab-content2" class="tab-content clearfix">
                    <div class="tab-pane active" id="general" role="tabpanel">
                        <section  class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                            <h4>General</h4>
                            <hr>
                            <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                                <div  class="clearfix uif-label md-float-right text-right  uif-labelBlock" style="font-weight:bold">Displayed Columns:</div>
                            </div>
                            <div class="col-md-8">
                                <fieldset>
                                    <legend class="sr-only"> Select:</legend>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="checkbox">
                                                <label title="Document Type">
                                                    <input type="checkbox" value="" checked="">
                                                    Document Type </label>
                                            </div>
                                            <div class="checkbox">
                                                <label title="Title">
                                                    <input type="checkbox" value="" checked="">
                                                    Title </label>
                                            </div>
                                            <div class="checkbox">
                                                <label title="Action Requested">
                                                    <input type="checkbox" value="" checked="">
                                                    Action Requested </label>
                                            </div>
                                            <div class="checkbox">
                                                <label title="Initiator">
                                                    <input type="checkbox" value="" checked="">
                                                    Initiator </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="checkbox">
                                                <label title="Delegator">
                                                    <input type="checkbox" value="">
                                                    Delegator </label>
                                            </div>
                                            <div class="checkbox">
                                                <label title="Date Created">
                                                    <input type="checkbox" value="" checked="">
                                                    Date Created </label>
                                            </div>
                                            <div class="checkbox">
                                                <label title="Date Approved">
                                                    <input type="checkbox" value="" checked="">
                                                    Date Approved </label>
                                            </div>
                                            <div class="checkbox">
                                                <label title="Current Route Node">
                                                    <input type="checkbox" value="" checked="">
                                                    Current Route Node </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="checkbox">
                                                <label title="WorkGroup Request">
                                                    <input type="checkbox" value="">
                                                    WorkGroup Request </label>
                                            </div>
                                            <div class="checkbox">
                                                <label title="Document Route Status">
                                                    <input type="checkbox" value="" checked="">
                                                    Document Route Status </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                                <label class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" for="listrefresh">List Refresh Rate:</label>
                            </div>
                            <div class="col-md-6">
                                <div  class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                    <select class="form-control" id="listrefresh">
                                        <option>never</option>
                                        <option>1 min</option>
                                        <option>5 min</option>
                                        <option>10 min</option>
                                        <option>1 hour</option>
                                    </select>
                                </div>
                            </div>
                            <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                                <label  class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" for="delegator">Delegator Filter:</label>
                            </div>
                            <div class="col-md-6">
                                <div  class="uif-inputField" data-parent="" data-role="InputField" >
                                    <select class="form-control" id="delegator">
                                        <option value="Secondary Delegators only on Filter Page">Secondary Delegators only on Filter Page</option>
                                        <option value="Secondary Delegators on Action List Page" selected="selected">Secondary Delegators on Action List Page</option>
                                    </select>
                                </div>
                            </div>
                            <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                                <label  class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" for="primarydelegator">Primary Deligate Filter:</label>
                            </div>
                            <div class="col-md-6">
                                <div  class="uif-inputField" data-parent="" data-role="InputField" data-label="">
                                    <select class="form-control" id="primarydelegator">
                                        <option value="Primary Delegates only on Filter Page">Primary Delegates only on Filter Page</option>
                                        <option value="Primary Delegates on Action List Page" selected="selected">Primary Delegates on Action List Page</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-3">
                                <div class="checkbox uif-inputField" data-role="" data-label="" >
                                    <fieldset>
                                    <legend class="sr-only">Route Status Highlighting</legend>
                                        <label title="Show Route Status Highlighting">
                                            <input type="checkbox" id="routestatushighlight" name="" class="uif-checkboxControl required">
                                            Show Route Status Highlighting</label>
                                    </fieldset>
                                    <div class="row" id="rowColors" style="display:none">
                                        <fieldset>
                                            <legend class="sr-only">Select</legend>
                                            <div class="col-sm-4">
                                                <div class="checkbox" style="background: #B6F2C3;">
                                                    <label title="Saved">
                                                       <input type="checkbox" value="" checked="">
                                                        Saved</label>
                                                </div>
                                                <div class="checkbox" style="background:#C0BCEE">
                                                    <label title="Initiated">
                                                        <input type="checkbox" value="" checked="">
                                                        Initiated</label>
                                                </div>
                                                <div class="checkbox" style="background:#FFF1C0">
                                                    <label title="Disapproved">
                                                        <input type="checkbox" value="" checked="">
                                                        Disapproved</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="checkbox" style="background:#FFC6C0">
                                                    <label title="Enroute">
                                                        <input type="checkbox" value="" checked="">
                                                        Enroute</label>
                                                </div>
                                                <div class="checkbox" style="background:#A6C1E8">
                                                    <label title="Approved">
                                                        <input type="checkbox" value="" checked="">
                                                        Approved</label>
                                                </div>
                                                <div class="checkbox" style="background:#FFDEA6">
                                                    <label title="Final">
                                                        <input type="checkbox" value="" checked="">
                                                        Final</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="checkbox" style="background:#BDF7EA">
                                                    <label title="Processed">
                                                        <input type="checkbox" value="" checked="">
                                                        Processed</label>
                                                </div>
                                                <div class="checkbox" style="background:#C3AEAE">
                                                    <label title="Exception">
                                                        <input type="checkbox" value="" checked="">
                                                        Exception</label>
                                                </div>
                                                <div class="checkbox" style="background:#EFE4FB">
                                                    <label title="Canceled">
                                                        <input type="checkbox" value="" checked="">
                                                        Canceled</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-offset-3">
                                <div class="checkbox uif-inputField" data-parent="" data-role="" data-label="" >
                                    <input type="hidden" name="_inputField1" value="on">
                                    <input type="checkbox" id="completedations" name="" class="uif-checkboxControl required" data-role="Control" checked="checked">
                                    <label for="completedations">Show Completed Actions Panel</label>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-offset-3">
                                <div class="checkbox uif-inputField" data-parent="" data-role="" data-label="" >
                                    <input type="hidden" name="_inputField1" value="on">
                                    <input type="checkbox" id="bulkactions" name="inputField1" class="uif-checkboxControl required" data-role="Control" checked="checked">
                                    <label for="bulkactions">Allow Bulk Actions</label>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane" id="notifications"  role="tabpanel">
                        <h4> Email Notifications</h4>
                        <hr>
                        <div class="form-horizontal" role="form">
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                                            <label class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" for="recieveemail">Recieve Emails:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <select name="privileges" id="recieveemail" class="form-control" onclick="">
                                                <option value="no">Never</option>
                                                <option value="emp">Daily</option>
                                                <option value="emp">Weekly</option>
                                                <option value="emp">Immediately</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group employee" style="display: none;">
                                        <div class="col-sm-offset-2 col-sm-9">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Receive Primary Delegate Emails </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                    Receive Secondary Delegate Emails </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" >
                                        <div class="md-clear-left col-md-2 uif-cssGridLabelCol">
                                            <div class="clearfix clearfix uif-label md-float-right text-right  uif-labelBlock" style="font-weight:bold">Send Emails For:</div>
                                        </div>
                                        <div class="col-sm-9">
                                            <fieldset>
                                                <legend class="sr-only">Select: </legend>
                                                <div class="checkbox">
                                                    <label title="Complete">
                                                        <input type="checkbox">
                                                        Complete</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label title="Approve">
                                                        <input type="checkbox">
                                                        Approve</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label title="Acknowledge">
                                                        <input type="checkbox">
                                                        Acknowledge</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label title="FYI">
                                                        <input type="checkbox">
                                                        FYI</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-horizontal" role="form">
                            <h4> Doctype Notifications</h4>
                            <div class="row">
                                <div class="col-md-8">
                                    <table class="table table-condensed">
                                        <tbody>
                                            <tr>
                                                <th>Doc Type</th>
                                                <th class="uif-gridLayoutCell">Frequency</th>
                                                <th class="uif-gridLayoutCell" style="width:30px;">Actions</th>
                                            </tr>
                                            <tr>
                                                <td>Identity Management Role</td>
                                                <td class="">Weekly</td>
                                                <td class=""><a href="#" class="btn btn-xs btn-default">Delete<span class="sr-only"> Identity Management Role Notification</span></a></td>
                                            </tr>
                                            <tr>
                                                <td>Term Maintenance </td>
                                                <td class="">Weekly</td>
                                                <td class=""><a href="#" class="btn btn-xs btn-default">Delete<span class="sr-only"> Term Maintenance Notification</span></a></td>
                                            </tr>
                                            <tr>
                                                <td>State Maintenance</td>
                                                <td class="">Daily</td>
                                                <td class=""><a href="#" class="btn btn-xs btn-default">Delete<span class="sr-only"> State Maintenance Notification</span></a></td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td class="">&nbsp;</td>
                                                <td class=""><a href="#" class="btn btn-xs btn-default"> <span class="icon-plus" style="font-size:10px"></span>Add <span class="sr-only"> Notification</span></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"> <a href="" class="btn btn-primary" data-dismiss="">Save Changes</a> <a href="" class="btn btn-default" data-dismiss="modal">Cancel</a> </div>
        </div>
    </div>
</div>
<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
document.getElementById('routestatushighlight').onchange = function() {
    document.getElementById('rowColors').style.display = this.checked ? 'block' : 'none';
};

}//]]>  

</script> 

<!-- end Modal --> 
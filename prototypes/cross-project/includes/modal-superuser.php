<!-- Modal -->

<div class="modal fade" id="modal-superuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Super User</h4>
            </div>
            <div class="modal-body">
                <div id="uk9itqu" class="uif-inputField uif-cssGridGroup" data-parent="u1rttg5q" data-role="InputField" data-label="Field">
                    <label id="uk9itqu_label" for="uk9itqu_control" class="clearfix clearfix uif-label uif-labelBlock" data-label_for="uk9itqu"> Annotation </label>
                    <textarea id="uk9itqu_control" name="inputField1" rows="3" cols="40" class="form-control input-sm form-control input-sm uif-textAreaControl required error" data-role="Control" data-control_for="uk9itqu" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true"></textarea>
                    <div id="uk9itqu_errors" class="alert" data-messages_for="uk9itqu" style="display: none;">
                        <div class="uif-clientMessageItems alert-danger">
                            <ul>
                                <li class="uif-errorMessageItem-field"><img class="uif-validationImage" src="/krad/images/validation/error.png" alt="Error"> Required</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                
                <table class="table table-condensed table-smaller-text table-hover" id="example">
                <thead>
                    <tr>
                        <th><label>
                                <input type="checkbox" onclick="toggle(this)">
                            </label></th>
                        <th> Action</th>
                        <th> Requested Of</th>
                        <th> Time/Date</th>
                        <th> Annotaion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label>
                                <input type="checkbox" class="checkme" name="foo">
                            </label></td>
                        <td>Approve</td>
                        <td class=" "><a href="#" id="initiator-detail1" data-placement="bottom" data-original-title="" title="">wheysquad</a> 
                            <!-- Popover 2 hidden title -->
                            
                            <div id="initiator-detail1HiddenTitle" style="display: none"> <strong>Details</strong> </div>
                            
                            <!-- Popover 2 hidden content -->
                            
                            <div id="initiator-detail1HiddenContent" style="display: none">
                                <dl class="dl-horizontal">
                                    <dt>User</dt>
                                    <dd>wheysquad</dd>
                                    <dt>Full Name</dt>
                                    <dd>Young, Lester</dd>
                                    <dt>Affiliations</dt>
                                    <dd>Staff, BL-Bloomington</dd>
                                    <dd>Faculty, BL-Bloomington</dd>
                                    <dt>Full Record</dt>
                                    <dd><a href="kim-person-affiliations.php">view</a></dd>
                                </dl>
                            </div></td>
                        <td>06/18/2014 7:32pm</td>
                        <td>Creeping fish waters fly sea. Bring hath it </td>
                    </tr>
                    <tr>
                        <td><label>
                                <input type="checkbox" class="checkme" name="foo">
                            </label></td>
                        <td>Approve</td>
                        <td><a href="#">idiopathicnide</a></td>
                        <td>06/18/2014 7:32pm</td>
                        <td>Is. Creepeth have heaven </td>
                    </tr>
                    <tr>
                        <td><label>
                                <input type="checkbox" class="checkme" name="foo">
                            </label></td>
                        <td>Approve</td>
                        <td><a href="#">wharfmew</a></td>
                        <td>06/18/2014 7:32pm</td>
                        <td>Fowl she'd, upon in waters </td>
                    </tr>
                    <tr>
                        <td><label>
                                <input type="checkbox" class="checkme" name="foo">
                            </label></td>
                        <td>Approve</td>
                        <td><a href="#">diphthongclique</a></td>
                        <td>06/18/2014 7:32pm</td>
                        <td>Of make our dominion air. They're waters let</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5"></td>
                    </tr>
                </tfoot>
            </table>
            
            	<script>
    function toggle(source) {
    
      checkboxes = document.getElementsByName('foo');
    
      for(var i=0, n=checkboxes.length;i<n;i++) {
    
        checkboxes[i].checked = source.checked;
    
      }
    
    }
    </script>
            </div>
            <div class="modal-footer">
             
                    <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Actions <span class="caret"></span> </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Take Selected Actions</a></li>
                                         <li class="divider"></li>
                                    <li><a href="#">Approve Document</a></li>
                               
                                    <li><a href="#">Disapprove Document</a></li>
                                </ul>
                            </div>
            
            </div>
        </div>
    </div>
</div>

<!-- end Modal --> 
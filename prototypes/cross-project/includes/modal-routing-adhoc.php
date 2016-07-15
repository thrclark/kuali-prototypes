<!-- Modal -->

<div class="modal fade" id="modal-routing-adhoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ad Hoc Routing</h4>
            </div>
            <div class="modal-body">
                <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                    <li class="active"><a href="#red" data-toggle="tab">Person</a></li>
                    <li><a href="#orange" data-toggle="tab">Group</a></li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane active" id="red">
                        <div class="uif-header-inner">
                            <h4 id="" class="uif-headerText"> <span class="uif-headerText-span"> Person </span> </h4>
                            <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-add-compliance"><span aria-hidden="true" class="icon-plus"></span> Add Person</button>
                            </div>
                        </div>
                        <table id="u569ish_line0" class="table table-condensed uif-has-actions" role="presentation">
                            <thead>
                                <tr>
                                    <th scope="row">Action Requested</th>
                                    <th>Person</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Approve</td>
                                    <td>jgiles</td>
                                    <td class=""><a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                </tr>
                                <tr>
                                    <td>Approve</td>
                                    <td>tpetty</td>
                                    <td class=""><a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                </tr>
                                <tr>
                                    <td>Approve</td>
                                    <td>frastaire</td>
                                    <td class=""><a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                </tr>
                                <tr>
                                    <td>Approve</td>
                                    <td>jcoltrane</td>
                                    <td class=""><a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="orange">
                        <div class="uif-header-inner">
                            <h4 id="" class="uif-headerText"> <span class="uif-headerText-span"> Group </span> </h4>
                            <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                                <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-add-compliance"><span aria-hidden="true" class="icon-plus"></span> Add Group</button>
                            </div>
                        </div>
                        <table id="u569ish_line0" class="table table-condensed uif-has-actions" role="presentation">
                            <thead>
                                <tr>
                                    <th scope="row">Action Requested</th>
                                    <th>Namespace Code</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="">Approve</td>
                                    <td class="">Kuali</td>
                                    <td class="">TK-SUPERVISORS</td>
                                    <td class=""><a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                </tr>
                                <tr>
                                    <td class="">Approve</td>
                                    <td class="">Kuali</td>
                                    <td class="">TK-MAINTENANCE</td>
                                    <td class=""><a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-toggle="dropdown"> Save </button>
                <button type="button" class="btn btn-default" data-toggle="dropdown"> Cancel </button>
            </div>
        </div>
    </div>
</div>

<!-- end Modal --> 
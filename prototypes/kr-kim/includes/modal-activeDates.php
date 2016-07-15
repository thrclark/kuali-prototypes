<div id="modal-activeDates" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="sponsor-search">Edit Active Dates</h4>
            </div>
            <div class="modal-body uif-cssGridGroup">
                <section id="" class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                
                    
            <div class="form-group">
                                    <label class="col-md-3 control-label">Active Date Range</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4">
                                                <input type="text" class="form-control"  placeholder="mm/dd/yyyy">
                                                <small>from</small> </div>
                                            <div class="col-xs-4 col-sm-4">
                                                <input type="text" class="form-control rangeEnd" placeholder="mm/dd/yyyy">
                                                <small>to</small> </div>
                                        </div>
                                    </div>
                                </div>
                   
                    <div class="md-clear-left col-md-3 uif-cssGridLabelCol">
                        <label id="" for="" class="clearfix clearfix uif-label md-float-right uif-labelBlock" data-label_for="">Inactivate:</label>
                    </div>
                    <div class="col-md-8">
                        <div id="uk9itqaa" class="uif-inputField checkbox" data-parent="" data-role="InputField" data-label="Field 1">
                            <label>
                                <input type="checkbox" value="09/26/2014" class="setRangeEnd">
                            </label>
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <div class="clearfix"> <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#modal-find-sponsor-results" class="btn btn-primary">Save</a> <a href="#" class="btn btn-link" data-dismiss="modal">Cancel</a> </div>
            </div>
        </div>
    </div>
</div>
<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$('.setRangeEnd').click(function() {
    $('.rangeEnd').val(
        $('.setRangeEnd:checked').map(function() {
            return $(this).val();
        }).get()
    );
});
});//]]>  

</script>
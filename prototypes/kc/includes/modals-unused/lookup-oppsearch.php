<?php
# Includes
include( 'inc/head.php' );
?>

<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h3>Opportunity Search</h3>
    </div>
    <div class="modal-body">
      <div class="container">
        <form class="form-horizontal" method="get" action="">
          <fieldset>
            <legend style="display:none">Enter lookup criteria</legend>
            <div class="form-group clearfix">
              <label for="s2sprovider" class="control-label col-sm-4 col-xs-4" >S2S Provider:</label>
              <div class="col-sm-8 col-xs-8">
                <select name="proposal_type" id="s2sprovider" class="form-control input-sm">
                  <option></option>
                  <option value="4">grants.gov</option>
                  <option value="1">research.gov</option>
                </select>
              </div>
            </div>
            <div class="form-group clearfix">
              <label for="oppid" class="control-label col-sm-4 col-xs-4" >Opportunity ID</label>
              <div class="col-sm-8 col-xs-8">
                <input type="text" id="oppid" name="sponsor_code" class="form-control input-sm">
              </div>
            </div>
            <div class="form-group clearfix">
              <label for="cfda" class="control-label col-sm-4 col-xs-4" >CFDA Number</label>
              <div class="col-sm-8 col-xs-8">
                <input type="text" id="cfda" name="sponsor_code" class="form-control input-sm">
              </div>
            </div>
<!--
            <div class="form-group clearfix">
              <label for="prev_grantsgov_tracking" class="control-label col-sm-4 col-xs-4" >Prev Grants.gov Tracking ID</label>
              <div class="col-sm-8 col-xs-8">
                <input type="text" id="prev_grantsgov_tracking" name="prev_grantsgov_tracking" class="form-control input-sm">
              </div>
            </div>

            <div class="form-group clearfix">
              <label for="agency_routing_identifier" class="control-label col-sm-4 col-xs-4" >Agency Routing Identifier</label>
              <div class="col-sm-8 col-xs-8">
                <input type="text" id="agency_routing_identifier" name="agency_routing_identifier" class="form-control input-sm">
              </div>
            </div>
-->
          </fieldset>
        </form>
      </div>
    </div>
    <div class="modal-footer"> <a href="lookup-oppsearch-results.php" class="btn btn-primary pull-right">Search</a> </div>
  </div>
</div>

<?php include( 'inc/footer.php' ); ?>
<div class="modal fade" id="sendcert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Send Certification Requests</h4>
            </div>
            <div class="modal-body">
            
            <script language="JavaScript">
function toggle(source) {
  checkboxes = document.getElementsByName('notify');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
       
        <table class="table table-condensed">
          
          <tbody><tr>
            <th>Recipient</th>
            <th>Last Notfication</th>
          </tr>
          <tr>
            <td>
                <input name="notify" type="checkbox" value="notify">
                Edward H Haskell</td>
            <td>Dec 06, 2013 (4:27pm)</td>
          </tr>
          <tr>
            <td>
                <input name="notify" type="checkbox" value="notify">
                Ward Cleaver</td>
            <td>Dec 03, 2013 (11:13am)</td>
          </tr>
          <tr>
            <td><input name="notify" type="checkbox" value="notify">
              Jane Smith</td>
            <td>Dec 06, 2013 (4:27pm)</td>
          </tr>
          <tr>
            <td>
              <input type="checkbox" onclick="toggle(this)">
Select All</td>
            <td>&nbsp;</td>
          </tr>
        </tbody></table>
      </div>
            <div class="modal-footer">
                <div class="clearfix">
                    <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Send Request(s)</button>
                    <button type="button" class="btn btn-link pull-left" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery('#personnel-tabs-1 a').click(function(e) {
        e.preventDefault();
        jQuery(this).tab('show');
    });
</script>
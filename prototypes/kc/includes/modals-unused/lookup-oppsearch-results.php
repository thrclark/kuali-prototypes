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
             <table class="table table-condensed table-hover table-smaller-text" id="example">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th>CFDA Number</th>
                        <th align="right">Opening Date</th>
                        <th>Closing Date</th>
                        <th>Competition ID</th>
                        <th align="right">Opportunity ID</th>
                        <th align="right">Title</th>
                        <th align="right">View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><button class="btn btn-primary btn-xs select-opportunity" href="#" data-href="../prop.basics.oppsearch-search-done.php">Select</button></td>
                        <td >00.000</td>
                        <td>12/31/2013</td>
                        <td >12/31/2014</td>
                        <td >NEWRRFORM</td>
                        <td>PA-13-302</td>
                        <td>testing new SF424 RR form</td>
                        <td><a href="#">Schema URL</a> | <a href="#">Instructions</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <a href="lookup-oppsearch.php" class="btn btn-default">< Refine Search</a> <a href="#" class="btn btn-link btn-sm">Cancel</a>
        </div>
    </div>
</div>
<script>
     $(document).ready(function(){

         $('.select-opportunity').click(function(e){
            e.preventDefault();
             var href = $(this).data('href');
             $.post("../process.php", {'action' : "storeSessions", "select-opportunity": 1}, function(t){
                parent.document.location = href;
                // document.location = href;
             });
         })
     });
</script>
<?php include( 'inc/footer.php' ); ?>
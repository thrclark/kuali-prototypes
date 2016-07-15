<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <title>
        <?php echo $pageTitle ?>
    </title>
    <!-- GLOBAL STYLES -->
    <?php include('includes/styles.php') ?>
    <style type="text/css">
    .tables{
        padding-bottom: 5em;
        float:left;
    }
    a[data-role="disclosureLink"]  .icon-caret-right{
        display:none;
    }
    a[data-role="disclosureLink"].collapsed .icon-caret-down {
        display:none;
    }
    a[data-role="disclosureLink"].collapsed .icon-caret-right{
        display:inline;
    }
    [contenteditable="true"]{
        border:1px dotted #ccc;
    }
    table{
        max-width:780px;
        margin:1em;
        float: left;
        ;
    }
    tr td:first-child {
        width:34%;
    }
    td{
        width:11%;
    }
    td,th{
        text-align: left;
    }
    .stripedCol td:nth-of-type(even),	.stripedCol th:nth-of-type(even){
        background:#F9F9F9;
    }
    .stripedCol td:nth-of-type(even){
        border-left: 1px solid #ddd;
        border-right:1px solid #ddd;
    }
    .stripedCol{
        border:1px solid #ddd;
    }

    .stripedCol3 td:nth-of-type(even),	.stripedCol3 th:nth-of-type(even){
        background:#F9F9F9;
    }
    .checkbox {
        min-width:15px;
        min-height: 15px;
    }

    #result{
        display:none;
        height:150px;
        padding:5px 10px 10px;
        background:#FCF8E3;
        border-bottom: 1px dotted #ccc;
        position:absolute;
    }
    </style>
</head>
<body id="Uif-Application">
    <p><strong>Check boxes to indicate which relationships you have with this Financial Entity. You must check at least one box.</strong></p>
    <div class="tables">
        <table class="table table-striped stripedCol2">
            <caption>
            </caption>
            <tr>
                <td>
                    <!-- empty -->
                </td>
                <th scope="col">
                    Self
                </th>
                <th scope="col">
                    Spouse
                </th>
                <th scope="col">
                    Children
                </th>
                <th scope="col">
                    Student
                </th>
                <th scope="col">
                    Other
                </th>
<!--
<th scope="col">
Add
</th>
-->
</tr>
<tr>
    <th scope="row">
        Ownership Interests
    </th>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
</tr>
<tr>
    <th scope="row">
        Offices &amp; Positions
    </th>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
</tr>
<tr>
    <th scope="row">
        Remunerative Activities
    </th>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
</tr>
<tr>
    <th scope="row">
        Outside Employment of Students
    </th>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
</tr>
<tr>
    <th scope="row">
        Creator of Intellectual Property
    </th>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
</tr>
<tr>
    <th scope="row">
        Other Interests
    </th>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
    <td>
        <input type="checkbox" class="checkbox" />
    </td>
</tr>
</table>
</div>
<?php include('includes/footer-scripts.php') ?>
<script>


(function($){



    $("#result").hide();


    $(".checkbox").on( "click", function() {

        $("#result").hide();
        var $parentRow = $(this).parent().parent();
        $(".warning .checkbox").show();
        $(".warning .btn").show();


        $("tr").removeClass();


        $parentRow.addClass("warning");
        $(".warning .checkbox").hide();
        $(".warning .btn").hide();
        $divWidth = $parentRow .width();
        var position = $parentRow.position();


        $setBottom = position.top + 25;

//$( "#result" ).text( "left: " + position.left + ", top: " + position.top  + "new top" + $setBottom);
$("#result").fadeIn(500);
$("#result").offset({
    top: $setBottom, left:  position.left   }
    );
$("#result").css('width', $divWidth);


}
);




}
)(jQuery);
</script>
<div id="result">
    <div class="pull-left">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </p>
        <div class="col-md-6">
            <div class="md-clear-left col-md-4 uif-cssGridLabelCol">
                <label class="clearfix uif-label uif-labelBlock" for="u126_input">
                    Select Percentage: 
                </label>
            </div>
            <div class="col-md-8">
                <div data-label="" data-role="InputField" data-parent="" class="uif-inputField">
                    <select class="form-control input-sm form-control input-sm uif-dropdownControl required valid" id="u126_input">
                        <option selected="" value="All">
                            All
                        </option>
                        <option value="Submitted for Review">
                            0 - 25%
                        </option>
                        <option value="Returned to Reporter">
                            26 - 50%
                        </option>
                        <option value="Routed to COI Office">
                            51 - 75%
                        </option>
                        <option value="Approved">
                            76 - 100%
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="pull-right">
            <a href="#" class="btn btn-primary btn-xs"  >
                Save 
            </a>

            <a href="#" class="btn btn-default btn-xs">
                Cancel 
            </a>
        </div>
    </div>
</div>
</body>
</html>
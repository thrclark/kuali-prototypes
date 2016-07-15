<!DOCTYPE HTML>
<html lang="en" >
<head >
    <meta charset="UTF-8" >
    <title >Kuali :: Fluid Application Header</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="dnd/css/jquery.fileupload.css" rel="stylesheet" />
    <style >
    .uif-drag-drop-area {
        min-height: 200px;
        background: #f2f2f2;
        padding: 12px;
        border: 2px dashed #ccc;
    }

    .uif-drag-drop-area p {
        font-size: 150%;
        text-transform: uppercase;
        color: #ccc;
        text-align: center;
        margin-top: 70px;
    }

    .uif-action-row {
        margin: 16px 0;
    }
    </style>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="clearfix">
                <div>
                    <h1>Multiple file upload example</h1>
                </div>
            </div>
            
            <table id="file_list" role="presentation" class="table table-condensed" aria-live="polite" tabindex="-1">
                <caption>This tables lists all uploaded files, their file size, and available actions.</caption>
                <thead>
                    <tr class="active">
                        <th scope="col">Filename</th>
                        <th scope="col">Size</th>
                        <th scope="col">Title</th>
                        <th scope="col">Details</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody id="files"></tbody>
                <tfoot>
                    <tr class="active">
                        <td colspan="3">
                            <span id="file_totals" tabindex="0"></span>
                        </td>
                        <td colspan="2">
                            <!-- <input id="fileupload" type="file" name="files[]" multiple class="btn btn-default btn-sm fileinput-button pull-right" /> -->
                            <span class="btn btn-primary btn-sm fileinput-button pull-right" role="button" tabindex="0" onclick="show_file_list_click()" onKeyUp="show_file_list_keyup()" aria-pressed="false">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Select files...</span>
                            </span>
                            <input id="fileupload" type="file" name="files[]" multiple class="fade" />
                        </td>
                    </tr>
                </tfoot>
            </table>
            
            <!-- <div id="progress" class="progress">
                <div class="progress-bar progress-bar-success"></div>
            </div> -->
            
            <div class="uif-drag-drop-area" id="uif-mfu">
                <p>Drop files here</p>
            </div>
        </div>
    </form>
    <script src="../../plugins/jquery/jquery-1.8.3.js" type="text/javascript" ></script> 
    <script src="../../themes/bootstrap/scripts/bootstrap.js" type="text/javascript" ></script>
    <script src="dnd/js/jquery.ui.widget.js"></script>
    <script src="dnd/js/jquery.iframe-transport.js"></script>
    <script src="dnd/js/jquery.fileupload.js"></script>
    <script>
    function show_file_list_click(event) {
        event = event || window.event;
        var pressed = event.target.getAttribute('aria-pressed') == "true";
        event.target.setAttribute('aria-pressed', pressed ? "false" : "true");
        console.log('clicked');
        $('#fileupload').focus().trigger('click');
    }

    function show_file_list_keyup(event) {
        event = event || window.event;
        if (event.keyCode === 32 || 13) {
            console.log('keypressed');
            show_file_list_click(event);
        }
    }

    $(function() {

        var url = window.location.hostname === 'blueimp.github.io' ? '//jquery-file-upload.appspot.com/' : 'server/php/';
        
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',            
            done: function (e, data) {

                $.each(data.result.files, function(index, file) {
                    $('#files:last').append('<tr scole="row" class="template-download"><td><p class="name" id="file_' + file.name + '">' + file.name + '</p></td><td><p class="size" aria-labelledby="file_' + file.name + '">' + file.size + ' bytes</p></td><td><label for="id1_' + file.name + '" class="sr-only" aria-labelledby="file_' + file.name + '">Title</label><input type="text" class="form-control input-sm" name="title1_' + file.name + '" id="id1_' + file.name + '" /></td><td><label for="id2_' + file.name + '" class="sr-only" aria-labelledby="file_' + file.name + '">Details</label><textarea class="form-control input-sm" name="title2_' + file.name + '" id="id2_' + file.name + '" /></td><td><button type="button" class="btn btn-sm btn-danger" data-type="' + file.deleteType + '" data-url="' + file.deleteUrl + '" aria-labelledby="file_' + file.name + '">Delete</button></td></tr>');
                });

                // Update totals and announce
                $('#file_totals').html( $('#files tr').length + ' uploaded file(s)');

                // Focus on the table to read results
                $('#file_list').focus();
            }
            // ,
            // progressall: function (e, data) {
            //     var progress = parseInt(data.loaded / data.total * 100, 10);
            //     $('#progress .progress-bar').css(
            //         'width',
            //         progress + '%'
            //     );
            // }
        }).prop('disabled', !$.support.fileInput).parent().addClass($.support.fileInput ? undefined : 'disabled');
    });
    </script>
</body>
</html>
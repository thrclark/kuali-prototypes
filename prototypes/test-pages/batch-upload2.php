<?php
$section = 'asdf';
$page = 'asdf';
?>
<!DOCTYPE HTML>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>

<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet"href="../../plugins/batch-file-upload/css/jquery.fileupload.css">
<link rel="stylesheet"href="../../plugins/batch-file-upload/css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript>
<link rel="stylesheet"href="../../plugins/batch-file-upload/css/jquery.fileupload-noscript.css">
</noscript>
<noscript>
<link rel="stylesheet"href="../../plugins/batch-file-upload/css/jquery.fileupload-ui-noscript.css">
</noscript>
<style>
div.dropzone {
	display: none;
}
.batch:hover > div.dropzone {
	display: block;
	position: absolute;
	background: green;
	width: 100%;
	height: 100%;
	top: 30px;
}
.batch {
	min-height: 300px
}
</style>
</head><body id="Uif-Application">


<form id="fileupload" action="http://jquery-file-upload.appspot.com" method="POST" enctype="multipart/form-data">
    
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role="View"> <!-- BREADCRUMBS --> 
        <!-- VIEW HEADER -->
        <header class="container uif-viewHeader-contentWrapper">
            <div id="LabsProposal-DocActionBar" class="uif-actionBar uif-header-lowerGroup">
                <ul>
                </ul>
            </div>
        </header>
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"> 
       
          
            
            <main id="LabsProposal-Page" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal">
                <header class="clearfix uif-header-contentWrapper">
                    <div id="u148pgf0" class="uif-pageHeader clearfix" data-header_for="LabsProposal-Page">
                        <h2 class="uif-headerText"> <span class="uif-headerText-span"> Batch File Upload</span> </h2>
                    </div>
                </header>
        
                
                <!-- Redirect browsers with JavaScript disabled to the origin page -->
                <noscript>
                <input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/">
                </noscript>
                <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                <div class="row fileupload-buttonbar">
                    <div class="col-lg-7"> 
                        <!-- The fileinput-button span is used to style the file input field as button --> 
                        <span class="btn btn-primary btn-xs fileinput-button"> <span>Add files...</span>
                        <input type="file" name="files[]" multiple>
                        </span>
                        <button type="submit" class="btn btn-default btn-xs start"> </i> <span>Upload All</span> </button>
                        <button type="reset" class="btn btn-default btn-xs cancel"> </i> <span>Cancel All Uploads</span> </button>
                        <!--  <button type="button" class="btn btn-default btn-xs delete"> <i class="glyphicon glyphicon-trash"></i> <span>Delete</span> </button>--> 
                        <!--  <input type="checkbox" class="toggle" style="width:20px">--> 
                        <!-- The global file processing state --> 
                        <span class="fileupload-process"></span> </div>
                    <!-- The global progress state -->
                    <div class="col-lg-5 fileupload-progress fade"> 
                        <!-- The global progress bar -->
                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                        </div>
                        <!-- The extended global progress state -->
                        <div class="progress-extended">&nbsp;</div>
                    </div>
                </div>
                <!-- The table listing the files available for upload/download -->
                
                <div class="batch" style="position:relative">
                    <table role="presentation" class="table table-condensed ">
                        <thead>
                        <th>File</th>
                            <th>Detail 1</th>
                            <th>Detail 2</th>
                            <th>Detail 3</th>
                            <th style="width:140px">Actions</th>
                                </thead>
                        <tbody class="files">
                        </tbody>
                    </table>
                    
                    <!--  <div class="dropzone"> drop files here</div>--> 
                </div>
            </main>
        </div>
        <!-- VIEW FOOTER -->
        
        <!-- DIALOGS/Placeholders -->
        <div id="Uif-Dialogs"> </div>
    </div>
   
</form>
<script type="text/javascript" src="../../plugins/jquery/jquery-1.8.3.js"></script> 
<script type="text/javascript" src="../../plugins/validate/jquery.validate.js"></script> 
<script type="text/javascript" src="../../plugins/jqueryUI/jquery-ui-1.9.2.js"></script> 
<script type="text/javascript" src="../../plugins/datatables/jquery.dataTables.js"></script> 
<script type="text/javascript" src="../../themes/bootstrap/scripts/bootstrap.js"></script> 
<script type="text/javascript" src="../../plugins/scrollto/jquery.scrollTo-1.4.6.js"></script> 
<script type="text/javascript" src="../../plugins/jqform/jquery.form-3.31.0.js"></script> 
<script type="text/javascript" src="../../plugins/globalize/globalize.js"></script> 
<script type="text/javascript" src="../../plugins/menu/krad.navigationMenu.js"></script> 
<script type="text/javascript" src="../../plugins/menu/krad.tabMenu.js"></script> 
<script type="text/javascript" src="../../plugins/jgrowl/jquery.jgrowlllllllllll.js"></script> 
<script type="text/javascript" src="../../plugins/textpopout/krad.textareaPopout.js"></script> 
<script type="text/javascript" src="../../plugins/validate/additional_validations.js"></script> 
<script type="text/javascript" src="../../plugins/cookie/jquery.cookie.js"></script> 
<script type="text/javascript" src="../../plugins/watermark/jquery.watermark.js"></script> 
<script type="text/javascript" src="../../plugins/countdown/jquery.countdown.js"></script> 
<script type="text/javascript" src="../../plugins/blockUI/jquery.blockUI.js"></script> 
<script type="text/javascript" src="../../plugins/color/jquery.color.js"></script> 
<script type="text/javascript" src="../../plugins/json/jquery.json-2.2.js"></script> 
<script type="text/javascript" src="../../plugins/datatables/jquery.dataTables.rowGrouping.js"></script> 
<script type="text/javascript" src="../../plugins/datatables/TableTools.js"></script> 
<script type="text/javascript" src="../../plugins/datatables/ZeroClipboard.js"></script> 
<script type="text/javascript" src="../../plugins/jstree/jquery.jstree.js"></script> 
<script type="text/javascript" src="../../plugins/jqueryUI/jquery.ui.autocomplete.html.js"></script> 
<script type="text/javascript" src="../../plugins/fancybox/jquery.fancybox.js"></script> 
<script type="text/javascript" src="../../plugins/fancybox/jquery.fancybox.pack.js"></script> 
<script type="text/javascript" src="../../plugins/prettify/prettify.js"></script> 
<script type="text/javascript" src="../../plugins/easydrag/jquery.easydrag.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.variables.js"></script> 
 
<!-- --> 
 
<script type="text/javascript" src="../../krad/scripts/krad.response.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.actions.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.dirty.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.lookup.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.message.js"></script> 
 
<script type="text/javascript" src="../../krad/scripts/krad.url.js"></script> 
<script type="text/javascript" src="../../krad/scripts/krad.validate.js"></script> 
<script type="text/javascript" src="../../plugins/easing/jquery.easing-1.3.pack.js"></script> 
<script type="text/javascript" src="../../themes/kboot/scripts/less-1.5.0.min.js"></script> 
<script type="text/javascript" src="../scripts/kradSampleApp.js"></script> 

<!-- The template to display files available for upload --> 
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
       
        <td>
            <p class="name text-muted"><em>{%=file.name%}</em></p>
			
			<!-- <small class="text-muted"><p class="size">Processing...</p></small>-->
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
            <strong class="error text-danger"></strong>
        </td>
        <td>
           
        </td>  <td>
           
        </td>  <td>
           
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary btn-xs start" disabled>
            
                    <span>Upload</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-default btn-xs cancel">
                
                   <span class="icon-trash"></span>
                    <span class="sr-only">Delete</span>
                </button>
            {% } %}
			
			
			
        </td>
    </tr>
{% } %}
</script> 
<!-- The template to display files available for download --> 
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
				
				<!-- <small class="size text-muted">{%=o.formatFileSize(file.size)%}</small>-->
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
           File Details 1
        </td> <td>File Details 2
           
        </td> <td>File Details 3
           
        </td>
        <td>
		
		
			    <a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown">Details <b class="caret"></b></a>
				
				
				
				
				
				
				
				
			
			
			
            {% if (file.deleteUrl) { %}
                <button class="btn btn-default btn-xs delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <span class="icon-trash"></span>
                    <span class="sr-only">Delete</span>
                </button>
               <!-- <input type="checkbox" name="delete" value="1" class="toggle">-->
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script> 
<script src="../../plugins/batch-file-upload/js/jquery.1.11.0.js"></script> 
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included --> 
<script src="../../plugins/batch-file-upload/js/vendor/jquery.ui.widget.js"></script> 
<!-- The Templates plugin is included to render the upload/download listings --> 
<script src="../../plugins/batch-file-upload/js/tmpl.min.js"></script> 


<!-- The Load Image plugin is included for the preview images and image resizing functionality --> 

<script src="../../plugins/batch-file-upload/js/load-image.min.js"></script> 



<!-- The Iframe Transport is required for browsers without support for XHR file uploads --> 
<script src="../../plugins/batch-file-upload/js/jquery.iframe-transport.js"></script> 
<!-- The basic File Upload plugin --> 
<script src="../../plugins/batch-file-upload/js/jquery.fileupload.js"></script> 
<!-- The File Upload processing plugin --> 
<script src="../../plugins/batch-file-upload/js/jquery.fileupload-process.js"></script> 
<!-- The File Upload image preview & resize plugin --> 
<script src="../../plugins/batch-file-upload/js/jquery.fileupload-image.js"></script> 
<!-- The File Upload audio preview plugin --> 
<script src="../../plugins/batch-file-upload/js/jquery.fileupload-audio.js"></script> 
<!-- The File Upload video preview plugin --> 
<script src="../../plugins/batch-file-upload/js/jquery.fileupload-video.js"></script> 
<!-- The File Upload validation plugin --> 
<script src="../../plugins/batch-file-upload/js/jquery.fileupload-validate.js"></script> 
<!-- The File Upload user interface plugin --> 
<script src="../../plugins/batch-file-upload/js/jquery.fileupload-ui.js"></script> 
<!-- The main application script --> 
<script src="../../plugins/batch-file-upload/js/main.js"></script>
</body>
</html>
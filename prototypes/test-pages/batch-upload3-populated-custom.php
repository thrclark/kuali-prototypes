<?php
$section = 'asdf';
$page = 'asdf';
?>
<!DOCTYPE HTML>

<html lang="en" >
<head >
<meta charset="UTF-8" >
<title >Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>

<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<linkhref="../../plugins/batch-file-upload/css/jquery.fileupload.css" rel="stylesheet" ><linkhref="../../plugins/batch-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" >
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript >
<linkhref="../../plugins/batch-file-upload/css/jquery.fileupload-noscript.css" rel="stylesheet" >
</noscript>
<noscript >
<linkhref="../../plugins/batch-file-upload/css/jquery.fileupload-ui-noscript.css" rel="stylesheet" >
</noscript>
<style >
.uif-dropzone {
	display: none;
}
.uif-multifile:hover + .uif-dropzone {
	display: block;
	background: #fff;
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	opacity: .8;
	min-height: 500px;
}
.uif-multifile:hover + .uif-dropzone:after {
	width: 100%;
	height: 100%;
	position: absolute;
	text-align: center;
	font-family: 'krad-icons';
	font-size: 32px;
 color:# 666;
	padding-top: 30px;
	content: "\e735  Drop Files Here";
}
.uif-uploading {
	display: block;
	background: #fff;
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	opacity: 1;
	border-style: solid;
	border-width: 1px;
	border-color: #ccc;
	padding-left: 80px;
	padding-right: 80px;
	padding-top: 60px;
}
.uif-uploading .progress {
	height: 20px;
	margin-bottom: 20px;
}
.uif-uploading .alert {
	margin-bottom: 20px;
}
</style>
</head><body >
<form  action="http://jquery-file-upload.appspot.com" method="POST" enctype="multipart/form-data">
    
    <!-- VIEW -->
    <div  class="clearfix uif-formView" data-role="View"> <!-- BREADCRUMBS --> 
        <!-- VIEW HEADER --> 
        
        <!-- VIEW CONTENT -->
        <div  class="uif-viewContentWrapper container">
            <main  class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="LabsProposal">
                <div class="uif-header-inner" >
                    <h2  class="uif-headerText"> <span class="uif-headerText-span" >Multiple File Upload </span> </h2>
                    <div  class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                        <button type="button" class="btn btn-default btn-xs pull-right"  data-toggle="modal" data-target="#modal-add-personnel1"><span class="icon-plus"  aria-hidden="true"></span> Add Files</button>
                    </div>
                </div>
                <div class="" style="position: relative;">  <table class="table table-condensed uif-hasAddLine uif-multifile uif-has-actions">
                        <thead >
                            <tr  role="row">
                                <th colspan="1" rowspan="1" class="sorting"  scope="col" aria-controls="u16c1rlc" aria-label="
 Field 1 : activate to sort column ascending" role="columnheader" tabindex="0"> <label  class="clearfix infoline"> File Name</label></th>
                                <th colspan="1" rowspan="1" class="sorting"  scope="col" aria-controls="u16c1rlc" aria-label="
 Field 2 : activate to sort column ascending" role="columnheader" tabindex="0"> <label  class="clearfix infoline"> Detail 1</label></th>
                                <th rowspan="1" class="sorting"  scope="col" aria-controls="u16c1rlc" aria-label="
 Field 2 : activate to sort column ascending" role="columnheader" tabindex="0">Detail 2</th>
                                <th rowspan="1" class="sorting"  scope="col" aria-controls="u16c1rlc" aria-label="
 Field 2 : activate to sort column ascending" role="columnheader" tabindex="0">Detail 3</th>
                                <th colspan="1" rowspan="1" class="uif-collection-column-action sorting_disabled"  scope="col" aria-label="
 Actions " role="columnheader"> <label  class="clearfix infoline"> Actions </label></th>
                            </tr>
                        </thead>
                        <tbody  aria-live="polite" aria-relevant="all" role="alert" style="display:">
                            <tr>
                                <td><a href="#">file01.pdf</a></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><button  class="btn btn-default btn-xs uif-action"> Delete </button></td>
                            </tr>
                            <tr>
                                <td><a href="#">file02.pdf</a></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><button  class="btn btn-default btn-xs uif-action"> Delete </button></td>
                            </tr>
                            <tr>
                                <td><a href="#">file03.pdf</a></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><button  class="btn btn-default btn-xs uif-action"> Delete </button></td>
                            </tr>
                            <tr>
                                <td><a href="#">file04.pdf</a></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><button  class="btn btn-default btn-xs uif-action"> Delete </button></td>
                            </tr>
                            <tr>
                                <td><a href="#">file05.pdf</a></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><button  class="btn btn-default btn-xs uif-action"> Delete </button></td>
                            </tr>
                            <tr>
                                <td><a href="#">file06.pdf</a></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><div  class="uif-inputField" data-parent="u1vk4z6e" data-role="InputField">
                                        <input  type="text" name="input" value="" class="form-control input-sm uif-textControl" data-role="Control" >
                                    </div></td>
                                <td><button  class="btn btn-default btn-xs uif-action"> Delete </button></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="uif-dropzone" style=""> </div>
                    
                </div>
            </main>
        </div>
        <!-- VIEW FOOTER --> 
        
        <!-- DIALOGS/Placeholders -->
        <div > </div>
    </div>
</form>
<script src="../../plugins/jquery/jquery-1.8.3.js" type="text/javascript" ></script> 
<script src="../../plugins/validate/jquery.validate.js" type="text/javascript" ></script> 
<script src="../../plugins/jqueryUI/jquery-ui-1.9.2.js" type="text/javascript" ></script> 
<script src="../../plugins/datatables/jquery.dataTables.js" type="text/javascript" ></script> 
<script src="../../themes/bootstrap/scripts/bootstrap.js" type="text/javascript" ></script> 
<script src="../../plugins/scrollto/jquery.scrollTo-1.4.6.js" type="text/javascript" ></script> 
<script src="../../plugins/jqform/jquery.form-3.31.0.js" type="text/javascript" ></script> 
<script src="../../plugins/globalize/globalize.js" type="text/javascript" ></script> 
<script src="../../plugins/menu/krad.navigationMenu.js" type="text/javascript" ></script> 
<script src="../../plugins/menu/krad.tabMenu.js" type="text/javascript" ></script> 
<script src="../../plugins/jgrowl/jquery.jgrowl.js" type="text/javascript" ></script> 
<script src="../../plugins/textpopout/krad.textareaPopout.js" type="text/javascript" ></script> 
<script src="../../plugins/validate/additional_validations.js" type="text/javascript" ></script> 
<script src="../../plugins/cookie/jquery.cookie.js" type="text/javascript" ></script> 
<script src="../../plugins/watermark/jquery.watermark.js" type="text/javascript" ></script> 
<script src="../../plugins/countdown/jquery.countdown.js" type="text/javascript" ></script> 
<script src="../../plugins/blockUI/jquery.blockUI.js" type="text/javascript" ></script> 
<script src="../../plugins/color/jquery.color.js" type="text/javascript" ></script> 
<script src="../../plugins/json/jquery.json-2.2.js" type="text/javascript" ></script> 
<script src="../../plugins/datatables/jquery.dataTables.rowGrouping.js" type="text/javascript" ></script> 
<script src="../../plugins/datatables/TableTools.js" type="text/javascript" ></script> 
<script src="../../plugins/datatables/ZeroClipboard.js" type="text/javascript" ></script> 
<script src="../../plugins/jstree/jquery.jstree.js" type="text/javascript" ></script> 
<script src="../../plugins/jqueryUI/jquery.ui.autocomplete.html.js" type="text/javascript" ></script> 
<script src="../../plugins/fancybox/jquery.fancybox.js" type="text/javascript" ></script> 
<script src="../../plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript" ></script> 
<script src="../../plugins/prettify/prettify.js" type="text/javascript" ></script> 
<script src="../../plugins/easydrag/jquery.easydrag.js" type="text/javascript" ></script> 
<script src="../../plugins/tooltip/jquery.bubblepopup.v2.3.1.js" type="text/javascript" ></script> 
<script src="../../krad/scripts/krad.variables.js" type="text/javascript" ></script> 
<script src="../../krad/scripts/krad.utility.js" type="text/javascript" ></script> 
<!-- --> 
<script src="../../krad/scripts/krad.request.js" type="text/javascript" ></script> 
<script src="../../krad/scripts/krad.response.js" type="text/javascript" ></script> 
<script src="../../krad/scripts/krad.actions.js" type="text/javascript" ></script> 
<script src="../../krad/scripts/krad.dirty.js" type="text/javascript" ></script> 
<script src="../../krad/scripts/krad.lookup.js" type="text/javascript" ></script> 
<script src="../../krad/scripts/krad.message.js" type="text/javascript" ></script> 
<script src="../../krad/scripts/krad.session.js" type="text/javascript" ></script> 
<script src="../../krad/scripts/krad.url.js" type="text/javascript" ></script> 
<script src="../../krad/scripts/krad.validate.js" type="text/javascript" ></script> 
<script src="../../krad/scripts/krad.widget.js" type="text/javascript" ></script> 
<script src="../../plugins/easing/jquery.easing-1.3.pack.js" type="text/javascript" ></script> 
<script src="../../themes/kboot/scripts/less-1.5.0.min.js" type="text/javascript" ></script> 
<script src="../scripts/kradSampleApp.js" type="text/javascript" ></script>
</body>
</html>
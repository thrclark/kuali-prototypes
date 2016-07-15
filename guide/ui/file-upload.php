<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'forms';
$child_name = 'Forms';
$subchild_section = 'file-upload';
$subchild_name = 'File Upload';
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex,nofollow" />
    <title><?php echo $subchild_name ?> - <?php echo $child_name ?> - <?php echo $nav_name ?> - Kuali Design Guide</title>

    <?php include ('../includes/header-styles.php') ?>
</head>
<body>
    <?php include ('../includes/guide-header.php') ?>
    <?php include ('../includes/section-header.php') ?>
    <?php include ('../includes/breadcrumbs.php') ?>

    <main id="content">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-3">
                    <nav class="page-subnav tabs">
                        <ul>
                            <li class="tab"><a href="#overview">Overview</a></li>
                            <li class="tab"><a href="#usage">Desktop Usage</a></li>
                            <!--<li class="tab"><a href="#mobile">Responsive Usage</a></li>-->
                            <li class="tab"><a href="#demos">Demos</a></li>
                            <li class="tab"><a href="#accessibility">Accessibility Considerations</a></li>
                            <li class="tab"><a href="#keyboard">Keyboard Shortcuts</a></li>
                            <li class="tab"><a href="#notes">Research &amp; Discussion</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <h1><?php echo $subchild_name ?></h1>

                    <div class="section" id="overview" tabindex="-1">
                        <h2>Overview</h2>
                        <p>The Batch File Upload component allows users to upload multiple files of various document types to a web form. This component would be used in situations where a user is expected to upload multiple files to a web form. Rather than uploading each file individually, this component will allow the user to select multiple files and upload all with a single action. This feature will be particularly useful to admin data screens, but should have universal appeal to all types of users.</p>
						<p>Prototype file viewable on our <a href="https://ux.kuali.org/krad-dev/prototypes/test-pages/batch-upload-4.php">test pages site</a>.</p>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Usage</h2>
                        <h3>Interaction/Behavior of component</h3>
                        <figure>
                        	<img src="../img/file-upload.png" width="100%" alt="Example of a Batch File upload with two files shown as uploaded">
                            <figcaption>Example of a Batch File upload</figcaption>
                        </figure>
                        <p>This component will have the following user interaction points:</p>
                        <ul>
							<li>Select local files for inclusion in a batch upload process. This can happen one of two ways:</li>
								<li>Using the operating system file browser to select local files.</li>
								<li>Drag and drop local files onto a 'target area' of the component.</li>
							<li>Execute a batch upload of all selected files with a single action.</li>                         
							<li>View a listing of uploaded files.</li>
							<li>Add and edit metadata associated with each individual file (e.g. add comments about a particular file, specify what type of document, etc...).</li>
							<li>Download previously uploaded files.</li>
							<li>Remove files that have previously been uploaded</li>
                       	</ul>
                        <h3>When to use this component</h3>
                        <p>When to use this component</p>
                        <h3>Problem being solved</h3>
                        <p>On occasion, users are expected to upload multiple files to a web form. Using the standard file input field (<code>&lt;input type="file"&gt;</code>) only allows the user to upload one file at a time. The Batch File Upload component will streamline the process of uploading multiple files to a web form.</p>
                    </div>
                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <p>This component relies on the <a href="https://github.com/blueimp/jQuery-File-Upload#jquery-file-upload-plugin">jQuery Multiple File Upload plugin</a>, which has been approved by Kuali.</p>
                    	<h3>HTML</h3>
                        <p>The following is basic markup for the above example.</p>
                        <pre class="language-markup"><code class="language-markup">&lt;form action="#" method="post" enctype="multipart/form-data"&gt;
    &lt;div class="container"&gt;
        &lt;div class="clearfix"&gt;
            &lt;div&gt;
                &lt;h1&gt;Multiple file upload example&lt;/h1&gt;
            &lt;/div&gt;
        &lt;/div&gt;
         
        &lt;table id="file_list" role="presentation" class="table table-condensed" aria-live="polite" tabindex="-1"&gt;
            &lt;caption&gt;This tables lists all uploaded files, their file size, and available actions.&lt;/caption&gt;
            &lt;thead&gt;
                &lt;tr class="active"&gt;
                    &lt;th scope="col"&gt;Filename&lt;/th&gt;
                    &lt;th scope="col"&gt;Size&lt;/th&gt;
                    &lt;th scope="col"&gt;Title&lt;/th&gt;
                    &lt;th scope="col"&gt;Details&lt;/th&gt;
                    &lt;th scope="col"&gt;Actions&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody id="files"&gt;&lt;/tbody&gt;
            &lt;tfoot&gt;
                &lt;tr class="active"&gt;
                    &lt;td colspan="3"&gt;
                        &lt;span id="file_totals" tabindex="0"&gt;&lt;/span&gt;
                    &lt;/td&gt;
                    &lt;td colspan="2"&gt;
                        &lt;span class="btn btn-primary btn-sm fileinput-button pull-right" role="button" tabindex="0" onclick="show_file_list_click()" onKeyUp="show_file_list_keyup()" aria-pressed="false"&gt;
                            &lt;i class="glyphicon glyphicon-plus"&gt;&lt;/i&gt;
                            &lt;span&gt;Select files...&lt;/span&gt;
                        &lt;/span&gt;
                        &lt;input id="fileupload" type="file" name="files[]" multiple class="fade" /&gt;
                    &lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tfoot&gt;
        &lt;/table&gt;
         
        &lt;div class="uif-drag-drop-area" id="uif-mfu"&gt;
            &lt;p&gt;Drop files here&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
					<h3>CSS</h3>
                    <p>Stylesheet dependencies:</p>
                    <ul>
						<li>Bootstrap 3+</li>
						<li>jquery.fileupload.css</li>
                    </ul>
					<p>There are a few more custom CSS rules that we use, which will eventually go into the master CSS file.</p>
                    <pre class="language-css"><code class="language-css">.uif-drag-drop-area {
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
}</code></pre>
					<h3>JavaScript</h3>
                    <p>JavaScript file dependencies:</p>
                    <ul>
						<li>jQuery 1.7.2+</li>
						<li>Bootstrap 3+</li>
						<li>jquery.ui.widget.js</li>
						<li>jquery.iframe-transport.js</li>
						<li>jquery.fileupload.js</li>
					</ul>
					<p>Additionally, specific script is required on the page-level to initialize the elements:</p>
                    <pre class="language-javascript"><code class="html language-javascript">function show_file_list_click(event) {
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
                $('#files:last').append('&lt;tr scole="row" class="template-download"&gt;&lt;td&gt;&lt;p class="name" id="file_' + file.name + '"&gt;' + file.name + '&lt;/p&gt;&lt;/td&gt;&lt;td&gt;&lt;p class="size" aria-labelledby="file_' + file.name + '"&gt;' + file.size + ' bytes&lt;/p&gt;&lt;/td&gt;&lt;td&gt;&lt;label for="id1_' + file.name + '" class="sr-only" aria-labelledby="file_' + file.name + '"&gt;Title&lt;/label&gt;&lt;input type="text" class="form-control input-sm" name="title1_' + file.name + '" id="id1_' + file.name + '" /&gt;&lt;/td&gt;&lt;td&gt;&lt;label for="id2_' + file.name + '" class="sr-only" aria-labelledby="file_' + file.name + '"&gt;Details&lt;/label&gt;&lt;textarea class="form-control input-sm" name="title2_' + file.name + '" id="id2_' + file.name + '" /&gt;&lt;/td&gt;&lt;td&gt;&lt;button type="button" class="btn btn-sm btn-danger" data-type="' + file.deleteType + '" data-url="' + file.deleteUrl + '" aria-labelledby="file_' + file.name + '"&gt;Delete&lt;/button&gt;&lt;/td&gt;&lt;/tr&gt;');
            });
            // Update totals and announce
            $('#file_totals').html( $('#files tr').length + ' uploaded file(s)');
            // Focus on the table to read results
            $('#file_list').focus();
        }
    }).prop('disabled', !$.support.fileInput).parent().addClass($.support.fileInput ? undefined : 'disabled');
});</code></pre>
					<p><i>Note: This implementation offers just two meta data fields (title and details, respectively), but if more are desired, this script would need to be customized. It might be wise to implement this dynamically based on data-attributes of the table or something. Just an idea.</i></p>
                    <h3>JSFiddle</h3>
                    <p>View an example of this on the <a href="http://jsfiddle.net/clrux/9f8b1Lyt/">JSFiddle site</a></p>
                    </div>
                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility Considerations</h2>
                        <h3>Required Level of Compliance</h3>
                        <h4>In order to meet WCAG 2.0 guidelines, these are some considerations that may apply to this component:</h4>
                        <table>
                        	<th>Guideline</th>
                            <th>Definition</th>
                            <tr>
                            	<td><a href="http://www.w3.org/TR/WCAG10/wai-pageauth.html#tech-avoid-table-for-layout">5.3</a></td>
                                <td>Do not use tables for layout unless the table makes sense when linearized. Otherwise, if the table does not make sense, provide an alternative equivalent (which may be a linearized version).</td>
                            </tr>
                            <tr>
                            	<td><a href="http://www.w3.org/TR/WCAG10/wai-pageauth.html#tech-table-layout">5.4</a></td>
                                <td>If a table is used for layout, do not use any structural markup for the purpose of visual formatting.</td>
                            </tr>
                            <tr>
                            	<td><a href="http://www.w3.org/TR/WCAG10/wai-pageauth.html#tech-keyboard-operable-scripts">6.4</a></td>
                                <td>For scripts and applets, ensure that event handlers are input device-independent.</td>
                            </tr>
                            <tr>
                            	<td><a href="http://www.w3.org/TR/WCAG10/wai-pageauth.html#tech-directly-accessible">8.1</a></td>
                                <td>Make programmatic elements such as scripts and applets directly accessible or compatible with assistive technologies [Priority 1 if functionality is important and not presented elsewhere, otherwise Priority 2.]</td>
                            </tr>
                            <tr>
                            	<td><a href="http://www.w3.org/TR/WCAG10/wai-pageauth.html#tech-keyboard-operable">9.2</a></td>
                                <td>Ensure that any element that has its own interface can be operated in a device-independent manner.</td>
                            </tr>
                            <tr>
                            	<td><a href="http://www.w3.org/TR/WCAG10/wai-pageauth.html#tech-device-independent-events">9.3</a></td>
                                <td>For scripts, specify logical event handlers rather than device-dependent event handlers.</td>
                            </tr>
                            <tr>
                            	<td><a href="http://www.w3.org/TR/WCAG10/wai-pageauth.html#tech-unassociated-labels">10.2</a></td>
                                <td>Until user agents support explicit associations between labels and form controls, for all form controls with implicitly associated labels, ensure that the label is properly positioned.</td>
                            </tr>
                            <tr>
                            	<td><a href="http://www.w3.org/TR/WCAG10/wai-pageauth.html#tech-associate-labels">12.4</a></td>
                                <td>Associate labels explicitly with their controls.</td>
                            </tr>
                     	</table>
                        <h3>Behavior without script</h3>
                        <p>If javascript is turned off, this component should degrade to use the standard file input form control by default (<code>&lt;input type="file"&gt;</code>). Using the attribute 'multiple' will allow the user to select more than one file at a time for the single file field.</p>
                    	<h3>Accessibility Resources</h3>
						<p>View the accessibility report of the JQuery File Upload Plugin <a href="http://wave.webaim.org/report#/http%3A%2F%2Fblueimp.github.io%2FjQuery-File-Upload%2F">here</a>.</p>
                    </div>
                    <div class="section" id="keyboard" tabindex="-1">
                        <h2>Keyboard Shortcuts</h2>
                        <p>There are no special shortcuts, however the <code>&lt;span&gt;</code> button has a JavaScript listener for clicks and keypresses for accessibility.</p>
                    </div>
                    <div class="section" id="notes" tabindex="-1">
                        <h2>Research and Discussion</h2>
                        <p>Includes usability research findings and recommendations, information from the UIM discussion page, links, chapters, articles, etc that supports the design decision.</p>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <?php include ('../includes/guide-footer.php') ?>
    <?php include ('../includes/footer-scripts.php') ?>
</body>
</html>
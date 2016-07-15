<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'forms';
$child_name = 'Forms';
$subchild_section = 'text-input';
$subchild_name = 'Text Input';
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
                            <li class="tab"><a href="#mobile">Responsive Usage</a></li>
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
                        <p>Input form fields such as text let users enter a single line of characters. HTML5 offers <code>email</code> and <code>tel</code> as additional options, which aid mobile devices when loading software keyboards. For example, <code>input type="email"</code> will show a software keyboard dedicated to quick email address entry, while <code>input type="tel"</code> will bring up a numerical keyboard for quick digit entry.</p>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Desktop Usage</h2>
                        <p>Input form fields's should be used for:</p>
                    	<ul>
                        	<li>Free-form text that's less than 250 characters long such as email addresses, phone numbers, names and other shorter phrases or data</li>
                        </ul>
                        <p>Do <b>not</b> use for text more than 250 characters long or larger bodies of content and paragraphs</p>
                        <figure>
                        	<img src="../img/text-input.png" alt="An empty text input field">
                            <figcaption>An empty text input field</figcaption>
                        </figure>
                        <p>Spinners are another option for input form fields. <code>input type="number"</code> creates a Spinner that give users the option of entering a number using up and down to change the number value. </p>
                        <figure>
                        	<img src="../img/spinner.png" alt="A Spinner starting at the number 0">
                            <figcaption>A Spinner</figcaption>
                        </figure>
                        <p>Bootstrap offers the option to place "add-on" buttons into fields. These come in useful for adding search or lookup elements, or for providing data validation (as <a href="http://getbootstrap.com/css/#forms-controls">Bootstrap's example</a> suggests).</p>
                    	<figure>
                            <img src="../img/text-input-addon.png" alt="An empty text input field with a search button">
                            <figcaption>An empty text input field with a search button</figcaption>
                        </figure>
                    </div>
                    <div class="section" id="mobile" tabindex="-1">
                        <h2>Responsive Usage</h2>
                        <p>The same application as used in Desktop Usage applies here. Additional CSS rules will adjust the view based on resolution.<br>Note there is no "hover" functionality on touch devices. It's always best practice to use the same functionality for hover and focus. This aids assistive technology as well as touch-enabled technology.</p>
                    </div>
                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <h3>Example</h3>	
                        <!--live code example-->	
                        <label for="first-name" class="form-label">First name:</label>
						<input type="text" id="first-name" class="form-control" />
                        <!--end-->
                        <h3>HTML</h3>
                        <pre class="language-markup"><code class="language-markup">&lt;label for="first-name" class="form-label"&gt;First name:&lt;/label&gt;
&lt;input type="text" id="first-name" class="form-control" /&gt;</code></pre>
<pre class="language-markup"><code class="language-markup">&lt;label for="email-address" class="form-label"&gt;Email address:&lt;/label&gt;
&lt;input type="email" id="email-address" class="form-control" /&gt;</code></pre>
<pre class="language-markup"><code class="language-markup">&lt;label for="telephone" class="form-label"&gt;Phone number:&lt;/label&gt;
&lt;input type="tel" id="telephone" class="form-control" /&gt;</code></pre>
						<!--live code example-->
                        <h3>Example</h3>
                        <label for="spinner" class="form-label">Spinner:</label>
						<input type="number" id="spinner" class="form-control" />
                        <!--end-->
                        <h3>HTML</h3>
						<pre class="language-markup"><code class="language-markup">&lt;label for="spinner" class="form-label"&gt;Spinner:&lt;/label&gt;
&lt;input type="number" id="spinner" class="form-control" /&gt;</code></pre>
						<h3>Add-On Example</h3>
                        <!--live code example-->                      
                        <div class="form-group has-feedback">
                            <label for="sponsor" class="form-label col-sm-2">Sponsor:</label>
                            <div class="col-sm-10">
                                <input type="text" id="sponsor" class="form-control"/>
                                <button type="button" class="btn btn-xs btn-default glyphicon glyphicon-search form-control-feedback" />
                            </div>
                        </div>
                        <!--end-->
                        <h3>HTML</h3>
                        <pre class="language-markup"><code class="language-markup">&lt;div class="form-group has-feedback"&gt;
	&lt;label for="sponsor" class="form-label col-sm-2"&gt;Sponsor:&lt;/label&gt;
	&lt;div class="col-sm-10"&gt;
    	&lt;input type="text" id="sponsor" class="form-control" /&gt;
        &lt;button type="button" class="btn btn-xs btn-default glyphicon glyphicon-search form-control-feedback"&gt;&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility Considerations</h2>
                        <h3>Required Level of Compliance</h3>
                        <h4>WCAG Guideline 2.1</h4>
                        <table>
                        	<th>Guideline</th>
                            <th>Definition</th>
                            <tr>
                            	<td>2.1</td>
                                <td>All functionality of the content is operable through a keyboard interface without requiring specific timings for individual keystrokes, except where the underlying function requires input that depends on the path of the user's movement and not just the endpoints.</td>
                            </tr>
                            <tr>
                            	<td>2.1.2</td>
                                <td>If keyboard focus can be moved to a component of the page using a keyboard interface, then focus can be moved away from that component using only a keyboard interface, and, if it requires more than unmodified arrow or tab keys or other standard exit methods, the user is advised of the method for moving focus away.</td>
                            </tr>
                            <tr>
                            	<td>2.4.3</td>
                                <td>If a web page can be navigated sequentially and the navigation sequences affect meaning or operation, focusable components receive focus in an order that preserves meaning and operability.</td>
                            </tr>
                            <tr>
                            	<td>3.3.2</td>
                                <td>Labels or instructions are provided when content requires user input.</td>
                            </tr>
                            <tr>
                            	<td>4.1</td>
                                <td>Maximize compatibility with current and future user agents, including assistive technologies.</td>
                            </tr>
                     	</table>
                    </div>
                    <div class="section" id="keyboard" tabindex="-1">
                        <h2>Keyboard Shortcuts</h2>
						<p>There are no explicit shortcuts, however full keyboard navigability must be maintained for all form fields. This includes the following:</p>
                    	<ul>
                        	<li>Able to Tab into and out of any form field; the field itself is identified by its accompany <code>label</code>.</li>
                            <li>Spacebar/Enter/Return activates form fields and elements, such as lookup buttons, combo boxes, checkboxes, and radio buttons.</li>
                            <li>When keyboard focus is not on a specific form field but within the <code>form</code>, pressing Enter/Return will perform the primary action for the form, be it submit, save, etc.</li>
                            <li>When activating a lookup or datepicker, returning the selected value will also send focus back to the initial form field for flow and continuation.</li>
                        </ul>
                    
                    </div>
                    <div class="section" id="notes" tabindex="-1">
                        <h2>Research and Discussion</h2>
                        <p>None at this time.</p>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <?php include ('../includes/guide-footer.php') ?>
    <?php include ('../includes/footer-scripts.php') ?>
</body>
</html>
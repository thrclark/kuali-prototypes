<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'forms';
$child_name = 'Forms';
$subchild_section = 'combo-dropdown-select';
$subchild_name = 'Combo/Select/Dropdown';
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
                        <p>Select (also know as comboboxes or pulldowns) menus provide a list of options that may be selected. The default state allows a single option to be selected at any given time, but these elements offer the option to select multiple items at once using the Ctrl + click.</p>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Desktop Usage</h2>
                        <p>Select menus should be used:</p>
                    	<ul>
                        	<li>When choosing a single option from a list of many options.</li>
                            <li>When selecting several options from a list of many options by using <code>multiple="true"</code> (though, checkboxes work better for this).</li>
                        </ul>
                        <p>Do <b>not</b> use for navigation - select menus are not great for options with very long values/labels.</p>
                        <figure>
                        	<img src="../img/select1.png" alt="Select menu that allows a single choice">
                            <figcaption>Select menu that allows a single choice</figcaption>
                        </figure>
                        <figure>                        
                        	<img src="../img/select2.png" alt="Select menu that allows multiple choices">
                            <figcaption>Select menu that allows multiple choices</figcaption>
                        </figure>
                        <h3>Best Practices</h3>
                        <p>Control the maximum width of your select menus so the visual arrow to the far right, isn't too far to the right. On larger, wider monitors it often goes unseen and causes usability issues.</p>
                    </div>
                    <div class="section" id="mobile" tabindex="-1">
                        <h2>Responsive Usage</h2>
                        <p>The same application as used in Desktop Usage applies here. Additional CSS rules will adjust the view based on resolution.<br><br>Note there is no "hover" functionality on touch devices. It's always best practice to use the same functionality for hover and focus. This aids assistive technology as well as touch-enabled technology.</p>
                    </div>
                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <h3>Example</h3>
                        <!--code example-->
                        <label for="option1" class="form-label">Select one:</label>
                        <select class="form-control" id="options1">
                            <option value="value">Option</option>
                            <option value="value">Option</option>
                            <option value="value">Option</option>
                        </select>
                        <!--end-->
                        <h3>HTML</h3>
                        <pre class="language-markup"><code class="language-markup">&lt;label for="option1" class="form-label"&gt;Select one:&lt;/label&gt;
&lt;select class="form-control" id="options1"&gt;
    &lt;option value="value"&gt;Option&lt;/option&gt;
    &lt;option value="value"&gt;Option&lt;/option&gt;
    &lt;option value="value"&gt;Option&lt;/option&gt;
&lt;/select&gt;</code></pre>
						<h3>Example</h3>
                        <!--code example-->
                        <label for="option2" class="form-label">Select many:</label>
                        <select class="form-control" id="options2" multiple="true">
                            <option value="value">Option</option>
                            <option value="value">Option</option>
                            <option value="value">Option</option>
                            <option value="value">Option</option>
                            <option value="value">Option</option>
                            <option value="value">Option</option>
                            <option value="value">Option</option>
                            <option value="value">Option</option>
                            <option value="value">Option</option>
                        </select>
                        <!--end-->
                        <h3>HTML</h3>
                        <pre class="language-markup"><code class="language-markup">&lt;label for="option2" class="form-label"&gt;Select many:&lt;/label&gt;
&lt;select class="form-control" id="options2" multiple="true"&gt;
    &lt;option value="value"&gt;Option&lt;/option&gt;
    &lt;option value="value"&gt;Option&lt;/option&gt;
    &lt;option value="value"&gt;Option&lt;/option&gt;
    &lt;option value="value"&gt;Option&lt;/option&gt;
    &lt;option value="value"&gt;Option&lt;/option&gt;
    &lt;option value="value"&gt;Option&lt;/option&gt;
    &lt;option value="value"&gt;Option&lt;/option&gt;
    &lt;option value="value"&gt;Option&lt;/option&gt;
    &lt;option value="value"&gt;Option&lt;/option&gt;
&lt;/select&gt;</code></pre>
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
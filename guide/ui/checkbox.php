<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'forms';
$child_name = 'Forms';
$subchild_section = 'checkbox';
$subchild_name = 'Checkbox';
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
                        <p>Not unlike <code>select</code> menus, checkbox input options allow users to choose from a bunch of predefined options using boolean values.</p>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Desktop Usage</h2>
                        <p>Checkboxes should be used:</p>
                    	<ul>
                        	<li>When choosing multiple options from a list of many options.</li>
                            <li>As a toggle, turning something on or off (i.e., "Remember me" or "Keep me logged in").</li>
                        </ul>
                        <p>Do <b>not</b> use checkboxes when only a single choice is allowed to be chosen</p>
                        <figure>
                        	<img src="../img/checkboxes2.png" alt="List of checkboxes with none selected">
                            <figcaption>List of checkboxes with none selected</figcaption>
                        </figure>
                        <figure>                       
                        	<img src="../img/checkboxes.png" alt="List of checkboxes with 3 selected">
                            <figcaption>List of checkboxes with 3 selected</figcaption>
                        </figure>
                    </div>
                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <h3>Example</h3>
                        <!--live code example-->
                        <fieldset>
                        <legend>Drinks:</legend>
                            <ul>
                                <li class="checkbox"><label for="c1" class="form-label"><input id="c1" type="checkbox" name="c1" value="water" /> Water</label></li>
                                <li class="checkbox"><label for="c2" class="form-label"><input id="c2" type="checkbox" name="c1" value="milk" /> Milk</label></li>
                                <li class="checkbox"><label for="c3" class="form-label"><input id="c3" type="checkbox" name="c1" value="beer" /> Beer</label></li>
                                <li class="checkbox"><label for="c4" class="form-label"><input id="c4" type="checkbox" name="c1" value="scotch" /> Scotch</label></li>
                                <li class="checkbox"><label for="c5" class="form-label"><input id="c5" type="checkbox" name="c1" value="soda" /> Soda</label></li>
                            </ul>
                        </fieldset>
                        <h3>HTML</h3>
                        <p>To create semantic and assistive technology friendly checkbox groups, envelop them in a <code>fieldset</code> using the legend as the overall group label. Use individual <code>label</code>'s to wrap the checkboxes making larger clickareas.</p>
                        <pre class="html language-markup"><code class="language-markup">&lt;fieldset&gt;
&lt;legend&gt;Drinks:&lt;/legend&gt;
    &lt;ul&gt;
        &lt;li class="checkbox"&gt;&lt;label for="c1" class="form-label"&gt;&lt;input id="c1" type="checkbox" name="c1" value="water" /&gt; Water&lt;/label&gt;&lt;/li&gt;
        &lt;li class="checkbox"&gt;&lt;label for="c2" class="form-label"&gt;&lt;input id="c2" type="checkbox" name="c1" value="milk" /&gt; Milk&lt;/label&gt;&lt;/li&gt;
        &lt;li class="checkbox"&gt;&lt;label for="c3" class="form-label"&gt;&lt;input id="c3" type="checkbox" name="c1" value="beer" /&gt; Beer&lt;/label&gt;&lt;/li&gt;
        &lt;li class="checkbox"&gt;&lt;label for="c4" class="form-label"&gt;&lt;input id="c4" type="checkbox" name="c1" value="scotch" /&gt; Scotch&lt;/label&gt;&lt;/li&gt;
        &lt;li class="checkbox"&gt;&lt;label for="c5" class="form-label"&gt;&lt;input id="c5" type="checkbox" name="c1" value="soda" /&gt; Soda&lt;/label&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/fieldset&gt;</code></pre>
                    </div>
                    <div class="section" id="mobile" tabindex="-1">
                        <h2>Responsive Usage</h2>
                        <p>The same application as used in Desktop Usage applies here. Additional CSS rules will adjust the view based on resolution.<br><br>Note there is no "hover" functionality on touch devices. It's always best practice to use the same functionality for hover and focus. This aids assistive technology as well as touch-enabled technology.</p>
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
<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'forms';
$child_name = 'Forms';
$subchild_section = 'radios';
$subchild_name = 'Radios';
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
                        <p>Not unlike select menus, radio input options allow users to choose a single option from a group of predefined options using boolean values.</p>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Desktop Usage</h2>
                        <p>Radio buttons should be used:</p>
                    	<ul>
                        	<li>When selecting a single option from a list of many options.</li>
							<li>Use as a toggle, turning something on or off. However, a checkbox may be better suited for this.</li>
                        </ul>
                        <p>Do <b>not</b> use when multiple choices are required from a list of choices.</p>
                        <figure>
                        	<img src="../img/radio1.png" alt="List of radio buttons with none selected">
                            <figcaption>List of radio buttons with none selected</figcaption>
                        </figure>
                        <figure>                        
                        	<img src="../img/radio2.png" alt="List of radio buttons with one selected">
                            <figcaption>List of radio buttons with one selected</figcaption>
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
                        <fieldset>
                            <legend>Favorite Scotch:</legend>
                            <ul>
                                <li class="radio"><label for="r1" class="form-label"><input id="r1" type="radio" name="r1" value="laphroaig" /> Laphroaig</label></li>
                                <li class="radio"><label for="r2" class="form-label"><input id="r2" type="radio" name="r1" value="ardbeg" /> Arbed</label></li>
                                <li class="radio"><label for="r3" class="form-label"><input id="r3" type="radio" name="r1" value="lagavulin" /> Lagavulin</label></li>
                                <li class="radio"><label for="r4" class="form-label"><input id="r4" type="radio" name="r1" value="octomore" /> Octomore</label></li>
                                <li class="radio"><label for="r5" class="form-label"><input id="r5" type="radio" name="r1" value="none" /> None, I don't like Scotch</label></li>
                            </ul>
                        </fieldset>
                        <p>To create semantic and assistive technology friendly radio groups, envelop them in a fieldset using the legend as the overall group label. Use individual label's to wrap the radio making larger clickareas.</p>
                    	<pre class="language-markup"><code class="html language-markup">&lt;fieldset&gt;
&lt;legend&gt;Favorite Scotch:&lt;/legend&gt;
	&lt;ul&gt;
        &lt;li class="radio"&gt;&lt;label for="r1" class="form-label"&gt;&lt;input id="r1" type="radio" name="r1" value="laphroaig" /&gt; Laphroaig&lt;/label&gt;&lt;/li&gt;
        &lt;li class="radio"&gt;&lt;label for="r2" class="form-label"&gt;&lt;input id="r2" type="radio" name="r1" value="ardbeg" /&gt; Arbed&lt;/label&gt;&lt;/li&gt;
        &lt;li class="radio"&gt;&lt;label for="r3" class="form-label"&gt;&lt;input id="r3" type="radio" name="r1" value="lagavulin" /&gt; Lagavulin&lt;/label&gt;&lt;/li&gt;
        &lt;li class="radio"&gt;&lt;label for="r4" class="form-label"&gt;&lt;input id="r4" type="radio" name="r1" value="octomore" /&gt; Octomore&lt;/label&gt;&lt;/li&gt;
        &lt;li class="radio"&gt;&lt;label for="r5" class="form-label"&gt;&lt;input id="r5" type="radio" name="r1" value="none" /&gt; None, I don't like Scotch&lt;/label&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/fieldset&gt;</code></pre>
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
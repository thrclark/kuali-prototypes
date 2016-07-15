<?php
/*
 * The following variables with EDITABLE are the only values that should need to be configured. 
 * Ensure the main section, child section, and page names are all applicable and correct.
 * If any of them aren't needed, simply remove their value. Keep the actual variable though.
 * The Confluence/Wiki page id can be found in the URL when editing a page. Copy and paste it.
 */

$page = 'index';                        // NO EDIT:  the homepage indicator
$nav_section = 'ui';                    // EDITABLE: main section id
$nav_name = 'UI Elements';              // EDITABLE: main section label
$child_section = 'buttons';             // EDITABLE: child section id
$child_name = 'Buttons';                // EDITABLE: child section name
$subchild_section = '';                 // EDITABLE: page id
$subchild_name = '';                    // EDITABLE: page name
$pageId = '338963064';                  // EDITABLE: Confluence/Wiki page id

/*
 * Don't edit anything below this line.
 */
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex,nofollow" />
    <title><?php echo $child_name ?> - <?php echo $nav_name ?> - Kuali Design Guide</title>

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
                            <li class="tab"><a href="#use">When to Use</a></li>
                            <li class="tab"><a href="#accessibility">Accessibility Considerations</a></li>
                            <li class="tab"><a href="#keyboard">Keyboard Shortcuts</a></li>
                            <li class="tab"><a href="#notes">Research &amp; Discussion</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9" id="main_content">
                    <h1><?php echo $child_name ?></h1>
                    <div id="process">
                        <?php
                        // require '/var/local/ux/restapi.php';
                        // $data = $test->getRestContent($pageId);
                        // echo $data['body']['value'];
                        ?>
                        <div class="section" id="overview" tabindex="-1">
                            <h2>Overview</h2>
                            <p>Buttons are a labeled form object that trigger a programmed response. In other words, buttons perform actions. Buttons do something.</p>

                            <h3>Variations</h3>
                            <p>Bootstrap offers several variations of buttons, including colors and sizes, and their disabled variants. Kuali uses the following patterns:</p>

                            <h4 id="default-state">Default (Active/Disabled)</h4>
                            <ul>
                                <li>Default size<br />
                                    <img src="../img/button-default-active.png" alt="Active default button" />
                                    <img src="../img/button-default-disabled.png" alt="Disabled default button" />
                                </li>
                                <li>Sm size<br />
                                    <img src="../img/button-sm-active.png" alt="Active small button" />
                                    <img src="../img/button-sm-disabled.png" alt="Disabled small button" />
                                </li>
                                <li>Xs size<br />
                                    <img src="../img/button-xs-active.png" alt="Active extra small button" />
                                    <img src="../img/button-xs-disabled.png" alt="Disabled extra small button" />
                                </li>
                            </ul>

                            <h4 id="primary-state">Primary (Active/Disabled)</h4>
                            <ul>
                                <li>Default size<br />
                                    <img src="../img/button-primary-active.png" alt="Active primary default button" />
                                    <img src="../img/button-primary-disabled.png" alt="Disabled primary default button" />
                                </li>
                                <li>Sm size<br />
                                    <img src="../img/button-primary-sm-active.png" alt="Active primary small button" />
                                    <img src="../img/button-primary-sm-disabled.png" alt="Disabled primary small button" />
                                </li>
                                <li>Xs size<br />
                                    <img src="../img/button-primary-xs-active.png" alt="Active primary extra small button" />
                                    <img src="../img/button-primary-xs-disabled.png" alt="Disabled primary extra small button" />
                                </li>
                            </ul>

                            <h4 id="icon-buttons">Icon Buttons</h4>
                            <p>When using icons alone, without accompanying labels, the Bootstrap <code>.tooltip</code> should be used. See the JSFiddle below for more information and a demo.</p>
                            <ul>
                                <li>Default size (active/disabled default, active/disabled primary, active/disabled icon only)<br />
                                    <img src="../img/icon-default-active.png" alt="Active default icon" />
                                    <img src="../img/icon-primary-active.png" alt="Active primary icon" />
                                    <img src="../img/icon-only-active.png" alt="Active icon only" />
                                </li>
                                <li>Sm size (active/disabled default, active/disabled primary, active/disabled icon only)<br />
                                    <img src="../img/icon-default-sm-active.png" alt="Active small default icon" />
                                    <img src="../img/icon-primary-sm-active.png" alt="Active small primary icon" />
                                    <img src="../img/icon-only-sm-active.png" alt="Active small icon only" />
                                </li>
                                <li>Xs size (active/disabled default, active/disabled primary, active/disabled icon only)<br />
                                    <img src="../img/icon-default-xs-active.png" alt="Active extra small default icon" />
                                    <img src="../img/icon-primary-xs-active.png" alt="Active extra small primary icon" />
                                    <img src="../img/icon-only-xs-active.png" alt="Active extra small icon only" />
                                </li>
                            </ul>

                            <h4 id="icon-text">Icons with text labels</h4>
                            <p>When using icons alongside text, just use a link and include the icon via <code>span</code> or <code>i</code>. Note, these are <em>not</em> buttons.</p>
                            <ul>
                                <li>
                                    <img src="../img/icon-text.png" alt="Icon with text label" />
                                </li>
                            </ul>
                        </div>

                        <div class="section" id="usage" tabindex="-1">
                            <h2>Desktop Usage</h2>
                            
                            <h3>A good rule of thumb...</h3>
                            <p>A good rule of thumb is, "buttons do something, links go somewhere".</p>
                            <ul>
                                <li>Buttons should be used to perform actions (i.e., submit forms, save information, edit or otherwise change information or some part of a page)</li>
                                <li>Buttons should not be used for navigational purposes</li>
                            </ul>

                            <h3>Placement and location</h3>
                            <p>When placing buttons, the primary action comes first followed by the secondary and then tertiary actions (i.e., close or cancel).</p>

                            <h3>Page</h3>
                            <p>The Kuali page view has document actions buttons centered at the bottom of the screen.</p>

                            <h3>Modals</h3>
                            <p>Modals have the buttons left-aligned in the .modal-footer bar at the bottom of the modal window.</p>
                        </div>

                        <div class="section" id="mobile" tabindex="-1">
                            <h2>Responsive Usage</h2>
                            <p>The majority of buttons work the same in desktop and mobile views, with the exception of single-button views. In a view where only a single action button is present (e.g., a "Save" button within a modal), that button should use the <code>.btn-block</code> class making it take up 100% of the container width.</p>
                        </div>

                        <div class="section" id="demos" tabindex="-1">
                            <h2>Demos</h2>
                            <h3>Default button</h3>
<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-default"&gt;Default button&lt;/button&gt;</code></pre>

                            <h3>Primary button</h3>
<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-primary"&gt;Primary button&lt;/button&gt;</code></pre>
                            
                            <h3>Icons and Icon buttons</h3>
                            <p>UXI has built a custom set of icon fonts for use within Kuali interfaces. They can be referenced the same way one would reference an icon in Bootstrap. Please note that icon buttons are the only buttons able to use the <code>.btn-link</code> (or equivalent) style.</p>

                            <h4>Icons (standalone)</h4>
<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;span class="sr-only"&gt;Delete&lt;/span&gt;&lt;span class="uif-icon uif-icon-trash"&gt;&lt;/span&gt;&lt;/button&gt;
&lt;button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;span class="sr-only"&gt;Delete&lt;/span&gt;&lt;span class="uif-icon uif-icon-trash"&gt;&lt;/span&gt;&lt;/button&gt;
&lt;button class="btn btn-icon" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;span class="sr-only"&gt;Delete&lt;/span&gt;&lt;span class="uif-icon uif-icon-trash"&gt;&lt;/span&gt;&lt;/button&gt;</code></pre>
                            <p>Note: We've changed the default <code>.btn-link</code> to <code>.btn-icon</code> and relegated it only for icon buttons. This is more semantic and these classnames should be changed across all stylesheets and references.</p>

                            <h4>Icons with text labels</h4>
<pre class="language-markup"><code class="language-markup">&lt;button class="btn btn-default"&gt;&lt;span class="uif-icon uif-icon-trash"&gt;&lt;/span&gt; Delete&lt;/button&gt;
&lt;button class="btn btn-primary"&gt;&lt;span class="uif-icon uif-icon-trash"&gt;&lt;/span&gt; Delete&lt;/button&gt;</code></pre>
<pre class="language-markup"><code class="language-markup">&lt;a href="#"&gt;&lt;span class="icon-trash"&gt;&lt;/span&gt; Delete&lt;/a&gt;</code></pre>
                            <p>Note: There is no button style for the "tertiary" icon button with complimentary text.</p>

                            <h4>Disabled buttons and icons</h4>
                            <p>Disabled (inactive and non-interactive) buttons may remain present on the screen since they are large enough and have contrast to make them distinguishable from their active counterparts. However, disabled icons alone or icons with text labels should not be shown. So, rather than having an icon that's inactive or non-interactive visible on the screen, simply <code>$.hide()</code> them from view. They're too small to really differentiate.</p>

                            <h3>Full icon list</h3>
                            <p>A full list of icon fonts can be found here: <a href="http://ux.kuali.org/guide/ui/iconography.php">http://ux.kuali.org/guide/ui/iconography.php</a></p>

                            <h3>JSFiddle examples</h3>
                            <p>Please see <a href="http://jsfiddle.net/clrux/SNPV7/">examples in use of all buttons</a> at this JSFiddle.</p>
                        </div>

                        <div class="section" id="use" tabindex="-1">
                            <h2>When to Use</h2>
                            <h3>Pattern use cases</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Use</th>
                                        <th>Scenario</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Launching a modal</td>
                                        <td>Buttons may be used to launch modals. An example might be a button that says "Edit".</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Saving/Submitting</td>
                                        <td>Since saving and submitting data is an action, a button may (and should) be used to perform these actions.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Closing/Canceling **</td>
                                        <td>** While links are the preferred method, a button may be used here so long as the button gets the <code>.btn-default</code> class.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td><td>Closing/Canceling using a button style other than <code>default</code></td><td>Close and Cancel links should never receive <code>.btn-primary</code>. They should only ever receive <code>.btn-default</code>. However, links are preferable.</td></tr><tr><td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Navigating from one page to another</td>
                                        <td>Buttons should <strong>not</strong> be used to navigate from one page to another. Bootstrap often demos the larger buttons as "call-to-action" links, but this is an incorrect use of a button. For this purpose use a graphic image (within a link).</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="section" id="accessibility" tabindex="-1">
                            <h2>Accessibility Considerations</h2>
                            <p>Buttons are understood by all assistive technology and by all browsers. Please keep in mind, however...</p>
                            <ul>
                                <li>The use of ARIA <code>role="button"</code> is not needed for buttons</li>
                                <li>If button functionality is needed, use a button. Don't change the default role of another element to act as a button</li>
                                <li>The button text will be announced by screen readers so be careful when naming buttons. For example, "View" means nothing out of context so you'd want to tell what the visitor might be going to view.</li>
                            </ul>

                            <h3>Using PUA icon fonts...</h3>
                            <ul>
                                <li>PUA stands for Private Use Area, and are a preset number of encodings reserved for use outside of the public realm of encoding. This allows icons to use unique character codes that, if aren't rendered, don't appear as something else that uses the same code.</li>
                                <li>In terms of accessibility, icon fonts that aren't loaded but that use a PUA code won't render and therefore won't be announced, thus eliminating potential confusion.</li>
                            </ul>

                            <h3>Accessibility Resources</h3>
                            <ul>
                                <li><a href="http://webaim.org/">http://webaim.org/</a></li>
                            </ul>
                        </div>

                        <div class="section" id="keyboard" tabindex="-1">
                            <h2>Keyboard Shortchuts</h2>
                            <h3>Enter/Return</h3>
                            <ul>
                                <li>Pressing Enter/Return on a <code>&lt;button&gt;</code> will activate the <code>&lt;button&gt;</code> as expected across the Web.</li>
                                <li>Pressing Enter/Return on a link will do the same.</li>
                            </ul>
                        </div>

                        <div class="section" id="notes" tabindex="-1">
                            <h2>Research &amp; Discussion</h2>
                            <p>None at this time.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php include ('../includes/guide-footer.php') ?>
    <?php include ('../includes/footer-scripts.php') ?>
</body>
</html>
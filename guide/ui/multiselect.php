<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'forms';
$child_name = 'Forms';
$subchild_section = 'multiselect';
$subchild_name = 'Multiselect';
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
                <div class="col-md-9" id="main_content">
                    <h1><?php echo $subchild_name ?></h1>
                    <div id="process">
                        <div class="section" id="overview" tabindex="-1">
                            <h2>Overview</h2>
                            <p>Standard HTML form elements use <code>&lt;select&gt;</code> to provide a list of options to users. Typically though, select elements only allow one choice. There is the option to add <code>multiple="true"</code> to the select element thereby allowing users to choose more than one option, however the usability for these mechanisms is low. Instead, we've build a plugin that converts the select menu options into checkbox items making it easy to visually see and make choices. This is done by replacing the standard HTML element (it's hidden from the screen but still accessible) and passing the custom markup choice-values to the hidden HTML element during form submission. This document provides requirements and recommendations for markup and styles, as well as accessibility information and considerations.</p>
                        </div>
                        <div class="section" id="usage" tabindex="-1">
                            <h2>Desktop Usage</h2>
                            <h3>Default select element</h3>
                            <figure>
                                <img src="../img/multiselect-01.png" alt="A normal select element, not being replaced." />
                                <figcaption>A normal select element, not being replaced</figcaption>
                            </figure>

                            <h3>Replaced multiselect element</h3>
                            <figure>
                                <img src="../img/multiselect-02.png" alt="A replaced select element" />
                                <figcaption>A replaced select element</figcaption>
                            </figure>

                            <h3>Replaced multiselect element with filter</h3>
                            <figure>
                                <img src="../img/multiselect-03.png" alt="A replaced multiselect element with filtering enabled" />
                                <figcaption>A replaced multiselect element with filtering enabled</figcaption>
                            </figure>

                            <h3>Quick summary of features</h3>
                            <ul>
                                <li>All select elements on the page are replaced on DOM ready via JavaScript which hides the default element in lieu of the replaced markup. This allows us to achieve both usable multiselect as well as complete styling.</li>
                                <li>In both multiselect and non-multiselect cases, the list of options are replaced with <code>&lt;li&gt;</code> along with <code>&lt;label&gt;</code>'s and <code>&lt;input type="checkbox"&gt;</code>'s. This increases the usability of choosing options while maintaining accessibility for screen readers and keyboard use.</li>
                                <li>optgroup is available via <code>&lt;fieldset&gt;</code> and <code>&lt;legend&gt;</code></li>
                                <li>Searching (filtering) is available allowing users to type keywords and quickly find matching options in large lists. Please refer to the third example above for styling and proper usage of the search/filter box.</li>
                                <li>In cases where there are groups and subgroups, checking a parent group will also select its children; the parent acts as a "select all"
                                    <ul>
                                        <li>Unchecking one child simply removes that option from the list of selected choices</li>
                                        <li>Selecting the parent item again, will reselect all of its children</li>
                                    </ul>
                                </li>
                            </ul>

                            <h3>When to use this component</h3>
                            <ul>
                                <li>Use the replaced select element when only one option is allowed to be chosen.</li>
                                <li>Use the multiselect element when there is more than one choice allowed.</li>
                            </ul>
                        </div>
                        <div class="section" id="mobile" tabindex="-1">
                            <h2>Responsive Usage</h2>
                            <p>There are no additional items needed for select and multiselect controls for mobile views. Mobile devices should render these elements as they normally do in their respective operating systems.</p>
                        </div>
                        <div class="section" id="demos" tabindex="-1">
                            <h2>Demos</h2>
                            <h3>Select element (unscripted, browser default)</h3>
<pre class="language-markup"><code class="html language-markup">&lt;label for="standard_select">Choose one thing:&lt;/label&gt;
&lt;select&gt;
    &lt;optgroup label="Group One"&gt;
        &lt;option value="option1"&gt;Option 1&lt;/option&gt;
        &lt;option value="option2"&gt;Option 2&lt;/option&gt;
        &lt;option value="option3"&gt;Option 3&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Group Two"&gt;
        &lt;option value="option4"&gt;Option 4&lt;/option&gt;
        &lt;option value="option5"&gt;Option 5&lt;/option&gt;
        &lt;option value="option6"&gt;Option 6&lt;/option&gt;
        &lt;option value="option7"&gt;Option 7&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>
                            <p>Note: This is a normal select element without any scripting. It will render differently in each browser and it is 100% accessible in its purest form.</p>

                            <h3>Multiselect with no filter</h3>
<pre class="language-markup"><code class="html language-markup">&lt;label for="multiselect_nofilter">Choose many things:&lt;/label&gt;
&lt;select id="test1" multiple="multiple" size="5"&gt;
    &lt;optgroup label="Group One"&gt;
        &lt;option value="option1"&gt;Option 1&lt;/option&gt;
        &lt;option value="option2"&gt;Option 2&lt;/option&gt;
        &lt;option value="option3"&gt;Option 3&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Group Two"&gt;
        &lt;option value="option4"&gt;Option 4&lt;/option&gt;
        &lt;option value="option5"&gt;Option 5&lt;/option&gt;
        &lt;option value="option6"&gt;Option 6&lt;/option&gt;
        &lt;option value="option7"&gt;Option 7&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>

<pre class="language-javascript"><code class="html language-javascript">&lt;script&gt;
$('#test1').multiselect();
&lt;/script&gt;</code></pre>

                            <h3>Multiselect with filtering</h3>
<pre class="language-markup"><code class="html language-markup">&lt;label for="multiselect_filter">Choose many things:&lt;/label&gt;
&lt;select id="test2" multiple="multiple" size="5"&gt;
    &lt;optgroup label="Group One"&gt;
        &lt;option value="option1"&gt;Option 1&lt;/option&gt;
        &lt;option value="option2"&gt;Option 2&lt;/option&gt;
        &lt;option value="option3"&gt;Option 3&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Group Two"&gt;
        &lt;option value="option4"&gt;Option 4&lt;/option&gt;
        &lt;option value="option5"&gt;Option 5&lt;/option&gt;
        &lt;option value="option6"&gt;Option 6&lt;/option&gt;
        &lt;option value="option7"&gt;Option 7&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>

<pre class="language-javascript"><code class="html language-javascript">&lt;script&gt;
$('#test2').multiselect().multiselectfilter();
&lt;/script&gt;</code></pre>

                            <h3>Select element, replaced</h3>
<pre class="language-markup"><code class="html language-markup">&lt;label for="multiselect_filter">Choose many things:&lt;/label&gt;
&lt;select id="test3" multiple="multiple" size="5"&gt;
    &lt;optgroup label="Group One"&gt;
        &lt;option value="option1"&gt;Option 1&lt;/option&gt;
        &lt;option value="option2"&gt;Option 2&lt;/option&gt;
        &lt;option value="option3"&gt;Option 3&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Group Two"&gt;
        &lt;option value="option4"&gt;Option 4&lt;/option&gt;
        &lt;option value="option5"&gt;Option 5&lt;/option&gt;
        &lt;option value="option6"&gt;Option 6&lt;/option&gt;
        &lt;option value="option7"&gt;Option 7&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;</code></pre>

<pre class="language-javascript"><code class="html language-javascript">&lt;script&gt;
$('#test3').multiselect({ multiple: false });
&lt;/script&gt;</code></pre>

                            <h3>Live examples</h3>
                            <p>View working examples on <a href="http://jsfiddle.net/clrux/gLjLD/">JSFiddle</a></p>
                        </div>
                        <div class="section" id="accessibility" tabindex="-1">
                            <h2>Accessibility Considerations</h2>
                            <h3>Required level of compliance</h3>
                            <ul>
                                <li>All select elements, including multiselect elements, should have an appropriate &lt;label&gt;. The label can be placed off-screen if it is not needed in visual output.</li>
                                <li>Use &lt;optgroup&gt; to enhance usability by grouping like options. However, please note that &lt;optgroup&gt; isn't fully supported in all browsers and screen readers and should be relied upon to present vital category information.</li>
                                <li>Do not confuse the &lt;label&gt; attribute for the optgroup with the label element.</li>
                                <li><strong>Important:</strong> Once an option list is made visible, focus should be brought to the list. Screen readers should announce the user is in a list and the total number of options.</li>
                                <li><strong>Important:</strong> The spacebar should check or uncheck options and changes should be announced to screen readers along with the state (checked/unchecked).</li>
                                <li>If filtering is going to be used, give the container with the list options an ARIA "live" property (preferably of "polite") so that as the list of options is filtered, the updated contents are announced.</li>
                                <li>Ensure tab focus is sent to the option list so that screen readers can announce the list and keyboard users can interact with the list. Also ensure that tab focus is sent back to the main select element when the options list is closed.</li>
                            </ul>

                            <h3>Behavior without scripting</h3>
                            <p>If JavaScript is turned off, this component should fallback to either a non-multiselect element (&lt;select&gt;) or the multiselect option (&lt;select multiple="true"&gt;).</p>

                            <h3>Other notes</h3>
                            <p>Screen readers will announce an indeterminate checkbox as "partially checked, checkbox".</p>

                            <h3>Accessibility Resources</h3>
                            <p>As always, use valid, semantic, proper HTML markup to optimize accessibility and usability of modals.</p>
                            <a href="http://validator.w3.org/">W3 HTML Validator</a><br>
                            <a href="http://wave.webaim.org/">WebAim WAVE</a>
                        </div>
                        <div class="section" id="keyboard" tabindex="-1">
                            <h2>Keyboard Shortcuts</h2>
                            <p>There are no special keyboard shortcuts, but ensure that full keyboard functionality and navigability is maintained, and keep said functionality as close to default as possible. Don't hijack keys that would normally perform one action and make them perform another action.</p>
                        </div>
                        <div class="section" id="notes" tabindex="-1">
                            <h2>Research &amp; Discussion</h2>
                            <p>Includes usability research findings and recommendations, information from the UIM discussion page, links, chapters, articles, etc that supports the design decision.</p>
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
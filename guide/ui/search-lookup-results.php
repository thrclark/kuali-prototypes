<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'search-lookup-results';
$child_name = 'Search/Lookup Results';
$subchild_section = '';
$subchild_name = '';
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
                        <p>The Kuali suite of applications uses search and lookup results lists frequently. This document indicates how and where they are to be used, along with accessibility and market recommendations.</p>
                        <p>There are four (4) types of results lists, grouped into two (2) categories.</p>

                        <h3>Selecting a single item</h3>
                        <p>Result sets where a single item only is allowed to be selected. This group includes the following three (3) methods:</p>
                        <ul>
                            <li><h4>Radio buttons</h4></li>
                            <li><h4>Action buttons</h4></li>
                            <li><h4>Links</h4></li>
                        </ul>

                        <h3>Selecting multiple items</h3>
                        <p>Result sets where more than one item is allowed to be selected. This group includes the following one (1) method:</p>
                        <ul>
                            <li><h4>Checkboxes</h4></li>
                        </ul>
                    </div>
                    
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Desktop Usage</h2>

                        <h3>Selecting a single item</h3>
                        <h4>Radio buttons</h4>
                        <figure>
                            <img src="../img/search-single-radio-01.png" alt="An example of a radio button results list with nothing selected.">
                            <figcaption>An example of a radio button results list with nothing selected.</figcaption>
                        </figure>

                        <figure>
                            <img src="../img/search-single-radio-02.png" alt="An example of a radio button results list with a single item selected.">
                            <figcaption>An example of a radio button results list with a single item selected.</figcaption>
                        </figure>
                        
                        <h5>Quick summary of features:</h5>
                        <ul>
                            <li>Used when only a single item is allowed to be chosen or returned.</li>
                            <li>Radio buttons to the left provide additional visual cues as to the interaction (suggesting only one option may be chosen).</li>
                            <li>The radio button and its label are clickable.</li>
                            <li>Other clickable items, such as an inquiry or lookup, may be included in the row.</li>
                        </ul>

                        <h4>Action buttons</h4>
                        <figure>
                            <img src="../img/search-single-action-01.png" alt="An example of a results list where, rather than options being selected, actions may be performed on the results via button groups.">
                            <figcaption>An example of a results list where, rather than options being selected, actions may be performed on the results via button groups.</figcaption>
                        </figure>
                        
                        <h5>Quick summary of features:</h5>
                        <ul>
                            <li>Used when actions need to be performed on results. Most commonly found in collection tables after results have been added.</li>
                            <li>Contain a button or a button group to the far right. Button groups should feature the primary action as one button, and all other actions in the dropdown.</li>
                            <li>May use an icon button or a link (such as Delete) in place of a button or button group if that is the only action.</li>
                        </ul>

                        <h4>Links</h4>
                        <figure>
                            <img src="../img/search-single-links-01.png" alt="A set of results with the primary action being a link to the result itself.">
                            <figcaption>A set of results with the primary action being a link to the result itself.</figcaption>
                        </figure>
                        
                        <h5>Quick summary of features:</h5>
                        <ul>
                            <li>Useful in search results cases where the goal is to query something then navigate to a found result (i.e., search results).</li>
                            <li>Table footer <code>&lt;tfoot&gt;</code> contains the total number of search results, which should describe the name of the table (e.g., "Search results, 3 results found"). This can be done using id and aria-describedby.</li>
                            <li>May contain popovers and tooltips in the results row.</li>
                        </ul>

                        <h3>Selecting multiple items</h3>
                        <h4>Checkboxes</h4>
                        <figure>
                            <img src="../img/search-multi-checkbox-01.png" alt="A result table with three options, none of them selected.">
                            <figcaption>A result table with three options, none of them selected.</figcaption>
                        </figure>

                        <figure>
                            <img src="../img/search-multi-checkbox-02.png" alt="A result table with three options, two of which are selected via checkboxes.">
                            <figcaption>A result table with three options, two of which are selected via checkboxes.</figcaption>
                        </figure>
                        
                        <h5>Quick summary of features:</h5>
                        <ul>
                            <li>Used when building a collection, or when multiple results are to be returned at a given time.</li>
                            <li>Checkboxes to the left provide additional visual cues as to the interaction (suggesting multiple options may be selected).</li>
                            <li>The checkbox and its label are clickable.</li>
                            <li>Other clickable items, such as an inquiry or lookup, may be included in the row.</li>
                        </ul>
                    </div>

                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <h3>Selecting a single item</h3>
                        <h4>Radio buttons</h4>
<pre class="language-markup"><code class="html language-markup">&lt;table id="single_radio" class="table table-hover"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;&lt;/th&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Address&lt;/th&gt;
            &lt;th&gt;Phone&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;input type="radio" id="r01" name="single_radio" value="" /&gt;&lt;/td&gt;
            &lt;td&gt;&lt;label for="r01"&gt;Alfred Hitchcock&lt;/label&gt;&lt;/td&gt;
            &lt;td&gt;123 Twilight Zone, Apartment 0&lt;/td&gt;
            &lt;td&gt;(800) 555-1212&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;input type="radio" id="r02" name="single_radio" value="" /&gt;&lt;/td&gt;
            &lt;td&gt;&lt;label for="r02"&gt;Lurch&lt;/label&gt;&lt;/td&gt;
            &lt;td&gt;Adams Family House&lt;/td&gt;
            &lt;td&gt;(222) 666-3131&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;input type="radio" id="r03" name="single_radio" value="" /&gt;&lt;/td&gt;
            &lt;td&gt;&lt;label for="r03"&gt;Slimer&lt;/label&gt;&lt;/td&gt;
            &lt;td&gt;Any hotel around New York&lt;/td&gt;
            &lt;td&gt;&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            &lt;td colspan="4" class="text-right"&gt;
                &lt;button type="button" class="btn btn-primary"&gt;Continue&lt;/button&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tfoot&gt;
&lt;/table&gt;</code></pre>

                        <h4>Action buttons</h4>
<pre class="language-markup"><code class="html language-markup">&lt;table id="single_action" class="table table-hover"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Address&lt;/th&gt;
            &lt;th&gt;Phone&lt;/th&gt;
            &lt;th&gt;&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td id="r21"&gt;Alfred Hitchcock&lt;/td&gt;
            &lt;td&gt;123 Twilight Zone, Apartment 0&lt;/td&gt;
            &lt;td&gt;(800) 555-1212&lt;/td&gt;
            &lt;td class="text-right"&gt;
                &lt;div class="btn-group"&gt;
                    &lt;button type="button" class="btn btn-default btn-sm" aria-describedby="r21"&gt;Open&lt;/button&gt;
                    &lt;button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"&gt;
                        &lt;span class="caret"&gt;&lt;/span&gt;
                        &lt;span class="sr-only"&gt;More options...&lt;/span&gt;
                    &lt;/button&gt;
                    &lt;ul class="dropdown-menu pull-right" role="menu"&gt;
                        &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td id="r22"&gt;Lurch&lt;/td&gt;
            &lt;td&gt;Adams Family House&lt;/td&gt;
            &lt;td&gt;(222) 666-3131&lt;/td&gt;
            &lt;td class="text-right"&gt;
                &lt;div class="btn-group"&gt;
                    &lt;button type="button" class="btn btn-default btn-sm" aria-describedby="r22"&gt;Open&lt;/button&gt;
                    &lt;button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"&gt;
                        &lt;span class="caret"&gt;&lt;/span&gt;
                        &lt;span class="sr-only"&gt;More options...&lt;/span&gt;
                    &lt;/button&gt;
                    &lt;ul class="dropdown-menu pull-right" role="menu"&gt;
                        &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td id="r23"&gt;Slimer&lt;/td&gt;
            &lt;td&gt;Any hotel around New York&lt;/td&gt;
            &lt;td&gt;&lt;/td&gt;
            &lt;td class="text-right"&gt;
                &lt;div class="btn-group"&gt;
                    &lt;button type="button" class="btn btn-default btn-sm" aria-describedby="r23"&gt;Open&lt;/button&gt;
                    &lt;button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"&gt;
                        &lt;span class="caret"&gt;&lt;/span&gt;
                        &lt;span class="sr-only"&gt;More options...&lt;/span&gt;
                    &lt;/button&gt;
                    &lt;ul class="dropdown-menu pull-right" role="menu"&gt;
                        &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</code></pre>

                        <h4>Links</h4>
<pre class="language-markup"><code class="html language-markup">&lt;table id="single_result" class="table table-hover"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Address&lt;/th&gt;
            &lt;th&gt;Phone&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;a href="#"&gt;Alfred Hitchcock&lt;/a&gt;&lt;/td&gt;
            &lt;td&gt;123 Twilight Zone, Apartment 0&lt;/td&gt;
            &lt;td&gt;(800) 555-1212&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;a href="#"&gt;Lurch&lt;/a&gt;&lt;/td&gt;
            &lt;td&gt;Adams Family House&lt;/td&gt;
            &lt;td&gt;(222) 666-3131&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;a href="#"&gt;Slimer&lt;/a&gt;&lt;/td&gt;
            &lt;td&gt;Any hotel around New York&lt;/td&gt;
            &lt;td&gt;&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            &lt;td colspan="3" tabindex="0"&gt;&lt;strong&gt;3&lt;/strong&gt; results found.&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tfoot&gt;
&lt;/table&gt;</code></pre>

                        <h3>Selecting multiple items</h3>
                        <h4>Checkboxes</h4>
<pre class="language-markup"><code class="html language-markup">&lt;table id="multi_checkbox" class="table table-hover"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;&lt;/th&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Address&lt;/th&gt;
            &lt;th&gt;Phone&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;input type="checkbox" id="r31" name="multi_checkbox" value="" /&gt;&lt;/td&gt;
            &lt;td&gt;&lt;label for="r31"&gt;Alfred Hitchcock&lt;/label&gt;&lt;/td&gt;
            &lt;td&gt;123 Twilight Zone, Apartment 0&lt;/td&gt;
            &lt;td&gt;(800) 555-1212&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;input type="checkbox" id="r32" name="multi_checkbox" value="" /&gt;&lt;/td&gt;
            &lt;td&gt;&lt;label for="r32"&gt;Lurch&lt;/label&gt;&lt;/td&gt;
            &lt;td&gt;Adams Family House&lt;/td&gt;
            &lt;td&gt;(222) 666-3131&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;&lt;input type="checkbox" id="r33" name="multi_checkbox" value="" /&gt;&lt;/td&gt;
            &lt;td&gt;&lt;label for="r33"&gt;Slimer&lt;/label&gt;&lt;/td&gt;
            &lt;td&gt;Any hotel around New York&lt;/td&gt;
            &lt;td&gt;&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            &lt;td colspan="4" class="text-right"&gt;
                &lt;button type="button" class="btn btn-primary"&gt;Continue&lt;/button&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tfoot&gt;
&lt;/table&gt;</code></pre>

                        <h3>Live examples</h3>
                        <p><a href="http://jsfiddle.net/clrux/34eskfcr/">See examples of these on JSFiddle</a></p>
                    </div>

                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility Considerations</h2>
                        <h3>Tables</h3>
                        <p>As with all tables, proper markup will help considerably in how the data within them are read. Consider your markup and make sure it's semantic and valid. Avoid using nested tables.</p>
                        
                        <h3>Forms (radio buttons and checkboxes)</h3>
                        <p>Despite our results being in a table, proper use of labels and id's should be used. In our examples, we're putting the primary piece of result data (i.e., a name or a document number) as the label for the radio button or checkbox. The row itself should be aria-describedby or aria-labeledby the same id to tie everything together.</p>
                        <p>We use JavaScript to listen for row clicks which also check or uncheck the respective control. Because this is a visual/sighted action, default keyboard navigability and control to interact with radio buttons, checkboxes, links and buttons should be maintained. For example, once the user Tab's into the radio button group or checkbox group, using the keyboards arrow keys should move the selection (with radio buttons) and the spacebar should check or uncheck checkboxes (with checkbox groups).</p>
                        
                        <h3>Popovers</h3>
                        <p>Popovers here should adhere to the same accessibility considerations found for popovers in the Help and Messaging specification document. The use of ARIA should be used along with an indication that the popover is open or closed. Additionally, focus should be sent to the popover content once it's displayed. Closing the popover should return focus back to the initiating element.</p>
                        
                        <h3>Accessibility Resources:</h3>
                        <p>As always, use valid, semantic, proper HTML markup to optimize accessibility and usability of modals.</p>
                        <ul>
                            <li><a href="http://validator.w3.org/">W3 HTML Validator</a></li>
                            <li><a href="http://wave.webaim.org/">WebAim WAVE</a></li>
                        </ul>
                    </div>

                    <div class="section" id="keyboard" tabindex="-1">
                        <h2>Keyboard Shortcuts</h2>
                        <p>Default and inherent keyboard functionality should be maintained for both table navigation, tabular data navigation, and form navigation and manipulation. No scripting should interfere with this inherent and commonly understood behavior.</p>
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
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
$child_section = 'content-sections';    // EDITABLE: child section id
$child_name = 'Content Sections';       // EDITABLE: child section name
$subchild_section = 'modals';           // EDITABLE: page id
$subchild_name = 'Modals';              // EDITABLE: page name
$pageId = '338966993';                  // EDITABLE: Confluence/Wiki page id

/*
 * Don't edit anything below this line.
 */
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
                            <li class="tab"><a href="#use">When to Use</a></li>
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
                            <p>Modals in Kuali are used to provide additional information to on-screen content, allow modification of data while keeping the user within context and without leaving the current page, and to provide user feedback, especially in the way of confirming important actions.</p>
                            
                            <h3>Variations</h3>
                            <ul>
                                <li><h4>Content modals</h4>
                                    <ul>
                                        <li>Your average modal, housing content that's interactive. Usually has a primary and tertiary action in the footer bar.</li>
                                        <li>Clicking outside of the modal will close the modal, performing a "cancel/close" action.</li>
                                    </ul>
                                </li>
                                <li>
                                    <h4>Confirmation modals</h4>
                                    <ul>
                                        <li>Appear upon important actions, such as deleting something or actions that would make significant changes.</li>
                                        <li>These modals block further action until a choice is made (typically, "Okay" or "Cancel").</li>
                                        <li>Clicking outside of the modal will not do anything - a choice is required by the user.</li>
                                    </ul>
                                </li>
                                <li>
                                    <h4>"Speed bump" modals</h4>
                                    <ul>
                                        <li>Similar to confirmation modals accept not meant for significant actions.</li>
                                        <li>Act as more of a notification (i.e., "hey, make sure you know 'this' before continuing").</li>
                                        <li>Clicking outside of the modal will close the modal, performing a "cancel/close" action.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="section" id="usage" tabindex="-1">
                            <h2>Desktop Usage</h2>
                            <h3>Example of a lightbox style modal</h3>
                            <figure>
                                <img src="../img/modal-01.png" alt="A modal with the Continue button focused" />
                                <figcaption>A modal with the Continue button focused, indicating there's another step or panel.</figcaption>
                            </figure>

                            <figure>
                                <img src="../img/modal-02.png" alt="The second page of the modal" />
                                <figcaption>The next step or page of the modal with breadcrumb navigation in the header.</figcaption>
                            </figure>

                            <h3>Quick summary of features</h3>
                            <ul>
                                <li>Modals use Bootstrap 3 classes (see markup)</li>
                                <li>Have header, body, and footer sections (see markup)</li>
                                <li>Close button in header (only on content modals)</li>
                                <li>Content modals close via close button, or by clicking outside of the modal. Also closes with Escape key. Confirmation and "Speed bump" modals close only with intended button activation.</li>
                                <li>For modal footer, the primary action button(s) come first, followed by the secondary actions, and finally Close or Cancel (or tertiary) actions.</li>
                                <li>Footer buttons are right-aligned in <code>&lt;div class="modal-footer"&gt;</code></li>
                                <li>Opening one modal from another generates a breadcrumb so that the navigational/actionable trail is easily maintained. This breadcrumb style and use differs from the normal breadcrumb style. Find out more about these in the Breadcrumb component spec (forthcoming).</li>
                            </ul>

                            <h3>When to use this component</h3>
                            <ul>
                                <li>When we need to draw attention to vital pieces of information or show additional information.</li>
                                <li>When we need to block the application flow until certain required information is collected, edited, or confirmed</li>
                                <li>When centralized data collection is necessary while keeping the user within context or without navigating away to another page</li>
                                <li>When we need to warn the user that the current action will have significant consequences and provide them with an option to 'cancel' or otherwise go no further with the action</li>
                            </ul>
                        </div>

                        <div class="section" id="mobile" tabindex="-1">
                            <h2>Responsive Usage</h2>
                            <p>There are no special accommodations that need to be made for modals to work in mobile layouts. They will function and display similarly to desktop views.</p>
                        </div>

                        <div class="section" id="demos" tabindex="-1">
                            <h2>Demos</h2>
                            <h3>HTML</h3>
                            <p>The <code>data-target=""</code> attribute should point to the unique ID (container) of the modal you are wanting to open. In the examples below, <code>data-target="#initial_modal"</code> would open the first modal. Note that the "Continue..." button in the initial modal closes itself and then opens the second modal, using the second modal's ID as the new <code>data-target</code> attribute.</p>

                            <h4>Default modal</h4>
<pre class="language-markup"><code class="html language-markup">&lt;div class="modal" id="unique_modal_id_here" tabindex="-1" role="dialog" aria-describedby="sole_modal_title"&gt;
    &lt;div class="modal-dialog"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;button type="button" class="close" data-dismiss="modal"&gt;&times;&lt;/button&gt;
                &lt;h4 class="modal-title" id="sole_modal_title"&gt;Title of modal here&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                &lt;nav&gt;
                    &lt;ol class="breadcrumb"&gt;
                        &lt;li&gt;Title of modal here&lt;/li&gt;
                    &lt;/ol&gt;
                &lt;/nav&gt;
                &lt;p&gt;Modal body content goes here...&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;div class="clearfix"&gt;
                    &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                    &lt;button type="button" class="btn btn-link" data-dismiss="modal"&gt;Close/Cancel&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>

                            <h3>Launching one modal from another</h3>
                            <p>Sometimes the need to launch one modal from another might occur. Overlaying or stacking the modals is unacceptable, so we need to first remove the initial modal and replace it with the next modal.</p>
<pre class="language-markup"><code class="html language-markup">&lt;div class="modal" id="initial_modal" tabindex="-1" role="dialog" aria-describedby="first_modal_title"&gt;
    &lt;div class="modal-dialog"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;button type="button" class="close" data-dismiss="modal"&gt;&times;&lt;/button&gt;
                &lt;h4 class="modal-title" id="first_modal_title"&gt;Title of modal here&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                &lt;nav&gt;
                    &lt;ol class="breadcrumb"&gt;
                        &lt;li&gt;Title of modal here&lt;/li&gt;
                    &lt;/ol&gt;
                &lt;/nav&gt;
                &lt;p&gt;Modal body content goes here...&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;div class="clearfix"&gt;
                    &lt;button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#second_modal"&gt;Continue...&lt;/button&gt;
                    &lt;button type="button" class="btn btn-link" data-dismiss="modal"&gt;Cancel&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
 
&lt;div class="modal" id="second_modal" tabindex="-1" role="dialog" aria-describedby="second_modal_title"&gt;
    &lt;div class="modal-dialog"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;button type="button" class="close" data-dismiss="modal"&gt;&times;&lt;/button&gt;
                &lt;h4 class="modal-title" id="second_modal_title"&gt;This is the second modal&lt;/h4&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                &lt;nav&gt;
                    &lt;ol class="breadcrumb"&gt;
                        &lt;li&gt;&lt;a href="#" data-dismiss="modal" data-toggle="modal" data-target="#initial_modal"&gt;Title of modal here&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;This is the second modal&lt;/li&gt;
                    &lt;/ol&gt;
                &lt;/nav&gt;
                &lt;p&gt;Modal body content goes here...&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;div class="clearfix"&gt;
                    &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                    &lt;button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#initial_modal"&gt;Go back&lt;/button&gt;
                    &lt;button type="button" class="btn btn-link" data-dismiss="modal"&gt;Cancel&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>

                            <h3>JavaScript (as an example...)</h3>
<pre class="language-javascript"><code class="html language-javascript">$('#second_modal').on('shown.bs.modal', function(e) {
    $(this).prev().attr('aria-hidden', 'true');
    $(this).attr('aria-hidden', 'false');
}).on('hidden.bs.modal', function(e) {
    $(this).attr('aria-hidden', 'true');
});
 
$('#first_modal').on('shown.bs.modal', function(e) {
    $(this).next().attr('aria-hidden', 'true');
    $(this).attr('aria-hidden', 'false');
}).on('hidden.bs.modal', function(e) {
    $(this).attr('aria-hidden', 'true');
});</code></pre>

                            <h3>Live examples</h3>
                            <ul>
                                <li><a href="http://getbootstrap.com/javascript/#modals">Bootstrap</a></li>
                                <li><a href="http://jsfiddle.net/clrux/HmN44/">JSFiddle</a></li>
                                <li><a href="http://env14.rice.kuali.org/kr-krad/dialog?viewId=Demo-DialogGroupView&formKey=0eb7a510-e595-4648-900b-63398cd5903f&cacheKey=l120c24tsatt944gk5kgk48ynl">KRAD library</a></li>
                            </ul>
                        </div>

                        <div class="section" id="use" tabindex="-1">
                            <h2>When to Use</h2>
                            <h3>Pattern use cases</h3>
                            <table>
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
                                        <td>Adding new data</td>
                                        <td>Modals can be used to add new data or new entries to an existing collection, especially when the details of the entry go beyond what the collection shows by default.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Editing existing data</td>
                                        <td>Modals can be used to edit existing data, especially in cases where the visible details of the entry don't show the whole of the data entry. An example of this would be editing an entry for a personnel where only some of the details are shown within the datatable, but there are more details that are shown when editing the entry via a modal.</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h3>Specific use cases</h3>
                            <table>
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
                                        <td>Editing a row via modal after clicking a button</td>
                                        <td>In datatables, some rows/entries are editable as a whole, rather than editing individual items. Clicking the button will open a modal with all of the entry details. In this case - a normal form - users preferred just using normal form fields.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Adding data to a collection</td>
                                        <td>Since collections and datatables will show some or all of the row details, use a modal whenever adding a new entry to a collection or datatable. Once the form in the modal has been submitted, the newly added data should be visible within the collection.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>All available fields are shown in the collection and are editable</td>
                                        <td>When editing a data entry, and if viewing a datatable or collection and all available fields are visible, the use of a modal (while an option) isn't required. You may simply use the inline editing component to make necessary adjustments to the data.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Editing a single piece of data</td>
                                        <td>When an authenticated user needs to edit a single piece of data, said data would utilize this component. Clicking the field would make the field data editable. Depending on whether or not explicit buttons for Save and Cancel are being used, clicking Save our blurring the field would commit the change and return the data to its data-only state.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="section" id="accessibility" tabindex="-1">
                            <h2>Accessibility Considerations</h2>
                            <p>In order to ensure modals are accessible to screen readers and keyboard users, make sure the following are true.</p>
                            <ul>
                                <li>The modal must be focusable (tabindex="-1") and focus must be sent to it when it opens via JavaScript</li>
                                <li>All elements, text, forms, etc. within the modal should follow and use the same proper semantics and accessibility rules that exist outside of the modal</li>
                                <li>Closing the modal should return focus back to the initial firing element (i.e., a button, link, or other mechanism that opened the modal)</li>
                                <li>If the content inside a modal is integral to complete an action, there should be an alternate means of accessing said content (e.g., if JavaScript is disabled or if there's a bug or error in the scripting that causes a modal not to fire, there needs to be an alternate means of accessing and manipulating the content within the modal).</li>
                            </ul>

                            <h3>Behavior without scripting</h3>
                            <p>Script is required to use modal windows. Because of this, the scripting for the production application should be 100% error-free to ensure all content is accessible.</p>

                            <h3>Accessibility Resources</h3>
                            <a href="http://validator.w3.org/">W3 HTML Validator </a><br>
                            <a href="http://wave.webaim.org/">WebAim WAVE </a>
                        </div>

                        <div class="section" id="keyboard" tabindex="-1">
                            <h2>Keyboard Shortcuts</h2>
                            <ul>
                                <li>Escape/Esc key may close a modal, depending on the modal type.</li>
                            </ul>
                        </div>

                        <div class="section" id="notes" tabindex="-1">
                            <h2>Research &amp; Discussion</h2>
                            <p>Includes usability research findings and recommendations, information from the UIM discussion page, links, chapters, articles, etc that supports the design decision.</p>
                            
                            <h3>Notes on "modal within modal"</h3>
                            <p>As noted above, launching one modal from another should not be done by overlaying or stacking the modals. Rather swap the modals out using built-in Bootstrap functionality. You must first dismiss a modal before launching the next one. The amount of swapping modals can be indefinite, but modals should never overlap one another. One proposed idea is to use breadcrumb navigation within a series of modals allowing the user to dismiss the current modal and go anywhere previously.</p>
                            <p>The Bootstrap markup for this would be:</p>
<pre class="language-markup"><code class="html language-markup">&lt;button data-toggle="modal" data-target="#modal_1"&gt;Launch initial modal&lt;/button&gt;
&lt;button data-dismiss="modal" data-toggle="modal" data-target="#modal_2"&gt;Next Modal...&lt;/button&gt;
&lt;button data-dismiss="modal" data-toggle="modal" data-target="#modal_3"&gt;Final Modal&lt;/button&gt;</code></pre>

                            <p>Note that each button closes the current modal and then launches another one.</p>

                            <h3>Placement of the "close" button in modal headers</h3>
                            <p>For some reason Bootstrap places the "close" button (X) before the modal title. For accessibility reasons, I'd like the modal title (heading) to come first, followed by the option to close the modal. This would require some style changes in the form of Bootstrap overrides for proper appearance.</p>
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
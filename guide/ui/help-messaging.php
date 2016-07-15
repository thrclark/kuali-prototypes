<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'help-messaging';
$child_name = 'Help &amp; Messaging';
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
                            <p>User feedback and messaging is crucial to a positive user experience. Help mechanisms like tooltips and contextual text provide immediate clarification on otherwise confusing items. Feedback messaging like confirmation and error messages help affirm our experience, or provide helpful ways to correct mistakes.</p>

                            <h3>Types of messaging</h3>
                            <ul>
                                <li>
                                    <h4>Information</h4>
                                    <ul>
                                        <li>To provide users with non-critical information about something they are doing in the application. The information should be able to be disregarded or dismissed without causing errors or data loss.</li>
                                        <li>Information messages can be accompanied by a blue palette color or a blue icon. </li>
                                        <li>May include simple HTML such as links, headings, and paragraphs.</li>
                                        <li><a href="http://jsfiddle.net/clrux/eDb6N/">View working example</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h4>Warning/Caution</h4>
                                    <ul>
                                        <li>To inform users that something they are about to do could cause errors, data loss, or other workflow problems.</li>
                                        <li>Warning messages can be accompanied by a yellow palette color or yellow icon.</li>
                                        <li>May include simple HTML such as links, headings, and paragraphs.</li>
                                        <li><a href="http://jsfiddle.net/clrux/eDb6N/">View working example</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h4>Error</h4>
                                    <ul>
                                        <li>To inform users that a mistake has been made that prevents or impedes proper workflow, or that a problem has occurred in the application that the user may not have caused.</li>
                                        <li>Error messages can be accompanied by a red palette color or a red icon.</li>
                                        <li>May include simple HTML such as links, headings, and paragraphs.</li>
                                        <li><a href="http://jsfiddle.net/clrux/eDb6N/">View working example</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h4>Validation</h4>
                                    <ul>
                                        <li>To provide users with a confirmation that they have performed a task correctly.</li>
                                        <li>Validation messages can be accompanied by a green palette color or a green icon.</li>
                                        <li>May include simple HTML such as links, headings, and paragraphs.</li>
                                        <li><a href="http://jsfiddle.net/clrux/eDb6N/">View working example</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h4>Page-level</h4>
                                    <ul>
                                        <li>Messages that appear near the top of a page or container. Page-level messages should apply to multiple fields or an entire container or section.</li>
                                    </ul>
                                </li>
                                <li>
                                    <h4>Field-level</h4>
                                    <ul>
                                        <li>Field-level messages appear next to individual fields. Positioning varies depending on the layout needs of the screen; however it should be clear which field the message belongs to. Field-level messages should not generally include icons.</li>
                                        <li><a href="http://jsfiddle.net/clrux/q44kx/">View working example</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h4>Tooltip</h4>
                                    <ul>
                                        <li>Tooltip messages appear when users hover/focus over fields. They can be used to provide additional information to users when screen real estate is an issue and when users have been given a visual cue (such as a page-level message) that more information is available. Consideration must be given to mobile platforms. Tooltips contain read-only information and do not allow any HTML formatting.</li>
                                        <li><a href="http://jsfiddle.net/clrux/q44kx/">View working example</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h4>Popover</h4>
                                    <ul>
                                        <li>Popovers are similar to tooltips, but they are able to show a bit more content. They contain read-only information and allow HTML formatting.</li>
                                        <li><a href="http://jsfiddle.net/clrux/q44kx/">View working example</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h4>Modal dialog box</h4>
                                    <ul>
                                        <li>Modal dialog boxes appear on top of the primary interface in a modal window. Modal messages should be ones that require immediate attention from users and that require some action before the user can continue using the interface.</li>
                                        <li><a href="http://jsfiddle.net/clrux/HmN44/">View working example</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h4>Placeholder text</h4>
                                    <ul>
                                        <li>HTML5 offers the placeholder attribute which places some example text within the input field. This text is usually gray, or lighter than the normal text, and goes away when actual data is entered.</li>
                                    </ul>
                                </li>
                                <li>
                                    <h4>Badges</h4>
                                    <ul>
                                        <li>Badges aren't so much elements as visual styles for elements. Bootstrap offers classes to make data and text display as a badge.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="section" id="usage" tabindex="-1">
                            <h2>Usage</h2>
                            <p>Note the ARIA role's in the examples that follow.</p>

                            <h3>Informational</h3>
                            <figure>
                                <img src="../img/alert-info.png" alt="Informational user feedback message">
                                <figcaption>Informational user feedback message</figcaption>
                            </figure>

                            <h3>Warning</h3>
                            <figure>
                                <img src="../img/alert-warning-01.png" alt="Warning user feedback message without links or buttons">
                                <figcaption>Basic warning feedback message</figcaption>
                            </figure>

                            <figure>
                                <img src="../img/alert-warning-02.png" alt="Warning user feedback message with user actions available">
                                <figcaption>Warning feedback message showing prompting a user action</figcaption>
                            </figure>

                            <h3>Error</h3>
                            <figure>
                                <img src="../img/alert-error-01.png" alt="Error user feedback message">
                                <figcaption>A basic error message</figcaption>
                            </figure>

                            <figure>
                                <img src="../img/alert-error-02.png" alt="Error user feedback message with user actions available">
                                <figcaption>Error feedback message showing errors on the page as links to quickly skip to and fix the errors</figcaption>
                            </figure>

                            <h3>Validation/Success</h3>
                            <figure>
                                <img src="../img/alert-success-01.png" alt="A basic success message">
                                <figcaption>A basic success message</figcaption>
                            </figure>

                            <figure>
                                <img src="../img/alert-success-02.png" alt="A success message prompting a user action">
                                <figcaption>A success or confirmation message prompting user action</figcaption>
                            </figure>

                            <h3>Page-level messaging</h3>
                            <p>For page-level messaging, use any of the above four types of messages.</p>

                            <h3>Field-level messaging</h3>
                            <p>This type of messaging provides further information and/or constraint text adjacent to the form field. There are four variations of field-level messaging:</p>
                            <ul>
                                <li>Informational with label on hover/focus</li>
                                <li>Informational via tooltip (icon hover/focus)</li>
                                <li>Informational always visible</li>
                                <li>Constraint</li>
                            </ul>

                            <h3>Informational with label on hover/focus</h3>
                            <p>This type of field-level messaging has the informational/instructional text in a tooltip that appears on label hover and focus. This keeps the UI clean, but also provides help upon request. Note that this option is only accessible if the label is focusable (i.e., has a tabindex of 1 or zero).</p>
                            <figure>
                                <img src="../img/alert-fieldlevel.png" alt="A tooltip message on form label hover or focus">
                                <figcaption>A tooltip message on form label hover or focus</figcaption>
                            </figure>

                            <h3>Informational via tooltip (icon hover/focus)</h3>
                            <p>In this variation, an icon is present next to the field label that is used to contain the tooltip. The same functionality applies here, only the tooltip displays when the icon is hovered over or focused on.</p>
                            <figure>
                                <img src="../img/alert-tooltip.png" alt="A tooltip message when hovering or focusing on an 'i' icon">
                                <figcaption>A tooltip message after focusing or hovering over an icon next to the field label</figcaption>
                            </figure>

                            <h3>Informational always visible</h3>
                            <p>This variation is the simplest and has the informational/instructional text always present beneath the label, above the field. There is no tooltip used in this scenario. Please note that this method is the most straightforward as well as the most accessible. The instructional text will be announced via screen reader right after the label is announced and before the form field becomes focused.</p>
                            <figure>
                                <img src="../img/alert-constraint.jpg" alt="Constraint or informational text always visible below the field label, above the field itself.">
                                <figcaption>Constraint or informational text always visible below the field label, above the field itself</figcaption>
                            </figure>

                            <h3>Constraint</h3>
                            <p>Constraint text is usually placed beneath the form field and details restrictions of the data to be entered (e.g., Your username must be 3-12 characters).</p>
                            <figure>
                                <img src="../img/alert-constraint-02.png" alt="Constraint text beneath a form field with clues to the proper value.">
                                <figcaption>Constraint text goes beneath the form field</figcaption>
                            </figure>

                            <h3>Tooltip</h3>
                            <p>The <code>title</code> becomes the text within the tooltip. The following example displays the tooltip above the element, but Kuali offers placement to the left, right, and bottom as well. Simply change the data-placement value respectively. Tooltip length should never be more than one sentence, or around 200 characters maximum. If more space is needed you should use a popover.</p>
                            <figure>
                                <img src="../img/alert-tooltip-02.png" alt="Kuali-style tooltip with a white background.">
                                <figcaption>Kuali-style tooltips have a white background</figcaption>
                            </figure>

                            <p>A pure-Bootstrap version of the tooltip has a black background with white text. Note this is the preferred variation of this tooltip. The following is an example of this styling using a question-mark icon (help or more info) next to a label:</p>
                            <figure>
                                <img src="../img/alert-tooltip-03.png" alt="Bootstrap-style tooltip with a black background, activated by an icon.">
                                <figcaption>Bootstrap-style tooltips have a black background</figcaption>
                            </figure>

                            <h3>Popovers</h3>
                            <p>When read-only content is needed that requires more space than a tooltip, a popover is used. Popovers allow some HTML content. As will tooltips, popovers allow placement of top, left, right, and bottom via the data-placement attribute. If the data-html="true" attribute isn't specified, the popover will render as plain text. Also note that popovers work like a toggle, requiring another click of the initiator to close the popover.</p>
                            <p>Note: the Bootstrap implementation functions as a toggle. Clicking the "Some inquiry" link once will open the popover, but the only way to close the popover is to click the link again. KRAD needs to modify the code adding in the "close" icon to the right of the popover title. Clicking the icon/link will $.popover('hide') the open popover as well as any additional popovers.</p>
                            <p>Note: because popover's are different from navigational links, they should appear differently. Popovers must include an icon (in this case the ( i ) icon) indicating more information will appear on activation, thereby differentiating itself - visually - from a normal navigational link.</p>
                            <figure>
                                <img src="../img/alert-popover.png" alt="A popover appears after activating a link.">
                                <figcaption>Popovers show additional "quickie" information.</figcaption>
                            </figure>

                            <h3>Placeholder text</h3>
                            <p>Placing example text within an input field can indicate the expected format of the data to be entered, and also indicate the type of data to be entered.</p>
                            <ul>
                                <li>Because the input fields appear to have text already entered, some usability concerns have been expressed. If using placeholder text, please respect the following:</li>
                                <li>Normal body font color and input/form field color should not be the same as the placeholder text. It should be darker and should be noticeably different.</li>
                                <li>Placeholder text should not resemble actual possible data. Meaning, don't use placeholder="12/20/1982". Rather use placeholder="mm/dd/yyyy".</li>
                                <li>Placeholder text should disappear when a user begins typing in the field, and should reappear if the value has been deleted fully. This is default browser functionality.</li>
                            </ul>
                            <figure>
                                <img src="../img/alert-placeholder.png" alt="A form field with placeholder text inside.">
                                <figcaption>A form field showing placeholder text within. Placeholder text helps guide the data that should be entered.</figcaption>
                            </figure>

                            <h3>Badges</h3>
                            <p>By applying a class of .badge to an element, you can make it look like a badge or notification. Keep in mind that making something look like a badge doesn't change the elements role. For example, giving a span text a class of .badge won't increase the visibility of the text to screen readers, so some care will need to be taken to make the important item focusable or auditory.</p>
                            <p>Note the tabindex here which allows this sentence to be in the taborder and announced. This isn't required, but it is helpful, especially if knowing how many notifications there are is important.</p>
                            <figure>
                                <img src="../img/alert-badge-01.png" alt="A default Bootstrap-style badge is gray in color">
                                <figcaption>Bootstrap offers a default of gray for badges.</figcaption>
                            </figure>

                            <figure>
                                <img src="../img/alert-badge-02.png" alt="A badge with a customized color of red.">
                                <figcaption>However, simple CSS can color badges.</figcaption>
                            </figure>
                        </div>
                        
                        <div class="section" id="mobile" tabindex="-1">
                            <h2>Responsive Usage</h2>
                            <p>The same application as used in Desktop Usage applies here. Additional CSS rules will adjust the view based on resolution.</p>
                            <p>Note there is no "hover" functionality on touch devices. It's always best practice to use the same functionality for hover and focus. This aids assistive technology as well as touch-enabled technology.</p>
                        </div>
                        
                        <div class="section" id="demos" tabindex="-1">
                            <h2>Demos</h2>
                            <h3>Informational</h3>
    <pre class="language-markup"><code class="html language-markup">&lt;section class="alert alert-info" role="alert"&gt;
        &lt;h1&gt;Information&lt;/h1&gt;
        &lt;p&gt;Details about information message here.&lt;/p&gt;
    &lt;/section&gt;</code></pre>

                            <h3>Warning</h3>
    <pre class="language-markup"><code class="html language-markup">&lt;section class="alert alert-warning" role="alert" tabindex="-1"&gt;
        &lt;h1&gt;Warning/Caution&lt;/h1&gt;
        &lt;p&gt;Details about warning/caution message here.&lt;/p&gt;
    &lt;/section&gt;</code></pre>

    <pre class="language-markup"><code class="html language-markup">&lt;section class="alert alert-warning" role="alert" tabindex="-1"&gt;
        &lt;h1&gt;Warning/Caution&lt;/h1&gt;
        &lt;p&gt;Details for the warning here. Focus should be received at this message and an easy way to continue the flow should be the next tabbable item. Focus is sent back to the triggering item.&lt;/p&gt;
        &lt;p&gt;&lt;a href="#first_name"&gt;Okay, I understand&lt;/a&gt;&lt;/p&gt;
    &lt;/section&gt;</code></pre>

                            <h3>Error</h3>
    <pre class="language-markup"><code class="html language-markup">&lt;section class="alert alert-danger" role="alert" tabindex="-1"&gt;
        &lt;h1&gt;Error&lt;/h1&gt;
        &lt;p&gt;Details about the error message here.&lt;/p&gt;
    &lt;/section&gt;</code></pre>
    <p>Note the <code>tabindex</code> on the Error message above. This is so the alert can be focused and announced via screen reader immediately following the action that caused the error.</p>

    <pre class="language-markup"><code class="html language-markup">&lt;section class="alert alert-danger" role="alert" tabindex="-1"&gt;
        &lt;h1&gt;Error&lt;/h1&gt;
        &lt;p&gt;Details about this error message go here. Focus should be received at this message and an easy way to fix the errors should be the next tabbable item, which send focus to the item in question.&lt;/p&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="#first"&gt;Your &lt;strong&gt;first name&lt;/strong&gt; is required&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#last"&gt;Your &lt;strong&gt;last name&lt;/strong&gt; is required&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#phone"&gt;Your &lt;strong&gt;phone number&lt;/strong&gt; is required&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#email"&gt;Your &lt;strong&gt;email address&lt;/strong&gt; is required&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/section&gt;</code></pre>

                            <h3>Validation/Success</h3>
    <pre class="language-markup"><code class="html language-markup">&lt;section class="alert alert-success" role="alert" tabindex="-1"&gt;
        &lt;h1&gt;Great success!&lt;/h1&gt;
        &lt;p&gt;You did everything right!&lt;/p&gt;
    &lt;/section&gt;</code></pre>

                            <h3>Field-level</h3>
                            <h4>Informational with label on hover/focus</h4>
    <pre class="language-markup"><code class="html language-markup">&lt;label for="first-name" id="first-name-tooltip" class="form-label has-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip/Helper text goes here" tabindex="0"&gt;First name:&lt;/label&gt;
    &lt;input type="text" id="first-name" class="form-control" name="first-name" placeholder="John Doe" /&gt;
    &lt;span class="constraint" aria-describedby="first-name"&gt;Must be at least 3 characters&lt;/span&gt;</code></pre>

                            <h4>Informational via tooltip (icon hover/focus)</h4>
    <pre class="language-markup"><code class="html language-markup">&lt;label for="email-address" id="last-name-tooltip" class="form-label"&gt;Email address:
        &lt;span class="has-tooltip glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Tooltip/Helper text goes here" tabindex="0"&gt;&lt;/span&gt;&lt;/label&gt;
    &lt;input type="email" id="email-address" class="form-control" name="email-address" placeholder="user@mail.com" /&gt;
    &lt;span class="constraint" aria-describedby="email-address"&gt;Must be a fully resolved email address.&lt;/span&gt;</code></pre>

                            <h4>Informational always visible</h4>
    <pre class="language-markup"><code class="html language-markup">&lt;label for="obscure-labbscure-tooltip" class="form-label"&gt;Obscure label: 
        &lt;span class="constraint instructional"&gt;This is important text that aids in completing this field correctly. It should not be hidden behind a tooltip.&lt;/span&gt;&lt;/label&gt;
    &lt;input type="text" id="obscure-label" class="form-control" name="obscure-label" placeholder="Jibber jabber jimmy" /&gt;
    &lt;span class="constraint" aria-describedby="obscure-label"&gt;Must be something you know, you know?&lt;/span&gt;</code></pre>

                            <h4>Constraint</h4>
    <pre class="language-markup"><code class="html language-markup">&lt;label for="first-name" id="first-name-tooltip" class="form-label has-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip/Helper text goes here" tabindex="0"&gt;First name:&lt;/label&gt;
    &lt;input type="text" id="first-name" class="form-control" name="first-name" placeholder="John Doe" /&gt;
    &lt;span class="constraint" aria-describedby="first-name"&gt;Must be at least 3 characters&lt;/span&gt;</code></pre>

                            <h3>Tooltip</h3>
    <pre class="language-markup"><code class="html language-markup">&lt;div class="uif-inputField uif-boxLayoutVerticalItem pull-left clearfix" data-role="InputField"&gt;
       &lt;label for="2_control" class="clearfix uif-label uif-labelBlock uif-tooltip"&gt;Field label:&lt;/label&gt;
       &lt;input id="2_control" type="text" name="2_control" value="1001" size="30" class="form-control input-sm uif-textControl uif-tooltip" data-role="Control"&gt;
    &lt;/div&gt;</code></pre>

    <pre class="language-markup"><code class="html language-markup">&lt;label for="email-address" id="last-name-tooltip" class="form-label"&gt;Email address: 
        &lt;span class="has-tooltip glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Tooltip/Helper text goes here" tabindex="0"&gt;&lt;/span&gt;&lt;/label&gt;
    &lt;input type="email" id="email-address" class="form-control" name="email-address" placeholder="user@mail.com" /&gt;
    &lt;span class="constraint" aria-describedby="email-address"&gt;Must be a fully resolved email address.&lt;/span&gt;</code></pre>

                            <h3>Popover</h3>
    <pre class="language-markup"><code class="html language-markup">&lt;label for="popover-test" class="form-label"&gt;Popover test:&lt;/label&gt;
    &lt;a id="popover-test" class="has-popover" href="#" data-toggle="popover" title="Popover title" data-placement="top" data-html="true" data-content="&lt;dl&gt;&lt;dt&gt;Name:&lt;dt&gt;&lt;dd&gt;John Doe&lt;/dd&gt;&lt;dt&gt;Email:&lt;/dt&gt;&lt;dd&gt;user@domain.com&lt;/dd&gt;&lt;dt&gt;Age:&lt;/dt&gt;&lt;dd&gt;32&lt;/dd&gt;&lt;/dl&gt;&lt;a href='#'&gt;See full listing"&gt;Some inquiry &lt;span class="has-tooltip glyphicon glyphicon-info-sign"&gt;&lt;/span&gt;&lt;/a&gt;</code></pre>

                            <h3>Modal</h3>
    <pre class="language-markup"><code class="html language-markup">&lt;div class="modal" role="dialog"&gt;
        &lt;div class="modal-dialog"&gt;
            &lt;div class="modal-content"&gt;
                &lt;div class="modal-header"&gt;
                    &lt;h4 class="modal-title"&gt;Modal title&lt;/h4&gt;
                    &lt;button type="button" class="close" data-dismiss="modal"&gt;&lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;&lt;span class="sr-only"&gt;Close&lt;/span&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="modal-body"&gt;
                    &lt;p&gt;One fine body&hellip;&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="modal-footer"&gt;
                    &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
                    &lt;button type="button" class="btn btn-link" data-dismiss="modal"&gt;Close&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>

                            <h3>Placeholder</h3>
    <pre class="language-markup"><code class="html language-markup">&lt;label for="birthday"&gt;Birth date:&lt;/label&gt;
    &lt;input type="date" name="birthday" id="birthday" placeholder="mm/dd/yyyy" /&gt; </code></pre>

                            <h3>Badges</h3>
    <pre class="language-markup"><code class="html language-markup">&lt;p tabindex="0"&gt;You have &lt;span class="badge"&gt;7&lt;/span&gt; new notifications.&lt;/p&gt;</code></pre>
    <pre class="language-css"><code class="html language-css">.badge { background: red; }</code></pre>
                        </div>
                        
                        <div class="section" id="use" tabindex="-1">
                            <h2>When to Use</h2>
                            <h3>Page-level messaging</h3>
                            <p>Page level messaging is very "in your face". It's obvious and should be relegated to important messages that pertain to the entire page. For messages related to individual fields, use field level messaging.</p>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Use</th>
                                        <th>Type</th>
                                        <th>Scenario and/or description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Informational</td>
                                        <td>The web application will undergo maintenance over the weekend and will not be available. An informational alert message will be at the top of the page informing the user of this downtime.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Informational</td>
                                        <td>Informational notices can also be used to call attention to important items on the page, such as a form section that requires special attention.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Informational</td>
                                        <td>Do not use informational messages to convey success, confirmation, error, or warning alerts.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Warning, Caution</td>
                                        <td>A user is editing values that affect other values. A warning or caution notice should be given alerting the user to the potential changes.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Warning, Caution</td>
                                        <td>If the system is having difficulty keeping an active connection, if some scripts haven't loaded, or if the application or page is in some way not running as expected, a warning or caution message should be displayed.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Warning, Caution</td>
                                        <td>Do not use warning or caution messages to convey success, confirmation, error, or informational items.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Error</td>
                                        <td>A user has submitted a form that contains an error, an error message should appear at the top of the page informing the user of any and all errors, and should provide a means of skipping directly to those errors to correct them. Error messages should receive a <code>tabindex</code> that allows focusing for accessibility purposes.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Error</td>
                                        <td>Error messages can be used generally to indicate something is wrong either with the page or with the system.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Error</td>
                                        <td>If the system is having difficulty connecting, or if some required scripts haven't loaded, or if any item depending on the page functioning properly isn't loading or is unavailable, an error message should be present indicating as much.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Error</td>
                                        <td>Error messages should not be used as warning or caution messages, as informational, or for validation success messages.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Success, Confirm</td>
                                        <td>A user has submitted a form or saved a number of values without issue. A confirmation/success message should appear at the top of the page (or form, or table where the actions took place) indicating that everything went smoothly.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Success, Confirm</td>
                                        <td>A correction has been made to a value and the value has been saved.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Success, Confirm</td>
                                        <td>Success and confirmation messages should not be used to present errors, warnings, or other informational messages.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Tooltips</td>
                                        <td>Tooltips may be used to display additional information, not critical to field completion, behind a label or icon so that when clicked or focused, is made visible.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Tooltips</td>
                                        <td><u><em><strong>Never</strong></em></u> place text that's critical to completing a form field inside a tooltip. Use the "always visible" option above for this. <span>Don't use tooltips for text that's more than 250 characters long, multiple sentences, or contains HTML.</span></td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Tooltips</td>
                                        <td>Don't use tooltips for text that's more than 250 characters long, multiple sentences, or contains HTML.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Tooltips</td>
                                        <td>Never display error, warning, or success messages within tooltips.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="Yes" src="http://www.iconwala.com/Icons/Koloria-Icons-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Popover</td>
                                        <td>Use a popover when you have more text than 250 characters long or that is multiple sentences, or when you need to use HTML. A good use-case would be inquiries. It is recommended to keep your HTML to hyperlinks, icons, and data lists (<code>&lt;dl&gt;</code>) to avoid complications. Try to keep your popovers brief and concise.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Popover</td>
                                        <td>Never overload your popovers with paragraphs of text or heavy HTML markup. Think of popovers as "slightly larger tooltips".</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Popover</td>
                                        <td><u><em><strong>Never</strong></em></u> place text that's critical to completing a form field inside a popover.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Popover</td>
                                        <td>Never display error, warning, or success messages within popovers.</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <h3>Field-level messaging</h3>
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
                                        <td>Inline validation is enabled and a user has entered invalid or incomplete values into a data field.</td>
                                        <td><p>A notice - either via tooltip or directly above the field - should appear indicating the value that has been entered is invalid. It should also offer suggestions that help correct the issue.</p><p>Note: Depending on the field type and its application (i.e., if it's in a datatable) only the tooltip type of field messaging is recommended to preserve visual layout.</p></td>
                                    </tr>
                                </tbody>
                            </table>

                            <h3>Tooltips</h3>
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
                                        <td>A user hovers over or focuses on a field label, and a bubble appears to hover over the field with more information on that filed.</td>
                                        <td>The tooltip bubble might offer instructions for completing the field or constraint text.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Tooltips should never, ever be used to present error information.</td>
                                        <td>Furthermore, tooltips should never disclose information that is required or necessary to complete the field, form, or page.</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h3>Popovers</h3>
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
                                        <td>A user activates an inquiry link/button to get more information on a particular data.</td>
                                        <td>The link or button that was activated should toggle the popover, which appears to the (left/right/top/bottom) of said link or button. It will contain the content contained within its <code>data-content</code> attribute, rendering it as plain text unless otherwise specified in the <code>data-html</code> option. Closing the popover should send focus back to the initiator.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Popovers should never, ever be used to present error information.</td><td>Furthermore, popovers should never disclose information that is required or necessary to complete the form field, form, page, or current action.</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h3>Modals</h3>
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
                                        <td>Within a datatable, a user clicks "Edit" button to edit the values in the row entry. A modal appears containing a small form with all of the values from the entry.</td>
                                        <td>Modals in Kuali are used to add data to a collection, to edit data already within a collection, and for lookup/search functionality. Occasionally they are used to confirm actions.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Modals are not to be used to provide informational, warning/caution, error, or success feedback messages.</td>
                                        <td>The information generally contained within such page-level messages is important enough to stay on the screen in case the user needs to reference it a second time. Modals essentially block further UI actions until the modal is closed and are not suited for page-level feedback.</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Modals are not to be used in place of tooltip functionality.</td>
                                        <td>Do not use a modal window to display information that should be shown from a tooltip.</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h3>Placeholder text</h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>alt src="httww.iconwm/Iconsria-Graphic/Png/Checkmark-icon.PNG"></td>
                                        <td>Signaling data format or type</td>
                                        <td>Use the placeholder to identify how the data should be formatted (i.e., <code>mm/dd/yyyy</code> or <code>xxx-xxx-xxxx</code>).</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="No" width="30" src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png"></td>
                                        <td>Precise data examples</td>
                                        <td>Placeholder text should not resemble what actual data might be (i.e., <code>12/20/1982</code> or <code>800-555-1212</code>)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="section" id="accessibility" tabindex="-1">
                            <h2>Accessibility Considerations</h2>
                            
                            <h3>Page Level Messaging</h3>
                            <p>Page level messaging is often crucial to the overall experience and usability as it provides feedback to user actions or status. Page level messages should be focusable - meaning, when Tabbing using the keyboard, or navigating the page using a screen reader - the content contained within page level messages should be accessible and announced. When messages are displayed, especially after completing an action, focus should move directly to the alert message so the content can be announced immediately following the causing action. Additionally, a means of continuing the task flow with minimal to no repetition should be provided in the alert. This may mean a primary action button to "continue forward to whatever's next" or a summary of error links that send focus to the field in question.</p>
                            
                            <h3>Field Level Messaging</h3>
                            <p>Any field level message that is necessary or required to complete the task should be made accessible, either by means of ARIA or through normal focusing. Even if the field level message isn't necessary or important, it's best practice (and kind) to make the content accessible.</p>
                            
                            <h3>Tooltips</h3>
                            <p>As tooltips are harder to make accessible (because we don't want to take focus away from the form field) it's important not to place any information critical, required, or necessary to task completion in a tooltip. Tooltips should be supplemental, meaning, the task can be completed even if the content within the tooltip is announced.</p>
                            
                            <h3>Popover</h3>
                            <p>Since popovers function via toggle it is important to bring focus to the popover once it's opened so that screen readers can announce what's in them. Once closed, send focus back to the initiator (button, link, etc.)</p>
                            
                            <h3>Modals</h3>
                            <p>When a modal is fired, focus should be sent to the modal. When a modal is closed focus should return back to the original element that fired the modal. This is is important so the user can maintain his or her workflow.</p>
                            
                            <h3>Placeholder text</h3>
                            <p>Placeholder text should look distinctively different from normal body copy and surrounding text. It should be obvious that the placeholder value isn't actual data. If possible, it should look closer to any help or contextual text in the area.</p>
                        
                            <h3>Accessibility Resources</h3>
                            <p>As always, use valid, semantic, proper HTML markup to optimize accessibility and usability of modals.</p>
                            <a href="http://validator.w3.org/">W3 HTML Validator </a><br>
                            <a href="http://wave.webaim.org/">WebAim WAVE </a>
                        </div>
                        
                        <div class="section" id="keyboard" tabindex="-1">
                            <h2>Keyboard Shortcuts</h2>
                            <p>None other than normal keyboard behavior.</p>
                        </div>
                        
                        <div class="section" id="notes" tabindex="-1">
                            <h2>Research and Discussion</h2>
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
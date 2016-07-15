<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'button-groups';
$child_name = 'Button Groups';
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
                            <li class="tab"><a href="#accessibility">Accessibility Considerations</a></li>
                            <li class="tab"><a href="#keyboard">Keyboard Shortcuts</a></li>
                            <li class="tab"><a href="#notes">Research &amp; Discussion</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <h1><?php echo $child_name ?></h1>

                    <div class="section" id="overview" tabindex="-1">
                        <h2>Overview</h2>
                        <p>Using button groups allows you to organize and group like or related buttons.</p>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Usage</h2>
                        <p>Group like buttons or buttons with similiar actions. For example, page-level actions in one group and document-level actions in another.</p>
                        <section>
                            <h3>Placement and location</h3>
                            <p>Much like with <a href="buttons.php">buttons</a>, place the primary action on the left, the secondary action to the right, followed by tertiary actions. Though when it comes to button groups, the most likely scenario will be all buttons on the same level.</p>
                            <p>There should never be two "primary" buttons in the same proximity to one another.</p>
                            <p>The primary action of the page should always be immediately clear.</p>
                        </section>
                    </div>
                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <p><code class="html">&lt;div class="btn-group"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;button class="btn btn-default"&gt;Left&lt;/button&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;button class="btn btn-default"&gt;Middle&lt;/button&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;button class="btn btn-default"&gt;Right&lt;/button&gt;<br />&lt;/div&gt;</code></p>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">Left</button>
                            <button type="button" class="btn btn-default">Middle</button>
                            <button type="button" class="btn btn-default">Right</button>
                        </div>
                    </div>
                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility</h2>
                        <p>Buttons are understood by all assistive technology and by all browsers. Keep in mind, however...</p>
                        <ul>
                            <li>The use of ARIA role="button" is not needed for buttons</li>
                            <li>If button functionality is needed, use a button. Don't change the default role of another element to act as a button</li>
                            <li>The button text will be announced by screen readers so be careful when naming buttons. For example "View" means nothing out of context so you'd want to tell <em>what</em> the visitor might be going to view.</li>
                        </ul>
                    </div>
                    <div class="section" id="notes" tabindex="-1">
                        <h2>Notes</h2>
                        <p>For individual buttons, please see <a href="buttons.php">Buttons</a>.</p>
                    </div>

                </div>

            </div>
        </div>
    </main>

    <?php include ('../includes/guide-footer.php') ?>
    <?php include ('../includes/footer-scripts.php') ?>
</body>
</html>
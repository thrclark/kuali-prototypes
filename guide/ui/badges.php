<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'help-callouts';
$child_name = 'Help &amp; Callouts';
$subchild_section = 'badges';
$subchild_name = 'Badges';
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
                        <p>Badges aren't so much elements as visual styles for elements. Bootstrap offers classes to make data and text display as a badge.</p>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Desktop Usage</h2>
                        <p>By applying a class of <code>.badge</code> to an element, you can make it look like a badge or notification. Keep in mind that making something look like a badge doesn't change the elements role. For example, giving a <code>span</code> text a class of <code>.badge</code> won't increase the visibility of the text to screen readers, so some care will need to be taken to make the important item focusable or auditory.<br>Note the <code>tabindex</code> here which allows this sentence to be in the taborder and announced. This isn't required, but it is helpful, especially if knowing how many notifications there are is important.</p>
                    	<figure>
                        	<img src="../img/badge.png" alt="Example of a badge">
                            <figcaption>A badge</figcaption>
                        </figure>
                    </div>
                     <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <h3>HTML</h3>
                        <pre class="html language-markup"><code class="html language-markup">&lt;p tabindex="0"&gt;You have &lt;span class="badge"&gt;7&lt;/span&gt; new notifications.&lt;/p&gt;</code></pre>
                    	<p>Bootstrap offers a default of gray for badges, but you can color them using custom CSS.</p>
                    	<h3>CSS</h3>
                        <code class="language-css">.badge { background: red; }</code><br><br>
                    	<figure>
                        	<img src="../img/badge2.png" alt="Example of a red badge">
                        	<figcaption>A red colored badge</figcaption>
                        </figure>
                    </div>
                    <div class="section" id="mobile" tabindex="-1">
                        <h2>Responsive Usage</h2>
                        <p>The same application as used in Desktop Usage applies here. Additional CSS rules will adjust the view based on resolution.<br>Note there is no "hover" functionality on touch devices. It's always best practice to use the same functionality for hover and focus. This aids assistive technology as well as touch-enabled technology.</p>
                    </div>
                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility</h2>
                        <p>Pellentesque commodo ornare scelerisque. Praesent sit amet nibh dictum, varius nisl eget, varius augue. Maecenas tortor elit, iaculis et purus at, cursus sollicitudin ante. Pellentesque viverra vel leo vitae pretium. In at imperdiet libero. Sed placerat tellus risus, in lobortis nunc dictum ac. Maecenas luctus nisl sit amet urna tempus convallis. Praesent interdum neque placerat sapien laoreet, in imperdiet nisi euismod. Ut dignissim nunc vel nunc egestas dignissim condimentum quis lacus. Donec aliquet diam vel nulla sodales rutrum. Nulla vehicula, ante eget faucibus iaculis, felis mi facilisis tortor, sed blandit risus justo in sapien.</p>
                    </div>
                    <div class="section" id="keyboard" tabindex="-1">
                        <h2>Keyboard Shortcuts</h2>
                        <p>None</p>
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
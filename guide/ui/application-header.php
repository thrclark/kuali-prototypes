<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'navigation';
$child_name = 'Navigation';
$subchild_section = 'application-header';
$subchild_name = 'Application Header';
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
                        <p>The application header is present to some degree in all Kuali application interfaces. This guide explains how it is to be used.</p>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Usage</h2>
                        
                        <h3>Application header</h3>
                        <figure>
                            <img src="../img/header.png" alt="The application header">
                            <figcaption>The application header</figcaption>
                        </figure>
                        
                        <h4>Quick summary of features:</h4>
                        <ul>
                        	<li>Contains the Kuali brand as well as "level zero" navigational items for whatever application is using it.</li>
                            <li>Provides quick access to navigation and global tasks such as the Action List and searching.</li>
                        </ul>

                        <h4>When to use this component:</h4>
                        <ul>
                        	<li>This feature is enabled in all Kuali applications by default. It cannot be turned off.</li>
                        </ul>
                    </div>
                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        
                        <h3>Application Header</h3>
                     	<p>The application header for each individual application should be located in the <code>includes/</code> folder within the application folder. Since the file is included, all of the necessary markup and styles will be pulled in as well.</p>
<pre class="language-markup"><code class="html language-markup">&lt;?php include ('/prototypes/{application-folder}/includes/uif-applicationHeader.php') ?&gt;</code></pre>
                        <p>The Application header includes <code>.uif-toolbar.php</code> at the bottom, so this is really two included files.</p>
                    </div>
                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility Considerations</h2>
                        <p>There are no special accessibility considerations required for the build footer. Follow best practices for markup and ensure the structure is valid and semantic which will help ensure the content is readable by assistive technology.</p>
                    	
                        <h3>Accessibility Resources:</h3>
                        <p>As always, use valid, semantic, proper HTML markup to optimize accessibility and usability of modals.</p>
                        <a href="http://validator.w3.org/">W3 HTML Validator </a><br>
                        <a href="http://wave.webaim.org/">WebAim WAVE </a>
                    </div>
                    <div class="section" id="keyboard" tabindex="-1">
                        <h2>Keyboard Shortcuts</h2>
                        <p>Tabbing, as per normal navigational movement, should also work here. Nothing out of the ordinary.</p>
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
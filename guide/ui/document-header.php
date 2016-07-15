<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'navigation';
$child_name = 'Navigation';
$subchild_section = 'document-header';
$subchild_name = 'Document header';
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
                        <p>The document header is present on Kuali documents to help the user easily identify the document that they are currently viewing.  When choosing which information to display in the document header, consider only the essential information used to identify a document, or information that a user may need to know quickly when opening a document.</p>
                    </div>
                    
                    <div class="section" id="usage" tabindex="-1">
                        <h3>Document header</h3>
                        <figure>
                            <img src="../img/docheader-full.png" alt="The document header in its full state on a desktop display.">
                            <figcaption>Document header on a desktop showing all options.</figcaption>
                        </figure>

                        <figure>
                            <img src="../img/docheader-mobile.png" alt="The document header in its reduced state on a mobile device.">
                            <figcaption>Document header on mobile. The meta information has been collapsed into a single menu here.</figcaption>
                        </figure>

                        <figure>
                            <img src="../img/docheader-scrolled.png" alt="The document header on a mobile device after scrolling showing reduced content.">
                            <figcaption>When scrolling (mobile or desktop) the document header collapses to show just the application section and document title. In some cases it may also show the current action or task.</figcaption>
                        </figure>
                        
                        <h4>Quick summary of features:</h4>
                        <ul>
                            <li>The document header contains information relevant to the application, document and current task.</li>
                            <li>Pertinent and necessary information - usually information that's needed throughout a document or is often referenced - is shown.</li>
                            <li>If the document is a child of another document, the relationship can be displayed in the document header by providing a breadcrumb like link to the parent document. For example, see KC budget versions which are children of proposal documents.</li>
                        </ul>

                        <h4>When to use this component:</h4>
                        <ul>
                            <li>This component is enabled be default.</li>
                        </ul>
                    </div>

                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        
                        <h3>Document header</h3>
                     	<p>The document header for each individual application should be located in the includes/ folder within the application folder. Since the file is included, all of the necessary markup and styles will be pulled in as well.</p>

<pre class="language-php"><code class="html language-php">&lt;?php include ('/prototypes/{application-folder}/includes/uif-docHeader.php') ?&gt;</code></pre>
                        <p><a href="http://jsfiddle.net/clrux/eequgzL3/">See an example on JSFiddle</a></p>
                    </div>

                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility Considerations</h2>
                        <p>There are no special accessibility considerations required for the document header. Follow best practices for markup and ensure the structure is valid and semantic which will help ensure the content is readable by assistive technology.</p>
                        <p>When activating buttons or links that open up additional panels with more information, focus should be sent to the panel when it's opened so the contents can be read immediately. Additionally, the use of ARIA should be used to indicate whether or not a panel is open or closed, unless the panel closes automatically when focus is lost.</p>
                    	
                        <h3>Accessibility Resources:</h3>
                        <p>As always, use valid, semantic, proper HTML markup to optimize accessibility and usability of modals.</p>
                        <ul>
                            <li><a href="http://validator.w3.org/">W3 HTML Validator</a></li>
                            <li><a href="http://wave.webaim.org/">WebAim WAVE</a></li>
                        </ul>
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
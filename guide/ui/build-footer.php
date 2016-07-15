<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'content-sections';
$child_name = 'Content Sections';
$subchild_section = 'build-footer';
$subchild_name = 'Build Footer';
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
                        <p>During development, testing, and whenever enabled, Kuali offers a container beneath the footer (dubbed the "build footer") which contains information on the build version any any other version-related info. This component spec defines how and when to use it.</p>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Usage</h2>
                        <figure>
                            <img src="../img/build-footer.png" alt="Image of a typical build footer">
                            <figcaption>Image of a typical build footer</figcaption>
                        </figure>
                        
                        <h4>Quick summary of style features:</h4>
                        <ul>
                            <li>Appears for development and bug fixing, but disabled for public-facing application interfaces.</li>
                            <li>Contains the Kuali logo, version control information, the latest build date and database.</li>
                            <li>Includes a link to send feedback to the Kuali team.</li>
                        </ul>

						<h4>When to use this feature:</h4>
                        <ul>
                            <li>Enable this feature when working in a development environment.</li>
                        </ul>

                        <h4>When not to use this feature:</h4>
                        <ul>
                            <li>Disable this feature for public-facing or production interfaces.</li>
                        </ul>
                    </div>
                    
                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <h3>Build Footer</h3>
                        <p>The footer file lives in /prototypes/cross-project/includes/build-footer.php and can be included. Variables can be set programmatically to enable or disable this component.</p>
<pre class="language-markup">
<code class="html language-markup">
&lt;footer id="build-footer"&gt;
    &lt;div class="container"&gt;
        &lt;div class="k-logo col-md-2 text-left"&gt;
            &lt;a href="#"&gt;&lt;img src="../../themes/kboot/images/footer-k-logo.png" alt="Kuali Foundation" /&gt;&lt;/a&gt;
        &lt;/div&gt;
        &lt;div class="meta-info col-md-10" role="contentinfo"&gt;
            &lt;p&gt;
                &lt;span id="fetch-branch-release-tag"&gt;branches/release-5-0-2&lt;/span&gt;
                &lt;span id="fetch-revision"&gt;(rev: 41148)&lt;/span&gt;
                &lt;span id="fetch-revision-date-time"&gt;2013-05-13_10-26-58&lt;/span&gt;
                &lt;span id="fetch-db"&gt;(MySQL)&lt;/span&gt;
                &lt;span&gt;&lt;a href="#"&gt;Send Feedback&lt;/a&gt;&lt;/span&gt;
            &lt;/p&gt;
        &lt;/dv&gt;
    &lt;/div&gt;
&lt;/footer&gt;</code></pre>
                        
                        <h3>CSS (LESS)</h3>
<pre class="language-css"><code class="html language-css">
footer#build-footer {
    background: #383838;
    clear: both;
    float: none;
    height: 50px;
    padding: 8px;
    box-shadow: inset 0 1px 0 2px rgba(0, 0, 0, .10);
    margin-top: 20px;
    margin-bottom: -1.5em;
    
    .k-logo {
        
        img {
            max-height: 34px;
        }
    }
    
    .meta-info {
        
        span {
            display: inline-block;
            margin-left: 8px;
        }
        
        p {
            text-align: right;
            color: #7f7f7f;
            margin: 0;
            padding: 8px 0;
            
            a {
                color: white;
            }
        }
    }
}</code></pre>
                    </div>
                    
                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility Considerations</h2>
                        <p>There are no special accessibility considerations required for the build footer. Follow best practices for markup and ensure the structure is valid and semantic which will help ensure the content is readable by assistive technology.</p>
                    
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
    </main>

    <?php include ('../includes/guide-footer.php') ?>
    <?php include ('../includes/footer-scripts.php') ?>
</body>
</html>
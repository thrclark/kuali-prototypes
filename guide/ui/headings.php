<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'typography';
$child_name = 'Typography';
$subchild_section = 'headings';
$subchild_name = 'Headings';
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
                        <p>Headings (<code>&lt;h1&gt;</code>, <code>&lt;h2&gt;</code>, <code>&lt;h3&gt;</code>, <code>&lt;h4&gt;</code>, <code>&lt;h5&gt;</code>, and <code>&lt;h6&gt;</code>) are important, and do the following to your interface:</h6>
                        <ul>
							<li>Allow users to skim your content as they summarize what's below them</li>
							<li>Provide better SEO by allowing search engines to show document structure</li>
							<li>Provide structure and hierarchy</li>
							<li>Allow easy navigation to screen readers</li>
						</ul>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Usage</h2>
                        <p>We advise headings to be used to:</p>
                        <ul>
							<li>Maintain visual size hierarchy. An <code>h1</code> should be bigger than an <code>h2</code> which should be bigger than an <code>h3</code>. For headings <code>h4</code>, <code>h5</code>, and <code>h6</code>, you may use visual weight to differentiate level rather than size.</li>
							<li>Maintain structural order. An <code>h1</code> should come first and there should ideally only be one <code>h1</code> on the page. You may have any number of <code>h2</code>'s and so on, but only after the preceding structural heading has been used.</li>
						</ul>
                        <p>Things to keep in mind:</p>
                        <ul>
							<li>Do not style normal body copy or paragraph copy to look like a heading and do not use a heading as body or paragraph copy. If large text is needed within the body or a paragraph, create a custom CSS style for it, rather than using a heading element.</li>
							<li><b>Calibri</b> font for headings, with <b>Arial</b> as a fallback</p></li>
						</ul>
                    </div>
                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <h3>HTML</h3>
                        <h1>Heading 1</h1>
                        <pre class="language-markup"><code class="language-markup">&lt;h1&gt;Heading 1&lt;/h1&gt;</code></pre>
                        <h2>Heading 2</h2>
                        <pre class="language-markup"><code class="language-markup">&lt;h2&gt;Heading 2&lt;/h2&gt;</code></pre>
                        <h3>Heading 3</h3>
                        <pre class="language-markup"><code class="language-markup">&lt;h3&gt;Heading 3&lt;/h3&gt;</code></pre>
                        <h4>Heading 4</h4>
                        <pre class="language-markup"><code class="language-markup">&lt;h4&gt;Heading 4&lt;/h4&gt;</code></pre>
                        <h5>Heading 5</h5>
                        <pre class="language-markup"><code class="language-markup">&lt;h5&gt;Heading 5&lt;/h5&gt;</code></pre>
                        <h6>Heading 6</h6>
                        <pre class="language-markup"><code class="language-markup">&lt;h6&gt;Heading 6&lt;/h6&gt;</code></pre>

                    </div>
                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility Considerations</h2>
                        <ul>
							<li>Heading copy should be greater than 16px so as not to confuse it with body or paragraph copy.</li>
							<li>Heading contrast ratio should be at or above 3:1.</li>
						</ul>
                        <h3>Accessibility Resources</h3>
                        <a href="http://webaim.org/resources/contrastchecker/">Color Contrast Checker</a><br>
						<a href="http://validator.w3.org/" >W3 HTML Validator</a><br>
                        <a href="http://wave.webaim.org/" >WebAim WAVE</a>        
                    </div>
                    <div class="section" id="notes" tabindex="-1">
                    	<h2>Keyboard Shortcuts</h2>
                        <p></p>
                    </div>
                    <div class="section" id="notes" tabindex="-1">
                        <h2>Research and Discussion</h2>
                        <p>Includes usability research findings and recommendations, information from the UIM discussion page, links, chapters, articles, etc that supports the design decision.</p>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <?php include ('../includes/guide-footer.php') ?>
    <?php include ('../includes/footer-scripts.php') ?>
</body>
</html>
<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'help-callouts';
$child_name = 'Help &amp; Callouts';
$subchild_section = 'suggest-autocomplete';
$subchild_name = 'Suggest/Autocomplete';
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
                        <p>When performing search actions on some websites, a list of potentially matching items appears as you start typing and filters and refines itself with each added (or subtracted) letter keyed. These components allow for quicker searching on larger collections and help aid data sanitation for safer searching against databases.</p>
                    	<h3>Important note of differentiation</h3>
                        <p>It's important to note that the browser's built-in <code>autocomplete</code> is different from this component and is dependent upon users' browser settings (and therefore unreliable). We will need to use JavaScript to enable this functionality.</p>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Desktop Usage</h2>
                        <h3>Search suggest</h3>
                        <figure>
                        	<img src="../img/search-suggest1.png" width="400px" height="auto" alt="A search box with no input">
                            <figcaption>A search box with no input</figcaption>
                        </figure>
                        <br><br>
                        <figure>
                        	<img src="../img/search-suggest2.png" width="528px" height="auto" alt="A search box with input and a list of potentially matching items">
                        	<figcaption>A search box with input and a list of potentially matching items</figcaption>
                        </figure>
                        <h3>Quick summary of features:</h3>
                        <ul>
                        	<li>Uses jQuery UI widget to draw the search suggest component; jQuery is inherently accessible, this component notwithstanding</li>
                            <li>By excluding the jQuery UI CSS classes, look and feel can be wholly customized, either by Bootstrap or custom</li>
                        </ul>
                        <h3>When to use this component:</h3>
                        <ul>
                        	<li>Whenever large collections are to be searched (i.e., names, email addresses, site-wide searching)</li>
                            <li>Whenever the goal data isn't known; exploratory searching</li>
                        </ul>
                    </div>
                    <div class="section" id="mobile" tabindex="-1">
                        <h2>Mobile Usage</h2>
                        <p>Both search suggest and autocomplete should behave as input fields normally do on mobile, including the presentation of the results. There is no special customization needed for these on mobile devices.</p>
                    </div>
                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <h3>HTML</h3>
                        <pre class="language-markup"><code class="html language-markup">&lt;form action="" method="" class="form-inline"&gt;
    &lt;label for="search1" class="form-label"&gt;Search:&lt;/label&gt;
    &lt;input type="search" id="search1" name="q" class="form-control" /&gt;
    &lt;input type="submit" class="btn btn-default" value="Search" /&gt;
&lt;/form&gt;</code></pre>
						<h3>CSS</h3>
                        <p>The only necessary customizations are to determine the display of the result list. These may be customized.</p>
                        <pre class="language-markup"><code class="html language-css">.ui-autocomplete {
    background: white;
    border: 1px solid #ccc;
    padding: 0;
    margin: 0;
    max-width: 350px;
    list-style: none;
}
 
.ui-autocomplete li a.ui-state-hover {
    background: #0066cc;
    color: white;
}
                        </code></pre>
                        <h3>JavaScript</h3>
                        <p>In the example below, our searched data comes in the form of a predefined variable (for simplicity and for the example). In production or working configurations, this searchable variable can be anything. Simply change <code>source</code> in the initialization function towards the bottom.</p>
                        <pre class="language-markup"><code class="html language-javascript">$(function() {
    var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
    ];
     
    $("#search1").autocomplete({
        source: availableTags
    });
});</code></pre>
						<p>jQuery UI is required for this implementation.</p>
                    </div>
                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility</h2>
                        <p>Since search suggest and autocomplete are JavaScript enhancements, care should be taken to ensure they're accessible. This means that once a results list is drawn, it should be announced and navigable via the keyboard. As each option is highlighted (either with the mouse or the keyboard) its value should be announced. Once a value is chosen, that too should be announced (though this can be handled by filling in the <code>text</code> field and bringing focus to it. Finally, ARIA should be used on the component and as the list is filtered or changed, those changes should be announced.<br>It is important to note that using an updated version of jQuery UI will automatically add the correct and appropriate ARIA making this accessible.</p>
                        <br>
                        <h3>Accessibility Resources</h3>
                        <p>As always, use valid, semantic, proper HTML markup to optimize accessibility. The less "hacking" the better. Don't over-engineer as it actually reduces accessibility.</p>
                    	<a href="http://validator.w3.org/">W3 HTML Validator </a><br>
                        <a href="http://wave.webaim.org/">WebAim WAVE </a>
                    </div>
                    <div class="section" id="keyboard" tabindex="-1">
                        <h2>Keyboard Shortcuts</h2>
                        <h3>The following keystrokes should control this component:</h3>
                        <ul>
                        	<li><code>Tab</code> should function as it normally does, entering a component and bring focus to it</li>
                            <li><code>Down</code> arrow key should navigate into and within an opened list of suggestions</li>
                            <li><code>Up</code> arrow key should navigate within an opened list of suggestions</li>
                            <li><code>Esc/Escape</code> should close the list of suggestions and return focus to the <code>input</code> type initiator</li>
                            <li><code>Enter</code> should select a highlighted suggestion, fill in the parent initiator, close the list of suggestions, and return focus to the parent initiator</li>
                        </ul>
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
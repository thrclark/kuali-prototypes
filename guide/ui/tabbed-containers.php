<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'content-sections';
$child_name = 'Content Sections';
$subchild_section = 'tabbed-containers';
$subchild_name = 'Tabbed Containers';
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
                        <p>Tabbed containers have multiple tabs separating different pieces of content for a similar collection. Much like the tabs on this component spec, they clean up an interface by allowing users to focus on and consume only on one piece of information at a time. It hides the other "sections" of content. On one hand this aids usability by giving the user less content to sift through all at once, especially when using thoughtful and intuitive tab names. On the other hand, there have been cases where using tabs hinders usability because it does in fact hide content, requiring users to explore the tabs to potentially find the information they're looking for. Using good tab names that summarize the contents within helps mitigate these issues.</p>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Desktop Usage</h2>
                        <h3>Example with graphic</h3>
                        <figure>
                        	<img src="../img/tabbed-containers.png" alt="A tabbed container with five tabs/sections">
                            <figcaption>A tabbed container with five tabs/sections</figcaption>
                        </figure>
                        <h4>Quick summary of features:</h4>
                        <ul>
                        	<li>Collect and organize content into tabs for interface simplicity and cleanliness.</li>
                            <li>Increases usability by showing users less information at one time, avoiding overwhelming them</li>
                            <li>Tabs act as navigational items which is especially helpful to users with low vision, blindness or other visual impairments, and those who rely on a screen reader for content consumption.</li>
                            <li>Uses Bootstrap (CSS, HTML, and JS)</li>
                            <li>Default functionality just hides additional tab content, but has an option to only download and show each tabbed content upon request, thus saving page size. This is especially good with mobile presentations.</li>
                        </ul>
                        <h4>When to use this component:</h4>
                        <ul>
                        	<li>When dealing with content that can be grouped or broken up.</li>
                            <li>When dealing with content that doesn't need to be seen alongside other content.</li>
                            <li>Tabs act as navigational items which is especially helpful to users with low vision, blindness or other visual impairments, and those who rely on a screen reader for content consumption.</li>
                            <li>In the above example, we're showing one period per tab.</li>
                            <li>The AJAX-requested content is good for mobile devices and on slower data connections.</li>
                        </ul>
                    </div>
                    <div class="section" id="mobile" tabindex="-1">
                        <h2>Responsive Usage</h2>
                        <p>Add <code>.uif-responsive</code> to the <code>element</code> to make it responsive.</p>
                        <h3>Quick summary of features:</h3>
                        <li>Has an optional <code>.uif-responsive</code> class which adds AJAX functionality for each tabbed content. This saves page size and download times making this use ideal for mobile devices or slower connections.</li>
                    	<h3>When to use this component:</h3>
                        <li>...</li>
                    </div>
                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <h3>HTML</h3>
                        <p>Below is basic markup showing tabbed containers. To add responsive functionality to tabbed containers, simply add a class of <code>"uif-responsive"</code> to the parent <code>div</code>. Make sure you use the correct code language in the Code Block.<br>For AJAX functionality on desktop or mobile devices, add <code>.uif-responsive</code> to the parent <code>.tabbed-container</code>.</p>
                    	<pre class="language-markup"><code class="html language-markup">&lt;div class="tabbed-container"&gt;
    &lt;ul id="tabs" class="nav nav-tabs" data-tabs="tabs" role="tablist"&gt;
        &lt;li class="active"&gt;&lt;a href="#t1" id="tab1" data-toggle="tab" role="tab" aria-selected="true"&gt;Tab 1&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#t2" id="tab2" data-toggle="tab" role="tab" aria-selected="false"&gt;Tab 2&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#t3" id="tab3" data-toggle="tab" role="tab" aria-selected="false"&gt;Tab 3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
 
    &lt;div id="my-tab-content" class="tab-content"&gt;
        &lt;div id="t1" class="tab-pane active" role="tabpanel" aria-hidden="false" aria-labelledby="tab1" tabindex="-1"&gt;
            This is the content within Tab 1
        &lt;/div&gt;
        &lt;div id="t2" class="tab-pane" role="tabpanel" aria-hidden="true" aria-labelledby="tab2" tabindex="-1"&gt;
            This is the content within Tab 2
        &lt;/div&gt;
        &lt;div id="t3" class="tab-pane" role="tabpanel" aria-hidden="true" aria-labelledby="tab3" tabindex="-1"&gt;
            This is the content within Tab 3
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
						<h3>CSS</h3>
                        <p>The only CSS we're using is to provide some padding for the contents of the tab itself.</p>
                    	<pre class="language-markup"><code class="html language-css">.tab-content .tab-pane {
    padding: 16px;
}</code></pre>
						<h3>JavaScript</h3>
                    	<pre class="language-markup"><code class="html language-javascript">var tabs = $('#tabs li'),
    cont = $('#my-tab-content .tab-pane');
$('#tabs li a').click(function() {   
    // set aria states for tabs
    tabs.each(function() {
        $(this).find('a').attr('aria-selected', 'false');
    });
    $(this).attr('aria-selected', 'true');
     
    // set aria states for content
    cont.each(function() {
        $(this).attr('aria-hidden', 'true')
    });
    $($(this).attr('href')).attr('aria-hidden', 'false').focus();
});
 
// set keydown events on tabList item for navigating tabs
$('#tabs').delegate('li', 'keydown', function(e) {
    switch (e.which) {
        case 37: case 38:
        if ($(this).prev().length != 0) {
            $(this).prev().find('a').click();
        } else {
            $(this).parent().find('li:last a').click();
        }
        break;
        case 39: case 40:
        if ($(this).next().length != 0) {
            $(this).next().find('a').click();
        } else {
            $(this).parent().find('li:first a').click();
        }
        break;
    }
});</code></pre>
					<h3>JSFiddle</h3>
                    <a href="http://jsfiddle.net/clrux/6SDEL/">View the JSFiddle</a> for a working example of tabbed containers.
                    <br>
                    <h3>KRAD Library</h3>
                    <a href="http://env14.rice.kuali.org/kr-krad/kradsampleapp?viewId=Demo-TabGroupView&formKey=4356e521-a13d-4bb9-9bef-71e83891c384&cacheKey=rso8fobystpouua55s989iha7n">View this component</a> in the current KRAD component library.
                    </div>
                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility Considerations</h2>
                        <ul>
                        	<li>Tabs must be focusable. Using <code>&lt;a&gt;</code>'s generally works well. Notice here that <code>href</code> value targets the <code>ID</code> of the <code>tab-pane</code>.</li>
                            <li>Tab panes must be focusable using <code>tabindex="-1"</code>. Modern browsers will page-link to the hashed target.</li>
                            <li>Use correct <code>heading</code> hierarchy within the tabs. If you make each tabbed content container a section you can use <code>&lt;h1&gt;</code> within it and still maintain semantics.</li>
                        </ul>
                        <h3>Behavior without scripting:</h3>
                        <p>If JavaScript is broken, disabled, or otherwise unavailable, all of the content tucked away within the tabs should be present. This includes the <code>&lt;div&gt;</code> or <code>&lt;section&gt;</code> containing each piece of content along with <code>heading</code> hierarchy. This will allow both sighted and non-sighted users to see visual hierarchy.</p>
                    	<h3>Accessibility Resources</h3>
                        <a href="http://validator.w3.org/">W3 HTML Validator </a><br>
                        <a href="http://wave.webaim.org/">WebAim WAVE </a>
                    </div>
                    <div class="section" id="keyboard" tabindex="-1">
                        <h2>Keyboard Shortcuts</h2>
                        <p>There are no keyboard shortcuts outside of the normal tabbing interaction common among the web.</p>
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
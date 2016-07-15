<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'navigation';
$child_name = 'Navigation';
$subchild_section = 'vertical-navigation';
$subchild_name = 'Vertical Navigation';
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
                        <p>Vertical navigation in Kuali applications is used primarily to section individual pieces of content within pages, functioning almost like a subnavigational element. However, the use isn't limited to subnavigation.</p>
                    	<h3>Variations</h3>
                        <ol>
                        <li>Collapsible / Non-collapsible</li>
                        <li>Single-level / Multiple levels</li>
                        </ol>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Desktop Usage</h2>
                        <h3>Examples of vertical navigation within Kuali Coeus Proposal Development and Budget Development, respectively</h3>
                        <figure>
                    		<img src="../img/verticalnav1.png" alt="A vertical navigation bar with a submenu">
                            <figcaption>A vertical navigation bar with a submenu</figcaption>
                        </figure>
                        <figure>
                        	<img src="../img/verticalnav2.png" alt=""> 
                            <figcaption>A vertical navigation bar with no submenu</figcaption>
                        </figure>
                        <h3>Example of a collapsed vertical navigation</h3>
                        <figure>                      
                        	<img src="../img/verticalnav3.png" alt="A collapsed vertical navigation bar with a item selected">
                            <figcaption>A collapsed vertical navigation bar with a item selected</figcaption>
                        </figure>
                        <h4>Quick summary of features:</h4>
                        	<ul>
                            <li>Vertical navigation uses Bootstrap grid sizing</li>
                            <li>Offers an option to collapse the sidebar, reducing specific items to their icons for more space in the main content portion</li>
                            <li>Offers an option to have nested levels, providing up to three-level depths of children pages</li>
                            <li>Allows buttons or actions to be placed above the navigation for use to get back to a parent document</li>
                            <li>When collapsed, hovering or focusing on each item will expand its submenus for quick and easy navigation. Additionally, tabbing through the page will focus the navigation links as if it were expanded making it more useful for those users using assistive tech.</li>
                            <li>Vertical navigation is automatically collapsed on screens with a width less than 768px wide, and when going from desktop to tablet or below (i.e., when playing around with the browser by resizing it, which is not a real-world example of use).</li>
                            </ul>
                        <h4>When to use this component:</h4>
                        	<ul>
                            <li>Use this component any time navigation is needed within your interface.</li>
                            </ul>
                    </div>
                    <div class="section" id="mobile" tabindex="-1">
                        <h2>Responsive Usage</h2>
                        <p>Since much of the Kuali interface is built upon Bootstrap's grid system, responsive switching is automatically included and enabled. When the interfaces switches into a responsive-sized layout, the navigation collapses and becomes horizontal navigation with a menu icon in the top right. Tapping that icon will expand the navigation. Tapping it again will close the navigation.<br><br>Child pages are hidden initially when the menu is opened, but tapping a parent will expand its children and make them available for selecting.</p>
                    </div>
                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <h3>Bootstrap's grid</h3>
                        <p>Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options.</p>
                        <b>Left-side vertical navigation example (with main content to the right)</b>
                        <p>The left-side container takes up 3 of 12 columns, regardless of screen width. The right-side container takes up 9 of 12, regardless of screen width.</p>
                        <b>Basic data table markup</b>
                        <pre class="language-markup">
                        	<code class="html language-markup">&lt;div class="container"&gt;
    &lt;div class="col-md-3"&gt;
        &lt;nav&gt;&lt;/nav&gt;
    &lt;/div&gt;
    &lt;div class="col-md-9"&gt;
        &lt;main&gt;&lt;/main&gt;
    &lt;/div&gt;
&lt;/div&gt;				</code>
                        </pre>
                        <b>For kicks, a three-column layout (main content in the middle)</b>
                        <b>Modal within a modal</b>
                        <pre class="language-markup">
							<code class="html language-markup">&lt;div class="container"&gt;
	&lt;div class="col-md-3"&gt;
        &lt;nav&gt;&lt;/nav&gt;
    &lt;/div&gt;
    &lt;div class="col-md-6"&gt;
        &lt;main&gt;&lt;/main&gt;
    &lt;/div&gt;
    &lt;div class="col-md-3"&gt;
        &lt;aside&gt;&lt;/aside&gt;
    &lt;/div&gt;
&lt;/div&gt; 				</code>
						</pre>
                        <h3>CSS</h3>
                        <p>Grid-based styles come from Bootstrap, however there are custom styles added by Kuali to manage the styles for the vertical navigation.</p>
                    	<pre class="language-css">
							<code class="language-css">Styles are currently found in uif-navigation.less and are in some serious need of cleanup.
TODO: Cleanup styles, LESSify them, and include them here.
							</code></pre>
                    	<h3>JSFiddle</h3>
                        <p><a href="http://jsfiddle.net/clrux/YS9hQ/embedded/result/">View this markup</a> on JSFiddle.</p>
                    </div>
                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility Considerations</h2>
                        <p>The navigation needs to be keyboard accessible. This means using the Tab key to navigate through each menu item and its children in order, much like reading through an unordered list. Use <code>ARIA role's</code> to identify the container as navigation which will allow quicker access via screen readers and other assistive technology. You may even consider using a <code>heading</code>, even if it's positioned off-screen. Some other things to keep in mind:</p>
                    	<ul>
                        	<li>When the navigation is expanded (not in its collapsed state) the icon labels are visible and so the icons that accompany them should not be announced.</li>
                        	<li>When the navigation is collapsed, the label text is hidden off-screen (still accessible to assistive tech) and so either the icons should be announced, or the label text should be announced.</li>
                        	<li>For subnavigation that has child navigation (i.e., the parent link merely opens child links) the following needs to happen when opening a submenu:</li>
                    		<ul>
                        		<li>When expanded is true, send focus to the first child link, using proper, semantic un/ordered list markup.</li>
                                <li>When expanded is false, send focus back to the parent item.</li>
                        	</ul>
                        <h3>Accessibility Resources:</h3>
                        <p>As always, use valid, semantic, proper HTML markup to optimize accessibility and usability of modals.</p>
                        <a href="http://validator.w3.org/">W3 HTML Validator </a><br>
                        <a href="http://wave.webaim.org/">WebAim WAVE </a>
                    </div>
                    <div class="section" id="keyboard" tabindex="-1">
                        <h2>Keyboard Shortcuts</h2>
                        <p>Since navigation is a primary rule when using anything on the Web, keyboard functionality should be maintained. Using proper, semantic code will help with this.</p>
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
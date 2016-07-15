<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'navigation';
$child_name = 'Navigation';
$subchild_section = 'sticky-navigation';
$subchild_name = 'Sticky Navigation';
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
                        <p>Sticky elements, as their name implies, remains affixed to the top (or bottom or side(s)) of the viewport even when page content is scrolled. Bootstrap offers this component, but Kuali has its own implementation. This component applies only to <code>.uif-viewHeader</code>, <code>.uif-navigation</code>, and <code>.uif-footer</code>. </p>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Usage</h2>
                        <h3>.uif-viewHeader</h3>
                        <p>You can make the <code>viewHeader</code> "sticky" by adding the class <code>.uif-sticky</code>. When it receives this class, it will "stick" to the top of the browser window and remain visible even when other contents scroll behind it, as seen in the following two screenshots.</p>
                    	<figure>
                        	<img src="../img/sticky1.png" width="100%" alt="A 'sticky' header">
                            <figcaption>A 'sticky' header</figcaption>
                        </figure>
                        <h3>.uif-navigation</h3>
                        <p>On longer pages, it may be wise to make the sidebar navigation "sticky" as well, so it remains visible as the page scrolls through all of the content. Much like the footer or the viewHeader, simply add <code>.uif-sticky</code> to the navigation element to activate this feature. The following two screenshots illustrate this functionality.</p>
                        <figure>
                        	<img src="" alt="A 'sticky' sidebar navigation">
                            <figcaption>A 'sticky' sidebar navigation</figcaption>
                        </figure>                        
                        <h3>.uif-footer</h3>
                        <p>In some cases where the footer contains the primary actions for the page (as in the case with Kuali Coeus) the footer should be visible all of the time to allow immediate access to those primary actions. Simply add <code>.uif-sticky</code> to the <code>.uif-footer</code> element to make this happen. The following two screenshots are examples of what this may look like.</p>
                        <figure>
                        	<img src="../img/sticky4.png" width="100%" alt="A 'sticky' footer">
                            <figcaption>A 'sticky' footer</figcaption>
                        </figure>
                        <figure>
                        	<img src="../img/sticky5.png" width="100%" alt="'Sticky' footer stays in position while rest of page moves"> 
                            <figcaption>'Sticky' footer stays in position while rest of page moves</figcaption>
                        </figure>
                        <h3>Quick summary of features:</h3>
                        <ul>
							<li>Keeps elements in place and on-screen at all times, making common and important actions easily discoverable and available.</li>
							<li>Options to make multiple items sticky at any given time (i.e., a sticky viewHeader, navigation, and footer).</li>
                        </ul>                      
						<h3>When to use this component:</h3>
                        <ul>
							<li>This component is enabled by default. You can make the viewHeader, navigation, and footer elements scroll along with the rest of the content by removing the <code>.uif-sticky</code> class from each, respectively.</li>
                    	</ul>
                    </div>
                    <div class="section" id="mobile" tabindex="-1">
                        <h2>Responsive Usage</h2>                     
						<p>On mobile devices such as tablets and phones, UXI recommends that sticky elements not "stick" - rather they scroll inline with the rest of the content. This is to free up coveted space on these devices with smaller screens and less screen real estate.<br>The <code>.uif-viewHeader</code> would be the only element that may accept the <code>.uif-sticky</code> class in tablet or mobile views.</p>                    
					</div>
                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <h3>Bootstrap integration</h3>
						<p>The Bootstrap build-in method.</p>
						<h4>Making an element "sticky"</h4>
						<p>The <code>data-spy="affix"</code> attribute is what Bootstrap uses to find and make elements sticky. It automatically applies a class of <code>.is-sticky</code> when the element is "sticking". The <code>data-offset-top|bottom="n"</code> attribute tells Bootstrap when to start making the element stick (i.e., after n pixels).</p>
                    	<pre class="language-markup"><code class="language-markup">...
&lt;el data-spy="affix" data-offset-top="65"&gt;
    This is a sticky element.
&lt;/el&gt;
...</code></pre>                     
                        <p>Note that in the above Bootstrap example, the bootstrap.js library is required.</p>
                        <h3>Kuali integration</h3>
                        <p>Kuali's implementation which takes precedence over the Bootstrap method above.</p>
                        <h4>Making an element "sticky"</h4>
                        <pre class="language-markup"><code class="language-markup">...
&lt;el class="uif-sticky" data-sticky="true"&gt;
    This is a sticky element.
&lt;/el&gt;
...</code></pre>       
                        <p>Note that in the above Kuali example, there are required JavaScript libraries that are needed, along with their invocation. These would likely be included with your application package.</p>
                    	<h3>CSS</h3>
						<p>When using the Bootstrap implementation, applying the CSS <code>position: fixed</code> to an element, special consideration will need to be given to the height and width of the element as box-layouts aren't inherited. For example, while a <code>div</code> has a normal display of <code>block</code> (and therefore 100% width), setting its position to <code>fixed</code> will treat it as an inline item. You will need to specify the 100% width.</p>
                        <p>Note that using the Kuali method requires far less CSS additions, if any.</p>
						<h3>JSFiddle</h3>
						<p><a href="">View Bootstrap's variation</a> on JSFiddle.</p>
						<p><a href="">View Kuali's variation</a> in the KRAD Library.</p>
                    
                    </div>
                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility Considerations</h2>
						<p>Because sticky headers remain on-screen and because they often include top-level navigation, or other top-level <code>headings</code>, it's important that <code>focus</code> and <code>tabindex</code>-ing be used properly when using jump links, especially on pages with "Skip to main content" links. Failure to implement set these two things will cause focus to always be sent to the first item in the sticky header.</p>
						<p>To combat this event:</p>
                        <pre class="language-markup"><code class="language-markup">&lt;ul&gt;
    &lt;li&gt;&lt;a href="#content"&gt;Skip to main content&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;header&gt;...&lt;/header&gt;
&lt;main id="content" tabindex="-1&gt;
...
&lt;/main&gt;
...</code></pre>       	<p>Note in the above example, we're setting a <code>tabindex</code> to the targeted container. This is so when the user activates the #content skip link, focus can be sent to <code>#content</code>. But we also need some JavaScript:</p>
						<pre class="language-markup"><code class="language-markup">if (document.location.hash) {
    var anchorUponArrival = document.location.hash, el;
 
    if( $(anchorUponArrival).length ){
        el = $(anchorUponArrival);
        el.focus();
    } 
}
 
$('a[href^="#"]').click(function(event) {
    var inPageAnchor = "#" + this.href.split('#')[1], el;
    
    if( $(inPageAnchor).length ){
        el = $(inPageAnchor);
        el.focus();
    }
 
});</code></pre>
						<p>The above script captures hashed URLs and in-page anchor clicks (i.e., kuali.org/test#main or <code>&lt;a href="#main"&gt;Main&lt;/a&gt;)</code> and then sends focus to the targeted element. This ensures keyboard accessibility and flow at all times.</p>
						<h3>Accessibility Resources:</h3>
						<p>As always, use valid, semantic, proper HTML markup to optimize accessibility and usability of modals.</p>
						<a href="http://validator.w3.org/" >W3 HTML Validator</a><br>
                        <a href="http://wave.webaim.org/" >WebAim WAVE</a>  
                    </div>
                    <div class="section" id="keyboard" tabindex="-1">
                        <h2>Keyboard Shortcuts</h2>
                        <p>None.</p>
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
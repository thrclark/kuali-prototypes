<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'navigation';
$child_name = 'Navigation';
$subchild_section = 'breadcrumbs';
$subchild_name = 'Breadcrumbs';
$pageId = '338968096';                  // EDITABLE: Confluence/Wiki page id
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
                <div class="col-md-9" id="main_content">
                    <h1><?php echo $subchild_name ?></h1>
                    <div id="process">
                        <?php
                        // require '/var/local/ux/restapi.php';
                        // $data = $test->getRestContent($pageId);
                        // echo $data['body']['value'];
                        ?>
                        <div class="section" id="overview">
                            <h2>Overview</h2>
                            <p>Kuali applications have three different variations of breadcrumbs.</p>
                            
                            <h3>Variations</h3>
                            <ul>
                               <li>Location-based</li>
                               <li>Path-based (used mainly in modals and breadcrumbs with only one or two levels)</li>
                               <li>Normal (Bootstrap default)</li>
                               <li>Alt (transparent background)</li>
                            </ul>
                        </div>

                        <div class="section" id="usage">
                            <h2>Usage</h2>
                            <h3>Breadcrumb use in the application view</h3>
                            <p>The breadcrumb navigation directly follows the header and precedes the Document Header. The first link in the breadcrumb navigation is always the root or start of a process. For example, if the root page is "Home", then the first link will always be "Home". The last item in the breadcrumb navigation will be the current page or view and it should not be a link. All of the items between the first and the last should be hierarchical. The breadcrumb should be marked up with an Ordered List.</p>
                            
                            <h4>Location-based breadcrumbs (default)</h4>
                            <figure>
                                <img src="../img/breadcrumb-01.png" alt="An example of a location-based breadcrumb, the default use in Kuali." />
                                <figcaption>An example of a location-based breadcrumb, the default use in Kuali.</figcaption>
                            </figure>

                            <h4>Path-based breadcrumbs</h4>
                            <p>These are used primarily in modals.</p>
                            <figure>
                                <img src="../img/breadcrumb-02.png" alt="An example of a path-based breadcrumb." />
                                <figcaption>An example of a path-based breadcrumb.</figcaption>
                            </figure>
                            
                            <h3>Quick summary of features:</h3>
                            <ul>
                                <li>Provides a navigational trail reducing the cognitive load to remember where he or she came from</li>
                                <li>Allows quick access to previously accessed links in a given navigational tree</li>
                                <li>Unobtrusive design integrates seamlessly into the interface</li>
                                <li>Provides a secondary drop-down menu allowing users to jump directly to another parent (location-based breadcrumbs only)</li>
                                <li>Uses ARIA properties to assist with screenreaders</li>
                            </ul>

                            <h4>When to use this component:</h4>
                            <ul>
                                <li>When enabled this component should automatically render based on navigation</li>
                                <li>This component should be enabled when navigation will have multiple levels (parents, children, grandchildren, etc.)</li>
                                <li>The Alt variant is mainly used in Proposal Development and Budget in the document header bar</li>
                            </ul>
                        </div>

                        <div class="section" id="mobile">
                            <h2>Responsive</h2>
                            <p>Breadcrumbs are responsive.</p>
                            <p>We use a little JavaScript to check window widths and do some magic on the list items within the breadcrumb. When a screen size or browser window is less than 768 pixels across, all but the first and last breadcrumb (usually a link to the Homepage, and the text for the current page) are replaced with a button (...). Activating the button will show all of the breadcrumb options. Closing the options will return the breadcrumb to its clean, collapsed state.</p>
                            <figure>
                                <img src="../img/breadcrumb-04.png" alt="A breadcrumb in mobile view in its default state" />
                                <figcaption>A breadcrumb in mobile view in its default state</figcaption>
                            </figure>

                            <figure>
                                <img src="../img/breadcrumb-05.png" alt="An expended or opened breadcrumb in a mobile view" />
                                <figcaption>An expended or opened breadcrumb in a mobile view</figcaption>
                            </figure>

                            <h3>Quick summary of features:</h3>
                            <ul>
                                <li>Maintains the breadcrumb trail, but saves valuable interface real estate.</li>
                                <li>Provides a link home and the current page for reference</li>
                                <li>Uses an accessible button for the ellipsis</li>
                                <li>Breadcrumb is accessible</li>
                            </ul>

                            <h4>When to use this component:</h4>
                            <ul>
                                <li>This component should be used anytime there's a breadcrumb on the screen. The responsive qualities should be included with this component.</li>
                                <li>There is never a need or a reason to disable the responsive qualities of breadcrumbs. Text will only likely wrap making it look bad.</li>
                            </ul>
                        </div>

                        <div class="section" id="demos">
                            <h2>Demos</h2>
                            <p><strong>Please see my <a href="http://jsfiddle.net/clrux/caq77d1m/">JSFiddle for working examples</a>.</strong></p>

                            <h3>HTML for path-based breadcrumbs</h3>
<pre class="language-markup"><code class="html language-markup">&lt;div class="uif-breadcrumb" id="path-based" role="navigation"&gt;
&lt;ol class="breadcrumb" role="menubar"&gt;
    &lt;li role="presentation"&gt;&lt;a role="menuitem" href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;&lt;a role="menuitem" href="#"&gt;Parent page&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;&lt;a role="menuitem" href="#"&gt;Child page&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;&lt;a role="menuitem" href="#"&gt;Grandchild page&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;Great grandchild page&lt;/li&gt;
&lt;/ol&gt;
&lt;/div&gt;</code></pre>

                            <h3>HTML for location-based breadcrumbs</h3>
<pre class="language-markup"><code class="html language-markup">&lt;div class="uif-breadcrumb" id="location-based" role="navigation"&gt;
&lt;ol class="breadcrumb" role="menubar"&gt;
    &lt;li role="presentation"&gt;&lt;a role="menuitem" href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;&lt;a role="menuitem" href="#" id="parents_01"&gt;Parent page&lt;/a&gt;
        &lt;button type="button" class="uif-sub-expand btn btn-link btn-xs" aria-haspopup="true" aria-label="Expand submenu"&gt;&lt;span class="icon icon-angle-down"&gt;&lt;/span&gt;&lt;/button&gt;
        &lt;ol class="uif-sub-breadcrumb" role="menu" aria-expanded="false" aria-hidden="true" aria-labeledby="parents_01"&gt;
            &lt;li role="presentation"&gt;&lt;a role="menuitem" href="#"&gt;Another parent page&lt;/a&gt;&lt;/li&gt;
            &lt;li role="presentation"&gt;&lt;a role="menuitem" href="#"&gt;Another parent page&lt;/a&gt;&lt;/li&gt;
            &lt;li role="presentation"&gt;&lt;a role="menuitem" href="#"&gt;Another parent page&lt;/a&gt;&lt;/li&gt;
            &lt;li role="presentation"&gt;&lt;a role="menuitem" href="#"&gt;Another parent page&lt;/a&gt;&lt;/li&gt;
            &lt;li role="presentation"&gt;&lt;a role="menuitem" href="#"&gt;Another parent page&lt;/a&gt;&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/li&gt;
    &lt;li role="presentation"&gt;&lt;a role="menuitem" href="#"&gt;Child page&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;&lt;a role="menuitem" href="#"&gt;Grandchild page&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;Great grandchild page&lt;/li&gt;
&lt;/ol&gt;
&lt;/div&gt;
</code></pre>

                            <h3>CSS for breadcrumbs</h3>
                            <p>The styles are primarily driven by Bootstrap. We do add some however, for the collapsing qualities.</p>

<pre class="language-css"><code class="html language-css">.breadcrumb.open>li + li:before {
    display: none;
}

.uif-breadcrumb ol.open li {
    display: block;
    width: 100%;
    text-align: center;
    padding: 6px;
}

.uif-breadcrumb ol.open li a {
    display: block;
}

.uif-breadcrumb-more {
    display: inline;
}

.uif-breadcrumb-more:before {
    padding: 0 5px;
    color: #ccc;
    content: "/\00a0";
}

.uif-breadcrumb-more button {
    display: inline-block;
}

.uif-breadcrumb-close {
    border-top: 1px solid #ccc;
    margin-top: 12px;
}

.uif-sub-expand {
    display: inline-block;
    height: 18px;
    width: 18px;
    border-radius: 50%;
    padding: 0;
}

.uif-sub-expand:hover, .uif-sub-expand:focus {
    background: #428bca;
    color: white;
}

.uif-sub-breadcrumb {
    position: absolute;
    top: -9999em;
    background: #f2f2f2;
    padding: 0;
    margin: 0;
    width: 175px;
}

.uif-sub-breadcrumb.open {
    top: auto;
    right: 0;
    margin-top: 2px;
    margin-right: -87.5px;
}

.uif-sub-breadcrumb li a {
   padding: 4px;
}</code></pre>

                            <h3>JavaScript for breadcrumbs</h3>
<pre class="language-javascript"><code class="html language-javascript">$(document).ready(function() {
    var w = $(window),
        c = $('#path-based.uif-breadcrumb'),
        b = $('#path-based.uif-breadcrumb .breadcrumb'),
        l = $('#path-based.uif-breadcrumb .breadcrumb li'),
        e = '<li class="uif-breadcrumb-more"><button type="button" class="btn btn-link btn-xs" aria-label="Expand breadcrumb"> ... </button></li>',
        f = '<li class="uif-breadcrumb-close"><button type="button" class="btn btn-link" aria-label="Collapse breadcrumb">Close</button></li>',
        z = false;
     
    function collapse_breadcrumb() {
        l.not(':first').not(':last').each(function() {
            var count = l.length;
            if (3 > count.length) {
                return;
            }
            $(this).hide();
            if (z) return;
            $('#path-based.uif-breadcrumb .breadcrumb li:first').append(e);
            z = true;
        });
    }
     
    function expand_breadcrumb() {
        l.not(':first').not(':last').each(function() {
            $(this).show();
        });
        z = false;
        $('#path-based.uif-breadcrumb .breadcrumb .uif-breadcrumb-more').remove();
    }
     
    function open_breadcrumb() {
        b.addClass('open');
        l.not(':first').not(':last').each(function() {
            $(this).show();
        });
        b.append(f);
    }
     
    function close_breadcrumb() {
        b.removeClass('open');
        l.not(':first').not(':last').each(function() {
            $(this).hide();
        });
        if (z) return;
        $('#path-based.uif-breadcrumb .breadcrumb li:first').append(e);
        z = true;
    }
     
    $('#path-based.uif-breadcrumb').on('click', '.uif-breadcrumb-more button', function() {
        $(this).parent().hide();
        $('.uif-breadcrumb-close').parent().show();
        open_breadcrumb();
    });
     
    $('#path-based.uif-breadcrumb').on('click', '.uif-breadcrumb-close button', function() {
        $(this).parent().hide();
        $('.uif-breadcrumb-more').show();
        close_breadcrumb();
    });
     
    $('.uif-sub-expand').click(function() {
        if ($(this).next().hasClass('open')) {
            $(this).next().removeClass('open').attr('aria-expanded', 'false').attr('aria-hidden', 'true');
            $(this).find('span').addClass('icon-angle-down').removeClass('icon-angle-up');
        } else {
            $(this).next().addClass('open').attr('aria-expanded', 'true').attr('aria-hidden', 'false');
            $(this).find('span').removeClass('icon-angle-down').addClass('icon-angle-up');
            $(this).next().find('li:first a').focus();
        }
    });
    if (768 >= $(window).width()) {
        collapse_breadcrumb();
    }
     
    w.resize(function() {
        if (768 >= $(window).width()) {
            collapse_breadcrumb();
        } else {
            expand_breadcrumb();
            if (b.hasClass('open')) {
                close_breadcrumb();
                $('.uif-breadcrumb-close').remove();
            }
        }
    });
});</code></pre>
                        </div>

                        <div class="section" id="accessibility">
                            <h2>Accessibility Considerations</h2>
                            <p>As with all things in Kuali interfaces, breadcrumbs must meet WCAG level A and AA criteria. This means that:</p>
                            <ul>
                                <li>Links should navigate somewhere and be announced clearly; they should indicate what the link is and where it goes</li>
                                <li>Buttons should be used to expand and collapse menus rather than links, and they should be focusable</li>
                                <li>When opening and closing a menu, make sure you update the appropriate ARIA prop's or attr's using JavaScript. For example, when a submenu is collapsed, it should have the property aria-expanded="false". When it's opened that property should change to true.</li>
                                <li>Closing a submenu should send focus back to its parent item.</li>
                            </ul>

                            <h3>Accessibility Resources</h3>
                            <p>As always, use valid, semantic, proper HTML markup to optimize accessibility.</p>
                            <ul>
                                <li><a href="http://validator.w3.org/">W3 HTML Validator</a></li>
                                <li><a href="http://wave.webaim.org/">WebAim WAVE</a></li>
                            </ul>
                        </div>

                        <div class="section" id="keyboard">
                            <h2>Keyboard Shortcuts</h2>
                            <p>None out of the ordinary.</p>
                        </div>

                        <div class="section" id="notes">
                            <h2>Research and Discussion</h2>
                            <p>None at this time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include ('../includes/guide-footer.php') ?>
    <?php include ('../includes/footer-scripts.php') ?>
</body>
</html>
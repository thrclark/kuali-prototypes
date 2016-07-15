<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'typography';
$child_name = 'Typography';
$subchild_section = 'lists';
$subchild_name = 'Lists';
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
                            <li class="tab"><a href="#usage">Usage</a></li>
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
                        <div class="section" id="overview" tabindex="-1">
                            <h2>Overview</h2>
                            <p>Lists of various types are used frequently throughout the Kuali suite of applications. This document details how they are to be used, when they are to be used, and offers best practices and accessibility considerations.</p>
                        </div>

                        <div class="section" id="usage" tabindex="-1">
                            <h2>Usage</h2>

                            <h3>Unordered Lists</h3>
                            <figure>
                                <img src="../img/list-ul-01.png" alt="A normal unordered list" />
                                <figcaption>A normal unordered list</figcaption>
                            </figure>

                            <figure>
                                <img src="../img/list-ul-02.png" alt="An unordered list where only the child lists have bullets." />
                                <figcaption>An unordered list where only the child lists have bullets. These lists use <code>&lt;ul class="list-unstyled"&gt;</code> on the parent list.</figcaption>
                            </figure>

                            <figure>
                                <img src="../img/list-ul-03.png" alt="An unordered list shown horizontally without bullets" />
                                <figcaption>An unordered list shown horizontally without bullets using <code>&lt;ul class="list-inline"&gt;</code>.</figcaption>
                            </figure>

                            <h4>Quick summary of features</h4>
                            <ul>
                                <li>Unordered lists are great when there is no specific order needed for the items.</li>
                                <li>May be used for navigation.</li>
                                <li>Very flexible and can be listed horizontally if needed perhaps in a toolbar or the footer.</li>
                            </ul>

                            <h3>Ordered Lists</h3>
                            <figure>
                                <img src="../img/list-ol-01.png" alt="A normal ordered list" />
                                <figcaption>A normal ordered list</figcaption>
                            </figure>

                            <h4>Quick summary of features</h4>
                            <ul>
                                <li>Similar to the unordered list above, but lists items in a linear or chronological order.</li>
                                <li>May also be used horizontally by applying .list-inline to the parent list.</li>
                            </ul>

                            <h3>Data Lists</h3>
                            <figure>
                                <img src="../img/list-dl-01.png" alt="A definition list in its normal, stacked display." />
                                <figcaption>A definition list in its normal, stacked display.</figcaption>
                            </figure>

                            <figure>
                                <img src="../img/list-dl-01.png" alt="A definition list displayed inline." />
                                <figcaption>A definition list displayed inlined via <code>&lt;dl class="dl-horizontal"&gt;</code>. Note that this display only works above 768px. If below that, it will stack like the previous example.</figcaption>
                            </figure>

                            <h4>Quick summary of features</h4>
                            <ul>
                                <li>Traditionally used to pair terms and definitions, but more commonly used for data lists with tabular layouts without the table.</li>
                            </ul>
                        </div>

                        <div class="section" id="demos" tabindex="-1">
                            <h2>Demos</h2>
                            <h3>Unordered lists</h3>
                            <p>Unordered lists have no logical or linear order. They are simply a list of items.</p>
<pre class="language-markup"><code class="html language-markup">&lt;ul&gt;
    &lt;li&gt;List item 1&lt;/li&gt;
    &lt;li&gt;List item 2&lt;/li&gt;
    &lt;li&gt;List item 3&lt;/li&gt;
&lt;/ul&gt;</code></pre>

                            <h3>Ordered lists</h3>
                            <p>Ordered lists have order and flow linearly.</p>
<pre class="language-markup"><code class="html language-markup">&lt;ol&gt;
    &lt;li&gt;List item 1&lt;/li&gt;
    &lt;li&gt;List item 2&lt;/li&gt;
    &lt;li&gt;List item 3&lt;/li&gt;
&lt;/ol&gt;</code></pre>

                            <h3>Data lists</h3>
                            <p>Definition lists are great for providing definitions, but are flexible enough to be used similarly to unordered lists.</p>
<pre class="language-markup"><code class="html language-markup">&lt;dl&gt;
    &lt;dt&gt;Title&lt;/dt&gt;
    &lt;dd&gt;Description&lt;/dd&gt;
    &lt;dt&gt;Another title&lt;/dt&gt;
    &lt;dd&gt;Another description&lt;/dd&gt;
    &lt;dt&gt;Third title&lt;/dt&gt;
    &lt;dd&gt;Third description&gt;&lt;/dd&gt;
&lt;/dl&gt;</code></pre>

                            <h3>Examples</h3>
                            <p>View <a href="http://jsfiddle.net/clrux/r5x23ear/">examples on JSFiddle</a> demonstrating lists</p>
                        </div>

                        <div class="section" id="accessibility" tabindex="-1">
                            <h2>Accessibility</h2>
                            <p>There are no special accessibility considerations required for lists. Follow best practices for markup and ensure the structure is valid and semantic which will help ensure the content is readable by assistive technology.</p>

                            <h3>Accessibility Resources</h3>
                            <p>As always, use valid, semantic, proper HTML markup to optimize accessibility and usability of modals.</p>
                            <a href="http://validator.w3.org/">W3 HTML Validator </a><br>
                            <a href="http://wave.webaim.org/">WebAim WAVE </a>
                        </div>

                        <div class="section" id="keyboard" tabindex="-1">
                            <h2>Keyboard Shortcuts</h2>
                            <p>Tabbing, as per normal navigational movement, should also work here. Nothing out of the ordinary.</p>
                        </div>

                        <div class="section" id="notes" tabindex="-1">
                            <h2>Notes</h2>
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
<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'progress-bars';
$child_name = 'Progress Bars';
$subchild_section = '';
$subchild_name = '';
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex,nofollow" />
    <title><?php echo $child_name ?> - <?php echo $nav_name ?> - Kuali Design Guide</title>

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
                <div class="col-md-9" id="main_content">
                    <h1><?php echo $subchild_name ?></h1>
                    <div id="process">
                        <div class="section" id="overview" tabindex="-1">
                            <h2>Overview</h2>
                            <p>A progress bar will track the user's progress in some task.  The progress bar can represent a percentage done with no text, or where in the task the user is and how many more steps they will have to go through to complete it.  It can also represent workflow status/state.</p>
                        </div>
                        
                        <div class="section" id="usage" tabindex="-1">
                            <h2>Desktop Usage</h2>
                            <p>Interaction with this component is purely visual and textual.  It is used to display information to the user on the current step or completeness of the task they are working on.</p>
                            
                            <h3>Different views</h3>
                            <figure>
                                <img src="../img/progress-small-01.png" alt="The progress bar condensed and fitted into the toolbar">
                                <figcaption>The progress bar condensed and fitted into the toolbar.</figcaption>
                            </figure>

                            <figure>
                                <img src="../img/progress-large-01.png" alt="The page-sized progress bar with more details and additional color-coding.">
                                <figcaption>The page-sized progress bar with more details and additional color-coding.</figcaption>
                            </figure>

                            <h3>States of the progress bar</h3>
                            <figure>
                                <img src="../img/progress-large-02.png" alt="Task not started. A bar currently positioned in the first step.">
                                <figcaption>Task not started. A bar currently positioned in the first step.</figcaption>
                            </figure>

                            <figure>
                                <img src="../img/progress-large-03.png" alt="Task partially complete or in progress. A partly filled progress bar and currently positioned at the current step.">
                                <figcaption>Task partially complete or in progress. A partly filled progress bar and currently positioned at the current step.</figcaption>
                            </figure>

                            <figure>
                                <img src="../img/progress-large-04.png" alt="Task complete. A filled progress bar colored to demonstrated task completeness.">
                                <figcaption>Task complete. A filled progress bar colored to demonstrated task completeness.</figcaption>
                            </figure>
                            
                            <!-- <h3>Quick summary of features</h3>
                            <ul>
                                <li>asdf</li>
                            </ul> -->
                            
                            <h3>When to use this component</h3>
                            <p>This component can be used when the following is necessary:</p>
                            <ul>
                                <li>Representing what step a user is on in a multi-page View or multi-page wizard process</li>
                                <li>A rough estimation of the completeness of a form</li>
                                <li>A step in a workflow process the document is currently on</li>
                            </ul>
                        </div>

                        <div class="section" id="demos" tabindex="-1">
                            <h2>Demos</h2>
                            <h3>HTML</h3>
                            <p>The <code>aria</code> properties should update with each step. In this case, we're 60% complete.</p>
    <pre class="language-markup"><code class="html language-markup">&lt;div class="progress-bar-container well" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;
        &lt;div class="progress-title"&gt;
            &lt;h2&gt;Proposal progress&lt;/h2&gt;
        &lt;/div&gt;
        &lt;ul class="progress-grid clearfix"&gt;
            &lt;li&gt;
                &lt;div class="area-title complete"&gt;In Progress&lt;/div&gt;
                &lt;div class="progress"&gt;
                    &lt;div class="progress-bar bar-success"&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;div class="area-title complete"&gt;Routing &amp; Review&lt;/div&gt;
                &lt;div class="progress"&gt;
                    &lt;div class="progress-bar bar-success"&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;div class="area-title active"&gt;Final Institution Review&lt;/div&gt;
                &lt;div class="progress"&gt;
                    &lt;div class="progress-bar bar-warning"&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;div class="area-title complete"&gt;Approved&lt;/div&gt;
                &lt;div class="progress"&gt;
                    &lt;div class="progress-bar bar-default"&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;div class="area-title complete"&gt;Submitted to Sponsor&lt;/div&gt;
                &lt;div class="progress"&gt;
                    &lt;div class="progress-bar bar-default"&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;</code></pre>

                            <h3>Custom Sass</h3>
    <pre class="language-css"><code class="html language-css">.progress-bar-container {
        
        .progress-title {
            
            h2 {
                font-size: 100%;
                margin: 0 0 12px;
            }
        }
        
        .progress-grid {
            list-style: none;
            margin: 0;
            padding: 0;
            
            li {
                width: 20%;
                display: inline;
                float: left;
                
                .area-title {
                    margin: 0 0 6px 0;
                    color: inherit;
                    font-weight: 700;
                    font-size: 90%;
                    height: 32px;
                    text-align: center;
                }
                
                .area-title.complete {
                    color: #666;
                    font-weight: 400;
                }
                
                .progress {
                    height: 3px;
                    margin: 0;
                    
                    .progress-bar {
                        height: 3px;
                        width: 100%;
                    }
                    
                    .bar-success {
                        background-color: #0099cc;
                    }
                    
                    .bar-warning {
                        background-color: #fbb917;
                    }
                    
                    .bar-default {
                        background-color: #aaa;
                    }
                }
            }
        }
    }</code></pre>

                            <h3>Live examples</h3>
                            <p><a href="http://jsfiddle.net/clrux/xbea2a97/">See examples of an progress bar on JSFiddle</a></p>
                        </div>

                        <div class="section" id="accessibility" tabindex="-1">
                            <h2>Accessibility Considerations</h2>
                            <p>If the progress bar is purely visual and doesn't necessarily aid the user, it shouldn't be announced aurally. You can use <code>aria-hidden="true"</code> for this.</p>
                            <p>Otherwise, if a page refresh loads the next step, the current step and its place in the total step count should be aurally announced. For example, "Billing information, step two of three".</p>
                            <p>If no page refresh updates the step, necessary scripting is required to announce the current step and its place in the total step count.</p>
                            
                            <h3>Accessibility Resources</h3>
                            <p>As always, use valid, semantic, proper HTML markup to optimize accessibility and usability of modals.</p>
                            <ul>
                                <li><a href="http://validator.w3.org/">W3 HTML Validator</a></li>
                                <li><a href="http://wave.webaim.org/">WebAim WAVE</a></li>
                            </ul>
                        </div>

                        <div class="section" id="keyboard" tabindex="-1">
                            <h2>Keyboard Shortcuts</h2>
                            <p>None</p>
                        </div>

                        <div class="section" id="notes" tabindex="-1">
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
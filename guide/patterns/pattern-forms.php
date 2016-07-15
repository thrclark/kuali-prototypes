<?php
$page = 'index';
$nav_section = 'patterns';
$nav_name = 'Interaction Patterns';
$child_section = 'pattern-forms';
$child_name = 'Form layout';
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
                            <li class="tab"><a href="#labels">Labels</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <h1><?php echo $child_name ?></h1>
                    <div class="section" id="overview" tabindex="-1">
                        <h2>Overview</h2>
                        <p>Since Kuali relies on the Bootstrap framework, most of the styles and responsiveness will be automatically included. With forms, the width of the device or browser will play a large role in how the labels and form fields are displayed.</p>
                        <p>Explore this section further to see the different patterns and find out where and when to use them.</p>
                        <p><button type="button" class="btn btn-primary trigger-step" data-tab-section="labels">Next part: Labels</button>
                    </div>

                    <div class="section" id="labels" tabindex="-1">
                        <h2>Labels</h2>
                        <p>Every form field requires its own label. These labels can be left or right aligned, or stacked on top of the form field (which is usually the case with mobile-sized screens).</p>

                        <div class="example kuali-recommended clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-forms-labels-stacked.png" alt="Form field labels stacked" />
                                    <figcaption>Form field labels stacked</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Stacked labels</h3>
                                <p class="sr-only">This is the Kuali recommended method</p>
                                <p>Labels automatically stack in tablet and mobile sized screens. Additionally, form fields display the 100% width of their container.</p>
                                <ul class="list-pros">
                                    <li>Easy form field association</li>
                                    <li>Easy vertical scanning</li>
                                    <li>Great for forms with more than one column</li>
                                </ul>

                                <ul class="list-cons">
                                    <li>Use more vertical space</li>
                                </ul>
                            </div>
                        </div>

                        <div class="example clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-forms-labels-left.png" alt="Form field labels left aligned" />
                                    <figcaption>Form field labels left aligned</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Left-aligned labels</h3>
                                <p>Use left-aligned labels for shorter forms and for pages that are visually complex to maintain grid and structure.</p>
                                <ul class="list-pros">
                                    <li>Clear left-side boundary</li>
                                    <li>Easy vertical scanning</li>
                                </ul>

                                <ul class="list-cons">
                                    <li>Slower form field association</li>
                                    <li>Visual gaps between label and form field</li>
                                </ul>
                            </div>
                        </div>

                        <div class="example clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-forms-labels-right.png" alt="Form field labels right aligned" />
                                    <figcaption>Form field labels right aligned</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Right-aligned labels</h3>
                                <p>Use right-aligned labels for longer forms or for form fields with more than one column.</p>
                                <ul class="list-pros">
                                    <li>Clear right-side boundary</li>
                                    <li>Easy vertical scanning</li>
                                    <li>Faster form field association</li>
                                </ul>

                                <ul class="list-cons">
                                    <li>Ragged left-edge</li>
                                </ul>
                            </div>
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
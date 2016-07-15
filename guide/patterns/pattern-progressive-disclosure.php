<?php
$page = 'index';
$nav_section = 'patterns';
$nav_name = 'Interaction Patterns';
$child_section = 'pattern-progressive-disclosure';
$child_name = 'Progressive Disclosure';
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
                            <li class="tab"><a href="#methods">Progressive Methods</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <h1><?php echo $child_name ?></h1>
                    <div class="section" id="overview" tabindex="-1">
                        <h2>Overview</h2>
                        <p>Lorem ipsum...</p>
                        <p>Explore this section further to see the different patterns and find out where and when to use them.</p>
                        <p><button type="button" class="btn btn-primary trigger-step" data-tab-section="methods">Next part: Progressive Methods</button>
                    </div>

                    <div class="section" id="methods" tabindex="-1">
                        <h2>Progressive Methods</h2>
                        <p>asdf.</p>
                        
                        <div class="example clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-progressive-01.gif" alt="An animated GIF file demonstrating normal accordions" />
                                    <figcaption>An animated GIF file demonstrating normal accordions</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Normal Accordions</h3>
                                <!-- <p class="sr-only">This is the Kuali recommended method</p> -->
                                <ul class="list-pros">
                                    <li>Allows any panel to be open at any given time</li>
                                    <li>Permits only a single panel to be open at any given time</li>
                                </ul>

                                <!-- <ul class="list-cons">
                                    <li>Do not allow navigation to siblings</li>
                                </ul> -->
                            </div>
                        </div>

                        <div class="example clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-progressive-02.gif" alt="An animated GIF file demonstrating progressive accordions" />
                                    <figcaption>An animated GIF file demonstrating progressive accordions</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Progressive Accordions</h3>
                                <!-- <p class="sr-only">This is the Kuali recommended method</p> -->
                                <ul class="list-pros">
                                    <li>Allows any panel to be open at any given time</li>
                                    <li>Allows one, any, or all panels to be open at any given time</li>
                                </ul>

                                <!-- <ul class="list-cons">
                                    <li>Do not allow navigation to siblings</li>
                                </ul> -->
                            </div>
                        </div>

                        <div class="example clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-progressive-03.gif" alt="An animated GIF file demonstrating linear or sequential accordions" />
                                    <figcaption>An animated GIF file demonstrating linear or sequential accordions</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Sequential Accordions</h3>
                                <!-- <p class="sr-only">This is the Kuali recommended method</p> -->
                                <ul class="list-pros">
                                    <li>Allows one panel to be open at any given time</li>
                                    <li>Fits a linear flow or step-by-step flow, much like a shopping cart</li>
                                </ul>

                                <!-- <ul class="list-cons">
                                    <li>Do not allow navigation to siblings</li>
                                </ul> -->
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
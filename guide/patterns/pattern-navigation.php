<?php
$page = 'index';
$nav_section = 'patterns';
$nav_name = 'Interaction Patterns';
$child_section = 'pattern-navigation';
$child_name = 'Navigation';
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
                            <li class="tab"><a href="#breadcrumbs">Breadcrumbs</a></li>
                            <li class="tab"><a href="#back-to">Back to ...</a></li>
                            <li class="tab"><a href="#parent-child">Parent/Child Relationships</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <h1><?php echo $child_name ?></h1>
                    <div class="section" id="overview" tabindex="-1">
                        <h2>Overview</h2>
                        <p>Lorem ipsum...</p>
                        <p>Explore this section further to see the different patterns and find out where and when to use them.</p>
                        <p><button type="button" class="btn btn-primary trigger-step" data-tab-section="breadcrumbs">Next part: Breadcrumbs</button>
                    </div>

                    <div class="section" id="breadcrumbs" tabindex="-1">
                        <h2>Breadcrumbs</h2>
                        <p>As users navigate deeper into a site or application, breadcrumb navigation helps them see where they've come from and make it easy to get back to previous steps.</p>

                        <div class="example kuali-recommended clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-navigation-path-based-breadcrumb.png" alt="A path-based breadcrumb" />
                                    <figcaption>A path-based breadcrumb</figcaption>
                                </figure>
                                <figure>
                                    <img src="../img/pattern-navigation-path-based-02.png" alt="A path-based breadcrumb in mobile view" />
                                    <figcaption>A path-based breadcrumb in mobile view</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Path-based breadcrumb</h3>
                                <p>The most basic, yet most effective breadcrumb. Path-based breadcrumbs show the entire navigational trail and history allowing for quick and easy access back up.</p>
                                <ul class="list-pros">
                                    <li>Clear mechanism to get back to previous pages</li>
                                    <li>At-a-glance look at parents and grandparents</li>
                                    <li>Simple markup using ordered lists</li>
                                    <li>Responsive</li>
                                </ul>

                                <ul class="list-cons">
                                    <li>Do not allow navigation to siblings</li>
                                </ul>
                            </div>
                        </div>

                        <div class="example clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-navigation-location-based-breadcrumb.png" alt="A location-based breadcrumb" />
                                    <figcaption>A location-based breadcrumb</figcaption>
                                </figure>
                                <figure>
                                    <img src="../img/pattern-navigation-location-based-02.png" alt="A location-based breadcrumb in mobile view" />
                                    <figcaption>A location-based breadcrumb in mobile view</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Location-based breadcrumb</h3>
                                <p>An enhanced version of the breadcrumb which allows direct navigation to sibling pages.</p>
                                <ul class="list-pros">
                                    <li>Allows navigation to sibling pages</li>
                                    <li>Responsive</li>
                                </ul>

                                <ul class="list-cons">
                                    <li>Requires additional scripting</li>
                                    <li>Reduced intuitiveness with sibling navigation</li>
                                    <li>Doesn't act like expected breadcrumbs</li>
                                </ul>
                            </div>
                        </div>

                        <p><button type="button" class="btn btn-primary trigger-step" data-tab-section="back-to">Next part: Back to ...</button>
                    </div>

                    <div class="section" id="back-to" tabindex="-1">
                        <h2>Back to ...</h2>
                        <p>When opening a document (perhaps a child or a sibling) that is connected to another document from the other document, place a button above the left-side navigation.</p>

                        <div class="example kuali-recommended clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-navigation-backto.png" alt="Button that navigates to the parent or sibling, connected document" />
                                    <figcaption>Button that navigates to the parent or sibling, connected document</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Back to ...</h3>
                                <ul class="list-pros">
                                    <li>Placed in an easy-to-see location</li>
                                    <li>Visual and mental link to sibling or parent</li>
                                    <li>Indicates user is <em>within</em> a tree</li>
                                </ul>

                                <!-- <ul class="list-cons">
                                    <li>Use more vertical space</li>
                                </ul> -->
                            </div>
                        </div>

                        <p><button type="button" class="btn btn-primary trigger-step" data-tab-section="parent-child">Next part: Parent/Child Relationships</button>
                    </div>

                    <div class="section" id="parent-child" tabindex="-1">
                        <h2>Parent/Child Relationships</h2>
                        <p>asdf</p>

                        <div class="example kuali-recommended clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-navigation-parentchild.png" alt="Simple breadcrumb showing parent/child relationships with proposals and budgets" />
                                    <figcaption>Simple breadcrumb showing parent/child relationships with proposals and budgets</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Parent/Child Relationships</h3>
                                <p>asdf</p>
                                <ul class="list-pros">
                                    <li>Familiar breadcrumb navigation shows hierarchy and links</li>
                                    <li>See which proposal a particular budget belongs to</li>
                                    <li>Allows quick and easy access to the parent proposal</li>
                                </ul>

                                <!-- <ul class="list-cons">
                                    <li>Use more vertical space</li>
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
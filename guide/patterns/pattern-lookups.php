<?php
$page = 'index';
$nav_section = 'patterns';
$nav_name = 'Interaction Patterns';
$child_section = 'pattern-lookups';
$child_name = 'Lookups &amp; Inquiries';
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
                            <li class="tab"><a href="#lookups">Lookups</a></li>
                            <li class="tab"><a href="#inquiries">Inquiries</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <h1><?php echo $child_name ?></h1>
                    <div class="section" id="overview" tabindex="-1">
                        <h2>Overview</h2>
                        <p>Lorem ipsum...</p>
                        <p>Explore this section further to see the different patterns and find out where and when to use them.</p>
                        <p><button type="button" class="btn btn-primary trigger-step" data-tab-section="lookups">Next part: Lookups</button>
                    </div>

                    <div class="section" id="lookups" tabindex="-1">
                        <h2>Lookups</h2>
                        <p>As users navigate deeper into a site or application, breadcrumb navigation helps them see where they've come from and make it easy to get back to previous steps.</p>

                        <div class="example kuali-recommended clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-lookup-modal.png" alt="A lookup or search using a modal" />
                                    <figcaption>A lookup or search using a modal</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Modals</h3>
                                <p class="sr-only">This is the Kuali recommended method</p>
                                <p>Performing a lookup or search via a modal allows for more detailed searches while maintaining a clean, consistent base layout.</p>
                                <ul class="list-pros">
                                    <li>Maximizes base page layout space</li>
                                    <li>Allows for more detailed searches in a dedicated modal</li>
                                    <li>Allows multiple levels of searching to maximize refinement</li>
                                </ul>

                                <ul class="list-cons">
                                    <li>Do not allow navigation to siblings</li>
                                </ul>
                            </div>
                        </div>

                        <p><button type="button" class="btn btn-primary trigger-step" data-tab-section="inquiries">Next part: Inquiries</button>
                    </div>

                    <div class="section" id="inquiries" tabindex="-1">
                        <h2>Inquiries</h2>
                        <p>When opening a document (perhaps a child or a sibling) that is connected to another document from the other document, place a button above the left-side navigation.</p>

                        <div class="example kuali-recommended clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-inquiry-01.png" alt="Inquiries can be links, often suffixed with an 'i' icon" />
                                    <figcaption>Inquiries can be links, often suffixed with an 'i' icon</figcaption>
                                </figure>
                                <figure>
                                    <img src="../img/pattern-inquiry-02.png" alt="When clicked, a popver reveals more information about the link" />
                                    <figcaption>When clicked, a popover reveals more information about the link</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Inquiries</h3>
                                <p>The previous version of Kuali applications allowed inquiries to contain tables and forms. UXI recommends this approach to maintain integrity with the design and layout of the page and increase usability. While it requires an additional step to get to a more ellaborate search, the increase in usability greatly outweighs the cost of the additional click.</p>
                                <ul class="list-pros">
                                    <li>Allow for quick at-a-glance information on an object</li>
                                    <li>Offers the use of basic HTML</li>
                                    <li>Clean, intuitive mechanism</li>
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
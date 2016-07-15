<?php
$page = 'index';
$nav_section = 'patterns';
$nav_name = 'Interaction Patterns';
$child_section = 'pattern-speedbumps-confirmations';
$child_name = 'Speedbumps &amp; Confirmations';
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
                            <li class="tab"><a href="#speedbumps">Speedbumps</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <h1><?php echo $child_name ?></h1>
                    <div class="section" id="overview" tabindex="-1">
                        <h2>Overview</h2>
                        <p>Lorem ipsum...</p>
                        <p>Explore this section further to see the different patterns and find out where and when to use them.</p>
                        <p><button type="button" class="btn btn-primary trigger-step" data-tab-section="speedbumps">Next part: Speedbumps</button>
                    </div>

                    <div class="section" id="speedbumps" tabindex="-1">
                        <h2>Speedbumps</h2>
                        <p>Before major changes are made to a system it's a good idea to prompt the user to make sure he or she is making aware of the implications. We do this using a speedbump confirmation.</p>
                        <p>These generally happy via a small modal window with options to either continue or cancel.</p>

                        <div class="example kuali-recommended clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-speedbump-01.png" alt="An example table of users with delete buttons on the right" />
                                    <figcaption>An example table of users with delete buttons on the right</figcaption>
                                </figure>
                                <figure>
                                    <img src="../img/pattern-speedbump-02.png" alt="Clicking a delete button will present a speedbump dialog asking to confirm the action" />
                                    <figcaption>Clicking a delete button will present a speedbump dialog asking to confirm the action</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Speedbumps</h3>
                                <p class="sr-only">This is the Kuali recommended method</p>
                                <ul class="list-pros">
                                    <li>Prevents errors and accidental system changes</li>
                                    <li>Intuitive mechanism that is common on the web</li>
                                    <li>Accessible</li>
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
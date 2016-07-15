<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = '';
$child_name = '';
$subchild_section = '';
$subchild_name = '';
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex,nofollow" />
    <title><?php echo $nav_name ?> - Kuali Design Guide</title>

    <?php include ('../includes/header-styles.php') ?>
</head>
<body>
    <?php include ('../includes/guide-header.php') ?>
    <?php include ('../includes/section-header.php') ?>
    <?php include ('../includes/breadcrumbs.php') ?>

    <main id="content">
        <div class="container">
            <div class="col-md-12">
                <h1><?php echo $nav_name ?></h1>

                <p>A catalog of different user interface elements, their proper usage, and other usability and accessibility considerations.</p>
                <ul class="cta-navigation clearfix">
                    <li class="col-md-4">
                        <a href="buttons.php">
                            <h2>Buttons</h2>
                            <p>Learn about Kuali's buttons, how and when to use them, their sizing and placement.</p>
                        </a>
                    </li>
                    <!-- <li class="col-md-4">
                        <a href="button-groups.php">
                            <h2>Button groups</h2>
                            <p>Examples of grouped buttons, how and when to use them, sizing and placement.</p>
                        </a>
                    </li> -->
                    <li class="col-md-4 has-children">
                        <a href="content-sections.php">
                            <h2>Content Sections</h2>
                            <p>Explore different ways to group and organize content, such as modal windows, accordions, and tab groups.</p>
                        </a>
                    </li>
                    <li class="col-md-4 has-children">
                        <a href="forms.php">
                            <h2>Forms &amp; Form Elements</h2>
                            <p>Information on the different form elements in the Kuali suite along with their proper usage.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="help-messaging.php">
                            <h2>Help &amp; Messaging</h2>
                            <p>Information on things like tooltips, popovers, and other useful methods of providing quick information to users.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="iconography.php">
                            <h2>Iconography</h2>
                            <p>Kuali has a large library of icons and icon fonts at your disposal. Learn how and when to use them.</p>
                        </a>
                    </li>
                    <li class="col-md-4 has-children">
                        <a href="navigation.php">
                            <h2>Navigation</h2>
                            <p>See examples of navigation and understand how and when to use them.</p>
                        </a>
                    </li>
                    <!-- <li class="col-md-4">
                        <a href="page-layout-grid.php">
                            <h2>Page Layout &amp; Grid</h2>
                            <p>Learn about the grid system in place for arranging content, and see examples of some page layouts.</p>
                        </a>
                    </li> -->
                    <li class="col-md-4">
                        <a href="progress-bars.php">
                            <h2>Progress Bars</h2>
                            <p>Learn how and when progress bars should be used.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="search-lookup-results.php">
                            <h2>Search/Lookup Results</h2>
                            <p>View information on search and lookups as well as how to present and handle results.</p>
                        </a>
                    </li>
                    <!-- <li class="col-md-4 has-children">
                        <a href="tabular-data.php">
                            <h2>Tabular Data</h2>
                            <p>Learn about data tables and how to use them along with their applicable plugins like sorting, filtering and pagination.</p>
                        </a>
                    </li> -->
                    <li class="col-md-4 has-children">
                        <a href="typography.php">
                            <h2>Typography</h2>
                            <p>Explore Kuali's typefaces, and learn how and when to use them. Also learn about appropriate sizing, spacing, and contrast.</p>
                        </a>
                    </li>
                </ul>
                
            </div>
        </div>
    </main>

    <?php include ('../includes/guide-footer.php') ?>
    <?php include ('../includes/footer-scripts.php') ?>
</body>
</html>
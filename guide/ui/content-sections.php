<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'content-sections';
$child_name = 'Content Sections';
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
                <h1><?php echo $child_name ?></h1>
				
                <p>Explore different ways to group and organize content, such as modal windows, accordions, and tab groups</p>
                <ul class="cta-navigation">
                    <li class="col-md-4">
                        <a href="accordions.php">
                            <h2>Accordions</h2>
                            <p>Accordions content containers are used to expand and collapse content sections, usually, allowing a single piece of content to be visible at any given time.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="application-header.php">
                            <h2>Application header</h2>
                            <p>The application header, usually located on the top of the application, provides quick access to navigation and global tasks.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="build-footer.php">
                            <h2>Build footer</h2>
                            <p>Guidelines for the build footer that occurs below the application footer in Kuali interfaces.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="document-header.php">
                            <h2>Document header</h2>
                            <p>The document header is present on Kuali documents to help the user easily identify the document that they are currently viewing.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="modals.php">
                            <h2>Modals</h2>
                            <p>Modals are a way to provide information and user feedback and modify data without leaving the page.</p>
                        </a>
                    </li>
                    <!-- <li class="col-md-4">
                        <a href="show-hide-content.php">
                            <h2>Show/Hide Content</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li> -->
                    <!-- <li class="col-md-4">
                        <a href="syntax-windows.php">
                            <h2>Syntax Windows</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li> -->
                    <li class="col-md-4">
                        <a href="tabbed-containers.php">
                            <h2>Tabbed Containers</h2>
                            <p>Tabbed containers are used to visually separate grouped content behind tabs. Learn when and how to use them.</p>
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
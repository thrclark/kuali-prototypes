<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'navigation';
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
                <h1><?php echo $child_name ?></h1>

					<p>Information on the different forms of naviagtion found across the Kuali applications and provides usage guidelines, best practices, and accessibility considerations.</p>                <ul class="cta-navigation">
                    <li class="col-md-4">
                        <a href="breadcrumbs.php">
                            <h2>Breadcrumbs</h2>
                            <p>Breadcrumbs are a way to provide the user with a navigational trail of where they came from on the application.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="global-menus.php">
                            <h2>Global Menus</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="vertical-navigation.php">
                            <h2>Vertical Navigation</h2>
                            <p>Vertical navigation is used primarily to section individual pieces of content within pages, functioning almost like a subnavigational element.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="sticky-navigation.php">
                            <h2>Sticky Navigation</h2>
                            <p>Sticky elements remain affixed to the top (or bottom or side(s)) of the viewport even when page content is scrolled.</p>
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
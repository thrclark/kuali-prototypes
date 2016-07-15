<?php
$page = 'home';
$nav_section = '';
$nav_name = '';
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
    <meta name="google-site-verification" content="L2QYgp0xQy1aWzOrBi-inWsDSzpUAZVCvI-V9OXBZ8E" />
    <title>Kuali Design Guide</title>

    <?php include ('includes/header-styles.php') ?>
</head>
<body>
    <?php include ('includes/guide-header.php') ?>
    <?php include ('includes/section-header.php') ?>
    <?php include ('includes/breadcrumbs.php') ?>

    <main id="content">
        <div class="container">
            <div class="col-md-12">
                <h1>About the Kuali Design Guide</h1>
                <p>The Kuali Design Guide is a collection of patterns and variations representing consensus solutions to design problems. The Kuali Design Guide is a unified design vision for all of Kuali project teams. The goal of the Kuali Design Guide is to ensure there is a consistent user experience for Kuali products. The Kuali Design Guide comprises:</p>
                <ul class="cta-navigation">
                    <li class="col-md-4 has-children">
                        <a href="ui/">
                            <h2>UI Elements</h2>
                            <p>A catalog of different user interface elements, their proper usage, and other usability and accessibility considerations.</p>
                        </a>
                    </li>
                    <li class="col-md-4 has-children">
                        <a href="patterns/">
                            <h2>Interaction Patterns</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li>
                    <!-- <li class="col-md-4">
                        <a href="templates/">
                            <h2>Templates</h2>
                            <p>Something else as a test.</p>
                        </a>
                    </li> -->
                    <li class="col-md-4">
                        <a href="accessibility/">
                            <h2>Accessibility</h2>
                            <p>Read Kuali's accessibility statement, learn about our process, and find useful accessibility resources and tools.</p>
                        </a>
                    </li>
                    <li class="col-md-4 has-children">
                        <a href="design-process/">
                            <h2>UXI Design Process</h2>
                            <p>Learn about how Kuali approaches design, usability, and accessibility, as well as which browsers we support.</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <?php include ('includes/guide-footer.php') ?>
    <?php include ('includes/footer-scripts.php') ?>
</body>
</html>
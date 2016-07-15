<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'typography';
$child_name = 'Typography';
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
				
                <p>Typography makes up a key aspect of using the web or online applications. The content you read, how it's laid out, the contrast between fore and background, clarity between what's a link and what's not - all of this are things to consider when creating content. In short, typography is as important, if not more important, than the actual content.</p>
                <ul class="cta-navigation">
                    <!-- <li class="col-md-4">
                        <a href="messaging-styles.php">
                            <h2>Messaging Styles</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li> -->
                    <li class="col-md-4">
                        <a href="headings.php">
                            <h2>Headings</h2>
                            <p>Headings are usually used to provide structure and hierarchy and allow easy navigation to users.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="paragraphs.php">
                            <h2>Paragraphs</h2>
                            <p>Paragraph tags are, essentially, for paragraphs or block text.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="lists.php">
                            <h2>Lists</h2>
                            <p>Guidelines for using unordered, ordered, definition lists and variations of them, as well as search results or lookup lists.</p>
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
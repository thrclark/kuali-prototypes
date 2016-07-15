<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'tabular-data';
$child_name = 'Tabular Data';
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

                <p>Pellentesque commodo ornare scelerisque. Praesent sit amet nibh dictum, varius nisl eget, varius augue. Maecenas tortor elit, iaculis et purus at, cursus sollicitudin ante. Pellentesque viverra vel leo vitae pretium. In at imperdiet libero. Sed placerat tellus risus, in lobortis nunc dictum ac. Maecenas luctus nisl sit amet urna tempus convallis. Praesent interdum neque placerat sapien laoreet, in imperdiet nisi euismod. Ut dignissim nunc vel nunc egestas dignissim condimentum quis lacus. Donec aliquet diam vel nulla sodales rutrum. Nulla vehicula, ante eget faucibus iaculis, felis mi facilisis tortor, sed blandit risus justo in sapien.</p>
                <ul class="cta-navigation">
                    <li class="col-md-4">
                        <a href="tabular-groups.php">
                            <h2>Groups</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="data-entry.php">
                            <h2>Data Entry</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="calculations.php">
                            <h2>Calculations</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="detail-display.php">
                            <h2>Detail Display</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
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
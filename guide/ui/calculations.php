<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'tabular-data';
$child_name = 'Tabular Data';
$subchild_section = 'calculations';
$subchild_name = 'Calculations';
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex,nofollow" />
    <title><?php echo $subchild_name ?> - <?php echo $child_name ?> - <?php echo $nav_name ?> - Kuali Design Guide</title>

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
                            <li class="tab"><a href="#usage">Desktop Usage</a></li>
                            <li class="tab"><a href="#mobile">Responsive Usage</a></li>
                            <li class="tab"><a href="#demos">Demos</a></li>
                            <li class="tab"><a href="#accessibility">Accessibility Considerations</a></li>
                            <li class="tab"><a href="#keyboard">Keyboard Shortcuts</a></li>
                            <li class="tab"><a href="#notes">Research &amp; Discussion</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <h1><?php echo $subchild_name ?></h1>

                    <div class="section" id="overview" tabindex="-1">
                        <h2>Overview</h2>
                        <p>Pellentesque commodo ornare scelerisque. Praesent sit amet nibh dictum, varius nisl eget, varius augue. Maecenas tortor elit, iaculis et purus at, cursus sollicitudin ante. Pellentesque viverra vel leo vitae pretium. In at imperdiet libero. Sed placerat tellus risus, in lobortis nunc dictum ac. Maecenas luctus nisl sit amet urna tempus convallis. Praesent interdum neque placerat sapien laoreet, in imperdiet nisi euismod. Ut dignissim nunc vel nunc egestas dignissim condimentum quis lacus. Donec aliquet diam vel nulla sodales rutrum. Nulla vehicula, ante eget faucibus iaculis, felis mi facilisis tortor, sed blandit risus justo in sapien.</p>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Usage</h2>
                        <p>Pellentesque commodo ornare scelerisque. Praesent sit amet nibh dictum, varius nisl eget, varius augue. Maecenas tortor elit, iaculis et purus at, cursus sollicitudin ante. Pellentesque viverra vel leo vitae pretium. In at imperdiet libero. Sed placerat tellus risus, in lobortis nunc dictum ac. Maecenas luctus nisl sit amet urna tempus convallis. Praesent interdum neque placerat sapien laoreet, in imperdiet nisi euismod. Ut dignissim nunc vel nunc egestas dignissim condimentum quis lacus. Donec aliquet diam vel nulla sodales rutrum. Nulla vehicula, ante eget faucibus iaculis, felis mi facilisis tortor, sed blandit risus justo in sapien.</p>
                    </div>
                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility</h2>
                        <p>Pellentesque commodo ornare scelerisque. Praesent sit amet nibh dictum, varius nisl eget, varius augue. Maecenas tortor elit, iaculis et purus at, cursus sollicitudin ante. Pellentesque viverra vel leo vitae pretium. In at imperdiet libero. Sed placerat tellus risus, in lobortis nunc dictum ac. Maecenas luctus nisl sit amet urna tempus convallis. Praesent interdum neque placerat sapien laoreet, in imperdiet nisi euismod. Ut dignissim nunc vel nunc egestas dignissim condimentum quis lacus. Donec aliquet diam vel nulla sodales rutrum. Nulla vehicula, ante eget faucibus iaculis, felis mi facilisis tortor, sed blandit risus justo in sapien.</p>
                    </div>
                    <div class="section" id="notes" tabindex="-1">
                        <h2>Notes</h2>
                        <p>Pellentesque commodo ornare scelerisque. Praesent sit amet nibh dictum, varius nisl eget, varius augue. Maecenas tortor elit, iaculis et purus at, cursus sollicitudin ante. Pellentesque viverra vel leo vitae pretium. In at imperdiet libero. Sed placerat tellus risus, in lobortis nunc dictum ac. Maecenas luctus nisl sit amet urna tempus convallis. Praesent interdum neque placerat sapien laoreet, in imperdiet nisi euismod. Ut dignissim nunc vel nunc egestas dignissim condimentum quis lacus. Donec aliquet diam vel nulla sodales rutrum. Nulla vehicula, ante eget faucibus iaculis, felis mi facilisis tortor, sed blandit risus justo in sapien.</p>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <?php include ('../includes/guide-footer.php') ?>
    <?php include ('../includes/footer-scripts.php') ?>
</body>
</html>
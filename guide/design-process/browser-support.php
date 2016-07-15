<?php
$page = 'index';
$nav_section = 'design-process';
$nav_name = 'Design Process';
$child_section = 'browser-support';
$child_name = 'Browser Support';
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
    <link href="../css/iconfonts/browsers/css/browsers.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <?php include ('../includes/guide-header.php') ?>
    <?php include ('../includes/section-header.php') ?>
    <?php include ('../includes/breadcrumbs.php') ?>

    <main id="content">
        <div class="container">
            <div class="col-md-12">
                <h1><?php echo $child_name ?></h1>
                <p>In order for Kuali products to maintain a competitive edge in its class, we've refined our browser support policies so that our software can take advantage of todays' lastest technology and trends. Various vendors, such as Microsoft, have since also reduced or eliminated support for aging browsers. To better understand these changes, we've put together a useful table so you know what to expect and how to prepare before your next Kuali upgrade.</p>
                <p>To quickly summarize, Kuali has taken on a common system of support which covers the current browser version and one version back. So, if the current version of Internet Explorer is 11, then Kuali offers formal support for version 11 and version 10.</p>
                <p class="alert alert-info">It is important to add that Kuali products are built with robustness and accessibility in mind and all basic functionality will work on browsers not covered here, however some advanced display features or enhancements will only work with supported browsers. Kuali applications are expected to work in the following browsers.</p>
                <table class="table table-bordered browsers">
                    <caption>Table showing the most common browsers, their versions, and which of those versions are supported by Kuali.</caption>
                    <thead>
                        <tr>
                            <td colspan="4" id="b_ie" scope="col"><span class="sr-only">Internet Explorer</span><span class="b-icon browser-ie"></span></td>
                            <td colspan="3" id="b_ff" scope="col"><span class="sr-only">Firefox</span><span class="b-icon browser-firefox"></span></td>
                            <td colspan="2" id="b_safari" scope="col"><span class="sr-only">Safari</span><span class="b-icon browser-safari"></span></td>
                            <td colspan="3" id="b_chrome" scope="col"><span class="sr-only">Chrome</span><span class="b-icon browser-chrome"></span></td>
                        </tr>
                        <tr>
                            <th aria-describedby="b_ie">8</th>
                            <th aria-describedby="b_ie">9</th>
                            <th aria-describedby="b_ie">10</th>
                            <th aria-describedby="b_ie">11</th>
                            <th aria-describedby="b_ff">31.0</th>
                            <th aria-describedby="b_ff">32.0</th>
                            <th aria-describedby="b_ff">Nightlies</th>
                            <th aria-describedby="b_safari">6</th>
                            <th aria-describedby="b_safari">7</th>
                            <th aria-describedby="b_chrome">36</th>
                            <th aria-describedby="b_chrome">37</th>
                            <th aria-describedby="b_chrome">Nightlies</th>
                        </tr>
                    </head>
                    <tbody>
                        <tr>
                            <td><span class="sr-only">No</span><span class="browser-no b-tooltip" data-toggle="tooltip" data-placement="top" title="No formal support offered."></span></td>
                            <td><span class="sr-only">Aging</span><span class="browser-warning b-tooltip" data-toggle="tooltip" data-placement="top" title="This browser is aging and will soon lose support."></span></td>
                            <td><span class="sr-only">Yes</span><span class="browser-yes"></span></td>
                            <td><span class="sr-only">Yes</span><span class="browser-yes"></span></td>
                            <td><span class="sr-only">Yes</span><span class="browser-yes"></span></td>
                            <td><span class="sr-only">Yes</span><span class="browser-yes"></span></td>
                            <td><span class="sr-only">No formal support, but should work</span><span class="browser-warning b-tooltip" data-toggle="tooltip" data-placement="top" title="Expected to work, but no formal support."></span></td>
                            <td><span class="sr-only">Yes</span><span class="browser-yes"></span></td>
                            <td><span class="sr-only">Yes</span><span class="browser-yes"></span></td>
                            <td><span class="sr-only">Yes</span><span class="browser-yes"></span></td>
                            <td><span class="sr-only">Yes</span><span class="browser-yes"></span></td>
                            <td><span class="sr-only">No formal support, but should work</span><span class="browser-warning b-tooltip" data-toggle="tooltip" data-placement="top" title="Expected to work, but no formal support."></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <?php include ('../includes/guide-footer.php') ?>
    <?php include ('../includes/footer-scripts.php') ?>
</body>
</html>
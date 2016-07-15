<?php
/*
 * Builds a breadcrumb based on the variables per each page.
 * $page  // Filename or index of current page
 * $nav_section  // filename minus the .php extension; used for building href's in nav
 * $nav_name  // Nicename used for display
 *    $child_section  // filename minus the .php extension; used for building href's in nav
 *    $child_name  // Nicename used for display
 *       $subchild_section // filename minus the .php extension; used for building href's in nav
 *       $subchild_name // Nicename used for display
 */
?>

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <?php
            if ($page == 'home') {
                echo '<li class="active">Home</li>';
            } else {
                echo '<li><a href="/guide">Home</a></li>';
            }

            if ($nav_section != '') {
                echo '<li';
                if ($child_section == '') {
                    echo ' class="active">' . $nav_name . '</li>';
                } else {
                    echo '><a href="index.php">' . $nav_name . '</a></li>';
                }
            }

            if ($child_section != '') {
                echo '<li';
                if ($subchild_section == '') {
                    echo ' class="active">' . $child_name . '</li>';    
                } else {
                    echo '><a href="' . $child_section . '.php">' . $child_name . '</a></li>';
                }
            }

            if ($subchild_section != '') {
                echo '<li class="active">' . $subchild_name . '</li>';
            }
            ?>
        </ol>
    </div>
</div>
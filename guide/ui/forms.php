<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'forms';
$child_name = 'Forms';
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
					<p>Information on the different types of form fields found across the Kuali applications and provides usage guidelines, best practices, and accessibility considerations.</p>
	                <ul class="cta-navigation">
                    <li class="col-md-4">
                        <a href="checkbox.php">
                            <h2>Checkbox</h2>
                            <p>Checkbox input options allow users to choose muliple options from a list.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="combo-dropdown-select.php">
                            <h2>Combo/Select/Dropdown</h2>
                            <p>Select menus(also know as comboboxes, pulldowns, or dropdowns) allow a single option or, depending on its configuration, multiple options to be selected from a provided list.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="file-upload.php">
                            <h2>File Upload</h2>
                            <p>The Batch File Upload component allows users to upload multiple files of various document types to a web form.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="multiselect.php">
                            <h2>Multiselect</h2>
                            <p>Select elements that allow users to choose more than one option by using checkboxes.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="radios.php">
                            <h2>Radio Buttons</h2>
                            <p>Radio input options allow users to choose only one option from a list.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="required-fields.php">
                            <h2>Required Fields</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li>
                    <!-- <li class="col-md-4">
                        <a href="rich-interactions.php">
                            <h2>Rich Interactions</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li> -->
                    <li class="col-md-4">
                        <a href="text-input.php">
                            <h2>Text Input</h2>
                            <p>Input form fields such as text let users enter a single line of characters.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="textarea-display.php">
                            <h2>Textarea</h2>
                            <p>Textarea's allow users enter multiple lines of characters.</p>
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
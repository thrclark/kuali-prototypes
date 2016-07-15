<?php
$page = 'index';
$nav_section = 'patterns';
$nav_name = 'Interaction Patterns';
$child_section = 'pattern-search';
$child_name = 'Search';
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
                <div class="col-md-3">
                    <nav class="page-subnav tabs">
                        <ul>
                            <li class="tab"><a href="#overview">Overview</a></li>
                            <li class="tab"><a href="#forms">Search Forms</a></li>
                            <li class="tab"><a href="#results">Search Results</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9">
                    <h1><?php echo $child_name ?></h1>
                    <div class="section" id="overview" tabindex="-1">
                        <h2>Overview</h2>
                        <p>Lorem ipsum...</p>
                        <p>Explore this section further to see the different patterns and find out where and when to use them.</p>
                        <p><button type="button" class="btn btn-primary trigger-step" data-tab-section="forms">Next part: Search Forms</button>
                    </div>

                    <div class="section" id="forms" tabindex="-1">
                        <h2>Search Forms</h2>
                        <p>asdf</p>

                        <div class="example clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-search-01.png" alt="A basic search form with an icon button" />
                                    <figcaption>A basic search form with an icon button</figcaption>
                                </figure>
                                <figure>
                                    <img src="../img/pattern-search-02.png" alt="An advanced search form" />
                                    <figcaption>A advanced search form</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Search Forms</h3>
                                <!-- <p class="sr-only">This is the Kuali recommended method</p> -->
                                <ul class="list-pros">
                                    <li>Familiar interface for searching, using either the basic or advanced variants</li>
                                    <li>Basic forms allow navigation to advanced forms (and visa versa) to fine tune query</li>
                                    <li>Advanced search form allows any number of fields</li>
                                    <li>Accessible out of the box with proper markup</li>
                                </ul>
                            </div>
                        </div>

                        <p><button type="button" class="btn btn-primary trigger-step" data-tab-section="results">Next part: Search Results</button>
                    </div>

                    <div class="section" id="results" tabindex="-1">
                        <h2>Search Results</h2>
                        <p>Depending on the number of search results requested, we recommend either using radio buttons or checkboxes and the two-step process to reduce errors. These methods also utilize controls and interactions that are familiar in many popular web-based email applications like Gmail and Yahoo.</p>

                        <div class="example clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-search-results-01.png" alt="Search results with radio buttons allowing only one choice" />
                                    <figcaption>Search results with radio buttons allowing only one choice</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Single item using radio buttons</h3>
                                <!-- <p class="sr-only">This is the Kuali recommended method</p> -->
                                <ul class="list-pros">
                                    <li>Radio buttons are familiar and intuitive indicating a single choice is available</li>
                                    <li>Rows highlight on hover and when the radio button is checked solidifying the current selected choice</li>
                                    <li>Two-step process helps to reduce mistakes</li>
                                </ul>
                            </div>
                        </div>

                        <div class="example clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-search-results-02.png" alt="Search results with action buttons allows for a single choice, but adds additional options to each choice" />
                                    <figcaption>Search results with action buttons allows for a single choice, but adds additional options to each choice</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Single item using action buttons</h3>
                                <ul class="list-pros">
                                    <li>Allows users to perform multiple actions on a result, including choosing the result</li>
                                    <li>Great when additional details aren't shown in the results table</li>
                                    <li>Single-step process with button helps to reduce mistakes</li>
                                </ul>
                            </div>
                        </div>

                        <div class="example clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-search-results-03.png" alt="Search results with a single choice option using links to select the desired result" />
                                    <figcaption>Search results with a single choice option using links to select the desired result</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Single item using links</h3>
                                <ul class="list-pros">
                                    <li>Links are familiar to existing Kuali interfaces</li>
                                    <li>Similiar to radio buttons, but less formal</li>
                                </ul>
                            </div>
                        </div>

                        <div class="example clearfix">
                            <div class="figures">
                                <figure>
                                    <img src="../img/pattern-search-results-04.png" alt="Search results allowing for more than one choice using checkboxes" />
                                    <figcaption>Search results allowing for more than one choice using checkboxes</figcaption>
                                </figure>
                            </div>

                            <div class="details">
                                <h3>Multiple items using checkboxes</h3>
                                <!-- <p class="sr-only">This is the Kuali recommended method</p> -->
                                <ul class="list-pros">
                                    <li>Checkboxes are familiar and intuitive indicating multiple choices are available</li>
                                    <li>Shares familiarities with many popular online email applications such as Gmail and Yahoo</li>
                                    <li>Rows highlight on hover and when the radio button is checked solidifying the current selected choice</li>
                                    <li>Two-step process helps to reduce mistakes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include ('../includes/guide-footer.php') ?>
    <?php include ('../includes/footer-scripts.php') ?>
</body>
</html>
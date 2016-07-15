<?php
$page = 'index';
$nav_section = 'design-process';
$nav_name = 'UXI Design Process';
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
    <title><?php echo $nav_name ?> - Kuali Design Guide</title>

    <?php include ('../includes/header-styles.php') ?>
</head>
<body>
    <?php include ('../includes/guide-header.php') ?>
    <?php include ('../includes/section-header.php') ?>
    <?php include ('../includes/breadcrumbs.php') ?>

    <main id="content">
        <div class="container">
            <div class="col-md-12">
                <h1><?php echo $nav_name ?></h1>
                <h2>User Centered Design</h2>
                <p>UXI recommends a user centered design approach when designing Kuali applications.  User centered design (UCD) focuses on the users of the application and their needs throughout all phases of the design process.  UCD can be applied on many different levels no matter what kind of development process you are using.</p>
            	
                <h3>Determine the primary personas</h3>
                <p>The first step in the UXI design process requires the project teams to identify the generalized user(s) of the application.  We call these <a href="http://uxmag.com/articles/personas-the-foundation-of-a-great-user-experience">personas</a>.  Identifying the personas as a team and choosing which ones will be the focus of the project helps the entire project team understand and become familiar with the primary users of the application, and it also helps the team determine priorities during the development of the project.</p>
                <p>Identifying personas can be done in a number of ways.  Sometimes the subject matter experts (product owners, business analysts, etc) have enough knowledge about the system to identify and describe the generalized groups of users of the system.  When that knowledge isn't readily available, UXI will conduct ethnographic research and study the users of the system using contextual interviews.  This helps UXI understand the users in their own environment as well as how they use the existing system to get their job done.</p
                <p>UXI recommends choosing 1-3 primary personas during a project.  The needs of those primary users will be considered a priority when designing features and functionality.  Other personas may be considered secondary or tertiary.</p>
            	
                <h3>Identify workflows and user stories</h3>
                <p>Identifying the existing workflows of users (either in the existing system or a different system) helps the UXI team understand the overall system as well as where improvements to the workflow can be made.  It isn't required to have workflows documented, however it is extremely helpful.  User stories, on the other hand, are required.  User stories can be in many forms, but in general, user stories should be a way for the project to communicate and document requirements for the project.  UXI recommends documenting the requirements in the form of user stories so that a feature or functionality will only be considered a requirement if it helps the user accomplish a task or goal in the system.</p>
                <p>User stories are often used in agile development teams because it is a way to quickly identify the user need without identifying the solution until later.  User stories can also be used in any kind of development process with less or more detail.</p>

                <h3>Create concepts, and get them in front of actual users ASAP</h3>               
                <p>UXI creates design solutions that are informed by extensive user research, best practices, and optimal accessibility to ensure that Kuali meets our target accessibility standards.  The UXI team works across multiple projects so that there is a consistent user experience being applied across all of Kuali applications.</p>
                <p>The UXI team uses prototyping tools that allow us to create rapid, low fidelity prototypes of design solutions to get user input as soon as possible.  We consider this concept testing 'formative' usability testing.  UXI will conduct usability tests on low fidelity prototypes early in the project to ensure that the concepts are well accepted and there are no major usability issues with the general design patterns.  </p>

                <h3>Design, evaluate, refine, iterate</h3>
                <p>After the project has moved past the low fidelity prototype and the designs have been approved by the project team, UXI will create high fidelity prototypes with CSS/HTML to hand off to the developers.  UXI designers work closely with the developers to assist with the implementation and integration of the designs into the rest of the software.  Typically, another round or two of usability testing is conducted to ensure that the fully developed features did not introduce any usability issues.</p>
                <p>After a product has released, routine usability testing should be conducted as new features and functionality are introduced.  User feedback should be gathered consistently throughout the life of a product, not just when it is initially created.  Users' needs change, technology changes, the work environment changes; it is essential to keep the user at the center of all design decisions and to make sure that there is always time in a project to gather user feedback.</p>
               
               <!-- <ul class="cta-navigation">
                    <li class="col-md-4">
                        <a href="browser-support.php">
                            <h2>Browser Support</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li>
                    <!-- <li class="col-md-4">
                        <a href="content-sections.php">
                            <h2>Content Sections</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="navigation.php">
                            <h2>Navigation</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="forms.php">
                            <h2>Forms</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="buttons.php">
                            <h2>Buttons</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="help-callouts.php">
                            <h2>Help &amp; Callouts</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="tabular-data.php">
                            <h2>Tabular Data</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="typography.php">
                            <h2>Typography</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li>
                    <li class="col-md-4">
                        <a href="iconography.php">
                            <h2>Iconography</h2>
                            <p>Duis ipsum quam, ultricies eu congue vel, posuere ut orci. Sed euismod egestas pharetra. In viverra tincidunt massa, quis congue dui sagittis eget.</p>
                        </a>
                    </li> -->
                </ul>
                
            </div>
        </div>
    </main>

    <?php include ('../includes/guide-footer.php') ?>
    <?php include ('../includes/footer-scripts.php') ?>
</body>
</html>
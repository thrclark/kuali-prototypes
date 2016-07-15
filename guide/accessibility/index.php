<?php
$page = 'index';
$nav_section = 'accessibility';
$nav_name = 'Accessibility';
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
                <div class="col-md-3">
                    <nav class="page-subnav tabs">
                        <ul>
                            <li class="tab"><a href="#overview">Overview</a></li>
                            <li class="tab"><a href="#statement">Kuali's Statement</a></li>
                            <li class="tab"><a href="#resources">Resources</a></li>
                            <li class="tab"><a href="#process">Process</a></li>
                            <li class="tab"><a href="#notes">Notes</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9" id="main_content">
                    <h1>Accessibility</h1>
                    <div id="process">
                        <div class="section" id="overview" tabindex="-1">
                            <h2>Overview</h2>
                            <p>The Kuali User Experience Initiative is committed to creating interfaces, tools, and applications that are accessible and usable for persons with disabilities. UXI has taken the lead from the <a href="http://www.w3.org/WAI/intro/wcag">W3C Web Content Accessibility Guidelines</a> (WCAG) and strives to consistently conform to the <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/conformance.html">WCAG 2.0 level A and AA</a> standards.</p>
                        </div>
                        <div class="section" id="statement" tabindex="-1">
                            <h2>Statement</h2>
                            <p>To ensure that these standards are being met, the UXI designers follow these steps when proposing design solutions:</p>
                            <ul>
                                <li>Validate HTML markup for full screens or individual Kuali Rapid Application Development (KRAD) components using the W3C HTML Validator</li>
                                <li>Perform a baseline test on static HTML pages (for full screens or individual KRAD components) using WAVE, a web accessibility evaluation tool.</li>
                                <li>Evaluate each design using the WebAIM WCAG 2.0 checklist</li>
                            </ul>
                            <p>These steps will be taken, and the guidelines referenced, throughout UXI work such as when creating KRAD components or when working with individual Kuali project teams on modules and screen designs. It should be noted that when designs are developed outside of the UXI team by other Kuali project teams, and/or when institutions implement modules, it is up to those entities to meet accessibility standards.</p>
                        </div>
                        <div class="section" id="resources" tabindex="-1">
                            <h2>Resources</h2>
                            <p>Below is a list of resources recommended by the UXI team to identify and resolve accessibility issues, and ensure Kauli applications meet Section 508 and WCAG 2.0 A and AA requirements.</p>
                            <ul>
                                <li><a href="http://jigsaw.w3.org/css-validator/">W3C HTML Validator</a></li>
                                <li><a href="http://wave.webaim.org/">WebAim WAVE</a></li>
                                <li><a href="http://webaim.org/resources/contrastchecker/">WebAim Color Contrast Checker</a></li>
                                <li><a href="http://webaim.org/standards/wcag/checklist">WCAG 2.0 Checklist</a></li>
                                <li><a href="http://www.state.gov/m/irm/impact/126343.htm">Voluntary Product Accessibility Template (VPAT)</a></li>
                            </ul>
                        </div>
                        <div class="section" id="the-process" tabindex="-1">
                            <h2>The Process</h2>
                            <p>When developing code for Kuali and KRAD, and since much of the Kuali output is so dynamic, it's best to start addressing accessibility at the component level. Ensuring a certain level of accessibility for each and every component will help the overall accessibility of the application. To be accessible is to be usable, and to be usable is to be accessible, as accessibility isn't just for persons with disabilities or impairments. It’s also important to keep in mind that overdoing accessibility is just as bad as not doing it at all, as it overcomplicates the interface and can confuse screen readers and other assistive technologies.</p>
                            <p>Producing valid, semantic markup is the first and most important step in ensuring accessibility. Code should be created that makes sense and is error-free. To this end developers should run each components' markup through the W3C HTML Validator and fix any errors that are found, making sure to use the correct DOCTYPE for documents (i.e., HTML5, HTML4 Transitional, etc.).</p>
                            <p>Once the output markup is valid and semantic, the components' markup should be run through the WebAim WAVE tool to discover any accessibility issues, such as improperly nested elements, missing headings, and even foreground/background contrast. Corrections can then be made as needed, keeping in mind less is more. </p>
                            <p>As development and code is passed from team to team, developers should be sure to periodically check the compiled markup for accessibility issues and to ensure valid, semantic, and compliant HTML. Additionally, each team should maintain compliance with WCAG 2.0 levels A and AA via the WCAG 2.0 Checklist. If issues are found they should be addressed before passing the code off to the next team. Failure to do so will create a “snowball” effect of accessibility issues making for a large number of issues for later teams to deal with. By having each development team ensuring their code is compliant, semantic, valid and accessible, we can better guarantee a more compliant, semantic, valid and accessible final product.</p>
                            <p>The development team responsible for the final application should complete a Voluntary Product Accessibility Template (VPAT), documenting those aspects that meet the required criteria, specifying which criteria are met (A, AA, or AAA). The VPAT will let institutions know where each application stands in relation to Section 508 Standards.</p>
                        </div>
                        <div class="section" id="notes" tabindex="-1">
                            <h2>Notes</h2>
                            <ul>
                                <li><a href="http://www.section508.gov/">Section 508.gov</a></li>
                                <li>Designing for Accessibility (5 part series)
                                    <ul>
                                        <li><a href="http://shannonsansserif.com/2011/01/designing-for-accessibility/">Part 1: Designing for Accessibility</a></li>
                                        <li><a href="http://shannonsansserif.com/2011/01/designing-for-keyboard-accessibility-location/">Part 2: Designing for Keyboard Accessibility: Location, Location, Location</a></li>
                                        <li><a href="http://shannonsansserif.com/2011/10/designing-for-accessibility-visual-impairments/">Part 3: Designing for Visual Impairments</a></li>
                                        <li><a href="http://shannonsansserif.com/2011/11/designing-for-accessibility-hearing-impairments/">Part 4: Designing for Hearing Impairments</a></li>
                                        <li><a href="http://shannonsansserif.com/2011/12/designing-for-accessibility-designing-without-javascript/">Part 5: Designing for Interactions Without JavaScript</a></li>
                                    </ul>
                                </li>
                                <li><a href="http://websiteaccessibility.donaldevans.com/best-practices-by-use/">Donald Evans - Best Practices By Use</a></li>
                                <li><a href="http://www.bostonglobe.com/opinion/2013/09/08/classroom-technology-must-accessible-those-with-disabilities/svRyLPnmnBSNCDUuQaUEVJ/story.html?s_campaign=sm_tw&utm_source=buffer&utm_campaign=Buffer&utm_content=buffer4beb2&utm_medium=twitter">Boston Globe - Digital education shouldn’t bypass disabled</a></li>
                                <li><a href="http://webaim.org/intro/">WebAIM.org - Introduction to Web Accessibility</a></li>
                            </ul>
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
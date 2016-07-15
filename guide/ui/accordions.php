<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'content-sections';
$child_name = 'Content Sections';
$subchild_section = 'accordions';
$subchild_name = 'Accordions';
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
                        <p>Accordion content containers (and progressive disclosure containers) are similar to tabbed containers in that they allow only a single piece of content to be visible at any given time. Accordion containers typically stack vertically and the title of each section functions also as the tab, and so activating it would toggle the visibility of its content. Unlike tabbed containers however, depending on the configuration of an accordion container, multiple panels may be visible at once. Accordion containers are especially good when stepping through content, for example a checkout process.</p>
                        <p>There are three different types of accordion containers:</p>
                        <ul>
                            <li>Standard</li>
                            <li>Progressive disclosure</li>
                            <li>Linear/Sequential</li>
                        </ul>
                        
                        <h3>Standard</h3>
                        <p>The standard accordion allows for only one panel to be open at any given time. Opening one panel will shut the others. These are the base for the Rollup style accordion container.</p>

                        <h3>Progressive disclosure</h3>
                        <p>These types of accordion containers allow multiple panels to be open any any given time and often include buttons to "expand all" or "collapse all". A popular example of this would be Gmail's conversation view. This style also works well with nested containers as often found in the Conflict of Interest module in Kuali.</p>

                        <h3>Linear/Sequential</h3>
                        <p>The Linear/Sequential style functions like the Standard style and allows only one container to be open at any given time. The difference here is that these typically function in a linear fashion. A good example of this would be a checkout process. The first panel might be an order summary, followed by shipping information, followed by billing information, followed lastly with a confirmation.</p>
                    </div>
                    <div class="section" id="usage" tabindex="-1">
                        <h2>Usage</h2>
                        <h3>Standard accordion</h3>
                        <figure>
                            <img src="../img/accordion1.png" alt="A standard accordion">
                            <figcaption>Example of a standard accordion. Only one panel may be open at any given time.</figcaption>
                        </figure>
                        
                        <h4>Quick summary of style features:</h4>
                        <ul>
                            <li>Only one panel can be opened at a time. Opening one closes the others.</li>
                            <li>The entire title bar is clickable (changed the Bootstrap default of only the text link).</li>
                        </ul>

                        <h4>When to use this style:</h4>
                        <ul>
                            <li>When users need to focus on a single thing at a time.</li>
                        </ul>
                        
                        <h3>Progressive disclosure accordion</h3>
                        <figure>
                            <img src="../img/accordion2.png" alt="Example of a progressive accordion">
                            <figcaption>A progressive accordion. None, any or all panels may be open at any given time.</figcaption>
                        </figure>
                        
                        <h4>Quick summary of style features:</h4>
                        <ul>
                            <li>The entire title bar is clickable (updated from the Bootstrap default of the text link).</li>
                            <li>None, any, or all panels may be opened at any given time.</li>
                        </ul>

                        <h4>When to use this style:</h4>
                        <ul>
                            <li>Useful when nesting accordions.</li>
                            <li>When a linear flow is not required.</li>
                            <li>When the desire or need to see multiple panels at any one time exists.</li>
                        </ul>
                        
                        <h3>Linear/Sequential variant</h3>
                        <figure>
                            <img src="../img/accordion3.png" alt="Example of a linear accordion">
                            <figcaption>A linear accordion. Only one panel may be open. Buttons navigate between panels creating a stepped process.</figcaption>
                        </figure>
                        
                        <h4>Quick summary of style features:</h4>
                        <ul>
                            <li>Only one panel may be opened at any given time. Opening one will close the others.</li>
                            <li>Often feature navigational buttons which progress through the panels linearly.</li>
                        </ul>

                        <h4>When to use this style:</h4>
                        <ul>
                            <li>When a linear or stepped approach is needed.</li>
                        </ul>
                    </div>
                    
                    <div class="section" id="mobile" tabindex="-1">
                        <h2>Responsive Usage</h2>
                        <p>There is no additional usage requirements for mobile devices. The panels should be displayed as a block element and should take up the full width of the device.</p>
                    </div>
                    
                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <h3>HTML</h3>
<pre class="language-markup"><code class="html language-markup">&lt;section id="progressive_example"&gt;
  &lt;h2&gt;Progressive Disclosure&lt;/h2&gt;
    &lt;div class="btn-group group-toggle clearfix"&gt;
        &lt;button class="btn btn-default btn-xs" data-action="show"&gt;Expand all&lt;/button&gt;
        &lt;button class="btn btn-default btn-xs" data-action="hide"&gt;Collapse all&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="panel-group" id="accordion2"&gt;
        &lt;div class="panel panel-default"&gt;
            &lt;div class="panel-heading"&gt;
                &lt;h4 class="panel-title"&gt;
                    &lt;a href="#collapseTwo1" id="tabTwo1" data-toggle="collapse" data-parent="#accordion2" aria-controls="collapseTwo1" role="tab"&gt;
                    &lt;span class="icon-angle-up"&gt;&lt;/span&gt; Progressive Disclosure Group Item #1&lt;/a&gt;
                &lt;/h4&gt;
            &lt;/div&gt;
            &lt;div id="collapseTwo1" class="panel-collapse collapse collapse2 in" aria-labeledby="tabTwo1" role="tabpanel"&gt;
                &lt;div class="panel-body" tabindex="-1"&gt;
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="panel panel-default"&gt;
            &lt;div class="panel-heading"&gt;
                &lt;h4 class="panel-title"&gt;
                    &lt;a href="#collapseTwo2" id="tabTwo2" data-toggle="collapse" data-parent="#accordion2" aria-controls="collapseTwo2" role="tab"&gt;
                    &lt;span class="icon-angle-down"&gt;&lt;/span&gt; Progressive Disclosure Group Item #2&lt;/a&gt;
                &lt;/h4&gt;
            &lt;/div&gt;
            &lt;div id="collapseTwo2" class="panel-collapse collapse collapse2" aria-labeledby="tabTwo2" role="tabpanel"&gt;
                &lt;div class="panel-body" tabindex="-1"&gt;
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="panel panel-default"&gt;
            &lt;div class="panel-heading"&gt;
                &lt;h4 class="panel-title"&gt;
                    &lt;a href="#collapseTwo3" id="tabTwo3" data-toggle="collapse" data-parent="#accordion2" aria-controls="collapseTwo3" role="tab"&gt;
                    &lt;span class="icon-angle-down"&gt;&lt;/span&gt; Progressive Disclosure Group Item #3&lt;/a&gt;
                &lt;/h4&gt;
            &lt;/div&gt;
            &lt;div id="collapseTwo3" class="panel-collapse collapse collapse2" aria-labeledby="tabTwo3" role="tabpanel"&gt;
                &lt;div class="panel-body" tabindex="-1"&gt;
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/section&gt;
&lt;section id="rollup_example"&gt;
    &lt;h2&gt;Stepped rollup&lt;/h2&gt;
    &lt;div class="panel-group" id="accordion3"&gt;
        &lt;div class="panel panel-default"&gt;
            &lt;div class="panel-heading"&gt;
                &lt;h4 class="panel-title"&gt;
                    &lt;a href="#collapseThree1" id="tabThree1" data-toggle="collapse" data-parent="#accordion3" aria-controls="collapseThree1" role="tab"&gt;
                    &lt;span class="icon-angle-up"&gt;&lt;/span&gt; Step 1&lt;/a&gt;
                &lt;/h4&gt;
            &lt;/div&gt;
            &lt;div id="collapseThree1" class="panel-collapse collapse collapse3 in" aria-labeledby="tabThree1" role="tabpanel"&gt;
                &lt;div class="panel-body" tabindex="-1"&gt;
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    &lt;div class="panel-actions clearfix"&gt;
                        &lt;button class="btn btn-primary btn-sm pull-right" data-action="next"&gt;Next step&lt;/button&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="panel panel-default"&gt;
            &lt;div class="panel-heading"&gt;
                &lt;h4 class="panel-title"&gt;
                    &lt;a href="#collapseThree2" id="tabThree2" data-toggle="collapse" data-parent="#accordion3" aria-controls="collapseThree2" role="tab"&gt;
                    &lt;span class="icon-angle-down"&gt;&lt;/span&gt; Step 2&lt;/a&gt;
                &lt;/h4&gt;
            &lt;/div&gt;
            &lt;div id="collapseThree2" class="panel-collapse collapse collapse3" aria-labeledby="tabThree2" role="tabpanel"&gt;
                &lt;div class="panel-body" tabindex="-1"&gt;
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    &lt;div class="panel-actions clearfix"&gt;
                        &lt;button class="btn btn-primary btn-sm pull-right" data-action="next"&gt;Next step&lt;/button&gt;
                        &lt;button class="btn btn-default btn-sm pull-right" data-action="prev"&gt;Previous step&lt;/button&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="panel panel-default"&gt;
            &lt;div class="panel-heading"&gt;
                &lt;h4 class="panel-title"&gt;
                    &lt;a href="#collapseThree3" id="tabThree3" data-toggle="collapse" data-parent="#accordion3" aria-controls="collapseThree3" role="tab"&gt;
                    &lt;span class="icon-angle-down"&gt;&lt;/span&gt; Step 3&lt;/a&gt;
                &lt;/h4&gt;
            &lt;/div&gt;
            &lt;div id="collapseThree3" class="panel-collapse collapse collapse3" aria-labeledby="tabThree3" role="tabpanel"&gt;
                &lt;div class="panel-body" tabindex="-1"&gt;
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    &lt;div class="panel-actions clearfix"&gt;
                        &lt;button class="btn btn-default btn-sm pull-right" data-action="prev"&gt;Previous step&lt;/button&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/section&gt;</code></pre>
                        
                        <h3>CSS</h3>
<pre class="language-css"><code class="html language-css">.panel-heading {
    padding: 0;
}
 
h4 a {
    display: block;
    padding: 10px 15px;
}</code></pre>
                        
                        <h3>JavaScript</h3>
<pre class="language-javascript"><code class="html language-javascript">$('.collapse1').collapse({
    toggle: false,
    parent: '#accordion1'
}).on('click', '.panel-title a', function() {
    if ($(this).parent().parent().parent().hasClass('in')) {
        $(this).find('span').toggleClass('icon-angle-down icon-angle-up');
    }
});
 
$('.collapse2, .collapse3').collapse({
    toggle: true
}).on('click', '.panel-title a', function() {
    if ($(this).parent().parent().parent().hasClass('in')) {
        $(this).find('span').toggleClass('icon-angle-down icon-angle-up');
    }
});
 
$('.group-toggle button').click(function(e) {
    e.preventDefault();
    $('.collapse2').collapse($(this).data('action'));
});
 
$('.panel-actions button').click(function(e) {
    var p = $(this).parent().parent().parent();
    if ($(this).data('action') == 'prev') {
        p.collapse('hide');
        p.parent().prev().children('.panel-collapse').collapse('show').find('.panel-body');
    } else if ($(this).data('action') == 'next') {
        p.collapse('hide');
        p.parent().next().children('.panel-collapse').collapse('show').find('.panel-body');
    } else {
    }
});</code></pre>
                        
                        <h3>JSFiddle</h3>
                        <p><a href="">View the JSFiddle</a> for a working example of tabbed containers.</p>
                        
                    </div>
                    
                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility Considerations</h2>
                        <ul>
                            <li>Panel titles (the toggling element) should be focusable and able to be activated. They should also be announced properly and have a unique <code>id</code>.</li>
                            <li>The associated content panel should have <code>aria-labeledby=""</code> which points to the <code>id</code> in the title.</li>
                            <li>Panel titles should also include <code>aria-controls=""</code> which points to the <code>id</code> of the content panel associated with the title.</li>
                            <li>Titles should have <code>role="tab</code>.</li>
                            <li>Content panels should have role="tabpanel.</li>
                            <li>Content panels should be focusable and focus should be sent to it when it is expanded/opened. The only case where this wouldn't be required is if the opened panel contains form fields, which would receive the next Tab focus.</li>
                            <li>If using buttons (say in a Rollup variant), the buttons should describe actions (e.g., Save and continue) indicating what's going to happen.</li>
                        </ul>
                        
                        <h3>Behavior without scripting</h3>
                        <p>Since the class <code>.in</code> is added to opened panels, those panels that do not have it will not be opened when the page loads. Include the <code>.in</code> class on all panels in your markup (so all panels display by default) and after JavaScript is loaded, remove the <code>.in</code> class from all panels but the first. This way, if JavaScript isn't present or is buggy and not working properly, all content will still be available.</p>
                    
                        <h3>Accessibility Resources</h3>
                        <a href="http://validator.w3.org/">W3 HTML Validator </a><br>
                        <a href="http://wave.webaim.org/">WebAim WAVE </a>
                    </div>
                    
                    <div class="section" id="keyboard" tabindex="-1">
                        <h2>Keyboard Shortcuts</h2>
                        <p>Aside from the normal Tabbing and link/button activating, keyboard navigation may be added to accordion containers if desired. Arrow keys may optionally be used to move up, down, and within panels.</p>
                    </div>
                    
                    <div class="section" id="notes" tabindex="-1">
                        <h2>Research and Discussion</h2>
                        <p>Includes usability research findings and recommendations, information from the UIM discussion page, links, chapters, articles, etc that supports the design decision.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include ('../includes/guide-footer.php') ?>
    <?php include ('../includes/footer-scripts.php') ?>
</body>
</html>
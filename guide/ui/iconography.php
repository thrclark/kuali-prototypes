<?php
$page = 'index';
$nav_section = 'ui';
$nav_name = 'UI Elements';
$child_section = 'iconography';
$child_name = 'Iconography';
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

    <!-- Include the icon fonts, one for each application -->
    <link href="../css/iconfonts/kc/css/kc.css" type="text/css" rel="stylesheet" />
    <!-- <link href="../css/iconfonts/khr/css/khr.css" type="text/css" rel="stylesheet" />
    <link href="../css/iconfonts/kfs/css/kfs.css" type="text/css" rel="stylesheet" />
    <link href="../css/iconfonts/ks/css/ks.css" type="text/css" rel="stylesheet" />
    <link href="../css/iconfonts/ole/css/ole.css" type="text/css" rel="stylesheet" />
    <link href="../css/iconfonts/rice/css/rice.css" type="text/css" rel="stylesheet" /> -->
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
                            <li class="tab"><a href="#use">Usage</a></li>
                            <li class="tab"><a href="#icons">Icon font</a></li>
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
                        <p>Icons can help quickly identify actions. They're a common visual language which can, in most cases, help bridge language gaps. Icon fonts are essentially that - fonts that are icons, meant to replace graphic icons. Icon fonts are scalable, easier to manage, and have more uses than standard graphic images. The scaling comes in handy for the varying resolutions that exist.</p>
                        <h3>Variations</h3>
                        <ul>
                            <li>Icons by themselves</li>
                            <li>Icons with accompanying label text</li>
                        </ul>
                    </div>

                    <div class="section" id="icons" tabindex="-1">
                        <h2>Icon font</h2>
                        <p>This is a collection of icon/fonts used by the Kuali suite of products. Items with Classnames in parenthesis are what KS was previously using.</p>
                        <p>Jump to...</p>
                        <ol>
                            <li><a href="#global">Global Kuali-wide icons</a></li>
                            <li><a href="#kc">Kuali Coeus (KC) specific icons</a></li>
                            <li><strike><a href="#khr">Kuali Human Resources (KHR) specific icons</a></strike></li>
                            <li><strike><a href="#ks">Kuali Student (KS) specific icons</a></strike></li>
                            <li><strike><a href="#kfs">Kuali Financial System (KFS) specific icons</a></strike></li>
                            <li><strike><a href="#ole">Kuali Ole (OLE) specific icons</a></strike></li>
                            <li><strike><a href="#rice">Kuali Rice (RICE) specific icons</a></strike></li>
                        </ol>

                        <h3 id="global">Global Kuali-wide icons</h3>
                        <p>These icons have been selected for use across all applications. The particular usage, both verbal and visual, should be consistent.</p>
                        <table class="table table-bordered">
                            <tr>
                                <th width="50">Icon</th>
                                <th>Usage</th>
                                <th width="250">Class</th>
                                <th width="100">Code</th>
                            </tr>
                            <tr>
                                <td><span class="icon-plus"></span></td>
                                <td><strong>Add</strong><br />This icon is used to add entries or items to a collection. It should be accompanied with label text (+ Add) and should be within a button (performing an action).</td>
                                <td><code>.icon-plus</code></td>
                                <td><code>0xe801</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-angle-up"></span></td>
                                <td><strong>Angle (up)</strong><br />Generally used to open or close containers, typically found in collapsible collections. Should not be used for pagination or movement.</td>
                                <td><code>.icon-angle-up</code></td>
                                <td><code>0xe80f</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-angle-right"></span></td>
                                <td><strong>Angle (right)</strong><br />Generally used to open or close containers, typically found in collapsible collections. Should not be used for pagination or movement.</td>
                                <td><code>.icon-angle-right</code></td>
                                <td><code>0xe810</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-angle-down"></span></td>
                                <td><strong>Angle (down)</strong><br />Generally used to open or close containers, typically found in collapsible collections. Should not be used for pagination or movement.</td>
                                <td><code>.icon-angle-down</code></td>
                                <td><code>0xe812</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-angle-left"></span></td>
                                <td><strong>Angle (left)</strong><br />Generally used to open or close containers, typically found in collapsible collections. Should not be used for pagination or movement.</td>
                                <td><code>.icon-angle-left</code></td>
                                <td><code>0xe811</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-arrow-up"></span></td>
                                <td><strong>Arrow (up)</strong><br />Typically used to indicate movement, or to move things around. An example might be to move an item in a collection up.</td>
                                <td><code>.icon-arrow-up</code></td>
                                <td><code>0xe820</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-arrow-right"></span></td>
                                <td><strong>Arrow (right)</strong><br />Typically used to indicate movement, or to move things around. An example might be to move an item in a collection to the right.</td>
                                <td><code>.icon-arrow-right</code></td>
                                <td><code>0xe81f</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-arrow-down"></span></td>
                                <td><strong>Arrow (down)</strong><br />Typically used to indicate movement, or to move things around. An example might be to move an item in a collection down.</td>
                                <td><code>.icon-arrow-down</code></td>
                                <td><code>0xe81d</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-arrow-left"></span></td>
                                <td><strong>Arrow (left)</strong><br />Typically used to indicate movement, or to move things around. An example might be to move an item in a collection to the left.</td>
                                <td><code>.icon-arrow-left</code></td>
                                <td><code>0xe81e</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-attention"></span></td>
                                <td><strong>Attention/Warning</strong><br />May be used in warning/caution user feedback messaging, and should be some sort of yellow or orange.</td>
                                <td><code>.icon-attention</code></td>
                                <td><code>0xe84f</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-calendar"></span></td>
                                <td><strong>Calendar</strong><br />Specifically used for datepickers and generally within a button. May be used outside of a button.</td>
                                <td><code>.icon-calendar</code></td>
                                <td><code>0xe804</code></td>
                            </tr>
                            <!-- <tr>
                                <td><span class="icon-cancel"></span></td>
                                <td><strong>Cancel</strong><br />Icon used alongside label text for cancelling an action or cancelling changes. It may be used as a link or within a button.</td>
                                <td><code>.icon-cancel</code></td>
                                <td><code>0xe80b</code></td>
                            </tr> -->
                            <tr>
                                <td><span class="icon-close"></span></td>
                                <td><strong>Close</strong><br />Dark on transparent background. This icon may be used to indicate additinal information. The transparent background allows for additional CSS rules to apply, to say, give it a border. This icon works especially well for tooltips and popovers. Colors should generally include some shade of blue.</td>
                                <td><code>.icon-close</code></td>
                                <td><code>0xe84b</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-close-circled-light"></span></td>
                                <td><strong>Close (alt)</strong><br />Dark background with transparent center. This icon should be used in informational user feedback messages. It should usually be shaded with some variation of blue.</td>
                                <td><code>.icon-close-circled-light</code></td>
                                <td><code>0xe84c</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-copy"></span></td>
                                <td><strong>Copy</strong><br />May be used when using a WYSIWYG editor, or when the need to 'copy' text from surrounding text rises. May also be used to copy files or documents. Should be used within a button.</td>
                                <td><code>.icon-copy</code></td>
                                <td><code>0xe809</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-cut"></span></td>
                                <td><strong>Cut</strong><br />May be used when using a WYSIWYG editor, or when the need to 'cut' text from surrounding text rises. Should be used within a button.</td>
                                <td><code>.icon-cut</code></td>
                                <td><code>0xe80c</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-delete"></span></td>
                                <td><strong>Delete/Remove</strong><br />To be used whenever deleting or removing an entry from a collection or another piece of data or setting. May be used inside or outside of a button. Doesn't necessarily need to have accompanying label text.</td>
                                <td><code>.icon-delete</code></td>
                                <td><code>0xe80e</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-edit"></span></td>
                                <td><strong>Edit</strong><br />May be used in a global setting where activating "edit mode" would make all editable elements on the page editable, or, next to each editable field. May be used inside or outside of a button. It is recommended to use a gold or orange color.</td>
                                <td><code>.icon-edit</code></td>
                                <td><code>0xe814</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-error"></span></td>
                                <td><strong>Error</strong><br />Hexagonal. May be used in error/failure user feedback messages to indicate there was a problem. This should usually be colored some shade of red.</td>
                                <td><code>.icon-error</code></td>
                                <td><code>0xe845</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-error-alt"></span></td>
                                <td><strong>Error (alt)</strong><br />Round. May be used in error/failure user feedback messages to indicate there was a problem. This should usually be colored some shade of red.</td>
                                <td><code>.icon-error-alt</code></td>
                                <td><code>0xe849</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-filter"></span></td>
                                <td><strong>Filter</strong><br />May be used to indicate collection filtering is available. Should be used within a button and should present filtering options when activated.</td>
                                <td><code>.icon-filter</code></td>
                                <td><code>0xe816</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-help-circled"></span></td>
                                <td><strong>Help</strong><br />This icon should be used to indicate clickable areas to get help. These should be located near the object in question.</td>
                                <td><code>.icon-help-circled</code></td>
                                <td><code>0xe817</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-info"></span></td>
                                <td><strong>Info</strong><br />Dark on transparent background. This icon may be used to indicate additinal information. The transparent background allows for additional CSS rules to apply, to say, give it a border. This icon works especially well for tooltips and popovers. Colors should generally include some shade of blue.</td>
                                <td><code>.icon-info</code></td>
                                <td><code>0xe84b</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-info-circled"></span></td>
                                <td><strong>Info (alt)</strong><br />Dark background with transparent center. This icon should be used in informational user feedback messages. It should usually be shaded with some variation of blue.</td>
                                <td><code>.icon-info-circled</code></td>
                                <td><code>0xe84c</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-mobile-menu-bar"></span></td>
                                <td><strong>Menu (major)</strong><br />Generally used on mobile devices, this icon identifies a major menu. It should be used within a button. Activating the button should open the menu. Activating the same icon again should close the menu. May be replaced with a 'close' icon when menu is open for more clarity.</td>
                                <td><code>.icon-mobile-menu-bar</code></td>
                                <td><code>0xe851</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-mobile-menu-dot"></span></td>
                                <td><strong>Menu (minor)</strong><br />Similiar to the above icon, except this one should be used for minor menus (i.e., not the main menu of a page, but rather subnavigation that may be collapsed on mobile versions of the page).</td>
                                <td><code>.icon-mobile-menu-dot</code></td>
                                <td><code>0xe856</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-add-group"></span></td>
                                <td><strong>New file</strong><br />This icon may be used either within or outside of a button. It should include label text.</td>
                                <td><code>.icon-add-group</code></td>
                                <td><code>0xe802</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-new-window"></span></td>
                                <td><strong>New window/External link</strong><br />Should be used to indicate when a link or action will open a new browser window, or open another, external application.</td>
                                <td><code>.icon-new-window</code></td>
                                <td><code>0xe84a</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-notes"></span></td>
                                <td><strong>Notes</strong></td>
                                <td><code>.icon-notes</code></td>
                                <td><code>0xe80d</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-ok"></span></td>
                                <td><strong>OK</strong><br />May be used to indicate items that have been completed, or that are ready. This icon may also be used when performing specific AJAX requests if it appears near the field in question. This should be colored some shade of green.</td>
                                <td><code>.icon-ok</code></td>
                                <td><code>0xe800</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-ok-circled"></span></td>
                                <td><strong>OK (alt 1)</strong><br />This icon is to be used in success/confirmation user feedback messages. Should be colored some shade of green.</td>
                                <td><code>.icon-ok-circled</code></td>
                                <td><code>0xe803</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-ok-squared"></span></td>
                                <td><strong>OK (alt 2)</strong><br />May be used to indicate items that have been completed, or that are ready. This icon may also be used when performing specific AJAX requests if it appears near the field in question. This should be some shade of green.</td>
                                <td><code>.icon-ok-squared</code></td>
                                <td><code>0xe835</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-mobile-options"></span></td>
                                <td><strong>Options</strong><br />Generally used on mobile devices, this icon identifies any options that may be available. This icon is common on Android devices and is usually understood in its function so long as placement is kept with standards (top right or bottom left). When activated, page, component, or collection-level options should appear.</td>
                                <td><code>.icon-mobile-options</code></td>
                                <td><code>0xe852</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-caret-left"></span></td>
                                <td><strong>Page (left)</strong><br />Used in pagination. May be used inside or outside of a button.</td>
                                <td><code>.icon-caret-left</code></td>
                                <td><code>0xe821</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-caret-right"></span></td>
                                <td><strong>Page (right)</strong><br />Used in pagination. May be used inside or outside of a button.</td>
                                <td><code>.icon-caret-right</code></td>
                                <td><code>0xe822</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-paste"></span></td>
                                <td><strong>Paste</strong><br />May be used when using a WYSIWYG editor, or when the need to 'paste' text from elsewhere rises. Should be used within a button.</td>
                                <td><code>.icon-paste</code></td>
                                <td><code>0xe823</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-print"></span></td>
                                <td><strong>Print</strong><br />May be used to print selected collections or data.</td>
                                <td><code>.icon-print</code></td>
                                <td><code>0xe83a</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-save"></span></td>
                                <td><strong>Save</strong><br />May be used alongside label text outside of a button (don't use this icon inside a button; just use Save text in that case). Although a dated icon, it's still indicitive of saving values and data. Might work well to save edited values.</td>
                                <td><code>.icon-save</code></td>
                                <td><code>0xe82a</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-search"></span></td>
                                <td><strong>Search</strong><br />Typically used in search form submit buttons. May be used for lookups or queries next to an individual form field.</td>
                                <td><code>.icon-search</code></td>
                                <td><code>0xe82b</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-settings-1"></span></td>
                                <td><strong>Settings/Manage</strong><br />Used to enter configuration, settings, or management. May be used inside or outside of a button.</td>
                                <td><code>.icon-settings-1</code></td>
                                <td><code>0xe805</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-settings-2"></span></td>
                                <td><strong>Settings/Manage (alt 1)</strong><br />Used to enter configuration, settings, or management. May be used inside or outside of a button.</td>
                                <td><code>.icon-settings-2</code></td>
                                <td><code>0xe847</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-settings-3"></span></td>
                                <td><strong>Settings/Manage (alt 2)</strong><br />Used to enter configuration, settings, or management. May be used inside or outside of a button.</td>
                                <td><code>.icon-settings-3</code></td>
                                <td><code>0xe858</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-sort"></span></td>
                                <td><strong>Sort</strong><br />Used to indicate a table column is sortable but no sorting is in effect. It may be the default state of a column until sorted. Or, the icon used when another column is being sorted.</td>
                                <td><code>.icon-sort</code></td>
                                <td><code>0xe82c</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-sort-down"></span></td>
                                <td><strong>Sort down/Descending</strong><br />Used to indicate a collection is sorted in descending order. May be activated to alter the sorting order to ascending.</td>
                                <td><code>.icon-sort-down</code></td>
                                <td><code>0xe82d</code></td>
                            </tr>
                            <tr>
                                <td><span class="icon-sort-up"></span></td>
                                <td><strong>Sort up/Ascending</strong><br />Used to indicate a collection is sorted in ascending order. May be activated to alter the sorting order to descending.</td>
                                <td><code>.icon-sort-up</code></td>
                                <td><code>0xe82e</code></td>
                            </tr>
                        </table>

                        <h3 id="kc">Kuali Coeus (KC) specific icons</h3>
                        <p>These icons have been selected for use specifically in Kuali Coeus.</p>
                        <table class="table table-bordered">
                            <tr>
                                <th width="50">Icon</th>
                                <th>Usage</th>
                                <th width="250">Class</th>
                                <th width="100">Code</th>
                            </tr>
                            <tr>
                                <td><span class="kc-attachment"></span></td>
                                <td><strong>Attachments</strong></td>
                                <td><code>.kc-attachment</code></td>
                                <td><code>0xe904</code></td>
                            </tr>
                            <tr>
                                <td><span class="kc-basics"></span></td>
                                <td><strong>Basics</strong></td>
                                <td><code>.kc-basics</code></td>
                                <td><code>0xe902</code></td>
                            </tr>
                            <tr>
                                <td><span class="kc-budget"></span></td>
                                <td><strong>Budgets</strong></td>
                                <td><code>.kc-budget</code></td>
                                <td><code>0xe907</code></td>
                            </tr>
                            <tr>
                                <td><span class="kc-budget-summary"></span></td>
                                <td><strong>Budget Summary</strong></td>
                                <td><code>.kc-budget-summary</code></td>
                                <td><code>0xe906</code></td>
                            </tr>
                            <tr>
                                <td><span class="kc-make-official"></span></td>
                                <td><strong>Compliance</strong></td>
                                <td><code>.kc-make-official</code></td>
                                <td><code>0xe911</code></td>
                            </tr>
                            <tr>
                                <td><span class="kc-docinfo"></span></td>
                                <td><strong>Document Info, Doc info</strong></td>
                                <td><code>.kc-docinfo</code></td>
                                <td><code>0xe900</code></td>
                            </tr>
                            <tr>
                                <td><span class="kc-institution"></span></td>
                                <td><strong>Institutional Commitments</strong></td>
                                <td><code>.kc-institution</code></td>
                                <td><code>0xe90D</code></td>
                            </tr>
                            <tr>
                                <td><span class="kc-personnel"></span></td>
                                <td><strong>Key Personnel</strong></td>
                                <td><code>.kc-personnel</code></td>
                                <td><code>0xe901</code></td>
                            </tr>
                            <tr>
                                <td><span class="kc-modular"></span></td>
                                <td><strong>Modular</strong></td>
                                <td><code>.kc-modular</code></td>
                                <td><code>0xe90E</code></td>
                            <tr>
                                <td><span class="kc-non-personnel"></span></td>
                                <td><strong>Non-Personnel Costs</strong></td>
                                <td><code>.kc-non-personnel</code></td>
                                <td><code>0xe90B</code></td>
                            </tr>
                            <tr>
                                <td><span class="kc-questionnaire"></span></td>
                                <td><strong>Questionnaire</strong></td>
                                <td><code>.kc-questionnaire</code></td>
                                <td><code>0xe905</code></td>
                            </tr>
                            <tr>
                                <td><span class="kc-rates"></span></td>
                                <td><strong>Rates</strong></td>
                                <td><code>.kc-rates</code></td>
                                <td><code>0xe90A</code></td>
                            </tr>
                            <tr>
                                <td><span class="kc-summary"></span></td>
                                <td><strong>Summary/Submit</strong></td>
                                <td><code>.kc-summary</code></td>
                                <td><code>0xe909</code></td>
                            </tr>
                            <tr>
                                <td><span class="kc-supplemental"></span></td>
                                <td><strong>Supplemental Information</strong></td>
                                <td><code>.kc-supplemental</code></td>
                                <td><code>0xe908</code></td>
                            </tr>
                            <tr>
                                <td><span class="kc-user"></span></td>
                                <td><strong>Personnel Costs</strong></td>
                                <td><code>.kc-user</code></td>
                                <td><code>0xe903</code></td>
                            </tr>
                            <tr>
                                <td><span class="kc-subawards"></span></td>
                                <td><strong>Subawards</strong></td>
                                <td><code>.kc-subawards</code></td>
                                <td><code>0xe941</code></td>
                            </tr>
                            </tr>
                            <tr>
                                <td><span class="kc-periods-totals"></span></td>
                                <td><strong>Periods &amp; Totals</strong></td>
                                <td><code>.kc-periods-totals</code></td>
                                <td><code>0xe910</code></td>
                            </tr>
                        </table>

                        <h3 id="khr">Kuali Human Relations (KHR) specific icons</h3>
                        <p>These icons have been selected for use specifically in Kuali Human Relations.</p>
                        <table class="table table-bordered">
                            <tr>
                                <th width="50">Icon</th>
                                <th>Usage</th>
                                <th width="250">Class</th>
                                <th width="100">Code</th>
                            </tr>
                            <!-- <tr>
                                <td><span class="icon-ok"></span></td>
                                <td><strong>OK</strong><br />May be used to indicate items that have been completed, or that are ready. This icon may also be used when performing specific AJAX requests if it appears near the field in question. This should be colored some shade of green.</td>
                                <td><code>.icon-ok</code></td>
                                <td><code>0xe800</code></td>
                            </tr> -->
                        </table>

                        <h3 id="ks">Kuali Student (KS) specific icons</h3>
                        <p>These icons have been selected for use specifically in Kuali Student.</p>
                        <table class="table table-bordered">
                            <tr>
                                <th width="50">Icon</th>
                                <th>Usage</th>
                                <th width="250">Class</th>
                                <th width="100">Code</th>
                            </tr>
                            <!-- <tr>
                                <td><span class="icon-ok"></span></td>
                                <td><strong>OK</strong><br />May be used to indicate items that have been completed, or that are ready. This icon may also be used when performing specific AJAX requests if it appears near the field in question. This should be colored some shade of green.</td>
                                <td><code>.icon-ok</code></td>
                                <td><code>0xe800</code></td>
                            </tr> -->
                        </table>

                        <h3 id="kfs">Kuali Financial System (KFS) specific icons</h3>
                        <p>These icons have been selected for use specifically in Kuali Financial System.</p>
                        <table class="table table-bordered">
                            <tr>
                                <th width="50">Icon</th>
                                <th>Usage</th>
                                <th width="250">Class</th>
                                <th width="100">Code</th>
                            </tr>
                            <!-- <tr>
                                <td><span class="icon-ok"></span></td>
                                <td><strong>OK</strong><br />May be used to indicate items that have been completed, or that are ready. This icon may also be used when performing specific AJAX requests if it appears near the field in question. This should be colored some shade of green.</td>
                                <td><code>.icon-ok</code></td>
                                <td><code>0xe800</code></td>
                            </tr> -->
                        </table>
                        <h3 id="ole">Kuali OLE specific icons</h3>
                        <p>These icons have been selected for use specifically in Kuali OLE.</p>
                        <table class="table table-bordered">
                            <tr>
                                <th width="50">Icon</th>
                                <th>Usage</th>
                                <th width="250">Class</th>
                                <th width="100">Code</th>
                            </tr>
                            <!-- <tr>
                                <td><span class="icon-ok"></span></td>
                                <td><strong>OK</strong><br />May be used to indicate items that have been completed, or that are ready. This icon may also be used when performing specific AJAX requests if it appears near the field in question. This should be colored some shade of green.</td>
                                <td><code>.icon-ok</code></td>
                                <td><code>0xe800</code></td>
                            </tr> -->
                        </table>

                        <h3 id="rice">Kuali Rice (RICE) specific icons</h3>
                        <p>These icons have been selected for use specifically in Kuali Rice.</p>
                        <table class="table table-bordered">
                            <tr>
                                <th width="50">Icon</th>
                                <th>Usage</th>
                                <th width="250">Class</th>
                                <th width="100">Code</th>
                            </tr>
                            <!-- <tr>
                                <td><span class="icon-ok"></span></td>
                                <td><strong>OK</strong><br />May be used to indicate items that have been completed, or that are ready. This icon may also be used when performing specific AJAX requests if it appears near the field in question. This should be colored some shade of green.</td>
                                <td><code>.icon-ok</code></td>
                                <td><code>0xe800</code></td>
                            </tr> -->
                        </table>
                    </div>

                    <div class="section" id="use" tabindex="-1">
                        <h2>Usage</h2>
                        <h3>Icons by themselves</h3>
                        <figure>
                            <img src="../img/icon-self-01.png" alt="A help icon without text" />
                            <figcaption>A help icon without text</figcaption>
                        </figure>

                        <figure>
                            <img src="../img/icon-self-02.png" alt="A calendar icon without text" />
                            <figcaption>A calendar icon without text</figcaption>
                        </figure>

                        <h3>Icons with accompanying label text</h3>
                        <figure>
                            <img src="../img/icon-label-01.png" alt="A print icon with the text label visible" />
                            <figcaption>A print icon with the text label visible</figcaption>
                        </figure>

                        <figure>
                            <img src="../img/icon-label-02.png" alt="Subnavigation showing icons and their labels" />
                            <figcaption>Subnavigation showing icons and their labels</figcaption>
                        </figure>
                    </div>

                    <div class="section" id="demos" tabindex="-1">
                        <h2>Demos</h2>
                        <h3>Icons by themselves</h3>
<pre class="language-markup"><code class="html language-markup">&lt;a href="#" class="icon icon-help"&gt;&lt;span class="sr-only"&gt;Help&lt;/span&gt;&lt;/a&gt;</code></pre>
<p>Note that we're including the label, but we're hiding it off-screen. This is so the links meaning can still be understood (as icons won't be announced typically).</p>

                        <h3>Icons with accompanying label text</h3>
<pre class="language-markup"><code class="html language-markup">&lt;a href="#" class="icon icon-help"&gt;Help&lt;/span&gt;&lt;/a&gt;</code></pre>
<p>Note that this setup is the same as the above except we're not hiding the label. It will read the same but the label will appear next to the icon.</p>
                    </div>

                    <div class="section" id="accessibility" tabindex="-1">
                        <h2>Accessibility Considerations</h2>
                        <p>Since icon fonts themselves aren't announced to screen readers (especially if using the PUA space), it's important to always include the accompanying label text, even if it's hidden off-screen. In cases where the icon text is itself converted into the icon font (some libraries do this), you'll want to be careful the label text isn't announced twice.</p>
                        <ul>
                            <li>Always include the icon label, even if it's hidden off-screen using .sr-only, except when...</li>
                            <li>Your method converts the label into the icon font, don't include the accompanying label so the label isn't announced twice.</li>
                            <li>Make sure to always use the PUA space so the entities don't conflict with common web entities.</li>
                            <li>Icons that are purely visual/decoration should not be announced as they'd be a distraction. Only functional/actionable icon fonts should be focusable.</li>
                        </ul>

                        <p>Font icons can be implemented in two ways:</p>
                        <ul>
                            <li>Alone as its own symbol, without accompanying text</li>
                            <li>Alongside accompanying text</li>
                        </ul>

                        <h3>Just the symbol</h3>
                        <p>If using the iconfont by itself, without any accompanying text, adhere to the following:</p>
                        <ul>
                            <li>If the icon is an action, include <code>.sr-only</code> with the action text.</li>
                            <li>if the icon is decorational, nothing additional is required. The icon won't be announced.</li>
                        </ul>
                        
                        <h4>Example:</h4>
                        <a href="#" class="icon-manage"></a>
                        <pre><code>&lt;span class="icon-manage"&gt;&lt;span class="sr-only"&gt;Manage&lt;/span&gt;&lt;/span&gt;</code></pre>
                        <p>Note here the hidden text "Manage" as the action, won't be rendered on-screen, but will be announced via screen readers.</p>
                        
                        <h3>Symbol and text</h3>
                        <p>In cases where the icon is displayed with accompanying text, care must be given to keep the icon "hidden" so the action text isn't announced twice.</p>
                        
                        <h4>Example:</h4>
                        <a href="#" class="icon-settings-2">Manage</a>
                        <pre><code>&lt;span class="icon-manage"&gt;Manage&lt;/span&gt;</code></pre>
                        <p>Note here the action text isn't hidden on-screen and so the icon doesn't need its own text.</p>
                    </div>

                    <div class="section" id="keyboard" tabindex="-1">
                        <h2>Keyboard Shortcuts</h2>
                        <p>Icons that are purely decoration should never receive focus. Contrastingly, icons that serve a function should be focusable using the Tab key. They should visually appear as if they are focused.</p>
                    </div>

                    <div class="section" id="notes" tabindex="-1">
                        <h2>Research &amp; Discussion</h2>
                        <p>None at this time.</p>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <?php include ('../includes/guide-footer.php') ?>
    <?php include ('../includes/footer-scripts.php') ?>
</body>
</html>
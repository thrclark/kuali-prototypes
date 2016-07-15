<?php
$section = '';
$page = 'attachments';
?>
<!DOCTYPE HTML>
<html lang=en>
<head>
<meta charset=UTF-8>
<title>Kuali :: Fluid Application Header</title>
<!-- GLOBAL STYLES -->
<?php include ('includes/styles.php') ?>
<style>
.dropdown-large {
 position:;
}
.dropdown-menu-large {
	margin-left: 16px;
	margin-right: 16px;
	padding: 20px 0px;
}
.dropdown-menu-large > li > ul {
	padding: 0;
	margin: 0;
}
.dropdown-menu-large > li > ul > li {
	list-style: none;
}
.dropdown-menu-large > li > ul > li > a {
	display: block;
	padding: 3px 20px;
	clear: both;
	font-weight: normal;
	line-height: 1.428571429;
	color: #333333;
	white-space: normal;
}
.dropdown-menu-large > li ul > li > a:hover, .dropdown-menu-large > li ul > li > a:focus {
	text-decoration: none;
	color: #262626;
	background-color: #f5f5f5;
}
.dropdown-menu-large .disabled > a, .dropdown-menu-large .disabled > a:hover, .dropdown-menu-large .disabled > a:focus {
	color: #999999;
}
.dropdown-menu-large .disabled > a:hover, .dropdown-menu-large .disabled > a:focus {
	text-decoration: none;
	background-color: transparent;
	background-image: none;
 filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
	cursor: not-allowed;
}
.dropdown-menu-large .dropdown-header {
	color: #428bca;
	font-size: 18px;
}
 @media (max-width: 768px) {
.dropdown-menu-large {
	margin-left: 0;
	margin-right: 0;
}
.dropdown-menu-large > li {
	margin-bottom: 30px;
}
.dropdown-menu-large > li:last-child {
	margin-bottom: 0;
}
.dropdown-menu-large .dropdown-header {
	padding: 3px 15px !important;
}
}
</style>
</head>
<body id="Uif-Application">
<!-- APPLICATION HEADER -->
<?php include('includes/uif-applicationHeader.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method=post accept-charset=UTF-8>
    <!-- VIEW -->
    <div id="LabsProposal" class="clearfix uif-formView" data-role=View ><!-- BREADCRUMBS --><!-- VIEW HEADER --> 
        <!-- VIEW HEADER -->
        <?php include('includes/uif-viewHeader-pd.php') ?>
        <!-- // VIEW HEADER --> 
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid"><!-- VIEW NAVIGATION -->
            <?php include ('includes/uif-navigation-proposal.php') ?>
            <main  class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
                <div class="uif-header-inner">
                    <h2  class="uif-headerText"> <span class="uif-headerText-span"> Attachments </span> </h2>
                    <div  class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> </div>
                </div>
                <section  class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#proposal" data-toggle="tab">Proposal</a></li>
                        <li><a href="#personnel" data-toggle="tab">Personnel</a></li>
                        <li><a href="#abstracts" data-toggle="tab">Abstracts</a></li>
                        <li><a href="#internal" data-toggle="tab">Internal</a></li>
                        <li><a href="#notes" data-toggle="tab">Notes</a></li>
                    </ul>
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane active" id="proposal">
                            <div class="uif-header-inner">
                                <h3  class="uif-headerText"> <span class="uif-headerText-span"> Proposal </span> </h3>
                                <div  class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#attachments-required">Required Attachments Checklist</a> <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#income"><span aria-hidden="true" class="icon-plus"></span> Add Attachment</a> </div>
                            </div>
                            <table class="table table-condensed uif-has-actions">
                                <thead>
                                    <tr role="row">
                                        <th colspan="1" rowspan="1" class="sorting_asc" scope="col" aria-controls="u1leoe6w" aria-label="
 File : activate to sort column descending" aria-sort="ascending" role="columnheader" tabindex="0"> <label class="clearfix infoline"> File </label></th>
                                        <th colspan="1" rowspan="1" class="sorting" scope="col" aria-controls="u1leoe6w" aria-label="
 Size : activate to sort column ascending" role="columnheader" tabindex="0"> <label class="clearfix infoline"> Size </label></th>
                                        <th colspan="1" rowspan="1" class="sorting" scope="col" aria-controls="u1leoe6w" aria-label="
 Date Uploaded : activate to sort column ascending" role="columnheader" tabindex="0"> <label class="clearfix infoline"> Uploaded </label></th>
                                        <th colspan="1" rowspan="1" class="sorting" scope="col" aria-controls="u1leoe6w" aria-label="
 Detail 1 : activate to sort column ascending" role="columnheader" tabindex="0"> <label class="clearfix infoline"> Type</label></th>
                                        <th colspan="1" rowspan="1" class="sorting" scope="col" aria-controls="u1leoe6w" aria-label="
 Detail 2 : activate to sort column ascending" role="columnheader" tabindex="0"> <label class="clearfix infoline"> Status</label></th>
                                        <th rowspan="1" class="sorting" scope="col" aria-controls="u1leoe6w" aria-label="
 Detail 2 : activate to sort column ascending" role="columnheader" tabindex="0">Contact Name</th>
                                        <th rowspan="1" class="sorting" scope="col" aria-controls="u1leoe6w" aria-label="
 Detail 2 : activate to sort column ascending" role="columnheader" tabindex="0">Email</th>
                                        <th rowspan="1" class="sorting" scope="col" aria-controls="u1leoe6w" aria-label="
 Detail 2 : activate to sort column ascending" role="columnheader" tabindex="0">Phone</th>
                                        <th rowspan="1" class="sorting" scope="col" aria-controls="u1leoe6w" aria-label="
 Detail 2 : activate to sort column ascending" role="columnheader" tabindex="0">Description</th>
                                        <th colspan="1" rowspan="1" class="uif-collection-column-action sorting_disabled" scope="col" aria-label="
 Actions " role="columnheader"> <label class="clearfix infoline"> Actions </label></th>
                                    </tr>
                                    <tr class="uif-newCollectionItem odd">
                                        <td class=" sorting_1"><div class="uif-linkField"> <a href="#" target="_self" class="uif-link">Narrative_123</a></div></td>
                                        <td><div class="uif-inputField" data-role="InputField">23 KB </div></td>
                                        <td><div class="uif-inputField" data-role="InputField"> 07/14/2014 12:07 PM </div></td>
                                        <td>Narrative</td>
                                        <td>Complete</td>
                                        <td>John Coltrane</td>
                                        <td>jcoltrane@tenormadness.org</td>
                                        <td>123-456-1234</td>
                                        <td>Don't sixth their were greater you, which lesser.</td>
                                        <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                    </tr>
                                    <tr class="uif-newCollectionItem even warning">
                                        <td class=" sorting_1"><div class="uif-linkField"> <a href="#" target="_self" class="uif-link">Bibliography3</a></div></td>
                                        <td><div class="uif-inputField" data-role="InputField">23 KB </div></td>
                                        <td><div class="uif-inputField" data-role="InputField"> 07/14/2014 12:07 PM </div></td>
                                        <td><select name="inputField2" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                                                <option value="">select</option>
                                                <option value="1">Narrative</option>
                                                <option value="3">Equipment</option>
                                                <option value="4" selected="selected">Bibliography</option>
                                                <option value="5">Project Summary</option>
                                                <option value="7">Budget Justification</option>
                                                <option value="8">Other</option>
                                                <option value="11">Additional keypersons</option>
                                                <option value="12">Additional equipment</option>
                                                <option value="13">Personal Data</option>
                                                <option value="2">Facilities</option>
                                                <option value="200">NSF Data Management Plan</option>
                                                <option value="9">Subaward Budget</option>
                                                <option value="10">Table of Contents</option>
                                                <option value="15">Supplementary Documentation</option>
                                            </select></td>
                                        <td class="uif-newCollectionItem odd"><select name="inputField2" size="1" class="form-control input-sm form-control input-sm uif-dropdownControl required error" data-role="Control" aria-required="true" data-original-title="" title="" data-hastooltip="true" aria-invalid="true">
                                                <option value="">select</option>
                                                <option value="1">Complete</option>
                                                <option value="3">Incomplete</option>
                                            </select></td>
                                        <td><input type="text" name="input" value="" size="30" class="form-control input-sm uif-textControl" data-role="Control" /></td>
                                        <td><input type="text" name="input" value="" size="30" class="form-control input-sm uif-textControl" data-role="Control" /></td>
                                        <td><input type="text" name="input" value="" size="30" class="form-control input-sm uif-textControl" data-role="Control" /></td>
                                        <td><span class="uif-inputField">
                                            <textarea name="files2[3].detail2" rows="4" cols="50" class="form-control input-sm uif-textAreaControl" data-role="Control"></textarea>
                                            </span></td>
                                        <td class="test"><a href="#" class="btn btn-xs btn-primary toggler" data-prod-cat="1">Save</a> <a href="#" class="btn btn-xs btn-default">Cancel</a> <br></td>
                                    </tr>
                                    <tr class="uif-newCollectionItem odd">
                                        <td class=" sorting_1"><div class="uif-linkField"> <a href="#" target="_self" class="uif-link">Equipment List</a></div></td>
                                        <td><div class="uif-inputField" data-role="InputField">23 KB </div></td>
                                        <td><div class="uif-inputField" data-role="InputField"> 07/14/2014 12:07 PM </div></td>
                                        <td>Equipment</td>
                                        <td>Complete</td>
                                        <td>Charlie Parker</td>
                                        <td>cparker@umi.edu</td>
                                        <td>123-456-1234</td>
                                        <td>Firmament. Kind fowl fifth form had cattle.</td>
                                        <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                    </tr>
                                    <tr class="uif-newCollectionItem even">
                                        <td class=" sorting_1"><div class="uif-linkField"> <a href="#" target="_self" class="uif-link">Budget-0002352</a></div></td>
                                        <td><div class="uif-inputField" data-role="InputField">23 KB </div></td>
                                        <td><div class="uif-inputField" data-role="InputField"> 07/14/2014 12:07 PM </div></td>
                                        <td>Budget Justification</td>
                                        <td class="uif-newCollectionItem odd">Incomplete</td>
                                        <td>Dizzy Gillespie</td>
                                        <td>dizgill@iu.edu</td>
                                        <td class="uif-newCollectionItem odd">123-456-1234</td>
                                        <td>Be. Called creeping, fruit herb day were first midst.</td>
                                        <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                    </tr>
                                    <tr class="uif-newCollectionItem odd">
                                        <td class=" sorting_1"><div class="uif-linkField"> <a href="#" target="_self" class="uif-link">Facilities</a></div></td>
                                        <td><div class="uif-inputField" data-role="InputField">23 KB </div></td>
                                        <td><div class="uif-inputField" data-role="InputField"> 07/14/2014 12:07 PM </div></td>
                                        <td>Facilities</td>
                                        <td>Complete</td>
                                        <td>Hank Mobely</td>
                                        <td>hmobely@mit.edu</td>
                                        <td>123-456-1234</td>
                                        <td>Own fill also. Rule grass seas have</td>
                                        <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                    </tr>
                                    <tr class="uif-newCollectionItem even">
                                        <td class=" sorting_1"><div class="uif-linkField"> <a href="#" target="_self" class="uif-link">Supplimental</a></div></td>
                                        <td><div class="uif-inputField" data-role="InputField">23 KB </div></td>
                                        <td><div class="uif-inputField" data-role="InputField"> 07/14/2014 12:07 PM </div></td>
                                        <td>Supplementary Documentation</td>
                                        <td class="uif-newCollectionItem odd">Complete</td>
                                        <td>Dexter Gordon</td>
                                        <td>dgordon@cornell.edu</td>
                                        <td class="uif-newCollectionItem odd">123-456-1234</td>
                                        <td>He, also had multiply. Forth replenish living that.</td>
                                        <td class=""><a href="#" class="btn btn-xs btn-default">Edit</a> <a href="#" class="btn btn-default btn-xs uif-delete"><span class="sr-only">Delete</span><span class="icon icon-trash"></span></a></td>
                                    </tr>
                                </thead>
                                <tbody role="alert" aria-live="polite" aria-relevant="all">
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="personnel">
                            <div class="uif-header-inner">
                                <h3  class="uif-headerText"> <span class="uif-headerText-span"> Personnel </span> </h3>
                                <div  class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#attachments-required">Required Attachments Checklist</a> <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#income"><span aria-hidden="true" class="icon-plus"></span> Add Attachment</a> </div>
                            </div>
                            <table role="presentation" class="table table-condensed uif-has-actions">
                                <thead>
                                    <tr>
                                        <th>File</th>
                                        <th>Added By</th>
                                        <th>Person</th>
                                        <th>Type</th>
                                        <th style="width:30%">Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="files">
                                    <tr class="template-download fade in">
                                        <td><p class="name"> <a href="#" title="index.html" download="index.html">budget_ga.pdf</a> 
                                                <!-- <small class="size text-muted">102.46 KB</small>--> 
                                            </p></td>
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td>Ward Cleaver</td>
                                        <td> Biosketch </td>
                                        <td>That's why you always leave a note! That's what it said on 'Ask Jeeves.' I don't understand the question, and I won't respond to it. </td>
                                        <td><a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown">Edit</a>
                                            <button class="btn btn-default btn-xs delete" data-type="DELETE" data-url=""> <span class="icon-trash"></span> <span class="sr-only">Delete</span></button>
                                            
                                            <!-- <input type="checkbox" name="delete" value="1" class="toggle">--></td>
                                    </tr>
                                    <tr class="template-download fade in">
                                        <td><p class="name"> <a href="#" title="index.html" download="index.html">budget_wy.pdf</a> 
                                                <!-- <small class="size text-muted">102.46 KB</small>--> 
                                            </p></td>
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td>June Cleaver</td>
                                        <td> Biosketch </td>
                                        <td>Say goodbye to these, because it's the last time! It's a hug, Michael. I'm hugging you.</td>
                                        <td><a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown">Edit</a>
                                            <button class="btn btn-default btn-xs delete" data-type="DELETE" data-url=""> <span class="icon-trash"></span> <span class="sr-only">Delete</span></button>
                                            
                                            <!-- <input type="checkbox" name="delete" value="1" class="toggle">--></td>
                                    </tr>
                                    <tr class="template-download fade in">
                                        <td><p class="name"> <a href="#" title="index.html" download="index.html">budget_na.pdf</a> 
                                                <!-- <small class="size text-muted">102.46 KB</small>--> 
                                            </p></td>
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td>John Coltrane</td>
                                        <td> Current Pending</td>
                                        <td>As you may or may not know, Lindsay and I have hit a bit of a rough patch. What's Spanish for "I know you speak English?"</td>
                                        <td><a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown">Edit</a>
                                            <button class="btn btn-default btn-xs delete" data-type="DELETE" data-url=""> <span class="icon-trash"></span> <span class="sr-only">Delete</span></button>
                                            
                                            <!-- <input type="checkbox" name="delete" value="1" class="toggle">--></td>
                                    </tr>
                                    <tr class="template-download fade in">
                                        <td><p class="name"> <a href="#" title="index.html" download="index.html">budget_hh.pdf</a> 
                                                <!-- <small class="size text-muted">102.46 KB</small>--> 
                                            </p></td>
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td>Edward Haskell</td>
                                        <td> Biosketch </td>
                                        <td>I've opened a door here that I regret. Steve Holt! Army had half a day. I'm half machine.</td>
                                        <td><a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown">Edit</a>
                                            <button class="btn btn-default btn-xs delete" data-type="DELETE" data-url=""> <span class="icon-trash"></span> <span class="sr-only">Delete</span></button>
                                            
                                            <!-- <input type="checkbox" name="delete" value="1" class="toggle">--></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="abstracts">
                            <div class="uif-header-inner">
                                <h3  class="uif-headerText"> <span class="uif-headerText-span"> Abstracts </span> </h3>
                                <div  class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#income"><span aria-hidden="true" class="icon-plus"></span> Add Abstracts</a> </div>
                            </div>
                            <table role="presentation" class="table table-condensed uif-has-actions">
                                <thead>
                                    <tr>
                                        <th>Author</th>
                                        <th>Type</th>
                                        <th style="width:50%">Details</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="files">
                                    <tr class="template-download fade in">
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td> Clinical </td>
                                        <td>I've opened a door here that I regret. Well, what do you expect, mother? Really? Did nothing cancel? </td>
                                        <td><a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown">Edit</a>
                                            <button class="btn btn-default btn-xs delete" data-type="DELETE" data-url=""> <span class="icon-trash"></span> <span class="sr-only">Delete</span></button>
                                            
                                            <!-- <input type="checkbox" name="delete" value="1" class="toggle">--></td>
                                    </tr>
                                    <tr class="template-download fade in">
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td> Biosketch </td>
                                        <td>There's so many poorly chosen words in that sentence. Say goodbye to these, because it's the last time! Now, when you do this without getting punched in the chest, you'll have more fun. Now, when you do this without getting punched in the chest, you'll have more fun.</td>
                                        <td><a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown">Edit</a>
                                            <button class="btn btn-default btn-xs delete" data-type="DELETE" data-url=""> <span class="icon-trash"></span> <span class="sr-only">Delete</span></button>
                                            
                                            <!-- <input type="checkbox" name="delete" value="1" class="toggle">--></td>
                                    </tr>
                                    <tr class="template-download fade in">
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td> Current Pending</td>
                                        <td>Get me a vodka rocks. And a piece of toast. </td>
                                        <td><a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown">Edit</a>
                                            <button class="btn btn-default btn-xs delete" data-type="DELETE" data-url=""> <span class="icon-trash"></span> <span class="sr-only">Delete</span></button>
                                            
                                            <!-- <input type="checkbox" name="delete" value="1" class="toggle">--></td>
                                    </tr>
                                    <tr class="template-download fade in">
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td> Biosketch </td>
                                        <td>Did I mention we have comfy chairs? The way I see it, every life is a pile of good things and bad things.</td>
                                        <td><a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown">Edit</a>
                                            <button class="btn btn-default btn-xs delete" data-type="DELETE" data-url=""> <span class="icon-trash"></span> <span class="sr-only">Delete</span></button>
                                            
                                            <!-- <input type="checkbox" name="delete" value="1" class="toggle">--></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="internal">
                            <div class="uif-header-inner">
                                <h3  class="uif-headerText"> <span class="uif-headerText-span"> Internal </span> </h3>
                                <div  class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#income"><span aria-hidden="true" class="icon-plus"></span> Add Internal</a> </div>
                            </div>
                            <table role="presentation" class="table table-condensed uif-has-actions">
                                <thead>
                                    <tr>
                                        <th>File</th>
                                        <th>Added By</th>
                                        <th>Type</th>
                                        <th style="width:30%">Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="files">
                                    <tr class="template-download fade in">
                                        <td><p class="name"> <a href="#" title="index.html" download="index.html">budget_ga.pdf</a> 
                                                <!-- <small class="size text-muted">102.46 KB</small>--> 
                                            </p></td>
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td> Biosketch </td>
                                        <td>That's why you always leave a note! That's what it said on 'Ask Jeeves.' I don't understand the question, and I won't respond to it. </td>
                                        <td><a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown">Edit</a>
                                            <button class="btn btn-default btn-xs delete" data-type="DELETE" data-url=""> <span class="icon-trash"></span> <span class="sr-only">Delete</span></button>
                                            
                                            <!-- <input type="checkbox" name="delete" value="1" class="toggle">--></td>
                                    </tr>
                                    <tr class="template-download fade in">
                                        <td><p class="name"> <a href="#" title="index.html" download="index.html">budget_wy.pdf</a> 
                                                <!-- <small class="size text-muted">102.46 KB</small>--> 
                                            </p></td>
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td> Biosketch </td>
                                        <td>Say goodbye to these, because it's the last time! It's a hug, Michael. I'm hugging you.</td>
                                        <td><a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown">Edit</a>
                                            <button class="btn btn-default btn-xs delete" data-type="DELETE" data-url=""> <span class="icon-trash"></span> <span class="sr-only">Delete</span></button>
                                            
                                            <!-- <input type="checkbox" name="delete" value="1" class="toggle">--></td>
                                    </tr>
                                    <tr class="template-download fade in">
                                        <td><p class="name"> <a href="#" title="index.html" download="index.html">budget_na.pdf</a> 
                                                <!-- <small class="size text-muted">102.46 KB</small>--> 
                                            </p></td>
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td> Current Pending</td>
                                        <td>As you may or may not know, Lindsay and I have hit a bit of a rough patch. What's Spanish for "I know you speak English?"</td>
                                        <td><a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown">Edit</a>
                                            <button class="btn btn-default btn-xs delete" data-type="DELETE" data-url=""> <span class="icon-trash"></span> <span class="sr-only">Delete</span></button>
                                            
                                            <!-- <input type="checkbox" name="delete" value="1" class="toggle">--></td>
                                    </tr>
                                    <tr class="template-download fade in">
                                        <td><p class="name"> <a href="#" title="index.html" download="index.html">budget_hh.pdf</a> 
                                                <!-- <small class="size text-muted">102.46 KB</small>--> 
                                            </p></td>
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td> Biosketch </td>
                                        <td>I've opened a door here that I regret. Steve Holt! Army had half a day. I'm half machine.</td>
                                        <td><a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown">Edit</a>
                                            <button class="btn btn-default btn-xs delete" data-type="DELETE" data-url=""> <span class="icon-trash"></span> <span class="sr-only">Delete</span></button>
                                            
                                            <!-- <input type="checkbox" name="delete" value="1" class="toggle">--></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="notes">
                            <div class="uif-header-inner">
                                <h3  class="uif-headerText"> <span class="uif-headerText-span"> Notes </span> </h3>
                                <div  class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#income"><span aria-hidden="true" class="icon-plus"></span> Add Note</a> </div>
                            </div>
                            <table role="presentation" class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>Author</th>
                                        <th>Topic</th>
                                        <th style="width:50%">Note</th>
                                    </tr>
                                </thead>
                                <tbody class="files">
                                    <tr class="template-download fade in">
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td> Clinical </td>
                                        <td>I've opened a door here that I regret. Well, what do you expect, mother? Really? Did nothing cancel? </td>
                                    </tr>
                                    <tr class="template-download fade in">
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td> Biosketch </td>
                                        <td>There's so many poorly chosen words in that sentence. Say goodbye to these, because it's the last time! Now, when you do this without getting punched in the chest, you'll have more fun. Now, when you do this without getting punched in the chest, you'll have more fun.</td>
                                    </tr>
                                    <tr class="template-download fade in">
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td> Current Pending</td>
                                        <td>Get me a vodka rocks. And a piece of toast. </td>
                                    </tr>
                                    <tr class="template-download fade in">
                                        <td> McGregor, Geoff <small class="text-muted">(5/26/2014 6:50 PM)</small> </td>
                                        <td> Biosketch </td>
                                        <td>Did I mention we have comfy chairs? The way I see it, every life is a pile of good things and bad things.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>
                </section>
            </main>
        </div>
        <div  class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
            <div class="global-navigate btn-group">
                <button type="button" href="prop-compliance.php"  class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
                <button type="button" href="prop-questionnaire.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
            </div>       <!--        
        <div class=" global-actions btn-group dropup">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Document Actions <span class="caret"></span> </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Submit Document</a></li>
                <li><a href="#" data-toggle="modal" data-target="#canceldoc"> Cancel Document </a> </li>
                <li class="divider"></li>
                <li><a href="#">Save Document</a></li>
                <li><a href="#">Close Document</a></li>
            </ul>
        </div>--> <div class="global-actions btn-group">

                <button type="button" id="" class="btn btn-default">Save</button>
                <button type="button" id="" class="btn btn-default">Close</button>
                <button type="button" id="" class="btn btn-default" data-toggle="modal" data-target="#globalaction-submit">Submit</button>
                <button type="button" id="" class="btn btn-default" data-toggle="modal" data-target="#globalaction-cancel">Cancel</button>

            </div>
        </div>
        
        <!-- DIALOGS/Placeholders --></div>
</form>
<?php include ('includes/footer-scripts.php') ?>
<?php include('includes/modals-global-propdev.php') ?>
<?php include('includes/modals-prop/attachments-required.php') ?>
<?php
$currentPage =  $_SERVER['QUERY_STRING'] ;
if ($currentPage == "modular-budget=no&amp;detail=yes") {
    ?>
<!--  casual user view --> 
<script>
        (function($){

            $('body').on('click','#save-continue', function(e) {

                document.location.href='bud-personnelCosts-persPeriod.php?modular-budget=no&amp;detail=yes';

            });

        }(jQuery))
    </script>
<?php } ?>
<?php
$currentPage =  $_SERVER['QUERY_STRING'] ;
if ($currentPage == "modular-budget=yes&amp;detail=yes") {
    ?>
<!--  casual user view --> 
<script>
        (function($){

            $('body').on('click','#save-continue', function(e) {

                document.location.href='bud-personnelCosts-persPeriod.php?modular-budget=yes&amp;detail=yes';

            });

        }(jQuery))
    </script>
<?php } ?>
</body>
</html>
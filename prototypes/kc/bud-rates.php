<?php
$page = 'rates';
$section = '';
?>
<!DOCTYPE HTML>
<html lang=en>
    <head>
    <meta charset=UTF-8>
    <title>Kuali :: Fluid Application Header</title>
    <!-- GLOBAL STYLES -->
    <?php include ('includes/styles.php') ?>
    <style>
td {
	vertical-align: center;
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
        <?php include('includes/uif-viewHeader-budget.php') ?>
        <!-- // VIEW HEADER  --> 
        
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container-fluid"><!-- VIEW NAVIGATION -->
                <?php include ('includes/uif-navigation-budget.php') ?>
                <main id="" class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="" style="margin-left: 250px;">
                <div class="uif-header-inner">
                        <h2 id="" class="uif-headerText"> <span class="uif-headerText-span"> Rates </span> </h2>
                        <div id="" class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent="">
                        <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs">Refresh All Rates</button>
                                <button type="button" class="btn btn-default btn-xs">Sync All Rates</button>
                            </div>
                    </div>
                    </div>
                <p id="u1iaxrzf" class="uif-message uif-boxLayoutVerticalItem clearfix">Verify the default rates set by your institution. You can override them if necessary by clicking the "edit" icon to the right of each row.</p>
                <section id="u1qq592w" class="uif-disclosure uif-boxLayoutVerticalItem clearfix" data-parent=Demo-Disclosure-Example1>
                        <header id="u1l3ufy3" class="uif-sectionHeader" data-header_for=u1qq592w>
                        <h3 class="uif-headerText"><a data-role=disclosureLink data-linkfor=reserachFA href="#" id="u1qq592w_toggle" data-open=true data-widgetid=u1vpenbn data-speed=500 data-ajax=false><span class="uif-headerText-span"><span id="u1qq592w_toggle_exp" class="icon-caret-down"></span><span style="display:none;" id="u1qq592w_toggle_col" class="icon-caret-right"></span> Research F&amp;A</span></a></h3>
                    </header>
                        <div id="reserachFA" data-role=disclosureContent data-open=true class="uif-disclosureContent">
                        <div class="pull-right"><a href="#" class="btn btn-xs btn-default">Sync to Current Institutional Rates</a> <a href="#" class="btn btn-xs btn-default">Reset to Default Rates</a></div>
                        <br>
                        <br>
                        <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable" id="Demo-LightTableGroup1_lightTable" aria-describedby=Demo-LightTableGroup1_lightTable_info>
                                <thead>
                                <tr role=row>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-sort=ascending aria-label="
 Field 1: : activate to sort column descending"><label id="urh9zx8" class="uif-label">Description</label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 2: : activate to sort column ascending"><label id="u9vt7yu" class="uif-label"> On Campus </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 3: : activate to sort column ascending"><label id="uosze9s" class="uif-label"> Fiscal Year </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Start Date </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Institution Rate</label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Applicable Rate </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 aria-label="
 Field 4: : activate to sort column ascending">&nbsp;</th>
                                </thead>
                                <tbody>
                                <tr>
                                        <td rowspan="2">MTDC</td>
                                        <td>No</td>
                                        <td>2014</td>
                                        <td>07/01/2007</td>
                                        <td class="text-right">0.00</td>
                                        <td class="text-right">0.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>07/01/2007</td>
                                        <td class="text-right">48.00</td>
                                        <td class="text-right">48.00</td>
                                    </tr>
                                <tr class="warning">
                                        <td rowspan="2">Materials and Services</td>
                                        <td>No</td>
                                        <td>2014</td>
                                        <td>07/01/2001</td>
                                        <td class="text-right">10.00</td>
                                        <td class="text-right"><input type="text" class="form-control text-right" value="10.00"></td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-primary btn-xs">Save</a> <a href="#" class="btn btn-default btn-xs">Cancel</a></td>
                                    </tr>
                                <tr class="warning">
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>07/01/2001</td>
                                        <td class="text-right">10.00</td>
                                        <td class="text-right"><input type="text" class="form-control text-right" value="10.00"></td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">S&amp;W</td>
                                        <td>No</td>
                                        <td>2014</td>
                                        <td>07/01/1979</td>
                                        <td class="text-right">62.00</td>
                                        <td class="text-right">62.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>07/01/1979</td>
                                        <td class="text-right">63.00</td>
                                        <td class="text-right">63.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">Salaries</td>
                                        <td>No</td>
                                        <td>2014</td>
                                        <td>07/01/2005</td>
                                        <td class="text-right">9.00</td>
                                        <td class="text-right">9.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>07/01/2005</td>
                                        <td class="text-right">62.00</td>
                                        <td class="text-right">62.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">TDC</td>
                                        <td>No</td>
                                        <td>2014</td>
                                        <td>07/01/2003</td>
                                        <td class="text-right">0.00</td>
                                        <td class="text-right">0.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>07/01/2003</td>
                                        <td class="text-right">0.00</td>
                                        <td class="text-right">0.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">MTDC</td>
                                        <td>No</td>
                                        <td>2014</td>
                                        <td>01/07/2007</td>
                                        <td class="text-right">0.00</td>
                                        <td class="text-right">0.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>01/07/2007</td>
                                        <td class="text-right">48.00</td>
                                        <td class="text-right">48.00</td>
                                    </tr>
                            </tbody>
                            </table>
                    </div>
                    </section>
                <section id="u1qq592w" class="uif-disclosure uif-boxLayoutVerticalItem clearfix" data-parent=Demo-Disclosure-Example1>
                        <header id="u1l3ufy3" class="uif-sectionHeader" data-header_for=u1qq592w>
                        <h3 class="uif-headerText"><a data-role=disclosureLink data-linkfor=fringebenefits href="#" id="u1qq592w_toggle" data-open=true data-widgetid=u1vpenbn data-speed=500 data-ajax=false><span class="uif-headerText-span"><span id="u1qq592w_toggle_exp" class="icon-caret-down"></span><span style="display:none;" id="u1qq592w_toggle_col" class="icon-caret-right"></span> Fringe Benefits</span></a></h3>
                    </header>
                        <div id="fringebenefits" data-role=disclosureContent data-open=true class="uif-disclosureContent">
                        <div class="pull-right"><a href="#" class="btn btn-xs btn-default">Sync to Current Institutional Rates</a> <a href="#" class="btn btn-xs btn-default">Reset to Default Rates</a></div>
                        <br>
                        <br>
                        <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable" id="Demo-LightTableGroup1_lightTable" aria-describedby=Demo-LightTableGroup1_lightTable_info>
                                <thead>
                                <tr role=row>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-sort=ascending aria-label="
 Field 1: : activate to sort column descending"><label id="urh9zx8" class="uif-label">Description</label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 2: : activate to sort column ascending"><label id="u9vt7yu" class="uif-label"> On Campus </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 3: : activate to sort column ascending"><label id="uosze9s" class="uif-label"> Fiscal Year </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Start Date </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Institution Rate</label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Applicable Rate </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 aria-label="
 Field 4: : activate to sort column ascending">&nbsp;</th>
                                    <tr>
                                        <td rowspan="2">EB on LA</td>
                                        <td>Yes</td>
                                        <td>2006</td>
                                        <td>07/01/2005</td>
                                        <td class="text-right">25.00</td>
                                        <td class="text-right">25.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2006</td>
                                        <td>07/01/2005</td>
                                        <td class="text-right">27.00</td>
                                        <td class="text-right">27.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">Research Rate</td>
                                        <td>Yes</td>
                                        <td>2006</td>
                                        <td>07/01/2005</td>
                                        <td class="text-right">25.00</td>
                                        <td class="text-right">25.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2006</td>
                                        <td>07/01/2005</td>
                                        <td class="text-right">27.00</td>
                                        <td class="text-right">27.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">UROP Rate</td>
                                        <td>Yes</td>
                                        <td>2004</td>
                                        <td>07/01/2003</td>
                                        <td class="text-right">0.00</td>
                                        <td class="text-right">0.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2004</td>
                                        <td>07/01/2003</td>
                                        <td class="text-right">0.00</td>
                                        <td class="text-right">0.00</td>
                                    </tr>
                            </thead>
                                <tbody role=alert aria-live=polite aria-relevant=all>
                            </tbody>
                            </table>
                    </div>
                    </section>
                <section id="u1qq592w" class="uif-disclosure uif-boxLayoutVerticalItem clearfix" data-parent=Demo-Disclosure-Example1>
                        <header id="u1l3ufy3" class="uif-sectionHeader" data-header_for=u1qq592w>
                        <h3 class="uif-headerText"><a data-role=disclosureLink data-linkfor=inflation href="#" id="u1qq592w_toggle" data-open=true data-widgetid=u1vpenbn data-speed=500 data-ajax=false><span class="uif-headerText-span"><span id="u1qq592w_toggle_exp" class="icon-caret-down"></span><span style="display:none;" id="u1qq592w_toggle_col" class="icon-caret-right"></span> Inflation</span></a></h3>
                    </header>
                        <div id="inflation" data-role=disclosureContent data-open=true class="uif-disclosureContent">
                        <div class="pull-right"><a href="#" class="btn btn-xs btn-default">Sync to Current Institutional Rates</a> <a href="#" class="btn btn-xs btn-default">Reset to Default Rates</a></div>
                        <br>
                        <br>
                        <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable" id="Demo-LightTableGroup1_lightTable" aria-describedby=Demo-LightTableGroup1_lightTable_info>
                                <thead>
                                <tr role=row>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-sort=ascending aria-label="
 Field 1: : activate to sort column descending"><label id="urh9zx8" class="uif-label">Description</label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 2: : activate to sort column ascending"><label id="u9vt7yu" class="uif-label"> On Campus </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 3: : activate to sort column ascending"><label id="uosze9s" class="uif-label"> Fiscal Year </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Start Date </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Institution Rate</label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Applicable Rate </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 aria-label="
 Field 4: : activate to sort column ascending">&nbsp;</th>
                                    <tr>
                                        <td rowspan="2">Administrative Salaries (7/1)</td>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>07/01/2013</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>07/01/2013</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">Administrative Salaries (7/1)</td>
                                        <td>Yes</td>
                                        <td>2015</td>
                                        <td>07/01/2014</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2015</td>
                                        <td>07/01/2014</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">Faculty Salaries (6/1)</td>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>07/01/2013</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>07/01/2013</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">Faculty Salaries (6/1)</td>
                                        <td>Yes</td>
                                        <td>2015</td>
                                        <td>07/01/2014</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2015</td>
                                        <td>07/01/2014</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">Materials and Services</td>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>07/01/2013</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>07/01/2013</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">Materials and Services</td>
                                        <td>Yes</td>
                                        <td>2015</td>
                                        <td>07/01/2014</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2015</td>
                                        <td>07/01/2014</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">Research Staff (1/1)</td>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>01/01/2014</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>01/01/2014</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">Research Staff (1/1)</td>
                                        <td>Yes</td>
                                        <td>2015</td>
                                        <td>01/01/2015</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2015</td>
                                        <td>01/01/2015</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">Students (6/1)</td>
                                        <td>Yes</td>
                                        <td>2011</td>
                                        <td>06/01/2011</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2011</td>
                                        <td>06/01/2011</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">Support Staff Salaries (4/1)</td>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>04/01/2014</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2014</td>
                                        <td>04/01/2014</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">MTDC</td>
                                        <td>No</td>
                                        <td>2008</td>
                                        <td>07/01/2007</td>
                                        <td class="text-right">0.00</td>
                                        <td class="text-right">0.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>No</td>
                                        <td>2008</td>
                                        <td>07/01/2007</td>
                                        <td class="text-right">48.00</td>
                                        <td class="text-right">48.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">Materials and Services</td>
                                        <td>No</td>
                                        <td>2002</td>
                                        <td>07/01/2001</td>
                                        <td class="text-right">10.00</td>
                                        <td class="text-right">10.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>No</td>
                                        <td>2002</td>
                                        <td>07/01/2001</td>
                                        <td class="text-right">10.00</td>
                                        <td class="text-right">10.00</td>
                                    </tr>
                            </thead>
                                <tbody role=alert aria-live=polite aria-relevant=all>
                            </tbody>
                            </table>
                    </div>
                    </section>
                <section id="u1qq592w" class="uif-disclosure uif-boxLayoutVerticalItem clearfix" data-parent=Demo-Disclosure-Example1>
                        <header id="u1l3ufy3" class="uif-sectionHeader" data-header_for=u1qq592w>
                        <h3 class="uif-headerText"><a data-role=disclosureLink data-linkfor=vacation href="#" id="u1qq592w_toggle" data-open=true data-widgetid=u1vpenbn data-speed=500 data-ajax=false><span class="uif-headerText-span"><span id="u1qq592w_toggle_exp" class="icon-caret-down"></span><span style="display:none;" id="u1qq592w_toggle_col" class="icon-caret-right"></span> Vacation</span></a></h3>
                    </header>
                        <div id="vacation" data-role=disclosureContent data-open=true class="uif-disclosureContent">
                        <div class="pull-right"><a href="#" class="btn btn-xs btn-default">Sync to Current Institutional Rates</a> <a href="#" class="btn btn-xs btn-default">Reset to Default Rates</a></div>
                        <br>
                        <br>
                        <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable" id="Demo-LightTableGroup1_lightTable" aria-describedby=Demo-LightTableGroup1_lightTable_info>
                                <thead>
                                <tr role=row>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-sort=ascending aria-label="
 Field 1: : activate to sort column descending"><label id="urh9zx8" class="uif-label">Description</label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 2: : activate to sort column ascending"><label id="u9vt7yu" class="uif-label"> On Campus </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 3: : activate to sort column ascending"><label id="uosze9s" class="uif-label"> Fiscal Year </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Start Date </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Institution Rate</label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Applicable Rate </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 aria-label="
 Field 4: : activate to sort column ascending">&nbsp;</th>
                                    <tr>
                                        <td rowspan="2">Vacation</td>
                                        <td>No</td>
                                        <td>2006</td>
                                        <td>07/01/2005</td>
                                        <td class="text-right">10.50</td>
                                        <td class="text-right">10.50</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>No</td>
                                        <td>2006</td>
                                        <td>07/01/2005</td>
                                        <td class="text-right">9.50</td>
                                        <td class="text-right">9.50</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">Vacation on LA</td>
                                        <td>No</td>
                                        <td>2006</td>
                                        <td>07/01/2005</td>
                                        <td class="text-right">8.00</td>
                                        <td class="text-right">8.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>No</td>
                                        <td>2006</td>
                                        <td>07/01/2005</td>
                                        <td class="text-right">8.00</td>
                                        <td class="text-right">8.00</td>
                                    </tr>
                                <tr>
                                        <td>Administrative Salaries (7/1)</td>
                                        <td>No</td>
                                        <td>2014</td>
                                        <td>07/01/2013</td>
                                        <td class="text-right">3.00</td>
                                        <td class="text-right">3.00</td>
                                        <td class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                            </thead>
                                <tbody role=alert aria-live=polite aria-relevant=all>
                            </tbody>
                            </table>
                    </div>
                    </section>
                <section id="u1qq592w" class="uif-disclosure uif-boxLayoutVerticalItem clearfix" data-parent=Demo-Disclosure-Example1>
                        <header id="u1l3ufy3" class="uif-sectionHeader" data-header_for=u1qq592w>
                        <h3 class="uif-headerText"><a data-role=disclosureLink data-linkfor=laballocationSalaries href="#" id="u1qq592w_toggle" data-open=true data-widgetid=u1vpenbn data-speed=500 data-ajax=false><span class="uif-headerText-span"><span id="u1qq592w_toggle_exp" class="icon-caret-down"></span><span style="display:none;" id="u1qq592w_toggle_col" class="icon-caret-right"></span> Lab Allocation - Salaries</span></a></h3>
                    </header>
                        <div id="laballocationSalaries" data-role=disclosureContent data-open=true class="uif-disclosureContent">
                        <div class="pull-right"><a href="#" class="btn btn-xs btn-default">Sync to Current Institutional Rates</a> <a href="#" class="btn btn-xs btn-default">Reset to Default Rates</a></div>
                        <br>
                        <br>
                        <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable" id="Demo-LightTableGroup1_lightTable" aria-describedby=Demo-LightTableGroup1_lightTable_info>
                                <thead>
                                <tr role=row>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-sort=ascending aria-label="
 Field 1: : activate to sort column descending"><label id="urh9zx8" class="uif-label">Description</label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 2: : activate to sort column ascending"><label id="u9vt7yu" class="uif-label"> On Campus </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 3: : activate to sort column ascending"><label id="uosze9s" class="uif-label"> Fiscal Year </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Start Date </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Institution Rate</label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Applicable Rate </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 aria-label="
 Field 4: : activate to sort column ascending">&nbsp;</th>
                                    <tr>
                                        <td rowspan="2">Lab Allocation - Salaries</td>
                                        <td>Yes</td>
                                        <td>2012</td>
                                        <td>07/01/2011</td>
                                        <td class="text-right">8.00</td>
                                        <td class="text-right">8.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2012</td>
                                        <td>07/01/2011</td>
                                        <td class="text-right">8.00</td>
                                        <td class="text-right">8.00</td>
                                    </tr>
                            </thead>
                                <tbody role=alert aria-live=polite aria-relevant=all>
                            </tbody>
                            </table>
                    </div>
                    </section>
                <section id="u1qq592w" class="uif-disclosure uif-boxLayoutVerticalItem clearfix" data-parent=Demo-Disclosure-Example1>
                        <header id="u1l3ufy3" class="uif-sectionHeader" data-header_for=u1qq592w>
                        <h3 class="uif-headerText"><a data-role=disclosureLink data-linkfor=laballocationOther href="#" id="u1qq592w_toggle" data-open=true data-widgetid=u1vpenbn data-speed=500 data-ajax=false><span class="uif-headerText-span"><span id="u1qq592w_toggle_exp" class="icon-caret-down"></span><span style="display:none;" id="u1qq592w_toggle_col" class="icon-caret-right"></span> Lab Allocation - Other</span></a></h3>
                    </header>
                        <div id="laballocationOther" data-role=disclosureContent data-open=true class="uif-disclosureContent">
                        <div class="pull-right"><a href="#" class="btn btn-xs btn-default">Sync to Current Institutional Rates</a> <a href="#" class="btn btn-xs btn-default">Reset to Default Rates</a></div>
                        <br>
                        <br>
                        <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable" id="Demo-LightTableGroup1_lightTable" aria-describedby=Demo-LightTableGroup1_lightTable_info>
                                <thead>
                                <tr role=row>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-sort=ascending aria-label="
 Field 1: : activate to sort column descending"><label id="urh9zx8" class="uif-label">Description</label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 2: : activate to sort column ascending"><label id="u9vt7yu" class="uif-label"> On Campus </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 3: : activate to sort column ascending"><label id="uosze9s" class="uif-label"> Fiscal Year </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Start Date </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Institution Rate</label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Applicable Rate </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 aria-label="
 Field 4: : activate to sort column ascending">&nbsp;</th>
                                    <tr>
                                        <td rowspan="2">Lab Allocation - Utilities</td>
                                        <td>No</td>
                                        <td>2005</td>
                                        <td>07/01/2004</td>
                                        <td class="text-right">8.00</td>
                                        <td class="text-right">8.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>No</td>
                                        <td>2005</td>
                                        <td>07/01/2004</td>
                                        <td class="text-right">8.00</td>
                                        <td class="text-right">8.00</td>
                                    </tr>
                                <tr>
                                        <td rowspan="2">Lab Allocation - M&amp;S</td>
                                        <td>No</td>
                                        <td>2011</td>
                                        <td>07/01/2010</td>
                                        <td class="text-right">1.00</td>
                                        <td class="text-right">1.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>No</td>
                                        <td>2011</td>
                                        <td>07/01/2010</td>
                                        <td class="text-right">1.00</td>
                                        <td class="text-right">1.00</td>
                                    </tr>
                                <tr>
                                        <td>Lab Allocation - Salaries</td>
                                        <td>No</td>
                                        <td>2012</td>
                                        <td>07/01/2011</td>
                                        <td class="text-right">8.00</td>
                                        <td class="text-right">8.00</td>
                                        <td class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                            </thead>
                                <tbody role=alert aria-live=polite aria-relevant=all>
                            </tbody>
                            </table>
                    </div>
                    </section>
                <section id="u1qq592w" class="uif-disclosure uif-boxLayoutVerticalItem clearfix" data-parent=Demo-Disclosure-Example1>
                        <header id="u1l3ufy3" class="uif-sectionHeader" data-header_for=u1qq592w>
                        <h3 class="uif-headerText"><a data-role=disclosureLink data-linkfor=other href="#" id="u1qq592w_toggle" data-open=true data-widgetid=u1vpenbn data-speed=500 data-ajax=false><span class="uif-headerText-span"><span id="u1qq592w_toggle_exp" class="icon-caret-down"></span><span style="display:none;" id="u1qq592w_toggle_col" class="icon-caret-right"></span> Other</span></a></h3>
                    </header>
                        <div id="other" data-role=disclosureContent data-open=true class="uif-disclosureContent">
                        <div class="pull-right"><a href="#" class="btn btn-xs btn-default">Sync to Current Institutional Rates</a> <a href="#" class="btn btn-xs btn-default">Reset to Default Rates</a></div>
                        <br>
                        <br>
                        <table class="table table-condensed table-bordered uif-has-actions uif-lightTable dataTable" id="Demo-LightTableGroup1_lightTable" aria-describedby=Demo-LightTableGroup1_lightTable_info>
                                <thead>
                                <tr role=row>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-sort=ascending aria-label="
 Field 1: : activate to sort column descending"><label id="urh9zx8" class="uif-label">Description</label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 2: : activate to sort column ascending"><label id="u9vt7yu" class="uif-label"> On Campus </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 3: : activate to sort column ascending"><label id="uosze9s" class="uif-label"> Fiscal Year </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Start Date </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Institution Rate</label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 colspan=1 aria-label="
 Field 4: : activate to sort column ascending"><label id="u9u34v6" class="uif-label"> Applicable Rate </label></th>
                                        <th class="sorting" role=columnheader tabindex=0 aria-controls=Demo-LightTableGroup1_lightTable rowspan=1 aria-label="
 Field 4: : activate to sort column ascending">&nbsp;</th>
                                    <tr>
                                        <td rowspan="2">Other</td>
                                        <td>Yes</td>
                                        <td>2000</td>
                                        <td>07/01/1999</td>
                                        <td class="text-right">0.00</td>
                                        <td class="text-right">0.00</td>
                                        <td rowspan="2" class=""><a href="#" class="btn btn-default btn-xs">Edit</a></td>
                                    </tr>
                                <tr>
                                        <td>Yes</td>
                                        <td>2000</td>
                                        <td>07/01/1999</td>
                                        <td class="text-right">0.00</td>
                                        <td class="text-right">0.00</td>
                                    </tr>
                            </thead>
                                <tbody role=alert aria-live=polite aria-relevant=all>
                            </tbody>
                            </table>
                    </div>
                    </section>
            </main>
            </div>
        
        <!-- VIEW FOOTER -->
        <div id="" class="uif-footer clearfix uif-stickyFooter uif-stickyButtonFooter" data-sticky_footer="true" data-parent="LabsProposal" style="position:fixed; left: 0; bottom: 0px;">
                <div class="global-navigate btn-group">
                <button type="button" href="bud-periods.php" id="" class="btn btn-default"><span class="icon-chevron-left"></span> Back</button>
                <button type="button" href="bud-personnelCosts-projPersonnel1.php" id="save-continue" class="btn btn-primary">Continue <span class="icon-chevron-right"></span></button>
            </div>
            
         <div class="global-actions btn-group">            

<button type="button" class="btn btn-default">Complete Budget</button>
         
            <button type="button" id="" class="btn btn-default">Save</button>
            <button type="button" id="" class="btn btn-default">Close</button>
            
            
           
            
            
        </div>
        
            </div>
        
        <!-- DIALOGS/Placeholders --></div>
    
    </form>
<?php include ('includes/footer-scripts.php') ?>
<?php include ('includes/modals-global-budget.php') ?>


</body>
</html>
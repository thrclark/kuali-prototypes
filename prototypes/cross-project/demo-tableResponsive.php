<?php
$page = '';
$section = '';
?>
<!DOCTYPE HTML>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex,nofollow"/>
<title>Kuali :: Fluid Application Header</title>
<link href="../../plugins/tablesaw-master/dist/tablesaw.css" rel="stylesheet" type="text/css">


<?php include('includes/styles.php') ?>

</head>
<body id="Uif-Application">
<?php include('includes/uif-applicationHeader.php') ?>
<form id="kualiForm" action="../kr-krad/uicomponents" method="post" accept-charset="UTF-8">
    <!-- VIEW -->
    <div  class="clearfix uif-formView" data-role="View"> 
        <!-- BREADCRUMBS --> 
        <!-- VIEW HEADER --> 
        
        <!-- // VIEW HEADER  --> 
        <!-- VIEW CONTENT -->
        <div id="Uif-ViewContentWrapper" class="uif-viewContentWrapper container"> 
            <!-- VIEW NAVIGATION -->
            
            <main  class="uif-page uif-hasLeftNav" data-server_messages="false" data-role="Page" data-parent="">
                <section  class="multi-columns-row uif-cssGridGroup uif-boxLayoutVerticalItem clearfix form-horizontal" data-parent="">
                    <div class="uif-header-inner">
                        <h2  class="uif-headerText"> <span class="uif-headerText-span"> Personnel</span> </h2>
                        <div  class="uif-horizontalBoxGroup uif-header-rightGroup clearfix" data-parent=""> </div>
                    </div>
                    <table class="table table-condensed tablesaw tablesaw-stack uif-has-linkout uif-has-actions" data-mode="stack">
                    
                    
                    <caption class="sr-only">Personnel table containing address and contact information or each staff member. The name column contains links to [purpose of link]. The last column, “actions” contains buttons that allow each row’s content to be edited or deleted.</caption>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Street</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Company</th>
                                <th>Issues</th>
                                <th><span class="sr-only">Actions</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="uif-featured"><a href="#">Cain, Glenna Q.</a></td>
                                <td>P.O. Box 501, 9159 Malesuada Rd.</td>
                                <td>Villa Santo Stefano</td>
                                <td>Palau</td>
                                <td>(922) 780-9596</td>
                                <td><a href="#">elei@quis.ca</a></td>
                                <td>Nam Interdum Incorporated</td>
                                <td>140</td>
                                <td><button class="btn btn-xs btn-default">Edit <span class="sr-only"> Cain, Glenna Q.</span></button>
                                    <button class="btn btn-xs btn-default">Delete <span class="sr-only"> Cain, Glenna Q.</span></button></td>
                            </tr>
                            <tr>
                                <td class="uif-featured"><a href="#">Blackwell, Kato K.</a></td>
                                <td>P.O. Box 492, 6914 Mauris, Avenue</td>
                                <td>Lac-Serent</td>
                                <td>Iran</td>
                                <td>(503) 593-4755</td>
                                <td><a href="#">Morbi@am.net</a></td>
                                <td>Tempor Lorem Consulting</td>
                                <td>183</td>
                                <td><button class="btn btn-xs btn-default">Edit <span class="sr-only"> Blackwell, Kato K.</span></button>
                                    <button class="btn btn-xs btn-default">Delete <span class="sr-only"> Blackwell, Kato K.</span></button></td>
                            </tr>
                            <tr>
                                <td class="uif-featured"><a href="#">Gamble, Zelda R.</a></td>
                                <td>Ap #112-2977 Elit. Rd.</td>
                                <td>Viddalba</td>
                                <td>Anguilla</td>
                                <td>(174) 658-2329</td>
                                <td><a href="#">poSed@dira.com</a></td>
                                <td>Ac Libero Nec Industries</td>
                                <td>49</td>
                                <td><button class="btn btn-xs btn-default">Edit <span class="sr-only"> Gamble, Zelda R.</span></button>
                                    <button class="btn btn-xs btn-default">Delete <span class="sr-only"> Gamble, Zelda R.</span></button></td>
                            </tr>
                            <tr>
                                <td class="uif-featured"><a href="#">Cotton, Lillith Z.</a></td>
                                <td>530-2231 Sed Avenue</td>
                                <td>Stevenage</td>
                                <td>Australia</td>
                                <td>(263) 991-7077</td>
                                <td><a href="#">Nullam@a.org</a></td>
                                <td>Lectus Rutrum Inc.</td>
                                <td>298</td>
                                <td><button class="btn btn-xs btn-default">Edit <span class="sr-only"> Cotton, Lillith Z.</span></button>
                                    <button class="btn btn-xs btn-default">Delete <span class="sr-only"> Cotton, Lillith Z.</span></button></td>
                            </tr>
                            <tr>
                                <td class="uif-featured"><a href="#">Pugh, Phillip Z.</a></td>
                                <td>1870 Nullam Avenue</td>
                                <td>Moose Jaw</td>
                                <td>Timor-Leste</td>
                                <td>(484) 887-5780</td>
                                <td><a href="#">Donec@sollim.org</a></td>
                                <td>Mauris Ipsum Porta Associates</td>
                                <td>218</td>
                                <td><button class="btn btn-xs btn-default">Edit <span class="sr-only"> Pugh, Phillip Z.</span></button>
                                    <button class="btn btn-xs btn-default">Delete <span class="sr-only"> Pugh, Phillip Z.</span></button></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </main>
        </div>
    </div>
</form>
<?php include('../kc/includes/footer-scripts.php') ?>
<?php include ('includes/modal-login.php') ?>

<script src="../../plugins/tablesaw-master/dist/tablesaw.js"></script>
</body>
</html>
<nav id="Uif-Navigation">
    <div id="Uif-NavigationMenu" class="uif-menuNavigationGroup">
        <div class="sidebar-collapse"> <span class="icon-angle-left"></span> </div>
        <!-- NAVIGATION -->
        <ul class="nav nav-list">
            <!--
            <li <?php if ($page == '') { echo 'class="open active"'; } ?>> <a class="uif-navigationActionLink" href="coi-financial-entities.php"><span class="icon-office"></span><span class="uif-innerText">Financial Entities</span></a> </li>
            -->
            <li <?php if ($section == 'disclosures') { echo 'class="open active"'; } ?>> <a href="coi-admin-disclosure-list.php" class="dropdown-toggle" data-toggle="dropdown"> <span class="icon-ok"></span> <span class="uif-innerText">Disclosure List</span> <span class="arrow icon-angle-right"></span> </a>
                <ul class="submenu uif-listLayout">
                    <li <?php if ($page == 'disclosure-review-project') { echo 'class="active"'; } ?>> <a class="uif-actionLink" href="coi-admin-disclosure-review-project.php">Disclosure Review - by Project </a> </li>
                    <li <?php if ($page == 'disclosure-review-fe') { echo 'class="active"'; } ?>> <a class="uif-actionLink" href="coi-admin-disclosure-review-financial-entity.php">Disclosure Review - by FE </a> </li>
                </ul>
            </li>
            <li <?php if ($page == '') { echo 'class="open active"'; } ?>> <a class="uif-navigationActionLink" href="coi-admin-training.php"><span class="icon-calendar"></span><span class="uif-innerText">Training</span></a> </li>
        </ul>

    </div>
</nav>

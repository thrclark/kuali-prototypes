<nav id="Uif-Navigation">
    <div id="Uif-NavigationMenu" class="uif-menuNavigationGroup">
        <div class="uif-proposal-return-button">
            <a class="btn btn-default btn-xs" href="prop-basics-details.php">&laquo; Return to proposal</a>
        </div>
        <div class="sidebar-collapse">
            <span class="icon-angle-left"></span>
        </div>

        <!-- NAVIGATION -->
        <ul class="nav nav-list">
            <li <?php if ($page == 'periods-and-totals') { echo 'class="open active"'; } ?>><a class="uif-navigationActionLink" tabindex="0" href="bud-periods.php"><span class="icon-sort-by-attributes-alt"></span><span class="uif-innerText">Periods &amp; Totals</span></a></li>
            <li <?php if ($page == 'rates') { echo 'class="open active"'; } ?>><a class="uif-navigationActionLink" tabindex="0" href="bud-rates-tabs.php"><span class="icon-tasks"></span><span class="uif-innerText">Rates</span></a></li>
            <li <?php if ($section !== '' and $section == 'personnel') { echo 'class="open active"'; } ?>> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="icon-user3"></span> <span class="uif-innerText" >Personnel Costs</span> <span class="arrow icon-angle-right"></span></a>
                <ul class="submenu uif-listLayout">
                    <li <?php if ($page == 'personnel-costs') { echo 'class="active"'; } ?>><a class="uif-actionLink" tabindex="0" href="bud-personnelCosts-projPersonnel1.php">Project Personnel</a></li>
                    <li <?php if ($page == 'personnel-assign') { echo 'class="active"'; } ?>><a class="uif-actionLink" tabindex="0" href="bud-personnelCosts-persPeriod.php">Assign Personnel to Periods</a></li>
                </ul>
            </li>
            <li <?php if ($page == 'non-personnel') { echo 'class="open active"'; } ?>><a class="uif-navigationActionLink" tabindex="0" href="bud-non-personnel.php"><span class="icon-beaker"></span><span class="uif-innerText">Non-Personnel Costs</span></a></li>
            <li <?php if ($page == 'subawards') { echo 'class="open active"'; } ?>><a class="uif-navigationActionLink" tabindex="0" href="bud-subawards.php"><span class="icon-file"></span><span class="uif-innerText">Subawards</span></a></li>
            <li <?php if ($section !== '' and $section == 'institute') { echo 'class="open active"'; } ?>> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="icon-bell2"></span> <span id="" class="uif-innerText">Institutional Commitments</span> <span class="arrow icon-angle-right"></span> </a>
                <ul class="submenu uif-listLayout" >
                    <li <?php if ($page == 'institute-costsharing') { echo 'class="active"'; } ?>><a class="uif-actionLink" tabindex="0" href="bud-cost-sharing.php">Cost Sharing</a></li>
                    <li <?php if ($page == 'institute-unrecovered') { echo 'class="active"'; } ?>><a class="uif-actionLink" tabindex="0" href="bud-unrecovered-fa.php">Unrecovered F&amp;A</a></li>
                </ul>
            </li>
            <li <?php if ($page == 'project-income') { echo 'class="open active"'; } ?>><a class="uif-navigationActionLink" tabindex="0" href="bud-income.php"><span class="icon-money"></span><span class="uif-innerText">Project Income</span></a></li>
            <li <?php if ($page == 'modular') { echo 'class="open active"'; } ?>><a class="uif-navigationActionLink" tabindex="0" href="bud-modular.php"><span class="icon-ok"></span><span class="uif-innerText">Modular</span></a></li>
            <li <?php if ($page == 'notes') { echo 'class="open active"'; } ?>><a  class="uif-actionLink" tabindex="0" href="bud-notes.php"><span class="icon-th-list"></span><span class="uif-innerText">Budget Notes</span></a></li>
            <li <?php if ($page == 'summary') { echo 'class="open active"'; } ?>><a class="uif-navigationActionLink" tabindex="0" href="bud-summary.php"><span class="icon-file"></span><span class="uif-innerText">Budget Summary</span></a></li>
        </ul>
    </div>
</nav>
<nav id="Uif-Navigation">
    <div id="Uif-NavigationMenu" class="uif-menuNavigationGroup">
        <div class="sidebar-collapse">
            <span class="icon-angle-left"></span>
        </div>
        <ul class="nav nav-list">
            <li <?php if ($page == 'docinfo') { echo 'class="open active"'; } ?>> <a class="uif-navigationActionLink" href="prop-docinfo.php"><span class="icon-file7"></span><span class="uif-innerText">Doc Info</span></a> </li>
            <li <?php if ($page == 'basics') { echo 'class="open active"'; } ?>> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="icon-file-alt"></span> <span id="u242f54" class="uif-innerText">Basics</span> <span class="arrow icon-angle-right"></span> </a>
                <ul class="submenu uif-listLayout">
                    <li <?php if ($page == 'basics-proposalDetails') { echo 'class="active"'; } ?>> <a class="uif-actionLink" href="prop-basics-details.php">Proposal Details</a> </li>
                    <li <?php if ($page == 'basics-s2s') { echo 'class="active"'; } ?>> <a class="uif-actionLink" href="prop-basics-s2s.php">S2S Opportunity Search</a> </li>
                    <li <?php if ($page == 'basics-deliveryInfo') { echo 'class="active"'; } ?>> <a class="uif-actionLink" href="prop-basics-deliveryinfo.php">Delivery Info</a> </li>
                    <li <?php if ($page == 'basics-sponsorProgram') { echo 'class="active"'; } ?>> <a class="uif-actionLink" href="prop-basics-sponsorprog.php">Sponsor &amp; Program Information</a> </li>
                    <li <?php if ($page == 'basics-organizationLocation') { echo 'class="active"'; } ?>> <a class="uif-actionLink" href="prop-basics-orgloc.php">Organization &amp; Location</a> </li>
                </ul>
            </li>
            <li <?php if ($section != '' &&  $section == 'keyPersonnel') { echo 'class="open active"'; } ?>> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="icon-user3"></span> <span id="u1sp7yfb" class="uif-innerText">Key Personnel</span> <span class="arrow icon-angle-right"></span> </a>
                <ul class="submenu uif-listLayout">
                    <li <?php if ($page == 'keyPersonnel-personnel') { echo 'class="active"'; } ?>> <a class="uif-actionLink" href="prop-personnel-start.php">Personnel</a> </li>
                    <li <?php if ($page == 'keyPersonnel-creditAllocation') { echo 'class="active"'; } ?>> <a class="uif-actionLink" href="prop-personnel-credit.php">Credit Allocation</a> </li>
                </ul>
            </li>
            <li <?php if ($page == 'compliance') { echo 'class="open active"'; } ?>> <a class="uif-navigationActionLink" href="prop-compliance.php"><span class="icon-ok"></span><span class="uif-innerText">Compliance</span></a> </li>
            <li <?php if ($page == 'attachments') { echo 'class="open active"'; } ?>> <a class="uif-navigationActionLink" href="prop-attachments.php"><span class="icon-paper-clip"></span><span class="uif-innerText">Attachments</span></a> </li>
            <li <?php if ($page == 'questionnaire') { echo 'class="open active"'; } ?>> <a class="uif-navigationActionLink" href="prop-questionnaire.php"><span class="icon-question2"></span><span class="uif-innerText">Questionnaire</span></a> </li>    
            <li <?php if ($page == 'budgets') { echo 'class="open active"'; } ?>> <a  href="prop-budget.php"><span class="icon-money"></span><span class="uif-innerText">Budgets</span></a></li>
            <li <?php if ($page == 'supplimentalInfo') { echo 'class="open active"'; } ?>> <a class="uif-navigationActionLink" href="prop-supplimental.php" > <span class="icon-bell2"></span> <span class="uif-innerText">Supplemental Information</span></a></li>
            <li <?php if ($page == 'summary') { echo 'class="open active"'; } ?>> <a class="uif-navigationActionLink" href="prop-summary.php"><span class="icon-signout"></span><span class="uif-innerText">Summary/Submit</span></a> </li>
        </ul>
    </div>
</nav>

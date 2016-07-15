<nav id="Uif-Navigation">
    <div id="Uif-NavigationMenu" class="uif-menuNavigationGroup">
        <div class="sidebar-collapse"><span class="icon-angle-left"></span></div>
        <!-- NAVIGATION -->
        <ul class="nav nav-list">
            <li <?php if ($page == 'docoverview') { echo 'class="active"'; } ?>><a href="kim-person-docoverview.php" id="" class="uif-navigationActionLink" ><span class="icon-file-alt"></span><span class="uif-innerText">Doc Overview</span></a></li>
            <li <?php if ($page == 'persoverveiw') { echo 'class="active"'; } ?>><a href="kim-person-personoverview.php" id="" class="uif-navigationActionLink" ><span class="icon-user"></span><span class="uif-innerText">Person Overview</span></a></li>
            <li <?php if ($page == 'affiliations') { echo 'class="active"'; } ?>><a href="kim-person-affiliations.php"id="" class="uif-navigationActionLink" ><span class="icon-puzzle"></span><span class="uif-innerText">Affiliations</span></a></li>
            <li <?php if ($page == 'contactinfo') { echo 'class="active"'; } ?>><a href="kim-person-contactinfo.php" id="" class="uif-navigationActionLink" ><span class="icon-list-alt"></span><span class="uif-innerText">Contact Info &amp; Privacy</span></a></li>
            <li <?php if ($page == 'memberships') { echo 'class="active"'; } ?>><a href="kim-person-memberships.php"id="" class="uif-navigationActionLink" ><span class="icon-group"></span><span class="uif-innerText">Memberships</span></a></li>
         
        </ul>
    </div>
</nav>

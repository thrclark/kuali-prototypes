<div id="LabsProposal-DocActionBar" class="uif-actionBar uif-header-lowerGroup">
        <ul>
            <li><a href="#" id="uotglmx" class="uif-actionLink" tabindex="0" data-role="Action" data-toggle="modal" data-target="#modal-data-validation">Data Validation <span style="color:#090">(on)</span></a></li>
            <li><a href="#" id="uotglr8" class="uif-actionLink"  data-toggle="modal" data-target="#budgetSettings"><span class="icon-cog"></span>Budget Settings</a></li>
            <li><a href="#" id="uotglr8" class="uif-actionLink" data-toggle="modal" data-target="#summary"><span class="icon-eye"></span>Summary</a></li>
            <li><a href="#" class="uif-actionLink" data-toggle="modal" data-target="#modal-budget-versions"><span class="icon-money"></span>Budget Versions</a></li>

            <?php
            /*
             * Sets the cookie to determine which action the Autocalculate periods does.
             */
            if ($_COOKIE['pg'] || $_COOKIE['pg'] == 1) {
                echo '<li><a class="uif-actionLink" data-toggle="modal" data-target="#modal-generate-versions"><span class="icon-stack"></span>Autocalculate Periods </a></li>';
            } else {
                echo '<li><a class="uif-actionLink" data-toggle="modal" data-target="#modal-generate-versions"><span class="icon-stack"></span>Autocalculate Periods </a></li>';
            }
            ?>

            <li class="uif-page-help"> <a  class="dropdown-toggle" data-toggle="dropdown"><span class="icon-question-sign"><span class="sr-only">help</span></span><span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Periods &amp; Totals</a></li>
                    <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Rates</a></li>
                    <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Personnel Cost</a></li>
                    <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Non-Personnel</a></li>
                    <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Institutional Commitments</a></li>
                    <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Project Income</a></li>
                    <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Modular</a></li>
                    <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Budget Notes</a></li>
                    <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Summary</a></li>
                    <li><a href="https://testdrive.kc.kuali.org/kc-ptd/static/help/default.htm?turl=Documents/requiredfieldsforsavingdocument.htm">Glossary of Terms</a></li>
                </ul>
            </li>
        </ul>
    </div>
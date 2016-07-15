<meta name="viewport" content="width=device-width, user-scalable=no">
<link href="../../plugins/jqueryUI/jquery-ui-1.9.2.css" rel="stylesheet" type="text/css"/>
<!--<link href="../../themes/kboot/stylesheets/bootstrap.less" rel="stylesheet/less" type="text/css"/> -->
<link href="../../themes/kboot/stylesheets/kboot.less" rel="stylesheet/less" type="text/css"/>
<link href="../../plugins/menu/tabs.css" rel="stylesheet" type="text/css"/>
<link href="../../plugins/jgrowl/jquery.jgrowl.css" rel="stylesheet" type="text/css"/>
<link href="../../plugins/textpopout/popoutTextarea.css" rel="stylesheet" type="text/css"/>
<link href="../../plugins/datatables/TableTools.css" rel="stylesheet" type="text/css"/>
<link href="../../plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<link href="../../plugins/prettify/prettify.css" rel="stylesheet" type="text/css"/>

<!--<link href="../css/kradSampleApp.css" rel="stylesheet" type="text/css"/>
   <link href="../css/labsProposal.css" rel="stylesheet" type="text/css"/>  -->
<!-- icon size position-->

<style type="text/css">
td.clickable {
	cursor: pointer
}
.popover-content .dl-horizontal dt {
	width: 75px;
}
.popover-content .dl-horizontal dd {
	margin-left: 100px;
}
</style>
<style type="text/css">
.minicolors-theme-default input[type="text"] {
	background-color: transparent;
}
.minicolors-theme-default .minicolors-input {
	height: 20px;
	width: auto;
	display: inline-block;
	padding-left: 62px;
	border: none;
	-webkit-box-shadow: none;
	box-shadow: none;
	color: #999
}
.minicolors-theme-default .minicolors-swatch {
	top: 5px;
	left: 5px;
	width: 48px;
	height: 22px;
	border: 1px solid #CCC;
	border-right: 12px solid #E1E1E1;
}
.minicolors-theme-default .minicolors-swatch:after {
	width: 0;
	height: 0;
	border-left: 3px solid transparent;
	border-right: 3px solid transparent;
	border-top: 4px solid #666;
	position: absolute;
	content: "";
	top: 13px;
	right: -9px;
	z-index: 3
}
</style>
<style type="text/css">
.icon-chevron-left {
	position: relative;
	top: 3px
}
.icon-chevron-right {
	position: relative;
	top: 3px
}
</style>
<style type="text/css">
@media (min-width:979px) {
.col-md-6.uif-has-separator:not(:first-child) {
	border-left: 1px solid #ddd;
	padding-left: 10px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	min-height: 500px;
}
}
</style>
<style type="text/css">
.uif-forcewrap td {
	-ms-word-break: break-all;
	word-break: break-all;
	/* Non standard for webkit */
	word-break: break-word;
	-webkit-hyphens: auto;
	-moz-hyphens: auto;
	-ms-hyphens: auto;
	hyphens: auto;
}
</style>
<style>
@media only screen and (max-width: 760px), (min-device-width: 768px) and (max-device-width: 1024px) {
/* Force table to not be like tables anymore */

.uif-has-actions td:last-of-type, .uif-has-actions th:last-of-type {
	width: inherit;
	white-space: inherit;
}
.uif-responsive.table-bordered {
	border: none;
	border-top: 1px solid #ccc;
}
.uif-responsive table, .uif-responsive thead, .uif-responsive tbody, .uif-responsive th, .uif-responsive td, .uif-responsive tr {
	display: block;
	border-top: none !important;
}
/* Hide table headers (but not display: none;, for accessibility) */
.uif-responsive thead tr {
	position: absolute;
	top: -9999px;
	left: -9999px;
}
.uif-responsive tr {
	border-bottom: 1px solid #ccc;
	position: relative;
}
.uif-responsive.uif-responsive-rowtap tr:before, .uif-responsive tr:hover:before {
	position: absolute;
	right: 0px;
	font-family: 'krad-icons';
	font-size: 22px;
	color: #ccc;
	top: 50%;
	padding-right: 15px;
	content: "\e87f";
	line-height: 0px;
}
.uif-responsive.table-hover > tbody > tr:hover > td, .uif-responsive.table-hover > tbody > tr:hover > th {
	background: #FFF
}
.uif-responsive td {
	/* Behave  like a "row" */ 
	border-left: none !important;
	border-right: none !important;
	border-bottom: none !important;
	position: relative;
	padding-left: 30% !important;
	padding-top: 0px !important;
	padding-bottom: 0px !important;
}
.uif-responsive td:before {
	/* Now like a table header */
	position: absolute;
	/* Top/left values mimic padding */
	top: 0px;
	left: 6px;
	width: 30%;
	padding-right: 10px;
	white-space: nowrap;
	text-align: right;
	color: #999;
}
.uif-responsive td:nth-of-type(1):before {
	content: "Label 1";
}
.uif-responsive td:nth-of-type(2):before {
	content: "Label 2";
}
.uif-responsive td:nth-of-type(3):before {
	content: "Label 3";
}
.uif-responsive td:nth-of-type(4):before {
	content: "Label 4";
}
.uif-responsive td:nth-of-type(5):before {
	content: "Label 5";
}
.uif-responsive td:nth-of-type(6):before {
	content: "Label 6";
}
.uif-responsive td:nth-of-type(7):before {
	content: "Label 7";
}
.uif-responsive td:nth-of-type(8):before {
	content: "Label 8";
}
.uif-responsive td:nth-of-type(9):before {
	content: "Label 9";
}
.uif-responsive td:nth-of-type(10):before {
	content: "Label 10";
}
}
.dataTables_wrapper .row {
	margin-bottom: 12px;
}
</style>
<style>
.modal-body {
position: relative;
padding: 15px;
}
</style>
<style>


.hilite  {
    -webkit-animation: target-fade 8s 1;
    -moz-animation: target-fade 8s 1;
}

@-webkit-keyframes target-fade {
    0% { background-color:#FFC; }
    100% { background-color:#fff; }
}
@-moz-keyframes target-fade {
    0% { background-color:#FFC; }
     100% { background-color:#fff; }
}




</style>
<style type="text/css">
#rowColors {
	min-width: 360px;
}
#rowColors .checkbox {
	border-radius: 5px;
	margin-bottom: 5px;
	margin-left: -5px;
	min-height: 10px;
	padding-top: 3px;
	max-width: 160px;
}
#rowColors .checkbox input {
	margin-left: -15px;
}

.popover-markup .icon-info {
	font-size: 12px;
}




/*prevents labels from overlapping sorting icons*/
table.dataTable th span {
	white-space: nowrap;
	display: block;
	padding-right: 20px
}
/*hides extra labels that the tablesaw plugin is drawing in popups - (need a better way to fix this)*/
.popover-content b.tablesaw-cell-label {
	display: none
}
</style>
<style>
.uif-form {border-top-color:rgba(204, 204, 204, 0.5); border-top-style:solid; border-top-width:1px }
.uif-form .uif-form-buttonbar {background-color: #F0F0F0; border-top-color:rgba(204, 204, 204, 0.5); border-top-style:solid; border-top-width:1px;  padding: 5px; margin: -18px; margin-top: 20px; }



</style>
<style>

.tree {
min-height: 20px;
padding: 0px;
margin-bottom: 20px;
background-color: #fbfbfb;
  
}
.tree li {
list-style-type: none;
margin: 0;
padding: 10px 5px 0 32px;
position: relative;
}
.tree li::before, .tree li::after {
    content:'';
    left:8px;
    position:absolute;
    right:auto
}
.tree li::before {
    border-left:1px solid #d6d6d6;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:1px solid #d6d6d6;
    height:20px;
    top:25px;
    width:25px
}
.tree li span {
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:1px solid #d6d6d6;
    border-radius:5px;
    display:inline-block;
    padding:3px 8px;
    text-decoration:none
}

.tree li span>span { border:none; padding: 0px; color:#999}

.tree li.parent_li>span {
    cursor:pointer
}
.tree>ul>li::before, .tree>ul>li::after {
    border:0
}
.tree li:last-child::before {
    height:25px
}
.tree li.parent_li>span:hover, .tree li.parent_li>span:hover+ul li span {
 
}
</style>
<style>
.uif-inquiryLink {
	margin-left: 3px
}

</style>
<link href="../../plugins/tablesaw-master/dist/tablesaw.css" rel="stylesheet" type="text/css">

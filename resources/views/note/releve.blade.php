<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>

<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}" defer></script>

 <!-- Fonts -->

<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


<!-- Styles -->
<link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('lib/bootstrap/css/bootstrap.css')}}" rel="stylesheet">


<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

<!-- Custom styles for this template -->
<script src="{{asset('lib/chart-master/Chart.js')}}"></script>
<script src="{{asset('lib/advanced-datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('datatables/datatables.min.js') }}"></script>
<link rel="stylesheet" href="{{asset('lib/advanced-datatable/css/DT_bootstrap.css')}}" />
<!-- Custom styles for this template -->
<style>
/**data */
table.dataTable{clear:both;margin-top:6px !important;margin-bottom:6px !important;max-width:none !important;border-collapse:separate !important;border-spacing:0}table.dataTable td,table.dataTable th{-webkit-box-sizing:content-box;box-sizing:content-box}table.dataTable td.dataTables_empty,table.dataTable th.dataTables_empty{text-align:center}table.dataTable.nowrap th,table.dataTable.nowrap td{white-space:nowrap}div.dataTables_wrapper div.dataTables_length label{font-weight:normal;text-align:left;white-space:nowrap}div.dataTables_wrapper div.dataTables_length select{width:auto;display:inline-block}div.dataTables_wrapper div.dataTables_filter{text-align:right}div.dataTables_wrapper div.dataTables_filter label{font-weight:normal;white-space:nowrap;text-align:left}div.dataTables_wrapper div.dataTables_filter input{margin-left:0.5em;display:inline-block;width:auto}div.dataTables_wrapper div.dataTables_info{padding-top:0.85em}div.dataTables_wrapper div.dataTables_paginate{margin:0;white-space:nowrap;text-align:right}div.dataTables_wrapper div.dataTables_paginate ul.pagination{margin:2px 0;white-space:nowrap;justify-content:flex-end}div.dataTables_wrapper div.dataTables_processing{position:absolute;top:50%;left:50%;width:200px;margin-left:-100px;margin-top:-26px;text-align:center;padding:1em 0}table.dataTable>thead>tr>th:active,table.dataTable>thead>tr>td:active{outline:none}table.dataTable>thead>tr>th:not(.sorting_disabled),table.dataTable>thead>tr>td:not(.sorting_disabled){padding-right:30px}table.dataTable>thead .sorting,table.dataTable>thead .sorting_asc,table.dataTable>thead .sorting_desc,table.dataTable>thead .sorting_asc_disabled,table.dataTable>thead .sorting_desc_disabled{cursor:pointer;position:relative}table.dataTable>thead .sorting:before,table.dataTable>thead .sorting:after,table.dataTable>thead .sorting_asc:before,table.dataTable>thead .sorting_asc:after,table.dataTable>thead .sorting_desc:before,table.dataTable>thead .sorting_desc:after,table.dataTable>thead .sorting_asc_disabled:before,table.dataTable>thead .sorting_asc_disabled:after,table.dataTable>thead .sorting_desc_disabled:before,table.dataTable>thead .sorting_desc_disabled:after{position:absolute;bottom:0.9em;display:block;opacity:0.3}table.dataTable>thead .sorting:before,table.dataTable>thead .sorting_asc:before,table.dataTable>thead .sorting_desc:before,table.dataTable>thead .sorting_asc_disabled:before,table.dataTable>thead .sorting_desc_disabled:before{right:1em;content:"\2191"}table.dataTable>thead .sorting:after,table.dataTable>thead .sorting_asc:after,table.dataTable>thead .sorting_desc:after,table.dataTable>thead .sorting_asc_disabled:after,table.dataTable>thead .sorting_desc_disabled:after{right:0.5em;content:"\2193"}table.dataTable>thead .sorting_asc:before,table.dataTable>thead .sorting_desc:after{opacity:1}table.dataTable>thead .sorting_asc_disabled:before,table.dataTable>thead .sorting_desc_disabled:after{opacity:0}div.dataTables_scrollHead table.dataTable{margin-bottom:0 !important}div.dataTables_scrollBody table{border-top:none;margin-top:0 !important;margin-bottom:0 !important}div.dataTables_scrollBody table thead .sorting:before,div.dataTables_scrollBody table thead .sorting_asc:before,div.dataTables_scrollBody table thead .sorting_desc:before,div.dataTables_scrollBody table thead .sorting:after,div.dataTables_scrollBody table thead .sorting_asc:after,div.dataTables_scrollBody table thead .sorting_desc:after{display:none}div.dataTables_scrollBody table tbody tr:first-child th,div.dataTables_scrollBody table tbody tr:first-child td{border-top:none}div.dataTables_scrollFoot>.dataTables_scrollFootInner{box-sizing:content-box}div.dataTables_scrollFoot>.dataTables_scrollFootInner>table{margin-top:0 !important;border-top:none}@media screen and (max-width: 767px){div.dataTables_wrapper div.dataTables_length,div.dataTables_wrapper div.dataTables_filter,div.dataTables_wrapper div.dataTables_info,div.dataTables_wrapper div.dataTables_paginate{text-align:center}div.dataTables_wrapper div.dataTables_paginate ul.pagination{justify-content:center !important}}table.dataTable.table-sm>thead>tr>th:not(.sorting_disabled){padding-right:20px}table.dataTable.table-sm .sorting:before,table.dataTable.table-sm .sorting_asc:before,table.dataTable.table-sm .sorting_desc:before{top:5px;right:0.85em}table.dataTable.table-sm .sorting:after,table.dataTable.table-sm .sorting_asc:after,table.dataTable.table-sm .sorting_desc:after{top:5px}table.table-bordered.dataTable{border-right-width:0}table.table-bordered.dataTable th,table.table-bordered.dataTable td{border-left-width:0}table.table-bordered.dataTable th:last-child,table.table-bordered.dataTable th:last-child,table.table-bordered.dataTable td:last-child,table.table-bordered.dataTable td:last-child{border-right-width:1px}table.table-bordered.dataTable tbody th,table.table-bordered.dataTable tbody td{border-bottom-width:0}div.dataTables_scrollHead table.table-bordered{border-bottom-width:0}div.table-responsive>div.dataTables_wrapper>div.row{margin:0}div.table-responsive>div.dataTables_wrapper>div.row>div[class^="col-"]:first-child{padding-left:0}div.table-responsive>div.dataTables_wrapper>div.row>div[class^="col-"]:last-child{padding-right:0}
@keyframes dtb-spinner{100%{transform:rotate(360deg)}}@-o-keyframes dtb-spinner{100%{-o-transform:rotate(360deg);transform:rotate(360deg)}}@-ms-keyframes dtb-spinner{100%{-ms-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes dtb-spinner{100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-moz-keyframes dtb-spinner{100%{-moz-transform:rotate(360deg);transform:rotate(360deg)}}div.dt-button-info{position:fixed;top:50%;left:50%;width:400px;margin-top:-100px;margin-left:-200px;background-color:white;border:2px solid #111;box-shadow:3px 3px 8px rgba(0,0,0,0.3);border-radius:3px;text-align:center;z-index:21}div.dt-button-info h2{padding:0.5em;margin:0;font-weight:normal;border-bottom:1px solid #ddd;background-color:#f3f3f3}div.dt-button-info>div{padding:1em}div.dt-button-collection-title{text-align:center;padding:0.3em 0 0.5em;font-size:0.9em}div.dt-button-collection-title:empty{display:none}div.dt-button-collection{position:absolute;z-index:2001}div.dt-button-collection div.dropdown-menu{display:block;z-index:2002;min-width:100%}div.dt-button-collection div.dt-button-collection-title{background-color:white;border:1px solid rgba(0,0,0,0.15)}div.dt-button-collection.fixed{position:fixed;top:50%;left:50%;margin-left:-75px;border-radius:0}div.dt-button-collection.fixed.two-column{margin-left:-200px}div.dt-button-collection.fixed.three-column{margin-left:-225px}div.dt-button-collection.fixed.four-column{margin-left:-300px}div.dt-button-collection>:last-child{display:block !important;-webkit-column-gap:8px;-moz-column-gap:8px;-ms-column-gap:8px;-o-column-gap:8px;column-gap:8px}div.dt-button-collection>:last-child>*{-webkit-column-break-inside:avoid;break-inside:avoid}div.dt-button-collection.two-column{width:400px}div.dt-button-collection.two-column>:last-child{padding-bottom:1px;-webkit-column-count:2;-moz-column-count:2;-ms-column-count:2;-o-column-count:2;column-count:2}div.dt-button-collection.three-column{width:450px}div.dt-button-collection.three-column>:last-child{padding-bottom:1px;-webkit-column-count:3;-moz-column-count:3;-ms-column-count:3;-o-column-count:3;column-count:3}div.dt-button-collection.four-column{width:600px}div.dt-button-collection.four-column>:last-child{padding-bottom:1px;-webkit-column-count:4;-moz-column-count:4;-ms-column-count:4;-o-column-count:4;column-count:4}div.dt-button-collection .dt-button{border-radius:0}div.dt-button-collection.fixed{max-width:none}div.dt-button-collection.fixed:before,div.dt-button-collection.fixed:after{display:none}div.dt-button-background{position:fixed;top:0;left:0;width:100%;height:100%;z-index:999}@media screen and (max-width: 767px){div.dt-buttons{float:none;width:100%;text-align:center;margin-bottom:0.5em}div.dt-buttons a.btn{float:none}}div.dt-buttons button.btn.processing,div.dt-buttons div.btn.processing,div.dt-buttons a.btn.processing{color:rgba(0,0,0,0.2)}div.dt-buttons button.btn.processing:after,div.dt-buttons div.btn.processing:after,div.dt-buttons a.btn.processing:after{position:absolute;top:50%;left:50%;width:16px;height:16px;margin:-8px 0 0 -8px;box-sizing:border-box;display:block;content:' ';border:2px solid #282828;border-radius:50%;border-left-color:transparent;border-right-color:transparent;animation:dtb-spinner 1500ms infinite linear;-o-animation:dtb-spinner 1500ms infinite linear;-ms-animation:dtb-spinner 1500ms infinite linear;-webkit-animation:dtb-spinner 1500ms infinite linear;-moz-animation:dtb-spinner 1500ms infinite linear}
table.dataTable.dtr-inline.collapsed>tbody>tr>td.child,table.dataTable.dtr-inline.collapsed>tbody>tr>th.child,table.dataTable.dtr-inline.collapsed>tbody>tr>td.dataTables_empty{cursor:default !important}table.dataTable.dtr-inline.collapsed>tbody>tr>td.child:before,table.dataTable.dtr-inline.collapsed>tbody>tr>th.child:before,table.dataTable.dtr-inline.collapsed>tbody>tr>td.dataTables_empty:before{display:none !important}table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td.dtr-control,table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th.dtr-control{position:relative;padding-left:30px;cursor:pointer}table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td.dtr-control:before,table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th.dtr-control:before{top:50%;left:5px;height:1em;width:1em;margin-top:-9px;display:block;position:absolute;color:white;border:0.15em solid white;border-radius:1em;box-shadow:0 0 0.2em #444;box-sizing:content-box;text-align:center;text-indent:0 !important;font-family:'Courier New', Courier, monospace;line-height:1em;content:'+';background-color:#0275d8}table.dataTable.dtr-inline.collapsed>tbody>tr.parent>td.dtr-control:before,table.dataTable.dtr-inline.collapsed>tbody>tr.parent>th.dtr-control:before{content:'-';background-color:#d33333}table.dataTable.dtr-inline.collapsed.compact>tbody>tr>td.dtr-control,table.dataTable.dtr-inline.collapsed.compact>tbody>tr>th.dtr-control{padding-left:27px}table.dataTable.dtr-inline.collapsed.compact>tbody>tr>td.dtr-control:before,table.dataTable.dtr-inline.collapsed.compact>tbody>tr>th.dtr-control:before{left:4px;height:14px;width:14px;border-radius:14px;line-height:14px;text-indent:3px}table.dataTable.dtr-column>tbody>tr>td.dtr-control,table.dataTable.dtr-column>tbody>tr>th.dtr-control,table.dataTable.dtr-column>tbody>tr>td.control,table.dataTable.dtr-column>tbody>tr>th.control{position:relative;cursor:pointer}table.dataTable.dtr-column>tbody>tr>td.dtr-control:before,table.dataTable.dtr-column>tbody>tr>th.dtr-control:before,table.dataTable.dtr-column>tbody>tr>td.control:before,table.dataTable.dtr-column>tbody>tr>th.control:before{top:50%;left:50%;height:0.8em;width:0.8em;margin-top:-0.5em;margin-left:-0.5em;display:block;position:absolute;color:white;border:0.15em solid white;border-radius:1em;box-shadow:0 0 0.2em #444;box-sizing:content-box;text-align:center;text-indent:0 !important;font-family:'Courier New', Courier, monospace;line-height:1em;content:'+';background-color:#0275d8}table.dataTable.dtr-column>tbody>tr.parent td.dtr-control:before,table.dataTable.dtr-column>tbody>tr.parent th.dtr-control:before,table.dataTable.dtr-column>tbody>tr.parent td.control:before,table.dataTable.dtr-column>tbody>tr.parent th.control:before{content:'-';background-color:#d33333}table.dataTable>tbody>tr.child{padding:0.5em 1em}table.dataTable>tbody>tr.child:hover{background:transparent !important}table.dataTable>tbody>tr.child ul.dtr-details{display:inline-block;list-style-type:none;margin:0;padding:0}table.dataTable>tbody>tr.child ul.dtr-details>li{border-bottom:1px solid #efefef;padding:0.5em 0}table.dataTable>tbody>tr.child ul.dtr-details>li:first-child{padding-top:0}table.dataTable>tbody>tr.child ul.dtr-details>li:last-child{border-bottom:none}table.dataTable>tbody>tr.child span.dtr-title{display:inline-block;min-width:75px;font-weight:bold}div.dtr-modal{position:fixed;box-sizing:border-box;top:0;left:0;height:100%;width:100%;z-index:100;padding:10em 1em}div.dtr-modal div.dtr-modal-display{position:absolute;top:0;left:0;bottom:0;right:0;width:50%;height:50%;overflow:auto;margin:auto;z-index:102;overflow:auto;background-color:#f5f5f7;border:1px solid black;border-radius:0.5em;box-shadow:0 12px 30px rgba(0,0,0,0.6)}div.dtr-modal div.dtr-modal-content{position:relative;padding:1em}div.dtr-modal div.dtr-modal-close{position:absolute;top:6px;right:6px;width:22px;height:22px;border:1px solid #eaeaea;background-color:#f9f9f9;text-align:center;border-radius:3px;cursor:pointer;z-index:12}div.dtr-modal div.dtr-modal-close:hover{background-color:#eaeaea}div.dtr-modal div.dtr-modal-background{position:fixed;top:0;left:0;right:0;bottom:0;z-index:101;background:rgba(0,0,0,0.6)}@media screen and (max-width: 767px){div.dtr-modal div.dtr-modal-display{width:95%}}div.dtr-bs-modal table.table tr:first-child td{border-top:none}table.dataTable.dtr-inline.collapsed.table-sm>tbody>tr>td:first-child:before,table.dataTable.dtr-inline.collapsed.table-sm>tbody>tr>th:first-child:before{top:5px}
div.dts{display:block !important}div.dts tbody th,div.dts tbody td{white-space:nowrap}div.dts div.dts_loading{z-index:1}div.dts div.dts_label{position:absolute;right:10px;background:rgba(0,0,0,0.8);color:white;box-shadow:3px 3px 10px rgba(0,0,0,0.5);text-align:right;border-radius:3px;padding:0.4em;z-index:2;display:none}div.dts div.dataTables_scrollBody{background:repeating-linear-gradient(45deg, #edeeff, #edeeff 10px, #fff 10px, #fff 20px)}div.dts div.dataTables_scrollBody table{z-index:2}div.dts div.dataTables_paginate,div.dts div.dataTables_length{display:none}div.DTS div.dataTables_scrollBody table{background-color:white}
table.dataTable tbody>tr.selected,table.dataTable tbody>tr>.selected{background-color:#0275d8}table.dataTable.stripe tbody>tr.odd.selected,table.dataTable.stripe tbody>tr.odd>.selected,table.dataTable.display tbody>tr.odd.selected,table.dataTable.display tbody>tr.odd>.selected{background-color:#0272d3}table.dataTable.hover tbody>tr.selected:hover,table.dataTable.hover tbody>tr>.selected:hover,table.dataTable.display tbody>tr.selected:hover,table.dataTable.display tbody>tr>.selected:hover{background-color:#0271d0}table.dataTable.order-column tbody>tr.selected>.sorting_1,table.dataTable.order-column tbody>tr.selected>.sorting_2,table.dataTable.order-column tbody>tr.selected>.sorting_3,table.dataTable.order-column tbody>tr>.selected,table.dataTable.display tbody>tr.selected>.sorting_1,table.dataTable.display tbody>tr.selected>.sorting_2,table.dataTable.display tbody>tr.selected>.sorting_3,table.dataTable.display tbody>tr>.selected{background-color:#0273d4}table.dataTable.display tbody>tr.odd.selected>.sorting_1,table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_1{background-color:#026fcc}table.dataTable.display tbody>tr.odd.selected>.sorting_2,table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_2{background-color:#0270ce}table.dataTable.display tbody>tr.odd.selected>.sorting_3,table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_3{background-color:#0270d0}table.dataTable.display tbody>tr.even.selected>.sorting_1,table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_1{background-color:#0273d4}table.dataTable.display tbody>tr.even.selected>.sorting_2,table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_2{background-color:#0274d5}table.dataTable.display tbody>tr.even.selected>.sorting_3,table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_3{background-color:#0275d7}table.dataTable.display tbody>tr.odd>.selected,table.dataTable.order-column.stripe tbody>tr.odd>.selected{background-color:#026fcc}table.dataTable.display tbody>tr.even>.selected,table.dataTable.order-column.stripe tbody>tr.even>.selected{background-color:#0273d4}table.dataTable.display tbody>tr.selected:hover>.sorting_1,table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_1{background-color:#026bc6}table.dataTable.display tbody>tr.selected:hover>.sorting_2,table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_2{background-color:#026cc8}table.dataTable.display tbody>tr.selected:hover>.sorting_3,table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_3{background-color:#026eca}table.dataTable.display tbody>tr:hover>.selected,table.dataTable.display tbody>tr>.selected:hover,table.dataTable.order-column.hover tbody>tr:hover>.selected,table.dataTable.order-column.hover tbody>tr>.selected:hover{background-color:#026bc6}table.dataTable tbody td.select-checkbox,table.dataTable tbody th.select-checkbox{position:relative}table.dataTable tbody td.select-checkbox:before,table.dataTable tbody td.select-checkbox:after,table.dataTable tbody th.select-checkbox:before,table.dataTable tbody th.select-checkbox:after{display:block;position:absolute;top:1.2em;left:50%;width:12px;height:12px;box-sizing:border-box}table.dataTable tbody td.select-checkbox:before,table.dataTable tbody th.select-checkbox:before{content:' ';margin-top:-6px;margin-left:-6px;border:1px solid black;border-radius:3px}table.dataTable tr.selected td.select-checkbox:after,table.dataTable tr.selected th.select-checkbox:after{content:'\2714';margin-top:-11px;margin-left:-4px;text-align:center;text-shadow:1px 1px #B0BED9, -1px -1px #B0BED9, 1px -1px #B0BED9, -1px 1px #B0BED9}div.dataTables_wrapper span.select-info,div.dataTables_wrapper span.select-item{margin-left:0.5em}@media screen and (max-width: 640px){div.dataTables_wrapper span.select-info,div.dataTables_wrapper span.select-item{margin-left:0;display:block}}table.dataTable tbody tr.selected,table.dataTable tbody th.selected,table.dataTable tbody td.selected{color:white}table.dataTable tbody tr.selected a,table.dataTable tbody th.selected a,table.dataTable tbody td.selected a{color:#a2d4ed}
/**fin */
</style>
<style>
/**
* Template Name: Dashio
* Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
* Author: TemplateMag.com
* License: https://templatemag.com/license/
*/
/*
Template Name: DASHIO - Bootstrap 3.1.1 Admin Theme
Template Version: 1.0
Author: Carlos Alvarez
Website: http://Alvarez.is/
*/

/* Import fonts */
@import url(http://fonts.googleapis.com/css?family=Ruda:400,700,900);

/* BASIC THEME CONFIGURATION */
body {
    color: #797979;
	background: #eaeaea;
    font-family: 'Ruda', sans-serif;
    padding: 0px !important;
    margin: 0px !important;
    font-size:13px;
}

ul li {
    list-style: none;
}

a, a:hover, a:focus {
    text-decoration: none;
    outline: none;
}
::selection {

    background: #4ECDC4;
    color: #fff;
}
::-moz-selection {
    background: #4ECDC4;
    color: #fff;
}

#container {
    width: 100%;
    height: 100%;
}

/* Bootstrap Modifications */
.modal-header {
	background: #4ECDC4;
}

.modal-title {
	color: white;
}

.btn-round {
	border-radius: 20px;
	-webkit-border-radius: 20px;
}

.accordion-heading .accordion-toggle {
	display: block;
	cursor: pointer;
	border-top: 1px solid #F5F5F5;
	padding: 5px 0px;
	line-height: 28.75px;
	text-transform: uppercase;
	color: #1a1a1a;
	background-color: #ffffff;
	outline: none !important;
	text-decoration: none;
}



/*Theme Backgrounds*/

.bg-theme {
	background-color: #4ECDC4;
}

.bg-theme02 {
	background-color: #ac92ec;
}

.bg-theme03 {
  background-color: #48cfad;
}

.bg-theme04 {
  background-color: #ed5565;
}
/*Theme Buttons*/

.btn-theme {
  color: #fff;
  background-color: #4ECDC4;
  border-color: #48bcb4;
}
.btn-theme:hover,
.btn-theme:focus,
.btn-theme:active,
.btn-theme.active,
.open .dropdown-toggle.btn-theme {
  color: #fff;
  background-color: #48bcb4;
  border-color: #48bcb4;
}

.btn-theme02 {
  color: #fff;
  background-color: #ac92ec;
  border-color: #967adc;
}
.btn-theme02:hover,
.btn-theme02:focus,
.btn-theme02:active,
.btn-theme02.active,
.open .dropdown-toggle.btn-theme02 {
  color: #fff;
  background-color: #967adc;
  border-color: #967adc;
}

.btn-theme03 {
  color: #fff;
  background-color: #48cfad;
  border-color: #37bc9b;
}
.btn-theme03:hover,
.btn-theme03:focus,
.btn-theme03:active,
.btn-theme03.active,
.open .dropdown-toggle.btn-theme03 {
  color: #fff;
  background-color: #37bc9b;
  border-color: #37bc9b;
}

.btn-theme04 {
  color: #fff;
  background-color: #ed5565;
  border-color: #da4453;
}
.btn-theme04:hover,
.btn-theme04:focus,
.btn-theme04:active,
.btn-theme04.active,
.open .dropdown-toggle.btn-theme04 {
  color: #fff;
  background-color: #da4453;
  border-color: #da4453;
}

.btn-clear-g {
	color: #48bcb4;
	background: transparent;
	border-color: #48bcb4;
}

.btn-clear-g:hover {
	color: white;
}

hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #797979;
}



/*Helpers*/

.centered {
	text-align: center;
}

.goleft {
	text-align: left;
}

.goright {
	text-align: right;
}

.mt {
	margin-top: 25px;
}

.mb {
	margin-bottom: 25px;
}


.no-padding {
	padding: 0 !important;
}

.no-margin {
	margin: 0 !important;
}

/*Exclusive Theme Colors Configuration*/

.label-theme {
	background-color: #4ECDC4;
}

.bg-theme {
	background-color: #4ECDC4;
}

ul.top-menu > li > .logout {
	color: #f2f2f2;
	font-size: 12px;
	border-radius: 4px;
	-webkit-border-radius: 4px;
	border: 1px solid #64c3c2 !important;
	padding: 5px 15px;
	margin-right: 15px;
	background: #4ECDC4;
	margin-top: 15px;
}


/*sidebar navigation*/

#sidebar {
    width: 210px;
    height: 100%;
    position: fixed;
    background: #2f323a;
}

#sidebar h5 {
	color: #f2f2f2;
	font-weight: 700;
}

#sidebar ul li {
    position: relative;
}

#sidebar .sub-menu > .sub li  {
    padding-left: 32px;
}

#sidebar .sub-menu > .sub li:last-child {
    padding-bottom: 10px;
}

/*LEFT NAVIGATION ICON*/
.dcjq-icon {
    height:17px;
    width:17px;
    display:inline-block;
    background: url("../img/nav-expand.png") no-repeat top;
    border-radius:3px;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    position:absolute;
    right:10px;
    top:15px;
}
.active .dcjq-icon {
    background: url("../img/nav-expand.png") no-repeat bottom;
    border-radius:3px;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
}
/*---*/

.nav-collapse.collapse {
    display: inline;
}

ul.sidebar-menu , ul.sidebar-menu li ul.sub{
    margin: -2px 0 0;
    padding: 0;
}

ul.sidebar-menu {
    margin-top: 75px;
}

#sidebar > ul > li > ul.sub {
    display: none;
}

#sidebar > ul > li.active > ul.sub, #sidebar > ul > li > ul.sub > li > a {
    display: block;
}

ul.sidebar-menu li ul.sub li{
    background: #2f323a;
    margin-bottom: 0;
    margin-left: 0;
    margin-right: 0;
}

ul.sidebar-menu li ul.sub li:last-child{
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

ul.sidebar-menu li ul.sub li a {
    font-size: 12px;
    padding: 6px 0;
    line-height: 35px;
    height: 35px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
    color: #aeb2b7;
}

ul.sidebar-menu li ul.sub li a:hover {
	color: white;
	background: transparent;
}

ul.sidebar-menu li ul.sub li.active a {
    color: #4ECDC4;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
    display: block;
}

ul.sidebar-menu li{
    /*line-height: 20px !important;*/
    margin-bottom: 5px;
    margin-left:10px;
    margin-right:10px;
}

ul.sidebar-menu li.sub-menu{
    line-height: 15px;
}

ul.sidebar-menu li a span{
    display: inline-block;
}

ul.sidebar-menu li a{
    color: #aeb2b7;
    text-decoration: none;
    display: block;
    padding: 15px 0 15px 10px;
    font-size: 12px;
    outline: none;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

ul.sidebar-menu li a.active, ul.sidebar-menu li a:hover, ul.sidebar-menu li a:focus {
    background: #4ECDC4;
    color: #fff;
    display: block;

    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}


ul.sidebar-menu li a i {
    font-size: 15px;
    padding-right: 6px;
}

ul.sidebar-menu li a:hover i, ul.sidebar-menu li a:focus i {
    color: #fff;
}

ul.sidebar-menu li a.active i {
    color: #fff;
}


.mail-info, .mail-info:hover {
    margin: -3px 6px 0 0;
    font-size: 11px;
}

/* MAIN CONTENT CONFIGURATION */
#main-content {
    margin-left: 210px;
}

.header, .footer {
    min-height: 60px;
    padding: 0 15px;
}

.header {
    position: fixed;
    left: 0;
    right: 0;
    z-index: 1002;
}

.black-bg {
    background: #22242a;
    border-bottom: 1px solid #393d46;
}

.wrapper {
    display: inline-block;
    margin-top: 60px;
    padding-left: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    padding-top: 0px;
    width: 100%;
}

a.logo {
    font-size: 24px;
    color: #f2f2f2;
    float: left;
    margin-top: 15px;
    text-transform: uppercase;
}

a.logo b {
    font-weight: 900;
}

a.logo:hover, a.logo:focus {
    text-decoration: none;
    outline: none;
}

a.logo span {
    color: #4ECDC4;
}


/*notification*/
#top_menu .nav > li, ul.top-menu > li {
    float: left;
}

.notify-row {
    float: left;
    margin-top: 15px;
    margin-left: 92px;
}

.notify-row .notification span.label {
    display: inline-block;
    height: 18px;
    width: 20px;
    padding: 5px;
}

ul.top-menu > li > a {
    color: #666666;
    font-size: 16px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    border:1px solid #666666 !important;
    padding: 2px 6px;
    margin-right: 15px;
}

ul.top-menu > li > a:hover, ul.top-menu > li > a:focus {
    border:1px solid #b6b6b6 !important;
    background-color: transparent !important;
    border-color: #b6b6b6 !important;
    text-decoration: none;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    color: #b6b6b6 !important;
}

.notify-row .badge {
    position: absolute;
    right: -10px;
    top: -10px;
    z-index: 100;
}

.dropdown-menu.extended {
    max-width: 300px !important;
    min-width: 160px !important;
    top: 42px;
    width: 235px !important;
    padding: 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.176) !important;
    border: none !important;
    border-radius: 4px;
    -webkit-border-radius: 4px;
}

@media screen and (-webkit-min-device-pixel-ratio:0) {
    /* Safari and Chrome */
    .dropdown-menu.extended  {
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.176) !important;
    };
    }

.dropdown-menu.extended li p {
    background-color: #F1F2F7;
    color: #666666;
    margin: 0;
    padding: 10px;
    border-radius: 4px 4px 0px 0px;
    -webkit-border-radius: 4px 4px 0px 0px;
}

.dropdown-menu.extended li p.green {
    background-color: #4ECDC4;
    color: #fff;
}

.dropdown-menu.extended li p.yellow {
    background-color: #fcb322;
    color: #fff;
}

.dropdown-menu.extended li a {
    border-bottom: 1px solid #EBEBEB !important;
    font-size: 12px;
    list-style: none;
}

.dropdown-menu.extended li a {
    padding: 15px 10px !important;
    width: 100%;
    display: inline-block;
}

.dropdown-menu.extended li a:hover {
    background-color: #F7F8F9 !important;
    color: #2E2E2E;
}

.dropdown-menu.tasks-bar .task-info .desc {
    font-size: 13px;
    font-weight: normal;
}

.dropdown-menu.tasks-bar .task-info .percent {
    display: inline-block;
    float: right;
    font-size: 13px;
    font-weight: 600;
    padding-left: 10px;
    margin-top: -4px;
}

.dropdown-menu.extended .progress {
    margin-bottom: 0 !important;
    height: 10px;
}

.dropdown-menu.inbox li a .photo img {
    border-radius: 2px 2px 2px 2px;
    float: left;
    height: 40px;
    margin-right: 4px;
    width: 40px;
}

.dropdown-menu.inbox li a .subject {
    display: block;
}

.dropdown-menu.inbox li a .subject .from {
    font-size: 12px;
    font-weight: 600;
}

.dropdown-menu.inbox li a .subject .time {
    font-size: 11px;
    font-style: italic;
    font-weight: bold;
    position: absolute;
    right: 5px;
}

.dropdown-menu.inbox li a .message {
    display: block !important;
    font-size: 11px;
}

.top-nav  {
    margin-top: 7px;
}

.top-nav ul.top-menu > li .dropdown-menu.logout {
    width: 268px !important;

}

.top-nav li.dropdown .dropdown-menu {
    float: right;
    right: 0;
    left: auto;
}

.dropdown-menu.extended.logout > li {
    float: left;
    text-align: center;
    width: 33.3%;
}

.dropdown-menu.extended.logout > li:last-child {
    float: left;
    text-align: center;
    width: 100%;
    background: #a9d96c;
    border-radius: 0 0 3px 3px;
}

.dropdown-menu.extended.logout > li:last-child > a, .dropdown-menu.extended.logout > li:last-child > a:hover {
    color: #fff;
    border-bottom: none !important;
    text-transform: uppercase;
}

.dropdown-menu.extended.logout > li:last-child > a:hover > i{
    color: #fff;
}

.dropdown-menu.extended.logout > li > a {
    color: #a4abbb;
    border-bottom: none !important;
}

.full-width .dropdown-menu.extended.logout > li > a:hover {
    background: none !important;
    color: #50c8ea !important;
}

.dropdown-menu.extended.logout > li > a:hover {
    background: none !important;
}

.dropdown-menu.extended.logout > li > a:hover i {
    color: #50c8ea;
}

.dropdown-menu.extended.logout > li > a i {
    font-size: 17px;
}

.dropdown-menu.extended.logout > li > a > i {
    display: block;
}

.top-nav ul.top-menu > li > a {
    border: 1px solid #eeeeee;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    padding: 6px;
    background: none;
    margin-right: 0;
}
.top-nav ul.top-menu > li {
    margin-left: 10px;
}

.top-nav ul.top-menu > li > a:hover, .top-nav ul.top-menu > li > a:focus {
    border:1px solid #F1F2F7;
    background: #F1F2F7;

}

.top-nav .dropdown-menu.extended.logout {
    top: 50px;
}

.top-nav .nav .caret {
    border-bottom-color: #A4AABA;
    border-top-color: #A4AABA;
}
.top-nav ul.top-menu > li > a:hover .caret {
    border-bottom-color: #000;
    border-top-color: #000;
}

.log-arrow-up {
    background: url("../img/arrow-up.png") no-repeat;
    width: 20px;
    height: 11px;
    position: absolute;
    right: 20px;
    top: -10px;
}

/*----*/

.notify-arrow {
    border-style: solid;
    border-width: 0 9px 9px;
    height: 0;
    margin-top: 0;
    opacity: 0;
    position: absolute;
    left: 7px;
    top: -18px;
    transition: all 0.25s ease 0s;
    width: 0;
    z-index: 10;
    margin-top: 10px;
    opacity: 1;
}

.notify-arrow-yellow {
    border-color: transparent transparent #FCB322;
    border-bottom-color: #FCB322 !important;
    border-top-color: #FCB322 !important;
}
.notify-arrow-green {
    border-color: transparent transparent #4ECDC4;
    border-bottom-color: #4ECDC4 !important;
    border-top-color: #4ECDC4 !important;
}



/*--sidebar toggle---*/

.sidebar-toggle-box {
    float: left;
    padding-right: 15px;
    margin-top: 20px;
}

.sidebar-toggle-box .fa-bars {
    cursor: pointer;
    display: inline-block;
    font-size: 20px;
}


.sidebar-closed > #sidebar > ul {
    display: none;
}

.sidebar-closed #main-content {
    margin-left: 0px;
}

.sidebar-closed #sidebar {
    margin-left: -180px;
}


/* Dash Side */

.ds {
	background: #d6d9dc;
	padding-top: 20px;
}

.ds h4 {
	font-size: 14px;
	font-weight: 700;
}

.ds i {
	font-size: 14px;
}

.ds .desc {
	border-bottom: 1px dotted #979797;
	display: inline-block;
	padding: 15px 0;
	width: 100%;
}

.ds .desc:hover {
	background: #ffffff;
}

.ds .thumb {
	width: 30px;
	margin: 0 10px 0 20px;
	display: block;
	float: left;
}

.ds .details {
	width: 170px;
	float: left;
}

.ds > .desc p {
	font-size: 11px;
}

.ds p > muted {
	font-size: 9px;
	text-transform: uppercase;
	font-style: italic;
	color: #666666
}

.ds a {
	color: #4ECDC4;
}

/* MAIN CHART CONFIGURATION */
.main-chart {
	padding-top: 20px;
}

.border-head h3 {
    border-bottom: 1px solid #c9cdd7;
    margin-top: 0;
    margin-bottom: 20px;
    padding-bottom: 5px;
    font-weight: normal;
    font-size: 18px;
    display: inline-block;
    width: 100%;
    font-weight: 300;
}

.custom-bar-chart {
    height: 290px;
    margin-top: 20px;
    margin-left: 10px;
    position: relative;
    border-bottom: 1px solid #c9cdd7;
}

.custom-bar-chart .bar {
    height: 100%;
    position: relative;
    width: 6%;
    margin: 0px 4%;
    float: left;
    text-align: center;
    z-index: 10;
}

.custom-bar-chart .bar .title {
    position: absolute;
    bottom: -30px;
    width: 100%;
    text-align: center;
    font-size: 11px;
}

.custom-bar-chart .bar .value {
    position: absolute;
    bottom: 0;
    background: #4ECDC4;
    color: #4ECDC4;
    width: 100%;
    -webkit-border-radius: 5px 5px 0 0;
    -moz-border-radius: 5px 5px 0 0;
    border-radius: 5px 5px 0 0;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}



.custom-bar-chart .bar .value:hover {
    background: #2f2f2f;
    color: #fff;
}

.y-axis {
    color: #555555;
    position: absolute;
    text-align: left;
    width: 100%;
    font-size: 11px;
}

.y-axis li {
    border-top: 1px dashed #dbdce0;
    display: block;
    height: 58px;
    width: 100%;
}

.y-axis li:last-child {
    border-top: none;
}

.y-axis li span {
    display: block;
    margin: -10px 0 0 -60px;
    padding: 0 10px;
    width: 40px;
}


/*Donut Chart Main Page Conf*/
.donut-main {
	display: block;
	text-align: center;
}

.donut-main h4 {
	font-weight: 700;
	font-size: 16px;
}

/* *************************************************************************************
PANELS CONFIGURATIONS
*************************************************************************************** */

/*Panel Size*/

.pn {
	height: 250px;
	box-shadow: 0 2px 1px rgba(0, 0, 0, 0.2);
}


/*Grey Panel*/

.grey-panel {
	text-align: center;
	background: #dfdfe1;
}
.grey-panel .grey-header {
	background: #ccd1d9;
	padding: 3px;
	margin-bottom: 15px;
}
.grey-panel h5 {
	font-weight: 200;
	margin-top: 10px;
}
.grey-panel p {
	margin-left: 5px;
}
/* Specific Conf for Donut Charts*/
.donut-chart p {
	margin-top: 20px;
	font-weight: 700;
	margin-left: 15px;
}
.donut-chart h2 {
	font-weight: 900;
	color: #FF6B6B;
	font-size: 38px;
}

/* Dark Blue*/

.darkblue-panel {
	text-align: center;
	background: #444c57;
}
.darkblue-panel .darkblue-header {
	background: transparent;
	padding: 3px;
	margin-bottom: 15px;
}
.darkblue-panel h1 {
	color: #f2f2f2;
}
.darkblue-panel h5 {
	font-weight: 200;
	margin-top: 10px;
	color: white;
}
.darkblue-panel footer {
	color: white;
}
.darkblue-panel footer h5 {
	margin-left:10px;
	margin-right: 10px;
	font-weight: 700;
}

/*Green Panel*/
.green-panel {
	text-align: center;
	background: #4ECDC4;
}
.green-panel .green-header {
	background: #43b1a9;
	padding: 3px;
	margin-bottom: 15px;
}
.green-panel h5 {
	color: white;
	font-weight: 200;
	margin-top: 10px;
}
.green-panel h3 {
	color: white;
	font-weight: 100;
}
.green-panel p {
	color: white;
}

/*White Panel */
.white-panel {
	text-align: center;
	background: #ffffff;
}
.white-panel .white-header {
	background: #f3f3f3;
	padding: 3px;
	margin-bottom: 15px;
}
.white-panel .small {
	font-size: 10px;
	color: #ccd1d9;
}

/*STOCK CARD Panel*/
.card {
  background: white;
  box-shadow: 0 2px 1px rgba(0, 0, 0, 0.2);
  margin-bottom: 1em;
  height: 250px;
}
.stock .stock-chart {
  background: #00c5de;
}
.stock .stock-chart #chart {
    height: 10.7em;
    background: url(http://i.imgbox.com/abmuNQx2) center bottom no-repeat;
}
.stock .current-price {
  background: #1d2122;
  padding: 10px;
}
.stock .current-price .info abbr {
    display: block;
    color: #f8f8f8;
    font-size: 1.5em;
    font-weight: 600;
    margin-top: 0.18em;
}
.stock .current-price .changes {
    text-align: right;
}
.stock .changes .up {
	color: #4fd98b
}
.stock .current-price .changes .value {
      font-size: 1.8em;
      font-weight: 700;
}
.stock .summary {
    color: #2f2f2f;
    display: block;
    background: #f2f2f2;
    padding: 10px;
	text-align: center;
}
.stock .summary strong {
	font-weight: 900;
	font-size: 14px;
}

/*Content Panel*/
.content-panel {
	background: #ffffff;
	box-shadow: 0px 3px 2px #aab2bd;
	padding-top: 15px;
	padding-bottom: 5px;
}
.content-panel h4 {
	margin-left: 10px;
}

/*WEATHER PANELS*/

/* Weather 1 */
.weather {
	background: url(../img/weather.jpg) no-repeat center top;
	text-align: center;
	background-position: center center;
}
.weather i {
	color: white;
	margin-top: 45px;
}
.weather h2 {
	color: white;
	font-weight: 900;
}
.weather h4 {
	color: white;
	font-weight: 900;
	letter-spacing: 1px;
}

/* Weather 2 */
.weather-2 {
	background: #e9f0f4;
}
.weather-2 .weather-2-header {
	background: #54bae6;
	padding-top: 5px;
	margin-bottom: 5px;
}
.weather-2 .weather-2-header p {
	color: white;
	margin-left: 5px;
	margin-right: 5px;
}
.weather-2 .weather-2-header p small {
	font-size: 10px;
}
.weather-2 .data {
	margin-right: 10px;
	margin-left: 10px;
	color: #272b34;
}
.weather-2 .data h5 {
	margin-top: 0px;
	font-weight: lighter;
}
.weather-2 .data h1{
	margin-top: 2px;
}

/* Weather 3 */
.weather-3 {
	background: #ffcf00;
}

.weather-3 i {
	color: white;
	margin-top: 30px;
	font-size: 70px;
}
.weather-3 h1 {
	margin-top: 10px;
	color: white;
	font-weight: 900;
}
.weather-3 .info {
	background: #f2f2f2;
}
.weather-3 .info i {
	font-size: 15px;
	color: #c2c2c2;
	margin-bottom: 0px;
	margin-top: 10px;
}
.weather-3 .info h3 {
	font-weight: 900;
	margin-bottom: 0px;
}
.weather-3 .info p {
	margin-left: 10px;
	margin-right: 10px;
	margin-bottom: 16px;
	color: #c2c2c2;
	font-size: 15px;
	font-weight: 700;
}


/* Message Panel */
.message-p {
	background: #f5f5f5;
}
.message-p .message-header {
	background: #dcdfe3;
	padding: 3px;
	margin-bottom: 15px;
	text-align: center;
}
.message-p h5 {
	font-weight: 200;
	margin-top: 10px;
}
.message-p p {
	margin-left: 10px;
}
.message-p .small {
	font-size: 11px;
	color: #aab2bd;
	margin-top: -10px;
}
.message-p name {
	color: #ed5565;
	font-weight: 700;
}
.message-p .message {
	font-size: 12px;
}
.message-p .form-inline {
	margin-left: 10px;
}
.message-p .form-inline .form-group {
	width: 80%;
}
.message-p .form-inline .form-control {
	width: 100%
}

/*Twitter Panel*/
.twitter-panel {
	background: #4fc1e9;
	text-align: center;
}
.twitter-panel i {
	color: white;
	margin-top: 40px;
}
.twitter-panel p {
	color: #f5f5f5;
	margin: 10px;
}
.twitter-panel .user {
	color: white;
	font-weight: 900;
}


/* Instagram Panel*/
.instagram-panel {
	background: url(../img/instagram.jpg) no-repeat center top;
	text-align: center;
	background-position: center center;
}
.instagram-panel i {
	color: white;
	margin-top: 35px;
}
.instagram-panel p {
	margin: 5px;
	color: white;
}

/* Product Panel */
.product-panel {
	background: #dadad2;
	text-align: center;
	padding-top: 50px;
	height: 100%;
}

/* Product Panel 2*/
.product-panel-2 {
	background: #dadad2;
	text-align: center;
}
.product-panel-2 .badge {
	position: absolute;
	top: 20px;
	left: 35px;
}
.badge-hot {
	background: #ed5565;
	width: 70px;
	height: 70px;
	line-height: 70px;
	font-size: 18px;
	color: #fff;
	text-align: center;
	border-radius: 100%;
}

/* Soptify Panel */
#spotify {
	background: url(../img/lorde.jpg) no-repeat center top;
	margin-top: -15px;
	background-attachment: relative;
	background-position: center center;
	min-height: 220px;
	width: 100%;
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
#spotify .btn-clear-g {
	top: 15%;
	right: 10px;
	position: absolute;
	margin-top: 5px;
}
#spotify .sp-title {
	bottom: 15%;
	left: 25px;
	position: absolute;
	color: #efefef;
}
#spotify .sp-title h3 {
	font-weight: 900;
}
#spotify .play{
	bottom: 18%;
	right: 25px;
	position: absolute;
	color: #efefef;
	font-size: 20px
}
.followers {
	margin-left: 5px;
	margin-top: 5px;
}

/* BLOG PANEL */
#blog-bg {
	background: url(../img/blog-bg.jpg) no-repeat center top;
	margin-top: -15px;
	background-attachment: relative;
	background-position: center center;
	min-height: 150px;
	width: 100%;
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
#blog-bg .badge {
	position: absolute;
	top: 20px;
	left: 35px;
}
.badge-popular {
	background: #3498db;
	width: 70px;
	height: 70px;
	line-height: 70px;
	font-size: 13px;
	color: #fff;
	text-align: center;
	border-radius: 100%;
}
.blog-title {
	background: rgba(0,0,0,0.5);
	bottom: 100px;
	padding: 6px;
	color: white;
	font-weight: 700;
	position: absolute;
	display: block;
	width: 120px;
}
.blog-text {
	margin-left: 8px;
	margin-right: 8px;
	margin-top: 15px;
	font-size: 12px;
}

/* Calendar Configuration */
#calendar {
	color: white;
	padding: 0px !important;
}
.calendar-month-header {
	background: #43b1a9;
}

/* TODO PANEL */
.steps{
  display: block;
}
.steps input[type=checkbox] {
  display: none;
}
.steps input[type=submit]{
  background: #f1783c;
  border: none;
  padding: 0px;
  margin: 0 auto;
  width: 100%;
  height: 55px;
  color: white;
  text-transform: uppercase;
  font-weight: 900;
  font-size: 11px;
  letter-spacing: 1px;
  cursor: pointer;
  transition: background 0.5s ease
}
.steps input[type=submit]:hover{
  background: #8fde9c;
}
.steps label{
  background: #393D40;
  height: 65px;
  line-height: 65px;
  width: 100%;
  display: block;
  border-bottom: 1px solid #44494e;
  color: #889199;
  text-transform: uppercase;
  font-weight: 900;
  font-size: 11px;
  letter-spacing: 1px;
  text-indent: 52px;
  cursor: pointer;
  transition: all 0.7s ease;
  margin: 0px;
}
.steps label:before{
  content:"";
  width: 12px;
  height: 12px;
  display: block;
  position: absolute;
  margin: 26px 0px 0px 18px;
  border-radius: 100%;
  transition: border 0.7s ease
}
.steps label:hover{
  background: #2B2E30;
  color: #46b7e5
}
.steps label:hover:before{
  border: 1px solid #46b7e5;
}
#op1:checked ~ label[for=op1]:before,
#op2:checked ~ label[for=op2]:before,
#op3:checked ~ label[for=op3]:before{
  border: 2px solid #96c93c;
  background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAHCAYAAAA1WQxeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAGFJREFUeNpinHLMhgEHKADia0xQThIQs6JJ9gPxZhYQAcS6QHwDiI8hSYJAC0gBPxDLAvFcIJ6JJJkDxFNBVtgBcQ8Qa6BLghgwN4A4a9ElQYAFSj8C4mwg3o8sCQIAAQYA78QTYqnPZuEAAAAASUVORK5CYII=') no-repeat center center;
}

/* PROFILE PANELS */
/* Profile 01*/
#profile-01 {
	background: url(../img/profile-01.jpg) no-repeat center top;
	margin-top: -15px;
	background-attachment: relative;
	background-position: center center;
	min-height: 150px;
	width: 100%;
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
#profile-01 h3 {
	color: white;
	padding-top: 50px;
	margin: 0px;
	text-align: center;
}
#profile-01 h6 {
	color: white;
	text-align: center;
	margin-bottom: 0px;
	font-weight: 900;
}
.profile-01 {
	background: #4ECDC4;
	height: 50px;
}
.profile-01:hover {
	background: #2f2f2f;
  -webkit-transition: background-color 0.6s;
  -moz-transition: background-color 0.6s;
  -o-transition: background-color 0.6s;
  transition: background-color 0.6s;
  cursor: pointer;
}
.profile-01 p {
	color: white;
	padding-top: 15px;
	font-weight: 400;
	font-size: 15px;
}

/* Profile 02*/
#profile-02 {
	background: url(../img/profile-02.jpg) no-repeat center top;
	margin-top: -15px;
	background-attachment: relative;
	background-position: center center;
	min-height: 200px;
	width: 100%;
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
    background-size: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
#profile-02 .user {
	padding-top: 40px;
	text-align: center;
}
#profile-02 h4 {
	color: white;
	margin:0px;
	padding-top: 8px;
}
.pr2-social a {
	color: #cdcdcd;
}
.pr2-social a:hover {
	color: #4ECDC4;
}
.pr2-social i {
	margin-top: 15px;
	margin-right: 12px;
	font-size: 20px;
}


/*spark line*/
.chart {
    display: inline-block;
    text-align: center;
    width: 100%;
}
.chart .heading {
    text-align: left;
}
.chart .heading span {
    display: block;
}
.panel.green-chart .chart-tittle {
    font-size: 16px;
    padding: 15px;
    display: inline-block;
    font-weight:normal;
    background: #99c262;
    width: 100%;
    -webkit-border-radius: 0px 0px 4px 4px;
    border-radius: 0px 0px 4px 4px;
}
#barchart {
    margin-bottom: -15px;
    display: inline-block;
}
.panel.green-chart .chart-tittle .value {
    float: right;
    color: #c0f080;
}
.panel.green-chart {
    background: #a9d96c;
    color: #fff;
}
.panel.terques-chart {
    background: transparent;
    color: #797979;
}
.panel.terques-chart .chart-tittle .value {
    float: right;
    color: #fff;
}
.panel.terques-chart .chart-tittle .value a {
    color: #2f2f2f;
    font-size: 12px;
}
.panel.terques-chart .chart-tittle .value a:hover, .panel.terques-chart .chart-tittle .value a.active {
    color: #4ECDC4;
    font-size: 12px;
}
.panel.terques-chart .chart-tittle {
    font-size: 16px;
    padding: 15px;
    display: inline-block;
    font-weight:normal;
    background: #39b7ac;
    width: 100%;
    -webkit-border-radius: 0px 0px 4px 4px;
    border-radius: 0px 0px 4px 4px;
}
.inline-block {
    display: inline-block;
}

/* showcase background */
.showback {
	background: #ffffff;
	padding: 15px;
	margin-bottom: 15px;
	box-shadow: 0px 3px 2px #aab2bd;
}

/* Font Awesome Showcase */
.fontawesome-list .fa-hover a {
	display: block;
	color: #222;
	line-height: 32px;
	height: 32px;
	padding-left: 10px;
	border-radius: 4px;
}

.fontawesome-list i {
	margin-right: 8px;
}

/* Grid Showcase*/

	margin-bottom: 15px;
}

.show-grid [class^=col-] {
	padding-top: 10px;
	padding-bottom: 10px;
	background-color: #ccc;
	border: 1px solid #ddd;
}

.show-grid [class^=col-]:hover {
	background-color: white;
}

/* Calendar Events - Calendar.html*/
.external-event {
	cursor: move;
	display: inline-block !important;
	margin-bottom: 7px !important;
	margin-right: 7px !important;
	padding: 10px;
}

.drop-after {
	padding-top: 15px;
	margin-top: 15px;
	border-top: 1px solid #ccc;
}

.fc-state-default, .fc-state-default .fc-button-inner {
	background: #f2f2f2;
}

.fc-state-active .fc-button-inner {
	background: #FFFFFF;
}

/* Gallery Configuration */
.photo-wrapper {
  display: block;
  position: relative;
  overflow: hidden;
  background-color: #4ECDC4;
  -webkit-transition: background-color 0.4s;
  -moz-transition: background-color 0.4s;
  -o-transition: background-color 0.4s;
  transition: background-color 0.4s;
}
.project .overlay {
  position: absolute;
  text-align: center;
  color: #fff;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  transition: opacity 0.4s;

}

.project:hover .photo-wrapper {
  background-color: #4ECDC4;
	background-image:url(../img/zoom.png);
	background-repeat:no-repeat;
	background-position:center;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	position: relative;
}
.project:hover .photo {
  opacity: 10;
  filter: alpha(opacity=4000);
  opacity: 0.1;
  filter: alpha(opacity=40);
}
.project:hover .overlay {
  opacity: 100;
  filter: alpha(opacity=10000);
  opacity: 1;
  filter: alpha(opacity=100);
}



/* EZ Checklist */
.ez-checkbox {
	margin-right: 5px;
}

.ez-checkbox, .ez-radio {
	height: 20px;
	width: 20px;
}

.brand-highlight {
background: #fffbcc !important;
}


/* FORMS CONFIGURATION */
.form-panel {
	background: #ffffff;
	margin: 10px;
	padding: 10px;
	box-shadow: 0px 3px 2px #aab2bd;
	text-align: left;
}

label {
	font-weight: 400;
}

.form-horizontal.style-form .form-group {
	border-bottom: 1px solid #eff2f7;
	padding-bottom: 15px;
	margin-bottom: 15px;
}

.round-form {
	border-radius: 500px;
	-webkit-border-radius: 500px;
}

@media (min-width: 768px) {
		.form-horizontal .control-label {
		text-align: left;
	}
}

#focusedInput {
	border: 1px solid #ed5565;
	box-shadow: none;
}

.add-on {
	float: right;
	margin-top: -37px;
	padding: 3px;
	text-align: center;
}

.add-on .btn {
	height: 34px;
}

/* TOGGLE CONFIGURATION */
.has-switch {
    border-radius: 30px;
    -webkit-border-radius: 30px;
    display: inline-block;
    cursor: pointer;
    line-height: 1.231;
    overflow: hidden;
    position: relative;
    text-align: left;
    width: 80px;
    -webkit-mask: url('../img/mask.png') 0 0 no-repeat;
    mask: url('../img/mask.png') 0 0 no-repeat;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
.has-switch.deactivate {
    opacity: 0.5;
    filter: alpha(opacity=50);
    cursor: default !important;
}
.has-switch.deactivate label,
.has-switch.deactivate span {
    cursor: default !important;
}
.has-switch > div {
    width: 162%;
    position: relative;
    top: 0;
}
.has-switch > div.switch-animate {
    -webkit-transition: left 0.25s ease-out;
    -moz-transition: left 0.25s ease-out;
    -o-transition: left 0.25s ease-out;
    transition: left 0.25s ease-out;
    -webkit-backface-visibility: hidden;
}
.has-switch > div.switch-off {
    left: -63%;
}
.has-switch > div.switch-off label {
    background-color: #7f8c9a;
    border-color: #bdc3c7;
    -webkit-box-shadow: -1px 0 0 rgba(255, 255, 255, 0.5);
    -moz-box-shadow: -1px 0 0 rgba(255, 255, 255, 0.5);
    box-shadow: -1px 0 0 rgba(255, 255, 255, 0.5);
}
.has-switch > div.switch-on {
    left: 0%;
}
.has-switch > div.switch-on label {
    background-color: #41cac0;
}
.has-switch input[type=checkbox] {
    display: none;
}
.has-switch span {
    cursor: pointer;
    font-size: 14.994px;
    font-weight: 700;
    float: left;
    height: 29px;
    line-height: 19px;
    margin: 0;
    padding-bottom: 6px;
    padding-top: 5px;
    position: relative;
    text-align: center;
    width: 50%;
    z-index: 1;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: 0.25s ease-out;
    -moz-transition: 0.25s ease-out;
    -o-transition: 0.25s ease-out;
    transition: 0.25s ease-out;
    -webkit-backface-visibility: hidden;
}
.has-switch span.switch-left {
    border-radius: 30px 0 0 30px;
    background-color: #2A3542;
    color: #41cac0;
    border-left: 1px solid transparent;
}
.has-switch span.switch-right {
    border-radius: 0 30px 30px 0;
    background-color: #bdc3c7;
    color: #ffffff;
    text-indent: 7px;
}
.has-switch span.switch-right [class*="fui-"] {
    text-indent: 0;
}
.has-switch label {
    border: 4px solid #2A3542;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    float: left;
    height: 29px;
    margin: 0 -21px 0 -14px;
    padding: 0;
    position: relative;
    vertical-align: middle;
    width: 29px;
    z-index: 100;
    -webkit-transition: 0.25s ease-out;
    -moz-transition: 0.25s ease-out;
    -o-transition: 0.25s ease-out;
    transition: 0.25s ease-out;
    -webkit-backface-visibility: hidden;
}
.switch-square {
    border-radius: 6px;
    -webkit-border-radius: 6px;
    -webkit-mask: url('../img/mask.png') 0 0 no-repeat;
    mask: url('../img/mask.png') 0 0 no-repeat;
}
.switch-square > div.switch-off label {
    border-color: #7f8c9a;
    border-radius: 6px 0 0 6px;
}
.switch-square span.switch-left {
    border-radius: 6px 0 0 6px;
}
.switch-square span.switch-left [class*="fui-"] {
    text-indent: -10px;
}
.switch-square span.switch-right {
    border-radius: 0 6px 6px 0;
}
.switch-square span.switch-right [class*="fui-"] {
    text-indent: 5px;
}
.switch-square label {
    border-radius: 0 6px 6px 0;
    border-color: #41cac0;
}


/* TABLES CONF*/
.dataTables_paginate.paging_bootstrap.pagination {
	float: right;
	margin-top: -5px;
	margin-bottom: 15px;
}

.dataTables_paginate {
	padding: 15px 0;
}
.dataTables_paginate.paging_bootstrap.pagination li {
	float: left;
	margin: 0 1px;
	border: 1px solid #ddd;
	border-radius: 3px;
	-webkit-border-radius: 3px;
}
ul li {
	list-style: none;
}
.dataTables_paginate.paging_bootstrap.pagination li a {
	color: #797979;
	padding: 5px 10px;
	display: inline-block;
}
.dataTables_paginate.paging_bootstrap.pagination li:hover a, .dataTables_paginate.paging_bootstrap.pagination li.active a {
	color: #fff;
	background: #4ECDC4;
	border-radius: 3px;
	-webkit-border-radius: 3px;
}

/*LOGIN CONFIGURATION PAGE*/
.form-login {
	max-width: 330px;
	margin: 100px auto 0;
	background: #fff;
	border-radius: 5px;
	-webkit-border-radius: 5px;
}

.form-login h2.form-login-heading {
	margin: 0;
	padding: 25px 20px;
	text-align: center;
	background: #4ecdc4;
	border-radius: 5px 5px 0 0;
	-webkit-border-radius: 5px 5px 0 0;
	color: #fff;
	font-size: 20px;
	text-transform: uppercase;
	font-weight: 300;
}
.login-wrap {
	padding: 20px;
}
.login-wrap .registration {
	text-align: center;
}
.login-social-link {
	display: block;
	margin-top: 20px;
	margin-bottom: 15px;
}


/*LOCK SCREEN CONF*/
#showtime {
	width: 100%;
	color: #fff;
	font-size: 50px;
	margin-bottom: 30px;
	margin-top: 250px;
	display: inline-block;
	text-align: center;
	font-weight: 400;
}

.lock-screen {
	text-align: center;
}

.lock-screen a {
	color: white;
}

.lock-screen a:hover {
	color: #48cfad
}

.lock-screen i {
	font-size: 60px;
}

.lock-screen .modal-content {
	position: relative;
	background-color: #f2f2f2;
	background-clip: padding-box;
	border: 1px solid #999;
	border: 1px solid rgba(0, 0, 0, .2);
	border-radius: 5px;
}


/* PROFILE PAGE CONF */
.profile-pic img {
	width: 130px;
	height: 130px;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	border: 10px solid #f1f2f7;
	margin-top: 20px;
}

.profile-text h6 {
	margin-top: -10px;
	margin-bottom: 20px;
	color: #d3d3d3;
}

.profile-text h3 {
	font-weight: 700;
	color: #48cfad;
}

.profile-text h4 {
	color: #48cfad;
}

profile-text p {
	margin-left: 10px;
}

.right-divider {
	border-right: 1px solid #d3d3d3;
	height: 100%;
}

.panel-heading .nav {
	border: medium none;
	font-size: 13px;
	margin-left: 0px;
	margin-right: 0px;
	text-transform: uppercase;
}

.nav-tabs {
	background: #e0e1e7;
}

.nav-tabs a {
	color: #2f2f2f;
}

.grey-style {
	background: #f2f4f6;
	padding: 10px;
	height: 45px;
}

.detailed h4 {
	text-align: center;
	text-transform: uppercase;
	border-bottom: 1px solid #e2e2e2;
	font-weight: 700;
	color: #48cfad;
}

ul.my-friends {
	margin: 0px;
	margin-top: 16px;
	margin-left: 10px;
	padding: 0;
}

ul.my-friends li .friends-pic {
	display: inline-block;
	float: left;
	overflow: hidden;
	margin: 4px;
}

.recent-activity {
	border-collapse: collapse;
	border-spacing: 0;
	display: table;
	position: relative;
	table-layout: fixed;
	width: 100%;
}

.recent-activity:before {
	background-color: #eeeeee;
	bottom: 0;
	content: "";
	left: 50%;
	position: absolute;
	top: 50px;
	width: 2px;
	z-index: 0;
}

.activity-icon {
	border-radius: 50%;
	-webkit-border-radius: 50%;
	color: #FFFFFF;
	height: 30px;
	line-height: 30px;
	text-align: center;
	width: 30px;
	margin: 20px auto 20px;
	position: relative;
}

.activity-panel {
	padding: 15px 30px;
	background: #f2f2f2;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	position: relative;
	text-align: center;
}

.activity-panel h5{
	font-weight: 700;
}

/* INVOICE CONF */
.well.green {
	background-color: #48cfad;
	color: #fff;
	border: none;
}
.well.well-small {
	padding: 13px;
	width: auto;
}
.invoice-body {
	padding: 30px;
}
.invoice-body h1 {
	font-weight: 900;
}
.invoice-body h4 {
	margin-left: 0px;
}

/* Map Wrap*/
#map {
	width: 100%;
	height: 450px;
}


/*PRICING TABLE*/
.custom-box {
	background:#FFFFFF;
	border: 1px solid #DCDBD7;
	margin: 30px 0;
	padding: 30px 20px 35px;
	text-align: center;
}
.servicetitle hr {
	border: 0 none;
	height:3px;
	margin: 10px auto;
	width: 80px;
	background-color:#4ECDC4;
}
.icn-main-container {
	position: relative;
}
.icn-container {
	display: inline-block;
	width: 100px;
	height: 100px;
	border-radius:500px;
	text-align: center;
	margin:10px 0;
	font-weight:600;
	font-size: 2.4em;
	line-height: 100px;
	color: #fff;
	background-color:#4ECDC4;
		-webkit-transition: all 0.6s ease-in-out;
		transition: all 0.6s ease-in-out;
}
.icn-container.active,
.icn-container:hover {
	background:#2B2E31 !important;
}
.pricing {list-style:none; padding:10px 0 20px;}
.pricing li {
	border-bottom: 1px solid #DCDBD7;
	font-size: 13px;
	font-weight: 100;
	line-height: 34px;
	margin: 0 auto;
	padding: 0;
	text-align: center;
	width: 70%;
	-webkit-transition: background-color .4s linear, color .4s linear;
	-moz-transition: background-color .4s linear, color .4s linear;
	-o-transition: background-color .4s linear, color .4s linear;
	-ms-transition: background-color .4s linear, color .4s linear;
	transition: background-color .4s linear, color .4s linear; }

.pricing li:last-child {border-bottom:0px solid #fff;}


/* FAQ CONF */
.dmbox {
	margin: 0;
	border: 0;
	border: 1px solid #EDEDED;
	background-color: #fff;
	padding: 9px 18px;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	text-align:center;
	-webkit-transition: background 0.3s ease-out;
	transition: background 0.3s ease-out;
}

.dm-icon {
	display: inline-block;
	cursor: pointer;
	margin: 15px;
	width: 105px;
	height: 105px;
	border-radius: 50%;
	text-align: center;
	position: relative;
	z-index: 1;
	background:#2B2E31;
	color: #ffffff;
}
.dm-icon:after {
	pointer-events: none;
	position: absolute;
	width: 100%;
	height: 100%;
	border-radius: 50%;
	content: '';
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
}

.dm-icon:before {
	speak: none;
	line-height: 105px;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	display: block;
	-webkit-font-smoothing: antialiased;
}

.dm-icon:active,
.dm-icon:hover {
	background: #4ECDC4
}


/* 404 & 500 Error Pages Conf*/
.p404 img {
	margin-top: 120px;
}

.p404 h1 {
	font-weight: 900;
}


/* MAIL CONFIGURATION - INBOX, MAIL COMPOSE & MAIL VIEW  */
.mail-nav {
    margin:15px -15px 0 -15px;
}
.mail-nav li a {
    border-radius:0;
    -webkit-border-radius:0;
    border-top:1px solid #f2f3f6;
    padding:15px;
    border-right:3px solid rgba(0,0,0,0);
    color: #a2a2a2;
}
.mail-nav>li>a:hover,.mail-nav>li>a:focus {
    background:#fafafa;
    color:#4ECDC4;
    border-right:3px solid #1fb5ad;
}
.mail-nav>li.active>a,.mail-nav>li.active>a:hover,.mail-nav>li.active>a:focus {
    background:#fafafa;
    color:#4ECDC4;
    border-right:3px solid #4ECDC4;
}
.mail-nav>li+li {
    margin-left:0;
    margin-top:0px;
}
.mail-nav i {
    font-size:16px;
    margin-right:10px;
}
.inbox-notification {
    margin-top:-2px;
}
.user-head .inbox-avatar {
    width:65px;
    float:left;
}
.user-head .inbox-avatar img {
    border-radius:4px;
    -webkit-border-radius:4px;
}
.user-head .user-name {
    display:inline-block;
    margin:0 0 0 10px;
}
.user-head .user-name h5 {
    font-size:14px;
    margin-top:15px;
    margin-bottom:0;
    font-weight:300;
}
.user-head .user-name h5 a {
    color:#fff;
}
.user-head .user-name span a {
    font-size:12px;
    color:#87e2e7;
}
a.mail-dropdown {
    background:#80d3d9;
    padding:3px 5px;
    font-size:10px;
    color:#01a7b3;
    border-radius:2px;
    margin-top:20px;
}
.inbox-body {
    padding:20px;
}
.btn-compose {
    background:#4ECDC4;
    padding:12px 0;
    text-align:center;
    width:100%;
    color:#fff;
}
.btn-compose:hover,.btn-compose:focus {
    background:#1ca59e;
    color:#fff;
}

.btn-compose i {
	padding: 5px;
}

ul.inbox-nav {
    display:inline-block;
    width:100%;
    margin:0;
    padding:0;
}
.inbox-divider {
    border-bottom:1px solid #d5d8df;
}
.inbox-action {
    margin-top:50px;
}
.src-position {
    margin-top:-7px;
}
.mail-src-position {
    margin-top:-3px;
}
ul.labels-info {
    border-bottom:1px solid #f1f2f7;
    margin-bottom:10px;
}
ul.inbox-nav li {
    display:inline-block;
    line-height:45px;
    width:100%;
}
ul.inbox-nav li a {
    color:#6a6a6a;
    line-height:45px;
    width:100%;
    display:inline-block;
    padding:0 20px;
}
ul.inbox-nav li a:hover,ul.inbox-nav li.active a,ul.inbox-nav li a:focus {
    color:#6a6a6a;
    background:#d5d7de;
}
ul.inbox-nav li a i {
    padding-right:10px;
    font-size:16px;
    color:#6a6a6a;
}
ul.inbox-nav li a span.label {
    margin-top:13px;
}
ul.labels-info li h4 {
    padding-top:5px;
    color:#5c5c5e;
    font-size:15px;
    text-transform:uppercase;
}
ul.labels-info li {
    margin:0;
}
ul.labels-info li a {
    color:#6a6a6a;
    border-radius:0;
    padding-left:0;
    padding-right:0;
}
ul.labels-info li a:hover,ul.labels-info li a:focus {
    color:#6a6a6a;
    background:none;
}
ul.labels-info li img {
    margin-right:10px;
}
.nav.nav-pills.nav-stacked.labels-info p {
    margin-bottom:0;
    padding:0 22px;
    color:#9d9f9e;
    font-size:11px;
}
.inbox-head {
    padding:20px;
    background:#41cac0;
    color:#fff;
    border-radius:0 4px 0 0;
    -webkit-border-radius:0 4px 0 0;
    min-height:80px;
}
.inbox-head h3 {
    margin:0;
    display:inline-block;
    padding-top:6px;
    font-weight:300;
}
.inbox-head .sr-input {
    height:40px;
    border:none;
    box-shadow:none;
    padding:0 10px;
    float:left;
    border-radius:4px 0 0 4px;
    color:#8a8a8a;
}
.inbox-head .sr-btn {
    height:40px;
    border:none;
    background:#00a6b2;
    color:#fff;
    padding:0 20px;
    border-radius:0 4px 4px 0;
    -webkit-border-radius:0 4px 4px 0;
}
.wht-bg {
    background:#fff;
}
.wht-bg h4 {
    font-size:24px;
    color:#a2a2a2;
    font-weight:300;
}
.table-inbox-wrap {
    margin:0 -15px;
}
.mail-checkbox {
    margin-right:10px;
}
.table-inbox {
    margin:0;
}
.table-inbox tr td {
    padding:12px !important;
}
.table-inbox tr td:first-child {
    width:5%;
}
.table-inbox tr td:first-child .icheckbox_minimal {
    margin-left:15px;
}
.table-inbox tr td:hover {
    cursor:pointer;
}
.table-inbox tr td .fa-star.inbox-started,.table-inbox tr td .fa-star:hover {
    color:#f78a09;
}
.table-inbox tr td .fa-star {
    color:#d5d5d5;
}
.table-inbox tr.unread td {
    font-weight:600;
    background:#f7f7f7;
}

.table-inbox tr.unread a {
    color: #32323a;
}
.table-inbox tr a {
    color: #767676;
}

ul.inbox-pagination {
    float:right;
}
ul.inbox-pagination li {
    float:left;
}

.pagination li a {
    color: #32323a;
}
.mail-option {
    display:inline-block;
    margin-bottom:10px;
    width:100%;
}
.mail-option .chk-all {
    float:left;
}
.mail-option .chk-all,.mail-option .btn-group {
    margin-right:5px;
}
.mail-option .chk-all,.mail-option .btn-group a.btn {
    border:1px solid #e7e7e7;
    padding:5px 10px;
    display:inline-block;
    background:#fcfcfc;
    color:#afafaf;
    border-radius:3px !important;
    -webkit-border-radius:3px !important;
}
.inbox-pagination a.np-btn {
    border:1px solid #e7e7e7;
    padding:5px 15px;
    display:inline-block;
    background:#fcfcfc;
    color:#afafaf;
    border-radius:3px !important;
    -webkit-border-radius:3px !important;
}
.mail-option .chk-all input[type=checkbox] {
    margin-top:0;
}
.mail-option .btn-group a.all {
    padding:0;
    border:none;
}
.inbox-pagination a.np-btn {
    margin-left:5px;
}
.inbox-pagination li span {
    display:inline-block;
    margin-top:7px;
    margin-right:5px;
}
.fileinput-button {
    border:1px solid #e6e6e6;
    background:#eeeeee;
}
.inbox-body .modal .modal-body input,.inbox-body .modal .modal-body textarea {
    border:1px solid #e6e6e6;
    box-shadow:none;
}
.btn-send,.btn-send:hover {
    background:#00A8B3;
    color:#fff;
}
.btn-send:hover {
    background:#009da7;
}
.modal-header h4.modal-title {
    font-weight:300;
    font-family:'Open Sans',sans-serif;
}
.modal-body label {
    font-weight:400;
    font-family: 'Open Sans',sans-serif;
}

.compose-mail {
    width: 100%;
    display: inline-block;
    position: relative;
    margin-top: 20px;
}


.compose-mail .compose-options {
    color: #979797;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    position: absolute;
    right: 10px;
    top: 7px;
}

.compose-mail input, .compose-mail input:focus {
    border:none;
    padding: 0;
    width: 80%;
    float: left;
}
.compose-mail .form-group {
    border:1px solid #F2F3F6;
    display: inline-block;
    width: 100%;
    margin-bottom: 0;
}

.compose-mail .form-group label {
    line-height: 34px;
    width: 10%;
    float: left;
    padding-left: 5px;
    margin-bottom: 0;
}

.compose-editor input {
    margin-top: 15px;
}

.compose-editor {
    margin-bottom: 15px;
    display: inline-block;
    width: 100%;
}

.compose-btn {
    float: left;
    margin-top: 6px;
}

.mail-header h4 {
    font-weight: 300;
}

.mail-sender, .attachment-mail {
    width: 100%;
    display: inline-block;
    margin: 20px 0;
    border-top:1px solid #EFF2F7 ;
    border-bottom:1px solid #EFF2F7 ;
    padding: 10px 0;

}

.mail-sender img {
    width: 30px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
}

.mail-sender .date {
    line-height: 30px;
    margin-bottom: 0;
    text-align: right;
}

.view-mail a, .attachment-mail a:hover {
    color: #4ECDC4;
}

.attachment-mail a{
    color: #4ECDC4;
}

.attachment-mail ul li  {
    float: left;
    width: 200px;
    margin-right: 15px;
    margin-top: 15px;
    list-style: none;
}

.attachment-mail ul li a.atch-thumb img {
    width: 200px;
    height: 180px;
    margin-bottom: 10px;
}

.attachment-mail ul li a.name span {
    float: right;
    color: #767676;
}


/*CHAT ROOM & LOBBY CONFIGURATION*/

/*chat room*/
.chat-room {
    border-collapse: collapse;
    border-spacing: 0;
    display: table;
    table-layout: fixed;
    width: 100%;
    position: relative;
}

.chat-room aside {
    display: table-cell;
    float: none;
    height: 100%;
    padding: 0;
    vertical-align: top;
}

.chat-room .mid-side {
    width: 75%;
    background: #fff;
    border-right: 1px solid #e5e8ef;
}

.chat-room .right-side {
    width: 25%;
    background: #fff;
}

.chat-room .right-side .user-head {
    background: #3498db;
    color: #FFFFFF;
    min-height: 70px;
    padding: 10px;
    border-left: 1px solid #3498db;
    margin-left: -1px;
    position: relative;
}


.chat-room .user-head i {
   float: left;
   font-size: 40px;
   margin-right: 10px;
}

.chat-room .user-head h3 {
    margin: 6px 0 0 0;
    font-weight: 100;
    letter-spacing: 1px;
}

.chat-room-head {
    background:#4ECDC4;
    color: #FFFFFF;
    min-height: 70px;
    padding: 15px;
}

.chat-room-head h3 {
    margin: 5px 0 0;
    font-weight: 100;
    letter-spacing: 1px;
    display: inline-block;
}

.chat-room-head .search-btn {
    width: 20px;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
    box-shadow: none;
    background: #34495e;
    padding:0 5px 0 35px;
    margin-top: 2px;
    border: none;
    color: #fff;
}

.chat-room-head .search-btn:focus {
    width: 180px;
    box-shadow: none;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
    /*background: #01a6b2;*/
    font-weight: 300;
    color: #fff;
}

.chat-room-head .search-btn:focus::-moz-placeholder {
    color: #fff;
}

ul.chat-list li a {
    color: #6a6a6a;
    display: block;
    padding: 15px;
    font-weight: 300;
}
ul.chat-list li a:hover, ul.chat-list li.active a {
    color: #00a9b4;
    background: #f2f4f7;
}

ul.chat-list li h4 {
    padding: 17px 15px;
    margin: 0;
    font-size: 14px;
    font-weight: 600;
    border-bottom: 1px solid #D5D7DE;
}

ul.chat-list li h4 i {
    padding-right: 5px;
}

ul.chat-list li a span {
    padding-left: 10px;
}

ul.chat-list li a i.fa-times {
    color: #9fa3b0;
}

ul.chat-list li.active {
    color: #00a9b4;
    background: #f2f4f7;
}

ul.chat-list {
    border-bottom: 1px solid #d5d7de;
}

ul.chat-user  {
    margin-bottom: 200px;
}

ul.chat-user li {
    border-bottom: none;
}

ul.chat-user li a:hover{
    background: none;
    color: #6a6a6a;
}

.chat-room .mid-side footer {
    background: #f6f6f6;
    padding: 15px;
    height: 70px;
    width: 75%;
    position: absolute;
    bottom: 0;
    border-right: 1px solid #E5E8EF;
}

.chat-room .right-side footer {
    background: #fff;
    padding: 15px;
    height: 70px;
    width: 25%;
    position: absolute;
    bottom: 0;
    border-top: 1px solid #E5E8EF;
    border-radius: 0 0 4px 0;
    -webkit-border-radius: 0 0 4px 0;
}

.room-desk {
    display: inline-block;
    margin-bottom: 30px;
    width: 100%;
    padding: 15px;
}

.room-desk h4 {
    text-transform: uppercase;
    font-weight: 300;
    font-size: 16px;
    margin: 5px 0 0 0;
}

.room-box {
    border: 1px solid #e7e7e7;
    background: #f7f8fa;
    padding: 10px;
    display: inline-block;
    width: 100%;
    margin-top: 10px;
    border-radius: 2px;
    -webkit-border-radius: 2px;
}

.room-box:hover {
	background: #f0f0f0
}

.room-box h5 {
    margin: 0 0 5px 0;
    font-weight: 300;
    font-size: 16px;
}
.room-box h5 a {
    color: #4ECDC4;
}

.chat-tools {
    float: right;
    padding: 3px;
    width: 40px;
    height: 35px;
    line-height: 30px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    text-align: center;
    margin-top: 6px;
    margin-left: 10px;
}

.chat-tools i {
    font-size: 16px !important;
    float: none !important;
    margin-right: 0 !important;
    color: #fff;
}

.invite-row {
    background: #ecf0f1;
    padding: 6px 10px;
    display: inline-block;
    width: 100%;
}

.invite-row h4 {
    font-size: 16px;
    font-weight: 300;
}

ul.chat-available-user {
    padding: 10px;
}

ul.chat-available-user li {
    margin-bottom: 15px;
}

ul.chat-available-user li a {
    color: #6a6a6a;
}

ul.chat-available-user li a:hover {
    color: #4ECDC4;
}


.group-rom {
    width: 100%;
    float: left;
    border-bottom: 1px solid #eaebee;
}

.group-rom .first-part, .group-rom .second-part, .group-rom .third-part {
    float: left;
    padding: 15px;
}

.group-rom .first-part {
    width: 25%;
}

.group-rom .first-part.odd {
    background: #f7f8fa;
    color: #6a6a6a;
    font-weight: 600;
}

.group-rom .second-part{
    width: 60%;
}

.group-rom .third-part{
    width: 15%;
    color: #d4d3d3;
}

.last-group {
	margin-bottom: 70px;
}

.chat-txt {
    float: left;
    width: 75%;
    margin-right: 5px;
}

.lobby {
    padding: 0 !important;
}


/* GOOGLE MAPS - SCRIPT HELPER*/
#gmap-list,#gmap-tabs {
    height:450px;
}
.gmaps {
    height:300px;
    width:100%;
}
.ullist {
    border-bottom:#ccc 1px solid;
    margin-left:20px;
}
.ullist li {
    display:inline-block;
    margin-left:5px;
}
.ullist li a {
    display:inline-block;
    padding:10px 20px !important;
    border-top:#ccc 1px solid;
    border-left:#ccc 1px solid;
    border-right:#ccc 1px solid;
    -moz-border-radius:3px 3px 0 0;
    -webkit-border-radius:3px 3px 0 0;
    border-radius:3px 3px 0 0;
    background:#f1f1f1;
}
.ullist li.active a {
    background:#fff;
    border-bottom:#fff 1px solid;
    position:relative;
    top:1px;
    margin-bottom: -1px;
}


.btn-facebook {
  color: #fff;
  background-color: #5193ea;
  border-color: #2775e2;
}
.btn-facebook:hover,
.btn-facebook:focus,
.btn-facebook:active,
.btn-facebook.active,
.open .dropdown-toggle.btn-facebook {
  color: #fff;
  background-color: #2775e2;
  border-color: #2775e2;
}

.btn-twitter {
  color: #fff;
  background-color: #44ccfe;
  border-color: #2bb4e8;
}
.btn-twitter:hover,
.btn-twitter:focus,
.btn-twitter:active,
.btn-twitter.active,
.open .dropdown-toggle.btn-twitter {
  color: #fff;
  background-color: #2bb4e8;
  border-color: #2bb4e8;
}


/*badge*/
.badge.bg-primary {
    background: #8075c4;
}

.badge.bg-success {
    background: #a9d86e;
}

.badge.bg-warning {
    background: #FCB322;
}

.badge.bg-important {
    background: #ff6c60;
}

.badge.bg-info {
    background: #41cac0;
}

.badge.bg-inverse {
    background: #2A3542;
}


/*easy pie chart*/
.easy-pie-chart {
    display: inline-block;
    padding: 30px 0;
}

.chart-info, .chart-info .increase, .chart-info .decrease {
    display: inline-block;
}

.chart-info {
    width: 100%;
    margin-bottom:5px;
}

.chart-position {
    margin-top: 70px;
}

.chart-info span {
    margin: 0 3px;
}

.chart-info .increase {
    background: #ff6c60;
    width: 10px;
    height: 10px;
}

.chart-info .decrease {
    background: #f2f2f2;
    width: 10px;
    height: 10px;
}

.panel-footer.revenue-foot {
    background-color: #e6e7ec;
    -webkit-border-radius: 0px 0px 4px 4px;
    border-radius: 0px 0px 4px 4px;
    border: none;
    padding: 0;
    width: 100%;
    display: inline-block;
}

@media screen and (-webkit-min-device-pixel-ratio:0) {
    /* Safari and Chrome */
    .panel-footer.revenue-foot {
        margin-bottom: -4px;
    };
    }


.panel-footer.revenue-foot ul  {
    margin: 0;
    padding: 0;
    width: 100%;
    display: inline-flex;
}

.panel-footer.revenue-foot ul li {
    float: left;
    width: 33.33%;
}

.panel-footer.revenue-foot ul li.first a:hover, .panel-footer.revenue-foot ul li.first a {
    -webkit-border-radius: 0px 0px 0px 4px;
    border-radius: 0px 0px 0px 4px;
}

.panel-footer.revenue-foot ul li.last a:hover, .panel-footer.revenue-foot ul li.last a {
    -webkit-border-radius: 0px 0px 4px 0px;
    border-radius: 0px 0px 4px 0px;
    border-right: none;

}

.panel-footer.revenue-foot ul li a{
    display: inline-block;
    width: 100%;
    padding: 14px 15px;
    text-align: center;
    border-right: 1px solid #d5d8df;
    color: #797979;
}

.panel-footer.revenue-foot ul li a:hover, .panel-footer.revenue-foot ul li.active a {
    background: #fff;
    position: relative;
}

.panel-footer.revenue-foot ul li a i {
    color: #c6cad5;
    display: block;
    font-size: 16px;
}
.panel-footer.revenue-foot ul li a:hover i, .panel-footer.revenue-foot ul li.active a i {
    color: #ff6c60;
    display: block;
    font-size: 16px;
}


/*fontawesome*/
.fontawesome-icon-list h2 {
    margin-top: 0;
    font-size: 20px;
    font-weight: 300;
}

.fontawesome-icon-list .col-sm-4, .fontawesome-icon-list .col-md-3, .fontawesome-icon-list .col-xs-6 {
    margin-bottom: 10px;
}

.fontawesome-icon-list .page-header {
    border-bottom: 1px solid #C9CDD7;
}

.fontawesome-icon-list a {
    color: #797979;
}

.fontawesome-icon-list a:hover{
    color: #35404D;
}

.fontawesome-icon-list i {
    font-size: 16px;
    padding-right: 10px;
}

#web-application, #text-editor, #directional, #video-player, #brand, #medical, #currency {
    margin-top: 10px;
}

/*flot chart*/
.flot-chart .chart, .flot-chart .pie, .flot-chart .bars {
    height: 300px;
}


/*xchart*/
.demo-xchart {
    height: 400px;
    width: 100%;
}


/*todolist*/
#sortable {
    list-style-type: none;
    margin: 0 0 20px 0;
    padding: 0;
    width: 100%;
}
#sortable li {
    padding-left: 3em;
    font-size: 12px;
}
#sortable li i {
    position: absolute;
    left:6px;
    padding:4px 10px 0 10px;
    cursor: pointer;
}

#sortable li input[type=checkbox]{
    margin-top: 0;
}

.ui-sortable > li {
    padding: 15px 0 15px 35px !important ;
    position: relative;
    background: #f5f6f8;
    margin-bottom: 2px;
    border-bottom   : none !important;
}

.ui-sortable li.list-primary {
    border-left: 3px solid #41CAC0;
}

.ui-sortable li.list-success {
    border-left: 3px solid #78CD51;
}

.ui-sortable li.list-danger {
    border-left: 3px solid #FF6C60;
}

.ui-sortable li.list-warning {
    border-left: 3px solid #F1C500;
}

.ui-sortable li.list-info {
    border-left: 3px solid #58C9F3;
}

.ui-sortable li.list-inverse {
    border-left: 3px solid #BEC3C7;
}

/*footer*/
.site-footer {
    background: #4ECDC4;
    color: #fff;
    padding: 15px 0;
}

.site-footer p {
  margin-bottom: 5px;
}

.credits, .credits a {
  color: #fff;
}

.go-top {
    margin-right: 1%;
    margin-top: -25px;
    float: right;
    background: rgba(255,255,255,.5);
    width: 20px;
    height: 20px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.go-top i {
    color: #2A3542;
}

.site-min-height {
    min-height: 900px;
}





/* Contact Form */

#contact {
  padding: 40px 0;
}

.contact-form {

}

.contact-form label {
   color: #999;
}

.contact-form input, .contact-form textarea {
  padding: 10px 12px;
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  height: auto;
}

.contact-form .form-send {
  text-align: center;
}

.contact-form .form-send button  {
  background: #4ECDC4;
  border: 0;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
  cursor: pointer;
}

.contact-form .form-send button:hover {
  background: #2cb5ab;
}

.contact-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact-form .loading {
  display: none;
  color: #555;
  background: #fff;
  text-align: center;
  padding: 15px;
  margin: 15px 0;
}

.contact-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

@-webkit-keyframes animate-loading {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

.contact-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: center;
  padding: 15px;
  font-weight: 600;
  margin: 15px 0;
}

.contact-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
  margin: 15px 0;
}

/* Copyrights */

#copyrights {
  background: #222222;
  padding: 20px 0;
  text-align: center;
}

#copyrights p {
  margin-bottom: 5px;
  color: #fff;
}

#copyrights a {
  color: #fff;
}

</style>
<style>
/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}abbr[title]:after{content:" (" attr(title) ")"}a[href^="javascript:"]:after,a[href^="#"]:after{content:""}blockquote,pre{border:1px solid #999;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}img{max-width:100%!important}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}.navbar{display:none}.btn>.caret,.dropup>.btn>.caret{border-top-color:#000!important}.label{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #ddd!important}}@font-face{font-family:'Glyphicons Halflings';src:url(../fonts/glyphicons-halflings-regular.eot);src:url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'),url(../fonts/glyphicons-halflings-regular.woff) format('woff'),url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.glyphicon-asterisk:before{content:"\002a"}.glyphicon-plus:before{content:"\002b"}.glyphicon-eur:before,.glyphicon-euro:before{content:"\20ac"}.glyphicon-minus:before{content:"\2212"}.glyphicon-cloud:before{content:"\2601"}.glyphicon-envelope:before{content:"\2709"}.glyphicon-pencil:before{content:"\270f"}.glyphicon-glass:before{content:"\e001"}.glyphicon-music:before{content:"\e002"}.glyphicon-search:before{content:"\e003"}.glyphicon-heart:before{content:"\e005"}.glyphicon-star:before{content:"\e006"}.glyphicon-star-empty:before{content:"\e007"}.glyphicon-user:before{content:"\e008"}.glyphicon-film:before{content:"\e009"}.glyphicon-th-large:before{content:"\e010"}.glyphicon-th:before{content:"\e011"}.glyphicon-th-list:before{content:"\e012"}.glyphicon-ok:before{content:"\e013"}.glyphicon-remove:before{content:"\e014"}.glyphicon-zoom-in:before{content:"\e015"}.glyphicon-zoom-out:before{content:"\e016"}.glyphicon-off:before{content:"\e017"}.glyphicon-signal:before{content:"\e018"}.glyphicon-cog:before{content:"\e019"}.glyphicon-trash:before{content:"\e020"}.glyphicon-home:before{content:"\e021"}.glyphicon-file:before{content:"\e022"}.glyphicon-time:before{content:"\e023"}.glyphicon-road:before{content:"\e024"}.glyphicon-download-alt:before{content:"\e025"}.glyphicon-download:before{content:"\e026"}.glyphicon-upload:before{content:"\e027"}.glyphicon-inbox:before{content:"\e028"}.glyphicon-play-circle:before{content:"\e029"}.glyphicon-repeat:before{content:"\e030"}.glyphicon-refresh:before{content:"\e031"}.glyphicon-list-alt:before{content:"\e032"}.glyphicon-lock:before{content:"\e033"}.glyphicon-flag:before{content:"\e034"}.glyphicon-headphones:before{content:"\e035"}.glyphicon-volume-off:before{content:"\e036"}.glyphicon-volume-down:before{content:"\e037"}.glyphicon-volume-up:before{content:"\e038"}.glyphicon-qrcode:before{content:"\e039"}.glyphicon-barcode:before{content:"\e040"}.glyphicon-tag:before{content:"\e041"}.glyphicon-tags:before{content:"\e042"}.glyphicon-book:before{content:"\e043"}.glyphicon-bookmark:before{content:"\e044"}.glyphicon-print:before{content:"\e045"}.glyphicon-camera:before{content:"\e046"}.glyphicon-font:before{content:"\e047"}.glyphicon-bold:before{content:"\e048"}.glyphicon-italic:before{content:"\e049"}.glyphicon-text-height:before{content:"\e050"}.glyphicon-text-width:before{content:"\e051"}.glyphicon-align-left:before{content:"\e052"}.glyphicon-align-center:before{content:"\e053"}.glyphicon-align-right:before{content:"\e054"}.glyphicon-align-justify:before{content:"\e055"}.glyphicon-list:before{content:"\e056"}.glyphicon-indent-left:before{content:"\e057"}.glyphicon-indent-right:before{content:"\e058"}.glyphicon-facetime-video:before{content:"\e059"}.glyphicon-picture:before{content:"\e060"}.glyphicon-map-marker:before{content:"\e062"}.glyphicon-adjust:before{content:"\e063"}.glyphicon-tint:before{content:"\e064"}.glyphicon-edit:before{content:"\e065"}.glyphicon-share:before{content:"\e066"}.glyphicon-check:before{content:"\e067"}.glyphicon-move:before{content:"\e068"}.glyphicon-step-backward:before{content:"\e069"}.glyphicon-fast-backward:before{content:"\e070"}.glyphicon-backward:before{content:"\e071"}.glyphicon-play:before{content:"\e072"}.glyphicon-pause:before{content:"\e073"}.glyphicon-stop:before{content:"\e074"}.glyphicon-forward:before{content:"\e075"}.glyphicon-fast-forward:before{content:"\e076"}.glyphicon-step-forward:before{content:"\e077"}.glyphicon-eject:before{content:"\e078"}.glyphicon-chevron-left:before{content:"\e079"}.glyphicon-chevron-right:before{content:"\e080"}.glyphicon-plus-sign:before{content:"\e081"}.glyphicon-minus-sign:before{content:"\e082"}.glyphicon-remove-sign:before{content:"\e083"}.glyphicon-ok-sign:before{content:"\e084"}.glyphicon-question-sign:before{content:"\e085"}.glyphicon-info-sign:before{content:"\e086"}.glyphicon-screenshot:before{content:"\e087"}.glyphicon-remove-circle:before{content:"\e088"}.glyphicon-ok-circle:before{content:"\e089"}.glyphicon-ban-circle:before{content:"\e090"}.glyphicon-arrow-left:before{content:"\e091"}.glyphicon-arrow-right:before{content:"\e092"}.glyphicon-arrow-up:before{content:"\e093"}.glyphicon-arrow-down:before{content:"\e094"}.glyphicon-share-alt:before{content:"\e095"}.glyphicon-resize-full:before{content:"\e096"}.glyphicon-resize-small:before{content:"\e097"}.glyphicon-exclamation-sign:before{content:"\e101"}.glyphicon-gift:before{content:"\e102"}.glyphicon-leaf:before{content:"\e103"}.glyphicon-fire:before{content:"\e104"}.glyphicon-eye-open:before{content:"\e105"}.glyphicon-eye-close:before{content:"\e106"}.glyphicon-warning-sign:before{content:"\e107"}.glyphicon-plane:before{content:"\e108"}.glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}.glyphicon-cd:before{content:"\e201"}.glyphicon-save-file:before{content:"\e202"}.glyphicon-open-file:before{content:"\e203"}.glyphicon-level-up:before{content:"\e204"}.glyphicon-copy:before{content:"\e205"}.glyphicon-paste:before{content:"\e206"}.glyphicon-alert:before{content:"\e209"}.glyphicon-equalizer:before{content:"\e210"}.glyphicon-king:before{content:"\e211"}.glyphicon-queen:before{content:"\e212"}.glyphicon-pawn:before{content:"\e213"}.glyphicon-bishop:before{content:"\e214"}.glyphicon-knight:before{content:"\e215"}.glyphicon-baby-formula:before{content:"\e216"}.glyphicon-tent:before{content:"\26fa"}.glyphicon-blackboard:before{content:"\e218"}.glyphicon-bed:before{content:"\e219"}.glyphicon-apple:before{content:"\f8ff"}.glyphicon-erase:before{content:"\e221"}.glyphicon-hourglass:before{content:"\231b"}.glyphicon-lamp:before{content:"\e223"}.glyphicon-duplicate:before{content:"\e224"}.glyphicon-piggy-bank:before{content:"\e225"}.glyphicon-scissors:before{content:"\e226"}.glyphicon-bitcoin:before{content:"\e227"}.glyphicon-btc:before{content:"\e227"}.glyphicon-xbt:before{content:"\e227"}.glyphicon-yen:before{content:"\00a5"}.glyphicon-jpy:before{content:"\00a5"}.glyphicon-ruble:before{content:"\20bd"}.glyphicon-rub:before{content:"\20bd"}.glyphicon-scale:before{content:"\e230"}.glyphicon-ice-lolly:before{content:"\e231"}.glyphicon-ice-lolly-tasted:before{content:"\e232"}.glyphicon-education:before{content:"\e233"}.glyphicon-option-horizontal:before{content:"\e234"}.glyphicon-option-vertical:before{content:"\e235"}.glyphicon-menu-hamburger:before{content:"\e236"}.glyphicon-modal-window:before{content:"\e237"}.glyphicon-oil:before{content:"\e238"}.glyphicon-grain:before{content:"\e239"}.glyphicon-sunglasses:before{content:"\e240"}.glyphicon-text-size:before{content:"\e241"}.glyphicon-text-color:before{content:"\e242"}.glyphicon-text-background:before{content:"\e243"}.glyphicon-object-align-top:before{content:"\e244"}.glyphicon-object-align-bottom:before{content:"\e245"}.glyphicon-object-align-horizontal:before{content:"\e246"}.glyphicon-object-align-left:before{content:"\e247"}.glyphicon-object-align-vertical:before{content:"\e248"}.glyphicon-object-align-right:before{content:"\e249"}.glyphicon-triangle-right:before{content:"\e250"}.glyphicon-triangle-left:before{content:"\e251"}.glyphicon-triangle-bottom:before{content:"\e252"}.glyphicon-triangle-top:before{content:"\e253"}.glyphicon-console:before{content:"\e254"}.glyphicon-superscript:before{content:"\e255"}.glyphicon-subscript:before{content:"\e256"}.glyphicon-menu-left:before{content:"\e257"}.glyphicon-menu-right:before{content:"\e258"}.glyphicon-menu-down:before{content:"\e259"}.glyphicon-menu-up:before{content:"\e260"}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}button,input,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:focus,a:hover{color:#23527c;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.carousel-inner>.item>a>img,.carousel-inner>.item>img,.img-responsive,.thumbnail a>img,.thumbnail>img{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{display:inline-block;max-width:100%;height:auto;padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}[role=button]{cursor:pointer}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-weight:400;line-height:1;color:#777}.h1,.h2,.h3,h1,h2,h3{margin-top:20px;margin-bottom:10px}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small{font-size:65%}.h4,.h5,.h6,h4,h5,h6{margin-top:10px;margin-bottom:10px}.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-size:75%}.h1,h1{font-size:36px}.h2,h2{font-size:30px}.h3,h3{font-size:24px}.h4,h4{font-size:18px}.h5,h5{font-size:14px}.h6,h6{font-size:12px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}.small,small{font-size:85%}.mark,mark{padding:.2em;background-color:#fcf8e3}.text-left{text-align:left}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}.text-nowrap{white-space:nowrap}.text-lowercase{text-transform:lowercase}.text-uppercase{text-transform:uppercase}.text-capitalize{text-transform:capitalize}.text-muted{color:#777}.text-primary{color:#337ab7}a.text-primary:focus,a.text-primary:hover{color:#286090}.text-success{color:#3c763d}a.text-success:focus,a.text-success:hover{color:#2b542c}.text-info{color:#31708f}a.text-info:focus,a.text-info:hover{color:#245269}.text-warning{color:#8a6d3b}a.text-warning:focus,a.text-warning:hover{color:#66512c}.text-danger{color:#a94442}a.text-danger:focus,a.text-danger:hover{color:#843534}.bg-primary{color:#fff;background-color:#337ab7}a.bg-primary:focus,a.bg-primary:hover{background-color:#286090}.bg-success{background-color:#dff0d8}a.bg-success:focus,a.bg-success:hover{background-color:#c1e2b3}.bg-info{background-color:#d9edf7}a.bg-info:focus,a.bg-info:hover{background-color:#afd9ee}.bg-warning{background-color:#fcf8e3}a.bg-warning:focus,a.bg-warning:hover{background-color:#f7ecb5}.bg-danger{background-color:#f2dede}a.bg-danger:focus,a.bg-danger:hover{background-color:#e4b9b9}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}ol,ul{margin-top:0;margin-bottom:10px}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;margin-left:-5px;list-style:none}.list-inline>li{display:inline-block;padding-right:5px;padding-left:5px}dl{margin-top:0;margin-bottom:20px}dd,dt{line-height:1.42857143}dt{font-weight:700}dd{margin-left:0}@media (min-width:768px){.dl-horizontal dt{float:left;width:160px;overflow:hidden;clear:left;text-align:right;text-overflow:ellipsis;white-space:nowrap}.dl-horizontal dd{margin-left:180px}}abbr[data-original-title],abbr[title]{cursor:help;border-bottom:1px dotted #777}.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eee}blockquote ol:last-child,blockquote p:last-child,blockquote ul:last-child{margin-bottom:0}blockquote .small,blockquote footer,blockquote small{display:block;font-size:80%;line-height:1.42857143;color:#777}blockquote .small:before,blockquote footer:before,blockquote small:before{content:'\2014 \00A0'}.blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;text-align:right;border-right:5px solid #eee;border-left:0}.blockquote-reverse .small:before,.blockquote-reverse footer:before,.blockquote-reverse small:before,blockquote.pull-right .small:before,blockquote.pull-right footer:before,blockquote.pull-right small:before{content:''}.blockquote-reverse .small:after,.blockquote-reverse footer:after,.blockquote-reverse small:after,blockquote.pull-right .small:after,blockquote.pull-right footer:after,blockquote.pull-right small:after{content:'\00A0 \2014'}address{margin-bottom:20px;font-style:normal;line-height:1.42857143}code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Courier New",monospace}code{padding:2px 4px;font-size:90%;color:#c7254e;background-color:#f9f2f4;border-radius:4px}kbd{padding:2px 4px;font-size:90%;color:#fff;background-color:#333;border-radius:3px;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.25);box-shadow:inset 0 -1px 0 rgba(0,0,0,.25)}kbd kbd{padding:0;font-size:100%;font-weight:700;-webkit-box-shadow:none;box-shadow:none}pre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.42857143;color:#333;word-break:break-all;word-wrap:break-word;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px}pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;background-color:transparent;border-radius:0}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}table{background-color:transparent}caption{padding-top:8px;padding-bottom:8px;color:#777;text-align:left}th{text-align:left}.table{width:100%;max-width:100%;margin-bottom:20px}.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #ddd}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}.table>caption+thead>tr:first-child>td,.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>td,.table>thead:first-child>tr:first-child>th{border-top:0}.table>tbody+tbody{border-top:2px solid #ddd}.table .table{background-color:#fff}.table-condensed>tbody>tr>td,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>td,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>thead>tr>th{padding:5px}.table-bordered{border:1px solid #ddd}.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border:1px solid #ddd}.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border-bottom-width:2px}.table-striped>tbody>tr:nth-of-type(odd){background-color:#f9f9f9}.table-hover>tbody>tr:hover{background-color:#f5f5f5}table col[class*=col-]{position:static;display:table-column;float:none}table td[class*=col-],table th[class*=col-]{position:static;display:table-cell;float:none}.table>tbody>tr.active>td,.table>tbody>tr.active>th,.table>tbody>tr>td.active,.table>tbody>tr>th.active,.table>tfoot>tr.active>td,.table>tfoot>tr.active>th,.table>tfoot>tr>td.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>thead>tr.active>th,.table>thead>tr>td.active,.table>thead>tr>th.active{background-color:#f5f5f5}.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr.active:hover>th,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover{background-color:#e8e8e8}.table>tbody>tr.success>td,.table>tbody>tr.success>th,.table>tbody>tr>td.success,.table>tbody>tr>th.success,.table>tfoot>tr.success>td,.table>tfoot>tr.success>th,.table>tfoot>tr>td.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>thead>tr.success>th,.table>thead>tr>td.success,.table>thead>tr>th.success{background-color:#dff0d8}.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover{background-color:#d0e9c6}.table>tbody>tr.info>td,.table>tbody>tr.info>th,.table>tbody>tr>td.info,.table>tbody>tr>th.info,.table>tfoot>tr.info>td,.table>tfoot>tr.info>th,.table>tfoot>tr>td.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>thead>tr.info>th,.table>thead>tr>td.info,.table>thead>tr>th.info{background-color:#d9edf7}.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr.info:hover>th,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover{background-color:#c4e3f3}.table>tbody>tr.warning>td,.table>tbody>tr.warning>th,.table>tbody>tr>td.warning,.table>tbody>tr>th.warning,.table>tfoot>tr.warning>td,.table>tfoot>tr.warning>th,.table>tfoot>tr>td.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>thead>tr.warning>th,.table>thead>tr>td.warning,.table>thead>tr>th.warning{background-color:#fcf8e3}.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover{background-color:#faf2cc}.table>tbody>tr.danger>td,.table>tbody>tr.danger>th,.table>tbody>tr>td.danger,.table>tbody>tr>th.danger,.table>tfoot>tr.danger>td,.table>tfoot>tr.danger>th,.table>tfoot>tr>td.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>thead>tr.danger>th,.table>thead>tr>td.danger,.table>thead>tr>th.danger{background-color:#f2dede}.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover{background-color:#ebcccc}.table-responsive{min-height:.01%;overflow-x:auto}@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border:0;border-bottom:1px solid #e5e5e5}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}input[type=search]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input[type=checkbox],input[type=radio]{margin:4px 0 0;margin-top:1px\9;line-height:normal}input[type=file]{display:block}input[type=range]{display:block;width:100%}select[multiple],select[size]{height:auto}input[type=file]:focus,input[type=checkbox]:focus,input[type=radio]:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}output{display:block;padding-top:7px;font-size:14px;line-height:1.42857143;color:#555}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control::-ms-expand{background-color:transparent;border:0}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{background-color:#eee;opacity:1}.form-control[disabled],fieldset[disabled] .form-control{cursor:not-allowed}textarea.form-control{height:auto}input[type=search]{-webkit-appearance:none}@media screen and (-webkit-min-device-pixel-ratio:0){input[type=date].form-control,input[type=time].form-control,input[type=datetime-local].form-control,input[type=month].form-control{line-height:34px}.input-group-sm input[type=date],.input-group-sm input[type=time],.input-group-sm input[type=datetime-local],.input-group-sm input[type=month],input[type=date].input-sm,input[type=time].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm{line-height:30px}.input-group-lg input[type=date],.input-group-lg input[type=time],.input-group-lg input[type=datetime-local],.input-group-lg input[type=month],input[type=date].input-lg,input[type=time].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg{line-height:46px}}.form-group{margin-bottom:15px}.checkbox,.radio{position:relative;display:block;margin-top:10px;margin-bottom:10px}.checkbox label,.radio label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio]{position:absolute;margin-top:4px\9;margin-left:-20px}.checkbox+.checkbox,.radio+.radio{margin-top:-5px}.checkbox-inline,.radio-inline{position:relative;display:inline-block;padding-left:20px;margin-bottom:0;font-weight:400;vertical-align:middle;cursor:pointer}.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline{margin-top:0;margin-left:10px}fieldset[disabled] input[type=checkbox],fieldset[disabled] input[type=radio],input[type=checkbox].disabled,input[type=checkbox][disabled],input[type=radio].disabled,input[type=radio][disabled]{cursor:not-allowed}.checkbox-inline.disabled,.radio-inline.disabled,fieldset[disabled] .checkbox-inline,fieldset[disabled] .radio-inline{cursor:not-allowed}.checkbox.disabled label,.radio.disabled label,fieldset[disabled] .checkbox label,fieldset[disabled] .radio label{cursor:not-allowed}.form-control-static{min-height:34px;padding-top:7px;padding-bottom:7px;margin-bottom:0}.form-control-static.input-lg,.form-control-static.input-sm{padding-right:0;padding-left:0}.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm{height:30px;line-height:30px}select[multiple].input-sm,textarea.input-sm{height:auto}.form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.form-group-sm select.form-control{height:30px;line-height:30px}.form-group-sm select[multiple].form-control,.form-group-sm textarea.form-control{height:auto}.form-group-sm .form-control-static{height:30px;min-height:32px;padding:6px 10px;font-size:12px;line-height:1.5}.input-lg{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-lg{height:46px;line-height:46px}select[multiple].input-lg,textarea.input-lg{height:auto}.form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.form-group-lg select.form-control{height:46px;line-height:46px}.form-group-lg select[multiple].form-control,.form-group-lg textarea.form-control{height:auto}.form-group-lg .form-control-static{height:46px;min-height:38px;padding:11px 16px;font-size:18px;line-height:1.3333333}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.form-group-lg .form-control+.form-control-feedback,.input-group-lg+.form-control-feedback,.input-lg+.form-control-feedback{width:46px;height:46px;line-height:46px}.form-group-sm .form-control+.form-control-feedback,.input-group-sm+.form-control-feedback,.input-sm+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .checkbox,.has-success .checkbox-inline,.has-success .control-label,.has-success .help-block,.has-success .radio,.has-success .radio-inline,.has-success.checkbox label,.has-success.checkbox-inline label,.has-success.radio label,.has-success.radio-inline label{color:#3c763d}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;background-color:#dff0d8;border-color:#3c763d}.has-success .form-control-feedback{color:#3c763d}.has-warning .checkbox,.has-warning .checkbox-inline,.has-warning .control-label,.has-warning .help-block,.has-warning .radio,.has-warning .radio-inline,.has-warning.checkbox label,.has-warning.checkbox-inline label,.has-warning.radio label,.has-warning.radio-inline label{color:#8a6d3b}.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b}.has-warning .input-group-addon{color:#8a6d3b;background-color:#fcf8e3;border-color:#8a6d3b}.has-warning .form-control-feedback{color:#8a6d3b}.has-error .checkbox,.has-error .checkbox-inline,.has-error .control-label,.has-error .help-block,.has-error .radio,.has-error .radio-inline,.has-error.checkbox label,.has-error.checkbox-inline label,.has-error.radio label,.has-error.radio-inline label{color:#a94442}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;background-color:#f2dede;border-color:#a94442}.has-error .form-control-feedback{color:#a94442}.has-feedback label~.form-control-feedback{top:25px}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media (min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-static{display:inline-block}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .form-control,.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn{width:auto}.form-inline .input-group>.form-control{width:100%}.form-inline .control-label{margin-bottom:0;vertical-align:middle}.form-inline .checkbox,.form-inline .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .checkbox label,.form-inline .radio label{padding-left:0}.form-inline .checkbox input[type=checkbox],.form-inline .radio input[type=radio]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback{top:0}}.form-horizontal .checkbox,.form-horizontal .checkbox-inline,.form-horizontal .radio,.form-horizontal .radio-inline{padding-top:7px;margin-top:0;margin-bottom:0}.form-horizontal .checkbox,.form-horizontal .radio{min-height:27px}.form-horizontal .form-group{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.form-horizontal .control-label{padding-top:7px;margin-bottom:0;text-align:right}}.form-horizontal .has-feedback .form-control-feedback{right:15px}@media (min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:11px;font-size:18px}}@media (min-width:768px){.form-horizontal .form-group-sm .control-label{padding-top:6px;font-size:12px}}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}.btn.active.focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn:active:focus,.btn:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn.focus,.btn:focus,.btn:hover{color:#333;text-decoration:none}.btn.active,.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn.disabled,.btn[disabled],fieldset[disabled] .btn{cursor:not-allowed;filter:alpha(opacity=65);-webkit-box-shadow:none;box-shadow:none;opacity:.65}a.btn.disabled,fieldset[disabled] a.btn{pointer-events:none}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default.focus,.btn-default:focus{color:#333;background-color:#e6e6e6;border-color:#8c8c8c}.btn-default:hover{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default.active.focus,.btn-default.active:focus,.btn-default.active:hover,.btn-default:active.focus,.btn-default:active:focus,.btn-default:active:hover,.open>.dropdown-toggle.btn-default.focus,.open>.dropdown-toggle.btn-default:focus,.open>.dropdown-toggle.btn-default:hover{color:#333;background-color:#d4d4d4;border-color:#8c8c8c}.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{background-image:none}.btn-default.disabled.focus,.btn-default.disabled:focus,.btn-default.disabled:hover,.btn-default[disabled].focus,.btn-default[disabled]:focus,.btn-default[disabled]:hover,fieldset[disabled] .btn-default.focus,fieldset[disabled] .btn-default:focus,fieldset[disabled] .btn-default:hover{background-color:#fff;border-color:#ccc}.btn-default .badge{color:#fff;background-color:#333}.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}.btn-primary.focus,.btn-primary:focus{color:#fff;background-color:#286090;border-color:#122b40}.btn-primary:hover{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary.active.focus,.btn-primary.active:focus,.btn-primary.active:hover,.btn-primary:active.focus,.btn-primary:active:focus,.btn-primary:active:hover,.open>.dropdown-toggle.btn-primary.focus,.open>.dropdown-toggle.btn-primary:focus,.open>.dropdown-toggle.btn-primary:hover{color:#fff;background-color:#204d74;border-color:#122b40}.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{background-image:none}.btn-primary.disabled.focus,.btn-primary.disabled:focus,.btn-primary.disabled:hover,.btn-primary[disabled].focus,.btn-primary[disabled]:focus,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary.focus,fieldset[disabled] .btn-primary:focus,fieldset[disabled] .btn-primary:hover{background-color:#337ab7;border-color:#2e6da4}.btn-primary .badge{color:#337ab7;background-color:#fff}.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}.btn-success.focus,.btn-success:focus{color:#fff;background-color:#449d44;border-color:#255625}.btn-success:hover{color:#fff;background-color:#449d44;border-color:#398439}.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success{color:#fff;background-color:#449d44;border-color:#398439}.btn-success.active.focus,.btn-success.active:focus,.btn-success.active:hover,.btn-success:active.focus,.btn-success:active:focus,.btn-success:active:hover,.open>.dropdown-toggle.btn-success.focus,.open>.dropdown-toggle.btn-success:focus,.open>.dropdown-toggle.btn-success:hover{color:#fff;background-color:#398439;border-color:#255625}.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success{background-image:none}.btn-success.disabled.focus,.btn-success.disabled:focus,.btn-success.disabled:hover,.btn-success[disabled].focus,.btn-success[disabled]:focus,.btn-success[disabled]:hover,fieldset[disabled] .btn-success.focus,fieldset[disabled] .btn-success:focus,fieldset[disabled] .btn-success:hover{background-color:#5cb85c;border-color:#4cae4c}.btn-success .badge{color:#5cb85c;background-color:#fff}.btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}.btn-info.focus,.btn-info:focus{color:#fff;background-color:#31b0d5;border-color:#1b6d85}.btn-info:hover{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info.active.focus,.btn-info.active:focus,.btn-info.active:hover,.btn-info:active.focus,.btn-info:active:focus,.btn-info:active:hover,.open>.dropdown-toggle.btn-info.focus,.open>.dropdown-toggle.btn-info:focus,.open>.dropdown-toggle.btn-info:hover{color:#fff;background-color:#269abc;border-color:#1b6d85}.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info{background-image:none}.btn-info.disabled.focus,.btn-info.disabled:focus,.btn-info.disabled:hover,.btn-info[disabled].focus,.btn-info[disabled]:focus,.btn-info[disabled]:hover,fieldset[disabled] .btn-info.focus,fieldset[disabled] .btn-info:focus,fieldset[disabled] .btn-info:hover{background-color:#5bc0de;border-color:#46b8da}.btn-info .badge{color:#5bc0de;background-color:#fff}.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}.btn-warning.focus,.btn-warning:focus{color:#fff;background-color:#ec971f;border-color:#985f0d}.btn-warning:hover{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning.active.focus,.btn-warning.active:focus,.btn-warning.active:hover,.btn-warning:active.focus,.btn-warning:active:focus,.btn-warning:active:hover,.open>.dropdown-toggle.btn-warning.focus,.open>.dropdown-toggle.btn-warning:focus,.open>.dropdown-toggle.btn-warning:hover{color:#fff;background-color:#d58512;border-color:#985f0d}.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning{background-image:none}.btn-warning.disabled.focus,.btn-warning.disabled:focus,.btn-warning.disabled:hover,.btn-warning[disabled].focus,.btn-warning[disabled]:focus,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning.focus,fieldset[disabled] .btn-warning:focus,fieldset[disabled] .btn-warning:hover{background-color:#f0ad4e;border-color:#eea236}.btn-warning .badge{color:#f0ad4e;background-color:#fff}.btn-danger{color:#fff;background-color:#d9534f;border-color:#d43f3a}.btn-danger.focus,.btn-danger:focus{color:#fff;background-color:#c9302c;border-color:#761c19}.btn-danger:hover{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger.active.focus,.btn-danger.active:focus,.btn-danger.active:hover,.btn-danger:active.focus,.btn-danger:active:focus,.btn-danger:active:hover,.open>.dropdown-toggle.btn-danger.focus,.open>.dropdown-toggle.btn-danger:focus,.open>.dropdown-toggle.btn-danger:hover{color:#fff;background-color:#ac2925;border-color:#761c19}.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger{background-image:none}.btn-danger.disabled.focus,.btn-danger.disabled:focus,.btn-danger.disabled:hover,.btn-danger[disabled].focus,.btn-danger[disabled]:focus,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger.focus,fieldset[disabled] .btn-danger:focus,fieldset[disabled] .btn-danger:hover{background-color:#d9534f;border-color:#d43f3a}.btn-danger .badge{color:#d9534f;background-color:#fff}.btn-link{font-weight:400;color:#337ab7;border-radius:0}.btn-link,.btn-link.active,.btn-link:active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:active,.btn-link:focus,.btn-link:hover{border-color:transparent}.btn-link:focus,.btn-link:hover{color:#23527c;text-decoration:underline;background-color:transparent}.btn-link[disabled]:focus,.btn-link[disabled]:hover,fieldset[disabled] .btn-link:focus,fieldset[disabled] .btn-link:hover{color:#777;text-decoration:none}.btn-group-lg>.btn,.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.btn-group-sm>.btn,.btn-sm{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.btn-group-xs>.btn,.btn-xs{padding:1px 5px;font-size:12px;line-height:1.5;border-radius:3px}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:5px}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapse{display:none}.collapse.in{display:block}tr.collapse.in{display:table-row}tbody.collapse.in{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition-timing-function:ease;-o-transition-timing-function:ease;transition-timing-function:ease;-webkit-transition-duration:.35s;-o-transition-duration:.35s;transition-duration:.35s;-webkit-transition-property:height,visibility;-o-transition-property:height,visibility;transition-property:height,visibility}.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px dashed;border-top:4px solid\9;border-right:4px solid transparent;border-left:4px solid transparent}.dropdown,.dropup{position:relative}.dropdown-toggle:focus{outline:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:14px;text-align:left;list-style:none;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,.175);box-shadow:0 6px 12px rgba(0,0,0,.175)}.dropdown-menu.pull-right{right:0;left:auto}.dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.dropdown-menu>li>a{display:block;padding:3px 20px;clear:both;font-weight:400;line-height:1.42857143;color:#333;white-space:nowrap}.dropdown-menu>li>a:focus,.dropdown-menu>li>a:hover{color:#262626;text-decoration:none;background-color:#f5f5f5}.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover{color:#fff;text-decoration:none;background-color:#337ab7;outline:0}.dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{color:#777}.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{text-decoration:none;cursor:not-allowed;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled=false)}.open>.dropdown-menu{display:block}.open>a{outline:0}.dropdown-menu-right{right:0;left:auto}.dropdown-menu-left{right:auto;left:0}.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.42857143;color:#777;white-space:nowrap}.dropdown-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:990}.pull-right>.dropdown-menu{right:0;left:auto}.dropup .caret,.navbar-fixed-bottom .dropdown .caret{content:"";border-top:0;border-bottom:4px dashed;border-bottom:4px solid\9}.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:2px}@media (min-width:768px){.navbar-right .dropdown-menu{right:0;left:auto}.navbar-right .dropdown-menu-left{right:auto;left:0}}.btn-group,.btn-group-vertical{position:relative;display:inline-block;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;float:left}.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover{z-index:2}.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group{margin-left:-1px}.btn-toolbar{margin-left:-5px}.btn-toolbar .btn,.btn-toolbar .btn-group,.btn-toolbar .input-group{float:left}.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group{margin-left:5px}.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}.btn-group>.btn:first-child{margin-left:0}.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.btn-group>.btn-group{float:left}.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-bottom-left-radius:0}.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{outline:0}.btn-group>.btn+.dropdown-toggle{padding-right:8px;padding-left:8px}.btn-group>.btn-lg+.dropdown-toggle{padding-right:12px;padding-left:12px}.btn-group.open .dropdown-toggle{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn-group.open .dropdown-toggle.btn-link{-webkit-box-shadow:none;box-shadow:none}.btn .caret{margin-left:0}.btn-lg .caret{border-width:5px 5px 0;border-bottom-width:0}.dropup .btn-lg .caret{border-width:0 5px 5px}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn{display:block;float:none;width:100%;max-width:100%}.btn-group-vertical>.btn-group>.btn{float:none}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn:not(:first-child):not(:last-child){border-radius:0}.btn-group-vertical>.btn:first-child:not(:last-child){border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn:last-child:not(:first-child){border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-top-right-radius:0}.btn-group-justified{display:table;width:100%;table-layout:fixed;border-collapse:separate}.btn-group-justified>.btn,.btn-group-justified>.btn-group{display:table-cell;float:none;width:1%}.btn-group-justified>.btn-group .btn{width:100%}.btn-group-justified>.btn-group .dropdown-menu{left:auto}[data-toggle=buttons]>.btn input[type=checkbox],[data-toggle=buttons]>.btn input[type=radio],[data-toggle=buttons]>.btn-group>.btn input[type=checkbox],[data-toggle=buttons]>.btn-group>.btn input[type=radio]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative;display:table;border-collapse:separate}.input-group[class*=col-]{float:none;padding-right:0;padding-left:0}.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group .form-control:focus{z-index:3}.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{height:46px;line-height:46px}select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn,textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn{height:auto}.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:30px;line-height:30px}select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn,textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn{height:auto}.input-group .form-control,.input-group-addon,.input-group-btn{display:table-cell}.input-group .form-control:not(:first-child):not(:last-child),.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child){border-radius:0}.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group-addon{padding:6px 12px;font-size:14px;font-weight:400;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}.input-group-addon.input-sm{padding:5px 10px;font-size:12px;border-radius:3px}.input-group-addon.input-lg{padding:10px 16px;font-size:18px;border-radius:6px}.input-group-addon input[type=checkbox],.input-group-addon input[type=radio]{margin-top:0}.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn-group:not(:last-child)>.btn,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.input-group-addon:first-child{border-right:0}.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:first-child>.btn-group:not(:first-child)>.btn,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-addon:last-child{border-left:0}.input-group-btn{position:relative;font-size:0;white-space:nowrap}.input-group-btn>.btn{position:relative}.input-group-btn>.btn+.btn{margin-left:-1px}.input-group-btn>.btn:active,.input-group-btn>.btn:focus,.input-group-btn>.btn:hover{z-index:2}.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{margin-right:-1px}.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group{z-index:2;margin-left:-1px}.nav{padding-left:0;margin-bottom:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#eee}.nav>li.disabled>a{color:#777}.nav>li.disabled>a:focus,.nav>li.disabled>a:hover{color:#777;text-decoration:none;cursor:not-allowed;background-color:transparent}.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{background-color:#eee;border-color:#337ab7}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{color:#555;cursor:default;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{color:#fff;background-color:#337ab7}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}.navbar-collapse.in{overflow-y:auto}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-collapse.in{overflow-y:visible}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse{padding-right:0;padding-left:0}}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:200px}}.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-static-top{z-index:1000;border-width:0 0 1px}@media (min-width:768px){.navbar-static-top{border-radius:0}}.navbar-fixed-bottom,.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-bottom,.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-brand>img{display:block}@media (min-width:768px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (max-width:767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:focus,.navbar-nav .open .dropdown-menu>li>a:hover{background-image:none}}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}.navbar-form{padding:10px 15px;margin-top:8px;margin-right:-15px;margin-bottom:8px;margin-left:-15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1)}@media (min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.navbar-form .form-control-static{display:inline-block}.navbar-form .input-group{display:inline-table;vertical-align:middle}.navbar-form .input-group .form-control,.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn{width:auto}.navbar-form .input-group>.form-control{width:100%}.navbar-form .control-label{margin-bottom:0;vertical-align:middle}.navbar-form .checkbox,.navbar-form .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.navbar-form .checkbox label,.navbar-form .radio label{padding-left:0}.navbar-form .checkbox input[type=checkbox],.navbar-form .radio input[type=radio]{position:relative;margin-left:0}.navbar-form .has-feedback .form-control-feedback{top:0}}@media (max-width:767px){.navbar-form .form-group{margin-bottom:5px}.navbar-form .form-group:last-child{margin-bottom:0}}@media (min-width:768px){.navbar-form{width:auto;padding-top:0;padding-bottom:0;margin-right:0;margin-left:0;border:0;-webkit-box-shadow:none;box-shadow:none}}.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-left-radius:0;border-top-right-radius:0}.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{margin-bottom:0;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-btn.btn-sm{margin-top:10px;margin-bottom:10px}.navbar-btn.btn-xs{margin-top:14px;margin-bottom:14px}.navbar-text{margin-top:15px;margin-bottom:15px}@media (min-width:768px){.navbar-text{float:left;margin-right:15px;margin-left:15px}}@media (min-width:768px){.navbar-left{float:left!important}.navbar-right{float:right!important;margin-right:-15px}.navbar-right~.navbar-right{margin-right:0}}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-text{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover{color:#333;background-color:transparent}.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus,.navbar-default .navbar-nav>.active>a:hover{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:focus,.navbar-default .navbar-nav>.disabled>a:hover{color:#ccc;background-color:transparent}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#e7e7e7}.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover{color:#555;background-color:#e7e7e7}@media (max-width:767px){.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#777}.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{color:#333;background-color:transparent}.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#ccc;background-color:transparent}}.navbar-default .navbar-link{color:#777}.navbar-default .navbar-link:hover{color:#333}.navbar-default .btn-link{color:#777}.navbar-default .btn-link:focus,.navbar-default .btn-link:hover{color:#333}.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:focus,fieldset[disabled] .navbar-default .btn-link:hover{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand{color:#9d9d9d}.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-text{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a:focus,.navbar-inverse .navbar-nav>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:focus,.navbar-inverse .navbar-nav>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:focus,.navbar-inverse .navbar-nav>.disabled>a:hover{color:#444;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#101010}.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:focus,.navbar-inverse .navbar-nav>.open>a:hover{color:#fff;background-color:#080808}@media (max-width:767px){.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu .divider{background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#444;background-color:transparent}}.navbar-inverse .navbar-link{color:#9d9d9d}.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link{color:#9d9d9d}.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover{color:#fff}.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:focus,fieldset[disabled] .navbar-inverse .btn-link:hover{color:#444}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.breadcrumb>li{display:inline-block}.breadcrumb>li+li:before{padding:0 5px;color:#ccc;content:"/\00a0"}.breadcrumb>.active{color:#777}.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#337ab7;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{z-index:2;color:#23527c;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:3;color:#fff;cursor:default;background-color:#337ab7;border-color:#337ab7}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}.pager{padding-left:0;margin:20px 0;text-align:center;list-style:none}.pager li{display:inline}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}.pager li>a:focus,.pager li>a:hover{text-decoration:none;background-color:#eee}.pager .next>a,.pager .next>span{float:right}.pager .previous>a,.pager .previous>span{float:left}.pager .disabled>a,.pager .disabled>a:focus,.pager .disabled>a:hover,.pager .disabled>span{color:#777;cursor:not-allowed;background-color:#fff}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.label:focus,a.label:hover{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:focus,.label-default[href]:hover{background-color:#5e5e5e}.label-primary{background-color:#337ab7}.label-primary[href]:focus,.label-primary[href]:hover{background-color:#286090}.label-success{background-color:#5cb85c}.label-success[href]:focus,.label-success[href]:hover{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:focus,.label-info[href]:hover{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:focus,.label-warning[href]:hover{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:focus,.label-danger[href]:hover{background-color:#c9302c}.badge{display:inline-block;min-width:10px;padding:3px 7px;font-size:12px;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:middle;background-color:#777;border-radius:10px}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.btn-group-xs>.btn .badge,.btn-xs .badge{top:0;padding:1px 5px}a.badge:focus,a.badge:hover{color:#fff;text-decoration:none;cursor:pointer}.list-group-item.active>.badge,.nav-pills>.active>a>.badge{color:#337ab7;background-color:#fff}.list-group-item>.badge{float:right}.list-group-item>.badge+.badge{margin-right:5px}.nav-pills>li>a>.badge{margin-left:3px}.jumbotron{padding-top:30px;padding-bottom:30px;margin-bottom:30px;color:inherit;background-color:#eee}.jumbotron .h1,.jumbotron h1{color:inherit}.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}.jumbotron>hr{border-top-color:#d5d5d5}.container .jumbotron,.container-fluid .jumbotron{padding-right:15px;padding-left:15px;border-radius:6px}.jumbotron .container{max-width:100%}@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}.container .jumbotron,.container-fluid .jumbotron{padding-right:60px;padding-left:60px}.jumbotron .h1,.jumbotron h1{font-size:63px}}.thumbnail{display:block;padding:4px;margin-bottom:20px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:border .2s ease-in-out;-o-transition:border .2s ease-in-out;transition:border .2s ease-in-out}.thumbnail a>img,.thumbnail>img{margin-right:auto;margin-left:auto}a.thumbnail.active,a.thumbnail:focus,a.thumbnail:hover{border-color:#337ab7}.thumbnail .caption{padding:9px;color:#333}.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}.alert h4{margin-top:0;color:inherit}.alert .alert-link{font-weight:700}.alert>p,.alert>ul{margin-bottom:0}.alert>p+p{margin-top:5px}.alert-dismissable,.alert-dismissible{padding-right:35px}.alert-dismissable .close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}.alert-success{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.alert-success hr{border-top-color:#c9e2b3}.alert-success .alert-link{color:#2b542c}.alert-info{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.alert-info hr{border-top-color:#a6e1ec}.alert-info .alert-link{color:#245269}.alert-warning{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.alert-warning hr{border-top-color:#f7e1b5}.alert-warning .alert-link{color:#66512c}.alert-danger{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.alert-danger hr{border-top-color:#e4b9c0}.alert-danger .alert-link{color:#843534}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.progress{height:20px;margin-bottom:20px;overflow:hidden;background-color:#f5f5f5;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);box-shadow:inset 0 1px 2px rgba(0,0,0,.1)}.progress-bar{float:left;width:0;height:100%;font-size:12px;line-height:20px;color:#fff;text-align:center;background-color:#337ab7;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);-webkit-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease}.progress-bar-striped,.progress-striped .progress-bar{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);-webkit-background-size:40px 40px;background-size:40px 40px}.progress-bar.active,.progress.active .progress-bar{-webkit-animation:progress-bar-stripes 2s linear infinite;-o-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}.progress-bar-success{background-color:#5cb85c}.progress-striped .progress-bar-success{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-info{background-color:#5bc0de}.progress-striped .progress-bar-info{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-warning{background-color:#f0ad4e}.progress-striped .progress-bar-warning{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-danger{background-color:#d9534f}.progress-striped .progress-bar-danger{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.media{margin-top:15px}.media:first-child{margin-top:0}.media,.media-body{overflow:hidden;zoom:1}.media-body{width:10000px}.media-object{display:block}.media-object.img-thumbnail{max-width:none}.media-right,.media>.pull-right{padding-left:10px}.media-left,.media>.pull-left{padding-right:10px}.media-body,.media-left,.media-right{display:table-cell;vertical-align:top}.media-middle{vertical-align:middle}.media-bottom{vertical-align:bottom}.media-heading{margin-top:0;margin-bottom:5px}.media-list{padding-left:0;list-style:none}.list-group{padding-left:0;margin-bottom:20px}.list-group-item{position:relative;display:block;padding:10px 15px;margin-bottom:-1px;background-color:#fff;border:1px solid #ddd}.list-group-item:first-child{border-top-left-radius:4px;border-top-right-radius:4px}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}a.list-group-item,button.list-group-item{color:#555}a.list-group-item .list-group-item-heading,button.list-group-item .list-group-item-heading{color:#333}a.list-group-item:focus,a.list-group-item:hover,button.list-group-item:focus,button.list-group-item:hover{color:#555;text-decoration:none;background-color:#f5f5f5}button.list-group-item{width:100%;text-align:left}.list-group-item.disabled,.list-group-item.disabled:focus,.list-group-item.disabled:hover{color:#777;cursor:not-allowed;background-color:#eee}.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading{color:inherit}.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text{color:#777}.list-group-item.active,.list-group-item.active:focus,.list-group-item.active:hover{z-index:2;color:#fff;background-color:#337ab7;border-color:#337ab7}.list-group-item.active .list-group-item-heading,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>small{color:inherit}.list-group-item.active .list-group-item-text,.list-group-item.active:focus .list-group-item-text,.list-group-item.active:hover .list-group-item-text{color:#c7ddef}.list-group-item-success{color:#3c763d;background-color:#dff0d8}a.list-group-item-success,button.list-group-item-success{color:#3c763d}a.list-group-item-success .list-group-item-heading,button.list-group-item-success .list-group-item-heading{color:inherit}a.list-group-item-success:focus,a.list-group-item-success:hover,button.list-group-item-success:focus,button.list-group-item-success:hover{color:#3c763d;background-color:#d0e9c6}a.list-group-item-success.active,a.list-group-item-success.active:focus,a.list-group-item-success.active:hover,button.list-group-item-success.active,button.list-group-item-success.active:focus,button.list-group-item-success.active:hover{color:#fff;background-color:#3c763d;border-color:#3c763d}.list-group-item-info{color:#31708f;background-color:#d9edf7}a.list-group-item-info,button.list-group-item-info{color:#31708f}a.list-group-item-info .list-group-item-heading,button.list-group-item-info .list-group-item-heading{color:inherit}a.list-group-item-info:focus,a.list-group-item-info:hover,button.list-group-item-info:focus,button.list-group-item-info:hover{color:#31708f;background-color:#c4e3f3}a.list-group-item-info.active,a.list-group-item-info.active:focus,a.list-group-item-info.active:hover,button.list-group-item-info.active,button.list-group-item-info.active:focus,button.list-group-item-info.active:hover{color:#fff;background-color:#31708f;border-color:#31708f}.list-group-item-warning{color:#8a6d3b;background-color:#fcf8e3}a.list-group-item-warning,button.list-group-item-warning{color:#8a6d3b}a.list-group-item-warning .list-group-item-heading,button.list-group-item-warning .list-group-item-heading{color:inherit}a.list-group-item-warning:focus,a.list-group-item-warning:hover,button.list-group-item-warning:focus,button.list-group-item-warning:hover{color:#8a6d3b;background-color:#faf2cc}a.list-group-item-warning.active,a.list-group-item-warning.active:focus,a.list-group-item-warning.active:hover,button.list-group-item-warning.active,button.list-group-item-warning.active:focus,button.list-group-item-warning.active:hover{color:#fff;background-color:#8a6d3b;border-color:#8a6d3b}.list-group-item-danger{color:#a94442;background-color:#f2dede}a.list-group-item-danger,button.list-group-item-danger{color:#a94442}a.list-group-item-danger .list-group-item-heading,button.list-group-item-danger .list-group-item-heading{color:inherit}a.list-group-item-danger:focus,a.list-group-item-danger:hover,button.list-group-item-danger:focus,button.list-group-item-danger:hover{color:#a94442;background-color:#ebcccc}a.list-group-item-danger.active,a.list-group-item-danger.active:focus,a.list-group-item-danger.active:hover,button.list-group-item-danger.active,button.list-group-item-danger.active:focus,button.list-group-item-danger.active:hover{color:#fff;background-color:#a94442;border-color:#a94442}.list-group-item-heading{margin-top:0;margin-bottom:5px}.list-group-item-text{margin-bottom:0;line-height:1.3}.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}.panel-body{padding:15px}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px}.panel-heading>.dropdown .dropdown-toggle{color:inherit}.panel-title{margin-top:0;margin-bottom:0;font-size:16px;color:inherit}.panel-title>.small,.panel-title>.small>a,.panel-title>a,.panel-title>small,.panel-title>small>a{color:inherit}.panel-footer{padding:10px 15px;background-color:#f5f5f5;border-top:1px solid #ddd;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.list-group,.panel>.panel-collapse>.list-group{margin-bottom:0}.panel>.list-group .list-group-item,.panel>.panel-collapse>.list-group .list-group-item{border-width:1px 0;border-radius:0}.panel>.list-group:first-child .list-group-item:first-child,.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child{border-top:0;border-top-left-radius:3px;border-top-right-radius:3px}.panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child{border-bottom:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child{border-top-left-radius:0;border-top-right-radius:0}.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}.list-group+.panel-footer{border-top-width:0}.panel>.panel-collapse>.table,.panel>.table,.panel>.table-responsive>.table{margin-bottom:0}.panel>.panel-collapse>.table caption,.panel>.table caption,.panel>.table-responsive>.table caption{padding-right:15px;padding-left:15px}.panel>.table-responsive:first-child>.table:first-child,.panel>.table:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child,.panel>.table:first-child>thead:first-child>tr:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child{border-top-left-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child{border-top-right-radius:3px}.panel>.table-responsive:last-child>.table:last-child,.panel>.table:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child{border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child{border-bottom-right-radius:3px}.panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body{border-top:1px solid #ddd}.panel>.table>tbody:first-child>tr:first-child td,.panel>.table>tbody:first-child>tr:first-child th{border-top:0}.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th{border-bottom:0}.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}.panel>.table-responsive{margin-bottom:0;border:0}.panel-group{margin-bottom:20px}.panel-group .panel{margin-bottom:0;border-radius:4px}.panel-group .panel+.panel{margin-top:5px}.panel-group .panel-heading{border-bottom:0}.panel-group .panel-heading+.panel-collapse>.list-group,.panel-group .panel-heading+.panel-collapse>.panel-body{border-top:1px solid #ddd}.panel-group .panel-footer{border-top:0}.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}.panel-default{border-color:#ddd}.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}.panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ddd}.panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333}.panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ddd}.panel-primary{border-color:#337ab7}.panel-primary>.panel-heading{color:#fff;background-color:#337ab7;border-color:#337ab7}.panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:#337ab7}.panel-primary>.panel-heading .badge{color:#337ab7;background-color:#fff}.panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#337ab7}.panel-success{border-color:#d6e9c6}.panel-success>.panel-heading{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:#d6e9c6}.panel-success>.panel-heading .badge{color:#dff0d8;background-color:#3c763d}.panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#d6e9c6}.panel-info{border-color:#bce8f1}.panel-info>.panel-heading{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:#bce8f1}.panel-info>.panel-heading .badge{color:#d9edf7;background-color:#31708f}.panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#bce8f1}.panel-warning{border-color:#faebcc}.panel-warning>.panel-heading{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:#faebcc}.panel-warning>.panel-heading .badge{color:#fcf8e3;background-color:#8a6d3b}.panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#faebcc}.panel-danger{border-color:#ebccd1}.panel-danger>.panel-heading{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ebccd1}.panel-danger>.panel-heading .badge{color:#f2dede;background-color:#a94442}.panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ebccd1}.embed-responsive{position:relative;display:block;height:0;padding:0;overflow:hidden}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-16by9{padding-bottom:56.25%}.embed-responsive-4by3{padding-bottom:75%}.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);box-shadow:inset 0 1px 1px rgba(0,0,0,.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,.15)}.well-lg{padding:24px;border-radius:6px}.well-sm{padding:9px;border-radius:3px}.close{float:right;font-size:21px;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;filter:alpha(opacity=20);opacity:.2}.close:focus,.close:hover{color:#000;text-decoration:none;cursor:pointer;filter:alpha(opacity=50);opacity:.5}button.close{-webkit-appearance:none;padding:0;cursor:pointer;background:0 0;border:0}.modal-open{overflow:hidden}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;overflow:hidden;-webkit-overflow-scrolling:touch;outline:0}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out;-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);-o-transform:translate(0,-25%);transform:translate(0,-25%)}.modal.in .modal-dialog{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);-o-transform:translate(0,0);transform:translate(0,0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:10px}.modal-content{position:relative;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #999;border:1px solid rgba(0,0,0,.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);box-shadow:0 3px 9px rgba(0,0,0,.5)}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}.modal-backdrop.fade{filter:alpha(opacity=0);opacity:0}.modal-backdrop.in{filter:alpha(opacity=50);opacity:.5}.modal-header{padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}.modal-body{position:relative;padding:15px}.modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:768px){.modal-dialog{width:600px;margin:30px auto}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5)}.modal-sm{width:300px}}@media (min-width:992px){.modal-lg{width:900px}}.tooltip{position:absolute;z-index:1070;display:block;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;font-style:normal;font-weight:400;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;word-wrap:normal;white-space:normal;filter:alpha(opacity=0);opacity:0;line-break:auto}.tooltip.in{filter:alpha(opacity=90);opacity:.9}.tooltip.top{padding:5px 0;margin-top:-3px}.tooltip.right{padding:0 5px;margin-left:3px}.tooltip.bottom{padding:5px 0;margin-top:3px}.tooltip.left{padding:0 5px;margin-left:-3px}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-left .tooltip-arrow{right:5px;bottom:0;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-right .tooltip-arrow{bottom:0;left:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-left .tooltip-arrow{top:0;right:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-right .tooltip-arrow{top:0;left:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.popover{position:absolute;top:0;left:0;z-index:1060;display:none;max-width:276px;padding:1px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-style:normal;font-weight:400;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;word-wrap:normal;white-space:normal;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2);line-break:auto}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover-title{padding:8px 14px;margin:0;font-size:14px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}.popover-content{padding:9px 14px}.popover>.arrow,.popover>.arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}.popover>.arrow{border-width:11px}.popover>.arrow:after{content:"";border-width:10px}.popover.top>.arrow{bottom:-11px;left:50%;margin-left:-11px;border-top-color:#999;border-top-color:rgba(0,0,0,.25);border-bottom-width:0}.popover.top>.arrow:after{bottom:1px;margin-left:-10px;content:" ";border-top-color:#fff;border-bottom-width:0}.popover.right>.arrow{top:50%;left:-11px;margin-top:-11px;border-right-color:#999;border-right-color:rgba(0,0,0,.25);border-left-width:0}.popover.right>.arrow:after{bottom:-10px;left:1px;content:" ";border-right-color:#fff;border-left-width:0}.popover.bottom>.arrow{top:-11px;left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,.25)}.popover.bottom>.arrow:after{top:1px;margin-left:-10px;content:" ";border-top-width:0;border-bottom-color:#fff}.popover.left>.arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:#999;border-left-color:rgba(0,0,0,.25)}.popover.left>.arrow:after{right:1px;bottom:-10px;content:" ";border-right-width:0;border-left-color:#fff}.carousel{position:relative}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner>.item{position:relative;display:none;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel-inner>.item>a>img,.carousel-inner>.item>img{line-height:1}@media all and (transform-3d),(-webkit-transform-3d){.carousel-inner>.item{-webkit-transition:-webkit-transform .6s ease-in-out;-o-transition:-o-transform .6s ease-in-out;transition:transform .6s ease-in-out;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}.carousel-inner>.item.active.right,.carousel-inner>.item.next{left:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}.carousel-inner>.item.active.left,.carousel-inner>.item.prev{left:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}.carousel-inner>.item.active,.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right{left:0;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;bottom:0;left:0;width:15%;font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6);background-color:rgba(0,0,0,0);filter:alpha(opacity=50);opacity:.5}.carousel-control.left{background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,.0001)));background-image:linear-gradient(to right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);background-repeat:repeat-x}.carousel-control.right{right:0;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.5)));background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);background-repeat:repeat-x}.carousel-control:focus,.carousel-control:hover{color:#fff;text-decoration:none;filter:alpha(opacity=90);outline:0;opacity:.9}.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{position:absolute;top:50%;z-index:5;display:inline-block;margin-top:-10px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{left:50%;margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{right:50%;margin-right:-10px}.carousel-control .icon-next,.carousel-control .icon-prev{width:20px;height:20px;font-family:serif;line-height:1}.carousel-control .icon-prev:before{content:'\2039'}.carousel-control .icon-next:before{content:'\203a'}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;padding-left:0;margin-left:-30%;text-align:center;list-style:none}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;cursor:pointer;background-color:#000\9;background-color:rgba(0,0,0,0);border:1px solid #fff;border-radius:10px}.carousel-indicators .active{width:12px;height:12px;margin:0;background-color:#fff}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6)}.carousel-caption .btn{text-shadow:none}@media screen and (min-width:768px){.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{width:30px;height:30px;margin-top:-10px;font-size:30px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-10px}.carousel-caption{right:20%;left:20%;padding-bottom:30px}.carousel-indicators{bottom:20px}}.btn-group-vertical>.btn-group:after,.btn-group-vertical>.btn-group:before,.btn-toolbar:after,.btn-toolbar:before,.clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.dl-horizontal dd:after,.dl-horizontal dd:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.modal-footer:after,.modal-footer:before,.modal-header:after,.modal-header:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.pager:after,.pager:before,.panel-body:after,.panel-body:before,.row:after,.row:before{display:table;content:" "}.btn-group-vertical>.btn-group:after,.btn-toolbar:after,.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.modal-footer:after,.modal-header:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.pager:after,.panel-body:after,.row:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide{display:none!important}.show{display:block!important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none!important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-lg,.visible-md,.visible-sm,.visible-xs{display:none!important}.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block{display:none!important}@media (max-width:767px){.visible-xs{display:block!important}table.visible-xs{display:table!important}tr.visible-xs{display:table-row!important}td.visible-xs,th.visible-xs{display:table-cell!important}}@media (max-width:767px){.visible-xs-block{display:block!important}}@media (max-width:767px){.visible-xs-inline{display:inline!important}}@media (max-width:767px){.visible-xs-inline-block{display:inline-block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block!important}table.visible-sm{display:table!important}tr.visible-sm{display:table-row!important}td.visible-sm,th.visible-sm{display:table-cell!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block!important}table.visible-md{display:table!important}tr.visible-md{display:table-row!important}td.visible-md,th.visible-md{display:table-cell!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block!important}}@media (min-width:1200px){.visible-lg{display:block!important}table.visible-lg{display:table!important}tr.visible-lg{display:table-row!important}td.visible-lg,th.visible-lg{display:table-cell!important}}@media (min-width:1200px){.visible-lg-block{display:block!important}}@media (min-width:1200px){.visible-lg-inline{display:inline!important}}@media (min-width:1200px){.visible-lg-inline-block{display:inline-block!important}}@media (max-width:767px){.hidden-xs{display:none!important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none!important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none!important}}@media (min-width:1200px){.hidden-lg{display:none!important}}.visible-print{display:none!important}@media print{.visible-print{display:block!important}table.visible-print{display:table!important}tr.visible-print{display:table-row!important}td.visible-print,th.visible-print{display:table-cell!important}}.visible-print-block{display:none!important}@media print{.visible-print-block{display:block!important}}.visible-print-inline{display:none!important}@media print{.visible-print-inline{display:inline!important}}.visible-print-inline-block{display:none!important}@media print{.visible-print-inline-block{display:inline-block!important}}@media print{.hidden-print{display:none!important}}
  /*# sourceMappingURL=bootstrap.min.css.map */
</style>

</head>
<body>
<section class="content">
    <div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-10">
                <div style="top-bar-title padding-bottom margin-left:-900px;margin-top:15px;"><img src="{{$UM}}" height="80px;"width="80;"alt="logo"></img></div>
                </div>
              
                <div class="col-md-10">
                <center>
                 <div class="top-bar-title padding-bottom" style="margin-left:120px;margin-top:-80px;"><b>
                 UNIVERSITE D'ANTANANARIVO <br/>INSTITUT D'ENSEIGNEMENT SUPERIEUR<br/>DE SOAVINANDRIANA ITASY </b>
                </div>
                </center>
                <br/>
                <br/>
                    <div class="top-bar-title padding-bottom">Nom Etudiant :{{App\Etudiants::select('nom')->where('id',$etudiant)->first()->nom}}
                    <br/>
                    Pr??nom :{{App\Etudiants::select('prenom')->where('id',$etudiant)->first()->prenom}}<br/>
                   Mention:{{App\Etudiants::join('filieres','filieres.id','etudiants.filiere_id')->join('departements','departements.id','filieres.departement_id')->select('departements.nom_departement')->where('etudiants.id',$etudiant)->first()->nom_departement}}  <br/>Parcours : {{$parcours}}<br/>Niveau : {{$niveau}}
                   </div>
                 
                   <img src="{{$namef}}" style="margin-left:290px;margin-top:-90px" height="80px;"width="80;"alt="logo"></img>
               

                </div>
               
                <div style="top-bar-title"><img src="{{$IESSI}}" style="margin-left:600px;margin-top:-220px" height="80px;"width="80;"alt="logo"></img></div>
                 <br/>
                <div class="col-md-2 top-right-btn">
                </div>
               
            </div>
        </div>
    </div>
      <!-- Default box -->
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
         <div>
              <table cellpadding="0" cellspacing="0" border="1" width="100%;" >
                <thead>
                <tr>
               <td colspan="6"><center><b>RELEVE DES NOTES</b></center></td>
                </tr>
                  <tr>
                 
                    <th>UE</th>
                    <th>Nom Mati??re</th>
                    <th>Note/20</th>
                    <th>Validation</th>
                    <th>Coeff UE</th>
                    <th>Cr??dit</th>
                   
                  </tr>
                </thead>
                <tbody>
                @for($i=0;$i<count($note);$i++)
                @if(count($note[$i])>1)
               
                @for($j=0;$j<count($note[$i]);$j++)
                  <tr >
                  @if($j==0)
                    <td rowspan="{{count($note[$i])}}">{{$note[$i][$j]['UE']}}</td>
                  @endif
                    <td>{{$note[$i][$j]['matiere']}}</td>
                    <td>{{$note[$i][$j]['note']}}</td>
                    <td></td>
                    <td>{{$note[$i][$j]['coeff']}}</td>
                    <td>{{$note[$i][$j]['credit']}}</td>
                   
                  </tr>
                 
                  @endfor
                  <tr> 
                  <td></td>
                  <td><b><center><u>Moyenne</u></center></b></td>
                  <td><div class="pull-right"><b>{{$note[$i][0]['moyenne']}}</b></div></td>
                  @if($note[$i][0]['moyenne']>10)
                  <td><center><b>Valid??</b></center></td>
                  @else
                  <td><center><b>Non Valid??</b></center></td>
                  @endif
                  <td></td>
                  <td></td>
                 
                  </tr>
                  @endif
                  @if(count($note[$i])==1)
                  @for($j=0;$j<count($note[$i]);$j++)
                  <tr>
                    <td>{{$note[$i][$j]['UE']}}</td>
                    <td>{{$note[$i][$j]['matiere']}}</td>
                    <td>{{$note[$i][$j]['note']}}</td>
                    <td></td>
                    <td>{{$note[$i][$j]['coeff']}}</td>
                    <td>{{$note[$i][$j]['credit']}}</td>
                   
                  </tr>
                 
                  <tr> 
                  <td></td>
                  <td><b><center><u>Moyenne</u></center></b></td>
                  <td><div class="pull-right"><b>{{$note[$i][$j]['moyenne']}}<b></div></td>
                  @if($note[$i][$j]['moyenne']>10)
                  <td><center><b>Valid??</b></center></td>
                  @else
                  <td><center><b>Non Valid??</b></center></td>
                  @endif
                  <td></td>
                  <td></td>
                  
                 
                  </tr>
                  @endfor
                  @endif
                  @endfor
                  <tr>
                  <td></td>
                  <td><b><u>MOYENNE GENERAL</u></b></td>
                  <td>{{$MoyenneGeneral}}</td>
                  <td></td>
                  <td><button>{{$totalCoefficient}}</button></td>
                  <td><button>{{$totalglobalCredit}}</button></td>
                  </tr>
                
                </tbody>
              
              </table>
              <div class="pull-right">
              <p>Responsable</p><br/>
                <p style="margin-right:3px;"> {{$responsable}} </p>
            </div>
              <tfooter>
              <form action="{{route('ExportPDFReleve')}}" method="POST">
              {{csrf_field()}}
              <input type="hidden" name="et_id" value="{{$etudiant}}">
              <input type="hidden" name="type_exam_id" value="{{$type_exam_id}}">
             <center>
                <button><i class="fa fa-print"></i></button>
             </center>
                </form>
                </tfooter>
            </div>
          
        </div>
        
        <!-- /.box-body -->
    </div>
   
    <!-- /.box -->
</section>

</body>
<script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</html>


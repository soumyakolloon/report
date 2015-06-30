<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Stacked column chart with data from MySQL using Highcharts</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!--        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.address/1.6/jquery.address.min.js"></script>
        <script type="text/javascript" src="j"></script>-->
	 <script type="text/javascript" src="js/jsvalidation.js"></script>
         
	 </head>
	<body>
    <header>
     <h1>Quality Analysis</h1>

        <div id="menu_nav">
        <ul>
        <li><a href="?controller=pages&action=home">Create Project</li></a>
        <li><a href="?controller=pages&action=createstatus">Status</a></li>
        <li><a href="?controller=pages&action=reportdata">Reports</a></li>
        <!--<li><a href="?controller=reports&action=index">Generate Report</a></li>-->
        </ul>
        </div>
     
    </header>

    <?php require_once('routes.php'); ?>
	
     <script src="http://code.highcharts.com/highcharts.js"></script>
     <script src="http://code.highcharts.com/modules/exporting.js"></script>
    <div class="footer">
     Quality Report - For Freedom Finance team
    </div>
	
  <body onload="checkFirstVisit()">
<html>
    
 
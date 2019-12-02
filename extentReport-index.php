<?php
require('session.php');
include('env.php');
// echo $_SERVER["HTTP_HOST"];
?>



<!DOCTYPE html>
<html>
	<head>
		<!--
			ExtentReports Library 2.41.1 | http://relevantcodes.com/extentreports-for-selenium/ | https://github.com/anshooarora/
			Copyright (c) 2015, Anshoo Arora (Relevant Codes) | Copyrights licensed under the New BSD License | http://opensource.org/licenses/BSD-3-Clause
			Documentation: http://extentreports.relevantcodes.com 
		-->
		<meta charset='UTF-8' /> 
		<meta name='description' content='ExtentReports (by Anshoo Arora) is a reporting library for automation testing for .NET and Java. It creates detailed and beautiful HTML reports for modern browsers. ExtentReports shows test and step summary along with dashboards, system and environment details for quick analysis of your tests.' />
		<meta name='robots' content='noodp, noydir' />
		<meta name='viewport' content='width=device-width, initial-scale=1' />
		<meta name='extentx' id='extentx' content='' />		
		<title>
				ExtentReports 2.0
		</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
		<link href='https://cdn.rawgit.com/anshooarora/extentreports/6032d73243ba4fe4fb8769eb9c315d4fdf16fe68/cdn/extent.css' type='text/css' rel='stylesheet' />
		<style>

		</style>
	</head>
	<body class='extent default standard hide-overflow'>
		<!-- nav -->
		<nav>
			<div class='logo-container blue darken-2'>
				<!-- <a class='logo-content' href='http://extentreports.relevantcodes.com'>
					<span>ExtentReports</span>
				</a> -->
				ExtentReports
				<a href='#' data-activates='slide-out' class='button-collapse hide-on-large-only'><i class='mdi-navigation-apps'></i></a>
			</div>
			<ul id='slide-out' class='side-nav fixed hide-on-med-and-down'>
				
				<li class='analysis waves-effect active'><a href='#!' class='test-view' onclick="_updateCurrentStage(0)"><i class='mdi-action-dashboard'></i>Test Details</a></li>
				
			</ul>
			<span class='report-name'>Web Services</span> <span class='report-headline'> Regression Automation Report</span>
			<ul class='right hide-on-med-and-down nav-right'>
				<li class='theme-selector' alt='Click to toggle dark theme. To enable by default, use js configuration $("body").addClass("dark");' title='Click to toggle dark theme. To enable by default, use js configuration $("body").addClass("dark");'>
					<i class='mdi-hardware-desktop-windows'></i>
				</li>
				<li>
				<li><a href='<?php echo $pathValue;?>/logout.php' class="button">Logout</a></li>
				
					<span class='suite-started-time'>2019-09-25 16:30:12</span>
				</li>
				<li>
					<span>v2.41.1</span>
				</li>
			</ul>
		</nav>
		<!-- /nav -->
		<!-- container -->
		<div class='container'>
			<!-- tests -->
			<div id='test-view' class='row _addedTable'>
				<div class='col _addedCell1'>
					<div class='contents'>
						<div class='card-panel heading'>
							<h5>Modules</h5>
						</div>
						<div class='card-panel no-padding-h no-padding-v no-margin-v'>
							<div class='wrapper'>
								<ul id='test-collection' class='test-collection'>
										<li class='collection-item test displayed active pass '>										
											<div>
											<a href='<?php echo $pathValue;?>/otp/index.php'> OTP & VERIFICATION </a>
												<br>
											</div>
										</li>
										<li class='collection-item test displayed active pass '>
											<div>
											<a href='<?php echo $pathValue;?>/product/index.php'> PRODUCT </a>
												<br>
											</div>
										</li>
										<li class='collection-item test displayed active pass '>
											<div>		
												<a href='<?php echo $pathValue;?>/impcat/index.php'> IMPCAT </a>
												<br>
											</div>
										</li>	
										<li class='collection-item test displayed active pass '>
											<div>
											<a href='<?php echo $pathValue;?>/company/index.php'> COMPANY </a>
												<br>
											</div>
										</li>
										<li class='collection-item test displayed active pass '>
											<div>	
											<a href='<?php echo $pathValue;?>/pdp/index.php'> PDP </a>
												<br>
											</div>
										</li>
										<li class='collection-item test displayed active pass '>
											<div>
												<!-- <a href='http://report.intermesh.net/related/index.html'> RELATED </a> -->
												RELATED
												<br>
											</div>
										</li>
										<li class='collection-item test displayed active pass '>
											<div>
												<!-- <a href='http://report.intermesh.net/user/index.html'> USER </a> -->
												USER
												<br>
											</div>
										</li>	
										<li class='collection-item test displayed active pass '>
											<div>		
												<!-- <a href='http://report.intermesh.net/sid/index.html'> STANDARD PRODUCT </a> -->
												STANDARD PRODUCT
												<br>
											</div>
										</li>	
										<li class='collection-item test displayed active pass '>
											<div>		
												<!-- <a href='http://report.intermesh.net/shorturl/index.html'> SHORT URL </a> -->
												SHORT URL
												<br>
											</div>
										</li>	
										<li class='collection-item test displayed active pass '>
											<div>		
												<!-- <a href='http://report.intermesh.net/sms/index.html'> SMS </a> -->
												SMS
												<br>
											</div>
										</li>	
										<li class='collection-item test displayed active pass '>
											<div>		
												<!-- <a href='http://report.intermesh.net/notification/index.html'> NOTIFICATION </a> -->
												NOTIFICATION
												<br>
											</div>
										</li>	
										<li class='collection-item test displayed active pass '>
											<div>		
												<!-- <a href='http://report.intermesh.net/email/index.html'> EMAIL </a> -->
												EMAIL
												<br>
											</div>
										</li>	
										<li class='collection-item test displayed active pass '>
											<div>		
												<!-- <a href='http://report.intermesh.net/masterdata/index.html'> MASTER-DATA </a> -->
												MASTER-DATA
												<br>
											</div>
										</li>	
										<li class='collection-item test displayed active pass '>
											<div>		
												<!-- <a href='http://report.intermesh.net/isq/index.html'> ISQ </a> -->
												ISQ
												<br>
											</div>
										</li>	
										<li class='collection-item test displayed active pass '>
											<div>		
												<!-- <a href='http://report.intermesh.net/app/index.html'> APP </a> -->
												APP
												<br>
											</div>
										</li>	
										<li class='collection-item test displayed active pass '>
											<div>		
												<!-- <a href='http://report.intermesh.net/csl/index.html'> CSL </a> -->
												CSL
												<br>
											</div>
										</li>	
										<li class='collection-item test displayed active pass '>
											<div>		
												<!-- <a href='http://report.intermesh.net/imageprocessing/index.html'> IMAGE PROCESSING </a> -->
												IMAGE PROCESSING
												<br>
											</div>
										</li>	
										<li class='collection-item test displayed active pass '>
											<div>		
												<!-- <a href='http://report.intermesh.net/graphdb/index.html'> GRAPH DB </a> -->
												
											</div>
										</li>									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src='https://cdn.rawgit.com/anshooarora/extentreports/6032d73243ba4fe4fb8769eb9c315d4fdf16fe68/cdn/extent.js' type='text/javascript'></script>
	</body>
</html>
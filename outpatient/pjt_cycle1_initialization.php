<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Hospital Clinical Management- Outpatient #Project Cycle 1 - Initialization - </title>
		<meta name="description" content="Hospital Clinical Management System Design Documents">
		<meta name="author" content="Man Pak Hong">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href = "css/index.css" rel = "stylesheet" />
		<link href = "javascripts/jquery-ui/jquery-ui.css" rel = "stylesheet" />
		<script type = "text/javascript" src ="javascripts/jquery-3.3.1.js"><!----></script>
		<script type = "text/javascript" src ="javascripts/jquery-ui/jquery-ui.js"><!----></script>
		<script type = "text/javascript" src = "javascripts/index.js"/><!----></script>
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body >
		<div>
			<header>
				<h1>Project Cycle 1 - Initialization</h1>
			</header>
			<h2>First Round design document</h2>
			<nav>
				<a href="alternative_brainstorm.php" target="_blank">Documents, Mindmaps, Sequence diagrams</a><br/>
			</nav>
			
			<h2>Outpatient (Spring MVC, Spring Security)</h2>
			<nav>
				<a href="http://cmsdevbil01:8080/cms-outpatient-web/" target="_blank">http://cmsdevbil01:8080/cms-outpatient-web/</a><br/>
				<a href="http://cmsdevbil02:8080/cms-outpatient-web/" target="_blank">http://cmsdevbil02:8080/cms-outpatient-web/</a><br/>
			</nav>
			
			<video width="320" height="240" controls>
			  <source src="video/codeDetailStructure_Tree.mp4" type="video/mp4">
			  Your browser does not support the video tag.
			</video>
			<h2>Documents</h2>
			<nav>
				<a href="https://docs.google.com/document/d/1lt2A-loY6YVGeIylv1EKmCjP6UIbOWFU6-atUEBF5jc/edit?usp=sharing" target="_blank">User Requirements, Solutions for Back-end framework, Front-end framework</a><br/>
				<a href="https://docs.google.com/document/d/1olmjiSn5o2HfKDrhbAftpSVBou7KvyudGmCmK3bD3_s/edit?usp=sharing" target="_blank">User, User Roles, Privileges, Component(Page/Function, Controls), Components Control</a><br/>
				<a href="https://docs.google.com/document/d/1jB7b7fq2NSo1ojn_BPrP_7qqEjm40p9CDlkYbqYCQvU/edit?usp=sharing" target="_blank">Location</a><br/>
				<a href="https://docs.google.com/document/d/17uyqIbh0OrdrkqAKrhMk9tS8NfHI1fACcjDLy2hMp4c/edit?usp=sharing" target="_blank">Rich Text notes or canned text</a><br/>
				<a href="https://docs.google.com/document/d/1ibYLhlwvex0pUW1EBzDWMb8Wmnev0qWwtORl6Anq754/edit?usp=sharing" target="_blank">Program Specifications</a><br/>
			</nav>
			<h2>Data between CES and CMS design</h2>
			<nav>
				<a href="https://docs.google.com/document/d/1epjAzcuFCnKzIBr-83xnTOiRB8RzUe3x2SFULaGOYmc/edit?usp=sharing" target="_blank">Data between CES and CMS for outpatient consultation</a><br/>
			</nav>
			<h2>Prototypes</h2>
			<nav>
				<a href="http://cmsdevbil01:8080/cms-outpatient-web/" target="_blank">landing page - http://cmsdevbil01:8080/cms-outpatient-web</a><br/>
				<a href="http://cmsdevbil02:8080/cms-outpatient-web/" target="_blank">landing page - http://cmsdevbil02:8080/cms-outpatient-web</a><br/>
			</nav>
			<h2>Mindmaps<img src="images/tip_22x22.png" title="click to show" class="imageClass" alt="tip" onclick="openMindMapTip(event)"/></h2>
			
			<nav>
				<a href="https://drive.google.com/file/d/1R1bEI8pajPZnCWsi3zSr4g5yjfKHEk2w/view?usp=sharing" target="_blank">Alternative Solutions to the existing CMS</a><br/>
				<a href="https://drive.google.com/file/d/1MBilLLqJVmguajveai0b1wqAvcDNVDJq/view?usp=sharing" target="_blank">opc kickoff</a><br/>
				<a href="https://drive.google.com/file/d/1kW0Sus99E3SBnmQOyyazf2sSaUHI4Zno/view?usp=sharing" target="_blank">outpatient_kickoff_20200409</a><br/>
				<a href="https://drive.google.com/file/d/1dPsDzqHy9UJJfJlN1XYzRFuo6D9o070d/view?usp=sharing" target="_blank">Rich Text Note</a><br/>
				<a href="https://drive.google.com/file/d/1DxS1QUtz0fB5mYnuzQ04mQ8CZzvkzRaN/view?usp=sharing" target="_blank">security</a><br/>
				<a href="https://drive.google.com/file/d/1gOlWH-GBj7J7t_1IsHZKPgt2izOqdtNZ/view?usp=sharing" target="_blank">User, Roles, provileges, locations, specialties</a><br/>
			</nav>
			<h2>UML, ER diagram<img src="images/tip_22x22.png" title="click to show" class="imageClass" alt="tip" onclick="openDrawingTip(event)"/></h2>
			<nav>
				<a href="https://drive.google.com/file/d/1gPJCYW7AFTJh8XhwH8j9O8SZVtGX0bq9/view?usp=sharing" target="_blank">Project deployment dependencies</a><br/>
				<a href="https://drive.google.com/file/d/1igzA0ux3JMakD8EeTkAk7t0qhSNw1uA2/view?usp=sharing" target="_blank">Security and Function Control</a><br/>	
				<a href="https://drive.google.com/file/d/1VZgiqnMEb3rMjGD02wgG2CJIf6sVwj9s/view?usp=sharing" target="_blank">Data Model Clinical Note</a><br/>	
			</nav>
			
			
			<div id="mindMap"  class="dialog mindMapClass">
				<ul>
					<li>The link can be opened using google's drive appz, you need to authorize the appz: MindMup 2.0 For Google Drive (recommend)<br/>or
			</li>
					<li>Download the file and using <a href="http://freemind.sourceforge.net/wiki/index.php/Download">FreeMind offical Site</a></li>
				</ul>
			<br/>
			</div>
			<h2>Web Socket Technology - Using for notification/ Alert</h2>
			instant messaging without the need to do polling/ page refresh<br/>
			<video width="320" height="240" controls>
			  <source src="video/websocket_alert.mp4" type="video/mp4">
			  Your browser does not support the video tag.
			</video>
			<h2>Object Model Schema of Legacy system (CES)</h2>
			<nav>
				<a href="cle_data_dictionary.php" target="_blank">Object Model Schema of Legacy system (CES)</a><br/>
			</nav>
			<br/>	
			<h2>Technologies for POC</h2>
			<nav>
				<a href="http://172.20.212.84/treant-js-master/examples/" target="_blank">Treant-js Hierarchy tree</a><br/>
				<a href="http://cmsdevbil01:8080/cms-outpatient-web/specialties" target="_blank">Treant-js Hierarchy tree - actual effect for com_code_detail</a><br/>
				<a href="http://cmsdevbil01:8080/cms-outpatient-web/sampleOrdOrderItemCes" target="_blank">Scroll down and do ajax load on demand (paging)</a><br/>
				<a href="https://rawrfl.es/jquery-drawr/" target="_blank">Jquery-drawr</a><br/>
			</nav>
			<footer>
				<p>
					&copy; by Dave Man
				</p>
			</footer>
		</div>
	</body>
</html>

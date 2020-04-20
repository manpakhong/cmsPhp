<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Hospital Clinical Management System Design Documents - Outpatient</title>
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
				<h1>Clinical Management System</h1>
			</header>
			
			<h2>Project Lifecycle</h2>
			<nav>
				<a href="pjt_cycle1_initialization.php" target="_blank">Cycle 1 - initialization</a><br/>
			</nav>
			
			<h2>Technologies alternative brainstorming</h2>
			<nav>
				<a href="alternative_brainstorm.php" target="_blank">Documents, Mindmaps, Sequence diagrams</a><br/>
			</nav>
			
			<h2>Main Screen Video Demo (LifeRay)</h2>
			<nav>
				<a href="http://cmsdevbil01:8080/cms-outpatient-web/" target="_blank">live demo @http://cmsdevbil01:8080/cms-outpatient-web/</a><br/>
			</nav>
			
			<video width="320" height="240" controls>
			  <source src="video/Outpatient_mainScreen.mp4" type="video/mp4">
			  Your browser does not support the video tag.
			</video>
			<h2>Documents</h2>
			<nav>
				<a href="https://docs.google.com/document/d/12becph8SOUa_s8izxVpSEuSIhPhYVXzxk586uWQ92Vk/edit?usp=sharing" target="_blank">Software Requirements Specifications</a><br/>
				<a href="https://docs.google.com/document/d/1gubQnm_1mmbE3uaoBVuXDvU5bMv1IuqMDfHza6z-s8A/edit?usp=sharing" target="_blank">System Analysis and System Designs (Use cases)</a><br/>
				<a href="https://docs.google.com/document/d/1wPdkOsY5PvgKiYauIFJAqmAN7pfqsc5AA1o7-TUvTcg/edit?usp=sharing" target="_blank">Functional Specifications</a><br/>
				<a href="https://docs.google.com/document/d/1ibYLhlwvex0pUW1EBzDWMb8Wmnev0qWwtORl6Anq754/edit?usp=sharing" target="_blank">Program Specifications</a><br/>
			</nav>
			<h2>Data from CES</h2>
			<nav>
				<a href="https://docs.google.com/document/d/1epjAzcuFCnKzIBr-83xnTOiRB8RzUe3x2SFULaGOYmc/edit?usp=sharing" target="_blank">Data from CES</a><br/>
			</nav>
			<h2>SpreadSheets</h2>
			<nav>
				<a href="https://docs.google.com/spreadsheets/d/17a2OHP8OH5nY-si1tnc3AufnZin2BVaRMQxuDZylyOo/edit?usp=sharing" target="_blank">Data Dictionary</a><br/>
				<a href="https://docs.google.com/spreadsheets/d/1RjIAkpjVab5fWAO1KzMEq_Yjkn-Sfcd_tSWxeUR28JA/edit?usp=sharing" target="_blank">Functional Lists</a><br/>
			</nav>
			<h2>LifeRay Current Coding</h2>
			<nav>
				<span><a href="https://github.com/manpakhong/baptish_cms.git" target="_blank">GitHub for my Current Liferay Code:<br/> https://github.com/manpakhong/baptish_cms.git</a></span><br/>
			</nav>
			<h2>Prototypes</h2>

			<nav>
	  			<?php 
					$folder='prototypes';
					include 'prototypes/demo_content.php'; 
				?>
			</nav>
			<h2>Mindmaps<img src="images/tip_22x22.png" title="click to show" class="imageClass" alt="tip" onclick="openMindMapTip(event)"/></h2>
			
			<nav>
				<a href="https://drive.google.com/file/d/1SRiFI1y-2NWI3vsXFZR4KWC__inZ1fDP/view?usp=sharing" target="_blank">User role</a><br/>
				<a href="https://drive.google.com/file/d/1QKqTMZAGXJnYh0xqkU8MN9QNgQrA4z5R/view?usp=sharing" target="_blank">Resources</a><br/>
				<a href="https://drive.google.com/file/d/1U0Xw83emqlLfa14N2Ty6NN2x6lhbeN_I/view?usp=sharing" target="_blank">Appointment</a><br/>
				<a href="https://drive.google.com/file/d/16pzZR8GsfxdpkbgZHJl42E7nCKhteYn6/view?usp=sharing" target="_blank">Appointment and booking</a><br/>
				<a href="https://drive.google.com/file/d/1YHDgxEpYo0_Hq8A7_BaaCyULGgLDrw94/view?usp=sharing" target="_blank">Nurse</a><br/>
				<a href="https://drive.google.com/file/d/1alCt1BTgqMyXVSLavrRca4lyckhyzhuo/view?usp=sharing" target="_blank">Episode</a><br/>
				<a href="https://drive.google.com/file/d/1O42Y7qt92OaoKQflAhwyzlFMme6SU_p4/view?usp=sharing" target="_blank">Doctor Workbench layout</a><br/>
				<a href="https://drive.google.com/file/d/1v3tlA3Tok4TV6PxsKr0pAHBwAGAi0JCb/view?usp=sharing" target="_blank">Clinical Notes</a><br/>
				<a href="https://drive.google.com/file/d/1nxfTkAkRaVpY5BtTQ9A2B3xXwqUB7elv/view?usp=sharing" target="_blank">Specialties vs Existing Clinical Notes Types</a><br/>
				<a href="https://drive.google.com/file/d/1_E1Qxofy_tAYwnRLTYgir870yVbiUmJW/view?usp=sharing" target="_blank">Rich Text Editor related</a><br/>
				<a href="https://drive.google.com/file/d/1PosKtagCy4A4QF-G3z4zrm5Gkv63IW3u/view?usp=sharing" target="_blank">HA EHRSS - Diagnosis</a><br/>
				<a href="https://drive.google.com/file/d/1aN6or0sfzlgYZBPqRHFxCxNV3PUdB8Hu/view?usp=sharing" target="_blank">CES - Diagnosis</a><br/>
				<a href="https://drive.google.com/file/d/1azVyfkRAkZJTw6rxLJcrtcK5wTTvZHLI/view?usp=sharing" target="_blank">Triage</a><br/>
				<a href="https://drive.google.com/file/d/1GWtnQgvrNepdIObwPjRvOn7W0nJhh4Sz/view?usp=sharing" target="_blank">Allergy Adverse Drug Reaction Alert</a><br/>
				<a href="https://drive.google.com/file/d/1V2k2edE81zpEVq7qp9PSINBD6uiSI4VM/view?usp=sharing" target="_blank">CES Chart</a><br/>
				<a href="https://drive.google.com/file/d/1OAF7aG7hkOF5rkTO84L0ALJDZkeZuZLR/view?usp=sharing" target="_blank">Drug Search Method</a><br/>
				<a href="https://drive.google.com/file/d/1FirEkFITdJ6bmDBiyFUsvRuIdKuLTgpu/view?usp=sharing" target="_blank">Observation (Entered by clicking Patient List's Observation Icon)</a><br/>
				<a href="https://drive.google.com/file/d/1SuvbSM_PzYqPhYx5osmNrng3wpIVyv-8/view?usp=sharing" target="_blank">HA EHRSS - MOE</a><br/>
				<a href="https://drive.google.com/file/d/1hOdO-ISacMRUTfqHPJU0LHOq_AFzbbCJ/view?usp=sharing" target="_blank">Order (other than medication)</a><br/>
				<a href="https://drive.google.com/file/d/1Urxa0ilgQljgmi9cE7HCmfoHUwopC1kF/view?usp=sharing" target="_blank">CES - Result Profiles</a><br/>
				<a href="https://drive.google.com/file/d/1U68LGXOU3IMHYRxTMO2wng2gP505xOLt/view?usp=sharing" target="_blank">CES - ERR</a><br/>
				<a href="https://drive.google.com/file/d/1eldlruXmmoZ53mPlD3MANfMUs9VnayQA/view?usp=sharing" target="_blank">First Data Bank (FDB)</a><br/>
				<a href="https://drive.google.com/file/d/1JCQkqLW46_RhwVlIQkknzaQBXP-Bmh5n/view?usp=sharing" target="_blank">History</a><br/>
				<a href="https://drive.google.com/file/d/1xlCfwjNLsmSqzxnksczt1FotE7-Cvy4P/view?usp=sharing" target="_blank">Letter</a><br/>
				<a href="https://drive.google.com/file/d/1GIEMDvprFALybwIio8Q9HlefOueQidZo/view?usp=sharing" target="_blank">OT Record (Procuedure)</a><br/>
				<a href="https://drive.google.com/file/d/19rIzKlTUZTG8zpdZw8iaAmqg8a2dFQeN/view?usp=sharing" target="_blank">CES - Patient Alert</a><br/>
				<a href="https://drive.google.com/file/d/1TiUAzPpipdfJBSX6RKWfr5fkNMnGYe01/view?usp=sharing" target="_blank">Payor Details</a><br/>
				<a href="https://drive.google.com/file/d/1L730_8pYVbivJM0k1pUu9h-elFkiOcYv/view?usp=sharing" target="_blank">Pregnancies Details</a><br/>
			</nav>
			
			<div id="mindMap"  class="dialog mindMapClass">
				<ul>
					<li>The link can be opened using google's drive appz, you need to authorize the appz: MindMup 2.0 For Google Drive (recommend)<br/>or
			</li>
					<li>Download the file and using <a href="http://freemind.sourceforge.net/wiki/index.php/Download">FreeMind offical Site</a></li>
				</ul>
			<br/>
			</div>
			<h2>UML<img src="images/tip_22x22.png" title="click to show" class="imageClass" alt="tip" onclick="openDrawingTip(event)"/></h2>
			<nav>
				<a href="https://drive.google.com/file/d/1eW3WqF3jxTJfM7T1an8tl9gmze0NOnIm/view?usp=sharing" target="_blank">Common Controller</a><br/>
				<a href="https://drive.google.com/file/d/1BRvP5sSRQVvSxH7H1wm7FcjzygMb4rME/view?usp=sharing" target="_blank">Bundles Factory</a><br/>
				<a href="https://drive.google.com/file/d/1eysoyfK8zzK78F2RMciQ51fikG0q_DS1/view?usp=sharing" target="_blank">Project Structure</a><br/>
				<a href="https://drive.google.com/file/d/1QUFBtjW0bDAl0uhkTFg_xbTC3YUpjiiJ/view?usp=sharing" target="_blank">Quartz Scheduler</a><br/>
				<a href="https://drive.google.com/file/d/1SpjfRlJhVaNlGH4b3QwtvlL9z8lVeOKn/view?usp=sharing" target="_blank">Message Chain</a><br/>
				<a href="https://drive.google.com/file/d/1q9MVQsMEQNdAyubBFQAHCFFQMzBdXYJM/view?usp=sharing" target="_blank">Audit Trail</a><br/>
				
			</nav>			
			<h2>Data Models<img src="images/tip_22x22.png" title="click to show" class="imageClass" alt="tip" onclick="openDrawingTip(event)"/></h2>
			<nav>
				<a href="https://drive.google.com/file/d/1O5aA_aV8MboD8SGepAysU79iJTOCyzD6/view?usp=sharing" target="_blank">User Authentication</a><br/>
				<a href="https://drive.google.com/file/d/1x6puX4yaaSUZFByzcJursrcUGUJbJfyf/view?usp=sharing" target="_blank">Appointment</a><br/>
				<a href="https://drive.google.com/file/d/1Ax6_KNctaoqXECBhxp50S7PIRjgDMVtC/view?usp=sharing" target="_blank">Schedule and Appointment</a><br/>
				<a href="https://drive.google.com/file/d/1ccIGcDa2JRS0iiSREzo2xLGjHm5sDFYi/view?usp=sharing" target="_blank">System Code</a><br/>
				<a href="https://drive.google.com/file/d/1HEG4DRsm2Z5Ig0J3A5Kq7xOODmBcvIK7/view?usp=sharing" target="_blank">Episode</a><br/>
				<a href="https://drive.google.com/file/d/1KcCZGeMcvNcgj6KUOPnEfXs83rl3ZIBV/view?usp=sharing" target="_blank">Flow Stage</a><br/>
				<a href="https://drive.google.com/file/d/19D-iZ5VzFB7VSgVn7kj74-JWSvgldy2g/view?usp=sharing" target="_blank">Family Medical History</a><br/>
				<a href="https://drive.google.com/file/d/17J7BddE2sm0g-EH-S9jSPnvTEzN7qN_h/view?usp=sharing" target="_blank">Social History</a><br/>
				<a href="https://drive.google.com/file/d/10oRNVN5FkKB-JqVKoOUgMvExdQwVgw54/view?usp=sharing" target="_blank">Regular/ Long-Term Medication History</a><br/>
				<a href="https://drive.google.com/file/d/1mGi-LGptMdxkCP1HWGl_KYFOQOuYX7zF/view?usp=sharing" target="_blank">Clinical Notes</a><br/>
				<a href="https://drive.google.com/file/d/1sAeSYndDrrq4PvMCrSLM075jA3-Pl8BF/view?usp=sharing" target="_blank">Generic Observation</a><br/>
				<a href="https://drive.google.com/file/d/1Udv3blevIjOidDKGhYeAe4pXaoECmC2D/view?usp=sharing" target="_blank">HA EHRSS MOE</a><br/>
				<a href="https://drive.google.com/file/d/1veHCoOBqyDIXH0twCXAKLf5uJ_DG5UeV/view?usp=sharing" target="_blank">Lab Results</a><br/>
				<a href="https://drive.google.com/file/d/1m1Tgv_8wvbBk29H0AYzrS3TTGJfCc5zL/view?usp=sharing" target="_blank">Letter</a><br/>
				<a href="https://drive.google.com/file/d/1bnmiaeXnc-W3Sntl7SbWAK9YHiPTMFAF/view?usp=sharing" target="_blank">Medication Order (mid-changes)</a><br/>
				<a href="https://drive.google.com/file/d/1JTLwRAwRzvjN_woKPTcdgTE9kOVWqFKi/view?usp=sharing" target="_blank">Order (non-medication)</a><br/>
				<a href="https://drive.google.com/file/d/1X_R3QDSTRMn8381dKZsISdnTiGzBWMQi/view?usp=sharing" target="_blank">Preparation Instruction</a><br/>
				<a href="https://drive.google.com/file/d/174r7fp-oReDIIYfa-RyyRcLnYbVD2PKH/view?usp=sharing" target="_blank">Triage, Episode and Vital Signs</a><br/>
				<a href="https://drive.google.com/file/d/1jF--Hn_IVAfS58E1MmJdzpNzxnA0p8Ms/view?usp=sharing" target="_blank">Work List</a><br/>
				<a href="https://drive.google.com/file/d/1JXgi6N4TAm0TKQ5mznkWteVFSN7KSsjF/view?usp=sharing" target="_blank">X-Ray</a><br/>
				<a href="https://drive.google.com/file/d/19Bpy9f0Lb0D2H6vVyNlh38ZYnxEkJNcK/view?usp=sharing" target="_blank">Endoscope</a><br/>
				<a href="https://drive.google.com/file/d/1RqDwmIfePlu6Cl2G2naIT62PaIYUAq4x/view?usp=sharing" target="_blank">CheckList</a><br/>
				<a href="https://drive.google.com/file/d/1FaclDe4JkcwpEiZAAPIQtaVgy8JNIo9A/view?usp=sharing" target="_blank">Message Job</a><br/>
				<a href="https://drive.google.com/file/d/1zOj-mC6ITf7nP0niXrQvjkyzbcTGk5XI/view?usp=sharing" target="_blank">Alerts</a><br/>
				<a href="https://drive.google.com/file/d/13RGkRduAtKVpRebeFfdrd4rdm2ONH_cV/view?usp=sharing" target="_blank">Audit Trail</a><br/>
				<a href="https://drive.google.com/file/d/1hKk1tzK6nM_bWZHAIvg9_llVzKBVt4IL/view?usp=sharing" target="_blank">Top Drop Down function menu</a><br/>
				<a href="https://drive.google.com/file/d/1TYT8KMh36lWpYdmzZMoASp3zXy4dBEuV/view?usp=sharing" target="_blank">Questionnaire</a><br/>
			</nav>
			<div id="drawings"  class="dialog drawingsClass">
				<ul>
					<li>The link can be opened using google's drive appz, you need to authorize the appz: draw.io For Google Drive (recommend)<br/>
			</li>
				</ul>
			<br/>
			</div>
			<h2>Use cases<img src="images/tip_22x22.png" title="click to show" class="imageClass" alt="tip" onclick="openDrawingTip(event)"/></h2>
			<nav>
				<a href="https://drive.google.com/file/d/1UAT2uuHdg21nAOLGEbbzGI8z_QyAMPpX/view?usp=sharing" target="_blank">Outpatient</a><br/>
				<a href="https://drive.google.com/file/d/1OtxPKbdMFK3cbJwj7AM9_7D-S52TOIjd/view?usp=sharing" target="_blank">Manipulate a Patient Record</a><br/>
				<a href="https://drive.google.com/file/d/1-8ehuVD09BjUJeZ41En9po_PBs_fNoMz/view?usp=sharing" target="_blank">Manipulate an appointment</a><br/>
				<a href="https://drive.google.com/file/d/1o8p7sxpt_lqwBgx0yuCzcdDI51NE4Wh1/view?usp=sharing" target="_blank">Manipulate Episode Record</a><br/>
				<a href="https://drive.google.com/file/d/1M-tDWEoClpjqHKA9I2ZaLefuAJckUYUP/view?usp=sharing" target="_blank">User Authentication</a><br/>
				<a href="https://drive.google.com/file/d/14xnheXixvJlle204v0nE0qMMu1dRcMgj/view?usp=sharing" target="_blank">Workbench</a><br/>
				<a href="https://drive.google.com/file/d/1g9ghODgDMjVgOIY0je-OuQryuemfEg17/view?usp=sharing" target="_blank">Allergen</a><br/>
				<a href="https://drive.google.com/file/d/1LtLvXgGl6cRERqsZBgwmLMc_CSpZHX1f/view?usp=sharing" target="_blank">Diagnosis</a><br/>
				<a href="https://drive.google.com/file/d/1o3nOzKkZShFjXhnzcVN9AU9cgwZuqVqc/view?usp=sharing" target="_blank">Doctor Notes</a><br/>
				<a href="https://drive.google.com/file/d/1Vlxx2YqkWcTLTDefuL3KOL7NcjgJUpvx/view?usp=sharing" target="_blank">OT/ Procedure</a><br/>
				<a href="https://drive.google.com/file/d/1RluzvHPmxOn94pW6DvWV1xJj063pGJSP/view?usp=sharing" target="_blank">Endoscope Result</a><br/>
				<a href="https://drive.google.com/file/d/1De5WaFz0PtI-a8nSeYBp9B5XGcsenqFC/view?usp=sharing" target="_blank">Family Medication History</a><br/>
				<a href="https://drive.google.com/file/d/1s8EuyEuj8S-49t8ymioksMAJ0-2x0_EP/view?usp=sharing" target="_blank">Imaging Results</a><br/>
				<a href="https://drive.google.com/file/d/1BTsytkGbhxqS8emJ6Mx6e958gdRBlYMk/view?usp=sharing" target="_blank">Lab Results</a><br/>
				<a href="https://drive.google.com/file/d/164LRoQlq2eW36KTVR96sUhOfmcCnHaOp/view?usp=sharing" target="_blank">MOE</a><br/>
				<a href="https://drive.google.com/file/d/15H_nWcENU8mmlk-QOV1XMUEXRxJP7IpK/view?usp=sharing" target="_blank">MRAS</a><br/>
				<a href="https://drive.google.com/file/d/12fI6sAry7DYNw5gI6MunhjNV3_mdtB9m/view?usp=sharing" target="_blank">Other Order</a><br/>
				<a href="https://drive.google.com/file/d/1rla_CIY4b1ALo2ZiVuhWFdLfmMWasF7Z/view?usp=sharing" target="_blank">Observation Profile</a><br/>
				<a href="https://drive.google.com/file/d/11FCYnaZgIDCRmgGm1K-ETt0z_3R590jl/view?usp=sharing" target="_blank">Questionnaire</a><br/>
				<a href="https://drive.google.com/file/d/1bczw53vAoHjciJYJfBJzQg20vee4dnU8/view?usp=sharing" target="_blank">Order Pharmacy</a><br/>
				<a href="https://drive.google.com/file/d/1MoUPjUeI0cw6bXUKskoIlHOPs52o2_e1/view?usp=sharing" target="_blank">Preparation Instruction</a><br/>
				<a href="https://drive.google.com/file/d/1fD4y5HgZwHYqrKxQLLe23VF1ZGVPNKzq/view?usp=sharing" target="_blank">Medication History</a><br/>
				<a href="https://drive.google.com/file/d/1VhkalfbuEsgHVovzG0vGEoUFJCJ3XmF0/view?usp=sharing" target="_blank">Social History</a><br/>
				<a href="https://drive.google.com/file/d/1JYoEHJHQcpAGWIMeyBUAScnE6if1Nys-/view?usp=sharing" target="_blank">Triage</a><br/>
				<a href="https://drive.google.com/file/d/1lz8-S4pGsj4ZprnFgAUbyDLIPICwFCNM/view?usp=sharing" target="_blank">Vital Signs</a><br/>
				<a href="https://drive.google.com/file/d/1hx7JOoh1yJjVaL3Ys-3I8vhDhsRMRBDF/view?usp=sharing" target="_blank">Check List</a><br/>
				<a href="https://drive.google.com/file/d/1y3JFDnK8djxfNz0c4-4BNHcNoXCiUIUZ/view?usp=sharing" target="_blank">Notification</a><br/>
				<a href="https://drive.google.com/file/d/162wlwmjbx3iIJylkE_c2XSyhEYkZvvis/view?usp=sharing" target="_blank">Alerts</a><br/>
				<a href="https://drive.google.com/file/d/1hV3_qpQZ5eM7rDjzxRoB7tG3XysZEgq5/view?usp=sharing" target="_blank">End Consultation</a><br/>
				
			</nav>
			<h2>Sequence diagrams<img src="images/tip_22x22.png" title="click to show" class="imageClass" alt="tip" onclick="openDrawingTip(event)"/></h2>
			<nav>
				<a href="https://drive.google.com/file/d/1N71lunwn8UM1qsPcK-ozsvip7b_ky3V8/view?usp=sharing" target="_blank">Appointment -> Episode -> Consultation Sequence</a><br/>
				<a href="https://drive.google.com/file/d/1VabuqW3lG9x3GISW8T0EkuWbF1lMBIjx/view?usp=sharing" target="_blank">Appointment -> Episode -> Services Sequence (With nurse)</a><br/>
				<a href="https://drive.google.com/file/d/1-261VRCKyk2EbWj_2NjBYDDjjKsv1Hkg/view?usp=sharing" target="_blank">Appointment -> Episode -> Services Sequence (Without nurse)</a><br/>
				<a href="https://drive.google.com/file/d/175pp_GRdyowISvNkA5z_8YSDHQzzmGpN/view?usp=sharing" target="_blank">Walk-in Patient requesting for doctor consultation</a><br/>
				<a href="https://drive.google.com/file/d/1hS_yK8rOYx4p3cvH5Na_ruOVbIIADqxm/view?usp=sharing" target="_blank">Walk-in Patient requesting for Service</a><br/>
				<a href="https://drive.google.com/file/d/1J9g-tUQxUABO-re0_bVCRvmQwIds1PkO/view?usp=sharing" target="_blank">Appointment Cancellation</a><br/>
				<a href="https://drive.google.com/file/d/1N_uQXLNjuB-HM4s-OwNYWCB_ejdvCv0P/view?usp=sharing" target="_blank">Changing of Appointment schedule</a><br/>
				<a href="https://drive.google.com/file/d/1My8srhkJZ9a2kUUJNpfooYMrB2NwkxZO/view?usp=sharing" target="_blank">WorkList Service Confirmation</a><br/>
				<a href="https://drive.google.com/file/d/1scjbgmqqlFaiO82KM6cLmVFLA_ROWKTb/view?usp=sharing" target="_blank">Service Reservation</a><br/>
				<a href="https://drive.google.com/file/d/15LAmDeRI7ZOAsstxMnYeMjvObbgdf69R/view?usp=sharing" target="_blank">The appointment Day</a><br/>				
				<a href="https://drive.google.com/file/d/1lMggyeCp3X8w2KN66vUm3CfSLmRm6_gR/view?usp=sharing" target="_blank">Doctor places an external service order</a><br/>
				<a href="https://drive.google.com/file/d/1I7pN8lJnJ1L-5XXNhMZt5ZQuG6f8TTle/view?usp=sharing" target="_blank">Doctor places an internal service order (with Referral Letter)</a><br/>
				<a href="https://drive.google.com/file/d/1xHAcbYQkoMBOFEyTE6SFEbEM8CzHNNbq/view?usp=sharing" target="_blank">Doctor places an internal service order (without Referral Letter)</a><br/>
				<a href="https://drive.google.com/file/d/1jVBR-ir8xVUNsRmReUNG6It7ZjDMXZAe/view?usp=sharing" target="_blank">Doctor places an internal service order (for services without the need of booking)</a><br/>	
			</nav>
			<h2>Code Type<img src="images/tip_22x22.png" title="click to show" class="imageClass" alt="tip" onclick="openCodeTypeTip(event)"/></h2>
			Code in mysql database format which the major codes, categories, or selective parametes are found during System Analysis and Design.
			<nav>
	
			</nav>
			<h2>waiting for POC</h2>

			<h3>Questionnaire</h3>
			<ul>
				<li>Third-Party Applications
					<ul>
						<li>
							<nav>
								<a href="https://docs.google.com/document/d/15-K1__H7YECi_YKpT6qpY6kMCsa-kCDcTs7SkUL60qo/edit?usp=sharing" target="_blank">Questionnaire POC Document</a>
							</nav>
						</li>
						<li>
							<nav>
								<a href="http://172.20.212.84/limesurvey/index.php/admin/authentication/sa/login" target="_blank">server prototype hosted @http://172.20.212.84/limesurvey/index.php/admin/authentication/sa/login</a><br/>
								username: admin<br/>
								password: admin<br/>
							</nav>
						</li>
					</ul>


				</li>
				<li>Build by us
					<ul>
						<li>
							<a href= "<?php echo determineRelativeUrl('jqDragDrop.php'); ?>" >User defined questionnaire</a>
						</li>
					</ul>
				</li>
			</ul>
			<div id="codeType"  class="dialog codeTypeClass">
				<ul>
					<li>host ip: 35.229.245.226: 3306<br/>user name: (ask me by mail)<br />passsword: (ask me by mail)</li>
					<li>Need to tell me your <a href="https://whatismyipaddress.com/ip-lookup" target="_blank" >external ip address</a> in order to grant right for connection<br/><a href="mailto:daveman.hp@gmail.com">daveman.hp@gmail.com</a>
			</li>
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
			<footer>
				<p>
					&copy; by Dave Man
				</p>
			</footer>
		</div>
	</body>
</html>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>CMS - Billing</title>
		<meta name="description" content="Billing">
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
				<h1>Billing</h1>
			</header>
			<h2>Main Screen Video Demo (LifeRay)</h2>
			<h2>Knowledges</h2>
			<nav>
				<a href="https://docs.google.com/document/d/15drX9Ju2gPYPfR2r_DtLTjm2tRiIlALuC78IfelhKps/edit?usp=sharing" target="_blank">Business Knowledge of Billing Engine</a><br/>
				<a href="https://docs.google.com/document/d/1L6KRuqulGczPlSPKyGnF-Yz1p2Y67N8pUWrIhYAUWzk/edit?usp=sharing" target="_blank">Business Knowledge of Bed Movement</a><br/>
			</nav>
			<h2>References</h2>
			<ol>
				<li>Documentation
				<ol>
					<li>Functional Specifications<br/>
						"V:\Current Project\CMS\Billing Engine\Documentations\Billing Engine Functional Specification.docx"<br/>
						<!--
						<a href="file:///V:/Current%20Project/CMS/Billing%20Engine/Documentations/Billing%20Engine%20Functional%20Specification.docx">Billing Engine Functional Specification.docx</a>
						-->
					</li>
					<li>Business
						<ol>
							<li>HKBH Web: 收費及付款細則<br/>
							<a href="http://www.hkbh.org.hk/fees-charges/charges-payment-details/?lang=zh-hant" target="_blank">http://www.hkbh.org.hk/fees-charges/charges-payment-details/?lang=zh-hant</a>
							</li>
							<li><a href="http://eofprdapp01.hkbh.org.hk:8080/group/home/sdm-2_0" target="_blank">SDM</a> - [Bed Charge]: Important note to in-Patient_2018-09-01.pdf<br/>
							</li>
							<li><a href="http://eofprdapp01.hkbh.org.hk:8080/group/home/sdm-2_0" target="_blank">SDM</a> - [Bed Charge]: GL-AADD-001-02__Sleep Test and Autoset Guideline.pdf
	<br/>
							</li>
							<li><a href="http://eofprdapp01.hkbh.org.hk:8080/group/home/sdm-2_0" target="_blank">SDM</a> - [Bed Charge]: short stay charge in ICU_Rev 2.pdf
	<br/>
							</li>
							<li>
								old version - "V:\Current Project\CMS\Billing Engine\Documentations\Bed Charge for Short Stay Case and Sleep Test Case.docx"<br/>
								new version - "V:\Current Project\CMS\Billing Engine\Documentations\Bed Charge for Short Stay Case and Sleep Test Case - revised.docx" (updated @20190212 - <a href="http://192.168.25.83/mantis/view.php?id=210" >Mantis#0000210</a>)
							</li>
						</ol>
					</li>
					<li>ERD<br/>
						"V:\Current Project\CMS\Cashier Function\Specifications\Billing &amp; Cashier Function - ERD.pdf"
					</li>
					<li>DB Schema
						<ol>
							<li>
								BIL_PATIENT_CHARGES
							</li>
							<li>
								"V:\Current Project\CMS\Billing Engine\Documentations\BIL_PATIENT_CHARGES_SCHEMA.xlsx"
							</li>
						</ol>
					</li>
					
					
				</ol>					
				</li>
				<li>Emails<br/>
					"V:\Current Project\CMS\Billing Engine\References\Pharmacy\FW  TRC1614  TRC60751- Drug return's handling fee issue.msg"
				</li>
				<li>Other References<br/>
					"V:\Current Project\CMS\Billing Engine\Handover\Billing_Engine_Quick_Summary.pptx"
				</li>
			</ol>
			<h2>
				CMS BIL_PATIENT_CHARGES VS DATAPOOL BIL_PATIENT_CHARGES
			</h2>
				Web Inteface to check record at: Database dpldevdb.datapool_dev.01.BIL_PATIENT_CHARGES (Obsoleted, cannot reflect the change now)<br/>
				<a target="_blank" href="http://cesdevles01.hkbh.org.hk/group/a/patient-charge-enquiry">http://cesdevles01.hkbh.org.hk/group/a/patient-charge-enquiry</a><br/>
				CMS Bill Patient Charge:<br/>
				<a target="_blank" href="https://cmsdev.hkbh.org.hk/group/guest/bil-patient-charge-enquiry">https://cmsdev.hkbh.org.hk/group/guest/bil-patient-charge-enquiry</a><br/>
			<h2>
				Diagrams
			</h2>
				Trigger Diagram @DataPool<br/>
				<a target="_blank" href="https://drive.google.com/file/d/1d-kyAF_UrDPQba7ol6NpP0OH9xG2Bapf/view?usp=sharing">https://drive.google.com/file/d/1d-kyAF_UrDPQba7ol6NpP0OH9xG2Bapf/view?usp=sharing</a><br/>
			<h2>
				Billing engine Programming Logic Diagrams
			</h2>
				Bed charge + movement (BillingQueue.startPolling() vs YesterdayIPBedChargeTask.startCalculation())<br/>
				<a target="_blank" href="https://drive.google.com/file/d/1KZqUDlhrrr3MiGhNODApaVc75Tpw_hab/view?usp=sharing">Flow chart - Program merging point</a><br/>			
			<h2>
				SQL
			</h2>
				sql<br/>
				<a target="_blank" href="billing_sql.php">useful sqls</a><br/>
			<h2>
				Mind maps
			</h2>
				Billing Engine - overviews<br/>
				<a target="_blank" href="https://drive.google.com/file/d/1aUafoNiXjHMt4BaUgPdZtkSeAFhc8wa4/view?usp=sharing">https://drive.google.com/file/d/1aUafoNiXjHMt4BaUgPdZtkSeAFhc8wa4/view?usp=sharing</a><br/>
				Billing Engine - bed charge<br/>
				<a target="_blank" href="https://drive.google.com/file/d/1pOBoXdkEkcnaa9VyFfuS6-0Ly4VtoS0u/view?usp=sharing">https://drive.google.com/file/d/1pOBoXdkEkcnaa9VyFfuS6-0Ly4VtoS0u/view?usp=sharing</a><br/>

				
			<h2>
				Bugs/ Improvements -> <a target="_blank" href="http://192.168.25.83/mantis">mantis tasks tracker</a>
			</h2>
				20181121 - <a href="http://192.168.25.83/mantis/view.php?id=1" target="_blank">#mantis#0000001</a> - Data not synced - <a target="_blank" href="https://docs.google.com/document/d/1v7C1b9B0igJddNtRrMgei5LjADTmxLNNUblBl_JNJh4/edit?usp=sharing">Data not sync</a><br/>
				20181121 - <a href="http://192.168.25.83/mantis/view.php?id=4" target="_blank">#mantis#0000004</a> - Code Improvement - <a target="_blank" href="https://docs.google.com/document/d/1v7C1b9B0igJddNtRrMgei5LjADTmxLNNUblBl_JNJh4/edit?usp=sharing">Code Improvement</a><br/>				 
				20181122 - <a href="http://192.168.25.83/mantis/view.php?id=36" target="_blank">#mantis#0000036</a> - Code Improvement - <a target="_blank" href="https://docs.google.com/document/d/1Ym742UKSYWeJbt4XtgpKj-wgVIUkHhpbzyC-u_wWe9Q/edit?usp=sharing">To avoid hard-code parameters/write a coding function</a><br/>				 
				20181130 - <a href="http://192.168.25.83/mantis/view.php?id=69">#mantis#0000069</a> - business logic bug - <a target="_blank" href="https://docs.google.com/document/d/1ZoI8iIoMenvjFOqqvxKoZzYFs_30YuqZrOixlllRWgo/edit?usp=sharing">Bed transfer but escaped by the calculation logic</a><br/>	
				20181130 - <a href="http://192.168.25.83/mantis/view.php?id=75">#mantis#0000075</a> - data missing for the newly admission record - <a target="_blank" href="https://docs.google.com/document/d/1afcTb95N--VzfL-zegaKNLJy_KUcAFUxyH26cRKqTFA/edit?usp=sharing">Admission - create record with null values that should not be null</a><br/>				
			
			
			<footer>
				<p>
					&copy; by Dave Man
				</p>
			</footer>
		</div>
	</body>
</html>

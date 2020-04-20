<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>CMS - Billing - common sqls</title>
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
				<h1>Billing - SQL</h1>
			</header>
			<h2>SQLs @CMS</h2>
			<h3>sql to find the order, billing, order type</h3>
			<pre>order_type:<br/>ORDER_TYPE_ACTIVE = "A"
ORDER_TYPE_BLOOD_BANK = "B"
ORDER_TYPE_CONSULTATION = "C"
ORDER_TYPE_D_C_DISCONTINUED = "D"
ORDER_TYPE_DENTAL = "T"
ORDER_TYPE_DISCHARGE_ORDER = "DIS"
ORDER_TYPE_EMERGENCY = "EMER"
ORDER_TYPE_EMERGENCY_ORDER = "EM"
ORDER_TYPE_EXECUTED = "E"
ORDER_TYPE_INACTIVE = "I"
ORDER_TYPE_IN_PROGRESS = "IP"
ORDER_TYPE_IN_QUEUE = "Q"
ORDER_TYPE_NORMAL = "N"
ORDER_TYPE_ON_HOLD = "H"
ORDER_TYPE_POST_OPERATION_ORDER = "PO"
ORDER_TYPE_POSTPONED = "S"
ORDER_TYPE_PRE_ORDER = "P"
ORDER_TYPE_REHAB_MEDICINE = "X"
ORDER_TYPE_ROUTINE_ORDER = "R"
ORDER_TYPE_UNVERIFIED = "U"
ORDER_TYPE_VERIFIED = "V"</pre>
			<blockquote>
					<pre><code>select ai.order_item_desc, ai.billing_group_code,ai.billing_subgroup_code, ai.order_category_code, ai.order_subcategory_code, 
aic.order_subcategory_code, aic.order_type
from ord_order_item_ces ooic 
inner join arc_itmmast ai on ooic.oeori_itmmast_dr = ai.trak_rowid
left join arc_itemcat aic on ai.order_subcategory_code = aic.order_subcategory_code</code></pre>
			</blockquote>
			<h3>sql to find the source of bil_patient_charges by left join bil_charge_request, by episode no</h3>
			<blockquote>
					<pre><code>select bcr.request_workflow,
bpr.service_date_time, bpr.created_date_time, bpr.updated_date_time, bpr.trn_date_time, bpr.order_item_code,  bpr.trans_rowid, bpr.original_trans_rowid,
bpr.order_item_code, bpr.trans_status, bpr.order_qty, bpr.total_gross_Amount, bpr.total_discount_amount, bpr.total_net_amount,bpr.order_remarks, 
bpr.order_proc_notes, bpr.bill_no, bpr.episode_no, bpr.hospital_no, bpr.bilchgreq_rowid,
bpr.* 
from  bil_patient_charges bpr left join bil_charge_request bcr on bpr.bilchgreq_rowid = bcr.bilchgreq_rowid 
where bpr.created_date_time >=  TO_DATE('2019-02-19 15:00:00', 'YYYY-MM-DD HH24:MI:SS') 
and bpr.bilchgreq_rowid is null
and  episode_no = '11700182'   order by bpr.trans_rowid desc</code></pre>
			</blockquote>
			<h3>sql to check queue job:</h3>
			0 - new job, 1 - completed, 2 - In progress
			<blockquote>
					<pre><code>SELECT * FROM bil_charge_request where status = 0 order by created_date_time desc</code></pre>
					<pre><code>SELECT * FROM bil_charge_request where status = 1 order by created_date_time desc</code></pre>
					<pre><code>SELECT * FROM bil_charge_request where status = 2 order by created_date_time desc</code></pre>
			</blockquote>
			<h3>sql to find bil_charge_request by episode no</h3>
			<blockquote>
					<pre><code>select ae.episode_no, 
bcr.*,
ae.trak_paadm_rowid, ae.trak_paadm_rowid as episode_id, regexp_substr(bcr.request_rowid, '[^\|\|]+', 1, 1) as request_id_part1, 
case when  instr(bcr.request_rowid, '||') > 0 then
        regexp_substr(bcr.request_rowid, '[^\|\|]+$', 1, 1) 
else
        ''
end as request_id_part2
from bil_charge_request bcr
inner join adm_episode ae on regexp_substr(bcr.request_rowid, '[^\|\|]+', 1, 1) = ae.trak_paadm_rowid
where ae.episode_no = '11700138'
order by created_date_time desc</code></pre>
			</blockquote>
			<h3>sql to find bil_charge_request by episode no (via adm_transaction)</h3>
			<blockquote>
					<pre><code>select 
trans.EPISODE_NO,
bcr.* from bil_charge_request bcr 
inner join adm_transaction trans on bcr.request_rowid = trans.TRAK_TRANS_ROWID
where bcr.request_workflow = 'MOVEMENT'
and trans.EPISODE_NO = '11700138'</code></pre>
			</blockquote>
			<h3>sql to find episode info by episode id</h3>
			episode id is the request_rowid, which the first array string by splitting string by delimited "||", e.g. 4508992||43
the episode id is '4508992'
			<blockquote>
					<pre><code>SELECT  
EPISODE_NO,  
EPISODE_TYPE,  
TO_CHAR(EPISODE_DATE_TIME-1, 'YYYY-MM-DD') as ONE_DAY_BEFORE_EPISODE_DATE,  
TO_CHAR(MED_DISCH_DATE_TIME, 'YYYY-MM-DD HH24:MI:SS') as MED_DISCH_DATE_TIME  
FROM ADM_EPISODE  
WHERE TRAK_PAADM_ROWID = '4508992' </code></pre>
			</blockquote>
			<h3>sql to find patient charges list</h3>
			<blockquote>
					<pre><code>select * from bil_patient_charges
where episode_no = '11700119'
and service_date_time >= to_date('2018-12-02 11:27:00', 'YYYY-MM-DD HH24:MI:SS')
and trans_status is null</code></pre>
			</blockquote>
			<h3>sql to find bil_charge_request throught order item by episode no</h3>
			<blockquote>
					<pre><code>select adm.episode_no, bcr.* from bil_charge_request bcr 
inner join ord_order_item_ces ooic on bcr.request_rowid = ooic.oeori_rowid
inner join ord_order_ces ord on ooic.oeori_oeord_parref = ord.oeord_rowid
inner join adm_episode adm on ord.oeord_adm_dr = adm.TRAK_PAADM_ROWID
where adm.episode_no = '11700119' order by created_date_time desc</code></pre>
			</blockquote>
			<h3>sql to check Patient charge calculation</h3>
			<blockquote>
					<pre><code>select episode_no, trans_rowid, trn_date_time, created_date_time, trans_status, order_item_code, doctor_code, order_qty,
base_price, unit_gross, unit_discount, 
unit_price, total_gross_amount, total_discount_amount, 
total_net_amount, amount_covered_by_pkg, override_amount_input, adjusted_amount
from bil_patient_charges where episode_no = '11700151'
order by trans_rowid desc</code></pre>
			</blockquote>
			<h3>sql to find charges info</h3>
			<blockquote>
					<pre><code>SELECT  
ADM.EPISODE_NO,  
EPISODE_TYPE,  
OEORI_ROWID,  
ORDER_ITEM_CODE,  
ITMMAST.BILLING_GROUP_CODE,  
ITMMAST.BILLING_SUBGROUP_CODE,  
ITMMAST.ORDER_CATEGORY_CODE,  
ITMMAST.ORDER_SUBCATEGORY_CODE,  
ORDER_TYPE  		
FROM ORD_ORDER_ITEM_CES ORDITEM  
INNER JOIN ARC_ITMMAST ITMMAST ON ORDITEM.OEORI_ITMMAST_DR = ITMMAST.TRAK_ROWID  
INNER JOIN ARC_ITEMCAT ITEMCAT ON ITEMCAT.ORDER_SUBCATEGORY_CODE = ITMMAST.ORDER_SUBCATEGORY_CODE 
INNER JOIN ORD_ORDER_CES ORD ON ORD.OEORD_ROWID = ORDITEM.OEORI_OEORD_PARREF  
INNER JOIN ADM_EPISODE ADM ON ORD.OEORD_ADM_DR = ADM.TRAK_PAADM_ROWID  
where OEORI_ROWID = '1729867||2'</code></pre>
			</blockquote>
			<h3>sql to get current inpatient</h3>
			<blockquote>
					<pre><code>select * from adm_episode 
where episode_type = 'I' and episode_status = 'A' 
and episode_date_time <= to_date('2018-11-29 23:59:59','YYYY-MM-DD HH24:MI:SS')
and episode_no = '11700119'</code></pre>
			</blockquote>
			<h3>sql to get bill patient charges by date</h3>
			<blockquote>
					<pre><code>SELECT *
FROM BIL_PATIENT_CHARGES
WHERE EPISODE_NO = '11700119'
AND TRAK_ORDERITEM_ROWID IS NULL 
AND PC_BILLING_GROUP_CODE = 'AADDA0010' 
AND PC_PRINT_HEADER_CODE = 'HC' 
AND TRUNC(TO_DATE('20181128 23:59:59', 'YYYY-MM-DD HH24:MI:SS'), 'DDD') = TRUNC(SERVICE_DATE_TIME, 'DDD') 
AND TRANS_STATUS IS NULL</code></pre>
			</blockquote>
			<h3>sql to find bed transfer charge</h3>
			AADD020 - Bed Transfer Charge
			<blockquote>
					<pre><code>select * from arc_itmmast where order_item_code = 'AADD020'</code></pre>
					<pre><code>select * from ord_order_item_ces where item_code = 'AADD020'</code></pre>
			</blockquote>
			<h3>sql to find episode information</h3>
			<blockquote>
					<pre><code>select * from adm_episode 
where episode_type = 'I' and episode_status = 'A' 
and episode_date_time <= to_date('2018-12-03 23:59:59','YYYY-MM-DD HH24:MI:SS') 
and episode_no = '11700119'
</code></pre>
			</blockquote>
			<h3>sql to find mother by baby's hospital no</h3>
			<blockquote>
					<pre><code>select * 
from DL_PREGDELBABY BABY 
INNER JOIN DL_PREGDELIVERY PREG ON BABY.DL_PREGDELIVERY_ROWID = PREG.DL_PREGDELIVERY_ROWID 
WHERE HOSPITAL_NO = '11700119'
</code></pre>
			</blockquote>
			<h3>sql to find episode details with Pregdelbaby count</h3>
			<blockquote>
					<pre><code>select  
MEDICAL_SUBTYPE_CODE,  
(SELECT COUNT(*) FROM DL_PREGDELBABY WHERE DL_PREGDELBABY.HOSPITAL_NO = adm_episode.HOSPITAL_NO) as pregcount,  
EPISODE_STATUS, EPISODE_TYPE, HOSPITAL_NO, EPISODE_SUBTYPE_CODE, LOCATION_CODE, EPISODE_DATE_TIME, DISCHARGE_DATE_TIME  
from adm_episode where episode_no = '11700119' </code></pre>
			</blockquote>
			<h3>sql to find transactions that are for doing reverse</h3>
			<blockquote>
					<pre><code>SELECT * 
FROM BIL_PATIENT_CHARGES 
WHERE EPISODE_NO = '11700119'  
AND TRAK_ORDERITEM_ROWID IS NULL  
AND PC_BILLING_GROUP_CODE = 'AADDA0010'  
AND PC_PRINT_HEADER_CODE = 'HC'  
AND TRUNC(TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS'), 'DDD') = TRUNC(SERVICE_DATE_TIME, 'DDD')  
AND TRANS_STATUS IS NULL </code></pre>
			</blockquote>
			<h3>sql to find movement list</h3>
			<blockquote>
					<pre><code>select  
* 
from adm_transaction 
where episode_no = '11700119' 
AND TRANS_STATUS in ('T', 'D') 
AND TRANS_TYPE_CODE = 'M' 
AND TRUNC(TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS'), 'DDD')  
 BETWEEN TRUNC(TRANS_START_DATE_TIME, 'DDD') AND TRUNC(NVL(TRANS_END_DATE_TIME, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')), 'DDD')   
ORDER BY TO_NUMBER(SUBSTR(TRAK_TRANS_ROWID, INSTR(TRAK_TRANS_ROWID,'|', 1, 2)+1)) </code></pre>
			</blockquote>
			<h3>sql to find default bed type</h3>
			<blockquote>
					<pre><code>select * 
from PAC_Bed 
where BED_Code = 'E725-1' 
AND TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS') 
BETWEEN EFFECTIVE_DATE_FROM 
AND NVL(EFFECTIVE_DATE_TO, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')) </code></pre>
			</blockquote>
			<h3>sql to find room type</h3>
			<blockquote>
					<pre><code>select * 
from pac_room 
where ROOM_CODE = 'E725' 
AND TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS') 
BETWEEN EFFECTIVE_DATE_FROM 
AND NVL(EFFECTIVE_DATE_TO, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')) </code></pre>
			</blockquote>
			<h3>sql to find room type detils by join item master table (arc_itmmast)</h3>
			<blockquote>
					<pre><code>select * 
from PAC_BEDTYPE bt 
inner join arc_itmmast itm on bt.ORDER_ITEM_CODE = itm.ORDER_ITEM_CODE 
where BED_TYPE_CODE = 'GL' 
AND TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS') 
BETWEEN bt.EFFECTIVE_DATE_FROM AND 
NVL(bt.EFFECTIVE_DATE_TO, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')) </code></pre>
			</blockquote>
			<h3>sql to find inpatient item price</h3>
			<blockquote>
					<pre><code>SELECT  
ITEM_PRICE, ROOM_TYPE_CODE, BED_TYPE_CODE  
from ARC_ITEMPRICE  
where ORDER_ITEM_CODE = 'BCRC3' and EPISODE_TYPE = 'I'  		
AND TO_DATE('2018-12-03', 'YYYY-MM-DD') 
BETWEEN  
    TRUNC(NVL(EFFECTIVE_DATE_FROM, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')),'DD')  
  AND  
    TRUNC(NVL(EFFECTIVE_DATE_TO, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')),'DD') 
order by ROOM_TYPE_CODE NULLS FIRST, BED_TYPE_CODE NULLS FIRST</code></pre>
			</blockquote>
			<h3>sql to join ord_order_item_ces to bil_charge_request</h3>
			<blockquote>
					<pre><code>select bcr.*, ooic.* from ord_order_item_ces ooic 
inner join bil_charge_request bcr on ooic.oeori_rowid = bcr.request_rowid
where item_code = 'NDR002'
order by bcr.created_date_time desc</code></pre>
			</blockquote>			
			
			<h3>sql to find outpatient item price</h3>
			<blockquote>
					<pre><code>SELECT  
ITEM_PRICE, EPISODE_SUBTYPE_CODE  
from ARC_ITEMPRICE  
where ORDER_ITEM_CODE = 'CSD150T' and EPISODE_TYPE = 'O'  
AND TO_DATE('2018-12-03', 'YYYY-MM-DD')  
BETWEEN  
    TRUNC(NVL(EFFECTIVE_DATE_FROM, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')),'DD')  
  AND  
    TRUNC(NVL(EFFECTIVE_DATE_TO, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')),'DD') 
order by EPISODE_SUBTYPE_CODE NULLS FIRST</code></pre>
			</blockquote>
			<h3>sql to find surcharge code</h3>
			<blockquote>
					<pre><code>select  
SURCHARGE_CODE  
from ARC_ItmMast  
where ORDER_ITEM_CODE = 'BCRC3'  
AND TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')  
  BETWEEN  
    NVL(EFFECTIVE_DATE_FROM, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS'))  
  AND  
    NVL(EFFECTIVE_DATE_TO, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')) </code></pre>
			</blockquote>			
			<h3>sql to find public holiday</h3>
			OP_ONLY_YN is for outpatient only, the logic to determine whether it is public holiday for outpatient is:
			<blockquote>
					<pre><code>String CTHOL_UseforOutpatientsOnly = rset3.getString("OP_ONLY_YN");
if (StringUtils.equals(CTHOL_UseforOutpatientsOnly, "N")) {
	isPublicHoliday = true;
}

if (StringUtils.equals(CTHOL_UseforOutpatientsOnly, "Y")) {
	if (StringUtils.equals(episodeType, "O")) {
		isPublicHoliday = true;
	}
}</code></pre>
			</blockquote>	
			<blockquote>
					<pre><code>select * from CT_PubHol 
select OP_ONLY_YN from CT_PubHol where TO_CHAR(holiday_code, 'YYYY-MM-DD') = '2018-12-03'</code></pre>
			</blockquote>
			<h3>sql to find markup for public holiday</h3>
			<blockquote>
					<pre><code>select  
 MARKUP_PERCENT, 
 PUBLIC_HOLIDAY 
from ARC_SurchTimeDepend  
where SURCHARGE_CODE = 'NOSURCHG010'  
-- date
AND TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')  
  BETWEEN  
    NVL(EFFECTIVE_DATE_FROM, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS'))  
  AND  
    NVL(EFFECTIVE_DATE_TO, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS'))  
and nvl(LOCATION, 'NSE7') = 'NSE7'  
-- day of week 
and case  
	when (to_char(TO_DATE('2018-12-03', 'YYYY-MM-DD'), 'D') > 1) then to_char(TO_DATE('2018-12-03', 'YYYY-MM-DD'), 'D') - 1  
	when (to_char(TO_DATE('2018-12-03', 'YYYY-MM-DD'), 'D') = 1) then 7  
end >= nvl(DOW_FROM, 1)  
and case  
	when (to_char(TO_DATE('2018-12-03', 'YYYY-MM-DD'), 'D') > 1) then to_char(TO_DATE('2018-12-03', 'YYYY-MM-DD'), 'D') - 1  
	when (to_char(TO_DATE('2018-12-03', 'YYYY-MM-DD'), 'D') = 1) then 7  
end <= nvl(DOW_TO, 7)  
-- time range with a day 
and '23:59:59' BETWEEN TO_CHAR(TIME_FROM, 'HH24:MI:SS') AND TO_CHAR(TIME_TO, 'HH24:MI:SS')  
order by PUBLIC_HOLIDAY DESC NULLS LAST, TO_NUMBER(SUBSTR(TRAK_ROWID, INSTR(TRAK_ROWID,'|', 1, 2)+1)) </code></pre>
			</blockquote>		
			<h3>sql to find markup for non public holiday</h3>
			<blockquote>
					<pre><code>select  
 MARKUP_PERCENT, 
 PUBLIC_HOLIDAY 
from ARC_SurchTimeDepend  
where SURCHARGE_CODE = 'NOSURCHG010'  
-- date
AND TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')  
  BETWEEN  
    NVL(EFFECTIVE_DATE_FROM, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS'))  
  AND  
    NVL(EFFECTIVE_DATE_TO, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS'))  
-- location
and nvl(LOCATION, 'NSE7') = 'NSE7'  
-- day of week 
and case  
	when (to_char(TO_DATE('2018-12-03', 'YYYY-MM-DD'), 'D') > 1) then to_char(TO_DATE('2018-12-03', 'YYYY-MM-DD'), 'D') - 1  
	when (to_char(TO_DATE('2018-12-03', 'YYYY-MM-DD'), 'D') = 1) then 7  
end >= nvl(DOW_FROM, 1)  
and case  
	when (to_char(TO_DATE('2018-12-03', 'YYYY-MM-DD'), 'D') > 1) then to_char(TO_DATE('2018-12-03', 'YYYY-MM-DD'), 'D') - 1  
	when (to_char(TO_DATE('2018-12-03', 'YYYY-MM-DD'), 'D') = 1) then 7  
end <= nvl(DOW_TO, 7)  
-- time range with a day 
and '23:59:59' BETWEEN TO_CHAR(TIME_FROM, 'HH24:MI:SS') AND TO_CHAR(TIME_TO, 'HH24:MI:SS')  
and PUBLIC_HOLIDAY = 'N' 
order by TO_NUMBER(SUBSTR(TRAK_ROWID, INSTR(TRAK_ROWID,'|', 1, 2)+1)) </code></pre>
			</blockquote>	
			<h3>sql to find an order item, the attributies of order_category_code, order_subcategory_code, service_category_code, billing group code and sub group code</h3>
			BC3 - Bed Charge - Class 3
			<blockquote>
					<pre><code>select  
BILLING_GROUP_CODE,  
BILLING_SUBGROUP_CODE  
from ARC_ItmMast  
where ORDER_ITEM_CODE = 'BCRC3'</code></pre>
			</blockquote>	
			AADDA0010 - Bed Charge
			<blockquote>
					<pre><code>select * from arc_itmmast where billing_group_code = 'AADDA0010'</code></pre>
			</blockquote>
			<h3>sql to find billing_group by billing_group_code</h3>
			AADDA0010 - Bed Charge<br/>
			AADD0100120 - Standard Ward<br/>
			<blockquote>
					<pre><code>select * from arc_billgrp where billing_group_code = 'AADDA0010'</code></pre>
			</blockquote>	
			<h3>sql to find billing sub group by</h3>
			<blockquote>
					<pre><code>select * from arc_billsub where billing_subgroup_code = 'AADD0100120'</code></pre>
			</blockquote>	
			<h3>sql to find payment agreement</h3>
			<blockquote>
					<pre><code>SELECT 
* 
FROM ARC_PAYMENTAGREEMENT 
WHERE PAYOR_CODE = 'CP' and PLAN_CODE = 'PATIENT' 
AND TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS') 
  BETWEEN 
    NVL(EFFECTIVE_DATE_FROM, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')) 
  AND 
    NVL(EFFECTIVE_DATE_TO, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')) </code></pre>
			</blockquote>		

			<h3>sql to find agreement discount by payor row id, order item code, billing group code, billing subgroup code</h3>
			<blockquote>
					<pre><code>select  
BILLING_GROUP_CODE,  
BILLING_SUBGROUP_CODE,  
ORDER_ITEM_CODE,  
EPISODE_TYPE,  
DISCOUNT_PERC,  
DISCOUNT_AMOUNT  
from ARC_PAYAGREEMDISCOUNT  
WHERE TRAK_PAYMENTAGREEMENT_ROWID = 147  
AND NVL(EPISODE_TYPE, 'I') = 'I'
AND TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS')  
  BETWEEN  
    NVL(EFFECTIVE_DATE_FROM, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS'))  
  AND  
    NVL(EFFECTIVE_DATE_TO, TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS'))  
AND (ORDER_ITEM_CODE = 'BCRC3' or BILLING_SUBGROUP_CODE = 'AADD0100120' or BILLING_GROUP_CODE = 'AADDA0010')  
ORDER BY ORDER_ITEM_CODE DESC NULLS LAST, BILLING_SUBGROUP_CODE DESC NULLS LAST, BILLING_GROUP_CODE DESC NULLS LAST </code></pre>
			</blockquote>
			<h3>sqls to find override price</h3>
			find item row id of bed charge
			<blockquote>
					<pre><code>SELECT  
*  
FROM ARC_ITMMAST ITMMAST  
INNER JOIN ARC_ITEMCAT ITEMCAT ON ITEMCAT.ORDER_SUBCATEGORY_CODE = ITMMAST.ORDER_SUBCATEGORY_CODE   
AND ITMMAST.ORDER_ITEM_CODE  = 'BCRC3' </code></pre>
			</blockquote>
			find oeorirowid by ARC_ITMMAST.TRAK_ROWID
			<blockquote>
					<pre><code>select * from (  
select oeori_rowid  
FROM ORD_ORDER_ITEM_CES ORDITEM  
INNER JOIN ORD_ORDER_CES ORD ON ORD.OEORD_ROWID = ORDITEM.OEORI_OEORD_PARREF  
AND OEORI_ITMMAST_DR = '27||1' 
and trunc(oeori_sttdat, 'DDD') = TRUNC(TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS'), 'DDD')  
order by oeori_childsub desc  
) where rownum = 1  </code></pre>
			</blockquote>
			find override price by ORD_ORDER_ITEM_CES.OEORI_ROWID
			<blockquote>
					<pre><code>select * from (  
select oeori_rowid  
FROM ORD_ORDER_ITEM_CES ORDITEM  
INNER JOIN ORD_ORDER_CES ORD ON ORD.OEORD_ROWID = ORDITEM.OEORI_OEORD_PARREF  
AND OEORI_ITMMAST_DR = '1729872||4' 
and trunc(oeori_sttdat, 'DDD') = TRUNC(TO_DATE('2018-12-03 23:59:59', 'YYYY-MM-DD HH24:MI:SS'), 'DDD')  
order by oeori_childsub desc  
) where rownum = 1  </code></pre>
			</blockquote>
			<h3>sql to find order status</h3>
			<blockquote>
					<pre><code>select * from oec_orderstatus</code></pre>
			</blockquote>
			<h3>sql to find reason code</h3>
			<blockquote>
					<pre><code>SELECT VARIANCE_REASON_CODE FROM MRC_VARIANCEREASON
select * from MRC_VARIANCEREASON</code></pre>
			</blockquote>	
			<h3>sql to find transfer reason</h3>
			<blockquote>
					<pre><code>select * from pac_transfer_reason</code></pre>
			</blockquote>
			<h3>sql to join item master, billing group</h3>
			<blockquote>
					<pre><code>select itm.order_item_code, itm.order_item_desc, bgp.billing_group_code, bgp.billing_group_desc,
bgp.effective_date_from, bgp.effective_date_to 
from arc_itmmast itm
inner join arc_billgrp bgp
on itm.billing_group_code = bgp.billing_group_code
where itm.billing_group_code = 'AADDA0010'</code></pre>
			</blockquote>	
			<h3>sql to join item master, billing group, billing subgroup</h3>
			<blockquote>
					<pre><code>select itm.order_item_code, itm.order_item_desc, bgp.billing_group_code, bgp.billing_group_desc,
bsub.billing_subgroup_code, bsub.billing_subgroup_desc,
bgp.effective_date_from, bgp.effective_date_to 
from arc_itmmast itm
inner join arc_billgrp bgp
on itm.billing_group_code = bgp.billing_group_code
inner join arc_billsub bsub
on bgp.billing_group_code = bsub.billing_group_code
where itm.billing_group_code = 'AADDA0010'</code></pre>
			</blockquote>		
			<h2>SQLs @datapool_dev</h2>
			<h3>sql to check major chargable items' triggers</h3>
			<blockquote>
					<pre><code>select * from TRAK_AR_CHARGESOVERRIDE
select * from trak_oe_orditem
select * from trak_pa_adm
select * from trak_pa_adm2
select * from trak_pa_adminsurance
select * from trak_pa_admtransaction</code></pre>
			</blockquote>
			<h3>sql to check major order items' triggers by episode no. by tables joints</h3>
			<blockquote>
					<pre><code>select * from TRAK_AR_CHARGESOVERRIDE c
inner join trak_oe_orditem oi on c.cov_oeori_dr = oi.oeori_rowid
inner join trak_oe_order o on oi.oeori_oeord_parref = o.oeord_rowid
inner join adm_episode adm on o.oeord_adm_dr = adm.TRAK_PAADM_ROWID
where adm.episode_no = '11700056';

select * from trak_oe_orditem oi
inner join trak_oe_order o on oi.oeori_oeord_parref = o.oeord_rowid
inner join adm_episode adm on o.oeord_adm_dr = adm.TRAK_PAADM_ROWID
where adm.episode_no = '11700056';

select * from trak_pa_adm where paadm_admno = '11700056'

select a1.paadm_admno, a2.* from trak_pa_adm2 a2
inner join trak_pa_adm a1 on a2.paadm2_paadm_dr = a1. paadm_rowid
where a1.paadm_admno = '11700056'

select a.paadm_admno, ai.* from trak_pa_adminsurance ai
inner join trak_pa_adm a on a.paadm_rowid = ai.ins_parref
where a.paadm_admno = '11700056'

select * from trak_pa_admtransaction am
inner join trak_pa_adm a on a.paadm_rowid = am.trans_parref
where a.paadm_admno = '11700056'</code></pre>
			</blockquote>
			<h3>sql to find packages</h3>
			<blockquote>
					<pre><code>select * from adm_packages</code></pre>
			</blockquote>
			<h3>sql to find transaction type</h3>
			<blockquote>
					<pre><code>select * from rtc_transactiontype</code></pre>
			</blockquote>
			<h3>sql to find variance category</h3>
			<blockquote>
					<pre><code>select * from mrc_varianceCategory</code></pre>
			</blockquote>
			<h3>sql to find variance reason</h3>
			<blockquote>
					<pre><code>SELECT * FROM MRC_VarianceReason</code></pre>
			</blockquote>
			<h3>sql to find all locations (service centre/specialty)</h3>
			<blockquote>
					<pre><code>select * from ct_loc
select * from ct_loc where ctloc_code in ('NREN','NCMO1')</code></pre>
			</blockquote>
			<h3>sql to find episode with additional information of all locations (service centre/ specialty)</h3>
			<blockquote>
					<pre><code>select loc.ctloc_code, loc.ctloc_desc, estype.subt_code, estype.subt_desc, adm.* from pa_adm adm
inner join ct_loc loc on adm.paadm_depcode_dr = loc.ctloc_rowid
inner join pac_episodesubtype estype on adm.paadm_epissubtype_dr = estype.subt_rowId</code></pre>
			</blockquote>
			<h2>Oracle useful sqls</h2>
			<h3>sql to find column_name that the name is not exactly remembered</h3>
			<blockquote>
					<pre><code>select * from all_tab_columns where column_name like '%TRAK_PAADM_ROWID%'
select * from all_tab_columns where table_name = 'TRAK_OE_ORDITEM' and column_name like '%PARREF%'
select * from all_tab_columns where table_name = 'TRAK_OE_ORDER' and column_name like '%ADM%'</code></pre>
			</blockquote>
			<footer>
				<p>
					&copy; by Dave Man
				</p>
			</footer>
		</div>
	</body>
</html>

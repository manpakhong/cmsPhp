


var ckeditor;
var templateComboBox;
var triageGcsStore;
var triageTabPanel;

Ext.onReady(function() {

	var traigeTableHtml = '<table class="triageGcs">' +
                        '<thead>' +
                        '</thead>' +
                        '<tbody>' +
                        '</tbody>' +
                      	'</table>';
	triageTabPanel = Ext.create('Ext.TabPanel', {
    tabBarPosition: 'top',
    renderTo: "triageTabs",
    width: 500,
    items: [
	        {
	            title: 'Triage Figure',
	            iconCls: 'triageFigure',
	            html: traigeTableHtml
	        },
	        {
	            title: 'Triage Graph',
	            iconCls: 'TriageGraph',
	            html: '<div id="triageGraph"></div>',
	        }
	    ],listener:{
	    	'render' : function(){

	    			console.log('1111');
	    			var a = Ext.getCmp('triageGraph');
	    			console.log('1111',a);
	    	}
	    }
	});

	 triageGcsStore = Ext.create('Ext.data.Store', {
     model: 'TriageGcs',
     data : [
         {'dateTime': '30/01/2016 09:00', 'triageGrading': 'non-urgent', 'eyeBlinking': '', 'eyeBlinkingScore': 2, 'verbalResponse': '', 'verbalResponseScore': 2, 'motorVitality':'', 'motorVitalityScore': 1, 'gcsSumScore' : 5},     
         {'dateTime': '18/07/2017 12:09', 'triageGrading': 'urgent', 'eyeBlinking': '', 'eyeBlinkingScore': 3, 'verbalResponse': '', 'verbalResponseScore': 4, 'motorVitality':'', 'motorVitalityScore': 5, 'gcsSumScore' : 13},
         {'dateTime': '01/12/2018 14:00', 'triageGrading': 'emergecncy', 'eyeBlinking': '', 'eyeBlinkingScore': 4, 'verbalResponse': '', 'verbalResponseScore': 5, 'motorVitality':'', 'motorVitalityScore': 2, 'gcsSumScore' : 11}
	     ]
	 });
    initTriageGcs();



}) // end Ext.ready

Ext.define('TriageGcs', {
     extend: 'Ext.data.Model',
     fields: [
     	 {name: 'triageGrading', type: 'string'},
     	 {name: 'dateTime', type: 'string'},
         {name: 'eyeBlinking', type: 'string'},
         {name: 'eyeBlinkingScore',  type: 'int'},
         {name: 'verbalResponse',       type: 'string'},
         {name: 'verbalResponseScore',  type: 'int'},
         {name: 'motorVitality',       type: 'string'},
         {name: 'motorVatilityScore',  type: 'int'},
         {name: 'gcsSumScore',  type: 'int'},
     ]
 });



 var drNoteTemplate = Ext.create('Ext.data.Store', {
    fields: ['code', 'template_name', 'content_rich_text'],
    data : [
			  {
			    "code": "0030",
			    "template_name": "Work Based Doctor Note Template",
			    "content_rich_text": "<p style=\"text-align:center\"><span style=\"font-size:16px\"><strong><big>Hong Kong Baptist Hospital</big></strong></span></p><p> </p><p>Certificate of Medical Consultation:</p><p>______________________ was under my care on _______________ he/she will be able to return to work/ school on _______________.</p><p>Physician's Comments:</p><p>______________________________________________________________________________________________________________</p><p>______________________________________________________________________________________________________________</p><p>______________________________________________________________________________________________________________</p><p>______________________________________________________________________________________________________________</p><p>______________________________________________________________________________________________________________</p><p> </p><p>Rx __________________________</p><p>Dr. Paul Au Yeung</p>"
			  },
			  {
			    "code": "0031",
			    "template_name": "Medical Doctor Note Regarding Necessity of Dental Care",
			    "content_rich_text": "<p style=\"text-align:center\"><strong><span style=\"font-size:14px\">Medical Doctor Note Regarding Necessity </span></strong><strong><span style=\"font-size:14px\">of</span></strong><strong><span style=\"font-size:14px\"> Dental Care</span></strong></p><p>I have been notified that medicaid patients currently require a note from their physician in order to determine a medical need for certain dental procedures. As the patient’s medical doctor, I am familiar with the medical history as well as the list of medications that the patient is currently taking. The information can be found below:</p><p>Patient Name:__________________________________________________________________</p><p>Patient DOB:___________________________________________________________________</p><p>Medical History: ____________________________________________________________________________ ____________________________________________________________________________ ____________________________________________________________________________</p><p>List of Medications: ____________________________________________________________________________ ____________________________________________________________________________ ____________________________________________________________________________</p><p>It is my medical opinion that considering the current health status of the patient, medical history and list of medications, if it is possible to save the patient’s natural teeth by placement of a dental crown then it should be done.</p><p>Decreasing the patient\’s chewing capacity by denying the crown will negatively affect the patient’s health and nutrition. It may interfere with the patient’s ability to properly take medications. This could result in serious deterioration of the patient’s health.</p><p>Additional Support Notes: ____________________________________________________________________________ ____________________________________________________________________________ ____________________________________________________________________________ If you have any further questions, please contact the office.</p><p>Office Phone Number: ___________________________________________________________</p><p>Sincerely,</p><p>Medical Doctor</p><p>Dr. Paul Au Yeung</p>"
			  }
			]
});


 var states = Ext.create('Ext.data.Store', {
    fields: ['code', 'name', 'chi_name', "display_name"],
    data : [
        {"code":"0030", "name":"WONG CHO YIU", "chi_name":"王祖耀", "display_name": "WONG CHO YIU - 王祖耀"},
        {"code":"0312", "name":"YEUNG KAI KIN", "chi_name":"楊啟健", "display_name": "YEUNG KAI KIN - 楊啟健"},
        {"code":"0313", "name":"PANG WING LUK", "chi_name":"彭永祿", "display_name": "PANG WING LUK - 彭永祿"},
        {"code":"0734", "name":"NG SHI HON", "chi_name":"伍仕漢", "display_name": "NG SHI HON - 伍仕漢"},
        {"code":"0837", "name":"AU YEONG CHI KEUNG", "chi_name":"歐陽志強", "display_name": "AU YEONG CHI KEUNG - 歐陽志強"},
        {"code":"1390", "name":"LEUNG FUNG HA BELINDA", "chi_name":"梁鳳霞", "display_name": "LEUNG FUNG HA BELINDA - 梁鳳霞"},
    ]
});


$(document).ready(function () {

});

function initTriageGcs(){
	var triageGcsTbody = $('.triageGcs tbody');
	var data = triageGcsStore.getData();
	var dataitems = data.items;
	var triageGcsTableContentHtml = '<tr class="dateTimeTr">';
			triageGcsTableContentHtml += '<td>Date</td>';
		triageGcsTableContentHtml += '<tr class="triageGradingTr">';
			triageGcsTableContentHtml += '<td>Triage Grading</td>';
		triageGcsTableContentHtml += '</tr>';
		triageGcsTableContentHtml += '<tr class="eyeBlinkingTr">';
			triageGcsTableContentHtml += '<td>Eye Blinking (E)</td>';
		triageGcsTableContentHtml += '</tr>';
		triageGcsTableContentHtml += '<tr class="verbalResponseTr">';
			triageGcsTableContentHtml += '<td>Verbal Response (V)</td>';
		triageGcsTableContentHtml += '</tr>';
		triageGcsTableContentHtml += '<tr class="motorVitalityTr">';
			triageGcsTableContentHtml += '<td>Motor Vitality (M)</td>';
		triageGcsTableContentHtml += '</tr>';
		triageGcsTableContentHtml += '<tr class="gcsTr">';
			triageGcsTableContentHtml += '<td>GCS: E + V + M<br/>(Max Score = 15)</td>';
		triageGcsTableContentHtml += '</tr>';

		// triageGcsTableContentHtml = '<tr class="triageGradingTr">';
		// 	triageGcsTableContentHtml += '<td>Triage Grading</td>';
		// triageGcsTableContentHtml += '</tr>';
		// triageGcsTableContentHtml = '<tr class="triageGradingTr">';
		// 	triageGcsTableContentHtml += '<td>Triage Grading</td>';
		// triageGcsTableContentHtml += '</tr>';
		// triageGcsTableContentHtml = '<tr class="triageGradingTr">';
		// 	triageGcsTableContentHtml += '<td>Triage Grading</td>';
		// triageGcsTableContentHtml += '</tr>';

	triageGcsTbody.append(triageGcsTableContentHtml);

	triageGcsStore.each(function(record,id){
		var rowData = record.data;
		var sum = rowData.eyeBlinkingScore + rowData.verbalResponseScore + rowData.motorVitalityScore;
		$('.dateTimeTr').append('<td>' + rowData.dateTime +'</td>');
	    $('.triageGradingTr').append('<td>' + rowData.triageGrading +'</td>');
	    $('.eyeBlinkingTr').append('<td>' +  rowData.eyeBlinkingScore + '</td>');
	    $('.verbalResponseTr').append('<td>' + rowData.verbalResponseScore + '</td>');
	    $('.motorVitalityTr').append('<td>' + rowData.motorVitalityScore  + '</td>');
	    $('.gcsTr').append('<td>' + sum + '</td>');
	});

}


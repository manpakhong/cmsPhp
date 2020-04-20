var currentWorkingTemplateHtml = '<div class="tempDiv">' +
                  '<table>' +
                    '<tr>' +
                      '<td>My Current Templates</td>' +
                      '<td><input type="text" class="input_normal" /></td>' +
                    '</tr>' +
                    '<tr>' +
                      '<td>Type</td>' +
                      '<td>' +
                        '<select>' +
                          '<option>Optometrist</option>' +
                          '<option>Dr Note</option>' +
                          '<option>Nurse Note</option>' +
                          '<option>Physiotherapy Note</option>' +
                          '<option>Speech Therapy Note</option>' +
                          '<option>Dietician Note</option>' +
                          '<option>Pastoral Services Note</option>' +
                          '<option>Radiology Note</option>' +
                          '<option>Care Plan Note</option>' +
                          '<option>RT Note</option>' +
                          '<option>Pharmacy Note</option>' +
                          '<option>Eye Centre Note</option>' +
                          '<option>Chemo Initial Assessment</option>' +
                          '<option>Chemo Progress Notes</option>' +
                          '<option>Chemo Treatment Plan</option>' +
                          '<option>Audiologist</option>' +
                          '<option>Renal Doctor Note</option>' +
                        '</select>' +
                      '</td>' +
                    '</tr>' +
                    '<tr>' +
                      '<td>Template Code</td>' +
                      '<td><input type="text" class="input_normal" /></td>' +
                    '</tr>' +
                    '<tr>' +
                      '<td>Template Name</td>' +
                      '<td><input type="text" class="input_title" /></td>' +
                    '</tr>' +
                    '<tr>' +
                    '</tr>' +
                  '</table>' +
            '<textarea id="clinicalNoteTextArea">' +
            '</textarea>' +
                  '<input type="button" value="Save" />' +
      '</div>';

Ext.onReady(function() {
	var currentTemplateDivHtml = $('.tempDiv').html();
	var clinicalNotePanel = Ext.create('Ext.panel.Panel', {
	    title: 'Clinical Note Templates',
	    width: 1200,
	    height: 900,
	    defaults: {
	        // applied to each contained panel
	        bodyStyle: 'padding:15px'
	    },
	    layout: {
	        // layout-specific configs go here
	        type: 'accordion',
	        titleCollapse: true,
	        animate: true,
	        activeOnTop: false
	    },
	    items: [{
	        title: 'My Templates',
	        html: '<div class="myTemplatesDiv"></div>'
	    },{
	        title: 'Current Working Template',
	        html: currentWorkingTemplateHtml
	    }],
	    renderTo: "contentDiv"
	});
})

$(document).ready(function () {
	prepareCkEditor();
	//$('.contentDiv').append('<span>hey hey</span>');
});
function prepareCkEditor(){

	ckeditor = CKEDITOR.replace( 'clinicalNoteTextArea', {
		customConfig : '../ckeditor_simple_config.js',
		language: 'en-us'
	});
}
 function templateComboBox_onSelect(control, record, index){
		ckeditor.setData(record.data.content_rich_text);
	}
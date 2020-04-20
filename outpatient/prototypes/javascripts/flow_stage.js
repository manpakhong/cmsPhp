 function deleteFlowStage(e){
    var controlObj = e.target;
    var tdObj = $(controlObj).parent();
    var trObj = $(tdObj).parent();
    $(trObj).remove();
 }

         Ext.onReady(function() {
            var states = Ext.create('Ext.data.Store', {
                fields: ['detail_code', 'display_text'],
                data : [
                    {"detail_code":"AB","display_text":"Booked"},
                    {"detail_code":"ABC","display_text":"Booking Confirmed"},
                    {"detail_code":"AA","display_text":"Arrived"},
                    {"detail_code":"EWI","display_text":"Walk-In Admission"},
                    {"detail_code":"EQT","display_text":"Queueing for Triage"},
                    {"detail_code":"EWS","display_text":"Waiting for Service"},
                    {"detail_code":"EWD","display_text":"Waiting for Doctor Consultation"},
                    {"detail_code":"EWN","display_text":"Waiting Nursing Service"},
                    {"detail_code":"EDN","display_text":"After Diagnosis without follow up"},
                    {"detail_code":"EDF","display_text":"After Diagnosis with follow up"},
                    {"detail_code":"ESN","display_text":"After Service without follow up"},
                    {"detail_code":"ESF","display_text":"After Service with follow up"},
                    {"detail_code":"ERE","display_text":"Refer to other examination"},
                    {"detail_code":"EWM","display_text":"Waiting for medicine receiving"},
                    {"detail_code":"EIP","display_text":"Refer to Inpatient"},
                    {"detail_code":"ED","display_text":"Depart"},
                    {"detail_code":"ESD","display_text":"System Batch Depart"}
                ]
            });
       


            var comboBox = Ext.create('Ext.form.ComboBox', {
                fieldLabel: 'Flow Stage',
                store: states,
                queryMode: 'local',
                valueField: 'display_text',
                width: 350,
                // renderTo: "panel",
                // Template for the dropdown menu.
                // Note the use of the "x-list-plain" and "x-boundlist-item" class,
                // this is required to make the items selectable.
                tpl: Ext.create('Ext.XTemplate',
                    '<ul class="x-list-plain"><tpl for=".">',
                        '<li role="option" class="x-boundlist-item">{detail_code} - {display_text}</li>',
                    '</tpl></ul>'
                ),
                // template for the content inside text field
                displayTpl: Ext.create('Ext.XTemplate',
                    '<tpl for=".">',
                        '{detail_code} - {display_text}',
                    '</tpl>'
                )
            });
  
            var flowStageTableHtml = 
            '<table class="flowStageTable" >' +
                '<thead>' +
                    '<tr>' +
                        '<td>' + '</td>' +
                        '<td>' + 'Flow Stage' + '</td>' +
                        '<td>' + 'Date Time' + '</td>' +
                    '</tr>' + 
                '</thead>' +
                '<tbody>' +
                '</tbody>' +
            '</table>';

            var flowStageForm = Ext.create('Ext.form.Panel', {
                renderTo: "panel",
                title: 'Flow Stage',
                height: 500,
                width: 1024,
                bodyPadding: 10,
                defaultType: 'textfield',
                layout: {
                    type: 'vbox',
                    align: 'column'
                },
                items: [
                    {                        
                        xtype: 'container',
                        layout: 'hbox',
                        items: [
                            comboBox, 
                            {
                                xtype: 'button',
                                text: 'Add',
                                name: "add",
                                listeners: {
                                    click: {
                                        fn: function(){
                                            //alert (comboBox.getRawValue());
                                            var htmlTableRecord = '<tr>' +
                                            '<td>' + '<input type="button" value="delete" onclick="deleteFlowStage(event)">'+  '</td>' +
                                            '<td>' + comboBox.getRawValue() + '</td>' +
                                            '<td>' + formatDateTime(new Date()) + '</td>' +
                                            '</tr>';
                                            $('.flowStageTable > tbody').append(htmlTableRecord);
                                        }
                                    }
                                }
                            }
                        ]
                    },                
                    {                        
                        xtype: 'container',

                        layout: 'column',
                            resizable:{
                            pinned:true,
                            dynamic:true
                        },
                        items: [
                            {
                                html: flowStageTableHtml,
                                width: 500,
                                height: 400
                            }
                        ]
                    }


                ]

            });      
            var displayPanel = Ext.create('Ext.Panel', {
               width        : 1024,
               height       : 768,
               
               layout       : {
                  type: 'hbox',
                  align: 'stretch',
                  padding: 1
               },
               // renderTo     : 'panel',
               defaults     : { flex : 1 }, 
               items        : [ 

               ]
            });
            // flowStageForm.add('comboBox');
})
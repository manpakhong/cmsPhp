         Ext.require([
            'Ext.grid.*',
            'Ext.data.*'
         ]);

         Ext.define('ConsultationListDataModel', {
            extend: 'Ext.data.Model',
            fields: [
               {name: 'hospitalId', mapping : 'hospitalId'},
               {name: 'nameTc', mapping : 'nameTc'},
               {name: 'patientName', mapping : 'patientName'},
               {name: 'date', mapping : 'date'},
               {name: 'time', mapping : 'time'},
               {name: 'age', mapping : 'age'},
               {name: 'gender', mapping : 'gender'},
               {name: 'flowStage', mapping : 'flowStage'},
               {name: 'remarks', mapping : 'remarks'},
               {name: 'resource', mapping : 'resource'},
               {name: 'service', mapping : 'service'}               
            ]
         });

         Ext.onReady(function() {
  			var listboxHtml = 'Flow Stage:<br/><select multiple>' +
  			'<option value="AC">Book Confirmed</option>' + 
  			'<option value="AR">Arrived</option>' + 
  			'<option value="EN">Arrived Not Seen</option>' + 
  			'<option value="EW">Waiting for Consultation</option>' + 
  			'</select>';

			var filterForm = Ext.create('Ext.form.Panel', {
			    renderTo: "panel",
			    title: 'Filter',
			    height: 220,
			    width: 1024,
			    bodyPadding: 10,
			    defaultType: 'textfield',
			    layout: {
	                type: 'vbox',
	                align: 'stretch'
            	},
            	items:[{
	            		xtype: 'container',
	            		layout: 'hbox',
	            		items: [
					        {
					        	xtype: 'textfield',
					            fieldLabel: 'Hospital Code',
					            name: 'hospital'
					        }	


	            		]
	            	},
	            	{
	            		xtype: 'container',
	            		layout: 'hbox',
	            		items: [
	            			{
		            			xtype: 'textfield',
					            fieldLabel: 'Service Centre',
					            name: 'serviceCentre'
					        }

					    ]
	            	},
		            {
	            		xtype: 'container',
	            		layout: 'hbox',
						bodyStyle: 'background-color:transparent;',          		
	            		items: [

	            			{
					            xtype: 'datefield',
					            fieldLabel: 'from',
					            name: 'episodeDateFrom'
					        },
					        {
					            xtype: 'datefield',
					            fieldLabel: 'to',
					            name: 'episodeDateTo'
					        }

					    ]
	            	},     
	            	{
	            		xtype: 'container',
	            		layout: 'hbox',
	            		items: [
					        {
					            html: listboxHtml,
					            xtype: "panel"
		        			}
					    ]
	            	},       	
		            {
	            		xtype: 'container',
	            		layout: 'hbox',
	            		items: [
							{
					        	xtype: 'button',
					        	text: 'Find',
					        	name: "find"
					        },
					        {
					        	xtype: 'button',
					        	text: 'Reset',
					        	name: "reset"
					        }
					    ]
	            	}   

            	]

			});         	

            // Store data
            var myData = [
               { hospitalId: "1", nameTc: "李錢廣", patientName : "Lee Ching Kong", date : "06/06/2018", time: "13:06:00", age: 31, gender : "M", flowStage: "Waiting for Consultation", remark: "", resource: "CHAN MING TAT 陳銘逹 (2622)", service: "CONSULTATION - RMO - TIER 1"},
               { hospitalId: "1", nameTc: "黃福關", patientName : "Wong Fuk Kwan", date : "30/08/1984", time: "13:19:00", age: 34, gender : "M", flowStage: "Waiting for Consultation", remark: "", resource: "CHAN MING TAT 陳銘逹 (2622)", service: "CONSULTATION - RMO - TIER 1"},
               { hospitalId: "1", nameTc: "李淑敏", patientName : "Lee Shuk Man", date : "07/06/1980", time: "13:25:00", age: 38, gender : "M", flowStage: "Waiting for Consultation", remark: "", resource: "CHAN MING TAT 陳銘逹 (2622)", service: "CONSULTATION - RMO - TIER 1"},    
            ];

            var consultationListGridStore = Ext.create('Ext.data.Store', {
               model: 'ConsultationListDataModel',
               data: myData
            });

            var consultationListGrid = Ext.create('Ext.grid.Panel', {
               store            : consultationListGridStore,
               columns          :
               [{ 
                  header: "Hospital ID",
                  dataIndex: 'hospitalId',	
                  id : 'hospitalId',    
                  flex:  .3,  			
                  sortable: true
               },{
                  header: "Chi Name", 
                  dataIndex: 'nameTc',
                  flex: .5, 
                  sortable: true
               },{
                  header: "Patient Name",
                  dataIndex: 'patientName',
                  flex: .8, 
                  sortable: true
               },{
                  header: "Date",
                  dataIndex: 'date',
                  flex: .6, 
                  sortable: true
               },{
                  header: "Time",
                  dataIndex: 'time',
                  flex: .5, 
                  sortable: true
               },{
                  header: "Age",
                  dataIndex: 'age',
                  flex: .2, 
                  sortable: true
               },{
                  header: "Gender",
                  dataIndex: 'gender',
                  flex: .3, 
                  sortable: true
               },{
                  header: "Current Stage",
                  dataIndex: 'flowStage',
                  flex: 1, 
                  sortable: true
               },{
                  header: "Remarks",
                  dataIndex: 'remarks',
                  flex: .5, 
                  sortable: true
               },{
                  header: "Resource",
                  dataIndex: 'resource',
                  flex: 1.2, 
                  sortable: true
               },{
                  header: "Service",
                  dataIndex: 'service',
                  flex: 1.5, 
                  sortable: true
               }],
               stripeRows       : true,
               title            : 'Consultation List',
               margins          : '0 2 0 0'
            });
            var displayPanel = Ext.create('Ext.Panel', {
               width        : 1024,
               height       : 768,
               
               layout       : {
                  type: 'hbox',
                  align: 'stretch',
                  padding: 5
               },
               renderTo     : 'panel',
               defaults     : { flex : 1 }, 
               items        : [ 

                  consultationListGrid
               ]
            });
  
         });
Ext.require(['*']);

var mainPanel;
Ext.application({
    name: 'DnD',
    launch: function() {
    	// initDragSource();
    	// initDropTarget();
    	initDragAndDropGrid();
    }
 });


Ext.onReady(function() {
	// initPanel();
	// createComponents();
    	// initDragSource();
    	// initDropTarget();
    	// initDragAndDropGrid();
}) // end Ext.ready


function initDragSource(){
        // Create an object that we'll use to implement and override drag behaviors a little later

        var overrides = {};

        // Configure the cars to be draggable
        var carElements = Ext.get('cars').select('div');
        Ext.each(carElements.elements, function(el) {
            var dd = Ext.create('Ext.dd.DD', el, 'carsDDGroup', {
                isTarget  : false
            });
            //Apply the overrides object to the newly created instance of DD
            Ext.apply(dd, overrides);
        });



}

function initDropTarget(){
        var truckElements = Ext.get('trucks').select('div');
        Ext.each(truckElements.elements, function(el) {
            var dd = Ext.create('Ext.dd.DD', el, 'trucksDDGroup', {
                isTarget  : false
            });
            Ext.apply(dd, overrides);
        });
}
function initPanel(){
	mainPanel = Ext.create('Ext.panel.Panel', {
	    // title: 'Hello',
	    width: 1024,
	    html: '<p>World!</p>',
	    renderTo: 'mainPanelDiv',
	    bodyStyle: 'padding: 5px',
	    layout: {
	    	type: 'vbox',
	    	pack: 'start',
	    	align: 'stretch',
	    }, items: [
	    	{
	    		title: 'item 1',
	    		html: 'item 1',
	    		flex: 1
	    	}
	    ]

	});
}

function initDragAndDropGrid(){
	            // Store data
            var myData = [
               { name : "Asha", age : "16", marks : "90" },
               { name : "Vinit", age : "18", marks : "95" },
               { name : "Anand", age : "20", marks : "68" },
               { name : "Niharika", age : "21", marks : "86" },
               { name : "Manali", age : "22", marks : "57" }
            ];
            
            // Creation of data model
            Ext.define('StudentDataModel', {
               extend: 'Ext.data.Model',
               fields: [
                  {name: 'name', mapping : 'name'},
                  {name: 'age', mapping : 'age'},
                  {name: 'marks', mapping : 'marks'}
               ]
            });
            
            // Creation of grid store
            var gridStore = Ext.create('Ext.data.Store', {
               model  : 'StudentDataModel',
               data   : myData
            });
            
            // Creation of first grid
            var grid = Ext.create('Ext.grid.Panel', {
               viewConfig: {
                  plugins: {
                     ddGroup: 'GridExample',
                     ptype: 'gridviewdragdrop',
                     enableDrop: false
                  }
               },
               enableDragDrop   : true,
               stripeRows       : true,
               width            : 300,
               margins          : '0 2 0 0',
               region           : 'west',
               title            : 'Student Data Grid',
               selModel         : Ext.create('Ext.selection.RowModel',{
                  singleSelect  : true
               }),
               store            : gridStore,
               columns          : 
               [{ 
                  header: "Student Name",
                  dataIndex: 'name',	
                  id : 'name',    
                  flex:  1,  			
                  sortable: true
               },{
                  header: "Age", 
                  dataIndex: 'age',
                  flex: .5, 
                  sortable: true
               },{
                  header: "Marks",
                  dataIndex: 'marks',
                  flex: .5, 
                  sortable: true
               }]
            });
            
            // Creation of form panel
            var formPanel = Ext.create('Ext.form.Panel', {
               region     : 'center',
               title      : 'Generic Form Panel',
               bodyStyle  : 'padding: 10px; background-color: #DFE8F6',
               labelWidth : 100,
               width      : 300,
               margins    : '0 0 0 3',
               
               items      : [{
                  xtype : 'textfield',
                  fieldLabel : 'Student Name',
                  name       : 'name'
               },{
                  xtype : 'textfield',
                  fieldLabel : 'Age',
                  name       : 'age'
               },{
                  xtype : 'textfield',
                  fieldLabel : 'Marks',
                  name       : 'marks'
               }]
            });
            
            // Creation of display panel for showing both grid and form
            var displayPanel = Ext.create('Ext.Panel', {
               width    : 600,
               height   : 200,
               layout   : 'border',
               renderTo : 'panel',
               bodyPadding: '5',
               items    : [grid, formPanel],
               bbar    : [
               '->',
               {
                  text    : 'Reset',
                  handler : function() {
                     gridStore.loadData(myData);
                     formPanel.getForm().reset();
                  }
               }]
            });
            var formPanelDropTargetEl =  formPanel.body.dom;
            
            //Creation of tager variable for drop.
            var formPanelDropTarget = Ext.create('Ext.dd.DropTarget', formPanelDropTargetEl, {
               ddGroup: 'GridExample',
               notifyEnter: function(ddSource, e, data) {
                  formPanel.body.stopAnimation();
                  formPanel.body.highlight();
               },
               notifyDrop  : function(ddSource, e, data) {
                  var selectedRecord = ddSource.dragData.records[0];
                  formPanel.getForm().loadRecord(selectedRecord);
                  ddSource.view.store.remove(selectedRecord);
                  return true;
               }
            });
}

// $(document).ready(function () {

// });

function createComponents(){
   for (var i=0; i<10; i++){ 
	 	var emailText = Ext.create('Ext.form.field.Text', {
							// renderTo: Ext.getBody(),
							name: 'email',
							fieldLabel: 'Email',
							allowBlank: false,
							vtype: 'email'
					   });

		var numberField =Ext.create('Ext.form.field.Number', {
							// renderTo: Ext.getBody(),
							name: 'Count',
							fieldLabel: 'Count',
							value: 0,
							maxValue: 10,
							minValue: 0
						});	 	
        mainPanel.add(emailText);    
		mainPanel.add(numberField);  
    }  
}
Ext.define('ClinicalNote.controller.ClinicalNoteController',{
    extend:'Ext.app.Controller',
    tag: 'ClinicalNoteController',
    models:['ClinicalNoteType'],
    stores:['ClinicalNoteTypeStore'],
    view:['clinicalnote.ClinicalNoteTypeGrid', 'clinicalnote.ClinicalNoteTypePanel'],
    refs: [{
            ref: 'clinicalnotetypegrid',
            selector: 'clinicalnotetypegrid'
          },
          {
            ref: 'clinicalnotetypepanel',
            selector: 'clinicalnotetypepanel'
          }


    ],
    init:function(){
    	console.log(this.tag + '-> init Controller');
    	//Ext.create('ClinicalNote.view.Viewport');
    	this.control({
    		'clinicalnotetypegrid':{
    			selectionchange: this.gridSelectionChange,
    			viewready: this.onViewReady
    		}
    	})
    },
    gridSelectionChange: function(model, records){

    },
    onViewReady: function(grid){
      grid.
    }

});

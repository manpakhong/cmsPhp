Ext.define('ClinicalNote.store.ClinicalNoteTypeStore',{
    extend: 'Ext.data.ArrayStore',
    model: 'ClinicalNote.model.ClinicalNoteType',
    autoload: true,
    proxy:{
        type: 'ajax',
        // url: GLOBAL_AJAX_PATH + PORTLET_NAMESPACE,
        method: 'POST',
		    url: 'data/clinicalNoteTypeData.json',
        reader: {
            type: 'json',
            root: 'clinicalNoteTypeList'
        }
    }
    data: [
      ['AB', 'Full ab'],
      ['CD', 'Full cd']
    ]
});

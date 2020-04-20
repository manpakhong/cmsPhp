Ext.define('ClinicalNote.model.ClinicalNoteType',{
    extend: 'Ext.data.Model',
    idProperty: 'id',
    fields: [
    	{name: 'id', type: 'int'},
        {name: 'detailCode', type: 'string'},
        {name: 'codeDetailDisplayText',  type: 'string'}
    ]
});

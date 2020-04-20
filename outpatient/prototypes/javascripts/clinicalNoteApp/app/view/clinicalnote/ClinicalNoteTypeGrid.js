Ext.define('ClinicalNote.view.ClinicalNoteTypeGrid', {
	extend: 'Ext.panel.Panel',
	alias: 'widget.clinicalnotetypegrid',
	xtype: 'clinicalnotetypegrid',
		title : 'Company Data',
    viewConfig: {
        stripeRows: true
    },
    initComponent: function() {
        this.store = 'ClinicalNoteTypeStore';
        this.columns = [{
            text     : 'Code',
            flex     : 1,
            sortable : false,
            dataIndex: 'detailCode'
        },
        {
            text     : 'Clinical Note Type',
            width    : 75,
            sortable : true,
            dataIndex: 'codeDetailDisplayText'
        }];
    }
});

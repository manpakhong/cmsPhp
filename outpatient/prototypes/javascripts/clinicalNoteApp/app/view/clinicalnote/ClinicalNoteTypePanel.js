Ext.define('ClinicalNote.view.ClinicalNoteTypePanel' ,{
    extend: 'Ext.form.Panel',
    alias : 'widget.clinicalnotetypepanel',
    xtype : 'clinicalnotetypepanel',
    frame: true,
    title: 'Clinical Note Type',
    bodyPadding: 5,
    layout: 'column',    // Specifies that the items will now be arranged in columns
    fieldDefaults: {
        labelAlign: 'left',
        msgTarget: 'side'
    },
    items: [{
        xtype: 'clinicalnotetypegrid',
        columnWidth: .70
    }]
});

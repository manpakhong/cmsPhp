Ext.define('ClinicalNote.view.Viewport', {
    extend: 'Ext.Viewport',
    layout: 'fit',
    requires: [
      'ClinicalNote.view.clinicalnote.ClinicalNoteTypeGrid',
      'ClinicalNote.view.clinicalnote.ClinicalNoteTypePanel'
    ],
    initComponent: function(){
      var me = this;
      Ext.apply(me, {
          items: [
              {
                  xtype: 'clinicalnotetypepanel'
              }
          ]
      });
      me.callParent(arguments);
    }
});

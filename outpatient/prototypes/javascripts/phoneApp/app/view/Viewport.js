Ext.define('MyApp.view.Viewport', {
 extend : 'Ext.container.Viewport',
 requires : ['MyApp.view.DemoGrid'],
 initComponent:function(){

   this.items = [{
    xtype:'DemoGrid'
   }];

      this.callParent(arguments);
 }
});

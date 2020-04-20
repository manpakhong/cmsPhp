Ext.application({
 name:'MyApp',
 appFolder: 'javascripts/phoneApp/app',
 autoCreateViewport : true,
 modals:['MyApp.model.DemoModel'],
 stores:['MyApp.store.DemoStore'],
 controllers:['DemoController'],
 launch : function(){
  alert('Your first application launched with ExtJS MVC..!');
        }
});

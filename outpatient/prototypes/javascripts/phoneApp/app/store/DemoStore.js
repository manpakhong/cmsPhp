Ext.define('MyApp.store.DemoStore', {
    extend: 'Ext.data.Store',
    model: 'MyApp.model.DemoModel',
    //it will load your store on start up automatically.
 autoLoad : true,
    proxy: {
        type: 'ajax',
        //url of your data. this may be from your server in your real application.
  url : 'javascripts/phoneApp/app/data/demoData.json',
        reader: {
         //type of data..ExtJS also support xml format.
            type: 'json',
            root: 'data'
        }
    }
});

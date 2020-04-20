Ext.define('MyApp.controller.DemoController', {
 extend:'Ext.app.Controller',
 init:function() {
  /**
   * We will handle all events of components in init method of controller.
   * */
  this.control({
   /**
    * you can see usage control method over here.
    * http://docs.sencha.com/extjs/4.2.2/#!/api/Ext.app.Controller-method-control.
    **/
   'DemoGrid':{
    'itemclick':function(grid, record, item, index, e, eOpts){
     alert('You clicked row with index : '+index);
    }
   }
  });
 }
});

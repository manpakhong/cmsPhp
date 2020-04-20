Ext.define('MyApp.model.DemoModel', {
 extend : 'Ext.data.Model',
 /**
  * Here there will be fields array.
  **/
 fields : [{
  name : 'name', //this property will indicate your data field property
  mapping : 'name' //this property will indicate dataIdex in grid.
 },{
  name : 'rollNo',
  mapping : 'rollNo'
 }]
});

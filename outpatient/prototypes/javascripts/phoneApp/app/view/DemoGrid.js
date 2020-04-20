Ext.define('MyApp.view.DemoGrid',{
 extend:'Ext.grid.Panel',
 alias:'widget.DemoGrid',
 initComponent:function()
 {
  this.store='MyApp.store.DemoStore';
  this.title='Hello World with ExtJS MVC';
  this.border=true;
  this.width=300;
  this.height=100;
  this.columns=[{
   text:'Name',
   dataIndex:'name',//this property will map with your model which used in store.
   flex:1
  },{
   text:'Roll No',
   dataIndex:'rollNo',
   flex:1
  }];
  this.callParent(arguments);
 }
});

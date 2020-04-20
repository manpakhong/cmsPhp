/*Defining the name space as the UserStore.js id inside controller folder within app folder*/
Ext.define('UserListDemo.controller.UserController', {
    extend : 'Ext.app.Controller',
      init: function() {
        this.control({
            /*Reference of the grid name*/
            'userGrid': {
                /*Double click event*/
                itemdblclick: this.editRow
            }, 
        });
    },
    editRow : function(){
        Ext.Msg.alert("Message", "Double click event on the row!");
    }
});
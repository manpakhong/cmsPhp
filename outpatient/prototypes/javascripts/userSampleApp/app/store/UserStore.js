/*Defining the name space as the UserStore.js id inside store folder within app folder*/
Ext.define('UserListDemo.store.UserStore', {
    extend: 'Ext.data.Store',
    /*Model for the store*/
    model: 'UserListDemo.model.UserModel',
    autoLoad: true,
    proxy:{
        type: 'ajax',
        method: 'POST',
        url : 'data/data.json',
        reader :
        {
            type : 'json'
        }
    }
});
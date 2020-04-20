/*Defining the name space as the UserModel.js id inside model folder within app folder*/
Ext.define('UserListDemo.model.UserModel', {
    extend: 'Ext.data.Model',
    idProperty: 'id',
    fields: [
    {
        name: 'id',
        type: 'int'
    },
    {
        name: 'name',
        type: 'String'
    },
    {
        name: 'address',
        type: 'String'
    },
    {
        name: 'contact',
        type: 'String'
    },
    {
        name: 'telephone',
        type: 'String'
    }]
});
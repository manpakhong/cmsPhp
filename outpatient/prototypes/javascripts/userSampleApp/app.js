
Ext.Loader.setConfig({
    enabled: true
});
Ext.application({   
    /*Global name used with all of the application's classes nested inside it*/
    name: 'UserListDemo',
    /*The folder which contains all the components*/
    appFolder: 'javascripts/userSampleApp/app',
    /*Load view*/
    views: [
        'user.UserGrid'
    ],
    /*Load Model*/
    models: [
        'UserModel'
    ],
    /*Load Store*/
    stores: [
        'UserStore'
     ],
     /*Load Controller*/
    controllers: [
        'UserController'
     ],
     /*Launch the app*/
    launch: function() {
        Ext.create('Ext.container.Viewport',{
            style:{"background-color":"#ffffff", 
                "border-color": "#c6c6c6"},
            items:[
              {xtype: 'userGrid'}
            ]
        });
    }
});
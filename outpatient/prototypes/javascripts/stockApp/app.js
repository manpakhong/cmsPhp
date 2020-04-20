Ext.application({
    name: 'Ext4Example',
    tag: 'app',
    appFolder: 'javascripts/stockApp/app',
    controllers: [
        'Stocks'
    ],    
    init: function(){
			console.debug(this.tag + '-> init launch');
    },
    launch: function(){
      console.debug(this.tag + 'App is launched');
    },
    autoCreateViewport: true
});
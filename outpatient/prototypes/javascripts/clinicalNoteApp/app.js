Ext.application({
    name: 'ClinicalNote',
    tag: 'app',
    appFolder: 'javascripts/clinicalNoteApp/app',
    controllers: [
        'ClinicalNoteController'
    ],
    init: function(){
			console.debug(this.tag + '-> init launch');
    },
    launch: function(){
      console.debug(this.tag + 'App is launched');
    },
    autoCreateViewport: true
});

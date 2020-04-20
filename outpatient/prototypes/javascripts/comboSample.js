 var states = Ext.create('Ext.data.Store', {
    fields: ['code', 'name', 'chi_name'],
    data : [
        {"code":"0030", "name":"WONG CHO YIU", "chi_name":"王祖耀"},
        {"code":"0312", "name":"YEUNG KAI KIN", "chi_name":"楊啟健"},
        {"code":"0313", "name":"PANG WING LUK", "chi_name":"彭永祿"},
        {"code":"0734", "name":"NG SHI HON", "chi_name":"伍仕漢"},
        {"code":"0837", "name":"AU YEONG CHI KEUNG", "chi_name":"歐陽志強"},
        {"code":"1390", "name":"LEUNG FUNG HA BELINDA", "chi_name":"梁鳳霞"}
    ]
});

var comboBox = Ext.create('Ext.form.ComboBox', {
    fieldLabel: 'Choose Care Provider',
    store: states,
    queryMode: 'local',
    displayField: 'name',
    valueField: 'code',
    anyMatch: true,
    editable:true,
    width: 500,
    tpl:['<table width="100%">',
            '<tr class="',
             Ext.baseCSSPrefix, 'grid-group-hd ',
             Ext.baseCSSPrefix, 'grid-group-title">',
                '<th>Code </th>',
                '<th>Name </th>',
                '<th>Chi. Name </th>',                
            '</tr>',
            '<tpl for=".">',
            '<tr class="x-boundlist-item">',
                '<td>{code}</td>',
                '<td>{name}</td>',
                '<td>{chi_name}</td>',                
            '</tr>',
            '</tpl>',
       '</table>']
});

Ext.onReady(function() {
    var displayPanel = Ext.create('Ext.Panel', {
       width        : 500,
       height       : 100,
       
       layout       : {
          type: 'hbox',
          align: 'center',
          padding: 5
       },
       renderTo     : 'panel',
       defaults     : { flex : 1 }, 
       items        : [ 
          comboBox
       ]
    });
});
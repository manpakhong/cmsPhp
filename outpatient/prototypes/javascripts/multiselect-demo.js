Ext.onReady(function() {
var store = Ext.create('Ext.data.TreeStore', {
    root: {
        expanded: false,
        children: [
            { text: 'detention', leaf: true },
            { text: 'homework', expanded: true},
            { text: 'buy lottery tickets', leaf: true }
        ]
    }
});

Ext.create('Ext.tree.Panel', {
    title: 'Flow Stage',
    width: 200,
    height: 200,
    store: store,
    rootVisible: false,
    renderTo: Ext.getBody()
});
})
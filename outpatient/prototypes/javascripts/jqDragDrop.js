var designObject;

function createDesignObject(){
  var designObject = {};
  designObject.layoutType = '';
  designObject.layoutArray0 = [];
  designObject.layoutArray1 = [];
  return designObject;
}


var draggableGrid = (function ($) {
  theme = $.jqx.theme;
  function init(){
    
  };
  return{
    init: init
  }
} ($));

$(document).ready(function () {
  designObject = createDesignObject();
    initScreen();
    addListeners();
    // initTestDrag();
    // addTestDragListeners();
    // draggableGrid.init();
    // $('#sourceDiv').jqxDragDrop({ dropTarget: $('#dropTargetDiv'), revert: true });
});

function initTestDrag(){
  $('#testDiv').jqxDragDrop({ 
        appendTo: 'body',  
        dragZIndex: 99999,
        dropAction: 'none',
        dropTarget: $('#targetTestDiv'),
        initFeedback: function (feedback) {

        }
    });

}
function removeAndAdd(e){
  // $('#testAreaDiv').html('');
    $('#testAreaDiv').empty();
  var html = '<div id="targetTestDiv" style="width: 100px; height: 100px; background-color:green">';
  $('#testAreaDiv').append(html);
  initTestDrag();
  // addTestDragListeners();
}
function addTestDragListeners(){
  $('#testDiv').mouseenter(function () {
      $(this).fadeTo(100, 0.9);
  });
  $('#testDiv').mouseleave(function () {
      $(this).fadeTo(100, 1);
  });
  $('#testDiv').bind('dropTargetEnter', function (event) {
      $(event.args.target).css('border', '2px solid #000');

      $(this).jqxDragDrop('dropAction', 'none');
  });
  $('#testDiv').bind('dropTargetLeave', function (event) {
      $(event.args.target).css('border', '2px solid #aaa');

      $(this).jqxDragDrop('dropAction', 'default');
  });
  $('#testDiv').bind('dragEnd', function (event) {
      // $('#cart').css('border', '2px dashed #aaa');
      var userDefineLayoutDivHtml = '<div id="userDefineLayoutDiv"></div>';

  });
  $('#testDiv').bind('dragStart', function (event) {
      // var tshirt = $(this).find('.draggable-demo-product-header').text(),
      //     price = $(this).find('.draggable-demo-product-price').text().replace('Price: $', '');
      // $('#cart').css('border', '2px solid #aaa');
      // price = parseInt(price, 10);
      $(this).jqxDragDrop('data', {
          // price: price,
          // name: tshirt
      });
  });
}

function initOnePieceLayout(){
 var onePieceHtml = '<div data-container="OnePiecePanel" id="onePiecePaneDiv"><div id="dropTargetUserCustomizedDiv0" class="dropTargetUserCustomizedDiv"></div></div>';


  $('#userDefineLayoutDiv').append(onePieceHtml);
           // the 'layout' JSON array defines the internal structure of the layout
            var layout = [{
                type: 'layoutGroup',
                orientation: 'horizontal',
                items: [{
                    type: 'tabbedGroup',
                    title: 'Left',
                    width: '100%',
                    items: [{
                        type: 'layoutPanel',
                        title: 'One Piece',
                        contentContainer: 'OnePiecePanel',
                        initContent: function () {

                        }
                    }]
                }]
            }];
            $('#userDefineLayoutDiv').jqxLayout(
              { 
                width: 768, 
                height: 800,
                layout: layout
              }

            );
}
function initHorizontalLayout(){
  var leftDivHtml = '<div data-container="LeftPanel" id="leftPaneDiv"><div id="dropTargetUserCustomizedDiv0" class="dropTargetUserCustomizedDiv"></div></div>';
  var rightDivHtml = '<div data-container="RightPanel" id="rightPaneDiv"><div id="dropTargetUserCustomizedDiv1" class="dropTargetUserCustomizedDiv"></div></div>';

  $('#userDefineLayoutDiv').append(leftDivHtml);
  $('#userDefineLayoutDiv').append(rightDivHtml);
           // the 'layout' JSON array defines the internal structure of the layout
            var layout = [{
                type: 'layoutGroup',
                orientation: 'horizontal',
                items: [{
                    type: 'tabbedGroup',
                    title: 'Left',
                    width: '50%',
                    items: [{
                        type: 'layoutPanel',
                        title: 'Left',
                        contentContainer: 'LeftPanel',
                        initContent: function () {

                        }
                    }]
                }, {
                    type: 'tabbedGroup',
                    width: '50%',
                    items: [{
                        type: 'layoutPanel',
                        title: 'Right',
                        contentContainer: 'RightPanel',
                        initContent: function () {

                        }
                    }]
                }]
            }];
            $('#userDefineLayoutDiv').jqxLayout(
              { 
                width: 768, 
                height: 800,
                layout: layout
              }

            );
}

function initVerticalLayout(){
  var leftDivHtml = '<div data-container="TopPanel" id="topPaneDiv"><div id="dropTargetUserCustomizedDiv0" class="dropTargetUserCustomizedDiv"></div></div>';
  var rightDivHtml = '<div data-container="BottomPanel" id="bottomPaneDiv"><div id="dropTargetUserCustomizedDiv1" class="dropTargetUserCustomizedDiv"></div></div>';

  $('#userDefineLayoutDiv').append(leftDivHtml);
  $('#userDefineLayoutDiv').append(rightDivHtml);
           // the 'layout' JSON array defines the internal structure of the layout
            var layout = [{
                type: 'layoutGroup',
                orientation: 'vertical',
                items: [{
                    type: 'tabbedGroup',
                    title: 'Left',
                    width: '50%',
                    height: '50%',
                    items: [{
                        type: 'layoutPanel',
                        title: 'Top',
                        contentContainer: 'TopPanel',
                        initContent: function () {

                        }
                    }]
                }, {
                    type: 'tabbedGroup',
                    width: '50%',
                    height: '50%',
                    items: [{
                        type: 'layoutPanel',
                        title: 'Bottom',
                        contentContainer: 'BottomPanel',
                        initContent: function () {

                        }
                    }]
                }]
            }];
            $('#userDefineLayoutDiv').jqxLayout(
              { 
                width: 768, 
                height: 800,
                layout: layout
              }

            );
}

var isObservationAttributiesInit = false;
function initLayout(){
            // the 'layout' JSON array defines the internal structure of the layout
            var layout = [{
                type: 'layoutGroup',
                orientation: 'horizontal',
                items: [{
                    type: 'tabbedGroup',
                    title: 'Tools',
                    width: '40%',
                    items: [{
                        type: 'layoutPanel',
                        title: 'Layouts',
                        contentContainer: 'ToolboxPanel'
                    }, {
                        type: 'layoutPanel',
                        title: 'Data Fields',
                        contentContainer: 'DataFieldsPanel',
                        initContent: function(){
                            initObservationAttributies();
                            isObservationAttributiesInit = true;
                        }
                    }]
                }, {
                    type: 'tabbedGroup',
                    width: '60%',
                    minWidth: 200,
                    items: [{
                        type: 'layoutPanel',
                        title: 'Content',
                        contentContainer: 'ContentPanel',
                        initContent: function () {
                          var images = $('#toolsDiv img');
                          $(images).each(function(index){
                            var imageObj = $(this);
                            imageObj.jqxDragDrop({ 
                                appendTo: 'body',  
                                dragZIndex: 99999,
                                dropAction: 'none',
                                dropTarget: $('#dropTargetDiv'),
                                revert: true,
                                initFeedback: function (feedback) {

                                    // feedback.height(this.height());
                                    // feedback.width(this.width());
                                    feedback.css('background', '#aaa');
                                }
                            });


                          })
                        }
                    }]
                }]
            }];
            $('#jqxLayout').jqxLayout(
              { 
                width: 1280, 
                height: 900,
                layout: layout
              }

            );
}



function initGridCellsDragAndDrop(){
      // select all grid cells.
    var gridCells = $('#observationAttributiesGrid').find('.jqx-grid-cell');
    // gridCells = $('#findObservation').find('.jqx-grid-cell');
    $(gridCells).each(function(index){
      console.debug('1:' + index + ": " + $(this).text());
    })

    //initialize the jqxDragDrop plug-in. Set its drop target to the second Grid.
    gridCells.jqxDragDrop({ 
        appendTo: 'body',  
        dragZIndex: 99999,
        dropAction: 'none',
        dropTarget: $('.dropTargetUserCustomizedDiv'),
        initFeedback: function (feedback) {
            var rowsindexes = $("#observationAttributiesGrid").jqxGrid('getselectedrowindexes');
            feedback.height(25);
            feedback.width( $("#observationAttributiesGrid").width());
            feedback.css('background', '#aaa');
        }
    });

    addListenersForObservationAttributiesGridCells(gridCells);
}
var dropTargetUserCustomizedEnter = false;
var dropTargetUserCustomizedCurrentObject;
function addListenersForObservationAttributiesGridCells(gridCells){
  gridCells.mouseenter(function () {
      $(this).fadeTo(100, 0.9);
  });
  gridCells.mouseleave(function () {
      $(this).fadeTo(100, 1);
  });
  gridCells.bind('dropTargetEnter', function (event) {
      $(event.args.feedback);
      $(event.args.target).css('border', '2px solid #000');
      dropTargetUserCustomizedEnter = true;
      dropTargetUserCustomizedCurrentObject = $(event.args.target);
      $(this).jqxDragDrop('dropAction', 'none');
  });
  gridCells.bind('dropTargetLeave', function (event) {
      $(event.args.feedback);
      $(event.args.target).css('border', '2px solid #aaa');
      dropTargetUserCustomizedEnter = false;
      dropTargetUserCustomizedCurrentObject = undefined;
      $(this).jqxDragDrop('dropAction', 'default');
  });
  gridCells.bind('dragEnd', function (event) {
      if (dropTargetUserCustomizedEnter){
        dropTargetUserCustomizedCurrentObject.append('<span>' + event.args.target.innerText + '</span><input type="text"></input><br/>');
      }
      dropTargetUserCustomizedEnter = false;
      dropTargetUserCustomizedCurrentObject = undefined;
  });
  gridCells.bind('dragStart', function (event) {
      // var tshirt = $(this).find('.draggable-demo-product-header').text(),
      //     price = $(this).find('.draggable-demo-product-price').text().replace('Price: $', '');
      // $('#cart').css('border', '2px solid #aaa');
      // price = parseInt(price, 10);
      $(this).jqxDragDrop('data', {
          // price: price,
          // name: tshirt
      });
  });

}
var LAYOUT_TYPE_ONE_PIECE_LAYOUT = 'onePieceLayout';
var LAYOUT_TYPE_HORIZONTAL_LAYOUT = 'horizontalLayout';
var LAYOUT_TYPE_VERTICAL_LAYOUT = 'verticalLayout';
var layoutOnTarget = false;
function addListeners(){
  $('#jqxLayout').on('create', function () { 


  });
  $('#jqxLayout').on('pin', function (event) {
      var pinnedItem = event.args.item;

  }); 

  $('.toolsDraggable').mouseenter(function () {
      $(this).fadeTo(100, 0.9);
  });
  $('.toolsDraggable').mouseleave(function () {
      $(this).fadeTo(100, 1);
  });
  $('.toolsDraggable').bind('dropTargetEnter', function (event) {
      $(event.args.target).css('border', '2px solid #000');
      layoutOnTarget = true;
      $(this).jqxDragDrop('dropAction', 'none');
  });
  $('.toolsDraggable').bind('dropTargetLeave', function (event) {
      $(event.args.target).css('border', '2px solid #aaa');
      layoutOnTarget = false;
      $(this).jqxDragDrop('dropAction', 'default');
  });
  $('.toolsDraggable').bind('dragEnd', function (event) {
      // $('#cart').css('border', '2px dashed #aaa');
      var userDefineLayoutDivHtml = '<div id="userDefineLayoutDiv"></div>';
      if (layoutOnTarget) {
          // addItem({ price: event.args.price, name: event.args.name });
          // onCart = false;
          if(event.target.id == 'onePieceLayout'){
            console.debug('onePieceLayout');
            $('.dropTargetUserCustomizedDiv').empty();
            $('#userDefineLayoutDiv').empty();
            $('#userDefineLayoutDiv').jqxLayout("destroy");


            $('#dropTargetDiv').empty();
            $('#dropTargetDiv').append(userDefineLayoutDivHtml);


            initOnePieceLayout();
            if (isObservationAttributiesInit){
              initGridCellsDragAndDrop();
            }
            designObject.layoutType = LAYOUT_TYPE_ONE_PIECE_LAYOUT;
          } else if (event.target.id == 'horizontalLayout'){
            console.debug('horizontalLayout');
            $('.dropTargetUserCustomizedDiv').empty();
            $('#userDefineLayoutDiv').empty();
            $('#userDefineLayoutDiv').jqxLayout("destroy");

            
            $('#dropTargetDiv').empty();
            $('#dropTargetDiv').append(userDefineLayoutDivHtml);
            initHorizontalLayout();
            if (isObservationAttributiesInit){
              initGridCellsDragAndDrop();
            }
            designObject.layoutType = LAYOUT_TYPE_HORIZONTAL_LAYOUT;
          } else if (event.target.id == 'verticalLayout'){
            console.debug('verticalLayout');
            $('.dropTargetUserCustomizedDiv').empty();
            $('#userDefineLayoutDiv').empty();            
            $('#userDefineLayoutDiv').jqxLayout("destroy");

            
            $('#dropTargetDiv').empty();
            $('#dropTargetDiv').append(userDefineLayoutDivHtml);
            initVerticalLayout();
            if (isObservationAttributiesInit){
              initGridCellsDragAndDrop();
            }
            designObject.layoutType = LAYOUT_TYPE_VERTICAL_LAYOUT;
          }
      }
  });
  $('.toolsDraggable').bind('dragStart', function (event) {
      // var tshirt = $(this).find('.draggable-demo-product-header').text(),
      //     price = $(this).find('.draggable-demo-product-price').text().replace('Price: $', '');
      // $('#cart').css('border', '2px solid #aaa');
      // price = parseInt(price, 10);
      $(this).jqxDragDrop('data', {
          // price: price,
          // name: tshirt
      });
  });

}
function initScreen(){
    initLayout();

}
function initObservationAttributies(){
    getArrayDataSource();
}
function getArrayDataSource(){
  var object;
  var jsonString = $.get('ob_data.json', function(data) {
    object = JSON.parse(data);

    initObservatonAttributiesGridAfterDataLoad(object);
    initGridCellsDragAndDrop();

  }, 'text');
}
function initObservatonAttributiesGridAfterDataLoad(jobjectArray){
    var columns = [
          { text: 'Name (Eng)', datafield: 'nameEng', width: 250},
          { text: 'Name (Chi)', datafield: 'nameChi', width: 250 },
          { text: 'Unit', datafield: 'unitTypeString', width: 90 },
          { text: 'measurable?', datafield: 'measurableAttribute', width: 120 }
        ];
    var data =
    {
        localdata: jobjectArray,
        datafields: [
            { name: 'id'},    
            { name: 'nameEng'},
            { name: 'nameChi'},
            { name: 'unitTypeString'},
            { name: 'measurableAttribute'},
        ],
        id: 'id',
        datatype: "array"
    };

    // var source =
    // {
    //     localdata: generatedata(10),
    //     datafields:
    //     [
    //         { name: 'firstname', type: 'string' },
    //         { name: 'lastname', type: 'string' },
    //         { name: 'productname', type: 'string' }
    //     ],
    //     datatype: "array"
    // };

    var dataAdapter = new $.jqx.dataAdapter(data);

    $('#observationAttributiesGrid').jqxGrid({
          source: dataAdapter,
          theme: 'classic',
          width: '1024px',
          ready: function()
          {
              $("#observationAttributiesGrid").jqxGrid('selectrow', 0);
              $("#observationAttributiesGrid").jqxGrid('selectrow', 1);
          },
          // selectionmode: 'multiplerows',
          autoheight: true,    
          columns: columns
        });
    }

    function saveDesign(){

      var spans0 = $('#dropTargetUserCustomizedDiv0').find('span');
      var layoutArray0 = [];
      var layoutArray1 = [];
      $(spans0).each(function(index){
        console.debug(index + ": " + $(this).text());
        layoutArray0.push($(this).text());
      })
      var spans1 = $('#dropTargetUserCustomizedDiv1').find('span');
      $(spans1).each(function(index){
        console.debug(index + ": " + $(this).text());
        layoutArray1.push($(this).text());
      })
        designObject.layoutArray0 = layoutArray0;
        designObject.layoutArray1 = layoutArray1;
        var postContent = JSON.stringify(designObject);
        alert(postContent);
    }

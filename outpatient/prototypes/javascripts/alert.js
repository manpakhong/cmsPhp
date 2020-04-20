var alertWindow = (function () {
    //Adding event listeners
    function _addEventListeners() {
        // $('#resizeCheckBox').on('change', function (event) {
            // if (event.args.checked) {
                // $('#window').jqxWindow('resizable', true);
            // } else {
                // $('#window').jqxWindow('resizable', false);
            // }
        // });
        // $('#dragCheckBox').on('change', function (event) {
            // if (event.args.checked) {
                // $('#window').jqxWindow('draggable', true);
            // } else {
                // $('#window').jqxWindow('draggable', false);
            // }
        // });
        // $('#showWindowButton').click(function () {
            // $('#window').jqxWindow('open');
        // });
        // $('#hideWindowButton').click(function () {
            // $('#window').jqxWindow('close');
        // });
    };
    //Creating all page elements which are jqxWidgets
    function _createElements() {
        // $('#showWindowButton').jqxButton({ width: '70px' });
        // $('#hideWindowButton').jqxButton({ width: '65px' });
        // $('#resizeCheckBox').jqxCheckBox({ width: '185px', checked: true });
        // $('#dragCheckBox').jqxCheckBox({ width: '185px', checked: true });
    };
    //Creating the demo window
    function _createWindow() {
    	   var contentDiv = $('.contentDiv');
       var offset = contentDiv.offset();
        $('.alertWindowDiv').jqxWindow({
            position: { x: offset.left + 50, y: offset.top + 50} ,
            showCollapseButton: true, maxHeight: 1024, maxWidth: 700, minHeight: 200, minWidth: 200, height: 300, width: 500,
            initContent: function () {
                $('#tab').jqxTabs({ height: '100%', width:  '100%' });
                $('#window').jqxWindow('focus');
            }
        });
    };
    return {
        config: {
            dragArea: null
        },
        init: function () {
            //Creating all jqxWindgets except the window
            _createElements();
            //Attaching event listeners
            _addEventListeners();
            //Adding jqxWindow
            _createWindow();
        }
        
    };
} ());

$(document).ready(function () {
	alertWindow.init();
	$('.alertWindowHeader').css('background', 'red');
});


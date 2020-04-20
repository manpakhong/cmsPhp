var SYSTEM_MESSAGE_DIALOG_ERROR = "SYSTEM_MESSAGE_DIALOG_ERROR";
var SYSTEM_MESSAGE_DIALOG_WARNING = "SYSTEM_MESSAGE_DIALOG_WARNING";
var SYSTEM_MESSAGE_DIALOG_INFO = "SYSTEM_MESSAGE_DIALOG_INFO";

function systemMessageDialog_onclick(e){
	var messageInput = $('.messageInput').val();
	var optionValue = $('.systemMessageSelect').val();
	systemMessageWindow.change(optionValue, messageInput);
}

var systemMessageWindow = (function () {
    //Adding event listeners
    function _addEventListeners(systemMessageType) {
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
    function _createElements(systemMessageType) {
        // $('#showWindowButton').jqxButton({ width: '70px' });
        // $('#hideWindowButton').jqxButton({ width: '65px' });
        // $('#resizeCheckBox').jqxCheckBox({ width: '185px', checked: true });
        // $('#dragCheckBox').jqxCheckBox({ width: '185px', checked: true });
    };
    //Creating the demo window
    function _createWindow(systemMessageType, message) {
    	   var contentDiv = $('.contentDiv');
       var offset = contentDiv.offset();
       var systemMessageWindowDiv = $('.systemMessageWindowDiv');
        $(systemMessageWindowDiv).jqxWindow({
            position: { x: offset.left + 50, y: offset.top + 50} ,
            showCollapseButton: true, maxHeight: 1024, maxWidth: 700, minHeight: 200, minWidth: 200, height: 200, width: 500,
            initContent: function () {
                // $('#tab').jqxTabs({ height: '100%', width:  '100%' });
                // $('#window').jqxWindow('focus');
            }
        });
        
		_change(systemMessageType, message);
    };
    function _change(systemMessageType, message){
    		var systemMessageWindowTitleImage = $('.systemMessageWindowTitleImage');
        var systemMessageWindowContentImage = $('.systemMessageWindowContentImage');
        var systemMessageSpan = $('.systemMessageSpan');
        var systemMessageDisplaySpan = $('.systemMessageDisplaySpan');
        if (systemMessageType == SYSTEM_MESSAGE_DIALOG_ERROR){
        		$(systemMessageWindowTitleImage).attr('src', './images/if_Error_16.png');
        		$(systemMessageWindowContentImage).attr('src', './images/if_Error_32.png');
        		$(systemMessageSpan).text('System Error');
        } else if (systemMessageType == SYSTEM_MESSAGE_DIALOG_WARNING){
			$(systemMessageWindowTitleImage).attr('src', './images/if_Warning_16.png');
			$(systemMessageWindowContentImage).attr('src', './images/if_Warning_32.png');
			$(systemMessageSpan).text('System Warning');
        } else if (systemMessageType == SYSTEM_MESSAGE_DIALOG_INFO){
        		$(systemMessageWindowTitleImage).attr('src', './images/if_Info_16.png');
        		$(systemMessageWindowContentImage).attr('src', './images/if_Info_32.png');
        		$(systemMessageSpan).text('System Information');
        }
        
        $(systemMessageDisplaySpan).text(message);
    };
    return {
        config: {
            dragArea: null
        },
        init: function (systemMessageType, message) {
            //Creating all jqxWindgets except the window
            _createElements(systemMessageType);
            //Attaching event listeners
            _addEventListeners(systemMessageType);
            //Adding jqxWindow
            _createWindow(systemMessageType,message);
        },
        change: function(systemMessageType, message){
        		_change(systemMessageType, message);
        }
    };
} ());

$(document).ready(function () {
	var systemMessage = "This is system message!";
	systemMessageWindow.init(SYSTEM_MESSAGE_DIALOG_INFO, systemMessage);
	systemMessageWindow.change(SYSTEM_MESSAGE_DIALOG_WARNING, "change message");
});


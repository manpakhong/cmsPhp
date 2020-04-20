/**
 * @author Dave Man
 */
$(document).ready(function(){ 

	$(document).tooltip( {
		hide: { effect: "explode", duration: 800 },
		show: { effect: "blind", duration: 800 },
		  classes: {
		    "ui-tooltip": "highlight"
		  },
		  create: function( event, ui ) {

		  },
		  open: function( event, ui ) {

		  }
		
		});

}); // end $(document).ready

function openMindMapTip(e){
	$( "#mindMap" ).dialog({
		width: 500	
	});
}

function openDrawingTip(e){
	$( "#drawings" ).dialog({
		width: 500	
	});
}
function openCodeTypeTip(e){
		$( "#codeType" ).dialog({
		width: 500	
	});
}

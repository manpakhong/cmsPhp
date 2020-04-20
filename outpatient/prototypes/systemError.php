<!DOCTYPE html>
<html>
   <title>System Error</title>
   <head>

      
      <link href = "./javascripts/jqwidgets/6.0.5/jqwidgets/styles/jqx.base.css" rel = "stylesheet" />      
      <link href = "./javascripts/jqwidgets/6.0.5/jqwidgets/styles/jqx.classic.css" rel = "stylesheet" />  
      <link href = "./css/systemError.css" rel = "stylesheet" /> 
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/scripts/jquery-1.11.1.min.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxcore.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxdata.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxbuttons.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxwindow.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxscrollbar.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxmenu.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxgrid.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxgrid.selection.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxexpander.js"></script>                
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxgrid.columnsresize.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxlistbox.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxlayout.js"></script>      
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxribbon.js"></script>        
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxdropdownlist.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxdragdrop.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxtree.js"></script>      
      <script type = "text/javascript" src = "./javascripts/json3.min.js"></script> 
      <script type = "text/javascript" src = "./javascripts/generatedata.js"></script>  
      <script type = "text/javascript" src = "./javascripts/demo.js"></script>  
      <script type = "text/javascript" src = "./javascripts/systemError.js"></script>  
      <!-- <base href="/"> -->   
<!--       <script type = "text/javascript" src = "./javascripts/ckeditor/ckeditor.js"></script>   -->
   </head>
   <body class='default'>
   	<select class="systemMessageSelect">
   		<option value="SYSTEM_MESSAGE_DIALOG_INFO">Info</option>
   		<option value="SYSTEM_MESSAGE_DIALOG_WARNING">Warning</option>
   		<option value="SYSTEM_MESSAGE_DIALOG_ERROR">Error</option>
   	</select>
   	<input class="messageInput" type="text" value="System message input to function."/><br/>
   	<input type="button" onclick="systemMessageDialog_onclick(event)" value="Change" />
	<div class="contentDiv" >
		<div class="systemMessageWindowDiv">
		    <div class="systemMessageWindowHeader">
		        <span>
		            <img class="systemMessageWindowTitleImage" src="./images/if_Error_16.png" alt="system error image" style="margin-right: 15px" /><span class="systemMessageSpan">System Error</span>
		        </span>
		    </div>
		    <div style="overflow: hidden;" id="systemMessageWindowContent" style="text-align: center;">
		    		<div style="padding-left: 10px;position:relative;top:30%;">
		        		<img class="systemMessageWindowContentImage" src="./images/if_Error_24.png" alt="system error image" style="margin-right: 15px" />
		        		<span style="font-size: large" class="systemMessageDisplaySpan">System Error!</span>
		    		</div>
		    </div>
		</div>
	</div>
   </body>
</html>
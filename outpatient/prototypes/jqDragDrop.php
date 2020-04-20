<!DOCTYPE html>
<html>
   <title>Triage</title>
   <head>

      
      <link href = "./javascripts/jqwidgets/6.0.5/jqwidgets/styles/jqx.base.css" rel = "stylesheet" />      
      <link href = "./javascripts/jqwidgets/6.0.5/jqwidgets/styles/jqx.classic.css" rel = "stylesheet" />  
      <link href = "./css/jqDragDrop.css" rel = "stylesheet" /> 
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/scripts/jquery-1.11.1.min.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxcore.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxdata.js"></script>
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxbuttons.js"></script>
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
      <script type = "text/javascript" src = "./javascripts/jqwidgets/6.0.5/jqwidgets/jqxdata.js"></script>
      <script type = "text/javascript" src = "./javascripts/json3.min.js"></script> 
      <script type = "text/javascript" src = "./javascripts/generatedata.js"></script>  
      <script type = "text/javascript" src = "./javascripts/demo.js"></script>  
      <script type = "text/javascript" src = "./javascripts/jqDragDrop.js"></script>  
      <!-- <base href="/"> -->   
<!--       <script type = "text/javascript" src = "./javascripts/ckeditor/ckeditor.js"></script>   -->
   </head>
   <body class='default'>
    <div id="jqxLayout">
        <!--The panel content divs can have a flat structure-->
        <!--autoHideGroup-->
        <div data-container="ToolboxPanel">
            <div id="toolsDiv">
               <img id="onePieceLayout" class="toolsDraggable" src="images/full-display-layout-interface-square-symbol_128.png" alt="one piece">
               <img id="horizontalLayout" class="toolsDraggable" src="images/two-columns-layout_128.png" alt="horizontal">
               <img id="verticalLayout" class="toolsDraggable" src="images/two-rows-layout_128.png" alt="vertical">
            </div>
         </div>
        <div data-container="DataFieldsPanel">
            <div id="observationAttributiesGrid"></div>
         </div>
        <!--right tabbedGroup-->
        <div data-container="ContentPanel" id="contentPanelDiv">
               <div id="dropTargetDiv" style="width:1024px;height:500px;background-color:lightblue">
                  <div id="userDefineLayoutDiv">
                  </div>
                   <span style="position: relative; left: 50%; margin-left: -50px; top: 40px;">Drop Here</span>
               </div>
        </div>
    </div>
<!--     <div id="testDiv" style="width: 30px; height: 30px; background-color:red">
   </div>
   <div id="testAreaDiv">
      <div id="targetTestDiv" style="width: 100px; height: 100px; background-color:yellow">
      </div>
   </div>
   <input type="button" onclick="removeAndAdd(event)" value="remove and add"/> -->
   <input type="button" onclick="saveDesign(event)" value="Save Design" />
   </body>
</html>
<!DOCTYPE html>
<html>
   <title>Main Layout</title>
   <head>

      <link href = "./javascripts/extjs/6.2.0/classic/theme-classic/resources/theme-classic-all.css" rel = "stylesheet" />
      <!-- <link href = "./javascripts/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css" rel = "stylesheet" /> -->     
      <link href = "./css/main_layout.css" rel = "stylesheet" /> 
      <link href = "./css/jquery-ui.css" rel = "stylesheet" />       
      <link href = "./css/jEasyUi/themes/default/easyui.css" rel = "stylesheet" /> 
      <link href = "./css/jEasyUi/themes/icon.css" rel = "stylesheet" /> 
      <script type = "text/javascript" src = "./javascripts/extjs/6.2.0/ext-all.js"></script>
      <script type = "text/javascript" src = "./javascripts/extjs/6.2.0/packages/charts/modern/charts.js"></script>
      <script type = "text/javascript" src = "./javascripts/jquery-3.3.1.js"></script>
      <script type = "text/javascript" src = "./javascripts/jquery-ui.js"></script>         
      <script type = "text/javascript" src = "./javascripts/jEasyUi/jquery.easyui.min.js"></script>            
              

      <script type = "text/javascript" src = "./javascripts/main_layout.js"></script>  
      <!-- <base href="/"> -->   
      <script type = "text/javascript" src = "./javascripts/ckeditor/ckeditor.js"></script>   
   </head>
   <body>
   <div style="margin:1px 1px 1px 1px;">
      <img src="./images/logo.png" alt="The logo of Hong Kong Baptist Hospital">
   </div>
    <div class="easyui-layout" style="width:1350px;height:800px;">
        <div data-options="region:'north'" style="height:55px">
            <div>
               <table class="patient_episode_table">
                 <tr>
                     <td class="label_td">Patient ID</td>
                     <td class="value_td">1</td>
                     <td class="label_td">Episode ID</td>
                     <td class="value_td">23</td>
                     <td colspan="4"></td>
                  </tr>                  
                  <tr>
                     <td class="label_td">Name</td>
                     <td class="value_td">Lee Ching Kong 李錢廣</td>
                     <td class="label_td">Gender</td>
                     <td class="value_td">M</td>
                     <td class="label_td">Age</td>
                     <td class="value_td">31</td>
                     <td class="label_td">Sex</td>
                     <td class="value_td">M</td>
                  </tr>
 
               </table>
            </div>
        </div>
        <div data-options="region:'south',split:true" style="height:50px;"></div>
        <div data-options="region:'east',split:true" title="Reports" style="width:200px;"></div>
        <div data-options="region:'west',split:true" title="Patient History" style="width:250px;">
            <div class="easyui-accordion" data-options="fit:true,border:false">
              <div title="Triage" style="padding:10px;">

                  <div id="triageTabs" >

                  </div>

              </div>                  
              <div title="Diagnosis" style="padding:10px;">
                  content1
              </div>
              <div title="Notes" data-options="selected:true" style="padding:10px;">
                  content2
              </div>
              <div title="Orders" style="padding:10px">
                  content3
              </div>
            </div>       

        </div>
        <div data-options="region:'center',title:'Doctor Note',iconCls:'icon-ok'">
            <table>
              <tr>
                <td>Status</td>
                <td>            
                  <select>
                    <option>Authorised</option>
                    <option>Entered</option>
                    <option>Corrected</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Type</td>
                <td>
                  <select>
                    <option>Optometrist</option>
                    <option>Dr Note</option>
                    <option>Nurse Note</option>
                    <option>Physiotherapy Note</option>
                    <option>Speech Therapy Note</option>
                    <option>Dietician Note</option>   
                    <option>Pastoral Services Note</option>
                    <option>Radiology Note</option>
                    <option>Care Plan Note</option>
                    <option>RT Note</option>
                    <option>Pharmacy Note</option>
                    <option>Eye Centre Note</option>
                    <option>Chemo Initial Assessment</option>
                    <option>Chemo Progress Notes</option>
                    <option>Chemo Treatment Plan</option>
                    <option>Audiologist</option>
                    <option>Renal Doctor Note</option>                                                             
                  </select>                  
                </td>                
              </tr>
              <tr>
                <td>Care Provider</td>
                <td><div id="careProviderCombo"></div></td>
              </tr>
              <tr>
                <td>Reason for Correction</td>
                <td><input type="text" /></td>
              </tr>
              <tr>
                <td>Dr. Note Template</td>
                <td><div id="doctorNoteCombo"></div></td>
              </tr>
              <tr>

              </tr>
            </table>
            <textarea id="doctorNoteEditor">
            </textarea>
            <input type="button" value="Save" />
        </div>
    </div>


   </body>
</html>
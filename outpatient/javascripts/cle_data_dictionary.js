/**
 * @author Dave Man
 */
$(document).ready(function(){ 
	var currentUrl = window.location.href;
	var url = "sampledata/prefix.json";
    var source =
    {
        dataFields: [
            { name: 'Description', type: 'string' },
            { name: 'Prefix', type: 'string' },
            { name: 'Type', type: 'string' }
        ],
        id: 'PrefixID',
        dataType: "json",
        url: url
    };
    var parentDataAdapter = new $.jqx.dataAdapter(source);
    var parents = parentDataAdapter.records;
    
    
    var classdetailsurl = "sampledata/class.json"
    var  classesSource =
    {
        dataFields: [
            { name: 'PrefixID', type: 'string' },
            { name: 'ClassName', type: 'string' },
            { name: 'TableName', type: 'string' }
        ],
        dataType: "json",
        url: classdetailsurl,
        async: false
    };
    var childDataAdapter = new $.jqx.dataAdapter(classesSource, { autoBind: true });
    var classes = childDataAdapter.records;

    var nestedTables = new Array();
    // create nested DataTable.
    var initRowDetails = function (id, row, element, rowinfo) {
        element.append($("<div style='margin: 10px;'></div>"));
        var nestedDataTable = $(element.children()[0]);
        var filterGroup = new $.jqx.filter();
        var filter_or_operator = 1;
        var filterValue = id;
        var filterCondition = 'equal';
        var filter = filterGroup.createfilter('stringfilter', filterValue, filterCondition);
        // fill the orders depending on the id.
        var ordersbyid = [];
        for (var m = 0; m < classes.length; m++) {
            var result = filter.evaluate(classes[m]["PrefixID"]);
            if (result)
                ordersbyid.push(classes[m]);
        }
        var classesSource = { 
        	dataFields: [
//	            { name: 'PrefixID', type: 'string' },
	            { name: 'ClassName', type: 'string' },
	            { name: 'TableName', type: 'string' }
	        ],
            id: 'ClassID',
            localdata: ordersbyid
        }
        if (nestedDataTable != null) {
            var nestedDataTableAdapter = new $.jqx.dataAdapter(classesSource);
            nestedDataTable.jqxDataTable({
                pageable: true,
                pageSize: 4,
                source: nestedDataTableAdapter, width: 820, height: 190,
                pageable: true,
                columns: [
//                    { text: 'Prefix ID', dataField: 'PrefixID', width: 250 },
                    { text: 'Class Name', dataField: 'ClassName', width: 250 },
                    { text: 'Table Name', dataField: 'TableName' }
               ]
            });
            // store the nested Data Tables and use the Employee ID as a key.
            nestedTables[id] = nestedDataTable;
        }
    }
   
    // create jqxDataTable.
    $("#dataTable").jqxDataTable(
    {
        width: 1024,
        source: source,
        pageable: true,
        pageSize: 20,
        rowDetails: true,
        initRowDetails: initRowDetails,
        ready: function () {
            $("#dataTable").jqxDataTable('showDetails', 1);
        },
        columns: [
              { text: 'Description', dataField: 'Description', width: 250 },
              { text: 'Prefix', dataField: 'Prefix', width: 250 },
              { text: 'Type', dataField: 'Type' }
          ]
    });
    
}); // end $(document).ready


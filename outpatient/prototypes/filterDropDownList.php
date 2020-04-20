<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>In this demo, the Grid is used in a combination with the jqxDropDownButton
        widget.</title>
    <link rel="stylesheet" href="./javascripts/jqwidgets/6.0.5/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxgrid.columnsresize.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxdropdownbutton.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxgrid.pager.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/scripts/demos.js"></script>
    <script type="text/javascript" src="./javascripts/generatedata.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // prepare the data
            var data = generatedata(100);

            var source =
            {
                localdata: data,
                datafields:
                [
                    { name: 'firstname', type: 'string' },
                    { name: 'lastname', type: 'string' },
                    { name: 'productname', type: 'string' },
                    { name: 'quantity', type: 'number' },
                    { name: 'price', type: 'number' }
                ],
                datatype: "array",
                updaterow: function (rowid, rowdata) {
                    // synchronize with the server - send update command   
                }
            };

            var dataAdapter = new $.jqx.dataAdapter(source);

            $("#jqxgrid").jqxGrid(
             {
                 width: 550,
                 source: dataAdapter,
                 pageable: true,
                 autoheight: true,
                 columnsresize: true,
                 columns: [
                   { text: 'First Name', columntype: 'textbox', datafield: 'firstname', width: 90 },
                   { text: 'Last Name', datafield: 'lastname', columntype: 'textbox', width: 90 },
                   { text: 'Product', columntype: 'dropdownlist', datafield: 'productname', width: 180 },
                   { text: 'Quantity', datafield: 'quantity', width: 70, cellsalign: 'right' },
                   { text: 'Price', datafield: 'price', cellsalign: 'right', cellsformat: 'c2' }
                 ]
             });

            // initialize jqxGrid
            $("#jqxdropdownbutton").jqxDropDownButton({
                width: 150, height: 25
            });

            $("#jqxgrid").on('rowselect', function (event) {
                var args = event.args;
                var row = $("#jqxgrid").jqxGrid('getrowdata', args.rowindex);
                var dropDownContent = '<div style="position: relative; margin-left: 3px; margin-top: 5px;">' + row['firstname'] + ' ' + row['lastname'] + '</div>';
                $("#jqxdropdownbutton").jqxDropDownButton('setContent', dropDownContent);
            });

            $("#jqxgrid").jqxGrid('selectrow', 0);

        });
        function removeWaterMark(){
        	 	$('.jqx-chart-legend-text').text('');
        }
    </script>
</head>
<body class='default'>
    <div id='jqxWidget'>
        <div id="jqxdropdownbutton">
            <div style="border-color: transparent;" id="jqxgrid">
            </div>
        </div>
    </div>
</body>
</html>
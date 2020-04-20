<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>Custom Element Chart MultipleSeries</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />
    <meta name="description" content="This is an example of a Stacked Column Series in combination with Spline Area Series in Custom Element Chart" />
    <link rel="stylesheet" href="./javascripts/jqwidgets/6.0.5/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="./javascripts/jqwidgets/6.0.5/styles/demos.css" type="text/css" />
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/scripts/webcomponents-lite.min.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxcore.elements.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxdraw.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxchart.core.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="./javascripts/jqwidgets/6.0.5/scripts/demos.js"></script>
    <script>
        var sampleData =
            [
                { Day: '1', BloodPressureDown: 80, BloodPressureUp: 120, PurseRate: 70, PulsePressure: 40 },
                { Day: '2', BloodPressureDown: 85, BloodPressureUp: 125, PurseRate: 71, PulsePressure: 40 },
                { Day: '3', BloodPressureDown: 98, BloodPressureUp: 130, PurseRate: 78, PulsePressure: 32 },
                { Day: '4', BloodPressureDown: 92, BloodPressureUp: 135, PurseRate: 80, PulsePressure: 38 },
                { Day: '5', BloodPressureDown: 81, BloodPressureUp: 125, PurseRate: 72, PulsePressure: 49 },
                { Day: '6', BloodPressureDown: 85, BloodPressureUp: 130, PurseRate: 88, PulsePressure: 52 },
                { Day: '7', BloodPressureDown: 90, BloodPressureUp: 135, PurseRate: 73, PulsePressure: 51 },
                { Day: '8', BloodPressureDown: 80, BloodPressureUp: 120, PurseRate: 70, PulsePressure: 40 },
                { Day: '9', BloodPressureDown: 85, BloodPressureUp: 125, PurseRate: 71, PulsePressure: 40 },
                { Day: '10', BloodPressureDown: 98, BloodPressureUp: 130, PurseRate: 78, PulsePressure: 32 },
                { Day: '11', BloodPressureDown: 92, BloodPressureUp: 135, PurseRate: 80, PulsePressure: 38 },
                { Day: '12', BloodPressureDown: 82, BloodPressureUp: 125, PurseRate: 72, PulsePressure: 49 },
                { Day: '13', BloodPressureDown: 81, BloodPressureUp: 130, PurseRate: 88, PulsePressure: 52 },
                { Day: '14', BloodPressureDown: 90, BloodPressureUp: 135, PurseRate: 73, PulsePressure: 51 },
                { Day: '15', BloodPressureDown: 98, BloodPressureUp: 135, PurseRate: 73, PulsePressure: 51 },
                { Day: '16', BloodPressureDown: 80, BloodPressureUp: 120, PurseRate: 70, PulsePressure: 40 },
                { Day: '17', BloodPressureDown: 85, BloodPressureUp: 125, PurseRate: 71, PulsePressure: 40 },
                { Day: '18', BloodPressureDown: 88, BloodPressureUp: 130, PurseRate: 78, PulsePressure: 32 },
                { Day: '19', BloodPressureDown: 79, BloodPressureUp: 135, PurseRate: 80, PulsePressure: 38 },
                { Day: '20', BloodPressureDown: 81, BloodPressureUp: 125, PurseRate: 72, PulsePressure: 49 },
                { Day: '21', BloodPressureDown: 80, BloodPressureUp: 130, PurseRate: 88, PulsePressure: 52 },
                { Day: '22', BloodPressureDown: 95, BloodPressureUp: 135, PurseRate: 73, PulsePressure: 51 },
                { Day: '23', BloodPressureDown: 70, BloodPressureUp: 130, PurseRate: 70, PulsePressure: 40 },
                { Day: '24', BloodPressureDown: 85, BloodPressureUp: 120, PurseRate: 71, PulsePressure: 40 },
                { Day: '25', BloodPressureDown: 98, BloodPressureUp: 130, PurseRate: 78, PulsePressure: 32 },
                { Day: '26', BloodPressureDown: 92, BloodPressureUp: 135, PurseRate: 80, PulsePressure: 38 },
                { Day: '27', BloodPressureDown: 81, BloodPressureUp: 122, PurseRate: 72, PulsePressure: 49 },
                { Day: '28', BloodPressureDown: 98, BloodPressureUp: 130, PurseRate: 88, PulsePressure: 52 },
                { Day: '29', BloodPressureDown: 96, BloodPressureUp: 135, PurseRate: 73, PulsePressure: 51 },
                { Day: '30', BloodPressureDown: 95, BloodPressureUp: 140, PurseRate: 73, PulsePressure: 51 }
            ];
        JQXElements.settings['chartSettings'] =
            {
                title: 'Blood Pressure, Pulse Rate, and Pulse Pressure Record',
                description: '',
                enableAnimations: true,
                showLegend: true,
                padding: { left: 5, top: 5, right: 5, bottom: 5 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 10 },
                source: sampleData,
                colorScheme: 'scheme05',
                borderLineColor: '#888888',
                xAxis:
                {
                    dataField: 'Day',
                    unitInterval: 1,
                    tickMarks:
                    {
                        visible: true,
                        interval: 1,
                        color: '#888888'
                    },
                    gridLines: {
                        visible: false,
                        interval: 1,
                        color: '#888888'
                    },
                    axisSize: 'auto'
                },
                valueAxis:
                {
                    visible: true,
                    unitInterval: 10,
                    minValue: 0,
                    maxValue: 160,
                    title: { text: 'mmHg' },
                    tickMarks: { color: '#888888' },
                    gridLines: { color: '#888888' },
                    axisSize: 'auto'
                },
                seriesGroups:
                [
                    {
                        type: 'rangecolumn',
                        series: [
                        		{ dataFieldTo: 'BloodPressureUp', displayText: 'BloodPressure', dataFieldFrom: 'BloodPressureDown', opacity: 1 }

                        ]
                    },
                    {
                        type: 'scatter',
                        columnsGapPercent: 50,
                        seriesGapPercent: 5,
                        series: [
                            { dataField: 'PurseRate', displayText: 'PurseRate' },
                            { dataField: 'PulsePressure', displayText: 'PulsePressure' }
                        ]
                    }
                ]
            };
                $(document).ready(function () {
                		//removeWaterMark();
                })
        function removeWaterMark(){
			var pattern = /www.jqwidgets.com/gi;

        	 	var watermark = $('.jqx-chart-legend-text').text();
        	 	var matches_array = watermark.match(pattern);
        	 	var res = watermark.replace("www.jqwidgets.com", "");
        	 	alert(res);
        	 	$('.jqx-chart-legend-text').text(res);
        	 	
        }
    </script>
</head>
<body>
   
   <jqx-chart settings="chartSettings" style="width:850px; height:500px;"></jqx-chart>
    <div class="example-description">
       
    </div>
</body>
</html>
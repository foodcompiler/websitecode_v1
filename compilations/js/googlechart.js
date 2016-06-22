var chart, fullChartData;

google.charts.load('current', { packages: ['corechart'] });
google.charts.setOnLoadCallback(drawChart);

function drawChart(category, type) {
    $("#LoadingImage").show();

    if (!category) {
        category = $("#categorySelector").val();
    }

    var jsonData = $.ajax({
        url: "php/chart-query.php",
        data: {
            category: category,
            type: type
        },
        dataType: "json",
        async: false
    }).responseText;

    fullChartData = JSON.parse(jsonData);

    var chartObj = [];
    chartObj.push([['Dish Name'], ['Rating'], {type:'string', role:'tooltip', 'p': {'html': true}}]);

    for (var i = 0; i < fullChartData.length; i++) {
        var mainObj = fullChartData[i];
        var completeDishNameString = mainObj['dish_name'] + ' (ID: ' + mainObj['dish_id'] + ')';
        
        var customTooltipText;
        if(mainObj['price'] == 0) 
            customTooltipText = mainObj['restaurant'] + ', ' + mainObj['location'] + ' (Tap to know more)';
        else 
            customTooltipText = mainObj['restaurant'] + ', ' + mainObj['location'] + ', Rs. ' + mainObj['price'] + '/-' + ' (Tap to know more)';
        
        chartObj.push([completeDishNameString, parseInt(mainObj['rating']), customTooltipText]);
    }

    var dataSet = google.visualization.arrayToDataTable(chartObj);
    chart = new google.visualization.ColumnChart(document.getElementById('chart-div'));
    
    var options = {
        tooltip: {
            isHtml: true
        },
        animation: {
            startup: true,
            duration: 1000,
            easing: 'in',
            showTextEvery: 1
        },
        chartArea: {
            top: 65,
            height: '40%' 
        },
        vAxis: {
            minValue: 0,
            maxValue: 5,
            gridlines: {
                count: 6
            },
            ticks: [{ v: 5, f: 'Delicious' }, { v: 3, f: 'Average' }, { v: 1, f: 'Bad' }]
        },
        bar: {groupWidth: 50},
        width: dataSet.getNumberOfRows() * 100
    };
    
    chart.draw(dataSet, options);

    google.visualization.events.addListener(chart, 'ready', function () {
        $("#LoadingImage").hide();
    });

    google.visualization.events.addListener(chart, 'select', chartSelectHandler);
}

function chartSelectHandler() {
    var selectedData = chart.getSelection(), row, item;
    row = selectedData[0].row;

    var dishId = fullChartData[row]['dish_id'];
    
    var win = window.open('../dishDetails/index.html#' + dishId, '_blank');
    win.focus();
}
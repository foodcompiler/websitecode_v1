var chart, data;

google.charts.load('current', { packages: ['corechart'] });
google.charts.setOnLoadCallback(drawChart);

function drawChart(category, type) {
    $("#LoadingImage").show();

    if (!category) {
        category = $("#categorySelector").val();
    }

    var options = {
        animation: {
            startup: true,
            duration: 1000,
            easing: 'in',
        },
        vAxis: {
            title: 'Ratings',
            minValue: 0,
            maxValue: 5,
            gridlines: {
                count: 6
            }
        },
        hAxis: { 
            title: 'Dish name'
        } 
    };

    var jsonData = $.ajax({
        url: "php/chart-query.php",
        data: {
            category: category,
            type: type
        },
        dataType: "json",
        async: false
    }).responseText;

    var parsedJsonData = JSON.parse(jsonData);

    var chartObj = [];
    chartObj.push([['Dish Name'], ['Rating']]);

    for (var i = 0; i < parsedJsonData.length; i++) {
        var mainObj = parsedJsonData[i];
        chartObj.push([mainObj['dish_id'], parseInt(mainObj['rating'])]);
    }

    var dataSet = google.visualization.arrayToDataTable(chartObj);
    var chart = new google.visualization.ColumnChart(document.getElementById('chart-div'));
    chart.draw(dataSet, options);

    google.visualization.events.addListener(chart, 'ready', function () {
        $("#LoadingImage").hide();
    });

    google.visualization.events.addListener(chart, 'select', chartSelectHandler);
}

function chartSelectHandler() {
    var selectedData = chart.getSelection(), row, item;
    row = selectedData[0].row;
    item = data.getValue(row, 0);

    console.log(item);

    switch (row) {
        case 0: {

            break;
        }
    }

    // var win = window.open("http://www.zomato.com", '_blank');
    // win.focus();
}
var chart, fullChartData;

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
            minValue: 0,
            maxValue: 5,
            gridlines: {
                count: 6
            },
            ticks: [{ v: 5, f: 'Delicious' }, { v: 3, f: 'Average' }, { v: 1, f: 'Bad' }]
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

    fullChartData = JSON.parse(jsonData);

    var chartObj = [];
    chartObj.push([['Dish Name'], ['Rating']]);

    for (var i = 0; i < fullChartData.length; i++) {
        var mainObj = fullChartData[i];
        var completeDishNameString = mainObj['dish_name'] + ' (ID: ' + mainObj['dish_id'] + ')';
        chartObj.push([completeDishNameString, parseInt(mainObj['rating'])]);
    }

    var dataSet = google.visualization.arrayToDataTable(chartObj);
    chart = new google.visualization.ColumnChart(document.getElementById('chart-div'));
    chart.draw(dataSet, options);

    google.visualization.events.addListener(chart, 'ready', function () {
        $("#LoadingImage").hide();
    });

    google.visualization.events.addListener(chart, 'select', chartSelectHandler);
}

function chartSelectHandler() {
    var selectedData = chart.getSelection(), row, item;
    row = selectedData[0].row;

    var restaurantLink = fullChartData[row]['restaurant_link'];

    if (restaurantLink) {
        var win = window.open(restaurantLink, '_blank');
        win.focus();
    }
    else {
        alert('Place not available on Zomato. Email foodcompiler@gmail.com to know more');
    }
}
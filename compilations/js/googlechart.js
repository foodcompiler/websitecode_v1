google.charts.load('current', { packages: ['corechart'] });
google.charts.setOnLoadCallback(drawChart);

function drawChart(category, type) {
    $("#LoadingImage").show();

    if (!type) {
        type = DEFAULT_FOOD_TYPE;
    }

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
            }
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

    if (jsonData.length > 2) {
        var chart = new google.visualization.ColumnChart(document.getElementById('chart-div'));
        var data = new google.visualization.DataTable(jsonData);
        google.visualization.events.addListener(chart, 'ready', function () {
            $("#LoadingImage").hide();
        });

        chart.draw(data, options);
    }
    else {
        var chart_div = document.getElementById('chart-div');
        chart_div.innerHTML = "<h1>No data available for this category</h1>";
    }
}
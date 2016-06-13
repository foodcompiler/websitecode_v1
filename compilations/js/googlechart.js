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
        chart = new google.visualization.ColumnChart(document.getElementById('chart-div'));
        data = new google.visualization.DataTable(jsonData);
        google.visualization.events.addListener(chart, 'ready', function () {
            $("#LoadingImage").hide();
        });

        google.visualization.events.addListener(chart, 'select', chartSelectHandler);

        chart.draw(data, options);
    }
    else {
        var chart_div = document.getElementById('chart-div');
        chart_div.innerHTML = "<h1>No data available for this category</h1>";
    }
}

function chartSelectHandler() {
    var selectedData = chart.getSelection(), row, item;
    row = selectedData[0].row;
    // item = data.getValue(row,0);

    // switch (row) {
    //     case 0: {
            
    //         break;
    //     }
    // }
    
    var win = window.open("http://www.zomato.com", '_blank');
    win.focus();
}
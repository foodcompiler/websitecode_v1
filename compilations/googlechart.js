google.charts.load('current', {packages: ['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var category = window.location.hash.substring(1);
    var options = {
        animation: {
            startup:true,
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
        url: "chart-query.php",
        data: {
            category: category
        },
        dataType: "json",
        async: false
    }).responseText;

    var data = new google.visualization.DataTable(jsonData);
    var chart = new google.visualization.ColumnChart(document.getElementById('chart-div'));
    chart.draw(data, options);
}
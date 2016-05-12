/*
- find selected radio button (selectedType)

- selectedType will go in sql query as SELECT name, restaurant, rating from food_all WHERE
category=category && type=selectedType

*/

function typeChanged() {
	
    var options = {
        animation: {
            startup:true,
            duration: 1000,
            easing: 'out',
        },
        vAxis: {
            minValue: 0,
            maxValue: 5,
            gridlines: {
                count: 6
            }
        }
    };

    var category = window.location.hash.substring(1);
	console.log(category);
	
	var type = document.querySelector('input[name="type"]:checked').value;
	console.log(type);

	var jsonData = $.ajax({
        url: "chart-query.php",
        data: {
        	category: category, 
            selectedType: type
        },
        dataType: "json",
        async: false
    }).responseText;

    var data = new google.visualization.DataTable(jsonData);
    var chart = new google.visualization.ColumnChart(document.getElementById('chart-div'));
    chart.draw(data, options);
}
